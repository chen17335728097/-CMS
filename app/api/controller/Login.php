<?php
/**
 * Created by 海豚之泪.
 * User: 陈中
 * Date: 2018/7/20
 * Time: 15:59
 */

namespace app\api\controller;

use app\common\controller\BaseCommon;
use app\api\common\ApiBase;
class Login extends ApiBase
{

    public function __construct(){
        parent::__construct();
    }
    //账户注册
    public function register1(){
        $data = \input("get.");
        if(isset($data['openid'])){
            return json(['code'=>400,'获取code失败']);
        }
        $info = BaseCommon::findOne("member","*",['member_open_id'=>$data['openid']]);
        if(empty($info)){
            $save_data = [
                'member_nickname'=>$data['nickname'],
                'member_open_id'=>$data['openid'],
                'member_head_img_url'=>$data['headimgurl'],
                'member_unionid'=>$data['unionid'],
                'member_sex'=>$data['sex'],
                'member_province'=>$data['province'],
                'member_city'=>$data['city'],
                'member_country'=>$data['country']
            ];
            $re = BaseCommon::insertOne("member",$save_data);
            if($re){
                $info = BaseCommon::findOne("member","*",['member_open_id'=>$data['openid']]);
                return json(['code'=>200,'msg'=>'注册成功','info'=>$info]);
            }else{
                return json(['code'=>400,'msg'=>'系统繁忙，请稍后再试']);
            }
        }else{
            return json(['code'=>400,'msg'=>'系统繁忙，请稍后再试']);
        }

    }
   /* //获取微信openid
    public function login(){
        $code =\input("post.code");
        $request_url = "https://api.weixin.qq.com/sns/jscode2session?appid=wx253f7ab4e92e8451&secret=bf6a5655085c0d1de85316ffd19d585e&js_code=JSCODE&grant_type=authorization_code";
        $wx_info = file_get_contents($request_url);
        $data = json_decode($wx_info,true);
        return json($data);
    }*/


    /**
     * 登录接口
     * @return array|\think\response\Json
     */
    public function login()
    {
        $config = $this->config;
        $session_id     =   request()->post('session_id','');
        $code           =   request()->post('code','');

        if(empty($code))
        {
            return json(['code'=>400,'msg'=>'参数错误，code不能为空']);
        }

        //登录接口URL
        $url    =   "https://api.weixin.qq.com/sns/jscode2session?appid=".$config['web_APPID'] ."&secret=".$config['web_APPSECKET'] ."&js_code=".$code ."&grant_type=authorization_code";
        $res    =   sendCurl($url,'');     //向微信服务器发送登录请求
        //获取openid和微信服务器session_key
        if($res['code'] == 200 && !empty($res['data']['openid']))
        {
            //查询用户是否已注册过
            //在微信服务器换取登录状态请求成功
            $session_id     =   randstr(50,$res['data']['openid'].$res['data']['session_key']);
            $data           =   [
                'session_key'   =>  $res['data']['session_key'],
                'session_code'  =>  $code,
                'openid'        =>  $res['data']['openid'],
                'session_id'    =>  $session_id,
                'session_token'    =>  randstr(32),
                'session_expire_time' =>time()+3600
            ];
            //插入session_key及openid
            $res_session = BaseCommon::insertOne("session",$data);
            if($res_session !== false)
            {
                //查询当前openid是否被注册
                $info   =  BaseCommon::findOne("member","*",['member_open_id'=>$data['openid']]);
                if(empty($info))
                {
                    //在当前服务器登录成功！返回session_id
                    $res    =   [
                        'session_id'=>$session_id,
                        'info'=>""
                    ];
                    return $res;
                }else{
                    //该用户已注册过，直接返回该用户信息，不再进行注册 更新session表信息
                  //  BaseCommon::edit_save("session",['openid'=>$info['openid']],['session_id'=>$session_id,'session_expire_time'=>(time()+7200),'session_addtime'=>time()]);
                    $res    =   [
                        'session_id'=>$session_id,
                        'info'=>$info
                    ];
                    return $res;
                }
            }else{
                return json(['code'=>400,'msg'=>'注册用户信息失败']);
            }
        }else{
            return json(['code'=>400,'msg'=>'获取openid失败']);
        }

    }

    /**
     * 注册用户
     */
    public function register()
    {
        $session_id     =   \input('post.session_id');
        $info_json      =   \input('post.userInfo/a');

        //取session信息
        $res_session    =   BaseCommon::findOne("session","*",['session_id'=>$session_id]);
        $res_msg = [
            "info"=>"",
            "code"=>"",
            "session_id"=>$session_id
        ];
        if(!empty($res_session))
        {
            //已经注册过
            $info               =   BaseCommon::findOne("member","*",['member_open_id'=>$res_session['openid']]);
            if(empty($info)){
                //注册账户
                $save_data = [
                    'member_nickname'=>$info_json['nickName'],
                    'member_open_id'=>$res_session['openid'],
                    'member_head_img_url'=>$info_json['avatarUrl'],
                    //'member_unionid'=>$info_json['unionid'],
                   // 'member_sex'=>$info_json['sex'],
                    'member_province'=>$info_json['province'],
                    'member_city'=>$info_json['city'],
                    'member_country'=>$info_json['country']
                ];
                BaseCommon::insertOne("member",$save_data);
                $info = BaseCommon::findOne("member","*",['member_open_id'=>$res_session['openid']]);
            }
            $res_msg['info']    =   $info;
            $res_msg['code'] = 200;
            return json($res_msg);
        }
        //注册账户
        $save_data = [
            'member_nickname'=>$info_json['nickname'],
            'member_open_id'=>$res_session['openid'],
            'member_head_img_url'=>$info_json['avatarUrl'],
            'member_sex'=>$info_json['sex'],
            'member_province'=>$info_json['province'],
            'member_city'=>$info_json['city'],
            'member_country'=>$info_json['country']
        ];
        $re = BaseCommon::insertOne("member",$save_data);
        if($re){
            $return_info = BaseCommon::findOne("member","*",['member_open_id'=>$res_session['openid']]);
            return json(['code'=>200,'msg'=>'注册成功','info'=>$return_info,'session_id'=>$session_id]);
        }else{
            return json(['code'=>400,'msg'=>'系统繁忙，请稍后再试','session_id'=>$session_id]);
        }
    }
}