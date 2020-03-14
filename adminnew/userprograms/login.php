<?php
session_start();
include '../../connection/connection.php';
if (!isset($_POST['username']) || !isset($password)){
	header("location:../index");
}
$username = $_POST['username'];
$password = md5($_POST['password']);


$select = $conn->prepare("SELECT *,COUNT(*) AS 'COUNT' FROM tblusers WHERE USERNAME = ? ");
$select->execute([$username]); 
$rowsFetch = $select->fetch();
// access

$secretKey = '6LfMltIUAAAAAGOHVF00YeIIMF8N7V0dgSERFaPJ';
$captcha = $_POST['g-recaptcha-response'];

if(!$captcha){
     echo '<div class="alert alert-danger">
			<p><strong>Sorry!</strong> Please check the the captcha form.</p>
		</div>';
          exit;
}
else{
if ($rowsFetch['COUNT'] == 0)
{
    echo '<div class="alert alert-danger">
			<p><strong>Sorry!</strong> Account Not Found.</p>
		</div>';

}
else
{
	if ($password != $rowsFetch['PASSWORD'])
	{
     	echo '<div class="alert alert-danger">
			<p><strong>Sorry!</strong> Incorrect Password.</p>
		</div>';
	}
	else
	{
		if ($rowsFetch['VALIDITY']== "Invalid")
		{
     		echo '<div class="alert alert-danger">
					<p><strong>Sorry!</strong> Your account is invalid.</p>
				</div>';
		}
		else
		{
			$_SESSION['username'] = $username;
			$_SESSION['roles'] = $rowsFetch['ROLES'];
			echo "<script>window.location.href = 'panel'</script>";
		}
	}
}
}
?>