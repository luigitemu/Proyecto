-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-05-2018 a las 02:12:04
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_google+`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comentarios`
--

DROP TABLE IF EXISTS `tbl_comentarios`;
CREATE TABLE IF NOT EXISTS `tbl_comentarios` (
  `codigo_coment` int(11) NOT NULL AUTO_INCREMENT,
  `comentarios` varchar(1000) NOT NULL,
  `fechapublicacion` date NOT NULL,
  `ind_post` int(11) NOT NULL,
  PRIMARY KEY (`codigo_coment`),
  KEY `fk_tbl_comentarios_tbl_post1_idx` (`ind_post`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comnun_user`
--

DROP TABLE IF EXISTS `tbl_comnun_user`;
CREATE TABLE IF NOT EXISTS `tbl_comnun_user` (
  `tbl_codigo_usr` int(11) NOT NULL,
  `tbl_codigo_comun` int(11) NOT NULL,
  PRIMARY KEY (`tbl_codigo_usr`,`tbl_codigo_comun`),
  KEY `fk_tbl_usuarios_has_tbl_comunidades_tbl_comunidades1_idx` (`tbl_codigo_comun`),
  KEY `fk_tbl_usuarios_has_tbl_comunidades_tbl_usuarios1_idx` (`tbl_codigo_usr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comunidades`
--

DROP TABLE IF EXISTS `tbl_comunidades`;
CREATE TABLE IF NOT EXISTS `tbl_comunidades` (
  `codigo_comunidades` int(11) NOT NULL AUTO_INCREMENT,
  `comunidad` varchar(60) NOT NULL,
  PRIMARY KEY (`codigo_comunidades`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_comunidades`
--

INSERT INTO `tbl_comunidades` (`codigo_comunidades`, `comunidad`) VALUES
(1, 'Publico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_generos`
--

DROP TABLE IF EXISTS `tbl_generos`;
CREATE TABLE IF NOT EXISTS `tbl_generos` (
  `codigo_genero` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_generos`
--

INSERT INTO `tbl_generos` (`codigo_genero`, `genero`) VALUES
(1, 'Femenino'),
(2, 'Masculino'),
(3, 'Otros'),
(4, 'Narniano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_post`
--

DROP TABLE IF EXISTS `tbl_post`;
CREATE TABLE IF NOT EXISTS `tbl_post` (
  `codigo_post` int(11) NOT NULL AUTO_INCREMENT,
  `publicacion` varchar(1000) NOT NULL,
  `publicacion_usuario` int(11) NOT NULL,
  `comunidades` int(11) NOT NULL,
  PRIMARY KEY (`codigo_post`),
  KEY `fk_tbl_post_tbl_usuarios_idx` (`publicacion_usuario`),
  KEY `fk_tbl_post_tbl_comunidades1_idx` (`comunidades`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_post`
--

INSERT INTO `tbl_post` (`codigo_post`, `publicacion`, `publicacion_usuario`, `comunidades`) VALUES
(1, 'Hola Amigos XD', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_seguidores`
--

DROP TABLE IF EXISTS `tbl_seguidores`;
CREATE TABLE IF NOT EXISTS `tbl_seguidores` (
  `seguidor` int(11) NOT NULL,
  `usuariolog` int(11) NOT NULL,
  KEY `fk_tbl_seguidores_tbl_usuarios1_idx` (`seguidor`),
  KEY `fk_tbl_seguidores_tbl_usuarios2_idx` (`usuariolog`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_seguidores`
--

INSERT INTO `tbl_seguidores` (`seguidor`, `usuariolog`) VALUES
(6, 2),
(2, 6),
(2, 7),
(2, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_siguiendo`
--

DROP TABLE IF EXISTS `tbl_siguiendo`;
CREATE TABLE IF NOT EXISTS `tbl_siguiendo` (
  `siguiendo` int(11) NOT NULL,
  `usuariolog` int(11) NOT NULL,
  KEY `fk_tbl_siguiendo_tbl_usuarios1_idx` (`siguiendo`),
  KEY `fk_tbl_siguiendo_tbl_usuarios2_idx` (`usuariolog`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_siguiendo`
--

INSERT INTO `tbl_siguiendo` (`siguiendo`, `usuariolog`) VALUES
(6, 2),
(7, 2),
(8, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
  `codigo_usr` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `tel` int(11) NOT NULL,
  `nacimiento` date NOT NULL,
  `url_pef` varchar(1000) NOT NULL,
  `genero` int(11) NOT NULL,
  PRIMARY KEY (`codigo_usr`),
  KEY `fk_tbl_usuarios_tbl_generos1_idx` (`genero`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`codigo_usr`, `nombre`, `apellido`, `clave`, `correo`, `tel`, `nacimiento`, `url_pef`, `genero`) VALUES
(2, 'Luis Armando', 'Tejada Murillo', '9bb3dcbc7a72120640eb0ad6edf7dfcedce38f9e', 'luartemu@gmail.com', 95444687, '2018-05-08', '../Img/luis.png', 2),
(6, 'Jose', 'Perez', '9117b25df2828b64e1c42c8d23fd86d07657388c', 'jperez@gmail.com', 95444687, '2018-05-02', '../Img/prof1.png', 4),
(7, 'Ana Paula', 'Rivera Posadas', '902a8cac7e6b5f0767259707aae4f70576ef502c', 'anarivera@gmail.com', 95444687, '2018-01-31', '../Img/ana.png', 1),
(8, 'piter', 'el anguila', 'bcdcb29ed2aab16d48c11485264df665e906bdd9', 'pitpit@gmail.com', 90000000, '2018-12-31', ' ../Img/prof7.png', 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_comentarios`
--
ALTER TABLE `tbl_comentarios`
  ADD CONSTRAINT `fk_tbl_comentarios_tbl_post1` FOREIGN KEY (`ind_post`) REFERENCES `tbl_post` (`codigo_post`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_comnun_user`
--
ALTER TABLE `tbl_comnun_user`
  ADD CONSTRAINT `fk_tbl_usuarios_has_tbl_comunidades_tbl_comunidades1` FOREIGN KEY (`tbl_codigo_comun`) REFERENCES `tbl_comunidades` (`codigo_comunidades`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_usuarios_has_tbl_comunidades_tbl_usuarios1` FOREIGN KEY (`tbl_codigo_usr`) REFERENCES `tbl_usuarios` (`codigo_usr`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD CONSTRAINT `fk_tbl_post_tbl_comunidades1` FOREIGN KEY (`comunidades`) REFERENCES `tbl_comunidades` (`codigo_comunidades`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_post_tbl_usuarios` FOREIGN KEY (`publicacion_usuario`) REFERENCES `tbl_usuarios` (`codigo_usr`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_seguidores`
--
ALTER TABLE `tbl_seguidores`
  ADD CONSTRAINT `fk_tbl_seguidores_tbl_usuarios1` FOREIGN KEY (`seguidor`) REFERENCES `tbl_usuarios` (`codigo_usr`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_seguidores_tbl_usuarios2` FOREIGN KEY (`usuariolog`) REFERENCES `tbl_usuarios` (`codigo_usr`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_siguiendo`
--
ALTER TABLE `tbl_siguiendo`
  ADD CONSTRAINT `fk_tbl_siguiendo_tbl_usuarios1` FOREIGN KEY (`siguiendo`) REFERENCES `tbl_usuarios` (`codigo_usr`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_siguiendo_tbl_usuarios2` FOREIGN KEY (`usuariolog`) REFERENCES `tbl_usuarios` (`codigo_usr`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `fk_tbl_usuarios_tbl_generos1` FOREIGN KEY (`genero`) REFERENCES `tbl_generos` (`codigo_genero`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
