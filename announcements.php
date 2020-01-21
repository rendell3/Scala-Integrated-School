<!DOCTYPE html>
<html lang="en-US" class="no-js">
<?php include 'connection/connection.php';?>
<?php include 'include/head.php';?>
<style type="text/css">
  .announcements {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-box-orient: horizontal;
   -webkit-line-clamp: 1; /* number of lines to show */
}
</style>
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
    <h1 style="text-align: center;font-family: Times New Roman, Times, serif;">-Announcements-</h1>
    <hr>
    <?php 
      $select = $conn->prepare("SELECT * FROM tblinformation WHERE SETTINGSNAME =? ORDER BY DATECREATED ASC");
      $select->execute(['announcements']);
      while ($rows = $select->fetch()) {
       ?>
      
        <div class="row">
            <div class="large-1 columns">
                <div class="hovereffect" style="margin-bottom: 20px;">
                  <img src="img/sample1.jpg" alt="LOGO" />
                </div>
            </div>
            <div class="large-11 columns">
               <a href="announcementsinfo?id=<?php echo $rows['ID'];?>"><h4><i class="fa fa-check"></i><?php echo $rows['TITLE'];?></h4> </a>
              <h5><i class="fa fa-calendar"></i> Date Posted: <?php echo $rows['DATECREATED'];?></h5>
              <!-- <div class="events"><?php echo $rows['CONTENT'];?></div> -->
            </div>
        </div>       
      <?php
        }
?>
 <?php include 'include/footer.php';?>
 <?php include 'include/footer-script.php';?>
 </body>
</html>
