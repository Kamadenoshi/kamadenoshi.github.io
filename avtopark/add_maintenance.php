<?php
session_start();

$mysql = new mysqli("localhost", "root", "", "smartpark");
$mysql->query("SET NAMES 'utf8'");

if ($mysql->connect_error) {
    echo "Ошибка подключения: " . $mysql->connect_error;
    exit();
}

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $car_id = $_POST['car_id'];
    $service_date = $_POST['service_date'];
    $service_type = $_POST['service_type'];
    $cost = $_POST['cost'];
    $notes = $_POST['notes'];

    $stmt = $mysql->prepare("INSERT INTO maintenance (car_id, service_date, service_type, cost, notes) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issds", $car_id, $service_date, $service_type, $cost, $notes);
    $stmt->execute();
    header("Location: maintenance.php?car_id=$car_id");
    exit();
}

$cars = [];
$result = $mysql->query("SELECT id, model FROM cars WHERE parkname = '{$_SESSION['parkname']}'");
while ($row = $result->fetch_assoc()) {
    $cars[] = $row;
}

$selected_car_id = isset($_GET['car_id']) ? intval($_GET['car_id']) : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить обслуживание</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Alegreya+SC&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/maintenance.css">
    
</head>
<body>
    <header>
        <nav class="main-nav">
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="cars.php">Мой автопарк</a></li>
                <li><a href="maintenance.php">Обслуживание</a></li>
            </ul>
        </nav>
        <h1 class="company_name"><font color="#2772e1">Smart</font><font color="#e6e6e6">Park</font></h1>
    </header>
    <main>
        <form action="add_maintenance.php" method="POST" class="form">
            <h2>Добавить обслуживание</h2>
            <label for="car_id" class="label">Выберите автомобиль</label>
            <select id="car_id" name="car_id" class="input" required>
                <?php foreach ($cars as $car): ?>
                    <option value="<?php echo $car['id']; ?>" <?php echo $car['id'] == $selected_car_id ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($car['model']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <label for="service_date" class="label">Дата</label>
            <input type="date" id="service_date" name="service_date" class="input" required>
            <label for="service_type" class="label">Тип обслуживания</label>
            <select id="service_type" name="service_type" class="input" required>
                <option value="Техническое обслуживание">Техническое обслуживание</option>
                <option value="Косметическое обслуживание">Косметическое обслуживание</option>
                <option value="Профилактическое обслуживание">Профилактическое обслуживание</option>
                <option value="Ремонт">Ремонт</option>
                <option value="Прочее">Прочее</option>        
            </select>   
            <label for="cost" class="label">Стоимость</label>
            <input type="number" step="0.01" id="cost" name="cost" class="input" required>
            <label for="notes" class="label">Примечания</label>
            <textarea id="notes" name="notes" class="input"></textarea>
            <input type="submit" value="Добавить запись" class="submit">
        </form>
    </main>
</body>
</html>
