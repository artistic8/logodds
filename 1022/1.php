<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '2, 3, 8, 10, 1, 11, 12, 14, 9, 13, 6, 7, 4',
		'Total Runners '  =>  13,
		/** Based on win odds */
		'win bet' => '2, 3, 8, 10, 1, 11',
		'win odds candidate(k = 9)' => '1',
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '1, 5, 7, 9, 2, 11, 12, 6, 8, 14, 13, 3, 4, 10',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win bet' => '1, 5, 7, 9, 2, 11, 12',
		//No win candidates(Place bet: 1)
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '4, 3, 1, 12, 2, 5, 13, 8, 6, 14, 9, 10, 7, 11',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win bet' => '4, 3, 1, 12, 2, 5, 13',
		'win odds candidate(k = 8)' => '13',
		/** Black selection */
		'black win odds candidates' => '13',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '14, 9, 1, 5, 8, 3, 10, 7, 2, 4, 12, 11, 6, 13',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win bet' => '14, 9, 1, 5, 8, 3, 10, 7, 2, 4, 12, 11, 6, 13',
		//No win candidates(Place bet: 14)
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '9, 4, 7, 5, 3, 2, 1, 8, 13, 11, 6, 12, 10',
		'Total Runners '  =>  13,
		/** Based on win odds */
		'win bet' => '9, 4, 7, 5, 3, 2, 1',
		'win odds candidate(k = 12)' => '4',
		'win odds candidate(k = 8)' => '2',
		/** Black selection */
		'black win odds candidates' => '4, 2',
		'SURE PLACE' => '4',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '2, 1, 12, 7, 3, 13, 6, 5, 4, 10, 11, 8, 9, 14',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win bet' => '2, 1, 12',
		'WP' => '2',
		'win odds candidate(k = 14)' => '2',
		'win odds candidate(k = 11)' => '7',
		'win odds candidate(k = 10)' => '3',
		/** Black selection */
		'black win odds candidates' => '2',
		'SURE PLACE' => '2',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '1, 3, 4, 5, 6, 2',
		'Total Runners '  =>  6,
		/** Based on win odds */
		'win bet' => '1, 3, 4, 5',
		//No win candidates(Place bet: 1)
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '11, 2, 9, 5, 3, 12, 6, 1, 14, 4, 13, 7, 8, 10',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win bet' => '11, 2, 9, 5, 3, 12, 6, 1',
		//No win candidates(Place bet: 11)
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '1, 8, 7, 13, 9, 3, 5, 4, 10, 12, 6, 2, 14, 11',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win bet' => '1, 8, 7, 13',
		//No win candidates(Place bet: 1)
	],
	'10' => [
		/**
		Race 10
		*/
		'Win Odds'  =>  '7, 9, 8, 14, 10, 4, 3, 12, 6, 2, 11, 1, 5, 13',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win bet' => '7, 9, 8, 14, 10, 4, 3, 12, 6, 2, 11, 1, 5',
		'win odds candidate(k = 11)' => '14',
		/** Black selection */
		'black win odds candidates' => '2',
	],
];
