/*
SQLyog Enterprise - MySQL GUI v7.13 
MySQL - 5.5.16 : Database - datos2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`datos2` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;

USE `datos2`;

/*Table structure for table `ciudad` */

DROP TABLE IF EXISTS `ciudad`;

CREATE TABLE `ciudad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `ciudad` */

insert  into `ciudad`(`id`,`nombre`) values (1,'Lima'),(2,'Manangua');

/*Table structure for table `estudios` */

DROP TABLE IF EXISTS `estudios`;

CREATE TABLE `estudios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `institucion` varchar(255) COLLATE utf8_bin NOT NULL,
  `anio_graduacion` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_bin NOT NULL,
  `usuario_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_estudios` (`usuario_id`),
  CONSTRAINT `FK_estudios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `estudios` */

/*Table structure for table `experiencia` */

DROP TABLE IF EXISTS `experiencia`;

CREATE TABLE `experiencia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `empresa` varchar(200) COLLATE utf8_bin NOT NULL,
  `inicio` date NOT NULL,
  `finalizacion` date NOT NULL,
  `jefe` varchar(255) COLLATE utf8_bin NOT NULL,
  `usuario_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_experiencia` (`usuario_id`),
  CONSTRAINT `FK_experiencia` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `experiencia` */

/*Table structure for table `folio` */

DROP TABLE IF EXISTS `folio`;

CREATE TABLE `folio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lugar` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `psicologica` int(10) unsigned DEFAULT NULL,
  `tecnica` int(10) unsigned DEFAULT NULL,
  `entrevista` int(10) unsigned DEFAULT NULL,
  `puntaje` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_folio` FOREIGN KEY (`id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `folio` */

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) COLLATE utf8_bin NOT NULL,
  `identificacion` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `genero` varchar(1) COLLATE utf8_bin NOT NULL,
  `ciudad_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_usuarios` (`ciudad_id`),
  CONSTRAINT `FK_usuarios` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`nombres`,`identificacion`,`email`,`estado`,`genero`,`ciudad_id`) values (1,'Manuel Pérez',123456789,'manuel@gmail.com',1,'M',1),(2,'Salvador Pasquier',987654321,'salva@gmail.com',1,'M',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
