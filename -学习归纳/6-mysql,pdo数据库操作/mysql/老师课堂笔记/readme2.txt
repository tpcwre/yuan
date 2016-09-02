今日课程：
    1、字段类型---根据需求先确定传进来的值是什么，然后根据值的类型选择用什么类型的数据。
        1）、整形数据
            注意：
                1、整数指定的后面的括号里面的数值实际上指的是显示的宽度。而不是存储的最大值。
                2、默认使用整形时候是有符号的类型
                3、如果值超出了该类型的最大值，将会取该类型的最大值。
                4、可以省略数值类型值的显示宽度

        2）、浮点型、定点型数据
            注意：
                1、浮点数、定点数可以用类型名称后面加(M,D)方式来表示，M表示一共多少位置。D表示该值小数点后面几位。
                2、超过了D的位数后将会进行四舍五入。
                3、浮点数如果不写精度（M）和标度（D），会按照实际精度值显示。
                4、定点数如果不写精度和标度，会按照decimal(10,0)来显示。
                5、浮点数和定点数，超过指定的精度、标度后会都会进行四舍五入，但是浮点数是及其不准确的。
                6、浮点数没有定点数准确，同样是四舍五入，但是浮点数有时候会出问题。

            使用定点数和浮点数的一些规则:
                1、浮点数会存在一些误差，是因为存储的方式的不同。
                2、对于精度敏感的数据应该使用定点数来表示或者存储。不要使用浮点数。

        3）、字符型数据
            注意：
                1、text与blob的区别是，blob用来保存二进制数据，text只能保存字符数据（文本）。
                注意：
                    blob和text在经过大量的删除操作后会引起性能问题（删除后会在数据表中留下‘空洞’，以后在插入操作时引起性能问题。）
                    optimize table 表名   使用该命令将以前的空间进行回收。

                2、char和varchar很相似，可以用来存储MySQL中较短的字符串：
                    区别：
                        1、char类型（定长）的长度固定为创建表时，指定的长度，可以为最大到255。
                        2、varchar(变长)的值是可变的长度，长度为65535之间的。
                        3、char和varchar在超出长度时候都会被截取字符串到指定的长度。
                        4、char字段会自动将尾部的空格去掉，varchar会保留这些空格。
                        5、char长度是固定的，所以处理速度快，对于一些长度变化不大，查询速度有较高要求的数据可以考虑使用char类型来存储。

        4）、枚举数据
                mysql> create table t10(
            -> id int,
            -> name char(200),
            -> sex enum('0','1','2')
            -> );
        Query OK, 0 rows affected (0.05 sec)

            注意：
                1、枚举方式的取值范围要在创建表时显式的指定。
                2、插入数据时应该以字符型进行插入。
                mysql> insert into t10 (id,name,sex) values (1,'mayao','1');
                Query OK, 1 row affected (0.02 sec)
                3、如果超过了枚举类型里面指定的值，将会插入一个‘空’。
                4、因为一次只能存一个值进去，所以他会将你输入的东西当做一个值来进行处理。
                5、它最多能够存储65535个成员。对于1～255个成员的枚举类型需要1个字节存储，对于256～65535个成员需要2个字节存储。

        5）、集合数据
            mysql> create table t11(
            -> id int,
            -> name char(32),
            -> col set('a','b','c','d','e')
            -> );
        Query OK, 0 rows affected (0.05 sec)

            注意：
                1、set类型也是一个字符串,可以保存0~64个成员，根据成员的数量不同，所占的空间大小也不同。
                    1～8  1个字节
                    9～16 2个字节
                    17～24 3个字节
                    25~32  4个字节
                    33～64 8个字节

                2、enum和set类型除了存储之外，主要区别在于set类型一次可以选取多个成员。enum只能选取一个。
                mysql> insert into t11 (id,name,col) values (1,'yangsu','a,b,c');
                Query OK, 1 row affected (0.00 sec)

                3、重复的成员只会保留一个。
                4、超出范围的成员将会忽略。

    2、约束条件，对一些字段进行一些约束，一般的时候在字段类型后面使用
    公用的约束条件：
        1、null，not null。默认时为null
        注意：
            1、插入值时没有在此字段插入值，默认为null
            2、如果指定了not null没有插入的时候将会给处一个“空”值。
            mysql> create table t12(
                -> id int ,
                -> name char(20) not null
                -> );
            Query OK, 0 rows affected (0.06 sec)

            mysql> insert into t12 (id) values (12);
            Query OK, 1 row affected, 1 warning (0.00 sec)

            mysql> select *from t12;
            +------+------+
            | id   | name |
            +------+------+
            |   12 |      |
            +------+------+
            1 row in set (0.00 sec)

        2、default 值，在不插入该字段时默认插入的值。
            mysql> create table t13(
                -> id int,
                -> name char(20) not null default 'hehe'
                -> );
            Query OK, 0 rows affected (0.03 sec)

            mysql> insert into t13 (id) values (13);
            Query OK, 1 row affected (0.02 sec)

            mysql> select * from t13;
            +------+------+
            | id   | name |
            +------+------+
            |   13 | hehe |
            +------+------+
            1 row in set (0.00 sec)

    整形的约束条件:
        1、zerofill，表示0填充，一般和整形后面的设定宽度一起使用。
        2、unsigned，无符号，如果要在字段里面保存非负数或需要较大上线的时，可以使用该选项，取值范围从0开始。
        注意：
            需要紧跟在字段类型后面使用
            mysql> create table t16(
                -> id int unsigned not null
                -> );
            Query OK, 0 rows affected (0.05 sec)

        3、auto_increment，自增，在产生唯一标识或顺序值时使用。
        注意：
            1、这个值只能用于整形。
            2、一般从1开始。
            3、必须定义该列为primary key 或unique
            4、插入一个null到auto_increment或不插入值，这个时候MySQL将插入出现过的最大值+1的值。
            5、一个表中只能有一个auto_increment列

    3、索引：索引是数据库中用来提高搜索性能的；通常我们在优化数据库时一般都是先优化索引，通常索引优化好了就会解决大部分问题。
    注意：
        1、数据越多，越有效果。
        2、他是加上之后自动使用的，不用我们刻意的去使用。

        索引的分类：
            1）、常规索引(index)：最基本的索引，没有任何限制
            创建索引：
                创建表的时候直接创建
                create table 表名(
                [......]
                ,index 索引名(要加索引的字段)
                );

                创建完的时候追加
                create index 索引名 on 表名(要加索引的字段);

                删除索引
                drop index 索引名 on 表名
            2）、唯一索引(unique)：与常规索引类型，但是索引列的值必须是唯一的。
            创建唯一索引：
                创建表的时候直接创建
                create table 表名(
                [......]
                ,unique 索引名(要加索引的字段)
                );

                创建完了之后追加
                create unique index 索引名 on 表名(要加索引的字段)

                删除索引:
                drop index 索引名 on 表名

            3）、主键索引(primary key)：与唯一索引类似，但是一个表中只能有一个主键。
                创建表的时候：
                    create table 表名(
                    字段名1 primary key,
                    字段名2.....
                    );
                mysql> create table t22(
                    -> id int unsigned auto_increment primary key,
                    -> name char(32)
                    -> );
                Query OK, 0 rows affected (0.02 sec)

                删除索引：
                    1、如果有自增，要先删除自增
                    alter table 表名 change 字段名 字段名 int
                    mysql> alter table t22 change id id int unsigned not null;

                    2、然后再删除主键索引
                    alter table 表名 drop primary key;


            创建索引的一些规则：
                1、最适合创建索引的列通常是无线在where语句中作为条件的列。
                2、索引的不同的值的基数越大，创建索引的效果越好。
                3、不要过度使用索引，每个额外的索引都要占用额外的空间；降低了写的性能。

作业：
    1、敲。
    2、预习，明天增删改查。
