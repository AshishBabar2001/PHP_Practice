<?php

// Length Function strlen

$str = "Hey I Am Ashish";
echo $str."<br>";
$len = strlen($str);
echo $len;
echo "<br> The Length Of String Is : ".$len;

// Str_Word_Count Function.

echo "<br>Count Of String Is : ".str_word_count($str);

// strrev To String Reverse.

echo "<br> The Reverse String Is : ".strrev($str);

// strpos To Search Words In String.

echo "<br> Search for an element in this string ".strpos($str," Am ").".Thank You.";

// str_replace To Replace String .

echo "<br> Replace String is ".str_ireplace("Hey","Hi",$str);

?>