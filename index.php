<?php 
 include_once 'header.php';
?>
  <!--Banner-->
 <section class="main-container">
	 <div class="container-fluid">
	  <div class="row banner">
	     <div class="col-sm-4 sub-banner1"><img src="images/girl.png"></div>
	     <div class="col-sm-8 sub-banner2">
             <img src="images/logobig.png">
             <h1>Welcome to my Blog!</h1>
             <p>I write mostly about Webdesign, Digital Art<br>and pretty much everything else!</p>
         </div>	
      </div>
     </div>
<!--content-->
   <div class="container-fluid content">
      <div class="row">
          <div class="col-sm-1 order-sm-2"></div>
          <div class="col-sm-3 order-sm-3 about-link">
            <img class="animated pulse btn1" src="images/aboutme.png">
             <div class="alert alert-danger" id="alt1" role="alert">
              <strong>Sorry!</strong> The page is under construction.
             </div>
            <img class="animated pulse btn2" src="images/gal.png">
          <div class="alert alert-danger" id="alt2" role="alert">
          <strong>Sorry!</strong> The page is under construction.
          </div>
          </div>
          <div class="col-sm-1"></div>
          <div class="col-sm-6 order-sm-1 content">
            <h1 class="display-4">Qoutes of the day</h1>
            <blockquote class="blockquote">
            <p class="mb-0">“Once you’ve accepted your flaws, no one can use them against you.”.</p>
            <footer class="blockquote-footer">Tyrion lanister <cite title="Source Title">Game of Thrones</cite></footer>
            </blockquote>
            <!--edit post-->
            <div class="post-1 animated pulse">
              <div class="row">
                 <div class="col-sm-4 post-banner"><img class="img-fluid rounded" src="images/postbanner.jpg"></div>
                 <div class="col-sm-8 post-content">
                  <h1 class="display-4"><strong>This is the heading</strong></h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo dignissim enim, eget imperdiet quam suscipit vel. Nunc semper magna vitae lacus venenatis eleifend. Aliquam et nisi vitae elit tempus sollicitudin. In sit amet metus in ligula mattis ornare. Sed consequat sapien vitae</p>
                  <a href="comment.php">Read more</a>
                </div>
              </div>  
            </div>
            <div class="post-2 animated pulse">
              <div class="row">
                 <div class="col-sm-4 post-banner"><img class="img-fluid rounded" src="images/stuff.jpg"></div>
                 <div class="col-sm-8 post-content">
                  <h1 class="display-4"><strong>This is the heading</strong></h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo dignissim enim, eget imperdiet quam suscipit vel. Nunc semper magna vitae lacus venenatis eleifend. Aliquam et nisi vitae elit tempus sollicitudin. In sit amet metus in ligula mattis ornare. Sed consequat sapien vitae</p>
                  <a href="">Read more</a>
                </div>
              </div>  
            </div>

          </div>
          <div class="col-sm-1 order-sm-4">
          </div>
       
<!--Script!!-->
 <script type="text/javascript">
    $(document).ready(function(){
                $('.btn1').click(function(){
                $('#alt1').slideToggle(300).delay(1000).slideToggle(300);
                 });
                $('.btn2').click(function(){
                $('#alt2').slideToggle(300).delay(1000).slideToggle(300);
                });   
    });

  </script>

      </div>
   </div>
 </section>
</body>
</html>

<!-- if ($(window).width() => 600 ){

           }else{
                $('#alt1').css({
                  position:'relative';
                });
                $('.btn1').click(function(){
                $('#alt1').slideToggle(300).delay(1000).slideToggle(300);
                 });
             }
