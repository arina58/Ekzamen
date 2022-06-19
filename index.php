<?php
	require_once 'Tag.php';
	$tag = new Tag('input');
	
	echo $tag
		->setAttrs(['id' => 'test', 'class' => 'eee']) // задаем атрибуты массивом
		->open(); // выведет <input id="test" class="eee">
?> 