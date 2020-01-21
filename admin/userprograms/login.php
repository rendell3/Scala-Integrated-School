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

if ($rowsFetch['COUNT'] == 0)
{
	 echo '<div class="alert alert-danger alert-st-one" role="alert">
                <p class="message-mg-rt"><strong>Sorry!</strong> Account Not Found.</p>
     		</div>';
}
else
{
	if ($password != $rowsFetch['PASSWORD'])
	{
		echo '<div class="alert alert-danger alert-st-one" role="alert">
                <p class="message-mg-rt"><strong>Sorry!</strong> Incorrect Password.</p>
     		</div>';
	}
	else
	{
		if ($rowsFetch['VALIDITY']== "Invalid")
		{
			echo '<div class="alert alert-danger alert-st-one" role="alert">
                <p class="message-mg-rt"><strong>Sorry!</strong> Your account is invalid.</p>
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
?>