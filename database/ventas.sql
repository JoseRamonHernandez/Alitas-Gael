-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2021 a las 21:13:39
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE `precios` (
  `id` int(11) NOT NULL,
  `alitas` int(11) NOT NULL,
  `papas` int(11) NOT NULL,
  `hotcakes` int(11) NOT NULL,
  `hotdogs` int(11) NOT NULL,
  `platanos` int(11) NOT NULL,
  `micheladas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`id`, `alitas`, `papas`, `hotcakes`, `hotdogs`, `platanos`, `micheladas`) VALUES
(1, 40, 15, 5, 15, 25, 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `alitas` int(11) NOT NULL,
  `papas` int(11) NOT NULL,
  `hotcakes` int(11) NOT NULL,
  `hotdogs` int(11) NOT NULL,
  `platanos` int(11) NOT NULL,
  `micheladas` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `fecha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `alitas`, `papas`, `hotcakes`, `hotdogs`, `platanos`, `micheladas`, `total`, `fecha`) VALUES
(25, 1, 1, 1, 0, 0, 0, 60, '09-29-2021 06:13:32 pm'),
(26, 2, 4, 4, 5, 6, 5, 685, '09-29-2021 06:19:05 pm'),
(27, 1, 5, 0, 3, 0, 0, 160, '09-30-2021 12:41:50 pm'),
(28, 1, 1, 1, 1, 1, 1, 160, '10-04-2021 06:37:41 pm'),
(29, 1, 1, 1, 1, 1, 1, 160, '10-04-2021 06:38:35 pm'),
(30, 2, 2, 2, 2, 2, 2, 320, '10-04-2021 07:34:40 pm'),
(31, 100, 100, 100, 100, 100, 100, 16000, '10-04-2021 07:36:36 pm'),
(32, 0, 1, 1, 1, 1, 1, 120, '10-04-2021 07:37:41 pm'),
(33, 5, 5, 5, 5, 5, 5, 800, '10-04-2021 07:38:21 pm'),
(34, 0, 4, 64, 64, 4, 4, 1680, '10-04-2021 07:38:30 pm'),
(35, 1, 0, 0, 1, 0, 0, 55, '10-06-2021 10:02:45 am'),
(36, 10, 10, 10, 10, 10, 10, 1600, '10-06-2021 01:22:30 pm'),
(37, 0, 0, 0, 0, 0, 0, 0, '10-09-2021 01:30:10 pm'),
(38, 0, 0, 0, 0, 0, 0, 0, '10-09-2021 01:30:32 pm'),
(39, 0, 0, 0, 0, 0, 0, 0, '10-09-2021 01:30:41 pm'),
(40, 0, 0, 0, 0, 0, 0, 0, '10-09-2021 01:31:29 pm'),
(41, 0, 0, 0, 0, 0, 0, 0, '10-09-2021 01:31:44 pm'),
(42, 0, 0, 0, 0, 0, 0, 0, '10-09-2021 01:32:09 pm'),
(43, 0, 0, 0, 0, 0, 0, 0, '10-09-2021 01:32:54 pm'),
(44, 0, 0, 0, 0, 0, 0, 0, '10-09-2021 01:33:05 pm'),
(45, 0, 0, 0, 0, 0, 0, 0, '10-09-2021 01:33:13 pm'),
(46, 0, 0, 0, 0, 0, 0, 0, '10-09-2021 01:33:54 pm'),
(47, 0, 0, 0, 0, 0, 0, 0, '10-09-2021 01:33:56 pm'),
(48, 0, 0, 0, 0, 0, 0, 0, '10-09-2021 01:34:16 pm'),
(49, 0, 0, 0, 0, 0, 0, 0, '10-09-2021 01:34:41 pm'),
(50, 0, 0, 0, 0, 0, 0, 0, '10-09-2021 01:34:46 pm'),
(51, 0, 0, 0, 0, 0, 0, 0, '10-09-2021 01:34:49 pm'),
(52, 0, 0, 0, 0, 0, 0, 0, '10-09-2021 01:35:03 pm'),
(53, 0, 0, 0, 0, 0, 0, 0, '10-09-2021 01:36:50 pm'),
(54, 0, 0, 0, 0, 0, 0, 0, '10-09-2021 01:47:49 pm'),
(55, 1, 1, 2, 1, 21, 6, 965, '10-09-2021 02:04:38 pm'),
(56, 0, 0, 0, 0, 0, 0, 0, '10-09-2021 02:08:43 pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `precios`
--
ALTER TABLE `precios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `precios`
--
ALTER TABLE `precios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
