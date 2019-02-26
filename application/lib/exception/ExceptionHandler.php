<?php
/**
 * Created by PhpStorm.
 * User: eexiaox
 * Date: 2019/2/25
 * Time: 16:15
 */

namespace app\lib\exception;


use Exception;
use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandler extends Handle
{

    private $code;
    private $msg;
    private $errorCode;
//    需要返回客户端当前请求的url路径

//自定义全局异常处理方法
    public function render(Exception $e)
    {
        if($e instanceof BaseException){
//            如果是自定义的异常处理
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        }else{
//            $switch = true; //状态开关，开启自定义异常检测还是框架自带异常检测,这类控制开关的变量应该定义在config文件中
//            使用tp5自带的配置文件中的变量来代替 $switch开关变量
//             config配置文件 一般是只读的。
//            Config::get('app_debug') 这种方式也是可行的
            if(config('app_debug')){
//               直接调用父类的方法，就可以还原框架自带的异常检测
                return parent::render($e);
            }else{
                $this->code = 500;
                $this->msg = 'Server internal error';
                $this->errorCode = 999;
                $this->recordErrorLog($e);
            }

        }
        $request = Request::instance();
        $result = [
            'msg' => $this->msg,
            'errorCode' => $this->errorCode,
            'request_url' => $request->url(),
        ];
        return json($result,$this->code);
    }
    //        对错误进行记录日志
    private function recordErrorLog(Exception $e){
//     初始化日志 对应config.php中对log的定义
        Log::init([
           'type' => 'File',
           'path' => LOG_PATH,
           'level' => ['error'],
        ]);

        Log::record($e->getMessage(),'error');
    }
}