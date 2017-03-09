CREATE DATABASE  IF NOT EXISTS `Catering` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `Catering`;
-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: Catering
-- ------------------------------------------------------
-- Server version	5.6.28

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
-- Table structure for table `cocinero`
--

DROP TABLE IF EXISTS `cocinero`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cocinero` (
  `dni` varchar(9) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `nacimiento` date NOT NULL,
  `contrato` date NOT NULL,
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cocinero`
--

LOCK TABLES `cocinero` WRITE;
/*!40000 ALTER TABLE `cocinero` DISABLE KEYS */;
INSERT INTO `cocinero` VALUES ('03374316D','Alvaro','Calatan Pareja','643831654','1969-08-18','2004-04-24'),('14508269F','Marta','Cuadra Ordóñez','688136737','1961-07-22','2009-04-18'),('19174291L','Domingo','Ugalde Pablo','680897635','1958-05-23','2013-01-24'),('21507822Q','Alicia','Roda Antolin','621101874','1988-10-10','2006-07-14'),('24888908X','Elías','Escalera Abella','689828211','1957-07-22','2014-10-15'),('49281619W','Eva Maria','Colom Blanca','611872771','1959-11-11','2010-01-08'),('53839925F','Juan','Campo Vivo','609461604','1978-06-21','2010-11-13'),('78084391N','Silvia','Acosta Jimenez','650555986','1990-10-29','2006-12-09'),('92033221D','Eduardo','Solana Torres','677682422','1959-11-14','2012-10-11'),('97495935Q','Inmaculada','Molinero Barral','633368824','1960-12-05','2003-12-06');
/*!40000 ALTER TABLE `cocinero` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `almacen`
--

DROP TABLE IF EXISTS `almacen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `almacen` (
  `nalmacen` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  PRIMARY KEY (`nalmacen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `almacen`
--

LOCK TABLES `almacen` WRITE;
/*!40000 ALTER TABLE `almacen` DISABLE KEYS */;
INSERT INTO `almacen` VALUES (1,'Principal','c/ Principal, nº 8'),(2,'Oeste','Avda. Oeste, nº 24'),(3,'Sur','Carretera del sur, km 34'),(4,'Este','P.I. del Este, nave 88');
/*!40000 ALTER TABLE `almacen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plato`
--

DROP TABLE IF EXISTS `plato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plato` (
  `idplato` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  PRIMARY KEY (`idplato`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plato`
--

LOCK TABLES `plato` WRITE;
/*!40000 ALTER TABLE `plato` DISABLE KEYS */;
INSERT INTO `plato` VALUES (1,'Gazpacho de sandía','entrante',6.50),(2,'Ensadala de pollo','entrante',6.50),(3,'Croquetas de pollo','entrante',6.50),(4,'Guisantes con patatas','primer plato',7.00),(5,'Arroz tres delicias','primer plato',8.50),(6,'Judías verdes con patatas','primer plato',7.00),(7,'Escalopas de ternera al limón','segundo plato',10.50),(8,'Merluza con patatas y mayonesa al horno','segundo plato',10.50),(9,'Muslos de pollo con salsa de soja','segundo plato',10.50),(10,'Leche frita','Postre',8.85),(11,'Torrijas caseras','Postre',12.50),(12,'Buñuelos de manzana','Postre',10.25),(13,'Berenjenas a la parmesana al horno','entrante',11.30),(14,'Tortilla española','primer plato',7.40),(15,'Cerdo asado','segundo plato',10.90),(16,'Atún encebollado','segundo plato',12.60);
/*!40000 ALTER TABLE `plato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `almacenar`
--

DROP TABLE IF EXISTS `almacenar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `almacenar` (
  `idalmacenar` int(11) NOT NULL AUTO_INCREMENT,
  `idestanteria` int(11) NOT NULL,
  `idingrediente` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`idalmacenar`),
  KEY `fk_almacenar_1` (`idestanteria`),
  KEY `fk_almacenar_2` (`idingrediente`),
  CONSTRAINT `fk_almacenar_1` FOREIGN KEY (`idestanteria`) REFERENCES `estanteria` (`idestanteria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_almacenar_2` FOREIGN KEY (`idingrediente`) REFERENCES `ingrediente` (`idingrediente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=164 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `almacenar`
--

LOCK TABLES `almacenar` WRITE;
/*!40000 ALTER TABLE `almacenar` DISABLE KEYS */;
INSERT INTO `almacenar` VALUES (2,1,1,11),(3,4,2,14),(4,7,3,17),(5,8,4,18),(6,11,5,11),(7,18,6,18),(8,19,7,19),(9,20,8,20),(10,21,9,21),(11,2,10,22),(12,6,11,26),(13,9,12,29),(14,10,13,10),(15,12,14,12),(16,17,15,17),(17,3,16,14),(18,13,17,13),(19,14,18,14),(20,22,19,22),(21,23,20,23),(22,24,21,24),(23,5,22,5),(24,15,23,15),(25,16,24,16),(26,25,25,25),(27,26,26,26),(28,27,27,27),(29,1,28,1),(30,4,29,4),(31,7,30,7),(32,8,31,8),(33,11,32,11),(34,18,33,18),(35,19,34,19),(36,20,35,20),(37,21,36,21),(38,2,37,2),(39,6,38,6),(40,9,39,9),(41,10,40,10),(42,12,41,12),(43,17,42,17),(44,3,43,3),(45,13,44,13),(46,14,45,14),(47,22,46,22),(48,23,47,23),(49,24,48,24),(50,5,49,5),(51,15,50,15),(52,16,51,16),(53,25,52,25),(54,26,53,26),(55,27,54,27),(56,1,55,1),(57,4,56,4),(58,7,57,7),(59,8,58,8),(60,11,59,11),(61,18,60,18),(62,19,61,19),(63,20,62,20),(64,21,63,21),(65,2,64,2),(66,6,65,6),(67,9,66,9),(68,10,67,10),(69,12,68,12),(70,17,69,17),(71,3,70,3),(72,13,71,13),(73,14,72,14),(74,22,73,22),(75,23,74,23),(76,24,75,24),(77,5,76,5),(78,15,77,15),(79,16,78,16),(80,25,79,25),(81,26,80,26),(82,27,81,27),(83,1,82,1),(84,4,83,4),(85,7,84,7),(86,8,85,8),(87,11,86,11),(88,18,87,18),(89,19,88,19),(90,20,89,20),(91,21,90,21),(92,2,91,2),(93,6,92,6),(94,9,93,9),(95,10,94,10),(96,12,95,12),(97,17,96,17),(98,3,97,3),(99,13,98,13),(100,14,99,14),(101,22,100,22),(102,23,101,23),(103,24,102,24),(104,5,103,5),(105,15,104,15),(106,16,105,16),(107,25,106,25),(108,26,107,26),(109,27,108,27),(110,1,109,1),(111,4,110,4),(112,7,111,7),(113,8,112,8),(114,11,113,11),(115,18,114,18),(116,19,115,19),(117,20,116,20),(118,21,117,21),(119,2,118,2),(120,6,119,6),(121,9,120,9),(122,10,121,10),(123,12,122,12),(124,17,123,17),(125,3,124,3),(126,13,125,13),(127,14,126,14),(128,22,127,22),(129,23,128,23),(130,24,129,24),(131,5,130,5),(132,15,131,15),(133,16,132,16),(134,25,133,25),(135,26,134,26),(136,27,135,27),(137,1,136,1),(138,4,137,4),(139,7,138,7),(140,8,139,8),(141,11,140,11),(142,18,141,18),(143,19,142,19),(144,20,143,20),(145,21,144,21),(146,4,145,16),(147,4,146,13),(148,4,147,20),(149,4,148,8),(150,4,149,16),(163,20,150,10);
/*!40000 ALTER TABLE `almacenar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilizar`
--

DROP TABLE IF EXISTS `utilizar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilizar` (
  `idutilizar` int(11) NOT NULL AUTO_INCREMENT,
  `idplato` int(11) NOT NULL,
  `idingrediente` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`idutilizar`),
  KEY `fk_utilizar_1` (`idplato`),
  KEY `fk_utilizar_2` (`idingrediente`),
  CONSTRAINT `fk_utilizar_1` FOREIGN KEY (`idplato`) REFERENCES `plato` (`idplato`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_utilizar_2` FOREIGN KEY (`idingrediente`) REFERENCES `ingrediente` (`idingrediente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilizar`
--

LOCK TABLES `utilizar` WRITE;
/*!40000 ALTER TABLE `utilizar` DISABLE KEYS */;
INSERT INTO `utilizar` VALUES (1,1,127,1),(2,1,145,4),(3,1,92,1),(4,1,6,1),(5,1,80,1),(6,1,2,2),(7,1,137,1),(8,1,118,1),(9,2,98,1),(10,2,11,1),(11,2,145,2),(12,2,118,1),(13,2,139,1),(14,2,70,1),(15,2,138,1),(16,2,2,1),(17,2,63,1),(18,3,98,1),(19,3,35,1),(20,3,70,1),(21,3,146,1),(22,3,61,1),(23,3,53,2),(24,3,147,1),(25,4,50,6),(26,4,86,6),(27,4,35,1),(28,4,6,1),(29,4,2,1),(30,4,118,1),(31,5,13,4),(32,5,53,3),(33,5,148,1),(34,5,55,1),(35,5,49,8),(36,5,50,3),(37,5,2,1),(38,5,118,1),(39,6,58,8),(40,6,86,4),(41,6,6,3),(42,6,2,2),(43,6,118,1),(44,7,81,4),(45,7,146,1),(46,7,53,2),(47,7,147,4),(48,7,1,2),(49,7,70,1),(50,7,118,1),(51,7,66,1),(52,8,77,4),(53,8,86,4),(54,8,35,1),(55,8,139,1),(56,8,73,1),(57,8,132,1),(58,8,2,1),(59,8,118,1),(60,9,98,4),(61,9,35,1),(62,9,131,4),(63,9,66,1),(64,9,139,1),(65,9,2,1),(66,9,118,1),(67,10,61,1),(68,10,146,4),(69,10,17,4),(70,10,53,1),(71,10,66,1),(72,10,149,1),(73,11,80,1),(74,11,61,1),(75,11,17,8),(76,11,66,1),(77,11,149,1),(78,11,53,4),(79,11,2,1),(80,12,53,2),(81,12,61,1),(82,12,17,2),(83,12,150,1),(84,12,66,1),(85,12,118,1),(86,12,71,3),(87,12,146,4),(88,13,21,2),(89,13,111,1),(90,13,145,2),(91,13,135,1),(92,13,2,1),(93,13,112,1),(94,13,118,1),(95,14,86,3),(96,14,35,1),(97,14,53,5),(98,14,2,1),(99,14,118,1),(100,15,30,4),(101,15,148,1),(102,15,35,1),(103,15,11,1),(104,15,86,4),(105,15,118,1),(106,16,15,4),(107,16,35,2),(108,16,70,1),(109,16,139,1),(110,16,17,1),(111,16,2,1),(112,16,118,1);
/*!40000 ALTER TABLE `utilizar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingrediente`
--

DROP TABLE IF EXISTS `ingrediente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ingrediente` (
  `idingrediente` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idingrediente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingrediente`
--

LOCK TABLES `ingrediente` WRITE;
/*!40000 ALTER TABLE `ingrediente` DISABLE KEYS */;
INSERT INTO `ingrediente` VALUES (1,'Aceite Girasol'),(2,'Aceite Oliva'),(3,'Acelgas'),(4,'Agua Manantial'),(5,'Aguacate'),(6,'Ajo'),(7,'Albaricoque'),(8,'Alcachofa'),(9,'Almendra'),(10,'Anchoa Enlatada'),(11,'Apio'),(12,'Nata'),(13,'Arroz Blanco'),(14,'Atún Conserva'),(15,'Atún Fresco'),(16,'Avellana'),(17,'Azúcar Blanco'),(18,'Bacalao Fresco'),(19,'Bacon'),(20,'Batido Chocolate'),(21,'Berenjena'),(22,'Butifarra'),(23,'Cacahuete'),(24,'Cacao Polvo'),(25,'Café Instantáneo'),(26,'Café Torrefacto'),(27,'Calabacín'),(28,'Calamar'),(29,'Carne Cerdo, Grasa'),(30,'Carne Cerdo, Magra'),(31,'Carne Cordero, Chuleta'),(32,'Carne Ternera, Magra'),(33,'Carne Vaca, Solomillo'),(34,'Castaña'),(35,'Cebolla'),(36,'Cereza'),(37,'Champán'),(38,'Champiñón'),(39,'Coliflor'),(40,'Conguito'),(41,'Croissant'),(42,'Cuajada'),(43,'Emperador'),(44,'Endibia'),(45,'Espinaca Cocida'),(46,'Filete Vaca'),(47,'Flan De Huevo'),(48,'Fresa'),(49,'Gamba Cocida'),(50,'Guisante Fresco'),(51,'Hamburguesa Vacuno'),(52,'Helado'),(53,'Huevo'),(54,'Huevo Duro'),(55,'Jamón Cocido'),(56,'Jamón Serrano'),(57,'Judía Blanca, Seca'),(58,'Judía Verde Fresca'),(59,'Ketchup'),(60,'Kiwi'),(61,'Leche Vaca, Entera'),(62,'Leche Vaca, Semidesnatada'),(63,'Lechuga'),(64,'Lenguado'),(65,'Lenteja'),(66,'Limón'),(67,'Macarrón'),(68,'Espagueti'),(69,'Mandarina'),(70,'Mantequilla'),(71,'Manzana'),(72,'Margarina Vegetal'),(73,'Mayonesa'),(74,'Mejillón'),(75,'Melocotón'),(76,'Melón'),(77,'Merluza'),(78,'Nuez'),(79,'Pan de Molde'),(80,'Pan Blanco'),(81,'Filete Ternera'),(82,'Pan Integral'),(83,'Pan Tostado, Blanco'),(84,'Pasta'),(85,'Pasta Al Huevo'),(86,'Patata'),(87,'Fideo de arroz'),(88,'Pepino'),(89,'Pera'),(90,'Brócoli'),(91,'Pescadilla'),(92,'Pimiento verde'),(93,'Pimiento rojo'),(94,'Pistacho'),(95,'Miel'),(96,'Piña'),(97,'Plátano'),(98,'Pollo'),(99,'Puerro'),(100,'Pulpo'),(101,'Queso Azul'),(102,'Queso Babibel'),(103,'Queso Brie'),(104,'Queso Burgos'),(105,'Queso Cabra'),(106,'Queso Camembert'),(107,'Queso Chedar'),(108,'Queso Emmental'),(109,'Queso Gouda'),(110,'Queso Gruyere'),(111,'Queso Mozzarella'),(112,'Queso Parmesano'),(113,'Carne de ternera picada'),(114,'Queso Porciones'),(115,'Queso Roquefort'),(116,'Rábano'),(117,'Rodaballo'),(118,'Sal'),(119,'Salami'),(120,'Salchicha Cerdo'),(121,'Salchicha Enlatada'),(122,'Salchicha Frankfurt'),(123,'Salchichón'),(124,'Salmón'),(125,'Salsa Boloñesa'),(126,'Salsa Queso'),(127,'Sandia'),(128,'Sardina'),(129,'Sepia'),(130,'Sésamo'),(131,'Salsa Soja'),(132,'Perejil'),(133,'Te Infusión'),(134,'Tocino'),(135,'Tomate Frito'),(136,'Trucha'),(137,'Vinagre de Vino'),(138,'Vinagre de Jerez'),(139,'Vino Blanco'),(140,'Vino Rosado'),(141,'Vino Tinto'),(142,'Yogur Desnatado'),(143,'Yogur Fruta'),(144,'Yogur Natural'),(145,'Tomate Maduro'),(146,'Harina'),(147,'Pan Rallado'),(148,'Zanahoria'),(149,'Canela'),(150,'Levadura');
/*!40000 ALTER TABLE `ingrediente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preparar`
--

DROP TABLE IF EXISTS `preparar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preparar` (
  `idpreparar` int(11) NOT NULL AUTO_INCREMENT,
  `dnicocinero` varchar(9) NOT NULL,
  `idplato` int(11) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`idpreparar`),
  KEY `fk_preparar_1` (`dnicocinero`),
  KEY `fk_preparar_2` (`idplato`),
  CONSTRAINT `fk_preparar_1` FOREIGN KEY (`dnicocinero`) REFERENCES `cocinero` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_preparar_2` FOREIGN KEY (`idplato`) REFERENCES `plato` (`idplato`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=185 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preparar`
--

LOCK TABLES `preparar` WRITE;
/*!40000 ALTER TABLE `preparar` DISABLE KEYS */;
INSERT INTO `preparar` VALUES (1,'92033221D',1,'2013-12-26'),(2,'92033221D',1,'2014-05-28'),(3,'92033221D',2,'2014-11-09'),(4,'92033221D',3,'2013-10-23'),(5,'92033221D',4,'2013-09-05'),(6,'92033221D',2,'2012-11-02'),(7,'92033221D',2,'2015-03-19'),(8,'92033221D',3,'2014-11-04'),(9,'92033221D',4,'2012-11-20'),(10,'92033221D',1,'2012-10-13'),(11,'21507822Q',4,'2015-02-26'),(12,'21507822Q',5,'2015-02-05'),(13,'21507822Q',6,'2014-11-26'),(14,'21507822Q',7,'2014-12-18'),(15,'21507822Q',4,'2015-03-27'),(16,'21507822Q',5,'2014-08-10'),(17,'21507822Q',6,'2015-03-03'),(18,'21507822Q',7,'2015-03-22'),(19,'97495935Q',7,'2012-08-08'),(20,'97495935Q',8,'2013-03-22'),(21,'97495935Q',9,'2006-04-28'),(22,'97495935Q',7,'2004-08-29'),(23,'97495935Q',8,'2012-02-01'),(24,'97495935Q',9,'2005-06-11'),(25,'97495935Q',7,'2014-10-18'),(26,'97495935Q',8,'2009-08-07'),(27,'97495935Q',9,'2012-03-02'),(28,'97495935Q',7,'2006-10-30'),(29,'97495935Q',8,'2007-07-22'),(30,'97495935Q',9,'2005-08-02'),(31,'97495935Q',7,'2009-07-18'),(32,'97495935Q',8,'2012-04-07'),(33,'97495935Q',9,'2009-05-24'),(34,'19174291L',1,'2014-02-27'),(35,'19174291L',1,'2013-03-28'),(36,'19174291L',2,'2014-07-30'),(37,'19174291L',3,'2014-03-24'),(38,'19174291L',4,'2013-09-08'),(39,'19174291L',2,'2013-08-08'),(40,'19174291L',2,'2013-04-04'),(41,'19174291L',3,'2014-01-20'),(42,'19174291L',4,'2015-01-24'),(43,'19174291L',1,'2013-08-20'),(44,'19174291L',4,'2014-10-14'),(45,'19174291L',10,'2015-05-31'),(46,'19174291L',10,'2015-02-24'),(47,'19174291L',10,'2013-05-12'),(48,'19174291L',10,'2014-07-15'),(49,'19174291L',10,'2014-06-28'),(50,'19174291L',11,'2014-05-21'),(51,'19174291L',12,'2013-04-24'),(52,'19174291L',10,'2013-07-03'),(53,'19174291L',12,'2013-03-13'),(54,'53839925F',8,'2013-01-12'),(55,'53839925F',9,'2011-12-27'),(56,'53839925F',7,'2012-06-12'),(57,'53839925F',8,'2014-11-17'),(58,'53839925F',9,'2014-02-13'),(59,'53839925F',7,'2012-03-05'),(60,'53839925F',8,'2011-01-11'),(61,'53839925F',3,'2011-10-26'),(62,'53839925F',4,'2013-05-30'),(63,'53839925F',1,'2011-02-19'),(64,'53839925F',4,'2015-01-19'),(65,'53839925F',10,'2013-03-08'),(66,'53839925F',10,'2011-01-30'),(67,'53839925F',10,'2014-03-08'),(68,'53839925F',10,'2013-07-27'),(69,'53839925F',1,'2013-11-11'),(70,'53839925F',1,'2012-09-25'),(71,'53839925F',2,'2014-10-27'),(72,'53839925F',3,'2014-05-02'),(73,'53839925F',4,'2012-08-14'),(74,'53839925F',2,'2013-06-14'),(75,'53839925F',2,'2013-10-12'),(76,'53839925F',3,'2013-03-19'),(77,'53839925F',4,'2012-04-03'),(78,'53839925F',1,'2012-08-11'),(79,'53839925F',4,'2015-05-30'),(80,'53839925F',10,'2014-10-23'),(81,'53839925F',10,'2014-02-20'),(82,'53839925F',7,'2012-05-11'),(83,'53839925F',8,'2013-10-12'),(84,'53839925F',9,'2012-03-31'),(85,'53839925F',7,'2012-06-13'),(86,'53839925F',8,'2013-10-08'),(87,'53839925F',3,'2014-06-01'),(88,'53839925F',4,'2015-03-22'),(89,'53839925F',1,'2012-12-15'),(90,'53839925F',9,'2012-09-29'),(91,'53839925F',9,'2013-10-17'),(92,'53839925F',9,'2012-06-26'),(93,'53839925F',9,'2011-05-12'),(94,'49281619W',4,'2012-09-08'),(95,'49281619W',2,'2010-01-15'),(96,'49281619W',2,'2014-03-29'),(97,'49281619W',3,'2011-03-18'),(98,'49281619W',4,'2011-02-08'),(99,'49281619W',1,'2011-04-03'),(100,'49281619W',4,'2015-05-20'),(101,'49281619W',10,'2013-08-25'),(102,'49281619W',10,'2011-05-08'),(103,'49281619W',10,'2014-02-26'),(104,'49281619W',10,'2014-01-08'),(105,'49281619W',8,'2015-03-31'),(106,'49281619W',8,'2012-05-01'),(107,'49281619W',8,'2010-01-31'),(108,'49281619W',8,'2011-07-15'),(109,'49281619W',8,'2012-05-03'),(110,'49281619W',8,'2010-04-19'),(111,'49281619W',8,'2010-10-10'),(112,'49281619W',2,'2011-03-19'),(113,'49281619W',4,'2014-02-26'),(114,'49281619W',7,'2014-07-10'),(115,'49281619W',8,'2013-08-22'),(116,'49281619W',1,'2012-09-23'),(117,'49281619W',5,'2013-09-27'),(118,'49281619W',9,'2012-09-01'),(119,'49281619W',11,'2010-04-13'),(120,'49281619W',3,'2013-06-30'),(121,'49281619W',6,'2010-10-23'),(122,'49281619W',7,'2015-02-25'),(123,'49281619W',8,'2014-10-29'),(124,'49281619W',4,'2012-06-01'),(125,'49281619W',2,'2012-09-08'),(126,'78084391N',1,'2007-02-12'),(127,'78084391N',2,'2009-05-16'),(128,'78084391N',3,'2013-11-26'),(129,'78084391N',4,'2014-07-03'),(130,'78084391N',5,'2012-04-27'),(131,'78084391N',6,'2012-02-09'),(132,'78084391N',7,'2008-12-14'),(133,'78084391N',8,'2013-09-17'),(134,'78084391N',9,'2008-01-09'),(135,'78084391N',10,'2006-12-23'),(136,'78084391N',11,'2007-07-17'),(137,'78084391N',12,'2014-02-23'),(138,'78084391N',4,'2014-01-28'),(139,'78084391N',5,'2015-04-04'),(140,'78084391N',6,'2007-04-12'),(141,'78084391N',7,'2014-03-04'),(142,'78084391N',1,'2007-11-27'),(143,'78084391N',2,'2008-08-06'),(144,'78084391N',3,'2010-12-16'),(145,'78084391N',4,'2009-09-25'),(146,'78084391N',5,'2012-02-11'),(147,'78084391N',6,'2013-05-16'),(148,'78084391N',7,'2010-11-08'),(149,'78084391N',8,'2014-08-05'),(150,'78084391N',9,'2008-03-29'),(151,'78084391N',10,'2014-03-01'),(152,'78084391N',11,'2011-04-19'),(153,'78084391N',12,'2009-03-18'),(154,'78084391N',4,'2012-07-15'),(155,'78084391N',5,'2010-09-28'),(156,'78084391N',6,'2015-04-28'),(157,'78084391N',7,'2015-05-22'),(158,'78084391N',1,'2007-05-05'),(159,'78084391N',2,'2013-12-12'),(160,'78084391N',3,'2011-07-06'),(161,'78084391N',4,'2013-06-08'),(162,'78084391N',5,'2014-08-03'),(163,'78084391N',6,'2014-01-28'),(164,'78084391N',7,'2010-07-05'),(165,'78084391N',8,'2007-01-25'),(166,'78084391N',9,'2010-10-20'),(167,'78084391N',10,'2014-10-18'),(168,'78084391N',11,'2007-11-27'),(169,'78084391N',12,'2014-02-01'),(170,'78084391N',4,'2012-04-01'),(171,'78084391N',5,'2014-04-08'),(172,'78084391N',6,'2009-08-21'),(173,'78084391N',7,'2014-01-13'),(174,'78084391N',8,'2007-01-25'),(175,'78084391N',8,'2010-01-15'),(176,'78084391N',4,'2011-04-04'),(177,'78084391N',6,'2007-02-02'),(178,'78084391N',3,'2011-04-12'),(179,'78084391N',2,'2013-05-24'),(180,'78084391N',1,'2010-07-11'),(181,'78084391N',4,'2008-06-16'),(182,'14508269F',15,'2011-04-12'),(183,'14508269F',16,'2013-05-24'),(184,'14508269F',16,'2010-07-11');
/*!40000 ALTER TABLE `preparar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estanteria`
--

DROP TABLE IF EXISTS `estanteria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estanteria` (
  `idestanteria` int(11) NOT NULL,
  `tamanyo` int(11) NOT NULL,
  `idalmacen` int(11) NOT NULL,
  PRIMARY KEY (`idestanteria`),
  KEY `fk_estanteria_1` (`idalmacen`),
  CONSTRAINT `fk_estanteria_1` FOREIGN KEY (`idalmacen`) REFERENCES `almacen` (`nalmacen`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estanteria`
--

LOCK TABLES `estanteria` WRITE;
/*!40000 ALTER TABLE `estanteria` DISABLE KEYS */;
INSERT INTO `estanteria` VALUES (1,10,1),(2,5,2),(3,8,3),(4,15,1),(5,6,4),(6,9,2),(7,10,1),(8,12,1),(9,6,2),(10,8,2),(11,14,1),(12,6,2),(13,9,3),(14,12,3),(15,5,4),(16,5,4),(17,5,2),(18,10,1),(19,10,1),(20,10,1),(21,10,1),(22,6,3),(23,6,3),(24,6,3),(25,8,4),(26,8,4),(27,8,4);
/*!40000 ALTER TABLE `estanteria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `nif` varchar(9) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `poblacion` varchar(45) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `sexo` varchar(7) NOT NULL,
  `nacimiento` date NOT NULL,
  PRIMARY KEY (`nif`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES ('00955717K','Diego','Pérez Ayuso','c/ Isaac Newton, 28','Gandía','760879984','hombre','1980-01-14'),('01447676X','María Dolores','Plana Aragonéz','Av. Paralelo, 89','Barcelona','691239766','mujer','1991-09-22'),('14083236Z','José Antonio','Salazar Parras','Avda. 300, 56','Sant Boi de Ll.','659310563','hombre','1986-05-21'),('18260251E','Miguel Ángel','Hernández Sánchez','Avda. Constitución, 203','Ripollet','622799874','hombre','1964-07-22'),('28977059A','Emilia','Miguel García','c/ Manuel Girona, 8','Hospitalet','848066176','mujer','1995-08-13'),('29102839L','Ángeles','Lozano Mora','Avda. 314, 24','Castelldefels','719575310','mujer','1970-03-24'),('38421314K','Mª Carmen','Delgado Ferrero','c/ Mesa, 23','Sant Boi de Ll.','880371925','mujer','1991-05-12'),('40950485C','Isabel','Jiménez Cañellas','c/ Iglesia, 34','Girona','672586699','mujer','1983-01-02'),('61459669N','Beatriz','Porta Pérez','c/ Marina, 32','Cornellà de Ll.','664807337','mujer','1961-08-24'),('63107170T','Juan Antonio','Aguado Rodríguez','c/ Iglesia, 99','Barcelona','744233466','hombre','1984-07-30'),('66036449E','Pedro','Jiménez Fernandez','Paseo Marítimo, 345','Viladecans','873596743','hombre','1975-11-08'),('71662578Y','Araceli','Bueno Fernández','c/ Principal, 8','Palafrugell','877145296','mujer','1962-08-01'),('83208085L','Luis','Suarez Martínez','c/ Átomo, 58','Reus','663654061','hombre','1995-06-11'),('93085798Z','Victor','Muñoz Nieto','c/ Giralda, 24','Barcelona','583552734','hombre','1994-12-08'),('95657045E','Alfonso','López Fuentes','c/ Matadero, 988','Gavá','670430470','hombre','1985-07-23');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedir`
--

DROP TABLE IF EXISTS `pedir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedir` (
  `idpedido` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(9) NOT NULL,
  `plato` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`idpedido`),
  KEY `fk_pedir_1` (`cliente`),
  KEY `fk_pedir_2` (`plato`),
  CONSTRAINT `fk_pedir_1` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`nif`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedir_2` FOREIGN KEY (`plato`) REFERENCES `plato` (`idplato`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedir`
--

LOCK TABLES `pedir` WRITE;
/*!40000 ALTER TABLE `pedir` DISABLE KEYS */;
INSERT INTO `pedir` VALUES (1,'93085798Z',1,4),(2,'83208085L',2,5),(3,'00955717K',3,6),(4,'18260251E',4,4),(5,'29102839L',5,2),(6,'71662578Y',6,3),(7,'01447676X',7,1),(8,'40950485C',8,1),(9,'95657045E',9,2),(10,'66036449E',1,2),(11,'38421314K',2,3),(12,'28977059A',3,4),(13,'63107170T',4,5),(14,'61459669N',5,6),(15,'93085798Z',4,4),(16,'83208085L',5,5),(17,'00955717K',6,6),(18,'18260251E',7,4),(19,'29102839L',8,2),(20,'71662578Y',9,3),(21,'93085798Z',10,1),(22,'83208085L',11,1),(23,'00955717K',12,2),(24,'18260251E',10,2),(25,'29102839L',11,3),(26,'71662578Y',12,4),(27,'00955717K',1,4),(28,'18260251E',1,5),(29,'01447676X',1,6),(30,'40950485C',3,4),(31,'95657045E',1,2),(32,'66036449E',1,3),(33,'29102839L',1,1),(34,'71662578Y',5,4),(35,'01447676X',6,2),(36,'00955717K',7,3),(37,'18260251E',8,1),(38,'29102839L',9,6),(39,'71662578Y',10,4),(40,'00955717K',9,2),(41,'18260251E',7,3),(42,'01447676X',4,1),(43,'40950485C',2,1),(44,'95657045E',8,2),(45,'66036449E',8,3),(46,'29102839L',8,1),(47,'93085798Z',1,4),(48,'83208085L',2,5),(49,'00955717K',3,6),(50,'18260251E',4,4),(51,'29102839L',5,2),(52,'71662578Y',6,3),(53,'01447676X',7,1),(54,'40950485C',8,1),(55,'95657045E',9,2),(56,'66036449E',1,2),(57,'38421314K',2,3),(58,'28977059A',3,4),(59,'63107170T',4,5),(60,'61459669N',5,6),(61,'93085798Z',4,4),(62,'83208085L',5,5),(63,'00955717K',6,6),(64,'18260251E',7,4),(65,'29102839L',8,2),(66,'71662578Y',9,3),(67,'93085798Z',10,1),(68,'83208085L',11,1),(69,'00955717K',12,2),(70,'18260251E',10,2),(71,'29102839L',11,3),(72,'71662578Y',12,4),(73,'00955717K',1,4),(74,'18260251E',1,5),(75,'01447676X',1,6),(76,'40950485C',3,4),(77,'95657045E',1,2),(78,'66036449E',1,3),(79,'29102839L',1,1),(80,'71662578Y',5,4),(81,'01447676X',6,2),(82,'00955717K',7,3),(83,'18260251E',8,1),(84,'29102839L',9,6),(85,'71662578Y',10,4),(86,'00955717K',9,2),(87,'18260251E',7,3),(88,'01447676X',4,1),(89,'40950485C',2,1),(90,'95657045E',8,2),(91,'66036449E',8,3),(92,'29102839L',8,1),(93,'93085798Z',11,2),(94,'83208085L',12,3),(95,'00955717K',11,1),(96,'18260251E',10,6),(97,'29102839L',12,4),(98,'71662578Y',4,2),(99,'93085798Z',6,3),(100,'83208085L',8,1),(101,'93085798Z',13,1),(102,'83208085L',13,2),(103,'00955717K',14,2),(104,'38421314K',15,3),(105,'28977059A',16,2),(106,'61459669N',15,5);
/*!40000 ALTER TABLE `pedir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'Catering'
--

--
-- Dumping routines for database 'Catering'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-18 19:59:55
