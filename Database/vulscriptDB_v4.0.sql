-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 03 apr 2014 om 12:25
-- Serverversie: 5.5.35-0ubuntu0.13.10.2
-- PHP-versie: 5.5.3-1ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `db_develop`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `access`
--

CREATE TABLE IF NOT EXISTS `access` (
  `user_id` int(11) NOT NULL,
  `page` varchar(40) NOT NULL,
  `crud_operations` varchar(6) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `release` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`,`page`,`crud_operations`),
  KEY `page_idx` (`page`),
  KEY `crud_operations_idx` (`crud_operations`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden uitgevoerd voor tabel `access`
--

INSERT INTO `access` (`user_id`, `page`, `crud_operations`, `item_id`, `release`, `end`) VALUES
(1, 'authtest', 'read', NULL, '2014-02-25 00:00:00', '2014-02-27 00:00:00'),
(2, 'upload_story', 'create', NULL, '2013-03-03 00:00:00', '2015-03-03 00:00:00'),
(2, 'upload_story', 'delete', NULL, '2013-03-03 00:00:00', '2015-03-03 00:00:00'),
(2, 'upload_story', 'read', NULL, '2013-03-03 00:00:00', '2015-03-03 00:00:00'),
(2, 'upload_story', 'update', NULL, '2013-03-03 00:00:00', '2015-03-03 00:00:00'),
(3, 'upload_story', 'create', NULL, '2013-03-03 00:00:00', '2015-03-03 00:00:00'),
(3, 'upload_story', 'delete', NULL, '2013-03-03 00:00:00', '2015-03-03 00:00:00'),
(3, 'upload_story', 'read', NULL, '2013-03-03 00:00:00', '2015-03-03 00:00:00'),
(3, 'upload_story', 'update', NULL, '2013-03-03 00:00:00', '2015-03-03 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `crud_operation`
--

CREATE TABLE IF NOT EXISTS `crud_operation` (
  `type` varchar(6) NOT NULL,
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden uitgevoerd voor tabel `crud_operation`
--

INSERT INTO `crud_operation` (`type`) VALUES
('create'),
('delete'),
('read'),
('update');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `link`
--

CREATE TABLE IF NOT EXISTS `link` (
  `story_id` int(11) NOT NULL,
  `link` varchar(245) NOT NULL,
  PRIMARY KEY (`link`,`story_id`),
  UNIQUE KEY `link_UNIQUE` (`link`),
  KEY `story-link` (`story_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden uitgevoerd voor tabel `link`
--

INSERT INTO `link` (`story_id`, `link`) VALUES
(1, 'http://www.google.nl/'),
(2, 'http://www.avans.nl/'),
(3, 'http://www.ishetalvrijdag.nl/');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `streetname` varchar(100) DEFAULT NULL,
  `number` varchar(10) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Gegevens worden uitgevoerd voor tabel `location`
--

INSERT INTO `location` (`id`, `country`, `city`, `streetname`, `number`, `zipcode`, `latitude`, `longitude`) VALUES
(1, 'Norway', 'Oslo', 'Herslebs gate', '1', '0578', 59.9139, 10.7522),
(2, 'Turkey', 'Izmir', 'Milli Kütüphane Cd', '1', '35100', 38.4188, 27.1287),
(3, 'France', 'Tarbes', NULL, NULL, NULL, 43.233, 0.078082),
(4, 'France', 'Tarbes', NULL, NULL, NULL, 43.233, 0.178072);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `locationtype`
--

CREATE TABLE IF NOT EXISTS `locationtype` (
  `name` varchar(45) NOT NULL,
  `description` text,
  PRIMARY KEY (`name`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden uitgevoerd voor tabel `locationtype`
--

INSERT INTO `locationtype` (`name`, `description`) VALUES
('Organization', NULL),
('Residence', NULL),
('School', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `organization`
--

CREATE TABLE IF NOT EXISTS `organization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` text,
  `website` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Gegevens worden uitgevoerd voor tabel `organization`
--

INSERT INTO `organization` (`id`, `name`, `description`, `website`) VALUES
(1, 'Philips', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus eu est volutpat bibendum tincidunt ac odio. Sed vitae arcu lobortis, egestas nunc eget, sollicitudin lacus. Integer ut laoreet sapien. Integer ac lacinia elit. In tincidunt fringilla nulla, at vehicula lacus hendrerit eu. Curabitur eget consectetur metus, et porta nibh. Donec blandit auctor ipsum, quis ultrices enim sagittis ut. Nullam tortor nunc, varius feugiat porttitor sed, vestibulum quis metus. Vivamus imperdiet urna eget dui molestie pretium. Nulla eget condimentum massa, eget dignissim tortor. Mauris ac luctus nibh, et commodo lectus. Donec quis lectus eros. Ut metus arcu, venenatis ac volutpat id, tincidunt vel est. Suspendisse tincidunt vitae odio nec fringilla. Vestibulum rhoncus fermentum orci nec laoreet. Donec nec felis ac urna posuere accumsan sit amet sit amet sapien.', 'philips.nl'),
(2, 'Google', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus eu est volutpat bibendum tincidunt ac odio. Sed vitae arcu lobortis, egestas nunc eget, sollicitudin lacus. Integer ut laoreet sapien. Integer ac lacinia elit. In tincidunt fringilla nulla, at vehicula lacus hendrerit eu. Curabitur eget consectetur metus, et porta nibh. Donec blandit auctor ipsum, quis ultrices enim sagittis ut. Nullam tortor nunc, varius feugiat porttitor sed, vestibulum quis metus. Vivamus imperdiet urna eget dui molestie pretium. Nulla eget condimentum massa, eget dignissim tortor. Mauris ac luctus nibh, et commodo lectus. Donec quis lectus eros. Ut metus arcu, venenatis ac volutpat id, tincidunt vel est. Suspendisse tincidunt vitae odio nec fringilla. Vestibulum rhoncus fermentum orci nec laoreet. Donec nec felis ac urna posuere accumsan sit amet sit amet sapien.', 'google.com'),
(3, 'HTC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus eu est volutpat bibendum tincidunt ac odio. Sed vitae arcu lobortis, egestas nunc eget, sollicitudin lacus. Integer ut laoreet sapien. Integer ac lacinia elit. In tincidunt fringilla nulla, at vehicula lacus hendrerit eu. Curabitur eget consectetur metus, et porta nibh. Donec blandit auctor ipsum, quis ultrices enim sagittis ut. Nullam tortor nunc, varius feugiat porttitor sed, vestibulum quis metus. Vivamus imperdiet urna eget dui molestie pretium. Nulla eget condimentum massa, eget dignissim tortor. Mauris ac luctus nibh, et commodo lectus. Donec quis lectus eros. Ut metus arcu, venenatis ac volutpat id, tincidunt vel est. Suspendisse tincidunt vitae odio nec fringilla. Vestibulum rhoncus fermentum orci nec laoreet. Donec nec felis ac urna posuere accumsan sit amet sit amet sapien.', 'htc.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `type` varchar(40) NOT NULL,
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden uitgevoerd voor tabel `page`
--

INSERT INTO `page` (`type`) VALUES
('authtest'),
('upload_story');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `website` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `school`
--

INSERT INTO `school` (`id`, `name`, `website`) VALUES
(1, 'Avans', 'avans.nl');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `story`
--

CREATE TABLE IF NOT EXISTS `story` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `study_id` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `description` text NOT NULL,
  `schoolyear` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idstory_UNIQUE` (`id`),
  KEY `type_idx` (`type`),
  KEY `organization-story_idx` (`organization_id`),
  KEY `student-story_idx` (`student_id`),
  KEY `study-story_idx` (`study_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Gegevens worden uitgevoerd voor tabel `story`
--

INSERT INTO `story` (`id`, `type`, `organization_id`, `student_id`, `study_id`, `startdate`, `enddate`, `description`, `schoolyear`) VALUES
(1, 'Graduation', 1, 1, 2, '2014-03-02', '2014-03-08', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus eu est volutpat bibendum tincidunt ac odio. Sed vitae arcu lobortis, egestas nunc eget, sollicitudin lacus. Integer ut laoreet sapien. Integer ac lacinia elit. In tincidunt fringilla nulla, at vehicula lacus hendrerit eu. Curabitur eget consectetur metus, et porta nibh. Donec blandit auctor ipsum, quis ultrices enim sagittis ut. Nullam tortor nunc, varius feugiat porttitor sed, vestibulum quis metus. Vivamus imperdiet urna eget dui molestie pretium. Nulla eget condimentum massa, eget dignissim tortor. Mauris ac luctus nibh, et commodo lectus. Donec quis lectus eros. Ut metus arcu, venenatis ac volutpat id, tincidunt vel est. Suspendisse tincidunt vitae odio nec fringilla. Vestibulum rhoncus fermentum orci nec laoreet. Donec nec felis ac urna posuere accumsan sit amet sit amet sapien.\n\nMaecenas tristique rhoncus mi quis sagittis. Praesent pellentesque, sapien sed cursus posuere, nulla diam blandit erat, id egestas mauris justo ac dolor. Ut ligula ante, tincidunt at est id, mollis facilisis quam. Quisque vel dolor nec erat adipiscing tempus nec et neque. Donec non volutpat tortor, tempor luctus elit. Fusce tempus posuere mi, consectetur interdum urna fermentum quis. Etiam vulputate nisi at augue accumsan fermentum. Quisque tincidunt eget metus in laoreet. Mauris in viverra dolor, et posuere massa.', 4),
(2, 'EPS', 3, 2, 1, '2014-02-09', '2014-03-27', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus eu est volutpat bibendum tincidunt ac odio. Sed vitae arcu lobortis, egestas nunc eget, sollicitudin lacus. Integer ut laoreet sapien. Integer ac lacinia elit. In tincidunt fringilla nulla, at vehicula lacus hendrerit eu. Curabitur eget consectetur metus, et porta nibh. Donec blandit auctor ipsum, quis ultrices enim sagittis ut. Nullam tortor nunc, varius feugiat porttitor sed, vestibulum quis metus. Vivamus imperdiet urna eget dui molestie pretium. Nulla eget condimentum massa, eget dignissim tortor. Mauris ac luctus nibh, et commodo lectus. Donec quis lectus eros. Ut metus arcu, venenatis ac volutpat id, tincidunt vel est. Suspendisse tincidunt vitae odio nec fringilla. Vestibulum rhoncus fermentum orci nec laoreet. Donec nec felis ac urna posuere accumsan sit amet sit amet sapien.\r\n\r\nMaecenas tristique rhoncus mi quis sagittis. Praesent pellentesque, sapien sed cursus posuere, nulla diam blandit erat, id egestas mauris justo ac dolor. Ut ligula ante, tincidunt at est id, mollis facilisis quam. Quisque vel dolor nec erat adipiscing tempus nec et neque. Donec non volutpat tortor, tempor luctus elit. Fusce tempus posuere mi, consectetur interdum urna fermentum quis. Etiam vulputate nisi at augue accumsan fermentum. Quisque tincidunt eget metus in laoreet. Mauris in viverra dolor, et posuere massa.', 3),
(3, 'Internship', 2, 3, 1, '2013-11-11', '2014-03-25', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus eu est volutpat bibendum tincidunt ac odio. Sed vitae arcu lobortis, egestas nunc eget, sollicitudin lacus. Integer ut laoreet sapien. Integer ac lacinia elit. In tincidunt fringilla nulla, at vehicula lacus hendrerit eu. Curabitur eget consectetur metus, et porta nibh. Donec blandit auctor ipsum, quis ultrices enim sagittis ut. Nullam tortor nunc, varius feugiat porttitor sed, vestibulum quis metus. Vivamus imperdiet urna eget dui molestie pretium. Nulla eget condimentum massa, eget dignissim tortor. Mauris ac luctus nibh, et commodo lectus. Donec quis lectus eros. Ut metus arcu, venenatis ac volutpat id, tincidunt vel est. Suspendisse tincidunt vitae odio nec fringilla. Vestibulum rhoncus fermentum orci nec laoreet. Donec nec felis ac urna posuere accumsan sit amet sit amet sapien.\r\n\r\nMaecenas tristique rhoncus mi quis sagittis. Praesent pellentesque, sapien sed cursus posuere, nulla diam blandit erat, id egestas mauris justo ac dolor. Ut ligula ante, tincidunt at est id, mollis facilisis quam. Quisque vel dolor nec erat adipiscing tempus nec et neque. Donec non volutpat tortor, tempor luctus elit. Fusce tempus posuere mi, consectetur interdum urna fermentum quis. Etiam vulputate nisi at augue accumsan fermentum. Quisque tincidunt eget metus in laoreet. Mauris in viverra dolor, et posuere massa.', 3),
(4, 'Internship', 2, 7, 1, '2013-11-11', '2014-03-25', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `storylocation`
--

CREATE TABLE IF NOT EXISTS `storylocation` (
  `story_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `location_type` varchar(45) NOT NULL,
  PRIMARY KEY (`story_id`,`location_id`,`location_type`),
  KEY `location-storylocation_idx` (`location_id`),
  KEY `locationtype-storylocation_idx` (`location_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden uitgevoerd voor tabel `storylocation`
--

INSERT INTO `storylocation` (`story_id`, `location_id`, `location_type`) VALUES
(1, 1, 'Organization'),
(2, 2, 'Organization'),
(3, 3, 'Organization'),
(4, 4, 'Organization');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `storytype`
--

CREATE TABLE IF NOT EXISTS `storytype` (
  `name` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`name`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden uitgevoerd voor tabel `storytype`
--

INSERT INTO `storytype` (`name`, `description`) VALUES
('EPS', NULL),
('Graduation', NULL),
('Internship', NULL),
('Minor', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `insertion` varchar(45) DEFAULT NULL,
  `surname` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Gegevens worden uitgevoerd voor tabel `student`
--

INSERT INTO `student` (`id`, `firstname`, `insertion`, `surname`, `email`) VALUES
(1, 'Robin', NULL, 'Collard', 'r.collard@student.avans.nl'),
(2, 'Thim', NULL, 'Heider', 'thim.heider@gmail.com'),
(3, 'Michael', 'van de', 'Ven', 'michael.vd.ven95@gmail.com'),
(4, 'Edwin', NULL, 'Hattink', 'egjhatti@student.avans.nl'),
(5, 'Ruud', 'van', 'Daelen', 'r.vandalen@student.avans.nl'),
(6, 'Jip', NULL, 'Verhoeven', 'j.verhoeven5@student.avans.nl'),
(7, 'Thomas', NULL, 'Voogt', 'chirimorin@gmail.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `study`
--

CREATE TABLE IF NOT EXISTS `study` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` text,
  `school_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `school-study_idx` (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `study`
--

INSERT INTO `study` (`id`, `name`, `description`, `school_id`) VALUES
(1, 'Computer Science', NULL, 1),
(2, 'Mechanical Engineering', NULL, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Gegevens worden uitgevoerd voor tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'mickey', 'hoi', 'mickey@weallclimb.com'),
(2, 'frank_de_wit', 'wachtwoord', 'frank@home.nl'),
(3, 'henk_de_vries', 'geenwachtwoord', 'henkdevries@gmail.com');

--
-- Beperkingen voor gedumpte tabellen
--

--
-- Beperkingen voor tabel `access`
--
ALTER TABLE `access`
  ADD CONSTRAINT `page-access` FOREIGN KEY (`page`) REFERENCES `page` (`type`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `crud_operation-access` FOREIGN KEY (`crud_operations`) REFERENCES `crud_operation` (`type`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user-access` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `link`
--
ALTER TABLE `link`
  ADD CONSTRAINT `story-link` FOREIGN KEY (`story_id`) REFERENCES `story` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `story`
--
ALTER TABLE `story`
  ADD CONSTRAINT `storytype-story` FOREIGN KEY (`type`) REFERENCES `storytype` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `organization-story` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `student-story` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `study-story` FOREIGN KEY (`study_id`) REFERENCES `study` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `storylocation`
--
ALTER TABLE `storylocation`
  ADD CONSTRAINT `story-storylocation` FOREIGN KEY (`story_id`) REFERENCES `story` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `location-storylocation` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `locationtype-storylocation` FOREIGN KEY (`location_type`) REFERENCES `locationtype` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `study`
--
ALTER TABLE `study`
  ADD CONSTRAINT `school-study` FOREIGN KEY (`school_id`) REFERENCES `school` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
