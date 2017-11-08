<?php
    //new comment
     $_SESSION['user_uid'] = 'root';
    if(isset($_POST['new_comment'])) {
    	$new_com_name = $_SESSION['user_uid'];
    	$new_com_text = $_POST['comment'];
    	$new_com_date = date('Y-m-d H:i:s');
    	$new_com_code = generateRandomString();
           
         if(isset($new_com_text)){
          $sql = "INSERT INTO parents (user_uid,text,data,code) VALUES ('$new_com_name','$new_com_text','$new_com_date','$new_com_code')";
           mysqli_query($conn,$sql); 
         }  
         header("Location:  ");
    }
    //new reply
    if(isset($_POST['new_reply'])) {
    	$new_reply_name = $_SESSION['user_uid'];
    	$new_reply_text = $_POST['new-reply'];
    	$new_reply_date = date('Y-m-d H:i:s');
    	$new_reply_code = $_POST['code'];
           
         if(isset($new_com_text)){
          $sql = "INSERT INTO children (user_uid,text,data,par_code) VALUES ('$new_reply_name','$new_reply_text','$new_reply_date','$new_reply_code')";
           mysqli_query($conn,$sql); 
         }  
         header("Location:  ");
    }    
 

 