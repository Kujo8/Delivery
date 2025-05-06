<?php
include('includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $apartment_number = $_POST['apartment_number'];

    $stmt = $conn->prepare("INSERT INTO users (name, address, apartment_number) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $address, $apartment_number);

    if ($stmt->execute()) {
        echo "Ваш заказ принят.";
    } else {
        echo "Ошибка: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Данные не получены.";
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main2.css">
    <title>Интерфейс заказа</title>

</head>
<body>
    <div class="container">
        <div class="thank-you">Спасибо<br>Номер вашего заказа</div>
        <div class="order-number" id="orderNumber">Загрузка...</div>
        <a href="#" class="button-secondary">Показать чек</a>
        <a href="index.php" class="button">Перейти на главную</a>
    </div>

    <script src="js/random.js"></script>
</body>
</html>
