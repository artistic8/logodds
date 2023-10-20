<?php

return [
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[2, 9], [9], [2, 9, 10]] ,
		'qpl/trio' =>  [[3, 9, 12, 2, 8], [1, 9, 12, 2, 8], [1, 9, 12, 2, 10], [3, 9, 12, 2, 10], [5, 9, 12, 2, 10], [5, 9, 12, 2, 8]] ,
		'All QPL values'      =>  '12, 9, 5, 3, 1, 2, 8, 10',
		'new qpl/trio' =>  [[1, 9, 12, 2, 10], [3, 9, 12, 2, 10], [5, 9, 12, 2, 10]] ,
		'New QPL values' =>  '1, 2, 3, 5, 9, 10, 12',
		'Tce'            =>  '1, 2, 3, 5, 9, 12',
		'diff1'          =>  '1, 3, 5, 12',
		'diff2'          =>  '1, 3, 5, 8, 12',
		'inter1'         =>  '2, 9, 10',
		'inter2'         =>  '2, 9, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5, 9], [5], [5, 6, 8, 9], [5, 6, 7, 8], [5, 6, 7]] ,
		'qpl/trio' =>  [[5, 9, 4, 6, 8], [1, 5, 4, 6, 8], [5, 7, 4, 6, 8]] ,
		'All QPL values'      =>  '4, 6, 5, 9, 7, 8, 1',
		'new qpl/trio' =>  [[5, 7, 4, 6, 8]] ,
		'New QPL values' =>  '4, 5, 6, 7, 8',
		'Tce'            =>  '4, 5, 6, 7, 8, 9',
		'diff1'          =>  '4',
		'diff2'          =>  '1, 4',
		'inter1'         =>  '5, 6, 7, 8',
		'inter2'         =>  '5, 6, 7, 8, 9',
	],
];
