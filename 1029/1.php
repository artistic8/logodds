<?php
/**
small values: 1, 3, 4, 5, 7, 8, 11
medium values: 2, 4, 9
inter values: 4, count(interValues) = 1
*/

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[6]] ,
		'qpl/trio'       =>  [[11, 4, 7, 1, 6]] ,
		'All QPL values'    =>  '11, 7, 4, 1, 6',
		'All Runners   '    =>  '11, 7, 4, 1, 5, 3, 6, 8, 9, 12, 2, 10',
		'favorite' =>  11 ,
		'Set 1'  =>  '6',
		'Set 1'  =>  '5, 3, 8',
		'all wins values'  =>  '6 //count wins: 1',
		'for reference  '  =>  '11, 7, 4, 1 //count ref: 4',
		'weird values   '  =>  '5, 3, 8, 9, 12, 2, 10',
		'small set  '  =>  '11, 7, 4, 1',
		'medium set '  =>  '',
		'big set    '  =>  '',
		'Qqpl' =>  '11, 7, 4, 1',
		'For reference' =>  '11, 7, 4, 1',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[6]] ,
		'qpl/trio'       =>  [[11, 2, 12, 3, 6]] ,
		'All QPL values'    =>  '6, 12, 3, 11, 2',
		'All Runners   '    =>  '6, 12, 3, 5, 1, 11, 2, 8, 7, 4, 10, 9',
		'favorite' =>  6 ,
		'Set 1'  =>  '11, 2',
		'Set 1'  =>  '5, 1',
		'all wins values'  =>  '6 //count wins: 1',
		'for reference  '  =>  '12, 3, 11, 2 //count ref: 4',
		'weird values   '  =>  '5, 1, 8, 7, 4, 10, 9',
		'small set  '  =>  '',
		'medium set '  =>  '',
		'big set    '  =>  '12, 3, 11, 2',
		'Qqpl' =>  '12, 3, 11, 2',
		'For reference' =>  '12, 3, 11, 2',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [] ,
		'qpl/trio'       =>  [[7, 3, 1, 10, 4]] ,
		'All QPL values'    =>  '7, 10, 4, 3, 1',
		'All Runners   '    =>  '7, 10, 4, 3, 1, 5, 8, 11, 2, 9, 6, 12',
		'favorite' =>  7 ,
		'Set 1'  =>  '',
		'Set 1'  =>  '',
		'all wins values'  =>  ' //count wins: 0',
		'for reference  '  =>  '7, 10, 4, 3, 1 //count ref: 5',
		'weird values   '  =>  '5, 8, 11, 2, 9, 6, 12',
		'Qqpl' =>  '7, 10, 4, 3, 1',
		'For reference' =>  '7, 10, 4, 3, 1',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[4, 11]] ,
		'qpl/trio'       =>  [[8, 3, 5, 4, 11]] ,
		'All QPL values'    =>  '8, 3, 5, 4, 11',
		'All Runners   '    =>  '8, 3, 5, 12, 4, 11, 9, 1, 2, 7, 10, 6',
		'favorite' =>  8 ,
		'Set 1'  =>  '4, 11',
		'Set 1'  =>  '12',
		'all wins values'  =>  '4, 11 //count wins: 2',
		'for reference  '  =>  '8, 3, 5 //count ref: 3',
		'weird values   '  =>  '12, 9, 1, 2, 7, 10, 6',
		'small set  '  =>  '8, 3, 5',
		'medium set '  =>  '',
		'big set    '  =>  '',
		'Qqpl' =>  '8, 3, 5',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[1, 3]] ,
		'qpl/trio'       =>  [[9, 4, 2, 1, 3]] ,
		'All QPL values'    =>  '1, 4, 2, 9, 3',
		'All Runners   '    =>  '1, 4, 2, 11, 9, 6, 3, 10, 8, 12, 5, 7',
		'favorite' =>  1 ,
		'Set 1'  =>  '9, 3',
		'Set 1'  =>  '11, 6',
		'all wins values'  =>  '1, 3 //count wins: 2',
		'for reference  '  =>  '4, 2, 9 //count ref: 3',
		'weird values   '  =>  '11, 6, 10, 8, 12, 5, 7',
		'small set  '  =>  '',
		'medium set '  =>  '4, 2, 9',
		'big set    '  =>  '',
		'Qqpl' =>  '4, 2, 9',
		'Tce' =>  '1, 4, 2, 9, 3',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5]] ,
		'qpl/trio'       =>  [[1, 12, 8, 6, 5]] ,
		'All QPL values'    =>  '5, 8, 6, 1, 12',
		'All Runners   '    =>  '5, 8, 6, 1, 12, 7, 3, 9, 10, 2, 4, 11',
		'favorite' =>  5 ,
		'Set 1'  =>  '',
		'Set 1'  =>  '',
		'all wins values'  =>  '5 //count wins: 1',
		'for reference  '  =>  '8, 6, 1, 12 //count ref: 4',
		'weird values   '  =>  '7, 3, 9, 10, 2, 4, 11',
		'small set  '  =>  '',
		'medium set '  =>  '',
		'big set    '  =>  '8, 6, 1, 12',
		'Qqpl' =>  '8, 6, 1, 12',
		'For reference' =>  '8, 6, 1, 12',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[5]] ,
		'qpl/trio'       =>  [[3, 1, 10, 6, 5]] ,
		'All QPL values'    =>  '5, 10, 6, 3, 1',
		'All Runners   '    =>  '5, 10, 6, 3, 1, 12, 4, 2, 9, 8, 7, 11',
		'favorite' =>  5 ,
		'Set 1'  =>  '',
		'Set 1'  =>  '',
		'all wins values'  =>  '5 //count wins: 1',
		'for reference  '  =>  '10, 6, 3, 1 //count ref: 4',
		'weird values   '  =>  '12, 4, 2, 9, 8, 7, 11',
		'small set  '  =>  '',
		'medium set '  =>  '',
		'big set    '  =>  '10, 6, 3, 1',
		'Qqpl' =>  '10, 6, 3, 1',
		'For reference' =>  '10, 6, 3, 1',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[8]] ,
		'qpl/trio'       =>  [[4, 11, 7, 12, 8]] ,
		'All QPL values'    =>  '4, 11, 8, 7, 12',
		'All Runners   '    =>  '4, 11, 8, 6, 7, 2, 12, 1, 3, 10, 9, 5',
		'favorite' =>  4 ,
		'Set 1'  =>  '7, 12',
		'Set 1'  =>  '6, 2',
		'all wins values'  =>  '8 //count wins: 1',
		'for reference  '  =>  '4, 11, 7, 12 //count ref: 4',
		'weird values   '  =>  '6, 2, 1, 3, 10, 9, 5',
		'small set  '  =>  '4, 11',
		'medium set '  =>  '',
		'big set    '  =>  '7, 12',
		'Qqpl' =>  '4, 11, 7, 12',
		'For reference' =>  '4, 11, 7, 12',
		'Place' =>  '4',
		'Qin' =>  '11, 7, 12',
	],
];
