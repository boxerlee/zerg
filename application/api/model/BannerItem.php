<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 13/5/2018
 * Time: 00:19
 */

namespace app\api\model;


use think\Model;

class BannerItem extends Model
{
    public function img(){
        return $this->belongsTo('Image','img_id','id');
    }
}