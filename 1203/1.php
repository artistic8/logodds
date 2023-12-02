<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '4, 1, 11, 13, 10, 7, 8, 14, 2, 3, 12, 6, 9, 5',
		'Pla Odds'  =>  '11, 4, 1, 13, 10, 7, 8, 14, 12, 6, 2, 3, 9, 5',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 4)
		/** Based on pla odds */
		//No pla candidates(Place bet: 11 <== focus on this one for now)
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '9, 7, 6, 1, 3, 5, 10, 8, 2, 4, 12, 11',
		'Pla Odds'  =>  '9, 6, 5, 7, 3, 10, 1, 8, 2, 4, 12, 11',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '3',
		/** Based on pla odds */
		'pla odds candidate(k = 8)' => '3',
		'black pla odds candidates' => '10',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '1, 7, 5, 10, 2, 14, 8, 6, 9, 3, 13, 4, 12, 11',
		'Pla Odds'  =>  '7, 5, 10, 2, 14, 8, 1, 6, 9, 4, 13, 11, 12, 3',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 9)' => '14',
		/** Black selection */
		'black win odds candidates' => '2',
		/** Based on pla odds */
		'pla odds candidate(k = 9)' => '8',
		'black pla odds candidates' => '8, 10',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '6, 12, 1, 3, 10, 5, 2, 4, 7, 8, 11, 9',
		'Pla Odds'  =>  '12, 6, 1, 3, 10, 5, 4, 2, 8, 11, 7, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '12',
		/** Based on pla odds */
		//No pla candidates(Place bet: 12 <== focus on this one for now)
		'black pla odds candidates' => '6, 10',
		'SURE PLACE' => '6',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '2, 4, 6, 7, 3, 8, 1, 12, 11, 5, 10, 9',
		'Pla Odds'  =>  '4, 2, 7, 6, 3, 8, 12, 1, 10, 11, 5, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 2)
		/** Based on pla odds */
		//No pla candidates(Place bet: 4 <== focus on this one for now)
		'black pla odds candidates' => '2',
		'SURE PLACE' => '2',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '7, 4, 3, 1, 5, 6, 8, 2, 10, 9',
		'Pla Odds'  =>  '7, 1, 3, 4, 5, 8, 10, 6, 2, 9',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'win odds candidate(k = 6)' => '5',
		/** Based on pla odds */
		//No pla candidates(Place bet: 7 <== focus on this one for now)
		'black pla odds candidates' => '4, 10',
		'SURE PLACE' => '4',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '4, 2, 5, 1, 3, 6, 11, 8, 7, 10, 9',
		'Pla Odds'  =>  '4, 2, 6, 1, 5, 3, 8, 7, 11, 10, 9',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '2',
		'win odds candidate(k = 8)' => '1',
		'win odds candidate(k = 6)' => '6',
		/** Black selection */
		'black win odds candidates' => '6, 2',
		'SURE PLACE' => '2',
		/** Based on pla odds */
		'pla odds candidate(k = 10)' => '2',
		'black pla odds candidates' => '2, 4',
		'SURE PLACE' => '2, 4',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '5, 8, 9, 2, 1, 11, 13, 4, 3, 7, 6, 12, 10',
		'Pla Odds'  =>  '5, 2, 8, 9, 11, 13, 1, 4, 6, 3, 7, 12, 10',
		'Total Runners '  =>  13,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '8',
		/** Black selection */
		'black win odds candidates' => '8',
		'SURE PLACE' => '8',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '2',
		'black pla odds candidates' => '2',
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '6, 2, 1, 10, 5, 9, 4, 3, 14, 13, 12, 8, 7, 11',
		'Pla Odds'  =>  '12, 2, 1, 6, 10, 3, 5, 9, 4, 14, 8, 13, 7, 11',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 6)
		/** Based on pla odds */
		//No pla candidates(Place bet: 12 <== focus on this one for now)
		'black pla odds candidates' => '10',
	],
	'10' => [
		/**
		Race 10
		*/
		'Win Odds'  =>  '4, 11, 12, 5, 8, 3, 2, 14, 13, 10, 6, 1, 7, 9',
		'Pla Odds'  =>  '12, 4, 8, 5, 11, 2, 7, 10, 14, 13, 1, 3, 6, 9',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '8',
		/** Black selection */
		'black win odds candidates' => '8',
		/** Based on pla odds */
		//No pla candidates(Place bet: 12 <== focus on this one for now)
		'black pla odds candidates' => '4, 8',
		'SURE PLACE' => '4',
	],
];
