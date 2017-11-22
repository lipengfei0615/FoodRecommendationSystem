/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50718
Source Host           : localhost:3306
Source Database       : foodrecommendation

Target Server Type    : MYSQL
Target Server Version : 50718
File Encoding         : 65001

Date: 2017-11-21 21:07:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for restaurant
-- ----------------------------
DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE `restaurant` (
  `restaurant_id` int(11) NOT NULL AUTO_INCREMENT,
  `restaurant_type` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  PRIMARY KEY (`restaurant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of restaurant
-- ----------------------------
INSERT INTO `restaurant` VALUES ('11', '1', '25');
INSERT INTO `restaurant` VALUES ('12', '1', '13');
INSERT INTO `restaurant` VALUES ('13', '1', '5');
INSERT INTO `restaurant` VALUES ('14', '1', '6');
INSERT INTO `restaurant` VALUES ('21', '2', '5');
INSERT INTO `restaurant` VALUES ('22', '2', '5');
INSERT INTO `restaurant` VALUES ('23', '2', '5');
INSERT INTO `restaurant` VALUES ('24', '2', '5');
INSERT INTO `restaurant` VALUES ('31', '3', '9');
INSERT INTO `restaurant` VALUES ('32', '3', '5');
INSERT INTO `restaurant` VALUES ('33', '3', '9');
INSERT INTO `restaurant` VALUES ('34', '3', '5');
INSERT INTO `restaurant` VALUES ('41', '4', '5');
INSERT INTO `restaurant` VALUES ('42', '4', '5');
INSERT INTO `restaurant` VALUES ('43', '4', '5');
INSERT INTO `restaurant` VALUES ('44', '4', '5');
