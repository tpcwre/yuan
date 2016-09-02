<?php
//导入smarty的初始化文件
require("./init.php");
require("./model/Model.class.php");
//4.向模板中放置信息
$smarty->assign("title","smarty模板实例--学生信息管理");

$mod = new Model("stu");

//根据参数a的值，执行对应的操作
switch($_GET['a']){
	case "add": 	//加载添加表单
		$smarty->display("stu/add.html");
		break;
		
	case "insert": 	//执行添加
		$m = $mod->insert();
		if($m>0){
			$smarty->assign("info","添加成功！");
		}else{
			$smarty->assign("info","添加失败！");
		}
		$smarty->display("stu/info.html");
		break;
		
	case "del":		//执行删除
		$mod->del($_GET['id']);
		header("Location:stu.php");
		break;
	case "edit":	//加载编辑表单
		$smarty->assign("vo",$mod->find($_GET['id']));
		$smarty->display("stu/edit.html");
		break;
	case "update":	//执行编辑
		$m = $mod->update();
		if($m>0){
			$smarty->assign("info","修改成功！");
		}else{
			$smarty->assign("info","修改失败！");
		}
		$smarty->display("stu/info.html");
		break;
	default:		//默认浏览
		$list = $mod->select();
		$smarty->assign("list",$list);
		$smarty->display("stu/index.html");
		break;
}

