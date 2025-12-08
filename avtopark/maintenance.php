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

$parkname = $_SESSION['parkname'];
$car_id = isset($_GET['car_id']) ? intval($_GET['car_id']) : null;
$maintenance_records = [];

$query = "SELECT m.id, m.service_date, m.service_type, m.cost, m.notes, c.model 
          FROM maintenance m 
          JOIN cars c ON m.car_id = c.id 
          WHERE c.parkname = '$parkname'";

if ($car_id) {
    $query .= " AND m.car_id = $car_id";
}

$result = $mysql->query($query);

while ($row = $result->fetch_assoc()) {
    $maintenance_records[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обслуживание автомобилей</title>
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
                <li><a class="active" href="maintenance.php">Обслуживание</a></li>
            </ul>
        </nav>
        <h1 class="company_name"><font color="#2772e1">Smart</font><font color="#e6e6e6">Park</font></h1>
    </header>
    <main>
        <h2>Записи об обслуживании</h2>
        <?php if ($car_id): ?>
            <h3>Обслуживание для автомобиля: <?php echo htmlspecialchars($maintenance_records[0]['model'] ?? 'Неизвестно'); ?></h3>
        <?php endif; ?>
        <div class="action-buttons">
            <a href="add_maintenance.php<?php echo $car_id ? '?car_id=' . $car_id : ''; ?>" class="btn add-btn">Добавить запись</a>
        </div>
        <table class="maintenance-table">
            <thead>
                <tr>
                    <th>Модель автомобиля</th>
                    <th>Дата обслуживания</th>
                    <th>Тип обслуживания</th>
                    <th>Стоимость</th>
                    <th>Примечания</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($maintenance_records)): ?>
                    <tr><td colspan="5">Записей об обслуживании пока нет.</td></tr>
                <?php else: ?>
                    <?php foreach ($maintenance_records as $record): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($record['model']); ?></td>
                            <td><?php echo htmlspecialchars($record['service_date']); ?></td>
                            <td><?php echo htmlspecialchars($record['service_type']); ?></td>
                            <td><?php echo htmlspecialchars($record['cost']); ?> ₽</td>
                            <td><?php echo htmlspecialchars($record['notes']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </main>
</body>
</html>
