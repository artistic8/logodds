<?php
/**
small values: 1, 2, 3, 5, 6, 8, 11
medium values: 1, 2, 3, 4, 11
inter values: 1, 2, 3, 11, count(interValues) = 4
*/

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[3], [6], [5, 6], [5], [9]] ,
		'qpl/trio'       =>  [[3, 5, 9, 11, 2], [3, 9, 5, 11, 6], [9, 5, 11, 4, 3]] ,
		'All QPL values'    =>  '3, 5, 4, 9, 11, 6, 2',
		'All Runners   '    =>  '3, 5, 4, 9, 11, 10, 6, 8, 1, 2, 7, 12',
		'favorite' =>  3 ,
		'Set 1'  =>  '6, 2',
		'Set 1'  =>  '10, 8, 1',
		'all wins values'  =>  '3, 5, 9, 6 //count wins: 4',
		'for reference  '  =>  '4, 11, 2 //count ref: 3',
		'weird values   '  =>  '10, 8, 1, 7, 12',
		'small set  '  =>  '',
		'medium set '  =>  '4, 11',
		'big set    '  =>  '2',
		'Qqpl' =>  '4, 11, 2',
		'Tce' =>  '3, 5, 4, 9, 11, 6',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[4, 6, 5], [5], [3, 1], [3], [4, 3], [2, 10, 3, 1], [2, 10, 3, 12], [2, 10], [5, 4]] ,
		'qpl/trio'       =>  [[2, 3, 4, 6, 5], [3, 1, 4, 2, 5], [4, 2, 10, 5, 3], [4, 2, 10, 3, 1], [4, 2, 10, 3, 12], [3, 12, 2, 5, 4]] ,
		'All QPL values'    =>  '3, 4, 12, 5, 2, 1, 10, 6',
		'All Runners   '    =>  '3, 4, 12, 5, 2, 1, 10, 9, 7, 11, 6, 8',
		'favorite' =>  3 ,
		'Set 1'  =>  '6',
		'Set 1'  =>  '9, 7, 11',
		'all wins values'  =>  '3, 4, 12, 5, 2, 1, 10, 6 //count wins: 8',
		'for reference  '  =>  ' //count ref: 0',
		'weird values   '  =>  '9, 7, 11, 8',
		'small set  '  =>  '',
		'medium set '  =>  '',
		'big set    '  =>  '',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[9], [9, 8], [5]] ,
		'qpl/trio'       =>  [[1, 5, 4, 2, 9], [1, 5, 2, 9, 8], [1, 5, 4, 9, 8]] ,
		'All QPL values'    =>  '1, 8, 4, 2, 5, 9',
		'All Runners   '    =>  '1, 8, 4, 2, 5, 9, 6, 3, 11, 10, 7, 12',
		'favorite' =>  1 ,
		'Set 1'  =>  '',
		'Set 1'  =>  '',
		'all wins values'  =>  '8, 5, 9 //count wins: 3',
		'for reference  '  =>  '1, 4, 2 //count ref: 3',
		'weird values   '  =>  '6, 3, 11, 10, 7, 12',
		'small set  '  =>  '1',
		'medium set '  =>  '4, 2',
		'big set    '  =>  '',
		'Qqpl' =>  '1, 4, 2',
		'Tce' =>  '1, 8, 4, 2, 5, 9',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[3], [6]] ,
		'qpl/trio'       =>  [[2, 4, 10, 3, 7], [2, 4, 11, 3, 7], [2, 4, 11, 7, 5], [2, 11, 3, 7, 6]] ,
		'All QPL values'    =>  '2, 6, 3, 7, 11, 4, 5, 10',
		'All Runners   '    =>  '2, 6, 3, 7, 11, 9, 4, 1, 5, 10, 8, 12',
		'favorite' =>  2 ,
		'Set 1'  =>  '4, 5, 10',
		'Set 1'  =>  '9, 1',
		'all wins values'  =>  '6, 3 //count wins: 2',
		'for reference  '  =>  '2, 7, 11, 4, 5, 10 //count ref: 6',
		'weird values   '  =>  '9, 1, 8, 12',
		'small set  '  =>  '2',
		'medium set '  =>  '',
		'big set    '  =>  '7, 11, 4, 5, 10',
		'Qqpl' =>  '2, 7, 11, 4, 5, 10',
		'For reference' =>  '2, 7, 11, 4, 5, 10',
		'Place' =>  '2',
		'Qin' =>  '7, 11, 4',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[5, 4], [4, 11], [11], [4], [9]] ,
		'qpl/trio'       =>  [[1, 12, 8, 5, 4], [4, 8, 2, 1, 12], [4, 8, 11, 1, 12], [8, 4, 11, 1, 9]] ,
		'All QPL values'    =>  '8, 4, 1, 11, 9, 2, 5, 12',
		'All Runners   '    =>  '8, 4, 1, 11, 9, 2, 3, 5, 6, 12, 7',
		'favorite' =>  8 ,
		'Set 1'  =>  '5, 12',
		'Set 1'  =>  '3, 6',
		'all wins values'  =>  '4, 11, 9, 5 //count wins: 4',
		'for reference  '  =>  '8, 1, 2, 12 //count ref: 4',
		'weird values   '  =>  '3, 6, 7',
		'small set  '  =>  '8',
		'medium set '  =>  '1, 2',
		'big set    '  =>  '12',
		'Qqpl' =>  '8, 1, 2, 12',
		'For reference' =>  '8, 1, 2, 12',
		'Place' =>  '8',
		'Qin' =>  '1, 2, 12',
		'Tce' =>  '8, 4, 1, 11, 9, 2',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[9]] ,
		'qpl/trio'       =>  [[6, 11, 2, 3, 9], [6, 11, 2, 3, 5]] ,
		'All QPL values'    =>  '6, 3, 11, 2, 5, 9',
		'All Runners   '    =>  '6, 3, 11, 2, 5, 9, 8, 1, 10, 12, 4, 7',
		'favorite' =>  6 ,
		'Set 1'  =>  '',
		'Set 1'  =>  '',
		'all wins values'  =>  '9 //count wins: 1',
		'for reference  '  =>  '6, 3, 11, 2, 5 //count ref: 5',
		'weird values   '  =>  '8, 1, 10, 12, 4, 7',
		'small set  '  =>  '6, 3, 11, 2, 5',
		'medium set '  =>  '',
		'big set    '  =>  '',
		'Qqpl' =>  '6, 3, 11, 2, 5',
		'For reference' =>  '6, 3, 11, 2, 5',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[5], [12], [4, 5], [4]] ,
		'qpl/trio'       =>  [[2, 4, 10, 7, 3], [2, 4, 10, 7, 5], [2, 4, 10, 7, 12], [2, 4, 10, 12, 5], [2, 10, 3, 4, 5], [2, 10, 3, 12, 4]] ,
		'All QPL values'    =>  '2, 4, 3, 12, 5, 10, 7',
		'All Runners   '    =>  '2, 4, 3, 12, 5, 7, 10, 11, 9, 1, 6, 8',
		'favorite' =>  2 ,
		'Set 1'  =>  '',
		'Set 1'  =>  '',
		'all wins values'  =>  '4, 12, 5 //count wins: 3',
		'for reference  '  =>  '2, 3, 10, 7 //count ref: 4',
		'weird values   '  =>  '11, 9, 1, 6, 8',
		'small set  '  =>  '2',
		'medium set '  =>  '3',
		'big set    '  =>  '10, 7',
		'Qqpl' =>  '2, 3, 10, 7',
		'For reference' =>  '2, 3, 10, 7',
		'Place' =>  '2',
		'Qin' =>  '3, 10, 7',
		'Tce' =>  '2, 4, 3, 12, 5, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[6], [1, 6]] ,
		'qpl/trio'       =>  [[3, 1, 7, 11, 6], [3, 1, 7, 6, 4]] ,
		'All QPL values'    =>  '3, 6, 1, 7, 11, 4',
		'All Runners   '    =>  '3, 6, 1, 7, 11, 4, 10, 2, 12, 8, 9, 5',
		'favorite' =>  3 ,
		'Set 1'  =>  '',
		'Set 1'  =>  '',
		'all wins values'  =>  '6, 1 //count wins: 2',
		'for reference  '  =>  '3, 7, 11, 4 //count ref: 4',
		'weird values   '  =>  '10, 2, 12, 8, 9, 5',
		'small set  '  =>  '3',
		'medium set '  =>  '',
		'big set    '  =>  '7, 11, 4',
		'Qqpl' =>  '3, 7, 11, 4',
		'For reference' =>  '3, 7, 11, 4',
		'Place' =>  '3',
		'Qin' =>  '7, 11, 4',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[5], [9], [9, 6, 8], [5, 9], [5, 10], [5, 2], [1], [1, 9]] ,
		'qpl/trio'       =>  [[1, 3, 6, 8, 5], [1, 5, 6, 8, 9], [1, 6, 2, 5, 9], [1, 12, 6, 5, 10], [1, 12, 6, 5, 2], [1, 9, 10, 6, 5], [1, 5, 10, 8, 9]] ,
		'All QPL values'    =>  '1, 10, 5, 8, 6, 9, 2, 3, 12',
		'All Runners   '    =>  '1, 10, 5, 8, 6, 9, 2, 3, 12, 7, 11, 4',
		'favorite' =>  1 ,
		'Set 1'  =>  '',
		'Set 1'  =>  '',
		'all wins values'  =>  '1, 10, 5, 8, 6, 9, 2 //count wins: 7',
		'for reference  '  =>  '3, 12 //count ref: 2',
		'weird values   '  =>  '7, 11, 4',
		'small set  '  =>  '',
		'medium set '  =>  '',
		'big set    '  =>  '3, 12',
	],
];
