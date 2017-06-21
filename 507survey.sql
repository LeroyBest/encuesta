-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2017 a las 07:38:52
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `507survey`
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
(1, 'visi&oacuten de desarrollo compartida'),
(2, 'estructura y organizaci&oacuten del trabajo'),
(3, 'normas y procedimientos de trabajo'),
(4, 'comunicaci&oacuten y coordinaci&oacuten'),
(5, 'cohesi&oacuten y motivaci&oacuten del grupo'),
(6, 'capacitaci&oacuten y desarrollo del personal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_departamento`
--

CREATE TABLE IF NOT EXISTS `tbl_departamento` (
  `id departamento` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `colaborador` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `fk_unidad` int(10) NOT NULL,
  `es_jefe` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empresa`
--

CREATE TABLE IF NOT EXISTS `tbl_empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  `colaborador` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `es_jefe` int(1) NOT NULL,
  `activo` int(1) NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_empresa`
--

INSERT INTO `tbl_empresa` (`id_empresa`, `descripcion`, `colaborador`, `correo`, `es_jefe`, `activo`) VALUES
(1, 'a', 'a', 'aas@a.c', 1, 1),
(2, 'afius', 'kevin rojas', 'kevin_rojas30@hotmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_encuestas`
--

CREATE TABLE IF NOT EXISTS `tbl_encuestas` (
  `id_encuesta` int(10) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activo` int(1) NOT NULL,
  PRIMARY KEY (`id_encuesta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tbl_encuestas`
--

INSERT INTO `tbl_encuestas` (`id_encuesta`, `titulo`, `fecha_creacion`, `activo`) VALUES
(1, 'prueba', '2017-03-03 21:25:31', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_encuesta_valida`
--

CREATE TABLE IF NOT EXISTS `tbl_encuesta_valida` (
  `cadena` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `departamento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `encuesta` int(10) NOT NULL,
  `completado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_encuesta_valida`
--

INSERT INTO `tbl_encuesta_valida` (`cadena`, `departamento`, `encuesta`, `completado`) VALUES
('83303cd4dc4ebd37ad7e6ca048853e38', 'informatica', 1, 1),
('819c9bdb45bdc1ab9b30c46cf0a4d4c9', 'informatica', 1, 1),
('c612da2dba8fc89a6577324e21f71676', 'informatica', 1, 0),
('83303cd4dc4ebd37ad7e6ca048853e38', 'ventas', 1, 1),
('819c9bdb45bdc1ab9b30c46cf0a4d4c9', 'ventas', 1, 1),
('c612da2dba8fc89a6577324e21f71676', 'ventas', 1, 0),
('c95ae9f0b9e90a79f075fc8f78dc15e3', 'mercadeo', 1, 0),
('dffa2cce7f3284c0a12baf36c8ad4c21', 'mercadeo', 1, 0),
('2582d549aa1677719eed9bea40df88a6', 'mercadeo', 1, 0),
('aaaaaaaaaaaaaaa', 'mercadeo', 1, 1),
('d933fc803585a535f96f8fdbcb7a4d58', 'IT', 1, 1),
('5d26654cbb53e004987b6ec50591ce4e', 'IT', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estudio`
--

CREATE TABLE IF NOT EXISTS `tbl_estudio` (
  `fk_pregunta` int(11) NOT NULL,
  `fk_criterio` varchar(11) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `valores_estudio` int(20) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_estudio`
--

INSERT INTO `tbl_estudio` (`fk_pregunta`, `fk_criterio`, `cliente`, `valores_estudio`, `cantidad`) VALUES
(1, '1', '', 1, 1),
(2, '1', '', 4, 1),
(3, '2', '', 2, 1),
(4, '3', '', 4, 1),
(5, '1', '', 2, 1),
(6, '4', '', 2, 1),
(7, '2', '', 4, 1),
(8, '2', '', 4, 1),
(9, '2', '', 5, 1),
(10, '2', '', 5, 1),
(11, '2', '', 5, 1),
(12, '2', '', 4, 1),
(13, '5', '', 5, 1),
(14, '3', '', 4, 1),
(15, '5', '', 5, 1),
(16, '6', '', 5, 1),
(1, '1', '', 5, 1),
(2, '1', '', 5, 1),
(3, '2', '', 4, 1),
(4, '3', '', 4, 1),
(5, '1', '', 2, 1),
(6, '4', '', 4, 1),
(7, '2', '', 4, 1),
(8, '2', '', 4, 1),
(9, '2', '', 5, 1),
(10, '2', '', 5, 1),
(11, '2', '', 4, 1),
(12, '2', '', 4, 1),
(13, '5', '', 4, 1),
(14, '3', '', 4, 1),
(15, '5', '', 2, 1),
(16, '6', '', 4, 1),
(17, '5', '', 4, 1),
(1, '1', '', 5, 1),
(2, '1', '', 4, 1),
(3, '2', '', 5, 1),
(4, '3', '', 5, 1),
(3, '2', '', 5, 1),
(4, '3', '', 5, 1),
(3, '2', '', 5, 1),
(4, '3', '', 5, 1),
(9, '2', '', 5, 1),
(10, '2', '', 4, 1),
(11, '2', '', 2, 1),
(12, '2', '', 4, 1),
(13, '5', '', 5, 1),
(14, '3', '', 4, 1),
(15, '5', '', 5, 1),
(16, '6', '', 5, 1),
(17, '5', '', 5, 1),
(1, '1', '', 4, 1),
(2, '1', '', 4, 1),
(1, '1', 'aaaaaaaaaaaaaaa', 4, 1),
(2, '1', 'aaaaaaaaaaaaaaa', 4, 1),
(5, '1', 'aaaaaaaaaaaaaaa', 4, 1),
(6, '4', 'aaaaaaaaaaaaaaa', 4, 1),
(7, '2', 'aaaaaaaaaaaaaaa', 5, 1),
(8, '2', 'aaaaaaaaaaaaaaa', 5, 1),
(9, '2', 'aaaaaaaaaaaaaaa', 5, 1),
(10, '2', 'aaaaaaaaaaaaaaa', 4, 1),
(11, '2', 'aaaaaaaaaaaaaaa', 4, 1),
(12, '2', 'aaaaaaaaaaaaaaa', 1, 1),
(13, '5', 'aaaaaaaaaaaaaaa', 4, 1),
(14, '3', 'aaaaaaaaaaaaaaa', 2, 1),
(15, '5', 'aaaaaaaaaaaaaaa', 4, 1),
(16, '6', 'aaaaaaaaaaaaaaa', 5, 1),
(17, '5', 'aaaaaaaaaaaaaaa', 4, 1),
(1, '1', 'd933fc803585a535f96f8fdbcb7a4d58', 5, 1),
(2, '1', 'd933fc803585a535f96f8fdbcb7a4d58', 5, 1),
(3, '2', 'd933fc803585a535f96f8fdbcb7a4d58', 5, 1),
(4, '3', 'd933fc803585a535f96f8fdbcb7a4d58', 2, 1),
(5, '1', 'd933fc803585a535f96f8fdbcb7a4d58', 5, 1),
(6, '4', 'd933fc803585a535f96f8fdbcb7a4d58', 5, 1),
(7, '2', 'd933fc803585a535f96f8fdbcb7a4d58', 2, 1),
(8, '2', 'd933fc803585a535f96f8fdbcb7a4d58', 4, 1),
(9, '2', 'd933fc803585a535f96f8fdbcb7a4d58', 4, 1),
(10, '2', 'd933fc803585a535f96f8fdbcb7a4d58', 5, 1),
(11, '2', 'd933fc803585a535f96f8fdbcb7a4d58', 5, 1),
(12, '2', 'd933fc803585a535f96f8fdbcb7a4d58', 5, 1),
(13, '5', 'd933fc803585a535f96f8fdbcb7a4d58', 4, 1),
(14, '3', 'd933fc803585a535f96f8fdbcb7a4d58', 2, 1),
(15, '5', 'd933fc803585a535f96f8fdbcb7a4d58', 5, 1),
(16, '6', 'd933fc803585a535f96f8fdbcb7a4d58', 5, 1),
(17, '5', 'd933fc803585a535f96f8fdbcb7a4d58', 5, 1);

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
  `encuesta` int(10) NOT NULL,
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_preguntas`
--

INSERT INTO `tbl_preguntas` (`id_pregunta`, `fk_criterio`, `pregunta`, `encuesta`) VALUES
(1, '1', 'Los objetivos y metas de trabajo de la unidad se definen y dan a conocer con claridad y precisi&oacuten.', 1),
(2, '1', 'El trabajo a realizar es analizado con el personal y se le brinda lineamientos sobre &eacutel.', 1),
(3, '2', 'Se asignan equitativamente las tareas, y la autoridad y responsabilidad para desempeñarlas.', 1),
(4, '3', 'Las normas y procedimientos de trabajo son conocidos y aplicados por el personal.', 1),
(5, '1', 'Se aplican mecanismos  de evaluaci&oacuten y control del trabajo.', 1),
(6, '4', 'El superior esta disponible para aclarar dudas, dar orientaci&oacuten y realimentaci&oacuten a sus subalternos.', 1),
(7, '2', 'El recurso humano del que se dispone es suficiente y con el perfil requerido.', 1),
(8, '2', 'Los recursos materiales  y suministros para el trabajo se proveen en la cantidad y la calidad requerida.', 1),
(9, '2', 'Se dispone de las herramientas, maquinarias y Equipos necesarios para realizar el trabajo.', 1),
(10, '2', 'La iluminaci&oacuten, ventilaci&oacuten y espacio f&iacutesico disponible en el area de trabajo son los adecuados.', 1),
(11, '2', 'Se dispone de presupuesto necesario para desarrollar el trabajo de la unidad administrativa.', 1),
(12, '2', 'Hay disponibilidad de medios de transporte cuando estos son los requeridos por el personal para el trabajo.', 1),
(13, '5', 'se recibe informaci&oacuten y colaboraci&oacuten de los otros compañeros de unidad para desarrollar el trabajo.', 1),
(14, '3', 'El supervisor inmediato administra la disciplina del equipo de trabajo en forma justa y constante.', 1),
(15, '5', 'El trabajo realizado es valorado justamente por el jefe o supervisor.', 1),
(16, '6', 'Se recibe capacitaci&oacuten que resulta de utilidad para el desempe&ntildeo del puesto', 1),
(17, '5', 'Existe cohesi&oacuten, cooperaci&oacuten y armon&iacutea en el grupo de trabajo.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_resultado_evaluacion`
--

CREATE TABLE IF NOT EXISTS `tbl_resultado_evaluacion` (
  `id_resultado` int(10) NOT NULL AUTO_INCREMENT,
  `primer_resultado` varchar(200) NOT NULL,
  `segundo_resultado` varchar(500) NOT NULL,
  `tercer_resultado` varchar(10000) NOT NULL,
  `cuarto_resultado` varchar(2000) NOT NULL,
  PRIMARY KEY (`id_resultado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_resultado_evaluacion`
--

INSERT INTO `tbl_resultado_evaluacion` (`id_resultado`, `primer_resultado`, `segundo_resultado`, `tercer_resultado`, `cuarto_resultado`) VALUES
(1, 'DESEMPEÑO NO SATISFACTORIO EN EL NIVEL DE DEFICIENTE', 'La calificación de DESEMPEÑO NO SATISFACTORIO EN EL NIVEL REGULAR O POR\r\nDEBAJO DE LAS EXPECTATIVAS revela que su Unidad Administrativa, no cumple con el\r\nfuncionamiento mínimo esperado, n i con las condiciones básicas que hagan posible un\r\ndesempeño satisfactorio por parte de sus subalternos.\r\n', 'Las Áreas  y criterios que, en el caso de su Unidad administrativa, requieren de urgente atención y mejora son los siguientes:\n\n1.	VISION DE DESARROLLO COMPARTIDA\n1.1.	Objetivos y metas de trabajo definidas y dadas a conocer en forma clara y precisa.\n1.2.	Análisis previo del trabajo a realizar y suministro  de lineamientos para su desarrollo.\n1.3.	Evaluación y control periódico del trabajo realizado.\n\n2.	   ESTRUCTURA Y ORGANIZACIÓN DEL TRABAJO\n2.1.	Tareas asignadas equitativamente así como la autoridad y responsabilidad para desempeñarlas.\n2.2.	Dotación de Recursos Humanos en cantidad suficiente y con el perfil requerido.\n2.3.	Materiales  y suministros para el trabajo provistos en la cantidad y con la calidad  requerida.\n2.4. Herramientas, materiales y equipos necesarios para el trabajo en \n          disponibilidad.\n2.5.  Adecuada iluminación,  ventilación y espacio físico del área de \n        trabajo.\n2.6. Disponibilidad del presupuesto necesario para desarrollar el trabajo  \n       en la Unidad Administrativa.\n2.7. Disponibilidad de medios de transporte cuando son requeridos por el \n       personal para el trabajo.\n         \n3.	NORMAS Y PROCEDIMIENTOS DE TRABAJO\n3.1.	Normas y procedimientos de trabajo conocidos y aplicados por el \npersonal.\n3.2.	Disciplina del equipo de trabajo administrada en forma justa y \nconstante.\n\n4.	COMUNICACIÓN Y COORDINACION\n4.1.	Aclaración de dudas, orientación y realimentación al personal por el \n             Jefe o supervisor.\n\n5.	COHESIÓN Y MOTIVACIÓN DEL GRUPO\n5.1. Información y colaboración para el trabajo ofrecidas por los  compañeros.\n5.2. Valoración justa del trabajo realizado por parte del superior o jefe.\n5.3. Cohesión, cooperación y armonía en el grupo de trabajo.\n\n6.	CAPACITACIÓN Y DESARROLLO DEL PERSONAL\n  6.1. Capacitación de utilidad para el puesto de trabajo\n', 'A Usted lo (la) exhortamos para que, en un plazo no mayor de tres (3) meses, corrija, de cada criterio evaluado los aspectos o situaciones (resaltados en amarillo) que estén a su alcance lograrlo.\nPara ello también puede y debe solicitar el apoyo de su superior inmediato. La meta es disponer a nivel de toda la institución, empresa u organización de Unidades Administrativas en funcionamiento óptimo, \n'),
(2, 'DESEMPEÑO NO SATISFACTORIO EN EL NIVEL DE REGULAR', 'La calificación de DESEMPEÑO NO SATISFACTORIO EN EL NIVEL REGULAR O POR DEBAJO DE LAS EXPECTATIVAS revela que su Unidad Administrativa, no cumple con el funcionamiento mínimo esperado, n i con las condiciones básicas que hagan posible un desempeño satisfactorio por parte de sus subalternos.', 'Las Áreas  y criterios que, en el caso de su Unidad administrativa, requieren de urgente atención y mejora son los siguientes:\r\n\r\n1.	VISION DE DESARROLLO COMPARTIDA\r\n1.1.	Objetivos y metas de trabajo definidas y dadas a conocer en forma clara y precisa.\r\n1.2.	Análisis previo del trabajo a realizar y suministro  de lineamientos para su desarrollo.\r\n1.3.	Evaluación y control periódico del trabajo realizado.\r\n\r\n2.	   ESTRUCTURA Y ORGANIZACIÓN DEL TRABAJO\r\n2.1.	Tareas asignadas equitativamente así como la autoridad y responsabilidad para desempeñarlas.\r\n2.2.	Dotación de Recursos Humanos en cantidad suficiente y con el perfil requerido.\r\n2.3.	Materiales  y suministros para el trabajo provistos en la cantidad y con la calidad  requerida.\r\n2.4. Herramientas, materiales y equipos necesarios para el trabajo en \r\n          disponibilidad.\r\n2.5.  Adecuada iluminación,  ventilación y espacio físico del área de \r\n        trabajo.\r\n2.6.  Disponibilidad del presupuesto necesario para desarrollar el trabajo  \r\n        en la Unidad Administrativa.\r\n2.7. Disponibilidad de medios de transporte cuando son requeridos por el \r\n       personal para el trabajo.\r\n         \r\n7.	NORMAS Y PROCEDIMIENTOS DE TRABAJO\r\n7.1.	Normas y procedimientos de trabajo conocidos y aplicados por el \r\npersonal.\r\n7.2.	Disciplina del equipo de trabajo administrada en forma justa y \r\nconstante.\r\n\r\n8.	COMUNICACIÓN Y COORDINACION\r\n8.1.	Aclaración de dudas, orientación y realimentación al personal por el \r\n             Jefe o supervisor.\r\n\r\n9.	COHESIÓN Y MOTIVACIÓN DEL GRUPO\r\n5.1. Información y colaboración para el trabajo ofrecidas por los  compañeros.\r\n5.2. Valoración justa del trabajo realizado por parte del superior o jefe.\r\n5.3. Cohesión, cooperación y armonía en el grupo de trabajo.\r\n\r\n10.	CAPACITACIÓN Y DESARROLLO DEL PERSONAL\r\n  6.1. Capacitación de utilidad para el puesto de trabajo\r\n', 'A Usted lo (la) exhortamos para que, en un plazo no mayor de tres (3) meses, corrija, de cada criterio evaluado, los aspectos o situaciones (resaltados en amarillo) que estén a su alcance lograrlo.\r\nPara ello también puede y debe solicitar el apoyo de su superior inmediato. La meta es disponer a nivel de toda la institución, empresa u organización de Unidades Administrativas en funcionamiento óptimo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_unidad`
--

CREATE TABLE IF NOT EXISTS `tbl_unidad` (
  `id_unidad` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `colaborador` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `fk_empresa` int(11) NOT NULL,
  `es_jefe` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) NOT NULL,
  `correo_electronico` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `estado` int(11) NOT NULL,
  `mostrar` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id_usuario`, `id_rol`, `correo_electronico`, `clave`, `nombre`, `apellido`, `estado`, `mostrar`) VALUES
(2, 2, 'admin@hotmail.com', 'admin', 'kevin', 'Rojas', 1, 1),
(3, 2, 'prueba@hotmail.com', 'admin123', 'usuario', 'prueba', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
