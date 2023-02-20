<?php
echo "<h1>1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)</h1>";

$array = array("Mango", "Jackfruit", "Apple", "Banana");

function shortArrayByLenght($a, $b){
   return strlen($a) < strlen($b);
};

usort($array, 'shortArrayByLenght');
print_r($array);

echo "<br><br><br>###########################END################################<br><br><br>";

echo "<h1>2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.</h1>";

$string = 'Mom';

function reverseStringConcate($string){
   return $string." ".strrev($string);
};

echo reverseStringConcate($string);

echo "<br><br><br>###########################END################################<br><br><br>";

echo "<h1>3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.</h1>";

$oldArray = array("Hi", "My", "name", "is", "Forhad", "Hasan");

function removeFnLArrayElements($givenArray){
   array_shift($givenArray);
    array_pop($givenArray);
   $FnLElementsRemove  = $givenArray;

   return $FnLElementsRemove;
};

print_r (removeFnLArrayElements($oldArray));

echo "<br><br><br>###########################END################################<br><br><br>";

echo "<h1>4.Write a PHP function to check if a string contains only letters and whitespace.</h1>";

$myString1 = "Letters and Whitespace";
$myString2 = "Letters & Whitespace";
$myString3 = "Letters 1245";

function checkString($givenString){


    if (preg_match('/^[a-zA-Z\s]+$/', $givenString)) {
        echo "The given string contains only letters and whitespace.<br>";
    } else {
        echo "The given string does not contain only letters and whitespace.<br>";
    }

    return;
};

checkString($myString1);
checkString($myString2);
checkString($myString3);


echo "<br><br><br>###########################END################################<br><br><br>";

echo "<h1>5.Write a PHP function to find the second largest number in an array of numbers.</h1>";

$numberArray = array(12,85,96,13,70,88);

function secondLargestNumberArray($givenarray){

    rsort($givenarray);

    return $givenarray[1];

};

echo secondLargestNumberArray($numberArray);


echo "<br><br><br>###########################END################################<br><br><br>";