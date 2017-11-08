<?php 
 include_once 'header.php';
?>
 <?php
            if (isset($_SESSION['u_id'])){
                           echo '<div class="container">
    <form action="includes/logout.inc.php" method="POST">
    <div class="con-login">
    <h1 class="display-4 logout-stuff">You are logged in!</h1>
    <button type="submit" name="submit" class="cancelbtn logout-stuff">Log Out</button></form>';
            }else {
              echo '<div class="container">
    <form action="includes/login.inc.php" method="POST">
    <div class="con-login">
    <h1 class="display-4">User Login</h1>
    <label><b>Username</b></label>
    <input type="text" name="uid" placeholder="Enter Username/E-mail"  required>

    <label><b>Password</b></label>
    <input type="password" name="pwd" placeholder="Enter Password" required>

    <button type="submit" name="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="con-login">
    <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
    
    <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    </form>
    </div>';
            }
           ?>

</form>
</div>
</body>
</html>

<!--
  