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
    public function topicImg()
    {
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }

    public function headImg()
    {
        return $this->belongsTo('Image', 'head_img_id', 'id');
    }
}