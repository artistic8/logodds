<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '3, 9, 8, 7, 2, 6, 1, 5, 4',
		'Pla Odds'  =>  '2, 8, 3, 6, 7, 9, 1, 5, 4',
		'Total Runners '  =>  9,
		//Based on win odds
		'candidate(k = 6)' => '7',
		//Based on pla odds
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '5, 4, 2, 1, 3, 6, 8, 7',
		'Pla Odds'  =>  '5, 4, 1, 2, 3, 6, 8, 7',
		'Total Runners '  =>  8,
		//Based on win odds
		'candidate(k = 6)' => '2',
		//Based on pla odds
		'candidate(k = 6)' => '1',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '7, 5, 1, 11, 4, 6, 3, 8, 9, 10, 2',
		'Pla Odds'  =>  '5, 11, 7, 6, 3, 1, 4, 8, 9, 10, 2',
		'Total Runners '  =>  11,
		//Based on win odds
		'candidate(k = 10)' => '5',
		'candidate(k = 9)' => '1',
		'candidate(k = 8)' => '11',
		'candidate(k = 6)' => '6',
		//Based on pla odds
		'candidate(k = 10)' => '11',
		'candidate(k = 9)' => '7',
		'candidate(k = 8)' => '6',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '7, 2, 6, 5, 10, 1, 8, 4, 11, 12, 3, 9',
		'Pla Odds'  =>  '7, 6, 2, 10, 5, 8, 1, 4, 12, 11, 3, 9',
		'Total Runners '  =>  12,
		//Based on win odds
		//Based on pla odds
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '5, 1, 3, 11, 2, 7, 9, 10, 8, 4, 6, 12',
		'Pla Odds'  =>  '3, 1, 5, 11, 2, 9, 7, 10, 8, 6, 12, 4',
		'Total Runners '  =>  12,
		//Based on win odds
		'WP' => '5',
		'candidate(k = 12)' => '5',
		//Based on pla odds
		'candidate(k = 7)' => '9',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '2, 5, 3, 11, 1, 7, 12, 8, 4, 10, 9, 6',
		'Pla Odds'  =>  '5, 2, 3, 11, 7, 9, 4, 8, 12, 1, 10, 6',
		'Total Runners '  =>  12,
		//Based on win odds
		'candidate(k = 10)' => '3',
		'candidate(k = 8)' => '1',
		//Based on pla odds
		'candidate(k = 8)' => '7',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '1, 10, 7, 5, 3, 8, 4, 2, 6, 9',
		'Pla Odds'  =>  '1, 10, 5, 7, 4, 3, 9, 6, 8, 2',
		'Total Runners '  =>  10,
		//Based on win odds
		//Based on pla odds
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '2, 5, 8, 4, 6, 1, 11, 9, 3, 7, 12',
		'Pla Odds'  =>  '5, 8, 2, 4, 6, 11, 9, 1, 7, 3, 12, 10',
		'Total Runners '  =>  11,
		//Based on win odds
		//Based on pla odds
	],
];
