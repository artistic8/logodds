<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '4, 1, 11, 13, 7, 3, 10, 8, 2, 6, 14, 12, 9, 5',
		'Pla Odds'  =>  '1, 11, 4, 13, 7, 3, 10, 8, 2, 6, 12, 14, 9, 5',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '11',
		'win odds candidate(k = 8)' => '10',
		/** Black selection */
		'black win odds candidates' => '11, 10',
		'SURE PLACE' => '11',
		/** Based on pla odds */
		'pla odds candidate(k = 8)' => '10',
		'black pla odds candidates' => '10',
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '9, 7, 1, 6, 5, 3, 8, 10, 4, 2, 12, 11',
		'Pla Odds'  =>  '9, 7, 6, 1, 5, 8, 3, 10, 4, 12, 2, 11',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 9)
		/** Based on pla odds */
		//No pla candidates(Place bet: 9 <== focus on this one for now)
		'black pla odds candidates' => '10',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '2, 1, 7, 5, 10, 8, 14, 13, 3, 12, 9, 4, 6, 11',
		'Pla Odds'  =>  '2, 14, 5, 8, 7, 10, 1, 13, 3, 12, 9, 4, 6, 11',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 2)
		/** Black selection */
		'black win odds candidates' => '2',
		'SURE PLACE' => '2',
		/** Based on pla odds */
		//No pla candidates(Place bet: 2 <== focus on this one for now)
		'black pla odds candidates' => '8, 10',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '6, 12, 1, 5, 10, 7, 4, 3, 2, 11, 8, 9',
		'Pla Odds'  =>  '1, 12, 6, 5, 7, 2, 10, 3, 4, 11, 8, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 6)
		/** Black selection */
		'black win odds candidates' => '4',
		/** Based on pla odds */
		//No pla candidates(Place bet: 1 <== focus on this one for now)
		'black pla odds candidates' => '6, 10',
		'SURE PLACE' => '6',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '2, 4, 7, 6, 3, 1, 8, 11, 12, 5, 10, 9',
		'Pla Odds'  =>  '2, 7, 4, 6, 1, 3, 8, 11, 12, 10, 9, 5',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 2)
		/** Based on pla odds */
		'pla odds candidate(k = 10)' => '4',
		'black pla odds candidates' => '2, 4',
		'SURE PLACE' => '2, 4',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '7, 4, 3, 5, 2, 1, 6, 8, 10, 9',
		'Pla Odds'  =>  '7, 4, 3, 5, 2, 1, 6, 8, 10, 9',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '3',
		/** Based on pla odds */
		'pla odds candidate(k = 8)' => '3',
		'black pla odds candidates' => '4, 10',
		'SURE PLACE' => '4',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '4, 2, 6, 1, 5, 3, 11, 7, 8, 10, 9',
		'Pla Odds'  =>  '2, 4, 1, 6, 5, 3, 7, 11, 8, 10, 9',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '2',
		/** Black selection */
		'black win odds candidates' => '6, 2',
		'SURE PLACE' => '6, 2',
		/** Based on pla odds */
		'pla odds candidate(k = 10)' => '4',
		'pla odds candidate(k = 7)' => '5',
		'black pla odds candidates' => '2, 4',
		'SURE PLACE' => '2, 4',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '5, 9, 11, 8, 1, 2, 4, 13, 6, 3, 7, 12, 10',
		'Pla Odds'  =>  '1, 5, 11, 9, 13, 4, 8, 2, 3, 6, 7, 12, 10',
		'Total Runners '  =>  13,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '9',
		/** Black selection */
		'black win odds candidates' => '8',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '5',
		'black pla odds candidates' => '2',
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '6, 2, 1, 10, 3, 4, 9, 12, 8, 5, 14, 13, 7, 11',
		'Pla Odds'  =>  '2, 6, 10, 1, 12, 3, 4, 8, 13, 9, 14, 5, 7, 11',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 6)
		/** Based on pla odds */
		'pla odds candidate(k = 8)' => '4',
		'black pla odds candidates' => '10, 4',
	],
	'10' => [
		/**
		Race 10
		*/
		'Win Odds'  =>  '4, 5, 8, 11, 12, 3, 6, 1, 2, 10, 13, 7, 14, 9',
		'Pla Odds'  =>  '4, 5, 12, 8, 11, 6, 1, 2, 3, 10, 13, 7, 9, 14',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '12',
		/** Black selection */
		'black win odds candidates' => '8',
		'SURE PLACE' => '8',
		/** Based on pla odds */
		'WP' => '4',
		'pla odds candidate(k = 14)' => '4',
		'pla odds candidate(k = 10)' => '11',
		'black pla odds candidates' => '4, 8, 11',
		'SURE PLACE' => '4, 8',
	],
];
