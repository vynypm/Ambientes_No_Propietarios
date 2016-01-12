-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-01-2016 a las 21:37:45
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `deber_13`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `nombre` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefono` int(10) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `contrasena` varchar(40) NOT NULL,
  `verif_contrasena` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`nombre`, `email`, `telefono`, `direccion`, `usuario`, `contrasena`, `verif_contrasena`) VALUES
('', '', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e'),
('Vinicio', 'vynypm@hotmail.com', 983834756, 'La Biloxi', 'Vini', '4d186321c1a7f0f354b297e8914ab240', '4d186321c1a7f0f354b297e8914ab240'),
('', '', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e'),
('t', 't', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e'),
('Geovanny', 'darwinpm_@hotmail.com', 987876543, '', 'vini', '4d186321c1a7f0f354b297e8914ab240', '4d186321c1a7f0f354b297e8914ab240'),
('v', 'omar_11jrr@hotmail.com', 2147483647, 'Ajavi', 'yo', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
('v', 'omar_11jrr@hotmail.com', 123456778, 'de', 'da', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
('guachamin', 'vynypm19@hotmail.com', 12345678, 'fredom', 'vin', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055'),
('', '', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e'),
('', '', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e'),
('2', '', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e'),
('', '', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'vynypm19@hotmail.com', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e'),
('', '', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'vynypm19@hotmail.com', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e'),
('', '', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e'),
('v', 'vynypm19@hotmail.com', 2147483647, 'de', 'as', 'f970e2767d0cfe75876ea857f92e319b', 'f970e2767d0cfe75876ea857f92e319b'),
('v', 'vynypm19@hotmail.com', 2147483647, 'de', 'as', 'f970e2767d0cfe75876ea857f92e319b', 'f970e2767d0cfe75876ea857f92e319b'),
('v', 'darwinpm_@hotmail.com', 123234545, 'dsa', 'asd', '7f6ffaa6bb0b408017b62254211691b5', '7f6ffaa6bb0b408017b62254211691b5'),
('v', 'darwinpm_@hotmail.com', 123234545, 'dsa', 'asd', '7f6ffaa6bb0b408017b62254211691b5', '7f6ffaa6bb0b408017b62254211691b5'),
('v', 'vynypm19@hotmail.com', 1234567, 're', 'jn', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
('v', 'vynypm19@hotmail.com', 1234567, 're', 'jn', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
('e', 'vynypm19@hotmail.com', 2123435545, 'fsd', 'ss', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
('e', 'vynypm19@hotmail.com', 2123435545, 'fsd', 'ss', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
('q', 'vynypm19@hotmail.com', 2147483647, 'fsd', 'awd', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
('q', 'vynypm19@hotmail.com', 2147483647, 'fsd', 'awd', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
('w', 'vynypm19@hotmail.com', 1213123123, '1dd', 'a', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
('w', 'vynypm19@hotmail.com', 1213123123, '1dd', 'a', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
