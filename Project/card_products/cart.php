<?php
session_save_path("C:\OSPanel\session");
session_start();

$mysql=mysqli_connect('localhost', 'root', '', 'Raimov'); 
if ($mysql==False) { 
echo "Соединение не установлено"; 
echo mysqli_connect_error(); 
exit(); 
} 

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'add':
            $id = $_GET['id'];
            $result=$mysql->query("SELECT * FROM `products` WHERE `id`=$id");
            $product = $result->fetch_assoc();

            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }

            if (isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id]['quantity']++;
            } else {
                $_SESSION['cart'][$id] = [
                    'name' => $product['name'],
                    'price' => $product['price'],
                    'quantity' => 1
                ];
            }

            if(isset($_SESSION['logged']) == true){
                header("Location: cart.php");
                exit;
            }
            else{
                header('location: ./../reg/authriz.html');
            }
            break;

        case 'remove':
            $id = $_GET['id'];
            if (isset($_SESSION['cart'][$id])) {
                unset($_SESSION['cart'][$id]);
            }

            header('Location: cart.php');
            break;
    }
}

$total_price = 0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $total_price += $item['price'] * $item['quantity'];
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <link rel="stylesheet" href="./../css/cart.css">
</head>
<body>
    <?php
    include './../include/header.php'
    ?>
    <main>
    <div class="menu">
                <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
                <label for="burger-checkbox" class="burger"></label>
                <ul class="menu-list">
                <li><a href="./../card_products/cart.php" class="menu-item">Корзина</a><li>
                    <li><a href="./../card_products/favorite.php" class="menu-item">Избранное</a><li>
                    <li><a href="./../lk/adress.php" class="menu-item">Адрес</a><li>
                    <li><a href="./../scripts/out.php" class="menu-item">Выход</a><li>
                </ul>
            </div>
            <center>
            <div class="title_content">
                <h1>Это ваша корзина, <?php
                echo $_SESSION['login'];
                ?>!</h1>
            </div>
            </center>
    <div class="cart">
        <?php if (!empty($_SESSION['cart'])): ?>
            <table>
                <thead>
                    <tr>
                        <th>Название</th>
                        <th>Цена</th>
                        <th>Количество</th>
                        <th>Итого</th>
                        <th>Действие</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                        <tr>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo $item['price']; ?> руб.</td>
                            <td><?php echo $item['quantity']; ?></td>
                            <td><?php echo $item['price'] * $item['quantity']; ?> руб.</td>
                            <td><a href="cart.php?action=remove&id=<?php echo $id; ?>"><img src='./../photo/remove.png' width="30px" height="30px"></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class='total_price'>
            <p>Общая стоимость: <?php echo $total_price; ?> руб.</p>
            </div>
            <div class='checkout'>
            <a href="checkout.php">Оформить заказ</a>
            </div>
        <?php else: ?>
            <h3>Ваша корзина пока пуста, <?php
            echo $_SESSION['login'];
            ?></h3>
        <?php endif; ?>
    </div>
    </main>
    <?php
    include './../include/footer.php'
    ?>
</body>
</html>
