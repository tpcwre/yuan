
    pathinfo();获得关于文件的信息。


    需求：
        1、i need 多文件上传

array(3) {
  ["upload1"]=>
  array(5) {
    ["name"]=>
    string(6) "hu.png"
    ["type"]=>
    string(9) "image/png"
    ["tmp_name"]=>
    string(22) "C:\xampp\tmp\php26.tmp"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1665)
  }
  ["upload2"]=>
  array(5) {
    ["name"]=>
    string(26) "5451216_120846003109_2.jpg"
    ["type"]=>
    string(10) "image/jpeg"
    ["tmp_name"]=>
    string(22) "C:\xampp\tmp\php27.tmp"
    ["error"]=>
    int(0)
    ["size"]=>
    int(274321)
  }
  ["upload3"]=>
  array(5) {
    ["name"]=>
    string(6) "hu.png"
    ["type"]=>
    string(9) "image/png"
    ["tmp_name"]=>
    string(22) "C:\xampp\tmp\php28.tmp"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1665)
  }
}

    注意：Note: 注意和其它语言不同，continue 语句作用到 switch 上的作用类似于 break。如果在循环中有一个 switch 并希望 continue 到外层循环中的下一轮循环，用 continue 2。

    2、下载
    服务器-》客户端  HTTP下载。

    注意：
        1、如果浏览器能够识别该文件就直接解析。如果识别不了就提示下载。
        2、告诉浏览器这是个下载。不管你能否识别都不要解析。
        步骤：
            1、header('content-type:text/html;charset=utf-8');
            2、告诉浏览器这是一个附件
            header('content-disposition:attachment');
            3、接这第二步来告诉下载的文件名是什么
            header('content-disposition:attachment;filename=xxoo.jpg');

            4、将文件读取处来，否则没有内容
            readfile();将文件读取出来。

            5、计算大小
            filesize();计算出文件的大小是多少，单位是字节

            header('content-length:文件的大小');

            注意：
                1、header头前面不能有任何的输出，有些人会说，header头前面有输出也没有关系呀,你猜呢？

    3、文本的处理
        1、常用的函数
        touch(); 不是单纯的使用他来修改时间而是用它来创建文件
        file(); 将文件的每一行读取到一个数组中。
        parse_ini_file();将配置文件读取到一个数组中，数组的每一个元素的下标是配置文件对应的配置的名称

        file_get_contents('文件名'）;将整个文件读取到一个字符串中
        file_put_contents('文件名','要写的内容')；将一个字符串写入到一个文件中，会将以前的内容清空，然后再写。

