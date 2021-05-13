<div class="col-lg-4 col-12" id="sideBlock">
  <h2>Анонсы</h2>
  <div id="sideBlock1">
      <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
         eiusmod tempor incididunt ut labore et dolore magna aliqu</span>
  </div>
  <div id="sideBlock2">
    <img src="https://androidlime.ru/wp-content/uploads/2018/04/android-processor.jpg">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
      eiusmod tempor incididunt ut labore et dolore magna aliqu</p>
    <a href="#" class="btn">Читать дальше</a>
  </div>

  <div class="alert alert-warning mt-5" id='no_message'>Пока сообщений нет</div>
  <div id="chat_container"></div>
  <div class="alert alert-danger mt-3" id="danger-chat" style="display:none"></div>

  <?php if (isset($_COOKIE['login'])):?>

  <form class="mt-3">
    <textarea name="chat_mess" id="chat_mess" class="form-control mb-3"></textarea>
    <button type="button" id="chat_send" class="btn btn-success">Отправить</button>
  </form>

  <?php else :?>

  <div class="alert alert-success mt-3 mb-3">Войдите в аккаунт, или зарегистрируйтесь и войдите в аккаунт, чтобы писать в чат!</div>
  <a href="/public/authification.php" class="btn btn-info">Войти</a>
  <a href="/public/registration.php" class="btn btn-warning">Регистрация</a>

  <?php endif;?>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src='js/chat.js'></script>
