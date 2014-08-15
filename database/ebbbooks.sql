-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 15-08-2014 a las 12:18:32
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `ebbbooks`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `autor`
-- 

CREATE TABLE `autor` (
  `idAutor` int(11) NOT NULL auto_increment,
  `nombreCompleto` varchar(45) NOT NULL,
  `bio` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY  (`idAutor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `autor`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `cabecera_factura`
-- 

CREATE TABLE `cabecera_factura` (
  `idCabecera` int(11) NOT NULL auto_increment,
  `fk_usuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `total_pagar` double NOT NULL,
  PRIMARY KEY  (`idCabecera`),
  KEY `fk_usuario` (`fk_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `cabecera_factura`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `coleccion`
-- 

CREATE TABLE `coleccion` (
  `fk_perfil` int(11) NOT NULL,
  `fk_ebook` int(11) NOT NULL,
  `secuencia` int(11) NOT NULL,
  KEY `fk_perfil` (`fk_perfil`,`fk_ebook`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `coleccion`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `detalle_factura`
-- 

CREATE TABLE `detalle_factura` (
  `idDetalle` int(11) NOT NULL auto_increment,
  `fk_cabeceraFactura` int(11) NOT NULL,
  `linea` int(11) NOT NULL,
  PRIMARY KEY  (`idDetalle`),
  KEY `fk_cabeceraFactura` (`fk_cabeceraFactura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `detalle_factura`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ebook`
-- 

CREATE TABLE `ebook` (
  `idEbook` int(11) NOT NULL auto_increment,
  `fk_autor` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `idioma` varchar(45) NOT NULL,
  `isbn` varchar(45) NOT NULL,
  `editorial` varchar(45) NOT NULL,
  `num_paginas` int(4) NOT NULL,
  `traductor` varchar(45) NOT NULL,
  `precio` double NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `portada` varchar(50) NOT NULL,
  `resena` text NOT NULL,
  PRIMARY KEY  (`idEbook`),
  KEY `fk_autor` (`fk_autor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `ebook`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `libreria`
-- 

CREATE TABLE `libreria` (
  `idLibreria` int(11) NOT NULL auto_increment,
  `fk_perfil` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY  (`idLibreria`),
  KEY `fk_perfil` (`fk_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `libreria`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `perfil`
-- 

CREATE TABLE `perfil` (
  `idPerfil` int(11) NOT NULL auto_increment,
  `fk_usuario` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `infoUsuario` text NOT NULL,
  `genero` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `pais` varchar(45) NOT NULL,
  PRIMARY KEY  (`idPerfil`),
  KEY `fk_usuario` (`fk_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `perfil`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuario`
-- 

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL auto_increment,
  `nombre` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  PRIMARY KEY  (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `usuario`
-- 


-- 
-- Filtros para las tablas descargadas (dump)
-- 

-- 
-- Filtros para la tabla `ebook`
-- 
ALTER TABLE `ebook`
  ADD CONSTRAINT `ebook_ibfk_1` FOREIGN KEY (`fk_autor`) REFERENCES `autor` (`idAutor`);
