<?php
session_start();
include '../../connection/connection.php';
if (!isset($_SESSION['username'])){
	// include 'logout.php';
	session_destroy();
	echo '<script>window.location.href="../adminnew/index.php"</script>';
	// exit;
}
$type = $_POST['type'];
date_default_timezone_set('Asia/Manila');
$datecreated = date("Y-m-d H:i:s");
// echo $type;
try {
	switch ($type) {
		//History Adding
		case 'history':
			$content = $_POST['content'];
			$title = $_POST['title'];
			$insert  = $conn->prepare("INSERT INTO tblinformation VALUES(null,?,?,?,?)");
			$insert->execute([$type,$title,$content,$datecreated]);	
			echo '<div class="alert alert-success" role="alert">
			                <p><strong>Successfully!</strong> Record has been saved.</p>
				</div>';
			break;
		//Mission Vision Adding
		case 'missionvision':
			$mission = $_POST['mission'];
			$vision = $_POST['vision'];
			$insert  = $conn->prepare("INSERT INTO tblinformation VALUES(null,?,?,?,?)");
			$insert->execute(['Mission','',$mission,$datecreated]);	
			$insert  = $conn->prepare("INSERT INTO tblinformation VALUES(null,?,?,?,?)");
			$insert->execute(['Vision','',$vision,$datecreated]);	

			echo '<div class="alert alert-success" role="alert">
			                <p><strong>Successfully!</strong> Record has been saved.</p>
				</div>';
			break;
		//School Personnel
		case 'schoolpersonnel':
			$type = $_POST['type'];
			$fname = $_POST['fname'];
			$mname = $_POST['mname'];
			$lname = $_POST['lname'];
			$position = $_POST['position'];
			$course = $_POST['course'];
			$biography = $_POST['biography'];
			$files =$_FILES["file"]["name"];
			$facebook = $_POST['facebook'];
			$twitter = $_POST['twitter'];
			$instagram = $_POST['instagram'];
			$linkedin = $_POST['linkedin'];

			$ext = pathinfo($files, PATHINFO_EXTENSION);
        	
        	if ($ext == "png" || $ext == "jpg") {
        	$folder="../uploadfiles/";
            $uploadfile=$_FILES["file"]["tmp_name"];

            $temp = explode(".", $_FILES["file"]["name"]);

            // $fname = $_FILES["file"]["name"];

            $filename = uniqid().".".end($temp);


            $insert  = $conn->prepare("INSERT INTO tblschoolpersonnel VALUES(null,?,?,?,?,?,?,?,?,?,?,?,?)");
			$insert->execute([$fname,$mname,$lname,$position,$course,$biography,$datecreated,$filename,$facebook,$instagram,$twitter,$linkedin]);	

			echo '<div class="alert alert-success" role="alert">
			                <p><strong>Successfully!</strong> Record has been saved.</p>
				</div>';
            move_uploaded_file($_FILES["file"]["tmp_name"], "$folder".$filename);

        	}

        	else{
            echo '<div class="alert alert-success" role="alert">
			                <p><strong>Sorry!</strong> '.$files.' is not Image files!</p>
				</div>';
       	 	}
			break;

			//Message of the Principal
		case 'messageprinc':
			$content = $_POST['content'];
			$insert  = $conn->prepare("INSERT INTO tblinformation VALUES(null,?,?,?,?)");
			$insert->execute([$type,'',$content,$datecreated]);	
			echo '<div class="alert alert-success" role="alert">
			                <p><strong>Successfully!</strong> Record has been saved.</p>
				</div>';
			break;
	
		case 'awardsaccomplishment':
			$content = $_POST['content'];
			$title = $_POST['title'];
			$insert  = $conn->prepare("INSERT INTO tblinformation VALUES(null,?,?,?,?)");
			$insert->execute([$type,$title,$content,$datecreated]);	
			echo '<div class="alert alert-success" role="alert">
			                <p><strong>Successfully!</strong> Record has been saved.</p>
				</div>';
			break;

		case 'progsproj':
			$content = $_POST['content'];
			$title = $_POST['title'];
			$insert  = $conn->prepare("INSERT INTO tblinformation VALUES(null,?,?,?,?)");
			$insert->execute([$type,$title,$content,$datecreated]);	
			echo '<div class="alert alert-success" role="alert">
			                <p><strong>Successfully!</strong> Record has been saved.</p>
				</div>';
			break;

		case 'newsandupdates':
			$content = $_POST['content'];
			$title = $_POST['title'];
			$insert  = $conn->prepare("INSERT INTO tblinformation VALUES(null,?,?,?,?)");
			$insert->execute([$type,$title,$content,$datecreated]);	
			echo '<div class="alert alert-success" role="alert">
			                <p><strong>Successfully!</strong> Record has been saved.</p>
				</div>';
			break;

		case 'events':
			$content = $_POST['content'];
			$title = $_POST['title'];
			$insert  = $conn->prepare("INSERT INTO tblinformation VALUES(null,?,?,?,?)");
			$insert->execute([$type,$title,$content,$datecreated]);	
			echo '<div class="alert alert-success" role="alert">
			                <p><strong>Successfully!</strong> Record has been saved.</p>
				</div>';
			break;

		case 'announcements':
			$content = $_POST['content'];
			$title = $_POST['title'];
			$insert  = $conn->prepare("INSERT INTO tblinformation VALUES(null,?,?,?,?)");
			$insert->execute([$type,$title,$content,$datecreated]);	
			echo '<div class="alert alert-success" role="alert">
			                <p><strong>Successfully!</strong> Record has been saved.</p>
				</div>';
			break;

		case 'memoranda':
			$content = $_POST['content'];
			$title = $_POST['title'];
			$insert  = $conn->prepare("INSERT INTO tblinformation VALUES(null,?,?,?,?)");
			$insert->execute([$type,$title,$content,$datecreated]);	
			echo '<div class="alert alert-success" role="alert">
			                <p><strong>Successfully!</strong> Record has been saved.</p>
				</div>';
			break;

		case 'liquidationreports':
			$content = $_POST['content'];
			$title = $_POST['title'];
			$insert  = $conn->prepare("INSERT INTO tblinformation VALUES(null,?,?,?,?)");
			$insert->execute([$type,$title,$content,$datecreated]);	
			echo '<div class="alert alert-success" role="alert">
			                <p><strong>Successfully!</strong> Record has been saved.</p>
				</div>';
			break;
			
		case 'philgeps':
			$content = $_POST['content'];
			$title = $_POST['title'];
			$insert  = $conn->prepare("INSERT INTO tblinformation VALUES(null,?,?,?,?)");
			$insert->execute([$type,$title,$content,$datecreated]);	
			echo '<div class="alert alert-success" role="alert">
			                <p><strong>Successfully!</strong> Record has been saved.</p>
				</div>';
			break;
	}

} catch (Exception $e) {
echo '<div class="alert alert-success" role="alert">
                <p><strong>Sorry!</strong>'.$e.'.</p>
	</div>';
}

?>