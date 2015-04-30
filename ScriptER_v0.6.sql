-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-09-2014 a las 10:15:48
-- Versión del servidor: 5.5.38
-- Versión de PHP: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `itszas48_cdoc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Bitacora`
--

CREATE TABLE IF NOT EXISTS `Bitacora` (
  `idBitacora` int(11) NOT NULL AUTO_INCREMENT,
  `fechaDeModificacion` date NOT NULL,
  `tipoDocumento` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `estatus` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `nombreUsuario` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `idDocumento` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `hora` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idBitacora`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `Bitacora`
--

INSERT INTO `Bitacora` (`idBitacora`, `fechaDeModificacion`, `tipoDocumento`, `estatus`, `nombreUsuario`, `area`, `idDocumento`, `hora`) VALUES
(1, '2014-08-27', 'Bienvenida', 'SolicitaLiberacion', 'Armida', 'AcadÃ©mica', '1', '7:27 PM'),
(2, '2014-08-29', 'Entrega de proyecto', 'SolicitaLiberacion', 'Armida', 'AcadÃ©mica', '2', '6:53 PM'),
(3, '2014-08-29', 'Entrega de proyecto', 'SolicitaLiberacion', 'Armida', 'AcadÃ©mica', '3', '6:53 PM'),
(4, '2014-08-29', 'Comida', 'SolicitaLiberacion', 'Jacobo', 'Administrativa', '4', '7:09 PM'),
(5, '2014-09-02', 'Bienvenida', 'Trabajando', 'Armida', 'AcadÃ©mica', '1', '9:57 PM'),
(6, '2014-09-02', 'Bienvenida', 'SolicitaLiberacion', 'Armida', 'AcadÃ©mica', '1', '10:13 PM'),
(7, '2014-09-02', 'Comida', 'SolicitaLiberacion', 'Armida', 'AcadÃ©mica', '5', '10:13 PM'),
(8, '2014-09-02', 'Comida', 'SolicitaLiberacion', 'Armida', 'AcadÃ©mica', '7', '10:48 PM'),
(9, '2014-09-03', 'Grito de Independecia', 'SolicitaLiberacion', 'Armida', 'AcadÃ©mica', '9', '12:29 AM'),
(10, '2014-09-03', 'Grito de Independecia', 'Trabajando', 'Armida', 'AcadÃ©mica', '9', '12:31 AM'),
(11, '2014-09-04', 'Grito de Independecia', 'SolicitaLiberacion', 'Armida', 'AcadÃ©mica', '9', '1:49 PM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Documento`
--

CREATE TABLE IF NOT EXISTS `Documento` (
  `idDocumento` int(11) NOT NULL AUTO_INCREMENT,
  `tipoDocumento` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `fechaDelDocumento` date NOT NULL,
  `fechaDeRecepcion` date NOT NULL,
  `fechaDeAsignacion` date NOT NULL,
  `fechaLimite` date NOT NULL,
  `folioDocumento` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `formatoDelDocumento` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `estatus` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `nombreDepend` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `nombreRemit` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `idRemit` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `sesionUsuario` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comentario` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idDocumento`),
  KEY `idRemit_idx` (`idRemit`),
  KEY `idUsuario_idx` (`idUsuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `Documento`
--

INSERT INTO `Documento` (`idDocumento`, `tipoDocumento`, `fechaDelDocumento`, `fechaDeRecepcion`, `fechaDeAsignacion`, `fechaLimite`, `folioDocumento`, `formatoDelDocumento`, `descripcion`, `estatus`, `area`, `nombreDepend`, `nombreRemit`, `idRemit`, `idUsuario`, `sesionUsuario`, `comentario`) VALUES
(8, 'Comida', '2014-09-02', '2014-09-03', '2014-09-04', '2014-09-05', '12342', 'FÃ­sico', 'es una comida ', 'Abierto', 'Administrativa', 'ToÃ±o', 'Pepe', 0, 0, 'Jacobo', NULL),
(6, 'Comida', '2014-09-01', '2014-09-02', '2014-09-03', '2014-09-04', '12342', 'FÃ­sico', 'es una comida ', 'Abierto', 'Administrativa', 'ToÃ±o', 'Pepe', 0, 0, 'Jacobo', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombreUsuario` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `apellidoPat` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `apellidoMat` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `preguntaSeguridad` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `respuesta` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`idUsuario`, `nombreUsuario`, `apellidoPat`, `apellidoMat`, `contrasena`, `area`, `preguntaSeguridad`, `respuesta`, `pass`) VALUES
(1, 'Miguel', 'Diaz', 'AcuÃ±a', '940bae10ca539c9d097187f5d5cc554f', 'DirecciÃ³n', 'Â¿CuÃ¡l es el nombre de tu mejor amigo?', 'miguelito', 'miguel123'),
(2, 'Yadira', 'Figueroa', 'Gonzales', 'a6952bfe40973d5b6638de665ca0953f', 'Administrativa', 'Â¿CuÃ¡l es el nombre de tu mejor amigo?', 'yadirita', 'yadira123'),
(3, 'Armida', 'Orozco', 'Miramontes', '5cb93156c63d52bb07ba42639a606410', 'AcadÃ©mica', '3', 'Estrella', 'armida123'),
(4, 'Jacobo', 'Martinez', 'Juarez', 'c823ea0d88c1e86a959e7d0d9ad33ef8', 'Administrativa', '1', 'Tlaltenango', 'jacobo123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
