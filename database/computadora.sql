-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2020 a las 02:42:08
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
  `contraseña` varchar(300) DEFAULT NULL,
  `tipo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_administrador`, `nombre`, `nombre_usuario`, `contraseña`, `tipo`) VALUES
(0, 'sasha lujan', 'lujanSasha', '$2y$12$zPzdWTIun4FCqsQxsZbT1eB/etmxH3YBj28ADZcRjEI7WaBrCXkzq', 'usuario'),
(1, 'admin', 'admin_user@gmail.com', '$2y$12$x81.WU7PH4Hk8fBk5WzA/.wL8aU24GfBsrS/R1SFw5RBAa7S8XsYS', 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentarios` int(25) NOT NULL,
  `comentario` text NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `puntaje` int(25) NOT NULL,
  `id_computadora` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(25) NOT NULL,
  `nombre_marca` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre_marca`) VALUES
(1, 'TCL'),
(2, 'HP'),
(3, 'Lenovo'),
(4, 'APPLE'),
(5, 'EXO'),
(6, 'LG'),
(7, 'Intel'),
(11, 'IBM'),
(14, 'POSITIVO BGH');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentarios`);

--
-- Indices de la tabla `computadora`
--
ALTER TABLE `computadora`
  ADD PRIMARY KEY (`id_computadora`),
  ADD KEY `id_marca` (`id_marca_fk`),
  ADD KEY `id_marca_fk` (`id_marca_fk`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`),
  ADD KEY `id_marca` (`id_marca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentarios` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `computadora`
--
ALTER TABLE `computadora`
  MODIFY `id_computadora` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
