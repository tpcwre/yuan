<?php
	/* 实例化Memcache类的对象 */
	$memcache = new Memcache; 
	
	/* 注意第6个参数值15的作用 */
	$is_add = $memcache->addServer('localhost', 11211, true, 1, 1, 15, true); 
									//localhost 连接地址
									//11211 	端口
									//true		是否持久连接
									//1			控制被服务器选中的权重
									//1			设置超时，默认为1秒
									//15		超时失败后重连的间隔  默认15秒
									//true		允许故障转移
	
	/* 向本机的memcached服务器中添加一组数据 */
	$is_set = $memcache->set('brophp', 'BroPHP超经量组框架');
	
	
	
