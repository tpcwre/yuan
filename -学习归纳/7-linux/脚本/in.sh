#!/bin/bash
cd /mnt
/bin/mkdir /mnt/m0
/bin/mkdir /mnt/m1
/bin/mkdir /mnt/m2
clear && printf "a---挂载目录创建成功"
echo "a---挂载目录创建成功" > /tmp/yum.log
cd /etc/yum.repos.d
/bin/mv CentOS-Base.repo CentOS-Base.repo.bak
sed -i -e 's|media/CentOS/|mnt/m0|' CentOS-Media.repo
sed -i -e 's|media/cdrom/|mnt/m1|' CentOS-Media.repo
sed -i -e 's|media/cdrecorder/|mnt/m2|' CentOS-Media.repo
sed -i -e 's|gpgcheck=1|gpgcheck=0|' CentOS-Media.repo
sed -i -e 's|enabled=0|enabled=1|' CentOS-Media.repo
/bin/mount /dev/sr0 /mnt/m0
/bin/mount /dev/sr1 /mnt/m1
/bin/mount /dev/sr2 /mnt/m2
clear && printf "b---挂载成功"
echo "b---挂载成功" > /tmp/yum.log
yum install -y gcc*
clear && printf "gcc 安装成功"
echo "1-gcc 安装成功" > /tmp/yum.log
iptables -F
setenforce 0
clear && printf "防护以暂时关闭"
echo "2--防护以暂时关闭" >> /tmp/yum.log
cd /mnt/m2
clear && printf "正在解压安装包请稍候......"
cp -r lamp-php5.4 /lamp
cd /lamp
/bin/ls *.tar.gz > ls.list
/bin/ls *.tgz >> ls.list
for TAR in `cat ls.list`
do
/bin/tar -zxf $TAR
done
/bin/rm ls.list
clear && printf "复制解压到lamp完成"
echo "3--复制解压到lamp完成" >> /tmp/yum.log
yum  install  -y  libxml2-devel
clear && printf "libxml2-devel完成"
echo "4--libxml2-devel完成" >> /tmp/yum.log
yum -y install python-devel
clear && printf "5--python-devel完成"
echo "5--python-devel完成" >> /tmp/yum.log
cd /lamp/libxml2-2.9.1
./configure --prefix=/usr/local/libxml2
make
make install
clear && printf "6--libxml2完成"
echo "6--libxml2完成" >> /tmp/yum.log
cd /lamp/libmcrypt-2.5.8
./configure --prefix=/usr/local/libmcrypt/
make && make install
clear && printf "7--libmcrypt完成"
echo "7--libmcrypt完成" >> /tmp/yum.log
cd /lamp/libmcrypt-2.5.8/libltdl
./configure --enable-ltdl-install
make && make install
clear && printf "8--libltdl完成"
echo "8--libltdl完成" >> /tmp/yum.log
cd /lamp/mhash-0.9.9.9
./configure
make && make install
clear && printf "9--mhash完成"
echo "9--mhash完成" >> /tmp/yum.log
cd /lamp/mcrypt-2.6.8
LD_LIBRARY_PATH=/usr/local/libmcrypt/lib:/usr/local/lib ./configure --with-libmcrypt-prefix=/usr/local/libmcrypt
make && make install
clear && printf "10--mhash完成"
echo "10--mhash完成" >> /tmp/yum.log
cd /lamp/zlib-1.2.3
./configure
make && make install >> /root/zlib.log
clear && printf "11--zlib完成"
echo "11--zlib完成" >> /tmp/yum.log
cd /lamp/libpng-1.2.31
./configure --prefix=/usr/local/libpng
make && make install
clear && printf "12--libpng完成"
echo "12--libpng完成" >> /tmp/yum.log
mkdir /usr/local/jpeg6
mkdir /usr/local/jpeg6/bin
mkdir /usr/local/jpeg6/lib
mkdir /usr/local/jpeg6/include
mkdir /usr/local/jpeg6/man
mkdir /usr/local/jpeg6/man/man1
cd /lamp/jpeg-6b
./configure --prefix=/usr/local/jpeg6/ --enable-shared --enable-static
make && make install
clear && printf "13--jpeg完成"
echo "13--jpeg完成" >> /tmp/yum.log
cd /lamp/freetype-2.3.5
./configure --prefix=/usr/local/freetype/
make && make install
clear && printf "14--freetype完成"
echo "14--freetype完成" >> /tmp/yum.log
mkdir /usr/local/gd2
cd /lamp/gd-2.0.35
sed -i -e 's|png.h|/usr/local/libpng/include/png.h|' gd_png.c
./configure --prefix=/usr/local/gd2/ --with-jpeg=/usr/local/jpeg6/ --with-freetype=/usr/local/freetype/ --with-png=/usr/local/libpng/
make && make install
clear && printf "15--gd2完成"
echo "15--gd2完成" >> /tmp/yum.log
cd /lamp/httpd-2.4.7
cp -r /lamp/apr-1.4.6 /lamp/httpd-2.4.7/srclib/apr
cp -r /lamp/apr-util-1.4.1 /lamp/httpd-2.4.7/srclib/apr-util
cd /lamp/pcre-8.34
./configure && make && make install
cd /lamp/httpd-2.4.7
./configure --prefix=/usr/local/apache2/ --sysconfdir=/usr/local/apache2/etc/ --with-included-apr --enable-so --enable-deflate=shared --enable-expires=shared --enable-rewrite=shared
make && make install
/usr/local/apache2/bin/apachectl start
echo "/usr/local/apache2/bin/apachectl start" >> /etc/rc.d/rc.local
clear && printf "16--httpd完成"
echo "16--httpd完成" >> /tmp/yum.log
yum -y install "ncurses*"
cd /lamp/ncurses-5.9
./configure --with-shared --without-debug --without-ada --enable-overwrite
make && make install
clear && printf "17--ncurses完成"
echo "17--ncurses完成" >> /tmp/yum.log
yum -y install -y cmake
clear && printf "18--cmake完成"
echo "18--cmake完成" >> /tmp/yum.log
yum -y install -y bison
clear && printf "19--bison完成"
echo "19--bison完成" >> /tmp/yum.log
groupadd mysql
useradd -g mysql mysql
cd /lamp/mysql-5.5.23
cmake -DCMAKE_INSTALL_PREFIX=/usr/local/mysql -DMYSQL_UNIX_ADDR=/tmp/mysql.sock -DEXTRA_CHARSETS=all -DDEFAULT_CHARSET=utf8 -DDEFAULT_COLLATION=utf8_general_ci -DWITH_MYISAM_STORAGE_ENGINE=1 -DWITH_INNOBASE_STORAGE_ENGINE=1 -DWITH_MEMORY_STORAGE_ENGINE=1 -DWITH_READLINE=1 -DENABLED_LOCAL_INFILE=1 -DMYSQL_USER=mysql -DMYSQL_TCP_PORT=3306
make && make install
make clean
rm CMakeCache.txt
cd /usr/local/mysql
chown -R mysql:mysql .
/usr/local/mysql/scripts/mysql_install_db --user=mysql
chown -R root .
chown -R mysql data
cp support-files/my-medium.cnf /etc/my.cnf
/usr/local/mysql/scripts/mysql_install_db --user=mysql
/usr/local/mysql/bin/mysqld_safe --user=mysql &
echo "/usr/local/mysql/bin/mysqld_safe --user=mysql &" >> /etc/rc.d/rc.local
/usr/local/mysql/bin/mysqladmin -u root password 123
clear && printf "20--mysql完成"
echo "20--mysql完成" >> /tmp/yum.log
yum -y install "libtool*"
sed -i "28i\void (*data);" /usr/local/gd2/include/gd_io.h
clear && printf "21--libtool完成"
echo "21--libtool完成" >> /tmp/yum.log
cd /lamp/php-5.4.25
./configure --prefix=/usr/local/php/ --with-config-file-path=/usr/local/php/etc/ --with-apxs2=/usr/local/apache2/bin/apxs --with-mysql=/usr/local/mysql/ --with-libxml-dir=/usr/local/libxml2/ --with-jpeg-dir=/usr/local/jpeg6/ --with-png-dir=/usr/local/libpng/ --with-freetype-dir=/usr/local/freetype/ --with-gd=/usr/local/gd2/ --with-mcrypt=/usr/local/libmcrypt/ --with-mysqli=/usr/local/mysql/bin/mysql_config --enable-soap --enable-mbstring=all --enable-sockets --with-pdo-mysql=/usr/local/mysql --without-pear
make && make install
mkdir /usr/local/php/etc
cp /lamp/php-5.4.25/php.ini-production /usr/local/php/etc/php.ini
sed -i "378i\AddType application/x-httpd-php .php .phtml .phps" /usr/local/apache2/etc/httpd.conf
/usr/local/apache2/bin/apachectl stop
/usr/local/apache2/bin/apachectl start
cd /usr/local/apache2/htdocs/
echo "<?php phpinfo(); ?>" > test.php
clear && printf "22--php完成"
echo "22--php完成" >> /tmp/yum.log
cd /lamp/memcache-3.0.8
/usr/local/php/bin/phpize
./configure --with-php-config=/usr/local/php/bin/php-config
make && make install
clear && printf "23--memcache完成"
echo "23--memcache完成" >> /tmp/yum.log
cd /lamp/php-5.4.25/ext/mcrypt/
/usr/local/php/bin/phpize
./configure --with-php-config=/usr/local/php/bin/php-config --with-mcrypt=/usr/local/libmcrypt/
make && make install
echo "extension_dir='/usr/local/php/lib/php/extensions/no-debug-zts-20100525/';" >> php.ini
echo "extension='mcrypt.so';" >> php.ini
echo "extension='memcache.so';" >> php.ini
clear && printf "24--mcrypt完成"
echo "24--mcrypt完成" >> /tmp/yum.log
yum -y install "libevent*"
clear && printf "25--libevent完成"
echo "25--libevent完成" >> /tmp/yum.log
cd /lamp/memcached-1.4.17
./configure --prefix=/usr/local/memcache
make && make install
useradd memcache
/usr/local/memcache/bin/memcached -umemcache &
echo "/usr/local/memcache/bin/memecached -umemcache &" >> /etc/rc.d/rc.local
clear && printf "26--umemcache完成"
echo "26--umemcache完成" >> /tmp/yum.log
cd /lamp
cp -r phpMyAdmin-4.1.4-all-languages /usr/local/apache2/htdocs/phpmyadmin
cd /usr/local/apache2/htdocs/phpmyadmin
cp config.sample.inc.php config.inc.php
sed -i "30i\$cfg['Servers'][$i]['auth_type'] = 'http';" config.inc.php
clear && printf "27--phpMyAdmin完成"
echo "27--phpMyAdmin完成" >> /tmp/yum.log
