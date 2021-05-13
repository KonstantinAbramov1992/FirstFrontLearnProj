<!DOCTYPE html>
<html lang="ru">
  <?php
  require_once 'my_sql_connect.php';

  $sql = ('SELECT * FROM `articles` WHERE `id` = ?');
  $id = $_GET['id'];
  $query = $pdo->prepare($sql);
  $query->execute([$id]);

  $article = $query->fetch(PDO::FETCH_OBJ);

  $site_title = $article->title;
  require 'site_blocks/head.php';
  ?>
  <body>
    <noscript>
      <strong>We're sorry but <%= htmlWebpackPlugin.options.title %> doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>

    <div class="container-lg">

    <?php require 'site_blocks/header.php'?>

    <div class="row mt-5" id ='secondBlock'>
      <div class="col-md-8 col-12" id="firstLine">
        <div class="jumbotron">
          <h1><?=$article->title?></h1>
          <p><b>Автор статьи: </b><mark><?=$article->author?></mark></p>
          <?php
            $date = date('d ', $article->date);
            $array = ['Январь' , 'Февраль' , 'Март' , 'Апрель' , 'Май' , 'Июнь' ,
             'Июль' , 'Август' , 'Сентябрь' , 'Октябрь' , 'Ноябрь' , 'Декабрь'];
            $date .= $array[date('n', $article->date) - 1];
            $date .= date(' H:i', $article->date);
          ?>
          <p><b>Время публикации: </b><mark><?=$date?></mark></p>
          <p>
            <?=$article->intro?>
            <br><br>
            <?=$article->text?>
          </p>
        </div>
        <h3 class="mt-5">Комментарии</h3>
        <form action="news.php?id=<?=$id?>" method="post">
          <label for="username">Введите имя</label>
          <input type="text" name="username" id='username' class="form-control mb-4">

          <label for="mess">Сообщение</label>
          <textarea name="mess" id='mess' class="form-control mb-4"></textarea>

          <button type="submit" class='btn btn-success mb-5' id='mess_send'>Отправить</button>
        </form>
        <?php
          if ($_POST['username'] != '' && $_POST['mess'] != '') {
            $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
            $mess = trim(filter_var($_POST['mess'], FILTER_SANITIZE_STRING));

            $sql = ('INSERT INTO `comments`(`name`, `mess`, `article_id`) VALUES(?, ?, ?)');
            $query = $pdo->prepare($sql);
            $query->execute([$username, $mess, $id]);
            }
            
            $sql = ('SELECT * FROM `comments` WHERE `article_id` = ? ORDER BY `id` DESC');
            $query = $pdo->prepare($sql);
            $query->execute([$id]);
            $comments = $query->fetchAll(PDO::FETCH_OBJ);

            foreach ($comments as $comment) {
              echo "<div class='alert alert-info mb-2'>
                <h4>$comment->name</h4>
                <p>$comment->mess</p>
              </div>";
            }
        ?>
      </div>
      <?php require 'site_blocks/side_block.php'?>
    </div>

    <?php require 'site_blocks/footer.php'?>
  </body>
</html>
