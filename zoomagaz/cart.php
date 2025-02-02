<?php
session_start();

$mysql = new mysqli("localhost", "root", "", "zoomagaz");
$mysql->query("SET NAMES 'utf8'");

if ($mysql->connect_error) {
  echo "Error: " . $mysql->connect_error;
  exit();
}

?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Друг в доме</title>
    <link rel="stylesheet" href="styles/cart.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="shop.php">Каталог товаров</a></li>
          <li><a href="cart.php">Корзина</a></li>
          <div class="logo">
          <a href="index.php"><img src="images/logo.svg" alt="logo" /></a>
          </div>
          <li><a href="index.php#about">О нас</a></li>
          <?php if (isset($_SESSION['login'])) {
            echo '<li><a href="logout.php">Выйти</a></li>';
          }
          ?>
          <?php if (!isset($_SESSION['login'])) {
            echo '<li><a href="login.php">Войти</a></li>';
          }
          ?>
        </ul>
      </nav>
    </header>
    <main>
      
    <h1>Ваша корзина</h1>

  <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])): ?>
    <table>
      <thead>
        <tr>
          <th>Название товара</th>
          <th>Категория</th>
          <th>Цена за шт.</th>
          <th>Количество</th>
          <th>Общая стоимость</th>
          <th class="remove"></th>
        </tr>
      </thead>
      <tbody>
        <?php
          $totalSum = 0;
          foreach ($_SESSION['cart'] as $productName => $item):
              $itemTotal = $item['price'] * $item['quantity'];
              $totalSum += $itemTotal;
        ?>
          <tr>
            <td><?php echo htmlspecialchars($productName); ?></td>
            <td><?php echo htmlspecialchars($item['category']); ?></td>
            <td><?php echo htmlspecialchars($item['price']); ?>₽</td>
            <td><?php echo htmlspecialchars($item['quantity']); ?></td>
            <td><?php echo $itemTotal; ?>₽</td>
            <td class="remove">
              <!-- Форма для удаления товара из корзины -->
              <form action="removeFromCart.php" method="post">
                <input type="hidden" name="productName" value="<?php echo htmlspecialchars($productName); ?>">
                <button type="submit" class="button">Удалить</button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <p><strong>Итоговая сумма: <?php echo $totalSum; ?>₽</strong></p>
    <div class="btns">
      <a href="index.php" class="button" style="background-color: #d9a897;">Вернуться к покупкам</a>
    <form action="order.php" method="post" style="display: inline;">
      <button type="submit" class="button" style="background-color: #d9a897; cursor: pointer;">Оформить заказ</button>
    </form>
    </div>
    
  <?php else: ?>
    <p>Ваша корзина пуста.</p>
    <a href="shop.php" class="button" style="background-color: #d9a897;">Вернуться к покупкам</a>
  <?php endif; ?>
  
    </main>
  </body>
</html>