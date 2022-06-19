<?php
	require_once 'Image.php';
	$image = new Image();
	echo $image->setAttr('src', 'img.png')->setAttr('width', '300')->setAttr('height', '200'); 
?>