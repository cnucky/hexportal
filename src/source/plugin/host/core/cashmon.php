<?php
if(!defined('IN_DISCUZ')||!$_GET['hid']) {die('Access Denied');}
if(!$discuz_uid){
		showmessage('not_loggedin', NULL, array(), array('login' => 1));
}
if($hashToken!=$_GET['token'])die('XSS check failed');
$query = DB::query("SELECT * FROM ".DB::table("common_member_count")." WHERE uid='$discuz_uid'");
$array = mysql_fetch_array($query);
$hid=intval($_GET['hid']);
$query_account = DB::query("SELECT * FROM host_user  WHERE uid='$discuz_uid' and id='$hid'");
$array_account = mysql_fetch_array($query_account);
if(!$array_account)showmessage($lang[no_host],'./plugin.php?id=host:host&page=plan');
$query_plan = DB::query("SELECT * FROM host_plan  WHERE id='$array_account[plan]'");
$array_plan = mysql_fetch_array($query_plan);
if($array[extcredits4]<$array_plan[monprice]){
	showmessage($lang[cash_not_enough_1],'./home.php?mod=spacecp&ac=credit&op=buy');
}else{
	$c=$array[extcredits4]-$array_plan[monprice];
	$mmmm=date('m',$array_account[expiredate]);
	$new_expire=$array_account[expiredate]+3600*24*GetMonthDay(date('Y'),$mmmm);
	DB::query("UPDATE host_user SET expiredate = '$new_expire' WHERE uid='$discuz_uid' AND id='".intval($_GET['hid'])."'");
	updatemembercount($discuz_uid, array('extcredits4' => (0-$array_plan[monprice])), true, 'R01', 12, '主机续费_1个月');
	showmessage("您成功续费1个月",'./plugin.php?id=host:host&page=myhost&hid='.$_GET['hid']);
}
?>