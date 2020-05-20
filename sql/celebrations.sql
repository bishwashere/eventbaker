/*
SQLyog Community Edition- MySQL GUI v8.03 
MySQL - 5.1.32-community : Database - celebrations
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`celebrations` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `celebrations`;

/*Table structure for table `gallery` */

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `itemname` varchar(25) NOT NULL,
  `category` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `rent` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `review` varchar(500) DEFAULT NULL,
  `feature1` varchar(100) DEFAULT NULL,
  `feature2` varchar(100) DEFAULT NULL,
  `feature3` varchar(100) DEFAULT NULL,
  `feature4` varchar(100) DEFAULT NULL,
  `feature5` varchar(100) DEFAULT NULL,
  `offer` int(11) DEFAULT NULL,
  `enabled` varchar(3) DEFAULT 'yes',
  `imgpath` varchar(255) DEFAULT NULL,
  `occassion` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `gallery` */

insert  into `gallery`(`item_id`,`itemname`,`category`,`class`,`city`,`country`,`rent`,`rating`,`description`,`review`,`feature1`,`feature2`,`feature3`,`feature4`,`feature5`,`offer`,`enabled`,`imgpath`,`occassion`) values (3,'audi two','auditorium','Business class','some city','test country',25000,4,'test description','test review','first feature','second feature is good','and third feature','four','five',10,'yes','admin/upload/audi1.jpg','some occassion'),(4,'florian','florist','Star','City one','florists country',40000,0,'something and anything','something','first feature','second feature is good','','','',5,'yes','admin/upload/flower.jpg',''),(5,'star caterers','caterers','Luxury','caterer city','india',40000,3,'hdfoi dsf ehfoig ehg ehgoiwhg oiwer iehgoiwe','ghgewfweg iugewf wehguif iugf wegufwgei u gfi uerw','first feature','second feature is good','','','',20,'yes','admin/upload/cat1.jpg',''),(6,'some item','auditorium','Three star','sample city of audi','florists country',100000,4,'','','first feature','two','','','',2,'yes','admin/upload/pic1234.jpg',''),(7,'some item','travels','Star','City one','some country',100000,3,'','','','second feature is good','and third feature','four','',5,'yes','admin/upload/travels.jpg',''),(8,'some item','party_maker','Star','City one','India',25000,2,'','','first feature','two','','','',5,'yes','admin/upload/query2.jpg',''),(9,'some item','beauty_spa','Business class','test city','test country',20000,1,'','','','','','','',0,'yes','admin/upload/beautyspa.jpg','');

/*Table structure for table `members` */

DROP TABLE IF EXISTS `members`;

CREATE TABLE `members` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `salt` varchar(3) NOT NULL,
  `password` varchar(70) NOT NULL,
  `phone` double DEFAULT NULL,
  `company` varchar(30) DEFAULT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `lname` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `members` */

insert  into `members`(`id`,`fname`,`email`,`salt`,`password`,`phone`,`company`,`city`,`country`,`address`,`lname`) values (1,'shamnas','shgjgaui@bkwdc.com','5a6','ba06ab59458e0f06640d803d4c718d0dc6c352fef73474448a0741d6bd2eebdb',NULL,NULL,'','','',NULL),(2,'skhk','shamnascv94@gmail.com','731','2a677c500428bb16e399620327ce9e3c1691b6451ec4b3096f717fb25c106863',NULL,NULL,'','','',NULL),(3,'anshad','hariscv97@gmail.com','dd9','a9ae451d88464e332d7c0d506abd2fcc700b9277fc3916b2a61a62b732e7f1a8',NULL,NULL,'','AI','',NULL),(4,'vithall','vithall@gmail.com','7e3','8e8f8f5a0953e77154283b90b039299d1b57081eb5356387e73e34194d2a8cf8',2147483647,NULL,'no city','GW','no company then address',NULL),(5,'vfdvgr','dsjagvshj@gmail.com','bff','735cd0b753bceeaf5a1cba9c703e7c55f89b9c51e7e63df2557c98d840124e9d',2147483647,NULL,'','AW','fevfdgcr',NULL),(6,'vfdvgr','dsjagvswzfhj@gmail.com','831','8a08c6f880ed7eedbe39918fd6930e03afd1f7e31013f6deb61a181d20b3c8c4',2147483647,NULL,'','null','',NULL),(7,'vfdvgr','dsjagvsdcvfwzfhj@gmail.com','9ad','b09701c7b758d6d88abe258ef63847c8c98b0c47466ade495231add811dd35c0',917204320373,NULL,'','null','',NULL),(8,'vfdvgr','dsjagvsfrvgrtdcvfwzfhj@gmail.com','612','326b247fc94d3636ffec1715afa61f9451ddf04b2e25261587df289d0d49601b',917204320373,NULL,'','null','',NULL),(9,'vfdvgr','wswdsjagvsfrvgrtdcvfwzfhj@gmail.com','412','231060b0916670ee688dd02f6ea82db1a20a6c1114e827724ee7a2a12b1b2aff',917204320373,NULL,'','null','','see'),(10,'shamnas','shamnascv94@ceremonie.com','731','2a677c500428bb16e399620327ce9e3c1691b6451ec4b3096f717fb25c106863',917204320373,NULL,'tavanur','IN','chozhivalappil','cv'),(11,'test','test@gmail.com','ae8','a712a4de49bd9957cdbc51ecec4faafa34e5d9be50d5e40ed431a6dfba56c2e6',917204320373,NULL,'City two','AX','','test');

/*Table structure for table `wishlist` */

DROP TABLE IF EXISTS `wishlist`;

CREATE TABLE `wishlist` (
  `item_id` int(11) NOT NULL DEFAULT '0',
  `email` varchar(55) NOT NULL DEFAULT '',
  PRIMARY KEY (`item_id`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `wishlist` */

insert  into `wishlist`(`item_id`,`email`) values (3,'shamnascv94@gmail.com'),(3,'test@gmail.com'),(7,'admin@justapic.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
