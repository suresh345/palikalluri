-- MySQL dump 10.16  Distrib 10.1.36-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: palli_kallori
-- ------------------------------------------------------
-- Server version	10.1.36-MariaDB

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
-- Table structure for table `school`
--

DROP TABLE IF EXISTS `school`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `school` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `scname` mediumtext NOT NULL,
  `sccity` mediumtext NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `sboard` varchar(100) NOT NULL,
  `scpic` longtext NOT NULL,
  `sabout` longtext NOT NULL,
  `title` varchar(255) NOT NULL,
  `amobile_number` varchar(40) NOT NULL,
  `aname` mediumtext NOT NULL,
  `pic` longtext NOT NULL,
  `stname` mediumtext NOT NULL,
  `stclas` varchar(255) NOT NULL,
  `sttitle` varchar(255) NOT NULL,
  `stpic` longtext NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `school`
--
-- ORDER BY:  `sid`

LOCK TABLES `school` WRITE;
/*!40000 ALTER TABLE `school` DISABLE KEYS */;
INSERT INTO `school` VALUES (2,'Vijayamoorthi','anbumalar534@gmail.com','9487384636','Kamlavati higher secondary school','Tuticorin','628229','CBSE','15512631372351489133550.jpg','Our school has been founded in year 1972. The school is named as kamlavati higher secondary school to honour kamlavati jain. It was a simple beginning with 100 students in 1972.\r\nNow our school is expanded to include 64 smartclass rooms with latest technology,English mentor lab,3d lab ,atal tinkering lab ,computer labs,science labs,etc.,\r\nIIT-JEE/NEET coaching classes for the students of class 6 to 10./\r\nInnovative strategies are under progress for years to come. ','à®®à¯à®¤à®²à¯à®µà®°à¯','04639280227','R.Shanmuhanandan','1.jpg~','Srinandhini.T.R~Prasha','12~11','	à®ªà®Ÿà®¿à®ªà¯à®ªà¯~à®ªà®Ÿà®¿à®ªà¯à®ªà¯','P_20190227_154617_1.jpg~15512631372351489133550.jpg~','2019-02-27 10:32:55'),(3,'Vijayamoorthi','anbumalar534@gmail.com','9487384636','Kamlavati higher secondary school','Tuticorin','628229','CBSE','15512631372351489133550.jpg','Our school has been founded in year 1972. The school is named as kamlavati higher secondary school to honour kamlavati jain. It was a simple beginning with 100 students in 1972.\r\nNow our school is expanded to include 64 smartclass rooms with latest technology,English mentor lab,3d lab ,atal tinkering lab ,computer labs,science labs,etc.,\r\nIIT-JEE/NEET coaching classes for the students of class 6 to 10./\r\nInnovative strategies are under progress for years to come. ','à®®à¯à®¤à®²à¯à®µà®°à¯','04639280227','R.Shanmuhanandan','1.jpg~','Srinandhini.T.R~Prasha','12~11','	à®ªà®Ÿà®¿à®ªà¯à®ªà¯~à®ªà®Ÿà®¿à®ªà¯à®ªà¯','P_20190227_154617_1.jpg~15512631372351489133550.jpg~','2019-02-27 10:33:19'),(4,'à®š.à®®à¯à®¤à¯à®¤à¯à®•à¯à®•à¯à®®à®¾à®°à®¿','npssrkrotaryschoolsvk@gmail.com','8903710191','à®Žà®©à¯.à®ªà®¿.à®Žà®¸à¯.à®Žà®¸à¯.à®†à®°à¯.à®•à¯‡.à®°à¯‹à®Ÿà¯à®Ÿà®°à®¿ à®®à¯†à®Ÿà¯à®°à®¿à®•à¯à®²à¯‡à®·à®©à¯ à®®à¯‡à®²à¯à®¨à®¿à®²à¯ˆà®ªà¯à®ªà®³à¯à®³à®¿ à®šà®¿à®µà®•à®¾à®šà®¿,à®µà®¿à®¸à¯à®µà®¨à®¤à¯à®¤à®®à¯ à®µà®¿à®°à¯à®¤à¯à®¨à®•à®°à¯ à®®à®¾','à®šà®¿à®µà®•à®¾à®šà®¿ ','626189','MATRICULATION','M.K.Dharshana.JPG','\"à®Žà®´à¯à®¤à¯à®¤à®±à®¿à®µà®¿à®¤à¯à®¤à®µà®©à¯  à®‡à®±à¯ˆà®µà®©à¯ \" à®Žà®©à¯à®± à®‰à®©à¯à®©à®¤ à®µà®¾à®•à¯à®•à¯ˆ à®®à®©à®¤à®¿à®²à¯  à®•à¯Šà®£à¯à®Ÿà¯ à®šà®¿à®µà®•à®¾à®šà®¿ à®°à¯‹à®Ÿà¯à®Ÿà®°à®¿ à®šà®™à¯à®•à®¤à¯à®¤à®¿à®©à®°à®¾à®²à¯ à®à®´à¯ˆ à®•à®¿à®°à®¾à®®à®ªà¯à®ªà¯à®±à®•à¯ à®•à¯à®´à®¨à¯à®¤à¯ˆà®•à®³à¯ à®ªà®¯à®©à®Ÿà¯ˆà®¯à¯à®®à¯ à®¨à¯‹à®•à¯à®•à®¿à®²à¯ à®…à®©à¯à®±à¯ˆà®¯ à®°à¯‹à®Ÿà¯à®Ÿà®°à®¿ à®šà®™à¯à®•à®¤à¯à®¤à®²à¯ˆà®µà®°à¯ à®Ž. à®Žà®®à¯ .à®Žà®¸à¯. à®œà®¿. à®µà®¿à®œà®¯à®•à¯à®®à®¾à®°à¯ à®…à®µà®°à¯à®•à®³à®¾à®²à¯ à®‰à®°à¯à®µà®¾à®•à¯à®•à®ªà¯à®ªà®Ÿà¯à®Ÿ à®†à®™à¯à®•à®¿à®² à®µà®´à®¿ à®ªà®³à¯à®³à®¿.à®¤à®±à¯à®ªà¯‹à®¤à¯ 28 à®•à®¿à®°à®¾à®®à®ªà¯à®ªà¯à®±à®•à¯à®•à®³à®¿à®²à®¿à®°à¯à®¨à¯à®¤à¯ 900 à®®à®¾à®£à®µà®°à¯à®•à®³à¯ à®ªà®¯à®¿à®²à¯à®•à®¿à®±à®¾à®°à¯à®•à®³à¯. à®®à®¾à®£à®µà®°à¯à®•à®³à®¿à®©à¯ à®¤à®¿à®±à®®à¯ˆà®•à®³à¯ˆ à®µà®³à®°à¯à®•à¯à®•à¯à®®à¯ à®µà®¿à®¤à®®à®¾à®• à®šà®¿à®²à®®à¯à®ªà®®à¯, à®•à®°à®¾à®¤à¯à®¤à¯‡, à®¯à¯‹à®•à®¾, à®‡à®šà¯ˆ, à®¨à®Ÿà®©à®®à¯, à®šà®®à®¸à¯à®•à®¿à®°à¯à®¤à®®à¯ à®Žà®© à®ªà®² à®•à®²à¯ˆà®•à®³à¯ à®ªà¯‹à®¤à®¿à®•à¯à®•à®ªà¯à®ªà®Ÿà¯ à®•à®¿à®©à¯à®±à®©. à®®à¯‡à®²à¯à®®à¯ à®šà®¾à®°à®£à®°à¯ à®šà®¾à®°à®£à®¿à®¯à®°à¯ à®‡à®¯à®•à¯à®•à®™à¯à®•à®³à¯ à®®à¯‚à®²à®®à¯ à®’à®´à¯à®•à¯à®•à®¤à¯à®¤à¯ˆà®ªà¯ à®ªà¯‡à®£à¯à®®à¯ à®®à¯à®±à¯ˆà®¯à¯ˆ à®®à®¾à®£à®µà®°à¯à®•à¯à®•à¯à®ªà¯ à®ªà¯‹à®¤à®¿à®•à¯à®•à®¿à®±à¯‹à®®à¯. à®¤à®®à®¿à®´à¯à®‡à®²à®•à¯à®•à®¿à®¯ à®®à®©à¯à®±à®®à¯ à®‰à®Ÿà¯à®ªà®Ÿ à®…à®©à¯ˆà®¤à¯à®¤à¯ à®ªà®¾à®Ÿ  à®µà®¾à®°à®¿à®¯à®¾à®© à®®à®©à¯à®±à®™à¯à®•à®³à¯à®®à¯ à®µà®¾à®°à®®à¯à®¤à¯‹à®±à¯à®®à¯ à®šà¯†à®¯à®²à¯à®ªà®Ÿà¯à®•à®¿à®©à¯à®±à®©. à®®à¯‡à®²à¯à®®à¯ à®¨à®¾à®£à®¯ à®šà¯‡à®•à®°à®¿à®ªà¯à®ªà¯,à®¤à®ªà®¾à®²à¯ à®¤à®²à¯ˆ à®šà¯‡à®•à®°à®¿à®ªà¯à®ªà¯ à®Žà®© à®ªà®² à®¤à¯à®±à¯ˆà®•à®³à¯ˆ à®ªà®±à¯à®±à®¿à®¯à¯à®®à¯ à®µà®¿à®³à®•à¯à®•à¯à®•à®¿à®±à®¤à¯ .  à®µà®¿à®³à¯ˆà®¯à®¾à®Ÿà¯à®Ÿà¯, à®µà®¿à®©à®¾à®Ÿà®¿à®µà®¿à®©à®¾, à®Žà®© à®…à®©à¯ˆà®¤à¯à®¤à®¿à®²à¯ à®¨à®®à¯ à®®à®¾à®£à®µà®°à¯à®•à®³à¯ à®®à®¾à®¨à®¿à®² à®¤à¯‡à®šà®¿à®¯ à®…à®³à®µà®¿à®²à¯ à®µà¯†à®±à¯à®±à®¿à®ªà¯†à®±à¯à®±à¯ à®ªà®³à¯à®³à®¿à®•à¯à®•à¯ à®ªà¯†à®°à¯à®®à¯ˆ à®šà¯‡à®°à¯à®•à¯à®•à®¿à®©à¯à®±à®©à®°à¯.à®®à®¾à®£à®µà®°à¯à®•à®³à®¿à®©à¯ à®¤à®©à®¿à®¤à¯à®¤à®¿à®±à®©à¯à®•à®³à¯ˆ à®µà¯†à®³à®¿à®•à¯à®•à¯Šà®£à®°à¯à®®à¯ à®ªà¯Šà®°à¯à®Ÿà¯à®Ÿà¯ à®ªà®²à¯à®µà¯‡à®±à¯ à®ªà¯‹à®Ÿà¯à®Ÿà®¿à®•à®³à¯ˆ à®¨à®Ÿà®¤à¯à®¤à®¿ à®µà®°à¯à®•à®¿à®±à¯‹à®®à¯. à®®à®¤à®šà¯à®šà®¾à®°à¯à®ªà®¿à®©à¯à®±à®¿ à®…à®©à¯ˆà®¤à¯à®¤à¯ à®µà®¿à®´à®¾à®•à¯à®•à®³à¯ˆà®¯à¯à®®à¯ à®šà®¿à®±à®ªà¯à®ªà®¾à®• à®•à¯Šà®£à¯à®Ÿà®¾à®Ÿà®¿à®µà®°à¯à®•à®¿à®±à¯‹à®®à¯.à®…à®ªà®¾à®•à®¸à¯ à®®à®±à¯à®±à¯à®®à¯ à®¹à®¿à®¨à¯à®¤à®¿ à®¤à¯‡à®°à¯à®µà¯à®•à®³à¯à®•à¯à®•à¯à®®à¯ à®Žà®™à¯à®•à®³à¯ à®®à®¾à®£à®µà®°à¯à®•à®³à¯ˆ à®…à®©à¯à®ªà¯à®ªà¯à®•à®¿à®±à¯‹à®®à¯.à®ªà¯‡à®šà¯à®šà¯, à®•à®Ÿà¯à®Ÿà¯à®°à¯ˆ ,à®“à®µà®¿à®¯à®ªà¯‹à®Ÿà®Ÿà®¿à®•à®³à®¿à®²à¯à®®à¯ à®µà¯†à®±à¯à®±à®¿ à®ªà¯†à®±à¯à®±à¯ à®µà®°à¯à®•à®¿à®±à®¾à®°à¯à®•à®³à¯. à®šà¯à®±à¯à®±à¯  à®šà¯‚à®´à®²à¯ à®…à®®à¯ˆà®ªà¯à®ªà®¿à®©à¯ à®®à¯‚à®²à®®à¯ à®•à®¾à®¯à¯à®•à®±à®¿ à®¤à¯‹à®Ÿà¯à®Ÿà®®à¯ à®ªà¯‹à®Ÿà¯à®Ÿà¯à®®à¯ à®µà®°à¯à®•à®¿à®±à®¾à®°à¯à®•à®³à¯.','à®¤à®¾à®³à®¾à®³à®°à¯~à®®à¯à®¤à®²à¯à®µà®°à¯','9442230259~8903710191','à®Žà®¸à¯.à®®à®•à¯‡à®¸à¯à®µà®°à®©à¯ ~à®Žà®¸à¯.à®®à¯à®¤à¯à®¤à¯à®•à¯à®•à¯à®®à®¾à®°à®¿','IMG-20181012-WA0014.jpg~','à®¨à®¾.à®•à®¿à®°à¯à®¤à¯à®¤à®¿à®•à®¾ ~à®šà¯.à®µà®¿à®·à®¾à®²à¯ à®•à®¾à®°à¯à®¤à¯à®¤à®¿à®•à¯ ~à®šà¯.à®ªà®¿à®°à®šà®¾à®¤à¯ ~à®®à¯.à®•.à®¤à®°à¯à®·à®©à®¾','12~7~5~2','	à®ªà®Ÿà®¿à®ªà¯à®ªà¯~à®µà®¿à®³à¯ˆà®¯à®¾à®Ÿà¯à®Ÿà¯~à®µà®¿à®³à¯ˆà®¯à®¾à®Ÿà¯à®Ÿà¯~à®•à®²à¯ˆ / à®‡à®²à®•à¯à®•à®¿à®¯à®®à¯','','2019-02-27 12:36:34'),(14,'à®Žà®¸à¯.à®®à¯à®¤à¯à®¤à¯à®•à¯à®•à¯à®®à®¾à®°à®¿ ','npssrkrotaryschoolsvk@gmail.com','8903710191','à®Žà®©à¯.à®ªà®¿.à®Žà®¸à¯.à®Žà®¸à¯.à®†à®°à¯.à®•à¯‡ .à®°à¯‹à®Ÿà¯à®Ÿà®°à®¿ à®®à¯†à®Ÿà¯à®°à®¿à®•à¯à®²à¯‡à®·à®©à¯ à®®à¯‡à®²à¯à®¨à®¿à®²à¯ˆà®ªà¯à®ªà®³à¯à®³à®¿ à®šà®¿à®µà®•à®¾à®šà®¿ à®µà®¿à®¸à¯à®µà®¨à®¤à¯à®¤à®®à¯ à®µà®¿à®°à¯à®¤à¯à®¨à®•à®°à¯ à®®à®','à®šà®¿à®µà®•à®¾à®šà®¿ ','626189','MATRICULATION','school/IMG_20190227_150609.jpg','already  sent  ','à®®à¯à®¤à®²à¯à®µà®°à¯','8903710191','à®Žà®¸à¯.à®®à¯à®¤à¯à®¤à¯à®•à¯à®•à¯à®®à®¾à®°à®¿','DSC_2922.JPG~','à®¨à®¾.à®•à®¿à®°à¯à®¤à¯à®¤à®¿à®•à®¾~à®šà¯.à®µà®¿à®·à®¾à®²à¯ à®•à®¾à®°à¯à®¤à¯à®¤à®¿à®•à¯ ~à®šà¯.à®ªà®¿à®°à®šà®¾à®¤à¯ ~à®®à¯.à®•.à®¤à®°à¯à®·à®©à®¾ ','12~7~5~2','	à®ªà®Ÿà®¿à®ªà¯à®ªà¯~à®µà®¿à®³à¯ˆà®¯à®¾à®Ÿà¯à®Ÿà¯~à®µà®¿à®³à¯ˆà®¯à®¾à®Ÿà¯à®Ÿà¯~à®•à®²à¯ˆ / à®‡à®²à®•à¯à®•à®¿à®¯à®®à¯','084.JPG~DSC_6280.JPG~DSC_6123.JPG~M.K.Dharshana.JPG~','2019-02-28 07:13:37'),(15,'à®šà®¨à¯à®¤à®¿à®°à®šà¯‡à®•à®°à¯ à®•','arunachalahighschool@gmail.com','8525056998','à®¸à¯à®°à¯€ à®…à®°à¯à®£à®¾à®šà¯à®šà®²à®¾à®‰à®¯à®°à¯à®¨à®¿à®²à¯ˆ à®ªà®³à¯à®³à®¿','à®…à®°à¯‚à®°à¯','636906','STATE BOARD','school/IMG_20190227_100742.jpg','à®Žà®™à¯à®•à®³à¯ à®ªà®³à¯à®³à®¿ à®ªà¯Šà®°à¯à®³à®¾à®¤à®°à®¤à¯à®¤à®¿à®²à¯ à®®à®¿à®•à®µà¯à®®à¯ à®ªà®¿à®±à¯à®ªà®Ÿà¯à®Ÿ à®®à®´à¯ˆà®µà®¾à®´à¯ à®®à®¾à®£à®µà®°à¯à®•à®³à¯ à®•à®²à¯à®µà®¿à®¯à®¿à®²à¯ à®®à¯‡à®©à¯à®ªà®Ÿ à®µà¯‡à®£à¯à®Ÿà¯à®®à¯ à®Žà®©à¯à®± à®…à®Ÿà®¿à®ªà¯à®ªà®Ÿà¯ˆà®¯à®¿à®²à¯ à®•à®Ÿà®¨à¯à®¤ 2005 à®®à¯\r\nà®†à®£à¯à®Ÿà¯ à®®à®¨à¯à®¤à®¿à®•à¯à®³à®®à¯à®ªà®Ÿà¯à®Ÿà®¿ à®Žà®©à¯à®®à¯ à®•à®¿à®°à®¾à®®à®¤à¯à®¤à®¿à®²à¯ à®¨à®¿à®±à¯à®µà®ªà¯à®ªà®Ÿà¯à®Ÿà®¤à¯. à®Žà®™à¯à®•à®³à¯ à®¤à®¾à®³à®¾à®³à®°à¯ à®…à®µà®°à¯à®•à®³à®¿à®©à¯ à®‡à®°à®•à¯à®• à®•à¯à®£à®¤à¯à®¤à®¾à®²à¯ à®†à®¤à®°à®µà®±à¯à®± à®Žà®£à¯à®£à®±à¯à®± à®®à®¾à®£à®µà®°à¯à®•à®³à¯ à®‡à®²à®µà®šà®®à®¾à®• à®•à®²à¯à®µà®¿ à®ªà®¯à®¿à®©à¯à®±à¯ à®µà®°à¯à®•à®¿à®±à®¾à®°à¯à®•à®³à¯. à®®à¯‡à®²à¯à®®à¯ à®Žà®™à¯à®•à®³à¯ à®ªà®³à¯à®³à®¿ à®®à®¾à®£à®µà®°à¯à®•à®³à¯ à®¤à¯†à®©à¯à®©à®¿à®¨à¯à®¤à®¿à®¯ à®…à®³à®µà®¿à®²à®¾à®© à®•à®°à®¾à®¤à¯à®¤à¯‡ à®ªà¯‹à®Ÿà¯à®Ÿà®¿à®¯à®¿à®²à¯ à®ªà®™à¯à®•à¯à®ªà¯à®ªà¯†à®±à¯à®±à¯ à®®à¯à®¤à®²à¯ à®‡à®Ÿà®¤à¯à®¤à¯ˆà®¯à¯à®®à¯ à®ªà®¿à®Ÿà®¿à®¤à¯à®¤à¯à®³à¯à®³à®¾à®°à¯à®•à®³à¯. à®¨à®•à®°à¯à®ªà¯à®ªà¯à®± à®®à®¾à®£à®µà®°à¯à®•à®³à¯à®•à¯à®•à¯ à®•à®¿à®Ÿà¯ˆà®•à¯à®•à¯à®®à¯ à®…à®©à¯ˆà®¤à¯à®¤à¯à®®à¯ à®Žà®™à¯à®•à®³à¯ à®ªà®³à¯à®³à®¿ à®®à®¾à®£à®µà®°à¯à®•à®³à¯à®•à¯à®•à¯à®®à¯ à®•à®¿à®Ÿà¯ˆà®•à¯à®• à®µà¯‡à®£à¯à®Ÿà¯à®®à¯ à®Žà®© à®¨à®¾à®™à¯à®•à®³à¯ à®ªà®¿à®±à®®à¯Šà®´à®¿à®•à®³à®¾à®© à®†à®™à¯à®•à®¿à®²à®®à¯,à®¹à®¿à®¨à¯à®¤à®¿,à®šà®®à®¸à¯à®•à®¿à®°à¯à®¤à®®à¯ à®®à®±à¯à®±à¯à®®à¯ à®•à®°à®¾à®¤à¯à®¤à¯‡, à®µà®¿à®³à¯ˆà®¯à®¾à®Ÿà¯à®Ÿà¯ à®ªà®¯à®¿à®±à¯à®šà®¿ à®µà®´à®™à¯à®•à®ªà¯à®ªà®Ÿà¯à®Ÿà¯ à®µà®°à¯à®•à®¿à®±à¯‹à®®à¯. à®®à¯‡à®²à¯à®®à¯ à®Žà®™à¯à®•à®³à¯ à®ªà®³à¯à®³à®¿ à®¤à®©à®¿à®¯à®¾à®°à¯ à®ªà®³à¯à®³à®¿à®¯à®¾à®• à®‡à®°à¯à®¨à¯à®¤à®¾à®²à¯à®®à¯ à®‡à®²à®¾à®ª à®¨à¯‹à®•à¯à®•à®¿à®²à¯ à®‡à®²à¯à®²à®¾à®¤à¯ à®šà¯‡à®µà¯ˆ à®¨à¯‹à®•à¯à®•à®¿à®²à¯ à®¨à®¿à®±à¯à®µà®ªà¯à®ªà®Ÿà¯à®Ÿà®¤à¯ à®Žà®©à¯à®ªà®¤à®¿à®²à¯ à®ªà¯†à®°à¯à®®à¯ˆ à®…à®Ÿà¯ˆà®•à®¿à®±à¯‹à®®à¯..  \r\n\r\n                                                     à®¨à®©à¯à®±à®¿   à®Žà®™à¯à®•à®³à¯ˆ à®ªà¯‹à®©à¯à®± à®Žà®£à¯à®£à®®à¯ à®•à¯Šà®£à¯à®Ÿ à®¤à®®à®¿à®´à¯ à®¹à®¿à®¨à¯à®¤à¯ à®¨à®¾à®³à®¿à®¤à®´à¯ à®Žà®©à¯à®±à¯à®®à¯ à®‡à®µà¯à®µà¯à®²à®•à®¿à®²à¯ à®¨à®¿à®²à¯ˆà®¤à¯à®¤à®¿à®°à¯à®•à¯à®• à®µà®¾à®´à¯à®¤à¯à®¤à¯à®•à¯à®•à®³à¯..\r\n','à®¤à®¾à®³à®¾à®³à®°à¯~à®šà¯†à®¯à®²à®¾à®³à®°à¯~à®®à¯à®¤à®²à¯à®µà®°à¯','6383787656~9787238779~85250569','à®°à®®à¯‡à®·à¯ à®…~à®šà®¿à®±à¯à®±à®°à®šà¯ à®šà®¿~à®šà®¨à¯à®¤à®¿à®°à®šà¯‡à®•à®°à¯ à®•','IMG-20190215-WA0001.jpg~IMG-20190215-WA0009.jpg~IMG_20190227_114413.jpg~','à®¤à®¿à®°à®¿à®·à®¾ à®µà¯‡~à®•à¯à®£à®¾à®²à¯ à®œà¯†~à®žà®¾à®©à®¸à¯à®°à¯€ à®†~à®®à®°à¯à®¤à®µà¯‡à®²à¯ à®†','9~8~6~4','	à®ªà®Ÿà®¿à®ªà¯à®ªà¯~à®µà®¿à®³à¯ˆà®¯à®¾à®Ÿà¯à®Ÿà¯~à®•à®²à¯ˆ / à®‡à®²à®•à¯à®•à®¿à®¯à®®à¯~à®šà®®à¯‚à®• à®…à®•à¯à®•à®±à¯ˆ','IMG_20190227_120204.jpg~IMG_20190227_120413.jpg~IMG_20190227_120211.jpg~IMG_20190227_120343.jpg~','2019-03-01 05:22:49'),(16,'à®šà®¨à¯à®¤à®¿à®°à®šà¯‡à®•à®°à¯ à®•','arunachalahighschool@gmail.com','8525056998','à®¸à¯à®°à¯€ à®…à®°à¯à®£à®¾à®šà¯à®šà®²à®¾ à®‰à®¯à®°à¯à®¨à®¿à®²à¯ˆ à®ªà®³à¯à®³à®¿','à®…à®°à¯‚à®°à¯','636906','STATE BOARD','school/IMG_20190227_100742.jpg','à®Žà®™à¯à®•à®³à¯ à®ªà®³à¯à®³à®¿ à®ªà¯Šà®°à¯à®³à®¾à®¤à®°à®¤à¯à®¤à®¿à®²à¯ à®®à®¿à®•à®µà¯à®®à¯ à®ªà®¿à®±à¯à®ªà®Ÿà¯à®Ÿ à®®à®´à¯ˆà®µà®¾à®´à¯ à®®à®¾à®£à®µà®°à¯à®•à®³à¯ à®•à®²à¯à®µà®¿à®¯à®¿à®²à¯ à®®à¯‡à®©à¯à®ªà®Ÿ à®µà¯‡à®£à¯à®Ÿà¯à®®à¯ à®Žà®©à¯à®± à®…à®Ÿà®¿à®ªà¯à®ªà®Ÿà¯ˆà®¯à®¿à®²à¯ à®•à®Ÿà®¨à¯à®¤ 2005 à®®à¯\r\nà®†à®£à¯à®Ÿà¯ à®®à®¨à¯à®¤à®¿à®•à¯à®³à®®à¯à®ªà®Ÿà¯à®Ÿà®¿ à®Žà®©à¯à®®à¯ à®•à®¿à®°à®¾à®®à®¤à¯à®¤à®¿à®²à¯ à®¨à®¿à®±à¯à®µà®ªà¯à®ªà®Ÿà¯à®Ÿà®¤à¯. à®Žà®™à¯à®•à®³à¯ à®¤à®¾à®³à®¾à®³à®°à¯ à®…à®µà®°à¯à®•à®³à®¿à®©à¯ à®‡à®°à®•à¯à®• à®•à¯à®£à®¤à¯à®¤à®¾à®²à¯ à®†à®¤à®°à®µà®±à¯à®± à®Žà®£à¯à®£à®±à¯à®± à®®à®¾à®£à®µà®°à¯à®•à®³à¯ à®‡à®²à®µà®šà®®à®¾à®• à®•à®²à¯à®µà®¿ à®ªà®¯à®¿à®©à¯à®±à¯ à®µà®°à¯à®•à®¿à®±à®¾à®°à¯à®•à®³à¯. à®®à¯‡à®²à¯à®®à¯ à®Žà®™à¯à®•à®³à¯ à®ªà®³à¯à®³à®¿ à®®à®¾à®£à®µà®°à¯à®•à®³à¯ à®¤à¯†à®©à¯à®©à®¿à®¨à¯à®¤à®¿à®¯ à®…à®³à®µà®¿à®²à®¾à®© à®•à®°à®¾à®¤à¯à®¤à¯‡ à®ªà¯‹à®Ÿà¯à®Ÿà®¿à®¯à®¿à®²à¯ à®ªà®™à¯à®•à¯à®ªà¯à®ªà¯†à®±à¯à®±à¯ à®®à¯à®¤à®²à¯ à®‡à®Ÿà®¤à¯à®¤à¯ˆà®¯à¯à®®à¯ à®ªà®¿à®Ÿà®¿à®¤à¯à®¤à¯à®³à¯à®³à®¾à®°à¯à®•à®³à¯. à®¨à®•à®°à¯à®ªà¯à®ªà¯à®± à®®à®¾à®£à®µà®°à¯à®•à®³à¯à®•à¯à®•à¯ à®•à®¿à®Ÿà¯ˆà®•à¯à®•à¯à®®à¯ à®…à®©à¯ˆà®¤à¯à®¤à¯à®®à¯ à®Žà®™à¯à®•à®³à¯ à®ªà®³à¯à®³à®¿ à®®à®¾à®£à®µà®°à¯à®•à®³à¯à®•à¯à®•à¯à®®à¯ à®•à®¿à®Ÿà¯ˆà®•à¯à®• à®µà¯‡à®£à¯à®Ÿà¯à®®à¯ à®Žà®© à®¨à®¾à®™à¯à®•à®³à¯ à®ªà®¿à®±à®®à¯Šà®´à®¿à®•à®³à®¾à®© à®†à®™à¯à®•à®¿à®²à®®à¯,à®¹à®¿à®¨à¯à®¤à®¿,à®šà®®à®¸à¯à®•à®¿à®°à¯à®¤à®®à¯ à®®à®±à¯à®±à¯à®®à¯ à®•à®°à®¾à®¤à¯à®¤à¯‡, à®µà®¿à®³à¯ˆà®¯à®¾à®Ÿà¯à®Ÿà¯ à®ªà®¯à®¿à®±à¯à®šà®¿ à®µà®´à®™à¯à®•à®ªà¯à®ªà®Ÿà¯à®Ÿà¯ à®µà®°à¯à®•à®¿à®±à¯‹à®®à¯. à®®à¯‡à®²à¯à®®à¯ à®Žà®™à¯à®•à®³à¯ à®ªà®³à¯à®³à®¿ à®¤à®©à®¿à®¯à®¾à®°à¯ à®ªà®³à¯à®³à®¿à®¯à®¾à®• à®‡à®°à¯à®¨à¯à®¤à®¾à®²à¯à®®à¯ à®‡à®²à®¾à®ª à®¨à¯‹à®•à¯à®•à®¿à®²à¯ à®‡à®²à¯à®²à®¾à®¤à¯ à®šà¯‡à®µà¯ˆ à®¨à¯‹à®•à¯à®•à®¿à®²à¯ à®¨à®¿à®±à¯à®µà®ªà¯à®ªà®Ÿà¯à®Ÿà®¤à¯ à®Žà®©à¯à®ªà®¤à®¿à®²à¯ à®ªà¯†à®°à¯à®®à¯ˆ à®…à®Ÿà¯ˆà®•à®¿à®±à¯‹à®®à¯..  \r\n\r\n                                                     à®¨à®©à¯à®±à®¿   à®Žà®™à¯à®•à®³à¯ˆ à®ªà¯‹à®©à¯à®± à®Žà®£à¯à®£à®®à¯ à®•à¯Šà®£à¯à®Ÿ à®¤à®®à®¿à®´à¯ à®¹à®¿à®¨à¯à®¤à¯ à®¨à®¾à®³à®¿à®¤à®´à¯ à®Žà®©à¯à®±à¯à®®à¯ à®‡à®µà¯à®µà¯à®²à®•à®¿à®²à¯ à®¨à®¿à®²à¯ˆà®¤à¯à®¤à®¿à®°à¯à®•à¯à®• à®µà®¾à®´à¯à®¤à¯à®¤à¯à®•à¯à®•à®³à¯..\r\n','à®¤à®¾à®³à®¾à®³à®°à¯~à®šà¯†à®¯à®²à®¾à®³à®°à¯~à®®à¯à®¤à®²à¯à®µà®°à¯','6383787656~9787238779~85250569','à®°à®®à¯‡à®·à¯ à®…~à®šà®¿à®±à¯à®±à®°à®šà¯ à®šà®¿~à®šà®¨à¯à®¤à®¿à®°à®šà¯‡à®•à®°à¯ à®•','IMG-20190215-WA0001.jpg~IMG-20190215-WA0009.jpg~IMG_20190227_114413.jpg~','à®¤à®¿à®°à®¿à®·à®¾ à®µà¯‡~à®•à¯à®£à®¾à®²à¯ à®œà¯†~à®žà®¾à®©à®¸à¯à®°à¯€ à®†~à®®à®°à¯à®¤à®µà¯‡à®²à¯ à®†','9~8~6~4','	à®ªà®Ÿà®¿à®ªà¯à®ªà¯~à®µà®¿à®³à¯ˆà®¯à®¾à®Ÿà¯à®Ÿà¯~à®•à®²à¯ˆ / à®‡à®²à®•à¯à®•à®¿à®¯à®®à¯~à®šà®®à¯‚à®• à®…à®•à¯à®•à®±à¯ˆ','IMG_20190227_120204.jpg~IMG_20190227_120413.jpg~IMG_20190227_120211.jpg~IMG_20190227_120343.jpg~','2019-03-01 06:16:55'),(17,'vijayamoorthi','anbumalar534@gmail.com','0948738463','à®•à®®à®²à®¾à®µà®¤à®¿ à®®à¯‡à®©à®¿à®²à¯ˆà®ªà¯à®ªà®³à¯à®³à®¿,à®šà®¾à®•à¯à®ªà¯à®°à®®à¯','à®¤à¯‚à®¤à¯à®¤à¯à®•à¯à®•à¯à®Ÿà®¿','628152','CBSE','school/92eab79f-eed9-4e4c-b3a2-99d4700fe133 (1).jpg','à®‡à®¨à¯à®¤à®¿à®¯à®¾à®µà®¿à®©à¯ à®¤à®®à®¿à®´à¯à®¨à®¾à®Ÿà¯, à®‡à®¨à¯à®¤à®¿à®¯à®¾à®µà®¿à®©à¯ à®¤à¯‚à®¤à¯à®¤à¯à®•à¯à®•à¯à®Ÿà®¿ à®®à®¾à®µà®Ÿà¯à®Ÿà®¤à¯à®¤à®¿à®²à¯ à®†à®±à¯à®®à¯à®•à®¨à¯†à®°à®¿ à®¨à®•à®°à®¿à®²à¯à®³à¯à®³ à®šà®¾à®ªà¯à®ªà¯à®ªà¯à®°à®®à¯ à®¤à¯à®±à¯ˆà®®à¯à®•à®¤à¯à®¤à®¿à®²à¯ à®…à®®à¯ˆà®¨à¯à®¤à¯à®³à¯à®³ à®•à®®à¯à®²à®¾à®µà®¤à®¿ à®®à¯‚à®¤à¯à®¤ à®‰à®¯à®°à¯à®¨à®¿à®²à¯ˆà®ªà¯à®ªà®³à¯à®³à®¿ (ISO 9001: 2008 à®šà®¾à®©à¯à®±à®¿à®¤à®´à¯) [1] à®ªà®³à¯à®³à®¿ 1 à®®à¯à®¤à®²à¯ 12 à®µà®°à¯ˆ à®šà®¿.à®ªà®¿.à®Žà®¸à¯.à®‡. à®ªà®Ÿà®¿à®ªà¯à®ªà¯ˆà®¤à¯ à®¤à¯Šà®Ÿà®°à¯à®•à®¿à®±à®¤à¯. à®®à¯‡à®²à¯à®®à¯ à®µà®•à¯à®ªà¯à®ªà¯ 11 à®®à®±à¯à®±à¯à®®à¯ 12 à®•à¯à®•à¯ à®¤à®®à®¿à®´à¯à®¨à®¾à®Ÿà¯ à®®à®¾à®¨à®¿à®² à®µà®¾à®°à®¿à®¯à®®à¯ à®ªà®¾à®Ÿà®¤à¯à®¤à®¿à®Ÿà¯à®Ÿà®™à¯à®•à®³à¯ˆà®ªà¯ à®ªà®¿à®©à¯à®¤à¯Šà®Ÿà®°à¯à®•à®¿à®±à®¤à¯. à®Ÿà®¿.à®Ÿà®¿.à®Ÿà®ªà®¿à®³à¯à®¯à¯‚.à®µà®¿ à®¤à¯Šà®´à®¿à®²à®¾à®³à®°à¯à®•à®³à®¿à®©à¯ à®•à¯à®´à®¨à¯à®¤à¯ˆà®•à®³à¯à®•à¯à®•à¯ à®•à®²à¯à®µà®¿ à®‰à®¤à®µà®¿à®¤à¯ à®¤à¯Šà®•à¯ˆà®¯à®¾à®• 1972 à®†à®®à¯ à®†à®£à¯à®Ÿà¯ à®†à®°à®®à¯à®ªà®¿à®•à¯à®•à®ªà¯à®ªà®Ÿà¯à®Ÿ à®’à®°à¯ à®¤à®©à®¿à®¯à®¾à®°à¯ à®•à®²à¯à®µà®¿ à®¨à®¿à®±à¯à®µà®©à®®à®¾à®•à¯à®®à¯. à®ªà®¿à®©à¯à®©à®°à¯ à®…à®¤à¯ à®ªà¯Šà®¤à¯ à®®à®•à¯à®•à®³à¯à®•à¯à®•à¯ à®…à®¤à®©à¯ à®…à®©à¯à®®à®¤à®¿à®•à®³à¯ˆà®¤à¯ à®¤à®¿à®±à®¨à¯à®¤à®¤à¯. à®Ÿà®¿.à®Žà®®à¯.à®Ÿà®ªà®¿à®³à¯à®¯à¯‚ à®²à®¿à®®à®¿à®Ÿà¯†à®Ÿà¯ à®‡à®¨à¯à®¤ à®•à®®à®²à®¾à®µà®¤à®¿ à®‰à®¯à®°à¯à®¨à®¿à®²à¯ˆ à®ªà®³à¯à®³à®¿ à®…à®±à®•à¯à®•à®Ÿà¯à®Ÿà®³à¯ˆ à®®à¯‚à®²à®®à¯ à®¨à®¿à®°à¯à®µà®•à®¿à®•à¯à®•à®ªà¯à®ªà®Ÿà¯à®•à®¿à®±à®¤à¯.\r\nà®ªà®³à¯à®³à®¿ à®ªà®¤à¯à®®à®ªà¯‚à®·à®©à¯ à®¸à¯à®°à¯€ à®šà®¾à®¹à¯‚ Shriyans à®ªà®¿à®°à®šà®¾à®¤à¯ à®œà¯†à®¯à®¿à®©à¯, à®…à®µà®°à®¤à¯ à®®à®©à¯ˆà®µà®¿ à®¸à¯à®°à¯€à®®à®¤à®¿ Kamlavati à®œà¯†à®¯à®¿à®©à¯ à®Žà®©à¯à®± à®ªà¯†à®¯à®°à®¿à®²à¯ à®®à®¾à®¨à®¿à®²à®™à¯à®•à®³à®µà¯ˆ à®®à¯à®©à¯à®©à®¾à®³à¯ à®‰à®±à¯à®ªà¯à®ªà®¿à®©à®°à¯ 1972 à®†à®®à¯ à®†à®£à¯à®Ÿà¯ à®¨à®¿à®±à¯à®µà®ªà¯à®ªà®Ÿà¯à®Ÿà®¤à¯.','à®®à¯à®¤à®²à¯à®µà®°à¯','04639280227','à®·à®£à¯à®®à¯à®•à®¨à®£à¯à®¤à®©à¯  à®†à®°à¯','1.jpg~','à®¸à¯à®°à¯€ à®¨à®¨à¯à®¤à®¿à®©à®¿~à®ªà®¿à®°à®šà®¾  ','12~11','	à®ªà®Ÿà®¿à®ªà¯à®ªà¯~à®•à®²à¯ˆ / à®‡à®²à®•à¯à®•à®¿à®¯à®®à¯','b7d1e0ee-4076-4b09-ac5a-1b453afd75ea.jpg~79592cb4-3e0d-421d-8973-5f5de8c51cd8.jpg~','2019-03-01 15:07:50'),(18,'à®•à¯Š.à®‡à®°à®¾.à®µà®¿  à®¨à®Ÿà¯à®¨à®¿à®²à¯ˆ à®ªà®³à¯à®³à®¿','vknkrv1953@gmail.com','9003280593','à®•à¯Š.à®‡à®°à®¾.à®µà®¿  à®¨à®Ÿà¯à®¨à®¿à®²à¯ˆ à®ªà®³à¯à®³à®¿','à®•à®²à¯à®²à®™à¯à®•à¯à®±à®¿à®šà¯à®šà®¿ à®µà®´à®¿ à®²à®¿à®™à¯à®•à®¤à¯à®¤à®Ÿà®¿à®®à¯‡à®Ÿà¯ à®…à®°à®¿à®¯à®²à¯‚à®°à¯  ','621705','STATE BOARD','school/SCHOOL IMAGE A.jpg','à®¤à®µà®¤à¯à®¤à®¿à®°à¯ à®®à¯à®°à¯à®•à®¾à®©à®¨à¯à®¤ à®…à®Ÿà®¿à®•à®³à®¾à®°à®¿à®©à¯ à®†à®šà®¿à®¯à¯à®Ÿà®©à¯ à®šà®¿à®¤à¯à®¤ à®šà®•à¯à®¤à®¿ à®…à®°à¯à®Ÿà¯à®œà¯‹à®¤à®¿ à®µà®³à¯à®³à®²à®¾à®°à¯ à®•à®²à¯à®µà®¿ à®¨à®¿à®²à¯ˆà®¯à®®à¯ à®œà¯†à®¯à®©à¯à®•à¯Šà®£à¯à®Ÿà®®à¯ à®®à¯à®©à¯à®©à®¾à®³à¯ à®šà®Ÿà¯à®Ÿà®®à®©à¯à®± à®‰à®±à¯à®ªà¯à®ªà®¿à®©à®°à¯ à®…à®®à®°à®°à¯ à®•à¯Š.à®‡à®°à®¾ . à®µà®¿à®šà¯à®µà®¨à®¾à®¤à®©à¯ à®…à®µà®°à¯à®•à®³à®¾à®²à¯ 1953 à®®à¯ à®†à®£à¯à®Ÿà¯ à®†à®°à®®à¯à®ªà®¿à®•à¯à®•à®ªà¯à®ªà®Ÿà¯à®Ÿà®¤à¯. à®‡à®¨à¯à®¨à®¿à®²à¯ˆà®¯à®®à¯ à®…à®°à®šà¯ à®‰à®¤à®µà®¿ à®ªà¯†à®±à¯à®®à¯ à®•à¯Š à®‡à®°à®¾ .à®µà®¿  à®¨à®Ÿà¯à®¨à®¿à®²à¯ˆ à®ªà®³à¯à®³à®¿à®¯à¯à®Ÿà®©à¯ à®†à®¤à®°à®µà®±à¯à®± à®•à¯à®´à®¨à¯à®¤à¯ˆà®•à®³à¯ à®…à®Ÿà®™à¯à®•à®¿à®¯ à®‡à®²à¯à®²à®®à¯ à®ªà®¿à®±à¯à®ªà®Ÿà¯à®¤à¯à®¤à®ªà¯à®ªà®Ÿà¯à®Ÿà¯‹à®°à¯ à®¨à®²à®¤à¯à®¤à¯à®±à¯ˆ à®‰à®¤à®µà®¿à®¯à¯à®Ÿà®©à¯ à®•à¯‚à®Ÿà®¿à®¯ à®µà®¿à®Ÿà¯à®¤à®¿ à®†à®•à®¿à®¯à®µà®±à¯à®±à¯à®Ÿà®©à¯ à®‡à®¯à®™à¯à®•à®¿ à®µà®°à¯à®•à®¿à®±à®¤à¯. à®•à¯à®´à®¨à¯à®¤à¯ˆà®•à®³à¯à®•à¯à®•à¯ à®‰à®£à®µà¯ à®‰à®Ÿà¯ˆ à®ªà¯à®¤à¯à®¤à®•à®™à¯à®•à®³à¯ à®®à¯à®¤à®²à®¾à®© à®…à®©à¯ˆà®¤à¯à®¤à¯à®®à¯ à®µà®´à®™à¯à®•à®ªà¯à®ªà®Ÿà¯à®Ÿà¯ à®Žà®Ÿà¯à®Ÿà®¾à®®à¯ à®µà®•à¯à®ªà¯à®ªà¯ à®µà®°à¯ˆ à®•à®²à¯à®µà®¿ à®…à®³à®¿à®•à¯à®•à®ªà¯à®ªà®Ÿà¯à®•à®¿à®±à®¤à¯ à®¤à®¾à®¯à¯ à®¤à®¨à¯à®¤à¯ˆ à®à®´à¯ˆ à®Žà®³à®¿à®¯ à®•à¯à®´à®¨à¯à®¤à¯ˆà®•à®³à¯ à®‡à®™à¯à®•à¯ à®šà¯‡à®°à¯à®•à¯à®•à®ªà¯à®ªà®Ÿà¯à®•à®¿à®±à®¾à®°à¯à®•à®³à¯.    ','à®¤à®¾à®³à®¾à®³à®°à¯~à®®à¯à®¤à®²à¯à®µà®°à¯','9003280593~9788031691','Pugalendi ~Sondararajan','DRKVP 001.jpg~Soundararajan.jpg~','Roja~Aarthi~à®…à®•à®²à¯à®¯à®¾ ','6~8~7','	à®ªà®Ÿà®¿à®ªà¯à®ªà¯~à®•à®²à¯ˆ / à®‡à®²à®•à¯à®•à®¿à®¯à®®à¯~à®ªà®Ÿà®¿à®ªà¯à®ªà¯','Roja.JPG~Aarthi VIII.jpg~Agalya VIII.jpg~','2019-03-21 05:42:04');
/*!40000 ALTER TABLE `school` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-21 15:53:34