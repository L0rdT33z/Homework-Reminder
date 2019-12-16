-- MySQL dump 10.16  Distrib 10.1.36-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: teekungt_hwls
-- ------------------------------------------------------
-- Server version	10.1.41-MariaDB

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
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cookie` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data`
--

LOCK TABLES `data` WRITE;
/*!40000 ALTER TABLE `data` DISABLE KEYS */;
/*!40000 ALTER TABLE `data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hwdata`
--

DROP TABLE IF EXISTS `hwdata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hwdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `desc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deadline` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=372 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hwdata`
--

LOCK TABLES `hwdata` WRITE;
/*!40000 ALTER TABLE `hwdata` DISABLE KEYS */;
INSERT INTO `hwdata` VALUES (345,'Other','ติดรูปเล่มชมพู','17 พ.ค. 2562','20190517'),(348,'เคมี','Mine Map เซลล์ไฟฟ้าเคมี','17 มิ.ย. 2562','20190617'),(349,'เคมี','ชิ้นงานกลุ่มเคมีอินทรีย์','31 ก.ค. 2562','20190731'),(352,'ฟิสิกส์','โปสเตอร์ฟิสิกส์','28 มิ.ย. 2562','20190628'),(353,'ฟิสิกส์','ป้ายไฟ','30 ส.ค. 2562','20190830'),(356,'ประวัติศาสตร์','รีวิววัด (Group Boon)','28 มิ.ย. 2562','20190628'),(361,'Grammar','ทำชีท','3 มิ.ย 2562','20190603'),(364,'Lino','Page 11','31 พ.ค. 2562','20190531'),(365,'ผลิต','วิจารณ์แปลกๆ29 พ.ค. 2562','4 มิ.ย. 2562','20190604'),(366,'คณิต','สอบลำดับเลขคณิต 6 ข้อ','7 มิ.ย. 2562','20190607'),(367,'Lino','Present','31 มิ.ย. 2562','20190531'),(368,'Computer','Work','31 มิ.ย. 2562','20190531'),(369,'Other','สมัคร รด','7 มิ.ย. 2562','20190607'),(370,'ไทย','เขียนคำแปล','4 มิ.ย. 2562','20190604'),(371,'ไทย','เขียนคำศัพท์','4 มิ.ย. 2562','20190604');
/*!40000 ALTER TABLE `hwdata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hwdone`
--

DROP TABLE IF EXISTS `hwdone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hwdone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(9999) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `homework_id` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=391 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hwdone`
--

LOCK TABLES `hwdone` WRITE;
/*!40000 ALTER TABLE `hwdone` DISABLE KEYS */;
INSERT INTO `hwdone` VALUES (252,'teekung',180),(253,'teekung',198),(254,'teekung',184),(255,'teekung',205),(256,'teekung',207),(257,'teekung',208),(258,'teekung',193),(259,'teekung',194),(260,'teekung',210),(261,'teekung',211),(262,'teekung',209),(263,'teekung',185),(265,'teekung',212),(266,'teekung',214),(267,'teekung',215),(269,'teekung',217),(270,'teekung',219),(271,'teekung',201),(272,'teekung',221),(273,'teekung',200),(274,'teekung',222),(275,'teekung',223),(276,'teekung',225),(278,'teekung',224),(279,'teekung',231),(280,'teekung',230),(281,'teekung',227),(282,'teekung',187),(283,'teekung',236),(284,'teekung',189),(285,'teekung',190),(286,'teekung',233),(287,'teekung',237),(288,'teekung',234),(289,'teekung',238),(290,'teekung',232),(291,'teekung',226),(292,'teekung',188),(293,'teekung',241),(294,'teekung',243),(295,'teekung',247),(296,'teekung',183),(297,'teekung',251),(298,'teekung',220),(299,'teekung',240),(300,'teekung',197),(301,'teekung',248),(302,'teekung',252),(303,'teekung',262),(304,'teekung',254),(305,'teekung',253),(306,'teekung',264),(307,'teekung',268),(308,'teekung',265),(309,'teekung',255),(310,'teekung',260),(311,'teekung',267),(312,'teekung',246),(313,'teekung',273),(314,'teekung',216),(315,'teekung',263),(316,'teekung',269),(317,'teekung',274),(318,'teekung',270),(319,'teekung',261),(321,'teekung',266),(322,'teekung',272),(323,'teekung',284),(324,'teekung',202),(325,'teekung',289),(326,'teekung',275),(327,'teekung',285),(328,'teekung',291),(329,'teekung',278),(330,'teekung',290),(331,'teekung',292),(332,'teekung',288),(333,'teekung',296),(334,'teekung',196),(335,'teekung',276),(336,'teekung',297),(337,'teekung',293),(338,'teekung',295),(339,'teekung',257),(340,'teekung',299),(341,'teekung',286),(342,'teekung',287),(345,'teekung',306),(346,'teekung',307),(347,'teekung',303),(348,'teekung',281),(349,'teekung',280),(350,'teekung',298),(351,'teekung',316),(352,'teekung',304),(353,'teekung',310),(354,'teekung',313),(355,'teekung',318),(356,'teekung',314),(357,'teekung',315),(358,'teekung',332),(359,'teekung',324),(360,'teekung',327),(361,'teekung',308),(362,'teekung',329),(363,'teekung',325),(364,'teekung',309),(365,'teekung',311),(366,'teekung',328),(367,'teekung',337),(368,'teekung',195),(369,'teekung',333),(370,'teekung',317),(371,'teekung',331),(372,'teekung',342),(373,'teekung',341),(374,'teekung',330),(375,'teekung',346),(376,'teekung',351),(377,'teekung',347),(378,'teekung',355),(379,'teekung',350),(381,'teekung',358),(382,'teekung',360),(383,'teekung',362),(384,'teekung',365),(385,'teekung',348),(386,'teekung',370),(387,'teekung',371),(388,'teekung',369),(389,'teekung',368),(390,'teekung',366);
/*!40000 ALTER TABLE `hwdone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `LastUpdate` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3700 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (3668,'teekungx','098f6bcd4621d373cade4e832627b4f6','test@gmail.com','2019-07-30 14:14:16');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setting` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `updated` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting`
--

LOCK TABLES `setting` WRITE;
/*!40000 ALTER TABLE `setting` DISABLE KEYS */;
INSERT INTO `setting` VALUES (1,'');
/*!40000 ALTER TABLE `setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'teekungt_hwls'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-30 13:44:42
