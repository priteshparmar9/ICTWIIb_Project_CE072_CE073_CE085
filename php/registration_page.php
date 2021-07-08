<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Registration</title>  
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&display=swap" rel="stylesheet">
</head>
<style>
body {
    background-image: url("../images/r1.jpg");
    background-size: cover;
    margin:0;
    padding: 0;
    
}
h1 {
    text-align: center;
    font-family: 'Cinzel', sans-serif;
    margin-top: 5rem;
    font-weight: bolder;
}

form {
    margin-left: 570px;
    font-family: 'Cinzel', sans-serif;
    font-weight: bolder;
    margin-top: 40px;
    font-size: larger;
  
}

input {
    padding-bottom: 8px;
    margin-bottom: 10px;
    width: 20%;
    border: 2px solid rgb(0, 0, 0);
    border-radius: 7px;
}
    
.name input{
    width: 35%;
    
}
.uname input{
    width: 30%;
    
}
.pwd input{
    width: 30%;
    
}
.cpwd input{
    width: 20%;
    
}
.email input{
    width: 34.5%;
    
}
.mnumber input{
    width: 24%;
    
}
input[type=submit]{
    font-family: 'Cinzel', sans-serif;
    margin-top: 5px;
    padding-top: 8px;
    font-weight:1000;
    font-size: 15px;
    cursor: pointer;
    color: darkorange;
    background-color:black
    
}

img {
    align-items: center;
    margin-left: 665px;
}
</style>
<body>

    <img src="../icons/tgt.png" alt="Hotel logo" width="200px", height="200px">

    <h1>Sign Up</h1>

    <form action="signup.php" method="POST">
        <div class="name">
        <label for="name">Name:</label>
        <input type="text" name='name'><br>
        </div>

        <div class="uname">
        <label for="uname">Username:</label>
        <input type="text" name='username'><br>
        </div>

        <div class="pwd">
        <label for="pwd">Password:</label>
        <input type="password" name='password'><br>
        </div>

        <div class="cpwd">
        <label for="cpwd">Confirm Password:</label>
        <input type="password" name='confirm_password'><br>
        </div>

        <div class="email">
        <label for="email">Email:</label>
        <input type="email" name='email'><br>
        </div>

        <div class="mnumber">
        <label for="m_number">Mobile Number:</label>
        <input type="tel" name='number'><br>
        </div>

        <input type="submit" value="Register">
    </form>
</body>
</html>


<?php
    if(isset($_COOKIE["error"])){
        $error = $_COOKIE["error"];
        echo '<script>';
        echo "alert('".$error."')";
        echo '</script>';
    }
?>