<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 19/5/2018
 * Time: 19:28
 */

namespace app\api\model;


class Category extends BaseModel
{

    //隐藏字段
    protected $hidden = ['delete_time','update_time','create_time'];

    public function img()
    {
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }


    public static function getAllCategories()
    {
        $categories = self::all([],'img');
        return $categories;
    }
}