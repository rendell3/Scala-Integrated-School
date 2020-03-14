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

  <div class="row">
      <?php
        $id = $_GET['id'];
        $select = $conn->prepare("SELECT * FROM tblschoolpersonnel WHERE ID = ?");  
        $select->execute([$id]);
        $rows = $select->fetch();
          ?>
        <div class="large-3 columns">
          <div class="hovereffect" style="margin-bottom: 20px;">
            <img src="adminnew/uploadfiles/<?php echo $rows['IMAGE'];?>" alt="<?php echo $rows['IMAGE'];?>">
          </div>
        </div>

        <div class="large-9 columns">
           <h5 style="font-weight: bold;font-size: 20px;text-align: center;font-family: Times New Roman, Times, serif;"><?php echo $rows['LASTNAME'].', '.$rows['FIRSTNAME'].' '.$rows['MIDDLENAME'];?></h5>
           <h4 style="font-weight: bold;font-size: 20px;text-align: center;font-family: Times New Roman, Times, serif;"><?php echo $rows['POSITION'];?></h4>

          <p style="text-indent: 10px;text-align: justify;"><?php echo $rows['BIOGRAPHY'];?></p>
        </div>
     
  </div>
        <?php include 'include/footer.php';?>
        <?php include 'include/footer-script.php';?>
      </body>
      </html>
