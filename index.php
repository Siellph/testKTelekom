<?php 
if ($_COOKIE['login']) {
    exit('<meta http-equiv="refresh" content="0; url=src/views/customers.php" />');
}
else { ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>auth</title>
</head>

<body>
    <form action="src/engine/auth.php" method="POST">

    <?php if ($_GET['success'] == 'false' && $_COOKIE['login']):?>
        <h3 class="false">Ошибка авторизации! Проверьте правильность вводимых данных!</h3>
        <?php endif; ?>

  <div class="form-group">
    <label for="login">Введите логин</label>
    <input type="text" class="form-control" id="login" name="login" value="<?=$_COOKIE['login']?>"
            required>
  </div>
  <div class="form-group">
    <label for="pass">Пароль</label>
    <input type="password" class="form-control" id="pass" name="pass" value="<?=$_COOKIE['pass']?>"
            required>
  <button type="submit" class="btn btn-success">Войти</button>
</form>
</body>

</html>
    <?php } ?>