<?php
session_start();

// Проверяем, передан ли productName через POST
if (isset($_POST['productName'])) {
    $productName = $_POST['productName'];
    
    // Если товар существует в корзине
    if (isset($_SESSION['cart'][$productName])) {
        // Если количество больше одного, уменьшаем на 1
        if ($_SESSION['cart'][$productName]['quantity'] > 1) {
            $_SESSION['cart'][$productName]['quantity']--;
        } else {
            // Если это последний экземпляр, удаляем товар полностью
            unset($_SESSION['cart'][$productName]);
        }
    }
}

// Перенаправляем обратно на страницу корзины
header("Location: cart.php");
exit;
?>
