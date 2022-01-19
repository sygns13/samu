CREATE DATABASE  IF NOT EXISTS `bdwebfec` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bdwebfec`;
-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bdwebfec
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `accesobasedatos`
--

DROP TABLE IF EXISTS `accesobasedatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `accesobasedatos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `descripcion` varchar(2500) DEFAULT NULL,
  `tieneimagen` tinyint DEFAULT NULL,
  `url` varchar(2500) DEFAULT NULL,
  `tienelink` tinyint DEFAULT NULL,
  `urllink` varchar(2500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  `nombrefile` varchar(500) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_accesobasedatos_facultads1_idx` (`facultad_id`),
  KEY `fk_accesobasedatos_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_accesobasedatos_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_accesobasedatos_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accesobasedatos`
--

LOCK TABLES `accesobasedatos` WRITE;
/*!40000 ALTER TABLE `accesobasedatos` DISABLE KEYS */;
INSERT INTO `accesobasedatos` VALUES (1,'titulo de la base de datos','<p style=\"text-align:justify\">descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;</p>',1,'accesobasedato-img_06-12-2021-00-04-20.png',1,'accesobasedato-file_06-12-2021-00-04-35.pdf',1,1,1,'2021-12-06 04:56:02','2021-12-06 05:04:39',1,NULL,'file',1),(2,'titulo de la base de datos','<p style=\"text-align:justify\">descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;descripcion de la base de datos&nbsp;</p>',1,'accesobasedato-img_06-12-2021-00-05-10.jpg',1,'accesobasedato-file_06-12-2021-00-05-10.pdf',1,0,1,'2021-12-06 05:05:10','2021-12-06 05:05:10',1,NULL,'archivo adjunto de la base de datos',1);
/*!40000 ALTER TABLE `accesobasedatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `antiplagios`
--

DROP TABLE IF EXISTS `antiplagios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `antiplagios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `descripcion` varchar(2500) DEFAULT NULL,
  `tieneimagen` tinyint DEFAULT NULL,
  `url` varchar(2500) DEFAULT NULL,
  `tienelink` tinyint DEFAULT NULL,
  `urllink` varchar(2500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  `nombrefile` varchar(500) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_antiplagios_facultads1_idx` (`facultad_id`),
  KEY `fk_antiplagios_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_antiplagios_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_antiplagios_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `antiplagios`
--

LOCK TABLES `antiplagios` WRITE;
/*!40000 ALTER TABLE `antiplagios` DISABLE KEYS */;
INSERT INTO `antiplagios` VALUES (1,'titulo antiplagio','<p>descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;</p>',1,'antiplagio-img_06-12-2021-01-03-59.jpg',1,'antiplagio-file_06-12-2021-01-04-17.pdf',0,1,1,'2021-12-06 06:03:36','2021-12-06 06:04:21',1,NULL,'file archivo',1),(2,'titulo antiplagio','<p style=\"text-align:justify\">descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;descripcion antiplagio&nbsp;</p>',1,'antiplagio-img_06-12-2021-01-05-06.png',1,'antiplagio-file_06-12-2021-01-05-06.pdf',1,0,1,'2021-12-06 06:05:06','2021-12-06 06:05:06',1,NULL,'archivo adjunto',1);
/*!40000 ALTER TABLE `antiplagios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `banners` (
  `id` int NOT NULL AUTO_INCREMENT,
  `posision` int DEFAULT NULL,
  `nombre` varchar(500) DEFAULT NULL,
  `url` varchar(2500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL COMMENT 'nivel 1 -> corresponde a facultad\nnivel 2 -> corresponde a programas de estudios',
  `user_id` int DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_baners_facultads1_idx` (`facultad_id`),
  KEY `fk_baners_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_baners_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_baners_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (1,1,'nombre 3','banner_fec07-10-2021-14-22-37.jpeg',1,1,'2021-10-07 18:43:38','2021-10-07 19:23:04',1,1,1,NULL),(2,1,'nombre nuevo','banner_fec10-12-2021-13-40-20.jpg',1,0,'2021-10-07 18:58:10','2021-12-10 18:40:20',1,1,1,NULL),(3,2,'asdasd','banner_fec10-12-2021-13-40-32.jpg',1,0,'2021-10-07 19:08:00','2021-12-10 18:40:32',1,1,1,NULL),(4,1,'Banner 1 ed','banner_fec08-12-2021-23-11-18.jpg',1,0,'2021-12-09 04:10:48','2021-12-09 04:11:18',2,1,NULL,1),(5,2,'Banner 2','banner_fec-08-12-2021-23-10-58.jpg',1,1,'2021-12-09 04:10:58','2021-12-09 04:11:01',2,1,NULL,1),(6,2,'','banner_fec-08-12-2021-23-11-29.jpg',1,0,'2021-12-09 04:11:29','2021-12-09 04:11:29',2,1,NULL,1),(7,1,'','banner_fec-08-12-2021-23-11-51.jpg',1,0,'2021-12-09 04:11:51','2021-12-09 04:11:51',2,1,NULL,2),(8,2,'','banner_fec-08-12-2021-23-12-02.jpg',1,0,'2021-12-09 04:12:02','2021-12-09 04:12:02',2,1,NULL,2);
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campoocupacionals`
--

DROP TABLE IF EXISTS `campoocupacionals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `campoocupacionals` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `tieneimagen` tinyint DEFAULT NULL,
  `url` varchar(2500) DEFAULT NULL,
  `tienearchivo` tinyint DEFAULT NULL,
  `urlfile` varchar(2500) DEFAULT NULL,
  `nombrefile` varchar(500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `programaestudio_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_perfiles_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_perfiles_programaestudios100` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campoocupacionals`
--

LOCK TABLES `campoocupacionals` WRITE;
/*!40000 ALTER TABLE `campoocupacionals` DISABLE KEYS */;
INSERT INTO `campoocupacionals` VALUES (1,'titulo ed','<p>descripcion</p>',1,'campoocupacional-img_09-12-2021-23-43-46.jpg',1,'campoocupacional-file_09-12-2021-23-39-38.pdf','file campo',1,0,'2021-12-10 04:39:38','2021-12-10 04:43:46',1,1,2,NULL);
/*!40000 ALTER TABLE `campoocupacionals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `competencias`
--

DROP TABLE IF EXISTS `competencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `competencias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `tipo` tinyint DEFAULT NULL COMMENT '1 -> generales\n2 -> especificas',
  `tieneimagen` tinyint DEFAULT NULL,
  `url` varchar(2500) DEFAULT NULL,
  `tienearchivo` tinyint DEFAULT NULL,
  `urlfile` varchar(2500) DEFAULT NULL,
  `nombrefile` varchar(500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `programaestudio_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_perfiles_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_perfiles_programaestudios10` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `competencias`
--

LOCK TABLES `competencias` WRITE;
/*!40000 ALTER TABLE `competencias` DISABLE KEYS */;
INSERT INTO `competencias` VALUES (1,'adasd','<p>sadsad</p>',2,1,'competencia-img_09-12-2021-23-43-34.jpg',1,'competencia-file_09-12-2021-23-01-24.pdf','dasdsad',1,0,'2021-12-10 04:01:24','2021-12-10 04:43:34',1,1,2,NULL);
/*!40000 ALTER TABLE `competencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comunicados`
--

DROP TABLE IF EXISTS `comunicados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `comunicados` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `titulo` varchar(500) DEFAULT NULL,
  `desarrollo` text,
  `tieneimagen` tinyint DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comunicados_programaestudios1_idx` (`programaestudio_id`),
  KEY `fk_comunicados_facultads1_idx` (`facultad_id`),
  CONSTRAINT `fk_comunicados_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_comunicados_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comunicados`
--

LOCK TABLES `comunicados` WRITE;
/*!40000 ALTER TABLE `comunicados` DISABLE KEYS */;
INSERT INTO `comunicados` VALUES (1,'2021-10-12','10:15:00','¡Triunfo celeste! Cristal derrotó 4-3 a Binacional en la Liga 1','<p>El &lsquo;Poderoso del Sur&rsquo; sorprendi&oacute; a los 29&prime;, cuando Fajardo ocasion&oacute; un autogol celeste. El defensa remat&oacute; de cabeza y la pelota choc&oacute; en el defensa Gonz&aacute;les antes de entrar al arco de Cristal. Sin Horacio Calcaterra, al equipo de Mosquera le cost&oacute; encontrar el empate, pero en el segundo tiempo sali&oacute; con todo y remont&oacute; r&aacute;pidamente.</p>\n\n<p>Loyola marc&oacute; el empate a los 56&prime; y, dos minutos m&aacute;s tarde, Percy Liza anot&oacute; un golazo de &lsquo;palomita&rsquo; tras un buen pase de &Aacute;vila. El &lsquo;Cholito&rsquo;, quien jug&oacute; un partidazo esta tarde, volvi&oacute; a dar una asistencia a los 64&prime; para la anotaci&oacute;n de Castillo. El partido parec&iacute;a resuelto, pero Binacional no baj&oacute; los brazos.</p>\n\n<p>El &lsquo;Poderoso del Sur&rsquo; acort&oacute; distancias a los 78&prime; con un gol del colombiano Arango. Luego, el &aacute;rbitro cobr&oacute; penal para Binacional; sin embargo, el ecuatoriano De Jes&uacute;s fall&oacute; el disparo desde los doce pasos. &Aacute;vila cerr&oacute; una tarde perfecta a los 85&prime; marcando el cuarto gol r&iacute;mense. Cerca del pitazo final, Ojeda se encarg&oacute; de anotar el &uacute;ltimo tanto en el Estadio Monumental.</p>\n\n<p>Con este resultado, los &ldquo;rimenses&rdquo; llegan a las 27 unidades en la Fase 2 y, de perder Alianza Lima todos sus partidos restantes, tendr&iacute;an que sumar los 9 puntos que le queda disputar. Por su parte, el Binacional pelea por no descender ya que solamente tiene 24 puntos en la tabla general.</p>',1,1,1,'2021-10-10 23:27:06','2021-10-10 23:27:42',NULL,1,1,1),(2,'2021-10-09','15:13:00','¡Triunfo celeste! Cristal derrotó 4-3 a Binacional en la Liga 1','<p>El &lsquo;Poderoso del Sur&rsquo; sorprendi&oacute; a los 29&prime;, cuando Fajardo ocasion&oacute; un autogol celeste. El defensa remat&oacute; de cabeza y la pelota choc&oacute; en el defensa Gonz&aacute;les antes de entrar al arco de Cristal. Sin Horacio Calcaterra, al equipo de Mosquera le cost&oacute; encontrar el empate, pero en el segundo tiempo sali&oacute; con todo y remont&oacute; r&aacute;pidamente.</p>\n\n<p>Loyola marc&oacute; el empate a los 56&prime; y, dos minutos m&aacute;s tarde, Percy Liza anot&oacute; un golazo de &lsquo;palomita&rsquo; tras un buen pase de &Aacute;vila. El &lsquo;Cholito&rsquo;, quien jug&oacute; un partidazo esta tarde, volvi&oacute; a dar una asistencia a los 64&prime; para la anotaci&oacute;n de Castillo. El partido parec&iacute;a resuelto, pero Binacional no baj&oacute; los brazos.</p>\n\n<p>El &lsquo;Poderoso del Sur&rsquo; acort&oacute; distancias a los 78&prime; con un gol del colombiano Arango. Luego, el &aacute;rbitro cobr&oacute; penal para Binacional; sin embargo, el ecuatoriano De Jes&uacute;s fall&oacute; el disparo desde los doce pasos. &Aacute;vila cerr&oacute; una tarde perfecta a los 85&prime; marcando el cuarto gol r&iacute;mense. Cerca del pitazo final, Ojeda se encarg&oacute; de anotar el &uacute;ltimo tanto en el Estadio Monumental.</p>\n\n<p>Con este resultado, los &ldquo;rimenses&rdquo; llegan a las 27 unidades en la Fase 2 y, de perder Alianza Lima todos sus partidos restantes, tendr&iacute;an que sumar los 9 puntos que le queda disputar. Por su parte, el Binacional pelea por no descender ya que solamente tiene 24 puntos en la tabla general.</p>',1,1,1,'2021-10-10 23:28:38','2021-10-10 23:28:38',NULL,1,1,0),(3,'2021-12-04','00:00:00','asdsad','<p>asdasd</p>',1,1,1,'2021-12-05 00:56:59','2021-12-05 01:06:29',NULL,1,1,1);
/*!40000 ALTER TABLE `comunicados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datoestadisticos`
--

DROP TABLE IF EXISTS `datoestadisticos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `datoestadisticos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo` tinyint DEFAULT NULL COMMENT '1 -> ingresantes\n2 -> matriculados\n3 -> egresados\n4 -> plana docente\n5 -> silabus\n6 -> tramites',
  `cantidad` int DEFAULT NULL,
  `anio` int DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `programaestudio_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_datoestadisticos_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_datoestadisticos_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datoestadisticos`
--

LOCK TABLES `datoestadisticos` WRITE;
/*!40000 ALTER TABLE `datoestadisticos` DISABLE KEYS */;
INSERT INTO `datoestadisticos` VALUES (1,1,50,2020,1,0,'1','2021-12-09 06:18:15','2021-12-09 06:18:15',1),(2,2,105,2021,1,0,'1','2021-12-09 06:18:33','2021-12-09 06:18:33',1),(3,3,22,2019,1,0,'1','2021-12-09 06:18:40','2021-12-09 06:18:40',1),(4,4,23,2016,1,0,'1','2021-12-09 06:18:49','2021-12-09 06:18:49',1),(5,5,1,2010,1,0,'1','2021-12-09 06:19:00','2021-12-09 06:19:00',1),(6,6,504,2011,1,0,'1','2021-12-09 06:19:08','2021-12-09 06:19:08',1),(7,1,1,2010,1,0,'1','2021-12-09 06:19:36','2021-12-09 06:19:36',2),(8,2,2,2011,1,0,'1','2021-12-09 06:19:41','2021-12-09 06:19:41',2),(9,3,3,2012,1,0,'1','2021-12-09 06:19:48','2021-12-09 06:19:48',2),(10,4,4,2014,1,0,'1','2021-12-09 06:19:53','2021-12-09 06:19:53',2),(11,5,5,2015,1,0,'1','2021-12-09 06:19:58','2021-12-09 06:19:58',2),(12,6,6,2017,1,0,'1','2021-12-09 06:20:17','2021-12-09 06:20:17',2);
/*!40000 ALTER TABLE `datoestadisticos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamentoacademicos`
--

DROP TABLE IF EXISTS `departamentoacademicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `departamentoacademicos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `direccion` varchar(500) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `tieneimagen` tinyint DEFAULT NULL,
  `url` varchar(2500) DEFAULT NULL,
  `director` varchar(500) DEFAULT NULL,
  `descripcion_director` text,
  `descripcion_corta_director` varchar(500) DEFAULT NULL,
  `tieneimagen_director` tinyint DEFAULT NULL,
  `url_director` varchar(2500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamentoacademicos`
--

LOCK TABLES `departamentoacademicos` WRITE;
/*!40000 ALTER TABLE `departamentoacademicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `departamentoacademicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directorios`
--

DROP TABLE IF EXISTS `directorios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `directorios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  `cargo` varchar(500) DEFAULT NULL,
  `posision` int DEFAULT NULL,
  `descripcion` text,
  `tieneimagen` tinyint DEFAULT NULL,
  `url` varchar(2500) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_directorios_facultads1_idx` (`facultad_id`),
  KEY `fk_directorios_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_directorios_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_directorios_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directorios`
--

LOCK TABLES `directorios` WRITE;
/*!40000 ALTER TABLE `directorios` DISABLE KEYS */;
INSERT INTO `directorios` VALUES (1,'Juan','123123',1,'<p>descripcion</p>',0,'','123213','asdsa@mail.com',1,0,1,'2021-12-05 06:10:05','2021-12-05 06:26:18',1,1,NULL),(2,'sadsad','null',2,'',0,'','null','null',1,1,1,'2021-12-05 06:11:08','2021-12-05 06:26:09',1,1,NULL),(3,'asd nombre','cargo',3,'',0,'',NULL,NULL,1,1,1,'2021-12-05 06:12:03','2021-12-05 06:26:11',1,1,NULL),(4,'asdsad','ggdfgdfg',4,'<p>ughuhgughuh</p>',0,'','asdas','asdasd@mail.com',1,1,1,'2021-12-05 06:12:29','2021-12-05 06:26:16',1,1,NULL),(5,'asdsad','fgdfgdf',1,'<p>hohjohohjo</p>',1,'directorio-img_05-12-2021-01-15-50.jpg','3214211','asdasda@mail.com',1,1,0,'2021-12-05 06:15:51','2021-12-05 06:27:08',1,1,NULL),(6,'asdsad','xcvxcv',6,'',0,'','','',1,1,1,'2021-12-05 06:25:56','2021-12-05 06:27:00',1,1,NULL),(7,'asdsa','xvcx',2,'',0,'','','',1,1,0,'2021-12-05 06:27:14','2021-12-05 06:27:14',1,1,NULL);
/*!40000 ALTER TABLE `directorios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docentes`
--

DROP TABLE IF EXISTS `docentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `docentes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  `grados` text,
  `tieneimagen` tinyint DEFAULT NULL,
  `urlimagen` varchar(2500) DEFAULT NULL,
  `tienelink` tinyint DEFAULT NULL,
  `urllink` varchar(2500) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  `categoria` varchar(200) DEFAULT NULL,
  `regimen` varchar(200) DEFAULT NULL,
  `condicion` varchar(200) DEFAULT NULL,
  `experiencia` text,
  `publicaciones` text,
  `investigaciones` text,
  `especialidad` varchar(500) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `tipo_documento` tinyint DEFAULT NULL,
  `documento` varchar(45) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK1_idx` (`facultad_id`),
  KEY `Fk2_idx` (`programaestudio_id`),
  CONSTRAINT `FK1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `Fk2` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docentes`
--

LOCK TABLES `docentes` WRITE;
/*!40000 ALTER TABLE `docentes` DISABLE KEYS */;
INSERT INTO `docentes` VALUES (1,'cristian','<p>grados</p>',1,'docente-11-12-2021-00-35-01.png',0,'','2010-02-01',1,0,2,'2021-12-11 05:10:33','2021-12-11 05:35:01',NULL,1,'Asociado','Tiempo parcial','Ordinario','null','null','null','sistemas','89999999','cristian_sas@mail.com',1,'12345678',1);
/*!40000 ALTER TABLE `docentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docentesfacultads`
--

DROP TABLE IF EXISTS `docentesfacultads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `docentesfacultads` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `tieneimagen` tinyint DEFAULT NULL,
  `urlimagen` varchar(2500) DEFAULT NULL,
  `tienelink` tinyint DEFAULT NULL,
  `urllink` varchar(2500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  `nombrefile` varchar(500) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_docentes_facultads1_idx` (`facultad_id`),
  KEY `fk_docentes_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_docentes_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_docentes_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docentesfacultads`
--

LOCK TABLES `docentesfacultads` WRITE;
/*!40000 ALTER TABLE `docentesfacultads` DISABLE KEYS */;
INSERT INTO `docentesfacultads` VALUES (1,'juan quispe','<p>content</p>',1,'docentesfacultad-img_08-12-2021-19-32-48.jpg',1,'docentesfacultad-file_08-12-2021-19-33-15.pdf',1,0,1,'2021-12-09 00:31:10','2021-12-09 00:33:15',1,NULL,'juan',1),(2,'Juan 2','',1,'docentesfacultad-img_08-12-2021-19-31-21.png',0,'',1,0,1,'2021-12-09 00:31:21','2021-12-09 00:31:21',1,NULL,'',1),(3,'juan 3','<p>j3</p>',1,'docentesfacultad-img_08-12-2021-19-33-50.jpg',1,'docentesfacultad-file_08-12-2021-19-33-50.pdf',1,1,1,'2021-12-09 00:31:50','2021-12-09 00:33:53',1,NULL,'fsdf sdf',1);
/*!40000 ALTER TABLE `docentesfacultads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documentos`
--

DROP TABLE IF EXISTS `documentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `documentos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  `tipo` tinyint DEFAULT NULL COMMENT '1 -> Documentos Normativos\n2 -> Resoluciones\n3 -> Actas\n4 -> Tupa',
  `numero` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` text,
  `nivel` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_documentos_facultads1_idx` (`facultad_id`),
  KEY `fk_documentos_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_documentos_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_documentos_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documentos`
--

LOCK TABLES `documentos` WRITE;
/*!40000 ALTER TABLE `documentos` DISABLE KEYS */;
INSERT INTO `documentos` VALUES (1,'asdadsas','documento_05-12-2021-01-43-44.pdf',1,'1','2021-12-01','<p>asd asdas</p>',1,'2021-12-05 06:43:26','2021-12-05 01:43:44',1,0,1,1,NULL),(2,'asda','documento_05-12-2021-01-44-00.pdf',1,'2','2021-11-11','<p>asd asd</p>',1,'2021-12-05 06:44:00','2021-12-05 01:44:05',1,1,1,1,NULL),(3,'re-001','documento_08-12-2021-20-15-26.pdf',2,'0','2010-02-05','<p>Descripcion</p>',1,'2021-12-09 01:15:26','2021-12-08 20:15:26',1,0,1,1,NULL),(4,'re-0002 ed','documento_08-12-2021-20-22-58.pdf',2,'0','2021-11-25','<p>desc</p>',1,'2021-12-09 01:22:24','2021-12-08 20:23:10',1,0,1,1,NULL),(5,'acta 1','documento_08-12-2021-20-24-04.pdf',3,'0','2020-02-01','',1,'2021-12-09 01:24:04','2021-12-08 20:24:04',1,0,1,1,NULL),(6,'acta 2','documento_08-12-2021-20-24-21.pdf',3,'0','2021-12-01','<p>asdasdsad asdsa dsad</p>',1,'2021-12-09 01:24:21','2021-12-08 20:24:27',1,0,1,1,NULL);
/*!40000 ALTER TABLE `documentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `estudiantes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `tieneimagen` tinyint DEFAULT NULL,
  `urlimagen` varchar(2500) DEFAULT NULL,
  `tienelink` tinyint DEFAULT NULL,
  `urllink` varchar(2500) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  `nombrefile` varchar(500) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_estudiantes_facultads1_idx` (`facultad_id`),
  KEY `fk_estudiantes_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_estudiantes_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_estudiantes_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiantes`
--

LOCK TABLES `estudiantes` WRITE;
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
INSERT INTO `estudiantes` VALUES (1,'Titulo Alumnos','<p>descripcion</p>',0,'',0,'','2021-12-08',1,0,1,'2021-12-08 23:37:25','2021-12-08 23:43:40',1,NULL,'',1),(2,'adsadsad','',1,'estudiante-img_08-12-2021-18-43-48.png',0,'','2021-12-07',1,1,1,'2021-12-08 23:40:20','2021-12-08 23:44:40',1,NULL,'',1),(3,'asdsadsa','<p>asdsad</p>',1,'estudiante-img_08-12-2021-18-44-31.jpg',1,'estudiante-file_08-12-2021-18-45-21.pdf','2021-12-03',1,0,1,'2021-12-08 23:41:03','2021-12-08 23:45:21',1,NULL,'asdasd asd',1),(4,'asdsadsa','<p>asdsad</p>',0,'',1,'estudiante-file_08-12-2021-18-43-32.pdf','2021-12-25',1,0,1,'2021-12-08 23:43:32','2021-12-08 23:43:32',1,NULL,'asdsadsa',1);
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `eventos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `titulo` varchar(500) DEFAULT NULL,
  `desarrollo` text,
  `tieneimagen` tinyint DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_eventos_programaestudios1_idx` (`programaestudio_id`),
  KEY `fk_eventos_facultads1_idx` (`facultad_id`),
  CONSTRAINT `fk_eventos_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_eventos_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` VALUES (1,'2021-10-10','15:20:00','Abuela pide apoyo de la población para su nieta menor de edad que quedó en orfandad','<ul>\n</ul>\n\n<p>La abuela de un menor pidi&oacute; la&nbsp;<strong>colaboraci&oacute;n</strong>&nbsp;a la colectividad para que lo ayuden con el&nbsp;<strong>sustento de su nieta</strong>; ello en vista de que su madre, que fue&nbsp;<em>trabajadora municipal</em>,&nbsp;<strong>pereci&oacute;</strong>&nbsp;y su padre no asume el gasto de alimentaci&oacute;n.</p>\n\n<p>La se&ntilde;ora Bernardina Bernuy, solicita ayuda de las personas de buen coraz&oacute;n de donar&nbsp;<strong>leche especial</strong>; para la ni&ntilde;a que perdi&oacute; a su madre, que fue extrabajadora de la&nbsp;<em>municipalidad provincial de Huaraz.</em></p>\n\n<p>Bernuy dijo que su nieta de&nbsp;<strong>9 meses</strong>&nbsp;consume&nbsp;<em>ocho tarros de leche especial por mes</em>&nbsp;y con el poco dinero que gana,&nbsp;<strong>no puede solventar el costo de estos insumos</strong>; y es ella casi la &uacute;nica que vela por su nieta.</p>\n\n<p>Indic&oacute; adem&aacute;s que, el&nbsp;<strong>padre</strong>&nbsp;hasta la fecha no cumple con su&nbsp;<strong>obligaci&oacute;n</strong>; por lo que ella como abuela est&aacute; asumiendo los&nbsp;<em>gastos de alimentaci&oacute;n de la ni&ntilde;a</em>, por lo que pide un apoyo de las&nbsp;<strong>autoridades y poblaci&oacute;n en general.</strong></p>\n\n<p>Ella tambi&eacute;n agradece el apoyo brindado por la poblaci&oacute;n, autoridades, diferentes empresas y personas que&nbsp;<strong>meses atr&aacute;s</strong>&nbsp;al enterarse de su caso, le extendieron la ayuda y con ello pudo sustentar los&nbsp;<strong>gastos de la peque&ntilde;a.</strong></p>\n\n<p>Ella pide apoyo porque no cuenta con suficientes recursos, para&nbsp;<em>leche, pa&ntilde;ales, ropita, frazaditas, medicinas, y mucho amo</em>r de las personas de buena voluntad, quienes pueden llamar al&nbsp; n&uacute;mero celular:&nbsp;<strong>940410768</strong>.</p>',1,1,1,'2021-10-10 23:17:14','2021-10-10 23:21:44',NULL,1,1,1),(2,'2021-10-10','00:00:00','Abuela pide apoyo de la población para su nieta menor de edad que quedó en orfandad','<p>La abuela de un menor pidi&oacute; la&nbsp;<strong>colaboraci&oacute;n</strong>&nbsp;a la colectividad para que lo ayuden con el&nbsp;<strong>sustento de su nieta</strong>; ello en vista de que su madre, que fue&nbsp;<em>trabajadora municipal</em>,&nbsp;<strong>pereci&oacute;</strong>&nbsp;y su padre no asume el gasto de alimentaci&oacute;n.</p>\n\n<p>La se&ntilde;ora Bernardina Bernuy, solicita ayuda de las personas de buen coraz&oacute;n de donar&nbsp;<strong>leche especial</strong>; para la ni&ntilde;a que perdi&oacute; a su madre, que fue extrabajadora de la&nbsp;<em>municipalidad provincial de Huaraz</em></p>\n\n<p>Bernuy dijo que su nieta de&nbsp;<strong>9 meses</strong>&nbsp;consume&nbsp;<em>ocho tarros de leche especial por mes</em>&nbsp;y con el poco dinero que gana,&nbsp;<strong>no puede solventar el costo de estos insumos</strong>; y es ella casi la &uacute;nica que vela por su nieta.</p>\n\n<p>Indic&oacute; adem&aacute;s que, el&nbsp;<strong>padre</strong>&nbsp;hasta la fecha no cumple con su&nbsp;<strong>obligaci&oacute;n</strong>; por lo que ella como abuela est&aacute; asumiendo los&nbsp;<em>gastos de alimentaci&oacute;n de la ni&ntilde;a</em>, por lo que pide un apoyo de las&nbsp;<strong>autoridades y poblaci&oacute;n en general.</strong></p>',1,1,1,'2021-10-10 23:22:25','2021-10-10 23:22:28',NULL,1,1,0),(3,'2021-12-04','00:00:00','asd','<p>sad</p>',1,1,1,'2021-12-04 23:32:56','2021-12-04 23:33:46',NULL,1,1,1);
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facultads`
--

DROP TABLE IF EXISTS `facultads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `facultads` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `direccion` varchar(500) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL COMMENT 'nivel 1 -> corresponde a facultad',
  `nombre_organigrama` varchar(500) DEFAULT NULL,
  `url_organigrama` varchar(2500) DEFAULT NULL,
  `nombre_tupa` varchar(500) DEFAULT NULL,
  `url_tupa` varchar(2500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facultads`
--

LOCK TABLES `facultads` WRITE;
/*!40000 ALTER TABLE `facultads` DISABLE KEYS */;
INSERT INTO `facultads` VALUES (1,'FACULTAD DE ECONOMÍA Y CONTABILIDAD','descripción facultad','Av. Universitaria s/n - Pabellón F','043-456239','fec@unasam.edu.pe',1,0,NULL,'2021-12-09 03:17:14',1,1,NULL,NULL,'TUPA de la Facultad de Economía y Contabilidad','tupa_08-12-2021-22-17-14.pdf');
/*!40000 ALTER TABLE `facultads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galerias`
--

DROP TABLE IF EXISTS `galerias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `galerias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `nombre` varchar(500) DEFAULT NULL,
  `descripcion` varchar(2500) DEFAULT NULL,
  `tieneimagen` int DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_galerias_facultads1_idx` (`facultad_id`),
  KEY `fk_galerias_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_galerias_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_galerias_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galerias`
--

LOCK TABLES `galerias` WRITE;
/*!40000 ALTER TABLE `galerias` DISABLE KEYS */;
INSERT INTO `galerias` VALUES (1,'2021-12-08','00:00:00','Publicacion 1','<p>sad asdsad sad sad sad</p>',1,1,1,0,'2021-12-08 17:03:25','2021-12-08 17:03:49',1,NULL,1),(2,'2021-12-03','00:00:00','Publicacion 2 ed','',1,1,1,1,'2021-12-08 17:03:44','2021-12-08 17:04:09',1,NULL,1);
/*!40000 ALTER TABLE `galerias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gestioncalidads`
--

DROP TABLE IF EXISTS `gestioncalidads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `gestioncalidads` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `tieneimagen` int DEFAULT NULL,
  `url` varchar(2500) DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_gestioncalidads_facultads1_idx` (`facultad_id`),
  KEY `fk_gestioncalidads_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_gestioncalidads_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_gestioncalidads_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gestioncalidads`
--

LOCK TABLES `gestioncalidads` WRITE;
/*!40000 ALTER TABLE `gestioncalidads` DISABLE KEYS */;
INSERT INTO `gestioncalidads` VALUES (1,'asdasd','<p>asdsada adasasas&nbsp; adssadasda&nbsp;asdsada adasasas&nbsp; adssadasdaasdsada adasasas&nbsp; adssadasdaasdsada adasasas&nbsp; adssadasda</p>',NULL,'gestioncalidad05-12-2021-02-09-22.jpg',1,0,1,'2021-12-05 07:09:09','2021-12-05 07:09:25',1,1,NULL),(2,'asd aasda dasdsadsadasd','<p>asdccs&nbsp;asd aasda dasdsadsadasd&nbsp;asdccs&nbsp;asd aasda dasdsadsadasdasdccs&nbsp;asd aasda dasdsadsadasdasdccs&nbsp;asd aasda dasdsadsadasdasdccs&nbsp;asd aasda dasdsadsadasdasdccs&nbsp;asd aasda dasdsadsadasdasdccs&nbsp;asd aasda dasdsadsadasdasdccs&nbsp;asd aasda dasdsadsadasdasdccs&nbsp;asd aasda dasdsadsadasdasdccs&nbsp;asd aasda dasdsadsadasdasdccs&nbsp;asd aasda dasdsadsadasdasdccs&nbsp;asd aasda dasdsadsadasdasdccs&nbsp;asd aasda dasdsadsadasdasdccs&nbsp;asd aasda dasdsadsadasd</p>',NULL,'gestioncalidad-05-12-2021-02-09-43.jpg',1,1,0,'2021-12-05 07:09:43','2021-12-05 07:09:43',1,1,NULL);
/*!40000 ALTER TABLE `gestioncalidads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gradotitulos`
--

DROP TABLE IF EXISTS `gradotitulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `gradotitulos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `tieneimagen` tinyint DEFAULT NULL,
  `url` varchar(2500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `programaestudio_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_planestudios_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_planestudios_programaestudios10` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gradotitulos`
--

LOCK TABLES `gradotitulos` WRITE;
/*!40000 ALTER TABLE `gradotitulos` DISABLE KEYS */;
INSERT INTO `gradotitulos` VALUES (1,'Bachiller en Contabilidad','<p>Datos del Grado</p>',1,'gradotitulo-img_10-12-2021-23-37-59.jpg',1,0,'2021-12-11 04:36:58','2021-12-11 04:37:59',1,1,2,NULL),(2,'Titulado en Contabilidad','<p>edit titulado</p>',1,'gradotitulo-img_10-12-2021-23-37-37.jpg',1,1,'2021-12-11 04:37:15','2021-12-11 04:37:40',1,1,2,NULL);
/*!40000 ALTER TABLE `gradotitulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historias`
--

DROP TABLE IF EXISTS `historias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `historias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `historia` text,
  `tieneimagen` tinyint DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_historias_facultads1_idx` (`facultad_id`),
  KEY `fk_historias_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_historias_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_historias_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historias`
--

LOCK TABLES `historias` WRITE;
/*!40000 ALTER TABLE `historias` DISABLE KEYS */;
INSERT INTO `historias` VALUES (1,'Titulo Historia Titulo Historia Titulo Historia','<p style=\"text-align:justify\">Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991...Titulo Historia Titulo Historia historia de la fec.. inicio en 1991... ed</p>',NULL,1,0,1,'2021-10-12 03:20:40','2021-12-05 02:55:07',1,NULL,1),(2,'Historia del Programa de Estudio de Contabilidad','<p>Contenido de la Historia del Programa de Estudio de Contabilidad</p>',NULL,1,0,1,'2021-12-09 15:00:16','2021-12-09 15:00:16',NULL,1,2),(3,'Historia del Programa de Estudio de Economía','<p>Contenido de la&nbsp;Historia del Programa de Estudio de Econom&iacute;a</p>',NULL,1,0,1,'2021-12-09 15:00:52','2021-12-09 15:00:52',NULL,2,2);
/*!40000 ALTER TABLE `historias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagencomunicados`
--

DROP TABLE IF EXISTS `imagencomunicados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `imagencomunicados` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text,
  `url` varchar(2500) DEFAULT NULL,
  `posicion` int DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comunicado_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_imageneventos_copy1_comunicados1_idx` (`comunicado_id`),
  CONSTRAINT `fk_imageneventos_copy1_comunicados1` FOREIGN KEY (`comunicado_id`) REFERENCES `comunicados` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagencomunicados`
--

LOCK TABLES `imagencomunicados` WRITE;
/*!40000 ALTER TABLE `imagencomunicados` DISABLE KEYS */;
INSERT INTO `imagencomunicados` VALUES (2,'¡Triunfo celeste! Cristal derrotó 4-3 a Binacional en la Liga 1','<p>El &lsquo;Poderoso del Sur&rsquo; sorprendi&oacute; a los 29&prime;, cuando Fajardo ocasion&oacute; un autogol celeste. El defensa remat&oacute; de cabeza y la pelota choc&oacute; en el defensa Gonz&aacute;les antes de entrar al arco de Cristal. Sin Horacio Calcaterra, al equipo de Mosquera le cost&oacute; encontrar el empate, pero en el segundo tiempo sali&oacute; con todo y remont&oacute; r&aacute;pidamente.</p>\n\n<p>Loyola marc&oacute; el empate a los 56&prime; y, dos minutos m&aacute;s tarde, Percy Liza anot&oacute; un golazo de &lsquo;palomita&rsquo; tras un buen pase de &Aacute;vila. El &lsquo;Cholito&rsquo;, quien jug&oacute; un partidazo esta tarde, volvi&oacute; a dar una asistencia a los 64&prime; para la anotaci&oacute;n de Castillo. El partido parec&iacute;a resuelto, pero Binacional no baj&oacute; los brazos.</p>\n\n<p>El &lsquo;Poderoso del Sur&rsquo; acort&oacute; distancias a los 78&prime; con un gol del colombiano Arango. Luego, el &aacute;rbitro cobr&oacute; penal para Binacional; sin embargo, el ecuatoriano De Jes&uacute;s fall&oacute; el disparo desde los doce pasos. &Aacute;vila cerr&oacute; una tarde perfecta a los 85&prime; marcando el cuarto gol r&iacute;mense. Cerca del pitazo final, Ojeda se encarg&oacute; de anotar el &uacute;ltimo tanto en el Estadio Monumental.</p>\n\n<p>Con este resultado, los &ldquo;rimenses&rdquo; llegan a las 27 unidades en la Fase 2 y, de perder Alianza Lima todos sus partidos restantes, tendr&iacute;an que sumar los 9 puntos que le queda disputar. Por su parte, el Binacional pelea por no descender ya que solamente tiene 24 puntos en la tabla general.</p>','comunicado_fec-11-10-2021-19-05-35.png',0,1,0,'2021-10-10 23:28:38','2021-10-12 00:05:35',2),(3,'imagen comunicado','<p>asdasdasdasdas d</p>\n\n<p>sadsad</p>\n\n<p>asdas</p>','comunicado_fec11-10-2021-19-06-39.jpg',1,1,0,'2021-10-12 00:06:07','2021-10-12 00:06:39',2);
/*!40000 ALTER TABLE `imagencomunicados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imageneventos`
--

DROP TABLE IF EXISTS `imageneventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `imageneventos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text,
  `url` varchar(2500) DEFAULT NULL,
  `posicion` int DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `evento_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_imageneventos_eventos1_idx` (`evento_id`),
  CONSTRAINT `fk_imageneventos_eventos1` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imageneventos`
--

LOCK TABLES `imageneventos` WRITE;
/*!40000 ALTER TABLE `imageneventos` DISABLE KEYS */;
INSERT INTO `imageneventos` VALUES (2,'Abuela pide apoyo de la población para su nieta menor de edad que quedó en orfandad','<p>La abuela de un menor pidi&oacute; la&nbsp;<strong>colaboraci&oacute;n</strong>&nbsp;a la colectividad para que lo ayuden con el&nbsp;<strong>sustento de su nieta</strong>; ello en vista de que su madre, que fue&nbsp;<em>trabajadora municipal</em>,&nbsp;<strong>pereci&oacute;</strong>&nbsp;y su padre no asume el gasto de alimentaci&oacute;n.</p>\n\n<p>La se&ntilde;ora Bernardina Bernuy, solicita ayuda de las personas de buen coraz&oacute;n de donar&nbsp;<strong>leche especial</strong>; para la ni&ntilde;a que perdi&oacute; a su madre, que fue extrabajadora de la&nbsp;<em>municipalidad provincial de Huaraz</em></p>\n\n<p>Bernuy dijo que su nieta de&nbsp;<strong>9 meses</strong>&nbsp;consume&nbsp;<em>ocho tarros de leche especial por mes</em>&nbsp;y con el poco dinero que gana,&nbsp;<strong>no puede solventar el costo de estos insumos</strong>; y es ella casi la &uacute;nica que vela por su nieta.</p>\n\n<p>Indic&oacute; adem&aacute;s que, el&nbsp;<strong>padre</strong>&nbsp;hasta la fecha no cumple con su&nbsp;<strong>obligaci&oacute;n</strong>; por lo que ella como abuela est&aacute; asumiendo los&nbsp;<em>gastos de alimentaci&oacute;n de la ni&ntilde;a</em>, por lo que pide un apoyo de las&nbsp;<strong>autoridades y poblaci&oacute;n en general.</strong></p>','evento_fec-04-12-2021-18-33-42.jpg',0,1,0,'2021-10-10 23:22:25','2021-12-04 23:33:42',2),(4,'imagen otra','<p>aasdsadasd</p>','evento_fec04-12-2021-18-33-26.jpg',2,1,0,'2021-10-12 00:04:16','2021-12-04 23:33:26',2);
/*!40000 ALTER TABLE `imageneventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagengalerias`
--

DROP TABLE IF EXISTS `imagengalerias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `imagengalerias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text,
  `url` varchar(2500) DEFAULT NULL,
  `posicion` int DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `galeria_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_imagencomunicados_copy1_galerias1_idx` (`galeria_id`),
  CONSTRAINT `fk_imagencomunicados_copy1_galerias1` FOREIGN KEY (`galeria_id`) REFERENCES `galerias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagengalerias`
--

LOCK TABLES `imagengalerias` WRITE;
/*!40000 ALTER TABLE `imagengalerias` DISABLE KEYS */;
INSERT INTO `imagengalerias` VALUES (1,'Publicacion 1','<p>sad asdsad sad sad sad</p>','galeria_fec-08-12-2021-12-03-25.jpg',0,1,0,'2021-12-08 17:03:25','2021-12-08 17:03:25',1),(4,'Imagen 1','<p>Descripci&oacute;n de la Imagen</p>','galeria_fec-08-12-2021-12-05-08.jpg',1,1,0,'2021-12-08 17:05:08','2021-12-08 17:05:08',1);
/*!40000 ALTER TABLE `imagengalerias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagenhistorias`
--

DROP TABLE IF EXISTS `imagenhistorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `imagenhistorias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text,
  `url` varchar(2500) DEFAULT NULL,
  `posicion` int DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `historia_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_imagencomunicados_copy1_historias1_idx` (`historia_id`),
  CONSTRAINT `fk_imagencomunicados_copy1_historias1` FOREIGN KEY (`historia_id`) REFERENCES `historias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenhistorias`
--

LOCK TABLES `imagenhistorias` WRITE;
/*!40000 ALTER TABLE `imagenhistorias` DISABLE KEYS */;
INSERT INTO `imagenhistorias` VALUES (2,'imagen 1','<p>asddddddddddddd asddddddddddddsad assssssasd sad sadsa d asa</p>','historia_fec-11-10-2021-23-37-42.jpg',1,1,0,'2021-10-12 04:37:42','2021-12-05 02:55:19',1),(4,'Imagen 1','<p>Descripcion</p>','historia_fec-09-12-2021-10-00-36.jpg',1,1,0,'2021-12-09 15:00:37','2021-12-09 15:00:37',2),(5,'Imagen 1','','historia_fec-09-12-2021-10-01-12.jpg',1,1,0,'2021-12-09 15:01:12','2021-12-09 15:01:12',3);
/*!40000 ALTER TABLE `imagenhistorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagennoticias`
--

DROP TABLE IF EXISTS `imagennoticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `imagennoticias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text,
  `url` varchar(2500) DEFAULT NULL,
  `posicion` int DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `noticia_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_imagennoticias_noticias1_idx` (`noticia_id`),
  CONSTRAINT `fk_imagennoticias_noticias1` FOREIGN KEY (`noticia_id`) REFERENCES `noticias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagennoticias`
--

LOCK TABLES `imagennoticias` WRITE;
/*!40000 ALTER TABLE `imagennoticias` DISABLE KEYS */;
INSERT INTO `imagennoticias` VALUES (2,'Revelan que director del Colegio de Cajamarquilla fue sentenciado por peculado doloso','<p>La Sala de Apelaciones de la Corte Superior de Justicia de Ancash, declar&oacute; infundado la apelaci&oacute;n interpuesta por Bonifacio Telmo Loli Osorio contra el fallo de primera instancia que lo sentenci&oacute;, a cuatro a&ntilde;os de pena privativa de la libertad suspendida y doscientos soles por concepto de reparaci&oacute;n civil por el delito de peculado doloso en agravio de la I.E. N&deg; 86059 Virgen de la Natividad del distrito de La Libertad &ndash;Cajamarquilla, provincia de Huaraz.&nbsp;</p>\n\n<p>Seg&uacute;n el Poder Judicial,&nbsp;<strong>Telmo Loli en su&nbsp;condici&oacute;n de director de la I.E. N&deg; 86059 del distrito de La Libertad &ndash;Cajamarquilla, se apoder&oacute; de S/. 6,324.00 del Programa de Mantenimiento de Locales Escolares</strong>,&nbsp;<strong>de acuerdo a la sentencia que fue consentida y ejecutoriada.</strong></p>\n\n<p>Esta revelaci&oacute;n fue alcanzado por un grupo de ciudadanos que cuestionaron el accionar del ex director y ex alcalde de La Libertad, a quien se sindica como uno de los asesores de la revocatoria del actual burgomaestre William Pic&oacute;n Jamanca.</p>\n\n<p>Asimismo dieron a conocer que el promotor de la revocatoria es un modesto triciclero que no vive en Cajamarquilla y reside permanentemente en Huaraz.</p>\n\n<ul>\n	<li>\n	<p>Mil 230 electores votar&aacute;n en distrito La Libertad &ndash; Huaraz en la consulta popular de revocatoria</p>\n	</li>\n	<li>\n	<p>Municipalidad de la Libertad-Cajamarquilla inaugura reservorio que irrigar&aacute; m&aacute;s de 100 h&aacute;s de terrenos</p>\n	</li>\n	<li>\n	<p>Cajamarquillanos inician ma&ntilde;ana la fiesta patronal de La Virgen de Natividad</p>\n	</li>\n	<li>\n	<p>Eval&uacute;an evacuar a Lima a escolares heridos en accidente de Cajamarquilla</p>\n	</li>\n</ul>\n\n<p>La Sala de Apelaciones de la Corte Superior de Justicia de Ancash, declar&oacute; infundado la apelaci&oacute;n interpuesta por Bonifacio Telmo Loli Osorio contra el fallo de primera instancia que lo sentenci&oacute;, a cuatro a&ntilde;os de pena privativa de la libertad suspendida y doscientos soles por concepto de reparaci&oacute;n civil por el delito de peculado doloso en agravio de la I.E. N&deg; 86059 Virgen de la Natividad del distrito de La Libertad &ndash;Cajamarquilla, provincia de Huaraz.&nbsp;</p>\n\n<p>Seg&uacute;n el Poder Judicial,&nbsp;<strong>Telmo Loli en su&nbsp;condici&oacute;n de director de la I.E. N&deg; 86059 del distrito de La Libertad &ndash;Cajamarquilla, se apoder&oacute; de S/. 6,324.00 del Programa de Mantenimiento de Locales Escolares</strong>,&nbsp;<strong>de acuerdo a la sentencia que fue consentida y ejecutoriada.</strong></p>\n\n<p>Esta revelaci&oacute;n fue alcanzado por un grupo de ciudadanos que cuestionaron el accionar del ex director y ex alcalde de La Libertad, a quien se sindica como uno de los asesores de la revocatoria del actual burgomaestre William Pic&oacute;n Jamanca.</p>\n\n<p>Asimismo dieron a conocer que el promotor de la revocatoria es un modesto triciclero que no vive en Cajamarquilla y reside permanentemente en Huaraz.</p>\n\n<p>Como es de dominio p&uacute;blico ma&ntilde;ana se realizar&aacute; la consulta ciudadana en el distrito huaracino de La Libertad.</p>','noticia_fec-11-10-2021-00-02-31.png',0,1,0,'2021-10-10 17:38:10','2021-10-11 05:02:31',2),(3,'Imagen 1','<p>Descripci&oacute;n de la Imagen de la noticia</p>\n\n<ul>\n	<li>Noticia</li>\n</ul>','noticia_fec-10-10-2021-23-21-50.png',1,1,0,'2021-10-11 04:21:50','2021-10-11 04:21:50',2);
/*!40000 ALTER TABLE `imagennoticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infraestructuras`
--

DROP TABLE IF EXISTS `infraestructuras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `infraestructuras` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `tieneimagen` tinyint DEFAULT NULL,
  `url` varchar(2500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `programaestudio_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `tienearchivo` tinyint DEFAULT NULL,
  `urlfile` varchar(500) DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `nombrefile` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_planestudios_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_planestudios_programaestudios100` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infraestructuras`
--

LOCK TABLES `infraestructuras` WRITE;
/*!40000 ALTER TABLE `infraestructuras` DISABLE KEYS */;
INSERT INTO `infraestructuras` VALUES (1,'asdasd','<p>fsdfdsf</p>',0,'',1,0,'2021-12-11 06:05:06','2021-12-11 06:05:06',1,1,0,'',2,NULL,''),(2,'zxczxc','<p>utyghj</p>',1,'infraestructura-img_11-12-2021-01-06-06.jpg',1,0,'2021-12-11 06:05:15','2021-12-11 06:06:06',1,1,1,'infraestructura-file_11-12-2021-01-06-06.pdf',2,NULL,'xcvxc'),(3,'7868678','<p>vbnbvn</p>',1,'infraestructura-img_11-12-2021-01-06-59.png',1,1,'2021-12-11 06:05:27','2021-12-11 06:07:02',1,1,1,'infraestructura-file_11-12-2021-01-06-59.pdf',2,NULL,'123c'),(4,'vbnytt','<p>csdsd</p>',0,'',1,0,'2021-12-11 06:05:42','2021-12-11 06:05:49',1,1,0,'',2,NULL,'');
/*!40000 ALTER TABLE `infraestructuras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `misionvisions`
--

DROP TABLE IF EXISTS `misionvisions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `misionvisions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) DEFAULT NULL,
  `descripcion` text,
  `tipo` tinyint DEFAULT NULL COMMENT '1 -> mision\n2 -> vision',
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `tieneimagen` tinyint DEFAULT NULL,
  `url` varchar(2500) DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_misionvisions_facultads1_idx` (`facultad_id`),
  KEY `fk_misionvisions_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_misionvisions_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_misionvisions_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `misionvisions`
--

LOCK TABLES `misionvisions` WRITE;
/*!40000 ALTER TABLE `misionvisions` DISABLE KEYS */;
INSERT INTO `misionvisions` VALUES (3,'MISIÓN DE LA FACULTAD','<p>mision fec lasldalsdlsadlsadl&nbsp;</p>\n\n<p>asdlalsdlsadlsa</p>',1,1,0,1,'misionvision_fec-04-12-2021-22-25-41.jpg',1,1,'2021-10-13 16:58:10','2021-12-05 03:25:41',1,NULL),(4,'VISIÓN DE LA FACULTAD','<p>vision de la fec vision de la fec asdsad adssa</p>',2,1,0,1,'misionvision_fec-04-12-2021-22-21-14.jpg',1,1,'2021-12-05 03:17:17','2021-12-05 03:21:14',1,NULL),(5,'MISIÓN DEL PROGRAMA DE ESTUDIOS','<p>Misi&oacute;n&nbsp;del Programa de Estudio de Contabilidad</p>',1,1,0,1,'misionvision_fec-09-12-2021-10-09-26.jpg',2,1,'2021-12-09 15:09:00','2021-12-09 15:09:26',NULL,1),(6,'VISIÓN DEL PROGRAMA DE ESTUDIOS','<p>Visi&oacute;n&nbsp;del Programa de Estudio de Contabilidad</p>',2,1,0,1,'misionvision_fec-09-12-2021-10-09-15.jpg',2,1,'2021-12-09 15:09:16','2021-12-09 15:09:16',NULL,1),(7,'MISIÓN DEL PROGRAMA DE ESTUDIOS','<p>Misi&oacute;n&nbsp;del Programa de Estudio de Econom&iacute;a</p>',1,1,0,0,'',2,1,'2021-12-09 15:09:45','2021-12-09 15:09:45',NULL,2),(8,'VISIÓN DEL PROGRAMA DE ESTUDIOS','<p>Visi&oacute;n&nbsp;del Programa de Estudio de Econom&iacute;a</p>',2,1,0,0,'',2,1,'2021-12-09 15:09:51','2021-12-09 15:09:51',NULL,2);
/*!40000 ALTER TABLE `misionvisions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `noticias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `titular` varchar(500) DEFAULT NULL,
  `desarrollo` text,
  `tieneimagen` tinyint DEFAULT NULL COMMENT '0 -> no tiene\n1 -> si tiene',
  `nivel` tinyint DEFAULT NULL COMMENT 'nivel 1 -> corresponde a facultad\nnivel 2 -> corresponde a programas de estudios',
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_noticias_facultads1_idx` (`facultad_id`),
  KEY `fk_noticias_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_noticias_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_noticias_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (1,'2021-10-10','04:02:00','Revelan que director del Colegio de Cajamarquilla fue sentenciado por peculado doloso','<p>La Sala de Apelaciones de la Corte Superior de Justicia de Ancash, declar&oacute; infundado la apelaci&oacute;n interpuesta por Bonifacio Telmo Loli Osorio contra el fallo de primera instancia que lo sentenci&oacute;, a cuatro a&ntilde;os de pena privativa de la libertad suspendida y doscientos soles por concepto de reparaci&oacute;n civil por el delito de peculado doloso en agravio de la I.E. N&deg; 86059 Virgen de la Natividad del distrito de La Libertad &ndash;Cajamarquilla, provincia de Huaraz.&nbsp;</p>\n\n<p>Seg&uacute;n el Poder Judicial,&nbsp;<strong>Telmo Loli en su&nbsp;condici&oacute;n de director de la I.E. N&deg; 86059 del distrito de La Libertad &ndash;Cajamarquilla, se apoder&oacute; de S/. 6,324.00 del Programa de Mantenimiento de Locales Escolares</strong>,&nbsp;<strong>de acuerdo a la sentencia que fue consentida y ejecutoriada.</strong></p>\n\n<p>Esta revelaci&oacute;n fue alcanzado por un grupo de ciudadanos que cuestionaron el accionar del ex director y ex alcalde de La Libertad, a quien se sindica como uno de los asesores de la revocatoria del actual burgomaestre William Pic&oacute;n Jamanca.</p>\n\n<p>Asimismo dieron a conocer que el promotor de la revocatoria es un modesto triciclero que no vive en Cajamarquilla y reside permanentemente en Huaraz.</p>\n\n<p>Foto: &Aacute;ncash Noticias</p>\n\n<p>&Aacute;NCASH</p>\n\n<p>Revelan que director del Colegio de Cajamarquilla fue sentenciado por peculado doloso</p>\n\n<p>Telmo Loli Osorio no rindi&oacute; por fondos recibidos para mantenimiento de infraestructura de su colegio.</p>\n\n<p>&nbsp;</p>\n\n<p>Por</p>\n\n<p>Redacci&oacute;n AN</p>\n\n<p>Publicado el&nbsp;octubre 9, 2021</p>\n\n<ul>\n	<li>SHARE</li>\n	<li>TWEET</li>\n	<li>&nbsp;</li>\n	<li>&nbsp;</li>\n</ul>\n\n<p>Exportar a PDFImprimir</p>\n\n<p>La Sala de Apelaciones de la Corte Superior de Justicia de Ancash, declar&oacute; infundado la apelaci&oacute;n interpuesta por Bonifacio Telmo Loli Osorio contra el fallo de primera instancia que lo sentenci&oacute;, a cuatro a&ntilde;os de pena privativa de la libertad suspendida y doscientos soles por concepto de reparaci&oacute;n civil por el delito de peculado doloso en agravio de la I.E. N&deg; 86059 Virgen de la Natividad del distrito de La Libertad &ndash;Cajamarquilla, provincia de Huaraz.&nbsp;</p>\n\n<p>Seg&uacute;n el Poder Judicial,&nbsp;<strong>Telmo Loli en su&nbsp;condici&oacute;n de director de la I.E. N&deg; 86059 del distrito de La Libertad &ndash;Cajamarquilla, se apoder&oacute; de S/. 6,324.00 del Programa de Mantenimiento de Locales Escolares</strong>,&nbsp;<strong>de acuerdo a la sentencia que fue consentida y ejecutoriada.</strong></p>\n\n<p>&nbsp;</p>\n\n<p>Esta revelaci&oacute;n fue alcanzado por un grupo de ciudadanos que cuestionaron el accionar del ex director y ex alcalde de La Libertad, a quien se sindica como uno de los asesores de la revocatoria del actual burgomaestre William Pic&oacute;n Jamanca.</p>\n\n<p>Asimismo dieron a conocer que el promotor de la revocatoria es un modesto triciclero que no vive en Cajamarquilla y reside permanentemente en Huaraz.</p>\n\n<p>Como es de dominio p&uacute;blico ma&ntilde;ana se realizar&aacute; la consulta ciudadana en el distrito huaracino de La Libertad.</p>',1,1,1,'2021-10-10 17:32:50','2021-10-10 17:36:50',1,NULL,1,1),(2,'2021-10-09','16:37:00','Revelan que director del Colegio de Cajamarquilla fue sentenciado por peculado doloso','<p>La Sala de Apelaciones de la Corte Superior de Justicia de Ancash, declar&oacute; infundado la apelaci&oacute;n interpuesta por Bonifacio Telmo Loli Osorio contra el fallo de primera instancia que lo sentenci&oacute;, a cuatro a&ntilde;os de pena privativa de la libertad suspendida y doscientos soles por concepto de reparaci&oacute;n civil por el delito de peculado doloso en agravio de la I.E. N&deg; 86059 Virgen de la Natividad del distrito de La Libertad &ndash;Cajamarquilla, provincia de Huaraz.&nbsp;</p>\n\n<p>Seg&uacute;n el Poder Judicial,&nbsp;<strong>Telmo Loli en su&nbsp;condici&oacute;n de director de la I.E. N&deg; 86059 del distrito de La Libertad &ndash;Cajamarquilla, se apoder&oacute; de S/. 6,324.00 del Programa de Mantenimiento de Locales Escolares</strong>,&nbsp;<strong>de acuerdo a la sentencia que fue consentida y ejecutoriada.</strong></p>\n\n<p>Esta revelaci&oacute;n fue alcanzado por un grupo de ciudadanos que cuestionaron el accionar del ex director y ex alcalde de La Libertad, a quien se sindica como uno de los asesores de la revocatoria del actual burgomaestre William Pic&oacute;n Jamanca.</p>\n\n<p>Asimismo dieron a conocer que el promotor de la revocatoria es un modesto triciclero que no vive en Cajamarquilla y reside permanentemente en Huaraz.</p>\n\n<ul>\n	<li>\n	<p>Mil 230 electores votar&aacute;n en distrito La Libertad &ndash; Huaraz en la consulta popular de revocatoria</p>\n	</li>\n	<li>\n	<p>Municipalidad de la Libertad-Cajamarquilla inaugura reservorio que irrigar&aacute; m&aacute;s de 100 h&aacute;s de terrenos</p>\n	</li>\n	<li>\n	<p>Cajamarquillanos inician ma&ntilde;ana la fiesta patronal de La Virgen de Natividad</p>\n	</li>\n	<li>\n	<p>Eval&uacute;an evacuar a Lima a escolares heridos en accidente de Cajamarquilla</p>\n	</li>\n</ul>\n\n<p>La Sala de Apelaciones de la Corte Superior de Justicia de Ancash, declar&oacute; infundado la apelaci&oacute;n interpuesta por Bonifacio Telmo Loli Osorio contra el fallo de primera instancia que lo sentenci&oacute;, a cuatro a&ntilde;os de pena privativa de la libertad suspendida y doscientos soles por concepto de reparaci&oacute;n civil por el delito de peculado doloso en agravio de la I.E. N&deg; 86059 Virgen de la Natividad del distrito de La Libertad &ndash;Cajamarquilla, provincia de Huaraz.&nbsp;</p>\n\n<p>Seg&uacute;n el Poder Judicial,&nbsp;<strong>Telmo Loli en su&nbsp;condici&oacute;n de director de la I.E. N&deg; 86059 del distrito de La Libertad &ndash;Cajamarquilla, se apoder&oacute; de S/. 6,324.00 del Programa de Mantenimiento de Locales Escolares</strong>,&nbsp;<strong>de acuerdo a la sentencia que fue consentida y ejecutoriada.</strong></p>\n\n<p>Esta revelaci&oacute;n fue alcanzado por un grupo de ciudadanos que cuestionaron el accionar del ex director y ex alcalde de La Libertad, a quien se sindica como uno de los asesores de la revocatoria del actual burgomaestre William Pic&oacute;n Jamanca.</p>\n\n<p>Asimismo dieron a conocer que el promotor de la revocatoria es un modesto triciclero que no vive en Cajamarquilla y reside permanentemente en Huaraz.</p>\n\n<p>Como es de dominio p&uacute;blico ma&ntilde;ana se realizar&aacute; la consulta ciudadana en el distrito huaracino de La Libertad.</p>',1,1,1,'2021-10-10 17:38:10','2021-10-11 04:53:28',1,NULL,1,0),(3,'2021-12-04','00:00:00','asdsad','<p>sadsadas</p>',1,1,1,'2021-12-04 23:17:52','2021-12-04 23:18:18',1,NULL,1,1);
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objetivos`
--

DROP TABLE IF EXISTS `objetivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `objetivos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numero` int DEFAULT NULL,
  `descripcion` text,
  `tieneimagen` tinyint DEFAULT NULL,
  `url` varchar(2500) DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  `titulo` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_objetivos_facultads1_idx` (`facultad_id`),
  KEY `fk_objetivos_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_objetivos_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_objetivos_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objetivos`
--

LOCK TABLES `objetivos` WRITE;
/*!40000 ALTER TABLE `objetivos` DISABLE KEYS */;
INSERT INTO `objetivos` VALUES (1,1,'<p>asd asdsa dsa</p>',NULL,'objetivo-04-12-2021-23-56-03.jpg',1,'2021-12-05 04:56:03','2021-12-05 04:56:03','1',1,0,1,NULL,'Objetivo 1'),(2,2,'<p>sadsad asd sa</p>',NULL,'objetivo04-12-2021-23-56-27.png',1,'2021-12-05 04:56:14','2021-12-05 04:56:30','1',1,1,1,NULL,'sadsad'),(3,1,'<p>Descripcion Objetivo 1</p>',NULL,'objetivo-09-12-2021-10-19-06.jpg',2,'2021-12-09 15:19:06','2021-12-09 15:19:27','1',1,0,NULL,1,'Objetivo 1'),(4,2,'<p>Descripcion Objetivo 2</p>',NULL,'objetivo-09-12-2021-10-19-22.jpg',2,'2021-12-09 15:19:22','2021-12-09 15:19:22','1',1,0,NULL,1,'Objetivo 2'),(5,1,'<p>Descripci&oacute;n del primer objetivo</p>',NULL,'objetivo-09-12-2021-10-19-53.jpg',2,'2021-12-09 15:19:53','2021-12-09 15:19:53','1',1,0,NULL,2,'Objetivo Primero');
/*!40000 ALTER TABLE `objetivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organigramas`
--

DROP TABLE IF EXISTS `organigramas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `organigramas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `tieneimagen` tinyint DEFAULT NULL,
  `urlimagen` varchar(2500) DEFAULT NULL,
  `tienelink` tinyint DEFAULT NULL,
  `urllink` varchar(2500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_organigramas_facultads1_idx` (`facultad_id`),
  KEY `fk_organigramas_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_organigramas_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_organigramas_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organigramas`
--

LOCK TABLES `organigramas` WRITE;
/*!40000 ALTER TABLE `organigramas` DISABLE KEYS */;
/*!40000 ALTER TABLE `organigramas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfiles`
--

DROP TABLE IF EXISTS `perfiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `perfiles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `tipo` tinyint DEFAULT NULL COMMENT '1 -> ingreso\n2 -> egreso',
  `tieneimagen` tinyint DEFAULT NULL,
  `url` varchar(2500) DEFAULT NULL,
  `tienearchivo` tinyint DEFAULT NULL,
  `urlfile` varchar(2500) DEFAULT NULL,
  `nombrefile` varchar(500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `programaestudio_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_perfiles_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_perfiles_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfiles`
--

LOCK TABLES `perfiles` WRITE;
/*!40000 ALTER TABLE `perfiles` DISABLE KEYS */;
INSERT INTO `perfiles` VALUES (1,'asdasdas','<p>asdasd</p>',1,1,'perfile-img_09-12-2021-23-42-42.png',1,'perfile-file_09-12-2021-18-40-12.pdf','ads asd ads ads',1,0,'2021-12-09 23:40:12','2021-12-10 04:42:42',1,1,2,NULL),(2,'asdsad sad','<p>asdsadsad</p>',2,1,'perfile-img_09-12-2021-18-42-22.jpg',1,'perfile-file_09-12-2021-23-43-14.pdf','file',1,0,'2021-12-09 23:42:22','2021-12-10 04:43:14',1,1,2,NULL);
/*!40000 ALTER TABLE `perfiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personas`
--

DROP TABLE IF EXISTS `personas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `personas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `dni` varchar(20) DEFAULT NULL,
  `apellidos` varchar(500) DEFAULT NULL,
  `nombres` varchar(500) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `direccion` varchar(500) DEFAULT NULL,
  `cargo` varchar(500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personas`
--

LOCK TABLES `personas` WRITE;
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` VALUES (1,'99999999','Del Castillo','Max','943852951','Huaraz','Administrador del Sistema',1,0,NULL,NULL),(2,'15985235','Quiroz','Rocío','987458254','Huaraz','Cajera',1,0,'2021-10-03 06:56:34','2021-10-03 06:56:34'),(3,'159753852','Palma','Rosa',NULL,NULL,'Editor',1,0,'2021-10-04 00:01:52','2021-10-04 00:01:52');
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planestudios`
--

DROP TABLE IF EXISTS `planestudios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `planestudios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `tieneimagen` tinyint DEFAULT NULL,
  `url` varchar(2500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `programaestudio_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `tienearchivo` tinyint DEFAULT NULL,
  `urlfile` varchar(2500) DEFAULT NULL,
  `nombrefile` varchar(500) DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_planestudios_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_planestudios_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planestudios`
--

LOCK TABLES `planestudios` WRITE;
/*!40000 ALTER TABLE `planestudios` DISABLE KEYS */;
INSERT INTO `planestudios` VALUES (1,'Plan de Estudio 2016','<p>datos del plan de estudio</p>',1,'planestudio-img_10-12-2021-12-05-33.jpg',1,0,'2021-12-10 17:05:33','2021-12-10 17:05:33',1,1,1,'planestudio-file_10-12-2021-12-05-33.pdf','malla curricular 2017',2,NULL),(2,'adssad ed','<p>dsad</p>',1,'planestudio-img_10-12-2021-12-13-03.png',1,1,'2021-12-10 17:09:52','2021-12-10 17:13:09',1,1,1,'planestudio-file_10-12-2021-12-13-03.pdf','gvfghghf',2,NULL);
/*!40000 ALTER TABLE `planestudios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `politicacalidads`
--

DROP TABLE IF EXISTS `politicacalidads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `politicacalidads` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `tieneimagen` int DEFAULT NULL,
  `tienearchivo` int DEFAULT NULL,
  `url` varchar(2500) DEFAULT NULL,
  `urlfile` varchar(2500) DEFAULT NULL,
  `nombrefile` varchar(500) DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_politicacalidads_facultads1_idx` (`facultad_id`),
  KEY `fk_politicacalidads_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_politicacalidads_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_politicacalidads_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `politicacalidads`
--

LOCK TABLES `politicacalidads` WRITE;
/*!40000 ALTER TABLE `politicacalidads` DISABLE KEYS */;
INSERT INTO `politicacalidads` VALUES (1,'Contenido de Calidad 1','<p>descripcion de contenido de calidad 1&nbsp;&nbsp;descripcion de contenido de calidad 1&nbsp;descripcion de contenido de calidad 1&nbsp;&nbsp;descripcion de contenido de calidad 1&nbsp;descripcion de contenido de calidad 1&nbsp;&nbsp;descripcion de contenido de calidad 1</p>',0,0,'','','',1,1,1,'2021-12-05 04:19:23','2021-12-05 04:21:25',1,1,NULL),(2,'Conenido de Calidad 1','<p>&nbsp;&nbsp;Conenido de Calidad 1&nbsp;Conenido de Calidad 1&nbsp;Conenido de Calidad 1&nbsp;Conenido de Calidad 1&nbsp;Conenido de Calidad 1&nbsp;Conenido de Calidad 1&nbsp;Conenido de Calidad 1&nbsp;Conenido de Calidad 1&nbsp;Conenido de Calidad 1</p>',1,1,'politicacalidad-img_04-12-2021-23-22-18.jpg','politicacalidad-file_04-12-2021-23-22-18.pdf','archivo calidad',1,1,0,'2021-12-05 04:21:54','2021-12-05 04:22:18',1,1,NULL);
/*!40000 ALTER TABLE `politicacalidads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `presentacions`
--

DROP TABLE IF EXISTS `presentacions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `presentacions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `tieneimagen` tinyint DEFAULT NULL,
  `url` varchar(2500) DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_presentacions_facultads1_idx` (`facultad_id`),
  KEY `fk_presentacions_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_presentacions_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_presentacions_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `presentacions`
--

LOCK TABLES `presentacions` WRITE;
/*!40000 ALTER TABLE `presentacions` DISABLE KEYS */;
INSERT INTO `presentacions` VALUES (1,'Bienvenidos al Portal Web de la Facultad de Economía y Contabilidad','<p>Es un grato placer brindarles la bienvenida al portal web de la Facultad de Econom&iacute;a y Contabilidad.</p>\n\n<ul>\n	<li>Es un grato placer brindarles la bienvenida al portal web de la Facultad de Econom&iacute;a y Contabilidad.</li>\n	<li>Es un grato placer brindarles la bienvenida al portal web de la Facultad de Econom&iacute;a y Contabilidad.</li>\n</ul>',1,'presentacion_fec-10-12-2021-13-40-58.jpg',1,1,0,'2021-10-09 21:00:18','2021-12-10 18:40:58',1,1,NULL),(2,'Bienvenidos al Programa de Estudio de Contabilidad','<p>Welcome</p>',1,'presentacion_fec-08-12-2021-23-29-14.jpg',2,1,0,'2021-12-09 04:27:59','2021-12-09 04:29:14',1,NULL,1),(3,'Bienvenido al Programa de Estudio de Economía','<p>Bienvenido al Programa de Estudio de Econom&iacute;a</p>',1,'presentacion_fec-08-12-2021-23-29-39.jpg',2,1,0,'2021-12-09 04:29:39','2021-12-09 04:29:39',1,NULL,2);
/*!40000 ALTER TABLE `presentacions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programaestudios`
--

DROP TABLE IF EXISTS `programaestudios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `programaestudios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `direccion` varchar(500) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL COMMENT 'nivel 2 -> corresponde a programas de estudios',
  `facultad_id` int NOT NULL,
  `nombre_organigrama` varchar(500) DEFAULT NULL,
  `url_organigrama` varchar(2500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_programaestudios_facultads_idx` (`facultad_id`),
  CONSTRAINT `fk_programaestudios_facultads` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programaestudios`
--

LOCK TABLES `programaestudios` WRITE;
/*!40000 ALTER TABLE `programaestudios` DISABLE KEYS */;
INSERT INTO `programaestudios` VALUES (1,'Contabilidad','Contabilidad','Av Universitaria s/n - Shancayan - Pabellón F','043-456239','fec@unasam.edu.pe',1,0,NULL,'2021-12-09 04:59:02',1,2,1,'Organigrama del Programa de Estudios de Contabilidad','organigrama_08-12-2021-23-57-22.pdf'),(2,'Economía','Economía','Av Universitaria s/n - Shancayan - Pabellón F','043-456239','fec@unasam.edu.pe',1,0,NULL,'2021-12-09 04:59:26',1,2,1,'Organigrama del Programa de Estudio de Economía','organigrama_08-12-2021-23-58-11.pdf');
/*!40000 ALTER TABLE `programaestudios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `redsocials`
--

DROP TABLE IF EXISTS `redsocials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `redsocials` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  `url` varchar(2500) DEFAULT NULL,
  `urlredsocial` varchar(2500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_redsocials_programaestudios1_idx` (`programaestudio_id`),
  KEY `fk_redsocials_facultads1_idx` (`facultad_id`),
  CONSTRAINT `fk_redsocials_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_redsocials_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `redsocials`
--

LOCK TABLES `redsocials` WRITE;
/*!40000 ALTER TABLE `redsocials` DISABLE KEYS */;
INSERT INTO `redsocials` VALUES (1,'Faceebook','redsocial_fec10-10-2021-19-13-14.png','https://www.facebook.com/Facultad-de-Econom%C3%ADa-y-Contabilidad-Oficial-789992894440808/',1,1,'2021-10-11 00:09:44','2021-10-11 00:13:24',1,1,NULL,1),(2,'asdas','redsocial_fec10-10-2021-19-39-07.png','adasd',1,1,'2021-10-11 00:34:20','2021-10-11 00:39:24',1,1,NULL,1),(3,'hg','redsocial_fec-10-10-2021-19-39-35.png','ghf',1,1,'2021-10-11 00:39:35','2021-10-11 00:41:38',1,1,NULL,1),(4,'Faceebok','redsocial_fec10-10-2021-19-44-56.png','https://www.facebook.com/Facultad-de-Econom%C3%ADa-y-Contabilidad-Oficial-789992894440808/',1,0,'2021-10-11 00:41:48','2021-10-11 00:44:56',1,1,NULL,1),(5,'Youtube','redsocial_fec04-12-2021-20-13-37.png','https://www.youtube.com/channel/UCHUxOdDI4zrMgghSpTDxttw',1,0,'2021-12-05 01:13:12','2021-12-05 01:13:37',1,1,NULL,1),(6,'ads','redsocial_fec-04-12-2021-20-13-45.png','asd',1,1,'2021-12-05 01:13:45','2021-12-05 01:13:48',1,1,NULL,1);
/*!40000 ALTER TABLE `redsocials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `revistas`
--

DROP TABLE IF EXISTS `revistas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `revistas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `tieneimagen` tinyint DEFAULT NULL,
  `urlimagen` varchar(2500) DEFAULT NULL,
  `tienerevista` tinyint DEFAULT NULL,
  `urlrevista` varchar(2500) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `nivel` tinyint DEFAULT NULL,
  `nombrefile` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facultad_id` int DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_revistas_facultads1_idx` (`facultad_id`),
  KEY `fk_revistas_programaestudios1_idx` (`programaestudio_id`),
  CONSTRAINT `fk_revistas_facultads1` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`),
  CONSTRAINT `fk_revistas_programaestudios1` FOREIGN KEY (`programaestudio_id`) REFERENCES `programaestudios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `revistas`
--

LOCK TABLES `revistas` WRITE;
/*!40000 ALTER TABLE `revistas` DISABLE KEYS */;
INSERT INTO `revistas` VALUES (1,'titulo asdas','<p style=\"text-align:justify\">descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;descripcion asd ad asdas asd as daasd sad asd&nbsp;</p>',1,'revista-img_05-12-2021-22-26-25.png',1,'revista-file_05-12-2021-22-26-25.pdf','2021-11-25',1,0,1,'Nombre de Archivo','2021-12-06 03:26:25','2021-12-06 03:26:25',1,NULL,1),(2,'asdsad','',0,'',0,'','2021-12-17',1,1,1,'','2021-12-06 03:26:49','2021-12-06 03:29:40',1,NULL,1),(3,'adsadas','<p>asdas asd&nbsp;</p>',0,'',0,'','2021-12-03',0,1,1,'','2021-12-06 03:38:19','2021-12-06 03:38:38',1,NULL,1);
/*!40000 ALTER TABLE `revistas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipousers`
--

DROP TABLE IF EXISTS `tipousers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `tipousers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipousers`
--

LOCK TABLES `tipousers` WRITE;
/*!40000 ALTER TABLE `tipousers` DISABLE KEYS */;
INSERT INTO `tipousers` VALUES (1,'SuperAdministrador','SA',1,0,NULL,NULL),(2,'Administrador','admin',1,0,NULL,NULL),(3,'Gestor Web Facultad','user facultad',1,0,NULL,NULL),(4,'Gestor Web Escuela','user facultad',1,0,NULL,NULL);
/*!40000 ALTER TABLE `tipousers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `remember_token` varchar(500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `borrado` tinyint DEFAULT NULL,
  `programaestudio_id` int DEFAULT NULL,
  `tipouser_id` int NOT NULL,
  `persona_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_tipousers1_idx` (`tipouser_id`),
  KEY `fk_users_personas1_idx` (`persona_id`),
  CONSTRAINT `fk_users_personas1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`),
  CONSTRAINT `fk_users_tipousers1` FOREIGN KEY (`tipouser_id`) REFERENCES `tipousers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@hotmail.com','$2y$10$VeVZMdnp2Scm3LkYWaWBT.bRwFVAr3PT86o2eUkRyXq5ULsGkmjqe',NULL,1,0,0,1,1,NULL,'2021-12-11 15:38:34'),(2,'admin23','admin2@mail.com','$2y$10$eCD7n6oytYc76j1SJUbeMOUWa7ADDMOy9WY6WYxWrDNk/zrvKOsCa',NULL,1,1,0,2,2,'2021-10-03 07:05:11','2021-10-03 07:07:41'),(3,'admin4','rosa@mail.com','$2y$10$e5tovXrkjcj5gg8iNbWlz.bAx5/m1PgSX1Qe/zpAEoi56KxX15.9.',NULL,1,0,1,4,3,'2021-10-04 00:01:52','2021-12-11 15:13:39');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'bdwebfec'
--

--
-- Dumping routines for database 'bdwebfec'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-11 12:59:28
