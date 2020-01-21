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
    });
</script>