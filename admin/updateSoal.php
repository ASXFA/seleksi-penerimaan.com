<?php 
    include 'connect.php';
    
    $id_soal = $_POST['id_soal'];
    $kategori_soal = $_POST['kategori_soal'];
    $text_soal = $_POST['text_soal'];
    $text_a = $_POST['text_a']; 
    $text_b = $_POST['text_b']; 
    $text_c = $_POST['text_c']; 
    $text_d = $_POST['text_d']; 
    $text_e = $_POST['text_e']; 
    $text_benar = $_POST['text_benar']; 

    $query = mysqli_query($conn,"UPDATE soal_ujian SET kategori_soal='$kategori_soal', text_soal='$text_soal', text_a='$text_a', text_b='$text_b', text_c='$text_c', text_d='$text_d', text_e='$text_e', text_benar='$text_benar' WHERE id_soal='$id_soal'");

    if ($query) {
?>
    <script>
        alert('Data Berhasil di Update');
        window.location.href = "listSoal.php";
    </script>
<?php         
    }else{
?>
    <script>
        alert('Data Gagal di Update');
        window.location.href = "listSoal.php";
    </script> 
<?php          
    }
?>