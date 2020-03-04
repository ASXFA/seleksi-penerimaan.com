<?php 
    include 'connect.php';

    $kategoriSoal = $_POST['kategori_soal'];
    $text_soal = $_POST['text_soal'];
    $text_a = $_POST['text_a'];
    $text_b = $_POST['text_b'];
    $text_c = $_POST['text_c'];
    $text_d = $_POST['text_d'];
    $text_e = $_POST['text_e'];
    $text_benar = $_POST['text_benar'];

    $data = mysqli_query($conn,"INSERT INTO soal_ujian (id_soal,kategori_soal,text_soal,text_a,text_b,text_c,text_d,text_e,text_benar) VALUES (NULL,'$kategoriSoal','$text_soal','$text_a','$text_b','$text_c','$text_d','$text_e','$text_benar')");

    if ($data) {
        ?>
            <script>
                alert('Data Berhasil di Tambah');
                window.location.href = "listSoal.php";
            </script>
        <?php         
            }else{
        ?>
            <script>
                alert('Data Gagal di Tambah');
                window.location.href = "listSoal.php";
            </script> 
        <?php          
            }
        ?>