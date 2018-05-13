<?php

namespace app\api\model;

use think\Model;

class Image extends Model
{
    //隐藏字段
    protected $hidden = ['id','from','delete_time','update_time'];
}
