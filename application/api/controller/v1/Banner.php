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

        //模型查询静态方式 建议使用这种方式
        $banner = BannerModel::find($id);

        //下边的方式是通过实例化的方式来定义模型
//        $banner = new BannerModel();
//        $banner = $banner->get($id);

//        $banner = BannerModel::getBannerByID($id);
        if(!$banner){
            throw new BannerMissException();
//            throw new Exception('内部错误');
        }
        return json($banner);
    }
}