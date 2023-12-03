<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '11, 1, 4, 13, 3, 7, 8, 10, 2, 12, 6, 14, 9, 5',
		'Pla Odds'  =>  '11, 1, 4, 13, 7, 3, 8, 10, 2, 12, 6, 14, 9, 5',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 11)
		/** Black selection */
		'black win odds candidates' => '11, 10',
		'SURE PLACE' => '11',
		/** Based on pla odds */
		//No pla candidates(Place bet: 11 <== focus on this one for now)
		'black pla odds candidates' => '10',
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '9, 7, 5, 1, 8, 6, 3, 10, 12, 2, 4, 11',
		'Pla Odds'  =>  '9, 7, 5, 8, 1, 6, 3, 12, 10, 11, 2, 4',
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
		'Win Odds'  =>  '5, 10, 2, 1, 7, 14, 8, 12, 13, 6, 3, 4, 9, 11',
		'Pla Odds'  =>  '5, 2, 1, 10, 7, 14, 8, 12, 13, 6, 4, 3, 9, 11',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 5)
		/** Black selection */
		'black win odds candidates' => '2',
		'SURE PLACE' => '2',
		/** Based on pla odds */
		//No pla candidates(Place bet: 5 <== focus on this one for now)
		'black pla odds candidates' => '8, 10',
		'SURE PLACE' => '10',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '6, 1, 12, 5, 10, 7, 2, 3, 4, 11, 8, 9',
		'Pla Odds'  =>  '6, 1, 12, 10, 5, 7, 2, 3, 11, 8, 4, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		//No win candidates(Place bet: 6)
		/** Black selection */
		'black win odds candidates' => '4',
		/** Based on pla odds */
		//No pla candidates(Place bet: 6 <== focus on this one for now)
		'black pla odds candidates' => '6, 10, 2',
		'SURE PLACE' => '6',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '2, 7, 4, 6, 1, 3, 8, 11, 12, 10, 5, 9',
		'Pla Odds'  =>  '2, 7, 4, 6, 1, 3, 8, 12, 11, 10, 5, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '4',
		/** Black selection */
		'black win odds candidates' => '4',
		'SURE PLACE' => '4',
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
		'Pla Odds'  =>  '7, 4, 3, 5, 1, 2, 6, 10, 8, 9',
		'Total Runners '  =>  10,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '3',
		/** Based on pla odds */
		//No pla candidates(Place bet: 7 <== focus on this one for now)
		'black pla odds candidates' => '4, 10',
		'SURE PLACE' => '4',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '4, 2, 1, 6, 5, 3, 11, 7, 8, 10, 9',
		'Pla Odds'  =>  '2, 1, 4, 6, 5, 3, 11, 7, 8, 10, 9',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '2',
		/** Black selection */
		'black win odds candidates' => '6, 2',
		'SURE PLACE' => '2',
		/** Based on pla odds */
		'pla odds candidate(k = 10)' => '1',
		'black pla odds candidates' => '2, 4',
		'SURE PLACE' => '2, 4',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '9, 5, 11, 8, 1, 2, 4, 13, 6, 3, 7, 12, 10',
		'Pla Odds'  =>  '1, 11, 9, 5, 13, 4, 8, 2, 6, 3, 7, 10, 12',
		'Total Runners '  =>  13,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '5',
		/** Black selection */
		'black win odds candidates' => '8',
		/** Based on pla odds */
		//No pla candidates(Place bet: 1 <== focus on this one for now)
		'black pla odds candidates' => '2, 11',
		'SURE PLACE' => '11',
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '6, 2, 1, 10, 3, 4, 13, 9, 12, 5, 8, 14, 7, 11',
		'Pla Odds'  =>  '2, 6, 1, 10, 13, 3, 12, 4, 9, 8, 14, 5, 7, 11',
		'Total Runners '  =>  14,
		/** Based on win odds */
		//No win candidates(Place bet: 6)
		/** Based on pla odds */
		'pla odds candidate(k = 9)' => '3',
		'black pla odds candidates' => '10, 4',
	],
	'10' => [
		/**
		Race 10
		*/
		'Win Odds'  =>  '4, 5, 8, 3, 11, 12, 6, 1, 2, 10, 13, 7, 14, 9',
		'Pla Odds'  =>  '4, 5, 12, 8, 11, 6, 3, 1, 2, 10, 13, 7, 14, 9',
		'Total Runners '  =>  14,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '11',
		/** Black selection */
		'black win odds candidates' => '8, 4, 11',
		'SURE PLACE' => '8, 4',
		/** Based on pla odds */
		'pla odds candidate(k = 10)' => '11',
		'black pla odds candidates' => '4, 8, 11',
		'SURE PLACE' => '4, 8',
	],
];
