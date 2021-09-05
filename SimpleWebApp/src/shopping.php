<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <link href="shopping.css" rel="stylesheet" type="text/css" >
</head>
<body>
    <h1 class="label">Shopping Cart</h1>
    <table>
        <thead>
            <tr>
                <th> No </th>
                <th> Nama Buku </th>
                <th> Harga Satuan (Rp)</th>
                <th> Kuantitas </th>
                <th> Harga Total (Rp) </th>
                <th> Hapus </th> 
            </tr>
        </thead>
        <tbody>
            <?php
                $total = 0;
                $nomor = 1;
                foreach($_SESSION as $books){
                    $price = 0;
                    $quantity = 0;

                    echo "<tr>";
                        echo "<td>".($nomor++)."</td>";
                        foreach($books as $key => $value){
                            if ($key == 2){
                                echo "<td>".$value."</td>";
                                $quantity = $value;
                            } else if ($key == 1){
                                echo "<td>".$value."</td>";
                                $price = $value;
                            } else if ($key == 0){
                                echo "<td>".$value."</td>";
                            }
                        }
                        $total = ($quantity * $price);
                        echo "<td>".($quantity)."</td>";
                        echo "<td> <input type='submit' name='Delete' value='Delete'> </td>";                    echo "</tr>";
                }
            ?>

            <tr>
                <th colspan="3"> Total Keseluruhan : </th>
            </tr>
        </tbody>
            
            
    </table>
    <button class="back"><a href="./index.php"> Back </a></button>
</body>
</html>