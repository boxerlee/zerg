<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 19/5/2018
 * Time: 23:41
 */

namespace app\lib\exception;


class CategoryException extends BaseException
{
    public $code = 404;
    public $msg = '指定的类目不存在，请检查ID';
    public $errorCode = 50000;
}