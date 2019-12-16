/*
SQLyog Ultimate v12.14 (64 bit)
MySQL - 10.0.38-MariaDB : Database - landing
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`landing` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `landing`;

/*Table structure for table `auth_assignment` */

DROP TABLE IF EXISTS `auth_assignment`;

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `idx-auth_assignment-user_id` (`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_assignment` */

insert  into `auth_assignment`(`item_name`,`user_id`,`created_at`) values 
('Admin','1',1576314830);

/*Table structure for table `auth_item` */

DROP TABLE IF EXISTS `auth_item`;

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_item` */

insert  into `auth_item`(`name`,`type`,`description`,`rule_name`,`data`,`created_at`,`updated_at`) values 
('/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/back-menu/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/back-menu/create',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/back-menu/delete',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/back-menu/index',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/back-menu/update',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/back-menu/view',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/editable/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/editable/change-about-me',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/editable/change-comment-status',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/editable/change-contact',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/editable/change-cv',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/editable/change-password',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/editable/change-photo',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/editable/change-subcriber-status',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/editable/change-text',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/editable/change-user-status',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/front-menu/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/front-menu/create',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/front-menu/delete',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/front-menu/index',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/front-menu/update',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/front-menu/view',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/main/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/main/error',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/main/forgot-password',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/main/index',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/main/login',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/main/login-details',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/main/logout',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/main/profile',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/main/reset-password',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/main/subcribers',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/main/user-info',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/pages/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/pages/create',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/pages/delete',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/pages/index',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/pages/update',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/pages/view',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/settings/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/settings/create',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/settings/delete',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/settings/edit-setting',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/settings/index',2,NULL,NULL,NULL,1576314736,1576314736),
('/admin/settings/update',2,NULL,NULL,NULL,1576314736,1576314736),
('/debug/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/debug/default/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/debug/default/db-explain',2,NULL,NULL,NULL,1576314736,1576314736),
('/debug/default/download-mail',2,NULL,NULL,NULL,1576314736,1576314736),
('/debug/default/index',2,NULL,NULL,NULL,1576314736,1576314736),
('/debug/default/toolbar',2,NULL,NULL,NULL,1576314736,1576314736),
('/debug/default/view',2,NULL,NULL,NULL,1576314736,1576314736),
('/debug/user/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/debug/user/reset-identity',2,NULL,NULL,NULL,1576314736,1576314736),
('/debug/user/set-identity',2,NULL,NULL,NULL,1576314736,1576314736),
('/gii/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/gii/default/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/gii/default/action',2,NULL,NULL,NULL,1576314736,1576314736),
('/gii/default/diff',2,NULL,NULL,NULL,1576314736,1576314736),
('/gii/default/index',2,NULL,NULL,NULL,1576314736,1576314736),
('/gii/default/preview',2,NULL,NULL,NULL,1576314736,1576314736),
('/gii/default/view',2,NULL,NULL,NULL,1576314736,1576314736),
('/main/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/main/about',2,NULL,NULL,NULL,1576314736,1576314736),
('/main/captcha',2,NULL,NULL,NULL,1576314736,1576314736),
('/main/contact',2,NULL,NULL,NULL,1576314736,1576314736),
('/main/error',2,NULL,NULL,NULL,1576314736,1576314736),
('/main/index',2,NULL,NULL,NULL,1576314736,1576314736),
('/main/login',2,NULL,NULL,NULL,1576314736,1576314736),
('/main/logout',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/assignment/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/assignment/assign',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/assignment/index',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/assignment/remove',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/assignment/view',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/permission/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/permission/assign',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/permission/create',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/permission/delete',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/permission/index',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/permission/remove',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/permission/update',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/permission/view',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/role/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/role/assign',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/role/create',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/role/delete',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/role/index',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/role/remove',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/role/update',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/role/view',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/route/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/route/assign',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/route/index',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/route/refresh',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/route/remove',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/rule/*',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/rule/create',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/rule/delete',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/rule/index',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/rule/update',2,NULL,NULL,NULL,1576314736,1576314736),
('/rbac/rule/view',2,NULL,NULL,NULL,1576314736,1576314736),
('Admin',2,'Admin',NULL,NULL,1576314799,1576314799);

/*Table structure for table `auth_item_child` */

DROP TABLE IF EXISTS `auth_item_child`;

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_item_child` */

insert  into `auth_item_child`(`parent`,`child`) values 
('Admin','/*'),
('Admin','/admin/*'),
('Admin','/admin/back-menu/*'),
('Admin','/admin/back-menu/create'),
('Admin','/admin/back-menu/delete'),
('Admin','/admin/back-menu/index'),
('Admin','/admin/back-menu/update'),
('Admin','/admin/back-menu/view'),
('Admin','/admin/editable/*'),
('Admin','/admin/editable/change-about-me'),
('Admin','/admin/editable/change-comment-status'),
('Admin','/admin/editable/change-contact'),
('Admin','/admin/editable/change-cv'),
('Admin','/admin/editable/change-password'),
('Admin','/admin/editable/change-photo'),
('Admin','/admin/editable/change-subcriber-status'),
('Admin','/admin/editable/change-text'),
('Admin','/admin/editable/change-user-status'),
('Admin','/admin/front-menu/*'),
('Admin','/admin/front-menu/create'),
('Admin','/admin/front-menu/delete'),
('Admin','/admin/front-menu/index'),
('Admin','/admin/front-menu/update'),
('Admin','/admin/front-menu/view'),
('Admin','/admin/main/*'),
('Admin','/admin/main/error'),
('Admin','/admin/main/forgot-password'),
('Admin','/admin/main/index'),
('Admin','/admin/main/login'),
('Admin','/admin/main/login-details'),
('Admin','/admin/main/logout'),
('Admin','/admin/main/profile'),
('Admin','/admin/main/reset-password'),
('Admin','/admin/main/subcribers'),
('Admin','/admin/main/user-info'),
('Admin','/admin/pages/*'),
('Admin','/admin/pages/create'),
('Admin','/admin/pages/delete'),
('Admin','/admin/pages/index'),
('Admin','/admin/pages/update'),
('Admin','/admin/pages/view'),
('Admin','/admin/settings/*'),
('Admin','/admin/settings/create'),
('Admin','/admin/settings/delete'),
('Admin','/admin/settings/edit-setting'),
('Admin','/admin/settings/index'),
('Admin','/admin/settings/update'),
('Admin','/debug/*'),
('Admin','/debug/default/*'),
('Admin','/debug/default/db-explain'),
('Admin','/debug/default/download-mail'),
('Admin','/debug/default/index'),
('Admin','/debug/default/toolbar'),
('Admin','/debug/default/view'),
('Admin','/debug/user/*'),
('Admin','/debug/user/reset-identity'),
('Admin','/debug/user/set-identity'),
('Admin','/gii/*'),
('Admin','/gii/default/*'),
('Admin','/gii/default/action'),
('Admin','/gii/default/diff'),
('Admin','/gii/default/index'),
('Admin','/gii/default/preview'),
('Admin','/gii/default/view'),
('Admin','/main/*'),
('Admin','/main/about'),
('Admin','/main/captcha'),
('Admin','/main/contact'),
('Admin','/main/error'),
('Admin','/main/index'),
('Admin','/main/login'),
('Admin','/main/logout'),
('Admin','/rbac/*'),
('Admin','/rbac/assignment/*'),
('Admin','/rbac/assignment/assign'),
('Admin','/rbac/assignment/index'),
('Admin','/rbac/assignment/remove'),
('Admin','/rbac/assignment/view'),
('Admin','/rbac/permission/*'),
('Admin','/rbac/permission/assign'),
('Admin','/rbac/permission/create'),
('Admin','/rbac/permission/delete'),
('Admin','/rbac/permission/index'),
('Admin','/rbac/permission/remove'),
('Admin','/rbac/permission/update'),
('Admin','/rbac/permission/view'),
('Admin','/rbac/role/*'),
('Admin','/rbac/role/assign'),
('Admin','/rbac/role/create'),
('Admin','/rbac/role/delete'),
('Admin','/rbac/role/index'),
('Admin','/rbac/role/remove'),
('Admin','/rbac/role/update'),
('Admin','/rbac/role/view'),
('Admin','/rbac/route/*'),
('Admin','/rbac/route/assign'),
('Admin','/rbac/route/index'),
('Admin','/rbac/route/refresh'),
('Admin','/rbac/route/remove'),
('Admin','/rbac/rule/*'),
('Admin','/rbac/rule/create'),
('Admin','/rbac/rule/delete'),
('Admin','/rbac/rule/index'),
('Admin','/rbac/rule/update'),
('Admin','/rbac/rule/view');

/*Table structure for table `auth_rule` */

DROP TABLE IF EXISTS `auth_rule`;

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_rule` */

/*Table structure for table `back_menu` */

DROP TABLE IF EXISTS `back_menu`;

CREATE TABLE `back_menu` (
  `nodeid` int(6) NOT NULL AUTO_INCREMENT,
  `parentnodeid` int(6) DEFAULT '0',
  `page_id` int(11) DEFAULT '0',
  `nodeshortname` varchar(50) DEFAULT NULL,
  `nodename` varchar(100) NOT NULL,
  `nodeurl` varchar(255) NOT NULL,
  `userstatus` varchar(10) DEFAULT 'ALL',
  `nodeaccess` int(1) DEFAULT NULL,
  `nodestatus` int(1) DEFAULT NULL,
  `nodeorder` int(3) DEFAULT NULL,
  `nodefile` varchar(255) DEFAULT NULL,
  `nodeicon` varchar(50) DEFAULT NULL,
  `ishasdivider` enum('no','yes') DEFAULT 'no',
  `hasnotify` enum('no','yes') DEFAULT 'no',
  `notifyscript` varchar(255) DEFAULT '',
  `isforguest` enum('no','yes') DEFAULT 'yes',
  `arrow_tag` varchar(255) DEFAULT NULL,
  `position` enum('left','right','top') DEFAULT NULL,
  PRIMARY KEY (`nodeid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

/*Data for the table `back_menu` */

insert  into `back_menu`(`nodeid`,`parentnodeid`,`page_id`,`nodeshortname`,`nodename`,`nodeurl`,`userstatus`,`nodeaccess`,`nodestatus`,`nodeorder`,`nodefile`,`nodeicon`,`ishasdivider`,`hasnotify`,`notifyscript`,`isforguest`,`arrow_tag`,`position`) values 
(1,0,0,'Dashboard','Dashboard','/admin','ALL',1,NULL,4,NULL,'','no','no','','yes',NULL,NULL),
(2,1,0,'Home page','Home page','/admin','ALL',1,NULL,2,NULL,'','no','no','','yes',NULL,NULL),
(3,1,0,'Go To Site','Go To Site','/','ALL',1,NULL,7,NULL,'','no','no','','yes',NULL,NULL),
(4,0,0,'Projects','Projects','#','ALL',1,NULL,9,NULL,'','no','no','','yes',NULL,NULL),
(5,4,0,'Project info','Projects info','/admin/project/index','ALL',1,NULL,32,NULL,'','no','no','','yes',NULL,NULL),
(6,4,0,'Project Coordinator, Participants and Partners ','Project Coordinator, Participants and Partners ','/admin/coordinator/index','ALL',1,NULL,34,NULL,'','no','no','','yes',NULL,NULL),
(7,0,0,'Publications','Publications','/','ALL',1,NULL,11,NULL,'','no','no','','yes',NULL,NULL),
(8,7,0,'Publication List','Publication List','/admin/publication/index','ALL',1,NULL,12,NULL,'','no','no','','yes',NULL,NULL),
(9,7,0,'Add Publication','Add Publication','/admin/publication/create','ALL',1,NULL,14,NULL,'','no','no','','yes',NULL,NULL),
(10,0,0,'Events','Events','#','ALL',1,NULL,15,NULL,'','no','no','','yes',NULL,NULL),
(11,10,0,'Events List','Events List','/admin/events/index','ALL',1,NULL,16,NULL,'','no','no','','yes',NULL,NULL),
(12,10,0,'Add Event','Add Event','/admin/events/create','ALL',1,NULL,17,NULL,'','no','no','','yes',NULL,NULL),
(13,0,0,'News','News','#','ALL',1,NULL,18,NULL,'','no','no','','yes',NULL,NULL),
(14,13,0,'News List','News List','/admin/news/index','ALL',1,NULL,19,NULL,'','no','no','','yes',NULL,NULL),
(15,13,0,'Add News','Add News','/admin/news/create','ALL',1,NULL,20,NULL,'','no','no','','yes',NULL,NULL),
(16,0,0,'Contacts','Contacts','#','ALL',1,NULL,21,NULL,'','no','no','','yes',NULL,NULL),
(17,16,0,'Contacts Data','Contacts Data','/admin/contacts/index','ALL',1,NULL,36,NULL,'','no','no','','yes',NULL,NULL),
(18,0,0,'Settings','Settings','#','ALL',1,NULL,23,NULL,'','no','no','','yes',NULL,NULL),
(19,18,0,'Profile','Profile','/admin/user/profile','ALL',1,NULL,24,NULL,'','no','no','','yes',NULL,NULL),
(20,18,0,'Site Setting','Site Settings','/admin/settings','ALL',1,NULL,0,NULL,'','no','no','','yes',NULL,NULL),
(21,0,0,'Menu','Menu','#','ALL',1,NULL,25,NULL,'','no','no','','yes',NULL,NULL),
(22,21,0,'Admin Menu','Admin Menu Items','/admin/back-menu/index','ALL',1,NULL,27,NULL,'','no','no','','yes',NULL,NULL),
(23,21,0,'Site Menu Items','Site Menu Items','/admin/front-menu/index','ALL',1,NULL,28,NULL,'','no','no','','yes',NULL,NULL),
(24,0,0,'Slider','Slider','#','ALL',1,NULL,29,NULL,'','no','no','','yes',NULL,NULL),
(25,24,0,'Slide List','Slide List','/admin/slider/index','ALL',1,NULL,30,NULL,'','no','no','','yes',NULL,NULL),
(26,24,0,'Add Slider','Add Slider','/admin/slider/create','ALL',1,NULL,31,NULL,'','no','no','','yes',NULL,NULL),
(27,4,0,'Projects Team','Projects Team','/admin/team/index','ALL',1,NULL,35,NULL,'','no','no','','yes',NULL,NULL);

/*Table structure for table `call_for_proposal` */

DROP TABLE IF EXISTS `call_for_proposal`;

CREATE TABLE `call_for_proposal` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `call_for_proposal` */

insert  into `call_for_proposal`(`id`,`name`,`description`,`status`,`created_at`,`created_by`,`updated_at`,`updated_by`,`project_id`) values 
(1,'qweqweq','qweqeqqe',1,1576428352,1,NULL,NULL,1),
(2,'qweqweq','lplplpp',1,1576431408,1,NULL,NULL,1),
(3,'dawdad','',1,1576433169,1,NULL,NULL,1),
(4,'dawda','',1,1576433190,1,NULL,NULL,1),
(5,'eee','',1,1576433226,1,NULL,NULL,1),
(6,'qweqwe','qweqeq',1,1576434375,1,NULL,NULL,1),
(7,'adwad','adwada',1,1576434814,1,NULL,NULL,1);

/*Table structure for table `contacts` */

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(1000) DEFAULT NULL,
  `country` varchar(1000) DEFAULT NULL,
  `university` varchar(1000) DEFAULT NULL,
  `address` varchar(1000) NOT NULL,
  `tel` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `fax` varchar(500) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `contacts` */

/*Table structure for table `coordinator` */

DROP TABLE IF EXISTS `coordinator`;

CREATE TABLE `coordinator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unversity` varchar(800) NOT NULL,
  `country` varchar(500) NOT NULL,
  `address` varchar(800) NOT NULL,
  `activity_type` varchar(800) DEFAULT 'Other',
  `project_id` int(11) DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `eu_contribution` double DEFAULT NULL,
  `web_site` varchar(800) DEFAULT NULL,
  `org_contact` varchar(800) DEFAULT NULL,
  `type` enum('Coordinator','Participant','Partner') DEFAULT NULL,
  `country_flag` varchar(500) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `coordinator` */

/*Table structure for table `event_categories` */

DROP TABLE IF EXISTS `event_categories`;

CREATE TABLE `event_categories` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `event_categories` */

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `description` text,
  `date_from` datetime DEFAULT NULL,
  `date_to` datetime DEFAULT NULL,
  `category_id` int(6) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `events` */

/*Table structure for table `front_menu` */

DROP TABLE IF EXISTS `front_menu`;

CREATE TABLE `front_menu` (
  `nodeid` int(6) NOT NULL AUTO_INCREMENT,
  `parentnodeid` int(6) DEFAULT '0',
  `page_id` int(11) DEFAULT '0',
  `nodeshortname` varchar(50) DEFAULT NULL,
  `nodename` varchar(100) NOT NULL,
  `nodeurl` varchar(255) NOT NULL,
  `userstatus` varchar(10) DEFAULT 'ALL',
  `nodeaccess` int(1) DEFAULT NULL,
  `nodestatus` int(1) DEFAULT NULL,
  `nodeorder` int(3) DEFAULT NULL,
  `nodefile` varchar(255) DEFAULT NULL,
  `nodeicon` varchar(50) DEFAULT NULL,
  `ishasdivider` enum('no','yes') DEFAULT 'no',
  `hasnotify` enum('no','yes') DEFAULT 'no',
  `notifyscript` varchar(255) DEFAULT '',
  `isforguest` enum('no','yes') DEFAULT 'yes',
  `arrow_tag` varchar(255) DEFAULT NULL,
  `position` enum('left','right','top') DEFAULT NULL,
  PRIMARY KEY (`nodeid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `front_menu` */

insert  into `front_menu`(`nodeid`,`parentnodeid`,`page_id`,`nodeshortname`,`nodename`,`nodeurl`,`userstatus`,`nodeaccess`,`nodestatus`,`nodeorder`,`nodefile`,`nodeicon`,`ishasdivider`,`hasnotify`,`notifyscript`,`isforguest`,`arrow_tag`,`position`) values 
(1,0,0,'Home','Home','/','ALL',1,NULL,1,NULL,'','no','no','','yes',NULL,NULL),
(2,0,0,'About','About','#','ALL',1,NULL,2,NULL,'','no','no','','yes',NULL,NULL),
(3,2,0,'NEW MARKET','NEW MARKET','/','ALL',1,NULL,0,NULL,'','no','no','','yes',NULL,NULL),
(4,2,0,'Team','Team','/','ALL',1,NULL,3,NULL,'','no','no','','yes',NULL,NULL),
(5,0,0,'Publications','Publications','/','ALL',1,NULL,4,NULL,'','no','no','','yes',NULL,NULL),
(6,0,0,'Events','Events','/','ALL',1,NULL,5,NULL,'','no','no','','yes',NULL,NULL),
(7,0,0,'News','News','/','ALL',1,NULL,6,NULL,'','no','no','','yes',NULL,NULL),
(8,0,0,'Contact Us','Contact Us','/','ALL',1,NULL,7,NULL,'','no','no','','yes',NULL,NULL);

/*Table structure for table `funding_scheme` */

DROP TABLE IF EXISTS `funding_scheme`;

CREATE TABLE `funding_scheme` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `funding_scheme` */

insert  into `funding_scheme`(`id`,`title`,`description`,`status`,`created_at`,`created_by`,`updated_at`,`updated_by`,`project_id`) values 
(1,'qweqeqweqeq','qeqeqeqeq',1,1576428359,1,NULL,NULL,1),
(2,'awdawd','adada',1,1576434818,1,NULL,NULL,1);

/*Table structure for table `login_details` */

DROP TABLE IF EXISTS `login_details`;

CREATE TABLE `login_details` (
  `login_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_user_id` int(11) NOT NULL,
  `login_status` tinyint(1) NOT NULL DEFAULT '0',
  `login_at` datetime NOT NULL,
  `logout_at` datetime DEFAULT NULL,
  `user_ip_address` varchar(16) NOT NULL,
  PRIMARY KEY (`login_detail_id`),
  KEY `login_user_id` (`login_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `login_details` */

insert  into `login_details`(`login_detail_id`,`login_user_id`,`login_status`,`login_at`,`logout_at`,`user_ip_address`) values 
(1,1,1,'2019-12-11 14:36:38',NULL,'127.0.0.1'),
(2,1,1,'2019-12-11 14:39:43',NULL,'127.0.0.1'),
(3,1,1,'2019-12-11 14:46:50',NULL,'127.0.0.1'),
(4,1,1,'2019-12-12 21:58:01',NULL,'127.0.0.1'),
(5,1,1,'2019-12-14 11:16:05',NULL,'127.0.0.1'),
(6,1,1,'2019-12-14 13:48:29',NULL,'127.0.0.1'),
(7,1,1,'2019-12-14 14:21:35',NULL,'127.0.0.1'),
(8,1,1,'2019-12-15 10:48:29',NULL,'127.0.0.1'),
(9,1,1,'2019-12-15 10:49:00',NULL,'127.0.0.1'),
(10,1,1,'2019-12-15 10:49:56',NULL,'127.0.0.1');

/*Table structure for table `migration` */

DROP TABLE IF EXISTS `migration`;

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `migration` */

insert  into `migration`(`version`,`apply_time`) values 
('m000000_000000_base',1576307146),
('m140506_102106_rbac_init',1576314483),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id',1576314483),
('m180523_151638_rbac_updates_indexes_without_prefix',1576314484);

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `description` text,
  `publish_date` datetime DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `news` */

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(6) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `author` varchar(255) DEFAULT NULL,
  `date_post` datetime DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `posts` */

/*Table structure for table `programme` */

DROP TABLE IF EXISTS `programme`;

CREATE TABLE `programme` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `programme` */

insert  into `programme`(`id`,`name`,`description`,`status`,`created_at`,`created_by`,`updated_at`,`updated_by`,`project_id`) values 
(1,'Project Programm','',1,1576425774,1,NULL,NULL,1),
(2,'1231','31231',1,1576432994,1,NULL,NULL,1),
(3,'www','',1,1576433154,1,NULL,NULL,1),
(4,'8787','koko',1,1576433990,1,NULL,NULL,1),
(5,'qweq','qweqeq',1,1576434269,1,NULL,NULL,1),
(6,'qwewqeqeq','',1,1576434325,1,NULL,NULL,1),
(7,'qeqweq','qeqeqeq',1,1576434332,1,NULL,NULL,1),
(8,'qwewqeq','qweqewq',1,1576434384,1,NULL,NULL,1),
(9,'qweqeq','qweqeq',1,1576434389,1,NULL,NULL,1),
(10,'88','',1,1576434543,1,NULL,NULL,1),
(11,'99','',1,1576434549,1,NULL,NULL,1),
(12,'dawda','awdawda',1,1576434801,1,NULL,NULL,1);

/*Table structure for table `project` */

DROP TABLE IF EXISTS `project`;

CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `description` text,
  `objective` text,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `grant_agreement_id` int(11) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `project` */

insert  into `project`(`id`,`title`,`description`,`objective`,`start_date`,`end_date`,`grant_agreement_id`,`link`,`status`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'My project','description','objective 131231qweqeqweqw','1900-12-01','1900-12-29',558855,'22323232',1,1576434792,1,NULL,NULL);

/*Table structure for table `publication` */

DROP TABLE IF EXISTS `publication`;

CREATE TABLE `publication` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `description` text,
  `status` int(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `publication` */

/*Table structure for table `setting` */

DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `setting` */

insert  into `setting`(`id`,`type`,`section`,`key`,`value`,`status`,`description`,`created_at`,`updated_at`) values 
(1,'string','Site','sitename','New Market',1,'It\'s site name and used like Title in home page',1575215973,1576388758),
(2,'string','Site','description','An exploration into the changing nature of business environments, informal barriers and emerging markets in the post-Soviet region',1,'Describe site',1575216197,1576388786),
(3,'string','test','test','test',0,'test',1575373966,1576057982),
(4,'string','Site','empty_result','Here is not any data yet!',1,'if page have not any data',1575808004,1575808004),
(5,'string','Descriptons','email_contact','Lorem ipsum dolor',1,'its for contact',1575904089,1575904232),
(6,'string','Descriptons','phone_number_contact','Lorem ipsum dolor',1,'its for contact page',1575904143,1575904165),
(7,'string','Descriptons','location_contact','Lorem ipsum dolor',1,'its for contact',1575904199,1575904215),
(8,'string','Contact','contact_form_title','Leave us your info',1,'',1575905501,1575905501),
(9,'string','Contact','contact_form_title2','and we will get back to you.',1,'',1575905536,1575905536),
(10,'string','Contact','contact_form_description','Lorem ipsum dolor',1,'Contact form description',1575905789,1575905789),
(11,'string','Site','share_post','You can share this blog post on the following social networks by clicking on their icon.',1,'Text for share buttons description',1575997913,1575997913);

/*Table structure for table `slider` */

DROP TABLE IF EXISTS `slider`;

CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id',
  `title` varchar(500) DEFAULT NULL COMMENT 'Title',
  `description` varchar(500) DEFAULT NULL COMMENT 'Description',
  `img_url` varchar(500) NOT NULL COMMENT 'Image Url',
  `slide_cover` varchar(500) DEFAULT NULL,
  `is_has_btn` tinyint(1) DEFAULT NULL COMMENT 'Is Has Button',
  `btn_title` varchar(50) DEFAULT NULL COMMENT 'Button Title',
  `btn_link` varchar(500) DEFAULT NULL COMMENT 'Button Link',
  `order` tinyint(2) DEFAULT NULL COMMENT 'Order',
  `access` tinyint(2) NOT NULL DEFAULT '1' COMMENT 'Status',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `slider` */

insert  into `slider`(`id`,`title`,`description`,`img_url`,`slide_cover`,`is_has_btn`,`btn_title`,`btn_link`,`order`,`access`) values 
(1,'New Market:','an exploration into the changing nature of business environments, informal barriers and emerging markets in the post-Soviet region','Untitled-1.jpg','',1,'About Us','/main/about-us',0,1),
(2,'The EU-funded NEW MARKETS','project will detect invisible and non-official risks that could harm foreign business activity.','Untitled-2.jpg',NULL,1,'About Us','/main/about-us',1,1);

/*Table structure for table `team` */

DROP TABLE IF EXISTS `team`;

CREATE TABLE `team` (
  `id` int(6) NOT NULL,
  `university` varchar(800) NOT NULL,
  `person` varchar(500) NOT NULL,
  `responsibility` varchar(255) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `team` */

/*Table structure for table `topic` */

DROP TABLE IF EXISTS `topic`;

CREATE TABLE `topic` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `topic` */

insert  into `topic`(`id`,`name`,`description`,`status`,`created_at`,`created_by`,`updated_at`,`updated_by`,`project_id`) values 
(1,'dawda','awdada',1,1576428339,1,NULL,NULL,1),
(2,'dawda','awdada',1,1576434656,1,NULL,NULL,1),
(3,'dawda','dawda',1,1576434808,1,NULL,NULL,1);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(65) NOT NULL,
  `user_password` varchar(150) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `user_type` char(2) NOT NULL,
  `is_block` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` varchar(500) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `secret_key` varchar(255) DEFAULT NULL,
  `auth_key` varchar(255) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_login_id` (`username`),
  KEY `updated_by` (`updated_by`),
  KEY `created_by` (`created_by`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`user_id`,`username`,`user_password`,`email`,`user_type`,`is_block`,`avatar`,`created_at`,`created_by`,`updated_at`,`updated_by`,`secret_key`,`auth_key`,`session_id`) values 
(1,'admin','f6fdffe48c908deb0f4c3bd36c032e72','abel.polese@tlu.ee','A',0,'person_abel_polese-300x286.jpg','2019-10-12 14:32:54',1,'2015-05-27 15:56:35',1,'IoY4IvIAdoXtwJSsVucGTPET0gNMjgr3_1575801111',NULL,'tnc7cfake3f45opfdmmbo93hs32b6q6g'),
(22,'admin2','af8eb328301d219cfd1d50e6c6a48f58',NULL,'A',0,'std5.jpg','2019-10-12 13:45:41',1,NULL,NULL,NULL,NULL,'i44c6ra6ukintfbsfc83gfcelnb5qifb'),
(23,'admin3','7169390683d2b222ba778ca6374b59d3',NULL,'A',0,'std7.jpg','2019-10-12 13:52:10',1,NULL,NULL,NULL,NULL,'ak5h7tnec99b69cipd80ralc0p2fa23l'),
(25,'admin4','dfa5f43cb476ef890a83010f0da7c6b0',NULL,'A',0,'std3.jpg','2019-10-12 13:57:57',1,NULL,NULL,NULL,NULL,'2pqp9rissts870sj830jkor0jntj15h9'),
(26,'admin6','b48d62f30f50c2c191ab949186c532d3',NULL,'A',0,'std6.jpg','2019-10-12 14:05:01',1,NULL,NULL,NULL,NULL,'90c8pfqa6cchpcofouj9qsl1hvngu3f3');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
