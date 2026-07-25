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
    <title>Change Password</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="content">
    <center><h3>Change Password</h3></center>
    <div class="message error"><?php global $nam; echo $nam;?> <?php global $error; echo $error;?></div> 
    <center>
        <form action="change_pass_action.php" method="post" id="myform">
            <label for="cpassword">Current Password:</label>
            <input type="password" name="cpassword" id="cpassword" value="" required>
            <br>
            <label for="npassword">New Password:</label>
            <input type="password" name="npassword" id="npassword" value="" required>
            <br>
            <label for="cnpassword">Confirm New Password:</label>
            <input type="password" name="cnpassword" id="cnpassword" value="" required>
            <br>
            <input type="submit" name="cpass" value="UPDATE">
        </form>
    </center>
</div>
<script type="text/javascript">
var frmvalidator = new Validator("myform"); 
frmvalidator.addValidation("cpassword","req","Please enter Current Password"); 
frmvalidator.addValidation("cpassword","maxlen=50");
frmvalidator.addValidation("npassword","req","Please enter New Password"); 
frmvalidator.addValidation("npassword","maxlen=50");
frmvalidator.addValidation("cnpassword","req","Please enter Confirm New Password"); 
frmvalidator.addValidation("cnpassword","maxlen=50");
</script>

</body>
</html>
