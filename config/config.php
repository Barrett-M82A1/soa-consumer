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
      'ip' => '172.17.0.3',
      'out_time' => '2000',
      'port' => '8080',
      'weight' => '50',
    ),
    1 => 
    array (
      'name' => 'UserService',
      'authors_name' => '38923',
      'account' => 'i@yoyoyo.me',
      'ip' => '172.17.0.3',
      'out_time' => '2000',
      'port' => '8080',
      'weight' => '50',
    ),
  ),
);