<?php
/**
 * 本代码推送给android系统测试通过，ios没有测试
 * @author 517909399@qq.com
 */

include('jpush.php');

$username = '';
$appkeys = ''; //应用程序(appKey)
$masterSecret = ''; //应用密钥
$obj = new jpush($username, $appkeys, $masterSecret);

$sendno = intval((double)microtime() * 10000);
$sendno = date('His').str_pad($sendno, 4, '0', STR_PAD_LEFT);

$receiver_value = '';		

$msg_content = json_encode(array('n_builder_id'=>0, 'n_title'=>'', 'n_content'=>'hello world!'));

$platform = 'android';


$res = $obj->send($sendno, 3, $receiver_value, 1, $msg_content, $platform);
print_r($res);
exit();

?>
