<?php

const MAX = 10**6;

$num = rand(0, MAX);

echo "The picked number is: $num</br></br>Guessing it with ascending and descending pattern:</br></br>";

// Ascending

$arr = range(0, MAX);

$begin = microtime(true);
$result = guess($num, $arr);
$tAsc = microtime(true) - $begin;

if($result) {

	echo "Ascendent guessing: ".($tAsc*1000)."ms</br>";

} else {

	throw new Exception("For some reason the ascendent guessing is not guessing at all.");
	
}

// Descending

rsort($arr);

$begin = microtime(true);
$result = guess($num, $arr);
$tDesc = microtime(true) - $begin;

if($result) {

	echo "Descendent guessing: ".($tDesc*1000)."ms</br>";

} else {

	throw new Exception("For some reason the descendent guessing is not guessing at all.");
	
}

// Random

echo "Ascending + Descending: ".(($tAsc + $tDesc)*1000)."ms</br>";
echo "</br></br>Guessing it with random pattern:</br></br>";

shuffle($arr);

$begin = microtime(true);
$result = guess($num, $arr);
$tRand = microtime(true) - $begin;

if($result) {

	echo "Random guessing: ".($tRand*1000)."ms</br>";

} else {

	throw new Exception("For some reason the random guessing is not guessing at all.");
	
}

function guess($num, $arr) {

	for($i = 0; $i <= MAX; $i++) {

		if($arr[$i] === $num) return 1;

	}

	return 0;

}

?>