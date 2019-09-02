<?php

include './engine/autoload.php';
autoload('config');
include ENGINE_DIR."getUser.php";
include ENGINE_DIR.'session_destroy_other.php';
include ENGINE_DIR."reg_controller.php";

include PUBLIC_DIR . 'header.php';
// print_r($_SESSION);
if ($_SESSION['isAuth']): ?>
<h5 class="m-3 alert alert-danger">
  Доступ к контенту ограничен! <br />
  <form method="post" style="display: inline;">
    <input type="submit" name="logout" value="Exit" class="btn btn-danger">
  </form> , чтобы продолжить
</h5>

<?die?>
<?endif?>

<div class="container  ">
  <div class="row d-flex justify-content-center">

    <div class="col-md-6 ">
      <form class="form-horizontal" method="post">
        <span class="heading">Регистрация</span>
        <div class="form-group">
          <input name="login" type="" class="form-control" id="inputEmail" placeholder="Login">
          <i class="fa fa-user"></i>
        </div>
        <div class="form-group help">
          <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
          <i class="fa fa-lock"></i>
          <a href="#" class="fa fa-question-circle"></a>
        </div>
        <div class="form-group">

          <button type="submit" class="btn btn-success">Регистрация</button>
        </div>

      </form>


      <?php if ($status != ''): ?>
      <div class="alert alert-danger"><?=$status?>
      </div>
      <?endif;?>
    </div>

  </div>
</div>
<?php






include PUBLIC_DIR . 'footer.php';

// print_r($_COOKIE);
