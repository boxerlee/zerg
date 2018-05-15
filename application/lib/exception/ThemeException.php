<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 16/5/2018
 * Time: 00:46
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
    public $code = 404;
    public $msg = '请求的主题不存在，请检查主题ID';
    public $errorCode = 30000;
}