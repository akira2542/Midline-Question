<?php 
 include_once 'header.php';
?>
<form action="includes/signup.inc.php" method="POST">
<div class="container">  
  <div class="con-login">
  	<h1 class="display-4">User Signup</h1>
     <label><b>Firstname</b></label>
    <input type="text" placeholder="Enter Firstname" name="first" required>
     <label><b>Lastname</b></label>
    <input type="text" placeholder="Enter Lastname" name="last" required>
     <label><b>Email</b></label>
    <input type="text" placeholder="Enter E-mail" name="email" required>
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uid" required>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>
    <button type="submit" name="submit">Sign up</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="con-login" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</div>
</body>
</html>