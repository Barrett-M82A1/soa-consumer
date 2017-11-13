<?php
/**
 * 启动服务
 */

//服务配置
$config = include __DIR__."/../config/config.php";

//启动服务
$server = new \swoole_server('0.0.0.0',$config['port']);

//监听 soa 配置中心推送
$server->addlistener($config['mysoa'][0]['ip'],$config['mysoa'][0]['port'],SWOOLE_SOCK_TCP);

$server->on('Start','onStart');
$server->on('Connect','onConnect');
$server->on('Receive','onReceive');
$server->on('Close','Close');

$server->start();

/**
 * 启动
 * @param swoole_server $server
 */
function onStart(\swoole_server $server)
{
    echo "Consumer : Swoole server is running :)\n";
}

/**
 * 建立连接
 * @param swoole_server $server
 * @param $fd
 * @param $from_id
 */
function onConnect(\swoole_server $server, $fd, $from_id)
{
    echo "Consumer : Connection open -> {$fd}\n";
}

/**
 * 收到信息
 * @param swoole_server $server
 * @param int $fd
 * @param int $reactor_id
 * @param string $data
 */
function onReceive(\swoole_server $server, int $fd, int $reactor_id, string $data)
{
    //判断消息是否由服务中心推送
    $port = $server->connection_info($fd, $from_id);

    if ($port['server_port'] === SERVER_PORT) {
        #更新配置文件
    }else{
        #调用对应service
    }
}

/**
 * 关闭链接
 * @param swoole_server $server
 * @param int $fd
 * @param int $reactorId
 */
function onClose(\swoole_server $server, int $fd, int $reactorId)
{
    echo "MySoa : Connection close -> {$fd}\n";
}
