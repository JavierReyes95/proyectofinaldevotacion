-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2015 a las 08:21:32
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
CREATE DATABASE IF NOT EXISTS `tribunal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tribunal`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidato`
--

CREATE TABLE IF NOT EXISTS `candidato` (
`id_candidato` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `tipo_candidato` varchar(45) NOT NULL,
  `cantidato` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_partido` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `id_municipio` int(11) DEFAULT NULL,
  `id_dui` int(9) NOT NULL,
  `cualicon` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `mun_direccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudadano`
--

INSERT INTO `ciudadano` (`id_dui`, `nombre`, `apellido`, `genero`, `fecha_nacimiento`, `id_departamento`, `id_municipio`, `fecha_expedicion`, `depar_expedicion`, `mun_expedicion`, `fecha_expiracion`, `direccion`, `depar_direccion`, `mun_direccion`) VALUES
(789535622, 'DAVID', 'Andrade', 'M', '2015-05-18', 3, 38, '2015-05-11', 6, 116, '2015-05-26', 'Col Estansula', 10, 177),
(789569478, 'David Antonio', 'Andrade Orellana', 'M', '1994-05-04', 1, 2, '2012-05-09', 1, 2, '2021-05-26', 'Col estansuela', 1, 2),
(895426821, 'Maria Edis', 'Andrade ', 'F', '1985-05-22', 11, 189, '2004-05-19', 11, 202, '2019-05-22', 'COLONIA VISTA HERMOSA', 11, 187);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cualicion`
--

CREATE TABLE IF NOT EXISTS `cualicion` (
`id_cualicion` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `tipo_candidato` varchar(25) NOT NULL,
  `candidato` varchar(52) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_partido` int(11) NOT NULL,
  `partido2` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
`id_departamento` int(11) NOT NULL,
  `departamento` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `departamento`) VALUES
(1, 'AHUACHAPAN'),
(2, 'SANTA ANA'),
(3, 'SONSONATE'),
(4, 'CHALATENANGO'),
(5, 'LA LIBERTAD'),
(6, 'SAN SALVADOR'),
(7, 'CUSCATLAN'),
(8, 'LA PAZ'),
(9, 'CABAÑAS'),
(10, 'SAN VICENTE'),
(11, 'USULUTAN'),
(12, 'SAN MIGUEL'),
(13, 'MORAZAN'),
(14, 'LA UNION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
`id_municipio` int(11) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `id_departamento` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=268 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id_municipio`, `municipio`, `id_departamento`) VALUES
(1, 'AHUACHAPÁN', 1),
(2, 'APANECA ', 1),
(3, 'ATIQUIZAYA', 1),
(4, 'CONCEPCIÓN DE ATACO', 1),
(5, 'EL REFUGIO', 1),
(7, 'GUAYMANGO ', 1),
(8, 'JUJUTLA ', 1),
(9, 'SAN FRANCISCO MENÉNDEZ', 1),
(10, 'SAN LORENZO', 1),
(11, ' SAN PEDRO PUXTLA ', 1),
(12, 'TACUBA ', 1),
(13, 'TURÍN', 1),
(14, 'CANDELARIA DE LA FRONTERA', 2),
(15, ' CHALCHUAPA ', 2),
(16, 'COATEPEQUE', 2),
(17, 'EL CONGO', 2),
(18, 'EL PORVENIR', 2),
(19, ' MASAHUAT', 2),
(20, 'METAPÁN ', 2),
(21, 'SAN ANTONIO PAJONAL ', 2),
(22, 'SAN SEBASTIÁN SALITRILLO ', 2),
(23, 'SANTA ANA ', 2),
(24, 'SANTA ROSA GUACHIPILÍN ', 2),
(25, 'SANTIAGO DE LA FRONTERA', 2),
(26, 'TEXISTEPEQUE', 2),
(27, 'ACAJUTLA ', 3),
(28, 'ARMENIA ', 3),
(29, 'CALUCO', 3),
(30, 'CUISNAHUAT', 3),
(31, '  IZALCO', 3),
(32, ' JUAYÚA ', 3),
(33, ' NAHUIZALCO ', 3),
(34, ' NAHULINGO', 3),
(35, 'SALCOATITÁN', 3),
(36, 'SAN ANTONIO DEL MONTE ', 3),
(37, 'SAN JULIÁN ', 3),
(38, 'SANTA CATARINA MASAHUAT ', 3),
(39, 'SANTA ISABEL ISHUATÁN  ', 3),
(40, 'SANTO DOMINGO GUZMÁN ', 3),
(41, 'SONSONATE ', 3),
(42, 'SONZACATE', 3),
(43, '  ARCATAO ', 4),
(44, 'AGUA CALIENTE', 4),
(45, ' AZACUALPA ', 4),
(46, 'CHALATENANGO ', 4),
(47, 'COMALAPA  ', 4),
(48, 'CITALÁ ', 4),
(49, 'CONCEPCIÓN QUEZALTEPEQUE', 4),
(50, '  DULCE NOMBRE DE MARÍA', 4),
(51, '  EL CARRIZAL ', 4),
(52, ' EL PARAÍSO ', 4),
(53, 'LA LAGUNA ', 4),
(54, ' LA PALMA', 4),
(55, 'LA REINA ', 4),
(56, 'LAS VUELTAS ', 4),
(57, ' NUEVA CONCEPCIÓN ', 4),
(58, 'NUEVA TRINIDAD ', 4),
(59, ' NOMBRE DE JESÚS', 4),
(60, 'OJOS DE AGUA ', 4),
(61, 'POTONICO ', 4),
(62, 'SAN ANTONIO DE LA CRUZ', 4),
(63, 'SAN ANTONIO LOS RANCHOS  ', 4),
(64, 'SAN FERNANDO ', 4),
(65, 'SAN FRANCISCO LEMPA', 4),
(66, '  SAN FRANCISCO MORAZÁN ', 4),
(67, 'SAN IGNACIO', 4),
(68, '  SAN ISIDRO', 4),
(69, ' LABRADOR', 4),
(70, 'SAN JOSÉ CANCASQUE', 4),
(71, '  SAN JOSÉ LAS FLORES  ', 4),
(72, 'SAN LUIS DEL CARMEN  ', 4),
(73, 'SAN MIGUEL DE MERCEDES', 4),
(74, '  SAN RAFAEL', 4),
(75, '  SANTA RITA  ', 4),
(76, 'TEJUTLA', 4),
(77, 'CIUDAD ARCE', 5),
(78, '  COLÓN', 5),
(79, 'COMASAGUA', 5),
(80, 'HUIZÚCAR', 5),
(81, '  JICALAPA', 5),
(82, 'JAYAQUE', 5),
(83, '  LA LIBERTAD  ', 5),
(84, 'NUEVA SANTA TECLA', 5),
(85, '  NUEVO CUSCATLÁN ', 5),
(86, ' SAN JUAN OPICO  ', 5),
(89, ' SACACOYO ', 5),
(90, 'QUEZALTEPEQUE ', 5),
(91, ' SAN JOSÉ VILLANUEVA', 5),
(92, '  SAN MATÍAS  ', 5),
(93, 'SAN PABLO ', 5),
(94, 'TACACHICO  ', 5),
(95, 'TALNIQUE  ', 5),
(96, 'TAMANIQUE  ', 5),
(97, 'TEOTEPEQUE  ', 5),
(98, 'TEPECOYO', 5),
(99, ' ZARAGOZA', 5),
(100, 'AGUILARES  ', 6),
(101, 'APOPA  ', 6),
(102, 'AYUTUXTEPEQUE ', 6),
(103, 'CUSCATANCINGO ', 6),
(104, ' CIUDAD DELGADO  ', 6),
(105, 'EL PAISNAL  ', 6),
(106, 'GUAZAPA  ', 6),
(107, 'ILOPANGO', 6),
(108, '  MEJICANOS  ', 6),
(109, 'NEJAPA  ', 6),
(110, 'PANCHIMALCO ', 6),
(111, ' ROSARIO DE MORA ', 6),
(112, 'SAN MARCOS', 6),
(113, '  SAN MARTÍN  ', 6),
(114, 'SAN SALVADOR  ', 6),
(115, 'SANTIAGO TEXACUANGOS  ', 6),
(116, 'SANTO TOMÁS', 6),
(117, '  SOYAPANGO ', 6),
(118, 'TONACATEPEQUE', 6),
(119, 'CANDELARIA', 7),
(120, '  COJUTEPEQUE ', 7),
(121, 'EL CARMEN ', 7),
(122, 'EL ROSARIO ', 7),
(123, ' MONTE SAN JUAN', 7),
(124, 'ORATORIO DE CONCEPCIÓN', 7),
(125, '  SAN BARTOLOMÉ PERULAPÍA ', 7),
(126, 'SAN CRISTÓBAL', 7),
(127, '  SAN JOSÉ GUAYABAL  ', 7),
(128, 'SAN PEDRO PERULAPÁN', 7),
(129, '  SAN RAFAEL CEDROS ', 7),
(130, ' SAN RAMÓN ', 7),
(131, 'SANTA CRUZ MICHAPA ', 7),
(132, 'SANTA CRUZ ANALQUITO', 7),
(133, 'SUCHITOTO', 7),
(134, ' TENANCINGO', 7),
(135, 'CUYULTITÁN  ', 8),
(136, 'EL ROSARIO', 8),
(137, '  JERUSALÉN ', 8),
(138, 'MERCEDES', 8),
(139, 'LA CEIBA', 8),
(140, '  OLOCUILTA  ', 8),
(141, 'PARAÍSO DE OSORIO', 8),
(142, '  SAN ANTONIO MASAHUAT ', 8),
(143, 'SAN EMIGDIO ', 8),
(144, ' SAN FRANCISCO CHINAMECA  ', 8),
(145, 'SAN JUAN NONUALCO  ', 8),
(146, 'SAN JUAN TALPA', 8),
(147, '  SAN JUAN TEPEZONTES ', 8),
(148, ' SAN LUIS TALPA  ', 8),
(149, 'SAN LUIS LA HERRADURA', 8),
(150, 'SAN MIGUEL TEPEZONTES  ', 8),
(151, 'SAN PEDRO MASAHUAT  ', 8),
(152, 'SAN PEDRO NONUALCO  ', 8),
(153, 'SAN RAFAEL OBRAJUELO  ', 8),
(154, 'SANTA MARÍA OSTUMA ', 8),
(155, 'SANTIAGO NONUALCO  ', 8),
(156, 'TAPALHUACA ', 8),
(157, 'ZACATECOLUCA', 8),
(158, 'CINQUERA ', 9),
(159, ' DOLORES', 9),
(160, '  GUACOTECTI ', 9),
(161, 'ILOBASCO', 9),
(162, 'JUTIAPA', 9),
(163, '  SAN ISIDRO', 9),
(164, '  SENSUNTEPEQUE', 9),
(165, 'TEJUTEPEQUE', 9),
(166, 'VICTORIA', 9),
(167, 'APASTEPEQUE', 10),
(168, '  GUADALUPE ', 10),
(169, 'SAN CAYETANO ISTEPEQUE  ', 10),
(170, 'SAN ESTEBAN CATARINA', 10),
(171, 'SAN ILDEFONSO  ', 10),
(172, 'SAN LORENZO ', 10),
(173, 'SAN SEBASTIÁN  ', 10),
(174, 'SAN VICENTE', 10),
(175, '  SANTA CLARA  ', 10),
(176, 'SANTO DOMINGO ', 10),
(177, 'TECOLUCA  ', 10),
(178, 'TEPETITÁN VERAPAZ', 10),
(179, 'VERAPAZ', 10),
(180, 'ALEGRÍA', 11),
(181, '  BERLÍN ', 11),
(182, ' CALIFORNIA  ', 11),
(183, 'CONCEPCIÓN BATRES', 11),
(184, '  EL TRIUNFO  ', 11),
(185, 'EREGUAYQUÍN ', 11),
(186, ' ESTANZUELAS', 11),
(187, 'JIQUILISCO', 11),
(188, '  JUCUAPA', 11),
(189, '  JUCUARÁN ', 11),
(190, 'MERCEDES UMAÑA', 11),
(191, '  NUEVA GRANADA ', 11),
(192, ' OZATLÁN  ', 11),
(193, 'PUERTO EL TRIUNFO ', 11),
(194, 'SAN AGUSTÍN', 11),
(195, 'SAN BUENAVENTURA ', 11),
(196, 'SAN DIONISIO  ', 11),
(197, 'SAN FRANCISCO JAVIER ', 11),
(198, 'SANTA ELENA  ', 11),
(199, 'SANTA MARÍA ', 11),
(200, 'SANTIAGO DE MARÍA  ', 11),
(201, 'TECAPÁN ', 11),
(202, 'USULUTÁN', 11),
(203, 'CAROLINA ', 12),
(204, ' CHAPELTIQUE', 12),
(205, 'CHINAMECA', 12),
(206, '  CHIRILAGUA', 12),
(207, '  CIUDAD BARRIOS ', 12),
(208, ' COMACARÁN ', 12),
(209, 'EL TRÁNSITO', 12),
(210, '  LOLOTIQUE ', 12),
(211, 'MONCAGUA  ', 12),
(212, 'NUEVA GUADALUPE ', 12),
(213, ' NUEVO EDÉN DE SAN JUAN  ', 12),
(214, 'QUELEPA ', 12),
(215, 'SAN ANTONIO DEL MOSCO ', 12),
(216, ' SAN GERARDO', 12),
(217, 'SAN JORGE  ', 12),
(218, 'SAN LUIS DE LA REINA', 12),
(219, '  SAN MIGUEL  ', 12),
(220, 'SAN RAFAEL ORIENTE', 12),
(221, '  SESORI ', 12),
(222, 'ULUAZAPA', 12),
(223, 'ARAMBALA  ', 13),
(224, 'CACAOPERA ', 13),
(225, 'CHILANGA', 13),
(226, 'CORINTO ', 13),
(227, ' DELICIAS DE CONCEPCIÓN ', 13),
(228, ' EL DIVISADERO ', 13),
(229, ' EL ROSARIO  ', 13),
(230, 'GUALOCOCTI', 13),
(231, '  GUATAJIAGUA', 13),
(232, 'JOATECA', 13),
(233, '  JOCOAITIQUE', 13),
(234, '  JOCORO ', 13),
(235, 'LOLOTIQUILLO ', 13),
(236, ' MEANGUERA  ', 13),
(237, 'OSICALA ', 13),
(238, ' PERQUÍN', 13),
(239, '  SAN CARLOS  ', 13),
(240, 'SAN FERNANDO', 13),
(241, '  SAN FRANCISCO', 13),
(242, ' GOTERA  ', 13),
(243, 'SAN ISIDRO ', 13),
(244, ' SAN SIMÓN ', 13),
(245, ' SENSEMBRA  ', 13),
(246, 'SOCIEDAD  ', 13),
(247, 'TOROLA ', 13),
(248, 'YAMABAL ', 13),
(249, 'YOLOAIQUÍN', 13),
(250, 'ANAMORÓS', 14),
(251, 'BOLIVAR', 14),
(252, '  CONCEPCIÓN DE ORIENTE', 14),
(253, 'CONCHAGUA ', 14),
(254, ' EL CARMEN  ', 14),
(255, 'EL SAUCE ', 14),
(256, 'INTIPUCÁ ', 14),
(257, 'LA UNIÓN ', 14),
(258, ' LISLIQUE ', 14),
(259, 'MEANGUERA DEL GOLFO ', 14),
(260, 'NUEVA ESPARTA ', 14),
(261, ' PASAQUINA', 14),
(262, 'POLORÓS  ', 14),
(263, 'SAN ALEJO  ', 14),
(264, 'SAN JOSÉ  ', 14),
(265, 'SANTA ROSA DE LIMA  ', 14),
(266, 'YUCUAIQUÍN ', 14),
(267, 'YAYANTIQUE ', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido`
--

CREATE TABLE IF NOT EXISTS `partido` (
`id_partido` int(11) NOT NULL,
  `partido` varchar(45) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `bandera` varchar(100) NOT NULL,
  `id_dui` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`idusuario` int(20) NOT NULL,
  `login` varchar(50) NOT NULL,
  `passnormal` varchar(50) DEFAULT NULL,
  `passadmin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `login`, `passnormal`, `passadmin`) VALUES
(3, 'david', 'andrade', '0'),
(5, 'antonio', NULL, 'orellana');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidato`
--
ALTER TABLE `candidato`
 ADD PRIMARY KEY (`id_candidato`), ADD UNIQUE KEY `id_dui` (`id_dui`), ADD UNIQUE KEY `cualicon` (`cualicon`), ADD KEY `id_partido` (`id_partido`,`id_departamento`,`id_municipio`), ADD KEY `id_departamento` (`id_departamento`), ADD KEY `id_municipio` (`id_municipio`);

--
-- Indices de la tabla `ciudadano`
--
ALTER TABLE `ciudadano`
 ADD PRIMARY KEY (`id_dui`), ADD UNIQUE KEY `id_municipio` (`id_municipio`), ADD UNIQUE KEY `depar_expedicion` (`depar_expedicion`), ADD UNIQUE KEY `mun_expedicion` (`mun_expedicion`), ADD UNIQUE KEY `depar_direccion` (`depar_direccion`), ADD UNIQUE KEY `mun_direccion` (`mun_direccion`), ADD KEY `id_departamento` (`id_departamento`,`id_municipio`,`depar_expedicion`,`mun_expedicion`,`depar_direccion`,`mun_direccion`);

--
-- Indices de la tabla `cualicion`
--
ALTER TABLE `cualicion`
 ADD PRIMARY KEY (`id_cualicion`), ADD UNIQUE KEY `id_departamento` (`id_departamento`), ADD UNIQUE KEY `id_municipio` (`id_municipio`), ADD KEY `id_partido` (`id_partido`,`partido2`,`id_departamento`,`id_municipio`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
 ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
 ADD PRIMARY KEY (`id_municipio`), ADD KEY `id_departamento` (`id_departamento`);

--
-- Indices de la tabla `partido`
--
ALTER TABLE `partido`
 ADD PRIMARY KEY (`id_partido`), ADD UNIQUE KEY `id_dui` (`id_dui`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `candidato`
--
ALTER TABLE `candidato`
MODIFY `id_candidato` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cualicion`
--
ALTER TABLE `cualicion`
MODIFY `id_cualicion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=268;
--
-- AUTO_INCREMENT de la tabla `partido`
--
ALTER TABLE `partido`
MODIFY `id_partido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `idusuario` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `candidato`
--
ALTER TABLE `candidato`
ADD CONSTRAINT `candidato_ibfk_1` FOREIGN KEY (`id_partido`) REFERENCES `partido` (`id_partido`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `candidato_ibfk_2` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `candidato_ibfk_3` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id_municipio`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `candidato_ibfk_4` FOREIGN KEY (`cualicon`) REFERENCES `partido` (`id_partido`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `candidato_ibfk_5` FOREIGN KEY (`id_dui`) REFERENCES `ciudadano` (`id_dui`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ciudadano`
--
ALTER TABLE `ciudadano`
ADD CONSTRAINT `ciudadano_ibfk_1` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ciudadano_ibfk_2` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id_municipio`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ciudadano_ibfk_3` FOREIGN KEY (`depar_expedicion`) REFERENCES `departamento` (`id_departamento`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ciudadano_ibfk_4` FOREIGN KEY (`mun_expedicion`) REFERENCES `municipio` (`id_municipio`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ciudadano_ibfk_5` FOREIGN KEY (`depar_direccion`) REFERENCES `departamento` (`id_departamento`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ciudadano_ibfk_6` FOREIGN KEY (`mun_direccion`) REFERENCES `municipio` (`id_municipio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cualicion`
--
ALTER TABLE `cualicion`
ADD CONSTRAINT `cualicion_ibfk_1` FOREIGN KEY (`id_partido`) REFERENCES `partido` (`id_partido`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `cualicion_ibfk_2` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `cualicion_ibfk_3` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id_municipio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
ADD CONSTRAINT `municipio_ibfk_1` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `partido`
--
ALTER TABLE `partido`
ADD CONSTRAINT `partido_ibfk_1` FOREIGN KEY (`id_dui`) REFERENCES `ciudadano` (`id_dui`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
