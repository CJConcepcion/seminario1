/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 50650
 Source Host           : localhost:3306
 Source Schema         : myapp

 Target Server Type    : MySQL
 Target Server Version : 50650
 File Encoding         : 65001

 Date: 04/01/2021 15:47:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for programas
-- ----------------------------
DROP TABLE IF EXISTS `programas`;
CREATE TABLE `programas` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(50) NOT NULL,
  `Utilidad` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

SET FOREIGN_KEY_CHECKS = 1;
