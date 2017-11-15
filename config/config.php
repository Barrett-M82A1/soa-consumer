<?php
return array (
  'app_name' => 'zjcool',
  'service' => 
  array (
    0 => 'UserService',
    1 => 'StudentUserService',
  ),
  'ip' => '172.17.0.4',
  'port' => 8082,
  'notify_port' => 8083,
  'mysoa' => 
  array (
    0 => 
    array (
      'ip' => '172.17.0.2',
      'port' => 8081,
    ),
    1 => 
    array (
      'ip' => '172.17.0.2',
      'port' => 8081,
    ),
  ),
  'rpc' => 
  array (
    0 => 
    array (
      'name' => 'StudentUserService',
      'authors_name' => '38923',
      'account' => 'i@yoyoyo.me',
      'ip' => '192.168.2.201',
      'out_time' => '2000',
      'port' => '8000',
      'weight' => '0',
    ),
    1 => 
    array (
      'name' => 'UserService',
      'authors_name' => '38923',
      'account' => 'i@yoyoyo.me',
      'ip' => '192.168.2.201',
      'out_time' => '2000',
      'port' => '8000',
      'weight' => '0',
    ),
  ),
);