-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2017 a las 22:03:22
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_banco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `IDCLIENTE` int(11) NOT NULL,
  `IDENTIFICACION` varchar(20) NOT NULL,
  `NOMBRE` varchar(200) NOT NULL,
  `GENERO` varchar(1) NOT NULL,
  `SALARIO` double NOT NULL,
  `IDTIPOCREDITO` int(1) NOT NULL,
  `VALORPRESTAMO` double NOT NULL,
  `PLAZOPRESTAMO` int(11) NOT NULL,
  `IDTIPOESTADO` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocredito`
--

CREATE TABLE `estadocredito` (
  `IDTIPOESTADO` int(11) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `IDPAGO` int(11) NOT NULL,
  `IDENTIFICACION` varchar(20) NOT NULL,
  `CANTCUOTAS` int(11) NOT NULL,
  `CUOTAPAGADA` int(11) NOT NULL,
  `CUOTAPENDIENTE` int(11) NOT NULL,
  `VALORCUOTA` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocredito`
--

CREATE TABLE `tipocredito` (
  `IDTIPOCREDITO` int(1) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `PORCENTAJE` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosistema`
--

CREATE TABLE `usuariosistema` (
  `IDUSUARIO` int(11) NOT NULL,
  `IDENTIFICACION` int(10) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `USUARIOACCESO` varchar(50) NOT NULL,
  `CLAVEACCESSO` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`IDCLIENTE`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`IDPAGO`);

--
-- Indices de la tabla `usuariosistema`
--
ALTER TABLE `usuariosistema`
  ADD PRIMARY KEY (`IDUSUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `IDCLIENTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `IDPAGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `usuariosistema`
--
ALTER TABLE `usuariosistema`
  MODIFY `IDUSUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
