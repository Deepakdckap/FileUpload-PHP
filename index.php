
<?php

require 'connection.php';

$con["db"] = (new Connection())->db;

   $fetch = $con["db"]->query("SELECT * FROM uploadFiles");
   $datas = $fetch->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Details</title>
</head>
<body>
<form action="/insert.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name" required placeholder="please enter your name" style="padding: 10px; margin-left: 500px; margin-top: 50px;"> 

    <input type="file" name="files" required> <br>
    <input type="submit" name="submit" style="margin-left: 650px; margin-top: 20px;">
</form>
<table>
    <tr>
        <?php foreach($datas as $values) : ?>
            <td><?php echo $values->username ?></td>
            <td><img src =" <?php echo $values->files ?>" alt="fake" width ="300px" height="150px" ></td>
        <?php endforeach; ?>
    </tr>
</table>
</body>
</html>



  

