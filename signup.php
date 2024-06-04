<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>singup form</title>
    <link rel="stylesheet" href="style.css">
    <?php
    include("db.php");
    if(isset($_POST["submit"])){ 

        $firstname = $_POST["f_name"];
        $Lastname = $_POST["L_name"];
        $email = $_POST["Email"];
        $password = $_POST["pass"];
        $C_password = $_POST["C_pass"];

        $SQL = "INSERT INTO signup(`first_name`,`Last_name`,`Email`,`pasword`,`C_pasword`)Values('$firstname','$Lastname','$email','$password','$C_password')";

        $check = mysqli_query($connection,$SQL);

        // if($check){
        //     echo("registration submited");
        // }
        // else{
        //     echo("error");
        // }

    }


    
    ?>
</head>
<body>
    <form action="signup.php" class="form" method ="POST">
        <p class="title">Register </p>
        <p class="message">Signup now and get full access to our app. </p>
            <div class="flex">
            <label>
                <input required="" placeholder="" type="text" class="input" name="f_name">
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
            <input required="" placeholder="" type="password" class="input" name="pass">
            <span>Password</span>
        </label>
        <label>
            <input required="" placeholder="" type="password" class="input" name="C_pass">
            <span>Confirm password</span>
        </label>
       <input type="submit" name="submit" class="submit">
        <p class="signin">Already have an acount ? <a href="#">Signin</a> </p>
    </form>
</body>
</html>