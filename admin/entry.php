<!doctype html>
<html class="no-js" lang="en">
<?php include 'inc/head.php';?>

<body>
    <?php include 'inc/sidebar.php';?>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'inc/navbar.php';?>
        <!-- Basic Form Start -->
        <form id="serialize" method="POST" enctype="multipart/form-data">
            <div class="basic-form-area mg-tb-15">
                <div class="container">
                    <?php
                    $type = $_GET['type'];
                    if ($page == "/sis/admin/entry.php" && $type=='history') {
                        include 'page/history.php';
                    }
                    else if ($page == "/sis/admin/entry.php" && $type=='missionvision') {
                        include 'page/missionvision.php';
                    }
                    else if ($page == "/sis/admin/entry.php" && $type=='schoolpersonnel') {
                        include 'page/schoolpersonnel.php';
                    }
                    else if ($page == "/sis/admin/entry.php" && $type=='messageprinc') {
                        include 'page/messageprinc.php';
                    }
                    else if ($page == "/sis/admin/entry.php" && $type=='awardsaccomplishment') {
                        include 'page/awardsaccomplishment.php';
                    }
                    else if ($page == "/sis/admin/entry.php" && $type=='progsproj') {
                        include 'page/progproj.php';
                    }
                    else if ($page == "/sis/admin/entry.php" && $type=='newsandupdates') {
                        include 'page/newsandupdates.php';
                    }
                    else if ($page == "/sis/admin/entry.php" && $type=='events') {
                        include 'page/events.php';
                    }
                    else if ($page == "/sis/admin/entry.php" && $type=='announcements') {
                        include 'page/announcements.php';
                    }
                    else if ($page == "/sis/admin/entry.php" && $type=='memoranda') {
                        include 'page/announcements.php';
                    }
                    else if ($page == "/sis/admin/entry.php" && $type=='liquidationreports') {
                        include 'page/liquidationreports.php';
                    }
                     else if ($page == "/sis/admin/entry.php" && $type=='philgeps') {
                        include 'page/philgeps.php';
                    }
                    else
                    {
                        include '404.php';
                    }
                    ?>
                </div>
            </div>
        </form>
        <?php include 'inc/footer.php';?>


    </div>
    <?php include 'inc/footer-script.php';?>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
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
                 $(".result").html(result);
              }
            });
        }));
    });
</script>