<!DOCTYPE html>
<html lang="en-US" class="no-js">
<?php include 'connection/connection.php';?>
<?php include 'include/head.php';?>
<?php
$select = $conn->prepare("SELECT * FROM tblinformation WHERE SETTINGSNAME = ? ORDER BY DATECREATED DESC LIMIT 1");
$select->execute(['messageprinc']);
$rows =  $select->fetch();
?>
<style type="text/css">
  .messageprinc {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-box-orient: horizontal;
   -webkit-line-clamp: 2; /* number of lines to show */
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
  <div class="row">
    <div class="large-6 columns">

      <div class="messageprinc"> <?php echo $rows['CONTENT'];?></div> 

      <a href="messageprinc" class="button button1"><i class="fa fa-arrow-right"></i> READ MORE</a>
    </div>
    <div class="large-6 columns">
     <img src="img/desk-items.png" alt="LOGO">
   </div>
 </div><!-- end row -->
<!-- 
 <hr>
 <h1 style="text-align: center;font-family: Times New Roman, Times, serif;">-Events-</h1>
 <hr>
 <div class="row">
  <a href="#">
    <div class="large-2 columns">
      <div class="hovereffect" style="margin-bottom: 5px;">
        <img src="img/001.png" alt="LOGO">
      </div>
      <h5 style="font-weight: bold;font-size: 20px;color: gray;text-align: center;font-family: Times New Roman, Times, serif;">John Doe
      </h5>
    </div>
  </a>

  <a href="#">
    <div class="large-2 columns">
      <div class="hovereffect" style="margin-bottom: 5px;">
        <img src="img/004.png" alt="LOGO">
      </div>
      <h5 style="font-weight: bold;font-size: 20px;color: gray;text-align: center;font-family: Times New Roman, Times, serif;">John Doe
      </h5>
    </div>
  </a>

  <a href="#">
    <div class="large-2 columns">
      <div class="hovereffect" style="margin-bottom: 5px;">
        <img src="img/002.png" alt="LOGO">
      </div>
      <h5 style="font-weight: bold;font-size: 20px;color: gray;text-align: center;font-family: Times New Roman, Times, serif;">John Doe
      </h5>
    </div>
  </a>

  <a href="#">
    <div class="large-2 columns">
      <div class="hovereffect" style="margin-bottom: 5px;">
        <img src="img/001.png" alt="LOGO">
      </div>
      <h5 style="font-weight: bold;font-size: 20px;color: gray;text-align: center;font-family: Times New Roman, Times, serif;">John Doe
      </h5>
    </div>
  </a>

  <a href="#">
    <div class="large-2 columns">
      <div class="hovereffect" style="margin-bottom: 5px;">
        <img src="img/003.png" alt="LOGO">
      </div>
      <h5 style="font-weight: bold;font-size: 20px;color: gray;text-align: center;font-family: Times New Roman, Times, serif;">John Doe
      </h5>
    </div>
  </a>

  <a href="#">
    <div class="large-2 columns">
      <div class="hovereffect" style="margin-bottom: 5px;">
        <img src="img/004.png" alt="LOGO">
      </div>
      <h5 style="font-weight: bold;font-size: 20px;color: gray;text-align: center;font-family: Times New Roman, Times, serif;">John Doe
      </h5>
    </div>
  </a>

</div><!-- end row -->
</div> -->

<hr>
<h1 style="text-align: center;font-family: Times New Roman, Times, serif;">-We Have The Best Instructors-</h1>
<hr>
<div class="row">
      <?php
        
        $select = $conn->query("SELECT * FROM tblschoolpersonnel ORDER BY RAND() LIMIT 4");
        while ($rows = $select->fetch()) {
          ?>
      <a href="schoolpersonnelinfo?id=<?php echo $rows['ID'];?>">
        <div class="large-3 columns">

          <div class="hovereffect" style="margin-bottom: 20px;">
            <img src="admin/uploadfiles/<?php echo $rows['IMAGE'];?>" alt="<?php echo $rows['IMAGE'];?>">
          </div>

          <h5 style="font-weight: bold;font-size: 20px;text-align: center;font-family: Times New Roman, Times, serif;"><?php echo $rows['LASTNAME'].','.$rows['FIRSTNAME'].' '.$rows['MIDDLENAME'];?><br/>
            <small style="color:grey;border-top:1px solid black;"><?php echo $rows['POSITION'];?></small></h5>
            <div style="line-height: normal;font-size: 12px;text-align: justify;color: black;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;"><?php echo $rows['BIOGRAPHY'];?></div>      
            <div style="text-align: center;">
              <a href ="<?php echo $rows['FACEBOOK'];?>" class="button button5" style="padding: 5px;" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
              <a href ="<?php echo $rows['INSTAGRAM'];?>" class="button button5" style="padding: 5px;" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
              <a href ="<?php echo $rows['TWITTER'];?>" class="button button5" style="padding: 5px;" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
              <a href ="<?php echo $rows['LINKEDIN'];?>" class="button button5" style="padding: 5px;" target="_blank"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
            </div>
          </div>
        </a>
        <?php
        }
      ?>
  </div>
      </div>
<?php include 'include/footer.php';?>
<?php include 'include/footer-script.php';?>
</body>
</html>
