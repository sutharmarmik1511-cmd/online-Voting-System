<?php include "header.php"; ?>
<?php session_start(); ?>
<?php if (isset($_SESSION['SESS_NAME'])!="") {
    header("Location: voter.php");
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php global $msg; echo $msg; ?>
<div class="content">
    <p><center><legend><font color='#008000' size='18'>This system allows all registered users to vote for their favorite POLITICAL PARTY.</font></legend></center></p>
    <p><center>In order to make a vote you have to register first and then login.</center></p>
</div>
<?php include "footer.php"; ?>
</body>
</html>
