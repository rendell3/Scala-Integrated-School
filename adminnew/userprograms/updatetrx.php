<?php
session_start();
include '../../connection/connection.php';
if (!isset($_SESSION['username'])){
	// include 'logout.php';
	session_destroy();
	echo '<script>window.location.href="../adminnew/index.php"</script>';
	// exit;
}
$trxid = $_POST['trxid'];
$type = $_POST['type'];
$title = $_POST['title'];
$content = $_POST['content'];

date_default_timezone_set('Asia/Manila');
$datecreated = date("Y-m-d H:i:s");
// echo $type;
try {
	$insert  = $conn->prepare("UPDATE tblinformation SET TITLE = ?, CONTENT = ? WHERE ID = ?");
	$insert->execute([$title,$content,$trxid]);	
	echo '<div class="alert alert-success" role="alert">
			<p><strong>Successfully!</strong> Record has been saved.</p>
		</div>';
	echo '<meta http-equiv="refresh" content="1">';
} catch (Exception $e) {
echo '<div class="alert alert-success" role="alert">
        <p><strong>Sorry!</strong>'.$e.'.</p>
	</div>';
}

?>