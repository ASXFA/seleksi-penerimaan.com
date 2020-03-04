-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 04, 2020 at 03:04 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_seleksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin1', 'admin1'),
(2, 'admin2', 'lieuraingkp');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_seleksi`
--

CREATE TABLE `hasil_seleksi` (
  `id` int(3) NOT NULL,
  `id_peserta` int(3) NOT NULL,
  `benar` int(5) NOT NULL,
  `salah` int(5) NOT NULL,
  `kosong` int(5) NOT NULL,
  `score` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_seleksi`
--

INSERT INTO `hasil_seleksi` (`id`, `id_peserta`, `benar`, `salah`, `kosong`, `score`) VALUES
(2, 6, 0, 5, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_peserta` int(3) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `nama_ortu` text NOT NULL,
  `pendidikan_ortu` enum('Pilih','Tidak Sekolah','TK','SD','SMP / MTS','SMA / SMK / MA','Diploma','S1','S2','S3','Lain Lain') NOT NULL,
  `pekerjaan_ortu` enum('Pilih','Buruh','Tani','Wiraswasta','PNS','Polri/TNI','Perangkat Desa','Nelayan','Lainnya') NOT NULL,
  `penghasilan_ortu` enum('Pilih','Dibawah Rp.500.000','Rp.500.000 ~ Rp.1.000.000','Rp.1.000.000 ~ Rp.3.000.000','Rp.3.000.000 ~ Rp.5.000.000','Rp.5.000.000 ~ Rp.10.000.000','Rp.10.000.000 Ke atas') NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `nilai_ipa` float NOT NULL,
  `nilai_matematika` float NOT NULL,
  `nilai_bhs_indo` float NOT NULL,
  `nilai_bhs_inggris` float NOT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `verifikasi` varchar(255) DEFAULT 'PENDING',
  `status_seleksi` varchar(255) NOT NULL DEFAULT 'BELUM UJIAN',
  `id_admin` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_peserta`, `nisn`, `password`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `nama_ortu`, `pendidikan_ortu`, `pekerjaan_ortu`, `penghasilan_ortu`, `no_telp`, `nilai_ipa`, `nilai_matematika`, `nilai_bhs_indo`, `nilai_bhs_inggris`, `bukti_pembayaran`, `verifikasi`, `status_seleksi`, `id_admin`) VALUES
(6, '9993367832', 'tukang bajigur', 'Tatang Sutejo Widjojo', 'Majapahitsadasd', '1997-11-04', 'Jalan Kertamaja no.80, Kec Batu Jatoh, Kab Manggarukan', 'Bonang Pastela', 'S3', 'Buruh', 'Rp.1.000.000 ~ Rp.3.000.000', '087723678945', 80.5, 90.3, 20.5, 45, 'kontak.png', 'TERVERIFIKASI', 'TIDAK LULUS', NULL),
(7, '14141414141', 'adalah', 'aku', 'bdg', '2009-01-02', 'jalan', 'mamah', 'SMA / SMK / MA', 'PNS', 'Rp.5.000.000 ~ Rp.10.000.000', '0909098898', 70, 65, 75, 90, 'kontak (1).png', 'PENDING', 'BELUM UJIAN', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `soal_ujian`
--

CREATE TABLE `soal_ujian` (
  `id_soal` int(3) NOT NULL,
  `kategori_soal` enum('Ipa','Matematika','Bhs Indonesia','Bhs Inggris') NOT NULL,
  `text_soal` text NOT NULL,
  `text_a` text NOT NULL,
  `text_b` text NOT NULL,
  `text_c` text NOT NULL,
  `text_d` text NOT NULL,
  `text_e` text NOT NULL,
  `text_benar` text NOT NULL,
  `id_admin` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal_ujian`
--

INSERT INTO `soal_ujian` (`id_soal`, `kategori_soal`, `text_soal`, `text_a`, `text_b`, `text_c`, `text_d`, `text_e`, `text_benar`, `id_admin`) VALUES
(1, 'Ipa', 'Tiga gaya masing-masing 60 N ke selata n,40 N ke utara dan 80 ke selatan. Ketiga gaya bekerja pada sebuah benda. Jika usaha bersama ketiga gaya terhadap benda adalah sebesar 720 J, jarak perpindahan benda dari posisi awaI adalah . . .', '4 m kearahselatan', '7,2 m kearahselatan', '1 m kearahutara', '9 m kebrahselatan', '19 m kebrahselatan', '9 m kebrahselatan', 1),
(2, 'Ipa', 'Gelombang merambat pada tali. Dalam waktu 15 sekon terbentuk 30 bukit dan 30 Iembah gelombang. Jika jarak antara dua dasar gelombang terdekat ketiga 60 cm, cepat rambat gelombang tersebut ialah . . .', '150 cm/s', '120 cm/s\r\n', '90 cm/s\r\n', '60 cm/s', '10 cm/s', '60 cm/s', 1),
(3, 'Matematika', 'Hasil dari -4 + 8 : (-2) x 2 + 5 -2 adalah...', '-9\r\n', '-7', '7', '9', '100', '7', 1),
(4, 'Bhs Indonesia', 'Bacalah teks berikut dengan saksama untuk menjawab pertanyaan berikut!\r\n\r\nSemua manusia terlahir sebagai pembelajar. Akan tetapi, proses belajar yang dilakukan sedari kecil tanpa sadar sering dihalangi atau dibatasi oleh orang lain, terutama oleh orang tua, contohnya pada usia setahun, bayi acapkali memasukkan benda ke dalam mulutnya. Orang tua biasanya akan melarang atau memarahi anaknya ketika melakukan hal itu. Padahal, dalam tahap ini anak membutuhkan stimulasi yang tepat agar proses belajarnya berjalan dengan baik. Sama halnya ketika anak belajar berjalan. Orang tua tidak membiarkan anaknya merasakan jatuh dan bangun dalam proses belajar karena mengkhawatirkan keselamatan dan kesehatan anaknya.\r\n\r\nKetika anak mulai bisa berbicara, orang tua acapkali kesulitan menjawab pertanyaan yang diajukan anaknya. Hal ini mungkin terjadi karena kelelahan mengasuh anak atau kejemuan terhadap pertanyaan yang diajukan berulang kali. Tambahan pula, pada usia ini anak lebih sering mengeksplorasi benda-benda di sekitarnya, terutama benda yang baru dilihatnya. Akan tetapi, reaksi orang tua adalah menjauhkan benda-benda yang dianggap dapat membahayakan keselamatan anak mereka. Oleh karena itu, dibutuhkan penjelasan yang tepat mengenai benda yang berbahaya atau tidak agar anak tidak lagi penasaran dan mengabaikan larangan dari orang tuanya.\r\n\r\n\r\nKata stimulasi pada paragraf pertama bermakna….\r\n\r\n', 'Sesuatu yang menjadi cambuk bagi peningkatan prestasi atau semangat belajar', 'Suatu dorongan atau rangsangan yang diberikan dari luar', 'Keinginan untuk mencari tahu sesuatu yang menarik perhatian\r\n', 'Kemampuan untuk mempelajari sesuatu dengan baik', 'apapun', 'Kemampuan untuk mempelajari sesuatu dengan baik', 1),
(5, 'Bhs Inggris', 'On Wednesday my student and I went to Yogyakarta. We stayed at Lestari Hotel which is net far from Malioboro.\r\nOn Thursday we visited the temples in Prambanan. There are three big temples, the Brahmana, Syiwa and Wisnu temples. They are really amazing. We visited only Brahmana and Syiwa temples, because Wisnu temples is being renovated.\r\nOn Friday morning we went to Yogya Kraton. We Spend about two hours there. After that we went to Borobudur temple. We were lucky because we were led by a smart and friendly guide. We arrived there at 3 pm. In the evening we left for Jakarta by wisata bus.\r\n\r\nThe text above mainly discusses about . . . .', 'the writer’s trip to Yogyakarta', 'the writer’s first visit to Prambanan', 'the writer’s experience at Yogya Kraton', 'the writer’s impression about Borobudur', 'good', 'good', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_peserta`),
  ADD KEY `id_peserta` (`id_peserta`,`id_admin`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_peserta_2` (`id_peserta`);

--
-- Indexes for table `soal_ujian`
--
ALTER TABLE `soal_ujian`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `id_soal` (`id_admin`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_peserta` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `soal_ujian`
--
ALTER TABLE `soal_ujian`
  MODIFY `id_soal` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `soal_ujian`
--
ALTER TABLE `soal_ujian`
  ADD CONSTRAINT `soal_ujian_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
