<?php
require "AAA/a1.php";
use Article\Comment;
$article_comment = new Comment();
/*
namespace Article;

class Comment {
	function __construct(){
		echo 111;
	}
 }


namespace MessageBoard;

class Comment {
	function __construct(){
		echo 222;
	}
 }

//���õ�ǰ�ռ䣨MessageBoard����Comment��
$comment = new Comment();

//����Article�ռ��Comment��
$article_comment = new \Article\Comment();
*/