<?php
	include "header.php";
?>

  <!-- Navigation -->
<?php
	include "navigation.php";
?>


  <!-- Page Header -->
<?php
	include "page-header.php";
?>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php 
          
            if(isset($_GET['id']))
              {
                
                $posts->selectOnePost($_GET['id']);
        
              }
          ?>
        </div>
      </div>
    </div>
  </article>

  <hr>

  <!-- Footer -->
<?php
	include "footer.php";
?>
