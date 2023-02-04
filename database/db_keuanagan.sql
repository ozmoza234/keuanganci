/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100425
 Source Host           : localhost:3306
 Source Schema         : db_keuanagan

 Target Server Type    : MySQL
 Target Server Version : 100425
 File Encoding         : 65001

 Date: 04/02/2023 09:52:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cicilan
-- ----------------------------
DROP TABLE IF EXISTS `cicilan`;
CREATE TABLE `cicilan`  (
  `id_cicilan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_pinjaman` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for nasabah
-- ----------------------------
DROP TABLE IF EXISTS `nasabah`;
CREATE TABLE `nasabah`  (
  `id_nasabah` int(11) NOT NULL AUTO_INCREMENT,
  `nama_nasabah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pekerjaan_nasabah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_nasabah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telepon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_nasabah`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nasabah
-- ----------------------------
INSERT INTO `nasabah` VALUES (9, 'Adrian', 'Hadinata Hadi', 'Klaten', '085802520642');

-- ----------------------------
-- Table structure for pelunasan
-- ----------------------------
DROP TABLE IF EXISTS `pelunasan`;
CREATE TABLE `pelunasan`  (
  `id_pelunasan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_nasabah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_pinjaman` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_pelunasan` date NOT NULL,
  `id_pinjaman` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `cicilan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_pelunasan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pelunasan
-- ----------------------------
INSERT INTO `pelunasan` VALUES (7, 'Nirma', '1500000', '2023-02-03', '4', '10000');
INSERT INTO `pelunasan` VALUES (8, 'Adrian', '1000000', '2023-02-03', '7', '60000');
INSERT INTO `pelunasan` VALUES (9, 'Nirma', '1500000', '2023-02-03', '4', '20000');
INSERT INTO `pelunasan` VALUES (11, 'Nirma', '2000000', '2023-02-03', '5', '50000');
INSERT INTO `pelunasan` VALUES (12, 'Nirma', '1500000', '2023-02-04', '4', '50000');
INSERT INTO `pelunasan` VALUES (13, 'Nirma', '1500000', '2023-02-04', '4', '100000');
INSERT INTO `pelunasan` VALUES (14, 'Nirma', '1500000', '2023-02-04', '4', '10000');
INSERT INTO `pelunasan` VALUES (15, 'Nirma', '1500000', '2023-02-04', '4', '10000');

-- ----------------------------
-- Table structure for pengguna
-- ----------------------------
DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE `pengguna`  (
  `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `login_session_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password_expire_date` datetime(0) NULL DEFAULT '2023-01-19 00:00:00',
  `password_reset_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_pengguna`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pengguna
-- ----------------------------
INSERT INTO `pengguna` VALUES (1, 'irza', '$2y$10$j3UadJGKV37LWqorZYNU7ONJadhtkBQZPyXtfvJje6nenEPptU6A6', 'irzafebrianto990@gmail.com', 'http://localhost/keuangan/uploads/files/z65xdb3tuiyokq2.jpg', 'a29f4b50f0b39754f02f1fc8c2fcbfc9', NULL, '2023-01-19 00:00:00', NULL);

-- ----------------------------
-- Table structure for pinjaman
-- ----------------------------
DROP TABLE IF EXISTS `pinjaman`;
CREATE TABLE `pinjaman`  (
  `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT,
  `nama_nasabah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_pinjaman` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_pinjaman` date NOT NULL,
  PRIMARY KEY (`id_pinjaman`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pinjaman
-- ----------------------------
INSERT INTO `pinjaman` VALUES (5, 'Nirma', '2000000', '2023-01-29');
INSERT INTO `pinjaman` VALUES (6, 'Nirma', '2500000', '2023-01-29');
INSERT INTO `pinjaman` VALUES (7, 'Adrian', '1000000', '2023-01-29');
INSERT INTO `pinjaman` VALUES (8, 'Adrian', '2000000', '2023-02-04');

-- ----------------------------
-- Table structure for tabungan
-- ----------------------------
DROP TABLE IF EXISTS `tabungan`;
CREATE TABLE `tabungan`  (
  `id_tabungn` int(11) NOT NULL AUTO_INCREMENT,
  `nama_nasabah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_pinjaman` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tabungan_masuk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tot` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_tabungn`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tabungan
-- ----------------------------
INSERT INTO `tabungan` VALUES (4, 'Nirma', '1500000', '75000', '2022-11-19', '75000');
INSERT INTO `tabungan` VALUES (5, 'Irwan', '1500000', '150000', '2023-01-29', '150000');
INSERT INTO `tabungan` VALUES (6, 'Adrian', '1000000', '100000', '2023-01-29', '100000');

SET FOREIGN_KEY_CHECKS = 1;
