<?php
session_save_path("C:\OSPanel\session");
session_start();

$mysql=mysqli_connect('localhost', 'root', '', 'Raimov'); 
if ($mysql==False) { 
echo "Соединение не установлено"; 
echo mysqli_connect_error(); 
exit();
}

if(isset($_SESSION['adress']) == true){
if($_SERVER['REQUEST_METHOD']=='POST'){
    foreach ($_SESSION['cart'] as $id=>$item){
        $product_id=$id;
        $quantity=$item['quantity'];
        $total_price=$item['price']*$quantity;
        $mysql->query("INSERT INTO `orders` (`product_id`,`quantity`,`total_price`) 
        VALUES ('$product_id','$quantity','$total_price')"); 
        $mysql->close(); 
    }
    
    unset($_SESSION['cart']);
    header('location: ./../index.php');
}
}

else{
    header('location: ./../lk/adress.php');
}

$total_price=0;
if(isset($_SESSION['cart'])){
    foreach ($_SESSION['cart'] as $item){
        $total_price+=$item['price']*$item['quantity'];
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оплата товаров</title>
    <link rel="stylesheet" href="./../css/checkout.css">
    </head>
    <body>
        <center>
        <h1>Оформление заказа</h1>
        <?php if(!empty($_SESSION['cart'])): ?>
            <div class='content'>
            <div class="logo">
            <a href="./../index.php">
            <img src="./../photo/logo.svg" width="260px" height="100px">
            </a>
            </div>
                <div class='content_body'>
            <div class='form_cheсkout' name='total_price'>Сумма заказа: <?php echo $total_price; ?> руб.</div>
            <div class='form_cheсkout' name='adress'>Адрес доставки: <?php echo $_SESSION['adress'] ?> </div>
            <form action="checkout.php" method="post">
                <button type='sumbit'>Подтвердить заказ</button>
            </form>
                </div>
            </div>
            <?php else: ?>
                <div class='error'>Вы ничего не выбрали
                    <?php endif; ?>
                </div>
        </center>
    </body>
</html>