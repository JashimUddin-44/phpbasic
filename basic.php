<?php
//arithmatic operator
//+,-,*,/,%

//$a=4;
//$b=3;
//echo $a+$b;


//assaignment operator
//+=,-=,*=,/=,%= 

/*$amount=10;

//$amount= $amount+5;
$amount+=5;
echo $amount;*/

/*$amount=10;

//$amount= $amount+5;
$amount-=5;
echo $amount;*/

//$c=5;
//$d=8;
//$a=$c+$d;
//echo $a;


//comparison operator
//==,<,>,<=,>=,!=,===

// $a=3;
// $b=4;
// if($a>$b){
//     echo "true";
// }
// else{
//     echo "false";
// }




// Conditonal operator
// if,else if,else

// $a=5;
// $b=4;
// $c=3;
// if($a<$b){
//     echo "a";
// }
// else if($b>$c){
//     echo "b";
// }
// else{
//     echo "c";
// }

// Logical operator
// &,||,!

// $a=20;
// $b=12;

// if($a==20 & $b==12){
//     echo "yes";
// }else{
//     echo "no";
// }


// if($a==2 || $b==12){
//     echo "yes";
// }else{
//     echo "no";
// }

// if($a=20 != $b=12){
//     echo "yes";
// }else{
//     echo "no";
// }


//for Loop

//for,while,do while

// for($a=1;$a<=10;$a++){
//     echo $a."<br>";
// }

//while loop

// $a=1;
// while($a<=10){
//     echo $a."<br>";
//     $a++;
// }

//do while loop

// $a=2;
// do{
//     echo $a."<br>";
//     $a++;
// }while($a<=20);


//function

// function work(){
//     echo "My name is jashim"."<br>";
// }work();

// function old(){
//     work();
// }old();

//Switch


// $a=30;

// switch($a){
//     case 80:
//     echo "A+";
//     break;

//     case 70:
//     echo "A";
//     break;

//     case 60:
//     echo "A-";
//     break;

//     case 50:
//     echo "B";
//     break;

//     case 30:
//     echo "Default";
// }

//Array

// $array=[10,20,30,40,50,60,70];
// echo $array[4];


// $name=['jashim','shanto','rifat','habib','ridoy'];

// foreach($name as $value ){
// 	echo $value."<br>";
// }

// session_start();
// echo $_SESSION['name'];


//Use of for loop for 10-1 olta print.

/*for($a=10;$a>=1;$a--){
    echo $a."<br>";
}&/




//Use of while loop for 1-100 even or odd.

/*$a=1;
while($a<=100){
    if($a%2==0){
        echo $a."<br>";
    }
    $a++;
}*/



//Kind of function
//*Building function,
//*User define functio.



//User defind function

/*function name($name,$age){
    echo "$name is my friend. His age = $age ";
}
 name('karim','18');*/



 /*Kinds of array
 * Index array,
 * Associative array,
 * Multidementional array.*/
 


//Index array

/*$array=[4,6,60,7,79,100];
//echo $array['0'];

//$length= count($array);

for($a=0; $a<6; $a++){
    echo $array[$a]."<br>";
}*/




//Associative array

/*$laptop=array("HP"=>"240GB","Asser"=>"228GB","Dell"=>"500GB");

foreach($laptop as $machine=>$SSD){
    echo "Laptop name is  $machine "." SSD = $SSD"."<br>";
}*/




//multidimensional array

/*$poet=array(
   array("Palli kobi Jashim Uddin",22,"Rabeya Cwdry",88),
   array("Kaji najrul",75,"Rabinranath",88),
   array("Ahachan Habib",65,"Madusudon datto",90)
);
//echo $poet[0][0];
//echo $poet[2][3];

for($row=0;$row<3;$row++){
    echo "<p> Number of row $row</p>";
    echo "<ul>";
     for($col=0;$col<4;$col++){
         echo "<li>".$poet[$row][$col]."</li>";
     }
    echo "</ul>";
}*/




/*class father extends son{
    public function name(){
        echo "Hashem";
    }
}
$obj= new father;
$obj->nam();

class son{
    public function nam(){
        echo "Jashim";
    }
}*/




/*class Priya{
    public static function jannat(){
        echo "Hi priya kmn acho ?";
    }
    
}
class Cr{
    
}
priya::jannat();*/

?>