<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 21/4/2018
 * Time: 23:13
 */

namespace app\api\validate;


use think\Validate;

class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPostiveInteger'
    ];

    protected $message = [
        'id' => 'id必须是正整数'
    ];
}