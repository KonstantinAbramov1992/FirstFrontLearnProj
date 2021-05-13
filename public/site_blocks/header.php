<header class="container header">
  <div class="row justify-content-between">
    <div class="col-md-2 col-12" id="logo">
      <div><object type="image/svg+xml" data="img\newspaper-regular.svg" id="newspaper" @mouseleave="mouse_leave">Your browser does not support SVGs</object></div>
      <div>
        <span>itProger</span>
        <span>Blog</span>
      </div>
    </div>
    <div class="col-lg-4 col-12" id="header_search"><input type="search" placeholder="Поиск" id="search"></div>
    <div class="col-lg-6 col-12" id="headerLinks">
      <ul>
        <li><a href="/public" class="btn">Главная</a></li>
        <li><a href="/public/users.php" class="btn">Пользователи</a></li>

        <?php if (!isset($_COOKIE['login'])):?>
        <li><a href="/public/authification.php" class="btn">Войти</a></li>
        <li><a href="/public/registration.php" class="btn">Регистрация</a></li>
        <?php else :?>
        <li><a href="/public/add_articles.php" class="btn">Добавить статью</a></li></li>
        <li><a href="/public/authification.php" class="btn">Личный Кабинет</a></li>
        <?php endif;?>

      </ul>
    </div>
  </div>
</header>
