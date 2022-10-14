<?php
# 1 Write a PHP function return any integer number plus 5
$number = 55;
$plusNumber = 5;
function addNum(int $number, int $plusNumber): int
{
    return $number + $plusNumber;
}
echo addNum(number: $number, plusNumber: $plusNumber) . "<br>";

# 2 Write a php function to check if the string is greater than fixed number or not
$string = "errasoft course";
function checkLength(string $string, int $number)
{
    $stringLength = strlen($string);
    if ($stringLength > $number) {
        echo "the string is greater than fixed number <br>";
    } else {
        echo "the fixed number is greater than string <br>";
    }
}
checkLength(string: $string, number: $number);

#3 Write a php function to check if the number is even or odd
function checkStatus(int $number)
{
    if ($number % 2 == 0) {
        echo "the $number is even <br>";
    } else {
        echo "the $number is odd <br>";
    }
}
checkStatus($number);

#4 Write a php function to check if the data is valid in array or not
#5 Write a php function to replace in a string with specific word and return true if any replace occurred, otherwise return false
$word = "ahmed";
function replaceWord(string $string, string $word)
{
    $explodeString = explode(" ", $string);
    $countWord = count($explodeString);
    for ($i = 0; $i < $countWord; $i++) {
        $replace = $explodeString[array_rand($explodeString)] = $word;
        if ($replace) {
            return "true <br>";
        } else {
            return "false <br>";
        }
    }
}
echo replaceWord(string: $string, word: $word);

/** 6
    Write a php function that take two parameters
    o First name and last name
    o Return full name ( concatenate first and last name
 */
$fName = "ahmed";
$lName = "hassan";
function getFullName(string $fName, string $lName)
{
    return $fName . " " . $lName . "<br>";
}
echo getFullName(fName: $fName, lName: $lName);
