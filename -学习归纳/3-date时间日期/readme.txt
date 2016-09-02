

    时间  time   

    后面的东西是不很难。然后我问他听过小马过河的故事没？

    小马和大马要过河。
        小松鼠说，千万不要过去，水太深了。
        长颈鹿说，水一点都不深才到我脖子。


    大马说：别听他俩瞎BB，咱俩走桥。

    步骤：我已经把这些东西分成步骤了。记住步骤。就没事了。


    一般我们的时间都是表示为2015-07-10  10:42:xx

     时间戳：
        1、他是一个整数，可以用来计算。
        2、从1970年的1月1日（计算机的元年）～现在的秒数。

    时间函数：
        time();获得当前时间（时间戳）
        date('格式'，时间戳);
        注意：时间戳为可选参数，如果不写的话，默认为当前的时间戳。
        格式：
            亚麻带
            Y，年份
            m，月份
            d，日

    时间是有时区的：
        中国在东八区，PHP是世界性的编程语言，默认的时间使用0时区，英国伦敦的时区。

        更改时区：
            1、php.ini中找到date.timezone
            date.timezone = Europe/Berlin

            怎么改？
            Asia/Shanghai
            Asia/Chongqing
            PRC
            Etc/GMT-8：表示当前的时区比标准时区快8个小时，就是当前时区-8个小时。等于格林尼治时间。


        注意：时间戳是到现在的秒数，他和时区没有关系，不管你用的是哪个时区他都是从1970年1月1号到现在的秒数。只不过你用哪个时区，系统会自动给你算处来而已。

            2、在脚本中更改时区，只在本脚本中有效。
            date_default_timezone_set('PRC');

            date_default_timezone_get();//用来获得当前脚本中的默认时区。

            
        mktime(时,分,秒,月,日,年);//取得一个日期的时间戳
        如果一个地方你不知道写多少一般我们写0就行了。

        strtotime(字符类型的时间);

        <?php
        echo strtotime("now"), "\n";
        echo strtotime("10 September 2000"), "\n";
        echo strtotime("+1 day"), "\n";
        echo strtotime("+1 week"), "\n";
        echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
        echo strtotime("next Thursday"), "\n";
        echo strtotime("last Monday"), "\n";
        ?> 

<!-------<table>
    <tr>
        <td>xx</td>
        <td>xx</td>
        <td>xx</td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
    </tr>
    <tr>
</table>
    
-->
<table>
    <tr>
        <td>xx</td>
        <td>xx</td>
        <td>xx</td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
    </tr>

    <tr>
</table>


作业：
    1、代码3遍。
    2、整理笔记
    3、练习函数，手抄1遍。（字符串、数组函数）



预习：图像处理。
