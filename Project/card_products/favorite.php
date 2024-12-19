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

            if (!isset($_SESSION['favorite'])) {
                $_SESSION['favorite'] = [];
            }

            if (isset($_SESSION['favotite'][$id])) {
                $_SESSION['favorite'][$id]['quantity']++;
            } else {
                $_SESSION['favorite'][$id] = [
                    'name' => $product['name'],
                ];
            }

            if(isset($_SESSION['logged']) == true){
                header("Location: favorite.php");
                exit;
            }
            else{
                header('location: ./../reg/authriz.html');
            }
            break;

        case 'remove':
            $id = $_GET['id'];
            if (isset($_SESSION['favorite'][$id])) {
                unset($_SESSION['favorite'][$id]);
            }

            header('Location: favorite.php');
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Избранное</title>
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
                <h1>Это ваши избранные товары, <?php
                echo $_SESSION['login'];
                ?>!</h1>
            </div>
            </center>
    <div class="cart">
        <?php if (!empty($_SESSION['favorite'])): ?>
            <table>
                <thead>
                    <tr>
                        <th>Название</th>
                        <th>Действие</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['favorite'] as $id => $item): ?>
                        <tr>
                            <td><?php echo $item['name']; ?></td>
                            <td><a href="favorite.php?action=remove&id=<?php echo $id; ?>"><img src='./../photo/remove.png' width="30px" height="30px"></a>
                            <a href="cart.php?action=add&id=<?php echo $id; ?>">Добаить в корзину</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <h3>У вас ещё нет избранных товаров, <?php
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
