<?php
/**
small values: 1, 3, 10
medium values: 1, 2, 3, 4, 5, 7, 8, 10, 11
inter values: 1, 3, 10, count(interValues) = 3
*/

return [
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[1], [8], [8, 9]] ,
		'qpl/trio'       =>  [[8, 2, 11, 3, 1], [4, 2, 3, 7, 8], [4, 2, 3, 8, 9], [4, 11, 3, 5, 8], [8, 4, 11, 3, 1], [3, 1, 5, 8, 4], [3, 1, 5, 8, 11], [8, 2, 11, 3, 5]] ,
		'All QPL values'    =>  '8, 3, 2, 11, 4, 5, 1, 7, 9',
		'All Runners   '    =>  '8, 3, 2, 11, 4, 5, 1, 7, 9, 6, 10, 12',
		'favorite' =>  8 ,
		'all wins values'  =>  '8, 1, 9 //count wins: 3',
		'for reference  '  =>  '3, 2, 11, 4, 5, 7 //count ref: 6',
		'weird values   '  =>  '6, 10, 12',
		'small set  '  =>  '',
		'medium set '  =>  '3, 2, 11, 4, 5, 7',
		'big set    '  =>  '',
		'Qqpl' =>  '3, 2, 11, 4, 5, 7',
		'For reference' =>  '3, 2, 11, 4, 5, 7',
		'Tce' =>  '8, 3, 2, 11, 4, 5',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[6, 7], [7, 9, 6], [7], [6]] ,
		'qpl/trio'       =>  [[10, 8, 3, 6, 7], [3, 10, 7, 9, 6], [3, 1, 10, 7, 6], [3, 1, 10, 8, 7]] ,
		'All QPL values'    =>  '3, 6, 10, 7, 1, 8, 9',
		'All Runners   '    =>  '3, 6, 10, 7, 1, 4, 8, 9, 2, 5, 12, 11',
		'favorite' =>  3 ,
		'Set 1'  =>  '8, 9',
		'Set 2'  =>  '4',
		'all wins values'  =>  '6, 7, 9 //count wins: 3',
		'for reference  '  =>  '3, 10, 1, 8 //count ref: 4',
		'weird values   '  =>  '4, 2, 5, 12, 11',
		'small set  '  =>  '3',
		'medium set '  =>  '10, 1, 8',
		'big set    '  =>  '',
		'Qqpl' =>  '3, 10, 1, 8',
		'For reference' =>  '3, 10, 1, 8',
		'Place' =>  '3',
		'Qin' =>  '10, 1, 8',
		'Tce' =>  '3, 6, 10, 7, 1, 8',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[7, 8], [7], [7, 9, 8], [9]] ,
		'qpl/trio'       =>  [[1, 3, 2, 7, 8], [1, 5, 2, 7, 8], [1, 2, 7, 9, 8], [1, 3, 8, 2, 9], [1, 3, 8, 9, 10], [1, 3, 8, 7, 10]] ,
		'All QPL values'    =>  '1, 8, 3, 10, 7, 9, 2',
		'All Runners   '    =>  '1, 8, 3, 10, 7, 9, 2, 11, 6, 12, 4',
		'favorite' =>  1 ,
		'all wins values'  =>  '8, 7, 9 //count wins: 3',
		'for reference  '  =>  '1, 3, 10, 2 //count ref: 4',
		'weird values   '  =>  '11, 6, 12, 4',
		'small set  '  =>  '1',
		'medium set '  =>  '3, 10',
		'big set    '  =>  '2',
		'Qqpl' =>  '1, 3, 10, 2',
		'For reference' =>  '1, 3, 10, 2',
		'Tce' =>  '1, 8, 3, 10, 7, 9',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[7]] ,
		'qpl/trio'       =>  [[10, 2, 8, 1, 7], [10, 2, 6, 1, 7], [10, 2, 4, 1, 7]] ,
		'All QPL values'    =>  '10, 1, 7, 2, 4, 6, 8',
		'All Runners   '    =>  '10, 1, 7, 2, 3, 9, 4, 5, 6, 8, 11',
		'favorite' =>  10 ,
		'Set 1'  =>  '4, 6, 8',
		'Set 2'  =>  '3, 9, 5',
		'all wins values'  =>  '7 //count wins: 1',
		'for reference  '  =>  '10, 1, 2, 4, 6, 8 //count ref: 6',
		'weird values   '  =>  '3, 9, 5, 11',
		'small set  '  =>  '10, 1',
		'medium set '  =>  '',
		'big set    '  =>  '2, 4, 6, 8',
		'Qqpl' =>  '10, 1, 2, 4, 6, 8',
		'For reference' =>  '10, 1, 2, 4, 6, 8',
		'Place' =>  '10',
		'Qin' =>  '1, 2, 4',
	],
];
