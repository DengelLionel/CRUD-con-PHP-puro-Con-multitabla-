-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-12-2021 a las 03:45:11
-- Versión del servidor: 8.0.21
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `instituto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ide` int DEFAULT NULL,
  `cursouno` varchar(45) DEFAULT NULL,
  `cursodos` varchar(45) DEFAULT NULL,
  `cursotres` varchar(45) DEFAULT NULL,
  `cursocuatro` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ide` (`ide`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `ide`, `cursouno`, `cursodos`, `cursotres`, `cursocuatro`) VALUES
(1, 0, 'POO', 'Fundamentos de la programación', 'Desarrollo web', 'Desarrollo Movil'),
(2, 0, 'POO', 'Fundamentos de la programación', 'Desarrollo web', 'Desarrollo Movil'),
(3, 0, 'POO', 'Fundamentos de la programación', 'Desarrollo web', 'Desarrollo Movil'),
(4, 0, 'POO', 'Fundamentos de la programación', 'Desarrollo web', 'Desarrollo Movil'),
(5, 0, 'POO', 'Fundamentos de la programación', 'Desarrollo web', 'Desarrollo Movil'),
(6, 34, 'POO', 'Base de datos', 'Desarrollo web', 'Desarrollo Movil'),
(7, 34, 'POO', 'Base de datos', 'Desarrollo web', 'Desarrollo Movil'),
(8, 36, 'POO', 'Fundamentos de la programación', 'Base de datos', 'Desarrollo web');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE IF NOT EXISTS `estudiante` (
  `id` int NOT NULL AUTO_INCREMENT,
  `programaestudios` varchar(45) DEFAULT NULL,
  `codigoestudiante` int DEFAULT NULL,
  `primernombre` varchar(45) DEFAULT NULL,
  `segundonombre` varchar(45) DEFAULT NULL,
  `primerapellido` varchar(45) DEFAULT NULL,
  `segundoapellido` varchar(45) DEFAULT NULL,
  `genero` varchar(30) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `semestre` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id`, `programaestudios`, `codigoestudiante`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `genero`, `direccion`, `semestre`) VALUES
(37, 'Computacion e informatica', 454565453, 'WILL', 'WILITON', 'RAMOS', 'RIVAS', 'masculino', 'JAUJA', 'III'),
(35, 'Industrias Alimentarias', 34556644, 'Alex', 'Gido', 'Fernandez', 'Aguero', 'masculino', 'Argentina', 'III'),
(34, 'Computación e Informática', 345545, 'Dexter', 'Clark', 'Matusalen', 'Mhamed', 'masculino', 'Jr. Ayacucho N° 8123', 'IV'),
(36, 'Computacion', 343534, 'Newton', 'Coper', 'Solis', 'Aguilar', 'masculino', 'Jauja', 'I');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudianteprofecurso`
--

DROP TABLE IF EXISTS `estudianteprofecurso`;
CREATE TABLE IF NOT EXISTS `estudianteprofecurso` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idp` int DEFAULT NULL,
  `ides` int DEFAULT NULL,
  `idc` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idp` (`idp`),
  KEY `ides` (`ides`),
  KEY `idc` (`idc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

DROP TABLE IF EXISTS `profesor`;
CREATE TABLE IF NOT EXISTS `profesor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `primernombre` varchar(45) DEFAULT NULL,
  `segundonombre` varchar(45) DEFAULT NULL,
  `primerapellido` varchar(45) DEFAULT NULL,
  `segundoapellido` varchar(45) DEFAULT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `dni`, `celular`) VALUES
(1, 'Alvaro', 'Felipe', 'Torres', 'Galarza', '454545448', '987654123'),
(2, 'Felipe', 'David', 'Torres', 'Galarza', '4545445', '987644123'),
(3, 'Fredy', 'Crud', 'Cruber', 'Cruber', '3435345645', '836465655');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
