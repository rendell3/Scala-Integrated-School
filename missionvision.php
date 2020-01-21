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
<h1 style="text-align: center;font-family: Times New Roman, Times, serif;">-MISSION-</h1>
<hr>
<div class="row">
  <div class="large-12">
    <?php
      $select = $conn->prepare("SELECT * FROM tblinformation WHERE SETTINGSNAME = ? ORDER BY DATECREATED DESC LIMIT 1");
      $select->execute(['Mission']);
      $rows = $select->fetch();
      echo $rows['CONTENT'];
      ?>
</div>

<hr>
<h1 style="text-align: center;font-family: Times New Roman, Times, serif;">-VISION-</h1>
<hr>
<div class="row">
  <div class="large-12">
    <?php
      $select = $conn->prepare("SELECT * FROM tblinformation WHERE SETTINGSNAME = ? ORDER BY DATECREATED DESC LIMIT 1");
      $select->execute(['Vision']);
      $rows = $select->fetch();
      echo $rows['CONTENT'];
      ?>
</div>
<?php include 'include/footer.php';?>
<?php include 'include/footer-script.php';?>
</body>
</html>
