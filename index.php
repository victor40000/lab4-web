<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
    <link rel="stylesheet" href="css/custom.css" >
</head>
<body>
<div class="container">
    <div class="brand"><font color = "#ffffcc">Новости</font></div>
    <?php
    	$db = new mysqli("localhost", "labuser4", "123456", "lab4_web", 8889);
    	if ($mysqli->connect_errno) {
    		exit("Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
		}
		$res = $db->query("SELECT * FROM items");
		$res->data_seek(0);
		while ($row = $res->fetch_assoc()) {
			$name = $row['name'];
			$descr = $row['description'];
			$date = $row['createdwhen'];
        	$headerHeredoc = <<<HTML
	            <div>
	                <h3>$name</h3>
	                <p>$descr</p>
	                <p>$date</p>
	            </div>
HTML;
    		echo $headerHeredoc;
    	}
    ?>
</div>
</body>
</html>