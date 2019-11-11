-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2019 a las 19:17:55
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

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
-- Estructura de tabla para la tabla `agencia`
--

CREATE TABLE `agencia` (
  `id_agen` int(11) NOT NULL,
  `ruc_agen` int(11) NOT NULL,
  `direc_agen` varchar(60) NOT NULL,
  `web_site_agen` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agencia_personal`
--

CREATE TABLE `agencia_personal` (
  `id_agen_per` int(11) NOT NULL,
  `nom_agen_per` varchar(30) NOT NULL,
  `ape_agen_per` varchar(40) DEFAULT NULL,
  `email_agen_per` varchar(50) NOT NULL,
  `cel_agen_per` varchar(11) NOT NULL,
  `pass_agen_per` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` int(11) NOT NULL,
  `nom_area` varchar(45) NOT NULL,
  `desc_area` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `ruc_empresa` int(11) NOT NULL,
  `nom_empresa` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_per` int(11) NOT NULL,
  `nom_per` varchar(40) NOT NULL,
  `ape_per` varchar(45) DEFAULT NULL,
  `direc_per` varchar(50) NOT NULL,
  `email_corp_per` varchar(50) DEFAULT NULL,
  `email_per_per` varchar(50) NOT NULL,
  `cel_corp_per` varchar(11) DEFAULT NULL,
  `cel_per_per` varchar(11) NOT NULL,
  `nac_per` int(15) DEFAULT NULL,
  `dni_per` int(15) NOT NULL,
  `cv_per` blob DEFAULT NULL,
  `img_per` longblob DEFAULT NULL,
  `id_area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_historial`
--

CREATE TABLE `personal_historial` (
  `id_per_his` int(11) NOT NULL,
  `hor_tra_per_his` varchar(15) NOT NULL,
  `viat_per_his` varchar(10) NOT NULL,
  `sueld_per_his` varchar(10) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_per` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporal`
--

CREATE TABLE `temporal` (
  `id_temporal` int(11) NOT NULL,
  `log_temporal` varchar(45) NOT NULL,
  `pass_temporal` varchar(45) NOT NULL,
  `desc_temporal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `temporal`
--

INSERT INTO `temporal` (`id_temporal`, `log_temporal`, `pass_temporal`, `desc_temporal`) VALUES
(1, 'prueba1', 'prueba123', 'admi'),
(2, 'prueba2', 'prueba1234', 'operaciones'),
(3, 'operaciones', 'operaciones123', 'operaciones'),
(4, 'comercial', 'comercial123', 'comercial'),
(5, 'agencia', 'agencia123', 'agencia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agencia`
--
ALTER TABLE `agencia`
  ADD PRIMARY KEY (`id_agen`);

--
-- Indices de la tabla `agencia_personal`
--
ALTER TABLE `agencia_personal`
  ADD PRIMARY KEY (`id_agen_per`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_per`),
  ADD KEY `id_area` (`id_area`);

--
-- Indices de la tabla `personal_historial`
--
ALTER TABLE `personal_historial`
  ADD PRIMARY KEY (`id_per_his`),
  ADD KEY `id_area` (`id_area`),
  ADD KEY `id_per` (`id_per`);

--
-- Indices de la tabla `temporal`
--
ALTER TABLE `temporal`
  ADD PRIMARY KEY (`id_temporal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agencia`
--
ALTER TABLE `agencia`
  MODIFY `id_agen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `agencia_personal`
--
ALTER TABLE `agencia_personal`
  MODIFY `id_agen_per` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_per` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_historial`
--
ALTER TABLE `personal_historial`
  MODIFY `id_per_his` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `temporal`
--
ALTER TABLE `temporal`
  MODIFY `id_temporal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
