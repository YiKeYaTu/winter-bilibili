/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : ceshi

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2015-03-06 23:18:33
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
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of danmu
-- ----------------------------
INSERT INTO `danmu` VALUES ('32', '二个人', '42px', '2', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('33', '阿道夫我午饭晚饭', '255px', '5', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('34', '人头', '87px', '2', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('35', '呵呵热热', '358px', '6', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('36', '我去年买了个表', '45px', '15', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('37', 'afwfaw', '393px', '3', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('38', 'fwafwaawf ', '389px', '1', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('39', 'wfawafwfwawf', '348px', '2', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('40', 'rruu', '304px', '1', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('41', '色我问问', '80px', '1', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('42', '啊啊啊啊啊啊', '121px', '3', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('43', '娃娃阿瓦', '172px', '20', '2015.3', 'hehe');
INSERT INTO `danmu` VALUES ('44', '而非问问违法非问我饿', '392px', '36', '2015.3', 'hehe');

-- ----------------------------
-- Table structure for `pinglun`
-- ----------------------------
DROP TABLE IF EXISTS `pinglun`;
CREATE TABLE `pinglun` (
  `Pinglun_id` int(11) NOT NULL AUTO_INCREMENT,
  `Pinglun_ovalue` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Pinglun_video_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Pinglun_up_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Pinglun_up_picture` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Pinglun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pinglun
-- ----------------------------
INSERT INTO `pinglun` VALUES ('52', '呵呵', '呵呵', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('53', '任何人和', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('54', 'ewweewewew', 'hehe', '', '');
INSERT INTO `pinglun` VALUES ('55', 'ewegwweggeweg', 'hehe', '', '');
INSERT INTO `pinglun` VALUES ('56', '挖法哇发法', 'hehe', '', '');
INSERT INTO `pinglun` VALUES ('59', '呵呵呵呵呵你在逗我', 'hehe', '一颗牙兔', '');
INSERT INTO `pinglun` VALUES ('60', '哇哇哇', 'hehe', '一颗牙兔', '');
INSERT INTO `pinglun` VALUES ('62', '爱上方法按双方', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('63', '啊啊啊啊啊', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('64', '啊飒飒飒飒', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('65', '啊啊啊', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('66', '啊啊', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('67', '啊 ', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('68', '啊啊', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('69', '哇哇哇哇哇', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('70', '额无法给我个额外我', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('71', '额外给我给我给我各位', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('72', '问额外额外特特特我', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('73', '为儿童网特温特特务', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('74', '热呵呵热热和火热', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('75', '额问问问问我', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('76', '问问问问', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('77', '啊', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('78', '而非为分为非非我威锋网饿饭违反', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('79', '啊啊啊', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('80', '而非为王菲王菲', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('81', '违法非问我饿', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('82', '而王菲王菲王菲', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('83', '未付费为我方', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('84', '巍峨我问问', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('85', '问问我', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('86', 'weewew', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('87', '问问我', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('88', '问问问问', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('89', '额问问问问我', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('90', '巍峨我问问额外文', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('91', '娃儿额问问问问额外额外', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('92', 'ewffewfewfew', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('93', '问问我', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('94', '问额外额外额外额外', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('95', '巍峨巍峨我问问', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('96', '问问问问', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('97', '制作组', '呵呵', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('98', '阿发发娃娃', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('99', 'trehth', 'hehe', '', '');
INSERT INTO `pinglun` VALUES ('100', 'wafwaffwafwafwafwafwafwa', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('101', 'FAewFAWWFA', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');

-- ----------------------------
-- Table structure for `register`
-- ----------------------------
DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `register_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `register_user` varchar(255) CHARACTER SET utf8 NOT NULL,
  `register_password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `register_user_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `register_picture` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`register_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of register
-- ----------------------------
INSERT INTO `register` VALUES ('1', 'qqqqqqqq', 'qwertyu', '123345', '');
INSERT INTO `register` VALUES ('2', 'qqqqssss', 'asdfghj', '123346', '');
INSERT INTO `register` VALUES ('3', 'a13165733725', '111003', '一颗牙兔', 'image/2013-newyear-2560.jpg');

-- ----------------------------
-- Table structure for `video`
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `Video_id` int(11) NOT NULL AUTO_INCREMENT,
  `Video_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Video_time` datetime NOT NULL,
  `Video_danmu_num` int(11) unsigned zerofill NOT NULL,
  `Video_pinglun_num` int(11) unsigned zerofill NOT NULL,
  `Video_up_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Video_address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Video_pricture` varchar(255) NOT NULL,
  `Video_tag` varchar(6) CHARACTER SET utf8 NOT NULL,
  `Video_click_num` int(1) unsigned zerofill NOT NULL,
  `Video_introduce` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`Video_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of video
-- ----------------------------
INSERT INTO `video` VALUES ('1', 'hehe', '0000-00-00 00:00:00', '00000000013', '00000000045', '一颗牙兔', 'http://video-js.zencoder.com/oceans-clip.mp4', '', '音乐', '23', '你是一个傻逼啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊非非我格外');
INSERT INTO `video` VALUES ('2', '呵呵', '0000-00-00 00:00:00', '00000000000', '00000000002', '逗神', 'http://www.w3school.com.cn/i/movie.mp4', '', '动画', '0', null);
