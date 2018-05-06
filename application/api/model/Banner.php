<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 23/4/2018
 * Time: 00:29
 */

namespace app\api\model;


use think\Db;
use think\Exception;

class Banner
{
    /**
     * @param $id
     */
    public static function getBannerByID($id)
    {
//       $result = Db::query(
//           'SELECT * FROM banner_item WHERE banner_id=?',[$id]);
//       return $result;
        $result = Db::table('banner_item')->where('banner_id','=',$id)
        ->select();
        return $result;
    }
}