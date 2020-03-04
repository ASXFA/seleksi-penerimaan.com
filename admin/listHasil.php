<?php 
    session_start();
    if ($_SESSION['akses'] != 'masuk') {
        header('Location:login.php');
    }

?>

<?php 
    include 'connect.php';
    $data = mysqli_query($conn,"SELECT * FROM hasil_seleksi");
    $datas = mysqli_query($conn,"SELECT * FROM pendaftaran");

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
                                <th>Nama Peserta</th>
                                <th>NISN Peserta</th>
                                <th>Status Seleksi</th>
                                <th>Jumlah Jawaban Benar</th>
                                <th>Jumlah Jawaban Salah</th>
                                <th>Jumlah Jawaban Kosong</th>
                                <th>Score</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($row = mysqli_fetch_assoc($data)){
                            ?>
                            <tr>
                                <td><?php echo $row['id_peserta']; ?></td>
                                <?php 
                                    while ($rows = mysqli_fetch_assoc($datas)) {
                                        if ($rows['id_peserta']==$row['id_peserta']) {
                                ?>
                                        <td><?php echo $rows['nisn']; ?></td>
                                        <td><?php echo $rows['nama']; ?></td>
                                        <td width="15%" class="text-center"><h6>
                                            <?php 
                                                if ($rows['status_seleksi']=="BELUM UJIAN") {
                                            ?>
                                                <a href="#" type="button" class="badge badge-info" data-toggle="modal" data-target="#modalEditStatus<?php echo $rows['id_peserta'];?>"><?php echo $rows['status_seleksi']?></a>
                                            <?php 
                                                }else if($rows['status_seleksi']=="LULUS"){
                                            ?>
                                                <a href="#" type="button" class="badge badge-success" data-toggle="modal" data-target="#modalEditStatus<?php echo $rows['id_peserta'];?>"><?php echo $rows['status_seleksi']?></a>
                                            <?php 
                                                }else if($rows['status_seleksi']=="TIDAK LULUS"){
                                            ?>
                                                <a href="#" type="button" class="badge badge-danger" data-toggle="modal" data-target="#modalEditStatus<?php echo $rows['id_peserta'];?>"><?php echo $rows['status_seleksi']?></a>
                                            <?php } ?>
                                        </h6></td>
                                        <div class="modal fade" id="modalEditStatus<?php echo $row['id_peserta'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5>Update Status Seleksi</h5>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php 
                                                        include 'connect.php';
                                                        $id = $row['id_peserta'];
                                                        $query = mysqli_query($conn,"SELECT * FROM pendaftaran WHERE id_peserta='$id'");
                                                        while($rows=mysqli_fetch_assoc($query)){
                                                    ?>
                                                    <div class="form-group">
                                                        <h5>Status Terkini : <span><?php echo $rows['status_seleksi'] ?></span></h5>   
                                                    </div>
                                                    <a href="updateSeleksi.php?id=<?php echo $rows['id_peserta'] ?>&status=LULUS" class="btn btn-success mb-4"><i class="fa fa-check"></i> SET LULUS</a>
                                                    <a href="updateSeleksi.php?id=<?php echo $rows['id_peserta'] ?>&status=BELUM UJIAN" class="btn btn-info mb-4"><i class="fa fa-spinner"></i> SET BELUM UJIAN</a>
                                                    <a href="updateSeleksi.php?id=<?php echo $rows['id_peserta'] ?>&status=TIDAK LULUS" class="btn btn-danger mb-4"><i class="fa fa-times"></i> SET TIDAK LULUS</a>
                                                        <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php 
                                        }
                                    }
                                ?>
                                <td><?php echo $row['benar']; ?></td>
                                <td><?php echo $row['salah']; ?></td>
                                <td><?php echo $row['kosong']; ?></td>
                                <td><?php echo $row['score']; ?> / <strong>100</strong></td>
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
