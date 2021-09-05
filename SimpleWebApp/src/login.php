<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link href="login.css" rel="stylesheet" type="text/css" >
</head>
<body>
    <div class="loginform">
        <h1 class="loginto"> Login to 13519025-pedia </h1>
        <form method="POST" action="">
            Username : <input class="user" type="text" name="Username" placeholder="Username" required><br>
            Password : <input class="pass" type="password" placeholder="Password" name="Password" required><br>
            <input class="submit" type="submit" name="Submit">
        </form>
</body>
</html>

<?php 
    session_start();
    if (isset($_POST["Submit"])) {
        $logins = array('username1' => 'password1','username2' => 'password2','username3' => 'password3');

        $user=$_POST["Username"];
        $pass=$_POST["Password"];

        if (isset($logins[$user]) && $logins[$user] == $pass){
            $_SESSION['UserData']['user']=$logins[$user];
            header("location:index.php");
            exit;
        }
        else
            echo "Username or Password Wrong :C";
    }
?>