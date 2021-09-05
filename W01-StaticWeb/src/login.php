<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <div id="main">
        <h1> Login to 13519025-pedia </h1>
        <form method="POST">
            Username : <input class="user" type="text" name="Username" placeholder="Username" required><br>
            Password : <input class="pass" type="password" placeholder="Password" name="Password" required><br>
            <input class="sub" type="submit" name="Submit">
        </form>
</body>
</html>

<?php 
    session_start();
    $json = file_get_contents("./user.json");
    $user_data = json_decode($json);

    if (isset($_POST["submit"])) {
        $user=$_POST["username"];
        $pass=$_POST["password"];

        // Edit file username and password here
        if ($user_data['user'] == $pass) {
            header("location:index.html");
            exit;
        }
        else
            echo "Username or Password Wrong";
    }
?>