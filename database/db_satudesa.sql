-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 17 Nov 2022 pada 21.23
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_satudesa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_akun` int(11) NOT NULL,
  `id_relasi` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('Admin','Desa','Rw','Penduduk') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `id_relasi`, `username`, `password`, `level`) VALUES
(1, 1, 'satudesa24', 'c22df9b49c142fa65590ec07f0492bac', 'admin'),
(54, 4, 'DESALINGGASIRNA', 'c22df9b49c142fa65590ec07f0492bac', 'desa'),
(58, 7, 'FAJARHIDAYATULOH', 'c22df9b49c142fa65590ec07f0492bac', 'penduduk'),
(59, 5, 'AJIDSOLEHUDIN', 'c22df9b49c142fa65590ec07f0492bac', 'penduduk'),
(64, 1, 'Cisompok', 'c22df9b49c142fa65590ec07f0492bac', 'rw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_arsip`
--

CREATE TABLE `tb_arsip` (
  `id_arsip_dokumen` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `id_jenis_dokumen` int(11) NOT NULL,
  `file_dokumen` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_desa`
--

CREATE TABLE `tb_desa` (
  `id_desa` int(11) NOT NULL,
  `logo_desa` longtext NOT NULL,
  `nama_desa` varchar(30) NOT NULL,
  `nama_kepala_desa` varchar(40) NOT NULL,
  `alamat_desa` longtext NOT NULL,
  `kecamatan_desa` varchar(50) NOT NULL,
  `kabupaten_desa` varchar(30) NOT NULL,
  `email_desa` varchar(40) NOT NULL,
  `telepon_desa` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_desa`
--

INSERT INTO `tb_desa` (`id_desa`, `logo_desa`, `nama_desa`, `nama_kepala_desa`, `alamat_desa`, `kecamatan_desa`, `kabupaten_desa`, `email_desa`, `telepon_desa`) VALUES
(4, 'Logo_Kab_Tasik1.png', 'DESA LINGGASIRNA', 'CECEP SUDRAJAT', 'Jalan Padakaria No. 03 Dusun Bojong Kode Pos 46465', 'KECAMATAN SARIWANGI', 'KABUPATEN TASIKMALAYA', 'desa.linggasirna@gmail.com', '6282128262881');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_dokumen`
--

CREATE TABLE `tb_jenis_dokumen` (
  `id_jenis` int(11) NOT NULL,
  `jenis_dokumen` varchar(70) NOT NULL,
  `persyaratan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jenis_dokumen`
--

INSERT INTO `tb_jenis_dokumen` (`id_jenis`, `jenis_dokumen`, `persyaratan`) VALUES
(4, 'SURAT KETERANGAN DOMISILI', 'Tidak Ada Persyaratan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `no_kk` varchar(20) DEFAULT NULL,
  `nama` longtext,
  `nik` varchar(20) DEFAULT NULL,
  `jenis_kelamin` enum('LAKI-LAKI','PEREMPUAN') DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` enum('ISLAM','KRISTEN','HINDU','BUDHA','LAINNYA') DEFAULT NULL,
  `pendidikan` enum('TIDAK / BELUM SEKOLAH','BELUM TAMAT SD / SEDERAJAT','TAMAT SD / SEDERAJAT','SLTP / SEDERAJAT','SLTA / SEDERAJAT','DIPLOMA IV / STRATA I','DIPLOMA I / II','AKADEMI/ DIPLOMA III / S. MUDA','STRATA II','STRATA III') DEFAULT NULL,
  `jenis_pekerjaan` varchar(50) DEFAULT NULL,
  `golongan_darah` enum('A+','A-','B+','B-','AB+','AB-','O+','O-') DEFAULT NULL,
  `status_perkawinan` enum('BELUM KAWIN','KAWIN','CERAI HIDUP','CERAI MATI') DEFAULT NULL,
  `tanggal_perkawinan` date DEFAULT NULL,
  `status_hubungan_dalam_keluarga` enum('KEPALA KELUARGA','ISTRI','ANAK') DEFAULT NULL,
  `kewarganegaraan` enum('WNI','WNA') DEFAULT NULL,
  `no_paspor` varchar(10) DEFAULT NULL,
  `no_kitap` varchar(10) DEFAULT NULL,
  `ayah` varchar(50) DEFAULT NULL,
  `ibu` varchar(50) DEFAULT NULL,
  `alamat` longtext,
  `rukun_tetangga` varchar(5) DEFAULT NULL,
  `rukun_warga` varchar(5) DEFAULT NULL,
  `id_desa` int(11) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kabupaten` varchar(50) DEFAULT NULL,
  `no_handphone_aktif` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id_penduduk`, `no_kk`, `nama`, `nik`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `jenis_pekerjaan`, `golongan_darah`, `status_perkawinan`, `tanggal_perkawinan`, `status_hubungan_dalam_keluarga`, `kewarganegaraan`, `no_paspor`, `no_kitap`, `ayah`, `ibu`, `alamat`, `rukun_tetangga`, `rukun_warga`, `id_desa`, `kecamatan`, `kabupaten`, `no_handphone_aktif`) VALUES
(5, '11111111111111111111', 'AJID SOLEHUDIN', '11111111111111111111', 'LAKI-LAKI', 'MAJALENGKA', '2000-09-13', 'ISLAM', 'DIPLOMA IV / STRATA I', 'MAHASISWA', 'B-', 'BELUM KAWIN', '0000-00-00', 'ANAK', 'WNI', 'W346ED73', '2424', 'NAMA AYAH', 'NAMA IBU', 'KP. BANTAR KALONG CISOMPOK', '01', '1', 4, 'KECAMATAN SARIWANGI', 'KABUPATEN TASIKMALAYA', '6281927164253'),
(6, '22222222222222222222', 'NURJAMAN', '22222222222222222222', 'LAKI-LAKI', 'TASIKMALAYA', '2001-09-24', 'ISLAM', 'DIPLOMA IV / STRATA I', 'MAHASISWA', 'O+', 'BELUM KAWIN', '0000-00-00', 'ANAK', 'WNI', 'W346ED24', '87652', 'LILI', 'EHA JULAEHA', 'KP. BANTAR KALONG RANDEGAN', '01', '1', 4, 'KECAMATAN SARIWANGI', 'KABUPATEN TASIKMALAYA', '62821282628812'),
(7, '33333333333333333333', 'FAJAR HIDAYATULOH', '33333333333333333333', 'LAKI-LAKI', 'TASIKMALAYA', '2004-03-14', 'ISLAM', 'DIPLOMA IV / STRATA I', 'MAHASISWA', 'B-', 'BELUM KAWIN', '0000-00-00', 'ANAK', 'WNI', 'W346ED32', '87634', 'NAMA AYAH', 'NAMA IBU', 'KP. BANTAR KALONG BOJONG', '02', '3', 4, 'KECAMATAN SARIWANGI', 'KABUPATEN TASIKMALAYA', '6281927164192'),
(8, '44444444444444444444', 'ABDUL HOLIK', '44444444444444444444', 'LAKI-LAKI', 'TASIKMALAYA', '2001-05-13', 'ISLAM', 'DIPLOMA IV / STRATA I', 'MAHASISWA', 'B-', 'BELUM KAWIN', '0000-00-00', 'ANAK', 'WNI', 'W346ED22', '87622', 'NAMA AYAH', 'NAMA IBU', 'KP. BANTAR KALONG SUKASARI', '03', '4', 4, 'KECAMATAN SARIWANGI', 'KABUPATEN TASIKMALAYA', '6281927164234'),
(9, '55555555555555555555', 'RUDI HERMAWAN', '55555555555555555555', 'LAKI-LAKI', 'TASIKMALAYA', '1998-09-12', 'ISLAM', 'DIPLOMA I / II', 'DOSEN', 'B+', 'BELUM KAWIN', '0000-00-00', 'ANAK', 'WNI', 'W346ED11', '87611', 'NAMA AYAH', 'NAMA IBU', 'KP. BANTAR KALONG CIKADU', '13', '5', 4, 'KECAMATAN SARIWANGI', 'KABUPATEN TASIKMALAYA', '6282128262123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengajuan`
--

CREATE TABLE `tb_pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `tgl_pengajuan` varchar(255) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `status_pengajuan` enum('Selesai','Dalam Proses') NOT NULL,
  `penyerahan_dokumen` enum('Ambil Sendiri','Diantar Dalam Desa','Diantar Keluar Desa') NOT NULL,
  `token_surat` varchar(40) NOT NULL,
  `keterangan` longtext NOT NULL,
  `alamat_pengiriman` longtext NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengajuan`
--

INSERT INTO `tb_pengajuan` (`id_pengajuan`, `tgl_pengajuan`, `id_penduduk`, `id_jenis`, `status_pengajuan`, `penyerahan_dokumen`, `token_surat`, `keterangan`, `alamat_pengiriman`, `biaya`) VALUES
(1, '16-11-2022 01:13:57', 5, 4, 'Selesai', 'Ambil Sendiri', 'TKSN1544', 'Estimasi Selesai Kapan?', 'KP. BANTAR KALONG CISOMPOK RT/RW 01/01 DESA LINGGASIRNA KECAMATAN SARIWANGI KABUPATEN TASIKMALAYA', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_persyaratan`
--

CREATE TABLE `tb_persyaratan` (
  `id_persyaratan` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `nama_persyaratan` varchar(255) NOT NULL,
  `file_persyaratan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rukun_warga`
--

CREATE TABLE `tb_rukun_warga` (
  `id_rukun_warga` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `identitas` varchar(20) NOT NULL,
  `no_rukun_warga` char(11) NOT NULL,
  `nama_ketua_rw` varchar(20) NOT NULL,
  `nip_nik` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rukun_warga`
--

INSERT INTO `tb_rukun_warga` (`id_rukun_warga`, `id_desa`, `identitas`, `no_rukun_warga`, `nama_ketua_rw`, `nip_nik`) VALUES
(1, 4, 'Cisompok', '01', 'Ketua RW 01', '123456'),
(2, 4, 'Randegan', '02', 'Ketua RW 02', '123456'),
(3, 4, 'Bojong', '03', 'Ketua RW 03', '123456'),
(4, 4, 'Sukasari', '04', 'Ketua RW 04', '123456'),
(5, 4, 'Cikadu', '05', 'Ketua RW 05', '123456'),
(9, 4, 'Linggasirna', '06', 'Nurjaman', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sdomisili`
--

CREATE TABLE `tb_sdomisili` (
  `id_surat` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `nomor_surat` varchar(40) NOT NULL,
  `token_surat` varchar(40) NOT NULL,
  `tanggal_surat` varchar(40) NOT NULL,
  `alamat` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sdomisili`
--

INSERT INTO `tb_sdomisili` (`id_surat`, `id_penduduk`, `nomor_surat`, `token_surat`, `tanggal_surat`, `alamat`) VALUES
(4, 5, '221/01/DESA/XI/2022', 'TKSN1544', 'Linggasirna, 15 November 2022', 'KP. BANTAR KALONG CISOMPOK 01/01 DESA LINGGASIRNA KECAMATAN SARIWANGI KABUPATEN TASIKMALAYA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sktm`
--

CREATE TABLE `tb_sktm` (
  `id_surat` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `nomor_surat` varchar(40) NOT NULL,
  `token_surat` varchar(40) NOT NULL,
  `tanggal_surat` varchar(40) NOT NULL,
  `no_id_dtks` varchar(30) NOT NULL,
  `penghasilan` varchar(10) NOT NULL,
  `nama_keperluan` varchar(30) NOT NULL,
  `tksk` varchar(30) NOT NULL,
  `fasilitator` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD KEY `id_relasi` (`id_relasi`);

--
-- Indeks untuk tabel `tb_arsip`
--
ALTER TABLE `tb_arsip`
  ADD PRIMARY KEY (`id_arsip_dokumen`),
  ADD KEY `id_penduduk` (`id_penduduk`),
  ADD KEY `id_jenis_dokumen` (`id_jenis_dokumen`);

--
-- Indeks untuk tabel `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `tb_jenis_dokumen`
--
ALTER TABLE `tb_jenis_dokumen`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id_penduduk`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indeks untuk tabel `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indeks untuk tabel `tb_persyaratan`
--
ALTER TABLE `tb_persyaratan`
  ADD PRIMARY KEY (`id_persyaratan`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indeks untuk tabel `tb_rukun_warga`
--
ALTER TABLE `tb_rukun_warga`
  ADD PRIMARY KEY (`id_rukun_warga`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indeks untuk tabel `tb_sdomisili`
--
ALTER TABLE `tb_sdomisili`
  ADD PRIMARY KEY (`id_surat`),
  ADD UNIQUE KEY `nomor_surat` (`nomor_surat`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indeks untuk tabel `tb_sktm`
--
ALTER TABLE `tb_sktm`
  ADD PRIMARY KEY (`id_surat`),
  ADD UNIQUE KEY `nomor_surat` (`nomor_surat`),
  ADD KEY `id_desa` (`id_desa`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `tb_arsip`
--
ALTER TABLE `tb_arsip`
  MODIFY `id_arsip_dokumen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis_dokumen`
--
ALTER TABLE `tb_jenis_dokumen`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_persyaratan`
--
ALTER TABLE `tb_persyaratan`
  MODIFY `id_persyaratan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_rukun_warga`
--
ALTER TABLE `tb_rukun_warga`
  MODIFY `id_rukun_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_sdomisili`
--
ALTER TABLE `tb_sdomisili`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_sktm`
--
ALTER TABLE `tb_sktm`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_arsip`
--
ALTER TABLE `tb_arsip`
  ADD CONSTRAINT `tb_arsip_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `tb_penduduk` (`id_penduduk`),
  ADD CONSTRAINT `tb_arsip_ibfk_3` FOREIGN KEY (`id_jenis_dokumen`) REFERENCES `tb_jenis_dokumen` (`id_jenis`);

--
-- Ketidakleluasaan untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD CONSTRAINT `tb_penduduk_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `tb_desa` (`id_desa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD CONSTRAINT `tb_pengajuan_ibfk_4` FOREIGN KEY (`id_jenis`) REFERENCES `tb_jenis_dokumen` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pengajuan_ibfk_5` FOREIGN KEY (`id_penduduk`) REFERENCES `tb_penduduk` (`id_penduduk`);

--
-- Ketidakleluasaan untuk tabel `tb_persyaratan`
--
ALTER TABLE `tb_persyaratan`
  ADD CONSTRAINT `tb_persyaratan_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `tb_penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_rukun_warga`
--
ALTER TABLE `tb_rukun_warga`
  ADD CONSTRAINT `tb_rukun_warga_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `tb_desa` (`id_desa`);

--
-- Ketidakleluasaan untuk tabel `tb_sdomisili`
--
ALTER TABLE `tb_sdomisili`
  ADD CONSTRAINT `tb_sdomisili_ibfk_2` FOREIGN KEY (`id_penduduk`) REFERENCES `tb_penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_sktm`
--
ALTER TABLE `tb_sktm`
  ADD CONSTRAINT `tb_sktm_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `tb_desa` (`id_desa`),
  ADD CONSTRAINT `tb_sktm_ibfk_2` FOREIGN KEY (`id_penduduk`) REFERENCES `tb_penduduk` (`id_penduduk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
