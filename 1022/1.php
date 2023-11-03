<?php
/**
small values: 1, 2, 3, 4, 7, 11, 12, 14
medium values: 1, 3, 4, 5, 7, 8, 10, 12, 13, 14
inter values: 1, 3, 4, 7, 12, 14, count(interValues) = 6
*/

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[2], [9], [2, 10, 1]] ,
		'qpl/trio'       =>  [[3, 1, 5, 8, 2], [3, 1, 12, 8, 2], [3, 1, 14, 2, 8], [3, 1, 2, 8, 9], [8, 3, 2, 10, 1]] ,
		'All QPL values'    =>  '2, 3, 8, 10, 1, 12, 14, 9',
		'All Runners   '    =>  '2, 3, 8, 10, 1, 11, 12, 14, 9, 13, 6, 7, 4',
		'favorite' =>  2 ,
		'Set 1'  =>  '12, 14, 9',
		'Set 2'  =>  '11',
		'all wins values'  =>  '2, 10, 1, 9 //count wins: 4',
		'for reference  '  =>  '3, 8, 12, 14 //count ref: 4',
		'weird values   '  =>  '11, 13, 6, 7, 4',
		'small set  '  =>  '',
		'medium set '  =>  '3, 8, 12, 14',
		'big set    '  =>  '',
		'Qqpl' =>  '3, 8, 12, 14',
		'For reference' =>  '3, 8, 12, 14',
		'Tce' =>  '2, 3, 8, 10, 1, 12',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[1], [1, 2, 11], [2, 11]] ,
		'qpl/trio'       =>  [[7, 5, 2, 6, 1], [7, 5, 2, 11, 1]] ,
		'All QPL values'    =>  '1, 5, 7, 2, 11, 6',
		'All Runners   '    =>  '1, 5, 7, 9, 2, 11, 12, 6, 8, 14, 13, 3, 4, 10',
		'favorite' =>  1 ,
		'Set 1'  =>  '2, 11, 6',
		'Set 2'  =>  '9, 12, 8',
		'all wins values'  =>  '1, 2, 11 //count wins: 3',
		'for reference  '  =>  '5, 7, 6 //count ref: 3',
		'weird values   '  =>  '9, 12, 8, 14, 13, 3, 4, 10',
		'small set  '  =>  '',
		'medium set '  =>  '5, 7',
		'big set    '  =>  '6',
		'Qqpl' =>  '5, 7, 6',
		'Tce' =>  '1, 5, 7, 2, 11, 6',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[2]] ,
		'qpl/trio'       =>  [[4, 13, 12, 1, 2], [4, 2, 13, 12, 5], [4, 2, 13, 12, 3], [4, 13, 3, 1, 2]] ,
		'All QPL values'    =>  '4, 3, 12, 1, 2, 5, 13',
		'All Runners   '    =>  '4, 3, 1, 12, 2, 5, 13, 8, 6, 14, 9, 10, 7, 11',
		'favorite' =>  4 ,
		'all wins values'  =>  '2 //count wins: 1',
		'for reference  '  =>  '4, 3, 12, 1, 5, 13 //count ref: 6',
		'weird values   '  =>  '8, 6, 14, 9, 10, 7, 11',
		'small set  '  =>  '4, 3, 12, 1',
		'medium set '  =>  '',
		'big set    '  =>  '5, 13',
		'Qqpl' =>  '4, 3, 12, 1, 5, 13',
		'For reference' =>  '4, 3, 12, 1, 5, 13',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[9], [9, 8]] ,
		'qpl/trio'       =>  [[3, 14, 8, 10, 9], [14, 3, 8, 2, 9], [14, 5, 10, 9, 8], [1, 14, 10, 9, 8]] ,
		'All QPL values'    =>  '14, 9, 1, 5, 8, 3, 10, 2',
		'All Runners   '    =>  '14, 9, 1, 5, 8, 3, 10, 7, 2, 4, 12, 11, 6, 13',
		'favorite' =>  14 ,
		'Set 1'  =>  '2',
		'Set 2'  =>  '7',
		'all wins values'  =>  '9, 8 //count wins: 2',
		'for reference  '  =>  '14, 1, 5, 3, 10, 2 //count ref: 6',
		'weird values   '  =>  '7, 4, 12, 11, 6, 13',
		'small set  '  =>  '14',
		'medium set '  =>  '1, 5',
		'big set    '  =>  '3, 10, 2',
		'Qqpl' =>  '14, 1, 5, 3, 10, 2',
		'For reference' =>  '14, 1, 5, 3, 10, 2',
		'Place' =>  '14',
		'Qin' =>  '1, 5, 3',
		'Tce' =>  '14, 9, 1, 5, 8, 3',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[9, 7], [9]] ,
		'qpl/trio'       =>  [[4, 13, 2, 9, 7], [9, 7, 3, 4, 2], [5, 4, 2, 9, 7], [3, 5, 4, 2, 9]] ,
		'All QPL values'    =>  '9, 4, 7, 5, 3, 2, 13',
		'All Runners   '    =>  '9, 4, 7, 5, 3, 2, 1, 8, 13, 11, 6, 12, 10',
		'favorite' =>  9 ,
		'Set 1'  =>  '13',
		'Set 2'  =>  '1, 8',
		'all wins values'  =>  '9, 7 //count wins: 2',
		'for reference  '  =>  '4, 5, 3, 2, 13 //count ref: 5',
		'weird values   '  =>  '1, 8, 11, 6, 12, 10',
		'small set  '  =>  '',
		'medium set '  =>  '4',
		'big set    '  =>  '5, 3, 2, 13',
		'Qqpl' =>  '4, 5, 3, 2, 13',
		'For reference' =>  '4, 5, 3, 2, 13',
		'Tce' =>  '9, 4, 7, 5, 3, 2',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[1], [7], [2], [2, 1]] ,
		'qpl/trio'       =>  [[2, 13, 6, 7, 1], [2, 13, 6, 3, 7], [2, 13, 6, 3, 1], [13, 6, 3, 12, 2], [13, 6, 12, 2, 1]] ,
		'All QPL values'    =>  '2, 1, 12, 7, 3, 13, 6',
		'All Runners   '    =>  '2, 1, 12, 7, 3, 13, 6, 5, 4, 10, 11, 8, 9, 14',
		'favorite' =>  2 ,
		'all wins values'  =>  '2, 1, 7 //count wins: 3',
		'for reference  '  =>  '12, 3, 13, 6 //count ref: 4',
		'weird values   '  =>  '5, 4, 10, 11, 8, 9, 14',
		'small set  '  =>  '',
		'medium set '  =>  '12',
		'big set    '  =>  '3, 13, 6',
		'Qqpl' =>  '12, 3, 13, 6',
		'For reference' =>  '12, 3, 13, 6',
		'Tce' =>  '2, 1, 12, 7, 3, 13',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[9]] ,
		'qpl/trio'       =>  [[11, 2, 6, 3, 9], [11, 2, 6, 12, 9], [11, 2, 6, 14, 9], [11, 2, 6, 5, 9]] ,
		'All QPL values'    =>  '11, 2, 9, 5, 3, 12, 6, 14',
		'All Runners   '    =>  '11, 2, 9, 5, 3, 12, 6, 1, 14, 4, 13, 7, 8, 10',
		'favorite' =>  11 ,
		'Set 1'  =>  '14',
		'Set 2'  =>  '1',
		'all wins values'  =>  '9 //count wins: 1',
		'for reference  '  =>  '11, 2, 5, 3, 12, 6, 14 //count ref: 7',
		'weird values   '  =>  '1, 4, 13, 7, 8, 10',
		'small set  '  =>  '11, 2',
		'medium set '  =>  '',
		'big set    '  =>  '5, 3, 12, 6, 14',
		'Qqpl' =>  '11, 2, 5, 3, 12, 6, 14',
		'For reference' =>  '11, 2, 5, 3, 12, 6, 14',
		'Place' =>  '11',
		'Qin' =>  '2, 5, 3',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[7, 9, 8], [7, 8], [7], [6, 7], [9, 8], [8]] ,
		'qpl/trio'       =>  [[1, 6, 7, 9, 8], [1, 13, 7, 9, 8], [1, 5, 13, 7, 8], [8, 13, 1, 6, 7], [8, 13, 10, 1, 7], [1, 7, 3, 13, 8]] ,
		'All QPL values'    =>  '1, 8, 7, 13, 9, 3, 5, 10, 6',
		'All Runners   '    =>  '1, 8, 7, 13, 9, 3, 5, 4, 10, 12, 6, 2, 14, 11',
		'favorite' =>  1 ,
		'Set 1'  =>  '10, 6',
		'Set 2'  =>  '4, 12',
		'all wins values'  =>  '8, 7, 9, 6 //count wins: 4',
		'for reference  '  =>  '1, 13, 3, 5, 10 //count ref: 5',
		'weird values   '  =>  '4, 12, 2, 14, 11',
		'small set  '  =>  '1',
		'medium set '  =>  '13, 3, 5, 10',
		'big set    '  =>  '',
		'Qqpl' =>  '1, 13, 3, 5, 10',
		'For reference' =>  '1, 13, 3, 5, 10',
		'Tce' =>  '1, 8, 7, 13, 9, 3',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[9, 8]] ,
		'qpl/trio'       =>  [[7, 14, 10, 9, 8], [10, 4, 7, 8, 9]] ,
		'All QPL values'    =>  '7, 9, 8, 14, 10, 4',
		'All Runners   '    =>  '7, 9, 8, 14, 10, 4, 3, 12, 6, 2, 11, 1, 5, 13',
		'favorite' =>  7 ,
		'all wins values'  =>  '9, 8 //count wins: 2',
		'for reference  '  =>  '7, 14, 10, 4 //count ref: 4',
		'weird values   '  =>  '3, 12, 6, 2, 11, 1, 5, 13',
		'small set  '  =>  '7',
		'medium set '  =>  '',
		'big set    '  =>  '14, 10, 4',
		'Qqpl' =>  '7, 14, 10, 4',
		'For reference' =>  '7, 14, 10, 4',
		'Place' =>  '7',
		'Qin' =>  '14, 10, 4',
	],
];
