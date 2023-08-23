-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-08-2023 a las 22:20:11
-- Versión del servidor: 8.0.34-0ubuntu0.20.04.1
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
  `subproducto` int DEFAULT '0',
  `activo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `proveedor`, `ingrediente`, `cantidadEmpaque`, `unidadReceta`, `preciodlls`, `preciounitario`, `unidadEmpaque`, `subproducto`, `activo`) VALUES
(28, 'Ejemplo', 'Tomate', '10', '2', '10', '1.5', 'LB', 0, 0),
(29, 'hgf', 'aguacate', '12', '-2', '12', '1.2', 'LB', 0, 0),
(30, 'HOLISO', 'Cebolla', '1', '0.5', '.8', '.8', 'LB', 0, 0),
(31, 'tomato', 'Tomate', '1', '1', '0.3', '0.3', 'LB', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `procedimiento` varchar(5000) NOT NULL,
  `foto` longblob NOT NULL,
  `propietario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta_detalles`
--

CREATE TABLE `receta_detalles` (
  `id` int NOT NULL,
  `id_receta` int NOT NULL,
  `ingredientes` int NOT NULL,
  `cantidad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta_temp`
--

CREATE TABLE `receta_temp` (
  `id` int NOT NULL,
  `id_productos` int NOT NULL,
  `cantidad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subproductos`
--

CREATE TABLE `subproductos` (
  `id` int NOT NULL,
  `id_productos` int NOT NULL,
  `ingredientes` int NOT NULL,
  `cantidad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubiProds`
--

CREATE TABLE `ubiProds` (
  `idUbi` int NOT NULL,
  `idProd` int NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `cantidad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `ubiProds`
--

INSERT INTO `ubiProds` (`idUbi`, `idProd`, `ubicacion`, `cantidad`) VALUES
(7, 28, '', 9),
(8, 28, 'Refrigerador 1', 1),
(9, 28, '4r', 2);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `VentTCTemp`
--

CREATE TABLE `VentTCTemp` (
  `idvt` int NOT NULL,
  `idProd` int NOT NULL,
  `cantidad` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `receta_detalles`
--
ALTER TABLE `receta_detalles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `receta_temp`
--
ALTER TABLE `receta_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subproductos`
--
ALTER TABLE `subproductos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ubiProds`
--
ALTER TABLE `ubiProds`
  ADD PRIMARY KEY (`idUbi`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `receta_detalles`
--
ALTER TABLE `receta_detalles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `receta_temp`
--
ALTER TABLE `receta_temp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `subproductos`
--
ALTER TABLE `subproductos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `ubiProds`
--
ALTER TABLE `ubiProds`
  MODIFY `idUbi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `ubiprods`
--
ALTER TABLE `ubiprods`
  MODIFY `idUbi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `VentTCTemp`
--
ALTER TABLE `VentTCTemp`
  MODIFY `idvt` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `venttoolcrib`
--
ALTER TABLE `venttoolcrib`
  MODIFY `idToolCrib` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
