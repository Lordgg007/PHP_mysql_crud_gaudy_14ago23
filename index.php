<?php
  include("database/db.php");
?>

<?php
  include("includes/header.php");
?>

  <main class="container p-4">
    <div class="row">
      <div class="col-md-4">
        <!--MESSAGES-->
        <?php if(isset($_SESSION['messages'])) ?>
        <div class="alert alert-?>= $_SESSION['message_type']?= alert-dimissible fade show" role="alert"></div>
      </div>
    </div>
  </main>

<?php
  include("includes/footer.php");
?>
  
