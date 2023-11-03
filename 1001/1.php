<?php
/**
small values: 1, 3, 4, 6, 7
medium values: 1, 2, 3, 5, 6, 7, 12
inter values: 1, 3, 6, 7, count(interValues) = 4
*/

return [
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[1, 10, 2], [1, 10], [10, 2], [10], [2], [1, 2], [7]] ,
		'qpl/trio'       =>  [[3, 1, 7, 10, 4], [3, 7, 1, 10, 2], [3, 1, 7, 10, 6], [3, 1, 7, 6, 2], [3, 1, 7, 6, 4]] ,
		'All QPL values'    =>  '3, 6, 4, 2, 10, 1, 7',
		'All Runners   '    =>  '3, 6, 4, 8, 2, 10, 1, 7, 13, 11, 14, 9, 12, 5',
		'favorite' =>  3 ,
		'Set 1'  =>  '4, 2, 10, 1, 7',
		'Set 2'  =>  '8',
		'all wins values'  =>  '2, 10, 1, 7 //count wins: 4',
		'for reference  '  =>  '3, 6, 4 //count ref: 3',
		'weird values   '  =>  '8, 13, 11, 14, 9, 12, 5',
		'small set  '  =>  '3, 6, 4',
		'medium set '  =>  '',
		'big set    '  =>  '',
		'Qqpl' =>  '3, 6, 4',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[12, 1], [2], [1, 12, 2]] ,
		'qpl/trio'       =>  [[7, 1, 12, 4, 2]] ,
		'All QPL values'    =>  '7, 4, 1, 12, 2',
		'All Runners   '    =>  '7, 4, 1, 12, 5, 2, 11, 3, 9, 10, 6, 8',
		'favorite' =>  7 ,
		'Set 1'  =>  '2',
		'Set 2'  =>  '5',
		'all wins values'  =>  '1, 12, 2 //count wins: 3',
		'for reference  '  =>  '7, 4 //count ref: 2',
		'weird values   '  =>  '5, 11, 3, 9, 10, 6, 8',
		'small set  '  =>  '7, 4',
		'medium set '  =>  '',
		'big set    '  =>  '',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[14, 5], [4], [5, 14, 4], [9], [9, 4]] ,
		'qpl/trio'       =>  [[9, 5, 14, 4, 2]] ,
		'All QPL values'    =>  '9, 2, 5, 14, 4',
		'All Runners   '    =>  '9, 2, 5, 14, 4, 13, 1, 10, 12, 3, 6, 8, 11, 7',
		'favorite' =>  9 ,
		'all wins values'  =>  '9, 5, 14, 4 //count wins: 4',
		'for reference  '  =>  '2 //count ref: 1',
		'weird values   '  =>  '13, 1, 10, 12, 3, 6, 8, 11, 7',
		'small set  '  =>  '',
		'medium set '  =>  '2',
		'big set    '  =>  '',
		'Tce' =>  '9, 2, 5, 14, 4',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[8], [8, 9], [9], [5, 9]] ,
		'qpl/trio'       =>  [[6, 4, 5, 1, 8], [6, 8, 2, 5, 3], [6, 4, 5, 8, 9], [5, 3, 6, 8, 9], [5, 3, 6, 4, 9], [5, 1, 6, 4, 9], [5, 1, 6, 8, 9], [5, 1, 3, 6, 8], [1, 5, 6, 2, 9]] ,
		'All QPL values'    =>  '1, 9, 5, 6, 3, 2, 8, 4',
		'All Runners   '    =>  '1, 9, 5, 6, 3, 2, 8, 12, 4, 7, 14, 10, 11, 13',
		'favorite' =>  1 ,
		'Set 1'  =>  '4',
		'WP'  =>  '1',
		'Win/Qin/Trio'  =>  '1, 6, 3, 2, 4',
		'Set 2'  =>  '12',
		'all wins values'  =>  '9, 5, 8 //count wins: 3',
		'for reference  '  =>  '1, 6, 3, 2, 4 //count ref: 5',
		'weird values   '  =>  '12, 7, 14, 10, 11, 13',
		'small set  '  =>  '1',
		'medium set '  =>  '6, 3, 2',
		'big set    '  =>  '4',
		'Qqpl' =>  '1, 6, 3, 2, 4',
		'For reference' =>  '1, 6, 3, 2, 4',
		'Tce' =>  '1, 9, 5, 6, 3, 2',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[8], [9], [2, 4], [2]] ,
		'qpl/trio'       =>  [[2, 4, 5, 7, 8], [1, 5, 3, 4, 2], [1, 5, 4, 2, 9], [1, 12, 4, 2, 9], [1, 7, 12, 4, 2], [1, 12, 5, 4, 2], [8, 4, 2, 1, 12], [2, 4, 1, 5, 8]] ,
		'All QPL values'    =>  '8, 4, 2, 1, 12, 7, 5, 3, 9',
		'All Runners   '    =>  '8, 4, 2, 1, 6, 12, 7, 5, 3, 11, 9, 10',
		'favorite' =>  8 ,
		'Set 1'  =>  '12, 7, 5, 3, 9',
		'Set 2'  =>  '6, 11',
		'all wins values'  =>  '8, 4, 2, 9 //count wins: 4',
		'for reference  '  =>  '1, 12, 7, 5, 3 //count ref: 5',
		'weird values   '  =>  '6, 11, 10',
		'small set  '  =>  '',
		'medium set '  =>  '1, 12, 7, 5, 3',
		'big set    '  =>  '',
		'Qqpl' =>  '1, 12, 7, 5, 3',
		'For reference' =>  '1, 12, 7, 5, 3',
		'Tce' =>  '8, 4, 2, 1, 12, 7',
	],
];
