<?php
  if(isset($_GET['error'])){
      ?>
<div class="container alert alert-danger text-center"><?=urldecode($_GET['error'])?></div>

<?php
  }else if(isset($_GET['success'])){
    ?>
<div class="container alert alert-success text-center"><?=urldecode($_GET['success'])?></div>

<?php
  }


?>