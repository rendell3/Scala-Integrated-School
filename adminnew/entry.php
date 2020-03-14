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
				include 'content/missionvision.php';
			}
			elseif ($type=="schoolpersonnel") {
				$title = "School Personnel";
				include 'content/schoolPersonnelContent.php';
			}
			elseif ($type=="contact") {
				$title = "Contact Details";
				include 'content/historyContent.php';
			}
			elseif ($type=="messageprinc") {
				$title = "Message of the Principal";
				include 'content/historyContent.php';
			}
			elseif ($type=="gallery") {
				$title = "Gallery";
				include 'content/historyContent.php';
			}
			elseif ($type=="awardsaccomplishment") {
				$title = "Awards and Accomplishment";
				include 'content/historyContent.php';
			}
			elseif ($type=="programproj") {
				$title = "Program and Projects";
				include 'content/historyContent.php';
			}
			elseif ($type=="newsandupdtes") {
				$title = "News And Updates";
				include 'content/historyContent.php';
			}
			elseif ($type=="events") {
				$title = "Events";
				include 'content/historyContent.php';
			}
			elseif ($type=="memoranda") {
				$title = "Memoranda";
				include 'content/historyContent.php';
			}
			elseif ($type=="liquidationreport") {
				$title = "Liquidation Reports";
				include 'content/historyContent.php';
			}
			elseif ($type=="philgeps") {
				$title = "PhilGeps";
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
<script type="text/javascript">
	$(document).ready(function(){
		$(".update").hide();
		$("#btnSave").click(function(){
			var forms = $("#serialize").serialize();
            // alert(forms);
            $.ajax({
            	url: "userprograms/addHistory.php",
            	type :"POST",
            	data:forms,
            	success: function(result){
            		$(".result").html(result);
            	}});
        });

		$("#serialize").on('submit',(function(e) {
              // $(".progressloader").show();
              e.preventDefault();
              $.ajax({
                 url: "userprograms/addHistory.php", // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData:false,        // To send DOMDocument or non processed data file it is set to false
                success: function(data)   // A function to be called if request succeeds
                {
                 // alert(data);
                 $(".result").html(data);
             }
         });
          }));

    // Approve
    $("#datatable-default").on("click", ".btnedit", function (e) {
    	e.preventDefault();

    	var id = $(this).attr("key");
    	$(".update").show();
    	$(".save").hide();
      // alert(id);
      $( "#modalani" ).trigger( "click" );
      $.ajax({
      	url: "userprograms/ajaxGetRecord.php",
      	data: {id:id},
      	type: "POST",
      	success: function (result) {
      		var json = JSON.parse(result);
          // alert(json.operation);
          $("#title").val(json.title);
          $("#trxid").val(json.id);
          $("#summernote1").summernote("code",json.content);
         // alert(json.content);
     }
 	});
  });

    $("#btnUpdate").click(function(){
			var forms = $("#serialize").serialize();
            // alert(forms);
            $.ajax({
            	url: "userprograms/updatetrx.php",
            	type :"POST",
            	data:forms,
            	success: function(result){
            		$(".result").html(result);
            	}});
        });

});
</script>