<?php
namespace app\back\validate;

use think\Validate;

class Admin extends Validate{
    
    protected $rules = [
        'name'=>'require',
         
    ];
    
    protected $msg = [
        'name.require'=>"子节点规则必须",
        
        
        
    ];
    protected $scene = [
        'add'    =>['name'],
    ];
}