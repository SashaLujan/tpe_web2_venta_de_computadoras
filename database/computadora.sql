-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2020 a las 20:59:51
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
-- Estructura de tabla para la tabla `computadora`
--

CREATE TABLE `computadora` (
  `id_computadora` int(25) NOT NULL,
  `nombre_comp` varchar(20) NOT NULL,
  `sistOperativo` varchar(20) NOT NULL,
  `imagen` varchar(300) NOT NULL,
  `id_marca_fk` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `computadora`
--

INSERT INTO `computadora` (`id_computadora`, `nombre_comp`, `sistOperativo`, `imagen`, `id_marca_fk`) VALUES
(6, 'Notebook', 'windows 8.1', '', 4),
(7, 'pc', 'windows XP', '', 5),
(8, 'Notebook', 'windows 10', '', 6),
(9, 'pc', 'windows 7', '', 7),
(10, 'Notebook', 'Linux', '', 1),
(15, 'Notebook', 'windows ', '', 2),
(20, 'notebook 975', 'linux', '', 4),
(23, 'notebook', 'linux', '', 11),
(24, 'notebook 540', 'windows', '', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `computadora`
--
ALTER TABLE `computadora`
  ADD PRIMARY KEY (`id_computadora`),
  ADD KEY `id_marca` (`id_marca_fk`),
  ADD KEY `id_marca_fk` (`id_marca_fk`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `computadora`
--
ALTER TABLE `computadora`
  MODIFY `id_computadora` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
