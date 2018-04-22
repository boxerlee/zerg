<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 21/4/2018
 * Time: 23:13
 */

namespace app\api\validate;


use think\Validate;

class IDMustBePostiveInt extends Validate
{
    protected $rule = [
        'id' => 'require|isPostiveInteger'
    ];

    protected function isPostiveInteger($value, $rule = '', $data = '', $field = '')
    {
        //判断正整数的方法
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0)
        {
           return TRUE;
        }
        else{
            return $field.'必须是正整数';
        }
    }
}