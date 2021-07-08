
<?php
require_once "config.php";
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_SESSION['otp'] == $_POST['otp']){
        $verified = TRUE; 
        $username = $_SESSION['username'];
        // unset($_SESSION['otp']);
        // unset($_SESSION['username']);
        $sql = "UPDATE `account_data` SET `verified` = '$verified' WHERE `username` = '$username'";
        $result = mysqli_query($link, $sql);
        if($result){
            header("location: login.php");
        }
        else{
            echo "Sorry, your data has not been added.";
        }
    }
    else{
        echo "Sorry, OTP din't match. Please check again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP VERIFICATION</title>
    <style>
        * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        font-family: 'Quicksand', sans-serif;
        font-family: 'Raleway', sans-serif;
        /* font-family: 'Cinzel Decorative', cursive; */
        --webkit-font-smoothing: antialiased:
    }
        body{
            background-image: url(../images/2.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        }
        .logo img {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            justify-content: center;
        }

        table,th,tr,td {
            margin-left: auto;
            margin-right: auto;
            padding: 10px;
        }
        table{
            border:2px solid black;
        }
        input[type=submit] {
        padding: 10px 40px;
        margin: 28px 0px 0px 0px;
        border-radius: 10px;
        background-color: navajowhite;
    }
    table tr {
        color: gold;
        text-transform: uppercase;
    }

    input[type=submit]:hover {
        background-color: rgb(248, 206, 142);
        opacity: 0.8;
        transition-duration: 0.3s;
    }
    input[type=text] {
        padding: 5px;
        width: 150;
        border-radius: 7px;
        font-weight: 900;
        text-transform:uppercase;
        background-color: navajowhite;
        border: 3px solid black;
    }
    .form{
        height: max-content;
        width: max-content;
        background-color: rgb(29, 26, 26, 0.55);
        margin-right: auto;
        margin-left: auto;
        padding: 30px;
        border-radius: 12px;
        margin-top: 30px;
    }
    </style>
</head>
<body>
<form method="POST" action="otp.php" class="form">
    <img src = "../icons/tgt.png" alt="logo" class="logo">
    <table>
        <tr>
            <td>OTP: </td>
            <td><input type="text" name="otp"></td>
        </tr>
        <tr>
            <td><input type="submit" value = "Submit" name="submit"></td>
        </tr>
    </table>
</form>
</body>
</html>
