CREATE DATABASE IF NOT EXISTS `raruna`;
USE `raruna`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
LOCK TABLES `users` WRITE;
UNLOCK TABLES;

DROP TABLE IF EXISTS `artists`;
CREATE TABLE `artists` (
  `idartist` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idartist`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
LOCK TABLES `artists` WRITE;
UNLOCK TABLES;

DROP TABLE IF EXISTS `albuns`;
CREATE TABLE `albuns` (
  `idalbum` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `year` year(4) NOT NULL,
  `record_comp` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `idartist` int(11) DEFAULT NULL,
  PRIMARY KEY (`idalbum`),
  KEY `idartist_idx` (`idartist`),
  CONSTRAINT `fk_idartist` FOREIGN KEY (`idartist`) REFERENCES `artists` (`idartist`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
LOCK TABLES `albuns` WRITE;
UNLOCK TABLES;

DROP TABLE IF EXISTS `musics`;
CREATE TABLE `musics` (
  `idmusic` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `duration` time(4) NOT NULL,
  `idalbum` int(11) NOT NULL,
  PRIMARY KEY (`idmusic`),
  KEY `fk_idalbum_idx` (`idalbum`),
  CONSTRAINT `fk_idalbum` FOREIGN KEY (`idalbum`) REFERENCES `albuns` (`idalbum`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
LOCK TABLES `musics` WRITE;
UNLOCK TABLES;

DROP TABLE IF EXISTS `playlists`;
CREATE TABLE `playlists` (
  `idplaylist` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `iduser` int(11) NOT NULL,
  PRIMARY KEY (`idplaylist`),
  KEY `fk_iduser_idx` (`iduser`),
  CONSTRAINT `fk_iduser` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
LOCK TABLES `playlists` WRITE;
UNLOCK TABLES;

DROP TABLE IF EXISTS `musics_playlist`;
CREATE TABLE `musics_playlist` (
  `idmp` int(11) NOT NULL AUTO_INCREMENT,
  `idplaylist` int(11) NOT NULL,
  `idmusic` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmp`),
  KEY `idplaylist_idx` (`idplaylist`),
  KEY `fk_idmusic_idx` (`idmusic`),
  CONSTRAINT `fk_idmusic` FOREIGN KEY (`idmusic`) REFERENCES `musics` (`idmusic`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_idplaylist` FOREIGN KEY (`idplaylist`) REFERENCES `playlists` (`idplaylist`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
LOCK TABLES `musics_playlist` WRITE;
UNLOCK TABLES;
