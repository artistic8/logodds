<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '9, 3, 8, 7, 2, 6, 1, 5, 4',
		'Pla Odds'  =>  '9, 8, 3, 2, 7, 6, 5, 1, 4',
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
		'Win Odds'  =>  '4, 5, 3, 2, 1, 6, 8, 7',
		'Pla Odds'  =>  '4, 5, 3, 2, 1, 6, 8, 7',
		'Total Runners '  =>  8,
		//Based on win odds
		'candidate(k = 6)' => '3',
		//Based on pla odds
		'candidate(k = 6)' => '3',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '7, 11, 1, 4, 5, 6, 3, 8, 9, 10, 2',
		'Pla Odds'  =>  '7, 4, 11, 1, 5, 3, 6, 8, 9, 10, 2',
		'Total Runners '  =>  11,
		//Based on win odds
		'candidate(k = 10)' => '11',
		'candidate(k = 9)' => '1',
		'candidate(k = 8)' => '4',
		'candidate(k = 6)' => '6',
		//Based on pla odds
		'candidate(k = 10)' => '4',
		'candidate(k = 9)' => '11',
		'candidate(k = 8)' => '1',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '7, 5, 2, 10, 6, 1, 8, 12, 4, 11, 3, 9',
		'Pla Odds'  =>  '7, 5, 2, 10, 6, 1, 8, 12, 11, 4, 3, 9',
		'Total Runners '  =>  12,
		//Based on win odds
		//Based on pla odds
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '5, 1, 3, 11, 2, 10, 7, 9, 8, 4, 6, 12',
		'Pla Odds'  =>  '5, 1, 3, 11, 2, 10, 7, 9, 8, 4, 12, 6',
		'Total Runners '  =>  12,
		//Based on win odds
		'WP' => '5',
		'candidate(k = 12)' => '5',
		'candidate(k = 7)' => '10',
		//Based on pla odds
		'candidate(k = 7)' => '10',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '5, 2, 3, 11, 1, 7, 4, 8, 12, 9, 10, 6',
		'Pla Odds'  =>  '5, 2, 3, 11, 1, 4, 7, 9, 12, 8, 10, 6',
		'Total Runners '  =>  12,
		//Based on win odds
		'candidate(k = 8)' => '1',
		//Based on pla odds
		'candidate(k = 7)' => '4',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '1, 10, 7, 5, 3, 4, 8, 2, 6, 9',
		'Pla Odds'  =>  '1, 10, 5, 7, 3, 4, 8, 9, 2, 6',
		'Total Runners '  =>  10,
		//Based on win odds
		//Based on pla odds
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '4, 5, 2, 8, 6, 11, 1, 9, 7, 3, 12',
		'Pla Odds'  =>  '5, 8, 4, 2, 6, 11, 9, 1, 7, 3, 12',
		'Total Runners '  =>  11,
		//Based on win odds
		//Based on pla odds
	],
];
