<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST["id"]) {
        $id = $_POST["id"];
        $db = new mysqli("localhost", "labuser4", "123456", "lab4_web", 8889);
    	if ($mysqli->connect_errno) {
    		exit("Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
		}
        $db->query('DELETE FROM items WHERE id = ' . $id);
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
    <?php
    	$db = new mysqli("localhost", "labuser4", "123456", "lab4_web", 8889);
    	if ($mysqli->connect_errno) {
    		exit("Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
		}
		$res = $db->query("SELECT * FROM items");
		$res->data_seek(0);
		while ($row = $res->fetch_assoc()) {
			$id = $row['id'];
			$name = $row['name'];
        	$headerHeredoc = <<<HTML
	            <h4>$name</h4>
            	<form action="admin.php" method="post" >
                <input type="hidden" value="$id" name="id">
                <button>
                    <i>delete</i>
                </button>
            	</form>
HTML;
    		echo $headerHeredoc;
    	}
    ?>
</div>
</body>
</html>