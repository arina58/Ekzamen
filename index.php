<?php
	require_once 'Tag.php';
	echo (new Tag('input'))
		->setAttr('name', 'name1')
		->setAttr('id', 'test')
		->setAttr('class', 'eee bbb')
		->open();

	echo (new Tag('input'))
		->setAttr('name', 'name2')
		->setAttr('id', 'test')
		->setAttr('class', 'eee bbb')
		->open();
?> 