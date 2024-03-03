<?php 
//find the greatest Number
function findGrteNum($a, $b, $c, $d){
    if($a>$b && $a>$c && $a>$d){
        echo " $a is greater<br>";
    }
    if($a>$b && $a>$c && $a>$d){
        echo " $a is greater<br>";
    } 
    else if($b>$a && $b>$c && $b>$d){
        echo " $b is greater<br>";
    } 
     else if($c>$a && $c>$b && $c>$d){
        echo " $c is greater<br>";
    } 
    else {
        echo " $d is greater<br>";
    }
} 

findGrteNum(10, 30, 60,50);


// find positive ,negetive, neutral and even or odd


function chkNum ($x){
    if($x>0){
        if($x%2==0){
            echo "$x is a positive and even Number<br>";}
        else {
            echo "$x is a positive and odd Number<br>";

        }    
        
    }
  else if ($x<0){
    echo "$x is a negetive Number<br>";
  }  
  else if ($x==0){
    echo "$x is a neutral Number<br>";

  }
  else 
  {
  echo "Enter a numeric number<br>";
  }
  }  
    
  chkNum (34);

  //Numeric or Alphabet
function Chk($input){
    if(ctype_alpha($input)){
        echo " $input is an alphabet<br>";
    }
    else if (is_numeric($input)){
        echo " $input is a number<br>";
    }
}
Chk('T');


?>