<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[6]] ,
		'qpl/trio'       =>  [[5, 3, 7, 11, 6]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '5, 3, 11, 6, 7',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'Tce'               =>  '3, 5, 6, 7, 11',
		/**Method 1: If allQplValues === 2QplValues and empty(3QplValues) then place favourite, 
     Method 2: Remove I from first 5 elts of Tce, if favourite is one of them then place favourite*/
		'I' =>  '',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[9, 8]] ,
		'qpl/trio'       =>  [[7, 3, 11, 9, 8]] ,
		'new 2 qpl/trio' =>  [[7, 3, 11, 9, 8]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '7, 11, 8, 9, 3',
		'New 2 QPL values'  =>  '7, 11, 8, 9, 3',
		'New 3 QPL values'  =>  '',
		'Tce'               =>  '3, 7, 8, 9, 11',
		/**Method 1: If allQplValues === 2QplValues and empty(3QplValues) then place favourite, 
     Method 2: Remove I from first 5 elts of Tce, if favourite is one of them then place favourite*/
		'I' =>  '7, 11, 3',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[7, 2], [7]] ,
		'qpl/trio'       =>  [[12, 1, 6, 7, 2]] ,
		'new 2 qpl/trio' =>  [[12, 1, 6, 7, 2]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '7, 6, 12, 1, 2',
		'New 2 QPL values'  =>  '7, 6, 12, 1, 2',
		'New 3 QPL values'  =>  '',
		'Tce'               =>  '1, 2, 6, 7, 12',
		/**Method 1: If allQplValues === 2QplValues and empty(3QplValues) then place favourite, 
     Method 2: Remove I from first 5 elts of Tce, if favourite is one of them then place favourite*/
		'I' =>  '6, 12, 1',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [] ,
		'qpl/trio'       =>  [[8, 4, 2, 1, 5]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '8, 4, 1, 5, 2',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'Tce'               =>  '1, 2, 4, 5, 8',
		/**Method 1: If allQplValues === 2QplValues and empty(3QplValues) then place favourite, 
     Method 2: Remove I from first 5 elts of Tce, if favourite is one of them then place favourite*/
		'I' =>  '',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[9]] ,
		'qpl/trio'       =>  [[1, 12, 6, 8, 9]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '9, 6, 8, 1, 12',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'Tce'               =>  '1, 6, 8, 9, 12',
		/**Method 1: If allQplValues === 2QplValues and empty(3QplValues) then place favourite, 
     Method 2: Remove I from first 5 elts of Tce, if favourite is one of them then place favourite*/
		'I' =>  '',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [] ,
		'qpl/trio'       =>  [[3, 1, 12, 8, 4]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 8, 1, 12, 4',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'Tce'               =>  '1, 3, 4, 8, 12',
		/**Method 1: If allQplValues === 2QplValues and empty(3QplValues) then place favourite, 
     Method 2: Remove I from first 5 elts of Tce, if favourite is one of them then place favourite*/
		'I' =>  '',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[9, 7, 8]] ,
		'qpl/trio'       =>  [[5, 11, 9, 7, 8]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [[5, 11, 9, 7, 8]] ,
		'All QPL values'    =>  '9, 5, 8, 11, 7',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '9, 5, 8, 11, 7',
		'Tce'               =>  '5, 7, 8, 9, 11',
		/**Method 1: If allQplValues === 2QplValues and empty(3QplValues) then place favourite, 
     Method 2: Remove I from first 5 elts of Tce, if favourite is one of them then place favourite*/
		'I' =>  '',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5]] ,
		'qpl/trio'       =>  [[1, 12, 4, 6, 5]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '5, 4, 6, 1, 12',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'Tce'               =>  '1, 4, 5, 6, 12',
		/**Method 1: If allQplValues === 2QplValues and empty(3QplValues) then place favourite, 
     Method 2: Remove I from first 5 elts of Tce, if favourite is one of them then place favourite*/
		'I' =>  '',
	],
];
