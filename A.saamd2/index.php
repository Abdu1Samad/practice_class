<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup form</title>
    <link rel="stylesheet" href="style.css">
    <?php
    
    include("db.php");
    if(isset($_POST["btn"])){
        $first_name = $_POST["F_name"];
        $Last_name = $_POST["L_name"];
        $Email = $_POST["Email"];
        $password = $_POST["Pass"];
        $C_password = $_POST["C_pass"];

        if($password == $C_password){
            $SQL = "INSERT INTO signup(`First_name`,`Last_name`,`Email`,`Pasword`,`C_pasword`,`R_Date`)VALUES('$first_name','$Last_name','$Email','$password','$C_password',current_timestamp())";
            $query = mysqli_query($connection,$SQL);            

            if($query == true){
                $x = "Registration confirmed";  
            }
            else{
                $x = "Registration failed";
            }
        }
        
        else{
            $x = "Your password and confirm password are doesn't matched";
        }
    }
    
    
    ?>
</head>
<body>
    <?php
    
    if(isset($x)){
        print $GLOBALS['x'];
    }
    
    
    ?>
    <form class="form" method="POST">
        <p class="title">Register </p>
        <p class="message">Signup now and get full access to our app. </p>
            <div class="flex">
            <label>
                <input required="" placeholder="" type="text" class="input" name="F_name">
                <span>Firstname</span>
            </label>
    
            <label>
                <input required="" placeholder="" type="text" class="input" name="L_name">
                <span>Lastname</span>
            </label>
        </div>  
                
        <label>
            <input required="" placeholder="" type="email" class="input" name="Email">
            <span>Email</span>
        </label> 
            
        <label>
            <input required="" placeholder="" type="password" class="input" name="Pass">
            <span>Password</span>
        </label>
        <label>
            <input required="" placeholder="" type="password" class="input" name="C_pass">
            <span>Confirm password</span>
        </label>
        <input type="submit" class="submit" name="btn">
        <p class="signin">Already have an acount ? <a href="#">Signin</a> </p>
    </form>
</body>
</html>