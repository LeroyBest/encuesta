-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2017 a las 00:10:44
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
  `id_departamento` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  `colaborador` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `fk_unidad` int(10) NOT NULL,
  `es_jefe` int(1) NOT NULL,
  `activo` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_departamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `tbl_departamento`
--

INSERT INTO `tbl_departamento` (`id_departamento`, `descripcion`, `colaborador`, `correo`, `fk_unidad`, `es_jefe`, `activo`) VALUES
(1, '', ' roberto rodriguez', 'roberto@a.com', 0, 0, 1),
(2, 'asdfg', 'asdf', 'a@a.com', 7, 0, 1),
(4, 'agrario', 'juan Perez', 'juanPerez@agrario.com', 1, 1, 1),
(9, 'operaciones', 'anacleto medina', 'am@correo.com', 7, 1, 1),
(25, 'infraestructura', 'alberto galves', 'albertoG@hotmail.com', 0, 1, 1),
(26, 'mercadeo', 'Luz Aguilera', 'luza@hotmail.com', 0, 1, 1),
(28, 'ventas', 'maria juana', 'mariaa@gmail.com', 6, 1, 1),
(29, 'negocios', 'margarita guardia', 'margaritag@gmail.com', 7, 1, 1),
(30, 'legal', 'jose morales', 'josem@gmail.com', 7, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empleados`
--

CREATE TABLE IF NOT EXISTS `tbl_empleados` (
  `id_empleado` int(11) NOT NULL AUTO_INCREMENT,
  `fk_departamento` int(11) NOT NULL,
  `colaborador` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `activo` int(1) NOT NULL,
  PRIMARY KEY (`id_empleado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `tbl_empleados`
--

INSERT INTO `tbl_empleados` (`id_empleado`, `fk_departamento`, `colaborador`, `correo`, `activo`) VALUES
(1, 2, 'juan perez', 'juan@correo.com', 1),
(2, 2, ' pedro gonzalez', 'pedro@correo.com', 1),
(3, 2, 'juan perez', 'juan@correo.com', 1),
(4, 5, ' pedro gonzalez', 'pedro@correo.com', 1),
(5, 5, 'juan perez', 'juan@correo.com', 1),
(6, 5, ' pedro gonzalez', 'pedro@correo.com', 1),
(7, 0, 'juan perez', 'juan@correo.com', 1),
(8, 0, ' pedro gonzalez', 'pedro@correo.com', 1),
(9, 26, 'juan perez', 'juan@correo.com', 1),
(10, 26, ' pedro gonzalez', 'pedro@correo.com', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tbl_empresa`
--

INSERT INTO `tbl_empresa` (`id_empresa`, `descripcion`, `colaborador`, `correo`, `es_jefe`, `activo`) VALUES
(0, 'Sin empresa', '', '', 0, 1),
(1, 'kevin', 'kevin', 'kevin_rojas30', 1, 1),
(2, 'prueba1', 'a', 's', 1, 1),
(3, 'prueba', 'a', 's', 1, 1),
(4, 'test', 'alguien en algun lugar', 'A@a.com', 1, 1);

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
  `departamento` int(6) NOT NULL,
  `encuesta` int(10) NOT NULL,
  `completado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_encuesta_valida`
--

INSERT INTO `tbl_encuesta_valida` (`cadena`, `departamento`, `encuesta`, `completado`) VALUES
('83303cd4dc4ebd37ad7e6ca048853e38', 28, 1, 1),
('819c9bdb45bdc1ab9b30c46cf0a4d4c9', 28, 1, 1),
('c612da2dba8fc89a6577324e21f71676', 28, 1, 1),
('83303cd4dc4ebd37ad7e6ca048853e38', 28, 1, 1),
('819c9bdb45bdc1ab9b30c46cf0a4d4c9', 28, 1, 1),
('c612da2dba8fc89a6577324e21f71676', 28, 1, 1),
('c95ae9f0b9e90a79f075fc8f78dc15e3', 28, 1, 0),
('dffa2cce7f3284c0a12baf36c8ad4c21', 28, 1, 0),
('2582d549aa1677719eed9bea40df88a6', 26, 1, 0),
('aaaaaaaaaaaaaaa', 28, 1, 1),
('d933fc803585a535f96f8fdbcb7a4d58', 28, 1, 1),
('5d26654cbb53e004987b6ec50591ce4e', 28, 1, 0);

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
(17, '5', 'd933fc803585a535f96f8fdbcb7a4d58', 5, 1),
(1, '1', 'c612da2dba8fc89a6577324e21f71676', 5, 1),
(2, '1', 'c612da2dba8fc89a6577324e21f71676', 4, 1),
(3, '2', 'c612da2dba8fc89a6577324e21f71676', 4, 1),
(4, '3', 'c612da2dba8fc89a6577324e21f71676', 4, 1),
(5, '1', 'c612da2dba8fc89a6577324e21f71676', 2, 1),
(6, '4', 'c612da2dba8fc89a6577324e21f71676', 4, 1),
(7, '2', 'c612da2dba8fc89a6577324e21f71676', 4, 1),
(8, '2', 'c612da2dba8fc89a6577324e21f71676', 5, 1),
(9, '2', 'c612da2dba8fc89a6577324e21f71676', 5, 1),
(10, '2', 'c612da2dba8fc89a6577324e21f71676', 5, 1),
(11, '2', 'c612da2dba8fc89a6577324e21f71676', 4, 1),
(12, '2', 'c612da2dba8fc89a6577324e21f71676', 4, 1),
(13, '5', 'c612da2dba8fc89a6577324e21f71676', 5, 1),
(14, '3', 'c612da2dba8fc89a6577324e21f71676', 5, 1),
(15, '5', 'c612da2dba8fc89a6577324e21f71676', 5, 1),
(16, '6', 'c612da2dba8fc89a6577324e21f71676', 1, 1),
(17, '5', 'c612da2dba8fc89a6577324e21f71676', 5, 1);

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
  `primer_resultado` varchar(500) NOT NULL,
  `segundo_resultado` varchar(1000) NOT NULL,
  `cuarto_resultado` varchar(2000) NOT NULL,
  PRIMARY KEY (`id_resultado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tbl_resultado_evaluacion`
--

INSERT INTO `tbl_resultado_evaluacion` (`id_resultado`, `primer_resultado`, `segundo_resultado`, `cuarto_resultado`) VALUES
(1, '<p><u>PRIMER RESULTADO:</u></p>\n<p>Los puntajes consolidados&nbsp; de la consulta realizada a las personas que respondieron a los reactivos o afirmaciones de este formulario, dieron por resultado para la GERENCIA DE MERCADEO una evaluaci&oacute;n calificada como:</p>\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DESEMPE&Ntilde;O NO SATISFACTORIO EN EL NIVEL &nbsp;DE DEFICIENTE</p>\n<p>&nbsp;</p>', '<p>Opci&oacute;n W<strong>: (</strong><strong><u>SEGUNDO RESULTADO)</u></strong></p>\n<table style="height: 142px; border-color: black;" width="588">\n<tbody>\n<tr>\n<td style="width: 578px;">&nbsp;La calificaci&oacute;n de DESEMPE&Ntilde;O NO SATISFACTORIO EN EL NIVEL DEFICIENTE. revela que su Unidad Administrativa, en la mayor&iacute;a de los factores evaluados, siempre est&aacute; por debajo de lo esperado y muy lejos de cumplir&nbsp; con las condiciones de trabajo b&aacute;sicas que faciliten o le permitan a sus subalternos o colaboradores un desempe&ntilde;o satisfactorio.</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>\n', '<p>Opci&oacute;n <strong>W: <u>(CUARTO RESULTADO</u>)</strong></p>\n<p>&nbsp;</p>\n<table>\n<tbody>\n<tr>\n<td>\n<p>A Usted lo (la) exhortamos para que, en un plazo no mayor de tres (3) meses, corrija, de cada criterio evaluado los aspectos o situaciones (resaltados en amarillo) que est&eacute;n a su alcance lograrlo.</p>\n<p>Para ello tambi&eacute;n puede y debe solicitar el apoyo de su superior inmediato. La meta es disponer a nivel de toda la instituci&oacute;n, empresa u organizaci&oacute;n de Unidades Administrativas en funcionamiento &oacute;ptimo,</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>'),
(2, '<p><u>PRIMER RESULTADO:</u></p>\n<p>Los puntajes consolidados&nbsp; de la consulta realizada a las personas que respondieron a los reactivos o preguntas de este formulario, dieron por resultado para la GERENCIA DE MERCADEO una evaluaci&oacute;n calificada como:</p>\n<p>(Opci&oacute;n X): &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DESEMPE&Ntilde;O NO SATISFACTORIO EN EL NIVEL DE REGULAR</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>', '<p><strong>(</strong><strong><u>SEGUNDO RESULTADO)</u></strong></p>\n<p>&nbsp;</p>\n<table style="height: 123px;" width="709">\n<tbody>\n<tr style="height: 67px;">\n<td style="width: 699px; height: 67px;">&nbsp;La calificaci&oacute;n de DESEMPE&Ntilde;O NO SATISFACTORIO EN EL NIVEL REGULAR O POR DEBAJO DE LAS EXPECTATIVAS revela que su Unidad Administrativa, no cumple con el funcionamiento m&iacute;nimo esperado, n i con las condiciones b&aacute;sicas que hagan posible un desempe&ntilde;o satisfactorio por parte de sus subalternos.<br /><br /></td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>', '<p><strong><u>(CUARTO RESULTADO</u>)</strong></p>\n<p>&nbsp;</p>\n<table style="height: 129px;" width="621">\n<tbody>\n<tr>\n<td style="width: 611px;">&nbsp;A Usted lo (la) exhortamos para que, en un plazo no mayor de tres (3) meses, corrija, de cada criterio evaluado, los aspectos o situaciones (resaltados en amarillo) que est&eacute;n a su alcance lograrlo.\n<p>Para ello tambi&eacute;n puede y debe solicitar el apoyo de su superior inmediato. La meta es disponer a nivel de toda la instituci&oacute;n, empresa u organizaci&oacute;n de Unidades Administrativas en funcionamiento &oacute;ptimo,</p>\n</td>\n</tr>\n</tbody>\n</table>Para ello también puede y debe solicitar el apoyo de su superior inmediato. La meta es disponer a nivel de toda la institución, empresa u organización de Unidades Administrativas en funcionamiento óptimo.'),
(3, '<p><strong><u>PRIMER RESULTADO:</u></strong></p>\r\n<p>Los puntajes consolidados&nbsp; de la consulta realizada a las personas que respondieron a los reactivos o afirmaciones de este formulario, dieron por resultado para la GERENCIA DE MERCADEO una evaluaci&oacute;n calificada como de:</p>\r\n<p><strong>(Opci&oacute;n Y): &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DESEMPE&Ntilde;O </strong><strong>SATISFACTORIO EN EL NIVEL DE </strong><strong>BUENO</strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '<p><strong>(</strong><strong><u>SEGUNDO RESULTADO)</u> </strong></p>\n<p>&nbsp;</p>\n<table style="height: 129px;" width="621">\n<tbody>\n<tr style="height: 88px;">\n<td style="width: 611px; height: 88px;">&nbsp;La calificaci&oacute;n de DESEMPE&Ntilde;O SATISFACTORIO EN EL NIVEL DE BUENO significa que &nbsp;la Unidad Administrativa o Proyecto liderado por Usted, cumple con todas o casi todas con las condiciones necesarias para asegurar el mejor &nbsp;desempe&ntilde;o por parte de sus subalternos.</td>\n</tr>\n</tbody>\n</table>', '<p><strong><u>(CUARTO RESULTADO</u>) </strong></p>\n<p>&nbsp;</p>\n<table style="height: 129px;" width="621">\n<tbody>\n<tr style="height: 88px;">\n<td style="width: 611px; height: 88px;">\n<p>&nbsp;Perm&iacute;tanos felicitarlo (la) porque su Unidad Administrativa o Proyecto no solo <strong>CUMPLE</strong> con lo esperado sino tambi&eacute;n, de manera ocasional, supera las expectativas de funcionamiento fijadas en este &aacute;mbito. Esto lo convierte en un modelo de actuaci&oacute;n a imitar, igualar y superar por el resto de las Unidades Administrativas dentro de la organizaci&oacute;n.</p>\n<p>&nbsp;</p>\n<p>A Usted lo (la) exhortamos a:</p>\n<ul>\n<li>mejorar su desempe&ntilde;o, en procura de la excelencia en todos aquellos criterios y aspectos (resaltados en amarillo) evaluados por debajo de BUENO.</li>\n<li>A MANTENERSE y/o SUPERAR aquellos con evaluaci&oacute;n SATISFACTORIA en el nivel de BUENO</li>\n</ul>\n<p>Para ello tambi&eacute;n puede y debe solicitar el apoyo de su superior inmediato. La meta es disponer a nivel de toda la instituci&oacute;n, empresa u organizaci&oacute;n de Unidades Administrativas en funcionamiento &oacute;ptimo,</p>\n</td>\n</tr>\n</tbody>\n</table>'),
(4, '<p><strong><u>PRIMER RESULTADO:</u></strong></p>\r\n<p>Los puntajes consolidados&nbsp; de la consulta realizada a las personas que respondieron a los reactivos o afirmaciones de este formulario, dieron por resultado para la GERENCIA DE MERCADEO una evaluaci&oacute;n calificada como de:</p>\r\n<p><strong>(Opci&oacute;n Z): &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DESEMPE&Ntilde;O </strong><strong>SATISFACTORIO EN EL NIVEL DE </strong><strong>EXCELENTE</strong></p>\r\n<p>&nbsp;</p>', '<p><strong>(</strong><strong><u>SEGUNDO RESULTADO)</u> </strong></p>\n<p>&nbsp;</p>\n<table style="height: 129px;" width="621">\n<tbody>\n<tr style="height: 88px;">\n<td style="width: 611px; height: 88px;">\n<p>La calificaci&oacute;n de DESEMPE&Ntilde;O SATISFACTORIO EN EL NIVEL DE EXCELENTE significa que &nbsp;la Unidad Administrativa o Proyecto liderado por Usted, HA SUPERADO&nbsp; todas o casi todas las EXPECTATIVAS DE FUNCIONAMIENTO y se convierte en una unidad administrativa o proyecto modelo, en la cual todos los colaboradores encuentran y disfrutan del mejor&nbsp; escenario posible para desplegar con entusiasmo todas sus potencialidades.</p>\n</td>\n</tr>\n</tbody>\n</table>', '<p><strong><u>(CUARTO RESULTADO</u>) </strong></p>\n<p>&nbsp;</p>\n<table style="height: 129px;" width="621">\n<tbody>\n<tr style="height: 88px;">\n<td style="width: 611px; height: 88px;">\n<p>&nbsp;Perm&iacute;tanos felicitarlo (la) porque de manera consistente &nbsp;su Unidad Administrativa o Proyecto &nbsp;dispone de</p>\n<ul>\n<li>Una visi&oacute;n de desarrollo compartida,</li>\n<li>De una adecuada estructura y organizaci&oacute;n del trabajo.</li>\n<li>De claras normas y procedimientos de trabajo.</li>\n<li>De efectivos procesos de comunicaci&oacute;n y coordinaci&oacute;n para el trabajo.</li>\n<li>El grupo se siente cohesionado y motivado y</li>\n<li>Se dispone y aprovechan las oportunidades para la capacitaci&oacute;n y desarrollo del personal.</li>\n</ul>\n</td>\n</tr>\n</tbody>\n</table>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_unidad`
--

CREATE TABLE IF NOT EXISTS `tbl_unidad` (
  `id_unidad` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  `colaborador` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `fk_empresa` int(11) DEFAULT NULL,
  `es_jefe` int(1) NOT NULL,
  `activo` int(1) NOT NULL,
  PRIMARY KEY (`id_unidad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `tbl_unidad`
--

INSERT INTO `tbl_unidad` (`id_unidad`, `descripcion`, `colaborador`, `correo`, `fk_empresa`, `es_jefe`, `activo`) VALUES
(0, 'Sin unidad', '', '', 0, 0, 1),
(1, 'tecnicos', 'alguno', 'alguno@hotmail.com', 1, 1, 1),
(2, 'sfg', 'sfg', 'dfg', 0, 1, 1),
(3, 'sfdg', 'df', 'df', 0, 1, 1),
(4, 'afas', 'asf', 'asd', 0, 1, 1),
(5, 'adfa', 'kevin', 'kev', 0, 1, 1),
(6, 'informatica', 'leonel messi', 'messi@cwp.com', 2, 1, 1),
(7, 'test', 'test', 'test', 2, 1, 1);

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
