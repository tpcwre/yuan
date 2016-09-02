复习：
    1、字段的类型
        整形
        浮点、定点型
        字符型
        枚举
        集合
    2、约束条件
        公用
        整形

    3、索引
        常规索引
        唯一索引
        主键索引 

今日课程：
    1、存储引擎，MySQL很重要的一个特性就是存储引擎。可以根据应用的需要选择如何存储。用户可以根据不同的存储引擎提高应用效率，以适用不同的应用场景。
    查看默认的存储引擎
    mysql> show variables like 'default_storage_engine';

    查看所有支持的存储引擎show engines;

    事务机制：就是在交易的时候如果遇到异常情况，那么将会还原到没有进行交易之前的状态。
    表锁：开销小，锁定粒度大，加锁速度快，发生锁冲突的概率高。
    行锁：开销大，锁定粒度小，枷锁速度慢，发生冲突的概率低。

    创建表的时候怎么加存储引擎。
    create table 表名(
    列....
    )engine=存储引擎名称

    注意：如果不加将使用默认存储引擎。

    MyISAM：不支持事务，优势就是访问速度快，如果对事务完整性没有要求，或者以selet\insert为主的应用基本上都可以使用这个引擎来创建表。

    如果使用MyISAM在磁盘上将会存储成3个文件。其文件名和表名称相同，扩展名分别是：
        .frm(存储表的定义)
        .MYD(存储数据)
        .MYI(存储索引)

    InnoDB：写处理效率会差一些，并且占用更多磁盘空间保存数据和索引。
    .frm(存储表的结构)
    数据和索引存储在my.ini中的innodb_data_home_dir目录下
    具体的文件名在my.ini中的innodb_data_file_path选项中指定的内容。

    ibdata1:10M:autoextend

    idbdata1：表示存储的位置
    10M，初始大小。超出10M之后会自动每次分配给8M给idbdata1这个文件。

    常用的存储引擎的使用环境
        1、MyISAM：如果应用是以读操作和插入操作为主，只有很少的更新和删除操作，并且对事务的完整性要求不高。
        2、InnoDB：对于事务的处理应用程序有较高的要求，数据除了插入和查询外，还有很多的更新、删除操作。

    2、字符集
        MySQL的字符集涉及两个概念
            字符集：用来定义MySQL存储字符串的方式。
            校对规则：定义了比较字符串的方式。
            字符集和校对规则是一对多的关系。

            校对规则的命名:以相关的字符集名开始，通常以_ci（大小写不敏感），或_cs（大小写敏感）结尾

            查看系统中的字符集：
            mysql> show character set;

            数据库中字符集分为4个级别：
                服务器级：
                数据库级：稍微会用
                    mysql> show create database lamp113;
                    mysql> create database  lamp113 default character set utf8;
                数据表级：经常用
                    mysql> show create table t1;
                mysql> create table t2(
                    -> id int,
                    -> name char(32)
                    -> )engine=myisam default charset=utf8;
                                    
                数据列级：经常不用

        3、修改表
        alter table 表名 动作

        alter table 表名 change 字段名 新字段名 类型 约束条件
        mysql> alter table t2 change name mingzi char(32) not null;

        alter table 表名 modify 字段名 类型 约束条件
        mysql> alter table t2 modify mingzi int;

        注意：change可以改名，modify只能改类型

         alter table 表名 add 字段名 类型
         mysql> alter table t2 add sex enum('0','1');
         mysql> alter table t2 add age int first; 将新增字段放在最前面
         mysql> alter table t2 add test int after id; 将新增字段放在某字段的后面

        alter table 表名 drop 字段名
        mysql> alter table t2 drop age;

        alter table 旧表明 rename as 新表名
        mysql> alter table t2 rename as tt2;
       
    3、插入数据
        方法1：插入指定的字段
            insert into 表名(字段名1，字段名2，字段名3...) values (值1,值2,值3...)
            mysql> insert into user(name,sex,age) values ('马尧','0',84);
            Query OK, 1 row affected (0.00 sec)

        方法2：插入所有字段
            insert into 表名 values (值1，值2，值3.....)

            注意：不指定字段的情况下，所有的字段必须和数据库中的字段名、顺序相同才能够使用。

        方法3：插入多条数据
            insert into 表名 values (值1,值2,值3...),(值4,值5,值6...)
            mysql> insert into user (name,sex,age) values ('杨粟','0',18),('曾国防','1',17);

        方法4：将查询处来的结果作为结果集插入到表中
            insert into 表名 select ... from ...

        方法5：插入单条数据
            insert into 表名 set 字段名1=值1,字段名2=值2.....
            mysql> insert into user set name='马尧',sex='0',age=99;

    4、查询
        select主句
            1、查看当前选择的数据
            select database();

            2、select 1+2
            3、从表里提取指定的字段
            mysql> select *from user;
                +----+------+------+------+
                | id | name | sex  | age  |
                +----+------+------+------+
                |  1 | 马尧 | 0    |   99 |
                +----+------+------+------+
                1 row in set (0.00 sec)

                mysql> select name,sex,age from user;
                +------+------+------+
                | name | sex  | age  |
                +------+------+------+
                | 马尧 | 0    |   99 |
                +------+------+------+
                1 row in set (0.00 sec)

            注意：
                1、可以提取指定的字段，也可以直接使用*但是不建议使用*

        from从句----从哪里查---(可选)

        where从句---条件查询---（可选）
        注意：
            1、 where从句放在表名以后
            mysql> select name from user where id=1;
                +------+
                | name |
                +------+
                | 马尧 |
                +------+
                1 row in set (0.00 sec)

            2、where条件中可以用算数运算符比较运算符、逻辑运算符。

                算数运算符
                    +
                    -
                    *
                    /
                    %

                比较运算符
                    >
                    >=
                    <
                    <=
                    !=
                    =

                逻辑运算符，在MySQL中可以给处多个条件可以使用and和or来链接条件
                    and 逻辑与
                    or 逻辑或
                    not 逻辑非

                注意：
                    1、组合and和or可以多次使用
                    2、SQL标准在处理OR操作之前，优先处理AND操作。这个时候可以使用括号来明确的进行分组。
                    
                        mysql> select * from user where id=3 or id=1 and name='马尧';
                        +----+--------+------+------+
                        | id | name   | sex  | age  |
                        +----+--------+------+------+
                        |  1 | 马尧   | 0    |   99 |
                        |  3 | 朱凯凯 | 1    |  113 |
                        +----+--------+------+------+
                        2 rows in set (0.00 sec)

                        mysql> select * from user where id=3 or (id=1 and name='马尧');
                        +----+--------+------+------+
                        | id | name   | sex  | age  |
                        +----+--------+------+------+
                        |  1 | 马尧   | 0    |   99 |
                        |  3 | 朱凯凯 | 1    |  113 |
                        +----+--------+------+------+
                        2 rows in set (0.00 sec)

                        mysql> select * from user where (id=3 or id=1) and name='马尧';
                        +----+------+------+------+
                        | id | name | sex  | age  |
                        +----+------+------+------+
                        |  1 | 马尧 | 0    |   99 |
                        +----+------+------+------+
                        1 row in set (0.00 sec)

                其他操作符：
                    in操作符:指定范围，范围中的每个条件都可以进行匹配
                    格式：in(值1,值2,值3....)
                    mysql> select * from user where id in(2,5,6);
                    +----+---------+------+------+
                    | id | name    | sex  | age  |
                    +----+---------+------+------+
                    |  2 | 曾国防  | 0    |   73 |
                    |  5 | 程亚辉1 | 1    |   21 |
                    |  6 | 程亚辉2 | 0    |  128 |
                    +----+---------+------+------+
                    3 rows in set (0.00 sec)

                    between操作符:在指定两个值之间
                    格式:between 起始值 and 结束值
                    mysql> select * from user where id between 2 and 5;
                        +----+---------+------+------+
                        | id | name    | sex  | age  |
                        +----+---------+------+------+
                        |  2 | 曾国防  | 0    |   73 |
                        |  3 | 朱凯凯  | 1    |  113 |
                        |  4 | 程亚辉  | 0    |   28 |
                        |  5 | 程亚辉1 | 1    |   21 |
                        +----+---------+------+------+
                        4 rows in set (0.00 sec)

                    not操作符 经常和in或between综合使用
                    mysql> select * from user where id not between 2 and 5;
                        +----+---------+------+------+
                        | id | name    | sex  | age  |
                        +----+---------+------+------+
                        |  1 | 马尧    | 0    |   99 |
                        |  6 | 程亚辉2 | 0    |  128 |
                        +----+---------+------+------+
                        2 rows in set (0.00 sec)

                    like操作符
                    还有更贵重的，显然就是这个小妞身上带着的那幅银质的弓箭了！

                    格式：字段名 like '字符串';
                    通配符：用来匹配值的一部分的特殊字符。
                    %，表示任何一个字符出现任意次数。可以放在任意位置
                        %值%，包含值就可以。
                        %值，是以‘值’结尾的.
                        值%，是以值开头的。

                    _，用途和%一样，但是表示任意字符出现一次。

                    注意：
                        1、不要过度使用通配符，如果其他操作符能够达到相同的目的，应该使用其他操作符。
                        2、在确实需要使用通配符时，除非有必要，否则不要把它们放在搜索模式的开始处。




            3、order by 从句--对字段数据进行排序（可选）
            在SQL标准中没有经过排序的数据是不可信的。
            格式：order by 字段名 [asc | desc]

            注意：
            1、默认时可以不写asc表示正序排列，desc表示倒序排列。
            2、通常很多人使用order by从句使用认为排序的列必须是select 要查询出来的列。
            3、asc或desc要放在排序的字段的后面。

            格式2：order by 字段名1 [asc | desc ],字段名2 [asc | desc]

            指的是先按照字段名1进行排序，如果遇到字段名1相同的情况下再按照字段名2进行排序


            4、limit 从句---限制结果集
            格式：limit m
            注意：
                1、m表示返回多少行。
                mysql> select *from user order by age desc limit 1;
                +----+---------+------+------+
                | id | name    | sex  | age  |
                +----+---------+------+------+
                | 23 | 程亚辉2 | 0    |  128 |
                +----+---------+------+------+
                1 row in set (0.00 sec)

            格式：limit n,m
            注意：
                1、n表示从第多少条开始取值(第一条数据以0开始)，m表示返回的行数。
                2、如果没有足够的行，能拿多少拿多少。
            5、统计查询
                1、
                count(*)
                mysql> select count(*) from user; 所有的都算出来了。

                count(字段名)
                mysql> select count(score)  from chengji;
                注意：会自动过滤掉字段名中值为null的值。不计算在内

                2、min() 最小值
                3、max() 最大值
                4、sum() 和
                5、avg() 平均值

                注意：

                1、以上这几个函数，如果里面放的是字段，将都会将值为null的过滤掉。
                2、null表示的是未知值、没有值。

            6、group by从句---- 分组(可选)
                格式：group by 字段
                mysql> select avg(gongzi),zhiwei from yuangong group by zhiwei;
                        +-------------+--------+
                        | avg(gongzi) | zhiwei |
                        +-------------+--------+
                        |   5000.0000 | BOSS   |
                        |   1100.0000 | 保健师 |
                        |    875.0000 | 保姆   |
                        |    410.0000 | 保安   |
                        |   1110.0000 | 秘书   |
                        +-------------+--------+
                        5 rows in set (0.00 sec)
                    是先按照zhiwei进行分组，然后将分组里面的每个组的工资取平均值。

                格式：group by 字段 having 条件

                先分组，按照对分组后的数据进行过滤。


                        mysql> select avg(gongzi),zhiwei from yuangong where zhiwei!="BOSS" group by zhi
                        wei ;
                        +-------------+--------+
                        | avg(gongzi) | zhiwei |
                        +-------------+--------+
                        |   1100.0000 | 保健师 |
                        |    875.0000 | 保姆   |
                        |    410.0000 | 保安   |
                        |   1110.0000 | 秘书   |
                        +-------------+--------+
                        4 rows in set (0.00 sec)
                                        

                        mysql> select avg(gongzi),zhiwei from yuangong where zhiwei!="BOSS" group by zhi
                        wei having avg(gongzi) > 1000;
                        +-------------+--------+
                        | avg(gongzi) | zhiwei |
                        +-------------+--------+
                        |   1100.0000 | 保健师 |
                        |   1110.0000 | 秘书   |
                        +-------------+--------+
                        2 rows in set (0.02 sec)
                
                        注意：where条件是对数据先进行过滤，而group by中的having是对分组后的数据再次进行过滤（where是前置过滤，having是后置过滤）


        从句是有顺序的：
            select 字段名 ===》from 表名===》 where===》 group by having ===》 order by ===》limit

作业：
    1、敲代码。
    2、整理笔记。

预习：
    1、php和MySQL合体。
