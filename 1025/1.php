<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '5, 6, 2, 11, 7, 3, 12, 9, 8, 10, 4, 1',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win bet' => '5, 6, 2, 11, 7, 3, 12, 9',
		'win odds candidate(k = 10)' => '2',
		/** Black selection */
		'black win odds candidates' => '2',
		'SURE PLACE' => '2',
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '11, 7, 8, 9, 3, 12, 6, 2, 1, 10, 5, 4',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win bet' => '11, 7, 8, 9, 3, 12, 6, 2, 1',
		'win odds candidate(k = 10)' => '8',
		/** Black selection */
		'black win odds candidates' => '8',
		'SURE PLACE' => '8',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '7, 6, 2, 12, 5, 8, 1, 10, 9, 11, 4, 3, 13, 14',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win bet' => '7, 6, 2',
		'WP' => '7',
		'win odds candidate(k = 14)' => '7',
		'win odds candidate(k = 13)' => '6',
		'win odds candidate(k = 9)' => '8',
		/** Black selection */
		'black win odds candidates' => '6, 8',
		'SURE PLACE' => '6',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '8, 4, 1, 2, 5, 9, 10, 3, 11, 7, 6, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win bet' => '8, 4, 1',
		'WP' => '8',
		'win odds candidate(k = 12)' => '8',
		/** Black selection */
		'black win odds candidates' => '8',
		'SURE PLACE' => '8',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '9, 6, 1, 4, 8, 3, 5, 10, 2, 12, 11, 7',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win bet' => '9, 6, 1, 4, 8',
		'win odds candidate(k = 11)' => '6',
		/** Black selection */
		'black win odds candidates' => '6',
		'SURE PLACE' => '6',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '3, 12, 8, 14, 2, 11, 1, 9, 7, 4, 10, 5, 6, 13',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win bet' => '3, 12, 8, 14, 2, 11, 1, 9, 7, 4, 10, 5, 6',
		//No win candidates(Place bet: 3)
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '9, 5, 8, 7, 11, 2, 3, 4, 12, 13, 1, 6, 10',
		'Total Runners '  =>  13,
		/** Based on win odds */
		'win bet' => '9, 5, 8, 7, 11, 2',
		//No win candidates(Place bet: 9)
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '5, 4, 1, 12, 11, 9, 2, 7, 6, 3, 8, 10',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win bet' => '5, 4, 1, 12, 11, 9, 2, 7, 6, 3, 8',
		//No win candidates(Place bet: 5)
	],
];
