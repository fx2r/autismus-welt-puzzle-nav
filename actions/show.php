<?php
require_once 'db_connect.php';

$sql = "SELECT Content FROM webcontent WHERE ID = 1";

$result = mysqli_query($connect, $sql);
$data = $result->fetch_assoc();

if (isset($_GET['contentid'])) {
   $contentid = $_GET['contentid'];

$sql = "SELECT Content FROM webcontent WHERE ID = {$contentid}";

$result = mysqli_query($connect, $sql);
$data = $result->fetch_assoc();
}
