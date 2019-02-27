<?php
/**
 * Created by PhpStorm.
 * User: eexiaox
 * Date: 2019/2/20
 * Time: 14:31
 */

namespace app\api\controller\v1;

use app\api\validate\IDMustBePositiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;
use think\Exception;

class Banner
{
    /**
     * 获取制定id的Banner信息
     * @url /banner/:id
     * @http GET
     * @id 指的是Banner的id号
    */
    public function getBanner($id){
//        AOP 面向切面编程
        (new IDMustBePositiveInt())->goCheck();
        $banner = BannerModel::getBannerByID($id);
        if(!$banner){
            throw new BannerMissException();
//            throw new Exception('内部错误');
        }
        return json($banner,200);
    }
}