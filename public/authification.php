<html>
<?php
if (!isset($_COOKIE['log'])) {
  $site_title = 'Авторизация';
} else {
  $site_title = 'Личный Кабинет';
}
require 'site_blocks/head.php';
?>

<body>
  <div class="container-lg">
    <?php require 'site_blocks/header.php';?>

    <div class="row pt-5">
    <?php if (!isset($_COOKIE['login'])):?>
      <form class="col-lg-8 col-12 mb-4">

        <label for="login">Введите Логин</label>
        <input type="text" name="login" id='login' class="form-control mb-4">

        <label for="pass">Введите пароль</label>
        <input type="password" name="pass" id='pass' class="form-control mb-4">

        <div class="alert alert-danger mt-3" id='danger-warning' style="display : none"></div>

        <button type="button" class='btn btn-success' id='auth_user'>Войти</button>
      </form>
    <?php else :?>
      <div class="col-lg-8 col-12 mb-4">
        <h2>User:</h2>
        <h2><?=$_COOKIE['login']?></h2>
        <button type="button" class="btn btn-danger" id="exit_btn">Выйти</button>
      </div>
    <?php endif;?>
      <?php require 'site_blocks/side_block.php';?>
    </div>

    <?php require 'site_blocks/footer.php';?>
  </div>
  <script src='js/auth.js'></script>
  <script src='js/exit.js'></script>
</body>
</html>
