<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 17/5/2018
 * Time: 00:59
 */

namespace app\lib\exception;


class ProductException extends BaseException
{
    public $code = 404;
    public $msg = '指定的商品不存在，请检查主题参数';
    public $errorCode = 20000;
}