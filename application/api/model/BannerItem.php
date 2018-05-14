<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 13/5/2018
 * Time: 00:19
 */

namespace app\api\model;


use think\Model;

class BannerItem extends BaseModel
{
    //隐藏字段
    protected $hidden = ['id','img_id','banner_id','update_time','delete_time'];

    public function img(){
        return $this->belongsTo('Image','img_id','id');
    }
}

