<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     

    <!-- array -->
    <?php
       
       $bag = array("laptop","Books","Notes","Pens");
       
       var_dump($bag);
       echo"<br>";

       echo $bag[0];
       echo"<br>";
       
    
    ?>


    <!-- if statement -->
    
    <?php
    
    $x= 30;
    
    if ($x < 40){
        echo"x is less than 40";
        echo "<br>";
    }

    ?>
     

     <!-- if-else statement -->
    <?php
      $a = 10;
      $b = 20;

      if ($a>$b){
        echo"a is greater than b";
      }
  
     else{
        echo"b is grater than a";
        echo"<br>";
     }
        

    ?>

    <!-- elseif statement -->
     <?php
    
       $j=35;
       

       if($j>=50){
        echo"j is greater than 50";
       }
       elseif($j>=30){
        echo "j is greater tha 30";
       }

       else {
         echo"j is smaller than given number";
        
       }
       echo"<br>";
     ?>

     <!-- nested if -->
   <?php
     $w=10;

     if ($w>=5){
        echo "w is greater than 5" ;
         
        if ($w>=20){
            echo "greater then 20";
        }
        else {
            echo" but not greater than 20";
        }
     }
        echo"<br>";
     ?>

     <!-- switch case -->

     <?php

     $q=10;

     switch($q){
        Case 1:
            echo "hi welcome";
            break;
        Case 10:
            echo "Anbuden";
            break;
          
        Case 12:
            echo "You are good budddy";
            break;    
        
        default:
            echo "doesn't match the number looking for a proper number";    
           
     }
      echo"<br>";
     ?>

     <!-- while -->

    <?php
     
     $i=20;

     while ($i < 50){
        if($i == 30)  break;
        echo $i . "<br >";
        $i++;
     }
         
     
     
    ?>

</body>
</html>