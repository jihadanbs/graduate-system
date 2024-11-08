/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 50740 (5.7.40)
 Source Host           : localhost:3306
 Source Schema         : db-graduate-ci4

 Target Server Type    : MySQL
 Target Server Version : 50740 (5.7.40)
 File Encoding         : 65001

 Date: 20/05/2023 22:58:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_dokumen
-- ----------------------------
DROP TABLE IF EXISTS `tbl_dokumen`;
CREATE TABLE `tbl_dokumen`  (
  `id_dokumen` int(11) NOT NULL AUTO_INCREMENT,
  `npm` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_persyaratan` int(11) NULL DEFAULT NULL,
  `file_dokumen` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_dokumen`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_dokumen
-- ----------------------------
INSERT INTO `tbl_dokumen` VALUES (2, '20220331', 3, '1683739454_dc448fd2a6b7a70f9d66.pdf');
INSERT INTO `tbl_dokumen` VALUES (3, '20220331', 2, '1683740055_94df44b397456f035a47.pdf');
INSERT INTO `tbl_dokumen` VALUES (4, '20220331', 6, '1683811847_97082bd2b85d2875790f.pdf');

-- ----------------------------
-- Table structure for tbl_dosen
-- ----------------------------
DROP TABLE IF EXISTS `tbl_dosen`;
CREATE TABLE `tbl_dosen`  (
  `id_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `nidn` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_dosen` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_dosen`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_dosen
-- ----------------------------
INSERT INTO `tbl_dosen` VALUES (1, '0118293802', 'Dosen A', '1234');
INSERT INTO `tbl_dosen` VALUES (2, '0392819203', 'Dosen B', '1234');
INSERT INTO `tbl_dosen` VALUES (4, '0118039301', 'Dosen C', '0118039301');

-- ----------------------------
-- Table structure for tbl_mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `tbl_mahasiswa`;
CREATE TABLE `tbl_mahasiswa`  (
  `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT,
  `npm` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nik` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_mahasiswa` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `jenis_kelamin` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `agama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_prodi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenjang` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_wisuda` date NULL DEFAULT NULL,
  `judul_skripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `ipk` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `total_sks` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_hp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_telpon` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_dokumen` int(1) NULL DEFAULT NULL,
  `status_pendaftaran` int(1) NULL DEFAULT NULL,
  `pembimbing_ilmu` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pembimbing_agama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_lulus` date NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ctt` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kode_pos` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_ayah` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_ibu` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat_ortu` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telpon_ortu` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `penguji_murni` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ketua_komisi_penguji` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_ujian` date NULL DEFAULT NULL,
  `jam_ujian` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hasil_ujian_huruf` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hasil_ujian_angka` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_mahasiswa`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 65 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_mahasiswa
-- ----------------------------
INSERT INTO `tbl_mahasiswa` VALUES (1, '20220331', '11111111111111', 'ANANTI FAJAR MENTARI M', 'Padang', '2023-05-10', 'P', 'Islam', '2', 'Strata 1', '2023-06-03', 'Analisis Sentimen pada Data Media Sosial menggunakan Metode Natural Language Processing', '3.58', '146', 'Jl. Imam Bonjol No. 11', 'ananti@gmail.comc', '08522356652', '1683812059_a1c70f99dc206683403f.jpg', '08522356652', 0, 1, 'Dosen A', 'Dosen C', '2023-01-01', '20220331', 'dokumen belum lengkap harap lengkapi Lagi Dokumen dan kirim kembali Pendaftaran', NULL, 'Ayah', 'Ibu', 'Jl. Imam Bonjol No. 11', '08228392', 'Penguji Murni', 'Ketua Komisi Penguji', '2023-05-19', '13:00', 'B', '3.02', 'Ruang Rapat Dosen FTI');
INSERT INTO `tbl_mahasiswa` VALUES (2, '20220411', NULL, 'ANGGI AULIA', NULL, NULL, 'L', NULL, '1', NULL, '2023-06-03', 'Pengembangan Sistem Pendeteksi Intrusi pada Jaringan Komputer Menggunakan Algoritma Machine Learning', '3.17', '150', NULL, NULL, NULL, 'foto.jpg', NULL, 1, 1, 'Dosen B', 'Dosen C', NULL, '20220411', NULL, NULL, NULL, NULL, NULL, NULL, 'asd', 'asd', '2023-05-19', '20:12', 'A', '3.5', 'Ruang Rapat Dosen FTI');
INSERT INTO `tbl_mahasiswa` VALUES (3, '20220175', NULL, 'ARINI', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Perancangan Sistem Informasi Geografis untuk Pemetaan Bencana Alam', '3.82', '160', NULL, NULL, NULL, 'foto.jpg', NULL, 1, 1, 'Dosen A', 'Dosen B', NULL, '20220175', NULL, NULL, NULL, NULL, NULL, NULL, 'asdasd', 'asdasd', '2023-05-13', '23:16', 'A', '4', NULL);
INSERT INTO `tbl_mahasiswa` VALUES (4, '20220027', NULL, 'ASIH ANDRIANI', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Pengenalan Pola Wajah dengan Pendekatan Deep Learning', '3.6', '148', NULL, NULL, NULL, 'foto.jpg', NULL, 1, 1, NULL, NULL, NULL, '20220027', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (5, '20220038', NULL, 'BELLA CANTIKA SINAGA', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Pengembangan Aplikasi Mobile untuk Pelacakan Aktivitas Fisik Menggunakan Sensor Smartphone', '3.01', '155', NULL, NULL, NULL, 'foto.jpg', NULL, 1, 1, NULL, NULL, NULL, '20220038', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (6, '20220427', NULL, 'DICKY DIRJA PRIATNA', NULL, NULL, 'L', NULL, '1', NULL, '2023-06-03', 'Analisis Big Data untuk Prediksi Perilaku Konsumen dalam E-commerce', '3.74', '157', NULL, NULL, NULL, 'foto.jpg', NULL, 1, 1, NULL, NULL, NULL, '20220427', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (7, '20220270', NULL, 'DINA NUR HASANA', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Perancangan dan Implementasi Sistem Pakar dalam Diagnosis Penyakit Menggunakan Logika Fuzzy', '3.29', '144', NULL, NULL, NULL, 'foto.jpg', NULL, 2, 2, NULL, NULL, NULL, '20220270', 'asdasdasdasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (8, '20220259', NULL, 'ELFINA SARI', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Penerapan Teknologi Blockchain dalam Sistem Manajemen Keamanan Data', '3.95', '150', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 1, NULL, NULL, NULL, '20220259', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (9, '20220042', NULL, 'ELGA SHIMA AFRIANI', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Studi Perbandingan Kinerja Algoritma Machine Learning dalam Klasifikasi Data', '3.41', '160', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220042', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (10, '20220043', NULL, 'ESPI SHIMA AFRIANI', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Pengembangan Sistem Rekomendasi Film Berbasis Filosofi Algoritma Genetika', '3.1', '148', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220043', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (11, '20220200', NULL, 'HERLINA CHANDRA', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Analisis dan Implementasi Algoritma Cryptocurrency pada Platform Perdagangan Digital', '3.92', '155', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (12, '20220369', NULL, 'IRMA ELIZA ANANDA MARPAUNG', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Pengembangan Aplikasi Chatbot dengan Pendekatan Natural Language Processing', '3.55', '157', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220369', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (13, '20220355', NULL, 'IRNA AZIZAH', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Studi Perbandingan Performa Jaringan Syaraf Tiruan dalam Pengenalan Suara', '3.22', '144', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220355', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (14, '19220522', NULL, 'M. EKO SAHPUTRO', NULL, NULL, 'L', NULL, '1', NULL, '2023-06-03', 'Perancangan Sistem Pengenalan Teks dalam Gambar Menggunakan Deep Learning', '3.68', '150', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '19220522', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (15, '20220016', NULL, 'MIFTAH FADILA', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Penerapan Algoritma Genetika dalam Optimasi Penjadwalan Proses Produksi', '3.12', '160', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (16, '20220140', NULL, 'MINARTI', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Analisis Efisiensi Algoritma Pencarian dalam Struktur Data Graf', '3.86', '148', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220140', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (17, '20220378', NULL, 'MIRA TANIA', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Pengembangan Aplikasi E-learning Berbasis Mobile untuk Pembelajaran Interaktif', '3.06', '155', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220378', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (18, '20220426', NULL, 'MUHAMMAD HAFIZ', NULL, NULL, 'L', NULL, '2', NULL, '2023-06-03', 'Studi Perbandingan Algoritma Clustering dalam Analisis Data Multivariat', '3.78', '157', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220426', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (19, '20220424', NULL, 'MUHAMMAD HAIMADI HARZAN NST', NULL, NULL, 'L', NULL, '2', NULL, '2023-06-03', 'Perancangan dan Implementasi Sistem Informasi Manajemen Proyek dengan Metodologi Agile', '3.37', '144', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (20, '20220516', NULL, 'MUHAMMAD MATIN BARAFI', NULL, NULL, 'L', NULL, '2', NULL, '2023-06-03', 'Penerapan Teknologi Augmented Reality dalam Pembelajaran Visualisasi 3D', '3.99', '150', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220516', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (21, '20220250', NULL, 'NUR MAYNI', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Analisis Performa Algoritma Pengenalan Teks untuk Pengolahan Dokumen', '3.27', '160', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220250', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (22, '20220150', NULL, 'PUTRI SARINI', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Pengembangan Sistem Pendeteksi Emosi pada Teks Menggunakan Metode Machine Learning', '3.49', '148', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220150', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (23, '20220381', NULL, 'REFINA KURNIA RAMADANTI', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Studi Perbandingan Algoritma Pengenalan Pola pada Citra Sidik Jari', '3.15', '155', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220381', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (24, '20220380', NULL, 'SAPRIYANTI', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Perancangan dan Implementasi Sistem Monitoring Kualitas Udara Berbasis IoT', '3.89', '157', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220380', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (25, '20220420', NULL, 'SHERLY RAHMADANI', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Analisis dan Perancangan Keamanan Jaringan Wireless dengan Metode Enkripsi', '3.32', '144', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220420', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (26, '20220036', NULL, 'SISNA DILLA', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Pengembangan Aplikasi Pemantauan Kesehatan Berbasis IoT', '3.45', '150', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220036', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (27, '20220328', NULL, 'SITI AISYAH NINGSIH', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Studi Perbandingan Algoritma Pengklasifikasian pada Data Bioinformatika', '3.63', '160', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220328', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (28, '20220220', NULL, 'SYLVI KATARI', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Perancangan Sistem Pengenalan Suara untuk Pengendalian Perangkat Elektronik', '3.03', '148', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220220', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (29, '20220316', NULL, 'SYLVIA ANGGRAINI', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Penerapan Teknologi Data Mining dalam Analisis Pola Pembelian Konsumen', '3.7', '155', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220316', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (30, '20220262', NULL, 'WINDA PRATIWI', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Pengembangan Aplikasi Mobile untuk Pendeteksian Objek pada Citra', '3.2', '157', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220262', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (31, '20220127', NULL, 'WULAN SAFITRI', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Studi Perbandingan Algoritma Segmentasi Citra untuk Deteksi Tumor Otak', '3.96', '144', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220127', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (32, '20220074', NULL, 'ALSYARINA RAHMI SINAGA', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Perancangan dan Implementasi Sistem Pengenalan Tulisan Tangan', '3.51', '150', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220074', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (33, '20220152', NULL, 'DAHNIAR OKTAFANI', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Analisis dan Penerapan Metode Pengenalan Emosi pada Data Audio', '3.24', '160', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220152', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (34, '20220049', NULL, 'DEWI NOVITA', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Pengembangan Aplikasi Pembelajaran Mesin dalam Deteksi Spam Email', '3.76', '148', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220049', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (35, '20220535', NULL, 'DINDA SHAFIRA PUTRI', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Studi Perbandingan Algoritma Pengenalan Pernyataan Emosi pada Teks', '3.08', '155', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220535', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (36, '20220168', NULL, 'ELVIRA WAHYUNI', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Perancangan dan Implementasi Sistem Keamanan Jaringan dengan Metode Firewall', '3.8', '157', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220168', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (37, '20220256', NULL, 'INDAH SRI ASTUTI', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Analisis dan Penerapan Metode Data Mining dalam Sistem Rekomendasi Produk', '3.34', '155', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220256', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (38, '20220135', NULL, 'INDRI ANGGRAINI PUTRI', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Pengembangan Aplikasi Mobile untuk Pengenalan Aksara Jepang', '3.97', '157', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220135', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (39, '20220209', NULL, 'IRMA ELITA', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Studi Perbandingan Algoritma Pengenalan Objek pada Citra Digital', '3.19', '144', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220209', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (40, '20220488', NULL, 'JIHAN BALQIS', NULL, NULL, 'L', NULL, '1', NULL, '2023-06-03', 'Perancangan dan Implementasi Sistem Manajemen Basis Data Terdistribusi', '3.53', '150', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220488', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (41, '20220277', NULL, 'KARTINI', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Analisis dan Penerapan Metode Pengenalan Aktivitas Manusia pada Video', '3.14', '160', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220277', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (42, '20220308', NULL, 'LISMAYANTI NASUTION', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Pengembangan Aplikasi Pemantauan Lingkungan Berbasis IoT', '3.87', '148', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220308', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (43, '20220440', NULL, 'MASITHAH MANDASARI', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Studi Perbandingan Algoritma Pengenalan Suara dalam Aplikasi Kesehatan', '3.38', '155', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220440', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (44, '20220543', NULL, 'MAULIDINA BR LUBIS', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Perancangan dan Implementasi Sistem Deteksi Plagiarisme pada Dokumen', '3.57', '157', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220543', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (45, '20220231', NULL, 'MEILANA WULANDARI', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Analisis dan Penerapan Metode Pengenalan Gerakan Tubuh untuk Kontrol Perangkat', '3.69', '144', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220231', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (46, '20220441', NULL, 'MUHAMMAD ARI SYAH RIZAL', NULL, NULL, 'L', NULL, '2', NULL, '2023-06-03', 'Pengembangan Aplikasi Pendeteksi Keaslian Gambar Berbasis Kriptografi', '3.02', '150', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220441', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (47, '20220477', NULL, 'MUHAMMAD SYAUQI SYAFAAT HASIBUAN', NULL, NULL, 'L', NULL, '2', NULL, '2023-06-03', 'Studi Perbandingan Algoritma Kompresi Citra dalam Pengolahan Data Medis', '3.73', '160', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220477', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (48, '20220339', NULL, 'NUR AINI', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Perancangan dan Implementasi Sistem Informasi Geografis untuk Pariwisata', '3.31', '148', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220339', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (49, '20220202', NULL, 'NUR MEISYA PUTRI ERDITRI', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Analisis dan Penerapan Metode Deteksi Keaslian Tanda Tangan Digital', '3.94', '155', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220202', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (50, '20220439', NULL, 'PUAN ANANDITA', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Pengembangan Aplikasi Pendeteksi Emosi pada Bahasa Isyarat', '3.44', '157', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220439', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (51, '20220409', NULL, 'RAHMADRIYADI', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Studi Perbandingan Algoritma Pengenalan Pernyataan dalam Bahasa Alami', '3.26', '144', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220409', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (52, '20220498', NULL, 'REHANI AULIA SIHOTANG', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Perancangan dan Implementasi Sistem Pemrosesan Paralel untuk Analisis Big Data', '3.65', '150', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220498', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (53, '20220388', NULL, 'RIZKY NURHALIZA', NULL, NULL, 'L', NULL, '2', NULL, '2023-06-03', 'Analisis dan Penerapan Metode Pengenalan Emosi pada Video', '3.07', '160', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220388', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (54, '20220333', NULL, 'SERA ANGGIRA', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Pengembangan Aplikasi Mobile untuk Pemantauan Kualitas Tidur', '3.81', '148', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220333', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (55, '20220438', NULL, 'SITI BIDARI', NULL, NULL, 'P', NULL, '2', NULL, '2023-06-03', 'Studi Perbandingan Algoritma Pengenalan Ekspresi Wajah', '3.35', '155', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220438', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (56, '20220076', NULL, 'SITI UMAIROH', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Perancangan dan Implementasi Sistem Keamanan File dengan Metode Enkripsi', '3.98', '157', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220076', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (57, '20220368', NULL, 'TANYA RAISITA', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Analisis dan Penerapan Metode Pengenalan Tulisan Tangan pada Dokumen Digital', '3.23', '144', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220368', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_mahasiswa` VALUES (58, '20220023', NULL, 'WANDA AUFA SHIFA', NULL, NULL, 'P', NULL, '1', NULL, '2023-06-03', 'Pengembangan Aplikasi E-commerce dengan Teknologi Blockchain', '3.5', '150', NULL, NULL, NULL, 'foto.jpg', NULL, 0, 0, NULL, NULL, NULL, '20220023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for tbl_persyaratan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_persyaratan`;
CREATE TABLE `tbl_persyaratan`  (
  `id_persyaratan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_persyaratan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_persyaratan`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_persyaratan
-- ----------------------------
INSERT INTO `tbl_persyaratan` VALUES (1, 'FotoCopy Berwarna Ijazah SMA');
INSERT INTO `tbl_persyaratan` VALUES (2, 'FotoCopy Berwarna Akte Kelahiran');
INSERT INTO `tbl_persyaratan` VALUES (3, 'FotoCopy Berwarna Kartu Keluarga');
INSERT INTO `tbl_persyaratan` VALUES (4, 'Fotocopy Berwarna KTP yg berlaku (diperbesar 4 kali)');
INSERT INTO `tbl_persyaratan` VALUES (5, 'Fotocopy Berwarna KTM yg berlaku (diperbesar 4 kali)');
INSERT INTO `tbl_persyaratan` VALUES (6, 'Foto Ijazah Berwarna');
INSERT INTO `tbl_persyaratan` VALUES (8, 'Surat Keterangan Kelulusan (SKL)');
INSERT INTO `tbl_persyaratan` VALUES (9, 'Sertifikat TOEFL ');

-- ----------------------------
-- Table structure for tbl_prodi
-- ----------------------------
DROP TABLE IF EXISTS `tbl_prodi`;
CREATE TABLE `tbl_prodi`  (
  `id_prodi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_prodi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_prodi`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_prodi
-- ----------------------------
INSERT INTO `tbl_prodi` VALUES (1, 'Teknik Informatika');
INSERT INTO `tbl_prodi` VALUES (2, 'Ilmu Perpustakaan');

-- ----------------------------
-- Table structure for tbl_tendik
-- ----------------------------
DROP TABLE IF EXISTS `tbl_tendik`;
CREATE TABLE `tbl_tendik`  (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tendik` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `foto` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_tendik
-- ----------------------------
INSERT INTO `tbl_tendik` VALUES (1, 'Tendik A', 'admin', '1234', 'tendik.png');

SET FOREIGN_KEY_CHECKS = 1;
