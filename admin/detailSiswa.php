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
            <li class="breadcrumb-item active">Dashboard / Siswa / Detail</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">Profil Siswa</div>
            <table class="table">
                <thead class="thead-dark">
                    <th>#</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tgl Lahir</th>
                    <th>Alamat</th>
                    <th>Status Pembayaran</th>
                    <th>Status Seleksi</th>
                </thead>
                <tbody>
                    <?php 
                    $data = mysqli_query($conn,"SELECT * FROM pendaftaran WHERE id_peserta='$id'");
                    while($row = mysqli_fetch_assoc($data)){ ?>
                    <tr>
                        <td><?php echo $row['id_peserta']; ?></td>
                        <td><?php echo $row['nisn']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['tempat_lahir']; ?></td>
                        <td><?php echo $row['tanggal_lahir']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
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
                    <div class="modal fade" id="modalEdit<?php echo $row['id_peserta'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5>Update Status Daftar</h5>
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
                                        <h5>Status Terkini : <span><?php echo $row['verifikasi'] ?></span></h5>   
                                    </div>
                                    <a href="updateVerifikasi.php?id=<?php echo $row['id_peserta'] ?>&status=TERVERIFIKASI" class="btn btn-success mb-4"><i class="fa fa-check"></i> SET TERVERIFIKASI</a>
                                    <a href="updateVerifikasi.php?id=<?php echo $row['id_peserta'] ?>&status=PENDING" class="btn btn-info mb-4"><i class="fa fa-spinner"></i> SET PENDING</a>
                                    <a href="updateVerifikasi.php?id=<?php echo $row['id_peserta'] ?>&status=GAGAL" class="btn btn-danger mb-4"><i class="fa fa-times"></i> SET GAGAL</a>
                                        <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <h5>Status Terkini : <span><?php echo $row['status_seleksi'] ?></span></h5>   
                                    </div>
                                    <a href="updateSeleksi.php?id=<?php echo $row['id_peserta'] ?>&status=LULUS" class="btn btn-success mb-4"><i class="fa fa-check"></i> SET LULUS</a>
                                    <a href="updateSeleksi.php?id=<?php echo $row['id_peserta'] ?>&status=BELUM UJIAN" class="btn btn-info mb-4"><i class="fa fa-spinner"></i> SET BELUM UJIAN</a>
                                    <a href="updateSeleksi.php?id=<?php echo $row['id_peserta'] ?>&status=TIDAK LULUS" class="btn btn-danger mb-4"><i class="fa fa-times"></i> SET TIDAK LULUS</a>
                                        <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="card mb-4">
            <div class="card-header">Nilai Siswa</div>
            <table class="table text-center">
                <thead class="thead-dark">
                    <th>IPA</th>
                    <th>Matematika</th>
                    <th>Bahasa Indonesia</th>
                    <th>Bahasa Inggris</th>
                </thead>
                <tbody>
                    <?php 
                    $data = mysqli_query($conn,"SELECT * FROM pendaftaran WHERE id_peserta='$id'");
                    while($row1 = mysqli_fetch_assoc($data)){ ?>
                    <tr>
                        <td><?php echo $row1['nilai_ipa']; ?></td>
                        <td><?php echo $row1['nilai_matematika']; ?></td>
                        <td><?php echo $row1['nilai_bhs_indo']; ?></td>
                        <td><?php echo $row1['nilai_bhs_inggris']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="card mb-4">
            <div class="card-header">Orang Tua Siswa</div>
            <table class="table">
                <thead class="thead-dark">
                    <th>Nama</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Penghasilan</th>
                    <th>Telpon</th>
                </thead>
                <tbody>
                    <?php 
                    $data = mysqli_query($conn,"SELECT * FROM pendaftaran WHERE id_peserta='$id'");
                    while($row1 = mysqli_fetch_assoc($data)){ ?>
                    <tr>
                        <td><?php echo $row1['nama_ortu']; ?></td>
                        <td><?php echo $row1['pendidikan_ortu']; ?></td>
                        <td><?php echo $row1['pekerjaan_ortu']; ?></td>
                        <td><?php echo $row1['penghasilan_ortu']; ?></td>
                        <td><?php echo $row1['no_telp']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card mb-4">
            <div class="card-header">Foto Bukti Pembayaran</div>
            <?php if ($row1['bukti_pembayaran']==NULL) {
                echo "<div class='card-body text-center'> Foto Bukti pembayaran belum ada </div>";
            }else{ ?>
            <img src="../file/<?php echo $row1['bukti_pembayaran'] ?>" alt="bukti_pembayaran" width="20%" class="img-thumbnail mx-auto m-3">
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</main>
<?php include 'layout/footer.php'; ?>
