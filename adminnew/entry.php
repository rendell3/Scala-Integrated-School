<!doctype html>
<html class="fixed" lang="en">
<!--<?php include '../connection/connection.php';?>-->
<?php include 'include/head.php';?>

<body>
	<section class="body">

		<!-- start: header -->
		<?php include 'include/header.php';?>
		<!-- end: header -->

		<div class="inner-wrapper">
			<!-- start: sidebar -->
			<?php include 'include/sidebar.php';?>
			<!-- end: sidebar -->
			<?php 
				$type = $_GET['type'];
				if ($type=="history") {
					$title = "History";
					include 'content/historyContent.php';
				}
				elseif ($type=="missionvision") {
					$title = "Mission Vision";
					include 'content/historyContent.php';
				}
				else{
					 include '404.php';
				}
			?>
		</div>
	</section>

	<!-- Vendor -->
	<?php include 'include/footerscript.php';?>
	
</body>
</html>