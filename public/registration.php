<html>
<?php
$site_title = 'Регистрация';
require 'site_blocks/head.php';
?>

<body>
  <div class="container-lg">
    <?php require 'site_blocks/header.php';?>

    <div class="row pt-5">

      <form class="col-lg-8 col-12 mb-4">
        <label for="username">Введите имя</label>
        <input type="text" name="username" id='username' class="form-control mb-4">

        <label for="email">Введите Email</label>
        <input type="email" name="useremail" id='useremail' class="form-control mb-4">

        <label for="login">Введите Логин</label>
        <input type="text" name="login" id='login' class="form-control mb-4">

        <label for="pass">Придумайте пароль</label>
        <input type="password" name="pass" id='pass' class="form-control mb-4">

        <div class="alert alert-danger mt-3" id='danger-warning' style="display : none"></div>

        <button type="button" class='btn btn-success' id='reg_user'>Зарегистрироваться</button>
      </form>

      <?php require 'site_blocks/side_block.php';?>
    </div>

    <?php require 'site_blocks/footer.php';?>
  </div>
  <script src='js/reg.js'></script>
</body>
</html>
