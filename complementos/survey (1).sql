-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2017 a las 20:43:20
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `survey`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_criterios`
--

CREATE TABLE IF NOT EXISTS `tbl_criterios` (
  `id_criterio` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_criterio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_criterios`
--

INSERT INTO `tbl_criterios` (`id_criterio`, `descripcion`) VALUES
(1, 'visión de desarrollo compartida'),
(2, 'estructura y organización del trabajo'),
(3, 'normas y procedimientos de trabajo'),
(4, 'comunicación y coordinación'),
(5, 'cohesión y motivación del grupo'),
(6, 'desarrollo del personal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estudio`
--

CREATE TABLE IF NOT EXISTS `tbl_estudio` (
  `fk_pregunta` int(11) NOT NULL,
  `fk_criterio` varchar(11) NOT NULL,
  `valores_estudio` int(20) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_peso_resp`
--

CREATE TABLE IF NOT EXISTS `tbl_peso_resp` (
  `respuesta` varchar(20) NOT NULL,
  `peso` int(11) NOT NULL,
  PRIMARY KEY (`respuesta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_peso_resp`
--

INSERT INTO `tbl_peso_resp` (`respuesta`, `peso`) VALUES
('A VECES', 2),
('CASI SIEMPRE', 4),
('NUNCA', 1),
('SIEMPRE', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_preguntas`
--

CREATE TABLE IF NOT EXISTS `tbl_preguntas` (
  `id_pregunta` int(11) NOT NULL,
  `fk_criterio` varchar(20) CHARACTER SET latin1 NOT NULL,
  `pregunta` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_preguntas`
--

INSERT INTO `tbl_preguntas` (`id_pregunta`, `fk_criterio`, `pregunta`) VALUES
(1, '1', 'Los objetivos y metas de trabajo de la unidad se definen y dan a conocer con claridad y precisi&oacuten.'),
(2, '1', 'El trabajo a realizar es analizado con el personal y se le brinda lineamientos sobre él.'),
(3, '2', 'Se asignan equitativamente las tareas, y la autoridad y responsabilidad para desempeñarlas.'),
(4, '3', 'Las normas y procedimientos de trabajo son conocidos y aplicados por el personal.'),
(5, '1', 'Se aplican mecanismos  de evaluación y control del trabajo.'),
(6, '4', 'El superior esta disponible para aclarar dudas, dar orientación y realimentación a sus subalternos.'),
(7, '2', 'El recurso humano del que se dispone es suficiente y con el perfil requerido.'),
(8, '2', 'Los recursos materiales  y suministros para el trabajo se proveen en la cantidad y la calidad requerida.'),
(9, '2', 'Se dispone de las herramientas, maquinarias y Equipos necesarios para realizar el trabajo.'),
(10, '2', 'La iluminación, ventilación y espacio físico disponible en el area de trabajo son los adecuados.'),
(11, '2', 'Se dispone de presupuesto necesario para desarrollar el trabajo de la unidad administrativa.'),
(12, '2', 'Hay disponibilidad de medios de transporte cuando estos son los requeridos por el personal para el trabajo.'),
(13, '5', 'se recibe información y colaboración de los otros compañeros de unidad para desarrollar el trabajo.'),
(14, '3', 'El supervisor inmediato administra la disciplina del equipo de trabajo en forma justa y constante.'),
(15, '5', 'El trabajo realizado es valorado justamente por el jefe o supervisor.'),
(17, '5', 'Existe cohesión, cooperación y armonía en el grupo de trabajo.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
