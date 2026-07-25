<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include "header.php"; ?>
<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['SESS_NAME']) != "") {
    header("Location: voter.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="content">
    <center>
        <legend><h3>Register</h3></legend>
    </center>
    <?php global $nam; echo $nam; ?> 
    <?php global $error; echo $error; ?>
    <center>
        <form action="reg_action.php" method="post" id="myform">
            <font size="4">
            <label for="firstname">Firstname:</label>
            <input type="text" id="firstname" name="firstname" value="" />
            <br><br>
            <label for="lastname">Lastname:</label>
            <input type="text" id="lastname" name="lastname" value="" />
            <br><br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="" />
            <br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="" />
            <br><br>
            <div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div>
            <br><br>
            <input type="submit" name="submit" value="Next" />
            </font>
        </form>
    </center>
</div>
<script type="text/javascript">
    var frmvalidator = new Validator("myform"); 
    frmvalidator.addValidation("firstname","req","Please enter your firstname"); 
    frmvalidator.addValidation("firstname","maxlen=50");
    frmvalidator.addValidation("lastname","req","Please enter your lastname"); 
    frmvalidator.addValidation("lastname","maxlen=50");
    frmvalidator.addValidation("username","req","Please enter your username"); 
    frmvalidator.addValidation("username","maxlen=50");
    frmvalidator.addValidation("password","req","Please enter your password"); 
    frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");
</script>

</body>
</html>
