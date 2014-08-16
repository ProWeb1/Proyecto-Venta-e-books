-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 16-08-2014 a las 07:04:28
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
  `bio` text,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY  (`idAutor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

-- 
-- Volcar la base de datos para la tabla `autor`
-- 

INSERT INTO `autor` VALUES (1, 'Anna Godbersen', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (2, 'Kelley Armstrong', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (3, 'Sarah Cross', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (4, 'Patrick Rothfuss', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (5, 'Cayla Kluver', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (6, 'Juliet Dark', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (7, 'Katie Alender', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (8, 'Amber Lynn Natusch', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (9, 'Kiersten White', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (10, 'Tahereh Mafi', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (11, 'Alivia Anders', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (12, 'Erika Johansen', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (13, 'Rosamund Hodge', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (14, 'Amber Argyle', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (15, 'Catherine Fisher', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (16, 'N.K. Jemisin', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (17, 'Danielle L. Jensen', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (18, 'Veronica Rossi', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (19, 'Mary E. Pearson', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (20, 'Donna Tartt', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (21, 'Neil Gaiman', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (22, 'Freda Warrington', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (23, 'Deborah Harkness', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (24, 'Paul Hoffman', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (25, 'Holly Black', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (26, 'Brenna Yovanoff', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (27, 'Elizabeth May', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (28, 'Christina Lauren', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (29, 'Colleen Gleason', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (30, 'Alex Flinn', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (31, 'Kiera Cass', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (32, 'Sarah Raughley', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (33, 'Kristen Callihan', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (34, 'Marissa Meyer', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (35, 'Amy Ewing', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (36, 'Carolyn Turgeon', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (37, 'Nalini Singh', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (38, 'Kady Cross', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (39, 'Ilsa J. Bick', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (40, 'Patricia Leever', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (41, 'Laini Taylor', NULL, 'images/autores/');
INSERT INTO `autor` VALUES (42, 'Lauren Skidmore', NULL, 'images/autores/');

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
  KEY `fk_perfil` (`fk_perfil`),
  KEY `fk_ebook` (`fk_ebook`)
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
  `resena` text,
  PRIMARY KEY  (`idEbook`),
  KEY `fk_autor` (`fk_autor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

-- 
-- Volcar la base de datos para la tabla `ebook`
-- 

INSERT INTO `ebook` VALUES (1, 1, 'Envy', 'Español', '0061345725', 'HarperCollins', 405, 'Rafael Ramírez', 8.03, 'Drama', 'images/portadas/1.jpg', NULL);
INSERT INTO `ebook` VALUES (2, 2, 'Tales of the Otherworld', 'Español', '0553807889', 'Bantam', 387, 'Marina Duarte', 7.99, 'Antopología', 'images/portadas/2.jpg', NULL);
INSERT INTO `ebook` VALUES (3, 3, 'Kill me Softly', 'Español', '1606843230', 'EgmontUSA', 336, 'Rafael Ramírez', 6.99, 'Suspenso', 'images/portadas/3.jpg', NULL);
INSERT INTO `ebook` VALUES (4, 4, 'The Wise Man''s Fear', 'Español', '0756404738', 'DAW Books', 994, 'Ana Valencia', 5.99, 'Ficción', 'images/portadas/4.jpg', '«Todo hombre sabio teme tres cosas: la tormenta en el mar, la noche sin luna y la ira de un hombre amable.»\r\nEl hombre había desaparecido. El mito no. Músico, mendigo, ladrón, estudiante, mago, trotamundos, héroe y asesino, Kvothe había borrado su rastro. Y ni siquiera ahora que le han encontrado, ni siquiera ahora que las tinieblas invaden los rincones del mundo, está dispuesto a regresar. Pero su historia prosigue, la aventura continúa, y Kvothe seguirá contándola para revelar la verdad tras la leyenda.\r\nEs la mañana del segundo día, y tres hombres se sientan a una mesa de Roca de Guía: un posadero de cabello rojo como una llama, su pupilo Bast y Cronista, que moja la pluma en el tintero y se prepara a transcribir... El temor de un hombre sabio empieza donde terminaba El nombre del viento: en la Universidad. De la que luego Kvothe se verá obligado a partir en pos del nombre del viento, en pos de la aventura, en pos de esas historias que aparecen en libros o se cuentan junto a una hoguera del camino o en una taberna, en pos de la antigua orden de los caballeros Amyr y, sobre todo, en pos de los Chandrian.\r\nSu viaje le lleva a la corte plagada de intrigas del maer Alveron en el reino de Vintas, al bosque de Eld en persecución de unos bandidos, a las colinas azotadas por las tormentas que rodean la ciudad de Ademre, a los confines crepusculares del reino de los Fata. Y cada vez parece que tiene algo más cerca la solución del misterio de los Chandrian, y su venganza.\r\n');
INSERT INTO `ebook` VALUES (5, 5, 'Allegiance', 'Español', '0373210434', 'HarlequinTeen', 494, 'Laura Rodríguez', 7.39, 'Historico', 'images/portadas/5.jpg', NULL);
INSERT INTO `ebook` VALUES (6, 6, 'Angel Stone', 'Español', '0867233154', 'Ballantine Books', 288, 'Luis Calle', 9.99, 'Romance', 'images/portadas/6.jpg', NULL);
INSERT INTO `ebook` VALUES (7, 7, 'Bad Girls Don''t Die', 'Español', '0183015265', 'Disney Hyperion ', 352, 'Marina Duarte', 6.98, 'Paranormal', 'images/portadas/7.jpg', NULL);
INSERT INTO `ebook` VALUES (8, 8, 'Undertow', 'Español', '9780062024', 'Amber Lynn Natusch', 227, 'Enrique Gallegos', 3.99, 'Juvenil', 'images/portadas/8.jpg', NULL);
INSERT INTO `ebook` VALUES (9, 9, 'The Chaos of the Stars', 'Español', '0062135929', 'HarperTeen', 227, 'Enrique Gallegos', 9.78, 'Fantasía', 'images/portadas/9.jpg', NULL);
INSERT INTO `ebook` VALUES (10, 10, 'Ignite Me', 'Español', '9780062284', 'HarperCollins', 409, 'Marina Duarte', 9.99, 'Fantasía', 'images/portadas/10.jpg', NULL);
INSERT INTO `ebook` VALUES (11, 11, 'A Shard of Ice', 'Español', '0991194713', 'Red Alice Press', 308, 'Marina Duarte', 3.99, 'Fantasía', 'images/portadas/11.jpg', NULL);
INSERT INTO `ebook` VALUES (12, 12, 'The Queen of the Tearling', 'Español', '0593072693', 'Bantam Press', 448, 'Laura Rodríguez', 9.99, 'Fantasía', 'images/portadas/12.jpg', NULL);
INSERT INTO `ebook` VALUES (13, 13, 'Cruel Beauty', 'Español', '0062224735', 'Balzer + Bray', 342, 'Enrique Gallegos', 8.89, 'Fantasía', 'images/portadas/13.jpg', NULL);
INSERT INTO `ebook` VALUES (14, 14, 'Witch Born', 'Español', '0985739401', 'Starling Publishing', 330, 'Rafael Ramírez', 3.99, 'Fantasía', 'images/portadas/14.jpg', NULL);
INSERT INTO `ebook` VALUES (15, 15, 'Incarceron', 'Español', '0340893605', 'Hodder Children''s', 458, 'Enrique Gallegos', 7.99, 'Fantasía', 'images/portadas/15.jpg', 'Imagina una prisión tan grande que contiene celdas y galerías, bosques, ciudades y mares. Imagina un prisionero sin recuerdos: Imagina una joven condenada a un matrimonio pactado y viviendo en una sociedad donde el tiempo se quedó anclado en el siglo diecisiete y que está vigilado por unos sofisticados series de inteligencia artificial y robot.\r\nIncarceron es la prisión, Finn es el preso y Claudia vive fuera, en ese extraño mundo donde nadie sabe nada de Incarceron. ¿Pero qué pasaría si Claudia consiguiera un día comunicarse con Finn a través de un extraño cristal y estos empezaran a compartir algo más que amistad?\r\nUNA PRISIÓN COMO NO HAY OTRA…\r\nUna aventura fascinante contra el tiempo, que recrea un mundo imaginario sumamente original y que hace de su autora una de las mejores plumas de la narrativa Young Adult actual.');
INSERT INTO `ebook` VALUES (16, 16, 'The Hundred Thousand Kingdoms', 'Español', '0316043915', 'Hachette Book Group Orbit', 427, 'Rafael Ramírez', 6.99, 'Fantasía', 'images/portadas/16.jpg', NULL);
INSERT INTO `ebook` VALUES (17, 17, 'Stolen Songbird', 'Español', '1908844965', 'Strange Chemistry', 469, 'Ana Valencia', 5.99, 'Fantasía', 'images/portadas/17.jpg', NULL);
INSERT INTO `ebook` VALUES (18, 18, 'Into the Still Blue', 'Español', '0062072099', 'HarperCollins', 392, 'Laura Rodríguez', 2.99, 'Fantasía', 'images/portadas/18.jpg', NULL);
INSERT INTO `ebook` VALUES (19, 19, 'The Kiss of Deception ', 'Español', '9780316043', 'Henry Holt', 492, 'Luis Calle', 8.99, 'Fantasía', 'images/portadas/19.jpg', NULL);
INSERT INTO `ebook` VALUES (20, 10, 'Fracture Me', 'Español', '0062284835', 'HarperCollins', 62, 'Ana Valencia', 2.99, 'Fantasía', 'images/portadas/20.jpg', NULL);
INSERT INTO `ebook` VALUES (21, 20, 'The Goldfinch', 'Español', '0316055433', 'Little, Brown and Company', 771, 'Laura Rodríguez', 10.74, 'Ficción', 'images/portadas/21.jpg', NULL);
INSERT INTO `ebook` VALUES (22, 21, 'American Gods', 'Español', '0747263744', 'Headline Review', 656, 'Rafael Ramírez', 5.99, 'Ficción', 'images/portadas/22.jpg', NULL);
INSERT INTO `ebook` VALUES (23, 22, 'A Taste of Blood Wine', 'Español', '1781167052', 'Titan Book', 501, 'Enrique Gallegos', 8.99, 'Ficción', 'images/portadas/23.jpg', NULL);
INSERT INTO `ebook` VALUES (24, 23, 'The Book of Life', 'Español', '0670025593', 'Viking Adult', 561, 'Marina Duarte', 11.99, 'Ficción', 'images/portadas/24.jpg', NULL);
INSERT INTO `ebook` VALUES (25, 24, 'The Left Hand of God', 'Español', '0718155181', 'Michael Joseph', 436, 'Ana Valencia', 7.44, 'Ficción', 'images/portadas/25.jpg', NULL);
INSERT INTO `ebook` VALUES (26, 25, 'The Darkest Part of the Forest', 'Español', '0316213071', 'Little, Brown & Company', 336, 'Rafael Ramírez', 9.99, 'Ficción', 'images/portadas/26.jpg', NULL);
INSERT INTO `ebook` VALUES (27, 4, 'The Name of the Wind', 'Español', '0756404075', 'Penguin Group', 662, 'Marina Duarte', 4.99, 'Ficción', 'images/portadas/27.jpg', NULL);
INSERT INTO `ebook` VALUES (28, 26, 'The Replacement', 'Español', '1595143378', 'Penguin Group', 343, 'Rafael Ramírez', 7.69, 'Ficción', 'images/portadas/28.jpg', NULL);
INSERT INTO `ebook` VALUES (29, 21, 'The Ocean at the End of the Lane ', 'Español', '0062255657', 'William Morrow Books', 181, 'Enrique Gallegos', 7.99, 'Ficción', 'images/portadas/29.jpg', NULL);
INSERT INTO `ebook` VALUES (30, 27, 'The Falconer ', 'Español', '1452114234', 'Chronicle Books', 378, 'Ana Valencia', 9.99, 'Ficción', 'images/portadas/30.jpg', NULL);
INSERT INTO `ebook` VALUES (31, 28, 'Sublime', 'Español', '1481413708', 'Simon & Schuster', 336, 'Luis Calle', 9.78, 'Ficción', 'images/portadas/31.jpg', NULL);
INSERT INTO `ebook` VALUES (32, 29, 'The Clockwork Scarab', 'Español', '1452134685', 'Chronicle Books', 356, 'Marina Duarte', 9.39, 'Ficción', 'images/portadas/32.jpg', NULL);
INSERT INTO `ebook` VALUES (33, 14, 'Witch Fall', 'Español', '0985739460', 'Starling Publishing', 340, 'Luis Calle', 3.99, 'Fantasía', 'images/portadas/33.jpg', NULL);
INSERT INTO `ebook` VALUES (34, 30, 'Towering', 'Español', '0062024175', 'HarperTeen', 293, 'Marina Duarte', 8.36, 'Juvenil', 'images/portadas/34.jpg', NULL);
INSERT INTO `ebook` VALUES (35, 31, 'The Elite', 'Español', '0062059963', 'HarperTeen', 336, 'Rafael Ramírez', 5.95, 'Ficción', 'images/portadas/35.jpg', 'De las treinta y cinco chicas llegaron al palacio para competir en la Selección. Todas menos seis han sido devueltas a sus hogares. Y solo una conseguirá casarse con el príncipe Maxon y ser coronada princesa de Illea. America todavía no está segura de hacia dónde se inclina su corazón.\r\nCuando está con Maxon, se ve envuelta en un romance nuevo y que la deja sin aliento, y ni siquiera puede imaginar estar con nadie más. Pero cuando ve a Aspen en los alrededores de palacio, los recuerdos de la vida que planeaban tener juntos se agolpan en su memoria. El grupo de chicas que llegaron a palacio se ha visto reducido a la Élite de seis, y cada una de ellas va a hacer todo lo posible por ganarse a Maxon. El tiempo se acaba y America tiene que tomar una decisión.\r\nSin embargo, cuando ya cree que ha llegado a la conclusión definitiva, un suceso devastador hace que se lo vuelva a plantear todo de nuevo. Y mientras lucha por averiguar dónde está su fututo, los rebeldes violentos que quieren derrocar la monarquía se hacen cada vez más fuertes y sus planes podrían acabar con cualquier aspiración que America pudiera tener de un final feliz.');
INSERT INTO `ebook` VALUES (36, 32, 'Feather Bound', 'Español', '9780061345', 'Strange Chemistry', 300, 'Luis Calle', 3.6, 'Suspenso', 'images/portadas/36.jpg', NULL);
INSERT INTO `ebook` VALUES (37, 33, 'The Darkest London', 'Español', '1455508594', 'Forever', 372, 'Laura Rodríguez', 5.59, 'Romance', 'images/portadas/37.jpg', NULL);
INSERT INTO `ebook` VALUES (38, 34, 'Cress', 'Español', '0312642970', 'Feiwel & Friends', 550, 'Enrique Gallegos', 8.89, 'Fantasía', 'images/portadas/38.jpg', NULL);
INSERT INTO `ebook` VALUES (39, 29, 'The Spiritglass Charade', 'Español', '1452110719', 'Chronicle Books', 360, 'Ana Valencia', 9.39, 'Ficción', 'images/portadas/39.jpg', NULL);
INSERT INTO `ebook` VALUES (40, 35, 'Jewel', 'Español', '0062235796', 'HarperTeen', 358, 'Marina Duarte', 8.89, 'Juvenil', 'images/portadas/40.jpg', NULL);
INSERT INTO `ebook` VALUES (41, 31, 'The Selection', 'Español', '0062059939', 'HarperTeen', 336, 'Luis Calle', 2.99, 'Ficción', 'images/portadas/41.jpg', 'Para treinta y cinco chicas, La Selección es una oportunidad que solo se presenta una vez en la vida. La oportunidad de escapar de la vida que les ha tocado por nacer en una determinada familia. La oportunidad de que las trasladen a un mundo de trajes preciosos y joyas que no tienen precio. La oportunidad de vivir en un palacio y de competir por el corazón del guapísimo príncipe Maxon.\r\nSin embargo, para America Singer, ser seleccionada es una pesadilla porque significa alejarse de su amor secreto, Aspen, quien pertenece a una casta inferior a la de ella; y también abandonar su hogar para pelear por una corona que no desea y vivir en un palacio que está bajo la constante amenaza de ataques violentos por parte de los rebeldes.\r\nEs entonces cuando America conoce al príncipe Maxon. Poco a poco, se empieza a cuestionar los planes que ella había hecho para su vida y se da cuenta de que la vida con la que siempre soñó puede no poder compararse con el futuro que nunca se atrevió si quiera a imaginar.');
INSERT INTO `ebook` VALUES (42, 36, 'Mermaid', 'Español', '0307589978', 'Crown Publishing Group', 240, 'Luis Calle', 7.99, 'Fantasía', 'images/portadas/42.jpg', NULL);
INSERT INTO `ebook` VALUES (43, 37, 'Archangel''s Legion', 'Español', '0425251241', 'Jove', 374, 'Ana Valencia', 6.83, 'Ficción', 'images/portadas/43.jpg', NULL);
INSERT INTO `ebook` VALUES (44, 38, 'The Girl in the Steel Corset', 'Español', '0373210337', 'Harlequin Teen', 473, 'Enrique Gallegos', 7.99, 'Fantasía', 'images/portadas/44.jpg', NULL);
INSERT INTO `ebook` VALUES (45, 39, 'White Space', 'Español', '0062235591', 'Egmont USA', 560, 'Laura Rodríguez', 9.99, 'Fantasía', 'images/portadas/45.jpg', NULL);
INSERT INTO `ebook` VALUES (46, 40, 'Divinity', 'Español', '9781623429', 'Omnific Publishing', 200, 'Laura Rodríguez', 2.99, 'Juvenil', 'images/portadas/46.jpg', NULL);
INSERT INTO `ebook` VALUES (47, 41, 'Dreams of Gods & Monsters', 'Español', ' 0316134074', 'Little, Brown & Company', 613, 'Marina Duarte', 11.73, 'Ficción', 'images/portadas/47.jpg', NULL);
INSERT INTO `ebook` VALUES (48, 42, 'What is Hidden', 'Español', '1462114296', 'Cedar Fort Publishing', 256, 'Enrique Gallegos', 6.49, 'Suspenso', 'images/portadas/48.jpg', NULL);

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
  `infoUsuario` text,
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
-- Filtros para la tabla `cabecera_factura`
-- 
ALTER TABLE `cabecera_factura`
  ADD CONSTRAINT `cabecera_factura_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`idUsuario`);

-- 
-- Filtros para la tabla `coleccion`
-- 
ALTER TABLE `coleccion`
  ADD CONSTRAINT `coleccion_ibfk_1` FOREIGN KEY (`fk_perfil`) REFERENCES `perfil` (`idPerfil`),
  ADD CONSTRAINT `coleccion_ibfk_2` FOREIGN KEY (`fk_ebook`) REFERENCES `ebook` (`idEbook`);

-- 
-- Filtros para la tabla `detalle_factura`
-- 
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `detalle_factura_ibfk_1` FOREIGN KEY (`fk_cabeceraFactura`) REFERENCES `cabecera_factura` (`idCabecera`);

-- 
-- Filtros para la tabla `ebook`
-- 
ALTER TABLE `ebook`
  ADD CONSTRAINT `ebook_ibfk_1` FOREIGN KEY (`fk_autor`) REFERENCES `autor` (`idAutor`);

-- 
-- Filtros para la tabla `libreria`
-- 
ALTER TABLE `libreria`
  ADD CONSTRAINT `libreria_ibfk_1` FOREIGN KEY (`fk_perfil`) REFERENCES `perfil` (`idPerfil`);

-- 
-- Filtros para la tabla `perfil`
-- 
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`idUsuario`);
