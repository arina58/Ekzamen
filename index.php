<?php
	require_once 'Tag.php';
	$tag = new Tag('input');
	
	echo $tag
		->setAttr('id', 'test')
		->setAttr('disabled', true) // создаем атрибут без значения
		->open(); // выведет <input id="test" disabled>
?> 