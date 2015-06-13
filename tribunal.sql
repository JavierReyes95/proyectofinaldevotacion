-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2015 a las 06:45:05
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tribunal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alcalde`
--

CREATE TABLE IF NOT EXISTS `alcalde` (
`id_alcalde` int(11) NOT NULL,
  `id_dui` int(9) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `partido` int(11) NOT NULL,
  `bandera` varchar(100) NOT NULL,
  `departamento` int(11) NOT NULL,
  `municipio` int(11) NOT NULL,
  `voto` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alcalde`
--

INSERT INTO `alcalde` (`id_alcalde`, `id_dui`, `nombre`, `apellido`, `partido`, `bandera`, `departamento`, `municipio`, `voto`) VALUES
(1, 121212123, 'karla', 'ramirez', 4, 'pcn.jpg', 2, 12, 0),
(2, 347687345, 'javier', 'hernandez', 1, 'a.jpg', 1, 101, 2),
(3, 142375647, 'carlos', 'bernal', 2, 'fmln.jpg', 11, 1108, 0),
(4, 181818181, 'karen', 'martinez', 3, 'cd.jpg', 4, 101, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudadano`
--

CREATE TABLE IF NOT EXISTS `ciudadano` (
  `id_dui` int(9) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `genero` varchar(12) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `fecha_expedicion` date NOT NULL,
  `depar_expedicion` int(11) NOT NULL,
  `mun_expedicion` int(11) NOT NULL,
  `fecha_expiracion` date NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `depar_direccion` int(11) NOT NULL,
  `mun_direccion` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudadano`
--

INSERT INTO `ciudadano` (`id_dui`, `nombre`, `apellido`, `genero`, `fecha_nacimiento`, `id_departamento`, `id_municipio`, `fecha_expedicion`, `depar_expedicion`, `mun_expedicion`, `fecha_expiracion`, `direccion`, `depar_direccion`, `mun_direccion`, `estado`) VALUES
(123445678, 'margarita ', 'bernal', 'F', '2015-05-25', 14, 1401, '2015-05-27', 14, 1401, '2015-05-31', 'col esperanza', 14, 1401, 1),
(123456781, 'javier', 'reyes', 'M', '2015-05-01', 1, 101, '2015-05-13', 1, 101, '2015-05-31', 'san julian', 1, 101, 1),
(123456782, 'elsy ', 'berrios', 'F', '2015-01-01', 1, 102, '2015-01-03', 1, 102, '2015-01-31', 'san gorge', 1, 102, 1),
(123456783, 'guillermo ', 'bernal', 'M', '2015-02-03', 1, 112, '2015-02-10', 1, 112, '2015-02-26', 'col las victorias', 1, 112, 1),
(123456784, 'eunice', 'masariego', 'F', '2015-03-17', 2, 201, '2015-05-20', 2, 201, '2015-05-31', 'col las victorias', 2, 201, 1),
(123456785, 'rodolfo', 'miranda', 'M', '2015-12-17', 2, 210, '2015-12-19', 2, 210, '2015-12-31', 'barrio el carmen', 2, 210, 1),
(123456786, 'carlos', 'emanuel', 'M', '2015-04-14', 3, 301, '2015-04-15', 3, 301, '2015-04-30', 'col las margaritas', 3, 301, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coalicion`
--

CREATE TABLE IF NOT EXISTS `coalicion` (
`id_coalicion` int(11) NOT NULL,
  `dui` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `tipo_candidato` varchar(15) NOT NULL,
  `id_partido` int(11) NOT NULL,
  `partido_dos` int(11) NOT NULL,
  `bandera` varchar(11) NOT NULL,
  `departamento` int(11) NOT NULL,
  `municipio` int(11) NOT NULL,
  `partido_tres` int(11) NOT NULL,
  `partido_cuatro` int(11) NOT NULL,
  `coalicion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id`, `nombre`, `codigo`) VALUES
(1, 'Ahuachapán', 1),
(2, 'Santa Ana', 2),
(3, 'Sonsonate', 3),
(4, 'Chalatenango', 4),
(5, 'La Libertad', 5),
(6, 'San Salvador', 6),
(7, 'Cuscatlán', 7),
(8, 'La Paz', 8),
(9, 'Cabañas', 9),
(10, 'San Vicente', 10),
(11, 'Usulután', 11),
(12, 'San Miguel', 12),
(13, 'Morazán', 13),
(14, 'La Unión', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diputado`
--

CREATE TABLE IF NOT EXISTS `diputado` (
`id_diputado` int(11) NOT NULL,
  `id_dui` int(9) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `partido` int(11) NOT NULL,
  `bandera` varchar(100) NOT NULL,
  `departamento` int(11) NOT NULL,
  `voto` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `diputado`
--

INSERT INTO `diputado` (`id_diputado`, `id_dui`, `nombre`, `apellido`, `partido`, `bandera`, `departamento`, `voto`) VALUES
(1, 232323231, 'cristian', 'hernandez', 5, 'a.jpg', 1, 1),
(2, 242424242, 'karla', 'monserrat', 4, 'fmln.jpg', 1, 2),
(3, 242424243, 'rodolfo', 'miranda', 6, 'cd.jpg', 1, 1),
(4, 252525254, 'yulisa', 'barrera', 9, 'pcn.jpg', 14, 0),
(5, 262626265, 'melvin', 'bernal', 8, 'gana.jpg', 13, 0),
(6, 272727276, 'eunice', 'masariego', 6, 'pdc.jpg', 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elecciones`
--

CREATE TABLE IF NOT EXISTS `elecciones` (
`id_eleccion` int(11) NOT NULL,
  `precidencial` varchar(15) DEFAULT NULL,
  `municipal` varchar(15) DEFAULT NULL,
  `diputado` varchar(15) DEFAULT NULL,
  `periodo` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `elecciones`
--

INSERT INTO `elecciones` (`id_eleccion`, `precidencial`, `municipal`, `diputado`, `periodo`) VALUES
(1, 'Presidencial', 'Municipal', 'Ansamblea', 785),
(2, '', 'Municipal', 'Ansamblea', 565);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `codigo` int(11) NOT NULL,
  `codigo_depto` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=263 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `nombre`, `codigo`, `codigo_depto`) VALUES
(1, 'zacatecoluca', 101, 1),
(2, 'cuyultitan', 102, 1),
(3, 'el rosario', 103, 1),
(4, 'gerusalen', 104, 1),
(5, 'mercedes la ceiba', 105, 1),
(6, 'olocuilta', 106, 1),
(7, 'paraiso de osorio', 107, 1),
(8, 'San emigdio', 108, 1),
(9, 'San francisco chinameca', 109, 1),
(10, 'San Pedro massahuat', 110, 1),
(11, 'san juan nonualco', 111, 1),
(12, 'Turín', 112, 1),
(13, 'Candelaria de la Frontera', 201, 2),
(14, 'Coatepeque', 202, 2),
(15, 'Chalchuapa', 203, 2),
(16, 'El Congo', 204, 2),
(17, 'El Porvenir', 205, 2),
(18, 'Masahuat', 206, 2),
(19, 'Metapán', 207, 2),
(20, 'San Antonio Pajonal', 208, 2),
(21, 'San Sebastián Salitrillo', 209, 2),
(22, 'Santa Ana', 210, 2),
(23, 'Santa Rosa Guachipilín', 211, 2),
(24, 'Santiago de la Frontera', 212, 2),
(25, 'Texistepeque', 213, 2),
(26, 'Acajutla', 301, 3),
(27, 'Armenia', 302, 3),
(28, 'Caluco', 303, 3),
(29, 'Cuisnahuat', 304, 3),
(30, 'Santa Isabel Ishuatán', 305, 3),
(31, 'Izalco', 306, 3),
(32, 'Juayúa', 307, 3),
(33, 'Nahuizalco', 308, 3),
(34, 'Nahulingo', 309, 3),
(35, 'Salcoatitán', 310, 3),
(36, 'San Antonio del Monte', 311, 3),
(37, 'San Julián', 312, 3),
(38, 'Santa Catarina Masahuat', 313, 3),
(39, 'Santo Domingo de Guzmán', 314, 3),
(40, 'Sonsonate', 315, 3),
(41, 'Sonzacate', 316, 3),
(42, 'Agua Caliente', 401, 4),
(43, 'Arcatao', 402, 4),
(44, 'Azacualpa', 403, 4),
(45, 'Citalá', 404, 4),
(46, 'Comalapa', 405, 4),
(47, 'Concepción Quezaltepeque', 406, 4),
(48, 'Chalatenango', 407, 4),
(49, 'Dulce Nombre de María', 408, 4),
(50, 'El Carrizal', 409, 4),
(51, 'El Paraíso', 410, 4),
(52, 'La Laguna', 411, 4),
(53, 'La Palma', 412, 4),
(54, 'La Reina', 413, 4),
(55, 'Las Vueltas', 414, 4),
(56, 'Nombre de Jesús', 415, 4),
(57, 'Nueva Concepción', 416, 4),
(58, 'Nueva Trinidad', 417, 4),
(59, 'Ojos de Agua', 418, 4),
(60, 'Potonico', 419, 4),
(61, 'San Antonio de la Cruz', 420, 4),
(62, 'San Antonio Los Ranchos', 421, 4),
(63, 'San Fernando', 422, 4),
(64, 'San Francisco Lempa', 423, 4),
(65, 'San Francisco Morazán', 424, 4),
(66, 'San Ignacio', 425, 4),
(67, 'San Isidro Labrador', 426, 4),
(68, 'San José Cancasque', 427, 4),
(69, 'San José Las Flores ', 428, 4),
(70, 'San Luis del Carmen', 429, 4),
(71, 'San Miguel de Mercedes', 430, 4),
(72, 'San Rafael', 431, 4),
(73, 'Santa Rita', 432, 4),
(74, 'Tejutla', 433, 4),
(75, 'Antiguo Cuscatlán', 501, 5),
(76, 'Ciudad Arce', 502, 5),
(77, 'Colón', 503, 5),
(78, 'Comasagua', 504, 5),
(79, 'Chiltiupán', 505, 5),
(80, 'Huizúcar', 506, 5),
(81, 'Jayaque', 507, 5),
(82, 'Jicalapa', 508, 5),
(83, 'La Libertad', 509, 5),
(84, 'Nuevo Cuscatlán', 510, 5),
(85, 'Santa Tecla', 511, 5),
(86, 'Quezaltepeque', 512, 5),
(87, 'Sacacoyo', 513, 5),
(88, 'San José Villanueva', 514, 5),
(89, 'San Juan Opico', 515, 5),
(90, 'San Matías', 516, 5),
(91, 'San Pablo Tacachico', 517, 5),
(92, 'Tamanique', 518, 5),
(93, 'Talnique', 519, 5),
(94, 'Teotepeque', 520, 5),
(95, 'Tepecoyo', 521, 5),
(96, 'Zaragoza', 522, 5),
(97, 'Aguilares', 601, 6),
(98, 'Apopa', 602, 6),
(99, 'Ayutuxtepeque', 603, 6),
(100, 'Cuscatancingo', 604, 6),
(101, 'El Paisnal', 605, 6),
(102, 'Guazapa', 606, 6),
(103, 'Ilopango', 607, 6),
(104, 'Mejicanos', 608, 6),
(105, 'Nejapa', 609, 6),
(106, 'Panchimalco', 610, 6),
(107, 'Rosario de Mora', 611, 6),
(108, 'San Marcos', 612, 6),
(109, 'San Martín', 613, 6),
(110, 'San Salvador', 614, 6),
(111, 'Santiago Texacuangos', 615, 6),
(112, 'Santo Tomás', 616, 6),
(113, 'Soyapango', 617, 6),
(114, 'Tonacatepeque', 618, 6),
(115, 'Delgado', 619, 6),
(116, 'Candelaria', 701, 7),
(117, 'Cojutepeque', 702, 7),
(118, 'El Carmen', 703, 7),
(119, 'El Rosario', 704, 7),
(120, 'Monte San Juan', 705, 7),
(121, 'Oratorio de Concepción', 706, 7),
(122, 'San Bartolomé Perulapía', 707, 7),
(123, 'San Cristóbal', 708, 7),
(124, 'San José Guayabal', 709, 7),
(125, 'San Pedro Perulapán', 710, 7),
(126, 'San Rafael Cedros', 711, 7),
(127, 'San Ramón', 712, 7),
(128, 'Santa Cruz Analquito', 713, 7),
(129, 'Santa Cruz Michapa', 714, 7),
(130, 'Suchitoto', 715, 7),
(131, 'Tenancingo', 716, 7),
(132, 'Cuyultitán', 801, 8),
(133, 'El Rosario', 802, 8),
(134, 'Jerusalén', 803, 8),
(135, 'Mercedes La Ceiba', 804, 8),
(136, 'Olocuilta', 805, 8),
(137, 'Paraíso de Osorio', 806, 8),
(138, 'San Antonio Masahuat', 807, 8),
(139, 'San Emigdio', 808, 8),
(140, 'San Francisco Chinameca', 809, 8),
(141, 'San Juan Nonualco', 810, 8),
(142, 'San Juan Talpa', 811, 8),
(143, 'San Juan Tepezontes', 812, 8),
(144, 'San Luis Talpa', 813, 8),
(145, 'San Miguel Tepezontes', 814, 8),
(146, 'San Pedro Masahuat', 815, 8),
(147, 'San Pedro Nonualco', 816, 8),
(148, 'San Rafael Obrajuelo', 817, 8),
(149, 'Santa María Ostuma', 818, 8),
(150, 'Santiago Nonualco', 819, 8),
(151, 'Tapalhuaca', 820, 8),
(152, 'Zacatecoluca', 821, 8),
(153, 'San Luis La Herradura', 822, 8),
(154, 'Cinquera', 901, 9),
(155, 'Guacotecti', 902, 9),
(156, 'Ilobasco', 903, 9),
(157, 'Jutiapa', 904, 9),
(158, 'San Isidro', 905, 9),
(159, 'Sensuntepeque', 906, 9),
(160, 'Tejutepeque', 907, 9),
(161, 'Victoria', 908, 9),
(162, 'Villa Dolores', 909, 9),
(163, 'Apastepeque', 1001, 10),
(164, 'Guadalupe', 1002, 10),
(165, 'San Cayetano Istepeque', 1003, 10),
(166, 'Santa Clara', 1004, 10),
(167, 'Santo Domingo', 1005, 10),
(168, 'San Esteban Catarina', 1006, 10),
(169, 'San Ildefonso', 1007, 10),
(170, 'San Lorenzo', 1008, 10),
(171, 'San Sebastián', 1009, 10),
(172, 'San Vicente', 1010, 10),
(173, 'Tecoluca', 1011, 10),
(174, 'Tepetitán', 1012, 10),
(175, 'Verapaz', 1013, 10),
(176, 'Alegría', 1101, 11),
(177, 'Berlín', 1102, 11),
(178, 'California', 1103, 11),
(179, 'Concepción Batres', 1104, 11),
(180, 'El Triunfo', 1105, 11),
(181, 'Ereguayquín', 1106, 11),
(182, 'Estanzuelas', 1107, 11),
(183, 'Jiquilisco', 1108, 11),
(184, 'Jucuapa', 1109, 11),
(185, 'Jucuarán', 1110, 11),
(186, 'Mercedes Umaña', 1111, 11),
(187, 'Nueva Granada', 1112, 11),
(188, 'Ozatlán', 1113, 11),
(189, 'Puerto El Triunfo', 1114, 11),
(190, 'San Agustín', 1115, 11),
(191, 'San Buenaventura', 1116, 11),
(192, 'San Dionisio', 1117, 11),
(193, 'Santa Elena', 1118, 11),
(194, 'San Francisco Javier', 1119, 11),
(195, 'Santa María', 1120, 11),
(196, 'Santiago de María', 1121, 11),
(197, 'Tecapán', 1122, 11),
(198, 'Usulután', 1123, 11),
(199, 'Carolina', 1201, 12),
(200, 'Ciudad Barrios', 1202, 12),
(201, 'Comacarán', 1203, 12),
(202, 'Chapeltique', 1204, 12),
(203, 'Chinameca', 1205, 12),
(204, 'Chirilagua', 1206, 12),
(205, 'El Tránsito', 1207, 12),
(206, 'Lolotique', 1208, 12),
(207, 'Moncagua', 1209, 12),
(208, 'Nueva Guadalupe', 1210, 12),
(209, 'Nuevo Edén de San Juan', 1211, 12),
(210, 'Quelepa', 1212, 12),
(211, 'San Antonio del Mosco', 1213, 12),
(212, 'San Gerardo', 1214, 12),
(213, 'San Jorge', 1215, 12),
(214, 'San Luis de la Reina', 1216, 12),
(215, 'San Miguel', 1217, 12),
(216, 'San Rafael Oriente', 1218, 12),
(217, 'Sesori', 1219, 12),
(218, 'Uluazapa', 1220, 12),
(219, 'Arambala', 1301, 13),
(220, 'Cacaopera', 1302, 13),
(221, 'Corinto', 1303, 13),
(222, 'Chilanga', 1304, 13),
(223, 'Delicias de Concepción', 1305, 13),
(224, 'El Divisadero', 1306, 13),
(225, 'El Rosario', 1307, 13),
(226, 'Gualococti', 1308, 13),
(227, 'Guatajiagua', 1309, 13),
(228, 'Joateca', 1310, 13),
(229, 'Jocoaitique', 1311, 13),
(230, 'Jocoro', 1312, 13),
(231, 'Lolotiquillo', 1313, 13),
(232, 'Meanguera', 1314, 13),
(233, 'Osicala', 1315, 13),
(234, 'Perquín', 1316, 13),
(235, 'San Carlos', 1317, 13),
(236, 'San Fernando', 1318, 13),
(237, 'San Francisco Gotera', 1319, 13),
(238, 'San Isidro', 1320, 13),
(239, 'San Simón', 1321, 13),
(240, 'Sensembra', 1322, 13),
(241, 'Sociedad', 1323, 13),
(242, 'Torola', 1324, 13),
(243, 'Yamabal', 1325, 13),
(244, 'Yoloaiquín', 1326, 13),
(245, 'Anamorós', 1401, 14),
(246, 'Bolívar', 1402, 14),
(247, 'Concepción de Oriente', 1403, 14),
(248, 'Conchagua', 1404, 14),
(249, 'El Carmen', 1405, 14),
(250, 'El Sauce', 1406, 14),
(251, 'Intipucá', 1407, 14),
(252, 'La Unión', 1408, 14),
(253, 'Lilisque', 1409, 14),
(254, 'Meanguera del Golfo', 1410, 14),
(255, 'Nueva Esparta', 1411, 14),
(256, 'Pasaquina', 1412, 14),
(257, 'Polorós', 1413, 14),
(258, 'San Alejo', 1414, 14),
(259, 'San José', 1415, 14),
(260, 'Santa Rosa de Lima', 1416, 14),
(261, 'Yayantique', 1417, 14),
(262, 'Yucuaiquín', 1418, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido`
--

CREATE TABLE IF NOT EXISTS `partido` (
`id_partido` int(11) NOT NULL,
  `id_dui` int(9) NOT NULL,
  `responsable` varchar(45) NOT NULL,
  `bandera` varchar(100) NOT NULL,
  `partido` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partido`
--

INSERT INTO `partido` (`id_partido`, `id_dui`, `responsable`, `bandera`, `partido`) VALUES
(1, 123445678, 'margarita bernal', 'a.jpg', 'arena'),
(2, 123456781, 'javier reyes', 'fmln.jpg', 'fmln'),
(3, 123456782, 'elsy berrios', 'cd.jpg', 'cd'),
(4, 123456783, 'guillermo bernal', 'pcn.jpg', 'pcn'),
(5, 123456784, 'eunice masariego', 'gana.jpg', 'gana'),
(6, 123456785, 'rodolfo miranda', 'pdc.jpg', 'pdc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presidente`
--

CREATE TABLE IF NOT EXISTS `presidente` (
`id_presidente` int(11) NOT NULL,
  `id_dui` int(9) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `partido` int(11) NOT NULL,
  `bandera` varchar(100) NOT NULL,
  `candidato` varchar(20) NOT NULL,
  `VOTO` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `presidente`
--

INSERT INTO `presidente` (`id_presidente`, `id_dui`, `nombre`, `apellido`, `partido`, `bandera`, `candidato`, `VOTO`) VALUES
(1, 232425261, 'jacob', 'gavidia', 1, 'a.jpg', 'Todo el pais', 2),
(2, 232425262, 'misael', 'bonilla', 2, 'fmln.jpg', 'Todo el pais', 5),
(3, 232425263, 'yesenia', 'gaitan', 3, 'cd.jpg', 'Todo el pais', 8),
(4, 232425264, 'carlos', 'rodriguez', 4, 'pcn.jpg', 'Todo el pais', 1),
(5, 232425265, 'melvin', 'alvarado', 5, 'gana.jpg', 'Todo el pais', 6),
(6, 232425266, 'jenifer', 'barrera', 6, 'pdc.jpg', 'Todo el pais', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(20) NOT NULL,
  `login` varchar(50) NOT NULL,
  `passnormal` varchar(50) DEFAULT NULL,
  `passadmin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `login`, `passnormal`, `passadmin`) VALUES
(1, 'margarita', '221314', '0'),
(2, 'javier', NULL, 'reyes');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alcalde`
--
ALTER TABLE `alcalde`
 ADD PRIMARY KEY (`id_alcalde`);

--
-- Indices de la tabla `ciudadano`
--
ALTER TABLE `ciudadano`
 ADD PRIMARY KEY (`id_dui`);

--
-- Indices de la tabla `coalicion`
--
ALTER TABLE `coalicion`
 ADD PRIMARY KEY (`id_coalicion`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `diputado`
--
ALTER TABLE `diputado`
 ADD PRIMARY KEY (`id_diputado`);

--
-- Indices de la tabla `elecciones`
--
ALTER TABLE `elecciones`
 ADD PRIMARY KEY (`id_eleccion`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `partido`
--
ALTER TABLE `partido`
 ADD PRIMARY KEY (`id_partido`), ADD UNIQUE KEY `id_dui` (`id_dui`);

--
-- Indices de la tabla `presidente`
--
ALTER TABLE `presidente`
 ADD PRIMARY KEY (`id_presidente`), ADD UNIQUE KEY `id_dui` (`id_dui`), ADD UNIQUE KEY `partido` (`partido`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alcalde`
--
ALTER TABLE `alcalde`
MODIFY `id_alcalde` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `coalicion`
--
ALTER TABLE `coalicion`
MODIFY `id_coalicion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `diputado`
--
ALTER TABLE `diputado`
MODIFY `id_diputado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `elecciones`
--
ALTER TABLE `elecciones`
MODIFY `id_eleccion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=263;
--
-- AUTO_INCREMENT de la tabla `partido`
--
ALTER TABLE `partido`
MODIFY `id_partido` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `presidente`
--
ALTER TABLE `presidente`
MODIFY `id_presidente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `presidente`
--
ALTER TABLE `presidente`
ADD CONSTRAINT `presidente_ibfk_2` FOREIGN KEY (`partido`) REFERENCES `partido` (`id_partido`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
