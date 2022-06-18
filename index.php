<?php
	require_once 'Tag.php';
	$input = new Tag('input');
	echo $input->open(); // выведет <input>
	$tag = new Tag('div');
	echo $tag->open() . 'text' . $tag->close(); // выведет <div>text</div>
	$img = new Tag('img');
	echo $img->open();
	$header = new Tag('header');
	echo $header->open() . 'header сайта' . $header->close();
?>