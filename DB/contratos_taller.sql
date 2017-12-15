-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-12-2017 a las 06:25:50
-- Versión del servidor: 5.6.36-cll-lve
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `contratos_taller`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ciudad`
--

CREATE TABLE IF NOT EXISTS `tb_ciudad` (
  `id_ciudad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_ciudad` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_pais` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `usuario_creacion` varchar(100) CHARACTER SET utf8 NOT NULL,
  `usuario_modificacion` varchar(100) CHARACTER SET utf8 NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id_ciudad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=29 ;

--
-- Volcado de datos para la tabla `tb_ciudad`
--

INSERT INTO `tb_ciudad` (`id_ciudad`, `nombre_ciudad`, `id_pais`, `fecha_creacion`, `fecha_modificacion`, `usuario_creacion`, `usuario_modificacion`, `estado`) VALUES
(17, 'BogotÃ¡', 12, '0000-00-00', '0000-00-00', '', '', 0),
(18, 'Cali', 12, '0000-00-00', '0000-00-00', '', '', 0),
(19, 'Barranquilla', 12, '0000-00-00', '0000-00-00', '', '', 0),
(20, 'Cartagena', 12, '0000-00-00', '0000-00-00', '', '', 0),
(21, 'Medellin', 12, '0000-00-00', '0000-00-00', '', '', 0),
(22, 'Santiago de Chile', 18, '0000-00-00', '0000-00-00', '', '', 0),
(23, 'La paz', 16, '0000-00-00', '0000-00-00', '', '', 0),
(24, 'Neiva', 12, '0000-00-00', '0000-00-00', '', '', 0),
(25, 'Pasto', 12, '0000-00-00', '0000-00-00', '', '', 0),
(26, 'Armenia', 12, '0000-00-00', '0000-00-00', '', '', 0),
(27, 'Buenos aires', 13, '0000-00-00', '0000-00-00', '', '', 0),
(28, 'Cancun', 15, '0000-00-00', '0000-00-00', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_contrato`
--

CREATE TABLE IF NOT EXISTS `tb_contrato` (
  `id_contrato` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_contrato` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio_contrato` date NOT NULL,
  `fecha_fin_contrato` date NOT NULL,
  `descripcion_contrato` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `id_proveedor` int(16) NOT NULL,
  `nombre_proveedor` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `usuario_modificacion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_creacion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_empleado` bigint(20) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id_contrato`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `tb_contrato`
--

INSERT INTO `tb_contrato` (`id_contrato`, `nombre_contrato`, `fecha_inicio_contrato`, `fecha_fin_contrato`, `descripcion_contrato`, `id_proveedor`, `nombre_proveedor`, `fecha_creacion`, `fecha_modificacion`, `usuario_modificacion`, `usuario_creacion`, `id_empleado`, `id_empresa`, `estado`) VALUES
(1, 'jfhdsjfhdskj', '2017-11-02', '2017-11-16', 'dsff', 3, '', '2017-11-14', '2018-02-07', 'admin', 'admin', 1, 4, 1),
(8, 'ConstrucciÃ³n', '2017-11-15', '2017-11-02', 'Realizar la construcciÃ³n del nuevo salon', 3, '', '0000-00-00', '0000-00-00', '', '', 0, 0, 0),
(10, 'Apartamento', '2017-11-15', '2018-02-22', 'Construir', 5, '', '0000-00-00', '0000-00-00', '', '', 0, 5, 0),
(11, 'CECEP', '2017-11-15', '2017-12-15', 'Contrato de prueba', 4, '', '0000-00-00', '0000-00-00', '', '', 0, 7, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_empleado`
--

CREATE TABLE IF NOT EXISTS `tb_empleado` (
  `emple_id` int(20) NOT NULL AUTO_INCREMENT,
  `id_empresa` int(11) NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `emp_identificacion` varchar(20) NOT NULL,
  `emple_apl` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `emple_nom` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `emple_carg` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `emple_sal` int(20) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `usuario_creacion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `usuario_modificacion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`emple_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `tb_empleado`
--

INSERT INTO `tb_empleado` (`emple_id`, `id_empresa`, `id_sucursal`, `emp_identificacion`, `emple_apl`, `emple_nom`, `emple_carg`, `emple_sal`, `fecha_creacion`, `fecha_modificacion`, `usuario_creacion`, `usuario_modificacion`, `estado`) VALUES
(7, 2, 3, '1144091035', 'MUNOZ CAVANZO', 'JUAN DAVID', 'ANALISTA TI', 2000000, '2017-11-06', '2017-11-06', '', '', 1),
(8, 5, 4, '5613151', 'ramirez', 'tatiana', 'consumidora', 2147483647, '2017-11-14', '2017-11-14', '', '', 1),
(9, 7, 3, '114478542', 'Perez', 'Pepito', 'Analista', 1200000, '2017-11-16', '2017-11-16', '', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_empresa`
--

CREATE TABLE IF NOT EXISTS `tb_empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(30) NOT NULL,
  `nit_empresa` varchar(30) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `sector_empresa` varchar(30) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `usuario_creacion` varchar(100) NOT NULL,
  `usuario_modificacion` varchar(100) NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `tb_empresa`
--

INSERT INTO `tb_empresa` (`id_empresa`, `nombre_empresa`, `nit_empresa`, `id_ciudad`, `sector_empresa`, `fecha_creacion`, `fecha_modificacion`, `usuario_creacion`, `usuario_modificacion`, `estado`) VALUES
(2, 'ELectrojaponesa', '89023568', 18, 'ComercializaciÃ³n Electrodomes', '2017-11-06', '2017-11-06', 'lito', 'lito', 1),
(3, 'GOOGLE', '890235674', 17, 'SOFTWARE', '0000-00-00', '0000-00-00', '', '', 0),
(4, 'ADL DRYWALL', '896325489', 18, 'COMERCIALIZACION PRODUCTOS PAR', '0000-00-00', '0000-00-00', '', '', 0),
(5, 'FCECEP', '89654214', 18, 'EDUCACIÃ“N', '0000-00-00', '0000-00-00', '', '', 0),
(6, 'INTERPESAJE', '890235478', 17, 'COMERCIAL', '0000-00-00', '0000-00-00', '', '', 0),
(7, 'Pepito INC', '123456789', 18, 'Industrial', '0000-00-00', '0000-00-00', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_pais`
--

CREATE TABLE IF NOT EXISTS `tb_pais` (
  `id_pais` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_pais` varchar(30) CHARACTER SET utf8 NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `usuario_creacion` varchar(100) CHARACTER SET utf8 NOT NULL,
  `usuario_modificacion` varchar(100) CHARACTER SET utf8 NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id_pais`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `tb_pais`
--

INSERT INTO `tb_pais` (`id_pais`, `nombre_pais`, `fecha_creacion`, `fecha_modificacion`, `usuario_creacion`, `usuario_modificacion`, `estado`) VALUES
(12, 'Colombia', '0000-00-00', '0000-00-00', '', '', 0),
(13, 'Argentina', '0000-00-00', '0000-00-00', '', '', 0),
(14, 'Venezuela', '0000-00-00', '0000-00-00', '', '', 0),
(15, 'Mexico', '0000-00-00', '0000-00-00', '', '', 0),
(16, 'Peru', '0000-00-00', '0000-00-00', '', '', 0),
(17, 'Bolivia', '0000-00-00', '0000-00-00', '', '', 0),
(18, 'Chile', '0000-00-00', '0000-00-00', '', '', 0),
(19, 'España', '2017-11-07', '2017-11-07', 'lito', 'lito', 1),
(20, 'Canada', '0000-00-00', '0000-00-00', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_proceso`
--

CREATE TABLE IF NOT EXISTS `tb_proceso` (
  `id_proceso` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre_proceso` varchar(100) NOT NULL,
  `tipo_proceso` varchar(100) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `usuario_creacion` varchar(100) NOT NULL,
  `usuario_modificacion` varchar(100) NOT NULL,
  `empresa_id` bigint(20) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_proceso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tb_proceso`
--

INSERT INTO `tb_proceso` (`id_proceso`, `nombre_proceso`, `tipo_proceso`, `fecha_creacion`, `fecha_modificacion`, `usuario_creacion`, `usuario_modificacion`, `empresa_id`, `estado`) VALUES
(1, 'Proceso editado', 'Estrategico ', '2017-11-04', '2017-11-14', '15', '15', 2, 1),
(2, 'Proceso A', 'Estrategico', '2017-11-16', '2017-11-16', '1', '1', 7, 1),
(3, 'Proceso B', 'Estrategico', '2017-11-16', '2017-11-16', '1', '1', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_proveedor`
--

CREATE TABLE IF NOT EXISTS `tb_proveedor` (
  `id_proveedor` int(16) NOT NULL AUTO_INCREMENT,
  `identificador_proveedor` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_proveedor` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_proveedor` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `correo_proveedor` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `direccion_proveedor` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creacion_proveedor` date NOT NULL,
  `estado` int(1) NOT NULL,
  `sector_proveedor` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `id_ciudad` int(1) NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `usuario_modificacion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_creacion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tb_proveedor`
--

INSERT INTO `tb_proveedor` (`id_proveedor`, `identificador_proveedor`, `nombre_proveedor`, `telefono_proveedor`, `correo_proveedor`, `direccion_proveedor`, `fecha_creacion_proveedor`, `estado`, `sector_proveedor`, `id_ciudad`, `fecha_modificacion`, `usuario_modificacion`, `usuario_creacion`) VALUES
(3, '1144091036', 'adicionalo', '3173967334', 'VENTA@ADL.COM', 'Cra 47 a 12 91', '2017-11-06', 1, 'COMERCIAL', 17, '2017-11-06', 'lito', 'lito'),
(4, '1151030075', 'ADICIONALO', '3175709380', 'juan19962208@hotmail.com', 'Cra 47 A # 12 91 APT 201', '2017-11-07', 0, 'COMERCIAL', 18, '2017-11-07', '', ''),
(5, '1151030075', 'Electrojaponesa', '3175698745', 'jd.munoz@electrojaponesa.com', 'cra 7 # 10 - 51', '2017-11-15', 1, 'Comercial', 18, '2017-11-15', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_sucursal`
--

CREATE TABLE IF NOT EXISTS `tb_sucursal` (
  `id_sucursal` int(11) NOT NULL,
  `nombre_sucursal` varchar(100) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `usuario_creacion` varchar(100) NOT NULL,
  `usuario_modificacion` varchar(100) NOT NULL,
  `direccion_sucursal` varchar(200) NOT NULL,
  `telefono_sucursal` varchar(16) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id_sucursal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_sucursal`
--

INSERT INTO `tb_sucursal` (`id_sucursal`, `nombre_sucursal`, `id_empresa`, `fecha_creacion`, `fecha_modificacion`, `usuario_creacion`, `usuario_modificacion`, `direccion_sucursal`, `telefono_sucursal`, `id_ciudad`, `estado`) VALUES
(2, 'CO 110', 2, '2017-11-06', '2017-11-06', '', '', 'Cra 7 # 10 51', '3565407', 18, 1),
(3, 'CO 210', 2, '2017-11-06', '2017-11-06', '', '', 'Cra 26 # 28 56', '12457896', 17, 1),
(4, 'INTERPESAJE CALI', 6, '2017-11-06', '2017-11-06', '', '', 'CRA 4 N # 92 68', '23568974', 18, 1),
(5, 'INTERPESAJE BOGOTA 1', 6, '2017-11-06', '2017-11-16', '', '', 'Cra 26  # 45 25', '5402222', 17, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `usuario_creacion` varchar(100) NOT NULL,
  `usuario_modificacion` varchar(100) NOT NULL,
  `estado` int(1) NOT NULL,
  `pais_permiso` int(1) NOT NULL,
  `ciudad_permiso` int(1) NOT NULL,
  `proveedor_permiso` int(1) NOT NULL,
  `sucursal_permiso` int(1) NOT NULL,
  `contrato_permiso` int(1) NOT NULL,
  `empleado_permiso` int(1) NOT NULL,
  `empresa_permiso` int(1) NOT NULL,
  `roles_permiso` int(1) NOT NULL,
  `informe_permiso` int(1) NOT NULL,
  `procesos_permiso` int(1) NOT NULL,
  `usuario_permiso` int(1) NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo`, `tipo`, `fecha_creacion`, `fecha_modificacion`, `usuario_creacion`, `usuario_modificacion`, `estado`, `pais_permiso`, `ciudad_permiso`, `proveedor_permiso`, `sucursal_permiso`, `contrato_permiso`, `empleado_permiso`, `empresa_permiso`, `roles_permiso`, `informe_permiso`, `procesos_permiso`, `usuario_permiso`) VALUES
(1, 'Administrador ', '0000-00-00', '2017-11-09', '', '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 'Visitante ', '0000-00-00', '2017-11-16', '', '15', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1),
(3, 'Gestor ', '0000-00-00', '2017-11-06', '', '16', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Empleado ', '0000-00-00', '2017-11-09', '', '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(5, 'Jefe ', '0000-00-00', '2017-11-06', '', '16', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Sucursales ', '0000-00-00', '2017-11-06', '', '16', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Prueba', '2017-11-16', '2017-11-16', '18', '18', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(130) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `last_session` datetime DEFAULT NULL,
  `activacion` int(11) NOT NULL DEFAULT '0',
  `token` varchar(40) NOT NULL,
  `token_password` varchar(100) DEFAULT NULL,
  `password_request` int(11) DEFAULT '0',
  `id_tipo` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `usuario_modificacion` varchar(100) NOT NULL,
  `usuario_creacion` varchar(100) NOT NULL,
  `estado` int(1) NOT NULL,
  `id_empresa` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `correo`, `last_session`, `activacion`, `token`, `token_password`, `password_request`, `id_tipo`, `fecha_creacion`, `fecha_modificacion`, `usuario_modificacion`, `usuario_creacion`, `estado`, `id_empresa`) VALUES
(1, 'lito', '$2y$10$pxniaHV0c85lpSVmrMu.t.urspSCHe4hQuJuaTPPruankgpErxRk.', 'lito', 'etovar1989@gmail.com', '2017-11-15 18:36:07', 1, '8d4f830001469a9996943bbcc4f7f7f0', '', 0, 1, '0000-00-00', '0000-00-00', '', '', 1, 5),
(2, 'm', '$2y$10$pxniaHV0c85lpSVmrMu.t.urspSCHe4hQuJuaTPPruankgpErxRk.', 'mm', 'm@momo.co', '2017-10-23 19:06:12', 1, '', '', 0, 1, '0000-00-00', '0000-00-00', '', '', 0, 2),
(3, 'm', '123', 'mm', 'm@momo.co', NULL, 1, '', NULL, 0, 2, '0000-00-00', '0000-00-00', '', '', 0, 4),
(14, 'etovar97@misena.edu.co', '$2y$10$HQQIkm5p.WkQEWNv7tDkguEsQHBFuh4cH9/EKG9UeiEl8W9N3QM3G', 'etovar97@misena.edu.co', 'etovar97@misena.edu.co', NULL, 0, 'c8f3ea5ce5d28adb9ff772f706185122', NULL, 0, 2, '0000-00-00', '0000-00-00', '', '', 0, 2),
(15, 'camilo.hurtado', '$2y$10$ZRsdlYq1H/uinBgGd4IZIuqlQni4wf7ckSd8b5m7aJXLdtrGvdYUW', 'Camilo', 'camilohurtadocarvajal25@gmail.com', '2017-11-15 17:37:33', 1, 'a941cbc357e52f85ac12f447499c4e5e', '', 0, 1, '0000-00-00', '0000-00-00', '', '', 0, 5),
(16, 'vhd', '$2y$10$RZfKkHCMd.iB1hL/jswopeynE1/pUEiXojSHKPucQd8lt.iW9n0FK', 'victor', 'atg@solinux.co', '2017-11-08 06:51:24', 1, '556539e9fd620171b406607774a97806', '', 0, 2, '0000-00-00', '0000-00-00', '', '', 0, 0),
(17, 'camilo.hurtado1', '$2y$10$642DTBaTQAedxD8Vf8ZxueWxk9x9fw6NmIqLUTsAi0dfsGu26.7Vu', 'camilo', 'camilohurtadocarvajal@hotmail.com', '2017-11-15 17:05:59', 1, '2a2b9881889b8ee2916f74a823179d95', '', 0, 2, '0000-00-00', '0000-00-00', '', '', 0, 0),
(18, 'juan123', '$2y$10$mzYz2XPIcs.FH2KZhQmCnePy6NxdVyA8R3eNrdWT9VaA.QoP9qVNS', 'Juan', 'camilohurtadocarvajal2@hotmail.com', '2017-11-15 17:37:44', 1, '284e243295dabf7bee4ac770352a4d5d', '', 0, 2, '0000-00-00', '0000-00-00', '', '', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
