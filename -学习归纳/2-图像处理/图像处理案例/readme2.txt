今日课程：
    1、添加水印。
    imagecopy();

    bool imagecopy (要图片 , 水图  , 要x , 要y , 水x , 水y , 水宽 , 水高 )

    要x，要y指的是水印离要加水印图片的左上角的坐标距离

    水印x，水y指的是在当前的这个位置，水印离本来应该的位置有多远


    刚才赢了。   赢了一盒烟  。

    居中显示：
        大图/2-小图/2

        (大图-小图）/ 2

    2、文件的上传、下载

        1、文件的上传
            客户端 -> 服务器

            步骤：
                1、表单的设置
                    <input type="file" name="upload" />

                注意：
                    1、上传的方法一定要用POST方法
                    2、加上<form>表单里的一个属性
                    enctype="multipart/form-data"

                    enctype属性：规定数据在发送到服务器之前应该如何对表单数据进行编码

                    application/x-www-form-urllencode，默认选项，在发送数据之前对所有的数据进行编码。
                    text/plan:只对空格转换为+号，但是不对特殊字符进行编码。
                    multipart/form-data:不对字符编码，可以理解为数据以字节流或二进制传递过去


                    3、<input type="hidden" name="MAX_FILE_SIZE" value="字节数" />

                    注意：
                        1、要放在<input type="file" /> 上面
                        2、让用户在浏览器发送数据之前预先做出一次判断，如果文件尺寸大于设定的字节，则不能执行实际的post工作，不往服务器发送内容。
                        3、这是PHP的建议，很多浏览器都不支持。

                2、服务器端的设置
                    php.ini中
                    1、file_uploads = On PHP是否允许上传
                    2、upload_max_filesize = 2M PHP允许的最大上传的文件大小
                    3、post_max_size = 8M 限制通过POST方法可以接收的最大的数据值。

                    注意：
                        1、这个值必须大于upload_max_filesize，因为表单不光有文件上传，还有其他的数据要传输呢。
                    4、upload_tmp_dir = "C:\xampp\tmp" 上传文件后的临时目录，用来存放临时的文件。

                3、PHP脚本处理、接收上传数据
                    1、上传后的数据使用$_FILES来进行接收。但是其他的表单的数据也可以使用$_POST来接收

                    array(1) {
                      ["upload"]=>    -------------> input type="file" name的值
                      array(5) {
                        ["name"]=>  上传的时候的文件名
                        string(23) "疯狂的一刹那.jpeg"
                        ["type"]=>  上传文件的mime类型
                        string(10) "image/jpeg"
                        ["tmp_name"]=> 上传文件的临时文件名。文件上传结束以后，生成的临时文件默认存储在临时文件目录中，只要找到这个临时文件，并将里面的内容拷贝处来就算上传成功。到最后程序完事时，不管拷贝成功或没成功，临时文件都会删除调。
                        string(22) "C:\xampp\tmp\php11.tmp"
                        ["error"]=> 上传的错误号
                        int(0)
                        ["size"]=>  文件的大小
                        int(4311)
                      }
                    }

                    mime类型：用来设定某种扩展名的文件用哪种应用插叙打开的方式。当指定的扩展名称的文件被访问时，浏览器会根据mime类型自动打开某种程序。

                    错误号：
                    其值为 7，文件写入失败。PHP 5.1.0 引进。    
                    其值为 6，找不到临时文件夹。PHP 4.3.10 和 PHP 5.0.3 引进。 
                    其值为 4，没有文件被上传。 
                    其值为 3，文件只有部分被上传。 
                    其值为 2，上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。 
                    其值为 1，上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值。 
                    其值为 0，没有错误发生，文件上传成功。

                2、将上传的临时文件移动到指定的目录中
                move_uploaded_file ( string $filename , string $destination )

                $filename 临时文件名
                $destination 移动到哪里去,名字叫什么
        2、文件的下载


作业：
    1、代码3遍。
    2、整理笔记

预习：
    1、文件操作。

