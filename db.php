<!-- 

// $user_name = $_POST["user_name"]; 
// $password = $_POST["password"];
//  echo ("$user_name"."<br>");
//  echo ("$password ");
 
// echo strlen("$user_name") . "<br>";
// echo str_word_count($password) . "<br>";
// echo strrev($user_name) . "<br>";
// echo strpos($user_name , 'samad');


//  $fruits = ["Apple","Mango","Banana"];   

//     for($i = 0; $i <count($fruits) ; $i++){
//         echo($fruits[$i]);
//     }


// $Information = ["A.samad","Altaf",24];
// var_dump($Information);


// $a = 5;
// $a = (string) $a;
// var_dump($a);

// echo "<br>";

// $b = 'name';
// $b = (object) $b;
// var_dump($b);


// echo (max(0,25,250,500,1000,5000 ."<br>"));
// echo(min(0,5,10,20,50,30,60 ."<br>"));
// echo(abs(-6.5 ."<br>"));

//     class human{ 
//     function eat($food){
//         echo("you will eat the food ".$food);
//     }

//     function drink($colddrink){
//         echo("you will drink the coldrink" .$coldrink);
//     }
// };

//     $samad = new Human();
//     $samad -> eat('biryani');


    // class Animals{

    //     function grass($Animalname){
    //         echo("this $Animalname is eating grass.");
    //     }
        
    //     function meat ($Animalname){
    //         echo("This $Animalname is eating meat");
    //     }
    // }

    // $lion = new Animals();
    // $lion -> grass('horse');
    

    // $percentage = 39;
    // switch ($percentage) {
    //     case($percentage >100):
    //         echo "Invalid percentage";
    //         break;
    //     case ($percentage >=90):
    //         echo "your grade is A+";
    //         break;
    //     case($percentage >=80):
    //         echo "your grade is A";
    //         break;
    //     case($percentage >=70):
    //         echo "your grade is B";    
    //         break;
    //     case($percentage >=60):
    //         echo "your grade is c";
    //         break;
    //     case($percentage >=50):
    //         echo "your grade is D";
    //         break;
    //     case($percentage >=40):
    //         echo "your grade is E";
    //         break;
    //     default:
    //         echo "you are failed";

    // }

    //  $arrey = ["Apple","mango","banana"];
    //  foreach($arrey as $fruit){
    //     echo "$fruit <br>";
    //  }   

    // $x = 15;
    // $y = 15;
    // echo($x +$y ."<br>");


    //  $a = 12;
    // $b = 15;
    // echo($a / $b);

    // $username = $_POST["user-name"];
    // $pass = $_POST["password"];

    // if($username == "sam" && $pass == "123"){
    //     echo("login succesfully");
    // }
    // else{
    //     echo("login failed");
    // }

    // $db = mysqli_connect("localhost","root","","registrationform");

    // $sql = "Insert into loginform(`Email`,`password`)VALUES('','')";

    // if($sql == true){
    //     echo("value inserted");
    // }
    // else{
    //     echo("Error");
    // } -->











    <?php

   $localhost = "localhost";
   $username = "root";
   $password = "";
   $db = "registrationform";

   $connection = mysqli_connect("localhost","root","","registrationform");

 ?>

