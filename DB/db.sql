-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 31 mrt 2020 om 12:44
-- Serverversie: 5.7.24
-- PHP-versie: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evenement`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `accountID` int(11) NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(45) DEFAULT NULL,
  `tussenvoegsel` varchar(45) DEFAULT NULL,
  `achternaam` varchar(128) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `foto` varchar(254) DEFAULT NULL,
  `telefoon` varchar(15) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`accountID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `account`
--

INSERT INTO `account` (`accountID`, `voornaam`, `tussenvoegsel`, `achternaam`, `email`, `foto`, `telefoon`, `password`) VALUES
(1, 'stanley', NULL, 'reddemann', 'stanley2001@live.nl', 'stanley.jpg', '0611416341', 'test'),
(2, 'daniel', 'de', 'vos', 'daniel.vos@outlook.com', 'daniel.jpg', '0612345679', ''),
(4, 'stanley', NULL, 'reddemannn', 'standley2001@live.nl', '2.jpg', '0614524578', '$2y$10$zeamLKpOSTjgooEHGzgbcejfFRamKoUtSC2xPw2itE27vwgtIF2cO'),
(5, 'stanley', '', 'klaas', 'test@test.nl', '2.jpg', '0614524578', '$2y$10$qVQbGW1UZJTocDsTeh8JKup2hvcuG6U.Xdgzu8dqFvzYk.GT9ts/K'),
(6, 'stanley', '', 'reddemann', 'blablab@outlook.com', '2.jpg', '0614524578', '$2y$10$upuEuB/BUQjjzPgWjy1HwezZDp9RnulbTF.l.Ub9SlWyKWJOb78Si');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `account_has_evenement`
--

DROP TABLE IF EXISTS `account_has_evenement`;
CREATE TABLE IF NOT EXISTS `account_has_evenement` (
  `accountID` int(11) NOT NULL,
  `evenementID` int(11) NOT NULL,
  `functieID` int(11) NOT NULL,
  PRIMARY KEY (`accountID`,`evenementID`,`functieID`),
  KEY `fk_account_has_evenement_evenement2_idx` (`evenementID`),
  KEY `fk_account_has_evenement_account2_idx` (`accountID`),
  KEY `fk_account_has_evenement_functie1_idx` (`functieID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `account_has_evenement`
--

INSERT INTO `account_has_evenement` (`accountID`, `evenementID`, `functieID`) VALUES
(2, 1, 1),
(1, 2, 1),
(2, 2, 1),
(2, 2, 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `account_has_functie`
--

DROP TABLE IF EXISTS `account_has_functie`;
CREATE TABLE IF NOT EXISTS `account_has_functie` (
  `accountID` int(11) NOT NULL,
  `functieID` int(11) NOT NULL,
  PRIMARY KEY (`accountID`,`functieID`),
  KEY `fk_account_has_functie_functie1_idx` (`functieID`),
  KEY `fk_account_has_functie_account1_idx` (`accountID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `account_has_functie`
--

INSERT INTO `account_has_functie` (`accountID`, `functieID`) VALUES
(1, 1),
(2, 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `onderwerp` varchar(55) NOT NULL,
  `vraag` longtext NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`ID`, `onderwerp`, `vraag`, `email`) VALUES
(1, 'rwr', 'wrewrw', 'stanley2001@live.nl');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `evenementID` int(11) NOT NULL AUTO_INCREMENT,
  `evenementnaam` varchar(45) NOT NULL,
  `omschrijving` varchar(45) DEFAULT NULL,
  `locatie` varchar(45) NOT NULL,
  PRIMARY KEY (`evenementID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `evenement`
--

INSERT INTO `evenement` (`evenementID`, `evenementnaam`, `omschrijving`, `locatie`) VALUES
(1, 'Jazz in duketown', 'test', 'test'),
(2, 'rock&roll', '', ''),
(18, 'test', 'est', 'locatie');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `functie`
--

DROP TABLE IF EXISTS `functie`;
CREATE TABLE IF NOT EXISTS `functie` (
  `functieID` int(11) NOT NULL AUTO_INCREMENT,
  `functieomschrijving` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`functieID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `functie`
--

INSERT INTO `functie` (`functieID`, `functieomschrijving`) VALUES
(1, 'ober'),
(2, 'barkeeper'),
(3, 'gastheren/vrouwen');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `functie_has_evenement`
--

DROP TABLE IF EXISTS `functie_has_evenement`;
CREATE TABLE IF NOT EXISTS `functie_has_evenement` (
  `functieID` int(11) NOT NULL,
  `evenementID` int(11) NOT NULL,
  `aantal` int(11) DEFAULT NULL,
  PRIMARY KEY (`functieID`,`evenementID`),
  KEY `fk_functie_has_evenement_evenement1_idx` (`evenementID`),
  KEY `fk_functie_has_evenement_functie_idx` (`functieID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `functie_has_evenement`
--

INSERT INTO `functie_has_evenement` (`functieID`, `evenementID`, `aantal`) VALUES
(1, 18, 5),
(2, 18, 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `presentie`
--

DROP TABLE IF EXISTS `presentie`;
CREATE TABLE IF NOT EXISTS `presentie` (
  `accountID` int(11) NOT NULL,
  `evenementID` int(11) NOT NULL,
  `datum` date NOT NULL,
  `begintijd` time NOT NULL,
  `eindtijd` time DEFAULT NULL,
  PRIMARY KEY (`accountID`,`evenementID`,`datum`,`begintijd`),
  KEY `fk_account_has_evenement_evenement1_idx` (`evenementID`),
  KEY `fk_account_has_evenement_account1_idx` (`accountID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `presentie`
--

INSERT INTO `presentie` (`accountID`, `evenementID`, `datum`, `begintijd`, `eindtijd`) VALUES
(2, 1, '2020-03-25', '13:00:00', '15:00:00'),
(2, 18, '2020-03-09', '13:00:00', '18:00:00');

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `account_has_evenement`
--
ALTER TABLE `account_has_evenement`
  ADD CONSTRAINT `fk_account_has_evenement_account2` FOREIGN KEY (`accountID`) REFERENCES `account` (`accountID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_account_has_evenement_evenement2` FOREIGN KEY (`evenementID`) REFERENCES `evenement` (`evenementID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_account_has_evenement_functie1` FOREIGN KEY (`functieID`) REFERENCES `functie` (`functieID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `account_has_functie`
--
ALTER TABLE `account_has_functie`
  ADD CONSTRAINT `fk_account_has_functie_account1` FOREIGN KEY (`accountID`) REFERENCES `account` (`accountID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_account_has_functie_functie1` FOREIGN KEY (`functieID`) REFERENCES `functie` (`functieID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `functie_has_evenement`
--
ALTER TABLE `functie_has_evenement`
  ADD CONSTRAINT `fk_functie_has_evenement_evenement1` FOREIGN KEY (`evenementID`) REFERENCES `evenement` (`evenementID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_functie_has_evenement_functie` FOREIGN KEY (`functieID`) REFERENCES `functie` (`functieID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `presentie`
--
ALTER TABLE `presentie`
  ADD CONSTRAINT `fk_account_has_evenement_account1` FOREIGN KEY (`accountID`) REFERENCES `account` (`accountID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_account_has_evenement_evenement1` FOREIGN KEY (`evenementID`) REFERENCES `evenement` (`evenementID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;