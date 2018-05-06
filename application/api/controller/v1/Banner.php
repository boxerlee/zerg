<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 18/4/2018
 * Time: 23:29
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;
use think\Exception;

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
        // AOP 面向切面编程
        (new IDMustBePostiveInt())->goCheck();

        $banner = BannerModel::getBannerByID($id);

        if(!$banner){
           throw new BannerMissException();
        }
        return json($banner);

    }
}
