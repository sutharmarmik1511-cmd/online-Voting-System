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
    <title>Voting Results</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="content">
    <center><h3>Voting So Far</h3></center>
    <?php
    include "connection.php";
    $member = mysqli_query($con, 'SELECT * FROM languages' );
    if (mysqli_num_rows($member) == 0) {
        echo '<div class="message error">No results found</div>';
    } else {
        echo '<table>
            <tr>
                <th>ID</th>
                <th>PARTY</th>
                <th>VOTE</th>
            </tr>';
        while($mb = mysqli_fetch_object($member)) {	
            $id = $mb->p_id;
            $name = $mb->fullname;
            $vote = $mb->votecount;
            echo '<tr>';
            echo '<td>'.$id.'</td>';		
            echo '<td>'.$name.'</td>';
            echo '<td>'.$vote.'</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>
</div>

</body>
</html>

