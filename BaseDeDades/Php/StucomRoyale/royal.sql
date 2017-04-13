-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-04-2017 a las 03:28:47
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
  PRIMARY KEY (`name`),
  UNIQUE KEY `Image` (`Image`)
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
  `Image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`user`,`card`),
  KEY `fk_deck_2_idx` (`card`),
  KEY `fk_deck_3` (`Image`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `deck`
--

INSERT INTO `deck` (`user`, `card`, `level`, `Image`) VALUES
('admin', 'Golem-epic', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Golem-Epic.png'),
('admin', 'Pekka', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/pekka.png'),
('admin', 'X-bow-epic', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/X-Bow-Epic.png'),
('alo', 'Dark-prince', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/goblins.png'),
('alo', 'Goblin-hut-rare', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Hog-Rider-Rare.png'),
('alo', 'Goblins', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Prince-Epic.png'),
('andres.perez', 'Musketeer-rare', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Musketeer-Rare.png'),
('andres.perez', 'Pekka', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/pekka.png'),
('andres.perez', 'Prince-epic', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Prince-Epic.png'),
('conrado', 'Dark-prince', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/dark-prince.png'),
('conrado', 'Princess', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/princess.png'),
('conrado', 'X-bow-epic', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/X-Bow-Epic.png'),
('fe', 'Goblin-hut-rare', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Goblin-Hut-Rare.png'),
('fe', 'Goblins', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/goblins.png'),
('fe', 'Golem-epic', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Golem-Epic.png'),
('hh', 'Hog-rider-rare', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Hog-Rider-Rare.png'),
('hh', 'Mini-pekka-rare', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Mini-Pekka-Rare.png'),
('hh', 'Musketeer-rare', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Musketeer-Rare.png'),
('hola', 'Pekka', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/pekka.png'),
('hola', 'Prince-epic', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Prince-Epic.png'),
('hola', 'Princess', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/princess.png'),
('kk', 'Dark-prince', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/dark-prince.png'),
('kk', 'Goblin-hut-rare', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Goblin-Hut-Rare.png'),
('kk', 'X-bow-epic', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/X-Bow-Epic.png'),
('salo', 'Goblins', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/goblins.png'),
('salo', 'Golem-epic', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Golem-Epic.png'),
('salo', 'Hog-rider-rare', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Hog-Rider-Rare.png'),
('ww', 'Mini-pekka-rare', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Mini-Pekka-Rare.png'),
('ww', 'Musketeer-rare', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Musketeer-Rare.png'),
('ww', 'Pekka', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/pekka.png'),
('xx', 'Prince-epic', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/Prince-Epic.png'),
('xx', 'Princess', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/princess.png'),
('xx', 'X-bow-epic', 1, 'https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/X-Bow-Epic.png');

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
('admin', 'admin', 1, 0, 1),
('alo', 'alo', 0, 0, 1),
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
  ADD CONSTRAINT `fk_deck_2` FOREIGN KEY (`card`) REFERENCES `card` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_deck_3` FOREIGN KEY (`Image`) REFERENCES `card` (`Image`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
