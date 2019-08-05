<?php
session_start();
if (!isset($_SESSION['Client_ID'])){
header('location:index.php');
}

$Client_ID=$_SESSION['Client_ID'];
$member_query = mysql_query("select * from Clients where Client_ID = '$Client_ID'")or die(mysql_error());
$member_row = mysql_fetch_array($member_query);

$fullname = $member_row['Client_Name']." ".$member_row['Client_Name'];
?>
