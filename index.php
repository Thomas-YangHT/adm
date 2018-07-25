<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>云唯IT实训</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">云唯IT实训</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a> <span class="logo navbar-slogan f-l mr-10 hidden-xs">v1.0</span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">

			</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="blue" title="默认（蓝色）">默认（蓝色）</a></li>
							<li><a href="javascript:;" data-val="default" title="黑色">黑色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="绿色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<aside class="Hui-aside">
	<input runat="server" id="divScrollValue" type="hidden" value="" />

	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 监控管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					  <li><a data-href='welcome.php'     data-title="[总览]"           href="javascript:void(0)" >[总览]</a></li>
					  <li><a data-href='http://grafana.yunwei.edu'  data-title="[grafana]"       href="javascript:void(0)" >[Grafana]</a></li>
					  <li><a data-href='http://zabbix.yunwei.edu'     data-title="[zabbix]"     href="javascript:void(0)" >[zabbbix]</a></li>
					 <!-- <li><a data-href='redisinfo.php'              data-title="[redis状态]"       href="javascript:void(0)" >[redis状态]</a></li> -->
					  <li><a data-href='http://smokeping.yunwei.edu/smokeping/smokeping.fcgi?target=Other'    data-title="[到各地网络状况]"     href="javascript:void(0)" >[到各地网络状况]</a></li>
					  <li><a data-href='qinmonitor/portstatus.php'    data-title="[应用端口监控]"       href="javascript:void(0)" >[应用端口状态php]</a></li>
					  <li><a data-href='check.html'    data-title="[应用端口监控]"       href="javascript:void(0)" >[应用端口状态nmap]</a></li>	
					 <!--	  <li><a data-href='http://docker1.yunwei.edu:9000'    data-title="[swarm 管理]"       href="javascript:void(0)" >[portainer-docker1]</a></li>	
					  <li><a data-href='http://docker2.yunwei.edu:9000'    data-title="[swarm 管理]"       href="javascript:void(0)" >[portainer-docker2]</a></li>	
					  <li><a data-href='http://ranchar.yunwei.edu:8080'    data-title="[Rancher 管理]"       href="javascript:void(0)" >[Rancher]</a></li>	
					-->
  					  <li><a data-href='http://scope.yunwei.edu:4040'        data-title="[weave scope 管理]"     href="javascript:void(0)" >[scope]</a></li>	
  					  <li><a data-href='http://172.16.254.116:1080/stats'    data-title="[haproxy状态]"          href="javascript:void(0)" >[haproxy状态]</a></li>	
                    				   
				</ul>
			</dd>
		</dl>

		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 公共服务<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					  <li><a data-href='http://download2.yunwei.edu'    data-title="[http下载]"       href="javascript:void(0)" >[http下载]</a></li> 					  
					 <!--	  <li><a data-href='ftp://ftp2.yunwei.edu'    data-title="[ftp下载]"       href="javascript:void(0)" >[ftp下载]</a></li> 	-->	
				      <li><a data-href='ftp://ftp2.yunwei.edu'          data-title="[ftp下载]"         href="ftp://ftp2.yunwei.edu" target="_blank">[ftp下载]</a> </li> 
					  <li><a data-href='http://registry.yunwei.edu'     data-title="[docker镜相]"       href="javascript:void(0)" >[registry]</a></li> 	
					  <li><a data-href='http://cobbler.yunwei.edu/cobbler_web'    data-title="[cobbler自动安装]"       href="javascript:void(0)" >[cobbler自动安装]</a></li> 	
				 </ul>
			</dd>
		</dl>	
		
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 访问日志分析<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					  <li><a data-href='http://awstats.yunwei.edu/awstats.pl?config=grafana'    data-title="[访问日志grafana]"        href="javascript:void(0)" >[访问grafana]</a></li>
					  <li><a data-href='http://awstats.yunwei.edu/awstats.pl?config=zahbix'     data-title="[访问日志zabbix]"         href="javascript:void(0)" >[访问zabbix]</a></li>
					  <li><a data-href='http://awstats.yunwei.edu/awstats.pl?config=download'   data-title="[访问日志download]"       href="javascript:void(0)" >[访问download]</a></li>
					  <li><a data-href='http://kibana.yunwei.edu:5601'      data-title="[kibana示例]"            href="javascript:void(0)" >[kibana示例]</a></li>
						   
				</ul>
			</dd>
		</dl>		
		
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 配置管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					 <!-- <li><a data-href='http://py.yunwei.edu'    data-title="[uwsgi+flask]"       href="javascript:void(0)" >[Hello World]</a></li>
					  <li><a data-href='http://dns.yunwei.edu:8080'    data-title="[dnsmasq设置]"       href="javascript:void(0)" >[dnsmasq设置]</a></li>-->
					  <li><a data-href='ngxconf/index.php'    data-title="[Nginx配置]"       href="javascript:void(0)" >[Nginx配置]</a></li> 	
                      <li><a data-href='bindconf/index.php'    data-title="[Bind配置]"       href="javascript:void(0)" >[DNS配置]</a></li> 		
                      <li><a data-href='haprconf/index.php'    data-title="[Haproxy配置]"       href="javascript:void(0)" >[Haproxy配置]</a></li> 	
					  <li><a data-href='http://webvirtmgr.yunwei.edu'    data-title="[虚拟机管理]"       href="javascript:void(0)" >[webvirtmgr]</a></li> 					  
				  
				</ul>
			</dd>
		</dl>
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 主机管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
				      <li><a data-href='hostip.php'                data-title="[所有资源]"      href="javascript:void(0)" >[所有资源]</a></li>
					  <li><a data-href='hostipmodify.php'          data-title="[主机增删改]"    href="javascript:void(0)" >[主机增删改]</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 容器管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					  <li><a data-href='dockermg/dockerstatus.php'     data-title="[容器状态]"       href="javascript:void(0)" >[容器状态]</a></li>
					<!--  <li><a data-href='/dockermg/dockercreate.php'     data-title="[容器创建]"       href="javascript:void(0)" >[容器创建]</a></li> -->
					  <li><a data-href='dockermg/dkopcont.php'         data-title="[容器启停]"       href="javascript:void(0)" >[容器启停]</a></li>
					  <li><a data-href='dkhostmodify.php'               data-title="[Docker主机管理]" href="javascript:void(0)" >[Docker主机管理]</a></li>					  
				</ul>
			</dd>
		</dl>

		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 云计算平台<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					  <!--<li><a data-href='http://openstack.yunwei.edu'        data-title="[OPENSTACK示例]"           href="javascript:void(0)" >[OPENSTACK]</a></li>-->
					  <li><a data-href='http://openstack.yunwei.edu' data-title="[OPENSTACK示例]" href='http://openstack.yunwei.edu'  target="_blank">[OPENSTACK]</a></li>
					  <li><a data-href='http://hharbor.yunwei.edu'      data-title="[harbor]"           href="javascript:void(0)" >[harbor]</a></li>
					  <li><a data-href='https://k8s.yunwei.edu:37517'      data-title="[kubernetes示例]"           href="javascript:void(0)" >[kubernetes示例]</a></li>
   					  <li><a data-href='https://account.aliyun.com/login/login.htm'  data-title="[阿里镜相]"     href="javascript:void(0)" >[阿里镜相]</a></li>
   					  <li><a data-href='https://console.163yun.com'        data-title="[网易镜相]"        href="javascript:void(0)" >[网易镜相]</a></li>                  
   					  <li><a data-href='https://console.qingcloud.com/login'  data-title="[青云链接]"     href="javascript:void(0)" >[青云链接]</a></li>
					  
			  </ul>
			</dd>
		</dl>			

		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 硬件管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
   					  <li><a data-href='https://172.16.254.201/login.html'  data-title="[idrac201]"     href="https://172.16.254.201/login.html" target="_blank">[idrac201]</a></li>
   					  <li><a data-href='https://172.16.254.202/login.html'  data-title="[idrac202]"     href="https://172.16.254.202/login.html" target="_blank">[idrac202]</a></li>
   					  <li><a data-href='https://172.16.254.203/login.html'  data-title="[idrac203]"     href="https://172.16.254.203/login.html" target="_blank">[idrac203]</a></li>
   					  <li><a data-href='https://172.16.254.204/login.html'  data-title="[idrac204]"     href="https://172.16.254.204/login.html" target="_blank">[idrac204]</a></li>
   					  <li><a data-href='https://172.16.254.205/login.html'  data-title="[idrac205]"     href="https://172.16.254.205/login.html" target="_blank">[idrac205]</a></li>
   					  <li><a data-href='https://172.16.254.206/login.html'  data-title="[idrac206]"     href="https://172.16.254.206/login.html" target="_blank">[idrac206]</a></li>
   					  <li><a data-href='https://172.16.254.207/login.html'  data-title="[idrac207]"     href="https://172.16.254.207/login.html" target="_blank">[idrac207]</a></li>
					  <li><a data-href='http://172.16.0.1'  data-title="[出口路由]"     href="javascript:void(0)" >[出口路由]</a></li>
                   
			  </ul>
			</dd>
		</dl>		
		
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 操作日志<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					  <li><a data-href='showoplog.php'             data-title="[查询本系统操作日志]"   href="javascript:void(0)" >[本系统操作日志]</a></li>
					  <li><a data-href='dockermg/tailffile.php'   data-title="[查询其它应用日志]"          href="javascript:void(0)" >[查询其它服务器日志]</a></li>
				</ul>
			</dd>
		</dl>			

	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active"><span title="总览" data-href="welcome.php">总览</span><em></em></li>
			</ul>
		</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
	</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="welcome.php"></iframe>
		</div>
	</div>
</section>

<div class="contextMenu" id="Huiadminmenu">
	<ul>
		<li id="closethis">关闭当前 </li>
		<li id="closeall">关闭全部 </li>
	</ul>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script type="text/javascript">


</script> 


</body>
</html>