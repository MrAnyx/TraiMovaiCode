<?php

const 🔔 = 1593236583;

const ➕ = [
	[2, 1, 0],
	[1, 0, 1],
	[0, 1, 1]
];

$words = ["cadeau", "pourri", "cadeau", "revendre", "écharpe", "transformer", "smartbox", "pyrénéens", "goldeneye64", "cadeau"];

function filterUsingTresMovaiCode😂(string $word)
{
	$😨 = [];
	$hash = hash("adler32", $word);
	$letters = str_split($hash);
	foreach ($letters as $letter) {
		$😨[] = array_merge([0], str_split(decbin(ord($letter))), [0]);
	}
	while(count($😨) > 2) {
		$😴 = [];
		for ($👽=1; $👽 < count($😨)-1; $👽++) { 
			for ($👻=1; $👻 < count($😨)-1; $👻++) { 
				$😴[$👽-1][$👻-1] = thisIsWhereTheMagicHappens😲($😨, $👽, $👻);
			}
		}
		$😨 = $😴;
	}	
	expandMatrixLoLThatsWhatSheSaid($😨);

	$😵 = 0;

	foreach ($😨 as $row) {
		$😵+=array_sum($row);
	}

	$🥶 = [
		implode("", array_slice(str_split(strval($😵)), 0, 2)),
		implode("", array_slice(str_split(strval($😵)), 2, 3))
	];

	$🐸 = new DateTime();
	$🐸->setTimestamp(🔔);

	return implode("-", $🥶) === $🐸->format("d-m");
}

function thisIsWhereTheMagicHappens😲($😨, $👽, $👻) {
	return $😨[$👽-1][$👻-1]*➕[0][0]+
	$😨[$👽-1][$👻]*➕[0][1]+
	$😨[$👽-1][$👻+1]*➕[0][2]+
	$😨[$👽][$👻-1]*➕[1][0]+
	$😨[$👽][$👻]*➕[1][1]+
	$😨[$👽][$👻+1]*➕[1][2]+
	$😨[$👽+1][$👻-1]*➕[2][0]+
	$😨[$👽+1][$👻]*➕[2][1]+
	$😨[$👽+1][$👻+1]*➕[2][2];
}

function expandMatrixLoLThatsWhatSheSaid(&$😨) {
	$😨 = [
		[$😨[0][0], $😨[0][0]+$😨[0][1], $😨[0][1]],
		[$😨[0][0]+$😨[1][0], abs($😨[0][0]*$😨[1][1]-$😨[1][0]*$😨[0][1]), $😨[0][1]+$😨[1][1]],
		[$😨[1][0], $😨[1][0]+$😨[1][1], $😨[1][1]]
	];
}

echo "Il y a ".array_sum(array_map(function ($word) {
	return intval(filterUsingTresMovaiCode😂($word));
}, $words))." fois le mot 'cadeau'";