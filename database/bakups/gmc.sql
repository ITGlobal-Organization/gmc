/*
SQLyog Community v13.1.1 (64 bit)
MySQL - 8.0.35 : Database - gmc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gmc` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `gmc`;

/*Table structure for table `blogs` */

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `publisher` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_at` datetime NOT NULL,
  `author` bigint DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `blogs` */

insert  into `blogs`(`id`,`title`,`description`,`publisher`,`publish_at`,`author`,`is_active`,`is_delete`,`created_at`,`updated_at`,`slug`,`is_approved`) values 
(2,'Consequuntur quis es','<p>lsjdflsda lfsadhl fhsadl fhsl;adfh sad;lfh lsad; fa ssda; fsda; fsd;a fhsad;f sadh;f was;edf sda;fhsda;fhsadl;fh sad;lf sdafsad;f hsa;df ;sadfh sd;ahf sda;hf</p>','Quibusdam delectus','2023-10-12 11:00:00',0,0,0,'2023-10-18 07:00:40','2023-10-18 07:02:55','eos-maxime-doloribus',1),
(3,'Accusantium tempora','<p>sadfj lasdjfl sdajflsdah f;sad fhasdhfasd; f;sdafhsad;fh ;sadhflsd;a hflsdahfl;sad hfl;dsah fl;hsdal ;fhsad;lf; as fsa fh;sdla hfld;sahf sad f a;afh a;slhfas;lh f;asldhf l;asdhf lsad fl hsahf lsdahf lsdahf lsda hflsa;dh fl;sah fd;lsadhf</p>','Natus porro quis tot','2023-10-06 16:59:00',0,1,0,'2023-10-18 13:00:22','2023-10-18 13:00:22','sit-ut-et-quas-id-q',1),
(4,'Et doloribus consequ','<p>klsadfh skladhfkads fsadl;f jlsa;dfh sa;dlfh l;sadhf sah f;sadh f;lsadfh lsad;hf lsa;hfls;a dhfl; sahflh sal;dfhsdal;hf l;sadh fl;sadhfl; sahflhsda sadf dsafsda fsdaf sdaf sad fsadf sadf sadfsadfsdaf sadfsad</p>','Iure ipsam labore la','2023-10-05 17:02:00',0,0,0,'2023-10-18 13:03:00','2023-10-18 13:18:36','elit-laboris-amet',1),
(5,'Velit incidunt in o','<p>asfdnslkaj flsdafl ;sadhfl;sdahfl;sad hfl;sdahf ;lsdafh l;sadfhl;dsa fhl;sad hfl;sdahfl;sdahfl;</p>','Excepteur incidunt','2023-10-04 17:06:00',62,1,0,'2023-10-22 13:07:13','2023-10-22 13:07:13','aut-sed-nulla-dolore',1),
(6,'Distinctio Ea volup','<p>fsdafkds a;jf;dsa jf;sdajf ;sad\'jf;sad fj;asd f;asd jf;\'sadjf;sadjf;</p>','Aliquid atque tenetu','2023-10-04 17:12:00',66,1,0,'2023-10-22 13:12:44','2023-10-22 13:12:44','amet-repellendus-a',1);

/*Table structure for table `directories` */

DROP TABLE IF EXISTS `directories`;

CREATE TABLE `directories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_approved` tinyint DEFAULT '1',
  `user_id` bigint DEFAULT '0',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `venue_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `directories` */

insert  into `directories`(`id`,`title`,`description`,`is_active`,`is_delete`,`created_at`,`updated_at`,`is_approved`,`user_id`,`slug`,`mobile_no`,`phone`,`address`,`email`,`web_url`,`venue_url`,`facebook_url`,`instagram_url`,`linkedin_url`,`youtube_url`) values 
(10,'Ut est eiusmod eum','<p>adfjdsal fsdalhf lsdafhl sadfl;asd hflsda flsdah fhsadf hsdlaf hlas dflashd f;lsdahflsdah flsadhl fhsdalf hsdl;ahf;lsdahfldsahfldsahflsdahf;lsdahf;lsedahf</p>',1,0,'2023-10-30 00:43:00','2023-10-30 00:43:00',1,66,NULL,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(11,'abc','<p>www.abcd.com</p>',1,0,'2023-11-01 16:43:42','2023-11-01 16:48:54',1,62,NULL,'11111111111','11111111111','www.abcd.com','abc@gmail.com','https://www.abcd.com','https://www.abcd.com','https://www.abcd.com','https://www.abcd.com','https://www.abcd.com','https://www.abcd.com');

/*Table structure for table `event_calenders` */

DROP TABLE IF EXISTS `event_calenders`;

CREATE TABLE `event_calenders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_approved` tinyint DEFAULT '1',
  `event_date` datetime NOT NULL,
  `venue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `user_id` bigint DEFAULT '0',
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` time DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `event_calenders` */

insert  into `event_calenders`(`id`,`title`,`description`,`is_active`,`is_delete`,`created_at`,`updated_at`,`is_approved`,`event_date`,`venue`,`price`,`user_id`,`city`,`time`,`slug`,`booking_link`) values 
(8,'abc','<p>abc</p>',1,0,'2023-11-02 15:57:36','2023-11-02 15:57:36',NULL,'2023-11-11 19:38:00','abc',40.5,62,'karachi','15:41:00',NULL,NULL),
(9,'test','<p>test</p>',1,0,'2023-11-02 16:04:57','2023-11-02 16:15:53',1,'2023-11-08 20:04:00','test',40,62,'karachi','16:07:00',NULL,'abc');

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_id` int NOT NULL DEFAULT '0',
  `image_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `img_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extension` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `images` */

insert  into `images`(`id`,`model`,`model_id`,`image_url`,`is_delete`,`img_type`,`created_at`,`updated_at`,`image_name`,`extension`,`is_active`) values 
(38,'App\\Models\\Blog',5,'http://gmc.test/media/about-4.jpg',0,'main','2023-10-18 05:22:35','2023-10-22 13:07:13','about-4.jpg','jpg',1),
(39,'App\\Models\\Blog',2,'http://gmc.test/media/b1.png',0,'main','2023-10-18 05:32:13','2023-10-18 07:02:55','b1.png','png',1),
(40,'App\\Models\\Blog',3,'http://gmc.test/media/aboutus-car.png',0,'main','2023-10-18 13:00:19','2023-10-18 13:00:22','aboutus-car.png','png',1),
(41,'App\\Models\\Blog',4,'http://gmc.test/media/b3.png',0,'main','2023-10-18 13:02:52','2023-10-18 13:18:37','b3.png','png',1),
(42,'App\\Models\\Employee',0,'http://gmc.test/media/about-4.jpg',0,'main','2023-10-22 07:39:55','2023-10-22 07:39:55','about-4.jpg','jpg',1),
(43,'App\\Models\\User',0,'http://gmc.test/media/about-4.jpg',0,'main','2023-10-22 08:25:36','2023-10-22 08:25:36','about-4.jpg','jpg',1),
(44,'App\\Models\\User',66,'http://gmc.test/media/b2.png',0,'main','2023-10-22 09:21:11','2023-10-22 09:27:15','b2.png','png',1),
(45,'App\\Models\\Blog',6,'http://gmc.test/media/b2.png',0,'main','2023-10-22 13:04:38','2023-10-22 13:12:44','b2.png','png',1),
(46,'App\\Models\\Blog',0,'http://gmc.test/media/1.jpg',0,'main','2023-10-22 13:06:14','2023-10-22 13:06:14','1.jpg','jpg',1),
(47,'App\\Models\\User',0,'http://gmc.test/media/1.jpg',0,'main','2023-10-22 13:11:30','2023-10-22 13:11:30','1.jpg','jpg',1),
(48,'App\\Models\\User',68,'http://gmc.test/media/app_bg.jpg',0,'main','2023-10-22 13:19:59','2023-10-22 13:20:02','app_bg.jpg','jpg',1),
(49,'App\\Models\\User',69,'http://gmc.test/media/404.png',0,'main','2023-10-28 12:52:25','2023-10-28 12:52:43','404.png','png',1),
(50,'App\\Models\\Directory',10,'http://gmc.test/media/1.jpg',0,'main','2023-10-30 00:42:57','2023-10-30 00:43:00','1.jpg','jpg',1),
(51,'App\\Models\\Directory',11,'http://gmc.test/media/download.jpg',0,'main','2023-11-01 16:39:12','2023-11-01 16:48:54','download.jpg','jpg',1),
(52,'App\\Models\\SpaceFinder',9,'http://gmc.test/media/download1.jpg',0,'main','2023-11-01 16:59:07','2023-11-02 14:29:27','download1.jpg','jpg',1),
(53,'App\\Models\\SpaceFinder',9,'http://gmc.test/media/download1.jpg',0,'main','2023-11-01 16:59:51','2023-11-02 14:29:27','download1.jpg','jpg',1),
(54,'App\\Models\\SpaceFinder',9,'http://gmc.test/media/download1.jpg',0,'main','2023-11-02 14:29:21','2023-11-02 14:29:27','download1.jpg','jpg',1);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2019_05_03_000001_create_customer_columns',1),
(2,'2019_05_03_000002_create_subscriptions_table',1),
(3,'2019_05_03_000003_create_subscription_items_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2023_10_14_120142_create_blogs_table',1);

/*Table structure for table `model_has_permissions` */

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `model_id` bigint unsigned NOT NULL,
  `permission_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `model_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_permissions` */

/*Table structure for table `model_has_roles` */

DROP TABLE IF EXISTS `model_has_roles`;

CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_roles` */

insert  into `model_has_roles`(`role_id`,`model_type`,`model_id`) values 
(5,'App\\Models\\User',60),
(6,'App\\Models\\User',66),
(6,'App\\Models\\User',67),
(6,'App\\Models\\User',68),
(6,'App\\Models\\User',69);

/*Table structure for table `pages` */

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `has_custom_view` tinyint(1) NOT NULL DEFAULT '1',
  `display_to_menu` tinyint(1) NOT NULL DEFAULT '0',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `is_home_page` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pages` */

insert  into `pages`(`id`,`name`,`slug`,`view`,`layout`,`description`,`is_active`,`has_custom_view`,`display_to_menu`,`is_delete`,`is_home_page`,`created_at`,`updated_at`) values 
(1,'Home','home','indexv1','layoutv2',NULL,1,1,1,0,1,NULL,NULL);

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values 
(5,'create',NULL,NULL),
(6,'edit',NULL,NULL),
(7,'delete',NULL,NULL),
(8,'update',NULL,NULL);

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

insert  into `personal_access_tokens`(`id`,`tokenable_type`,`tokenable_id`,`name`,`token`,`abilities`,`last_used_at`,`created_at`,`updated_at`) values 
(10,'App\\Models\\User',60,'API Token','ee83b7399affc9893abc6efdc938cd950c7b487e44079cc499af5d787eac2e1f','[\"*\"]',NULL,'2023-10-22 13:14:57','2023-10-22 13:14:57'),
(11,'App\\Models\\User',60,'API Token','f576ebacbcdf749b1a3c5beb509376620e36bcfc00444dde7969d0ca4fc638d5','[\"*\"]','2023-10-28 12:40:27','2023-10-24 15:52:45','2023-10-28 12:40:27'),
(12,'App\\Models\\User',60,'API Token','88b8c1b9bfe2e93bc80f14a3109fa337a5066d9388de998e53fa4a26960d1fda','[\"*\"]',NULL,'2023-10-28 12:41:23','2023-10-28 12:41:23'),
(13,'App\\Models\\User',60,'API Token','6b7870907208ccc252573a2b31bc52fc3844d66a4d8693fb38b7e09a567fd358','[\"*\"]',NULL,'2023-10-29 14:33:32','2023-10-29 14:33:32'),
(14,'App\\Models\\User',60,'API Token','0dbc96f979a2aee910ad6ec41aab59573acaad76da10dd96d6bc82d1ed1a2dfa','[\"*\"]',NULL,'2023-10-29 14:41:07','2023-10-29 14:41:07'),
(15,'App\\Models\\User',60,'API Token','fb9139ed71e021fa7598edb22ee9cd8002901c6db8d683e1c421a8316d6e90f4','[\"*\"]',NULL,'2023-10-29 14:43:38','2023-10-29 14:43:38'),
(16,'App\\Models\\User',60,'API Token','cd873166310ae6f039024d1f46257cb5b66b231021c002ae3063f62b44f2f2b0','[\"*\"]',NULL,'2023-10-29 23:59:16','2023-10-29 23:59:16'),
(17,'App\\Models\\User',60,'API Token','d136574ae27611927e6520aec59a9021abe2b787ea43539406d6cedd04aaf2f9','[\"*\"]',NULL,'2023-11-01 13:44:28','2023-11-01 13:44:28'),
(18,'App\\Models\\User',60,'API Token','0454720b6a2f9141f727b04cd3821a7dff7f7fce9b0d472842647f76cc50dc3c','[\"*\"]',NULL,'2023-11-01 16:07:10','2023-11-01 16:07:10'),
(19,'App\\Models\\User',60,'API Token','491026cee5300c30cb531bc058b99eedb324bb70ec75c132a9a14dc6dee03b94','[\"*\"]',NULL,'2023-11-02 14:15:12','2023-11-02 14:15:12');

/*Table structure for table `role_has_permissions` */

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint unsigned NOT NULL,
  `permission_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  KEY `role_has_permissions_permission_id_foreign` (`permission_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_has_permissions` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `guard` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`is_active`,`is_delete`,`created_at`,`updated_at`,`guard`) values 
(5,'admin',1,0,NULL,NULL,'admin'),
(6,'user',1,0,NULL,NULL,'user'),
(8,'employee',1,0,NULL,NULL,'employee');

/*Table structure for table `space_finders` */

DROP TABLE IF EXISTS `space_finders`;

CREATE TABLE `space_finders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_approved` tinyint DEFAULT '1',
  `user_id` bigint DEFAULT '0',
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `venue_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `space_finders` */

insert  into `space_finders`(`id`,`title`,`description`,`is_active`,`is_delete`,`created_at`,`updated_at`,`is_approved`,`user_id`,`mobile_no`,`phone`,`email`,`address`,`web_url`,`venue_url`,`facebook_url`,`instagram_url`,`linkedin_url`,`youtube_url`,`slug`) values 
(9,'abc','<p>https://www.abc.com</p>',1,0,'2023-11-01 16:59:39','2023-11-02 14:29:27',1,69,'11111111111','11111111111','abc@gmail.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com','https://www.abc.com',NULL);

/*Table structure for table `subscription_items` */

DROP TABLE IF EXISTS `subscription_items`;

CREATE TABLE `subscription_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subscription_id` bigint unsigned NOT NULL,
  `stripe_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscription_items_subscription_id_stripe_price_unique` (`subscription_id`,`stripe_price`),
  UNIQUE KEY `subscription_items_stripe_id_unique` (`stripe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `subscription_items` */

/*Table structure for table `subscriptions` */

DROP TABLE IF EXISTS `subscriptions`;

CREATE TABLE `subscriptions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscriptions_stripe_id_unique` (`stripe_id`),
  KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `subscriptions` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_email_verified` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `signin_at` datetime DEFAULT NULL,
  `is_logout` tinyint(1) NOT NULL DEFAULT '0',
  `logout_at` datetime DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_login` tinyint(1) DEFAULT '0',
  `login_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_last_four` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `last_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postalcode` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint DEFAULT '0',
  `username` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_no` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `venue_url` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_stripe_id_index` (`stripe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`first_name`,`email`,`phone`,`email_verified_at`,`is_email_verified`,`password`,`is_active`,`is_delete`,`signin_at`,`is_logout`,`logout_at`,`remember_token`,`created_at`,`updated_at`,`is_login`,`login_at`,`stripe_id`,`pm_type`,`pm_last_four`,`trial_ends_at`,`last_name`,`company`,`address`,`postalcode`,`is_approved`,`username`,`tel_no`,`venue_url`,`website`,`facebook_url`,`youtube_url`,`instagram_url`,`linkedin_url`) values 
(60,'admin','admin@gmail.com','03332424345','2023-10-14 12:55:16',0,'$2y$10$siVjd8k6VvqYKgExJI7Exu2wRVHm3Td5HxHfmeke5V6Vz0MkWTL3a',1,0,'2023-10-21 09:10:24',0,'2023-10-22 13:13:15',NULL,NULL,'2023-11-02 14:15:11',1,'2023-11-02 14:15:11',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(62,'Xena','gagorahyn@mailinator.com','1 2919651647',NULL,0,'$2y$10$uW88SHkbQvTtJdYqHfCff.OqCzjWFDSfu/Y4OXIVKcwzY.2GmKQUy',1,0,NULL,0,NULL,NULL,'2023-10-22 08:25:39','2023-10-22 08:25:39',0,NULL,NULL,NULL,NULL,NULL,'Hodges','Middleton Donaldson Inc','Molestias totam itaq','Temporibus est fuga',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(66,'Xena','gagorahyn1@mailinator.com','1 2919651647',NULL,0,'',1,0,NULL,0,NULL,NULL,'2023-10-22 08:31:46','2023-10-22 09:27:15',0,NULL,NULL,NULL,NULL,NULL,'Hodges','Middleton Donaldson Inc','Molestias totam itaq','Temporibus est fuga',1,'xena',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(67,'Hillary','jufymeqew@mailinator.com','3161620852',NULL,0,'',1,0,NULL,0,NULL,NULL,'2023-10-22 13:11:35','2023-10-22 13:12:03',0,NULL,NULL,NULL,NULL,NULL,'Roman','Morton Hale Plc','Neque molestiae temp','Id harum dolores ut',1,'adminuser',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(68,'Hope','qopegafo@mailinator.com','12356487965',NULL,0,'$2y$10$8MK2thXDeVW8zAzidXAPK.SwxjBMv1dBRNDdmSeZTFkdXTdfCsrFi',1,0,NULL,0,NULL,NULL,'2023-10-22 13:20:01','2023-10-22 13:20:01',0,NULL,NULL,NULL,NULL,NULL,'Howell','Jenkins and Petty Inc','Delectus eos non n','Aut iste sapiente mi',1,'hezelu',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(69,'Acton','fusohidim@mailinator.com','1235478622',NULL,0,'$2y$10$kQ8d8w/QeX1l6o1FShYjRONrEYkmCWUScbdYQiLOgTS4ApRurPtlG',1,0,NULL,0,NULL,NULL,'2023-10-28 12:52:43','2023-10-28 12:52:43',0,NULL,NULL,NULL,NULL,NULL,'Finley','Sherman Cotton Traders','Earum earum id paria','Commodo obcaecati au',1,'ririqir','02145786622222','https://www.cuxykyfafe.ws','https://www.cuxykyfafe.ws','https://www.cuxykyfafe.ws','https://www.cuxykyfafe.ws','https://www.cuxykyfafe.ws','https://www.cuxykyfafe.ws');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
