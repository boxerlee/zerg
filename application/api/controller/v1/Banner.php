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
        (new IDMustBePostiveInt())->goCheck();

        //常规固有的处理异常方式
        try{
            $banner = BannerModel::getBannerByID($id);
        }
        catch (Exception $ex){
           $err = [
               'error_code'=> 10001,
               'msg' => $ex->getMessage()
           ];
           return json($err,400);
        }


        $banner = BannerModel::getBannerByID($id);
        return $banner;


    }
}
