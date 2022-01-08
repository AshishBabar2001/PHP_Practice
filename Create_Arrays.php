<?php 

$languages = array("Amit","Rutik","Rahul","Rajesh");
echo $languages[0];
echo"<BR>";
echo $languages[1];
echo"<BR>";
echo $languages[2];
echo"<BR>";
echo $languages[3];
echo"<BR>";

//Methods / Functions In Php
// 1 Count Function
echo count($languages);

//Logical Loops
// While Loops

$a = 0;
while($a < count($languages))
{
    echo"<br> The Values of Language Is : ";
    echo $languages[$a];
    $a++;
}

// Do While

$b = 0;

do{
    echo"<br> The Value Of Language : ";
    echo $languages[$b];
    $b++;
}while($b < count($languages));

// $c = 200;
// do{
//     echo"<br> The Value is : ";
//     echo $c;
//     $c++;
// }while($c < 10));

// for Loop

for($d = 0 ; $d < 10 ; $d++)
{
    echo "<br> Values of : ";
    echo $d;
}

foreach($languages as $value){
    echo"<br> The Values Of Array : ";
    echo $value;
}

// Fuction

function print_Data()
{
    echo"<br> This Is Function ";
}

print_Data();
print_Data();
print_Data();
print_Data();
print_Data();

function ParaFun($Num)
{
    echo "<br> Number Is : ";
    echo $Num;
}

ParaFun(5);
ParaFun(45);
ParaFun(345);
ParaFun(3455);




?>