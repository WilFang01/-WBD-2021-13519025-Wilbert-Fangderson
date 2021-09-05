<?php
    session_start();

    if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['qty'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['qty'];

        $book = array($name, $price, $quantity);

        $_SESSION[$name] = $book;

        header('location: index.php');
    }

?>