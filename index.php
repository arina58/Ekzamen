<?php
	require_once 'Tag.php';
	$tag = new Tag('input');
	echo $tag->setAttr('id', 'test')->setAttr('class', 'eee bbb')->open();
	echo $tag->close();
?> 