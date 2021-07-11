-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-07-2021 a las 17:25:03
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE IF NOT EXISTS `alumno` (
  `id_alumno` int(11) NOT NULL AUTO_INCREMENT,
  `ap_paterno` varchar(25) NOT NULL,
  `ap_materno` varchar(25) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `ex_parcial` int(11) NOT NULL,
  `ex_final` int(11) NOT NULL,
  PRIMARY KEY (`id_alumno`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `ap_paterno`, `ap_materno`, `nombre`, `ex_parcial`, `ex_final`) VALUES
(2, 'wellmar', 'car', 'va', 6, 6),
(3, 'Sanchez', 'Tanatos ', 'Fernanado', 2, 2),
(4, 'castañeda', 'Perez', 'Carlos', 222, 222),
(5, 'Mendez', 'Castilla', 'Sara', 11, 11);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
