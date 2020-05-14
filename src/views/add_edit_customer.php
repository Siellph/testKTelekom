<?php if ($_COOKIE['login']):?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/alert.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
      function send() {
        let city_org = $("#city_org").val()
        let contract = $("#contract").val()
        let name_org = $("#name_org").val()
        let phone_number = $("#phone_number").val()
        let last_name = $("#last_name").val()
        let first_name = $("#first_name").val()
        let middle_name = $("#middle_name").val()
        let date_of_birth = $("#date_of_birth").val()
        let postal_code = $("#postal_code").val()
        let country = $("#country").val()
        let region = $("#region").val()
        let district = $("#district").val()
        let city = $("#city").val()
        let street = $("#street").val()
        let upd_id = $("#upd_id").val()

        let str = "city_org="+city_org+"&contract="+contract+"&name_org="+name_org+"&phone_number="+phone_number+"&last_name="+last_name+"&first_name="+first_name+"&middle_name="+middle_name+"&date_of_birth="+date_of_birth+"&postal_code="+postal_code+"&country="+country+"&region="+region+"&district="+district+"&city="+city+"&street="+street+"&upd_id="+upd_id
        $.ajax({
          type: "POST",
          url: "../engine/save.php",
          data: str,
          success: function(answer) {
        $("#city_org").val('')
        $("#contract").val('')
        $("#name_org").val('')
        $("#phone_number").val('')
        $("#last_name").val('')
        $("#first_name").val('')
        $("#middle_name").val('')
        $("#date_of_birth").val('')
        $("#postal_code").val('')
        $("#country").val('')
        $("#region").val('')
        $("#district").val('')
        $("#city").val('')
        $("#street").val('')
          }
        })
      }
    </script>

    <title>Add customer</title>
</head>
<body>
    <header>
        <a href="../views/customers.php"><button type="button" class="btn btn-primary">Клиенты</button></a>
        <a href="../engine/exit.php"><button type="button" class="btn btn-danger">Выход</button></a>
    </header>
<?php include "../models/add_edit_form.php" ?>
<h6></h6>
</body>
</html>

<?php elseif (!($_COOKIE['login'])):?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR</title>
</head>
<body>
    <header>
        <h1 class="access_denide">Доступ запрещен!</h1>
        <span><a href="../../index.php">Авторизуйтесь</a></span>
    </header>
</body> 
</html>
<?php endif; ?>