/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50718
Source Host           : localhost:3306
Source Database       : foodrecommendation

Target Server Type    : MYSQL
Target Server Version : 50718
File Encoding         : 65001

Date: 2017-11-21 21:07:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for registration
-- ----------------------------
DROP TABLE IF EXISTS `registration`;
CREATE TABLE `registration` (
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `prefer_french` int(11) DEFAULT '0',
  `prefer_turkey` int(11) DEFAULT '0',
  `prefer_china` int(11) DEFAULT '0',
  `prefer_italy` int(11) DEFAULT '0',
  `role` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of registration
-- ----------------------------
INSERT INTO `registration` VALUES ('leo', '12345', '10', '10', '12', '10', 'customer', '4');
INSERT INTO `registration` VALUES ('li', 'abcde', '10', '20', '12', '0', 'customer', '6');
INSERT INTO `registration` VALUES ('gavin', 'li', '10', '20', '12', '10', 'customer', '10');
INSERT INTO `registration` VALUES ('kevin', 'we', '10', '30', '12', '0', 'customer', '11');
INSERT INTO `registration` VALUES ('hello', '123', '10', '10', '12', '22', 'manager', '13');
INSERT INTO `registration` VALUES ('wechina', '345', '0', '1', '12', '3', 'customer', '29');
INSERT INTO `registration` VALUES ('china', '123', '0', '1', '22', '23', 'customer', '30');
