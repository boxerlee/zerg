<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 14/5/2018
 * Time: 23:52
 */

namespace app\api\validate;


class IDCollection extends BaseValidate
{
    protected $rule = [
        'ids' => 'require|checkIDs'
    ];

    protected $message = [
        'ids' => 'ids参数必须是以逗号分隔的多个正整数'
    ];

    //ids = id1, id2,....
    protected function checkIDs($value)
    {
        $values = explode(',', $value);
        if (empty($values))
        {
            return false;
        }
        foreach ($values as $id)
        {
            if (!$this->isPostiveInteger($id))
            {
                return false;
            }
        }

        return true;

    }
}