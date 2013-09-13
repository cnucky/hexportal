<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('myhost_list');
0
|| checktplrefresh('./source/plugin/host/template/myhost_list.htm', './template/default/common/header.htm', 1379089732, 'host', './data/template/1_host_myhost_list.tpl.php', './source/plugin/host/template', 'myhost_list')
|| checktplrefresh('./source/plugin/host/template/myhost_list.htm', './template/default/common/footer.htm', 1379089732, 'host', './data/template/1_host_myhost_list.tpl.php', './source/plugin/host/template', 'myhost_list')
;?>
<html>
<head>
<!--

    hexData console is an open source & business running project, All functions were based on Discuz!X2.5,
    UI Framework from @QingCloud( Beijing Yunify Technology LTD ). License Snapshot: http://t.cn/z85zacu

    Github:    https://github.com/hexdata/hexportal , Open License: Discuz License & GNU.
    36kr+:     http://www.36kr.net/hexieshuju
    17Startup: http://17startup.com/startup/view/21124

    This project work is being shown on Alibaba Cloud Start-up Competition, If you wanna small upon me, please vote +1 for No.11 on http://dasai.aliyun.com/signup/works2013/
    If you are an investors, and interested in this project, please contact hackes#outlook.com

    Thanks to everyone who helped hexData.

 -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=1300">
<meta name="keywords" content="和谐数据 hexdata 云计算 弹性计算 hexcloud">
<meta name="description" content="和谐数据，专为企业用户打造的云计算产品+服务。">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>
<link href="console.css" rel="stylesheet" type="text/css">
<script src="jquery.min.js" type="text/javascript"></script>
<!--<script src="https://dn-hexssl.qbox.me/hexdata/default/oss/static_upload/js/jquery.min.js" type="text/javascript"></script>-->
<script src="js/jquery.alerts.js" type="text/javascript"></script>
<script>var cookiepre = "<?php echo $_G['config']['cookie']['cookiepre'];?>";</script>
</head>
<body class="modal-ready">
<div class="container">
<div class="viewport" id="console">
<div class="navigation" style="">
<div class="wrapper">
<div class="navigation-profile">
<a class="avatar" href="plugin.php?id=host:host" style="background-image: url('nohead.jpg')" target="_self"></a>
<p class="user-name">
<a href="https://i.hexdata.cn/profile" target="_blank" id="uname"><?php echo $_G['username'];?></a>
</p>
<p class="user-links">
<a class="icon icon-home" title="和谐数据首页" href="https://www.hexdata.cn"></a><a class="icon icon-console" title="控制台首页" href="index.html" data-permalink=""></a><a class="icon icon-account" title="帐户充值" href="https://i.hexdata.cn/charge"></a><a class="icon icon-logout" title="退出登录" href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>"></a>
</p>
</div>
<div class="navigation-permission">
<?php if(in_array($discuz_uid, $admin_array)&&$_GET['panel']=="admin") { ?>
<h6>ADMINISTRATION</h6>
<ul>
<li class="item manage-home"><a href="plugin.php?id=host:host&amp;panel=admin&amp;type=home" data-permalink=""><span class="icon icon-home"></span>管理主页<span class="title">Home</span></a></li>
<li class="item manage-settings"><a href="plugin.php?id=host:host&amp;panel=admin&amp;type=setting" data-permalink=""><span class="icon icon-settings"></span>基础设置<span class="title">Basic Setting</span></a></li><li class="item manage-ecs"><a href="plugin.php?id=host:host&amp;panel=admin&amp;type=user" data-permalink=""><span class="icon icon-instances"></span>管理主机<span class="title">Manage ECS</span></a></li>
<li class="item manage-tk"><a href="plugin.php?id=host:host&amp;panel=admin&amp;type=tickets" data-permalink=""><span class="icon icon-tickets"></span>管理工单<span class="title">Manage Tickets</span></a></li>

</ul>
<?php } else { ?>
<h6>RESOURCES</h6>
<ul>
<li class="item instances"><a href="plugin.php?id=host:host&amp;page=myhost" data-permalink=""><span class="icon icon-instances"></span>主机<span class="title">Instances</span></a></li>
<li class="item security_groups"><a href="plugin.php?id=host:host&amp;page=firewall" data-permalink=""><span class="icon icon-security_groups"></span>防火墙<span class="title">Security Groups</span></a></li>
<li class="item images"><a href="plugin.php?id=host:host&amp;page=image" data-permalink=""><span class="icon icon-images"></span>镜像<span class="title">Images</span></a></li>
</ul>
<h6>OTHERS</h6>
<ul class="level1">
<li class="item activities"><a href="plugin.php?id=host:host&amp;page=log" data-permalink=""><span class="icon icon-activities"></span>操作日志<span class="title">Activities</span></a></li>
<li class="item consumptions"><a href="plugin.php?id=host:host&amp;page=listorder" data-permalink=""><span class="icon icon-consumptions"></span>订单<span class="title">orders</span></a></li>
<li class="item tickets"><a href="plugin.php?id=host:host&amp;page=tickets" data-permalink=""><span class="icon icon-tickets"></span>工单<span class="title">Tickets</span></a></li>
<?php if(in_array($discuz_uid, $admin_array)&&$_GET['panel']!="admin") { ?>
<li class="item admin"><a href="plugin.php?id=host:host&amp;panel=admin&amp;type=home" target="_blank" data-permalink=""><span class="icon icon-system"></span>管理中心<span class="title">Admin</span></a></li>
<?php } ?>
</ul>
<?php } ?>
</div>
</div>
</div>
<div class="content" style="">
<div class="wrapper page">
<div class="page-intro">
<h1>主机 instances</h1>
<p class="lead">
管理您的云服务器资源(ECS)
</p>
</div>
<div class="pane">
<div class="toolbar">
<a class="btn" href="#"><span class="icon icon-refresh"></span></a><a class="btn btn-new" href="#apply"><span class="icon icon-run"></span>&nbsp;申请主机</a>
<a class="btn btn-forbidden btn-multi" href="#" data-does="{action:'StartInstance',note:'启动'}"><span class="icon icon-start"></span>&nbsp;启动</a>
<a class="btn btn-forbidden btn-multi" href="#" data-does="{action:'StopInstance',note:'关机'}"><span class="icon icon-stop"></span>&nbsp;关机</a>
<div class="dropdown btn-disabled">
<input class="dropdown-toggle" type="text">
<div class="dropdown-text">
更多操作...
</div>
<div class="dropdown-content">
<a class="btn btn-forbidden btn-multi" href="#" data-does="{action:'RebootInstance',note:'重启'}"><span class="icon icon-restart"></span>&nbsp;重启</a>
<a class="btn btn-forbidden btn-multi" href="#" data-does="{action:'StartInstance',note:'启动'}"><span class="icon icon-start"></span>&nbsp;启动</a>
<a class="btn btn-forbidden btn-multi" href="#" data-does="{action:'StopInstance',note:'关机'}"><span class="icon icon-stop"></span>&nbsp;关机</a>
<a class="btn btn-forbidden btn-multi" href="#" data-does="{action:'ResetInstance',note:'重置'}"><span class="icon icon-reset"></span>&nbsp;重置</a>
<a class="btn btn-forbidden btn-one" href="#"><span class="icon icon-security_groups"></span>&nbsp;防火墙</a>
<a class="btn btn-forbidden btn-one" href="#"><span class="icon icon-instance"></span>&nbsp;更换公网IP</a>
<a class="btn btn-forbidden btn-one" href="#"><span class="icon icon-resize"></span>&nbsp;升级配置</a>
<a class="btn btn-forbidden btn-one btn-renew" href="#"><span class="icon icon-terminate"></span>&nbsp;续费</a>
</div>
</div>
<div class="form-search">
<input type="search" placeholder=" 主机名、IP、镜像">
</div>
<div class="pagination">
</div>
</div>
<table class="table table-bordered table-hover table-ecslist">
<thead>
<tr>
<th class="checkbox">
<input type="checkbox" class="chk-all" data-value="0">
</th>
<th>
NAME
</th>
<th>
状态
<div class="dropdown">
<input class="dropdown-toggle" type="text">
<div class="dropdown-text">
</div>
<div class="dropdown-content">
<a href="#" data-filter="status" data-status="pending,running,stopped,suspended">全部</a>
<a href="#" data-filter="status" data-status="pending">等待中</a>
<a href="#" data-filter="status" data-status="running">正常运行</a>
<a href="#" data-filter="status" data-status="stopped">已关机</a>
<a href="#" data-filter="status" data-status="suspended">已暂停</a>
<a href="#" data-filter="status" data-status="terminated">已销毁</a>
</div>
</div>
</th>
<th>
映像 ID
</th>
<th>
网络
</th>
<th>
类型
</th>
<th>
运行时间
</th>
</tr>
</thead>
<tbody><?php if(is_array($l_a)) foreach($l_a as $F) { ?><tr id="id-<?php echo $F['domain'];?>">
<td class="checkbox">
<input type="checkbox" class="chk-item" value="<?php echo $F['domain'];?>" data-value="{instanceid:'<?php echo $F['domain'];?>',hostid:'<?php echo $F['id'];?>'}">
</td>
<td>
<?php if($F['status']!="inactive") { ?><a class="id textname" href="plugin.php?id=host:host&amp;page=myhost&amp;hid=<?php echo $F['id'];?>" data-permalink="" data-hid="<?php echo $F['id'];?>"><?php if($F['alias'] ) { ?><?php echo $F['alias'];?><?php } else { ?><?php echo $F['domain'];?><?php } ?></a><input type="text" value="" name="name" class="new-name" data-hid="<?php echo $F['id'];?>" style="display:none;width: 140px;height: 26px;line-height: 21px;"> <a href="#" data-hid="<?php echo $F['id'];?>" data-step="0" class="btn btn-small rename">改名</a><?php } else { ?><a class="id textname" href="#">主机正在开通中...</a><?php } ?>
</td>

<?php if($F['status']=="active") { ?><td class="running"><span class="icon-status icon-running"></span>&nbsp; 已开通</td><?php } elseif($F['status']=="inactive") { ?><td class="creating"><span class="icon-status icon-creating"></span>&nbsp; 等待中</td><?php } else { ?><td ><?php echo $F['status'];?></td><?php } ?>

<td>
<a class="id" href="#" data-permalink=""><?php echo $F['os'];?></a>
</td>
<td>
<span class="id"><?php if($F['status']!="inactive") { ?><?php echo $F['publicIp'];?> / <?php echo $F['lanIp'];?><?php } ?></span><br>
</td>
<td>
小型A
</td>
<td class="time">
<?php if($F['status']!="inactive") { ?><?php echo $F['date'];?>/<?php echo $F['expiredate'];?> <?php if(strtotime($F['expiredate']) < $will_exp_date) { ?><span style="display:none">将到期</span><?php } } ?>
</td>
</tr>
<?php } ?>
</tbody>
<tfoot>
</tfoot>
</table>
<p class="none" style="display: none;">
结果为空
</p>
<p class="tips">
* 提示：可通过在各个资源上点击 "右键" 来进行常用操作。
</p>
<div style="display: none;">
<p class="loading">
正在加载...
</p>
</div>
</div>
</div>
</div>
<div class="notify" style="">
</div>
<input type="hidden" id="succ_array">
<input type="hidden" id="fail_array">

<div class="window-overlay" style="display:none;">
<div class="modal" style="height: 600px; margin-left: -500px; margin-top: -300px; top: 50%;">
<div class="modal-header">
<h4>创建新主机<a href="#" class="close"><span class="icon-close icon-Large"></span></a></h4>
</div>
<div class="modal-content" id="">
<div class="run-instances">
<div class="wizard" style="width: 599px;">
<ol class="wizard-nav">
<li class="step1 current">选择映像<span>
<hr>
1</span></li>
<li class="step2">CPU+内存<span>
<hr>
2</span></li>
<li class="step3">磁盘+带宽<span>
<hr>
3</span></li>
<li class="step4">基本信息<span>4</span></li>
</ol>
<div class="wizard-content" style="width: 599px; height: 490px;">
<div class="steps" style="left: 0px;" data-now-step="0">
<form class="form form-horizontal">
<div class="step step-1" style="width: 599px;">
<div class="step-inner">
<div class="backbone-ui list images">
<h5></h5>
<div class="toolbar">
<div class="provider">
选择镜像来源：<a href="#" class="provider-filter selected" data-val="system">系统</a> <a href="#" class="provider-filter" data-val="self">私有</a>
</div>
<div class="pagination" data-this-page="1">
<span class="current">Page 1 of 2</span><a class="btn btn-small prev btn-forbidden" data-direction="prev"><span class="icon-prev" data-direction="prev"></span></a><a class="btn btn-small next btn-" data-direction="next"><span class="icon-next" data-direction="next"></span></a>
</div>
</div>
<div class="list-wrapper">
<div class="image-item" data-value="centos58x86">
CentOS 5.8 32bit&nbsp;&nbsp;<span class="id">ID: centos58x86</span>
</div>
<div class="image-item selected" data-value="centos58x64">
CentOS 5.8 64bit&nbsp;&nbsp;<span class="id">ID: centos58x64</span>
</div>
<div class="image-item" data-value="centos64x64a">
CentOS 6.4 64bit&nbsp;&nbsp;<span class="id">ID: centos64x64a</span>
</div>
<div class="image-item" data-value="centos64x64a">
CentOS 6.4 64bit&nbsp;&nbsp;<span class="id">ID: centos64x64a</span>
</div>
<div class="image-item" data-value="redhat52x64a">
RedHat Enterprise 5.2 64bit&nbsp;&nbsp;<span class="id">ID: redhat52x64a</span>
</div>
<div class="image-item" data-value="redhat53x64a">
RedHat Enterprise 5.3 64bit&nbsp;&nbsp;<span class="id">ID: redhat53x64a</span>
</div>
<div class="image-item" data-value="quantalx64a">
Ubuntu Server 12.10 64bit&nbsp;&nbsp;<span class="id">ID: quantalx64a</span>
</div>
<div class="image-item" data-value="precisex64a">
Ubuntu Server 12.04.2 LTS 64bit&nbsp;&nbsp;<span class="id">ID: precisex64a</span>
</div>
<div class="image-item" data-value="windows03x64a">
Windows 2003 64bit&nbsp;&nbsp;<span class="id">ID: windows03x64a</span>
</div>
<div class="image-item" data-value="windows08x64a">
Windows 2008 64bit&nbsp;&nbsp;<span class="id">ID: windows08x64a</span>
</div>
</div>
<div style="width:100%;height:10px;"></div>
<div class="toolbar">
<div class="provider">
选择数据中心：<a href="#" class="provider-filter selected datacenter" data-value="hangzhou_bgp">杭州机房</a> <a href="#" class="provider-filter datacenter" data-value="qingdao_bgp">青岛BGP机房</a>
</div>
</div>
</div>
</div>
<div class="step-action">
<input class="btn btn-next" type="button" data-dir="next" value="下一步">
</div>
</div>
<div class="step step-2" style="width: 599px;">
<div class="step-inner">
<div class="custom-instance-types">
<h5>推荐类型</h5>
<div class="types">
<div class="types-item">
<div class="inner">
<span class="icon icon-selected"></span>
</div>
<h6 class="type-name">小型A</h6>
</div>
<div class="types-item selected">
<div class="inner">
<span class="icon icon-selected"></span>
</div>
<h6 class="type-name">小型B</h6>
</div>
<div class="types-item">
<div class="inner">
<span class="icon icon-selected"></span>
</div>
<h6 class="type-name">小型C</h6>
</div>
<div class="types-item">
<div class="inner">
<span class="icon icon-selected"></span>
</div>
<h6 class="type-name">中型A</h6>
</div>
<div class="types-item">
<div class="inner">
<span class="icon icon-selected"></span>
</div>
<h6 class="type-name">中型B</h6>
</div>
<div class="types-item">
<div class="inner">
<span class="icon icon-selected"></span>
</div>
<h6 class="type-name">中型C</h6>
</div>
<div class="types-item">
<div class="inner">
<span class="icon icon-selected"></span>
</div>
<h6 class="type-name">大型A</h6>
</div>
<div class="types-item">
<div class="inner">
<span class="icon icon-selected"></span>
</div>
<h6 class="type-name">大型B</h6>
</div>
<div class="types-item">
<div class="inner">
<span class="icon icon-selected"></span>
</div>
<h6 class="type-name">大型C</h6>
</div>
</div>
<div class="cpu">
<h6>CPU</h6>
<div class="options">
<div class="types-options cpu-options selected" data-value="1">
1核
</div>
<div class="types-options cpu-options " data-value="2">
2核
</div>
<div class="types-options cpu-options " data-value="4">
4核
</div>
<div class="types-options cpu-options " data-value="8">
8核
</div>
</div>
</div>
<div class="memory">
<h6>内存</h6>
<div class="options">
<div class="types-options memory-options " data-value="512">
0.5G
</div>
<div class="types-options memory-options selected" data-value="1024">
1G
</div>
<div class="types-options memory-options" data-value="1536" >
1.5G
</div>
<div class="types-options memory-options " data-value="2048">
2G
</div>
<div class="types-options memory-options disabled" data-value="2560">
2.5G
</div>
<div class="types-options memory-options disabled" data-value="4096">
4G
</div>
<div class="types-options memory-options disabled" data-value="6144" style="display:none">
6G
</div>
<div class="types-options memory-options disabled" data-value="8192" style="display:none">
8G
</div>
<div class="types-options memory-options disabled" data-value="12288" style="display:none">
12G
</div>
<div class="types-options memory-options disabled" data-value="16384" style="display:none">
16G
</div>
<div class="types-options memory-options disabled" data-value="24576" style="display:none">
24G
</div>
<div class="types-options memory-options disabled" data-value="32768" style="display:none">
32G
</div>
</div>
</div>
</div>
</div>
<div class="step-action">
<input class="btn btn-prev" type="button" data-dir="prev" value="上一步"><input class="btn btn-next" type="button" data-dir="next" value="下一步">
</div>
</div>
<div class="step step-3" style="width: 599px;">
<div class="step-inner">
<div class="vxnets">
<h3>公网带宽</h3>
<div class="vxnet-item">
<label class="name">基础网络</label>
<label class="id">
<select id="bgp-bandwidth" data-init="0">
<option value="0">0 Mbps</option>
<option value="1" selected="selected">1 Mbps</option>
<option value="2">2 Mbps</option>
<option value="3">3 Mbps</option>
<option value="4">4 Mbps</option>
<option value="5">5 Mbps</option>
</select>
</label>
</div>
<h3>内网带宽</h3>
<div class="vxnet-item">
<label class="name">2Gbps</label><label class="id">不可选</label>
</div>
<h3>数据盘</h3>
<div class="vxnet-item">
<label class="name">数据盘</label>
<label class="id">
<select id="data-storage" data-init="0">
<option value="0">0 GB</option>
<option value="10" selected="selected">10 GB</option>
<option value="20">20 GB</option>
<option value="30">30 GB</option>
<option value="40">40 GB</option>
<option value="50">50 GB</option>
</select>
</label>
</div>
</div>
</div>
<div class="step-action">
<input class="btn btn-prev" type="button" data-dir="prev" value="上一步"><input class="btn btn-next" type="button" data-dir="next" value="下一步">
</div>
</div>
<div class="step step-4" style="width: 599px;">
<div class="step-inner">
<p class="alert alert-info">
<span class="icon icon-info"></span>建议填写主机名称，这样可以通过名称辨认不同的主机
</p>
<div class="info">
<div class="item">
<div class="control-label">
主机名称
</div>
<div class="controls">
<input type="text" name="instance_name">
</div>
</div>
<div class="item">
<div class="control-label">
主机数量
</div>
<div class="controls">
<input type="text" name="count" value="1">
</div>
</div>
<div class="item">
<div class="control-label">
购买时长
</div>
<div class="controls">
<select name="during" class="during" style="width:180px;"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option></select><select name="during" class="term" style="width:50px;"><option value="mon">月</option><option value="yr">年</option></select>
</div>
</div>
</div>
</div>
<div class="step-action">
<input class="btn btn-prev" type="button" data-dir="prev" value="上一步"><input class="btn btn-primary" type="button" value="创建(支付)">
</div>
</div>
</form>
</div>
</div>
</div>
<div class="illustrate">
<h4>配置详情</h4>
<table class="table table-bordered table-hover">
<tbody>
<tr>
<td>
机房
</td>
<td>
<div class="cfig-datacenter" data-value="hangzhou_bgp">杭州BGP机房</div>
</td>
</tr>
<tr>
<td>
映像
</td>
<td>
<div class="cfig-os" data-value="centos58x64">CentOS 5.8 64bit</div>
</td>
</tr>
<tr>
<td>
主机类型
</td>
<td>
<div class="cfig-plan" data-value="smallB">小型B</div>							
</td>
</tr>
<tr>
<td>
CPU
</td>
<td>
<div class="cfig-cpu" data-value="1">1 核</div>
</td>
</tr>
<tr>
<td>
内存
</td>
<td>
<div class="cfig-mem" data-value="1024">1 G</div>
</td>
</tr>
<tr>
<td>
磁盘储存
</td>
<td>
<div class="cfig-storage" data-value="20">20 G</div>
</td>
</tr>
<tr>
<td>
带宽
</td>
<td>
<div class="cfig-bandwidth" data-value="1">1 mbps</div>
</td>
</tr>
<tr>
<td>
名称
</td>
<td>
<div class="cfig-alias" data-value=""></div>
</td>
</tr>
<tr>
<td>
数量
</td>
<td>
<div class="cfig-how" data-value="1">1台</div>
</td>
</tr>
<tr>
<td>
时长
</td>
<td>
<div class="cfig-during" data-value="1">1(月)</div>
<div class="cfig-term" data-value="mon" style="display:none"></div>							
</td>
</tr>
<tr>
<td width="20%">
单价
</td>
<td>
<div class="cfig-price">89.00<span class="unit">元/月</span> 890.00<span class="unit">元/年</span></div>
</td>
</tr>
</tbody>
</table>
<h4>总价&nbsp;&nbsp;<span class="price" dita-value="89.00">89.00</span><span class="unit">元/月</span> x 3月 = 267元</h4>
</div>
</div>
</div>
<div class="modal-footer">
</div>
</div>
</div>
<script>
jQuery(document).ready(function(){
var _csrf_token = "<?php echo $hashToken;?>";
var multiop = function(action, actionNote, instanceArray){
jQuery('#succ_array').val('');
jQuery('#fail_array').val('');
if(instanceArray.length == 0)return false;
jAlert('正在'+actionNote+'多台主机...进行中...请等待<br/>当前执行: <span class="cur-doing"></span><br/>若需要中止操作，请点击Cancel。');
var do_succ = [];
var do_fail = [];
for(i=0;i<instanceArray.length;i++){
if(jQuery('.cur-doing').length>0){
instanceId = instanceArray[i];
jQuery('.cur-doing').html( instanceId );
jQuery.get("plugin.php?id=host:host\x26page=api\x26hid=" + instanceId + "\x26action="+action+"\x26token="+_csrf_token,function(a){
eval('var a='+a);
if("OK"==a.code){
jQuery('.cur-doing:visible').html( a.instanceId + actionNote + " 成功");
jQuery('#succ_array').val(jQuery('#succ_array').val() + a.instanceId + "<br/>");
}else{
jQuery('.cur-doing:visible').html( a.instanceId + actionNote + " 失败");
jQuery('#fail_array').val(jQuery('#fail_array').val() + a.instanceId + "<br/>");
}
});
}
}
setTimeout(function(){
jAlert('批量'+actionNote+'已完成。<br/><br/>执行成功：<br/>'+jQuery('#succ_array').val(),"执行结果");
},1000);

}

jQuery('.btn-multi').click(function(){
if(jQuery(this).hasClass('btn-forbidden'))return false;
eval("var x="+jQuery(this).attr('data-does'));
var action = x.action;
var actionNote = x.note;
var instanceArray = Array();
jConfirm("确定要"+actionNote+"所选主机？确认没选错主机再点击OK。","和谐数据",function(callback){
if(callback){
jQuery('.chk-item:checked').each(function(){
if(jQuery(this).val())instanceArray.push(jQuery(this).val());
})
multiop(action, actionNote, instanceArray);

}
});
});
jQuery('.btn-one').click(function(){
if(jQuery(this).hasClass('btn-forbidden'))return false;
if(jQuery('.chk-item:checked').length!=1){
jAlert('此功能只支持每台主机单独操作，请取消勾选保留至一项选中后再使用此功能','和谐数据');
return false;
}else{
if(jQuery(this).hasClass('btn-renew')){
//续费
eval('datavalue = '+jQuery('.chk-item:checked').attr('data-value'));
var hid = datavalue.hostid;
location.href="plugin.php?id=host:host\x26page=cash1\x26hid="+hid;
}
}
});

jQuery('.chk-item,.chk-all').change(function(){
setTimeout(function(){
if(jQuery('.chk-item:checked').length>0){
jQuery('.btn-forbidden').removeClass('btn-forbidden').addClass('btn-zero-disable');
}else{
jQuery('.btn-zero-disable').removeClass('btn-zero-disable').addClass('btn-forbidden');
}
},100);
});

jQuery('.btn.rename').click(function(){
var hid=jQuery(this).attr('data-hid');
var step=jQuery(this).attr('data-step');
if(step == '0'){
jQuery(this).attr('data-step','1').html('保存').addClass('btn-primary');
jQuery('.textname[data-hid="'+hid+'"]').hide();
jQuery('.new-name[data-hid="'+hid+'"]').show().val(jQuery('.textname[data-hid="'+hid+'"]').html()).focus();
}else if(step == '1'){
jQuery.post('plugin.php?id=host:host\x26page=myhost\x26action=rename','token=<?php echo FORMHASH;?>&hid='+hid+'&name='+jQuery('.new-name[data-hid="'+hid+'"]').val(),function(data){
//console.log(data);
// if(data == "1"){console.log('修改成功')}
});
jQuery('.textname[data-hid="'+hid+'"]').show().html(jQuery('.new-name[data-hid="'+hid+'"]').val().replace(/\<\>/g,function(a){if(a=="<")return "&lt;";else if(a==">")return "&gt;";}));
jQuery('.new-name[data-hid="'+hid+'"]').hide();			
jQuery(this).attr('data-step','0').html('改名').removeClass('btn-primary');
}
return false;
});

jQuery('.new-name').keypress(function(e){
if(e.which == 13)jQuery('.btn.rename[data-hid="'+jQuery(this).attr('data-hid')+'"]').click();
})
jQuery('table.table.table-bordered tbody tr td').not('.checkbox').click(function(e){
jQuery(this).parent().find('.checkbox .chk-item').click().change();
});

// Generate from 0mbps to 200mbps
if(jQuery('#bgp-bandwidth').attr('data-init') == "0"){
var str_i = "";
for(i = 0; i < 201; i++){
str_i += "<option value=\""+i+"\">"+i+" Mbps</option>";
}
jQuery('#bgp-bandwidth').html(str_i);
jQuery('#bgp-bandwidth').attr('data-init','1');
jQuery('#bgp-bandwidth').val('1');
}

// Generate from GB to 2000GB
if(jQuery('#data-storage').attr('data-init') == "0"){
var str_j = "";
for(j = 0; j < 2001; j=j+10){
str_j += "<option value=\""+j+"\">"+j+" GB</option>";			
}
jQuery('#data-storage').html(str_j);
jQuery('#data-storage').attr('data-init','1');
jQuery('#data-storage').val('20');
}

//OS
jQuery('.list.images .list-wrapper .image-item').click(function(){
jQuery('.list.images .list-wrapper .image-item').removeClass('selected');
jQuery(this).addClass('selected');
var os = jQuery(this).html().replace(/\&nbsp\;\&nbsp\;\<span class\=\"id\"\>.*\<\/span\>/,'').replace(/\n/g,'');
jQuery('.cfig-os').html(os);
jQuery('.cfig-os').attr('data-value',jQuery(this).attr('data-value'));
});

jQuery('.cpu .options div.cpu-options').click(function(){
if(jQuery(this).hasClass('selected'))return false;
jQuery('.cpu .options div.cpu-options').removeClass('selected');
jQuery(this).addClass('selected');
var the_data = jQuery(this).attr('data-value');
jQuery('.cfig-cpu').attr('data-value',the_data).html(the_data+" 核");
jQuery('.memory .options div.memory-options').removeClass('disabled');
if(the_data == '1'){
jQuery('.memory .options div.memory-options').hide();
jQuery('.memory .options div.memory-options[data-value="512"],.memory .options div.memory-options[data-value="1024"],.memory .options div.memory-options[data-value="1536"],.memory .options div.memory-options[data-value="2048"],.memory .options div.memory-options[data-value="2560"],.memory .options div.memory-options[data-value="4096"]').removeAttr('style');
<?php if(0) { ?>
/*
为什么要removeAttr('style')而不show();
因为在hide()后，实际添加了display:none属性，再次显示就为display:block;
并非display:inline-block，会致使显示BUG.
*/
<?php } ?>
jQuery('.memory .options div.memory-options[data-value="2560"],.memory .options div.memory-options[data-value="4096"]').addClass('disabled');
jQuery('.memory .options div.memory-options[data-value="1024"]').click();
}else if(the_data == '2'){
jQuery('.memory .options div.memory-options').hide();
jQuery('.memory .options div.memory-options[data-value="512"],.memory .options div.memory-options[data-value="1024"],.memory .options div.memory-options[data-value="1536"],.memory .options div.memory-options[data-value="2048"],.memory .options div.memory-options[data-value="2560"],.memory .options div.memory-options[data-value="4096"]').removeAttr('style');
jQuery('.memory .options div.memory-options[data-value="512"],.memory .options div.memory-options[data-value="1024"]').addClass('disabled');
jQuery('.memory .options div.memory-options[data-value="2048"]').click();
}else if(the_data == '4'){
jQuery('.memory .options div.memory-options').hide();
jQuery('.memory .options div.memory-options[data-value="4096"],.memory .options div.memory-options[data-value="8192"],.memory .options div.memory-options[data-value="12288"],.memory .options div.memory-options[data-value="16384"],.memory .options div.memory-options[data-value="24576"],.memory .options div.memory-options[data-value="32768"]').removeAttr('style');
jQuery('.memory .options div.memory-options[data-value="12288"],.memory .options div.memory-options[data-value="16384"],.memory .options div.memory-options[data-value="24576"],.memory .options div.memory-options[data-value="32768"]').addClass('disabled');
jQuery('.memory .options div.memory-options[data-value="4096"]').click();
}else if(the_data == '8'){
jQuery('.memory .options div.memory-options').hide();
jQuery('.memory .options div.memory-options[data-value="4096"],.memory .options div.memory-options[data-value="8192"],.memory .options div.memory-options[data-value="12288"],.memory .options div.memory-options[data-value="16384"],.memory .options div.memory-options[data-value="24576"],.memory .options div.memory-options[data-value="32768"]').removeAttr('style');
jQuery('.memory .options div.memory-options[data-value="4096"]').addClass('disabled');
jQuery('.memory .options div.memory-options[data-value="8192"]').click();
}
});
jQuery('.memory .options div.memory-options').click(function(){
if(/disabled/.test(jQuery(this).attr('class')))return false;
jQuery('.memory .options div.memory-options').removeClass('selected');
jQuery(this).addClass('selected');
var the_data = jQuery(this).attr('data-value');
if( parseInt(the_data) % 512 > 0) return false;
jQuery('.cfig-mem').attr('data-value',the_data).html( the_data >= 1024? ( the_data/1024 + "GB" ) : (the_data + " MB") );
});
jQuery('a.datacenter').click(function(){
jQuery('a.datacenter').removeClass('selected');
jQuery(this).addClass('selected ');
var the_data = jQuery(this).attr('data-value');
jQuery('.cfig-datacenter').attr('data-value',the_data).html(the_data=="hangzhou_bgp"?"杭州BGP机房":"青岛BGP机房");
});
jQuery('select#bgp-bandwidth').change(function(){
var the_data = jQuery(this).val();
if( parseInt(the_data) > 200 || parseInt(the_data) < 0 ) return false;
jQuery('.cfig-bandwidth').attr('data-value',the_data).html(the_data+"mbps");
});
jQuery('select#data-storage').change(function(){
var the_data = jQuery(this).val();
jQuery('.cfig-storage').attr('data-value',the_data).html(the_data+"GB");
});
jQuery('select.during').change(function(){
var during_data=jQuery('select.during').val();
var term_data=jQuery('select.term').val();
jQuery('.cfig-during').attr('data-value',during_data).html(during_data + "(" + (term_data=="yr"?"年":"月") + ")" );
jQuery('.cfig-term').attr('data-value',term_data);
});
jQuery('select.term').change(function(){
var during_data=jQuery('select.during').val();
var term_data=jQuery('select.term').val();
jQuery('.cfig-during').attr('data-value',during_data).html(during_data + "(" + (term_data=="yr"?"年":"月") + ")" );
jQuery('.cfig-term').attr('data-value',term_data);	});
jQuery('input[name="instance_name"]').change(function(){
var the_data = jQuery(this).val().replace(/([\<\>])/g,function(a){if(a == "<")return "&lt;";else if(a == ">")return "&gt;"});
jQuery('.cfig-alias').attr('data-value',the_data).html(the_data);
});
jQuery('input[name="count"]').change(function(){
var the_data = parseInt(jQuery(this).val());
if( the_data < 1 ) return false;
jQuery('.cfig-how').attr('data-value',the_data.toString()).html(the_data.toString()+"台");
});


jQuery('.btn.btn-new').click(function(){
jQuery('.window-overlay').not('#popup_overlay').show(); //显示选配对话
//return false;
jQuery('.window-overlay').not('#popup_overlay').find('.close').unbind('click').click(function(){
location.hash="";
jQuery('.window-overlay').not('#popup_overlay').hide();
jQuery('.steps').css({'left':'0'}); //还原步骤为第一步
jQuery('.steps').attr('data-now-step', 0);
jQuery('.wizard-nav li').removeClass('current');
jQuery('.wizard-nav li.step1').addClass('current');
return false;
});
});
jQuery('.btn.btn-next').click(function(){
var nowstep = parseInt( jQuery('.steps').attr('data-now-step') );
nowstep++;
jQuery('.steps').attr('data-now-step', nowstep.toString());
jQuery('.steps').animate({'left':'-'+ ( nowstep * 599 ).toString() +'px'},150);
jQuery('.wizard-nav li').removeClass('current');
jQuery('.wizard-nav li.step' + (nowstep + 1).toString() ).addClass('current');
return false;
});
jQuery('.btn.btn-prev').click(function(){
var nowstep = parseInt( jQuery('.steps').attr('data-now-step') );
nowstep--;
jQuery('.steps').attr('data-now-step', nowstep.toString());
jQuery('.steps').animate({'left':'-'+ ( nowstep * 599 ).toString() +'px'},150);
jQuery('.wizard-nav li').removeClass('current');
jQuery('.wizard-nav li.step' + (nowstep + 1).toString() ).addClass('current');
return false;
});
jQuery('.btn.btn-primary').click(function(){
//Save
var get_c = function(a){
return jQuery('.cfig-'+a).attr('data-value');
}
var c_os = get_c('os');
var c_cpu = get_c('cpu');
var c_mem = get_c('mem');
var c_bandwidth = get_c('bandwidth');
var c_storage = get_c('storage');
var c_datacenter = get_c('datacenter');
var c_during = get_c('during');
var c_term = get_c('term');
if( c_cpu < 1 || c_mem < 512 || c_bandwidth < 0 || c_storage < 0 || c_cpu > 16 || c_mem > 1024*32 || c_bandwidth > 200 || c_storage > 2000 ){
//The value was not valid
return false;
}

jQuery.post('plugin.php?id=host:host&page=save','action=new&cpu='+ c_cpu +'&mem='+ c_mem +'&storage='+ c_storage +'&bandwidth='+ c_bandwidth +'&os='+c_os +"&datacenter="+ c_datacenter +"&during="+ c_during +"&term="+ c_term,function(data){
a = data.split('|')[0];
if( a == "1" ){
order_id = data.split('|')[1];
//Success
jAlert('下订单(' + order_id + ')成功！点击确定进入订单支付页面');
location.href = "plugin.php?id=host:host\x26page=listorder#view/id/" + order_id;
}else if( a == "-3" ){
<?php if(0) { ?>
/*
表单参数不足
*/
<?php } ?>
jAlert('表格未完成！请完成表单');
}else if( a == "-4" ){
<?php if(0) { ?>
/*
余额不足
*/
<?php } ?>
jAlert('余额不足');
}else if( a == "-5" ){
<?php if(0) { ?>
/*
获取价格失败等出错使价格为0的情况
*/
<?php } ?>
jAlert('出错了，请稍候重试');
}
});
});

jQuery('.step.step-1 .btn.next').click(function(){
var nowpage = parseInt(jQuery('.step.step-1 .pagination').attr('data-this-page'));
if ( nowpage > jQuery('.list-wrapper div').length / 8 ) return false;
jQuery('.step.step-1 .btn.prev').removeClass('btn-forbidden');
if ( nowpage + 1 >= jQuery('.list-wrapper div').length / 8 )jQuery('.step.step-1 .btn.next').addClass('btn-forbidden');
jQuery('.list-wrapper div').hide();
for(i = nowpage * 8; i<jQuery('.list-wrapper div').length; i++){
jQuery('.list-wrapper div').eq(i).show();
}	
jQuery('.step.step-1 .pagination').attr('data-this-page', (nowpage + 1).toString() );
});

jQuery('.step.step-1 .btn.prev').click(function(){
var nowpage = parseInt(jQuery('.step.step-1 .pagination').attr('data-this-page'));
if ( nowpage < 2  ) return false;
jQuery('.step.step-1 .btn.next').removeClass('btn-forbidden');
if ( nowpage - 1 < 2 )jQuery('.step.step-1 .btn.prev').addClass('btn-forbidden');
jQuery('.list-wrapper div').hide();
for(i = (nowpage - 2) * 8; i < (nowpage - 1) * 8; i++){
jQuery('.list-wrapper div').eq(i).show();
}
jQuery('.step.step-1 .pagination').attr('data-this-page', (nowpage - 1).toString() );
});

jQuery('.list-wrapper div').hide();
for(i = 0; i< 8; i++){
jQuery('.list-wrapper div').eq(i).show();
}

jQuery(".chk-all").change(function(){
var thisvalue = jQuery(this).attr('data-value');
//console.log(thisvalue);
if( thisvalue == "0" ){
//alert('全选');
jQuery(".chk-item").attr('checked','checked');
jQuery(this).attr('data-value','1');
}else if( thisvalue == "1" ){
//alert('反选');
jQuery(".chk-item").removeAttr('checked','false');
jQuery(this).attr('data-value','0');
}
});

jQuery(".name-edit").hide();
jQuery(".instances").addClass('selected');
if(location.hash == "#apply"){
jQuery('.btn-new').click();
}

jQuery('.form-search input[type="search"]').keyup(function(){
jQuery('.table-ecslist tbody tr').hide();
jQuery('.table-ecslist .id:contains("'+jQuery(this).val()+'")').parent().parent().show();
});
});
</script>		<script type="text/javascript">
jQuery(document).ready(function(){
jQuery('a[data-rel]').each(function() {
jQuery(this).attr('rel', jQuery(this).data('rel'));
});
var this_url = "<?php echo substr($_SERVER['REQUEST_URI'],1);?>";
jQuery('.leftmenu .nav li.active').removeClass('active');
jQuery('.leftmenu .nav li a[href="' + this_url + '"]').parent().addClass('active');
jQuery('a[href="#"]').hover(function(){
jQuery(this).attr('href','javascript:void(0);');
});
});
var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1000067456'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/q_stat.php%3Fid%3D1000067456' type='text/javascript'%3E%3C/script%3E"));
</script>
</div>
</body>
</html>