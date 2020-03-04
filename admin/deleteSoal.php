<?php 
    include 'connect.php';
    $id = $_GET['id'];

    mysqli_query($conn,"DELETE FROM soal_ujian WHERE id_soal='$id'");
    header('Location: listSoal.php');

?>