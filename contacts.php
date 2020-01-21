<!DOCTYPE html>
<html lang="en-US" class="no-js">
<?php include 'connection/connection.php';?>
<?php include 'include/head.php';?>
<body class="page-template-default page page-id-222 group-blog">
  <?php include 'include/navbar.php';?>
  <!-- original content goes in this container -->
  <div class="off-canvas-content" data-off-canvas-content>
    <!-- masthead -->
    <header class="container-masthead" style="background-color: #04508c;">
      <div class="row">
        <div class="large-12 columns">
          <h1 class="logo"><a href="#" title="Department of Education" rel="home"><img src="img/masterhead.png"/></a></h1>
        </div>
      </div>
    </header>
    <!-- masthead -->
  </div>

  <div id="main-content" class="container-main" role="document">

    <hr>
    <h1 style="text-align: center;font-family: Times New Roman, Times, serif;">-Contact Us-</h1>
    <hr>
  <form method="POST">
 <div class="row">
   <div class="large-6 columns">
      <div class="form-group">
        <label>Email :</label>  
        <input type="email" name="" class="form-control"> 
      </div>

      <div class="form-group">
        <label>Message :</label>  
        <textarea class="form-control" rows="5" style="resize: none;"></textarea>
      </div>

    <button class="button button1" name="btnSubmit">Submit</button>
   </div>

   <div class="large-6 columns">
      <p><iframe src="https://www.google.com/maps/d/embed?mid=1RRmAIXjioFSpe2srp_pQa2adQUc" width="500" height="300"></iframe></p>
   </div>
 </div>
 </form>
 <?php include 'include/footer.php';?>
 <?php include 'include/footer-script.php';?>
 </body>
</html>