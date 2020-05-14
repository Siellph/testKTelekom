<?php

include "../config/db.php";

$id = $_GET['id'];

if ($id){
    $sql = "SELECT * FROM `customers` WHERE `id` = '$id'";
    $res = mysqli_query($connect, $sql);
    $table = mysqli_fetch_assoc($res);
    //данные из БД при редактировании строки
    $city_org = $table['city_org'];
    $contract = $table['contract'];
    $name_org = $table['name_org'];
    $phone_number = $table['phone_number'];
    $last_name = $table['last_name'];
    $first_name = $table['first_name'];
    $middle_name = $table['middle_name'];
    $date_of_birth = $table['date_of_birth'];
    $postal_code = $table['postal_code'];
    $country = $table['country'];
    $region = $table['region'];
    $district = $table['district'];
    $city = $table['city'];
    $street = $table['street'];

    ?>
<table>
    <tbody>
  <tr>
    <td>Город БК</td>
    <td><input type="text" class="form-control" id="city_org" value="<?=$city_org?>"></td>
  </tr>
  <tr>
    <td>&#8470; Договора</td>
    <td><input type="number" class="form-control" id="contract" value="<?=$contract?>" required></td>
  </tr>
  <tr>
    <td>Наименование абонента</td>
    <td><input type="text" class="form-control" id="name_org" value="<?=$name_org?>" required maxlength="50"></td>
  </tr>
  <tr>
    <td>&#8470; телефона</td>
    <td><input type="phone" class="form-control" id="phone_number" value="<?=$phone_number?>" maxlength="11"></td>
  </tr>
  <tr>
    <td>Фамилия</td>
    <td><input type="text" class="form-control" id="last_name" value="<?=$last_name?>" required maxlength="50"></td>
  </tr>
  <tr>
    <td>Имя</td>
    <td><input type="text" class="form-control" id="first_name" value="<?=$first_name?>" required maxlength="50"></td>
  </tr>
  <tr>
    <td>Отчество (если есть)</td>
    <td><input type="text" class="form-control" id="middle_name" value="<?=$middle_name?>" maxlength="50"></td>
  </tr>
  <tr>
    <td>Дата рождения</td>
    <td><input type="date" class="form-control" id="date_of_birth" value="<?=$date_of_birth?>" required></td>
  </tr>
  <tr>
    <td>Почтовый индекс</td>
    <td><input type="number" class="form-control" id="postal_code" value="<?=$postal_code?>" required maxlength="6"></td>
  </tr>
  <tr>
    <td>Страна</td>
    <td><input type="text" class="form-control" id="country" value="<?=$country?>" required maxlength="50"></td>
  </tr>
  <tr>
    <td>Область</td>
    <td><input type="text" class="form-control" id="region" value="<?=$region?>" required maxlength="50"></td>
  </tr>
  <tr>
    <td>Район, Муниципальный округ</td>
    <td><input type="text" class="form-control" id="district" value="<?=$district?>" maxlength="50"></td>
  </tr>
  <tr>
    <td>Город&#8260;поселок&#8260;деревня&#8260;аул</td>
    <td><input type="text" class="form-control" id="city" value="<?=$city?>" required maxlength="50"></td>
  </tr>
  <tr>
    <td>Улица</td>
    <td><input type="text" class="form-control" id="street" value="<?=$street?>" required maxlength="50"></td>
  </tr>
    </tbody>
</table>
<input type="hidden" id="upd_id" value="<?=$id?>">
<input type="button" onclick="send()" data-dismiss="alert" class="btn btn-success" value="Сохранить">
<?php } else { ?>
    <table>
    <tbody>
  <tr>
    <td>Город БК</td>
    <td><input type="text" class="form-control" id="city_org" maxlength="50"></td>
  </tr>
  <tr>
    <td>&#8470; Договора</td>
    <td><input type="number" class="form-control" id="contract" required></td>
  </tr>
  <tr>
    <td>Наименование абонента</td>
    <td><input type="text" class="form-control" id="name_org" required maxlength="50"></td>
  </tr>
  <tr>
    <td>&#8470; телефона</td>
    <td><input type="tel" class="form-control" id="phone_number" maxlength="11"></td>
  </tr>
  <tr>
    <td>Фамилия</td>
    <td><input type="text" class="form-control" id="last_name" required maxlength="50"></td>
  </tr>
  <tr>
    <td>Имя</td>
    <td><input type="text" class="form-control" id="first_name" required maxlength="50"></td>
  </tr>
  <tr>
    <td>Отчество (если есть)</td>
    <td><input type="text" class="form-control" id="middle_name" maxlength="50"></td>
  </tr>
  <tr>
    <td>Дата рождения</td>
    <td><input type="date" class="form-control" id="date_of_birth" required></td>
  </tr>
  <tr>
    <td>Почтовый индекс</td>
    <td><input type="number" class="form-control" id="postal_code" required maxlength="6"></td>
  </tr>
  <tr>
    <td>Страна</td>
    <td><input type="text" class="form-control" id="country" required maxlength="50"></td>
  </tr>
  <tr>
    <td>Область</td>
    <td><input type="text" class="form-control" id="region" required maxlength="50"></td>
  </tr>
  <tr>
    <td>Район, Муниципальный округ</td>
    <td><input type="text" class="form-control" id="district" maxlength="50"></td>
  </tr>
  <tr>
    <td>Город&#8260;поселок&#8260;деревня&#8260;аул</td>
    <td><input type="text" class="form-control" id="city" required maxlength="50"></td>
  </tr>
  <tr>
    <td>Улица</td>
    <td><input type="text" class="form-control" id="street" required maxlength="50"></td>
  </tr>
    </tbody>
</table>
<input type="button" onclick="send()" data-dismiss="alert" class="btn btn-success" value="Сохранить">
  <?php
}
mysqli_close($connect);
?>