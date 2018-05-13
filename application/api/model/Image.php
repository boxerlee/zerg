<?php

namespace app\api\model;

use think\Model;

class Image extends Model
{
    //隐藏字段
    protected $hidden = ['id', 'from', 'delete_time', 'update_time'];

//    读取器
    public function getUrlAttr($value)
    {
        return config('setting.img_prefix') . $value;
    }

}
