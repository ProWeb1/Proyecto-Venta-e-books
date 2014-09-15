-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Sep 15, 2014 at 01:21 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `ebbbooks`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `autor`
-- 

CREATE TABLE `autor` (
  `idAutor` int(11) NOT NULL auto_increment,
  `nombreCompleto` varchar(45) NOT NULL,
  `foto` varchar(45) NOT NULL,
  PRIMARY KEY  (`idAutor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

-- 
-- Dumping data for table `autor`
-- 

INSERT INTO `autor` VALUES (1, 'Anna Godbersen', 'images/autores/1.jpg');
INSERT INTO `autor` VALUES (2, 'Kelley Armstrong', 'images/autores/2.jpg');
INSERT INTO `autor` VALUES (3, 'Sarah Cross', 'images/autores/3.jpg');
INSERT INTO `autor` VALUES (4, 'Patrick Rothfuss', 'images/autores/4.jpg');
INSERT INTO `autor` VALUES (5, 'Cayla Kluver', 'images/autores/5.jpg');
INSERT INTO `autor` VALUES (6, 'Juliet Dark', 'images/autores/6.jpg');
INSERT INTO `autor` VALUES (7, 'Katie Alender', 'images/autores/7.jpg');
INSERT INTO `autor` VALUES (8, 'Amber Lynn Natusch', 'images/autores/8.jpg');
INSERT INTO `autor` VALUES (9, 'Kiersten White', 'images/autores/9.jpg');
INSERT INTO `autor` VALUES (10, 'Tahereh Mafi', 'images/autores/10.jpg');
INSERT INTO `autor` VALUES (11, 'Alivia Anders', '');
INSERT INTO `autor` VALUES (12, 'Erika Johansen', '');
INSERT INTO `autor` VALUES (13, 'Rosamund Hodge', '');
INSERT INTO `autor` VALUES (14, 'Amber Argyle', '');
INSERT INTO `autor` VALUES (15, 'Catherine Fisher', '');
INSERT INTO `autor` VALUES (16, 'N.K. Jemisin', '');
INSERT INTO `autor` VALUES (17, 'Danielle L. Jensen', '');
INSERT INTO `autor` VALUES (18, 'Veronica Rossi', '');
INSERT INTO `autor` VALUES (19, 'Mary E. Pearson', '');
INSERT INTO `autor` VALUES (20, 'Donna Tartt', '');
INSERT INTO `autor` VALUES (21, 'Neil Gaiman', '');
INSERT INTO `autor` VALUES (22, 'Freda Warrington', '');
INSERT INTO `autor` VALUES (23, 'Deborah Harkness', '');
INSERT INTO `autor` VALUES (24, 'Paul Hoffman', '');
INSERT INTO `autor` VALUES (25, 'Holly Black', '');
INSERT INTO `autor` VALUES (26, 'Brenna Yovanoff', '');
INSERT INTO `autor` VALUES (27, 'Elizabeth May', '');
INSERT INTO `autor` VALUES (28, 'Christina Lauren', '');
INSERT INTO `autor` VALUES (29, 'Colleen Gleason', '');
INSERT INTO `autor` VALUES (30, 'Alex Flinn', '');
INSERT INTO `autor` VALUES (31, 'Kiera Cass', '');
INSERT INTO `autor` VALUES (32, 'Sarah Raughley', '');
INSERT INTO `autor` VALUES (33, 'Kristen Callihan', '');
INSERT INTO `autor` VALUES (34, 'Marissa Meyer', '');
INSERT INTO `autor` VALUES (35, 'Amy Ewing', '');
INSERT INTO `autor` VALUES (36, 'Carolyn Turgeon', '');
INSERT INTO `autor` VALUES (37, 'Nalini Singh', '');
INSERT INTO `autor` VALUES (38, 'Kady Cross', '');
INSERT INTO `autor` VALUES (39, 'Ilsa J. Bick', '');
INSERT INTO `autor` VALUES (40, 'Patricia Leever', '');
INSERT INTO `autor` VALUES (41, 'Laini Taylor', '');
INSERT INTO `autor` VALUES (42, 'Lauren Skidmore', '');
INSERT INTO `autor` VALUES (43, 'Gia', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `cabecera_factura`
-- 

CREATE TABLE `cabecera_factura` (
  `idCabecera` int(11) NOT NULL auto_increment,
  `fk_usuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `total_pagar` double NOT NULL,
  PRIMARY KEY  (`idCabecera`),
  KEY `fk_usuario` (`fk_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

-- 
-- Dumping data for table `cabecera_factura`
-- 

INSERT INTO `cabecera_factura` VALUES (2, 2, '2014-08-13', 12);
INSERT INTO `cabecera_factura` VALUES (3, 3, '2014-08-08', 5);
INSERT INTO `cabecera_factura` VALUES (17, 3, '2014-09-14', 11.38);

-- --------------------------------------------------------

-- 
-- Table structure for table `carrito`
-- 

CREATE TABLE `carrito` (
  `fk_usuario` int(11) NOT NULL,
  `fk_ebook` int(11) NOT NULL,
  KEY `fk_usuario` (`fk_usuario`),
  KEY `fk_ebook` (`fk_ebook`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `carrito`
-- 

INSERT INTO `carrito` VALUES (2, 2);

-- --------------------------------------------------------

-- 
-- Table structure for table `coleccion`
-- 

CREATE TABLE `coleccion` (
  `fk_usuario` int(11) NOT NULL,
  `fk_ebook` int(11) NOT NULL,
  `secuencia` int(11) NOT NULL,
  KEY `fk_usuario` (`fk_usuario`),
  KEY `fk_ebook` (`fk_ebook`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `coleccion`
-- 

INSERT INTO `coleccion` VALUES (2, 37, 1);
INSERT INTO `coleccion` VALUES (2, 6, 2);
INSERT INTO `coleccion` VALUES (3, 4, 1);
INSERT INTO `coleccion` VALUES (3, 16, 2);
INSERT INTO `coleccion` VALUES (2, 35, 3);
INSERT INTO `coleccion` VALUES (3, 14, 3);

-- --------------------------------------------------------

-- 
-- Table structure for table `detalle_factura`
-- 

CREATE TABLE `detalle_factura` (
  `idDetalle` int(11) NOT NULL auto_increment,
  `fk_cabeceraFactura` int(11) NOT NULL,
  `linea` int(11) NOT NULL,
  `codigoEbook` int(11) NOT NULL,
  PRIMARY KEY  (`idDetalle`),
  KEY `fk_cabeceraFactura` (`fk_cabeceraFactura`),
  KEY `codigoEbook` (`codigoEbook`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

-- 
-- Dumping data for table `detalle_factura`
-- 

INSERT INTO `detalle_factura` VALUES (3, 3, 1, 10);
INSERT INTO `detalle_factura` VALUES (4, 3, 2, 3);
INSERT INTO `detalle_factura` VALUES (5, 3, 3, 4);
INSERT INTO `detalle_factura` VALUES (8, 2, 1, 32);
INSERT INTO `detalle_factura` VALUES (12, 17, 1, 8);
INSERT INTO `detalle_factura` VALUES (13, 17, 2, 5);

-- --------------------------------------------------------

-- 
-- Table structure for table `ebook`
-- 

CREATE TABLE `ebook` (
  `idEbook` int(11) NOT NULL auto_increment,
  `fk_autor` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `idioma` varchar(45) NOT NULL,
  `isbn` varchar(45) NOT NULL,
  `editorial` varchar(45) NOT NULL,
  `numero_Paginas` int(4) NOT NULL,
  `traductor` varchar(45) NOT NULL,
  `precio` double NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `portada` varchar(50) NOT NULL,
  `resena` text,
  `enlace` varchar(50) default NULL,
  PRIMARY KEY  (`idEbook`),
  KEY `fk_autor` (`fk_autor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

-- 
-- Dumping data for table `ebook`
-- 

INSERT INTO `ebook` VALUES (1, 1, 'Envy', 'Espa&ntilde;ol', '0061345725', 'HarperCollins', 405, 'Rafael Ram&iacute;rez', 8.03, 'Drama', 'images/portadas/1.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (2, 2, 'Tales of the Otherworld', 'Espa&ntilde;ol', '0553807889', 'Bantam', 387, 'Marina Duarte', 7.99, 'Antopolog&iacute;a', 'images/portadas/2.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (3, 3, 'Kill me Softly', 'Espa&ntilde;ol', '1606843230', 'EgmontUSA', 336, 'Rafael Ram&iacute;rez', 6.99, 'Suspenso', 'images/portadas/3.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (4, 4, 'The Wise Man''s Fear', 'Espa&ntilde;ol', '0756404738', 'DAW Books', 994, 'Ana Valencia', 5.99, 'Ficci&oacute;n', 'images/portadas/4.jpg', 'Todo hombre sabio teme tres cosas: la tormenta en el mar, la noche sin luna y la ira de un hombre amable.\r\nEl hombre hab&iacute;a desaparecido. El mito no. M&uacute;sico, mendigo, ladr&oacute;n, estudiante, mago, trotamundos, h&eacute;roe y asesino, Kvothe hab&iacute;a borrado su rastro. Y ni siquiera ahora que le han encontrado, ni siquiera ahora que las tinieblas invaden los rincones del mundo, est&aacute; dispuesto a regresar. Pero su historia prosigue, la aventura contin&uacute;a, y Kvothe seguir&aacute; cont&aacute;ndola para revelar la verdad tras la leyenda.\r\nEs la ma&ntilde;ana del segundo d&iacute;a, y tres hombres se sientan a una mesa de Roca de Gu&iacute;a: un posadero de cabello rojo como una llama, su pupilo Bast y Cronista, que moja la pluma en el tintero y se prepara a transcribir... El temor de un hombre sabio empieza donde terminaba El nombre del viento: en la Universidad. De la que luego Kvothe se ver&aacute; obligado a partir en pos del nombre del viento, en pos de la aventura, en pos de esas historias que aparecen en libros o se cuentan junto a una hoguera del camino o en una taberna, en pos de la antigua orden de los caballeros Amyr y, sobre todo, en pos de los Chandrian.\r\nSu viaje le lleva a la corte plagada de intrigas del maer Alveron en el reino de Vintas, al bosque de Eld en persecuci&oacute;n de unos bandidos, a las colinas azotadas por las tormentas que rodean la ciudad de Ademre, a los confines crepusculares del reino de los Fata. Y cada vez parece que tiene algo m&aacute;s cerca la soluci&oacute;n del misterio de los Chandrian, y su venganza.\r\n', 'pdf/4.pdf');
INSERT INTO `ebook` VALUES (5, 5, 'Allegiance', 'Espa&ntilde;ol', '0373210434', 'HarlequinTeen', 494, 'Laura Rodr&iacute;guez', 7.39, 'Historico', 'images/portadas/5.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (6, 6, 'Angel Stone', 'Espa&ntilde;ol', '0867233154', 'Ballantine Books', 288, 'Luis Calle', 9.99, 'Romance', 'images/portadas/6.jpg', NULL, 'pdf/6.pdf');
INSERT INTO `ebook` VALUES (7, 7, 'Bad Girls Don''t Die', 'Espa&ntilde;ol', '0183015265', 'Disney Hyperion ', 352, 'Marina Duarte', 6.98, 'Paranormal', 'images/portadas/7.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (8, 8, 'Undertow', 'Espa&ntilde;ol', '9780062024', 'Amber Lynn Natusch', 227, 'Enrique Gallegos', 3.99, 'Juvenil', 'images/portadas/8.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (9, 9, 'The Chaos of the Stars', 'Espa&ntilde;ol', '0062135929', 'HarperTeen', 227, 'Enrique Gallegos', 9.78, 'Fantas&iacute;a', 'images/portadas/9.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (10, 10, 'Ignite Me', 'Espa&ntilde;ol', '9780062284', 'HarperCollins', 409, 'Marina Duarte', 9.99, 'Fantas&iacute;a', 'images/portadas/10.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (11, 11, 'A Shard of Ice', 'Espa&ntilde;ol', '0991194713', 'Red Alice Press', 308, 'Marina Duarte', 3.99, 'Fantas&iacute;a', 'images/portadas/11.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (12, 12, 'The Queen of the Tearling', 'Espa&ntilde;ol', '0593072693', 'Bantam Press', 448, 'Laura Rodr&iacute;guez', 9.99, 'Fantas&iacute;a', 'images/portadas/12.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (13, 13, 'Cruel Beauty', 'Espa&ntilde;ol', '0062224735', 'Balzer + Bray', 342, 'Enrique Gallegos', 8.89, 'Fantas&iacute;a', 'images/portadas/13.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (14, 14, 'Witch Born', 'Espa&ntilde;ol', '0985739401', 'Starling Publishing', 330, 'Rafael Ram&iacute;rez', 3.99, 'Fantas&iacute;a', 'images/portadas/14.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (15, 15, 'Incarceron', 'Espa&ntilde;ol', '0340893605', 'Hodder Children''s', 458, 'Enrique Gallegos', 7.99, 'Fantas&iacute;a', 'images/portadas/15.jpg', 'Imagina una prisi&oacute;n tan grande que contiene celdas y galer&iacute;as, bosques, ciudades y mares. Imagina un prisionero sin recuerdos: Imagina una joven condenada a un matrimonio pactado y viviendo en una sociedad donde el tiempo se qued&oacute; anclado en el siglo diecisiete y que est&aacute; vigilado por unos sofisticados series de inteligencia artificial y robot.\r\nIncarceron es la prisi&oacute;n, Finn es el preso y Claudia vive fuera, en ese extra&ntilde;o mundo donde nadie sabe nada de Incarceron. ¿Pero qu&eacute; pasar&iacute;a si Claudia consiguiera un d&iacute;a comunicarse con Finn a trav&eacute;s de un extra&ntilde;o cristal y estos empezaran a compartir algo m&aacute;s que amistad?\r\nUNA PRISI&Oacute;N COMO NO HAY OTRA…\r\nUna aventura fascinante contra el tiempo, que recrea un mundo imaginario sumamente original y que hace de su autora una de las mejores plumas de la narrativa Young Adult actual.', 'pdf/15.pdf');
INSERT INTO `ebook` VALUES (16, 16, 'The Hundred Thousand Kingdoms', 'Espa&ntilde;ol', '0316043915', 'Hachette Book Group Orbit', 427, 'Rafael Ram&iacute;rez', 6.99, 'Fantas&iacute;a', 'images/portadas/16.jpg', NULL, 'pdf/16.pdf');
INSERT INTO `ebook` VALUES (17, 17, 'Stolen Songbird', 'Espa&ntilde;ol', '1908844965', 'Strange Chemistry', 469, 'Ana Valencia', 5.99, 'Fantas&iacute;a', 'images/portadas/17.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (18, 18, 'Into the Still Blue', 'Espa&ntilde;ol', '0062072099', 'HarperCollins', 392, 'Laura Rodr&iacute;guez', 2.99, 'Fantas&iacute;a', 'images/portadas/18.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (19, 19, 'The Kiss of Deception ', 'Espa&ntilde;ol', '9780316043', 'Henry Holt', 492, 'Luis Calle', 8.99, 'Fantas&iacute;a', 'images/portadas/19.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (20, 10, 'Fracture Me', 'Espa&ntilde;ol', '0062284835', 'HarperCollins', 62, 'Ana Valencia', 2.99, 'Fantas&iacute;a', 'images/portadas/20.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (21, 20, 'The Goldfinch', 'Espa&ntilde;ol', '0316055433', 'Little, Brown and Company', 771, 'Laura Rodr&iacute;guez', 10.74, 'Ficci&oacute;n', 'images/portadas/21.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (22, 21, 'American Gods', 'Espa&ntilde;ol', '0747263744', 'Headline Review', 656, 'Rafael Ram&iacute;rez', 5.99, 'Ficci&oacute;n', 'images/portadas/22.jpg', NULL, 'pdf/22.pdf');
INSERT INTO `ebook` VALUES (23, 22, 'A Taste of Blood Wine', 'Espa&ntilde;ol', '1781167052', 'Titan Book', 501, 'Enrique Gallegos', 8.99, 'Ficci&oacute;n', 'images/portadas/23.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (24, 23, 'The Book of Life', 'Espa&ntilde;ol', '0670025593', 'Viking Adult', 561, 'Marina Duarte', 11.99, 'Ficci&oacute;n', 'images/portadas/24.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (25, 24, 'The Left Hand of God', 'Espa&ntilde;ol', '0718155181', 'Michael Joseph', 436, 'Ana Valencia', 7.44, 'Ficci&oacute;n', 'images/portadas/25.jpg', NULL, 'pdf/25.pdf');
INSERT INTO `ebook` VALUES (26, 25, 'The Darkest Part of the Forest', 'Espa&ntilde;ol', '0316213071', 'Little, Brown & Company', 336, 'Rafael Ram&iacute;rez', 9.99, 'Ficci&oacute;n', 'images/portadas/26.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (27, 4, 'The Name of the Wind', 'Espa&ntilde;ol', '0756404075', 'Penguin Group', 662, 'Marina Duarte', 4.99, 'Ficci&oacute;n', 'images/portadas/27.jpg', NULL, 'pdf/27.pdf');
INSERT INTO `ebook` VALUES (28, 26, 'The Replacement', 'Espa&ntilde;ol', '1595143378', 'Penguin Group', 343, 'Rafael Ram&iacute;rez', 7.69, 'Ficci&oacute;n', 'images/portadas/28.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (29, 21, 'The Ocean at the End of the Lane ', 'Espa&ntilde;ol', '0062255657', 'William Morrow Books', 181, 'Enrique Gallegos', 7.99, 'Ficci&oacute;n', 'images/portadas/29.jpg', NULL, 'pdf/29.pdf');
INSERT INTO `ebook` VALUES (30, 27, 'The Falconer ', 'Espa&ntilde;ol', '1452114234', 'Chronicle Books', 378, 'Ana Valencia', 9.99, 'Ficci&oacute;n', 'images/portadas/30.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (31, 28, 'Sublime', 'Espa&ntilde;ol', '1481413708', 'Simon & Schuster', 336, 'Luis Calle', 9.78, 'Ficci&oacute;n', 'images/portadas/31.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (32, 29, 'The Clockwork Scarab', 'Espa&ntilde;ol', '1452134685', 'Chronicle Books', 356, 'Marina Duarte', 9.39, 'Ficci&oacute;n', 'images/portadas/32.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (33, 14, 'Witch Fall', 'Espa&ntilde;ol', '0985739460', 'Starling Publishing', 340, 'Luis Calle', 3.99, 'Fantas&iacute;a', 'images/portadas/33.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (34, 30, 'Towering', 'Espa&ntilde;ol', '0062024175', 'HarperTeen', 293, 'Marina Duarte', 8.36, 'Juvenil', 'images/portadas/34.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (35, 31, 'The Elite', 'Espa&ntilde;ol', '0062059963', 'HarperTeen', 336, 'Rafael Ram&iacute;rez', 5.95, 'Ficci&oacute;n', 'images/portadas/35.jpg', 'De las treinta y cinco chicas llegaron al palacio para competir en la Selecci&oacute;n. Todas menos seis han sido devueltas a sus hogares. Y solo una conseguir&aacute; casarse con el pr&iacute;ncipe Maxon y ser coronada princesa de Illea. America todav&iacute;a no est&aacute; segura de hacia d&oacute;nde se inclina su coraz&oacute;n.\r\nCuando est&aacute; con Maxon, se ve envuelta en un romance nuevo y que la deja sin aliento, y ni siquiera puede imaginar estar con nadie m&aacute;s. Pero cuando ve a Aspen en los alrededores de palacio, los recuerdos de la vida que planeaban tener juntos se agolpan en su memoria. El grupo de chicas que llegaron a palacio se ha visto reducido a la &Eacute;lite de seis, y cada una de ellas va a hacer todo lo posible por ganarse a Maxon. El tiempo se acaba y America tiene que tomar una decisi&oacute;n.\r\nSin embargo, cuando ya cree que ha llegado a la conclusión definitiva, un suceso devastador hace que se lo vuelva a plantear todo de nuevo. Y mientras lucha por averiguar dónde está su fututo, los rebeldes violentos que quieren derrocar la monarquía se hacen cada vez más fuertes y sus planes podrían acabar con cualquier aspiración que America pudiera tener de un final feliz.', 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (36, 32, 'Feather Bound', 'Espa&ntilde;ol', '9780061345', 'Strange Chemistry', 300, 'Luis Calle', 3.6, 'Suspenso', 'images/portadas/36.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (37, 33, 'The Darkest London', 'Espa&ntilde;ol', '1455508594', 'Forever', 372, 'Laura Rodr&iacute;guez', 5.59, 'Romance', 'images/portadas/37.jpg', NULL, 'pdf/37.pdf');
INSERT INTO `ebook` VALUES (38, 34, 'Cress', 'Espa&ntilde;ol', '0312642970', 'Feiwel & Friends', 550, 'Enrique Gallegos', 8.89, 'Fantas&iacute;a', 'images/portadas/38.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (39, 29, 'The Spiritglass Charade', 'Espa&ntilde;ol', '1452110719', 'Chronicle Books', 360, 'Ana Valencia', 9.39, 'Ficci&oacute;n', 'images/portadas/39.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (40, 35, 'Jewel', 'Espa&ntilde;ol', '0062235796', 'HarperTeen', 358, 'Marina Duarte', 8.89, 'Juvenil', 'images/portadas/40.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (41, 31, 'The Selection', 'Espa&ntilde;ol', '0062059939', 'HarperTeen', 336, 'Luis Calle', 2.99, 'Ficci&oacute;n', 'images/portadas/41.jpg', 'Para treinta y cinco chicas, La Selecci&oacute;n es una oportunidad que solo se presenta una vez en la vida. La oportunidad de escapar de la vida que les ha tocado por nacer en una determinada familia. La oportunidad de que las trasladen a un mundo de trajes preciosos y joyas que no tienen precio. La oportunidad de vivir en un palacio y de competir por el corazón del guapísimo príncipe Maxon.\r\nSin embargo, para America Singer, ser seleccionada es una pesadilla porque significa alejarse de su amor secreto, Aspen, quien pertenece a una casta inferior a la de ella; y tambi&eacute;n abandonar su hogar para pelear por una corona que no desea y vivir en un palacio que está bajo la constante amenaza de ataques violentos por parte de los rebeldes.\r\nEs entonces cuando America conoce al príncipe Maxon. Poco a poco, se empieza a cuestionar los planes que ella había hecho para su vida y se da cuenta de que la vida con la que siempre so&ntilde;&oacute; puede no poder compararse con el futuro que nunca se atrevi&oacute; si quiera a imaginar.', 'pdf/41.pdf');
INSERT INTO `ebook` VALUES (42, 36, 'Mermaid', 'Espa&ntilde;ol', '0307589978', 'Crown Publishing Group', 240, 'Luis Calle', 7.99, 'Fantas&iacute;a', 'images/portadas/42.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (43, 37, 'Archangel''s Legion', 'Espa&ntilde;ol', '0425251241', 'Jove', 374, 'Ana Valencia', 6.83, 'Ficci&oacute;n', 'images/portadas/43.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (44, 38, 'The Girl in the Steel Corset', 'Espa&ntilde;ol', '0373210337', 'Harlequin Teen', 473, 'Enrique Gallegos', 7.99, 'Fantas&iacute;a', 'images/portadas/44.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (45, 39, 'White Space', 'Espa&ntilde;ol', '0062235591', 'Egmont USA', 560, 'Laura Rodr&iacute;guez', 9.99, 'Fantas&iacute;a', 'images/portadas/45.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (46, 40, 'Divinity', 'Espa&ntilde;ol', '9781623429', 'Omnific Publishing', 200, 'Laura Rodr&iacute;guez', 2.99, 'Juvenil', 'images/portadas/46.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (47, 41, 'Dreams of Gods & Monsters', 'Espa&ntilde;ol', ' 0316134074', 'Little, Brown & Company', 613, 'Marina Duarte', 11.73, 'Ficci&oacute;n', 'images/portadas/47.jpg', NULL, 'pdf/dumb.pdf');
INSERT INTO `ebook` VALUES (48, 42, 'What is Hidden', 'Espa&ntilde;ol', '1462114296', 'Cedar Fort Publishing', 256, 'Enrique Gallegos', 6.49, 'Suspenso', 'images/portadas/48.jpg', NULL, 'pdf/dumb.pdf');

-- --------------------------------------------------------

-- 
-- Table structure for table `mensaje`
-- 

CREATE TABLE `mensaje` (
  `idMensaje` int(11) NOT NULL auto_increment,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `asunto` varchar(50) default NULL,
  `texto` text NOT NULL,
  PRIMARY KEY  (`idMensaje`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `mensaje`
-- 

INSERT INTO `mensaje` VALUES (1, 'Ray', 'ray@123.com', 'nada', 'Alcaesto');
INSERT INTO `mensaje` VALUES (2, 'Kimiko', 'k9@tokyo.com', 'hello', 'moshi moshi');
INSERT INTO `mensaje` VALUES (3, 'Clay', 'cowboy@texas.com', 'Howdy', 'partner');
INSERT INTO `mensaje` VALUES (4, 'Ohmi', 'xaolin@me.com', 'Greetings', 'Greetings stranger.');

-- --------------------------------------------------------

-- 
-- Table structure for table `usuario`
-- 

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL auto_increment,
  `nombreUsuario` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `infoUsuario` text,
  `genero` varchar(1) NOT NULL,
  `email` varchar(45) NOT NULL,
  `pais` varchar(45) NOT NULL,
  PRIMARY KEY  (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `usuario`
-- 

INSERT INTO `usuario` VALUES (1, 'administrador', 'Pa$$w0rd', 'images/perfil/default.jpg', 'Admin', 'Ebbbooks', '1989-08-03', 'Soy Admin', 'f', 'admin@gmail.com', 'Ecuador');
INSERT INTO `usuario` VALUES (2, 'connantrutman', 'connanmismo', 'images/perfil/default.jpg', 'Connan', 'Trutman', '1980-05-23', 'asdasd', 'm', 'connanmismo@hotmail.com', 'Ecuador');
INSERT INTO `usuario` VALUES (3, 'jonathan92', 'venga', 'images/perfil/default.jpg', 'Jonathan', 'Lopez', '1983-10-08', 'Soy un usuario de Prueba', 'm', 'jonathan92@gmail.com', 'Ecuador');
INSERT INTO `usuario` VALUES (4, 'Darkspines-00', 'Mobius00', 'images/perfil/default.jpg', 'Edwin', 'Robalino', '1994-11-13', 'I like trains', 'm', 'edboroba@gmail.com', 'Ecuador');

-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `cabecera_factura`
-- 
ALTER TABLE `cabecera_factura`
  ADD CONSTRAINT `cabecera_factura_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`idUsuario`);

-- 
-- Constraints for table `carrito`
-- 
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`fk_ebook`) REFERENCES `ebook` (`idEbook`);

-- 
-- Constraints for table `coleccion`
-- 
ALTER TABLE `coleccion`
  ADD CONSTRAINT `coleccion_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `coleccion_ibfk_2` FOREIGN KEY (`fk_ebook`) REFERENCES `ebook` (`idEbook`);

-- 
-- Constraints for table `detalle_factura`
-- 
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `detalle_factura_ibfk_5` FOREIGN KEY (`fk_cabeceraFactura`) REFERENCES `cabecera_factura` (`idCabecera`) ON DELETE CASCADE,
  ADD CONSTRAINT `detalle_factura_ibfk_6` FOREIGN KEY (`codigoEbook`) REFERENCES `ebook` (`idEbook`);

-- 
-- Constraints for table `ebook`
-- 
ALTER TABLE `ebook`
  ADD CONSTRAINT `ebook_ibfk_1` FOREIGN KEY (`fk_autor`) REFERENCES `autor` (`idAutor`);
