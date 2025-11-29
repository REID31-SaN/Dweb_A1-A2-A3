<!-- SANTOS JEORGE ANDREI BENEDICT M.    WD-203 -->
<?php
// TITLES AND TAGLINE
$storeName = "That Headphone Shop";
$tagline = "For professionals, by professionals.";

// PRODUCT LINE
$product1 = [
    "name" => "Sennheiser HD 600",
    "price" => 22800,
    "stock" => 10
];
$product2 = [
    "name" => "Audio Technica ATH-R70x",
    "price" => 22300,
    "stock" => 10
];
$product3 = [
    "name" => "Sony MDR-7506",
    "price" => 7200,
    "stock" => 10
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>That Headphone Shop</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            color:black;
            background-color: #e3e1e1ff;
            margin: 0;
            padding: 40px;
            line-height: 1.6;
        }

        h1{
            color: #FF6B35;
            font-size: 2.5em;
            margin-bottom: 10px;
            font-weight: bold;
            letter-spacing: 3px;
        }

        h2{
            color: black;
            font-size: 1.5em;
            margin-bottom: 10px;
            font-weight: 400;
            letter-spacing: 2px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        tr{
            background-color: #ffffff;
            border-bottom: 1px solid #dddddd;
        }
        td {
            padding: 12px;
            text-align: left;
        }
        tr:hover{
            background-color: #2f2f2fff;
            color: #FF6B35;
        }
        .classification{
            background-color: #2f2f2fff;
            color: white;
            font-weight: bold;
        }

    </style>
</head>
<!-- START -->
<body>
    <h1><?php echo $storeName ?></h1>
    <h2><?php echo $tagline ?></h2>
<table>
    <tr class="classification">
        <th>Model</th>
        <th>Price</th>
        <th>In Stock</th>
    </tr>
    <tr>
        <td><?php echo $product1["name"]; ?></td>
        <td>₱ <?php echo $product1["price"]; ?></td>
        <td><?php echo $product1["stock"]; ?></td>
    </tr>

    <tr>
        <td><?php echo $product2["name"]; ?></td>
        <td>₱ <?php echo $product2["price"]; ?></td>
        <td><?php echo $product2["stock"]; ?></td>
    </tr>

    <tr>
        <td><?php echo $product3["name"]; ?></td>
        <td>₱ <?php echo $product3["price"]; ?></td>
        <td><?php echo $product3["stock"]; ?></td>
    </tr>
</table>
</body>
</html>
