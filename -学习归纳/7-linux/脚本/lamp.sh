#!/bin/bash
#准备工作
clear && printf "Install in:[##                                      ]#环境准备中"
yum -y install gcc* 
#安装基本编译工具
service httpd stop 
service mysql stop 
#关闭系统中的服务
service iptables stop 
#关闭防火墙
setenforce 0 
#关闭selinux
clear && printf "Install in:[##                                      ]#解包中"
a=`ls .|grep ".gz$"`
b=`ls .|grep ".tar$"`
c=`ls .|grep ".zip$"`
for i in $a
	do
		tar zxf $i
	done
for i in $b
	do
		tar xf $i
	done
for i in $c
	do
		unzip -o $i >> /etc/null
	done
clear && printf "Install in:[####                                    ]#Libxml2"
yum -y install python-devel 
yum -y install libxml2-devel
cd ./libxml2-2.9.1
./configure --prefix=/usr/local/libxml2/  
make    && make install  


clear && printf "Install in:[######                                  ]#libmcrypt"
cd ../libmcrypt-2.5.8 
./configure --prefix=/usr/local/libmcrypt/  
make    &&  make install    
cd libltdl
./configure --enable-ltdl-install  
make     && make install   
cd -

clear && printf "Install in:[########                                ]#mhash"
cd ../mhash-0.9.9.9
./configure   
make     && make install    


clear && printf "Install in:[##########                              ]#mcrypt"
cd ../mcrypt-2.6.8
LD_LIBRARY_PATH=/usr/local/libmcrypt/lib:/usr/local/lib \ 
./configure --with-libmcrypt-prefix=/usr/local/libmcrypt    
make     && make install   

clear && printf "Install in:[############                            ]#zlib"
cd ../zlib-1.2.3
./configure     && sed -i "s/CFLAGS=-O3 -DUSE_MMAP/CFLAGS=-O3 -DUSE_MMAP -fPIC/g" Makefile
make     && make install    


clear && printf "Install in:[##############                          ]#libpng"
cd ../libpng-1.2.31
./configure --prefix=/usr/local/libpng    
make     && make install     

clear && printf "Install in:[################                        ]#libtool"
yum -y install libtool    
clear && printf "Install in:[##################                      ]#jpeg6"
mkdir /usr/local/jpeg6    
mkdir /usr/local/jpeg6/bin    
mkdir /usr/local/jpeg6/lib    
mkdir /usr/local/jpeg6/include    
mkdir -p /usr/local/jpeg6/man/man1    
cd ../jpeg-6b
./configure --prefix=/usr/local/jpeg6/ --enable-shared --enable-static    
make     && make install   



clear && printf "Install in:[####################                    ]#FreeType"
cd ../freetype-2.3.5
./configure --prefix=/usr/local/freetype/    
make     &&  make install  


clear && printf "Install in:[######################                  ]#GD库"
mkdir /usr/local/gd2    
cd ../gd-2.0.35
sed -i "s#png.h#/usr/local/libpng/include/png.h#g" gd_png.c
./configure --prefix=/usr/local/gd2/ --with-jpeg=/usr/local/jpeg6/ --with-freetype=/usr/local/freetype/ --with-png=/usr/local/libpng/    
make     && make install   



clear && printf "Install in:[########################                ]#pcre"
cd ../pcre-8.34  
./configure     && make     && make install   

clear && printf "Install in:[##########################              ]#apache"
cp -r ../apr-1.4.6 ../httpd-2.4.7/srclib/apr
cp -r ../apr-util-1.4.1 ../httpd-2.4.7/srclib/apr-util
yum -y install openssl-devel  
cd ../httpd-2.4.7
./configure --prefix=/usr/local/apache2/ --sysconfdir=/usr/local/apache2/etc/ --with-included-apr --enable-so --enable-deflate=shared --enable-expires=shared --enable-rewrite=shared    
make     && make install     && echo "apache安装成功。。。"
/usr/local/apache2/bin/apachectl start    
echo "/usr/local/apache2/bin/apachectl start" >> /etc/rc.d/rc.local



clear && printf "Install in:[############################            ]#ncurses"
yum -y install ncurses-devel  
cd ../ncurses-5.9
./configure --with-shared --without-debug --without-ada --enable-overwrite    
make     && make install     && echo "ncurses安装成功。。。"



clear && printf "Install in:[##############################          ]#cmake"
yum -y install cmake  
clear && printf "Install in:[################################        ]#bison"
yum -y install bison    
clear && printf "Install in:[##################################      ]#mysql"
# 安装MySQL	
groupadd mysql			
useradd -g mysql  mysql    
cd ../mysql-5.5.23
cmake  -DCMAKE_INSTALL_PREFIX=/usr/local/mysql    -DMYSQL_UNIX_ADDR=/tmp/mysql.sock  -DEXTRA_CHARSETS=all   -DDEFAULT_CHARSET=utf8    
-DDEFAULT_COLLATION=utf8_general_ci    -DWITH_MYISAM_STORAGE_ENGINE=1   -DWITH_INNOBASE_STORAGE_ENGINE=1    -DWITH_MEMORY_STORAGE_ENGINE=1  
-DWITH_READLINE=1    -DENABLED_LOCAL_INFILE=1   -DMYSQL_USER=mysql  -DMYSQL_TCP_PORT=3306    
make     && make install   


cd /usr/local/mysql/
chown -R mysql .
chgrp -R mysql .
/usr/local/mysql/scripts/mysql_install_db --user=mysql    
chown -R root .
chown -R mysql data
cd -
rm -rf /etc/my.cnf 
cp support-files/my-medium.cnf /etc/my.cnf
/usr/local/mysql/scripts/mysql_install_db --user=mysql     
/usr/local/mysql/bin/mysqld_safe --user=mysql &     
/usr/local/mysql/bin/mysqladmin -u root password 123456
echo "/usr/local/mysql/bin/mysqld_safe --user=mysql &" >> /etc/rc.d/rc.local

clear && printf "Install in:[####################################    ]#libtool"
yum -y install "libtool*"    
yum -y install "libtool-ltdl*"    
clear && printf "Install in:[######################################  ]#php"
sed -i '28a\  void (*data)' /usr/local/gd2/include/gd_io.h 
cd ../php-5.4.25

./configure --prefix=/usr/local/php/ --with-config-file-path=/usr/local/php/etc/ --with-apxs2=/usr/local/apache2/bin/apxs 
--with-mysql=/usr/local/mysql/ --with-libxml-dir=/usr/local/libxml2/ --with-jpeg-dir=/usr/local/jpeg6/ --with-png-dir=/usr/local/libpng/ 
--with-freetype-dir=/usr/local/freetype/ --with-gd=/usr/local/gd2/ --with-mcrypt=/usr/local/libmcrypt/ --with-mysqli=/usr/local/mysql/bin/mysql_config 
--enable-soap --enable-mbstring=all --enable-sockets  --with-pdo-mysql=/usr/local/mysql --without-pear  

make     && make install    
mkdir /usr/local/php/etc
cp php.ini-production /usr/local/php/etc/php.ini
sed -i '377a\    AddType application/x-httpd-php .php .phtml .phps' /usr/local/apache2/etc/httpd.conf
/usr/local/apache2/bin/apachectl stop     
/usr/local/apache2/bin/apachectl start  
echo -e "<?php \n\n\t phpinfo(); \n\n ?>" > /usr/local/apache2/htdocs/index.php


yum -y install zlib-devel
cd ../memcache-3.0.8
/usr/local/php/bin/phpize
./configure --with-php-config=/usr/local/php/bin/php-config
make && make install 


cd ../php-5.4.25/ext/mcrypt
/usr/local/php/bin/phpize
./configure -with-php-config=/usr/local/php/bin/php-config --with-mcrypt=/usr/local/libmcrypt/
make && make install 


sed -i 'extension_dir = "/usr/local/php/lib/php/extensions/no-debug-zts-20100525/" ' /usr/local/php/etc/php.ini
sed -i 'extension="memcache.so"; ' /usr/local/php/etc/php.ini
sed -i 'extension="mcrypt.so";  ' /usr/local/php/etc/php.ini

yum -y install "libevent*"

cd ../memcached-1.4.17
./configure -prefix=/usr/local/memcache
make && make install

useradd memcache
/usr/local/memcache/bin/memcached -memcache &
echo "/usr/local/memcache/bin/memcached -memcache &" >> /etc/rc.d/rc.loacl


cp -r ../phpMyAdmin-4.1.4-all-languages /usr/local/apache2/htdocs/phpmyadmin
cd /usr/local/apache2/htdocs/phpmyadmin
cp config.sample.inc.php config.inc.php
sed -i "s/cookie/http/g" config.inc.php
clear && printf "Install in:[########################################]\nlamp平台搭建成功成功\n"
/usrlocal/apache2/bin/apachectl stop
/usrlocal/apache2/bin/apachectl start







