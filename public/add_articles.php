<html>
  <?
  $site_title = 'Добавление статьи';
  require 'site_blocks/head.php';
  ?>
  <body>
    <div class="container-lg">
      <?php require 'site_blocks/header.php';?>

      <div class="row pt-5">
        <form class="col-lg-8 col-12 mb-4">
          <h4>Добавление статьи</h4>
          <label for="title">Заголовок статьи</label>
          <input type="text" name="title" id='title' class="form-control mb-4">

          <label for="intro">Интро статьи</label>
          <textarea name="intro" id='intro' class="form-control mb-4"></textarea>

          <label for="text">Текст статьи</label>
          <textarea name="text" id='text' class="form-control mb-4"></textarea>

          <div class="alert alert-danger mt-3" id='danger-warning' style="display : none"></div>

          <button type="button" class='btn btn-success' id='sand_article'>Добавить</button>
        </form>
        <?php require 'site_blocks/side_block.php';?>
      </div>
      <?php require 'site_blocks/footer.php';?>
    </div>
    <script src="js/add_articles.js"></script>
  </body>
</html>
