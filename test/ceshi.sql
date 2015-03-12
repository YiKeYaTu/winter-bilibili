/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : ceshi

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2015-03-04 19:58:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for danmu
-- ----------------------------
DROP TABLE IF EXISTS `danmu`;
CREATE TABLE `danmu` (
  `Danmu_id` int(11) NOT NULL AUTO_INCREMENT,
  `Danmu_ovalue` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Danmu_otop` varchar(255) NOT NULL,
  `Danmu_otime` float NOT NULL,
  `Danmu_dtime` float NOT NULL,
  PRIMARY KEY (`Danmu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of danmu
-- ----------------------------

-- ----------------------------
-- Table structure for pinglun
-- ----------------------------
DROP TABLE IF EXISTS `pinglun`;
CREATE TABLE `pinglun` (
  `Pinglun_id` int(11) NOT NULL AUTO_INCREMENT,
  `Pinglun_ovalue` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`Pinglun_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pinglun
-- ----------------------------
