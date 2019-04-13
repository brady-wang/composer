<?php

$arr = [
	[
		'id'=>1,
		'name'=>'wang',
		'age'=>10
	],
	[
		'id'=>2,
		'name'=>'yong',
		'age'=>28
	],
	[
	'id'=>3,
	'name'=>'shun',
	'age'=>33
]
];


$arr = array_column($arr,'name','id');

echo '<pre>';
print_r($arr);
print_r(array_values($arr));