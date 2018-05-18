<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 17/5/2018
 * Time: 00:34
 */

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule = [
        'count' => 'isPostiveInteger|between:1,15'

    ];
}