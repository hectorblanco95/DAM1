-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-04-2017 a las 18:01:26
-- Versión del servidor: 5.5.54-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `royal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `name` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `rarity` varchar(20) NOT NULL,
  `hitpoints` int(11) NOT NULL,
  `damage` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `Image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `card`
--

INSERT INTO `card` (`name`, `type`, `rarity`, `hitpoints`, `damage`, `cost`, `Image`) VALUES
('Dark-prince', 'tropa', 'comun', 9, 9, 4, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/dark-prince.png'),
('Goblin-hut-rare', 'hechizo', 'especial', 10, 10, 5, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Goblin-Hut-Rare.png'),
('Goblins', 'tropa', 'comun', 5, 5, 2, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/goblins.png'),
('Golem-epic', 'tropa', 'legendaria', 17, 17, 8, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Golem-Epic.png'),
('Hog-rider-rare', 'hechizo', 'comun', 9, 9, 4, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Hog-Rider-Rare.png'),
('Mini-pekka-rare', 'estructura', 'especial', 9, 9, 4, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Mini-Pekka-Rare.png'),
('Musketeer-rare', 'estructura', 'epica', 10, 10, 5, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Musketeer-Rare.png'),
('Pekka', 'tropa', 'legendaria', 17, 17, 8, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/pekka.png'),
('Prince-epic', 'tropa', 'comun', 10, 10, 5, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Prince-Epic.png'),
('Princess', 'hechizo', 'especial', 7, 7, 3, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/princess.png'),
('X-bow-epic', 'estructura', 'legendaria', 12, 12, 6, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/X-Bow-Epic.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deck`
--

CREATE TABLE IF NOT EXISTS `deck` (
  `user` varchar(20) NOT NULL,
  `card` varchar(30) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`user`,`card`),
  KEY `fk_deck_2_idx` (`card`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` int(11) NOT NULL,
  `wins` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`username`, `password`, `type`, `wins`, `level`) VALUES
('1', '1', 0, 0, 1),
('12', '1', 0, 0, 1),
('13', '13', 0, 0, 1),
('14', '14', 0, 0, 1),
('15', '15', 0, 0, 1),
('16', '1', 0, 0, 1),
('17', '1', 0, 0, 1),
('18', '18', 0, 0, 1),
('2', '2', 0, 0, 1),
('3', '3', 0, 0, 1),
('4', '4', 0, 0, 1),
('5', '5', 0, 0, 1),
('6', '6', 0, 0, 1),
('7', '7', 0, 0, 1),
('8', '8', 0, 0, 1),
('9', '9', 0, 0, 1),
('aa', 'aa', 0, 0, 1),
('admin', 'admin', 1, 0, 1),
('andres.perez', '123456', 0, 0, 1),
('conrado', '1234', 0, 0, 1),
('fe', 'fe', 0, 0, 1),
('hh', 'hh', 0, 0, 1),
('hola', '123456', 1, 0, 1),
('kk', 'kk', 0, 0, 1),
('salo', 'salo', 0, 0, 1),
('ww', 'ww', 0, 0, 1),
('xx', 'xx', 0, 0, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `deck`
--
ALTER TABLE `deck`
  ADD CONSTRAINT `fk_deck_1` FOREIGN KEY (`user`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_deck_2` FOREIGN KEY (`card`) REFERENCES `card` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
