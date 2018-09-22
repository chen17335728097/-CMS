<?php
namespace app\back\validate;

use think\Validate;

class AuthRule extends Validate{
    
    protected $rules = [
        'name'=>'require|unique',
         
    ];
    
    protected $msg = [
        'name.require'=>"子节点规则必须",
        'name.unique'=>"子节点规则唯一",
        
        
    ];
    protected $scene = [
        'add'    =>['name'],
    ];
}