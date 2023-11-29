<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '3, 9, 8, 7, 2, 6, 1, 5, 4',
		'Pla Odds'  =>  '9, 3, 8, 2, 7, 6, 1, 5, 4',
		'Total Runners '  =>  9,
		//Based on win odds
		'candidate(k = 6)' => '7',
		//Based on pla odds
		'candidate(k = 6)' => '2',
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '5, 4, 1, 2, 3, 6, 8, 7',
		'Pla Odds'  =>  '5, 4, 1, 2, 3, 6, 8, 7',
		'Total Runners '  =>  8,
		//Based on win odds
		'candidate(k = 6)' => '1',
		//Based on pla odds
		'candidate(k = 6)' => '1',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '7, 5, 1, 11, 4, 3, 6, 9, 8, 10, 2',
		'Pla Odds'  =>  '5, 7, 11, 1, 6, 3, 4, 8, 9, 10, 2',
		'Total Runners '  =>  11,
		//Based on win odds
		'candidate(k = 10)' => '5',
		//Based on pla odds
		'candidate(k = 10)' => '7',
		'candidate(k = 9)' => '11',
		'candidate(k = 8)' => '1',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '7, 2, 6, 5, 10, 8, 1, 4, 11, 12, 3, 9',
		'Pla Odds'  =>  '7, 6, 2, 10, 5, 8, 1, 4, 11, 12, 3, 9',
		'Total Runners '  =>  12,
		//Based on win odds
		//Based on pla odds
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '5, 3, 1, 11, 2, 7, 9, 10, 8, 4, 6, 12',
		'Pla Odds'  =>  '5, 3, 1, 11, 2, 9, 7, 8, 10, 6, 4, 12',
		'Total Runners '  =>  12,
		//Based on win odds
		'WP' => '5',
		'candidate(k = 12)' => '5',
		//Based on pla odds
		'WP' => '5',
		'candidate(k = 12)' => '5',
		'candidate(k = 8)' => '2',
		'candidate(k = 7)' => '9',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '5, 2, 3, 11, 1, 7, 4, 8, 12, 10, 9, 6',
		'Pla Odds'  =>  '5, 2, 11, 3, 4, 1, 7, 10, 9, 12, 8, 6',
		'Total Runners '  =>  12,
		//Based on win odds
		'candidate(k = 10)' => '3',
		'candidate(k = 8)' => '1',
		//Based on pla odds
		'candidate(k = 9)' => '3',
		'candidate(k = 7)' => '1',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '1, 10, 7, 5, 3, 8, 4, 2, 6, 9',
		'Pla Odds'  =>  '5, 1, 10, 7, 4, 8, 3, 2, 9, 6',
		'Total Runners '  =>  10,
		//Based on win odds
		//Based on pla odds
		'candidate(k = 9)' => '1',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '2, 4, 8, 5, 6, 11, 1, 9, 7, 3, 12',
		'Pla Odds'  =>  '5, 8, 4, 2, 6, 9, 1, 11, 7, 3, 12',
		'Total Runners '  =>  11,
		//Based on win odds
		//Based on pla odds
	],
];
