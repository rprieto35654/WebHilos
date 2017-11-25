-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2017 a las 23:17:43
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webhilos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `Id_Ciudad` int(11) NOT NULL,
  `Id_Pais` int(11) NOT NULL,
  `V_NombrePais` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `Id_Contacto` int(11) NOT NULL,
  `Id_Ciudad` int(11) NOT NULL,
  `V_NombreContacto` varchar(70) NOT NULL,
  `V_ApellidoContacto` varchar(70) NOT NULL,
  `V_Telefono` varchar(70) NOT NULL,
  `V_Correo` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `Id_Pais` int(11) NOT NULL,
  `V_NombrePais` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id_Producto` int(11) NOT NULL,
  `Id_TipoProducto` int(11) NOT NULL,
  `V_NombreProducto` varchar(70) NOT NULL,
  `V_ValorProducto` varchar(70) NOT NULL,
  `V_Imagen` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproducto`
--

CREATE TABLE `tipoproducto` (
  `Id_TipoProducto` int(11) NOT NULL,
  `V_NombreProducto` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_Usuario` int(11) NOT NULL,
  `V_NombreUsuario` varchar(70) NOT NULL,
  `V_ApellidoUsuario` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`Id_Ciudad`),
  ADD UNIQUE KEY `Id_Ciudad` (`Id_Ciudad`),
  ADD KEY `Id_Pais` (`Id_Pais`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`Id_Contacto`),
  ADD UNIQUE KEY `Id_Contacto` (`Id_Contacto`),
  ADD KEY `Id_Ciudad` (`Id_Ciudad`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`Id_Pais`),
  ADD UNIQUE KEY `Id_Pais` (`Id_Pais`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id_Producto`),
  ADD UNIQUE KEY `Id_Producto` (`Id_Producto`),
  ADD KEY `Id_TipoProducto` (`Id_TipoProducto`);

--
-- Indices de la tabla `tipoproducto`
--
ALTER TABLE `tipoproducto`
  ADD PRIMARY KEY (`Id_TipoProducto`),
  ADD UNIQUE KEY `Id_TipoProducto` (`Id_TipoProducto`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`Id_Pais`) REFERENCES `pais` (`Id_Pais`);

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`Id_Ciudad`) REFERENCES `ciudad` (`Id_Ciudad`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`Id_TipoProducto`) REFERENCES `tipoproducto` (`Id_TipoProducto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
