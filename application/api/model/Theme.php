<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 14/5/2018
 * Time: 22:24
 */

namespace app\api\model;


class Theme extends BaseModel
{
    protected $hidden = [
        'delete_time',
        'update_time',
        'topic_img_id',
        'head_img_id'
    ];

    public function topicImg()
    {
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }

    public function headImg()
    {
        return $this->belongsTo('Image', 'head_img_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany('Product', 'theme_product', 'product_id', 'theme_id');
    }


    public static function getThemeByIDs($ids)
    {
        $result = self::with(['topicImg', 'headImg'])->select($ids);
        return $result;
    }

    public static function getThemeWithProducts($id)
    {
        $themes = self::with('products,topicImg,headImg')->find($id);
        return $themes;

    }
}