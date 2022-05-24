-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: fleet_management
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bus_seats`
--

DROP TABLE IF EXISTS `bus_seats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bus_seats` (
  `seat_id` int unsigned NOT NULL AUTO_INCREMENT,
  `bus_id` smallint unsigned NOT NULL,
  `seat_index` tinyint unsigned NOT NULL COMMENT 'will have numbers from 1 -> 12',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`seat_id`),
  KEY `bus_seats_bus_id_foreign` (`bus_id`),
  CONSTRAINT `bus_seats_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`bus_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bus_seats`
--

LOCK TABLES `bus_seats` WRITE;
/*!40000 ALTER TABLE `bus_seats` DISABLE KEYS */;
INSERT INTO `bus_seats` VALUES (1,1,1,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(2,1,2,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(3,1,3,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(4,1,4,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(5,1,5,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(6,1,6,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(7,1,7,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(8,1,8,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(9,1,9,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(10,1,10,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(11,1,11,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(12,1,12,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(13,2,1,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(14,2,2,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(15,2,3,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(16,2,4,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(17,2,5,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(18,2,6,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(19,2,7,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(20,2,8,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(21,2,9,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(22,2,10,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(23,2,11,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(24,2,12,'2022-05-24 20:40:54','2022-05-24 20:40:54');
/*!40000 ALTER TABLE `bus_seats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buses`
--

DROP TABLE IF EXISTS `buses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `buses` (
  `bus_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `seats_count` tinyint unsigned NOT NULL DEFAULT '12',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`bus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buses`
--

LOCK TABLES `buses` WRITE;
/*!40000 ALTER TABLE `buses` DISABLE KEYS */;
INSERT INTO `buses` VALUES (1,12,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(2,12,'2022-05-24 20:40:54','2022-05-24 20:40:54');
/*!40000 ALTER TABLE `buses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cities` (
  `city_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` VALUES (1,'Alexandria'),(2,'Aswan'),(3,'Asyut'),(4,'Beheira'),(5,'Beni Suef'),(6,'Cairo'),(7,'Dakahlia'),(8,'Damitta'),(9,'Faiyoum'),(10,'Gharbia'),(11,'Giza'),(12,'Ismalia'),(13,'Kafr elsheikh'),(14,'Luxor'),(15,'Matruh'),(16,'Minya'),(17,'Munofia'),(18,'New valley'),(19,'North Sinai'),(20,'Port said'),(21,'Qualibia'),(22,'Red sea'),(23,'Sharkia'),(24,'Suhag'),(25,'South sinai'),(26,'Suiz');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_05_23_135623_create_cities_table',1),(6,'2022_05_23_135911_create_buses_table',1),(7,'2022_05_23_135999_create_bus_seats_table',1),(8,'2022_05_23_140041_create_trips_table',1),(9,'2022_05_23_140448_create_trip_cross_overs_table',1),(10,'2022_05_23_140811_create_reservations_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservations` (
  `reservation_id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `trip_id` int unsigned NOT NULL,
  `seat_id` int unsigned NOT NULL,
  `price` double(8,2) NOT NULL,
  `status` enum('confirmed','canceled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'confirmed',
  `from_city` smallint unsigned NOT NULL,
  `to_city` smallint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`reservation_id`),
  KEY `reservations_user_id_foreign` (`user_id`),
  KEY `reservations_trip_id_foreign` (`trip_id`),
  KEY `reservations_seat_id_foreign` (`seat_id`),
  KEY `reservations_from_city_foreign` (`from_city`),
  KEY `reservations_to_city_foreign` (`to_city`),
  CONSTRAINT `reservations_from_city_foreign` FOREIGN KEY (`from_city`) REFERENCES `cities` (`city_id`) ON UPDATE CASCADE,
  CONSTRAINT `reservations_seat_id_foreign` FOREIGN KEY (`seat_id`) REFERENCES `bus_seats` (`seat_id`) ON UPDATE CASCADE,
  CONSTRAINT `reservations_to_city_foreign` FOREIGN KEY (`to_city`) REFERENCES `cities` (`city_id`) ON UPDATE CASCADE,
  CONSTRAINT `reservations_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`trip_id`) ON UPDATE CASCADE,
  CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trip_cross_overs`
--

DROP TABLE IF EXISTS `trip_cross_overs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trip_cross_overs` (
  `trip_id` int unsigned NOT NULL,
  `city_id` smallint unsigned NOT NULL,
  `order` tinyint unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`city_id`,`trip_id`),
  KEY `trip_cross_overs_trip_id_foreign` (`trip_id`),
  CONSTRAINT `trip_cross_overs_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`city_id`) ON UPDATE CASCADE,
  CONSTRAINT `trip_cross_overs_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`trip_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trip_cross_overs`
--

LOCK TABLES `trip_cross_overs` WRITE;
/*!40000 ALTER TABLE `trip_cross_overs` DISABLE KEYS */;
INSERT INTO `trip_cross_overs` VALUES (1,6,1,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(2,6,1,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(2,7,2,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(1,9,2,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(2,12,4,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(1,13,4,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(1,16,3,'2022-05-24 20:40:54','2022-05-24 20:40:54'),(2,23,3,'2022-05-24 20:40:54','2022-05-24 20:40:54');
/*!40000 ALTER TABLE `trip_cross_overs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trips`
--

DROP TABLE IF EXISTS `trips`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trips` (
  `trip_id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bus_id` smallint unsigned NOT NULL,
  `price` double(8,2) NOT NULL DEFAULT '0.00',
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`trip_id`),
  KEY `trips_bus_id_foreign` (`bus_id`),
  CONSTRAINT `trips_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`bus_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trips`
--

LOCK TABLES `trips` WRITE;
/*!40000 ALTER TABLE `trips` DISABLE KEYS */;
INSERT INTO `trips` VALUES (1,'Cairo-Asyut trip',1,90.00,'2022-05-31 20:40:54','2022-05-24 20:40:54','2022-05-24 20:40:54'),(2,'Cairo-Ismalia trip',2,40.00,'2022-06-07 20:40:54','2022-05-24 20:40:54','2022-05-24 20:40:54');
/*!40000 ALTER TABLE `trips` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Test1 User','test1@test.com','2022-05-24 20:40:53','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','959bDdpVMW','2022-05-24 20:40:54','2022-05-24 20:40:54'),(2,'Test2 User','test2@test.com','2022-05-24 20:40:54','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','4LdCfElYcX','2022-05-24 20:40:54','2022-05-24 20:40:54');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-25  0:42:28
