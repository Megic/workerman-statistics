<?php
$root=realpath(__DIR__.'/../');
require_once $root .'/Clients/StatisticClient.php';
// 统计开始
StatisticClient::tick("User", 'Httpsdf%sdfsdf123');
// 统计的产生，接口调用是否成功、错误码、错误日志
$success = true; $code = 0; $msg = '';
// 假如有个User::getInfo方法要监控
// $user_info = User::getInfo();
// if(!$user_info){
//     // 标记失败
//     $success = false;
//     // 获取错误码，假如getErrCode()获得
//     $code = User::getErrCode();
//     // 获取错误日志，假如getErrMsg()获得
//     $msg = User::getErrMsg();
// }
// 上报结果
StatisticClient::report('Site', 'Httpsdf%sdfsdf123', $success, $code, $msg);