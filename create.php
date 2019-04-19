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