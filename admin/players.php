<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
if(!$_SESSION['logged']){
    header("Location: index.php");
    exit;
}

include_once '../db.php';


if (isset($_GET['sortByAge'])) {
  $players = mysqli_query($conn, "SELECT * FROM players ORDER BY date_of_birth ASC");
} else {
  $players = mysqli_query($conn, "SELECT * FROM players");
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
            <a class="active" href="players.php">
              <i class="fa fa-book"></i>
              <span>Играчи</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="news.php">
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
        <h3><i class="fa fa-angle-right"></i> Играчи</h3>
        <div class="container">
        <table class="table">
    <thead>
      <tr>
        <th>Име</th>
        <th>Презиме</th>
        <th>Мобилен број</th>
        <th>Е-маил</th>
        <th><a href="players.php?sortByAge">Дата на раѓање</a></th>
        <th>Документ за идентификација</th>
        <th>Број на документ за идентификација</th>
        <th>Име и презиме на родител</th>
        <th>Е-маил на родител</th>
        <th>Телефон на родител</th>
        <th>Адреса на родител</th>
        <th>Земја на родител</th>
        <th>Позиција</th>
        <th>Клуб / Школа</th>
        <th>Големина на дрес</th>
        <th>Специфична диета</th>
        <th>Висина</th>
        <th>Килограми</th>
      </tr>
    </thead>
    <tbody>
<?php while($player = mysqli_fetch_assoc($players)) { ?>
      <tr>
        <td><?=$player['name']?></td>
        <td><?=$player['surname']?></td>
        <td><?=$player['phone']?></td>
        <td><?=$player['mail']?></td>
        <td><?=$player['date_of_birth']?></td>
        <td><?=$player['document']?></td>
        <td><?=$player['document_number']?></td>
        <td><?=$player['guardian_name_surname']?></td>
        <td><?=$player['guardian_mail']?></td>
        <td><?=$player['guardian_address']?></td>
        <td><?=$player['guardian_phone']?></td>
        <td><?=$player['guardian_country']?></td>
        <td><?=$player['position']?></td>
        <td><?=$player['club']?></td>
        <td><?=$player['jersey_size']?></td>
        <td><?=$player['diet']?></td>
        <td><?=$player['height']?></td>
        <td><?=$player['weight']?></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
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
      <img src="img/logo_ism.png" alt="logo">
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
