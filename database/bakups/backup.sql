-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: gmc
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `publisher` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_at` datetime NOT NULL,
  `author` bigint DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (2,'Consequuntur quis es','<p>lsjdflsda lfsadhl fhsadl fhsl;adfh sad;lfh lsad; fa ssda; fsda; fsd;a fhsad;f sadh;f was;edf sda;fhsda;fhsadl;fh sad;lf sdafsad;f hsa;df ;sadfh sd;ahf sda;hf</p>','Quibusdam delectus','2023-10-12 11:00:00',0,0,0,'2023-10-18 02:00:40','2023-10-18 02:02:55','eos-maxime-doloribus',1),(3,'Accusantium tempora','<p>sadfj lasdjfl sdajflsdah f;sad fhasdhfasd; f;sdafhsad;fh ;sadhflsd;a hflsdahfl;sad hfl;dsah fl;hsdal ;fhsad;lf; as fsa fh;sdla hfld;sahf sad f a;afh a;slhfas;lh f;asldhf l;asdhf lsad fl hsahf lsdahf lsdahf lsda hflsa;dh fl;sah fd;lsadhf</p>','Natus porro quis tot','2023-10-06 16:59:00',0,1,0,'2023-10-18 08:00:22','2023-10-18 08:00:22','sit-ut-et-quas-id-q',1),(4,'Et doloribus consequ','<p>klsadfh skladhfkads fsadl;f jlsa;dfh sa;dlfh l;sadhf sah f;sadh f;lsadfh lsad;hf lsa;hfls;a dhfl; sahflh sal;dfhsdal;hf l;sadh fl;sadhfl; sahflhsda sadf dsafsda fsdaf sdaf sad fsadf sadf sadfsadfsdaf sadfsad</p>','Iure ipsam labore la','2023-10-05 17:02:00',0,0,0,'2023-10-18 08:03:00','2023-10-18 08:18:36','elit-laboris-amet',1),(5,'Velit incidunt in o','<p>asfdnslkaj flsdafl ;sadhfl;sdahfl;sad hfl;sdahf ;lsdafh l;sadfhl;dsa fhl;sad hfl;sdahfl;sdahfl;</p>','Excepteur incidunt','2023-10-04 17:06:00',62,1,0,'2023-10-22 08:07:13','2023-10-22 08:07:13','aut-sed-nulla-dolore',1),(6,'Distinctio Ea volup','<p>fsdafkds a;jf;dsa jf;sdajf ;sad\'jf;sad fj;asd f;asd jf;\'sadjf;sadjf;</p>','Aliquid atque tenetu','2023-10-04 17:12:00',66,1,0,'2023-10-22 08:12:44','2023-10-22 08:12:44','amet-repellendus-a',1);
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directories`
--

DROP TABLE IF EXISTS `directories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directories`
--

LOCK TABLES `directories` WRITE;
/*!40000 ALTER TABLE `directories` DISABLE KEYS */;
INSERT INTO `directories` VALUES (10,'Ut est eiusmod eum','<p>adfjdsal fsdalhf lsdafhl sadfl;asd hflsda flsdah fhsadf hsdlaf hlas dflashd f;lsdahflsdah flsadhl fhsdalf hsdl;ahf;lsdahfldsahfldsahflsdahf;lsdahf;lsedahf</p>',1,0,'2023-10-29 19:43:00','2023-10-29 19:43:00',1,66);
/*!40000 ALTER TABLE `directories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_calenders`
--

DROP TABLE IF EXISTS `event_calenders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_calenders`
--

LOCK TABLES `event_calenders` WRITE;
/*!40000 ALTER TABLE `event_calenders` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_calenders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (38,'App\\Models\\Blog',5,'http://gmc.test/media/about-4.jpg',0,'main','2023-10-18 00:22:35','2023-10-22 08:07:13','about-4.jpg','jpg',1),(39,'App\\Models\\Blog',2,'http://gmc.test/media/b1.png',0,'main','2023-10-18 00:32:13','2023-10-18 02:02:55','b1.png','png',1),(40,'App\\Models\\Blog',3,'http://gmc.test/media/aboutus-car.png',0,'main','2023-10-18 08:00:19','2023-10-18 08:00:22','aboutus-car.png','png',1),(41,'App\\Models\\Blog',4,'http://gmc.test/media/b3.png',0,'main','2023-10-18 08:02:52','2023-10-18 08:18:37','b3.png','png',1),(42,'App\\Models\\Employee',0,'http://gmc.test/media/about-4.jpg',0,'main','2023-10-22 02:39:55','2023-10-22 02:39:55','about-4.jpg','jpg',1),(43,'App\\Models\\User',0,'http://gmc.test/media/about-4.jpg',0,'main','2023-10-22 03:25:36','2023-10-22 03:25:36','about-4.jpg','jpg',1),(44,'App\\Models\\User',66,'http://gmc.test/media/b2.png',0,'main','2023-10-22 04:21:11','2023-10-22 04:27:15','b2.png','png',1),(45,'App\\Models\\Blog',6,'http://gmc.test/media/b2.png',0,'main','2023-10-22 08:04:38','2023-10-22 08:12:44','b2.png','png',1),(46,'App\\Models\\Blog',0,'http://gmc.test/media/1.jpg',0,'main','2023-10-22 08:06:14','2023-10-22 08:06:14','1.jpg','jpg',1),(47,'App\\Models\\User',0,'http://gmc.test/media/1.jpg',0,'main','2023-10-22 08:11:30','2023-10-22 08:11:30','1.jpg','jpg',1),(48,'App\\Models\\User',68,'http://gmc.test/media/app_bg.jpg',0,'main','2023-10-22 08:19:59','2023-10-22 08:20:02','app_bg.jpg','jpg',1),(49,'App\\Models\\User',69,'http://gmc.test/media/404.png',0,'main','2023-10-28 07:52:25','2023-10-28 07:52:43','404.png','png',1),(50,'App\\Models\\Directory',10,'http://gmc.test/media/1.jpg',0,'main','2023-10-29 19:42:57','2023-10-29 19:43:00','1.jpg','jpg',1);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_05_03_000001_create_customer_columns',1),(2,'2019_05_03_000002_create_subscriptions_table',1),(3,'2019_05_03_000003_create_subscription_items_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_10_14_120142_create_blogs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `model_id` bigint unsigned NOT NULL,
  `permission_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `model_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (5,'App\\Models\\User',60),(6,'App\\Models\\User',66),(6,'App\\Models\\User',67),(6,'App\\Models\\User',68),(6,'App\\Models\\User',69);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (5,'create',NULL,NULL),(6,'edit',NULL,NULL),(7,'delete',NULL,NULL),(8,'update',NULL,NULL);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
INSERT INTO `personal_access_tokens` VALUES (10,'App\\Models\\User',60,'API Token','ee83b7399affc9893abc6efdc938cd950c7b487e44079cc499af5d787eac2e1f','[\"*\"]',NULL,'2023-10-22 08:14:57','2023-10-22 08:14:57'),(11,'App\\Models\\User',60,'API Token','f576ebacbcdf749b1a3c5beb509376620e36bcfc00444dde7969d0ca4fc638d5','[\"*\"]','2023-10-28 07:40:27','2023-10-24 10:52:45','2023-10-28 07:40:27'),(12,'App\\Models\\User',60,'API Token','88b8c1b9bfe2e93bc80f14a3109fa337a5066d9388de998e53fa4a26960d1fda','[\"*\"]',NULL,'2023-10-28 07:41:23','2023-10-28 07:41:23'),(13,'App\\Models\\User',60,'API Token','6b7870907208ccc252573a2b31bc52fc3844d66a4d8693fb38b7e09a567fd358','[\"*\"]',NULL,'2023-10-29 09:33:32','2023-10-29 09:33:32'),(14,'App\\Models\\User',60,'API Token','0dbc96f979a2aee910ad6ec41aab59573acaad76da10dd96d6bc82d1ed1a2dfa','[\"*\"]',NULL,'2023-10-29 09:41:07','2023-10-29 09:41:07'),(15,'App\\Models\\User',60,'API Token','fb9139ed71e021fa7598edb22ee9cd8002901c6db8d683e1c421a8316d6e90f4','[\"*\"]',NULL,'2023-10-29 09:43:38','2023-10-29 09:43:38'),(16,'App\\Models\\User',60,'API Token','cd873166310ae6f039024d1f46257cb5b66b231021c002ae3063f62b44f2f2b0','[\"*\"]',NULL,'2023-10-29 18:59:16','2023-10-29 18:59:16');
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `guard` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (5,'admin',1,0,NULL,NULL,'admin'),(6,'user',1,0,NULL,NULL,'user'),(8,'employee',1,0,NULL,NULL,'employee');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `space_finders`
--

DROP TABLE IF EXISTS `space_finders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `space_finders`
--

LOCK TABLES `space_finders` WRITE;
/*!40000 ALTER TABLE `space_finders` DISABLE KEYS */;
/*!40000 ALTER TABLE `space_finders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscription_items`
--

DROP TABLE IF EXISTS `subscription_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscription_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subscription_id` bigint unsigned NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscription_items_subscription_id_stripe_price_unique` (`subscription_id`,`stripe_price`),
  UNIQUE KEY `subscription_items_stripe_id_unique` (`stripe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscription_items`
--

LOCK TABLES `subscription_items` WRITE;
/*!40000 ALTER TABLE `subscription_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscription_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscriptions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscriptions_stripe_id_unique` (`stripe_id`),
  KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_last_four` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `last_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postalcode` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint DEFAULT '0',
  `username` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_no` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `venue_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_stripe_id_index` (`stripe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (60,'admin','admin@gmail.com','03332424345','2023-10-14 07:55:16',0,'$2y$10$siVjd8k6VvqYKgExJI7Exu2wRVHm3Td5HxHfmeke5V6Vz0MkWTL3a',1,0,'2023-10-21 09:10:24',0,'2023-10-22 13:13:15',NULL,NULL,'2023-10-29 18:59:14',1,'2023-10-29 18:59:14',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(62,'Xena','gagorahyn@mailinator.com','1 2919651647',NULL,0,'$2y$10$uW88SHkbQvTtJdYqHfCff.OqCzjWFDSfu/Y4OXIVKcwzY.2GmKQUy',1,0,NULL,0,NULL,NULL,'2023-10-22 03:25:39','2023-10-22 03:25:39',0,NULL,NULL,NULL,NULL,NULL,'Hodges','Middleton Donaldson Inc','Molestias totam itaq','Temporibus est fuga',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(66,'Xena','gagorahyn1@mailinator.com','1 2919651647',NULL,0,'',1,0,NULL,0,NULL,NULL,'2023-10-22 03:31:46','2023-10-22 04:27:15',0,NULL,NULL,NULL,NULL,NULL,'Hodges','Middleton Donaldson Inc','Molestias totam itaq','Temporibus est fuga',1,'xena',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(67,'Hillary','jufymeqew@mailinator.com','3161620852',NULL,0,'',1,0,NULL,0,NULL,NULL,'2023-10-22 08:11:35','2023-10-22 08:12:03',0,NULL,NULL,NULL,NULL,NULL,'Roman','Morton Hale Plc','Neque molestiae temp','Id harum dolores ut',1,'adminuser',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(68,'Hope','qopegafo@mailinator.com','12356487965',NULL,0,'$2y$10$8MK2thXDeVW8zAzidXAPK.SwxjBMv1dBRNDdmSeZTFkdXTdfCsrFi',1,0,NULL,0,NULL,NULL,'2023-10-22 08:20:01','2023-10-22 08:20:01',0,NULL,NULL,NULL,NULL,NULL,'Howell','Jenkins and Petty Inc','Delectus eos non n','Aut iste sapiente mi',1,'hezelu',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(69,'Acton','fusohidim@mailinator.com','1235478622',NULL,0,'$2y$10$kQ8d8w/QeX1l6o1FShYjRONrEYkmCWUScbdYQiLOgTS4ApRurPtlG',1,0,NULL,0,NULL,NULL,'2023-10-28 07:52:43','2023-10-28 07:52:43',0,NULL,NULL,NULL,NULL,NULL,'Finley','Sherman Cotton Traders','Earum earum id paria','Commodo obcaecati au',1,'ririqir','02145786622222','https://www.cuxykyfafe.ws','https://www.cuxykyfafe.ws','https://www.cuxykyfafe.ws','https://www.cuxykyfafe.ws','https://www.cuxykyfafe.ws','https://www.cuxykyfafe.ws');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'gmc'
--

--
-- Dumping routines for database 'gmc'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-30 23:53:09
