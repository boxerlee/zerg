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

        $result = $this->batch()->check($params);
        if (!$result)
        {
            $e = new ParameterException([
                'msg' => $this->error,
            ]);

            throw $e;
        }
        else
        {
            return TRUE;
        }

    }


    protected function isPostiveInteger($value, $rule = '', $data = '', $field = '')
    {
        //判断正整数的方法
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
//            return $field . '必须是正整数';
        }
    }

}