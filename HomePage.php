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

    <table>
        
      <tr>
        <th>StudentenID</th>
        <th>Naam</th>
        <th>Achternaam</th>
      </tr>
     
      <tr> <?php $db = new Database();
           $users = $db->select();
           foreach ($users as $user) {
        ?> 
           <td><?php echo $user['studentenID']; ?></td>
           <td><?php echo $user['naam']; ?></td>
           <td><?php echo $user['achternaam']; ?></td>
           </tr> <?php } ?>
      

      </tr>
    </table>


</body>
</html>