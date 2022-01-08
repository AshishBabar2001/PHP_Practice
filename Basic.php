<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php

            $var1 = 5;
            $var2 = 3;
            echo"<br>";

            //Arithematic Operator.

            //Sum + 
            echo"Sum Of var1 + Var2 : ";
            echo $var1 + $var2;
            //Sub -
            echo"<br>";
            echo"Sub of var1 - var2 : ";
            echo $var1 - $var2;
            //Mul
            echo"<br>";
            echo"Sub of var1 * var2 : ";
            echo $var1 * $var2;
            //Div
            echo"<br>";
            echo"Sub of var1 / var2 : ";
            echo $var1 / $var2;

            //Comparison Operator
             $newvar = $var1;

             echo"<br>";
             echo $newvar;
             echo"<br>";
             echo var_dump($newvar);

             echo $var1 > $var2;

             //age program
             $age = 23;
             if($age > 18)
             {
                 echo"<br>";
                 echo"You Are Able To Go Party";
             }
             else if($age < 14)
             {
                 echo"You Are Need to Grow Up";
             }
             else
             {
                 echo"<br>";
                 echo"You Are Not Go For Party";
             }

             // Percentage Program
             
             $per = 34;
             if($per < 35)
             {
                 echo"<br>";
                 echo"You are Fail";
             }
             else if($per > 40)
             {
                echo"<br>";
                 echo"Grade B";
             }
             else if($per > 60)
             {
                echo"<br>";
                 echo"Grade A";
             }
             else
             {
                 echo"<br>";
                 echo"You Are Pass And Also Distinction";
             }

             //Increment or Decrement

             $variable1 = 5;
             $variable2 = 6;
             
             echo "<br>";
             echo $variable1++;
             echo "<br>";
             echo $variable1;
             echo "<br>";
             echo $variable2--;
             echo"<br>";
             echo $variable2;
             echo "<br>";
             echo --$variable1;
             echo "<br>";
             echo ++$variable2;
             echo "<br>";

        ?>
    </div>
</body>
</html>