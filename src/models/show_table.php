<?php
include "../config/db.php";

$sql = "SELECT * FROM `customers`";
$res = mysqli_query($connect, $sql);
?>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Город БК</th>
            <th scope="col">&#8470; Договора</th>
            <th scope="col">Наименование Абонента</th>
            <th scope="col">&#8470; телефона</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Имя</th>
            <th scope="col">Отчество</th>
            <th scope="col">Дата рождения</th>
            <th scope="col">Почтовый индекс</th>
            <th scope="col">Страна</th>
            <th scope="col">Область</th>
            <th scope="col">Район, муниципальный округ</th>
            <th scope="col">Город&#8260;поселок&#8260;деревня&#8260;аул</th>
            <th scope="col">Улица</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php 
            if (mysqli_num_rows($res) > 0) {
                while ($table = mysqli_fetch_assoc($res)) {
                    $id = $table['id'];
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
        <tr>
            <td><?= $city_org ?></td>
            <td><?= $contract ?></td>
            <td><?= $name_org ?></td>
            <td><?= $phone_number ?></td>
            <td><?= $last_name ?></td>
            <td><?= $first_name ?></td>
            <td><?= $middle_name ?></td>
            <td><?= $date_of_birth ?></td>
            <td><?= $postal_code ?></td>
            <td><?= $country ?></td>
            <td><?= $region ?></td>
            <td><?= $district ?></td>
            <td><?= $city ?></td>
            <td><?= $street ?></td>
            <td><a class="btn btn-light" href="add_edit_customer.php?id=<?=$id?>">&#128396;</a></td>
        </tr>
        <?php
                } ?>
    </tbody>
</table>
<?php
            } else {?> 
            <h4>Nothing</h4>
<?php }
        ?>