-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2015 a las 02:48:28
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `email` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `verif_contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`email`, `contrasena`, `verif_contrasena`) VALUES
('algo@algo.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234'),
('algo@algo.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234'),
('algo@algo.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234'),
('algo@algo.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234'),
('alg2o22@algo.com', '202cb962ac59075b964b07152d234b70', '123'),
('vynypm19@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '12345'),
('vynypm19@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '12345'),
('vynypm19@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '12345'),
('vynypm19@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '12345'),
('vynypm19@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '12345'),
('vynypm@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
('a@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
('vynypm@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
('vynypm@hotmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e'),
('vynypm@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
('vynypm@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
('vynypm@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'e10adc3949ba59abbe56e057f20f883e'),
('as@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
('as@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
('as@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
('t@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
('t@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
('t@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
('f@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
('f@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
('f@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
('f@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
('f@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
('f@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
('f@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
