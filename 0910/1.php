<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '8, 2, 11, 10, 3, 5, 1, 7, 6, 4, 9',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win bet' => '8, 2, 11, 10, 3, 5, 1, 7, 6, 4, 9',
		//No win candidates(Place bet: 8)
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '2, 5, 6, 4, 9, 8, 3, 7, 1',
		'Total Runners '  =>  9,
		/** Based on win odds */
		'win bet' => '2, 5, 6, 4, 9, 8, 3',
		//No win candidates(Place bet: 2)
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '1, 4, 2, 9, 7, 8, 6, 5, 3',
		'Total Runners '  =>  9,
		/** Based on win odds */
		'win bet' => '1, 4, 2, 9, 7, 8, 6, 5',
		//No win candidates(Place bet: 1)
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '1, 2, 4, 3, 6, 5',
		'Total Runners '  =>  6,
		/** Based on win odds */
		'win bet' => '1, 2, 4, 3',
		//No win candidates(Place bet: 1)
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '7, 11, 5, 6, 3, 14, 12, 1, 10, 4, 13, 8, 9, 2',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win bet' => '7, 11, 5, 6, 3, 14, 12, 1, 10, 4, 13',
		//No win candidates(Place bet: 7)
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '4, 3, 7, 10, 8, 1, 5, 2, 9, 6',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'win bet' => '4, 3, 7, 10, 8, 1, 5, 2, 9',
		'win odds candidate(k = 9)' => '3',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '8, 7, 1, 4, 2, 5, 6, 9, 3, 10',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'win bet' => '8, 7, 1',
		'WP' => '8',
		'win odds candidate(k = 10)' => '8',
		/** Black selection */
		'black win odds candidates' => '8',
		'SURE PLACE' => '8',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '8, 5, 10, 1, 11, 4, 3, 2, 12, 9',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'win bet' => '8, 5, 10, 1, 11, 4, 3, 2, 12, 9',
		//No win candidates(Place bet: 8)
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '1, 6, 4, 9, 5, 2, 10, 7',
		'Total Runners '  =>  8,
		/** Based on win odds */
		'win bet' => '1, 6, 4, 9, 5, 2, 10, 7',
		'win odds candidate(k = 5)' => '9',
		/** Black selection */
		'black win odds candidates' => '8',
	],
	'10' => [
		/**
		Race 10
		*/
		'Win Odds'  =>  '6, 1, 2, 10, 3, 7, 4, 8, 9, 5',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'win bet' => '6, 1, 2, 10, 3, 7, 4, 8, 9',
		'win odds candidate(k = 9)' => '1',
		'win odds candidate(k = 8)' => '2',
		/** Black selection */
		'black win odds candidates' => '2',
		'SURE PLACE' => '2',
	],
];
