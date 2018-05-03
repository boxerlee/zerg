<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 3/5/2018
 * Time: 23:45
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的banner id 不存在';
    public $errorCode = 40000;

}