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

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php $posts->selectAllPosts(); ?>
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>
  <hr>
   <!-- Footer -->
<?php
	include "footer.php";
?>