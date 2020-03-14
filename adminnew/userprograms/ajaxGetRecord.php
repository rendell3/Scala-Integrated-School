<?php
session_start();
include '../../connection/connection.php';
if (!isset($_SESSION['username'])){
	// include 'logout.php';
	session_destroy();
	echo '<script>window.location.href="../adminnew/index.php"</script>';
	// exit;
}

$id = $_POST['id'];
$select= $conn->prepare("SELECT * FROM tblinformation WHERE ID = ?");
$select->execute([$id]);
$fetch = $select->fetch();

$record['id']= $fetch['ID'];
$record['title']= $fetch['TITLE'];
$record['content']= $fetch['CONTENT'];

echo json_encode($record);;
?>