<?php

	$name = $_GET['file'];
	if(unlink($name)){
		header("location:folder.php?kj={$_GET['kj']}&path={$_GET['path']}");
	}