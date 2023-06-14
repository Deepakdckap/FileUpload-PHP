<?php
require 'connection.php';
$con['db'] = (new Connection)->db;

$userName = $_POST['name'];
$userFile = $_FILES['files'];

if (!empty($userName) && !empty($userFile)) {
    $filePath = "uploads/".$_FILES['files']['name'];

    move_uploaded_file($_FILES['files']['tmp_name'],"$filePath");

    $insert = $con['db']->query("INSERT INTO uploadFiles(username,files) VALUES ('$userName','$filePath')");
    echo "<script>alert('uploaded successfully')</script>";
} else {
    echo "<script>alert('unable to upload')</script>";
}
header('location:/index.php');

































// old method // 
// require  'index.html';

// $userName = $_POST['name'];
// //  echo $userName;
//     $userFile = $_FILES['files'];

//     print_r($userFile);
//     $filePath = "uploads/".$_FILES['files']['name'];

//     move_uploaded_file($_FILES['files']['tmp_name'],"$filePath");
