<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 22/4/2018
 * Time: 23:45
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        //获取http传入的参数
        //对这些参数做校验
        $request = Request::instance();
        $params = $request->param();

        $result = $this->check($params);
        if (!$result)
        {
            $e = new ParameterException();
            $e->msg = $this->error;
            throw $e;

//            $error = $this->error;
//            throw new Exception($error);
        }
        else
        {
            return TRUE;
        }

    }
}