-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-09-2021 a las 02:37:51
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbdukon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `doc_cod` int(11) NOT NULL,
  `doc_consecutivo` int(11) NOT NULL,
  `doc_descrip` varchar(200) NOT NULL,
  `doc_afecaja` varchar(1) NOT NULL,
  `doc_afeinvent` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`doc_cod`, `doc_consecutivo`, `doc_descrip`, `doc_afecaja`, `doc_afeinvent`) VALUES
(1, 250, 'FACTURA DE VENTAS', '+', '-'),
(2, 350, 'REMISIÓN ENTRADA', 'n', '+'),
(3, 450, 'DEVOLUCIONES', '-', '+'),
(4, 550, 'REMISIÓN SALIDA', 'N', '-'),
(5, 650, 'INVENTARIO INICIAL', 'N', '+');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `env_cod` int(11) NOT NULL,
  `env_idtrans` int(11) NOT NULL,
  `env_idemple` int(11) NOT NULL,
  `env_empre` varchar(45) NOT NULL,
  `env_guia` varchar(20) NOT NULL,
  `env_tel` int(11) NOT NULL,
  `env_costo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `pro_cod` int(11) NOT NULL,
  `pro_idtipro` int(11) NOT NULL,
  `pro_nomb` varchar(45) NOT NULL,
  `pro_CantDisponible` int(11) NOT NULL,
  `pro_saldoInicial` int(11) NOT NULL,
  `pro_stockMax` int(11) NOT NULL,
  `pro_stockMin` int(11) NOT NULL,
  `pro_Valor` int(11) NOT NULL,
  `pro_image` varchar(200) NOT NULL,
  `pro_entrada` int(11) NOT NULL,
  `pro_salidas` int(11) NOT NULL,
  `pro_saldo` int(11) NOT NULL,
  `pro_estado` varchar(80) NOT NULL,
  `pro_garant` int(2) NOT NULL,
  `pro_referencia` varchar(500) NOT NULL,
  `pro_observac` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_id` int(11) NOT NULL,
  `rol_nomb` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_id`, `rol_nomb`) VALUES
(1, 'user'),
(2, 'auxiliar'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `tipo_id` int(11) NOT NULL,
  `tipo_nomb` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`tipo_id`, `tipo_nomb`) VALUES
(1, 'silla'),
(2, 'mesa'),
(3, 'bombo'),
(4, 'triptico'),
(5, 'lampara');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

CREATE TABLE `transaccion` (
  `trans_id` int(11) NOT NULL,
  `trans_idemple` int(11) NOT NULL,
  `trans_docod` int(11) NOT NULL,
  `trans_numdoc` int(11) NOT NULL,
  `trans_usuid` int(11) NOT NULL,
  `trans_valtotal` int(11) NOT NULL,
  `trans_fecha` date NOT NULL,
  `trans_estgarantia` varchar(45) NOT NULL,
  `trans_Tipago` varchar(45) NOT NULL,
  `trans_valpago` int(11) DEFAULT NULL,
  `trans_desc` int(11) DEFAULT NULL,
  `trans_impuesto` int(11) DEFAULT NULL,
  `trans_Estado` varchar(45) DEFAULT NULL,
  `trans_Obser` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trans_producto`
--

CREATE TABLE `trans_producto` (
  `tpro_id` int(11) NOT NULL,
  `tpro_idtrans` int(11) NOT NULL,
  `tpro_codpro` int(11) NOT NULL,
  `tpro_cantxprod` int(11) NOT NULL,
  `tpro_obser` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_rolid` int(11) NOT NULL,
  `usu_Nomb` varchar(45) NOT NULL,
  `usu_Clave` varchar(45) NOT NULL,
  `usu_tel` int(11) NOT NULL,
  `usu_correo` varchar(45) NOT NULL,
  `usu_dire` varchar(45) DEFAULT NULL,
  `usu_ciudad` varchar(20) NOT NULL,
  `usu_descAdicional` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_rolid`, `usu_Nomb`, `usu_Clave`, `usu_tel`, `usu_correo`, `usu_dire`, `usu_ciudad`, `usu_descAdicional`) VALUES
(1, 1, 'Helenn Nicole', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, 'hnmelo9@misena.edu.co', NULL, '', NULL),
(2, 2, 'auxiliar', '1234', 0, 'auxiliar@oli.com', NULL, '', NULL),
(3, 1, 'PRUEBA', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, 'PRUEBA@PRUEBA.COM', NULL, '', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`doc_cod`);

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`env_cod`),
  ADD KEY `env_idtrans` (`env_idtrans`,`env_idemple`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`pro_cod`),
  ADD KEY `pro_idtipro` (`pro_idtipro`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`tipo_id`);

--
-- Indices de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD PRIMARY KEY (`trans_id`,`trans_idemple`),
  ADD KEY `trans_docod` (`trans_docod`),
  ADD KEY `trans_usuid` (`trans_usuid`),
  ADD KEY `trans_idemple` (`trans_idemple`);

--
-- Indices de la tabla `trans_producto`
--
ALTER TABLE `trans_producto`
  ADD PRIMARY KEY (`tpro_id`),
  ADD KEY `tpro_idtrans` (`tpro_idtrans`),
  ADD KEY `tpro_codpro` (`tpro_codpro`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`),
  ADD KEY `usu_rolid` (`usu_rolid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `doc_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `env_cod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `pro_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `tipo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `trans_producto`
--
ALTER TABLE `trans_producto`
  MODIFY `tpro_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `envio`
--
ALTER TABLE `envio`
  ADD CONSTRAINT `envio_ibfk_1` FOREIGN KEY (`env_idtrans`,`env_idemple`) REFERENCES `transaccion` (`trans_id`, `trans_idemple`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`pro_idtipro`) REFERENCES `tipo_producto` (`tipo_id`);

--
-- Filtros para la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD CONSTRAINT `transaccion_ibfk_1` FOREIGN KEY (`trans_docod`) REFERENCES `documentos` (`doc_cod`),
  ADD CONSTRAINT `transaccion_ibfk_2` FOREIGN KEY (`trans_usuid`) REFERENCES `usuario` (`usu_id`),
  ADD CONSTRAINT `transaccion_ibfk_3` FOREIGN KEY (`trans_idemple`) REFERENCES `usuario` (`usu_id`);

--
-- Filtros para la tabla `trans_producto`
--
ALTER TABLE `trans_producto`
  ADD CONSTRAINT `trans_producto_ibfk_1` FOREIGN KEY (`tpro_idtrans`) REFERENCES `transaccion` (`trans_id`),
  ADD CONSTRAINT `trans_producto_ibfk_2` FOREIGN KEY (`tpro_codpro`) REFERENCES `productos` (`pro_cod`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`usu_rolid`) REFERENCES `rol` (`rol_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
