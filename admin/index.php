<?php
if(isset($_POST['submit'])){
    include_once '../db.php';

    
    

    $usr = mysqli_real_escape_string($conn, $_POST['username']);
    $pas = hash('sha256', mysqli_real_escape_string($conn, $_POST['password']));
    $admin = mysqli_query($conn, "SELECT * FROM admins WHERE password = '$pas' AND username = '$usr' LIMIT 1");
    if(mysqli_num_rows($admin) == 1){
        session_start();
        $_SESSION['logged'] = TRUE;
        header("Location: players.php");
        exit;
    } else{
        $Message = "Погрешно корисничко име или лозинка!";
        header("Location:index.php?Message={$Message}");
        exit;
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
  <div class="row mt" id="login_form">
    <div id="logo_login">
      <img src="img/logo_ism.png" alt="logo">
    </div>
    <form method="post">
      <?php
        if( !empty( $_REQUEST['Message'] ) ) {
            echo sprintf( '<h4>%s</h4>', $_REQUEST['Message'] );
        }
      ?>
      <div>
        <input id="input_name" class="form_input input_name input_ph" type="text" name="username" placeholder="Корисничко име" required="required">
      </div>
      <div>
        <input id="input_name" class="form_input input_name input_ph" type="password" name="password" placeholder="Лозинка" required="required">
      </div>
      <div style="margin-top: 50px;">
        <input id="review_submit" name="submit" class="red_button message_submit_btn trans_300" value="Испрати" type="submit">
      </div>
    </form>
  </div>
</body>
</html>
