<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 18/4/2018
 * Time: 23:29
 */

namespace app\api\controller\v1;


use think\Validate;

class Banner
{
    /**
     * 获取指定id的banner信息
     * @id banner的id号
     * @url /banner/:id
     * @http GET
     */
    public function getBanner($id)
    {
        //独立验证
        //验证器是tp5官方推荐的形式
        $data = [
            'name' => 'vendor',
            'email' => 'vendor@qq.com'
        ];

        $validate = new Validate([
            'name' => 'require|max:10',
            'email' => 'email'
        ]);

        $result = $validate->check($data);
        var_dump($validate->getError());
        echo $id;

    }
}