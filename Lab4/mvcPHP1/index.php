<?php
    require_once('config.php');
    require_once('dbconnect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Lab4 Part 1</title>
</head>

<body>
	<h1>Vi du ve mo hinh MVC</h1>
	
    <form action="controllers/itemscontroller.php" method="POST">
        <input type="number" name="id"> <input type="submit" value="Search">
    </form>
	
</body>
</html>