# Prueba-KAWAK


PHP V PHP Version 8.0.18

# instalación

git clone https://github.com/Kattei/Prueba-KAWAK.git

En la carpeta de Prueba-Kawak con el composer instalar las librerias

composer require datatables/datatables

composer require components/jquery

composer require smarty/smarty


# Queries de la base de datos

create database kawak_pruebas;

USE kawak_pruebas;

CREATE TABLE `kawak_pruebas`.`pro_proceso` ( `PRO_ID` INT NOT NULL AUTO_INCREMENT ,  `PRO_PREFIJO` VARCHAR(20) NOT NULL ,  `PRO_NOMBRE` VARCHAR(60) NOT NULL ,    PRIMARY KEY  (`PRO_ID`)) ENGINE = InnoDB;

CREATE TABLE `kawak_pruebas`.`tip_tipo_doc` ( `TIP_ID` INT NOT NULL AUTO_INCREMENT ,  `TIP_NOMBRE` VARCHAR(60) NOT NULL ,  `TIP_PREFIJO` VARCHAR(20) NOT NULL ,    PRIMARY KEY  (`TIP_ID`)) ENGINE = InnoDB;

CREATE TABLE `kawak_pruebas`.`doc_documento` ( `DOC_ID` INT NOT NULL AUTO_INCREMENT ,  `DOC_NOMBRE` VARCHAR(60) NOT NULL ,  `DOC_CODIGO` INT NOT NULL ,  `DOC_CONTENIDO` VARCHAR(4000) NOT NULL ,  `DOC_ACTIVO` INT NOT NULL DEFAULT '1' ,  `DOC_ID_TIPO` INT NOT NULL ,  `DOC_ID_PROCESO` INT NOT NULL ,    PRIMARY KEY  (`DOC_ID`)) ENGINE = InnoDB;

INSERT INTO `pro_proceso` (`PRO_ID`, `PRO_PREFIJO`, `PRO_NOMBRE`) VALUES ('1', 'ING', 'Ingeniería'), ('2', 'COM', 'Comercial'), ('3', 'CYF', 'Contabilidad y Finanzas'), ('4', 'CAL', 'Calidad QA'), ('5', 'TH', 'Talento Humano');

ALTER TABLE `doc_documento` ADD INDEX(`DOC_ID_TIPO`);

ALTER TABLE `doc_documento` ADD INDEX(`DOC_ID_PROCESO`);

INSERT INTO `tip_tipo_doc` (`TIP_ID`, `TIP_NOMBRE`, `TIP_PREFIJO`) VALUES ('1', 'Instructivo', 'INS'), ('2', 'Operacionales', 'OPE'), ('3', 'Procedimientos', 'PRO'), ('4', 'Legales', 'LEG'), ('5', 'Implementación', 'IMP');

INSERT INTO `doc_documento` (`DOC_ID`, `DOC_NOMBRE`, `DOC_CODIGO`, `DOC_CONTENIDO`, `DOC_ACTIVO`, `DOC_ID_TIPO`, `DOC_ID_PROCESO`) VALUES ('1', 'Contrato de liquidación', '001', '', '1', '4', '5');

INSERT INTO `doc_documento` (`DOC_ID`, `DOC_NOMBRE`, `DOC_CODIGO`, `DOC_CONTENIDO`, `DOC_ACTIVO`, `DOC_ID_TIPO`, `DOC_ID_PROCESO`) VALUES ('2', 'Cámara de Comercio', '002', '', '1', '4', '2');

INSERT INTO `doc_documento` (`DOC_ID`, `DOC_NOMBRE`, `DOC_CODIGO`, `DOC_CONTENIDO`, `DOC_ACTIVO`, `DOC_ID_TIPO`, `DOC_ID_PROCESO`) VALUES ('3', 'Factura de Pagos y Cobros', '003', '', '1', '2', '3');

INSERT INTO `doc_documento` (`DOC_ID`, `DOC_NOMBRE`, `DOC_CODIGO`, `DOC_CONTENIDO`, `DOC_ACTIVO`, `DOC_ID_TIPO`, `DOC_ID_PROCESO`) VALUES ('4', 'Definición e implantación de un proceso QA para desarrollo de software', '004', '', '1', '5', '4');

INSERT INTO `doc_documento` (`DOC_ID`, `DOC_NOMBRE`, `DOC_CODIGO`, `DOC_CONTENIDO`, `DOC_ACTIVO`, `DOC_ID_TIPO`, `DOC_ID_PROCESO`) VALUES ('5', 'Estudio de viabilidad', '005', 'En ingeniería se plantean actuaciones que luego no se ven razonables, o bien por la dificultad técnica, o bien por el coste inasumible que supondrían, o bien por otros factores (medioambiental, social, etcétera). El estudio tiene en cuenta todas las posibles dificultades y extrae conclusiones sobre las dificultades que habría y la forma de resolverlas.', '1', '3', '1');


ALTER TABLE `doc_documento`
  ADD CONSTRAINT `doc_documento_ibfk_1` FOREIGN KEY (`DOC_ID_TIPO`) REFERENCES `tip_tipo_doc` (`TIP_ID`),
  ADD CONSTRAINT `doc_documento_ibfk_2` FOREIGN KEY (`DOC_ID_PROCESO`) REFERENCES `pro_proceso` (`PRO_ID`);

CREATE TABLE `user` (
`cod_user` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`user` VARCHAR(256) NOT NULL,
`password` VARCHAR(256) NOT NULL,
`ultima_conexion` TIMESTAMP,
`sesion` tinyint NOT NULL
);

INSERT INTO `user` (user,password) VALUES ("kathe","a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3");


# Configuración

Archivo de configuracion contiene el tiempo de sesion 

Datos de conexion a la base de datos

Dirección del proyecto


# USUARIO Y CONTRASEÑA

usuario:  kathe

contraseña: 123


