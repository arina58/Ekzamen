<?php
	require_once 'Tag.php';
	echo (new Tag('input'))
		->setAttr('class', 'eee bbb')
		->addClass('kkk')->open();
?>