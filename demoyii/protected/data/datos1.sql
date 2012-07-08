/*
SQLyog Enterprise - MySQL GUI v7.13 
MySQL - 5.5.16 : Database - datos1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`datos1` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;

USE `datos1`;

/*Table structure for table `tareas` */

DROP TABLE IF EXISTS `tareas`;

CREATE TABLE `tareas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `tareas` */

insert  into `tareas`(`id`,`nombre`,`descripcion`) values (1,'Cita con el doctor','Cita con el doctor para diagnosticar mi salud actual.'),(3,'Asistir a la reunión','Reunirse con los compañeros del trabajo para discutir sobre los problemas de la organización.'),(4,'Compras en el supermercado','Compras de alimientos en el supermercado del área para reabastecer las reservas de la casa.');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
