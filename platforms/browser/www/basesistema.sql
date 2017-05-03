/*
SQLyog Ultimate v12.09 (32 bit)
MySQL - 5.6.11 : Database - srac
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE `srac`;

/*Table structure for table `beneficiario` */

DROP TABLE IF EXISTS `beneficiario`;

CREATE TABLE `beneficiario` (
  `idbeneficiario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidoPat` varchar(45) DEFAULT NULL,
  `apellidoMat` varchar(45) DEFAULT NULL,
  `telefono` varchar(13) DEFAULT NULL,
  `curp` varchar(18) DEFAULT NULL,
  `folio` varchar(13) DEFAULT NULL,
  `numMunicipio` int(11) DEFAULT NULL,
  `comunidades_idcomunidades` int(11) NOT NULL,
  PRIMARY KEY (`idbeneficiario`),
  KEY `fk_beneficiario_comunidades_idx` (`comunidades_idcomunidades`),
  CONSTRAINT `fk_beneficiario_comunidades` FOREIGN KEY (`comunidades_idcomunidades`) REFERENCES `comunidad` (`idcomunidad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

/*Data for the table `beneficiario` */

insert  into `beneficiario`(`idbeneficiario`,`nombre`,`apellidoPat`,`apellidoMat`,`telefono`,`curp`,`folio`,`numMunicipio`,`comunidades_idcomunidades`) values (1,'diego','alanis','mendoza','7227566269','AAMD910326HMCLNG00','1234567890987',NULL,1),(5,'TEOFILO','JIMENEZ','JIMENEZ','017224600092','AAMD910326HMCLNG88','1236547126544',NULL,1),(7,'teofilo','arango','jimenez','7224600098','arasdasdsasdasd','124569874',NULL,2),(8,'JUAN','JIM','JIM','722225456666','AAMD910326HMCLNG25','1236547126544',NULL,2),(10,'sarai','Antonio','Antonio','017224600092','AAMD910326HMCLNG54','1236547126544',NULL,1),(11,'sarai','Antonio','Antonio','017224600092','AAMD910326HMCLNG01','4444444444444',NULL,1),(12,'diego','alanis','alanis','017224600092','AAMD910326HMCLNG20','1236547895414',NULL,1),(13,'GRETEL','ROMERO','ROMERO','017224600092','AAMD910326HMCLNG27','4444444444444',NULL,1),(14,'diego','alanis','alanis','017224600092','AAMD910326HMCLNG01','1236547895412',NULL,2),(15,'diego','alanis','alanis','017224600092','AAMD910326HMCLNG01','1236547895412',NULL,2),(16,'diego','alanis','alanis','017224600092','AAMD910326HMCLNG01','1236547895412',NULL,2),(17,'sarai','Antonio','Antonio','017224699200','AAMD910326HMCLNG44','1236547126544',NULL,1),(18,'diego','alanis','alanis','017224600092','SOLM940117MMCLPR00','1236547895414',NULL,2),(19,'sarai','ANT','ANT','017224600092','AAMD910326HMCLNG09','4444444444444',NULL,1),(20,'sarai','ANT','ANT','017224600092','AAMD910326HMCLNG09','4444444444444',NULL,1),(21,'diego','alanis','alanis','017224600092','AAMD910326HMCLNG54','1236547895412',NULL,1),(22,'CAROLINA','DEL MORAL','DEL MORAL','7224552436','SATE940614MMCNNR05','1234567891234',NULL,2),(23,'CARLOS','TINOCO','TINOCO','7224567890','SATE950617MMCNNR09','1243598723741',NULL,3),(24,'JOSE','PANIAHUA','PANIAHUA','5546723589','EMOH091423MMCNNR02','0192837465924',NULL,5);

/*Table structure for table `beneficiario_has_programa` */

DROP TABLE IF EXISTS `beneficiario_has_programa`;

CREATE TABLE `beneficiario_has_programa` (
  `idtable` int(11) NOT NULL AUTO_INCREMENT,
  `beneficiario_idbeneficiario` int(11) NOT NULL,
  `programa_idprograma` int(11) NOT NULL,
  `regidor_numRegidor` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`idtable`,`beneficiario_idbeneficiario`,`programa_idprograma`),
  KEY `fk_beneficiario_has_programa_programa1_idx` (`programa_idprograma`),
  KEY `fk_beneficiario_has_programa_regidor1_idx` (`regidor_numRegidor`),
  KEY `fk_beneficiario_has_programa_beneficiario1_idx` (`beneficiario_idbeneficiario`),
  CONSTRAINT `fk_beneficiario_has_programa_regidor1` FOREIGN KEY (`regidor_numRegidor`) REFERENCES `regidor` (`numRegidor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_beneficiario_has_programa_beneficiario1` FOREIGN KEY (`beneficiario_idbeneficiario`) REFERENCES `beneficiario` (`idbeneficiario`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_beneficiario_has_programa_programa1` FOREIGN KEY (`programa_idprograma`) REFERENCES `programa` (`idprograma`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

/*Data for the table `beneficiario_has_programa` */

insert  into `beneficiario_has_programa`(`idtable`,`beneficiario_idbeneficiario`,`programa_idprograma`,`regidor_numRegidor`,`fecha`) values (1,1,1,2,'2017-04-03'),(2,5,3,7,'2017-04-27'),(7,8,6,1,'2017-04-27'),(8,8,6,1,'2017-04-27'),(9,1,5,7,'2017-04-28'),(10,1,5,7,'2017-04-28'),(11,1,5,7,'2017-04-28'),(12,1,5,7,'2017-04-28'),(13,1,5,7,'2017-04-28'),(14,1,5,7,'2017-04-28'),(15,1,5,7,'2017-04-28'),(16,1,5,7,'2017-04-28'),(17,1,5,7,'2017-04-28'),(18,1,5,7,'2017-04-28'),(19,5,7,1,'2017-04-28'),(20,5,7,1,'2017-04-28'),(21,5,7,1,'2017-04-28'),(22,5,7,1,'2017-04-28'),(23,5,1,1,'2017-04-28');

/*Table structure for table `comunidad` */

DROP TABLE IF EXISTS `comunidad`;

CREATE TABLE `comunidad` (
  `idcomunidad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcomunidad`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `comunidad` */

insert  into `comunidad`(`idcomunidad`,`nombre`) values (1,'Barrio del centro'),(2,'Barrio la veracruz'),(3,'Barrio Temoaya'),(4,'Sultepequito');

/*Table structure for table `programa` */

DROP TABLE IF EXISTS `programa`;

CREATE TABLE `programa` (
  `idprograma` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` mediumtext,
  `fecha` date DEFAULT NULL,
  `activo` varchar(2) NOT NULL,
  PRIMARY KEY (`idprograma`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `programa` */

insert  into `programa`(`idprograma`,`nombre`,`descripcion`,`fecha`,`activo`) values (1,'arroz','Hola a todos','2017-04-19','si'),(2,'votos','Para comprar votos','2017-04-19','si'),(3,'cemento para tdoso','se reparten bultos, bla bla bla','2017-04-20','no'),(5,'tinacos','tinacos para todos','2017-04-26','si'),(6,'despensas PRI','SE DAN DESPENSAS A LOS CIUDADANOS','2017-04-27','si'),(7,'Brigada medicinas','para que no se enfermen','2017-04-28','si');

/*Table structure for table `regidor` */

DROP TABLE IF EXISTS `regidor`;

CREATE TABLE `regidor` (
  `numRegidor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidoPat` varchar(45) DEFAULT NULL,
  `apellidoMat` varchar(45) DEFAULT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `contraseÃ±a` blob,
  PRIMARY KEY (`numRegidor`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

/*Data for the table `regidor` */

insert  into `regidor`(`numRegidor`,`nombre`,`apellidoPat`,`apellidoMat`,`cargo`,`usuario`,`contraseÃ±a`) values (1,'Diego','Alanis','Mendoza','root','diego12','A‚µ˜õi4ÿºØŠ\rJèS'),(2,'JUAN','MANUEL','ROOT','SANCHEZ','juanm','Zfh…U™05Áj\nsS'),(7,'ERIKA','SANCHEZ','ROOT','TINOCO','erika20','¯š#e1}*æ²é\rK2g¨:'),(8,'KEVIN','RODRIGO','ROMERO','TERCER REGIDOR','kevin45','Nß¯T¥ÿ\rWšžp‡'),(9,'diego','alanis','alanis','CUARTO REGIDOR','diego19','A‚µ˜õi4ÿºØŠ\rJèS'),(10,'BENITO','JUAREZ','PEREZ','SEGUNDO REGIDOR','benoto','A‚µ˜õi4ÿºØŠ\rJèS'),(11,'DIEGO','ALANIS','MEN','CUARTO REGIDOR','juanmanuel','A‚µ˜õi4ÿºØŠ\rJèS'),(12,'diego','alanis','alanis','ROOT','juanmanuel','A‚µ˜õi4ÿºØŠ\rJèS'),(13,'diego','Antonio','alanis','ROOT','diego12','kQ¹÷¥<ÿÏ€9yMrÀð«'),(14,'diego','Antonio','Antonio','TERCER REGIDOR','diego1','tqÈiö¨ÓHL˜ø×œ'),(15,'DARINKA','TINOCO','GONZALEZ','REGIDORA','daryjoce','\"\"LÌ¢¢\ZL\r©(,l7Ë'),(16,'REGINA','MILLAN','TINOCO','REGIDORA','rufina','SLL,À6wRû\0’z‡');

/* Procedure structure for procedure `busquedaCurp` */

/*!50003 DROP PROCEDURE IF EXISTS  `busquedaCurp` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `busquedaCurp`(IN curp varchar(18))
BEGIN
	DECLARE error INT;
	START TRANSACTION;
	 select * from beneficiario where curp like '%curp%';
	SET error =(SELECT @error);
	IF (error) THEN
	ROLLBACK;
	ELSE
	COMMIT;
	END IF;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `entrega` */

/*!50003 DROP PROCEDURE IF EXISTS  `entrega` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `entrega`(IN idben INT, IN idpro INT, IN idreg INT, in fecha date)
BEGIN
	declare error int;
	START TRANSACTION;
	insert into beneficiario_has_programa(beneficiario_idbeneficiario, programa_idprograma, regidor_numRegidor, fecha)
	values (idben, idpro, idreg, fecha);
	SET error =(SELECT @error);
	IF (error) THEN
	ROLLBACK;
	ELSE
	COMMIT;
	END IF;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `login` */

/*!50003 DROP PROCEDURE IF EXISTS  `login` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `login`(IN usu VARCHAR (20), in pass blob)
BEGIN 
DECLARE error INT;
START TRANSACTION;
SET @pss='sultepecpass';
SELECT * FROM regidor
WHERE usuario=usu AND AES_DECRYPT(contraseÃ±a, @pss) = pass;
SET error =(SELECT @error);
IF (error) THEN
ROLLBACK;
ELSE
COMMIT;
END IF; 
END */$$
DELIMITER ;

/* Procedure structure for procedure `registroBeneficiario` */

/*!50003 DROP PROCEDURE IF EXISTS  `registroBeneficiario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `registroBeneficiario`(in nombre varchar(45), in apellidop varchar(45), in apellidom varchar(45),
     in telefono varchar(13), in curp varchar(18), in folio varchar(13), in comunidades_idcomunidades int )
BEGIN
	declare error int;
	START TRANSACTION;
	insert into beneficiario (nombre, apellidoPat, apellidoMat, telefono, curp, folio, comunidades_idcomunidades)
	values (nombre, apellidop, apellidom, telefono, curp, folio, comunidades_idcomunidades );
	SET error =(SELECT @error);
	IF (error) THEN
	ROLLBACK;
	ELSE
	COMMIT;
	END IF;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `registroComunidad` */

/*!50003 DROP PROCEDURE IF EXISTS  `registroComunidad` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `registroComunidad`(in nombre varchar(45))
BEGIN
	declare error int;
	START TRANSACTION;
	insert into comunidad (nombre)
	values (nombre);
	SET error =(SELECT @error);
	IF (error) THEN
	ROLLBACK;
	ELSE
	COMMIT;
	END IF;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `registroPrograma` */

/*!50003 DROP PROCEDURE IF EXISTS  `registroPrograma` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `registroPrograma`(in nombre varchar(45), in descripcion mediumtext, in fecha date)
BEGIN
	declare error int;
	START TRANSACTION;
	insert into programa(nombre, descripcion, fecha, activo)
	values (nombre, descripcion, fecha, 'si');
	SET error =(SELECT @error);
	IF (error) THEN
	ROLLBACK;
	ELSE
	COMMIT;
	END IF;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `registroRegidor` */

/*!50003 DROP PROCEDURE IF EXISTS  `registroRegidor` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `registroRegidor`(IN nombre VARCHAR(45), IN apellidoPat VARCHAR (45), IN apellidoMat VARCHAR(45),
 IN cargo VARCHAR(20), IN usuario VARCHAR(20), IN contra BLOB )
BEGIN
DECLARE error INT;
START TRANSACTION;
set @pss='sultepecpass';
INSERT INTO regidor (nombre, apellidoPat, apellidoMat, cargo, usuario, contraseÃƒÂ±a)
VALUES( nombre,apellidoPat, apellidoMat, cargo, usuario, AES_ENCRYPT(contra,@pss));
SET error =(SELECT @error);
IF (error) THEN
ROLLBACK;
ELSE
COMMIT;
END IF;
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
