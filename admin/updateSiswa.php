<?php 
    include 'connect.php';

    // PROFIL SISWA
    $id_peserta = $_POST['id_peserta'];
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];

    // NILAI SISWA
    $nilai_ipa = $_POST['nilai_ipa'];
    $nilai_matematika = $_POST['nilai_matematika'];
    $nilai_bhs_indo = $_POST['nilai_bhs_indo'];
    $nilai_bhs_inggris = $_POST['nilai_bhs_inggris'];

    // ORTU SISWA
    $nama_ortu = $_POST['nama_ortu'];
    $pendidikan_ortu = $_POST['pendidikan_ortu'];
    $pekerjaan_ortu = $_POST['pekerjaan_ortu'];
    $penghasilan_ortu = $_POST['penghasilan_ortu'];
    $no_telp = $_POST['no_telp'];   

    $query = mysqli_query($conn,"UPDATE pendaftaran SET nisn='$nisn', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', nama_ortu='$nama_ortu', pendidikan_ortu='$pendidikan_ortu', pekerjaan_ortu='$pekerjaan_ortu', penghasilan_ortu='$penghasilan_ortu', no_telp='$no_telp', nilai_ipa='$nilai_ipa', nilai_matematika='$nilai_matematika', nilai_bhs_indo='$nilai_bhs_indo', nilai_bhs_inggris='$nilai_bhs_inggris' WHERE id_peserta='$id_peserta'");

    if ($query) {
?>
    <script>
        alert('Data Berhasil di Update');
        window.location.href = "siswa.php";
    </script>
<?php         
    }else{
?>
    <script>
        alert('Data Gagal di Update');
        window.location.href = "siswa.php";
    </script> 
<?php          
    }
?>