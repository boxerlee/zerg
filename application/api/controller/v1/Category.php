<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 19/5/2018
 * Time: 19:27
 */

namespace app\api\controller\v1;

use app\api\model\Category as CategoryModel;
use app\lib\exception\CategoryException;

class Category
{
    public function getAllCategories(){
        $categories = CategoryModel::getAllCategories();

        if ($categories->isEmpty()){
            throw new CategoryException();
        }

        return $categories;

    }
}