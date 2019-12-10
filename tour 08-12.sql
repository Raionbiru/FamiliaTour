-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2019 a las 06:09:04
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tour`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` int(11) NOT NULL,
  `nom_area` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id_area`, `nom_area`) VALUES
(1, 'Comercial'),
(2, 'Operaciones'),
(3, 'Administracion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asiento`
--

CREATE TABLE `asiento` (
  `id_asie` int(11) NOT NULL,
  `num_asie` varchar(4) NOT NULL,
  `estad_asie` int(1) NOT NULL,
  `id_bus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bus`
--

CREATE TABLE `bus` (
  `id_bus` int(11) NOT NULL,
  `placa_bus` varchar(8) NOT NULL,
  `mod_bus` varchar(30) DEFAULT NULL,
  `cap_bus` int(3) NOT NULL,
  `est_bus` varchar(30) DEFAULT NULL,
  `cond_bus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nom_cliente` varchar(25) NOT NULL,
  `ape_cliente` varchar(25) NOT NULL,
  `email_cliente` varchar(50) NOT NULL,
  `cel_cliente` varchar(9) NOT NULL,
  `pas_cliente` varchar(50) NOT NULL,
  `empr_cliente` varchar(50) NOT NULL,
  `ruc_empr_cliente` varchar(11) DEFAULT NULL,
  `direc_cliente` varchar(60) DEFAULT NULL,
  `web_empr_cliente` varchar(60) DEFAULT NULL,
  `cod_cliente` varchar(6) DEFAULT NULL,
  `estado_cliente` int(1) DEFAULT NULL,
  `notificacion_cliente` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nom_cliente`, `ape_cliente`, `email_cliente`, `cel_cliente`, `pas_cliente`, `empr_cliente`, `ruc_empr_cliente`, `direc_cliente`, `web_empr_cliente`, `cod_cliente`, `estado_cliente`, `notificacion_cliente`) VALUES
(1, 'Prueba Cliente', 'Apellido Uno', 'ejemplo@gmail.com', '957894123', 'pruebacliente', 'PERU MISTIKA TRAVEL', '21478945610', '', 'www.perumistikatravel.com', 'A00001', 0, 1),
(2, 'Prueba', 'Ejemplo', 'ejemplo@gmail.com', '', '123', 'Agencia de prueba', '', '', 'https://www.prueba.com', 'A00002', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comidas`
--

CREATE TABLE `comidas` (
  `id_comidas` int(11) NOT NULL,
  `tipo_comidas` varchar(8) NOT NULL,
  `carta_comidas` varchar(35) NOT NULL,
  `precio_comidas` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comidas`
--

INSERT INTO `comidas` (`id_comidas`, `tipo_comidas`, `carta_comidas`, `precio_comidas`) VALUES
(1, 'Desayuno', 'Desayuno Continental', '10'),
(2, 'Desayuno', 'Desayuno Buffet', '15'),
(3, 'Almuerzo', 'Entrada + Fondo + Bebida + Postre', '10'),
(4, 'Almuerzo', 'Buffet', '15'),
(5, 'Cena', 'Entrada + Fondo + Bebida', '10'),
(7, 'Almuerzo', 'Ejemplo', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `id_contr` int(11) NOT NULL,
  `cod_contr` varchar(6) NOT NULL,
  `nom_contr` varchar(60) NOT NULL,
  `id_tipo_contr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`id_contr`, `cod_contr`, `nom_contr`, `id_tipo_contr`) VALUES
(1, '000001', 'Primer contrato', 1),
(2, '000002', 'Segundo Contrato', 1),
(3, '000003', 'Tercer Contrato', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_tour`
--

CREATE TABLE `historial_tour` (
  `id_hist_tour` int(11) NOT NULL,
  `fec_hist_tour` date NOT NULL,
  `id_tour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial_tour`
--

INSERT INTO `historial_tour` (`id_hist_tour`, `fec_hist_tour`, `id_tour`) VALUES
(1, '2019-11-07', 1),
(2, '2019-11-07', 1),
(3, '2019-11-01', 2),
(4, '2019-11-01', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hostal`
--

CREATE TABLE `hostal` (
  `id_hostal` int(11) NOT NULL,
  `nom_hostal` varchar(100) NOT NULL,
  `clase_hostal` varchar(6) NOT NULL,
  `tipo_hostal` varchar(10) NOT NULL,
  `lugar_hostal` varchar(15) NOT NULL,
  `prec_hostal` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `hostal`
--

INSERT INTO `hostal` (`id_hostal`, `nom_hostal`, `clase_hostal`, `tipo_hostal`, `lugar_hostal`, `prec_hostal`) VALUES
(1, 'HOSTAL VILLA MELGAR', 'SIMPLE', 'ECONOMICO', 'AREQUIPA', '120'),
(5, 'Ejemplo', 'Interm', 'Doble', 'Piura', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornal`
--

CREATE TABLE `jornal` (
  `id_jor` int(11) NOT NULL,
  `sueldo_jor` varchar(12) NOT NULL,
  `pago_variado_jor` varchar(20) DEFAULT NULL,
  `viat_jor` varchar(12) DEFAULT NULL,
  `hor_tra_jor` varchar(6) DEFAULT NULL,
  `fec_jor` date NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_per` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jornal`
--

INSERT INTO `jornal` (`id_jor`, `sueldo_jor`, `pago_variado_jor`, `viat_jor`, `hor_tra_jor`, `fec_jor`, `id_area`, `id_per`) VALUES
(1, '1 200.00', '1 400.00', '50.00', '86', '2019-04-01', 1, 6),
(2, '2 000.00', '2 300.00', '15', '84', '2019-04-01', 2, 4),
(3, '1 200.00', '1 500.00', '50.00', '84', '2019-08-01', 2, 7),
(4, '2 500.00', '32 000.00', '66.00', '99', '2019-08-01', 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_per` int(11) NOT NULL,
  `nom_per` varchar(30) NOT NULL,
  `ape_per` varchar(30) DEFAULT NULL,
  `direc_per` varchar(50) DEFAULT NULL,
  `email_per_per` varchar(60) NOT NULL,
  `email_corp_per` varchar(60) DEFAULT NULL,
  `cel_per_per` varchar(11) NOT NULL,
  `cel_corp_per` varchar(11) DEFAULT NULL,
  `dni_per` int(8) DEFAULT NULL,
  `cargo_per` varchar(20) DEFAULT NULL,
  `log_per` varchar(40) DEFAULT NULL,
  `pass_per` varchar(20) NOT NULL,
  `estado_per` tinyint(1) NOT NULL,
  `notificacion_per` int(1) NOT NULL,
  `id_area` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_per`, `nom_per`, `ape_per`, `direc_per`, `email_per_per`, `email_corp_per`, `cel_per_per`, `cel_corp_per`, `dni_per`, `cargo_per`, `log_per`, `pass_per`, `estado_per`, `notificacion_per`, `id_area`) VALUES
(3, 'Usuario Prueba', 'Apellido', NULL, 'ejemplo@gmail.com', NULL, '952786546', NULL, NULL, 'Empleado', 'usuarioprueba', 'usuarioprueba', 1, 0, 3),
(4, 'Otro Usuario', 'Apellido', NULL, 'ejemplo2@gmail.com', NULL, '987456159', NULL, NULL, 'Empleado', 'otrousuario', 'otrousuario', 1, 0, 1),
(5, 'Prueba', 'Tres', 'Paucarpata', 'ejemplo3@gmail.com', NULL, '987456159', NULL, NULL, 'Empleado', 'pruebatres', 'pruebatres', 1, 0, 2),
(6, 'Usuario Cuatro', 'Usuario', 'Paucarpata', 'ejemplo4@gmaiil.com', NULL, '987456123', NULL, NULL, 'Empleado', 'usuariocinco', 'usuariocinco', 1, 0, 1),
(7, 'operaciones', 'prueba', NULL, 'ejemplo6@gmail.com', NULL, '987587159', NULL, NULL, 'Usuario para probar ', 'operaciones', 'operaciones', 1, 0, 2),
(8, 'comercial', 'usuario prueba', NULL, 'ejemplo7@gmail.com', NULL, '987456123', NULL, NULL, 'Probar opciones come', 'comercial', 'comercial', 1, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_produc` int(11) NOT NULL,
  `nom_produc` varchar(50) NOT NULL,
  `prec_produc` varchar(16) NOT NULL,
  `id_tipo_produc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_produc`, `nom_produc`, `prec_produc`, `id_tipo_produc`) VALUES
(1, 'Hotel', '50.00', NULL),
(6, 'Transporte', '150.00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programacion`
--

CREATE TABLE `programacion` (
  `id_prog` int(11) NOT NULL,
  `fec_prog` date NOT NULL,
  `hora_prog` time NOT NULL,
  `id_bus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL,
  `fec_reserva` date NOT NULL,
  `hora_reserva` time NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_prog` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicioplus`
--

CREATE TABLE `servicioplus` (
  `id_serv_plus` int(11) NOT NULL,
  `nom_serv_plus` varchar(30) NOT NULL,
  `tipo_serv_plus` varchar(15) DEFAULT NULL,
  `prec_int_serv_plus` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicioplus`
--

INSERT INTO `servicioplus` (`id_serv_plus`, `nom_serv_plus`, `tipo_serv_plus`, `prec_int_serv_plus`) VALUES
(1, 'Servicio de Viaje', 'Basico', '10'),
(2, 'Servicio de Viaje', 'Superior', '20'),
(3, 'Transporte de Evacuación', NULL, '10'),
(5, 'Grabacion y Edicion de Viaje', 'Basico', '10'),
(6, 'Grabacion y Edicion de Viaje', 'Avanzado', '20'),
(7, 'Grabacion y Edicion de Viaje', 'Profesional', '30'),
(8, 'Ejemplo', 'Basico', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporal`
--

CREATE TABLE `temporal` (
  `id_temporal` int(11) NOT NULL,
  `log_temporal` varchar(30) NOT NULL,
  `pass_temporal` varchar(30) NOT NULL,
  `desc_temporal` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `temporal`
--

INSERT INTO `temporal` (`id_temporal`, `log_temporal`, `pass_temporal`, `desc_temporal`) VALUES
(1, 'administracion', 'administracion123', 'admi'),
(2, 'operaciones', 'operaciones123', 'operaciones'),
(3, 'comercial', 'comercial123', 'comercial'),
(4, 'agencia', 'agencia123', 'agencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_contrato`
--

CREATE TABLE `tipo_contrato` (
  `id_tipo_contr` int(11) NOT NULL,
  `nom_tipo_contr` varchar(30) NOT NULL,
  `desc_tipo_contr` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_contrato`
--

INSERT INTO `tipo_contrato` (`id_tipo_contr`, `nom_tipo_contr`, `desc_tipo_contr`) VALUES
(1, 'Servicios', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_produc`
--

CREATE TABLE `tipo_produc` (
  `id_tipo_produc` int(11) NOT NULL,
  `nom_tipo_produc` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicio`
--

CREATE TABLE `tipo_servicio` (
  `id_tipo_servicio` int(11) NOT NULL,
  `nom_tipo_servicio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tour`
--

CREATE TABLE `tour` (
  `id_tour` int(11) NOT NULL,
  `nom_tour` varchar(100) NOT NULL,
  `descp_tour` varchar(150) DEFAULT NULL,
  `prec_tour` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tour`
--

INSERT INTO `tour` (`id_tour`, `nom_tour`, `descp_tour`, `prec_tour`) VALUES
(1, 'Colca Full Day + Almuerzo Buffet - Arequipa', 'Observación de aves, Paseo Áreas Naturales, Visitas guiadas', '160.00'),
(2, 'Tour Reserva Nacional de Salinas y Aguada Blanca - Arequipa', 'Observación de aves, Observación de fauna y flora, Paseo Áreas Naturales', '150.00'),
(3, 'Tour de prueba', 'Prueba de tour ', '200.00'),
(13, 'Prueba de hoy 25-11-19', 'Prueba de hoy 25-11-19 este es una descripción del tour.', '150.00'),
(29, 'Tour Mollendo', 'Este tour es para las playas de mollendo', '200.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transporte`
--

CREATE TABLE `transporte` (
  `id_transporte` int(11) NOT NULL,
  `tipo_transporte` varchar(10) NOT NULL,
  `salida_transporte` varchar(7) DEFAULT NULL,
  `nom_transporte` varchar(60) NOT NULL,
  `des_transporte` varchar(60) NOT NULL,
  `prec_transporte` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `transporte`
--

INSERT INTO `transporte` (`id_transporte`, `tipo_transporte`, `salida_transporte`, `nom_transporte`, `des_transporte`, `prec_transporte`) VALUES
(1, 'Aereo', NULL, 'Lima', 'LIMA PIURA OW', '2500'),
(2, 'Aereo', NULL, 'Arequipa', 'AREQUIPA CUSCO OW', '130'),
(4, 'Terrestre', 'Privado', 'COPERATIVA TUTI TOURS', 'AQP-COLCA-PUNO-AQP', '1300'),
(5, 'Terrestre', 'Privado', 'Lima', 'Cajamamrca', '250'),
(6, 'Aereo', 'Publico', 'Ejemplo', 'Piura', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_vet` int(11) NOT NULL,
  `nom_vet` varchar(50) NOT NULL,
  `monto_vet` varchar(15) NOT NULL,
  `fec_vet` date NOT NULL,
  `id_contr` int(11) NOT NULL,
  `id_produc` int(11) NOT NULL,
  `id_hist_tour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `asiento`
--
ALTER TABLE `asiento`
  ADD PRIMARY KEY (`id_asie`);

--
-- Indices de la tabla `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id_bus`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `comidas`
--
ALTER TABLE `comidas`
  ADD PRIMARY KEY (`id_comidas`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`id_contr`),
  ADD KEY `id_tipo_contr` (`id_tipo_contr`);

--
-- Indices de la tabla `historial_tour`
--
ALTER TABLE `historial_tour`
  ADD PRIMARY KEY (`id_hist_tour`),
  ADD KEY `id_tour` (`id_tour`);

--
-- Indices de la tabla `hostal`
--
ALTER TABLE `hostal`
  ADD PRIMARY KEY (`id_hostal`);

--
-- Indices de la tabla `jornal`
--
ALTER TABLE `jornal`
  ADD PRIMARY KEY (`id_jor`),
  ADD KEY `id_area` (`id_area`),
  ADD KEY `id_per` (`id_per`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_per`),
  ADD KEY `id_area` (`id_area`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_produc`),
  ADD KEY `id_tipo_produc` (`id_tipo_produc`);

--
-- Indices de la tabla `programacion`
--
ALTER TABLE `programacion`
  ADD PRIMARY KEY (`id_prog`),
  ADD KEY `id_bus` (`id_bus`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_prog` (`id_prog`),
  ADD KEY `id_tour` (`id_tour`);

--
-- Indices de la tabla `servicioplus`
--
ALTER TABLE `servicioplus`
  ADD PRIMARY KEY (`id_serv_plus`);

--
-- Indices de la tabla `temporal`
--
ALTER TABLE `temporal`
  ADD PRIMARY KEY (`id_temporal`);

--
-- Indices de la tabla `tipo_contrato`
--
ALTER TABLE `tipo_contrato`
  ADD PRIMARY KEY (`id_tipo_contr`);

--
-- Indices de la tabla `tipo_produc`
--
ALTER TABLE `tipo_produc`
  ADD PRIMARY KEY (`id_tipo_produc`);

--
-- Indices de la tabla `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id_tour`);

--
-- Indices de la tabla `transporte`
--
ALTER TABLE `transporte`
  ADD PRIMARY KEY (`id_transporte`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_vet`),
  ADD KEY `id_contr` (`id_contr`),
  ADD KEY `id_produc` (`id_produc`),
  ADD KEY `id_hist_tour` (`id_hist_tour`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `asiento`
--
ALTER TABLE `asiento`
  MODIFY `id_asie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bus`
--
ALTER TABLE `bus`
  MODIFY `id_bus` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `comidas`
--
ALTER TABLE `comidas`
  MODIFY `id_comidas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `id_contr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `historial_tour`
--
ALTER TABLE `historial_tour`
  MODIFY `id_hist_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `hostal`
--
ALTER TABLE `hostal`
  MODIFY `id_hostal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `jornal`
--
ALTER TABLE `jornal`
  MODIFY `id_jor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_produc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `programacion`
--
ALTER TABLE `programacion`
  MODIFY `id_prog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicioplus`
--
ALTER TABLE `servicioplus`
  MODIFY `id_serv_plus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `temporal`
--
ALTER TABLE `temporal`
  MODIFY `id_temporal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_contrato`
--
ALTER TABLE `tipo_contrato`
  MODIFY `id_tipo_contr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_produc`
--
ALTER TABLE `tipo_produc`
  MODIFY `id_tipo_produc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tour`
--
ALTER TABLE `tour`
  MODIFY `id_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `transporte`
--
ALTER TABLE `transporte`
  MODIFY `id_transporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_vet` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`id_tipo_contr`) REFERENCES `tipo_contrato` (`id_tipo_contr`);

--
-- Filtros para la tabla `historial_tour`
--
ALTER TABLE `historial_tour`
  ADD CONSTRAINT `historial_tour_ibfk_1` FOREIGN KEY (`id_tour`) REFERENCES `tour` (`id_tour`);

--
-- Filtros para la tabla `jornal`
--
ALTER TABLE `jornal`
  ADD CONSTRAINT `jornal_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`),
  ADD CONSTRAINT `jornal_ibfk_2` FOREIGN KEY (`id_per`) REFERENCES `persona` (`id_per`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_tipo_produc`) REFERENCES `tipo_produc` (`id_tipo_produc`);

--
-- Filtros para la tabla `programacion`
--
ALTER TABLE `programacion`
  ADD CONSTRAINT `programacion_ibfk_1` FOREIGN KEY (`id_bus`) REFERENCES `bus` (`id_bus`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`id_prog`) REFERENCES `programacion` (`id_prog`),
  ADD CONSTRAINT `reserva_ibfk_3` FOREIGN KEY (`id_tour`) REFERENCES `tour` (`id_tour`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_contr`) REFERENCES `contrato` (`id_contr`),
  ADD CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`id_produc`) REFERENCES `producto` (`id_produc`),
  ADD CONSTRAINT `venta_ibfk_4` FOREIGN KEY (`id_hist_tour`) REFERENCES `historial_tour` (`id_hist_tour`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
