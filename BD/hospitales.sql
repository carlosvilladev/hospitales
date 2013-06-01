-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 31-05-2013 a las 18:53:15
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `hospitales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE IF NOT EXISTS `medico` (
  `idMedico` int(11) NOT NULL AUTO_INCREMENT,
  `nombreMedico` varchar(45) DEFAULT NULL,
  `apellidoMedico` varchar(45) DEFAULT NULL,
  `codigoMedico` varchar(9) DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idMedico`),
  KEY `fk_Medico_Usuario1` (`Usuario_idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcar la base de datos para la tabla `medico`
--

INSERT INTO `medico` (`idMedico`, `nombreMedico`, `apellidoMedico`, `codigoMedico`, `estado`, `Usuario_idUsuario`) VALUES
(2, 'Carlos', 'Villa Mercado', '12345', 1, 2),
(3, 'Cesar', 'Tinoco', '1423', 2, 2),
(4, 'Juan', 'Leguizamon', '4321', 1, 2),
(5, 'Jose', 'Zapata', '512452', 2, 2),
(8, 'Juan ', 'Salvador Noriega', '514215', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE IF NOT EXISTS `orden` (
  `idOrden` int(11) NOT NULL AUTO_INCREMENT,
  `tipoOrden_idtipoOrden` int(11) NOT NULL,
  `recetaOrden` text,
  `detallesOrden` text,
  `Urgencia_idUrgencia` int(11) NOT NULL,
  PRIMARY KEY (`idOrden`,`tipoOrden_idtipoOrden`),
  KEY `fk_Orden_tipoOrden1` (`tipoOrden_idtipoOrden`),
  KEY `fk_Orden_Urgencia1` (`Urgencia_idUrgencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `orden`
--

INSERT INTO `orden` (`idOrden`, `tipoOrden_idtipoOrden`, `recetaOrden`, `detallesOrden`, `Urgencia_idUrgencia`) VALUES
(1, 1, ' Receta                                                                                   ', 'detalles\r\n                                                                                    ', 1),
(2, 1, 'asdasdasdasdas', 'dasdasdasdasdasda', 1),
(3, 1, 'ASASfafaf', 'aasfasfasfasf', 4),
(4, 1, 'asdasafd', 'fdsfdsdgsg', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
  `idPaciente` int(11) NOT NULL AUTO_INCREMENT,
  `nombrePaciente` varchar(45) DEFAULT NULL,
  `apellidoPaciente` varchar(45) DEFAULT NULL,
  `cedulaPaciente` varchar(30) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `EPS` varchar(60) NOT NULL,
  PRIMARY KEY (`idPaciente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcar la base de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`idPaciente`, `nombrePaciente`, `apellidoPaciente`, `cedulaPaciente`, `sexo`, `edad`, `EPS`) VALUES
(1, 'Carlos', 'Villa Mercado', '1143362651', 'M', 20, '123456789'),
(2, 'Cesar', 'Tinoco', '11433626', 'M', 21, '124324324'),
(3, 'John', 'Leguizamon', '123', 'M', 21, '4341'),
(4, 'Fulano', 'De tal', '124214', 'M', 23, '455354'),
(5, 'sdf', 'sdf', '45', 'M', 45, 'dsfsdf'),
(6, 'Cesar', 'Tinoco', '0', 'M', 21, '124324324'),
(7, 'Cesar', 'Tinoco', '1', 'M', 21, '124324324'),
(8, 'Jesus David', 'Villa Mercado', '2', 'M', 18, '12344');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recepcionista`
--

CREATE TABLE IF NOT EXISTS `recepcionista` (
  `idRecepcionista` int(11) NOT NULL AUTO_INCREMENT,
  `nomRecepcionista` varchar(45) DEFAULT NULL,
  `apellidoRecepcionista` varchar(45) DEFAULT NULL,
  `codRecepcionista` varchar(45) DEFAULT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idRecepcionista`),
  KEY `fk_Recepcionista_Usuario1` (`Usuario_idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `recepcionista`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `idRol` int(11) NOT NULL AUTO_INCREMENT,
  `nomRol` varchar(45) DEFAULT NULL,
  `codRol` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nomRol`, `codRol`) VALUES
(1, 'Admin', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoorden`
--

CREATE TABLE IF NOT EXISTS `tipoorden` (
  `idtipoOrden` int(11) NOT NULL AUTO_INCREMENT,
  `conceptoOrden` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`idtipoOrden`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `tipoorden`
--

INSERT INTO `tipoorden` (`idtipoOrden`, `conceptoOrden`) VALUES
(1, 'Traslado'),
(2, 'De alta'),
(3, 'Cirugia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `triage`
--

CREATE TABLE IF NOT EXISTS `triage` (
  `idTriage` int(11) NOT NULL AUTO_INCREMENT,
  `nivelNumTriage` int(11) DEFAULT NULL,
  `tipoTriage` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idTriage`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `triage`
--

INSERT INTO `triage` (`idTriage`, `nivelNumTriage`, `tipoTriage`) VALUES
(1, 1, 'Alto'),
(2, 2, 'Medio'),
(3, 3, 'Bajo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `urgencia`
--

CREATE TABLE IF NOT EXISTS `urgencia` (
  `idUrgencia` int(11) NOT NULL AUTO_INCREMENT,
  `fechaUrgencia` datetime DEFAULT NULL,
  `detallesUrgencia` text,
  `estado` int(11) NOT NULL,
  `Triage_idTriage` int(11) NOT NULL,
  `Paciente_idPaciente` int(11) NOT NULL,
  `Medico_idMedico` int(11) NOT NULL,
  PRIMARY KEY (`idUrgencia`),
  KEY `fk_Urgencia_Triage1` (`Triage_idTriage`),
  KEY `fk_Urgencia_Paciente1` (`Paciente_idPaciente`),
  KEY `fk_Urgencia_Medico1` (`Medico_idMedico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `urgencia`
--

INSERT INTO `urgencia` (`idUrgencia`, `fechaUrgencia`, `detallesUrgencia`, `estado`, `Triage_idTriage`, `Paciente_idPaciente`, `Medico_idMedico`) VALUES
(1, '2013-05-31 13:05:25', 'Estos son los detalles ', 2, 1, 1, 4),
(4, '2013-05-31 15:08:07', 'Detalles', 2, 1, 1, 2),
(5, '2013-05-31 15:23:10', 'asdasdasdasdsa', 2, 1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `userUsuario` varchar(45) DEFAULT NULL,
  `passUsuario` text,
  `Rol_idRol` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_Usuario_Rol1` (`Rol_idRol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `userUsuario`, `passUsuario`, `Rol_idRol`) VALUES
(2, 'kardotjs', '12345', 1);

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `medico_ibfk_1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `fk_Orden_tipoOrden1` FOREIGN KEY (`tipoOrden_idtipoOrden`) REFERENCES `tipoorden` (`idtipoOrden`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Orden_Urgencia1` FOREIGN KEY (`Urgencia_idUrgencia`) REFERENCES `urgencia` (`idUrgencia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `recepcionista`
--
ALTER TABLE `recepcionista`
  ADD CONSTRAINT `fk_Recepcionista_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `urgencia`
--
ALTER TABLE `urgencia`
  ADD CONSTRAINT `fk_Urgencia_Medico1` FOREIGN KEY (`Medico_idMedico`) REFERENCES `medico` (`idMedico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Urgencia_Paciente1` FOREIGN KEY (`Paciente_idPaciente`) REFERENCES `paciente` (`idPaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Urgencia_Triage1` FOREIGN KEY (`Triage_idTriage`) REFERENCES `triage` (`idTriage`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_Usuario_Rol1` FOREIGN KEY (`Rol_idRol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
