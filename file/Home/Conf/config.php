<?php
return array(
	//'配置项'=>'配置值'
    //显示追踪日志信息
    'SHOW_PAGE_TRCE'   => true,
    
    //url地址大小写不敏感
    'URL_CASE_INSENSITIVE'  =>  false,
    
     'DB_TYPE'              =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'file_project',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'file_',    // 数据库表前缀
    'DB_PARAMS'             =>  array(), // 数据库连接参数    
    'DB_DEBUG'  	    =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  false,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    
    //修改模板引擎
   'TMPL_ENGINE_TYPE'       =>  'smarty',
    
);