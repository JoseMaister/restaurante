-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-08-2023 a las 22:22:21
-- Versión del servidor: 8.0.33-0ubuntu0.20.04.2
-- Versión de PHP: 7.4.3-4ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventtc`
--

CREATE TABLE `detalleventtc` (
  `idDVTC` int NOT NULL,
  `idVenta` int DEFAULT NULL,
  `idUs` int NOT NULL,
  `idProd` int NOT NULL,
  `cantidad` int NOT NULL,
  `estatus` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalleventtc`
--

INSERT INTO `detalleventtc` (`idDVTC`, `idVenta`, `idUs`, `idProd`, `cantidad`, `estatus`) VALUES
(1, 1, 65, 1, 1, 'ENTREGADO'),
(2, 2, 65, 3, 1, 'ENTREGADO'),
(3, 2, 65, 2, 1, 'ENTREGADO'),
(4, 3, 2, 2, 2, 'ENTREGADO'),
(5, 3, 2, 3, 1, 'ENTREGADO'),
(6, 4, 65, 2, 2, 'PENDIENTE'),
(7, 4, 65, 2, 3, 'PENDIENTE'),
(8, 5, 65, 2, 1, 'ENTREGADO'),
(9, 5, 65, 3, 1, 'ENTREGADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientostool`
--

CREATE TABLE `movimientostool` (
  `idMov` int NOT NULL,
  `idProd` int NOT NULL,
  `idus` int NOT NULL,
  `cantidad` int DEFAULT NULL,
  `local` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `comentario` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int NOT NULL,
  `proveedor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ingrediente` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cantidadEmpaque` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `unidadReceta` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `preciodlls` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `preciounitario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `unidadEmpaque` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `subproducto` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `proveedor`, `ingrediente`, `cantidadEmpaque`, `unidadReceta`, `preciodlls`, `preciounitario`, `unidadEmpaque`, `subproducto`) VALUES
(4, 'Ben E Keith', 'Cooked Tripitas', '30', '480', '191.33', '0.399', 'LB', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubiprods`
--

CREATE TABLE `ubiprods` (
  `idUbi` int NOT NULL,
  `idProd` int NOT NULL,
  `ubicacion` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `cantidad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ubiprods`
--

INSERT INTO `ubiprods` (`idUbi`, `idProd`, `ubicacion`, `cantidad`) VALUES
(3, 2, 'rack-1', 56),
(4, 3, 'op0', 57);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `VentTCTemp`
--

CREATE TABLE `VentTCTemp` (
  `idvt` int NOT NULL,
  `idUs` int NOT NULL,
  `idProd` int NOT NULL,
  `cantidad` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `VentTCTemp`
--

INSERT INTO `VentTCTemp` (`idvt`, `idUs`, `idProd`, `cantidad`) VALUES
(1, 0, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venttoolcrib`
--

CREATE TABLE `venttoolcrib` (
  `idToolCrib` int NOT NULL,
  `idUs` int NOT NULL,
  `aprobador` int NOT NULL,
  `estatus` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `venttoolcrib`
--

INSERT INTO `venttoolcrib` (`idToolCrib`, `idUs`, `aprobador`, `estatus`, `fecha`) VALUES
(2, 65, 65, 'ENTREGADO', '2022-03-29 00:00:00'),
(3, 2, 65, 'ENTREGADO', '2022-03-29 00:00:00'),
(4, 65, 65, 'APROBADO', '2022-08-05 00:00:00'),
(5, 65, 65, 'APROBADO', '2023-03-17 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalleventtc`
--
ALTER TABLE `detalleventtc`
  ADD PRIMARY KEY (`idDVTC`);

--
-- Indices de la tabla `movimientostool`
--
ALTER TABLE `movimientostool`
  ADD PRIMARY KEY (`idMov`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ubiprods`
--
ALTER TABLE `ubiprods`
  ADD PRIMARY KEY (`idUbi`);

--
-- Indices de la tabla `VentTCTemp`
--
ALTER TABLE `VentTCTemp`
  ADD PRIMARY KEY (`idvt`);

--
-- Indices de la tabla `venttoolcrib`
--
ALTER TABLE `venttoolcrib`
  ADD PRIMARY KEY (`idToolCrib`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalleventtc`
--
ALTER TABLE `detalleventtc`
  MODIFY `idDVTC` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `movimientostool`
--
ALTER TABLE `movimientostool`
  MODIFY `idMov` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ubiprods`
--
ALTER TABLE `ubiprods`
  MODIFY `idUbi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `VentTCTemp`
--
ALTER TABLE `VentTCTemp`
  MODIFY `idvt` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `venttoolcrib`
--
ALTER TABLE `venttoolcrib`
  MODIFY `idToolCrib` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
