
-- 预处理
--========================================================
mysql> select * from stu;
+----+----------+------+------+---------+
| id | name     | sex  | age  | classid |
+----+----------+------+------+---------+
|  1 | zhangsan |    1 |   20 | lamp113 |
|  3 | wangwu   |    1 |   22 | lamp113 |
|  4 | lisi     |    0 |   20 | lamp113 |
|  5 | aaa      |    1 |   23 | lamp115 |
|  6 | bbbb     |    1 |   42 | lamp113 |
|  7 | ddd      |    0 |   21 | lamp115 |
|  8 | ccac     |    1 |   26 | lamp113 |
|  9 | eee      |    0 |   32 | lamp115 |
| 10 | www      |    0 |   18 | lamp113 |
| 11 | kkak     |    1 |   19 | lamp113 |
| 12 | lll      |    0 |   26 | lamp115 |
| 13 | uuau     |    0 |   24 | lamp113 |
| 14 | yy       |    1 |   21 | lamp113 |
| 15 | ttt      |    0 |   20 | lamp113 |
+----+----------+------+------+---------+
14 rows in set (0.00 sec)

-- 定义一个sql语句，做预处理
mysql> prepare select_stu from 'select * from stu where name=?';
Query OK, 0 rows affected (0.03 sec)
Statement prepared

-- 定义一个变量值为zhangsan
mysql> set @name='zhangsan';
Query OK, 0 rows affected (0.00 sec)
--执行预处理的select_stu的sql语句，并将@name传入代替？
mysql> execute select_stu using @name;
+----+----------+------+------+---------+
| id | name     | sex  | age  | classid |
+----+----------+------+------+---------+
|  1 | zhangsan |    1 |   20 | lamp113 |
+----+----------+------+------+---------+
1 row in set (0.00 sec)

mysql> set @name='lisi';
Query OK, 0 rows affected (0.00 sec)

mysql> execute select_stu using @name;
+----+------+------+------+---------+
| id | name | sex  | age  | classid |
+----+------+------+------+---------+
|  4 | lisi |    0 |   20 | lamp113 |
+----+------+------+------+---------+
1 row in set (0.00 sec)

mysql> set @name='yy';
Query OK, 0 rows affected (0.00 sec)

mysql> execute select_stu using @name;
+----+------+------+------+---------+
| id | name | sex  | age  | classid |
+----+------+------+------+---------+
| 14 | yy   |    1 |   21 | lamp113 |
+----+------+------+------+---------+
1 row in set (0.00 sec)

mysql> set @name="' or ''='";
Query OK, 0 rows affected (0.00 sec)

mysql> execute select_stu using @name;
Empty set (0.02 sec)

mysql>


-- 事务操作
--=======================================

mysql> show create table stu\G
*************************** 1. row ***************************
       Table: stu
Create Table: CREATE TABLE `stu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL,
  `sex` tinyint(3) unsigned DEFAULT '1',
  `age` tinyint(3) unsigned DEFAULT NULL,
  `classid` char(7) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8
1 row in set (0.00 sec)

mysql> select * from stu;
+----+----------+------+------+---------+
| id | name     | sex  | age  | classid |
+----+----------+------+------+---------+
|  1 | zhangsan |    1 |   20 | lamp113 |
|  3 | wangwu   |    1 |   22 | lamp113 |
|  4 | lisi     |    0 |   20 | lamp113 |
|  5 | aaa      |    1 |   23 | lamp115 |
|  6 | bbbb     |    1 |   42 | lamp113 |
|  7 | ddd      |    0 |   21 | lamp115 |
|  8 | ccac     |    1 |   26 | lamp113 |
|  9 | eee      |    0 |   32 | lamp115 |
| 10 | www      |    0 |   18 | lamp113 |
| 11 | kkak     |    1 |   19 | lamp113 |
| 12 | lll      |    0 |   26 | lamp115 |
| 13 | uuau     |    0 |   24 | lamp113 |
| 14 | yy       |    1 |   21 | lamp113 |
| 15 | ttt      |    0 |   20 | lamp113 |
+----+----------+------+------+---------+
14 rows in set (0.00 sec)
-- 关闭sql的自动提交（开启事务）
mysql> set autocommit=0;
Query OK, 0 rows affected (0.00 sec)

--执行删除
mysql> delete from stu where id>10;
Query OK, 5 rows affected (0.03 sec)

mysql> select * from stu;
+----+----------+------+------+---------+
| id | name     | sex  | age  | classid |
+----+----------+------+------+---------+
|  1 | zhangsan |    1 |   20 | lamp113 |
|  3 | wangwu   |    1 |   22 | lamp113 |
|  4 | lisi     |    0 |   20 | lamp113 |
|  5 | aaa      |    1 |   23 | lamp115 |
|  6 | bbbb     |    1 |   42 | lamp113 |
|  7 | ddd      |    0 |   21 | lamp115 |
|  8 | ccac     |    1 |   26 | lamp113 |
|  9 | eee      |    0 |   32 | lamp115 |
| 10 | www      |    0 |   18 | lamp113 |
+----+----------+------+------+---------+
9 rows in set (0.00 sec)
-- 执行修改
mysql> update stu set age=age+2 where id in(7,8,10);
Query OK, 3 rows affected (0.00 sec)
Rows matched: 3  Changed: 3  Warnings: 0

mysql> select * from stu;
+----+----------+------+------+---------+
| id | name     | sex  | age  | classid |
+----+----------+------+------+---------+
|  1 | zhangsan |    1 |   20 | lamp113 |
|  3 | wangwu   |    1 |   22 | lamp113 |
|  4 | lisi     |    0 |   20 | lamp113 |
|  5 | aaa      |    1 |   23 | lamp115 |
|  6 | bbbb     |    1 |   42 | lamp113 |
|  7 | ddd      |    0 |   23 | lamp115 |
|  8 | ccac     |    1 |   28 | lamp113 |
|  9 | eee      |    0 |   32 | lamp115 |
| 10 | www      |    0 |   20 | lamp113 |
+----+----------+------+------+---------+
9 rows in set (0.00 sec)
-- 事务回滚（撤销之前的操作）
mysql> rollback;
Query OK, 0 rows affected (0.04 sec)

mysql> select * from stu;
+----+----------+------+------+---------+
| id | name     | sex  | age  | classid |
+----+----------+------+------+---------+
|  1 | zhangsan |    1 |   20 | lamp113 |
|  3 | wangwu   |    1 |   22 | lamp113 |
|  4 | lisi     |    0 |   20 | lamp113 |
|  5 | aaa      |    1 |   23 | lamp115 |
|  6 | bbbb     |    1 |   42 | lamp113 |
|  7 | ddd      |    0 |   21 | lamp115 |
|  8 | ccac     |    1 |   26 | lamp113 |
|  9 | eee      |    0 |   32 | lamp115 |
| 10 | www      |    0 |   18 | lamp113 |
| 11 | kkak     |    1 |   19 | lamp113 |
| 12 | lll      |    0 |   26 | lamp115 |
| 13 | uuau     |    0 |   24 | lamp113 |
| 14 | yy       |    1 |   21 | lamp113 |
| 15 | ttt      |    0 |   20 | lamp113 |
+----+----------+------+------+---------+
14 rows in set (0.00 sec)
-- 提交事务（执行保存之前操作）
mysql> commit;
Query OK, 0 rows affected (0.00 sec)

mysql>








