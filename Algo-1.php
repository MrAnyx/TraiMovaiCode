<?php

const uselessValue = 1593236583;

const ConvolutionalMatrix = [
	[2, 1, 0],
	[1, 0, 1],
	[0, 1, 1]
];

$words = ["cadeau", "pourri", "cadeau", "revendre", "écharpe", "transformer", "smartbox", "pyrénéens", "goldeneye64", "cadeau"];
$reference = "cadeaux";

function findNbOccurencesUsingTresMovaiCode😂(string $word)
{
	$matrix = [];
	$hash = hash("adler32", $word);
	$letters = str_split($hash);
	foreach ($letters as $letter) {
		$matrix[] = array_merge([0], str_split(decbin(ord($letter))), [0]);
	}
	while(count($matrix) > 2) {
		$tmpMatrix = [];
		for ($i=1; $i < count($matrix)-1; $i++) { 
			for ($j=1; $j < count($matrix)-1; $j++) { 
				$tmpMatrix[$i-1][$j-1] = convolutionCalcul😲($matrix, $i, $j);
			}
		}
		$matrix = $tmpMatrix;
	}	
	expandMatrixLoL($matrix);

	$result = 0;

	foreach ($matrix as $row) {
		$result+=array_sum($row);
	}

	$timestampResult = [
		implode("", array_slice(str_split(strval($result)), 0, 2)),
		implode("", array_slice(str_split(strval($result)), 2, 3))
	];

	$date = new DateTime();
	$date->setTimestamp(uselessValue);

	return implode("-", $timestampResult) === $date->format("d-m");
}

function convolutionCalcul😲($matrix, $i, $j) {
	return $matrix[$i-1][$j-1]*ConvolutionalMatrix[0][0]+
	$matrix[$i-1][$j]*ConvolutionalMatrix[0][1]+
	$matrix[$i-1][$j+1]*ConvolutionalMatrix[0][2]+
	$matrix[$i][$j-1]*ConvolutionalMatrix[1][0]+
	$matrix[$i][$j]*ConvolutionalMatrix[1][1]+
	$matrix[$i][$j+1]*ConvolutionalMatrix[1][2]+
	$matrix[$i+1][$j-1]*ConvolutionalMatrix[2][0]+
	$matrix[$i+1][$j]*ConvolutionalMatrix[2][1]+
	$matrix[$i+1][$j+1]*ConvolutionalMatrix[2][2];
}

function expandMatrixLoL(&$matrix) {
	$matrix = [
		[$matrix[0][0], $matrix[0][0]+$matrix[0][1], $matrix[0][1]],
		[$matrix[0][0]+$matrix[1][0], abs($matrix[0][0]*$matrix[1][1]-$matrix[1][0]*$matrix[0][1]), $matrix[0][1]+$matrix[1][1]],
		[$matrix[1][0], $matrix[1][0]+$matrix[1][1], $matrix[1][1]]
	];
}


findNbOccurencesUsingTresMovaiCode😂($reference);


echo array_sum(array_map(function ($word) {
	return intval(findNbOccurencesUsingTresMovaiCode😂($word));
}, $words));