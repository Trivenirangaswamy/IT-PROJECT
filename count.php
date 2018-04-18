<?php
include 'connect.php';
$name=$_GET['vote'];

$query="update voting set can_vote=can_vote+1 where can_name=\"$name\"";
mysqli_query($db,$query)or die("error updating the vote");
echo "your vote is successful";
?>
