<?php


?>
<main class="b-main">

  <div class="card-group">
    <?php
      foreach ($employees as $key => $value) :?>
    <a href="<?=$value['url']?>" class="card">
      <img src="<?=$value['img']?>"
        class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?=$value['good_name']?>
        </h5>
        <p class="card-text"><?=$value['good_description']?>
        </p>
        <p class="card-text"><small class="text-muted"><?=$value['good_price']."$"?></small>
        </p>
        <form method="post">
          <input type="hidden"  name="good" value="<?=$value['id_good']?>" />
          <button type="submit"  class="btn btn-dark">В корзину</button>
        </form>
      </div>
    </a>

    <?php endforeach;?>

  </div>

</main>

</html>