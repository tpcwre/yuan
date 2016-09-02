﻿

//=====memcache 下载地址

			www.danga.com
			
			
			
			
			


//===== memcache 的使用流程

		一：将memcache 复制到指定目录，用cmd 进入到访目录

		二：执行安装命令 	memcached.exe -d install 或
							或
							memcached.exe -p 端口号		

		三：开启服务 		memcached.exe -d start	

		四：关闭服务		memcached.exe -d stop

		五：卸载		memcached.exe -d uninstall	

		六：与php连接		将 php_memcache.dll 复制到 php/ext目录下
		
		七：在php.ini配置文件中的extention模块中添加 extension=php_memcache.dll 并重启即可



		
		
		
		
		
		
		
		
		
//=====查看memcache是否启动

			memcache使用的端口是11211  用下面面命令查看11211是否已监听即可判断memcache是否启动

			使用 netstat -an 查看都有哪些端口在监听

			使用 netstat -anb 查看正在监听的端口和对应的程序，以及查看有哪些用户连接到我们的服务器。

			使用 tracert 192.xx.xx.xx  查看路由功能
		
		
		
		
		
		
	





//=====telnet 中 memcache操作 增删改查
	
		如果系统中的telnet没有开启的话，就在控制面板-》程序-》-》打开或关闭windows功能中将 Telnet客户端开启

		1，	连接memcache
		
			在CMD中 用 telnet 命令 链接到 memcached服务器
			telnet 127.0.0.1 11211


		2, 增
			add | key | 0(是否压缩) | 存放时间 | 数据大小（字符）
			
			add aa1 0 30 5
			hello
					//add 			添加命令
					//aa1			键名
					//0				是否压缩  0：否，1：是
					//30			存放时间
					//5				数据大小
			上面两行代码会在memcache服务器中保存一个 命为 key1 值为 hello 的 键值对


		3，查
			get | key名

			get key1


		4，改
			set | key名 | 0（是否压缩 | 存放时间 | 数据大小    //饿有则替换，无则创建
		  或
			replace | key名 | 0（是否压缩）| 存放时间 | 数据大小  //无key则失败


		5，删
			delete | key名

			delete key1





			
			

//=====memcached的基本命令

			-p 			监听的端口
			-l			链接的IP地址，默认是本机
			-d start 		启动memcached服务
			-d restart		重启memcached服务
			-d stop|shutdown 	关闭memecached服务
			-d install 		安装memcached服务
			-d uninstall		卸载memcached服务
			-u 			在root 运行时有效
			-m			最大内存使用，单位MB,默认64，最大2048
			-M			内存耗尽时，返回错误
			-c			最大同事链接数，默认1024
			-f 			块大小增长因子，默认1.25
			-n			最小分配空间，key+value+flags 默认48
			-h			显示帮助


			get		获取

			set		设置

			add		添加

			replace		修改

			append		在内容后面追加新内容

			prepend		在内容前面追加新内容

			incr		计数 （如在线人数）

			decr

			delete

			flush_all	统一操作所有memecache数据
				flush_all
				flush_all 900  在指定时间范围内的

			stats		








	
//===== memcache 的相关函数

		手册位置-》函数参考-》其它服务-》Memcache 
		也可直接搜索memcache

		Memcache::add — 增加一个条目到缓存服务器
		Memcache::addServer — 向连接池中添加一个memcache服务器
		Memcache::close — 关闭memcache连接
		Memcache::connect — 打开一个memcached服务端连接
		Memcache::decrement — 减小元素的值
		Memcache::delete — 从服务端删除一个元素
		Memcache::flush — 清洗（删除）已经存储的所有的元素
		Memcache::get — 从服务端检回一个元素
		Memcache::getExtendedStats — 缓存服务器池中所有服务器统计信息
		Memcache::getServerStatus — 用于获取一个服务器的在线/离线状态
		Memcache::getStats — 获取服务器统计信息
		Memcache::getVersion — 返回服务器版本信息
		Memcache::increment — 增加一个元素的值
		Memcache::pconnect — 打开一个到服务器的持久化连接
		Memcache::replace — 替换已经存在的元素的值
		Memcache::set — Store data at the server
		Memcache::setCompressThreshold — 开启大值自动压缩
		Memcache::setServerParams — 运行时修改服务器参数和状态




		
		





//===== memcache 的连接与关闭

		<?php
			/* 实例化Memcache类的对象 */
			$memcache = new Memcache; 
			
			/* 通过 $mecache中connect()方法连接到"memcache_host"位置和11211端口对应的memcached服务器 */
			$memcache -> connect('memcache_host', 11211);
			
			/* 关闭对象（对常连接不起作用） */
			$memcache ->close();
	
	
	
	
//===== 添加memcache 服务器的相关设置 	

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
			
			
	
	

//===== memcache 的分布式连接
//===== 循环向多个服务器添加多条数据
	
		<?php
			/* 实例化Memcache类的对象 */
			$memcache = new Memcache; 
			/*
			$mem->addServer('192.168.0.11', 11211);   //添加第一个memcached服务器
			$mem->addServer('192.168.0.12', 11211);   //添加第二个memcached服务器
			$mem->addServer('192.168.0.13', 11211);   //添加第三个memcached服务器
			*/
			/* 通过配置文件可以动态设置多台memcached服务器的参数 */
			$mem_conf = array(
				array('host'=>'192.168.0.11', 'port'=>'11211'),
				array('host'=>'192.168.0.12', 'port'=>'11211'),
				array('host'=>'192.168.0.13', 'port'=>'11211')
			);

			/* 通过循环按$mem_conf数组中的内容设置多台memcached服务器 */
			foreach ( $mem_conf as $v ) {
				$memcache->addServer ( $v ['host'], $v ['port'] ); 
			}  

			/* 
				使用循环向3台memcached服务器中添加100条数据
				会使用“crc32(key) % current_server_num”哈希算法将 key 平均哈希到3台服务器中
			*/
			for($i=0; $i < 100; $i++) {
				$mem->set('key'.$i, md5($i).'This is a memcached test!', 0, 60); 
						//'key'.$i	存储的KEY
						//md5....	存储的值
						//0			是否压缩
						//60		失效时间
			}

			
			
//===== memcache 在PHP中简单的增删改查操作 

		$m=memcache_connect('localhost',11211);				//连接memcache
		$a = $m->add('a',22222,false,30000);				//添加一条数据到缓存
						//a  		键名
						//22222 	内容
						//false		是否压缩
						//3000		保存时间
						//$a  		添加成功会返回true(1) 或 false(空)
						
		$m->delete('a',2);									//删除缓存中指定的数据
						// a  	键名
						// 2 	指定的时间							

		$m->replace('a',3333333);							//修改缓存指定键的值

		echo $b=$m->get('a');								//获取缓存中指定的元素值
		
		$m->close();										//关闭缓存连接

			
			
			
			
//===== memcache 添加，修改，替换数据


		<?php
			/* 实例化Memcache类的对象 */
			$memcache = new Memcache; 
			/* 连接本机的memcached服务器 */
			$memcache -> connect('localhost', 11211);
			
			/* 向本机的memcached服务器中添加一组数据 */
			$is_add1 = $memcache->add('brophp', 'BroPHP框架');
			/* 向本机添加每一数组作为数据,数组或对象将会被序列化 */
			$is_add2 = $memcache->add('lamp', array('Linux', 'Apache', 'MySQL', 'PHP'));
			/* 如果添加的key已经存在，则添加将会失败 , MEMCACHE_COMPRESSED 使用zlib压缩， 0表示不过期*/
			$is_add3 = $memcache->add('lamp', 'LAMP兄弟连',  MEMCACHE_COMPRESSED, 0);
			
			/*设置一个指定 key 的缓存变量内容, 如果key不存中则新添加，如果存在则为修改 */
			$is_set1 = $memcache->set('phpfw', 'BroPHP框架');
			/* 指定的key已经存在，则修改内容 ，缓存一周*/
			$is_set2 = $memcache->set('brophp', 'BroPHP超经量组框架',MEMCACHE_COMPRESSED, 7*24*60*60);
			
			/* 使用replace()替换一个指定已存在key 的的缓存变量内容 是set()方法的别名 ,设置大于30天的缓存*/
			$is_replace = $memcache->replace('lamp', 'LAMP兄弟连',  MEMCACHE_COMPRESSED, time()+31*24*60*60);
			
			/* 关闭与memcached服务器的连接 */
			$memcache -> close();
			
			
	
	
	
	
	
	
	
	
//===== 获取 memcache 中的指定数据

		<?php
			/* 实例化Memcache类的对象 */
			$memcache = new Memcache; 
			/* 连接本机的memcached服务器 */
			$memcache -> connect('localhost', 11211);

			/* 返回缓存的指定 brophp 的变量内容 */
			$var1 = $memcache->get('brophp');
			/*
				如果键brophp，lamp不存在 $var2 = array();
				如果brophp，lamp存在$var = array(‘brophp‘=>‘BroPHP超经量组框架‘, ‘lamp‘=>‘LAMP兄弟连‘);
			*/
			$var2 = $memcache->get(array('brophp', 'lamp'));
			
			var_dump($var1);
			var_dump($var2);
			
			/* 关闭与memcached服务器的连接 */
			$memcache -> close();
			
	
	
	
	
	
	
	
	
	
	

//===== 删除memcache中指定的数据

		<?php
			/* 实例化Memcache类的对象 */
			$memcache = new Memcache; 
			/* 连接本机的memcached服务器 */
			$memcache -> connect('localhost', 11211);

			$memcache -> delete('phpfw');       //立即删除phpfw的项
			$memcache -> delete('brophp', 0);   //立即删除brophp的项
			$memcache -> delete('lamp', 30);    //在30秒内删除lamp的项
			
			/* 关闭与memcached服务器的连接 */
			$memcache -> close();

			
			
			
			
			
			
			
			
//===== 将session 自动存储到memcaceh中
		
		安装好memcache后,打开php.ini  修改如下 字段
			将
				;session.save_handler=files
			修改为
				session.save_handler=memcache
			将
				;session.save_path="D:\xampp\tmp"
			修改为
				session.save_path="tcp://127.0.0.1:11211"
			修改完成后重启apache ， 即可将session 自动 保存到 memcache
			
		
			
			
			
