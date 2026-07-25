<?php
session_start();
$captcha = "" ;
include "connection.php"; 


echo '<link rel="stylesheet" href="styles.css">';

if(isset($_POST['submit'])) {
    if (isset($_POST['g-recaptcha-response'])){
        $captcha = $_POST['g-recaptcha-response'];
    }
    if (!$captcha) {
        $error = "Please check captcha too";
        include ('register.php');
        exit();
    }
    $secretKey = "6LeD3hEUAAAAADNeeaGRfKmABjn1gnsXxrpdTa2J";
    $ip = $_SERVER['REMOTE_ADDR'];
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
    $responseKeys = json_decode($response, true);
    if (intval($responseKeys["success"]) !== 1) {
        $error = "You are spammer!";
        include('register.php');
        exit();
    }

    $name = mysqli_real_escape_string($con, $_POST['firstname']);
    $name2 = mysqli_real_escape_string($con, $_POST['lastname']);
    $name3 = mysqli_real_escape_string($con, $_POST['username']);
    $pass = mysqli_real_escape_string($con, $_POST['password']);

    $sq = mysqli_query($con, 'SELECT username FROM loginusers WHERE username="'.$_POST['username'].'"');
    $exist = mysqli_num_rows($sq);
    
    if ($exist == 1) {
        $nam = "<center><h4 class='error'>The username already exists, pick another.</h4></center>";
        unset($username);
        include('register.php');
        exit();
    }

    $sql = mysqli_query($con, 'INSERT INTO voters(firstname,lastname,username)
        VALUES("'.$_POST['firstname'].'","'.$_POST['lastname'].'","'.$_POST['username'].'")');
    if (!$sql) { 
        die (mysqli_error($con));
    }
    $sql2 = mysqli_query($con, 'INSERT INTO loginusers(username,password)
        VALUES("'.$_POST['username'].'","'.md5($_POST['password']).'")'); 
    if (!$sql2) { 
        die (mysqli_error($con));
    } else {
        echo "<center><h4 class='success'>Successfully Registered! <a href='login.php'><button>Click here to Login</button></a></h4></center>";
    }
} else {
    $error = "<center><h4 class='error'>Registration Failed Due To Error!</h4></center>";
    include "register.php";
}
?>
