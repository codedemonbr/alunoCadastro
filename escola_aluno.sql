-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: escola
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aluno`
--

DROP TABLE IF EXISTS `aluno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `prontuario` char(7) NOT NULL,
  `telefone` char(13) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `endereco` varchar(60) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `prontuario` (`prontuario`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aluno`
--

LOCK TABLES `aluno` WRITE;
/*!40000 ALTER TABLE `aluno` DISABLE KEYS */;
INSERT INTO `aluno` VALUES (1,'Thiago Henrique dos Santos','1561839','5511986082341','thiago.santos@aveva.com',NULL,NULL,NULL,NULL,NULL),(2,'Edicrede Almeida Machado','1267361','5511964152244','edicrede@gmail.com',NULL,NULL,NULL,NULL,NULL),(3,'Lucas Gomes','1370529','5511964152244','s.gome@aluno.ifsp.edu.br',NULL,NULL,NULL,NULL,NULL),(5,'Adriana De Oliveira','166753','5511978942689','aluno@gmail.com',NULL,NULL,NULL,NULL,NULL),(6,'Adriano Aparecido','1567632','5511978942689','aluno@gmail.com',NULL,NULL,NULL,NULL,NULL),(7,'Amanda Penteado','1575082','5511978942689','aluno@gmail.com',NULL,NULL,NULL,NULL,NULL),(8,'Cintia Tiaki','1466534','5511978942689','aluno@gmail.com',NULL,NULL,NULL,NULL,NULL),(9,'Daniela Helena','1666461','5511978942689','aluno@gmail.com',NULL,NULL,NULL,NULL,NULL),(10,'Edigard Menezes','1360272','5511978942689','aluno@gmail.com',NULL,NULL,NULL,NULL,NULL),(11,'Edson Soares','1364995','5511978942689','aluno@gmail.com',NULL,NULL,NULL,NULL,NULL),(12,'Jose Augosto','1271954','5511978942689','aluno@gmail.com',NULL,NULL,NULL,NULL,NULL),(13,'Leonardo Leite','1762559','5511978942689','aluno@gmail.com',NULL,NULL,NULL,NULL,NULL),(14,'Leonardo Salgado','1762036','5511978942689','aluno@gmail.com',NULL,NULL,NULL,NULL,NULL),(15,'Luciana Durante','1565893','5511978942689','aluno@gmail.com',NULL,NULL,NULL,NULL,NULL),(47,'Arthur Azevedo','123456','','aluno@gmail.com','','Jardim ','Sao Paulo','SP',7133190),(59,'Renato Gaucho','1326598','','aluno@gmail.com','Rua A','Jabuca','Sao Paulo','SP',5659800),(60,'Maria Antonieta','1659862','','aluno@gmail.com','Rua das Flores','Jardim Divinolandia','Guarulhos','SP',5659800),(62,'Ma','1135698','','aluno@gmail.com','Rua das Flores','Pedreira','Guarulhos','SP',5659800);
/*!40000 ALTER TABLE `aluno` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-12 19:37:31
