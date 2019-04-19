<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST["name"] && $_POST["description"]) {
        $name = $_POST["name"];
        $description = $_POST["description"];
        $db = new mysqli("localhost", "labuser4", "123456", "lab4_web", 8889);
        if ($mysqli->connect_errno) {
            exit("Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
        }
        $db->query("INSERT INTO items (name, description) VALUES ('$name', '$description');");
        header('Location: ../admin.php');
    }
}
?>


<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Панель администратора</title>
    <link rel="stylesheet" href="css/custom.css" >
</head>
<body>
<div class="container">
    <div class="brand"><font color = "#ffffcc">Панель администратора</font></div>

    <h3>Создание нового материала</h3>

    <form action="create.php" method="post">

            <div>
                <h4>Название</h4>
                <input name="name" required>
            </div>

            <div>
                <h4>Содержание</h4>
                <textarea name="description" required></textarea>
            </div>

        <button>
            <i>Опубликовать</i>
        </button>
    </form>
</div>
</body>
</html>