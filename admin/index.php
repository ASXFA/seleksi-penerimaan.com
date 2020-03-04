<?php 
    session_start();
    if ($_SESSION['akses'] != 'masuk') {
        header('Location:login.php');
    }

?>

<?php 
    include 'connect.php';
    $data = mysqli_query($conn,"SELECT COUNT(*) as total FROM pendaftaran ");
    $countPendaftar = mysqli_fetch_assoc($data);
    
    $data1 = mysqli_query($conn,"SELECT COUNT(*) as totals FROM soal_ujian ");
    $countSoal = mysqli_fetch_assoc($data1);

    include 'layout/header.php'; 
    include 'layout/sider.php'; 
?>
<main style="font-size:12px">
    <div class="container-fluid">
        <h2 class="mt-4 mb-4">Dashboard</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h5><i class="fa fa-user mr-5"></i> <?php echo $countPendaftar['total'] ?> <span class="ml-5">Pendaftar</h5></div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="card bg-warning text-white  mb-4">
                    <div class="card-body"><h5><i class="fa fa-edit mr-5"></i> <?php echo $countSoal['totals'] ?> <span class="ml-5">Soal Tersedia</h5></div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Data Pendaftaran</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Verifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                $query = mysqli_query($conn, "SELECT * FROM pendaftaran");
                                while($row=mysqli_fetch_assoc($query)){
                            ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row['nisn'] ?></td>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['tempat_lahir'] ?> , <?php echo $row['tanggal_lahir'] ?></td>
                                <td><?php echo $row['alamat'] ?></td>
                                <td width="15%" class="text-center"><h6>
                                    <?php 
                                        if ($row['verifikasi']=="PENDING") {
                                    ?>
                                        <a href="#" type="button" class="badge badge-info" data-toggle="modal" data-target="#modalEdit<?php echo $row['id_peserta'];?>"><?php echo $row['verifikasi']?></a>
                                    <?php 
                                        }else if($row['verifikasi']=="TERVERIFIKASI"){
                                    ?>
                                        <a href="#" type="button" class="badge badge-success" data-toggle="modal" data-target="#modalEdit<?php echo $row['id_peserta'];?>"><?php echo $row['verifikasi']?></a>
                                    <?php 
                                        }else if($row['verifikasi']=="GAGAL"){
                                    ?>
                                        <a href="#" type="button" class="badge badge-danger" data-toggle="modal" data-target="#modalEdit<?php echo $row['id_peserta'];?>"><?php echo $row['verifikasi']?></a>
                                    <?php } ?>
                                </h6></td>
                                <td width="15%" class="text-center"><h6>
                                    <?php 
                                        if ($row['status_seleksi']=="BELUM UJIAN") {
                                    ?>
                                        <a href="#" type="button" class="badge badge-info" data-toggle="modal" data-target="#modalEditStatus<?php echo $row['id_peserta'];?>"><?php echo $row['status_seleksi']?></a>
                                    <?php 
                                        }else if($row['status_seleksi']=="LULUS"){
                                    ?>
                                        <a href="#" type="button" class="badge badge-success" data-toggle="modal" data-target="#modalEditStatus<?php echo $row['id_peserta'];?>"><?php echo $row['status_seleksi']?></a>
                                    <?php 
                                        }else if($row['status_seleksi']=="TIDAK LULUS"){
                                    ?>
                                        <a href="#" type="button" class="badge badge-danger" data-toggle="modal" data-target="#modalEditStatus<?php echo $row['id_peserta'];?>"><?php echo $row['status_seleksi']?></a>
                                    <?php } ?>
                                </h6></td>
                            </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'layout/footer.php'; ?>
