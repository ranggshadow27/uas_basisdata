-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: basisdata_uas_rangga
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `data_barang`
--

DROP TABLE IF EXISTS `data_barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_barang` (
  `id_barang` int(5) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(30) NOT NULL,
  `id_detail_barang` int(5) DEFAULT NULL,
  `id_distributor` int(5) DEFAULT NULL,
  `stok_barang` int(5) DEFAULT NULL,
  `harga_barang` int(15) DEFAULT NULL,
  PRIMARY KEY (`id_barang`),
  KEY `id_detail_barang` (`id_detail_barang`),
  KEY `id_distributor` (`id_distributor`),
  CONSTRAINT `data_barang_ibfk_1` FOREIGN KEY (`id_detail_barang`) REFERENCES `detail_barang` (`id_detail_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `data_barang_ibfk_2` FOREIGN KEY (`id_distributor`) REFERENCES `data_distributor` (`id_distributor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_barang`
--

LOCK TABLES `data_barang` WRITE;
/*!40000 ALTER TABLE `data_barang` DISABLE KEYS */;
INSERT INTO `data_barang` VALUES (1,'Gigabyte B550 Vision D-P',6,29,15,5545000),(2,'Msi GTX 1660 Super Ventus XS',4,18,7,5554000),(3,'Corsair Dominator RGB 3200Mhz',1,10,19,3489000),(4,'Msi MAG B560 Torpedo',5,18,34,3464000),(5,'Gigabyte 1660 Ti EAGLE OC',4,29,5,6248000),(8,'Ryzen 5 3600 6C 12T Upto 4.2Gh',1,10,20,3130000),(9,'Ryzen 7 5800X 8C 16T Upto 4.7G',1,10,5,6372000),(10,'Intel i5 11600 6C 12T Upto 4.8',2,12,12,4342000),(11,'Processor baru',1,10,15,50000);
/*!40000 ALTER TABLE `data_barang` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = cp850 */ ;
/*!50003 SET character_set_results = cp850 */ ;
/*!50003 SET collation_connection  = cp850_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER data_barang_update
BEFORE UPDATE ON data_barang
FOR EACH ROW
INSERT INTO log_databarang SET
nama_lama = old.nama_barang,
nama_baru = new.nama_barang,
harga_lama = old.harga_barang,
harga_baru = new.harga_barang,
stok_lama = old.stok_barang,
stok_baru = new.stok_barang,
waktu_perubahan = NOW() */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `data_distributor`
--

DROP TABLE IF EXISTS `data_distributor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_distributor` (
  `id_distributor` int(5) NOT NULL AUTO_INCREMENT,
  `nama_distributor` varchar(25) NOT NULL,
  PRIMARY KEY (`id_distributor`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_distributor`
--

LOCK TABLES `data_distributor` WRITE;
/*!40000 ALTER TABLE `data_distributor` DISABLE KEYS */;
INSERT INTO `data_distributor` VALUES (10,'Advance Micro Device '),(12,'Intel Corporation'),(18,'Microstar International'),(24,'Asustek Computer Inc'),(29,'Gigabyte Global'),(32,'Corsair Technology');
/*!40000 ALTER TABLE `data_distributor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_pembeli`
--

DROP TABLE IF EXISTS `data_pembeli`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_pembeli` (
  `id_pembeli` int(5) NOT NULL AUTO_INCREMENT,
  `nama_pembeli` varchar(25) NOT NULL,
  `tgl_transaksi_pembelian` date DEFAULT NULL,
  `id_barang` int(5) DEFAULT NULL,
  `jumlah_transaksi` int(15) DEFAULT NULL,
  `jumlah_uang_kembali` int(15) DEFAULT NULL,
  PRIMARY KEY (`id_pembeli`),
  KEY `id_barang` (`id_barang`),
  CONSTRAINT `data_pembeli_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `data_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_pembeli`
--

LOCK TABLES `data_pembeli` WRITE;
/*!40000 ALTER TABLE `data_pembeli` DISABLE KEYS */;
INSERT INTO `data_pembeli` VALUES (1,'Jean Gunnhildr','2021-03-14',3,2500000,111000),(2,'Eula Lawrence','2021-04-24',9,7500000,128000),(3,'Diluc Ragnvindr','2021-01-11',4,3500000,36000),(5,'Zhongli','2021-09-28',5,6300000,52000),(6,'Ayaka Kamisato	','2021-07-21',5,3800000,5000);
/*!40000 ALTER TABLE `data_pembeli` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_pembelian_barang`
--

DROP TABLE IF EXISTS `data_pembelian_barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_pembelian_barang` (
  `id_pembelian_barang` int(5) NOT NULL AUTO_INCREMENT,
  `id_distributor` int(5) NOT NULL,
  `tgl_transaksi_pembelian` date DEFAULT NULL,
  `total_transaksi` int(15) DEFAULT NULL,
  PRIMARY KEY (`id_pembelian_barang`),
  KEY `id_distributor` (`id_distributor`),
  CONSTRAINT `data_pembelian_barang_ibfk_1` FOREIGN KEY (`id_distributor`) REFERENCES `data_distributor` (`id_distributor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_pembelian_barang`
--

LOCK TABLES `data_pembelian_barang` WRITE;
/*!40000 ALTER TABLE `data_pembelian_barang` DISABLE KEYS */;
INSERT INTO `data_pembelian_barang` VALUES (1,12,'2020-05-20',4500000),(2,29,'2021-08-12',5000000),(3,29,'2020-10-01',7000000),(4,10,'2020-10-01',6000000),(5,10,'2020-10-01',5000000);
/*!40000 ALTER TABLE `data_pembelian_barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_barang`
--

DROP TABLE IF EXISTS `detail_barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_barang` (
  `id_detail_barang` int(5) NOT NULL AUTO_INCREMENT,
  `jenis_barang` varchar(20) NOT NULL,
  `keterangan_barang` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_detail_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_barang`
--

LOCK TABLES `detail_barang` WRITE;
/*!40000 ALTER TABLE `detail_barang` DISABLE KEYS */;
INSERT INTO `detail_barang` VALUES (1,'PROCESSOR','AMD AM4'),(2,'PROCESSOR','INTEL LGA1200'),(3,'MEMORY','DDR4'),(4,'GRAPHIC CARD','GDDR6'),(5,'MAINBOARD','INTEL B560'),(6,'MAINBOARD','AMD B550');
/*!40000 ALTER TABLE `detail_barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_databarang`
--

DROP TABLE IF EXISTS `log_databarang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_databarang` (
  `id_logbarang` int(5) NOT NULL AUTO_INCREMENT,
  `nama_lama` varchar(50) DEFAULT NULL,
  `nama_baru` varchar(50) DEFAULT NULL,
  `harga_lama` int(12) DEFAULT NULL,
  `harga_baru` int(12) DEFAULT NULL,
  `stok_lama` int(10) DEFAULT NULL,
  `stok_baru` int(10) DEFAULT NULL,
  `waktu_perubahan` date NOT NULL,
  PRIMARY KEY (`id_logbarang`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_databarang`
--

LOCK TABLES `log_databarang` WRITE;
/*!40000 ALTER TABLE `log_databarang` DISABLE KEYS */;
INSERT INTO `log_databarang` VALUES (1,'Barang baru','Processor baru',10000,50000,5,15,'2021-07-12');
/*!40000 ALTER TABLE `log_databarang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_login`
--

DROP TABLE IF EXISTS `user_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_login` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_login`
--

LOCK TABLES `user_login` WRITE;
/*!40000 ALTER TABLE `user_login` DISABLE KEYS */;
INSERT INTO `user_login` VALUES (3,'shadowadmin','3bf1114a986ba87ed28fc1b5884fc2f8'),(6,'shadow','f04af61b3f332afa0ceec786a42cd365'),(7,'tes','0cc175b9c0f1b6a831c399e269772661'),(8,'tes','28b662d883b6d76fd96e4ddc5e9ba780'),(9,'rangga','863c2a4b6bff5e22294081e376fc1f51'),(10,'adminrangga','863c2a4b6bff5e22294081e376fc1f51');
/*!40000 ALTER TABLE `user_login` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-12 21:17:01
