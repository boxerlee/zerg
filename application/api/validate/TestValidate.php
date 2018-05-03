<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 21/4/2018
 * Time: 11:40
 */

namespace app\api\validate;


use think\Validate;

class TestValidate extends Validate
{
    /**
     * @var array
     */
    protected $rule = [
        'name' => 'require|max:10',
        'email' => 'email'
    ];
}