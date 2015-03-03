/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : bilibili

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2015-03-04 00:28:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for barrage
-- ----------------------------
DROP TABLE IF EXISTS `barrage`;
CREATE TABLE `barrage` (
  `Barrage_id` int(11) NOT NULL AUTO_INCREMENT,
  `Barrage_name` varchar(255) NOT NULL,
  `Barrage_textValue` varchar(255) NOT NULL,
  `Barrage_Top` varchar(255) NOT NULL,
  `Barrage_time` datetime NOT NULL,
  `Barrage_Video_Time` datetime NOT NULL,
  PRIMARY KEY (`Barrage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of barrage
-- ----------------------------

-- ----------------------------
-- Table structure for register
-- ----------------------------
DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `register_id` int(11) NOT NULL AUTO_INCREMENT,
  `register_user` varchar(255) CHARACTER SET utf8 NOT NULL,
  `register_passward` varchar(255) CHARACTER SET utf8 NOT NULL,
  `register_text` varchar(255) CHARACTER SET utf8 NOT NULL,
  `register_picture` varchar(255) NOT NULL,
  PRIMARY KEY (`register_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of register
-- ----------------------------
INSERT INTO `register` VALUES ('1', '123456789', '123456789', '呵呵', '');

-- ----------------------------
-- Table structure for talk
-- ----------------------------
DROP TABLE IF EXISTS `talk`;
CREATE TABLE `talk` (
  `Talk_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Talk_Video_Name` varchar(255) DEFAULT NULL,
  `Talk_Up_Name` varchar(255) DEFAULT NULL,
  `Talk_Time` datetime DEFAULT NULL,
  `Talk_Text` varchar(255) NOT NULL,
  PRIMARY KEY (`Talk_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of talk
-- ----------------------------

-- ----------------------------
-- Table structure for video
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `Video_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Video_Name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Video_Danmu_Num` int(11) DEFAULT NULL,
  `Video_Pinglun_Num` int(11) DEFAULT NULL,
  `Video_Click_a_quantity` int(11) DEFAULT NULL,
  `Video_Up_Name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Video_Picture` varchar(255) DEFAULT NULL,
  `Video_Classification` varchar(255) DEFAULT NULL,
  `Video_Time` datetime DEFAULT NULL,
  `Video_Address` varchar(255) DEFAULT NULL,
  `Video_Introduction` int(11) DEFAULT NULL,
  PRIMARY KEY (`Video_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of video
-- ----------------------------
INSERT INTO `video` VALUES ('1', '优酷', '112', '112', '111', '呵呵', null, 'cartoon', '0000-00-00 00:00:00', 'http://v.youku.com/v_show/id_XOTAzMjMyODI4_ev_2.html', null);
