-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: distribuidoraglobal
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB

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
-- Current Database: `distribuidoraglobal`
--

/*!40000 DROP DATABASE IF EXISTS `distribuidoraglobal`*/;

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `distribuidoraglobal` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `distribuidoraglobal`;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nomCliente` varchar(50) NOT NULL,
  `nitCliente` int(20) NOT NULL,
  `telCliente` varchar(20) NOT NULL,
  `dirCliente` varchar(40) NOT NULL,
  `correoCliente` varchar(30) NOT NULL,
  `tipCliente` varchar(15) NOT NULL,
  `tipCompra` varchar(15) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `garantia`
--

DROP TABLE IF EXISTS `garantia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `garantia` (
  `idGarantia` int(11) NOT NULL AUTO_INCREMENT,
  `fechaGarantia` date NOT NULL,
  `identClienteGarantia` int(20) NOT NULL,
  `merMaterGarantia` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `garObservacion` varchar(200) NOT NULL,
  PRIMARY KEY (`idGarantia`)
) ENGINE=InnoDB AUTO_INCREMENT=5059 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `garantia`
--

LOCK TABLES `garantia` WRITE;
/*!40000 ALTER TABLE `garantia` DISABLE KEYS */;
/*!40000 ALTER TABLE `garantia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mercanciamaterialconstruccion`
--

DROP TABLE IF EXISTS `mercanciamaterialconstruccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mercanciamaterialconstruccion` (
  `idMercancia` int(11) NOT NULL AUTO_INCREMENT,
  `merMater` varchar(50) DEFAULT NULL,
  `merCant` double NOT NULL,
  `merUnidad` varchar(20) NOT NULL,
  PRIMARY KEY (`idMercancia`)
) ENGINE=InnoDB AUTO_INCREMENT=213 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mercanciamaterialconstruccion`
--

LOCK TABLES `mercanciamaterialconstruccion` WRITE;
/*!40000 ALTER TABLE `mercanciamaterialconstruccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `mercanciamaterialconstruccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal` (
  `idUsuario` int(11) NOT NULL,
  `userArea` int(15) NOT NULL,
  `userCodIdent` int(11) NOT NULL,
  `userNom` varchar(50) NOT NULL,
  `userApell` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `userTel` char(20) NOT NULL,
  `userCorreo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `VenCodIdent` (`userCodIdent`),
  UNIQUE KEY `VenCodIdent_2` (`userCodIdent`),
  UNIQUE KEY `idpersonal` (`idUsuario`),
  KEY `Personal_Usuario` (`userArea`),
  CONSTRAINT `Personal_Usuario` FOREIGN KEY (`userArea`) REFERENCES `usuarios` (`idUsuario`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal`
--

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proveedor` (
  `proIdentificacion` int(15) NOT NULL AUTO_INCREMENT,
  `proNit` int(11) NOT NULL,
  `proNombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `proTel` varchar(20) NOT NULL,
  `proDirec` varchar(45) NOT NULL,
  `proEmail` varchar(20) NOT NULL,
  PRIMARY KEY (`proIdentificacion`),
  UNIQUE KEY `idProveedor` (`proIdentificacion`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedor`
--

LOCK TABLES `proveedor` WRITE;
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idUsuario` int(15) NOT NULL AUTO_INCREMENT,
  `usuLogin` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `usuPassword` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `usuEstado` enum('Activo','Inactivo') COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `login` (`usuLogin`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES 
(1,'Administrador','2a2e9a58102784ca18e2605a4e727b5f','Activo'),
(2, 'Vendedor', '3236b3179c1e0fd4171722e9c8170009', 'Activo'),
(3, 'JefeBodega', '6a3aac2614cce086727fee1f7e485ee0', 'Activo'),
(4, 'AuxiliarLogisti', '0c8f882d4a1c27955645852b88977e30', 'Activo'),
(5, 'Despachos', 'c31535e3b5b68aa51cd6d6b3c7d4e4e2', 'Activo'),
(6, 'Tecnologia', '417274038852d30516a897d231cc2a5b', 'Activo'),
(7, 'Facturacion', '813b69bef824e403ab412a9a1629c0ef', 'Activo'),
(8, 'Garantias', '09faa7abc7b62cd30a2970b9686d8a62', 'Activo');
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

-- Dump completed on 2018-02-16  7:39:32
