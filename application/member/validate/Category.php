<?php
	namespace app\member\validate;

	use think\Validate;


	class User extends Validate
	{

    	protected $rule = [
            'us_name'  =>  'unique:user',
            'us_password' =>  'min:2',
        ];
        
        protected $message = [
            'us_name.unique' =>  '用户名不能重复',
            'us_password.min' =>  '字数不能少于8个',
        ];
        


	}