-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2020 a las 21:19:08
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
-- Base de datos: `computadora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_administrador` int(2) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `nombre_usuario` varchar(25) DEFAULT NULL,
  `contraseña` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_administrador`, `nombre`, `nombre_usuario`, `contraseña`) VALUES
(0, 'sasha lujan', 'lujanSasha', 12345);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computadora`
--

CREATE TABLE `computadora` (
  `id_computadora` int(2) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `sistOperativo` varchar(20) NOT NULL,
  `id_marca_fk` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `computadora`
--

INSERT INTO `computadora` (`id_computadora`, `nombre`, `sistOperativo`, `id_marca_fk`) VALUES
(4, 'pc', 'windows 7', 2),
(5, 'pc', 'windows 10', 3),
(6, 'Notebook', 'windows 8.1', 4),
(7, 'pc', 'windows XP', 5),
(8, 'Notebook', 'windows 10', 6),
(9, 'pc', 'windows 7', 7),
(10, 'Notebook', 'Linux', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(2) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre`) VALUES
(1, 'TCL'),
(2, 'HP'),
(3, 'Lenovo'),
(4, 'APPLE'),
(5, 'EXO'),
(6, 'LG'),
(7, 'Intel');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `computadora`
--
ALTER TABLE `computadora`
  ADD PRIMARY KEY (`id_computadora`),
  ADD KEY `id_marca` (`id_marca_fk`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD KEY `id_marca` (`id_marca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `computadora`
--
ALTER TABLE `computadora`
  MODIFY `id_computadora` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `computadora`
--
ALTER TABLE `computadora`
  ADD CONSTRAINT `computadora_ibfk_1` FOREIGN KEY (`id_marca_fk`) REFERENCES `marca` (`id_marca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
