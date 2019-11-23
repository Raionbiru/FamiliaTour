-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2019 a las 02:00:28
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
  `estado_cliente` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nom_cliente`, `ape_cliente`, `email_cliente`, `cel_cliente`, `pas_cliente`, `empr_cliente`, `ruc_empr_cliente`, `direc_cliente`, `web_empr_cliente`, `cod_cliente`, `estado_cliente`) VALUES
(1, 'Prueba Cliente', 'Apellido Uno', 'ejemplo@gmail.com', '957894123', 'pruebacliente', 'PERU MISTIKA TRAVEL', '21478945610', '', 'www.perumistikatravel.com', '00A001', 0),
(2, 'Prueba', 'Ejemplo', 'ejemplo@gmail.com', '', '123', 'Agencia de prueba', '', '', 'https://www.prueba.com', NULL, 1);

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
-- Estructura de tabla para la tabla `jornal`
--

CREATE TABLE `jornal` (
  `id_jor` int(11) NOT NULL,
  `sueldo_jor` varchar(12) NOT NULL,
  `viat_jor` varchar(12) NOT NULL,
  `hor_tra_jor` varchar(6) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_per` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jornal`
--

INSERT INTO `jornal` (`id_jor`, `sueldo_jor`, `viat_jor`, `hor_tra_jor`, `id_area`, `id_per`) VALUES
(1, '1 200.00', '50.00', '86', 1, 6),
(2, '2 000.00', '0', '84', 2, 4),
(3, '1 200.00', '50.00', '84', 2, 7),
(4, '1 500.00', '60.00', '75', 1, 8);

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
  `id_sector` int(11) NOT NULL,
  `id_tipo_per` int(11) NOT NULL,
  `id_area` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_per`, `nom_per`, `ape_per`, `direc_per`, `email_per_per`, `email_corp_per`, `cel_per_per`, `cel_corp_per`, `dni_per`, `cargo_per`, `log_per`, `pass_per`, `estado_per`, `id_sector`, `id_tipo_per`, `id_area`) VALUES
(3, 'Usuario Prueba', NULL, NULL, 'ejemplo@gmail.com', NULL, '952786546', NULL, NULL, NULL, 'usuarioprueba', 'usuarioprueba', 1, 1, 1, 3),
(4, 'Otro Usuario', NULL, NULL, 'ejemplo2@gmail.com', NULL, '987456159', NULL, NULL, NULL, 'otrousuario', 'otrousuario', 1, 1, 1, 1),
(5, 'Prueba', 'Tres', 'Paucarpata', 'ejemplo3@gmail.com', NULL, '987456159', NULL, NULL, NULL, 'pruebatres', 'pruebatres', 1, 2, 2, NULL),
(6, 'Usuario Cuatro', 'Usuario', 'Paucarpata', 'ejemplo4@gmaiil.com', NULL, '987456123', NULL, NULL, NULL, 'usuariocinco', 'usuariocinco', 1, 2, 2, NULL),
(7, 'operaciones', 'prueba', NULL, 'ejemplo6@gmail.com', NULL, '987587159', NULL, NULL, 'Usuario para probar ', 'operaciones', 'operaciones', 1, 1, 1, 2),
(8, 'comercial', 'usuario prueba', NULL, 'ejemplo7@gmail.com', NULL, '987456123', NULL, NULL, 'Probar opciones come', 'comercial', 'comercial', 1, 1, 1, 1);

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
-- Estructura de tabla para la tabla `reserva_asiento`
--

CREATE TABLE `reserva_asiento` (
  `id_ast_rev` int(11) NOT NULL,
  `nom_ast_rev` varchar(50) NOT NULL,
  `doc_ast_rev` varchar(20) DEFAULT NULL,
  `nac_ast_rev` varchar(30) DEFAULT NULL,
  `ast_ast_rev` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva_tour`
--

CREATE TABLE `reserva_tour` (
  `id_tour_rev` int(11) NOT NULL,
  `fec_tour_rev` date NOT NULL,
  `id_ast_rev` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector`
--

CREATE TABLE `sector` (
  `id_sector` int(11) NOT NULL,
  `nom_sector` varchar(45) DEFAULT NULL,
  `tipo_sector` varchar(30) NOT NULL,
  `ruc_sector` varchar(15) NOT NULL,
  `direc_sector` varchar(60) DEFAULT NULL,
  `web_site_sector` varchar(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sector`
--

INSERT INTO `sector` (`id_sector`, `nom_sector`, `tipo_sector`, `ruc_sector`, `direc_sector`, `web_site_sector`) VALUES
(1, 'Empresa', 'Empresa', '1710034265001', NULL, NULL),
(2, 'Agencia', 'Agencia', '1810034265115', NULL, NULL);

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
-- Estructura de tabla para la tabla `tipo_persona`
--

CREATE TABLE `tipo_persona` (
  `id_tipo_per` int(11) NOT NULL,
  `nom_tipo_per` varchar(40) NOT NULL,
  `desc_tipo_per` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_persona`
--

INSERT INTO `tipo_persona` (`id_tipo_per`, `nom_tipo_per`, `desc_tipo_per`) VALUES
(1, 'Administrador', NULL),
(2, 'Usuario', NULL);

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
(4, 'Otro tour', 'Este tour es de prueba', '200.00'),
(5, 'Colca Tour', 'Ejemplo', '500.00');

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
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

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
  ADD KEY `id_tipo_per` (`id_tipo_per`),
  ADD KEY `id_area` (`id_area`),
  ADD KEY `id_sector` (`id_sector`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_produc`),
  ADD KEY `id_tipo_produc` (`id_tipo_produc`);

--
-- Indices de la tabla `reserva_asiento`
--
ALTER TABLE `reserva_asiento`
  ADD PRIMARY KEY (`id_ast_rev`);

--
-- Indices de la tabla `reserva_tour`
--
ALTER TABLE `reserva_tour`
  ADD PRIMARY KEY (`id_tour_rev`),
  ADD KEY `id_tour` (`id_tour`),
  ADD KEY `id_ast_rev` (`id_ast_rev`);

--
-- Indices de la tabla `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id_sector`);

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
-- Indices de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  ADD PRIMARY KEY (`id_tipo_per`);

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
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT de la tabla `reserva_asiento`
--
ALTER TABLE `reserva_asiento`
  MODIFY `id_ast_rev` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reserva_tour`
--
ALTER TABLE `reserva_tour`
  MODIFY `id_tour_rev` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sector`
--
ALTER TABLE `sector`
  MODIFY `id_sector` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  MODIFY `id_tipo_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_produc`
--
ALTER TABLE `tipo_produc`
  MODIFY `id_tipo_produc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tour`
--
ALTER TABLE `tour`
  MODIFY `id_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`id_tipo_per`) REFERENCES `tipo_persona` (`id_tipo_per`),
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`),
  ADD CONSTRAINT `persona_ibfk_3` FOREIGN KEY (`id_sector`) REFERENCES `sector` (`id_sector`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_tipo_produc`) REFERENCES `tipo_produc` (`id_tipo_produc`);

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
