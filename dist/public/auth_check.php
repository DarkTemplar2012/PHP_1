<?php

if ($_SESSION['isAuth']): ?>

	<h5 class="m-3 alert alert-success">
		Капитан <?=$_SESSION['user_name']?>, добро пожаловать на борт!
	</h5>

<?else:?>

<h5 class="m-3 alert alert-danger">
	Доступ к контенту ограничен! <br/>
	<a href="/login.php">Войдите</a> , чтобы продолжить
</h5>

<?die?>
<?endif?>