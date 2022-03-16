-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: bd_compliance
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `serviços`
--

DROP TABLE IF EXISTS `serviços`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `serviços` (
  `idServiços` int NOT NULL AUTO_INCREMENT,
  `tipo` varchar(10) NOT NULL,
  `cliente` varchar(45) NOT NULL,
  `total_usuarios` decimal(6,0) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `duracao` decimal(6,0) NOT NULL,
  `progresso` decimal(3,0) NOT NULL,
  `valor` varchar(10) NOT NULL,
  PRIMARY KEY (`idServiços`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serviços`
--

LOCK TABLES `serviços` WRITE;
/*!40000 ALTER TABLE `serviços` DISABLE KEYS */;
INSERT INTO `serviços` VALUES (4,'bcp','jonatas',1000,'2021-12-06 01:10:24',50,20,'3640'),(5,'software','ana',2500,'2021-12-06 01:14:37',30,60,'3640'),(6,'CyberRisk','joao',2000,'2021-12-06 21:18:21',60,0,'7280');
/*!40000 ALTER TABLE `serviços` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `NIF_NIPC` decimal(9,0) NOT NULL,
  `morada` varchar(80) NOT NULL,
  `contacto` decimal(9,0) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(80) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (11,'Jonatas Netto de Lima',298885947,'Rua Nova do Rochio, 106, São Felix da Marinha, Vila Nova de Gaia',933115378,' jonatasnetto@gmail.com','jonatas','572d11760b05ba1426351ac521e02796'),(14,'admin',298885905,'Rua Nova do Rochio, 106 - 2EF',933115377,'jonatasnetto@gmail.com','admin','be05977add575832dc52655d4ad5c42e'),(24,'ana sousa',298653245,'Rua Nova do Rochio, 106 - 2EF',933115363,'ana@gmail.com','ana','ce8b14a6c66c71f9c2e802dba29a7843'),(25,'Joao pereira',298886574,'RUA JOAO VIEIRA - 22 - BAIRO ANTONINA',933115363,'joao@hotmail.com','joao','ee27bb449c7604c32cb10df678baf495');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-14  6:03:03
