<?php
$phones = array(
    array("Iphone 14", 20, 10),
    array("Iphone 13", 20, 20),
    array("Iphone 12", 20, 25),
    array("Iphone 11", 25, 40)
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phone Stock Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f7f7f7;
        }
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #fafafa;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        caption {
            caption-side: top;
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 18px;
        }
    </style>
</head>
<body>

<table>
    <caption>Phone Inventory</caption>
    <tr>
        <th>Phones</th>
        <th>In stock</th>
        <th>Sold</th>
    </tr>

    <?php
    for ($i = 0; $i < count($phones); $i++) {
        echo "<tr>";
        for ($j = 0; $j < count($phones[$i]); $j++) {
            echo "<td>" . $phones[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>

