<?php
include  'engine/autoload.php';
autoload('config');
include ENGINE_DIR.'session.php';

// include ENGINE_DIR.'index.php';
include ENGINE_DIR."basket.php";

include PUBLIC_DIR.'header.php';


$query = "SELECT * FROM `geek`.`feedback` WHERE `url` LIKE '%cpu%'";

// mysqli_query(myDbConnect(), $query);

$result = mysqli_query(myDbConnect(), $query);

$employees = [];

while ($row = mysqli_fetch_assoc($result)) {
    $employees[] = $row;
};
?>
<div class="card" style="width: 18rem;">
  <img src="public/img/gallery/remont-notebook1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Intel Core i7 8700k</h5>
    <p class="card-text">Очень мощный</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">2000$</li>

  </ul>
  <form method="post">
    <input type="hidden" name="good" value="3" />
    <button type="submit" class="btn btn-dark">В корзину</button>
  </form>
</div>
<span>ОТЗЫВЫ</span>
<?php
  foreach ($employees as $key => $value) {?>
<span>USER: <?=$value['feedback_user']?></span>
<span>FEED: <?=$value['feedback_body']?></span>
<span>ID: <?=$value['id_feedback']?></span>
<br>
<?php
}?>

<form class="m-5" method="post" action="add_feeds.php" name="razor.phpa">
  <span>Добавте комментарий</span>
  <div class="form-group">
    <label for="exampleFormControlInput1">Имя</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="ml-3 mb-3 btn btn-primary">Добавить!</button>

</form>

<?php
include PUBLIC_DIR.'footer.php';
mysqli_close(myDbConnect());
