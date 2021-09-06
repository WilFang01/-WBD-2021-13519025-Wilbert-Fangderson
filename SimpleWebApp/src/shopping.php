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
    <h1 class="shopcart">Shopping Cart</h1>
    <table class="table">
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
                $totalprice = 0;
                $nomor = 1;
                foreach($_SESSION['Cart'] as $book){
                    $price = 0;
                    $quantity = 0;

                    echo "<form action='deletecart.php' method='POST'>";
                    echo "<tr>";
                        echo "<td>".$nomor."</td>";
                        $nomor = $nomor + 1;
                        foreach($book as $key => $value){
                            if ($key == 0){
                                echo "<td>".$value."</td>";
                                echo "<input type='hidden' name='p$key' value='".$value."'>";
                            } else if ($key == 1){
                                echo "<td>".$value."</td>";
                                echo "<input type='hidden' name='p$key' value='".$value."'>";
                                $price = $value;
                            } else if ($key == 2){
                                echo "<td>".$value."</td>";
                                echo "<input type='hidden' name='p$key' value='".$value."'>";
                                $quantity = $value;
                            }
                        }
                        $total = ($quantity * $price);
                        $totalprice = $total + $totalprice;
                        echo "<td>".($total)."</td>";
                        echo "<td> <input type='submit' name='Delete' value='Delete'> </td>";  
                    echo "</tr>";
                    echo "</form>";
                }
            ?>

            <tr>
                <th colspan="4"> Total Keseluruhan : </th>
                <?php
                    echo "<th>".$totalprice."</th>";
                ?>
            </tr>
        </tbody>
            
            
    </table>
    <button class="back"><a href="./index.php"> Back </a></button>
</body>
</html>