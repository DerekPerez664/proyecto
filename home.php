<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">

  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>Bienvenida a ASKARD.E</h1>
         <img src="libs/images/Logo.jpg"  width="150" height="150">
     
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
