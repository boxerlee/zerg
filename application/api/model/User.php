<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 20/5/2018
 * Time: 23:38
 */

namespace app\api\model;


class User extends BaseModel
{
    public static function getByOpenID($openid){
        $user = self::where('openid','=',$openid)
            ->find();
        return $user;
    }
}