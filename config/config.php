<?php
/**
 * 服务配置
 */
return [

    //消费者名称
    'app_name'      =>  'zjcool',

    //需要消费的服务
    'service'       =>  [
        'UserInfo'
    ],

    //消费者IP
    'ip'            =>  '172.17.0.4',

    //RPC端口
    'port'          =>  8082,

    //服务中心回调通知端口
    'notify_port'   =>  8083,

    //服务中心配置
    'mysoa'     => [
        [
            //服务中心IP
            'ip'    =>  '172.17.0.2',

            //服务中心端口
            'port'  =>  8081
        ],[
            //服务中心IP
            'ip'    =>  '172.17.0.2',

            //服务中心端口
            'port'  =>  8081
        ],
    ],

    //服务列表
    'rpc'           =>  [
        ['name'=>'UserService','authors_name'=>'38923','account'=>'i@yoyoyo.me','ip'=>'172.17.0.3','port'=>8088]
    ],

    //配置文件路径
    'config_path'   =>  __DIR__."/../config/config.php"
];