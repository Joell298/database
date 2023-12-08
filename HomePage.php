<?php
include 'Connection.php';

try{
    $db = new Database();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $db->insert($_POST['naam'], $_POST ['achternaam']);
        echo 'Succesfully added!';
    }
} catch (Exception $e) {
        echo "ERROR" . $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="naam">
        <input type="text" name="achternaam">
        <input type="submit">
    </form>
</body>
</html>