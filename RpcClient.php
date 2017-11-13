<?php
/**
 * RPC服务调用SDK
 */
namespace Rpc;

class RpcClient
{
    private $serviceName;

    /**
     * @var array
     */
    private static $services;

    /**
     * RpcClient constructor.
     * @param $serviceName
     * @param int $timeout
     * @param int $retry
     */
    public function __construct($serviceName,$timeout = 500, $retry = 3)
    {
        $this->serviceName = $serviceName;

        //if (isset(self::$services[$serviceName])) return $this;

        //从本地获取服务列表
        $rpc = include __DIR__."/../config/config.php";

        #To do....权重算法
        $service = $config['rpc'];


        $client = new \swoole_client(SWOOLE_SOCK_TCP);
        $client->connect($service[0]['ip'], $service[0]['port'], 0.5);
        self::$services[$serviceName] = $client;
    }

    /**
     * 反序列化
     * @param $request
     * @return string
     */
    public function pack($request){
        $msg = json_encode($request,true);
        return pack('N', strlen($msg)) . $msg;
    }

    /**
     * 回调处理结果
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        $client = self::$services[$this->serviceName];
        $request = new Request();
        $request->setService($this->serviceName);
        $request->setAction($name);
        $request->setParameters($arguments);

        $client->send($this->pack($request));

        $reponse = $client->recv();

        $body = substr($reponse, 4);
        return json_decode($body,true);
    }

}