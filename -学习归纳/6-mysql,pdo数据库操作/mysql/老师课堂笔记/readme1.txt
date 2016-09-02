复习：
    1、模式修正符
    i   
    m   
    s
    x
    U  (.*?)

    2、数据库  MySQL
        1、链接MySQL数据库
            mysql 命令
                -u  用户名  root（最高权限）
                -p  密码
                -h  主机名  localhost
                -P  端口号  3306
                -b  关掉beep    蜂鸣器


            你的MySQL密码是多少，不要问我，我也不知道。

            C:\Documents and Settings\yanhaijing>mysql -u root -h localhost -P 3306 -b -p
            Enter password:

            属性-》高级-》环境变量-》系统变量-》path-》在后面加上;mysql的路径
            C:\xampp\mysql\bin

            注意：一定要英文的分号。

        2、数据库语法的特点：
            1、每个SQL命令都需要使用分号来完成.
            2、可以将一行命令分成多行来写，最后写一个分号。
            3、-> 表示MySQL需要你继续输入命令。
            4、' 表示等待下一行，等待以单引号开始的字符串让他结束
            5、查询命令不区分大小写，一般来说我们用大写字母来写出SQL的关键字，用小写字母写出数据库、数据表、和数据列的名字

        3、退出
            quit
            exit
            \q

        4、常见的操作
            \c 取消未完成的操作
            \g 代替结束符

        5、数据库操作
            创建数据库:
                create database 数据库名
                    mysql> create database lamp113;
                    Query OK, 1 row affected (0.00 sec)

                注意：
                    1、每创建一个数据库都会在你的MySQL的data目录下创建一个以数据库名称命名的文件夹。
                    2、数据库的名称是唯一的。
                    3、注意，学计算机的时候不要给我来什么特殊符号(遵循PHP变量的命名方式。)

            删除数据库:
                drop database 数据库名
                    mysql> drop database lamp113;
                    Query OK, 0 rows affected (0.05 sec)

            显示当前数据库服务器下所有的数据库
                show databases;

            进入、选择数据库:
                use 数据库名
                
                mysql> use lamp113;
                Database changed

                注意:windows下面数据库名是不区分大小写的，在Linux下面严格区分大小写。

            查看已经选择的数据库:
                select database();
                mysql> select database();
                +------------+
                | database() |
                +------------+
                | lamp113    |
                +------------+
                1 row in set (0.00 sec)

        6、数据表操作
            查看数据库中的表：show tables;

            创建数据表:
                create table 表名(字段的一些信息及一些参数)
                mysql> create table user(
                    -> id int,
                    -> name char(255),
                    -> sex char(1),
                    -> age int
                    -> );
                Query OK, 0 rows affected (0.05 sec)

            查看表结构:desc 表名
                mysql> desc user;
                +-------+-----------+------+-----+---------+-------+
                | Field | Type      | Null | Key | Default | Extra |
                +-------+-----------+------+-----+---------+-------+
                | id    | int(11)   | YES  |     | NULL    |       |
                | name  | char(255) | YES  |     | NULL    |       |
                | sex   | char(1)   | YES  |     | NULL    |       |
                | age   | int(11)   | YES  |     | NULL    |       |
                +-------+-----------+------+-----+---------+-------+
                4 rows in set (0.05 sec)

            查看建表语句：show create table 表名

                mysql> show create table user \G
                *************************** 1. row ***************************
                       Table: user
                Create Table: CREATE TABLE `user` (
                  `id` int(11) DEFAULT NULL,
                  `name` char(255) DEFAULT NULL,
                  `sex` char(1) DEFAULT NULL,
                  `age` int(11) DEFAULT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1
                1 row in set (0.00 sec)

                \G能够让你得到的数据站起来，更好看一点。

            删除表：drop table 表名
                mysql> show tables;
                +-------------------+
                | Tables_in_lamp113 |
                +-------------------+
                | user1             |
                +-------------------+
                1 row in set (0.05 sec)

            注意：
                1、如果有特殊字符可以使用反引号将数据库名包含起来操作
                2、建表的时候每个字段使用,进行分隔，最后一个字段不用加,


        题目：
            1、我需要一个数据库，数据库的名称为lamp113
            2、查看数据库，是否创建成功
            3、选择数据库  lamp113
            4、查看是否已经选中了该库
            5、创建数据表 user  字段  id int name char(255)
            6、查看lamp113中所有的数据表
            7、查看表结构，以及建表语句。
            8、删除该表
            9、删除该数据库

        7、数据的操作
            插入数据:insert into 表名(字段名1,字段名2) values (值1,值2)

            注意：
                1、如果插入的是字符型数据一定要加引号
                2、插入的字段名不要加引号 
                mysql> insert into user1(id,name,sex,age) values (1,'zengguofang','0',73);
                Query OK, 1 row affected (0.01 sec)

                mysql> insert into user1(id,name,sex,age) values (1,'mayao','0',84);
                Query OK, 1 row affected (0.00 sec)

                mysql> insert into user1(id,name,sex,age) values (1,'yanhaijing','0',18);
                Query OK, 1 row affected (0.00 sec)


        李慧   <->   送情书    ->     

            查看数据:
                select 字段名1,字段名2.....  from 表名
                select * from 表名

                mysql> select id,name from user1;
                +------+-------------+
                | id   | name        |
                +------+-------------+
                |    1 | zengguofang |
                |    1 | mayao       |
                |    1 | yanhaijing  |
                +------+-------------+
                3 rows in set (0.00 sec)

                mysql> select *from user1;
                +------+-------------+------+------+
                | id   | name        | sex  | age  |
                +------+-------------+------+------+
                |    1 | zengguofang | 0    |   73 |
                |    1 | mayao       | 0    |   84 |
                |    1 | yanhaijing  | 0    |   18 |
                +------+-------------+------+------+
                3 rows in set (0.00 sec)
            注意：*代表所有的字段

            修改数据
                update 表名 set 字段1=值1,字段名2=值2 where 写条件
                mysql> update user1 set sex='1' where name='yanhaijing';
                Query OK, 1 row affected (0.02 sec)

                注意：修改的时候一定要加上条件，否则会全部都修改掉


            删除数据
                delete from 表名 where 条件


        8、导出MySQL数据1(退出MySQL的时候)
        C:\xampp\mysql 里面的data目录拷贝出来。

        直接导出数据库:mysqldump -u 用户名 -p 数据库名 > 导出的文件名
        C:\Documents and Settings\yanhaijing>mysqldump -u root -p 数据库名 > C:\xampp\htdocs\113\20150722\myMySQL.sql


        直接导出数据库中的某个数据表:mysqldump -u 用户名 -p 数据库名 表名 > 导出的文件名
        C:\Documents and Settings\yanhaijing>mysqldump -u root -p mysql user > C:\xampp\htdocs\113\20150722\myMySQL1.sql

        导出数据库中的表的结构
        C:\Documents and Settings\yanhaijing>mysqldump -u root -p  -d mysql user >C:\xampp\htdocs\113\20150722\hehe.sql


        9、导入数据库
            1、在数据库外面的情况下：
            mysql -u 用户名 -p 数据库名 < 库文件中

            2、在已经选中了数据库的情况下:
            source 数据库备份文件名

        10、修改密码
            1、退出MySQL的情况下使用:
                mysqladmin -u 用户名 -p password 新密码

            2、进入到mysql里面的时候
            set password for '用户名'@'localhost' = password('新密码');

            mysql> set password for 'root'@'localhost' = password('1234@abcd');
            Query OK, 0 rows affected (0.00 sec)

        注意：
            1、你的密码没了，我也不知道。
            2、你用上面的两种方法，修改的都会生效。
            3、密码尽量设置的简单点。

        11、为什么不用账号密码也能进？数据库安装的时候都会有一个默认的账户（匿名用户）,是不用账号和密码的。他只有两个库的权限。但是我们在操作的时候依然会将这个用户删掉。因为如果不删除，将会对你的MySQL数据库造成威胁。
        mysql> drop user ''@'localhost';

        12、MySQL忘记密码
            步骤：
                1、关闭正在运行的mysql
                2、打开dos切换到mysql的bin目录下
                cd  你的路径
                cd C:\xampp\mysql\bin

                3、输入mysqld --skip-grant-table 回车
                4、再打开一个dos窗口进入到mysql的bin目录下
                5、输入mysql回车
                6、进入到mysql的mysql库中  use mysql
                7、update user set password=password('新密码') where
                user="root";
                8、刷新权限
                flush privileges 

        题目：
            1、我需要一个数据库，数据库的名称为lamp113
            2、查看数据库，是否创建成功
            3、选择数据库  lamp113
            4、查看是否已经选中了该库
            5、创建数据表 user  字段  id int name char(255)
            6、查看lamp113中所有的数据表
            7、查看表结构，以及建表语句。
            8、插入 你最喜欢的同学的名字到name字段中（需要5个）---男女都行
            9、查看所有你插入的数据。
            10、修改你插入的第二用户 将名字改为'xiaokeai'
            11、导出该表中的数据，导出到xxoo.sql
            12、删除该表
            13、进入数据库中，将刚才导出的东西导入进去
            14、查看是否导入成功
            15、删除该表
            16、删除该数据库
            

作业：
    1、手敲 最少3遍。。。明天默写。 如果默写不出来。   没默写出来的。 以后个人就手抄。
    2、整理笔记

预习：
    1、建表语句  
