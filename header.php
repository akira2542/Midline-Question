<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Midline Question</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Bootstrap & Jquery Links-->
      <script
     src="https://code.jquery.com/jquery-3.2.1.min.js"
     integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
     crossorigin="anonymous"></script>
     </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" type="text/css" href="animate.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

</head>



<body>
  <!--Navigation-->
 <div class="navbar-clone"></div>
 <nav class="navbar navbar-dark">
  <a class="navbar-brand header-logo" href="index.php"><img src="images/MQheader.png"></a>
  <div class="test-container">
    <div class="item"><a href="https://www.facebook.com/ruangrit.keawkrom"><img class="animated flash" src="images/facebook.png"></a></div>
    <div class="item"><a href="https://twitter.com/k_ruangrit"><img class="animated flash" src="images/twitter.png"></a></div>
    <div class="item"><a href="#"><img class="animated flash" src="images/email.png"></a></div>
    <div class="item"><a href="https://akiraakamura.deviantart.com/"><img class="animated flash" src="images/deviant.png"></a></div>
  </div>
</nav>
  <!--Login&Signup point of no return-->
<?php
            if (isset($_SESSION['u_id'])){
                             if ($_SESSION['u_uid'] == 'root') {
                    $admin = ",admin";
                 }else{
                   $admin = ",member";
                 }
                           echo '<div class="login-wrapper">
  <div class="login-signup"><div class="greeting">Logged in: <span style="color:#ccc;">'.$_SESSION['u_uid'].$admin.'</span></div>
    <form action="includes/logout.inc.php" method="POST">
    <button type="submit" name="submit" class="cancelbtn-1">Log Out</button>
</div>';   
               


            }else {
              echo '<div class="login-wrapper">
  <div class="login-signup">
    <a href="login.php">Log In</a>
      <a href="signup.php">Sign up</a>
  </div>  
</div>';
            }
           ?>
