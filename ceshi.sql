/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : ceshi

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2015-03-12 13:44:47
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
  `Danmu_style` int(11) NOT NULL,
  PRIMARY KEY (`Danmu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of danmu
-- ----------------------------
INSERT INTO `danmu` VALUES ('1', 'aaaaa', '476px', '4', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('2', 'w ', '456px', '6', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('3', '你仿佛在刻意的逗我笑', '76px', '2', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('4', '你仿佛在刻意的逗我笑', '76px', '7', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('5', '你仿佛在刻意的逗我笑', '176px', '7', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('6', '你仿佛在刻意的逗我笑', '36px', '8', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('7', '你仿佛在刻意的逗我笑', '196px', '9', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('8', '你仿佛在刻意的逗我笑', '76px', '10', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('9', '你仿佛在刻意的逗我笑', '276px', '11', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('10', '你仿佛在刻意的逗我笑', '76px', '11', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('11', '你仿佛在刻意的逗我笑', '96px', '12', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('12', '你仿佛在刻意的逗我笑', '216px', '16', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('13', '你仿佛在刻意的逗我笑', '256px', '17', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('14', '你仿佛在刻意的逗我笑', '236px', '20', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('15', '你仿佛在刻意的逗我笑', '56px', '21', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('16', '你仿佛在刻意的逗我笑', '236px', '22', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('17', '你仿佛在刻意的逗我笑', '36px', '22', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('18', '你仿佛在刻意的逗我笑', '196px', '23', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('19', '你仿佛在刻意的逗我笑', '276px', '24', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('20', '你仿佛在刻意的逗我笑', '36px', '25', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('21', '你仿佛在刻意的逗我笑', '156px', '25', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('22', '你仿佛在刻意的逗我笑', '236px', '27', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('23', '你仿佛在刻意的逗我笑', '116px', '27', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('24', '你仿佛在刻意的逗我笑', '436px', '9', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('25', '你仿佛在刻意的逗我笑', '416px', '9', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('26', '你仿佛在刻意的逗我笑', '476px', '10', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('27', '你仿佛在刻意的逗我笑', '396px', '11', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('28', '你仿佛在刻意的逗我笑', '456px', '12', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('29', '你仿佛在刻意的逗我笑', '376px', '13', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('30', '你仿佛在刻意的逗我笑', '356px', '14', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('31', '你仿佛在刻意的逗我笑', '336px', '14', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('32', '你仿佛在刻意的逗我笑', '436px', '15', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('33', '你仿佛在刻意的逗我笑', '476px', '16', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('34', '你仿佛在刻意的逗我笑', '416px', '17', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('35', '你仿佛在刻意的逗我笑', '396px', '17', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('36', '你仿佛在刻意的逗我笑', '456px', '18', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('37', '你仿佛在刻意的逗我笑', '376px', '19', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('38', '你仿佛在刻意的逗我笑', '356px', '20', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('39', '你在逗我', '136px', '5', '2015.3', '游戏啊', '0');
INSERT INTO `danmu` VALUES ('40', '啊啊啊啊', '476px', '5', '2015.3', '游戏啊', '1');
INSERT INTO `danmu` VALUES ('41', '哇哇哇', '456px', '7', '2015.3', '游戏啊', '1');
INSERT INTO `danmu` VALUES ('42', '啊哇哇哇', '476px', '11', '2015.3', '游戏啊', '1');
INSERT INTO `danmu` VALUES ('43', '额问问', '456px', '13', '2015.3', '游戏啊', '1');
INSERT INTO `danmu` VALUES ('44', '娃娃阿瓦', '256px', '11', '2015.3', '游戏啊', '0');
INSERT INTO `danmu` VALUES ('45', '娃娃阿瓦', '236px', '13', '2015.3', '游戏啊', '0');
INSERT INTO `danmu` VALUES ('46', '李敦峰我爱你', '176px', '10', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('47', '李敦峰我爱你', '116px', '13', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('48', '李敦峰我爱你', '276px', '15', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('49', '李敦峰我爱你', '196px', '19', '2015.3', 'hehe', '0');
INSERT INTO `danmu` VALUES ('50', '李敦峰我爱你', '476px', '22', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('51', '李敦峰我爱你', '456px', '25', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('52', '李敦峰我爱你', '436px', '26', '2015.3', 'hehe', '1');
INSERT INTO `danmu` VALUES ('53', '李敦峰我爱你', '476px', '28', '2015.3', 'hehe', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=latin1;

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
INSERT INTO `pinglun` VALUES ('102', 'saas', 'hehe', '', '');
INSERT INTO `pinglun` VALUES ('103', 'asffasafs', 'hehe', '一颗牙兔', 'image/2013-newyear-2560.jpg');
INSERT INTO `pinglun` VALUES ('104', '跟着', 'hehe', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('105', '阿阿阿阿阿英文歌', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('106', 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('107', '啊啊啊啊', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('108', '啊啊啊啊', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('109', '啊啊啊啊', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('110', '啊啊啊啊', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('111', '啊啊啊啊', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('112', '啊啊啊啊', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('113', '啊啊啊啊', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('114', '啊啊啊啊', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('115', '啊啊啊啊', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('116', '啊啊啊啊', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('117', '啊啊啊啊', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('118', '啊啊啊啊', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('119', '啊啊啊啊', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('120', '啊啊啊啊', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('121', '啊啊啊啊', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('122', '啊啊啊啊', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('123', '啊啊啊啊', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('124', '啊啊啊啊', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('125', '啊啊啊啊', '测试', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('126', '你是逗比', '游戏啊', '一颗牙兔', 'image/a.jpg');
INSERT INTO `pinglun` VALUES ('127', '李敦峰我爱你', 'hehe', '李敦峰我爱你', 'picture/42.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of register
-- ----------------------------
INSERT INTO `register` VALUES ('1', 'qqqqqqqq', 'qwertyu', '123345', 'image/a.jpg');
INSERT INTO `register` VALUES ('2', 'qqqqssss', 'asdfghj', '123346', '');
INSERT INTO `register` VALUES ('12', '', '', '', '');
INSERT INTO `register` VALUES ('13', 'a13165733725', '111003', '一颗牙兔', 'image/a.jpg');
INSERT INTO `register` VALUES ('14', 'liangchen', '111003', '一哎', '');
INSERT INTO `register` VALUES ('15', 'liangchena', '111003', '一哎a', '');
INSERT INTO `register` VALUES ('16', '903446949', 'cyz201404', '李敦峰我爱你', 'picture/42.jpg');

-- ----------------------------
-- Table structure for `video`
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `Video_id` int(11) NOT NULL AUTO_INCREMENT,
  `Video_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Video_time` datetime NOT NULL,
  `Video_danmu_num` int(1) unsigned zerofill NOT NULL,
  `Video_pinglun_num` int(1) unsigned zerofill NOT NULL,
  `Video_up_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Video_address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Video_picture` varchar(255) NOT NULL,
  `Video_tag` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Video_click_num` int(1) unsigned zerofill NOT NULL,
  `Video_introduce` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`Video_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of video
-- ----------------------------
INSERT INTO `video` VALUES ('1', 'hehe', '0000-00-00 00:00:00', '46', '49', '一颗牙兔', 'http://video-js.zencoder.com/oceans-clip.mp4', 'image/a.jpg', '动画', '315', '你是一个傻逼啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊非非我格外');
INSERT INTO `video` VALUES ('2', '呵呵', '0000-00-00 00:00:00', '1', '3', '逗神', 'http://www.w3school.com.cn/i/movie.mp4', 'image/2013-newyear-2560.jpg', '动画', '2', '你是一个逗比啊啊啊啊啊啊啊');
INSERT INTO `video` VALUES ('8', '呵呵呵呵', '2015-03-09 00:00:00', '0', '0', '亿颗', 'http://video-js.zencoder.com/oceans-clip.mp4', 'picture/42.jpg', '番剧', '0', '有点意思');
INSERT INTO `video` VALUES ('9', '我是视频', '2015-03-09 01:00:00', '0', '0', '一颗牙兔', 'http://video-js.zencoder.com/oceans-clip.mp4', 'picture/42.jpg', '番剧', '0', '有点意思');
INSERT INTO `video` VALUES ('10', '音乐啊啊', '2015-03-10 01:00:00', '0', '0', '一颗牙兔', 'http://video-js.zencoder.com/oceans-clip.mp4', 'image/2013-newyear-2560.jpg', '音乐', '1', '我就笑了');
INSERT INTO `video` VALUES ('11', '舞蹈啊啊', '2015-03-10 01:00:00', '0', '0', '一颗牙兔', 'http://video-js.zencoder.com/oceans-clip.mp4', 'image/2013-newyear-2560.jpg', '舞蹈', '0', '我是舞蹈专区');
INSERT INTO `video` VALUES ('12', '游戏啊', '0000-00-00 00:00:00', '7', '1', '一颗牙兔', 'http://video-js.zencoder.com/oceans-clip.mp4', 'image/2013-newyear-2560.jpg', '游戏', '4', '我是游戏专区');
INSERT INTO `video` VALUES ('13', '科技啊', '0000-00-00 00:00:00', '0', '0', '一颗牙兔', '', 'image/2013-newyear-2560.jpg', '科技', '1', '我是科技专区');
INSERT INTO `video` VALUES ('14', '娱乐啊', '0000-00-00 00:00:00', '0', '0', '一颗牙兔', 'http://video-js.zencoder.com/oceans-clip.mp4', 'image/2013-newyear-2560.jpg', '娱乐', '0', '我是娱乐专业');
INSERT INTO `video` VALUES ('15', '电影啊', '0000-00-00 00:00:00', '0', '0', '一颗牙兔', '', 'image/2013-newyear-2560.jpg', '电影', '0', '我是电影专区');
INSERT INTO `video` VALUES ('16', '电视剧啊', '0000-00-00 00:00:00', '0', '0', '一颗牙兔', '', 'image/2013-newyear-2560.jpg', '电视剧', '0', '我是电视剧专区');
INSERT INTO `video` VALUES ('17', '鬼畜啊', '0000-00-00 00:00:00', '0', '0', '一颗牙兔', '', 'image/2013-newyear-2560.jpg', '鬼畜', '0', '我是鬼畜专区');
