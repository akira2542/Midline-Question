<?php 
 require 'includes/comment_dbh.inc.php';
 require 'includes/functions.inc.php';
 session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<title>adsad</title>
</head>
<body>
 	 <?php 
 	 get_total();
 	 require 'includes/check_com.inc.php' 
 	  ?>
 	 <form action='' method='POST' class="main">
 	 	<label class="label">Enter a brief comment</label>
 	 	<textarea class="form-text" name="comment" id="comment" placeholder="Your Website Sucks :)"></textarea>
 	 	<br/>
 	 	<input type="submit" class="btn btn-primary" name="new_comment" value="POST"></input>
 	 </form>

     <?php 
 	 get_comments(); 
 	  ?>

 </div>

        
</body>
</html>

 <div class="container">

























<?php 
 include_once 'footer.php';
?>