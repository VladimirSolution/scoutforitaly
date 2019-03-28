<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
if(!$_SESSION['logged']){
    header("Location: index.php");
    exit;
}

include_once '../db.php';

if (isset($_POST['submit'])) {
  $file_name = time() . basename($_FILES["image"]["name"]);
  $target_file = "../uploads/" . $file_name;
  move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
  $heading = mysqli_real_escape_string($conn, $_POST['heading']);
  $content = mysqli_real_escape_string($conn, $_POST['content']);
  $sql = "INSERT INTO news (heading, content, image)
        VALUES ('{$heading}', '{$content}', '{$file_name}')";
  if (mysqli_query($conn, $sql)) {
    echo "<h4 style='margin-left: 10px;'>Новоста е успешно внесена.</h4>";
  }
  else {
    echo "<h4 style='margin-left: 10px; color:red;'>Грешка во внесувањето!</h4>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN</title>

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
</head>

<body>
  <section id="container">
        <header class="header black-bg">
          <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
          </div>
          <!--logo start-->
          <a href="#" class="logo"><b>SCOUTFORITALY</span></b></a>
          <!--logo end-->
          <div class="nav notify-row" id="top_menu">

          </div>
          <div class="top-menu">
            <ul class="nav pull-right top-menu">
              <li><a class="logout" href="logout.php" style="border-radius: 0">Одјава</a></li>
            </ul>
          </div>
        </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Зоран Велјановски</h5>
          <li class="sub-menu">
            <a href="players.php">
              <i class="fa fa-book"></i>
              <span>Играчи</span>
            </a>
          </li>
          <li class="sub-menu">
            <a class="active" href="news.php">
              <i class="fa fa-book"></i>
              <span>Новости</span>
            </a>
          </li>
      </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Новости</h3>
        <div class="row mt">
          <form method="post" enctype="multipart/form-data">
            <div>
              <input id="input_name" class="form_input input_name input_ph" type="text" name="heading" placeholder="Наслов" required="required">
              <textarea style="height:180px; resize:none;" id="input_name" class="form_input input_name input_ph" name="content" placeholder="Содржина" required="required"></textarea>
              <div class="upload-btn-wrapper">
                <button class="red_button message_submit_btn trans_300 upload">прикачи слика</button>
                <input type="file" name="image" required="required" />
              </div>
            </div>
            <div style="margin-top: 50px;">
              <input id="review_submit" name="submit" class="red_button message_submit_btn trans_300" value="Испрати" type="submit">
            </div>
          </form>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights . All Rights Reserved
        </p>
      </div>
    </footer>
    <div id="logo">
      <img src="img/logo.png" alt="logo">
    </div>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>
