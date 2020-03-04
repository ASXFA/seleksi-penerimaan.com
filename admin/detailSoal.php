<?php 
    session_start();
    if ($_SESSION['akses'] != 'masuk') {
        header('Location:login.php');
    }

?>

<?php 
    include 'connect.php';
    $id = $_GET['id'];

    include 'layout/header.php'; 
    include 'layout/sider.php'; 
?>
<main style="font-size:12px;">
    <div class="container-fluid">
        <ol class="breadcrumb mt-3 mb-4">
            <li class="breadcrumb-item active">Dashboard / Soal / Detail</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">Soal</div>
            <table class="table">
                <thead class="thead-dark">
                    <th>#</th>
                    <th>Kategori Soal</th>
                    <th>Soal</th>
                    <th>Jawaban Benar</th>
                </thead>
                <tbody>
                    <?php 
                    $data = mysqli_query($conn,"SELECT * FROM soal_ujian WHERE id_soal='$id'");
                    while($row = mysqli_fetch_assoc($data)){ ?>
                    <tr>
                        <td><?php echo $row['id_soal']; ?></td>
                        <td><?php echo $row['kategori_soal']; ?></td>
                        <td width="60%"><?php echo $row['text_soal']; ?></td>
                        <td width="20%"><?php echo $row['text_benar']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="card mb-4">
            <div class="card-header">Pilihan Jawaban</div>
            <table class="table">
                <thead class="thead-dark text-center">
                    <th>Pilihan A</th>
                    <th>Pilihan B</th>
                    <th>Pilihan C</th>
                    <th>Pilihan D</th>
                    <th>Pilihan E</th>
                </thead>
                <tbody>
                    <?php 
                    $data = mysqli_query($conn,"SELECT * FROM soal_ujian WHERE id_soal='$id'");
                    while($row1 = mysqli_fetch_assoc($data)){ ?>
                    <tr>
                        <td width="20%"><?php echo $row1['text_a']; ?></td>
                        <td width="20%"><?php echo $row1['text_b']; ?></td>
                        <td width="20%"><?php echo $row1['text_c']; ?></td>
                        <td width="20%"><?php echo $row1['text_d']; ?></td>
                        <td width="20%"><?php echo $row1['text_e']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php include 'layout/footer.php'; ?>
