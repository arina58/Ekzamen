<?php
	require_once 'Tag.php';
	echo (new Tag('input'))
		->setAttr('class', 'eee bbb')
		->addClass('eee') // такой класс уже есть и не добавится
		->open();
?>