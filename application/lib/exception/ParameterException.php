<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 6/5/2018
 * Time: 00:43
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;
}