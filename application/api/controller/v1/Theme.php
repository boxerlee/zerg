<?php
/**
 * Created by PhpStorm.
 * User: boxer
 * Date: 14/5/2018
 * Time: 22:20
 */

namespace app\api\controller\v1;


use app\api\validate\IDCollection;
use app\api\model\Theme as ThemeModel;
use app\lib\exception\ThemeException;

class Theme
{
    /**
     * @url  /theme?ids=id1,id2,id3.....
     * @return  一组theme模型
     */
    public function getSimpleList($ids = '')
    {
        (new IDCollection())->goCheck();

        $ids = explode(',', $ids);
        $result = ThemeModel::getThemeByIDs($ids);

        if (!$result)
        {
            throw new ThemeException();
        }

        return json($result);

    }


}