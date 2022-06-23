/*
 Navicat Premium Data Transfer

 Source Server         : SERVIDOR LOCAL
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : site

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 23/06/2022 17:47:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for contas
-- ----------------------------
DROP TABLE IF EXISTS `contas`;
CREATE TABLE `contas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(140) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `senha` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contas
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
