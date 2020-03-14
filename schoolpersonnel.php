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
    <h1 style="text-align: center;font-family: Times New Roman, Times, serif;">-SCHOOL PERSONNEL-</h1>
    <hr>
    <div class="row">
      <div class="large-12 columns" style="text-align: center;">
        <?php 
        foreach (range('A', 'Z') as $char) {
          ?>
          <a href="schoolpersonnel?sp=<?php echo $char;?>" style="font-size: 20px;"><?php echo $char;?>  |</a>
          <?php
        }
        ?>
      </div>
    </div>
    <hr>

    <div class="row">
      <?php
        if (isset($_GET['sp'])) {
          $sp = $_GET['sp'];
          $select = $conn->query("SELECT * FROM tblschoolpersonnel WHERE FIRSTNAME LIKE '$sp%'");  
        }
        else{
          $select = $conn->query("SELECT * FROM tblschoolpersonnel ORDER BY RAND() LIMIT 4");
        }
        while ($rows = $select->fetch()) {
          ?>
      <a href="schoolpersonnelinfo?id=<?php echo $rows['ID'];?>">
        <div class="large-3 columns">

          <div class="hovereffect" style="margin-bottom: 20px;">
            <img src="adminnew/uploadfiles/<?php echo $rows['IMAGE'];?>" alt="<?php echo $rows['IMAGE'];?>">
          </div>

          <h5 style="font-weight: bold;font-size: 20px;color: gray;text-align: center;font-family: Times New Roman, Times, serif;"><?php echo $rows['LASTNAME'].','.$rows['FIRSTNAME'].' '.$rows['MIDDLENAME'];?><br/>
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
        <?php include 'include/footer.php';?>
        <?php include 'include/footer-script.php';?>
      </body>
      </html>
