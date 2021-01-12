-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-01-2021 a las 05:56:21
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asistentes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(9) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `puesto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `apellido`, `correo`, `pais`, `telefono`, `puesto`) VALUES
(183, 'Carlos', 'acosta', 'carlos@acosta.com', 'TurquÃ­a', '555241513', 'Ingeniero nuclear'),
(184, 'Marta', 'GomÃ©z', 'marta@rrhh.com', 'Alemania', '999301231', 'Recursos humanos'),
(185, 'Francisco', 'Gregorio', 'fancisco_g20@gmaill.com', 'Argentina', '549341244122', 'Aux. Administrativo'),
(186, 'Francisco', 'Gregorio', 'fancisco_g20@gmaill.com', 'Argentina', '549341244122', 'Aux. Administrativo'),
(187, 'Francisco', 'Gregorio', 'fancisco_g20@gmaill.com', 'Argentina', '549341244122', 'Aux. Administrativo'),
(188, 'Hernesto', 'Jaramillo', 'hermes-J23@outlook.com', 'Colombia', '3412125123', 'Operario de producciÃ³n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
