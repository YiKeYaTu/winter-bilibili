/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : ceshi

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2015-03-05 08:36:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `danmu`
-- ----------------------------
DROP TABLE IF EXISTS `danmu`;
CREATE TABLE `danmu` (
  `Danmu_id` int(11) NOT NULL AUTO_INCREMENT,
  `Danmu_ovalue` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Danmu_otop` varchar(255) NOT NULL,
  `Danmu_otime` float NOT NULL,
  `Danmu_dtime` float NOT NULL,
  `Danmu_video_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`Danmu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of danmu
-- ----------------------------
INSERT INTO `danmu` VALUES ('7', '啊啊啊', '256px', '3', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('8', '诶诶诶', '37px', '0', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('9', '而服务和if饿哦hii位 ', '235px', '2', '2015.3', '呵呵');
INSERT INTO `danmu` VALUES ('10', '呵呵呵呵呵', '215px', '6', '2015.3', '呵呵');
INSERT INTO `danmu` VALUES ('11', '呵呵你是傻逼', '297px', '6', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('12', '呵呵呵呵呵', '314px', '9', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('13', '啦啦啦啦啦啦啦啦啦', '282px', '16', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('14', '1516', '315px', '30', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('15', 'efweggewweg', '243px', '3', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('16', '借口借口', '228px', '24', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('17', '', '94px', '0', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('18', '呵呵呵', '256px', '0', '2015.3', 'hehe');

-- ----------------------------
-- Table structure for `pinglun`
-- ----------------------------
DROP TABLE IF EXISTS `pinglun`;
CREATE TABLE `pinglun` (
  `Pinglun_id` int(11) NOT NULL AUTO_INCREMENT,
  `Pinglun_ovalue` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Pinglun_video_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Pinglun_up_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Pinglun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pinglun
-- ----------------------------
INSERT INTO `pinglun` VALUES ('1', '啊啊啊', 'hehe', '');
INSERT INTO `pinglun` VALUES ('2', '阿福哥我敢问我给我个', 'hehe', '');
INSERT INTO `pinglun` VALUES ('3', '确定服务完全', '呵呵', '');
INSERT INTO `pinglun` VALUES ('4', '', 'hehe', '');
INSERT INTO `pinglun` VALUES ('5', '你是逗比', 'hehe', '');

-- ----------------------------
-- Table structure for `video`
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `Video_id` int(11) NOT NULL AUTO_INCREMENT,
  `Video_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Video_time` datetime NOT NULL,
  `Video_danmu_num` int(11) DEFAULT NULL,
  `Video_pinglun_num` int(11) DEFAULT NULL,
  `Video_up_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Video_address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Video_pricture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Video_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of video
-- ----------------------------
INSERT INTO `video` VALUES ('1', 'hehe', '0000-00-00 00:00:00', '5000', '5000', '??', 'http://video-js.zencoder.com/oceans-clip.mp4', null);
INSERT INTO `video` VALUES ('2', '呵呵', '0000-00-00 00:00:00', null, null, '', 'http://www.w3school.com.cn/i/movie.mp4', null);
