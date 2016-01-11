/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100109
Source Host           : localhost:3306
Source Database       : videos_blog

Target Server Type    : MYSQL
Target Server Version : 100109
File Encoding         : 65001

Date: 2016-01-11 01:08:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for artists
-- ----------------------------
DROP TABLE IF EXISTS `artists`;
CREATE TABLE `artists` (
`id`  int(11) NOT NULL AUTO_INCREMENT ,
`name`  varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`created`  datetime NOT NULL ,
`modified`  datetime NULL DEFAULT NULL ,
`is_active`  tinyint(4) NOT NULL ,
`photo_dir`  varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`photo`  varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=2

;

-- ----------------------------
-- Records of artists
-- ----------------------------
BEGIN;
INSERT INTO `artists` VALUES ('1', 'Lil Wayne', '2016-01-11 02:33:15', '2016-01-11 02:36:37', '1', 'd9dae1ce-2f1b-470c-83bb-31c2394d2408', 'e4d00909.jpg');
COMMIT;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
`id`  int(11) NOT NULL AUTO_INCREMENT ,
`name`  varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`created`  datetime NOT NULL ,
`modified`  datetime NULL DEFAULT NULL ,
`slug`  varchar(4320) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=2

;

-- ----------------------------
-- Records of categories
-- ----------------------------
BEGIN;
INSERT INTO `categories` VALUES ('1', 'rap', '2016-01-11 00:44:20', null, 'rap');
COMMIT;

-- ----------------------------
-- Table structure for videos
-- ----------------------------
DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
`id`  int(11) NOT NULL AUTO_INCREMENT ,
`title`  varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`created`  datetime NOT NULL ,
`modified`  datetime NULL DEFAULT NULL ,
`youtube_code`  varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`description`  varchar(400) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`duration`  time NOT NULL ,
`tags`  varchar(400) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`photo`  varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`photo_dir`  varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`slug`  varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`category_id`  int(11) NOT NULL ,
`destaque`  tinyint(4) NULL DEFAULT NULL ,
`destaque_order`  int(11) NULL DEFAULT NULL ,
`artist_id`  int(11) NOT NULL ,
PRIMARY KEY (`id`),
FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
INDEX `fk_videos_categories1_idx` (`category_id`) USING BTREE ,
INDEX `fk_videos_artists1_idx` (`artist_id`) USING BTREE 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=4

;

-- ----------------------------
-- Records of videos
-- ----------------------------
BEGIN;
INSERT INTO `videos` VALUES ('3', 'Krazy', '2016-01-11 02:50:55', '2016-01-11 02:50:55', 'dtCxmbFgnrc', '', '06:57:00', 'lil wayne, krazy', 'Untitled-2.jpg', '2d26071d-d416-451a-860f-101be4f3004a', 'krazy', '1', '1', '1', '1');
COMMIT;

-- ----------------------------
-- Auto increment value for artists
-- ----------------------------
ALTER TABLE `artists` AUTO_INCREMENT=2;

-- ----------------------------
-- Auto increment value for categories
-- ----------------------------
ALTER TABLE `categories` AUTO_INCREMENT=2;

-- ----------------------------
-- Auto increment value for videos
-- ----------------------------
ALTER TABLE `videos` AUTO_INCREMENT=4;
