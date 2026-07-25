<?php
if (!isset($_SESSION)) { 
    session_start();
}
include "auth.php";
include "header_voter.php";
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Status</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="content">
    <h4>Welcome <?php echo $_SESSION['SESS_NAME']; ?></h4>
    <?php
    $username = $_SESSION['SESS_NAME'];
    $query = 'SELECT status FROM voters WHERE username="' . $username . '" AND status = "VOTED"';
    if ($result = mysqli_query($con, $query)) {
        if (mysqli_num_rows($result) > 0) {
            $sql = mysqli_query($con, 'SELECT voted FROM voters WHERE username="' . $username . '"');
            $row = mysqli_fetch_assoc($sql);
            echo '<div class="message success">You have voted for: ' . $row['voted'] . '</div>';
        } else {
            echo '<div class="message error">You have not voted yet. Please submit your vote!</div>';
        }
    } else {
        echo '<div class="message error">Error fetching voting status.</div>';
    }
    ?>
</div>

</body>
</html>
