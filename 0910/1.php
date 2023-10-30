<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[10, 2], [10, 2, 1], [10, 11]] ,
		'qpl/trio'       =>  [[8, 3, 1, 10, 2], [8, 1, 3, 10, 11], [8, 2, 11, 3, 5]] ,
		'new 2 qpl/trio' =>  [[8, 3, 1, 10, 2], [8, 1, 3, 10, 11]] ,
		'new 3 qpl/trio' =>  [[8, 3, 1, 10, 2]] ,
		'All QPL values'    =>  '8, 2, 11, 10, 3, 5, 1',
		'New 2 QPL values'  =>  '8, 2, 11, 10, 3, 1',
		'New 3 QPL values'  =>  '8, 2, 10, 3, 1',
		'favorite' =>  8 ,
		'all wins values'  =>  '2, 11, 10, 1 //count: 4',
		'for reference  '  =>  '8, 3, 5',
		'weird values   '  =>  '7, 6, 4, 9',
		'small set  '  =>  '8, 2, 11, 10, 3, 5',
		'medium set '  =>  '',
		'big set    '  =>  '10, 3, 5, 1',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[14], [7], [7, 6], [11], [14, 6], [7, 11]] ,
		'qpl/trio'       =>  [[7, 3, 4, 11, 14], [3, 14, 11, 7, 6], [3, 1, 6, 7, 11], [11, 6, 10, 3, 7], [3, 12, 6, 7, 11], [5, 3, 11, 7, 6]] ,
		'new 2 qpl/trio' =>  [[3, 14, 11, 7, 6], [3, 1, 6, 7, 11], [11, 6, 10, 3, 7], [3, 12, 6, 7, 11], [5, 3, 11, 7, 6], [7, 3, 4, 11, 14]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '7, 11, 5, 6, 3, 14, 12, 1, 10, 4',
		'New 2 QPL values'  =>  '7, 11, 5, 6, 3, 14, 12, 1, 10, 4',
		'New 3 QPL values'  =>  '',
		'favorite' =>  7 ,
		'all wins values'  =>  '7, 11, 6, 14 //count: 4',
		'for reference  '  =>  '5, 3, 12, 1, 10, 4',
		'weird values   '  =>  '13, 8, 9, 2',
		'small set  '  =>  '7, 11, 5',
		'medium set '  =>  '',
		'big set    '  =>  '12, 1, 10, 4',
		'Qin' =>  '5, 3, 12, 1, 10, 4',
		'Trio' =>  '7, 11, 5, 6, 3',
		'Tce' =>  '7, 11, 5, 6, 3, 13, 8, 9, 2',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[4], [4, 10], [10, 1, 3], [3]] ,
		'qpl/trio'       =>  [[3, 7, 1, 10, 4], [8, 4, 10, 7, 3], [4, 8, 10, 1, 7], [1, 3, 7, 8, 4], [4, 8, 10, 1, 3]] ,
		'new 2 qpl/trio' =>  [[3, 7, 1, 10, 4], [8, 4, 10, 7, 3], [4, 8, 10, 1, 7], [4, 8, 10, 1, 3]] ,
		'new 3 qpl/trio' =>  [[3, 7, 1, 10, 4], [4, 8, 10, 1, 3]] ,
		'All QPL values'    =>  '4, 3, 7, 10, 8, 1',
		'New 2 QPL values'  =>  '4, 3, 7, 10, 8, 1',
		'New 3 QPL values'  =>  '4, 3, 7, 10, 8, 1',
		'favorite' =>  4 ,
		'all wins values'  =>  '4, 3, 10, 1 //count: 4',
		'for reference  '  =>  '7, 8',
		'weird values   '  =>  '5, 2, 9, 6',
		'small set  '  =>  '4, 3, 7, 10, 8',
		'medium set '  =>  '',
		'big set    '  =>  '8, 1',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[5], [2], [7], [8]] ,
		'qpl/trio'       =>  [[8, 6, 1, 2, 3], [8, 6, 2, 1, 5], [8, 2, 4, 1, 7], [7, 1, 5, 4, 8]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '8, 7, 1, 4, 2, 5, 6, 3',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'favorite' =>  7 ,
		'all wins values'  =>  '8, 7, 2, 5 //count: 4',
		'for reference  '  =>  '1, 4, 6, 3',
		'weird values   '  =>  '9, 10',
		'small set  '  =>  '8, 7, 1, 4',
		'medium set '  =>  '',
		'big set    '  =>  '7, 1, 4, 2, 5, 6, 3',
		'Qin' =>  '1, 4, 6, 3',
		'Trio' =>  '8, 7, 1, 4, 2',
		'Tce' =>  '8, 7, 1, 4, 2, 9, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5], [8]] ,
		'qpl/trio'       =>  [[10, 8, 4, 5, 1], [10, 8, 4, 5, 3], [10, 8, 2, 3, 5], [10, 8, 11, 1, 5], [5, 1, 3, 10, 8], [8, 10, 2, 1, 5]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '8, 5, 10, 1, 11, 4, 3, 2',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'favorite' =>  8 ,
		'all wins values'  =>  '8, 5 //count: 2',
		'for reference  '  =>  '10, 1, 11, 4, 3, 2',
		'weird values   '  =>  '12, 9',
		'small set  '  =>  '8',
		'medium set '  =>  '',
		'big set    '  =>  '5, 10, 1, 11, 4, 3, 2',
		'Qin' =>  '10, 1, 11, 4, 3, 2',
		'Trio' =>  '8, 5, 10, 1, 11',
		'Tce' =>  '8, 5, 10, 1, 11, 12, 9',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[1], [2]] ,
		'qpl/trio'       =>  [[6, 10, 4, 7, 1], [6, 10, 2, 7, 1], [6, 1, 10, 3, 2], [1, 7, 3, 6, 2]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 1, 2, 10, 7, 3, 4',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'favorite' =>  6 ,
		'all wins values'  =>  '1, 2 //count: 2',
		'for reference  '  =>  '6, 10, 7, 3, 4',
		'weird values   '  =>  '8, 9, 5',
		'small set  '  =>  '6',
		'medium set '  =>  '',
		'big set    '  =>  '10, 7, 3, 4',
		'Qin' =>  '6, 10, 7, 3, 4',
		'Trio' =>  '6, 1, 2, 10, 7',
		'Tce' =>  '6, 1, 2, 10, 7, 8, 9, 5',
	],
];
