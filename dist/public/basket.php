<?php

if (!empty($_SESSION['good'])) :
    $goods = $_SESSION['good'];
    print_r($goods) ;
    $counts = array_count_values($goods);
    // print_r($counts);
    // print_r(array_reverse($counts));
    $totalPrice = 0;
    if (!$_SESSION['isAuth'] && isset($_POST['createOrder'])): ?>
<h5 class="m-3 alert alert-danger">
  Доступ к контенту ограничен! <br />
  <a href="/login.php">Войдите</a> , чтобы продолжить
</h5>
<?endif;
?>
<div style="display: flex">
  <?php
    foreach ($counts as $key => $value) :
    $query_good = "SELECT * FROM `geek`.`goods` WHERE id_good = $key LIMIT 1";
    $mysql_good = mysqli_query(myDbConnect(), $query_good);
    $goodDB = mysqli_fetch_assoc($mysql_good); ?>
  <div class="card" style="width: 18rem;">
    <img src="<?=$goodDB['img']?>"
      class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?=$goodDB['good_name']?>
      </h5>
      <p class="card-text"><?=$goodDB['good_description']?>
      </p>
      <p class="card-text"><?=$counts["$key"]; ?> штук
        по
        <?=$goodDB['good_price']."$"?>
      </p>
      <p class="card-text">Итого <?php
    $totalPrice = $totalPrice + ($counts["$key"] * $goodDB['good_price']);
    echo $counts["$key"] * $goodDB['good_price']; ?>$
      </p>
      <form method="post">
        <input type="hidden" name="goodRem" value="<?=$key?>" />
        <button type="submit" class="btn btn-dark">Убрать</button>
      </form>

    </div>
  </div>
  <?php
endforeach; ?>
</div>
<form method="post">
  <input type="hidden" name="createOrder" />
  <button type="submit" class="btn btn-primary">Сформировать заказ</button>
</form>
<span>Итого <?=$totalPrice?>$</span>
<?php
 else :?>
<span>Пусто </span>
<?endif;
