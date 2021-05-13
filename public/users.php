<html>
<?php
  $site_title = 'Пользователи';
  require 'site_blocks/head.php';
?>
<body>
  <div class="container-lg">
    <?php
    require 'site_blocks/header.php';
    ?>
    <div class="row pt-5">
      <div class="col-lg-8 col-12 mb-4" id="users">

      </div>
      <?php require 'site_blocks/side_block.php';?>
    </div>
    <?php require 'site_blocks/footer.php';?>
  </div>
  <script src="js/users.js"></script>
</body>
</html>
