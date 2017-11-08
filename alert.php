<?php 
 include_once 'header.php';
?>
<a href=""><img id="show" class="animated pulse" src="images/gal.png"></a>

<div class="alert alert-success" id="alert" role="alert">
  <strong>Well done!</strong> You successfully read this important alert message.
</div>
<script type="text/javascript">
    $(document).ready(function(){
            $('#show').click(function(){
                $('#alert').toggle(300);
            });

             
    });
</script>    

</body>
</html>