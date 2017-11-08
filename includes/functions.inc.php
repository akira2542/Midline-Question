<?php
  function get_total(){
  	require 'comment_dbh.inc.php';
  	$result = mysqli_query($conn,"SELECT * FROM parents ORDER BY date DESC");
  	$row_cnt = mysqli_num_rows($result);
  	echo "<h1>All comment(".$row_cnt.")</h1>";
  }

  function get_comments () {
  	require 'comment_dbh.inc.php';
  	$result = mysqli_query($conn,"SELECT * FROM parents ORDER BY date DESC");
  	$row_cnt = mysqli_num_rows($result);

  	foreach($result as $item){
  		$date = new dateTime($item['date']);
  		$date = date_format($data,'M j, Y | H:i:s');
  		$user = $item['user_uid'];
  		$comment = $item['text'];
  		$par_code = $item['code'];
  		echo '<div class="comment" id="'.$par_code.'">'
					.'<p class="user">'.$user.'</p>&nbsp;'
					.'<p class="time">'.$date.'</p>'
					.'<p class="comment-text">'.$comment.'</p>'
					.'<a class="link-reply" id="reply" name="'.$par_code.'">Reply</a>';
			  $chi_result = mysqli_query($conn,"SELECT * FROM children WHERE par_code = '$par_code' ORDER BY date DESC");
			  $chi_cnt = mysqli_num_rows($chi_result);

			  if ($chi_cnt > 0) {
			   echo '<a class="link-reply" id="children" name="'.$par_code.'"><span id="tog_text">replies</span> ('.$chi_cnt.')</a>'
						.'<div class="child-comments" id="C-'.$par_code.'">';
				foreach ($chi_result as $com) {
								$chi_date = new dateTime($com['date']);
								$chi_date = date_format($data,'M j, Y | H:i:s');
								$chi_user = $com['user_uid'];
								$chi_com = $com['text'];
								$chi_par = $com['par_code'];

								echo '<div class="child" id="'.$par_code.'-C">'
								.'<p class="user">'.$chi_user.'</p>&nbsp;'
								.'<p class="time">'.$chi_date.'</p>'
								.'<p class="comment-text">'.$chi_com.'</p>'
							.'</div>'; 
							}		
							echo "</div>";	
			  }
			  	echo "</div>";	
  	}
  }
            function generateRandomString($length = 6) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$characterLength = strlen($characters);
		$randomString = '';
		for($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $characterLength - 1)];
		}
		return $randomString;
	}