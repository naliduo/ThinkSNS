<?php
/*
 * 游客访问的黑/白名单，不需要开放的，可以注释掉
 */
return array(
	"access"	=>	array(
		'public/Register/*' 	=> true, //注册
		'public/Passport/*'		=> true, //登录
		'public/Widget/*'		=> true, //插件
		'api/*/*'				=> true, //API

		//网站公告
		'public/Index/announcement' => true,
		
		//个人主页		
		'public/Profile/index' => true,
		'public/Profile/following' => true,
		'public/Profile/follower' => true,
		'public/Profile/data' => true,
		
		//微博内容
		'public/Profile/feed' => true,
		
		//微博话题
		'public/Topic/index' => true,
		
		//微吧
		'weiba/Index/index' => true,
		'weiba/Index/detail' => true,
		'weiba/Index/postDetail' => true,
		'weiba/Index/postList' => true,
		'weiba/Index/weibaList' => true,

		//爆料
		'tipoff/Index/index' =>true,
		'tipoff/Index/post' =>true,
		'tipoff/Index/doPost' =>true,
		'tipoff/Index/detail' =>true,
			
		//升级版块查询
		'public/Index/checkVersion' => true,

	)
);