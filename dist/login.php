<?php

include './engine/autoload.php';
autoload('config');
include ENGINE_DIR."getUser.php";
include ENGINE_DIR."login_controller.php";

include PUBLIC_DIR . 'header.php';
// print_r($_SESSION);
// print_r($_COOKIE);
?>


<div class="container  ">
    <div class="row d-flex justify-content-center">

        <div class="col-md-6 ">
            <form class="form-horizontal" method="post">
                <span class="heading">АВТОРИЗАЦИЯ</span>
                <div class="form-group">
                    <input name="login" type="" class="form-control" id="inputEmail" placeholder="Login">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group help">
                    <input name="password" type="password" class="form-control" id="inputPassword"
                        placeholder="Password">
                    <i class="fa fa-lock"></i>
                    <a href="#" class="fa fa-question-circle"></a>
                </div>
                <div class="form-group">

                    <button type="submit" class="btn btn-dark">ВХОД</button>
                    <a href="reg.php" class="btn btn-success">Регистрация</a>
                </div>

            </form>


            <?php if ($status != ''): ?>
            <div class="alert alert-danger"><?=$status?>
            </div>
            <?endif;?>
        </div>

    </div>
</div>


<?php include PUBLIC_DIR . 'footer.php';
