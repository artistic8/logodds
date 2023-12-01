<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '3, 1, 11, 4, 5, 2, 9, 8, 10, 12, 6, 7',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '5',
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '7, 9, 10, 6, 4, 13, 12, 2, 8, 1, 3, 14, 11, 5',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 7)
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '3, 9, 10, 12, 2, 6, 7, 8, 11, 13, 4, 1, 14, 5',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '7',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '6, 3, 5, 8, 9, 2, 10, 11, 4, 12, 1, 7',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 6)
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '3, 1, 8, 14, 9, 13, 6, 2, 10, 4, 11, 5, 7, 12',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '14',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '1, 8, 3, 6, 2, 13, 10, 5, 4, 14, 7, 9, 11, 12',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 1)
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '7, 5, 6, 1, 11, 13, 2, 10, 4, 9, 14, 3, 8, 12',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 7)
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '6, 1, 4, 10, 7, 3, 2, 8, 5, 9',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '4',
		/** Black selection */
		'black win odds candidates' => '4',
		'SURE PLACE' => '4',
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '2, 6, 1, 12, 4, 9, 5, 11, 7, 10, 8, 3',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '1',
		/** Black selection */
		'black win odds candidates' => '4',
	],
	'10' => [
		/**
		Race 10
		*/
		'Win Odds'  =>  '4, 2, 10, 11, 1, 3, 5, 13, 14, 7, 12, 6, 9, 8',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 4)
	],
	'11' => [
		/**
		Race 11
		*/
		'Win Odds'  =>  '6, 3, 1, 10, 5, 14, 4, 8, 2, 9, 11, 12, 7, 13',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '1',
		'win odds candidate(k = 11)' => '10',
		'win odds candidate(k = 8)' => '4',
		/** Black selection */
		'black win odds candidates' => '10, 4',
	],
];
