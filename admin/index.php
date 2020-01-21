
<!Doctype html>
<html class="no-js" lang="en">
<?php include 'inc/head.php';?>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    <br/>
                    <h3>LOGIN PANEL</h3>
                    <p>Please indicate your username and password!</p>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="#" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="Username" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                                <span class="help-block small">Your unique username</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Your strong password</span>
                            </div>
                            <button class="btn btn-success btn-block loginbtn" type="button">Login</button>

                           
                        </form>

                    </div>
                </div>
                 <div class="result"></div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p>Copyright &copy; 2020 <a href="#">S.I.S</a> All rights reserved.</p>
            </div>
        </div>
    </div>
<?php include 'inc/footer-script.php';?>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
    $(".loginbtn").click(function(){
       var loginForm = $("#loginForm").serialize();
        // alert(loginForm);
        $.ajax({
                url: "userprograms/login.php",
                type :"POST",
                data:loginForm,
                success: function(result){
                    $(".result").html(result);
        }});
    });
});
</script>