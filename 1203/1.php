<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '4, 1, 11, 13, 3, 7, 10, 14, 6, 12, 8, 2, 5, 9',
		'Pla Odds'  =>  '4, 13, 1, 11, 3, 10, 6, 7, 14, 2, 12, 5, 9, 8',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 4)
		/** Based on pla odds */
		//No pla candidates(Place bet: 4 <== focus on this one for now)
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '9, 3, 7, 6, 5, 1, 10, 2, 11, 8, 4, 12',
		'Pla Odds'  =>  '3, 9, 6, 10, 1, 7, 5, 8, 2, 12, 11, 4',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'WP' => '9',
		'win odds candidate(k = 12)' => '9',
		/** Based on pla odds */
		'pla odds candidate(k = 11)' => '9',
		'pla odds candidate(k = 8)' => '1',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '1, 7, 5, 2, 10, 14, 9, 3, 8, 12, 11, 4, 13, 6',
		'Pla Odds'  =>  '7, 2, 8, 1, 10, 14, 5, 9, 11, 3, 13, 4, 6, 12',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 13)' => '7',
		'win odds candidate(k = 11)' => '2',
		/** Black selection */
		'black win odds candidates' => '2',
		/** Based on pla odds */
		//No pla candidates(Place bet: 7 <== focus on this one for now)
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '6, 1, 12, 10, 4, 5, 3, 11, 2, 7, 9, 8',
		'Pla Odds'  =>  '12, 6, 1, 10, 5, 3, 4, 9, 8, 7, 11, 2',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 6)
		/** Based on pla odds */
		'pla odds candidate(k = 11)' => '6',
		'black pla odds candidates' => '6',
		'SURE PLACE' => '6',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '2, 4, 6, 7, 3, 8, 1, 12, 10, 5, 9, 11',
		'Pla Odds'  =>  '2, 4, 6, 7, 3, 10, 5, 8, 1, 11, 12, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 2)
		/** Based on pla odds */
		'pla odds candidate(k = 8)' => '3',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '7, 10, 3, 5, 4, 6, 2, 8, 1, 9',
		'Pla Odds'  =>  '7, 3, 4, 10, 8, 2, 1, 6, 9, 5',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '3',
		'win odds candidate(k = 6)' => '4',
		/** Black selection */
		'black win odds candidates' => '4',
		/** Based on pla odds */
		'pla odds candidate(k = 9)' => '3',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '4, 5, 2, 6, 1, 3, 11, 8, 10, 7, 9',
		'Pla Odds'  =>  '4, 6, 2, 3, 5, 8, 1, 7, 10, 11, 9',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '6',
		/** Black selection */
		'black win odds candidates' => '6',
		/** Based on pla odds */
		//No pla candidates(Place bet: 4 <== focus on this one for now)
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '9, 8, 2, 5, 11, 13, 1, 4, 6, 3, 10, 7, 12',
		'Pla Odds'  =>  '2, 5, 9, 11, 8, 10, 13, 1, 4, 6, 3, 12, 7',
		'Total Runners '  =>  13,
		/** Based on win odds */
		//No win candidates(Place bet: 9)
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '5',
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '6, 2, 1, 10, 3, 4, 5, 8, 14, 12, 9, 7, 13, 11',
		'Pla Odds'  =>  '2, 6, 10, 4, 1, 3, 5, 8, 7, 9, 14, 12, 11, 13',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 13)' => '2',
		'win odds candidate(k = 8)' => '5',
		/** Black selection */
		'black win odds candidates' => '2',
		'SURE PLACE' => '2',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '10',
		'pla odds candidate(k = 8)' => '5',
		'black pla odds candidates' => '10',
	],
	'10' => [
		/**
		Race 10
		*/
		'Win Odds'  =>  '4, 5, 2, 8, 7, 3, 12, 11, 10, 1, 14, 6, 13, 9',
		'Pla Odds'  =>  '2, 5, 8, 12, 4, 3, 7, 14, 9, 10, 11, 13, 1, 6',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 13)' => '5',
		/** Based on pla odds */
		'pla odds candidate(k = 11)' => '12',
		'pla odds candidate(k = 10)' => '4',
		'pla odds candidate(k = 9)' => '3',
		'black pla odds candidates' => '4',
		'SURE PLACE' => '4',
	],
];
