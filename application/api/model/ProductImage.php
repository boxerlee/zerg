<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 9/6/2018
 * Time: 17:01
 */

namespace app\api\model;


class ProductImage extends BaseModel
{
    protected $hidden=['img_id','delete_time','product_id'];

    public function imgUrl(){
        return $this->belongsTo('Image','img_id','id');
    }

}