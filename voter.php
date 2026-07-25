<?php
if(!isset($_SESSION)) { 
    session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote for Your Favorite Political Party</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="content">
    <h4>Welcome <?php echo $_SESSION['SESS_NAME']; ?></h4>
    <h3>Make a Vote</h3>
    <form action="submit_vote.php" name="vote" method="post" id="myform">
        <center>
            <font size='6'>What is your favorite political party?</font><br>
            <input type="radio" name="lan" value="BJP"> BJP<br>
            <input type="radio" name="lan" value="CONGRESS"> CONGRESS<br>
            <input type="radio" name="lan" value="AAP"> AAP<br>
        </center>
        <br>
        <div class="message">
            <?php global $msg; echo $msg; ?>
            <?php global $error; echo $error; ?>
        </div>
        <center>
            <input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px">
        </center>
    </form>
</div>

</body>
</html>
