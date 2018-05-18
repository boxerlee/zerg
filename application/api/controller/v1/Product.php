<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 17/5/2018
 * Time: 00:31
 */

namespace app\api\controller\v1;


use app\api\validate\Count;
use app\api\model\Product as ProductModel;
use app\lib\exception\ProductException;

class Product
{
    public function getRecent($count = 15)
    {
        (new Count())->goCheck();
        $products =ProductModel::getMostRecent($count);

        if (!$products){
            throw new ProductException();
        }
        return $products;
    }
}