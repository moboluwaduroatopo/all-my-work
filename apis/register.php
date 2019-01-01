<?php
include 'dbgateway.php';
$query = mysqli_query($gateway,'SELECT * from user_tb');
$fetch = mysqli_fetch_all($query, MYSQLI_ASSOC);
$show = json_encode($fetch);
if ($show) {
	echo "[".$show."]";
}
?>