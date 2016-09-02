1、图像处理
    1、为什么讲它？我们用它干什么？

    经常使用photoshop 美图秀秀进行静态图片的处理。

    验证码、加水印、图像的缩放

    画图：验证码
    改图：图像的缩放、添加水印

    2、经常用的图像格式：
        jpeg/jpg  
        png
        gif:动态图像

    3、在PHP中图像处理的种类：
        1、Image Magick：PHP新版本中新加的。
        2、GD，很多用户在用。

    4、GD库，GD是PHP的一个扩展。首先我们要先看PHP是否支持GD
        步骤：
            1、打开PHP.ini文件
            2、查看extension=php_gd2.dll 该选项有没有开启（注释符）
            3、查看PHP的扩展目录中是否有php_gd2.dll这个文件。
            4、重新启动apache服务器
            C:\xampp\php\ext

    5、画图
        步骤：
            1、创建背景图像（画布）
            imagecreatetruecolor();创建一个画布

            imagecolorallocate ();//分配一个颜色

            imagefill();//区域填充
            注意，只会填充x和y坐标相邻并且颜色相同的颜色。不相邻的颜色即使相同也不会填充



            2、在背景上画图或写字。

            画图
            imageline();  画线
            imagesetpixel();画点
            imagerectangle();画矩形



            写字
            imagettftext(资源,字体大小,角度,x,y,颜色,字体文件,写的字);
            注意：
                1、其中x、y表示的是第一个字符的左下角的位置
                2、角度，0度将会在3点钟方向。角度越大，逆时针旋转


            imagettfbbox(大小,角度,字体文件,文本);  获得文本的范围

            将会返回一个数组
            0 左下角 X 位置 
            1 左下角 Y 位置 
            2 右下角 X 位置 
            3 右下角 Y 位置 
            4 右上角 X 位置 
            5 右上角 Y 位置 
            6 左上角 X 位置 
            7 左上角 Y 位置 

            返回的这些元素我们主要用来获得字体的宽度和高度
            获得字体宽度
            abs($info[0] - $info[2]);

            获得字体的高度
            abs($info[7] - $info[1]);
            




            3、输出、保存图像
           imagejpeg(); 
           imagepng();
           imagegif();

            header();//告诉浏览器这个文件输出的是一张图像，主要是在PHP的GD输出的时候使用。
            header("content-type:image/jpeg");
            header("content-type:image/png");
            header("content-type:image/gif");

            注意：
                1、header头前面不要有任何的输出,否则会报错，图像是出不来的。
                2、选择UTF-8无bom格式
            4、关闭资源

            imagedestroy();

            注意：
                1、资源有打开有关闭。


    问题：
        1、如果header函数写错了，将会提示你下载。

    6、图像背景管理
    imagecreatefromjpeg(); //用文件作为背景图像
    imagecreatefromgif();
    imagecreatefrompng();

    需求：我需要你做一个脑残对话（用PHP做）。

    地球的外面是什么？
    香飘飘奶茶
    ......


    最近，我观察着，学习的劲头还行。但是方法不行。

    7、图像的缩放
    bool imagecopyresampled ( resource $dst_image , resource $src_image , int $dst_x , int $dst_y , int $src_x , int $src_y , int $dst_w , int $dst_h , int $src_w , int $src_h )

    imagecopyresampled(新图片,老图片,新x,新y,老x,老y,新宽,新高,老宽,老高)

    步骤：
        1、能够有新的资源和老的资源。
        2、获得从老的图片的哪里开始（老x,老y）
        注意：
            1、老的x和新的y需要从0开始，他指的是新的缩放后的图片离画布的x和y的位置是多少。
        3、缩放后的新图片从哪里开始(新x，新y)
        注意：
            1、新的x和新的y也需要从0开始，它指的是从没有经过缩放的尺寸开始进行一个缩放。所以说如果你想让你的图片缩放的完整就从0和0开始。
        4、获得老图片的宽度和高度
            怎么获得？
            imagesx(图像资源)//获得图像宽度
            imagesy(图像资源);//获得图像的高度

            getimagesize(文件名);//获得关于图片的一些信息返回的是一个数组

            返回的数组中：
                0 =》  宽度
                1 =》  高度
                2 =》  类型
                        1,gif
                        2,jpeg jpg
                        3,png


        5、缩放后的新的图片的宽度和高度

        6、获得缩放后的图片资源，输出或保存
        7、关闭资源（新图片、老图片）。


    等比例缩放的公式：
        if(新的宽度 && (旧的宽度 < 旧的高度)){

            新的宽度 = (新的高度 / 旧的高度 ) * 旧的宽度
            
        }else{
            新的高度 = (新的宽度 / 旧的宽度) * 旧的高度
        }

作业：
    1、完成等比例缩放
    2、代码3遍
    3、整理笔记
    4、函数(数组、字符串、数学)（暂时先放过你们，如果明天还不会，呵呵（5×5））

预习：
    1、上传下载
