 <?php include('header.php')?> 

  <div class="page-title">
    <h1 class="ml-5 text-uppercase font-weight-bold">Edit Form</h1>
  </div>
  <div class="row">
  	<div class="col-md-8">
  		 <?php
            session_start();
              if (isset($_SESSION['error'])) {
                 echo "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>";
                 unset($_SESSION['error']);
                }
          ?>
  		<?php require '../process/update.php' ?>
  	</div>
  </div>

 <?php include('footer.php')?> 
