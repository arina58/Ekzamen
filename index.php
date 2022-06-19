<?php
	require_once 'Tag.php';
	echo (new Tag('input'))
		->addClass('eee')
		->addClass('bbb')
		->addClass('eee') // такой класс уже есть и не добавится
		->open();
?>