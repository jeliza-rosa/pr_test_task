-- MySQL dump 10.13  Distrib 5.1.66, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: db_prcms30
-- ------------------------------------------------------
-- Server version	5.1.66

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
-- Table structure for table `pr_banner_groups`
--

DROP TABLE IF EXISTS `pr_banner_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_banner_groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_title` varchar(250) NOT NULL,
  `group_desc` text NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_banner_groups`
--

LOCK TABLES `pr_banner_groups` WRITE;
/*!40000 ALTER TABLE `pr_banner_groups` DISABLE KEYS */;
INSERT INTO `pr_banner_groups` VALUES (4,'Группа баннеров №1','<p>Описание</p>');
/*!40000 ALTER TABLE `pr_banner_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_banners`
--

DROP TABLE IF EXISTS `pr_banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_banners` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(250) NOT NULL,
  `banner_desc` text NOT NULL,
  `banner_url` varchar(250) NOT NULL,
  `banner_priority` int(3) NOT NULL,
  `banner_img` varchar(250) NOT NULL DEFAULT '''''',
  `banner_group` int(11) NOT NULL,
  `banner_active` int(1) NOT NULL,
  `banner_seen` int(11) NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_banners`
--

LOCK TABLES `pr_banners` WRITE;
/*!40000 ALTER TABLE `pr_banners` DISABLE KEYS */;
INSERT INTO `pr_banners` VALUES (1,'тест','<p>тест</p>','123',123,'/files/banners/5b09286a.JPG',4,1,0),(2,'test2','','',55,'/files/banners/ff90d43f.JPG',4,1,0);
/*!40000 ALTER TABLE `pr_banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_com_catalog_attributes`
--

DROP TABLE IF EXISTS `pr_com_catalog_attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_com_catalog_attributes` (
  `attribute_id` int(11) NOT NULL AUTO_INCREMENT,
  `attribute_name` varchar(150) NOT NULL,
  `attribute_title` varchar(150) NOT NULL,
  `attribute_type` enum('text','textarea','select','checkbox','file') NOT NULL,
  `attribute_default` text NOT NULL,
  `attribute_active` int(11) NOT NULL,
  `attribute_sort` int(11) NOT NULL DEFAULT '500',
  `attribute_node` int(11) NOT NULL,
  `attribute_csvactive` int(11) NOT NULL DEFAULT '0',
  `attribute_csvtype` int(11) NOT NULL,
  PRIMARY KEY (`attribute_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_com_catalog_attributes`
--

LOCK TABLES `pr_com_catalog_attributes` WRITE;
/*!40000 ALTER TABLE `pr_com_catalog_attributes` DISABLE KEYS */;
INSERT INTO `pr_com_catalog_attributes` VALUES (1,'','Количество в упаковке','text','',0,500,43,0,0),(2,'size','Размер','textarea','',1,500,43,0,0),(3,'','Высота','text','',1,500,43,0,0),(5,'','Свойства','text','',0,500,47,0,0);
/*!40000 ALTER TABLE `pr_com_catalog_attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_com_catalog_attributes_values`
--

DROP TABLE IF EXISTS `pr_com_catalog_attributes_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_com_catalog_attributes_values` (
  `value_id` int(11) NOT NULL AUTO_INCREMENT,
  `value_owner` int(11) NOT NULL,
  `value_attribute` int(11) NOT NULL,
  `value_value` text NOT NULL,
  PRIMARY KEY (`value_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_com_catalog_attributes_values`
--

LOCK TABLES `pr_com_catalog_attributes_values` WRITE;
/*!40000 ALTER TABLE `pr_com_catalog_attributes_values` DISABLE KEYS */;
INSERT INTO `pr_com_catalog_attributes_values` VALUES (1,1,1,'111'),(2,1,2,'222'),(3,1,3,''),(4,1,5,''),(5,2,1,''),(6,2,2,''),(7,3,1,''),(8,3,2,''),(9,5,5,''),(10,4,2,'f\0i\0r\0s\0t\0'),(11,4,3,'\0s\0e\0c\0o\0d\0'),(12,4,4,'\0f\0o\0r\0t\0h\0'),(13,4,2,'f\0i\0r\0s\0t\0'),(14,4,3,'\0s\0e\0c\0o\0d\0'),(15,4,4,'\0f\0o\0r\0t\0h\0'),(16,109,1,'1'),(17,109,2,''),(18,109,3,''),(19,109,4,''),(20,108,1,''),(21,108,2,''),(22,108,3,''),(23,108,4,'');
/*!40000 ALTER TABLE `pr_com_catalog_attributes_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_com_catalog_cart`
--

DROP TABLE IF EXISTS `pr_com_catalog_cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_com_catalog_cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_item` int(11) NOT NULL,
  `cart_sid` varchar(50) NOT NULL,
  `cart_count` int(11) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_com_catalog_cart`
--

LOCK TABLES `pr_com_catalog_cart` WRITE;
/*!40000 ALTER TABLE `pr_com_catalog_cart` DISABLE KEYS */;
INSERT INTO `pr_com_catalog_cart` VALUES (1,1,'c68668ab586b913f23d1',1),(2,2,'c68668ab586b913f23d1',1),(3,1,'10b2a7dad56d55927864',1),(4,2,'10b2a7dad56d55927864',1),(5,1,'10b2a7dad56d5592786455ef479b575f',1),(6,2,'10b2a7dad56d5592786455ef479b575f',1),(11,1,'c68668ab586b913f23d11ac1b4000652',1),(12,2,'c68668ab586b913f23d11ac1b4000652',1),(13,3,'c68668ab586b913f23d11ac1b4000652',1),(14,1,'3ad266dae3f2ca0ffab038487c675ff8',1),(15,2,'3ad266dae3f2ca0ffab038487c675ff8',1),(16,3,'3ad266dae3f2ca0ffab038487c675ff8',1),(20,109,'acf3d472c3aeaab8936453b56f9b0d4a',1),(19,108,'acf3d472c3aeaab8936453b56f9b0d4a',1),(21,109,'67c1ea21dcea65899bea086ded9b2a93',1),(22,108,'67c1ea21dcea65899bea086ded9b2a93',1);
/*!40000 ALTER TABLE `pr_com_catalog_cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_com_catalog_groups`
--

DROP TABLE IF EXISTS `pr_com_catalog_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_com_catalog_groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_title` varchar(150) NOT NULL,
  `group_node` int(11) NOT NULL,
  `group_active` int(11) NOT NULL,
  `group_image` varchar(255) DEFAULT NULL,
  `group_parent` int(11) NOT NULL,
  `group_desc` text NOT NULL,
  `group_sort` int(11) NOT NULL DEFAULT '500',
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_com_catalog_groups`
--

LOCK TABLES `pr_com_catalog_groups` WRITE;
/*!40000 ALTER TABLE `pr_com_catalog_groups` DISABLE KEYS */;
INSERT INTO `pr_com_catalog_groups` VALUES (1,'Группа 1',43,1,'',0,'',500),(2,'Подгруппа группы 1',43,1,'',1,'',500),(3,'Группа 2',43,1,'',0,'',500),(4,'Подгруппа группы 2',43,1,'',1,'',500),(7,'Группа',47,1,NULL,0,'',500),(8,'123',47,1,NULL,7,'',500),(11,'Группа 3',43,1,NULL,0,'',500),(12,'Подгруппа 1',43,1,NULL,11,'',500),(13,'Подгруппа 2',43,1,NULL,12,'',500);
/*!40000 ALTER TABLE `pr_com_catalog_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_com_catalog_items`
--

DROP TABLE IF EXISTS `pr_com_catalog_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_com_catalog_items` (
  `item_description` text,
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_count` int(11) NOT NULL DEFAULT '1',
  `item_group` int(11) NOT NULL,
  `item_price` float DEFAULT NULL,
  `item_title` varchar(150) NOT NULL,
  `item_node` int(11) NOT NULL,
  `item_active` int(11) NOT NULL DEFAULT '1',
  `item_image` varchar(255) DEFAULT NULL,
  `item_sort` int(11) NOT NULL DEFAULT '500',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_com_catalog_items`
--

LOCK TABLES `pr_com_catalog_items` WRITE;
/*!40000 ALTER TABLE `pr_com_catalog_items` DISABLE KEYS */;
INSERT INTO `pr_com_catalog_items` VALUES (NULL,1,100,0,1000,'Черный свитер и бежевые джинсы',43,1,'/files/item/5161e3f3.jpg',500),(NULL,2,0,0,2000,'Белый свитер и пуловер',43,1,'/files/item/11f65a1d.jpg',500),(NULL,3,0,0,1500,'Длинное пальто',43,1,'/files/item/0b25c47e.jpg',500),(NULL,4,0,1,0,'Товар 4',43,1,NULL,500),(NULL,5,0,0,0,'Товар 5',47,1,NULL,500),(NULL,106,4,2,1,'3',43,7,'6',8),(NULL,107,4,2,1,'3',43,4,'4',4),(NULL,108,4,0,1,'3',43,1,'/files/item/5f924723.jpg',8),(NULL,109,1,0,99999,'ламба',43,1,'/files/item/d4484ecd.jpg',0),(NULL,110,1,1,1,'Строп текстильный кольцевой СТК',43,1,'Строп текстильный кольцевой СТК.jpg',500),(NULL,111,1,1,1,'Строп текстильный одноветвевой 1СТ',43,1,'Строп текстильный одноветвевой 1СТ.jpg',500),(NULL,112,1,1,1,'Строп текстильный двухветвевой 2СТ',43,1,'Строп текстильный двухветвевой 2СТ.jpg',500),(NULL,113,1,1,1,'Строп текстильный трехветвевой 3СТ',43,1,'Строп текстильный двухветвевой 3СТ.jpg',500),(NULL,114,1,1,1,'Строп текстильный четырехветвевой 4СТ',43,1,'Строп текстильный четырехветвевой 4СТ.jpg',500),(NULL,115,1,1,1,'Строп текстильный петлевой составой СТПс',43,1,'Строп текстильный петлевой составой СТПс.JPG',500),(NULL,116,1,1,1,'Строп текстильный кольцевой СТК',43,1,'Строп текстильный кольцевой СТК.jpg',500),(NULL,117,1,1,1,'Строп текстильный кольцевой СТК',43,1,'Строп текстильный кольцевой СТК.jpg',500),(NULL,118,1,1,1,'Строп текстильный одноветвевой 1СТ',43,1,'Строп текстильный одноветвевой 1СТ.jpg',500),(NULL,119,1,1,1,'Строп текстильный двухветвевой 2СТ',43,1,'Строп текстильный двухветвевой 2СТ.jpg',500),(NULL,120,1,1,1,'Строп текстильный трехветвевой 3СТ',43,1,'Строп текстильный двухветвевой 3СТ.jpg',500),(NULL,121,1,1,1,'Строп текстильный четырехветвевой 4СТ',43,1,'Строп текстильный четырехветвевой 4СТ.jpg',500),(NULL,122,1,1,1,'Строп текстильный петлевой составой СТПс',43,1,'Строп текстильный петлевой составой СТПс.JPG',500),(NULL,123,1,14,1,'Строп текстильный кольцевой СТК',43,1,'Строп текстильный кольцевой СТК.jpg',500),(NULL,124,1,14,1,'Строп текстильный одноветвевой 1СТ',43,1,'Строп текстильный одноветвевой 1СТ.jpg',500),(NULL,125,1,14,1,'Строп текстильный двухветвевой 2СТ',43,1,'Строп текстильный двухветвевой 2СТ.jpg',500),(NULL,126,1,14,1,'Строп текстильный трехветвевой 3СТ',43,1,'Строп текстильный двухветвевой 3СТ.jpg',500),(NULL,127,1,14,1,'Строп текстильный четырехветвевой 4СТ',43,1,'Строп текстильный четырехветвевой 4СТ.jpg',500),(NULL,128,1,14,1,'Строп текстильный петлевой составой СТПс',43,1,'Строп текстильный петлевой составой СТПс.JPG',500),(NULL,129,1,14,1,'Строп текстильный кольцевой СТК',43,1,'Строп текстильный кольцевой СТК.jpg',500),(NULL,130,1,14,1,'Строп текстильный одноветвевой 1СТ',43,1,'Строп текстильный одноветвевой 1СТ.jpg',500),(NULL,131,1,14,1,'Строп текстильный двухветвевой 2СТ',43,1,'Строп текстильный двухветвевой 2СТ.jpg',500),(NULL,132,1,14,1,'Строп текстильный трехветвевой 3СТ',43,1,'Строп текстильный двухветвевой 3СТ.jpg',500),(NULL,133,1,14,1,'Строп текстильный четырехветвевой 4СТ',43,1,'Строп текстильный четырехветвевой 4СТ.jpg',500),(NULL,134,1,14,1,'Строп текстильный петлевой составой СТПс',43,1,'Строп текстильный петлевой составой СТПс.JPG',500),(NULL,135,1,14,1,'Строп текстильный кольцевой СТК',43,1,'Строп текстильный кольцевой СТК.jpg',500),(NULL,136,1,14,1,'Строп текстильный одноветвевой 1СТ',43,1,'Строп текстильный одноветвевой 1СТ.jpg',500),(NULL,137,1,14,1,'Строп текстильный двухветвевой 2СТ',43,1,'Строп текстильный двухветвевой 2СТ.jpg',500),(NULL,138,1,14,1,'Строп текстильный трехветвевой 3СТ',43,1,'Строп текстильный двухветвевой 3СТ.jpg',500),(NULL,139,1,14,1,'Строп текстильный четырехветвевой 4СТ',43,1,'Строп текстильный четырехветвевой 4СТ.jpg',500),(NULL,140,1,14,1,'Строп текстильный петлевой составой СТПс',43,1,'Строп текстильный петлевой составой СТПс.JPG',500),(NULL,141,1,14,1,'Строп текстильный кольцевой СТК',43,1,'Строп текстильный кольцевой СТК.jpg',500),(NULL,142,1,14,1,'Строп текстильный одноветвевой 1СТ',43,1,'Строп текстильный одноветвевой 1СТ.jpg',500),(NULL,143,1,14,1,'Строп текстильный двухветвевой 2СТ',43,1,'Строп текстильный двухветвевой 2СТ.jpg',500),(NULL,144,1,14,1,'Строп текстильный трехветвевой 3СТ',43,1,'Строп текстильный двухветвевой 3СТ.jpg',500),(NULL,145,1,14,1,'Строп текстильный четырехветвевой 4СТ',43,1,'Строп текстильный четырехветвевой 4СТ.jpg',500),(NULL,146,1,14,1,'Строп текстильный петлевой составой СТПс',43,1,'Строп текстильный петлевой составой СТПс.JPG',500),(NULL,147,1,14,1,'Строп текстильный кольцевой СТК',43,1,'Строп текстильный кольцевой СТК.jpg',500),(NULL,148,1,14,1,'Строп текстильный одноветвевой 1СТ',43,1,'Строп текстильный одноветвевой 1СТ.jpg',500),(NULL,149,1,14,1,'Строп текстильный двухветвевой 2СТ',43,1,'Строп текстильный двухветвевой 2СТ.jpg',500),(NULL,150,1,14,1,'Строп текстильный трехветвевой 3СТ',43,1,'Строп текстильный двухветвевой 3СТ.jpg',500),(NULL,151,1,14,1,'Строп текстильный четырехветвевой 4СТ',43,1,'Строп текстильный четырехветвевой 4СТ.jpg',500),(NULL,152,1,14,1,'Строп текстильный петлевой составой СТПс',43,1,'Строп текстильный петлевой составой СТПс.JPG',500),(NULL,153,1,14,1,'Строп текстильный кольцевой СТК',43,1,'Строп текстильный кольцевой СТК.jpg',500),(NULL,154,1,14,1,'Строп текстильный одноветвевой 1СТ',43,1,'Строп текстильный одноветвевой 1СТ.jpg',500),(NULL,155,1,14,1,'Строп текстильный двухветвевой 2СТ',43,1,'Строп текстильный двухветвевой 2СТ.jpg',500),(NULL,156,1,14,1,'Строп текстильный трехветвевой 3СТ',43,1,'Строп текстильный двухветвевой 3СТ.jpg',500),(NULL,157,1,14,1,'Строп текстильный четырехветвевой 4СТ',43,1,'Строп текстильный четырехветвевой 4СТ.jpg',500),(NULL,158,1,14,1,'Строп текстильный петлевой составой СТПс',43,1,'Строп текстильный петлевой составой СТПс.JPG',500);
/*!40000 ALTER TABLE `pr_com_catalog_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_com_csv`
--

DROP TABLE IF EXISTS `pr_com_csv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_com_csv` (
`csv_id` int(11) NOT NULL AUTO_INCREMENT,
				`csv_active` varchar(250) NOT NULL,
				`csv_node` text NOT NULL,
				`csv_type` datetime,
				`csv_sort` varchar(250) NOT NULL DEFAULT '',
				`csv_datetime` datetime NOT NULL,
                `csv_group` varchar(250),
                `csv_task` varchar(250),
                `csv_time_fact` float,
                `csv_time_plan` float,
                `csv_sum` int(11),
                `csv_created_at` datetime,
                `csv_link` text,
  PRIMARY KEY (`csv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=ucs2;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_com_csv`
--

-- LOCK TABLES `pr_com_csv` WRITE;
-- /*!40000 ALTER TABLE `pr_com_csv` DISABLE KEYS */;
-- INSERT INTO `pr_com_csv` VALUES (9,1,43,9000002,'text',0),(10,1,43,9000000,'text',0),(11,1,43,9000001,'text',0),(12,1,43,9000003,'text',0),(13,1,43,9000004,'text',0),(14,1,43,9000005,'text',0),(15,1,43,9000006,'text',0),(16,1,43,9000007,'text',0);
-- /*!40000 ALTER TABLE `pr_com_csv` ENABLE KEYS */;
-- UNLOCK TABLES;

--
-- Table structure for table `pr_com_feedback`
--

DROP TABLE IF EXISTS `pr_com_feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_com_feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback_title` varchar(250) NOT NULL,
  `feedback_mails` varchar(250) NOT NULL,
  `feedback_node` int(11) NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_com_feedback`
--

LOCK TABLES `pr_com_feedback` WRITE;
/*!40000 ALTER TABLE `pr_com_feedback` DISABLE KEYS */;
INSERT INTO `pr_com_feedback` VALUES (1,'Обратная связь','thd.rizer@gmail.com',7),(5,'Фотогалерея','admin@vprioritete.ru',29),(6,'Поиск','admin@vprioritete.ru',42),(7,'Обратная связь [en]','admin@vprioritete.ru',70);
/*!40000 ALTER TABLE `pr_com_feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_com_feedback_answers`
--

DROP TABLE IF EXISTS `pr_com_feedback_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_com_feedback_answers` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_author` varchar(250) NOT NULL,
  `answer_text` text NOT NULL,
  `answer_datetime` datetime NOT NULL,
  `answer_result` int(11) NOT NULL,
  `answer_active` int(1) NOT NULL,
  `answer_sent` int(1) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_com_feedback_answers`
--

LOCK TABLES `pr_com_feedback_answers` WRITE;
/*!40000 ALTER TABLE `pr_com_feedback_answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `pr_com_feedback_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_com_feedback_fields`
--

DROP TABLE IF EXISTS `pr_com_feedback_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_com_feedback_fields` (
  `field_id` int(11) NOT NULL AUTO_INCREMENT,
  `field_title` varchar(250) NOT NULL,
  `field_name` varchar(250) NOT NULL,
  `field_type` enum('text','textarea','mail','phone','file','checkbox','radio','image','button','label','select') NOT NULL,
  `field_value` text NOT NULL,
  `field_required` int(11) NOT NULL DEFAULT '0',
  `field_feedback` int(11) NOT NULL,
  `field_sort` int(11) NOT NULL DEFAULT '500',
  `field_active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`field_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_com_feedback_fields`
--

LOCK TABLES `pr_com_feedback_fields` WRITE;
/*!40000 ALTER TABLE `pr_com_feedback_fields` DISABLE KEYS */;
INSERT INTO `pr_com_feedback_fields` VALUES (1,'ФИО','fio','text','',1,1,1,1),(21,'Сообщение','textarea','textarea','',0,1,4,1),(3,'Телефон','phone','phone','',0,1,3,1),(4,'Email','mail','mail','',0,1,2,1),(28,'Name','fio','text','',1,7,500,1),(29,'Email','mail','mail','',0,7,500,1),(30,'Telephone','phone','phone','',0,7,500,1),(31,'Message','textarea','textarea','',0,7,500,1);
/*!40000 ALTER TABLE `pr_com_feedback_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_com_feedback_results`
--

DROP TABLE IF EXISTS `pr_com_feedback_results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_com_feedback_results` (
  `result_id` int(11) NOT NULL AUTO_INCREMENT,
  `result_feedback` int(11) NOT NULL,
  `result_datetime` datetime NOT NULL,
  `result_active` int(11) NOT NULL,
  PRIMARY KEY (`result_id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_com_feedback_results`
--

LOCK TABLES `pr_com_feedback_results` WRITE;
/*!40000 ALTER TABLE `pr_com_feedback_results` DISABLE KEYS */;
INSERT INTO `pr_com_feedback_results` VALUES (43,1,'2015-04-21 14:53:23',0),(42,1,'2015-04-21 14:50:17',0),(44,1,'2015-04-21 14:53:33',0),(45,1,'2015-04-21 15:03:12',0),(46,1,'2015-04-21 15:03:20',0);
/*!40000 ALTER TABLE `pr_com_feedback_results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_com_feedback_values`
--

DROP TABLE IF EXISTS `pr_com_feedback_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_com_feedback_values` (
  `value_id` int(11) NOT NULL AUTO_INCREMENT,
  `value_value` text NOT NULL,
  `value_field` int(11) NOT NULL,
  `value_result` int(11) NOT NULL,
  PRIMARY KEY (`value_id`)
) ENGINE=MyISAM AUTO_INCREMENT=159 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_com_feedback_values`
--

LOCK TABLES `pr_com_feedback_values` WRITE;
/*!40000 ALTER TABLE `pr_com_feedback_values` DISABLE KEYS */;
INSERT INTO `pr_com_feedback_values` VALUES (158,'wadsfgh',1,46),(157,'wadsfgh',1,45);
/*!40000 ALTER TABLE `pr_com_feedback_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_com_galleries`
--

DROP TABLE IF EXISTS `pr_com_galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_com_galleries` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_title` varchar(250) NOT NULL,
  `gallery_description` text NOT NULL,
  `gallery_image` varchar(250) NOT NULL,
  `gallery_datetime` datetime NOT NULL,
  `gallery_active` int(11) NOT NULL DEFAULT '1',
  `gallery_node` int(11) NOT NULL,
  `gallery_sort` int(11) NOT NULL DEFAULT '500',
  PRIMARY KEY (`gallery_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_com_galleries`
--

LOCK TABLES `pr_com_galleries` WRITE;
/*!40000 ALTER TABLE `pr_com_galleries` DISABLE KEYS */;
INSERT INTO `pr_com_galleries` VALUES (1,'Тест','Привет!','/files/gallery/2596dbc3.jpeg','2014-04-16 16:01:00',1,29,500),(2,'Тест 2','','','2014-04-16 16:03:00',1,29,500),(3,'Каталог','','','2014-09-19 13:15:00',1,29,500),(4,'Галерея','','','2014-09-19 13:21:00',1,29,500);
/*!40000 ALTER TABLE `pr_com_galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_com_gallery_images`
--

DROP TABLE IF EXISTS `pr_com_gallery_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_com_gallery_images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_title` varchar(250) NOT NULL,
  `image_description` text,
  `image_url` varchar(250) NOT NULL,
  `image_datetime` datetime NOT NULL,
  `image_width` int(11) DEFAULT NULL,
  `image_height` int(11) DEFAULT NULL,
  `image_gallery` int(11) NOT NULL,
  `image_sort` int(11) NOT NULL DEFAULT '500',
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_com_gallery_images`
--

LOCK TABLES `pr_com_gallery_images` WRITE;
/*!40000 ALTER TABLE `pr_com_gallery_images` DISABLE KEYS */;
INSERT INTO `pr_com_gallery_images` VALUES (8,'dc26c70f','','/files/images/297a445d.jpg','2014-04-16 16:09:13',NULL,NULL,2,500),(3,'86f344e8','Привет!','/files/images/3451aa43.jpg','2014-04-16 16:03:57',NULL,NULL,1,500),(7,'bc3c0a1a','Привет!','/files/images/c83cdfe9.jpg','2014-04-16 16:09:13',NULL,NULL,2,500),(5,'bc3c0a1a','','/files/images/0fbedefa.jpg','2014-04-16 16:03:57',NULL,NULL,1,500),(6,'dc26c70f','','/files/images/d1246e51.jpg','2014-04-16 16:03:57',NULL,NULL,1,500),(9,'SEO-отчет по сайту more-tmn',NULL,'/files/images/88dacdd1.pdf','2014-04-16 16:51:54',NULL,NULL,2,500),(17,'20120726-021_1977-Edit',NULL,'/files/images/c6824076.jpg','2014-09-19 16:02:41',NULL,NULL,3,500),(15,'20120726-021_1777-Edit',NULL,'/files/images/2000b553.jpg','2014-09-19 16:02:35',NULL,NULL,3,500),(16,'20120726-021_1868-Edit',NULL,'/files/images/9792c98e.jpg','2014-09-19 16:02:38',NULL,NULL,3,500),(18,'20120726-021_2001-Edit',NULL,'/files/images/d2d619a0.jpg','2014-09-19 16:02:44',NULL,NULL,3,500),(19,'20120726-021_2001-Edit',NULL,'/files/images/a7b0bf72.jpg','2014-09-19 16:20:43',NULL,NULL,4,500),(20,'20120726-021_1977-Edit',NULL,'/files/images/e97f6b5a.jpg','2014-09-19 16:20:52',NULL,NULL,4,500),(21,'20120726-021_1931-Edit',NULL,'/files/images/28ebfb66.jpg','2014-09-19 16:21:01',NULL,NULL,4,500),(22,'20120726-021_1892-Edit',NULL,'/files/images/258550a5.jpg','2014-09-19 16:21:19',NULL,NULL,4,500),(23,'20120726-021_1868-Edit',NULL,'/files/images/587a8339.jpg','2014-09-19 16:21:31',NULL,NULL,4,500);
/*!40000 ALTER TABLE `pr_com_gallery_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_com_news`
--

DROP TABLE IF EXISTS `pr_com_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_com_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(250) NOT NULL,
  `news_announcement` text NOT NULL,
  `news_body` text NOT NULL,
  `news_datetime` datetime NOT NULL,
  `news_image` varchar(250) DEFAULT NULL,
  `news_node` int(11) NOT NULL,
  `news_active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_com_news`
--

LOCK TABLES `pr_com_news` WRITE;
/*!40000 ALTER TABLE `pr_com_news` DISABLE KEYS */;
INSERT INTO `pr_com_news` VALUES (23,'Выставка франшиз в Тюмени','24-25 апреля в Тюмени состоится  II Всероссийский форум «Франчайзинг: новый потенциал в развитии регионов».','<p>24-25 апреля в Тюмени состоится  II Всероссийский форум «Франчайзинг: новый потенциал в развитии регионов». Организаторы форума Правительство Тюменской области, Комитет Совета Федерации по федеративному устройству, региональной политике, местному самоуправлению и делам Севера, Российская Ассоциация Франчайзинга, генеральный партнер – ОАО «Сбербанк России». </p>\r\n\r\n<p>Как и в прошлом году, центральной  темой тюменского форума станет развитие регионального франчайзинга, который означает создание местными успешными предприятиями собственных франшиз и продвижение их на рынке.</p>\r\n\r\n<p>В рамках форума наряду с конференц-мероприятиями традиционно будет проходить выставка франчайзинговых концепций. Свои франшизы представят около 50 международных, федеральных и региональных франчайзеров.</p>\r\n\r\n<p>На  сегодняшний день свое участие подтвердили  франчайзеры из Москвы, Нижнего Новгорода, Омска, Новосибирска и Тюмени. Среди известных брендов, которые будут презентованы на выставке: «Арсенал +», «Ступеньки», «Этажи», SPAR, «Кванта+», сеть кофеен «Максим», «Золотая середина», «Мебельвилль»,  «Молоток», «Спортмастер», Milana, «Миладенежка», «Наука шоу» и «Пузыри шоу», «Пятерочка», «Перекресток», «Точка красоты», «Автосуши»,  Apels,  «Газпромоптика», Papa John’s, Hesburger. </p>\r\n\r\n<p>Франчайзеры будут ждать своих будущих партнеров-франчайзи на выставке франшиз, которая состоится в рамках II Всероссийского форума «Франчайзинг: новый потенциал в развитии регионов», 24-25 апреля в Западно-Сибирском инновационном центре. Каждый заинтересованный в покупке франшизы получит возможность оценить и сравнить концепции, задать волнующие его вопросы представителю франчайзера и выбрать наиболее подходящее для себя франчайзинговое предложение.</p>\r\n\r\n<p>Подробная информация и регистрация на сайте мероприятия франшиза-форум.рф. Участие бесплатное. Необходима предварительная регистрация.</p>\r\n\r\n<p>С уважением, Оргкомитет форума<br />\r\n<span style=\"line-height: 1.6em;\">Контактное лицо:</span><br />\r\n<span style=\"line-height: 1.6em;\">Светлана Бортвина,</span><br />\r\n<span style=\"line-height: 1.6em;\">(3452) 605-785,</span><br />\r\n<span style=\"line-height: 1.6em;\">pr.forum72@gmail.com</span></p>','2013-04-04 13:21:00','/files/news/26dde253.jpg',15,1),(67,'Привет','','<p>Привет всему миру</p>','2013-09-05 16:40:00',NULL,15,1),(68,'Новость 5','','','2013-12-13 19:20:44',NULL,15,1),(75,'Lorem ipsum dolor sit amet','','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>','2014-09-19 13:37:00','/files/news/9304bda9.jpg',62,1),(44,'Развитие  регионального франчайзинга','Бизнес по франчайзингу в современном мире пользуется популярностью. Преимущество работы по данной системе очевидны...','<p>Бизнес&nbsp;по франчайзингу в современном мире пользуется популярностью. Преимущество работы по данной системе очевидны: &laquo;покупка&raquo; готовой жизнеспособной модели предприятия, а также поддержка и консультации уже опытных коллег из компании франчайзера при работе и дальнейшем развитии.&nbsp;&nbsp;</p>\r\n\r\n<p>Есть&nbsp;потребность&nbsp;&ndash;&nbsp;есть предложения. Как&nbsp;и&nbsp;любая&nbsp;сфера&nbsp;деятельности франчайзинг&nbsp;требует&nbsp;развития и&nbsp; информационной открытости, поэтому&nbsp; ежегодно в стране проводятся многочисленные мероприятия: форумы, выставки, круглые столы и семинары в разных регионах России.</p>\r\n\r\n<p>Отличительной особенностью тюменских форумов является присутствие на нем не только известных российских и зарубежных брендов, но и успешных региональных франшиз из субъектов Российской Федерации. В настоящее время в стране региональный франчайзинг находится в стадии развития, но потенциальные возможности его внедрения достаточно велики. Региональный франчайзинг, призванный способствовать модернизации бизнеса, росту уровня занятости населения и повышению благосостояния, может стать одним из главных инструментов совершенствования потребительского рынка муниципальных образований. И речь идет не только о привлечении федеральных франчайзинговых концепций в регионы, и о поддержке региональных компаний, которые уже &laquo;доросли&raquo; до тиражирования своего опыта по франчайзингу.</p>\r\n\r\n<p>Стоит отметить, что&nbsp;франчайзинг&nbsp; &ndash;&nbsp;это&nbsp;не только проверенные&nbsp;временем предприятия, но и&nbsp;соответствующие&nbsp; стандарты&nbsp;работы и&nbsp;обслуживания Клиентов. Появление&nbsp;на рынке&nbsp;сильных&nbsp; игроков&nbsp;стимулирует&nbsp;развитие других компаний в этом сегменте.</p>\r\n\r\n<p>В сложившейся&nbsp;ситуации на рынке, франчайзинг&nbsp; характерен для крупных городов: областных центров, городов-миллиоников, а также быстроразвивающиеся городов.</p>\r\n\r\n<p>В России на региональном уровне существует потребность в покупке и развитии франшиз &laquo;эконом&raquo;-сегмента для городов численностью менее 300&nbsp;000 человек. Поскольку уровень потребителей в муниципальных образованиях и провинциальных городах за последнее время значительно возрос. Но крупные федеральные франшизы не заинтересованы в развитии на данных территориях.</p>\r\n\r\n<p>&laquo;Сегодня&nbsp;все&nbsp;больше жителей&nbsp; муниципальных&nbsp;образований&nbsp;и&nbsp; городов&nbsp;спутников&nbsp;приезжают&nbsp; в&nbsp;областной&nbsp;центр. Они&nbsp;видят&nbsp; и&nbsp;на себе испытывают уровень&nbsp;сервиса&nbsp; в&nbsp;заведениях общественного&nbsp;питания&nbsp; и&nbsp;торговых центрах. Такого же сервиса&nbsp; и&nbsp;отношения&nbsp;они&nbsp;ждут и&nbsp;от участников потребительского рынка&nbsp;своих&nbsp;городов. Ведь к&nbsp;хорошему быстро привыкаешь! В связи с этим я вижу развитие предприятий по системе франчайзинга в таких городах как Ишим, Тобольск, Ялуторовск и Заводоуковск. Горожане уже привыкли и к сетевым магазинам и к хорошему сервису&raquo;, - прокомментировал данный вопрос Андрей Вадимович Пантелеев, начальник управления лицензирования и регулирования потребительского рынка Тюменской области.</p>','2013-04-15 17:21:00','/files/news/53fd93ae.jpg',15,1),(58,'Открытие юбилейного магазина SOHO','Сеть салонов обуви и аксессуаров премиальных мировых брендов SOHO продолжает расширять свое присутствие в регионах России...','<p><span style=\"line-height: 1.6em;\">Сеть салонов обуви и аксессуаров премиальных мировых брендов SOHO продолжает расширять свое присутствие в регионах России в рамках франчайзингового партнерства. 23 марта в  г. Санкт Петербург состоялось  праздничное открытие юбилейного  тридцатого концептуального мультибрендового салона SOHO в ТРК \"Континент\" на Звездной. Гостей ждали подарки, скидки и дисконтные карты.  А приятная музыка и фуршет создали  праздничную атмосферу! </span></p>\r\n\r\n<div class=\"row-fluid\">\r\n<div class=\"span4\"><img alt=\"\" src=\"http://xn----7sba1ae1acmlh7ach5c.xn--p1ai/files/2.JPG\" style=\"width: 100%;\" />\r\n<p> </p>\r\n</div>\r\n\r\n<div class=\"span4\"><img alt=\"\" src=\"http://xn----7sba1ae1acmlh7ach5c.xn--p1ai/files/3.JPG\" style=\"width: 100%;\" />\r\n<p> </p>\r\n</div>\r\n\r\n<div class=\"span4\"><img alt=\"\" src=\"http://xn----7sba1ae1acmlh7ach5c.xn--p1ai/files/4.JPG\" style=\"width: 100%;\" />\r\n<p> </p>\r\n</div>\r\n</div>','2013-04-17 12:47:00','/files/news/e23c8aa6.jpg',15,1),(70,'Новость 7 \" фыв \"','','','2013-12-13 00:00:00','',15,1),(76,'Duis aute irure dolor in reprehenderit','','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>','2014-09-19 13:42:00',NULL,62,1),(77,'Собственное производство','Производственная линия WIENNEWAN (Германия)','','2014-09-19 14:27:00','/files/news/12a78801.png',63,1),(78,'Собственное производство','Производственная линия WIENNEWAN','','2014-09-19 14:29:00',NULL,63,1),(79,'Lorem ipsum dolor sit amet, consectetur adipisicing elit','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','<p><iframe allowfullscreen=\"\" frameborder=\"0\" height=\"335\" src=\"//www.youtube.com/embed/6ybBuTETr3U\" width=\"560\"></iframe></p>','2014-09-19 15:27:00',NULL,64,1),(80,'Lorem ipsum dolor sit amet, consectetur','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','<iframe width=\"560\" height=\"335\" src=\"//www.youtube.com/embed/kwWWXG6sbLY\" frameborder=\"0\" allowfullscreen></iframe>','2014-09-19 16:01:00',NULL,64,1),(81,'Lorem ipsum dolor sit amet','','','2014-09-19 00:00:00','/files/news/e5e3ba2c.jpg',65,1),(82,'Lorem ipsum dolor sit amet, consectetur','','','2014-09-19 00:00:00','/files/news/d7ff7461.jpg',65,1),(83,'Lorem ipsum dolor sit amet, consectetur0','','','2014-09-19 00:00:00','/files/news/049ad9f7.jpg',65,1),(84,'Lorem ipsum dolor sit consectetur','','','2014-09-19 00:00:00','/files/news/36263fdd.jpg',65,1),(85,'Lorem ipsum dolor sit amet, consectetur','','','2014-09-19 00:00:00','/files/news/2767d4e1.jpg',66,1),(86,'Lorem ipsum dolor sit amet','','','2014-09-19 00:00:00','/files/news/de0a8b62.jpg',66,1),(87,'Lorem ipsum dolor sit amet, consectetur','','','2014-09-19 00:00:00','/files/news/e7958201.jpg',66,1),(88,'Lorem dolor sit amet, consectet','','','2014-09-19 00:00:00','/files/news/514df2a9.jpg',66,1),(89,'vk','','','2015-04-21 00:00:00','/files/news/34589493.png',67,1),(90,'facebook','','','2015-04-21 00:00:00','/files/news/3e291932.png',67,1),(91,'instagram','','','2015-04-21 00:00:00','/files/news/3b879e06.png',67,1),(92,'youtube','','','2015-04-21 00:00:00','/files/news/784918fd.png',67,1),(93,'Слайд 1','','','2015-04-21 00:00:00','/files/news/2e7a2a00.jpg',68,1),(94,'Слайд 2','','','2015-04-21 00:00:00','/files/news/52824e07.jpg',68,1);
/*!40000 ALTER TABLE `pr_com_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_com_pages`
--

DROP TABLE IF EXISTS `pr_com_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_com_pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_body` text NOT NULL,
  `page_node` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`page_id`),
  FULLTEXT KEY `page_body` (`page_body`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_com_pages`
--

LOCK TABLES `pr_com_pages` WRITE;
/*!40000 ALTER TABLE `pr_com_pages` DISABLE KEYS */;
INSERT INTO `pr_com_pages` VALUES (1,'',1),(2,'<p>Ошибка 404! Вернуться на <a href=\"/\">главную</a>.</p>',3),(3,'<p>Это страница с новостями</p>',15),(25,'<p>Ошибка на ошибке ошибкой погоняет</p>',45),(26,'<p>Привет всему миру</p>\r\n\r\n<p>Привет всему миру</p>\r\n\r\n<p>Привет всему миру</p>\r\n\r\n<p>Привет всему миру</p>',46),(27,'<p>&nbsp; &nbsp;asd&nbsp;<img alt=\"angel\" src=\"http://prcms30.vprioritete.org/components/admin/templates/default/assets/ckeditor/plugins/smiley/images/angel_smile.gif\" style=\"height:20px; width:20px\" title=\"angel\" /></p>',4),(28,'<p>Каждая квартира ТДСК вводится в эксплуатацию с улучшенной черновой отделкой.</p>\r\n\r\n<p>В квартирах уже есть необходимые приборы, с помощью которых легко сократить расходы на услуги ЖКХ:</p>\r\n\r\n<ul>\r\n	<li>электронные двухтарифные - день/ночь - счетчики учета электроэнергии,</li>\r\n	<li>приборы учета горячей и холодной воды.</li>\r\n</ul>\r\n\r\n<p>Установлены домофон, абонентский распределительный шкаф с двумя розетками с возможностью подключе-<br />\r\nния сети Интернет, кабельного и IP-ТВ, проведены линии телефонной связи.</p>\r\n\r\n<p>В подъездах &ndash; 2 входа - на лестницу и в лифтовой холл. Предусмотрены пандусы для маломобильных групп населения.</p>\r\n\r\n<p>В каждом подъезде 2 лифта - грузовой и пассажирский.</p>\r\n\r\n<h3><span style=\\\"font-family:arial,helvetica,sans-serif\\\">Панорама 1-комнатной квартиры</span></h3>\r\n\r\n<p><object classid=\\\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\\\" height=\\\"400\\\" width=\\\"665\\\"><param name=\\\"movie\\\" value=\\\"/files/tdsk/3d-tour/DSK.swf\\\" /><!--[if !IE]>--><object height=\\\"400px\\\" width=\\\"665px\\\"></object><!--<![endif]--></object></p>',60),(29,'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>',7),(30,'',69);
/*!40000 ALTER TABLE `pr_com_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_com_patterns`
--

DROP TABLE IF EXISTS `pr_com_patterns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_com_patterns` (
  `pattern_id` int(11) NOT NULL AUTO_INCREMENT,
  `pattern_title` varchar(250) NOT NULL,
  `pattern_coords` text NOT NULL,
  `pattern_desc` text NOT NULL,
  `pattern_active` int(1) NOT NULL,
  `pattern_node` int(11) NOT NULL,
  PRIMARY KEY (`pattern_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_com_patterns`
--

LOCK TABLES `pr_com_patterns` WRITE;
/*!40000 ALTER TABLE `pr_com_patterns` DISABLE KEYS */;
INSERT INTO `pr_com_patterns` VALUES (3,'Гитара','41,297,44,281,50,267,65,252,73,252,84,255,93,249,101,242,106,233,120,236,115,248,106,258,97,267,94,273,181,220,196,209,206,211,217,209,224,202,229,207,223,217,214,225,199,233,149,260,107,288,108,295,104,300,94,307,89,315,88,322,95,319,109,322,109,335,99,335,89,341,75,361,58,374,45,377,36,368,29,356,32,344,35,333,42,331,46,326,45,318,46,309,46,312,49,305','<p>Ibanez</p>',1,55),(4,'Барабан','550,500,559,485,574,465,594,449,610,439,633,433,653,428,677,421,701,419,723,420,745,427,768,437,784,453,799,469,811,485,816,500','<p>Бочка!</p>',1,55),(5,'LOL','845,161,576,160,571,64,600,44,593,142,650,123,632,160,720,159,701,131,697,88,712,54,740,54,761,75,760,122,740,160,729,142,738,135,746,121,744,82,723,71,711,92,714,126,728,141,740,160,806,159,809,64,845,45,817,147,868,124','<p>прикол мангол</p>\r\n<!-- Молодцом Димон=) -->',1,55);
/*!40000 ALTER TABLE `pr_com_patterns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_com_patterns_map`
--

DROP TABLE IF EXISTS `pr_com_patterns_map`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_com_patterns_map` (
  `map_id` int(11) NOT NULL AUTO_INCREMENT,
  `map_img` varchar(250) NOT NULL,
  `map_desc` text NOT NULL,
  `map_node` int(11) NOT NULL,
  PRIMARY KEY (`map_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_com_patterns_map`
--

LOCK TABLES `pr_com_patterns_map` WRITE;
/*!40000 ALTER TABLE `pr_com_patterns_map` DISABLE KEYS */;
INSERT INTO `pr_com_patterns_map` VALUES (1,'/files/patterns/e2a5c985.jpg','qwe',55);
/*!40000 ALTER TABLE `pr_com_patterns_map` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_com_search`
--

DROP TABLE IF EXISTS `pr_com_search`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_com_search` (
  `search_id` int(11) NOT NULL AUTO_INCREMENT,
  `search_node` int(11) NOT NULL,
  `search_component` int(11) NOT NULL,
  PRIMARY KEY (`search_id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_com_search`
--

LOCK TABLES `pr_com_search` WRITE;
/*!40000 ALTER TABLE `pr_com_search` DISABLE KEYS */;
INSERT INTO `pr_com_search` VALUES (40,45,10),(39,45,2),(38,45,4),(37,45,5),(36,45,13),(35,45,9),(34,45,6),(64,42,2),(63,42,4),(62,42,5),(61,42,13),(60,42,3),(59,42,17),(58,42,6);
/*!40000 ALTER TABLE `pr_com_search` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_components`
--

DROP TABLE IF EXISTS `pr_components`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_components` (
  `component_id` int(11) NOT NULL AUTO_INCREMENT,
  `component_title` varchar(250) NOT NULL,
  `component_name` varchar(250) NOT NULL,
  `component_active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`component_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_components`
--

LOCK TABLES `pr_components` WRITE;
/*!40000 ALTER TABLE `pr_components` DISABLE KEYS */;
INSERT INTO `pr_components` VALUES (2,'Страница','page',1),(1,'Административная панель','admin',1),(3,'Карта сайта','sitemap',1),(4,'Обратная связь','feedback',1),(5,'Новости','news',1),(6,'Галерея изображений','gallery',1),(12,'Поиск','search',1),(13,'Каталог','catalog',1),(17,'Карта','pattern',1),(18,'CSV','csv',1);
/*!40000 ALTER TABLE `pr_components` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_components_params`
--

DROP TABLE IF EXISTS `pr_components_params`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_components_params` (
  `param_id` int(11) NOT NULL AUTO_INCREMENT,
  `param_node` int(11) NOT NULL,
  `param_component` int(11) NOT NULL,
  `param_var` varchar(250) NOT NULL,
  `param_val` text NOT NULL,
  PRIMARY KEY (`param_id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_components_params`
--

LOCK TABLES `pr_components_params` WRITE;
/*!40000 ALTER TABLE `pr_components_params` DISABLE KEYS */;
INSERT INTO `pr_components_params` VALUES (3,3,2,'template','page.tpl'),(2,1,2,'template','default'),(4,44,2,'template','page.tpl'),(5,45,2,'template','page.tpl'),(6,46,2,'template','default'),(7,47,13,'template','page.tpl'),(8,15,5,'template','default'),(9,4,2,'template','default'),(10,50,2,'template','page.tpl'),(11,29,6,'template','default'),(12,42,12,'template','default'),(13,40,9,'template','default'),(14,59,17,'template','default'),(15,55,17,'template','default'),(16,55,17,'test','asdasd'),(17,60,2,'template','default'),(18,15,5,'onpage','5'),(19,29,6,'qweqwe','2'),(20,7,4,'template','default'),(21,7,4,'show_results','0'),(22,7,4,'success','Заявка принята, Спасибо за ваше обращение'),(23,7,4,'error','К сожалению, по ниезвестным причинам отправить вашу заявку не удалось.. Попробуйте снова!'),(24,61,2,'template','default'),(25,62,5,'template','default'),(26,62,5,'onpage','0'),(27,63,5,'template','default'),(28,63,5,'onpage','0'),(29,64,5,'template','default'),(30,64,5,'onpage','0'),(31,65,5,'template','default'),(32,65,5,'onpage','0'),(33,66,5,'template','default'),(34,66,5,'onpage','0'),(35,67,5,'template','default'),(36,67,5,'onpage','0'),(37,68,5,'template','default'),(38,68,5,'onpage','0'),(39,69,2,'template','default'),(40,70,4,'template','default'),(41,70,4,'show_results','0'),(42,70,4,'success','Application is accepted, Thank you for your message'),(43,70,4,'error','Unfortunately, for reasons unknown to send your application failed .. Try again!');
/*!40000 ALTER TABLE `pr_components_params` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_hook_groups`
--

DROP TABLE IF EXISTS `pr_hook_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_hook_groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(50) NOT NULL,
  `group_desc` varchar(250) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_hook_groups`
--

LOCK TABLES `pr_hook_groups` WRITE;
/*!40000 ALTER TABLE `pr_hook_groups` DISABLE KEYS */;
INSERT INTO `pr_hook_groups` VALUES (8,'social','Социальные сети'),(9,'feedback','Обратная связь'),(10,'slider','Слайдер'),(11,'feedback-en','');
/*!40000 ALTER TABLE `pr_hook_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_hook_nodes`
--

DROP TABLE IF EXISTS `pr_hook_nodes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_hook_nodes` (
  `node_id` int(11) NOT NULL AUTO_INCREMENT,
  `node_node` varchar(11) NOT NULL,
  `node_hook` int(11) NOT NULL,
  PRIMARY KEY (`node_id`)
) ENGINE=MyISAM AUTO_INCREMENT=216 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_hook_nodes`
--

LOCK TABLES `pr_hook_nodes` WRITE;
/*!40000 ALTER TABLE `pr_hook_nodes` DISABLE KEYS */;
INSERT INTO `pr_hook_nodes` VALUES (215,'all',24),(211,'all',22),(214,'all',23),(209,'all',21);
/*!40000 ALTER TABLE `pr_hook_nodes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_hook_params`
--

DROP TABLE IF EXISTS `pr_hook_params`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_hook_params` (
  `param_id` int(11) NOT NULL AUTO_INCREMENT,
  `param_hook` int(11) NOT NULL,
  `param_name` varchar(50) NOT NULL,
  `param_value` varchar(250) NOT NULL,
  PRIMARY KEY (`param_id`)
) ENGINE=MyISAM AUTO_INCREMENT=307 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_hook_params`
--

LOCK TABLES `pr_hook_params` WRITE;
/*!40000 ALTER TABLE `pr_hook_params` DISABLE KEYS */;
INSERT INTO `pr_hook_params` VALUES (295,22,'node','7'),(306,24,'node','70'),(305,24,'template','default.en'),(302,23,'template','slider'),(303,23,'limit','10'),(304,23,'node','68'),(294,22,'template','default'),(289,21,'template','social'),(290,21,'limit','10'),(291,21,'node','67');
/*!40000 ALTER TABLE `pr_hook_params` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_hooks`
--

DROP TABLE IF EXISTS `pr_hooks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_hooks` (
  `hook_id` int(11) NOT NULL AUTO_INCREMENT,
  `hook_title` varchar(250) NOT NULL,
  `hook_desc` text NOT NULL,
  `hook_type` varchar(250) NOT NULL,
  `hook_group` int(11) NOT NULL,
  `hook_sort` int(11) NOT NULL,
  `hook_active` int(1) NOT NULL,
  PRIMARY KEY (`hook_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_hooks`
--

LOCK TABLES `pr_hooks` WRITE;
/*!40000 ALTER TABLE `pr_hooks` DISABLE KEYS */;
INSERT INTO `pr_hooks` VALUES (21,'social','Социальные сети','HookNews_ComponentNews',8,500,1),(22,'feedback','Обратная связь','HookFeedback_ComponentFeedback',9,500,1),(23,'slider','Слайдер','HookNews_ComponentNews',10,500,1),(24,'feedback-en','','HookFeedback_ComponentFeedback',11,500,1);
/*!40000 ALTER TABLE `pr_hooks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_logs`
--

DROP TABLE IF EXISTS `pr_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_logs` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_user` int(11) NOT NULL,
  `log_ip` varchar(15) NOT NULL,
  `log_text` varchar(250) NOT NULL,
  `log_datetime` datetime NOT NULL,
  `log_type` varchar(30) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=326 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_logs`
--

LOCK TABLES `pr_logs` WRITE;
/*!40000 ALTER TABLE `pr_logs` DISABLE KEYS */;
INSERT INTO `pr_logs` VALUES (1,1,'31.163.101.172','Пользователь admin авторизировался.','2013-07-24 10:03:55','login-success'),(2,2,'31.163.101.172','Пользователь zyets авторизировался.','2013-07-24 10:26:08','login-success'),(3,1,'31.163.101.172','Пользователь admin авторизировался.','2013-07-23 10:03:55','login-success'),(4,1,'31.163.101.172','Пользователь admin авторизировался.','2013-07-24 08:03:55','login-success'),(5,1,'31.163.101.172','Пользователь admin авторизировался.','2013-07-24 11:53:14','login-success'),(6,2,'31.163.101.172','Пользователь zyets авторизировался.','2013-07-24 13:16:27','login-success'),(7,1,'31.163.101.172','Пользователь admin авторизировался.','2013-07-24 13:40:54','login-success'),(8,2,'31.163.101.172','Пользователь zyets авторизировался.','2013-07-24 15:51:19','login-success'),(9,1,'92.255.163.109','Пользователь admin авторизировался.','2013-07-24 16:43:58','login-success'),(10,1,'92.255.163.109','Пользователь admin авторизировался.','2013-07-24 16:46:16','login-success'),(11,2,'31.163.101.172','Пользователь zyets авторизировался.','2013-07-24 17:17:26','login-success'),(12,1,'178.47.167.150','Пользователь admin авторизировался.','2013-07-25 09:09:39','login-success'),(13,2,'178.47.167.150','Пользователь zyets авторизировался.','2013-07-25 13:50:39','login-success'),(14,2,'178.47.167.150','Пользователь zyets авторизировался.','2013-07-25 14:14:12','login-success'),(15,2,'178.47.167.150','Пользователь zyets авторизировался.','2013-07-25 16:03:42','login-success'),(16,1,'188.186.81.11','Пользователь admin авторизировался.','2013-07-25 19:59:40','login-success'),(17,1,'178.47.165.8','Пользователь admin авторизировался.','2013-07-26 08:12:02','login-success'),(18,2,'178.47.165.8','Пользователь zyets авторизировался.','2013-07-26 09:22:11','login-success'),(19,1,'188.16.153.201','Пользователь admin авторизировался.','2013-07-29 10:59:19','login-success'),(20,1,'188.16.153.201','Пользователь admin авторизировался.','2013-07-29 12:31:42','login-success'),(21,1,'188.186.104.80','Пользователь admin авторизировался.','2013-07-29 20:05:15','login-success'),(22,1,'31.163.127.94','Пользователь admin авторизировался.','2013-07-30 11:14:24','login-success'),(23,1,'31.163.127.94','Пользователь admin авторизировался.','2013-07-30 13:41:15','login-success'),(24,1,'31.163.127.94','Пользователь admin авторизировался.','2013-07-30 16:47:22','login-success'),(25,8,'31.163.87.148','Пользователь rostixman авторизировался.','2013-08-01 13:12:05','login-success'),(26,8,'188.186.29.146','Пользователь rostixman авторизировался.','2013-08-02 00:20:26','login-success'),(27,8,'188.186.29.146','Пользователь rostixman авторизировался.','2013-08-04 12:23:03','login-success'),(28,1,'90.150.248.119','Пользователь admin авторизировался.','2013-08-07 09:44:39','login-success'),(29,2,'31.163.76.141','Пользователь zyets авторизировался.','2013-08-07 13:34:57','login-success'),(30,2,'31.163.76.141','Пользователь zyets авторизировался.','2013-08-07 13:50:11','login-success'),(31,8,'188.186.29.146','Пользователь rostixman авторизировался.','2013-08-07 17:35:04','login-success'),(32,8,'5.140.145.159','Пользователь rostixman авторизировался.','2013-08-08 14:36:28','login-success'),(33,2,'5.140.145.159','Пользователь zyets авторизировался.','2013-08-08 15:04:35','login-success'),(34,2,'5.140.145.159','Пользователь zyets авторизировался.','2013-08-09 08:28:49','login-success'),(35,8,'5.140.145.159','Пользователь rostixman авторизировался.','2013-08-09 08:34:12','login-success'),(36,1,'31.163.82.93','Пользователь admin авторизировался.','2013-08-09 10:05:59','login-success'),(37,1,'31.163.114.157','Пользователь admin авторизировался.','2013-08-12 10:10:07','login-success'),(38,2,'31.163.114.157','Пользователь zyets авторизировался.','2013-08-12 14:13:23','login-success'),(39,2,'31.163.114.157','Пользователь zyets авторизировался.','2013-08-12 18:21:37','login-success'),(40,2,'31.163.114.157','Пользователь zyets авторизировался.','2013-08-12 19:38:58','login-success'),(41,2,'31.163.53.2','Пользователь zyets авторизировался.','2013-08-13 12:58:11','login-success'),(42,8,'188.186.85.59','Пользователь rostixman авторизировался.','2013-08-13 23:17:29','login-success'),(43,2,'31.163.53.2','Пользователь zyets авторизировался.','2013-08-14 09:02:02','login-success'),(44,2,'31.163.49.6','Пользователь zyets авторизировался.','2013-08-14 12:59:06','login-success'),(45,2,'31.163.49.6','Пользователь zyets авторизировался.','2013-08-14 13:02:42','login-success'),(46,12,'31.163.49.6','Пользователь test авторизировался.','2013-08-14 13:58:50','login-success'),(47,8,'31.163.49.6','Пользователь rostixman авторизировался.','2013-08-14 14:34:51','login-success'),(48,2,'31.163.49.6','Пользователь zyets авторизировался.','2013-08-14 17:15:25','login-success'),(49,12,'31.163.49.6','Пользователь test авторизировался.','2013-08-14 18:09:52','login-success'),(50,2,'31.163.49.6','Пользователь zyets авторизировался.','2013-08-14 18:10:51','login-success'),(51,12,'31.163.49.6','Пользователь test авторизировался.','2013-08-15 08:42:24','login-success'),(52,2,'31.163.49.6','Пользователь zyets авторизировался.','2013-08-15 09:42:30','login-success'),(53,2,'5.140.148.115','Пользователь zyets авторизировался.','2013-08-15 10:58:16','login-success'),(54,12,'5.140.148.115','Пользователь test авторизировался.','2013-08-15 11:59:47','login-success'),(55,2,'5.140.148.115','Пользователь zyets авторизировался.','2013-08-16 09:48:22','login-success'),(56,8,'109.194.164.78','Пользователь rostixman авторизировался.','2013-08-17 00:26:40','login-success'),(57,8,'188.186.37.120','Пользователь rostixman авторизировался.','2013-08-20 22:20:36','login-success'),(58,8,'188.186.37.120','Пользователь rostixman авторизировался.','2013-08-20 22:20:40','login-success'),(59,2,'37.79.159.131','Пользователь zyets авторизировался.','2013-08-22 11:33:11','login-success'),(60,2,'37.79.159.131','Пользователь zyets авторизировался.','2013-08-22 12:01:14','login-success'),(61,2,'37.79.159.131','Пользователь zyets авторизировался.','2013-08-22 12:16:16','login-success'),(62,2,'31.163.36.193','Пользователь zyets авторизировался.','2013-08-23 09:49:37','login-success'),(63,2,'90.150.249.163','Пользователь zyets авторизировался.','2013-08-26 16:36:19','login-success'),(64,8,'90.150.240.203','Пользователь rostixman авторизировался.','2013-08-27 13:25:44','login-success'),(65,2,'31.163.82.10','Пользователь zyets авторизировался.','2013-08-28 10:29:46','login-success'),(66,2,'31.163.82.10','Пользователь zyets авторизировался.','2013-08-28 12:36:05','login-success'),(67,1,'90.150.244.121','Пользователь admin авторизировался.','2013-08-29 12:34:50','login-success'),(68,13,'90.150.244.121','Пользователь petruhaxi авторизировался.','2013-08-29 16:09:35','login-success'),(69,13,'31.163.94.250','Пользователь petruhaxi авторизировался.','2013-08-30 10:05:20','login-success'),(70,1,'31.163.62.152','Пользователь admin авторизировался.','2013-09-02 16:43:21','login-success'),(71,2,'31.163.62.152','Пользователь zyets авторизировался.','2013-09-02 18:22:31','login-success'),(72,8,'188.186.83.217','Пользователь rostixman авторизировался.','2013-09-02 22:55:49','login-success'),(73,1,'31.163.46.59','Пользователь admin авторизировался.','2013-09-03 09:59:31','login-success'),(74,2,'31.163.46.59','Пользователь zyets авторизировался.','2013-09-03 15:08:47','login-success'),(75,1,'31.163.46.59','Пользователь admin авторизировался.','2013-09-03 15:54:40','login-success'),(76,1,'5.140.159.140','Пользователь admin авторизировался.','2013-09-04 08:47:30','login-success'),(77,2,'5.140.159.140','Пользователь zyets авторизировался.','2013-09-04 16:20:54','login-success'),(78,1,'37.79.145.245','Пользователь admin авторизировался.','2013-09-05 08:29:30','login-success'),(79,2,'37.79.145.245','Пользователь zyets авторизировался.','2013-09-05 09:19:15','login-success'),(80,2,'37.79.145.245','Пользователь zyets авторизировался.','2013-09-05 12:11:48','login-success'),(81,2,'37.79.145.245','Пользователь zyets авторизировался.','2013-09-05 13:59:28','login-success'),(82,1,'37.79.145.245','Пользователь admin авторизировался.','2013-09-05 16:17:59','login-success'),(83,2,'37.79.145.245','Пользователь zyets авторизировался.','2013-09-05 16:36:51','login-success'),(84,1,'188.186.0.223','Пользователь admin авторизировался.','2013-09-05 20:57:21','login-success'),(85,8,'188.186.83.217','Пользователь rostixman авторизировался.','2013-09-05 21:12:10','login-success'),(86,1,'5.140.145.227','Пользователь admin авторизировался.','2013-09-06 09:13:58','login-success'),(87,1,'5.140.145.227','Пользователь admin авторизировался.','2013-09-06 09:55:45','login-success'),(88,1,'5.140.145.227','Пользователь admin авторизировался.','2013-09-06 10:21:31','login-success'),(89,8,'188.186.96.111','Пользователь rostixman авторизировался.','2013-09-08 22:36:25','login-success'),(90,1,'31.163.66.222','Пользователь admin авторизировался.','2013-09-09 10:32:35','login-success'),(91,2,'31.163.66.222','Пользователь zyets авторизировался.','2013-09-09 11:42:42','login-success'),(92,1,'31.163.66.222','Пользователь admin авторизировался.','2013-09-09 12:30:40','login-success'),(93,2,'31.163.66.222','Пользователь zyets авторизировался.','2013-09-09 15:20:28','login-success'),(94,15,'31.163.66.222','Пользователь Sarvin авторизировался.','2013-09-09 17:27:13','login-success'),(95,1,'188.186.51.150','Пользователь admin авторизировался.','2013-09-09 20:51:47','login-success'),(96,2,'31.163.79.174','Пользователь zyets авторизировался.','2013-09-10 13:26:43','login-success'),(97,16,'31.163.79.174','Пользователь prioritet авторизировался.','2013-09-10 13:53:19','login-success'),(98,1,'31.163.79.174','Пользователь admin авторизировался.','2013-09-10 14:39:02','login-success'),(99,2,'31.163.79.174','Пользователь zyets авторизировался.','2013-09-10 15:12:37','login-success'),(100,2,'31.163.87.129','Пользователь zyets авторизировался.','2013-09-11 10:21:38','login-success'),(101,2,'31.163.87.129','Пользователь zyets авторизировался.','2013-09-11 12:09:37','login-success'),(102,2,'31.163.87.129','Пользователь zyets авторизировался.','2013-09-11 12:09:46','login-success'),(103,1,'31.163.87.129','Пользователь admin авторизировался.','2013-09-11 15:35:43','login-success'),(104,1,'31.163.87.129','Пользователь admin авторизировался.','2013-09-11 18:24:53','login-success'),(105,15,'128.70.141.44','Пользователь Sarvin авторизировался.','2013-09-11 20:20:32','login-success'),(106,15,'128.70.141.44','Пользователь Sarvin авторизировался.','2013-09-11 22:00:35','login-success'),(107,2,'188.16.152.205','Пользователь zyets авторизировался.','2013-09-12 09:01:46','login-success'),(108,2,'188.16.152.205','Пользователь zyets авторизировался.','2013-09-12 09:44:30','login-success'),(109,8,'188.186.96.111','Пользователь rostixman авторизировался.','2013-09-12 11:23:58','login-success'),(110,15,'5.1.53.3','Пользователь Sarvin авторизировался.','2013-09-12 13:21:48','login-success'),(111,1,'188.16.152.205','Пользователь admin авторизировался.','2013-09-12 15:54:38','login-success'),(112,15,'188.16.152.205','Пользователь Sarvin авторизировался.','2013-09-12 15:55:06','login-success'),(113,15,'188.16.152.205','Пользователь Sarvin авторизировался.','2013-09-12 19:13:07','login-success'),(114,2,'31.163.87.204','Пользователь zyets авторизировался.','2013-09-13 08:44:19','login-success'),(115,2,'31.163.87.204','Пользователь zyets авторизировался.','2013-09-13 08:46:45','login-success'),(116,2,'31.163.87.204','Пользователь zyets авторизировался.','2013-09-13 09:01:38','login-success'),(117,1,'31.163.87.204','Пользователь admin авторизировался.','2013-09-13 09:09:56','login-success'),(118,2,'31.163.87.204','Пользователь zyets авторизировался.','2013-09-13 10:44:14','login-success'),(119,1,'31.163.87.204','Пользователь admin авторизировался.','2013-09-13 13:37:37','login-success'),(120,15,'128.70.141.44','Пользователь Sarvin авторизировался.','2013-09-13 18:42:44','login-success'),(121,2,'31.163.87.204','Пользователь zyets авторизировался.','2013-09-13 19:15:30','login-success'),(122,15,'128.70.141.44','Пользователь Sarvin авторизировался.','2013-09-13 21:06:20','login-success'),(123,15,'87.254.145.79','Пользователь Sarvin авторизировался.','2013-09-15 00:18:59','login-success'),(124,15,'87.254.145.79','Пользователь Sarvin авторизировался.','2013-09-15 16:17:48','login-success'),(125,8,'5.140.203.193','Пользователь rostixman авторизировался.','2013-09-16 12:28:43','login-success'),(126,13,'5.140.203.193','Пользователь petruhaxi авторизировался.','2013-09-16 12:28:44','login-success'),(127,15,'87.254.145.79','Пользователь Sarvin авторизировался.','2013-09-16 18:06:52','login-success'),(128,16,'188.186.39.199','Пользователь prioritet авторизировался.','2013-09-17 05:34:38','login-success'),(129,16,'188.186.39.199','Пользователь prioritet авторизировался.','2013-09-17 05:34:44','login-success'),(130,2,'5.140.203.193','Пользователь zyets авторизировался.','2013-09-17 11:05:24','login-success'),(131,13,'37.79.149.55','Пользователь petruhaxi авторизировался.','2013-09-17 14:21:01','login-success'),(132,13,'37.79.149.55','Пользователь petruhaxi авторизировался.','2013-09-17 14:21:05','login-success'),(133,2,'37.79.149.55','Пользователь zyets авторизировался.','2013-09-17 15:02:58','login-success'),(134,17,'37.79.149.55','Пользователь alexro72 авторизировался.','2013-09-17 15:06:14','login-success'),(135,2,'188.186.81.5','Пользователь zyets авторизировался.','2013-09-17 15:24:56','login-success'),(136,1,'37.79.149.55','Пользователь admin авторизировался.','2013-09-17 17:11:02','login-success'),(137,2,'37.79.149.55','Пользователь zyets авторизировался.','2013-09-18 10:25:31','login-success'),(138,2,'37.79.149.55','Пользователь zyets авторизировался.','2013-09-18 11:31:02','login-success'),(139,1,'31.163.61.48','Пользователь admin авторизировался.','2013-09-18 16:31:44','login-success'),(140,17,'188.186.20.32','Пользователь alexro72 авторизировался.','2013-09-19 00:39:59','login-success'),(141,17,'90.150.255.228','Пользователь alexro72 авторизировался.','2013-09-19 12:36:49','login-success'),(142,13,'90.150.255.228','Пользователь petruhaxi авторизировался.','2013-09-19 12:37:14','login-success'),(143,8,'188.186.102.71','Пользователь rostixman авторизировался.','2013-09-19 21:25:08','login-success'),(144,2,'5.140.148.47','Пользователь zyets авторизировался.','2013-09-22 11:42:18','login-success'),(145,2,'90.150.253.59','Пользователь zyets авторизировался.','2013-09-23 10:27:21','login-success'),(146,2,'188.186.7.136','Пользователь zyets авторизировался.','2013-09-23 11:26:17','login-success'),(147,2,'188.186.7.136','Пользователь zyets авторизировался.','2013-09-23 14:54:38','login-success'),(148,2,'188.186.7.136','Пользователь zyets авторизировался.','2013-09-23 16:12:10','login-success'),(149,16,'5.140.203.2','Пользователь prioritet авторизировался.','2013-09-23 17:54:49','login-success'),(150,2,'5.140.203.2','Пользователь zyets авторизировался.','2013-09-24 12:23:56','login-success'),(151,8,'5.140.203.194','Пользователь rostixman авторизировался.','2013-09-24 12:39:58','login-success'),(152,2,'5.140.203.194','Пользователь zyets авторизировался.','2013-09-24 16:16:21','login-success'),(153,2,'5.140.203.194','Пользователь zyets авторизировался.','2013-09-25 10:08:54','login-success'),(154,2,'5.140.203.68','Пользователь zyets авторизировался.','2013-09-25 15:40:22','login-success'),(155,16,'188.186.18.12','Пользователь prioritet авторизировался.','2013-09-25 19:22:28','login-success'),(156,8,'188.186.102.71','Пользователь rostixman авторизировался.','2013-09-26 01:07:24','login-success'),(157,2,'5.140.203.65','Пользователь zyets авторизировался.','2013-09-26 10:03:11','login-success'),(158,2,'5.140.203.65','Пользователь zyets авторизировался.','2013-09-26 15:28:33','login-success'),(159,8,'188.186.48.20','Пользователь rostixman авторизировался.','2013-09-27 22:00:03','login-success'),(160,8,'188.186.48.20','Пользователь rostixman авторизировался.','2013-09-30 14:20:53','login-success'),(161,13,'90.150.243.204','Пользователь petruhaxi авторизировался.','2013-09-30 17:42:43','login-success'),(162,1,'188.186.100.239','Пользователь admin авторизировался.','2013-10-01 00:09:10','login-success'),(163,17,'37.79.159.196','Пользователь alexro72 авторизировался.','2013-10-01 12:35:23','login-success'),(164,1,'37.79.159.196','Пользователь admin авторизировался.','2013-10-01 13:57:10','login-success'),(165,17,'5.140.203.130','Пользователь alexro72 авторизировался.','2013-10-01 18:10:48','login-success'),(166,17,'5.140.203.130','Пользователь alexro72 авторизировался.','2013-10-01 18:10:50','login-success'),(167,17,'31.163.75.111','Пользователь alexro72 авторизировался.','2013-10-02 16:35:16','login-success'),(168,17,'37.228.114.210','Пользователь alexro72 авторизировался.','2013-10-02 20:41:31','login-success'),(169,17,'5.140.202.129','Пользователь alexro72 авторизировался.','2013-10-03 16:42:28','login-success'),(170,16,'5.140.202.129','Пользователь prioritet авторизировался.','2013-10-03 17:38:20','login-success'),(171,13,'31.163.90.1','Пользователь petruhaxi авторизировался.','2013-10-04 19:28:39','login-success'),(172,13,'31.163.90.1','Пользователь petruhaxi авторизировался.','2013-10-04 19:28:40','login-success'),(173,16,'188.186.88.136','Пользователь prioritet авторизировался.','2013-10-07 16:11:12','login-success'),(174,16,'188.186.83.228','Пользователь prioritet авторизировался.','2013-10-08 22:09:24','login-success'),(175,8,'31.163.57.52','Пользователь rostixman авторизировался.','2013-10-09 16:18:01','login-success'),(176,1,'5.140.203.8','Пользователь admin авторизировался.','2013-10-10 19:29:44','login-success'),(177,16,'188.186.87.188','Пользователь prioritet авторизировался.','2013-10-11 11:58:09','login-success'),(178,16,'188.186.87.188','Пользователь prioritet авторизировался.','2013-10-13 13:39:33','login-success'),(179,1,'188.186.60.44','Пользователь admin авторизировался.','2013-10-15 02:46:57','login-success'),(180,1,'31.163.58.139','Пользователь admin авторизировался.','2013-10-15 10:40:14','login-success'),(181,16,'188.186.55.37','Пользователь prioritet авторизировался.','2013-10-18 17:30:27','login-success'),(182,2,'31.163.126.51','Пользователь zyets авторизировался.','2013-10-29 12:12:56','login-success'),(183,2,'5.140.202.65','Пользователь zyets авторизировался.','2013-10-29 15:54:30','login-success'),(184,2,'5.140.202.65','Пользователь zyets авторизировался.','2013-10-31 17:09:17','login-success'),(185,2,'5.140.202.65','Пользователь zyets авторизировался.','2013-10-31 18:41:28','login-success'),(186,2,'5.140.202.65','Пользователь zyets авторизировался.','2013-10-31 20:43:11','login-success'),(187,2,'5.140.203.65','Пользователь zyets авторизировался.','2013-11-01 15:14:25','login-success'),(188,2,'5.140.203.65','Пользователь zyets авторизировался.','2013-11-01 15:15:06','login-success'),(189,2,'5.140.203.65','Пользователь zyets авторизировался.','2013-11-01 18:06:02','login-success'),(190,16,'77.242.109.1','Пользователь prioritet авторизировался.','2013-11-02 13:35:51','login-success'),(191,2,'178.47.163.216','Пользователь zyets авторизировался.','2013-11-05 18:17:12','login-success'),(192,16,'176.214.255.26','Пользователь prioritet авторизировался.','2013-11-07 23:33:44','login-success'),(193,2,'5.140.202.65','Пользователь zyets авторизировался.','2013-11-08 14:25:44','login-success'),(194,2,'178.47.162.18','Пользователь zyets авторизировался.','2013-11-11 19:37:16','login-success'),(195,2,'178.47.162.18','Пользователь zyets авторизировался.','2013-11-12 11:06:13','login-success'),(196,2,'178.47.162.18','Пользователь zyets авторизировался.','2013-11-12 14:48:27','login-success'),(197,2,'5.140.152.120','Пользователь zyets авторизировался.','2013-11-12 15:55:58','login-success'),(198,2,'5.140.152.120','Пользователь zyets авторизировался.','2013-11-12 16:22:01','login-success'),(199,2,'5.140.152.120','Пользователь zyets авторизировался.','2013-11-12 17:15:19','login-success'),(200,2,'5.140.152.120','Пользователь zyets авторизировался.','2013-11-13 09:59:16','login-success'),(201,2,'5.140.203.65','Пользователь zyets авторизировался.','2013-11-13 15:59:45','login-success'),(202,2,'37.79.148.251','Пользователь zyets авторизировался.','2013-11-14 10:15:40','login-success'),(203,1,'37.79.148.251','Пользователь admin авторизировался.','2013-11-14 10:21:09','login-success'),(204,1,'37.79.148.251','Пользователь admin авторизировался.','2013-11-14 10:21:09','login-success'),(205,17,'31.163.123.63','Пользователь alexro72 авторизировался.','2013-11-14 16:47:14','login-success'),(206,17,'31.163.123.63','Пользователь alexro72 авторизировался.','2013-11-14 17:00:43','login-success'),(207,2,'5.140.203.68','Пользователь zyets авторизировался.','2013-11-15 12:19:32','login-success'),(208,2,'5.140.203.68','Пользователь zyets авторизировался.','2013-11-15 15:36:23','login-success'),(209,2,'5.140.202.68','Пользователь zyets авторизировался.','2013-11-15 16:52:08','login-success'),(210,2,'37.79.156.223','Пользователь zyets авторизировался.','2013-11-18 11:31:12','login-success'),(211,2,'37.79.156.223','Пользователь zyets авторизировался.','2013-11-18 12:13:11','login-success'),(212,2,'37.79.156.223','Пользователь zyets авторизировался.','2013-11-18 17:21:53','login-success'),(213,2,'37.79.156.223','Пользователь zyets авторизировался.','2013-11-18 17:23:55','login-success'),(214,2,'5.140.203.5','Пользователь zyets авторизировался.','2013-11-19 16:57:15','login-success'),(215,2,'5.140.202.195','Пользователь zyets авторизировался.','2013-11-21 11:50:45','login-success'),(216,8,'5.1.53.3','Пользователь rostixman авторизировался.','2013-11-26 19:11:38','login-success'),(217,16,'109.194.165.177','Пользователь prioritet авторизировался.','2013-11-28 22:59:36','login-success'),(218,16,'90.151.90.162','Пользователь prioritet авторизировался.','2013-11-28 23:01:16','login-success'),(219,2,'5.140.202.3','Пользователь zyets авторизировался.','2013-11-29 10:16:28','login-success'),(220,8,'188.186.79.132','Пользователь rostixman авторизировался.','2013-11-30 21:37:16','login-success'),(221,13,'188.18.207.29','Пользователь petruhaxi авторизировался.','2013-12-01 19:31:09','login-success'),(222,2,'188.186.17.38','Пользователь zyets авторизировался.','2013-12-02 09:59:20','login-success'),(223,2,'31.163.33.87','Пользователь zyets авторизировался.','2013-12-03 12:16:55','login-success'),(224,2,'31.163.91.217','Пользователь zyets авторизировался.','2013-12-13 16:56:15','login-success'),(225,2,'31.163.91.217','Пользователь zyets авторизировался.','2013-12-13 18:58:00','login-success'),(226,2,'31.163.43.114','Пользователь zyets авторизировался.','2013-12-16 14:28:42','login-success'),(227,2,'5.140.203.92','Пользователь zyets авторизировался.','2013-12-31 09:32:24','login-success'),(228,2,'37.79.153.42','Пользователь zyets авторизировался.','2014-01-17 17:59:21','login-success'),(229,2,'5.140.203.250','Пользователь zyets авторизировался.','2014-01-21 17:36:20','login-success'),(230,2,'5.140.203.48','Пользователь zyets авторизировался.','2014-01-31 10:14:34','login-success'),(231,2,'5.140.153.239','Пользователь zyets авторизировался.','2014-02-03 09:45:43','login-success'),(232,2,'5.140.153.239','Пользователь zyets авторизировался.','2014-02-03 11:37:53','login-success'),(233,2,'5.140.153.239','Пользователь zyets авторизировался.','2014-02-03 14:04:11','login-success'),(234,2,'5.140.203.228','Пользователь zyets авторизировался.','2014-02-04 18:09:40','login-success'),(235,2,'5.140.203.180','Пользователь zyets авторизировался.','2014-02-10 16:32:28','login-success'),(236,2,'5.140.203.180','Пользователь zyets авторизировался.','2014-02-11 10:13:02','login-success'),(237,2,'5.140.203.198','Пользователь zyets авторизировался.','2014-02-12 11:19:30','login-success'),(238,2,'5.140.203.35','Пользователь zyets авторизировался.','2014-02-12 17:37:41','login-success'),(239,2,'37.79.159.222','Пользователь zyets авторизировался.','2014-02-13 09:22:57','login-success'),(240,2,'213.87.248.10','Пользователь zyets авторизировался.','2014-02-13 13:57:39','login-success'),(241,2,'5.140.202.248','Пользователь zyets авторизировался.','2014-02-13 18:12:17','login-success'),(242,16,'188.186.34.107','Пользователь prioritet авторизировался.','2014-02-14 04:26:20','login-success'),(243,2,'5.140.203.49','Пользователь zyets авторизировался.','2014-02-17 11:19:26','login-success'),(244,2,'31.163.56.11','Пользователь zyets авторизировался.','2014-02-24 09:54:19','login-success'),(245,2,'31.163.56.11','Пользователь zyets авторизировался.','2014-02-24 11:10:07','login-success'),(246,2,'5.140.203.175','Пользователь zyets авторизировался.','2014-02-24 11:43:59','login-success'),(247,2,'5.140.203.120','Пользователь zyets авторизировался.','2014-02-24 13:44:46','login-success'),(248,2,'31.163.50.62','Пользователь zyets авторизировался.','2014-02-26 09:55:10','login-success'),(249,2,'5.140.203.180','Пользователь zyets авторизировался.','2014-02-27 10:52:39','login-success'),(250,2,'31.163.74.191','Пользователь zyets авторизировался.','2014-02-28 11:41:15','login-success'),(251,2,'31.163.74.191','Пользователь zyets авторизировался.','2014-02-28 13:24:00','login-success'),(252,2,'5.140.203.52','Пользователь zyets авторизировался.','2014-03-03 09:43:29','login-success'),(253,2,'5.140.203.52','Пользователь zyets авторизировался.','2014-03-03 09:48:54','login-success'),(254,2,'5.140.203.198','Пользователь zyets авторизировался.','2014-03-03 16:55:17','login-success'),(255,2,'31.163.46.225','Пользователь zyets авторизировался.','2014-03-05 10:14:36','login-success'),(256,2,'31.163.46.225','Пользователь zyets авторизировался.','2014-03-05 11:24:04','login-success'),(257,2,'31.163.46.225','Пользователь zyets авторизировался.','2014-03-05 14:26:08','login-success'),(258,18,'31.163.46.225','Пользователь prioritet авторизировался.','2014-03-05 14:27:51','login-success'),(259,2,'188.16.152.101','Пользователь zyets авторизировался.','2014-03-06 10:48:43','login-success'),(260,2,'5.140.202.163','Пользователь zyets авторизировался.','2014-03-12 16:47:44','login-success'),(261,2,'5.140.202.80','Пользователь zyets авторизировался.','2014-03-13 10:13:32','login-success'),(262,2,'5.140.202.221','Пользователь zyets авторизировался.','2014-03-14 15:31:45','login-success'),(263,18,'188.186.30.8','Пользователь prioritet авторизировался.','2014-03-16 23:01:06','login-success'),(264,2,'5.140.202.55','Пользователь zyets авторизировался.','2014-03-17 10:33:15','login-success'),(265,2,'5.140.202.38','Пользователь zyets авторизировался.','2014-03-17 18:36:07','login-success'),(266,18,'5.140.202.38','Пользователь prioritet авторизировался.','2014-03-18 11:46:10','login-success'),(267,2,'5.140.202.55','Пользователь zyets авторизировался.','2014-04-04 09:43:46','login-success'),(268,2,'5.141.239.189','Пользователь zyets авторизировался.','2014-04-07 09:40:02','login-success'),(269,2,'5.141.237.251','Пользователь zyets авторизировался.','2014-04-10 14:30:46','login-success'),(270,2,'5.140.202.205','Пользователь zyets авторизировался.','2014-04-12 13:38:26','login-success'),(271,2,'5.140.202.205','Пользователь zyets авторизировался.','2014-04-12 15:26:45','login-success'),(272,2,'5.140.202.109','Пользователь zyets авторизировался.','2014-04-15 16:00:51','login-success'),(273,2,'5.141.237.10','Пользователь zyets авторизировался.','2014-04-16 13:49:12','login-success'),(274,2,'5.141.237.10','Пользователь zyets авторизировался.','2014-04-16 15:59:43','login-success'),(275,2,'5.141.239.53','Пользователь zyets авторизировался.','2014-04-17 09:29:41','login-success'),(276,2,'5.140.203.233','Пользователь zyets авторизировался.','2014-04-17 18:15:33','login-success'),(277,2,'5.140.202.106','Пользователь zyets авторизировался.','2014-04-19 13:51:45','login-success'),(278,2,'5.141.237.111','Пользователь zyets авторизировался.','2014-04-22 11:18:44','login-success'),(279,2,'5.141.237.94','Пользователь zyets авторизировался.','2014-04-23 14:20:33','login-success'),(280,2,'5.141.236.10','Пользователь zyets авторизировался.','2014-04-24 12:08:16','login-success'),(281,18,'5.140.202.40','Пользователь prioritet авторизировался.','2014-04-30 16:51:29','login-success'),(282,2,'5.141.239.169','Пользователь zyets авторизировался.','2014-05-07 09:33:02','login-success'),(283,2,'5.141.237.248','Пользователь zyets авторизировался.','2014-05-07 12:34:28','login-success'),(284,2,'5.141.237.124','Пользователь zyets авторизировался.','2014-05-08 13:52:30','login-success'),(285,2,'5.141.237.124','Пользователь zyets авторизировался.','2014-05-08 15:52:35','login-success'),(286,2,'5.140.202.254','Пользователь zyets авторизировался.','2014-05-12 17:05:05','login-success'),(287,2,'5.141.239.175','Пользователь zyets авторизировался.','2014-05-21 12:45:25','login-success'),(288,18,'5.140.202.182','Пользователь prioritet авторизировался.','2014-06-06 12:01:36','login-success'),(289,2,'5.140.202.182','Пользователь zyets авторизировался.','2014-06-06 13:14:36','login-success'),(290,2,'5.140.202.182','Пользователь zyets авторизировался.','2014-06-06 13:30:06','login-success'),(291,18,'188.186.24.54','Пользователь prioritet авторизировался.','2014-06-09 18:46:00','login-success'),(292,2,'5.140.202.144','Пользователь zyets авторизировался.','2014-06-09 18:50:01','login-success'),(293,18,'188.186.82.254','Пользователь prioritet авторизировался.','2014-06-12 05:37:47','login-success'),(294,18,'188.186.105.65','Пользователь prioritet авторизировался.','2014-06-22 23:07:59','login-success'),(295,18,'5.140.202.167','Пользователь prioritet авторизировался.','2014-06-25 17:45:42','login-success'),(296,18,'188.186.37.107','Пользователь prioritet авторизировался.','2014-06-26 13:44:07','login-success'),(297,2,'5.141.237.109','Пользователь zyets авторизировался.','2014-06-27 11:20:46','login-success'),(298,18,'92.255.160.145','Пользователь prioritet авторизировался.','2014-06-29 00:25:17','login-success'),(299,2,'5.141.239.111','Пользователь zyets авторизировался.','2014-06-30 16:45:28','login-success'),(300,18,'5.140.202.235','Пользователь prioritet авторизировался.','2014-07-04 13:10:55','login-success'),(301,18,'188.186.167.52','Пользователь prioritet авторизировался.','2014-08-01 02:35:05','login-success'),(302,18,'188.186.167.52','Пользователь prioritet авторизировался.','2014-08-02 10:58:44','login-success'),(303,2,'5.141.239.183','Пользователь zyets авторизировался.','2014-08-20 16:37:58','login-success'),(304,18,'217.118.91.112','Пользователь prioritet авторизировался.','2014-09-19 11:08:46','login-success'),(305,18,'217.118.91.118','Пользователь prioritet авторизировался.','2014-09-19 13:11:54','login-success'),(306,18,'5.140.202.126','Пользователь prioritet авторизировался.','2014-09-19 15:51:00','login-success'),(307,18,'5.140.202.126','Пользователь prioritet авторизировался.','2014-09-19 16:01:51','login-success'),(308,18,'217.118.91.78','Пользователь prioritet авторизировался.','2014-09-19 16:07:43','login-success'),(309,18,'217.118.91.78','Пользователь prioritet авторизировался.','2014-09-19 16:12:47','login-success'),(310,18,'5.141.235.172','Пользователь prioritet авторизировался.','2014-10-06 12:54:46','login-success'),(311,18,'188.186.28.14','Пользователь prioritet авторизировался.','2015-02-04 00:19:19','login-success'),(312,18,'5.141.238.115','Пользователь prioritet авторизировался.','2015-02-11 13:51:18','login-success'),(313,18,'188.186.20.18','Пользователь prioritet авторизировался.','2015-03-01 18:26:13','login-success'),(314,18,'188.186.92.42','Пользователь prioritet авторизировался.','2015-03-03 01:15:42','login-success'),(315,18,'188.186.84.57','Пользователь prioritet авторизировался.','2015-03-04 00:56:59','login-success'),(316,18,'188.186.76.20','Пользователь prioritet авторизировался.','2015-03-04 22:31:59','login-success'),(317,18,'188.17.116.178','Пользователь prioritet авторизировался.','2015-03-26 13:13:52','login-success'),(318,21,'188.17.116.178','Пользователь test авторизировался.','2015-03-26 13:15:05','login-success'),(319,21,'188.186.86.168','Пользователь test авторизировался.','2015-03-26 13:17:02','login-success'),(320,21,'188.17.116.178','Пользователь test авторизировался.','2015-03-26 14:46:04','login-success'),(321,21,'92.255.170.31','Пользователь test авторизировался.','2015-03-30 08:27:30','login-success'),(322,21,'92.255.170.31','Пользователь test авторизировался.','2015-03-30 08:40:09','login-success'),(323,18,'89.204.75.248','Пользователь prioritet авторизировался.','2015-04-21 11:26:15','login-success'),(324,18,'178.47.168.219','Пользователь prioritet авторизировался.','2015-04-24 19:53:38','login-success'),(325,18,'178.47.184.166','Пользователь prioritet авторизировался.','2015-06-08 15:34:54','login-success');
/*!40000 ALTER TABLE `pr_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_menu`
--

DROP TABLE IF EXISTS `pr_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(250) NOT NULL,
  `menu_name` varchar(250) NOT NULL,
  `menu_active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_menu`
--

LOCK TABLES `pr_menu` WRITE;
/*!40000 ALTER TABLE `pr_menu` DISABLE KEYS */;
INSERT INTO `pr_menu` VALUES (1,'Главное меню','mainmenu',1);
/*!40000 ALTER TABLE `pr_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_menu_items`
--

DROP TABLE IF EXISTS `pr_menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_menu_items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_title` varchar(250) NOT NULL DEFAULT '',
  `item_node` int(11) NOT NULL DEFAULT '0',
  `item_url` varchar(250) NOT NULL DEFAULT '',
  `item_parent` int(11) NOT NULL DEFAULT '0',
  `item_menu` int(11) NOT NULL DEFAULT '0',
  `item_img` varchar(250) DEFAULT '',
  `item_active` int(11) NOT NULL DEFAULT '1',
  `item_sort` int(11) NOT NULL DEFAULT '500',
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_menu_items`
--

LOCK TABLES `pr_menu_items` WRITE;
/*!40000 ALTER TABLE `pr_menu_items` DISABLE KEYS */;
INSERT INTO `pr_menu_items` VALUES (1,'Главная',1,'',0,1,'',1,3),(2,'тест',0,'',1,1,'',1,1),(6,'zxc',0,'http://qweqwe.ru',1,1,'',1,2),(20,'qweqweqwe',4,'',19,1,NULL,1,500),(18,'тест',45,'',0,1,NULL,1,2),(19,'Каталог',43,'',0,1,NULL,1,1),(21,'Test',7,'',0,1,NULL,1,4);
/*!40000 ALTER TABLE `pr_menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_nodes`
--

DROP TABLE IF EXISTS `pr_nodes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_nodes` (
  `node_id` int(11) NOT NULL AUTO_INCREMENT,
  `node_title` varchar(250) NOT NULL,
  `node_url` varchar(250) NOT NULL,
  `node_component` int(11) NOT NULL,
  `node_parent` int(11) NOT NULL,
  `node_active` int(11) NOT NULL DEFAULT '1',
  `node_sort` int(11) NOT NULL DEFAULT '500',
  `node_seo_title` varchar(250) NOT NULL,
  `node_seo_description` text NOT NULL,
  `node_seo_keywords` text NOT NULL,
  `node_createdate` datetime NOT NULL,
  `node_modifieddate` datetime NOT NULL,
  `node_childs` int(11) NOT NULL DEFAULT 0,
  `node_image` varchar(250) NOT NULL,
  `node_description` text NOT NULL,
  PRIMARY KEY (`node_id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_nodes`
--

LOCK TABLES `pr_nodes` WRITE;
/*!40000 ALTER TABLE `pr_nodes` DISABLE KEYS */;
INSERT INTO `pr_nodes` VALUES (1,'Главная','root',2,0,1,1,'','','','0000-00-00 00:00:00','2014-04-04 09:44:17',0,'',''),(3,'Страница не найдена','404',2,1,1,2,'','','','0000-00-00 00:00:00','2013-10-31 17:09:31',0,'',''),(2,'Административная панель','admin',1,1,1,500,'','','','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'',''),(6,'Карта сайта','sitemap',3,1,0,4,'','','','2013-02-17 22:23:51','2013-10-31 17:09:31',0,'',''),(7,'Обратная связь','feedback',4,1,1,3,'','','','2013-02-17 22:25:32','2014-02-27 18:05:13',0,'',''),(69,'Eng version','en',2,1,1,500,'','','','2015-04-24 19:54:09','2015-04-24 19:54:09',0,'',''),(70,'Обратная связь [en]','feedback-en',4,1,1,500,'','','','2015-04-27 11:44:39','2015-04-27 11:45:20',0,'',''),(46,'Привет','privet',2,4,1,12,'','','','2013-09-05 17:54:40','2014-02-13 11:42:26',0,'',''),(68,'Слайдер','slajder',5,1,0,500,'','','','2015-04-21 15:09:43','2015-04-21 15:09:43',0,'','Hook \"slider\"'),(67,'Социальные сети','socialnye-seti',5,1,0,500,'','','','2015-04-21 13:18:15','2015-04-21 13:18:15',0,'','Hook \"social\"');
/*!40000 ALTER TABLE `pr_nodes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_sessions`
--

DROP TABLE IF EXISTS `pr_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_sessions` (
  `session_id` int(11) NOT NULL AUTO_INCREMENT,
  `session_uid` varchar(250) NOT NULL,
  `session_user` int(11) NOT NULL,
  `session_time` int(11) NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM AUTO_INCREMENT=411 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_sessions`
--

LOCK TABLES `pr_sessions` WRITE;
/*!40000 ALTER TABLE `pr_sessions` DISABLE KEYS */;
INSERT INTO `pr_sessions` VALUES (3,'8084af40d37896845fd3a462b07cbf1d',1,1361768349),(4,'899b12ce45ec26756c7d06ed098a1dd2',1,1361772402),(5,'f7dbc8a5593d7b8b9993f1af767e7d7d',1,1361856850),(6,'1ed13bbc477c5a2edb027bc0c11457ed',1,1361863534),(8,'eb1450dca1f8db5bc64560d866f404a5',1,1361969498),(9,'507a7fe9fb63e3779fe318ada07e39b4',1,1361980151),(10,'742d882230706cd2372780da1712639e',1,1362074702),(11,'16b3caa8e8b19d653b43a458386c55e5',1,1362117533),(13,'b419be40b7385100710e091ff1be2d4d',1,1362125218),(14,'90242c156cee53f47d8e8d35b626cdf4',1,1362386331),(15,'83bd74cc53e67f84c53231c029abb15e',1,1362404900),(16,'dc9298386057b05e885274fb02a450b9',1,1362466447),(17,'5e18ef9d99132cb5f9249c1d186072a8',1,1362488897),(18,'eb1f81c0677d736f1066f02efd564094',1,1362565358),(19,'b37907cbb98b8ffec88091aaa878b234',1,1363249115),(20,'3755b0289f385430bc97f9db13e93e0a',1,1363280001),(21,'b5afaed47a895f170a6712d67013b118',1,1363325529),(22,'2ff11386473d7382cb62a5ae10bb0ef9',1,1363583963),(23,'192286916b4d017550f49819c57777c0',1,1363595007),(24,'362f47d8bbffbe97cb10d972981af9f2',1,1363609446),(25,'21932f69840d565cc3dc4f344e2c7763',1,1363674375),(26,'0001c07ab54af82bd4b9a0cf44fda075',1,1363700470),(27,'e087e6fa967b30b6cfdb145d29ff5b62',1,1363837417),(28,'66d1256f94156d59f9bf3536db55cf0f',1,1363869428),(29,'65c92c016cc7acec3102b25e6721d452',1,1364227681),(30,'bba219e8f66d25789393e3d17f741c3c',1,1364355861),(31,'c609627cace2b6b8d5647a8c0eaf7d39',1,1365083353),(32,'19befcac640699ca4f015db1015285d9',1,1365763977),(33,'c34732a0043b5bfd2532bf89d84d857c',1,1366257278),(34,'12f36671e93f33636c357e1877ef358f',1,1366348421),(35,'f657db874a2ba24792bded49f6d059f4',1,1367229983),(37,'5d0eb9f4dda561d516ba3b1fe950ec0f',1,1368706460),(38,'66dd3b0c6d71122975b8180e2ca7e802',1,1370835318),(39,'cc2eafc31c713811215355b4507f15fd',2,1371557148),(40,'c2ebc7ac7267713272ee37281d93eb4a',2,1371706871),(41,'4dd878520762aab5ec220209cea8c3f3',2,1371789423),(42,'076b24fcf06a1440f3b66fb971eca7ee',2,1371796598),(43,'696735983aed3806cdc6082d59984913',2,1372074329),(44,'3503cc682cb1cb1c05b209c765f3652f',2,1372160378),(45,'79dfa1b39c508cb12fa642c253d22adb',2,1372228545),(46,'37aefeaa5f837d69965900d839b5fd83',2,1372229248),(47,'d190ce796ab7f596f1525c8b6a9455b9',2,1372256085),(49,'20dc153cb23f512608a4076ca945764d',2,1372307630),(50,'718682d7b861713b848d4798bbd45e8e',2,1372313396),(51,'397f09523bdeeed4affb717f9f95db2a',2,1372323494),(52,'8465ecfddf87885bb2c38ccc6868e7e0',2,1372335123),(53,'ea1c039e21a4ac2678f98889e80810a3',2,1372340689),(54,'b0bf69a62437ad0fcff9e864b4ec30cd',2,1372393365),(55,'9ccb213a24ff6621a3522a12e34cc098',2,1372427073),(56,'608b8807bb22cbd7b36d0450c019fd61',2,1372753558),(57,'df4bc1987babdaf4effd8cbfb2d922ae',2,1372917050),(58,'0c33335023eb62337783e1e4c7bce62e',2,1372927479),(59,'173bf5c56aefad8c68548f5471b7d791',2,1373540545),(60,'6e5cb09c58ef09dedebe59f3f9420765',2,1373603989),(61,'feeae7895d5be30249eb36cb78ea8355',2,1373609534),(62,'9822e57921bcf96b2a168c25eaf19575',2,1373623864),(63,'059dd7ce8eb5c0da088f553d62ea9ab7',2,1373636840),(66,'efca9f4faa9956dff3682eba3a8f5b75',2,1373718050),(67,'46629a71d3ce8818408b3eaf4b3a1f7c',2,1373781594),(68,'326bbd935414d87a26978a325981dc9b',2,1373871111),(69,'b3bbb47729405e04383ec177f7e774bf',2,1373954976),(70,'9c3f33a0332919c3a1aa203365681845',1,1373977939),(71,'e48d1df381d465e99d1194abdbe4d59b',2,1374217534),(72,'b1b61ebc9146d22cc40eac262b27460a',2,1374309112),(73,'3cd9fa6131e467e25b6207d09a9e6dbe',2,1374471800),(74,'3540e37b78add48fd21a37a0415fc127',2,1374475315),(75,'a182f545344ba0d2d97ae53c578d12ca',2,1374485819),(76,'750846bf04ff62b534194f48b0f70ddb',2,1374559921),(77,'7cc8762fead3f23667ae9952bda29d01',1,1374573026),(78,'d3496801cca85eff9b8f453dda3f2a26',1,1374585025),(79,'04c67e4f1ce3d467debf59918f0d422f',1,1374585544),(88,'1abb47b39399b9b58f9e939c2041478e',1,1374645835),(89,'f1d547496b33e45e367f553a79e4f12a',2,1374647168),(90,'b97fe3b09572c81bddbf2b2deec0e771',1,1374652394),(91,'47177ab9d3012fc9afb4f560a3aeedaa',2,1374657387),(92,'b6ff8071210510659fb990dc9df4103e',1,1374658854),(93,'2a4209c1ab3ffddbb0c8869c45b74317',2,1374666679),(94,'e3062029a877af7eaa490743d909260c',1,1374669838),(95,'cdef13f89b640ce2bbae3d7b90080930',1,1374669976),(96,'99c53eca472e10d3d6446c690f4bc052',2,1374671846),(97,'8a8cac7d6cfe17e92bb1340df6491a3f',1,1374728979),(99,'c067af0eb641f0726ed882422d1fdd46',2,1374747252),(100,'1d3f20403382b75bf61d02f148b5b120',2,1374753821),(101,'66987ea9d12530af7d951e3ba5620ad4',1,1374767980),(102,'9d6c1950606289cbdc9947ae2a19bafe',1,1374811922),(103,'af4c95bf9faffcbe73eca8084cf3d588',2,1374816131),(104,'6b2009da09b39447f38007b9cf0887be',1,1375081159),(105,'146c1cf50925bce386f814f050a65f80',1,1375086702),(106,'db8914ac2633ad0181599ccf6adb0248',1,1375113914),(107,'af9e28a680585923a85522ed08dbe4ef',1,1375168464),(108,'2a7c28664e5c8e2ba8e3c1fec0f93004',1,1375177274),(109,'97d1beb380e04ebb33d83a7faf7f2fde',1,1375188441),(110,'f3a9a6dc9a2c58304dc872ceb0b389a0',8,1375348325),(111,'bd8a9e166a0dcf4097148a596b62b3fb',8,1375388425),(112,'f34385c9157bd2f893f4b759bc92a40b',8,1375604583),(113,'44d494309e91c70259ff32cc75ac8ebe',1,1375854279),(114,'fe40b44eb4b90da94187b44fe3671398',2,1375868097),(115,'edb0f6ce450da69c998ecee697286fa5',2,1375869011),(116,'4919509ebe23f7d91d2a5bf26a833d0d',8,1375882504),(117,'1e61cbf6e2825166ab4cb4c2726a866e',8,1375958188),(118,'5aee73e818d724ecec40fcf01453d4c9',2,1375959875),(119,'e0806cc909aecdbedc1fb8d4821f524c',2,1376022529),(120,'5a291ef479fb390cbcea0842f2d31d94',8,1376022852),(121,'60b9ddf6369af0d9e0f11b255970259e',1,1376028359),(122,'2fe4a24f63c80d49d0561f7735d61821',1,1376287807),(123,'92addc6770d863c28e2298f63f5c399b',2,1376302403),(124,'bd12dc4011989e1e81f215a93ef28304',2,1376317297),(125,'da90ba6eba4601e90836571418ac05d4',2,1376321938),(126,'6fa0b422823c2b7754c5052cb2ed88a8',2,1376384291),(127,'823cbff2dc5635fdf5db775bca6dd583',8,1376421449),(128,'6172703b555b478282d1127483770d15',2,1376456522),(130,'2f856aa4566d44fbe68595f68c17eeea',2,1376470962),(131,'8eb99a4ad5fa318f5c63c9cfc52c27b5',12,1376474330),(132,'1bb91e656a0595178277be469247a57c',8,1376476491),(134,'62f9161f28be35ee160559687321ae77',12,1376489392),(135,'3abbef8b65c9fb395385330eb8d26d0e',2,1376489451),(136,'52780da0f846bade68fda1220ff6859d',12,1376541744),(137,'86af793197494a0f6effdb3257256f18',2,1376545350),(138,'2edc76649a50e8b58134b3359130b0c1',2,1376549896),(139,'7ee429d8ed6f1548ed95f2f539aabd26',12,1376553587),(140,'6aab7c91c25687124677070001f735f4',2,1376632102),(141,'d05fd9be57e5bb081df4dfe289120a26',8,1376684800),(143,'51d4df44bed567ee7b353954f5103bd2',8,1377022840),(144,'948bdf30dfa09129fea933dc6dde46e7',2,1377156791),(145,'878a83f6c1816317440cb6a1558d5caf',2,1377158474),(146,'beaf3e188ea88986a017ba674bddd207',2,1377159376),(147,'a5363544aebc76a31a2bf58f6e569189',2,1377236976),(148,'4f9bed5d1e9d2f36d1096d9be3e559be',2,1377520579),(149,'c45f3752f1d84f9f58e42466b64d8bb5',8,1377595544),(150,'5b8e046f9f873bfd76d6029389e6f6a5',2,1377671386),(151,'b7c01ef019e473912f9dd50ac7333ac4',2,1377678965),(152,'87a51a8066d6e0f5ec5b30db52053001',1,1377765290),(153,'c3609ea5dcace3b3aa29dabb423c76a4',13,1377778175),(154,'76e6786eace95265598b884f298cfcfb',13,1377842720),(155,'309f1eca191d938834b8ff4d4667b2e7',1,1378125801),(156,'d634a0561a9438e62f8904307b88800f',2,1378131751),(157,'0ab9f32d90b66ce6fc3c4c5aab2b3ff5',8,1378148149),(158,'f2dfcdad3561c6ae0b765dfa5a53049a',1,1378187971),(159,'743516aad65dd18a45bc829b31a1d007',2,1378206527),(160,'0e61a0d437a1ea128a661bfaedf9ef47',1,1378209280),(161,'78696d58fcdd8aff876ffc2f4ec5b333',1,1378270050),(162,'9e9c3ee940c97ba0eff640e7919ce468',2,1378297254),(163,'02566da7f50f19aa12ae1380450a3d73',1,1378355370),(164,'115d724ece52ccea28fe7ca7c4a79425',2,1378358355),(165,'965e0e64b1286a5645c844cb552edba1',2,1378368708),(166,'d530df667367283ec07efda176a5b767',2,1378375168),(167,'c24f801e6521c1cb913836793e21b2b1',1,1378383479),(168,'35a69d0c66513161a9060ea5274a52ad',2,1378384611),(169,'41773944366e6d38f9d62f0ec14aae3b',1,1378400241),(170,'61a7a6c738f170dab8a031cbcf2f1445',8,1378401130),(171,'0cbcadb2396c477fed4f9264d8f795fc',1,1378444438),(172,'0f7bc8a3ca3cca4dcc62140c5da16c09',1,1378446945),(173,'7400bff2265b29f6f4bf7b9514853e43',1,1378448491),(174,'b46504d2515a32c6df50d4e688bc4d70',8,1378665385),(179,'f432511429ead5719691f8ec25126c33',15,1378733232),(176,'a07733a40500bcc59a1fad1fe0609779',2,1378712562),(177,'fc2767e8765be14d1117f1e19cbd9c20',1,1378715440),(178,'d1229a56f6503d7695fa4cd0a4c1139a',2,1378725628),(180,'9fd87e31140dc9b8c303842d02c54414',1,1378745507),(181,'4e531c4614bd3670306188b855f473df',2,1378805203),(182,'d490c41f665bdadce0087a7fb6f11fba',16,1378806799),(183,'ea4f886430483e2db6340f75969ec2b9',1,1378809542),(184,'27f86a332b0881c0b80928cdd0976318',2,1378811557),(185,'ebd201c79e7cb9b5a219e43cc2e20654',2,1378880498),(187,'4006e73d26db950842f5c6cfec0bc9b7',2,1378886986),(188,'f9320efe56b2948db23b6ac7da68101e',1,1378899343),(189,'7610a1d9785bfeda58a53947950b7df5',1,1378909493),(190,'8502b98ed8397d2dead5982e6dc25233',15,1378916432),(191,'1893049f38579d7d1ac9a069ba525ba1',15,1378922435),(192,'51c1165849e9ac6e6a7a9e0921346e88',2,1378962106),(193,'23445726afa79820f8f7b1b9690e03cd',2,1378964669),(194,'4904ce261832cd6811cfe1abad066d48',8,1378970638),(195,'588e61627f34f40d62d503372865121e',15,1378977708),(197,'e976db47877133835eec725fed20c6a4',15,1378986906),(198,'b67f64f98ecf88083100011e4595c871',15,1378998787),(199,'9f0bf7f19a535bc110e1d9fcf35a4385',2,1379047459),(200,'60dca6143b61517ee0d37b06623c177a',2,1379047605),(201,'883133cd54294a70c4df477ac1f8dc6c',2,1379048498),(202,'12e0ffc53fcd0420b37b4df2992f1789',1,1379048996),(203,'c9b0928c27a2472b269d817e41ce3436',2,1379054654),(204,'908afcf28f3afed3d4a3853a4b884cf5',1,1379065057),(205,'0540343d5d33bf9b58022c22e9af012f',15,1379083364),(206,'bc481f1c9e36ce44c2b22f84763aad38',2,1379085330),(207,'35d2eaa7d930db71982a2d85509e70e2',15,1379091980),(208,'f1ef2c1c3fa7acc80ead8fd1458ff4eb',15,1379189938),(209,'a95137ce0b55c0d678efc715e35467c6',15,1379240268),(210,'df8428130b044aa53b147fe43994a42d',8,1379312923),(211,'6ff93fe30f0bdce3fea27a1ecae8b2f1',13,1379312924),(212,'5e2db5329a3839356e2f3ce3424fb398',15,1379333212),(214,'e6673453ed7d2086779684d9217ad770',16,1379374484),(215,'556281277bdd0691176ae9e064a2aabb',2,1379394324),(217,'130c222350fae949e97c856eadecc4b1',13,1379406065),(218,'2689fa5ecc4b73a5f50bc34744fc676d',2,1379408578),(219,'a1425e6dbd907ae31247baf249575921',17,1379408774),(220,'a4532a4f10c27bff2b66b134ed149775',2,1379409896),(221,'b4838121491eae3d6efb44958810b3d6',1,1379416262),(222,'c90d44641d87b28611233a690143c51a',2,1379478331),(223,'5972c68b82a15ff1574da2188c5161b5',2,1379482262),(224,'1d335dacb5fefdcf699c142ee9063074',1,1379500304),(225,'03983041617a93f49e62a982da5e5d18',17,1379529599),(226,'d37bb23bbcdd9cf03293a5412b92f430',17,1379572609),(227,'ca602e09fcf32e72cfc7a1606da64a16',13,1379572634),(228,'f2d256a7c71e3fdd67f347d109cf443e',8,1379604308),(229,'4267fc52cd78f701e12e2478dba34f45',2,1379828538),(230,'1e8f7f35df8e3f62d2a13828457ad972',2,1379910441),(231,'abd7e1528657cd7c70f79ac1f83362a0',2,1379913977),(232,'0b8beaf13209c6fc21463f533f4082aa',2,1379926478),(233,'3312bbc6c77c4455f0d27fbc3c339b4b',2,1379931130),(234,'6ce3d71f7a53dceeb0b999fe0b69332b',16,1379937289),(235,'857395c6807e8ccde68588dcae4f9720',2,1380003836),(236,'391f49c26c1537f2833d04b569a14331',8,1380004798),(237,'5e8757e044b6594febfb0040d52fdb5f',2,1380017780),(238,'fbcf77143f8d9cc0f6b8f253d280fe0b',2,1380082134),(239,'80dd920bf33700bf94b3389a3852315b',2,1380102022),(240,'af62213287155956f2a285660966d296',16,1380115348),(241,'f5a2849378c080c1a7d9109b57986be3',8,1380136044),(242,'009a0c82ba661a2a1bbf422c8975e604',2,1380168191),(243,'31c487689b0d26f5273f10cb89f39553',2,1380187713),(244,'646b625b75c0f046d631fbf1ef2d3415',8,1380297603),(245,'a6254a4c934d474da50bab1143d73a72',8,1380529252),(246,'dcd825ea68a70d7243cade5e25610e11',13,1380541363),(247,'34fe3c65ea90143f79d06918d52cf24c',1,1380564550),(248,'5f60d7e0ea4667673643d9718bcc26c3',17,1380609323),(249,'f0c1155df39062f1e9c5f107795d4c7a',1,1380614230),(251,'92a9dd9873b4c27f21ab62c707a50956',17,1380629450),(252,'f6119d48d2d6e9f13d94a1261b1d801a',17,1380710116),(253,'436e59996eb6576af1bdf61665e434c2',17,1380724891),(254,'dc3d63d9edc5f4000833ba510af03a3a',17,1380796948),(255,'f998793cd2b2054da24d8a3e7db75c42',16,1380800300),(257,'12a4506990b56dd31703f5294d3fe818',13,1380893320),(258,'ac22352a77d40b3e52378f5380cf89e0',16,1381140672),(259,'6f7c9906066d586d685b05c0822fd623',16,1381248564),(260,'e0bf8cb5d9ef56e28fae6e64bf977371',8,1381313881),(261,'0f8048a8b6eac8951ec331cec84225a5',1,1381411784),(262,'2d5c644e742a7a51d5bf83a52ed5278d',16,1381471089),(263,'219e3da8654cc7f7e43c99b3858f780f',16,1381649973),(264,'7837c1303a4755cddfdba2a5ce443827',1,1381783617),(265,'d1e9e4ca7cb00e500463caa92f67f76d',1,1381812014),(266,'da244763d1cd939a060213af39ca8bb6',16,1382095827),(267,'89e411c16610544071475e0f2550becf',2,1383027176),(268,'3c7aa328ea3f77872eff408891e4138d',2,1383040470),(269,'a7087ac9014f345e388d6ecc3b598b3c',2,1383217757),(270,'9d6e771133553d6b6386863b78771dab',2,1383223288),(271,'874613213eee92bb63c1cc3e85a1deb2',2,1383230591),(273,'97e42b1a848affce667fb57fbef81f6c',2,1383297306),(274,'44d993aa14a2983b472337de721cb8d1',2,1383307562),(275,'acccdbd2137ceb6348b168950d8f4798',16,1383377751),(276,'adec5351a8c03e8a6b753afc3a1b4cb4',2,1383653832),(277,'a5ed76ab186e0736282eaa8a051e4bfb',16,1383845624),(278,'1676ddea956ea2608e7bdefc720dc7e1',2,1383899144),(279,'e305bf67dd1ac93d3cbf55e891240488',2,1384177036),(280,'dd0d3a00bd4f169a036a909450e984e1',2,1384232773),(281,'5af2b315ff6876a7943c7bcb4fca8910',2,1384246107),(282,'5799dc582826d7d3fd10f319babb957f',2,1384250158),(283,'1d88adaa134e057df910cceb1ac36cfc',2,1384251721),(284,'2a868b25512d31bc021739a7c445c040',2,1384254919),(285,'a8af84389bbffc36427183595161d04a',2,1384315156),(286,'951a5dbff0798450f0fe9d73e603a448',2,1384336785),(287,'3e2b976287c8ddd27dfeab38d70bdc1d',2,1384402540),(289,'d6b4d96bdbe3b8bbb01aa1026f68d9d8',1,1384402869),(291,'899dfd49dc1fbe856d1435e005698cb9',17,1384426843),(292,'b5ccd02eda358085d272890f5d13ba26',2,1384496372),(293,'bebbbf5923f8656d5cb296cbbfb9ce55',2,1384508183),(294,'3aee82a86e4556c014a135bf97433464',2,1384512728),(295,'d7a28a68cf5f2841a2e359784133704b',2,1384752672),(296,'aefa79d1a45af6e538fdfe3dbc6567f9',2,1384755191),(297,'26ad6257a73581fde0866105670af81c',2,1384773713),(298,'bf019c69b2e4d9e62a222a71c9d02e7e',2,1384773835),(299,'d702abdebc59939326da0c221326cf40',2,1384858635),(300,'e9c3effcf602efa97574c67d40d5758b',2,1385013045),(301,'a0ab927b71dcfef75779ede0ccfd3a41',8,1385471498),(302,'68496403c7235f6eb67bafa1b1756778',16,1385657976),(303,'96bc733d8c919da0e73de3e7388b4104',16,1385658076),(304,'4fd57ccdb186687a38f0f6f33f7cabe4',2,1385698588),(305,'5cc09dfc191128662c42d3da12acee53',8,1385825836),(306,'e41cdf04fe7ce4bd2046ee8f29c1aa40',13,1385904669),(307,'03c8917936e13adc86e788f502735676',2,1385956760),(308,'47a06548dcd06473f08edac3dfc4b603',2,1386051415),(309,'6deadd71e4b336c8a9cf5853e894feb5',2,1386932175),(310,'96501d0f4d0afb6e87f76f929805e340',2,1386939480),(311,'1e5ebade960e8b38567ebe66a3bc3e95',2,1387182522),(312,'c7fdf5ad691094d788dba080bd0dc1de',2,1388460744),(313,'a539c210f88dad2d645f3ecdefa62937',2,1389959961),(314,'ae9e58d9bf096fc5bef3b7d3535b4c14',2,1390304180),(315,'1abf97dbd492beca64c423c73fcdb225',2,1391141674),(316,'0a99c0a3dda3446abf1365c95d75b685',2,1391399143),(317,'68518a64199b12c4487071af6e4cbc19',2,1391405873),(318,'c26a6e887d178d369f9b5ddb50913f7f',2,1391414651),(319,'a41d96c025cd5d3171891eb45df74464',2,1391515780),(320,'66ba326aacabbe62f278aa80b7cbd629',2,1392028348),(321,'5e66ce3f6aad7feaa77641f86decb6a9',2,1392091982),(322,'0830e689b9d2afcace0851375f33b6e1',2,1392182370),(323,'dd7470f9c13571efc2563ba257fa4b99',2,1392205061),(324,'f37f042a51f938533dfca3d1b2c02559',2,1392261777),(325,'846198f05e7449656ff6114d629092bf',2,1392278259),(326,'b9321a74ca6edce4093d12247f9f37eb',2,1392293537),(327,'9b320d42ebc56ba28fb8c5307636049f',16,1392330380),(328,'7099b231c8081fe4bd5c2c47c71fab5f',2,1392614366),(329,'395711788d4fe3e7f24b0587c6144223',2,1393214059),(330,'1c74288a3dec82b4fa3d24dd1203ba40',2,1393218607),(331,'23061fde4155acc69abc740a18cf439e',2,1393220639),(332,'93a78dd25597949a289211e9f196fd18',2,1393227886),(333,'f3787427fd47e02321f968a8bacf5012',2,1393386910),(334,'13d53e1981777876766318efa7010a7f',2,1393476759),(335,'6da8e924dcae84cd78034279ff0cfbde',2,1393566075),(336,'65a7572025c4f6c7e5e0a1f18aa8efb7',2,1393572240),(338,'6c875e54cc7ab0174de2e03bd251040a',2,1393818534),(339,'5fef04535c8581e3007f931531c780c8',2,1393844117),(340,'eadc04531a9dfca1a752d0d329bdd1db',2,1393992876),(341,'e48c332e343d3b261614f27b47d89554',2,1393997044),(342,'f5fa1d279e2f0583acefd1136b5bdfca',2,1394007968),(343,'245b9dc6575fd29063d6fd142ffc1dcf',18,1394008071),(344,'aaa3d69b42644347711581142ed378b8',2,1394081322),(345,'8f52e2b719289cbd4e74571a31885816',2,1394621263),(346,'921ef20787c525908d5be4e60f5fccac',2,1394684012),(347,'ab04982bbdbaf14092d8991209788336',2,1394789505),(348,'d308c8d2e747a3e403f4ebd8a3be2ceb',18,1394989266),(349,'fce8e81293af4bfc6b1afce4b9f18a6f',2,1395030795),(350,'d2c0fa949c7c289c3357c49569f1da94',2,1395059767),(351,'9931e03f46ac331f9f80632d636a20be',18,1395121570),(352,'b5efc60ca98288675e333b4a2220c280',2,1396583026),(353,'8b56ddbec3ee20d39fd9f96dff5c1c58',2,1396842002),(354,'1539638172cd4124aa6dc29fe131490f',2,1397118646),(355,'d36e08231e1fc83b25ffa7e7fa1553c5',2,1397288306),(356,'9d1c103fadd00de7351d4585648f8b47',2,1397294805),(357,'bb97eb5bd0a227ea58cb83afea725f26',2,1397556051),(358,'686b9f401d5f0246f81165c59bbc3c16',2,1397634552),(359,'8858ece8f77b8bc6ec909017a49838a2',2,1397642383),(360,'f21c09c4cf0b42d5be3104a543ed1419',2,1397705381),(361,'f16f5abd4a8cf617afc738aab77474d6',2,1397736932),(362,'64178a70efcd4443bc2b5f846ba83759',2,1397893905),(363,'eebc57bd7d9e0ed1e98c3260a07e9f12',2,1398143924),(364,'bf3e4966f157a7da5f6d0ab598562180',2,1398241233),(365,'9264e479c2c99f0ff774c3dc8c65df2a',2,1398319696),(366,'3b529e3218647d5e7f1f415b75f3b11b',18,1398855089),(367,'fc601a57aa392eefa2caf688857c65b6',2,1399433582),(368,'02026f31bb068f284942f031d5a46604',2,1399444468),(369,'7136c954934041a57215406b6aa7db09',2,1399535550),(370,'b3edd2f571699ab8f6f7258f0f00bb23',2,1399542755),(371,'fd1ab304f63a6ade29593ac0d12c5204',2,1399892705),(372,'46ca093e6b67b85f8e0c54ae0866fed6',2,1400654725),(373,'a97aedc1ad2896be62b48a4cdca67fa5',18,1402034496),(374,'a847f99eae6dd82c22d16ef4487e9a84',2,1402038876),(375,'84fc8e182890437cf2fd447d1cf07283',2,1402039806),(376,'df5cae4ec426657b6c957903b67f8d11',18,1402317960),(377,'eda18bae47c6941f283b66f18cc7c5bf',2,1402318201),(378,'1894e705546d841b3723c08d22763f87',18,1402529867),(379,'a5d9f250c4221d0ca975630e6c029988',18,1403456879),(380,'37abf8d518cf4613bb6941def2360ca5',18,1403696742),(381,'72be4d358cbae5b9dd995221860a6ff5',18,1403768647),(382,'b23b2e482b7b2f2d52698468cbebae1b',2,1403846446),(383,'7965b14fa49b8e3d04fc4b8a3790bea8',18,1403979917),(384,'75341fdc9bb2b176c641d47323813dda',2,1404125128),(385,'29f301a03033ca98cfbf7f82dfbea180',18,1404457855),(386,'e27cfbb64e773f2d6a67dbba384e0fa8',18,1406838905),(387,'b4afbcfcab647b5396a7c09cdaca8ad7',18,1406955524),(388,'09ef001c81673ea64e179e3e78023da9',2,1408531078),(389,'fb06cab117141726b3035806d8ec0c3a',18,1411103326),(390,'c70073e147c774b96069d90c48d15ad4',18,1411110714),(391,'06627a5eb1829f147cb3c23c9a9bb519',18,1411120260),(392,'491fa613bcfeb6705a3ebfb5efceea68',18,1411120911),(393,'f881f24eb5bafa964584f966e8ac1bb3',18,1411121263),(394,'bfbcc1f3d5a70142c7dcc49fa1a509da',18,1411121567),(395,'6ec5ae65f30bd4aad75314af1b5acf33',18,1412578486),(396,'e6658e8717954efaa4ff7e2bc4ab8ac3',18,1422987559),(397,'b405af19210b7d232bded3bf9b2a24fd',18,1423641078),(398,'25bdf0a47583a69ed51e713e53d04444',18,1425212773),(399,'7145c1d3a1731d88290c29b0b3917d3c',18,1425323742),(400,'428a218b5572b6ad72e4a50d0026b1da',18,1425409019),(401,'29ed9f46cdabe70efd3e611be94c2f1a',18,1425486719),(403,'be84da5d6164f280743c03db8f52f6f9',21,1427354105),(404,'55757e2b7392343598e946e8021dc9a3',21,1427354222),(405,'9ac6e101bdfa1f224dc7711cf42f87c2',21,1427359564),(407,'ef8b36cde7b3676022fd4ae645829055',21,1427683209),(408,'11d9ddb5fb93038278c3ee49213cf7d8',18,1429593975),(409,'463ef51a9914c6285098fa0ce17f26f9',18,1429883618),(410,'e1d92b6c54d96aee86a9f1ed82f2a9d7',18,1433756094);
/*!40000 ALTER TABLE `pr_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_stats`
--

DROP TABLE IF EXISTS `pr_stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_stats` (
  `stat_id` int(11) NOT NULL AUTO_INCREMENT,
  `stat_node` int(11) NOT NULL,
  `stat_ip` varchar(15) NOT NULL,
  `stat_date` date NOT NULL,
  `stat_time` time NOT NULL,
  PRIMARY KEY (`stat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21480 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_stats`
--

LOCK TABLES `pr_stats` WRITE;
/*!40000 ALTER TABLE `pr_stats` DISABLE KEYS */;
INSERT INTO `pr_stats` VALUES (20710,1,'217.118.91.78','2014-09-19','18:10:06'),(20711,1,'217.118.91.78','2014-09-19','18:12:49'),(20712,1,'217.118.91.78','2014-09-19','18:13:11'),(20713,1,'217.118.91.78','2014-09-19','18:17:40'),(20714,1,'217.118.91.78','2014-09-19','18:18:22'),(20715,7,'217.118.91.78','2014-09-19','18:19:06'),(20716,7,'217.118.91.78','2014-09-19','18:21:41'),(20717,1,'217.118.91.78','2014-09-19','18:22:07'),(20718,2,'217.118.91.78','2014-09-19','18:22:15'),(20719,2,'217.118.91.78','2014-09-19','18:22:16'),(20720,1,'217.118.91.78','2014-09-19','18:23:12'),(20721,1,'217.118.91.78','2014-09-19','18:24:17'),(20722,1,'217.118.91.78','2014-09-19','18:25:59'),(20723,1,'217.118.91.78','2014-09-19','18:25:59'),(20724,1,'217.118.91.78','2014-09-19','18:25:59'),(20725,1,'217.118.91.78','2014-09-19','18:26:00'),(20726,1,'217.118.91.78','2014-09-19','18:26:00'),(20727,7,'217.118.91.78','2014-09-19','18:26:27'),(20728,1,'217.118.91.78','2014-09-19','18:26:48'),(20729,1,'217.118.91.78','2014-09-19','18:26:49'),(20730,1,'217.118.91.78','2014-09-19','18:26:56'),(20731,1,'217.118.91.78','2014-09-19','18:32:34'),(20732,1,'217.118.91.78','2014-09-19','18:32:50'),(20733,1,'217.118.91.78','2014-09-19','18:32:51'),(20734,1,'217.118.91.78','2014-09-19','18:34:22'),(20735,1,'217.118.91.78','2014-09-19','18:49:23'),(20736,2,'217.118.91.78','2014-09-19','18:49:23'),(20737,1,'217.118.91.78','2014-09-19','18:49:43'),(20738,1,'217.118.91.96','2014-09-19','20:25:23'),(20739,1,'217.118.91.96','2014-09-19','20:25:37'),(20740,1,'178.46.91.237','2014-09-19','22:13:22'),(20741,1,'178.46.91.237','2014-09-19','22:15:02'),(20742,1,'188.186.27.107','2014-09-20','10:03:44'),(20743,1,'188.186.27.107','2014-09-20','10:04:26'),(20744,1,'5.140.162.87','2014-09-21','02:06:13'),(20745,1,'5.140.162.87','2014-09-21','02:06:18'),(20746,1,'5.140.162.87','2014-09-21','02:06:18'),(20747,1,'5.140.162.87','2014-09-21','02:06:18'),(20748,1,'5.140.162.87','2014-09-21','02:06:18'),(20749,1,'5.140.162.87','2014-09-21','02:06:18'),(20750,1,'5.141.237.240','2014-09-22','09:44:50'),(20751,1,'5.141.237.240','2014-09-22','09:44:56'),(20752,1,'5.141.237.240','2014-09-22','09:44:57'),(20753,1,'5.141.237.240','2014-09-22','09:44:57'),(20754,1,'5.141.237.240','2014-09-22','09:44:57'),(20755,1,'5.141.237.240','2014-09-22','09:44:57'),(20756,2,'5.141.237.240','2014-09-22','09:47:04'),(20757,1,'5.141.237.240','2014-09-22','10:55:46'),(20758,1,'188.186.94.182','2014-09-22','11:01:33'),(20759,1,'188.186.94.182','2014-09-22','11:01:39'),(20760,1,'188.186.94.182','2014-09-22','11:01:40'),(20761,1,'188.186.94.182','2014-09-22','11:01:40'),(20762,1,'188.186.94.182','2014-09-22','11:02:14'),(20763,1,'5.141.236.241','2014-09-22','16:58:29'),(20764,1,'5.141.236.241','2014-09-22','16:58:32'),(20765,1,'5.141.236.241','2014-09-22','16:58:58'),(20766,2,'5.141.236.241','2014-09-22','17:00:33'),(20767,1,'5.141.236.241','2014-09-22','17:00:35'),(20768,1,'5.141.236.241','2014-09-22','17:00:44'),(20769,1,'5.141.236.241','2014-09-22','17:04:33'),(20770,1,'5.141.237.109','2014-09-25','10:00:19'),(20771,1,'5.141.237.109','2014-09-25','10:00:20'),(20772,1,'5.141.237.109','2014-09-25','10:00:30'),(20773,1,'5.141.237.109','2014-09-25','10:12:58'),(20774,1,'5.141.237.109','2014-09-25','10:15:54'),(20775,1,'5.141.235.102','2014-09-26','16:27:38'),(20776,1,'5.141.234.138','2014-10-01','17:30:13'),(20777,1,'5.141.234.138','2014-10-01','17:30:27'),(20778,1,'5.141.235.172','2014-10-06','12:30:56'),(20779,1,'5.141.235.172','2014-10-06','12:31:08'),(20780,1,'5.141.235.172','2014-10-06','12:31:09'),(20781,1,'5.141.235.172','2014-10-06','12:48:05'),(20782,7,'5.141.235.172','2014-10-06','12:48:10'),(20783,7,'5.141.235.172','2014-10-06','12:48:19'),(20784,2,'5.141.235.172','2014-10-06','12:54:36'),(20785,2,'5.141.235.172','2014-10-06','12:54:48'),(20786,2,'5.141.235.172','2014-10-06','12:54:54'),(20787,2,'5.141.235.172','2014-10-06','12:55:14'),(20788,2,'5.141.235.172','2014-10-06','12:55:21'),(20789,2,'5.141.235.172','2014-10-06','12:55:24'),(20790,2,'5.141.235.172','2014-10-06','12:55:31'),(20791,2,'5.141.235.172','2014-10-06','12:55:53'),(20792,2,'5.141.235.172','2014-10-06','12:55:57'),(20793,2,'5.141.235.172','2014-10-06','12:56:12'),(20794,2,'5.141.235.172','2014-10-06','12:56:15'),(20795,2,'5.141.235.172','2014-10-06','12:56:15'),(20796,2,'5.141.235.172','2014-10-06','12:56:37'),(20797,2,'5.141.235.172','2014-10-06','12:56:40'),(20798,2,'5.141.235.172','2014-10-06','12:56:40'),(20799,2,'5.141.235.172','2014-10-06','12:57:07'),(20800,2,'5.141.235.172','2014-10-06','12:57:11'),(20801,2,'5.141.235.172','2014-10-06','12:57:11'),(20802,2,'5.141.235.172','2014-10-06','12:57:13'),(20803,2,'5.141.235.172','2014-10-06','12:57:29'),(20804,1,'188.186.97.161','2014-10-22','01:26:54'),(20805,1,'188.186.97.161','2014-10-22','01:26:58'),(20806,1,'188.186.97.161','2014-10-22','01:26:59'),(20807,1,'188.186.97.161','2014-10-22','01:26:59'),(20808,1,'188.186.97.161','2014-10-22','01:26:59'),(20809,1,'188.186.97.161','2014-10-22','01:26:59'),(20810,1,'87.254.148.29','2014-11-04','14:53:39'),(20811,1,'87.254.148.29','2014-11-04','14:53:39'),(20812,1,'87.254.148.29','2014-11-04','14:53:45'),(20813,1,'87.254.148.29','2014-11-04','14:53:50'),(20814,1,'87.254.148.29','2014-11-04','15:04:10'),(20815,2,'87.254.148.29','2014-11-04','16:26:14'),(20816,2,'87.254.148.29','2014-11-04','16:30:48'),(20817,1,'188.186.0.56','2014-11-30','14:57:53'),(20818,1,'188.186.0.56','2014-11-30','14:57:53'),(20819,1,'188.186.7.232','2015-01-04','09:33:15'),(20820,1,'188.186.7.232','2015-01-04','09:33:16'),(20821,1,'188.186.122.56','2015-01-14','02:02:56'),(20822,1,'188.186.122.56','2015-01-14','02:02:57'),(20823,1,'188.186.28.14','2015-02-04','00:19:08'),(20824,1,'188.186.28.14','2015-02-04','00:19:09'),(20825,2,'188.186.28.14','2015-02-04','00:19:16'),(20826,2,'188.186.28.14','2015-02-04','00:19:22'),(20827,2,'188.186.28.14','2015-02-04','00:19:27'),(20828,2,'188.186.28.14','2015-02-04','00:19:30'),(20829,2,'188.186.28.14','2015-02-04','00:19:33'),(20830,2,'188.186.28.14','2015-02-04','00:19:39'),(20831,2,'188.186.28.14','2015-02-04','00:19:39'),(20832,2,'188.186.28.14','2015-02-04','00:19:44'),(20833,2,'188.186.28.14','2015-02-04','00:19:50'),(20834,2,'188.186.28.14','2015-02-04','00:19:51'),(20835,2,'188.186.28.14','2015-02-04','00:19:58'),(20836,2,'188.186.28.14','2015-02-04','00:20:37'),(20837,2,'188.186.28.14','2015-02-04','00:20:37'),(20838,2,'188.186.28.14','2015-02-04','00:21:09'),(20839,2,'188.186.28.14','2015-02-04','00:21:13'),(20840,2,'188.186.28.14','2015-02-04','00:21:23'),(20841,1,'5.141.238.115','2015-02-11','13:50:56'),(20842,1,'5.141.238.115','2015-02-11','13:50:57'),(20843,2,'5.141.238.115','2015-02-11','13:51:13'),(20844,2,'5.141.238.115','2015-02-11','13:51:21'),(20845,2,'5.141.238.115','2015-02-11','13:51:26'),(20846,2,'5.141.238.115','2015-02-11','13:51:28'),(20847,2,'5.141.238.115','2015-02-11','13:51:38'),(20848,2,'5.141.238.115','2015-02-11','14:19:51'),(20849,2,'5.141.238.115','2015-02-11','14:19:55'),(20850,2,'5.141.238.115','2015-02-11','14:49:31'),(20851,2,'5.141.238.115','2015-02-11','14:49:37'),(20852,2,'5.141.238.115','2015-02-11','14:49:42'),(20853,2,'5.141.238.115','2015-02-11','14:51:59'),(20854,2,'5.141.238.115','2015-02-11','14:52:02'),(20855,2,'5.141.238.115','2015-02-11','14:52:10'),(20856,2,'5.141.238.115','2015-02-11','14:52:16'),(20857,2,'5.141.238.115','2015-02-11','14:52:17'),(20858,2,'5.141.238.115','2015-02-11','14:52:20'),(20859,2,'5.141.238.115','2015-02-11','14:52:20'),(20860,2,'5.141.238.115','2015-02-11','14:52:26'),(20861,2,'5.141.238.115','2015-02-11','14:52:31'),(20862,1,'5.140.202.207','2015-02-19','15:14:32'),(20863,1,'5.140.202.207','2015-02-19','15:14:36'),(20864,1,'5.140.202.207','2015-02-19','16:17:43'),(20865,1,'5.140.202.207','2015-02-19','16:20:34'),(20866,2,'188.186.20.18','2015-03-01','18:26:09'),(20867,2,'188.186.20.18','2015-03-01','18:26:16'),(20868,2,'188.186.20.18','2015-03-01','18:26:20'),(20869,2,'188.186.20.18','2015-03-01','18:33:13'),(20870,2,'188.186.20.18','2015-03-01','18:33:14'),(20871,2,'188.186.20.18','2015-03-01','18:33:16'),(20872,2,'188.186.20.18','2015-03-01','18:33:26'),(20873,2,'188.186.20.18','2015-03-01','18:33:26'),(20874,2,'188.186.20.18','2015-03-01','19:07:30'),(20875,2,'188.186.20.18','2015-03-01','19:07:34'),(20876,2,'188.186.20.18','2015-03-01','19:07:34'),(20877,2,'188.186.20.18','2015-03-01','19:07:46'),(20878,2,'188.186.20.18','2015-03-01','19:09:33'),(20879,2,'188.186.20.18','2015-03-01','19:09:33'),(20880,2,'188.186.20.18','2015-03-01','19:09:36'),(20881,2,'188.186.20.18','2015-03-01','19:09:39'),(20882,2,'188.186.20.18','2015-03-01','19:09:39'),(20883,2,'188.186.20.18','2015-03-01','19:09:41'),(20884,2,'188.186.20.18','2015-03-02','01:20:20'),(20885,2,'188.186.20.18','2015-03-02','01:20:22'),(20886,2,'188.186.20.18','2015-03-02','01:20:27'),(20887,2,'188.186.20.18','2015-03-02','01:20:29'),(20888,2,'188.186.20.18','2015-03-02','01:20:30'),(20889,2,'188.186.20.18','2015-03-02','04:03:25'),(20890,2,'188.186.20.18','2015-03-02','04:03:27'),(20891,2,'188.186.20.18','2015-03-02','04:03:29'),(20892,2,'188.186.20.18','2015-03-02','04:03:29'),(20893,2,'188.186.92.42','2015-03-03','00:00:31'),(20894,2,'188.186.92.42','2015-03-03','00:00:46'),(20895,2,'188.186.92.42','2015-03-03','00:00:49'),(20896,2,'188.186.92.42','2015-03-03','01:15:43'),(20897,2,'188.186.92.42','2015-03-03','01:15:48'),(20898,2,'188.186.92.42','2015-03-03','01:15:51'),(20899,2,'188.186.92.42','2015-03-03','01:15:54'),(20900,2,'188.186.84.57','2015-03-04','00:56:35'),(20901,2,'188.186.84.57','2015-03-04','00:57:00'),(20902,2,'188.186.76.20','2015-03-04','22:31:43'),(20903,2,'188.186.76.20','2015-03-04','22:32:08'),(20904,1,'178.47.168.219','2015-03-05','19:25:08'),(20905,1,'178.47.168.219','2015-03-05','19:25:08'),(20906,1,'109.194.169.139','2015-03-23','21:56:21'),(20907,1,'109.194.169.139','2015-03-23','21:56:22'),(20908,2,'109.194.169.139','2015-03-23','21:56:26'),(20909,2,'109.194.169.139','2015-03-23','21:56:36'),(20910,1,'109.194.169.139','2015-03-23','21:56:40'),(20911,1,'109.194.169.139','2015-03-23','21:56:45'),(20912,2,'188.17.116.178','2015-03-26','13:13:39'),(20913,2,'188.17.116.178','2015-03-26','13:13:55'),(20914,2,'188.17.116.178','2015-03-26','13:13:58'),(20915,1,'188.17.116.178','2015-03-26','13:14:04'),(20916,1,'188.17.116.178','2015-03-26','13:14:04'),(20917,2,'188.17.116.178','2015-03-26','13:14:25'),(20918,2,'188.17.116.178','2015-03-26','13:14:35'),(20919,2,'188.17.116.178','2015-03-26','13:14:55'),(20920,2,'188.17.116.178','2015-03-26','13:14:55'),(20921,2,'188.17.116.178','2015-03-26','13:15:00'),(20922,2,'188.17.116.178','2015-03-26','13:15:05'),(20923,2,'188.186.86.168','2015-03-26','13:16:50'),(20924,2,'188.186.86.168','2015-03-26','13:16:56'),(20925,2,'188.186.86.168','2015-03-26','13:17:02'),(20926,2,'188.186.86.168','2015-03-26','13:17:05'),(20927,2,'188.186.86.168','2015-03-26','13:17:09'),(20928,2,'188.186.86.168','2015-03-26','13:17:11'),(20929,1,'188.186.86.168','2015-03-26','13:17:12'),(20930,1,'188.186.86.168','2015-03-26','13:17:12'),(20931,1,'188.186.86.168','2015-03-26','13:17:12'),(20932,1,'188.186.86.168','2015-03-26','13:17:13'),(20933,1,'188.186.86.168','2015-03-26','13:17:13'),(20934,1,'188.186.86.168','2015-03-26','13:17:13'),(20935,2,'188.17.116.178','2015-03-26','14:45:57'),(20936,2,'188.17.116.178','2015-03-26','14:46:05'),(20937,2,'188.17.116.178','2015-03-26','14:46:18'),(20938,2,'188.17.116.178','2015-03-26','14:46:24'),(20939,2,'188.17.116.178','2015-03-26','14:46:26'),(20940,1,'188.17.116.178','2015-03-26','14:46:28'),(20941,1,'188.17.116.178','2015-03-26','14:46:28'),(20942,1,'188.17.116.178','2015-03-26','14:46:28'),(20943,1,'188.17.116.178','2015-03-26','14:46:28'),(20944,1,'188.17.116.178','2015-03-26','14:46:28'),(20945,1,'188.17.116.178','2015-03-26','14:46:29'),(20946,2,'188.17.116.178','2015-03-26','14:46:30'),(20947,2,'188.17.116.178','2015-03-26','14:46:36'),(20948,2,'188.17.116.178','2015-03-26','14:46:37'),(20949,2,'188.17.116.178','2015-03-26','14:46:41'),(20950,2,'92.255.170.31','2015-03-30','08:27:06'),(20951,2,'92.255.170.31','2015-03-30','08:27:31'),(20952,1,'92.255.170.31','2015-03-30','08:31:36'),(20953,1,'92.255.170.31','2015-03-30','08:31:37'),(20954,2,'92.255.170.31','2015-03-30','08:31:52'),(20955,2,'92.255.170.31','2015-03-30','08:32:11'),(20956,2,'92.255.170.31','2015-03-30','08:32:19'),(20957,2,'92.255.170.31','2015-03-30','08:32:24'),(20958,1,'92.255.170.31','2015-03-30','08:32:25'),(20959,1,'92.255.170.31','2015-03-30','08:32:25'),(20960,1,'92.255.170.31','2015-03-30','08:32:25'),(20961,1,'92.255.170.31','2015-03-30','08:32:25'),(20962,1,'92.255.170.31','2015-03-30','08:32:25'),(20963,1,'92.255.170.31','2015-03-30','08:32:26'),(20964,2,'92.255.170.31','2015-03-30','08:32:35'),(20965,2,'92.255.170.31','2015-03-30','08:32:44'),(20966,2,'92.255.170.31','2015-03-30','08:32:56'),(20967,2,'92.255.170.31','2015-03-30','08:32:58'),(20968,2,'92.255.170.31','2015-03-30','08:38:55'),(20969,2,'92.255.170.31','2015-03-30','08:40:09'),(20970,2,'92.255.170.31','2015-03-30','08:40:16'),(20971,2,'92.255.170.31','2015-03-30','08:40:29'),(20972,2,'92.255.170.31','2015-03-30','08:40:31'),(20973,1,'178.47.183.106','2015-03-30','11:09:26'),(20974,1,'178.47.183.106','2015-03-30','11:10:01'),(20975,1,'178.47.183.106','2015-03-30','11:17:21'),(20976,1,'178.47.183.106','2015-03-30','11:17:25'),(20977,1,'178.47.183.106','2015-03-30','11:17:26'),(20978,2,'92.255.170.31','2015-03-30','11:46:14'),(20979,2,'92.255.170.31','2015-03-30','11:46:59'),(20980,2,'92.255.170.31','2015-03-30','11:47:04'),(20981,2,'92.255.170.31','2015-03-30','11:47:08'),(20982,2,'92.255.170.31','2015-03-30','11:47:11'),(20983,1,'178.47.183.106','2015-03-30','12:08:39'),(20984,2,'178.47.183.106','2015-03-30','12:39:34'),(20985,1,'178.47.183.106','2015-03-30','12:39:36'),(20986,1,'178.47.183.106','2015-03-30','12:39:37'),(20987,1,'188.186.86.168','2015-04-03','14:48:08'),(20988,1,'188.186.86.168','2015-04-03','14:48:08'),(20989,1,'188.186.86.168','2015-04-03','14:48:16'),(20990,1,'89.204.75.248','2015-04-21','11:22:20'),(20991,1,'89.204.75.248','2015-04-21','11:22:24'),(20992,2,'89.204.75.248','2015-04-21','11:22:27'),(20993,1,'89.204.75.248','2015-04-21','11:22:31'),(20994,2,'89.204.75.248','2015-04-21','11:26:17'),(20995,2,'89.204.75.248','2015-04-21','11:26:29'),(20996,2,'89.204.75.248','2015-04-21','11:26:34'),(20997,2,'89.204.75.248','2015-04-21','11:26:38'),(20998,2,'89.204.75.248','2015-04-21','11:26:43'),(20999,2,'89.204.75.248','2015-04-21','11:26:45'),(21000,2,'89.204.75.248','2015-04-21','11:38:40'),(21001,1,'89.204.75.248','2015-04-21','11:38:40'),(21002,1,'89.204.75.248','2015-04-21','11:38:42'),(21003,1,'89.204.75.248','2015-04-21','11:38:43'),(21004,2,'89.204.75.248','2015-04-21','13:02:54'),(21005,2,'89.204.75.248','2015-04-21','13:02:56'),(21006,2,'89.204.75.248','2015-04-21','13:02:57'),(21007,1,'89.204.75.248','2015-04-21','13:09:26'),(21008,1,'89.204.75.248','2015-04-21','13:09:26'),(21009,1,'89.204.75.248','2015-04-21','13:09:26'),(21010,1,'89.204.75.248','2015-04-21','13:09:26'),(21011,1,'89.204.75.248','2015-04-21','13:09:27'),(21012,1,'89.204.75.248','2015-04-21','13:09:27'),(21013,1,'89.204.75.248','2015-04-21','13:09:27'),(21014,1,'89.204.75.248','2015-04-21','13:09:27'),(21015,1,'89.204.75.248','2015-04-21','13:09:27'),(21016,1,'89.204.75.248','2015-04-21','13:09:27'),(21017,1,'89.204.75.248','2015-04-21','13:09:27'),(21018,1,'89.204.75.248','2015-04-21','13:09:27'),(21019,1,'89.204.75.248','2015-04-21','13:09:27'),(21020,1,'89.204.75.248','2015-04-21','13:09:27'),(21021,1,'89.204.75.248','2015-04-21','13:09:27'),(21022,1,'89.204.75.248','2015-04-21','13:09:28'),(21023,1,'89.204.75.248','2015-04-21','13:09:28'),(21024,1,'89.204.75.248','2015-04-21','13:09:28'),(21025,1,'89.204.75.248','2015-04-21','13:11:09'),(21026,1,'89.204.75.248','2015-04-21','13:11:10'),(21027,2,'89.204.75.248','2015-04-21','13:11:28'),(21028,2,'89.204.75.248','2015-04-21','13:11:29'),(21029,2,'89.204.75.248','2015-04-21','13:11:35'),(21030,2,'89.204.75.248','2015-04-21','13:11:36'),(21031,2,'89.204.75.248','2015-04-21','13:11:38'),(21032,2,'89.204.75.248','2015-04-21','13:11:38'),(21033,2,'89.204.75.248','2015-04-21','13:11:40'),(21034,2,'89.204.75.248','2015-04-21','13:11:41'),(21035,2,'89.204.75.248','2015-04-21','13:11:42'),(21036,1,'89.204.75.248','2015-04-21','13:11:43'),(21037,1,'89.204.75.248','2015-04-21','13:11:43'),(21038,1,'89.204.75.248','2015-04-21','13:11:43'),(21039,1,'89.204.75.248','2015-04-21','13:11:43'),(21040,1,'89.204.75.248','2015-04-21','13:11:44'),(21041,1,'89.204.75.248','2015-04-21','13:11:44'),(21042,1,'89.204.75.248','2015-04-21','13:11:44'),(21043,2,'89.204.75.248','2015-04-21','13:11:51'),(21044,2,'89.204.75.248','2015-04-21','13:13:08'),(21045,2,'89.204.75.248','2015-04-21','13:13:09'),(21046,2,'89.204.75.248','2015-04-21','13:13:13'),(21047,2,'89.204.75.248','2015-04-21','13:13:37'),(21048,2,'89.204.75.248','2015-04-21','13:13:40'),(21049,2,'89.204.75.248','2015-04-21','13:13:41'),(21050,2,'89.204.75.248','2015-04-21','13:13:43'),(21051,2,'89.204.75.248','2015-04-21','13:13:44'),(21052,2,'89.204.75.248','2015-04-21','13:13:49'),(21053,2,'89.204.75.248','2015-04-21','13:13:50'),(21054,2,'89.204.75.248','2015-04-21','13:14:08'),(21055,2,'89.204.75.248','2015-04-21','13:14:08'),(21056,2,'89.204.75.248','2015-04-21','13:14:10'),(21057,2,'89.204.75.248','2015-04-21','13:14:10'),(21058,2,'89.204.75.248','2015-04-21','13:14:14'),(21059,2,'89.204.75.248','2015-04-21','13:14:16'),(21060,2,'89.204.75.248','2015-04-21','13:14:16'),(21061,2,'89.204.75.248','2015-04-21','13:14:23'),(21062,1,'89.204.75.248','2015-04-21','13:14:32'),(21063,2,'89.204.75.248','2015-04-21','13:14:46'),(21064,2,'89.204.75.248','2015-04-21','13:14:46'),(21065,2,'89.204.75.248','2015-04-21','13:14:48'),(21066,2,'89.204.75.248','2015-04-21','13:14:49'),(21067,2,'89.204.75.248','2015-04-21','13:14:50'),(21068,2,'89.204.75.248','2015-04-21','13:14:50'),(21069,2,'89.204.75.248','2015-04-21','13:15:07'),(21070,2,'89.204.75.248','2015-04-21','13:15:07'),(21071,2,'89.204.75.248','2015-04-21','13:15:07'),(21072,2,'89.204.75.248','2015-04-21','13:15:09'),(21073,2,'89.204.75.248','2015-04-21','13:15:10'),(21074,2,'89.204.75.248','2015-04-21','13:15:11'),(21075,2,'89.204.75.248','2015-04-21','13:15:11'),(21076,2,'89.204.75.248','2015-04-21','13:15:22'),(21077,2,'89.204.75.248','2015-04-21','13:15:42'),(21078,2,'89.204.75.248','2015-04-21','13:15:42'),(21079,2,'89.204.75.248','2015-04-21','13:15:43'),(21080,2,'89.204.75.248','2015-04-21','13:17:32'),(21081,2,'89.204.75.248','2015-04-21','13:17:36'),(21082,2,'89.204.75.248','2015-04-21','13:17:37'),(21083,2,'89.204.75.248','2015-04-21','13:18:13'),(21084,2,'89.204.75.248','2015-04-21','13:18:15'),(21085,2,'89.204.75.248','2015-04-21','13:18:15'),(21086,2,'89.204.75.248','2015-04-21','13:19:45'),(21087,2,'89.204.75.248','2015-04-21','13:20:28'),(21088,2,'89.204.75.248','2015-04-21','13:20:31'),(21089,2,'89.204.75.248','2015-04-21','13:22:14'),(21090,2,'89.204.75.248','2015-04-21','13:22:37'),(21091,2,'89.204.75.248','2015-04-21','13:22:56'),(21092,2,'89.204.75.248','2015-04-21','13:22:57'),(21093,2,'89.204.75.248','2015-04-21','13:23:15'),(21094,2,'89.204.75.248','2015-04-21','13:23:41'),(21095,2,'89.204.75.248','2015-04-21','13:24:49'),(21096,2,'89.204.75.248','2015-04-21','13:25:01'),(21097,2,'89.204.75.248','2015-04-21','13:25:09'),(21098,2,'89.204.75.248','2015-04-21','13:31:18'),(21099,2,'89.204.75.248','2015-04-21','13:31:47'),(21100,2,'89.204.75.248','2015-04-21','13:31:47'),(21101,2,'89.204.75.248','2015-04-21','13:31:49'),(21102,2,'89.204.75.248','2015-04-21','13:32:03'),(21103,2,'89.204.75.248','2015-04-21','13:32:03'),(21104,2,'89.204.75.248','2015-04-21','13:32:14'),(21105,2,'89.204.75.248','2015-04-21','13:32:25'),(21106,2,'89.204.75.248','2015-04-21','13:32:25'),(21107,2,'89.204.75.248','2015-04-21','13:32:34'),(21108,2,'89.204.75.248','2015-04-21','13:32:40'),(21109,2,'89.204.75.248','2015-04-21','13:32:40'),(21110,1,'89.204.75.248','2015-04-21','13:32:44'),(21111,2,'89.204.75.248','2015-04-21','13:35:35'),(21112,2,'89.204.75.248','2015-04-21','13:35:36'),(21113,2,'89.204.75.248','2015-04-21','13:35:58'),(21114,2,'89.204.75.248','2015-04-21','13:36:00'),(21115,2,'89.204.75.248','2015-04-21','13:36:07'),(21116,2,'89.204.75.248','2015-04-21','13:36:07'),(21117,2,'89.204.75.248','2015-04-21','13:36:08'),(21118,1,'89.204.75.248','2015-04-21','13:36:09'),(21119,2,'89.204.75.248','2015-04-21','13:38:42'),(21120,1,'89.204.75.248','2015-04-21','13:39:09'),(21121,1,'89.204.75.248','2015-04-21','13:39:12'),(21122,1,'89.204.75.248','2015-04-21','13:40:41'),(21123,1,'89.204.75.248','2015-04-21','13:41:05'),(21124,1,'89.204.75.248','2015-04-21','13:41:55'),(21125,1,'89.204.75.248','2015-04-21','13:42:31'),(21126,1,'89.204.75.248','2015-04-21','13:47:43'),(21127,1,'89.204.75.248','2015-04-21','13:47:45'),(21128,1,'89.204.75.248','2015-04-21','13:48:29'),(21129,1,'89.204.75.248','2015-04-21','13:48:31'),(21130,1,'89.204.75.248','2015-04-21','13:49:53'),(21131,1,'89.204.75.248','2015-04-21','13:49:58'),(21132,1,'89.204.75.248','2015-04-21','13:51:05'),(21133,1,'89.204.75.248','2015-04-21','13:51:47'),(21134,1,'89.204.75.248','2015-04-21','13:51:49'),(21135,1,'89.204.75.248','2015-04-21','13:53:57'),(21136,2,'89.204.75.248','2015-04-21','14:37:41'),(21137,2,'89.204.75.248','2015-04-21','14:38:02'),(21138,2,'89.204.75.248','2015-04-21','14:38:07'),(21139,2,'89.204.75.248','2015-04-21','14:38:08'),(21140,2,'89.204.75.248','2015-04-21','14:38:10'),(21141,2,'89.204.75.248','2015-04-21','14:38:11'),(21142,2,'89.204.75.248','2015-04-21','14:38:14'),(21143,2,'89.204.75.248','2015-04-21','14:38:15'),(21144,2,'89.204.75.248','2015-04-21','14:38:26'),(21145,2,'89.204.75.248','2015-04-21','14:38:26'),(21146,2,'89.204.75.248','2015-04-21','14:38:27'),(21147,2,'89.204.75.248','2015-04-21','14:38:28'),(21148,2,'89.204.75.248','2015-04-21','14:38:28'),(21149,2,'89.204.75.248','2015-04-21','14:38:29'),(21150,2,'89.204.75.248','2015-04-21','14:38:30'),(21151,2,'89.204.75.248','2015-04-21','14:38:45'),(21152,2,'89.204.75.248','2015-04-21','14:39:23'),(21153,2,'89.204.75.248','2015-04-21','14:39:23'),(21154,2,'89.204.75.248','2015-04-21','14:39:24'),(21155,1,'89.204.75.248','2015-04-21','14:39:58'),(21156,2,'89.204.75.248','2015-04-21','14:40:21'),(21157,2,'89.204.75.248','2015-04-21','14:40:22'),(21158,2,'89.204.75.248','2015-04-21','14:40:57'),(21159,2,'89.204.75.248','2015-04-21','14:41:06'),(21160,2,'89.204.75.248','2015-04-21','14:41:06'),(21161,1,'89.204.75.248','2015-04-21','14:41:11'),(21162,1,'89.204.75.248','2015-04-21','14:44:20'),(21163,1,'89.204.75.248','2015-04-21','14:45:28'),(21164,2,'89.204.75.248','2015-04-21','14:45:39'),(21165,2,'89.204.75.248','2015-04-21','14:45:40'),(21166,2,'89.204.75.248','2015-04-21','14:45:43'),(21167,2,'89.204.75.248','2015-04-21','14:45:48'),(21168,2,'89.204.75.248','2015-04-21','14:45:48'),(21169,2,'89.204.75.248','2015-04-21','14:45:48'),(21170,1,'89.204.75.248','2015-04-21','14:45:50'),(21171,1,'89.204.75.248','2015-04-21','14:46:38'),(21172,1,'89.204.75.248','2015-04-21','14:49:27'),(21173,2,'89.204.75.248','2015-04-21','14:50:04'),(21174,2,'89.204.75.248','2015-04-21','14:50:11'),(21175,2,'89.204.75.248','2015-04-21','14:50:11'),(21176,2,'89.204.75.248','2015-04-21','14:50:11'),(21177,1,'89.204.75.248','2015-04-21','14:50:13'),(21178,7,'89.204.75.248','2015-04-21','14:50:18'),(21179,7,'89.204.75.248','2015-04-21','14:52:12'),(21180,7,'89.204.75.248','2015-04-21','14:52:15'),(21181,2,'89.204.75.248','2015-04-21','14:53:05'),(21182,2,'89.204.75.248','2015-04-21','14:53:06'),(21183,2,'89.204.75.248','2015-04-21','14:53:09'),(21184,2,'89.204.75.248','2015-04-21','14:53:09'),(21185,2,'89.204.75.248','2015-04-21','14:53:10'),(21186,7,'89.204.75.248','2015-04-21','14:53:11'),(21187,7,'89.204.75.248','2015-04-21','14:53:23'),(21188,7,'89.204.75.248','2015-04-21','14:53:26'),(21189,1,'89.204.75.248','2015-04-21','14:53:30'),(21190,7,'89.204.75.248','2015-04-21','14:53:33'),(21191,1,'89.204.75.248','2015-04-21','14:53:44'),(21192,1,'89.204.75.248','2015-04-21','14:54:28'),(21193,1,'89.204.75.248','2015-04-21','14:58:22'),(21194,1,'89.204.75.248','2015-04-21','14:58:28'),(21195,1,'89.204.75.248','2015-04-21','14:59:11'),(21196,1,'89.204.75.248','2015-04-21','15:00:32'),(21197,1,'89.204.75.248','2015-04-21','15:00:55'),(21198,1,'89.204.75.248','2015-04-21','15:01:47'),(21199,1,'89.204.75.248','2015-04-21','15:02:45'),(21200,1,'89.204.75.248','2015-04-21','15:03:07'),(21201,1,'89.204.75.248','2015-04-21','15:07:26'),(21202,2,'89.204.75.248','2015-04-21','15:08:15'),(21203,2,'89.204.75.248','2015-04-21','15:08:16'),(21204,2,'89.204.75.248','2015-04-21','15:08:17'),(21205,2,'89.204.75.248','2015-04-21','15:08:18'),(21206,2,'89.204.75.248','2015-04-21','15:08:34'),(21207,2,'89.204.75.248','2015-04-21','15:08:34'),(21208,2,'89.204.75.248','2015-04-21','15:08:35'),(21209,2,'89.204.75.248','2015-04-21','15:08:36'),(21210,2,'89.204.75.248','2015-04-21','15:08:37'),(21211,2,'89.204.75.248','2015-04-21','15:08:38'),(21212,2,'89.204.75.248','2015-04-21','15:08:39'),(21213,2,'89.204.75.248','2015-04-21','15:08:51'),(21214,2,'89.204.75.248','2015-04-21','15:09:08'),(21215,2,'89.204.75.248','2015-04-21','15:09:08'),(21216,2,'89.204.75.248','2015-04-21','15:09:09'),(21217,2,'89.204.75.248','2015-04-21','15:09:11'),(21218,2,'89.204.75.248','2015-04-21','15:09:14'),(21219,2,'89.204.75.248','2015-04-21','15:09:15'),(21220,2,'89.204.75.248','2015-04-21','15:09:37'),(21221,2,'89.204.75.248','2015-04-21','15:09:43'),(21222,2,'89.204.75.248','2015-04-21','15:09:43'),(21223,1,'89.204.75.248','2015-04-21','15:09:50'),(21224,2,'89.204.75.248','2015-04-21','15:10:29'),(21225,2,'89.204.75.248','2015-04-21','15:10:33'),(21226,2,'89.204.75.248','2015-04-21','15:11:02'),(21227,2,'89.204.75.248','2015-04-21','15:11:02'),(21228,2,'89.204.75.248','2015-04-21','15:11:49'),(21229,2,'89.204.75.248','2015-04-21','15:11:58'),(21230,2,'89.204.75.248','2015-04-21','15:11:58'),(21231,2,'89.204.75.248','2015-04-21','15:12:02'),(21232,2,'89.204.75.248','2015-04-21','15:12:03'),(21233,2,'89.204.75.248','2015-04-21','15:12:09'),(21234,2,'89.204.75.248','2015-04-21','15:12:09'),(21235,2,'89.204.75.248','2015-04-21','15:12:10'),(21236,2,'89.204.75.248','2015-04-21','15:13:58'),(21237,2,'89.204.75.248','2015-04-21','15:13:59'),(21238,2,'89.204.75.248','2015-04-21','15:14:04'),(21239,2,'89.204.75.248','2015-04-21','15:14:04'),(21240,2,'89.204.75.248','2015-04-21','15:14:04'),(21241,1,'89.204.75.248','2015-04-21','15:16:07'),(21242,1,'89.204.88.252','2015-04-23','14:14:18'),(21243,1,'89.204.88.252','2015-04-23','14:14:20'),(21244,1,'178.47.168.219','2015-04-24','19:53:32'),(21245,1,'178.47.168.219','2015-04-24','19:53:33'),(21246,1,'178.47.168.219','2015-04-24','19:53:34'),(21247,2,'178.47.168.219','2015-04-24','19:53:34'),(21248,2,'178.47.168.219','2015-04-24','19:53:39'),(21249,2,'178.47.168.219','2015-04-24','19:53:42'),(21250,2,'178.47.168.219','2015-04-24','19:53:45'),(21251,2,'178.47.168.219','2015-04-24','19:53:46'),(21252,2,'178.47.168.219','2015-04-24','19:54:09'),(21253,2,'178.47.168.219','2015-04-24','19:54:09'),(21254,2,'178.47.168.219','2015-04-24','19:54:11'),(21255,2,'178.47.168.219','2015-04-24','19:54:12'),(21256,2,'178.47.168.219','2015-04-24','19:54:19'),(21257,2,'178.47.168.219','2015-04-24','19:54:20'),(21258,1,'178.47.168.219','2015-04-24','19:54:22'),(21259,1,'178.47.168.219','2015-04-24','19:54:22'),(21260,69,'178.47.168.219','2015-04-24','19:54:24'),(21261,2,'178.47.168.219','2015-04-24','19:54:29'),(21262,2,'178.47.168.219','2015-04-24','19:54:29'),(21263,2,'178.47.168.219','2015-04-24','19:54:32'),(21264,2,'178.47.168.219','2015-04-24','19:54:32'),(21265,69,'178.47.168.219','2015-04-24','19:54:34'),(21266,1,'178.47.168.219','2015-04-24','19:54:35'),(21267,1,'178.47.168.219','2015-04-24','19:57:21'),(21268,1,'178.47.168.219','2015-04-24','19:57:23'),(21269,1,'178.47.168.219','2015-04-24','19:58:01'),(21270,1,'178.47.168.219','2015-04-24','19:58:16'),(21271,1,'178.47.168.219','2015-04-24','19:58:26'),(21272,1,'178.47.168.219','2015-04-24','19:58:53'),(21273,1,'178.47.168.219','2015-04-24','20:00:27'),(21274,69,'178.47.168.219','2015-04-24','20:00:33'),(21275,69,'178.47.168.219','2015-04-24','20:01:03'),(21276,69,'178.47.168.219','2015-04-24','20:01:08'),(21277,1,'178.47.168.219','2015-04-24','20:01:14'),(21278,69,'178.47.168.219','2015-04-24','20:01:16'),(21279,69,'178.47.168.219','2015-04-24','20:02:24'),(21280,69,'178.47.168.219','2015-04-24','20:03:32'),(21281,69,'178.47.168.219','2015-04-24','20:04:03'),(21282,69,'178.47.168.219','2015-04-24','20:04:13'),(21283,69,'178.47.168.219','2015-04-24','20:04:59'),(21284,69,'178.47.168.219','2015-04-24','20:05:01'),(21285,69,'178.47.168.219','2015-04-24','20:05:16'),(21286,69,'178.47.168.219','2015-04-24','20:05:46'),(21287,1,'178.47.168.219','2015-04-24','20:05:47'),(21288,1,'178.47.168.219','2015-04-24','20:06:09'),(21289,1,'178.47.168.219','2015-04-24','20:06:11'),(21290,1,'178.47.168.219','2015-04-24','20:06:16'),(21291,69,'178.47.168.219','2015-04-24','20:06:23'),(21292,69,'178.47.168.219','2015-04-24','20:07:57'),(21293,1,'178.47.168.219','2015-04-24','20:08:00'),(21294,1,'178.47.168.219','2015-04-24','20:08:02'),(21295,1,'178.47.168.219','2015-04-24','20:08:11'),(21296,1,'178.47.168.219','2015-04-24','20:08:12'),(21297,69,'178.47.168.219','2015-04-24','20:11:09'),(21298,69,'178.47.168.219','2015-04-24','20:12:17'),(21299,1,'217.69.133.169','2015-04-25','07:45:55'),(21300,1,'217.69.133.169','2015-04-25','07:45:55'),(21301,1,'217.69.133.169','2015-04-25','08:33:07'),(21302,1,'217.69.133.169','2015-04-25','08:33:07'),(21303,1,'217.69.133.169','2015-04-25','09:37:33'),(21304,1,'217.69.133.169','2015-04-25','09:37:33'),(21305,69,'89.204.68.39','2015-04-27','11:35:10'),(21306,1,'89.204.68.39','2015-04-27','11:35:11'),(21307,1,'89.204.68.39','2015-04-27','11:35:13'),(21308,1,'89.204.68.39','2015-04-27','11:35:14'),(21309,1,'89.204.68.39','2015-04-27','11:35:43'),(21310,1,'89.204.68.39','2015-04-27','11:35:43'),(21311,2,'89.204.68.39','2015-04-27','11:35:44'),(21312,2,'89.204.68.39','2015-04-27','11:35:50'),(21313,2,'89.204.68.39','2015-04-27','11:35:52'),(21314,2,'89.204.68.39','2015-04-27','11:35:53'),(21315,2,'89.204.68.39','2015-04-27','11:35:58'),(21316,2,'89.204.68.39','2015-04-27','11:35:58'),(21317,69,'89.204.68.39','2015-04-27','11:35:59'),(21318,2,'89.204.68.39','2015-04-27','11:36:53'),(21319,2,'89.204.68.39','2015-04-27','11:36:54'),(21320,2,'89.204.68.39','2015-04-27','11:36:57'),(21321,2,'89.204.68.39','2015-04-27','11:37:01'),(21322,2,'89.204.68.39','2015-04-27','11:37:01'),(21323,2,'89.204.68.39','2015-04-27','11:37:22'),(21324,2,'89.204.68.39','2015-04-27','11:37:29'),(21325,2,'89.204.68.39','2015-04-27','11:37:30'),(21326,2,'89.204.68.39','2015-04-27','11:37:43'),(21327,2,'89.204.68.39','2015-04-27','11:37:43'),(21328,2,'89.204.68.39','2015-04-27','11:37:54'),(21329,2,'89.204.68.39','2015-04-27','11:44:39'),(21330,2,'89.204.68.39','2015-04-27','11:44:40'),(21331,2,'89.204.68.39','2015-04-27','11:44:40'),(21332,2,'89.204.68.39','2015-04-27','11:45:20'),(21333,2,'89.204.68.39','2015-04-27','11:45:20'),(21334,2,'89.204.68.39','2015-04-27','11:45:20'),(21335,2,'89.204.68.39','2015-04-27','11:46:08'),(21336,2,'89.204.68.39','2015-04-27','11:46:09'),(21337,2,'89.204.68.39','2015-04-27','11:47:40'),(21338,2,'89.204.68.39','2015-04-27','11:47:45'),(21339,2,'89.204.68.39','2015-04-27','11:47:46'),(21340,2,'89.204.68.39','2015-04-27','11:47:51'),(21341,2,'89.204.68.39','2015-04-27','11:47:52'),(21342,2,'89.204.68.39','2015-04-27','11:47:59'),(21343,2,'89.204.68.39','2015-04-27','11:48:00'),(21344,2,'89.204.68.39','2015-04-27','11:48:11'),(21345,2,'89.204.68.39','2015-04-27','11:48:11'),(21346,2,'89.204.68.39','2015-04-27','11:48:12'),(21347,2,'89.204.68.39','2015-04-27','11:48:16'),(21348,2,'89.204.68.39','2015-04-27','11:48:17'),(21349,2,'89.204.68.39','2015-04-27','11:48:34'),(21350,2,'89.204.68.39','2015-04-27','11:48:34'),(21351,2,'89.204.68.39','2015-04-27','11:48:35'),(21352,2,'89.204.68.39','2015-04-27','11:48:57'),(21353,2,'89.204.68.39','2015-04-27','11:48:58'),(21354,2,'89.204.68.39','2015-04-27','11:48:59'),(21355,2,'89.204.68.39','2015-04-27','11:49:00'),(21356,2,'89.204.68.39','2015-04-27','11:49:09'),(21357,2,'89.204.68.39','2015-04-27','11:49:26'),(21358,2,'89.204.68.39','2015-04-27','11:49:26'),(21359,2,'89.204.68.39','2015-04-27','11:49:27'),(21360,69,'89.204.68.39','2015-04-27','11:49:33'),(21361,69,'89.204.68.39','2015-04-27','11:49:37'),(21362,2,'89.204.68.39','2015-04-27','11:49:46'),(21363,2,'89.204.68.39','2015-04-27','11:49:48'),(21364,2,'89.204.68.39','2015-04-27','11:49:49'),(21365,2,'89.204.68.39','2015-04-27','11:49:57'),(21366,2,'89.204.68.39','2015-04-27','11:50:00'),(21367,2,'89.204.68.39','2015-04-27','11:50:00'),(21368,2,'89.204.68.39','2015-04-27','11:50:11'),(21369,2,'89.204.68.39','2015-04-27','11:50:14'),(21370,2,'89.204.68.39','2015-04-27','11:50:16'),(21371,2,'89.204.68.39','2015-04-27','11:50:16'),(21372,2,'89.204.68.39','2015-04-27','11:51:03'),(21373,2,'89.204.68.39','2015-04-27','11:51:16'),(21374,2,'89.204.68.39','2015-04-27','11:51:16'),(21375,2,'89.204.68.39','2015-04-27','11:51:16'),(21376,2,'89.204.68.39','2015-04-27','11:51:20'),(21377,2,'89.204.68.39','2015-04-27','11:51:21'),(21378,2,'89.204.68.39','2015-04-27','11:51:23'),(21379,2,'89.204.68.39','2015-04-27','11:51:26'),(21380,2,'89.204.68.39','2015-04-27','11:51:40'),(21381,2,'89.204.68.39','2015-04-27','11:51:41'),(21382,2,'89.204.68.39','2015-04-27','11:51:41'),(21383,2,'89.204.68.39','2015-04-27','11:51:42'),(21384,2,'89.204.68.39','2015-04-27','11:51:43'),(21385,2,'89.204.68.39','2015-04-27','11:51:44'),(21386,2,'89.204.68.39','2015-04-27','11:51:46'),(21387,2,'89.204.68.39','2015-04-27','11:52:02'),(21388,2,'89.204.68.39','2015-04-27','11:52:02'),(21389,2,'89.204.68.39','2015-04-27','11:52:03'),(21390,2,'89.204.68.39','2015-04-27','11:52:07'),(21391,2,'89.204.68.39','2015-04-27','11:52:07'),(21392,2,'89.204.68.39','2015-04-27','11:52:09'),(21393,2,'89.204.68.39','2015-04-27','11:52:10'),(21394,2,'89.204.68.39','2015-04-27','11:52:34'),(21395,2,'89.204.68.39','2015-04-27','11:52:35'),(21396,2,'89.204.68.39','2015-04-27','11:52:35'),(21397,2,'89.204.68.39','2015-04-27','11:52:36'),(21398,2,'89.204.68.39','2015-04-27','11:52:37'),(21399,69,'89.204.68.39','2015-04-27','11:52:38'),(21400,69,'176.214.252.75','2015-04-27','13:12:30'),(21401,1,'176.214.252.75','2015-04-27','13:12:31'),(21402,1,'176.214.252.75','2015-04-27','13:12:32'),(21403,1,'217.69.133.169','2015-05-13','10:55:50'),(21404,1,'217.69.133.169','2015-05-13','10:55:51'),(21405,1,'217.69.133.169','2015-05-25','19:05:55'),(21406,1,'217.69.133.169','2015-05-25','19:05:55'),(21407,1,'188.186.12.36','2015-05-27','13:56:20'),(21408,1,'188.186.12.36','2015-05-27','13:56:22'),(21409,1,'188.186.12.36','2015-05-27','13:56:22'),(21410,69,'188.186.12.36','2015-05-27','13:56:34'),(21411,69,'93.93.169.18','2015-05-28','19:12:31'),(21412,1,'93.93.169.18','2015-05-28','19:12:37'),(21413,1,'93.93.169.18','2015-05-28','19:12:43'),(21414,1,'178.47.184.166','2015-06-08','15:34:38'),(21415,1,'178.47.184.166','2015-06-08','15:34:41'),(21416,2,'178.47.184.166','2015-06-08','15:34:43'),(21417,2,'178.47.184.166','2015-06-08','15:34:48'),(21418,2,'178.47.184.166','2015-06-08','15:34:56'),(21419,2,'178.47.184.166','2015-06-08','15:35:00'),(21420,2,'178.47.184.166','2015-06-08','15:35:03'),(21421,2,'178.47.184.166','2015-06-08','15:35:03'),(21422,2,'178.47.184.166','2015-06-08','15:35:06'),(21423,2,'178.47.184.166','2015-06-08','15:35:12'),(21424,2,'178.47.184.166','2015-06-08','15:35:12'),(21425,1,'90.151.90.62','2015-06-09','15:08:08'),(21426,1,'90.151.90.62','2015-06-09','15:08:12'),(21427,1,'90.151.90.62','2015-06-09','15:08:13'),(21428,1,'64.79.85.205','2015-06-11','08:26:30'),(21429,1,'64.79.85.205','2015-06-11','08:26:45'),(21430,1,'64.79.85.205','2015-06-11','08:27:02'),(21431,1,'64.79.85.205','2015-06-11','08:27:04'),(21432,1,'64.79.85.205','2015-06-11','08:27:17'),(21433,1,'217.69.133.169','2015-06-17','05:13:15'),(21434,1,'217.69.133.169','2015-06-17','05:13:16'),(21435,1,'217.69.133.169','2015-06-17','07:02:42'),(21436,1,'217.69.133.169','2015-06-17','07:02:42'),(21437,69,'89.250.146.191','2015-06-17','16:14:54'),(21438,1,'89.250.146.191','2015-06-17','16:14:58'),(21439,1,'89.250.146.191','2015-06-17','16:14:58'),(21440,69,'89.250.146.191','2015-06-17','16:15:29'),(21441,1,'89.250.146.191','2015-06-17','16:15:29'),(21442,69,'89.250.146.191','2015-06-17','16:17:00'),(21443,1,'89.250.146.191','2015-06-17','16:17:03'),(21444,69,'89.250.146.191','2015-06-17','16:18:07'),(21445,1,'89.250.146.191','2015-06-17','16:18:08'),(21446,1,'217.69.133.169','2015-06-30','18:23:08'),(21447,1,'217.69.133.169','2015-06-30','18:23:08'),(21448,1,'217.69.133.169','2015-06-30','20:41:12'),(21449,1,'217.69.133.169','2015-06-30','20:41:12'),(21450,1,'217.69.133.169','2015-07-17','19:57:09'),(21451,1,'217.69.133.169','2015-07-17','19:57:09'),(21452,1,'217.69.133.169','2015-07-29','01:00:21'),(21453,1,'217.69.133.169','2015-07-29','01:00:21'),(21454,1,'217.69.133.169','2015-07-29','02:17:05'),(21455,1,'217.69.133.169','2015-07-29','02:17:06'),(21456,1,'217.69.133.169','2015-07-29','03:52:56'),(21457,1,'217.69.133.169','2015-07-29','03:52:56'),(21458,1,'217.69.133.169','2015-07-29','07:30:38'),(21459,1,'217.69.133.169','2015-07-29','07:30:38'),(21460,1,'217.69.133.169','2015-07-29','08:58:11'),(21461,1,'217.69.133.169','2015-07-29','08:58:11'),(21462,1,'92.255.164.59','2015-08-10','15:12:04'),(21463,1,'92.255.164.59','2015-08-10','15:12:06'),(21464,1,'217.69.133.169','2015-08-17','18:05:39'),(21465,1,'217.69.133.169','2015-08-17','18:05:39'),(21466,1,'217.69.133.169','2015-08-17','20:06:24'),(21467,1,'217.69.133.169','2015-08-17','20:06:24'),(21468,1,'178.46.28.219','2015-08-18','15:43:39'),(21469,1,'178.46.28.219','2015-08-18','15:43:43'),(21470,1,'178.46.28.219','2015-08-18','15:43:47'),(21471,1,'178.46.28.219','2015-08-18','16:10:51'),(21472,1,'178.46.28.219','2015-08-18','18:54:37'),(21473,1,'178.46.28.219','2015-08-18','18:54:42'),(21474,1,'178.46.28.219','2015-08-18','18:54:43'),(21475,1,'5.141.237.216','2015-12-02','14:12:02'),(21476,1,'5.141.237.216','2015-12-02','14:12:04'),(21477,1,'5.141.237.216','2015-12-02','14:13:57'),(21478,1,'5.141.237.216','2015-12-02','14:14:01'),(21479,1,'5.141.237.216','2015-12-02','14:14:06');
/*!40000 ALTER TABLE `pr_stats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_template_conditions`
--

DROP TABLE IF EXISTS `pr_template_conditions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_template_conditions` (
  `condition_id` int(11) NOT NULL AUTO_INCREMENT,
  `condition_template` varchar(250) NOT NULL,
  `condition_type` varchar(250) NOT NULL,
  `condition_var` varchar(250) NOT NULL,
  `condition_value` varchar(250) NOT NULL,
  `condition_node` int(11) NOT NULL,
  `condition_sort` int(11) NOT NULL,
  `condition_active` int(11) NOT NULL,
  PRIMARY KEY (`condition_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_template_conditions`
--

LOCK TABLES `pr_template_conditions` WRITE;
/*!40000 ALTER TABLE `pr_template_conditions` DISABLE KEYS */;
/*!40000 ALTER TABLE `pr_template_conditions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_users`
--

DROP TABLE IF EXISTS `pr_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_login` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_group` int(11) NOT NULL,
  `user_email` varchar(25) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_phone` varchar(50) NOT NULL,
  `user_lastlog` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_regdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_active` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_users`
--

LOCK TABLES `pr_users` WRITE;
/*!40000 ALTER TABLE `pr_users` DISABLE KEYS */;
INSERT INTO `pr_users` VALUES (1,'admin','827ccb0eea8a706c4c34a16891f84e7b',1,'','','','0000-00-00 00:00:00','2013-01-01 15:00:00',1),(2,'zyets','38edd80fb6464cf1ce857d1632c4ee5c',1,'','Матушкин Дмитрий','','0000-00-00 00:00:00','2013-07-02 00:00:00',1),(18,'prioritet','4ee531b13ed436442a56e2ef21280746',1,'','','','0000-00-00 00:00:00','0000-00-00 00:00:00',1),(21,'test','098f6bcd4621d373cade4e832627b4f6',1,'mail@mail.mail','Test','','0000-00-00 00:00:00','2015-03-26 13:14:55',1);
/*!40000 ALTER TABLE `pr_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_users_accesses`
--

DROP TABLE IF EXISTS `pr_users_accesses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_users_accesses` (
  `access_id` int(11) NOT NULL AUTO_INCREMENT,
  `access_group` int(11) NOT NULL,
  `access_type` varchar(25) NOT NULL,
  `access_value` varchar(1) NOT NULL,
  PRIMARY KEY (`access_id`)
) ENGINE=MyISAM AUTO_INCREMENT=396 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_users_accesses`
--

LOCK TABLES `pr_users_accesses` WRITE;
/*!40000 ALTER TABLE `pr_users_accesses` DISABLE KEYS */;
INSERT INTO `pr_users_accesses` VALUES (378,15,'banners','D'),(377,2,'users','R'),(376,2,'templates','R'),(375,2,'nodes','V'),(241,1,'templates','W'),(240,1,'nodes','W'),(239,1,'menu','W'),(238,1,'hooks','W'),(237,1,'files','W'),(374,2,'node3','W'),(236,1,'content','W'),(235,1,'components','W'),(234,1,'banners','W'),(242,1,'users','W'),(373,2,'menu','V'),(372,2,'hooks','V'),(371,2,'files','W'),(370,2,'content','V'),(369,2,'components','R'),(368,2,'banners','V'),(379,15,'components','D'),(380,15,'content','D'),(381,15,'files','D'),(382,15,'hooks','D'),(383,15,'menu','D'),(384,15,'nodes','D'),(385,15,'templates','D'),(386,15,'users','D'),(387,16,'banners','D'),(388,16,'components','D'),(389,16,'content','D'),(390,16,'files','D'),(391,16,'hooks','D'),(392,16,'menu','D'),(393,16,'nodes','R'),(394,16,'templates','D'),(395,16,'users','D');
/*!40000 ALTER TABLE `pr_users_accesses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pr_users_groups`
--

DROP TABLE IF EXISTS `pr_users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pr_users_groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(25) NOT NULL,
  `group_desc` varchar(250) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pr_users_groups`
--

LOCK TABLES `pr_users_groups` WRITE;
/*!40000 ALTER TABLE `pr_users_groups` DISABLE KEYS */;
INSERT INTO `pr_users_groups` VALUES (1,'Администратор','описание'),(2,'Редактор','');
/*!40000 ALTER TABLE `pr_users_groups` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-02 15:00:23
