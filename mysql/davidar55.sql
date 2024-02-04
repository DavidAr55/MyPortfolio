-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2024 a las 02:04:38
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `davidar55`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `received`
--

CREATE TABLE `received` (
  `id` int(11) NOT NULL,
  `date` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `received`
--

INSERT INTO `received` (`id`, `date`, `name`, `email`, `message`) VALUES
(1, '2024-01-22 17:03:29', 'Omar Garcia Hernandez', 'omar@asus.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur omnis odio officia dolorem odit quaerat alias accusamus aut fuga pariatur! Distinctio mollitia iure consectetur aliquid fugit consequuntur eos. Iure, nostrum!Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur omnis odio officia dolorem odit quaerat alias accusamus aut fuga pariatur! Distinctio mollitia iure consectetur aliquid fugit consequuntur eos. Iure, nostrum!Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur omnis odio officia dolorem odit quaerat alias accusamus aut fuga pariatur! Distinctio mollitia iure consectetur aliquid fugit consequuntur eos. Iure, nostrum!');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `received`
--
ALTER TABLE `received`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `received`
--
ALTER TABLE `received`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
