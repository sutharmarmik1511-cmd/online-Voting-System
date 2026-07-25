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
    <title>Login for Voting</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="content">
    <center>
        <legend><h3>Login for Voting</h3></legend>
        <br>
    </center>
    <?php global $nam; echo $nam; ?>
    <?php global $error; echo $error; ?>
    <br>
    <center>
        <form action="login_action.php" method="post" id="myform">
            <font size="4">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="">
                <br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="">
                <br><br>
                <input type="submit" name="login" value="Login">
            </font>
        </form>
    </center>
</div>
<script type="text/javascript">
    var frmvalidator = new Validator("myform");
    frmvalidator.addValidation("username", "req", "Please enter your username");
    frmvalidator.addValidation("username", "maxlen=50");
    frmvalidator.addValidation("password", "req", "Please enter your password");
</script>
<?php include "footer.php"; ?>
</body>
</html>
