<?php
	require_once 'Tag.php';
	echo (new Tag('input'))
		->setAttr('class', 'eee zzz kkk') 
		->removeClass('zzz') 
		->open(); 
?>