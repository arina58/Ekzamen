<?php
	require_once 'Tag.php';
	$tag = new Tag('input', ['id' => 'test', 'class' => 'eee bbb']);
	echo $tag->open(); // выведет <input id="test" class="eee bbb">
?> 