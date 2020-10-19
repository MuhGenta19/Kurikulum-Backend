-- MySQL dump 10.13  Distrib 8.0.21, for Linux (x86_64)
--
-- Host: localhost    Database: blogmvc
-- ------------------------------------------------------
-- Server version	8.0.21-0ubuntu0.20.04.4

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
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `content` text,
  `author` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (28,NULL,'Earth','wallpapersden.com_high-tech-earth_2560x1440.jpg','-19- Earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth...\r\n\r\n earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth  earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth  earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earth earthvvv','Genta'),(29,NULL,'Abstract','black-aesthetic-laptop-wallpapers-wallpaper-cave-aesthetic-laptop-backgrounds.jpg','AbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstract vAbstractAbstractAbstractAbstractAbstract AbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstract vAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstract AbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstract\r\n\r\nAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstract AbstractAbstractAbstractAbstractAbstract\r\n\r\nAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstractAbstract  AbstractAbstractAbstractAbstractAbstractAbstract\r\n\r\nAbstractAbstractAbstractAbstract...','Genta'),(31,NULL,'Landscape','20200916_145323_0000.png','LandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscape LandscapeLandscapeLandscape LandscapeLandscapeLandscape LandscapeLandscapeLandscapeLandscapeLandscape LandscapeLandscapeLandscape. Landscape LandscapeLandscapeLandscape, LandscapeLandscape. LandscapeLandscapeLandscapeLandscape\r\n\r\nLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscape LandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscape LandscapeLandscapeLandscapeLandscapeLandscape LandscapeLandscapeLandscape\r\n\r\nLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscapeLandscape....','Genta');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `pass` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-19 16:05:08
