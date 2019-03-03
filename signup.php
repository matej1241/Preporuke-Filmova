<?php

session_start();
include "dbh.php";

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$first = $_POST['first'];
$last = $_POST['last'];

$sql = "INSERT INTO user (first, last, uid, pwd) 
		VALUES ('$first', '$last', '$uid', '$pwd')";

$result = $conn->query($sql);

header("Location: odabirZanra.php");