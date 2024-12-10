<?php

echo "Find the max value from given Array array(1,2,16,3,7,4,5).<br>";
$array = array(1,2,16,3,7,4,5);
$getMaxVal = 0;
foreach ($array as $key => $value) {
    if ($value > $getMaxVal) {
        $getMaxVal = $value;
    }
}
echo $getMaxVal;
echo "<br>";


echo "Find the min value from given Array array(16,3,7,4,5).<br>";
$array = array(16,3,7,4,5);
$getMinVal = '';
foreach ($array as $key => $value) {
    if ($key == 0) {
        $getMinVal = $value;
    }
    if ($value < $getMinVal) {
        $getMinVal = $value;
    }
}
echo $getMinVal;
echo "<br>";


echo "Reverse the string (Hello world) without using PHP function.<br>";
$str = "Hello world";
$length = strlen($str);
for ($i = ($length - 1); $i >= 0; $i--) { 
    $str[$i];
}
echo "<br>";

echo "Swap a value of variable without using 3rd variable. a=1, b=2<br>";
$a = 1;
$b = 2;

$a = $a + $b; // 3
$b = $a - $b; // 1
$a = $a - $b; // 2

echo $a .",". $b;
echo "<br>";


echo "Arrange an array in asscending order array(16,15,12,18,9,20).<br>";
$array = [16,15,12,18,9,20];
$length = sizeof($array);
// $new_arr = [];
for($i = 0; $i < $length; $i++){
    // 16    till 20
    for($j = 0; $j < ($length)-1; $j++){
        // 16    till 9
        if ($array[$j] > $array[$j + 1]) {
            // 16 > 15
            $max = $array[$j + 1];   //  $max = 15;
            $array[$j + 1] = $array[$j];  // 15 = 16
            $array[$j] = $max;   // 15
        }
    }
}
print_r($array);
echo "<br>";

echo "Find all the dublicate letter from a string.<br>";
$string = "abcdeffaghcijh";
$strlength = strlen($string);

$dublicate = [];
$count = 0;
for ($i=0; $i < $strlength; $i++) { 
    for ($j=1; $j < ($strlength); $j++) { 
        if ($string[$i] == $string[$j] && !in_array($string[$j],$dublicate)) {
            $dublicate[] = $string[$j];
            
        }
    }
}
print_r($dublicate);
echo "<br><br>";

echo "PHP Program to check if a given letter is vowel or consonant.<br>";

$string = "aewrtyihfgomnb";
$string = strtolower($string);
$size = strlen($string);
$vowelArr = ["a","e","i","o","u"];
$vowelCount = 0;
$consonantCount = 0;
$eachVowelArr = [];
$eachConsonantArr = [];
for ($i=0; $i < $size; $i++) { 
	// echo "$string[$i]";
	if (in_array($string[$i], $vowelArr)) {
		$vowelCount++;
		$eachVowelArr[] = $string[$i];
		//echo "$string[$i] is a vowel. <br>";
	}
	else
	{
		$consonantCount++;
		$eachConsonantArr[] = $string[$i];
		// echo "$string[$i] is a consonant. <br>";
	}
}
echo "vowel count is: ".$vowelCount;
echo "<br>";
print_r($eachVowelArr);
echo "<br>";
echo "consonant count is: ".$consonantCount;
echo "<br>";
print_r($eachConsonantArr);

echo "<br><br>";


echo "Program to print the current file name. <br>";

$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name;

echo "<br><br>";


echo "PHP Program to print the reverse of a number. <br>";

$number = "9876";
$numblength = strlen($number);
$reversedNumber = '';
for ($i = ($numblength)-1; $i >= 0; $i--) { 
	$reversedNumber.= $number[$i];
}
var_dump($reversedNumber);

echo "<br><br>";

echo "PHP Program to find the sum of digits. <br>";

$digit = 6789;
$digit = "6789";
$digilen = strlen($digit);
$sum = 0;
for ($i=0; $i < $digilen; $i++) { 
	$sum += $digit[$i];
}
echo $sum;
echo "<br><br>";

$color = array('white', 'green', 'red', 'blue', 'black');

echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the ".$color[2]." carpet, the ".$color[1]." lawn, the ".$color[0]." house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

echo "<br><br>";


// Define an associative array with countries as keys and capitals as values
$ceu = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels", "Denmark" => "Copenhagen",
    "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana"
);
// echo "<pre>";
// print_r($ceu);
// Convert associative array to a list of key-value pairs
$pairs = array();
foreach ($ceu as $country => $city) {
    $pairs[] = array($country, $city);
}
// echo "<pre>";
// print_r($pairs);
// Bubble Sort Algorithm
$n = count($pairs);
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($pairs[$j][1] > $pairs[$j + 1][1]) {
            // Swap the elements
            $temp = $pairs[$j];
            $pairs[$j] = $pairs[$j + 1];
            $pairs[$j + 1] = $temp;
        }
    }
}
print_r($pairs);

// Convert sorted list of pairs back to associative array
$sorted_ceu = array();
foreach ($pairs as $pair) {
    $sorted_ceu[$pair[0]] = $pair[1];
}

echo "<br><br>";

// Print the sorted associative array in asscending order
$arrName = [
	'1' => "Rajan Jha",
	'2' => "Sudhanshu Mishra",
	'3' => "Ankit Jha",
	'4' => "Nikhil Jha",
	'5' => "Chandan Jha",
	'6' => "Golu Jha",
	'7' => "Neeraj Manral",
	'8' => "Manish Singh"
];
// echo "<pre>";
// print_r($arrName);

$sortedArray = [];
foreach ($arrName as $key => $value) {
	$sortedArray[] = [$key, $value];
}
$sortedArrCount = count($sortedArray);
// echo "<pre>";
// print_r($sortedArray);
for ($i=0; $i < $sortedArrCount; $i++) { 
	// echo $sortedArray[0][$i];
	for ($j=0; $j < ($sortedArrCount) -1; $j++) { 
		// echo $sortedArray[$j][1];
		// echo "<br>";
		if ($sortedArray[$j][1] > $sortedArray[$j+1][1]) {
			$temp = $sortedArray[$j][1];
			$sortedArray[$j][1] = $sortedArray[$j+1][1];
			$sortedArray[$j+1][1] = $temp;
		}
		// die();
	}
	// die();
}

// echo "<pre>";
// print_r($sortedArray);
// Convert sorted list of pairs back to associative array
$sorted_ceu = array();
foreach ($sortedArray as $sortedArray) {
    $sorted_ceu[$sortedArray[0]] = $sortedArray[1];
}
echo "<pre>";
print_r($sorted_ceu);


echo "<br><br>";

// sort an array in ascending order
$arrayNo = [3,4,9,2,6,1,5];

// How each iteration work step by step
// [3 4 2 9 6 1 5]
// [3 2 4 9 6 1 5]
// [2 3 4 9 6 1 5]
// [2 3 4 6 9 1 5]
// [2 3 4 6 1 9 5]
// [2 3 4 1 6 9 5]
// [2 3 1 4 6 9 5]
// [2 1 3 4 6 9 5]
// [1 2 3 4 6 9 5]
// [1 2 3 4 6 5 9]
// [1 2 3 4 5 6 9]
$arrLength = count($arrayNo);
// $outerLoopCount = ;
// $innerLoopCount = 0;
for ($i=0; $i < $arrLength; $i++) { 
	// echo $arrayNo[$i];
	for ($j=0; $j < ($arrLength) -1; $j++) { 
		// echo $arrayNo[$j]."<br>";
		if ($arrayNo[$j] > $arrayNo[$j+1]) {
			$temp = $arrayNo[$j];
			$arrayNo[$j] = $arrayNo[$j+1];
			$arrayNo[$j+1] = $temp;
			// $innerLoopCount++;
		}
	}
	// die();
}
// echo $innerLoopCount;
print_r($arrayNo);

?>

