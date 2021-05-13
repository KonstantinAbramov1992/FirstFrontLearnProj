<!DOCTYPE html>
<html lang="ru">
  <?php
    $site_title = 'Главная';
    require 'site_blocks/head.php';
  ?>
  <body>
    <noscript>
      <strong>We're sorry but <%= htmlWebpackPlugin.options.title %> doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>
    <p class='search_full_screen'>Форма поиска</p>
    <input type="search" placeholder="Поиск" v-model="state.message" class="search_full_screen">
    <button class='search_full_screen btn' v-on:click="close_full_screen">Закрыть</button>

    <div class="container-lg">

    <?php require 'site_blocks/header.php'?>

    <div class="row" id="firstBlock">
      <div class="col-sm-6 col-12" id="firstBlock_firsCol">
        <h1>3 основные сферы применения языка Python</h1>
        <p>До начала активного изучения любого языка программирования
          правильно было бы задуматься о сферах его применения. Мы расскажем
          про 3 самые популярные сферы применения языка Python.</p>
        <a href="https://itproger.com/news/3-osnovnie-sferi-primeneniya-yazika-python" class="btn btn-danger" target="_blank">Читать далее</a>
      </div>
      <div class="col-sm-6 col-12" id="firstBlock_secondCol">
        <div>
          <div>mozilla <img src="img\rust-brands.svg"> RUST</div>
        </div>
      </div>
    </div>

    <div class="row" id ='secondBlock'>
      <div class="col-md-8 col-12" id="firstLine">
        <?php
          require_once 'my_sql_connect.php';

          $sql = ('SELECT * FROM `articles` ORDER BY `date` DESC');
          $query = $pdo->query($sql);

          while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo "<h2>$row->title</h2>
            <p>$row->intro</p>
            <p><b>Автор статьи: </b><mark>$row->author</mark></p>
            <a href='news.php?id=$row->id' class='btn btn-warning mb-5'>Прочитать больше</a>";
          }
        ?>
      </div>
      <?php require 'site_blocks/side_block.php'?>
    </div>

    <?php require 'site_blocks/footer.php'?>
  </body>
</html>
