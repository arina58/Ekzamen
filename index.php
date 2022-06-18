<?php
	require_once 'interal.php';
	$date1 = new Date('2025-12-31');
	$date2 = new Date('2026-11-28');
	
	$interval = new Interval($date1, $date2);
	
	echo $interval->toDays();   // выведет разницу в днях
	// echo $interval->toMonths(); // выведет разницу в месяцах
	// echo $interval->toYears();  // выведет разницу в годах
	
	// var_dump($interval); // массив вида ['years' => '', 'months' => '', 'days' => '']
?>