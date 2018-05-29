<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 29/5/2018
 * Time: 21:36
 */

namespace app\lib\exception;


class TokenException extends BaseException
{
    public $code = 401;
    public $msg = 'Token已过期或无效Token';
    public $errorCode = 10001;
}