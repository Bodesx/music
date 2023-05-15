<?php require "../sessionstart.php"?>


<?php
require '../header.php';
?>

<?php
$id = $_GET['id'];
$delete = mysqli_query($connect, "DELETE FROM audios WHERE id = '$id'");

if($delete){
    header("Location: ../account.php");
}
?>