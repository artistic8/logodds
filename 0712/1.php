<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '2, 5, 4, 6, 12, 3, 1, 7, 11, 8, 9',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win bet' => '2, 5, 4, 6, 12',
		//No win candidates(Place bet: 2)
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '4, 2, 7, 6, 5, 8, 10, 1, 11, 9, 3, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win bet' => '4, 2, 7',
		'WP' => '4',
		'win odds candidate(k = 12)' => '4',
		/** Black selection */
		'black win odds candidates' => '4',
		'SURE PLACE' => '4',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '5, 11, 9, 2, 12, 8, 4, 1, 7, 3, 6, 10',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win bet' => '5, 11, 9, 2, 12, 8, 4, 1, 7, 3',
		//No win candidates(Place bet: 5)
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '3, 6, 4, 1, 12, 2, 8, 10, 11, 9',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'win bet' => '3, 6, 4, 1, 12',
		//No win candidates(Place bet: 3)
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '6, 12, 4, 9, 3, 7, 10, 8, 2, 11, 5, 1',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win bet' => '6, 12, 4, 9, 3, 7, 10, 8, 2, 11, 5, 1',
		'win odds candidate(k = 8)' => '3',
		/** Black selection */
		'black win odds candidates' => '4',
		'SURE PLACE' => '4',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '4, 12, 8, 2, 3, 1, 7, 6, 9, 5, 10',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win bet' => '4, 12, 8, 2, 3, 1, 7, 6, 9, 5, 10',
		'win odds candidate(k = 9)' => '8',
		'win odds candidate(k = 7)' => '3',
		/** Black selection */
		'black win odds candidates' => '8',
		'SURE PLACE' => '8',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '5, 7, 9, 4, 11, 3, 8, 10, 12, 2, 1, 6',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win bet' => '5, 7, 9, 4, 11, 3',
		//No win candidates(Place bet: 5)
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '2, 3, 11, 8, 4, 5, 9, 7, 1, 6, 10, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win bet' => '2, 3, 11',
		'WP' => '2',
		'win odds candidate(k = 12)' => '2',
		/** Black selection */
		'black win odds candidates' => '2',
		'SURE PLACE' => '2',
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '5, 8, 6, 2, 9, 11, 1, 7, 3, 10, 12, 4',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win bet' => '5, 8, 6, 2',
		'win odds candidate(k = 10)' => '6',
		/** Black selection */
		'black win odds candidates' => '6',
		'SURE PLACE' => '6',
	],
];
