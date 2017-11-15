<?php
/**
 * UserService业务实现
 */
use mysoa\RpcClient;

class UserService
{
    public function login($param)
    {
        //调用A服务
        $UserService = new RpcClient('UserService');
        $stra = $UserService->getUserName($param['account']);

        //调用B服务
        $StudentUserService = new RpcClient('StudentUserService');
        $strb = $StudentUserService->isStudent($param['password']);

        return [$stra,$strb];
    }

    public static function updateUsername($uid,$name){
        // 数据入库操作...
        return true;
    }
}