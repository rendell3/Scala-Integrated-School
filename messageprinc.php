<!DOCTYPE html>
<html lang="en-US" class="no-js">
<?php include 'connection/connection.php';?>
<?php include 'include/head.php';?>
<?php
$select = $conn->prepare("SELECT * FROM tblinformation WHERE SETTINGSNAME = ? ORDER BY DATECREATED DESC LIMIT 1");
$select->execute(['messageprinc']);
$rows =  $select->fetch();

$selectPrinc = $conn->prepare("SELECT * FROM tblschoolpersonnel WHERE POSITION = ? ORDER BY DATECREATED DESC LIMIT 1");
$selectPrinc->execute(['Principal']);
$rowsPrinc =  $selectPrinc->fetch();

?>
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
    <h1 style="text-align: center;font-family: Times New Roman, Times, serif;">-Message of The Principal-</h1>
    <hr>
    <div class="row">
        <div class="large-4 columns">
            <div class="hovereffect" style="margin-bottom: 20px;">
             <img src="admin/uploadfiles/<?php echo $rowsPrinc['IMAGE'];?>" alt="LOGO" />
            </div>
             <h4 style="text-align: center;"><?php echo $rowsPrinc['LASTNAME'].', '.$rowsPrinc['FIRSTNAME'].' '.$rowsPrinc['MIDDLENAME'];?></h4>
              <div style="text-align: center;">
              <a href ="<?php echo $rowsPrinc['FACEBOOK'];?>" class="button button5" style="padding: 5px;" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
              <a href ="<?php echo $rowsPrinc['INSTAGRAM'];?>" class="button button5" style="padding: 5px;" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
              <a href ="<?php echo $rowsPrinc['TWITTER'];?>" class="button button5" style="padding: 5px;" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
              <a href ="<?php echo $rowsPrinc['LINKEDIN'];?>" class="button button5" style="padding: 5px;" target="_blank"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="large-8 columns">
          <h5><i class="fa fa-calendar"></i> Date Posted: <?php echo $rows['DATECREATED'];?></h5>
          <div class="messageprinc"> <?php echo $rows['CONTENT'];?></div> 
        </div>
    </div>

 <?php include 'include/footer.php';?>
 <?php include 'include/footer-script.php';?>
 </body>
</html>
