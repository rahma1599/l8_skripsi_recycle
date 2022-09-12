/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : db_skripsi_rahmawati

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 12/09/2022 08:48:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (2, '2022_08_21_081929_create_siswa_models_table', 1);

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_m_barang
-- ----------------------------
DROP TABLE IF EXISTS `tbl_m_barang`;
CREATE TABLE `tbl_m_barang`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_barang` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `style` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`, `id_barang`) USING BTREE,
  UNIQUE INDEX `kode_barang`(`id_barang` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_m_barang
-- ----------------------------
INSERT INTO `tbl_m_barang` VALUES (1, 'DH8016-100', '10A/10A');
INSERT INTO `tbl_m_barang` VALUES (2, 'DM0027-001', '01B/10A');
INSERT INTO `tbl_m_barang` VALUES (3, 'FB1289-200', '20I/10A');
INSERT INTO `tbl_m_barang` VALUES (4, 'DQ3955-001', '04Z/10A');
INSERT INTO `tbl_m_barang` VALUES (5, 'DV2621-200', '4PB/10A');
INSERT INTO `tbl_m_barang` VALUES (6, 'FD0344-397', '26B/10A');
INSERT INTO `tbl_m_barang` VALUES (7, 'DQ9131-700', '77A/10A');
INSERT INTO `tbl_m_barang` VALUES (8, 'DH8014-100', '12J/00A');
INSERT INTO `tbl_m_barang` VALUES (9, 'DQ9131-002', '01B/00A');
INSERT INTO `tbl_m_barang` VALUES (10, 'DZ4497-001', '71R/10A');
INSERT INTO `tbl_m_barang` VALUES (11, 'DX0754-002', '00A/10A');
INSERT INTO `tbl_m_barang` VALUES (12, 'DX0754-001', '00A/10A');
INSERT INTO `tbl_m_barang` VALUES (13, 'FB3357-001', '79S/10A');

-- ----------------------------
-- Table structure for tbl_m_jabatan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_m_jabatan`;
CREATE TABLE `tbl_m_jabatan`  (
  `id_jabatan` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Jabatan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_jabatan`) USING BTREE,
  INDEX `Jabatan`(`Jabatan` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_m_jabatan
-- ----------------------------
INSERT INTO `tbl_m_jabatan` VALUES ('22103', 'Admin');
INSERT INTO `tbl_m_jabatan` VALUES ('55885', 'Supervisor');

-- ----------------------------
-- Table structure for tbl_m_siswa
-- ----------------------------
DROP TABLE IF EXISTS `tbl_m_siswa`;
CREATE TABLE `tbl_m_siswa`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `NIS` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NamaSiswa` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_m_siswa
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_m_size
-- ----------------------------
DROP TABLE IF EXISTS `tbl_m_size`;
CREATE TABLE `tbl_m_size`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `size` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_m_size
-- ----------------------------
INSERT INTO `tbl_m_size` VALUES (1, '3');
INSERT INTO `tbl_m_size` VALUES (2, '3T');
INSERT INTO `tbl_m_size` VALUES (3, '4');
INSERT INTO `tbl_m_size` VALUES (4, '4T');
INSERT INTO `tbl_m_size` VALUES (5, '5');
INSERT INTO `tbl_m_size` VALUES (6, '5T');
INSERT INTO `tbl_m_size` VALUES (7, '6');
INSERT INTO `tbl_m_size` VALUES (8, '6T');
INSERT INTO `tbl_m_size` VALUES (9, '7');
INSERT INTO `tbl_m_size` VALUES (10, '7T');
INSERT INTO `tbl_m_size` VALUES (11, '8T');
INSERT INTO `tbl_m_size` VALUES (12, '8');
INSERT INTO `tbl_m_size` VALUES (13, '9');
INSERT INTO `tbl_m_size` VALUES (14, '9T');
INSERT INTO `tbl_m_size` VALUES (15, '10');
INSERT INTO `tbl_m_size` VALUES (16, '10T');
INSERT INTO `tbl_m_size` VALUES (17, '11');
INSERT INTO `tbl_m_size` VALUES (18, '11T');
INSERT INTO `tbl_m_size` VALUES (19, '12');
INSERT INTO `tbl_m_size` VALUES (20, '12T');
INSERT INTO `tbl_m_size` VALUES (21, '13');
INSERT INTO `tbl_m_size` VALUES (22, '14');
INSERT INTO `tbl_m_size` VALUES (23, '15');

-- ----------------------------
-- Table structure for tbl_m_style
-- ----------------------------
DROP TABLE IF EXISTS `tbl_m_style`;
CREATE TABLE `tbl_m_style`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `style` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_m_style
-- ----------------------------
INSERT INTO `tbl_m_style` VALUES (1, '00A/00A');
INSERT INTO `tbl_m_style` VALUES (2, '10A/10A');
INSERT INTO `tbl_m_style` VALUES (3, '01B/10A');

-- ----------------------------
-- Table structure for tbl_m_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_m_user`;
CREATE TABLE `tbl_m_user`  (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_belakang` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-laki') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_user`) USING BTREE,
  INDEX `fk_jabatan`(`jabatan` ASC) USING BTREE,
  INDEX `nama_depan`(`nama_depan` ASC) USING BTREE,
  CONSTRAINT `fk_jabatan` FOREIGN KEY (`jabatan`) REFERENCES `tbl_m_jabatan` (`id_jabatan`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_m_user
-- ----------------------------
INSERT INTO `tbl_m_user` VALUES (1, 'Rahma', 'Wati', 'Level Admin', 'Perempuan', '22103', 'Officer');
INSERT INTO `tbl_m_user` VALUES (2, 'Amelia', 'Noviasari', 'Level User', 'Perempuan', '55885', 'Supervisor');

-- ----------------------------
-- Table structure for tbl_tr_recycle
-- ----------------------------
DROP TABLE IF EXISTS `tbl_tr_recycle`;
CREATE TABLE `tbl_tr_recycle`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_recycle` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `shift_group` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah` int NOT NULL,
  `id_barang` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `style` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `size` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `plant` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` enum('Belum Potong','Tunggu Buffing','Siap Pouring') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_tr_recycle
-- ----------------------------
INSERT INTO `tbl_tr_recycle` VALUES (1, 'TR00001', '2022-07-20', '1/C', 282, 'DH8016-002', '00A/00A', '3', 'Jvb', 'Laporan Masuk', 'Tunggu Buffing', NULL, NULL);
INSERT INTO `tbl_tr_recycle` VALUES (2, 'TR00002', '2022-08-01', '2/B', 374, 'DH8016-100', '10A/10A', '4', 'Jvb', 'Laporan Diproses', 'Belum Potong', NULL, NULL);
INSERT INTO `tbl_tr_recycle` VALUES (3, 'TR00003', '2022-07-06', '3/A', 2074, 'DM0027-001', '01B/10A', '5', 'Jvb', 'Laporan Selesai', 'Siap Pouring', NULL, NULL);
INSERT INTO `tbl_tr_recycle` VALUES (5, 'TR000004', '2022-09-09', '1/C', 120, 'DH8016-100', 'XXXX', '3', 'JVB', 'Laporan Masuk', 'Belum Potong', NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `updated_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `nik_unik`(`nik` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, '22103', 'Rahma wati', 'rahmawati161718@gmail.com', '$2y$10$uQych1GHKBZ5ndnOnbnFiO6tw2cigk23bcu9l3QJS4lsd/lkLjLAW', 'enabled', 'admin', '2022-08-28 04:02:27', '2022-08-28 04:02:27');
INSERT INTO `users` VALUES (2, '22885', 'Amelia Noviasari', 'amelianoviasari@gmail.com', '$2y$10$uAbL4zx2mIexyddlUGxIA.MUxOaq1a1vglX91pxm/zZ/IePhnBzsC', 'enabled', 'supervisor', '2022-08-28 08:31:18', '2022-08-28 08:31:18');
INSERT INTO `users` VALUES (4, '11111', 'Dedy Alamsyah', 'dedy@gmail.com', '$2y$10$1KYXWF/pahHBDi2Rfe76YO7nMhkVVHwlN8CBdcnL4fZwsq68TYgru', 'enabled', 'admin', '', NULL);

SET FOREIGN_KEY_CHECKS = 1;
