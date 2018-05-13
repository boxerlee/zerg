<?php

namespace app\api\model;

use think\Model;

class BaseModel extends Model
{
    //对有url字段的数据表，均可以执行该操作,但通过对读取器进行改写，使之变成仅在子模型中生效
    protected function prefixImgUrl($value,$data)
    {
        $finalUrl = $value;
        if ($data['from'] == 1){
            $finalUrl = config('setting.img_prefix') . $value;
        }
        return $finalUrl;
    }
}

