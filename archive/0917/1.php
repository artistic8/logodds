<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '4, 6, 1, 3, 5, 2',
		'Total Runners '  =>  6,
		/** Based on win odds */
		'win odds candidate(k = 5)' => '6',
		/** Black selection */
		'black win odds candidates' => '6',
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '6, 12, 5, 8, 1, 2, 4, 14, 9, 3, 7, 13, 10',
		'Total Runners '  =>  13,
		/** Based on win odds */
		'win odds candidate(k = 9)' => '1',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '6, 5, 3, 4, 1',
		'Total Runners '  =>  5,
		/** Based on win odds */
		'win odds candidate(k = 4)' => '5',
		'win odds candidate(k = 3)' => '3',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '3, 14, 9, 2, 5, 13, 4, 7, 8, 11, 6, 10, 1, 12',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 3)
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '1, 2, 11, 8, 5, 7, 4, 3, 6, 12, 10, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 1)
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '7, 2, 3, 5, 11, 12, 10, 8, 1, 6, 4, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '11',
		/** Black selection */
		'black win odds candidates' => '11',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '4, 3, 9, 1, 5, 6, 2, 8, 7',
		'Total Runners '  =>  9,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '3',
		'win odds candidate(k = 6)' => '1',
		'win odds candidate(k = 5)' => '5',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '8, 13, 3, 1, 6, 10, 4, 2, 5, 9, 11, 7, 12, 14',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'WP' => '8',
		'win odds candidate(k = 14)' => '8',
		'win odds candidate(k = 11)' => '1',
		/** Black selection */
		'black win odds candidates' => '8',
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '1, 6, 5, 2, 4, 9, 8, 10, 14, 13, 11, 3, 12, 7',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '2',
		/** Black selection */
		'black win odds candidates' => '2',
	],
	'10' => [
		/**
		Race 10
		*/
		'Win Odds'  =>  '2, 9, 10, 5, 8, 12, 3, 1, 6, 4, 7, 11',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 2)
	],
];
