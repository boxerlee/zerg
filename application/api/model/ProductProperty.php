<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 9/6/2018
 * Time: 17:10
 */

namespace app\api\model;


class ProductProperty extends BaseModel
{
    protected $hidden = ['product_id','delete_time','id'];
}