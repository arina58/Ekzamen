<?php
	require_once 'Link.php';
	// Выведет <a href="">index</a>:
	echo (new Link())->setText('index')->show();
?>