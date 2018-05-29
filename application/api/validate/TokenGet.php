<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 20/5/2018
 * Time: 23:21
 */

namespace app\api\validate;


class TokenGet extends BaseValidate
{
    protected $rule = [
        'code' => 'require|isNotEmpty'
    ];

    protected $message = [
        'code' => '没有code还想获取token，做梦！'
    ];

}