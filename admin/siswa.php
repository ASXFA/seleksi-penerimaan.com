<?php 
    session_start();
    if ($_SESSION['akses'] != 'masuk') {
        header('Location:login.php');
    }

?>

<?php 
    include 'connect.php';
    $data = mysqli_query($conn,"SELECT * FROM pendaftaran");

    include 'layout/header.php'; 
    include 'layout/sider.php'; 
?>
<main style="font-size:12px;">
    <div class="container-fluid">
        <ol class="breadcrumb mt-4 mb-4">
            <li class="breadcrumb-item active">Dashboard / Siswa</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Data Siswa</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($row = mysqli_fetch_assoc($data)){
                            ?>
                            <tr>
                                <td><?php echo $row['id_peserta']; ?></td>
                                <td><?php echo $row['nisn']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['tempat_lahir']; ?></td>
                                <td><?php echo $row['tanggal_lahir']; ?></td>
                                <td>
                                    <a href="detailSiswa.php?id=<?php echo $row['id_peserta'];?>" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="editSiswa.php?id=<?php echo $row['id_peserta'];?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="deleteSiswa.php?id=<?php echo $row['id_peserta'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash" onclick="return confirm('Yakin akan menghapus ? ')" ></i></a>
                                </td>
                            </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'layout/footer.php'; ?>
