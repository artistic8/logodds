<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '2, 3, 4, 1, 5, 7',
		'Total Runners '  =>  6,
		/** Based on win odds */
		'win odds candidate(k = 5)' => '3',
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '6, 4, 8, 5, 1, 11, 2, 3, 10, 7, 9',
		'Total Runners '  =>  11,
		/** Based on win odds */
		//No win candidates(Place bet: 6)
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '7, 5, 1, 3, 2, 6',
		'Total Runners '  =>  6,
		/** Based on win odds */
		'WP' => '7',
		'win odds candidate(k = 6)' => '7',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '9, 11, 1, 7, 2, 3, 8, 12, 10, 4, 5, 6',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 9)
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '3, 7, 2, 5, 9, 4, 6, 1, 8, 10',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'WP' => '3',
		'win odds candidate(k = 10)' => '3',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '9, 2, 3, 1, 7, 8, 4, 5, 6, 10',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'WP' => '9',
		'win odds candidate(k = 10)' => '9',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '1, 7, 3, 2, 5, 4, 6, 8, 10, 11, 9',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '2',
		/** Black selection */
		'black win odds candidates' => '2',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '6, 11, 7, 1, 4, 10, 2, 3, 9, 5, 8, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'WP' => '6',
		'win odds candidate(k = 12)' => '6',
		'win odds candidate(k = 9)' => '1',
		/** Black selection */
		'black win odds candidates' => '6',
		'SURE PLACE' => '6',
	],
];
