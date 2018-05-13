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
use think\Model;

class Banner extends Model
{
    public function items(){
        return $this->hasMany('BannerItem','banner_id','id');
    }

    /**
     * @param $id
     */
    public static function getBannerByID($id)
    {
//       $result = Db::query(
//           'SELECT * FROM banner_item WHERE banner_id=?',[$id]);
//       return $result;

        //表达式法
//        $result = Db::table('banner_item')
//            ->where('banner_id', '=', $id)
//            ->select();
//        select
//        update
//        delete
//        insert
//        find

//        where('字段名','表达式','查询条件')

        //表达式法、数组法（官方不推荐）、闭包法（如下）

        $result = Db::table('banner_item')
            ->where(function ($query) use ($id)
            {
                $query->where('banner_id', '=', $id);
            })
            ->select();

//       ORM Object Relation Mapping 对象关系映射
        // 模型与模型关联《特指tp5中的模型》，其主要的作用是处理复杂的对象的，根据功能来划分的
        return $result;
    }
}