<?php
	require_once 'Tag.php';
	echo (new Tag('input'))->addClass('eee')->addClass('bbb')->open();
?>