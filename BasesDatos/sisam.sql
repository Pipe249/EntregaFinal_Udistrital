-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2023 a las 03:06:00
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sisam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Id` int(10) NOT NULL,
  `Names` varchar(255) NOT NULL,
  `TelContact` varchar(255) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Id`, `Names`, `TelContact`, `Mail`, `Pass`) VALUES
(1, 'Andres Angel', '243242', 'anfs@fsadf', '242fsd'),
(2, 'Andres Angel', '243242', 'anfs@fsadf', '242fsd'),
(3, 'Andres', '234234', 'andres@fsdf', 'fdjsfsd'),
(4, 'Prueba encrypt', '2342', 'andres@sfsa.com', ''),
(5, 'pruebsa ecnrypt 2', '32432', 'andres@fsdc.com', 'ZmRzams1MzQ='),
(6, 'Andres', '3024096933', 'Angel1233@gmail', 'QTEyM2I0NQ=='),
(7, 'Pruebas', '13215', 'angel@gmail.com', 'MTIzNDU2'),
(8, 'prubeas encript', '32154654', 'pipe@gmail', 'QTEyM2I0NTY=');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
