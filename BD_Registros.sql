-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 15-03-2018 a las 16:52:41
-- Versión del servidor: 5.6.35
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `BD_Registros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Visitas`
--

CREATE TABLE `Visitas` (
  `id_visitas` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `edad` int(11) NOT NULL,
  `genero` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Visitas`
--

INSERT INTO `Visitas` (`id_visitas`, `nombre`, `edad`, `genero`) VALUES
(1, 'Jorge', 21, 'Hombre'),
(2, 'Jorge', 21, 'Hombre'),
(3, 'Jorge', 21, 'Hombre'),
(4, 'Jorge', 21, 'Hombre'),
(5, 'Cinthia', 21, 'Mujer'),
(6, 'Cinthia', 21, 'Mujer'),
(7, 'Kevin', 31, 'Hombre'),
(8, '', 21, 'Mujer'),
(9, '', 21, 'Mujer'),
(10, '', 21, 'Mujer'),
(11, '', 21, 'Mujer');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Visitas`
--
ALTER TABLE `Visitas`
  ADD PRIMARY KEY (`id_visitas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Visitas`
--
ALTER TABLE `Visitas`
  MODIFY `id_visitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;