<?php
$conn = mysqli_connect('localhost', 'root', '', 'arkademy');
$query = "SELECT Cashier.name as kasir, product.name as produk, category.name as kg, product.price 
From Cashier, Category, Product
Where product.id = category.id
And product.id = cashier.id";

$hasil = mysqli_query($conn, $query);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel</title>

    <table>
        <tr>
            <td>cashied</td>
            <td>product</td>
            <td>categtdy</td>
            <td>price</td>
        </tr>
        <tr>
            <?php
            while ($data = mysqli_fetch_assoc($hasil)) {

                ?>
                <th><?= $data['kasir']; ?></th>
                <th><?= $data['produk']; ?></th>
                <th><?= $data['kg']; ?></th>
                <th><?= $data['price']; ?></th>

        </tr>
    <?php
    }
    ?>
    </table>
</head>

<body>

</body>

</html>