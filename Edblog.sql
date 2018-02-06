-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 04 feb 2018 om 22:39
-- Serverversie: 10.1.29-MariaDB
-- PHP-versie: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Edblog`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Artikelen`
--

CREATE TABLE `Artikelen` (
  `Artnr` int(11) NOT NULL,
  `Artikelnaam` varchar(255) NOT NULL,
  `Artikelinhoud` varchar(10000) NOT NULL,
  `catid` int(11) NOT NULL,
  `Datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Artikelen`
--

INSERT INTO `Artikelen` (`Artnr`, `Artikelnaam`, `Artikelinhoud`, `catid`, `Datum`) VALUES
(1, 'quisquam est qui dolorem', 'Etiam ut ex non orci maximus convallis. Maecenas consectetur luctus gravida.\r\n          Maecenas tincidunt nulla quis quam vulputate, sit amet pellentesque tellus hendrerit.\r\n          Suspendisse potenti. Morbi dictum nulla diam, at maximus turpis vehicula et. Donec erat\r\n ligula, viverra vel feugiat et, convallis eu nunc. Etiam posuere libero vitae tempus ornare.', 1, '2018-01-31 13:51:11'),
(2, 'quisquam est qui dolorem', '          Ut molestie nisi vel sollicitudin sagittis. Integer molestie diam in ex fermentum pretium.\r\n          Sed at turpis consectetur, condimentum massa a, sollicitudin tortor. Donec sit amet mi sed\r\n          mauris euismod facilisis ac imperdiet sapien. Aenean at maximus dolor. Nullam efficitur,\r\n          nunc vitae porta lobortis, orci est blandit nisl, id congue sapien tortor sed felis. Vestibulum\r\n          a lobortis nunc. Sed lacinia mauris non ornare ultrices. Nunc a neque molestie, porttitor risus\r\n          eu, dapibus elit. Pellentesque molestie imperdiet massa, ac dapibus arcu feugiat eu.', 1, '2018-01-31 13:51:11'),
(4, 'quisquam est qui dolorem', 'Quisque vel rhoncus risus. Praesent purus nunc, vulputate a pretium nec, tempus vestibulum\r\n           elit. Vivamus accumsan dui sed dui euismod cursus. Morbi ac lacus id libero consectetur\r\n           semper id at nisl. Sed nisi ligula, interdum eget velit eget, vehicula porttitor nibh.\r\n           Integer placerat viverra fermentum. Aliquam ut quam viverra nibh iaculis tincidunt.\r\n           Pellentesque molestie enim non enim ultricies molestie.', 2, '2018-01-31 13:53:42'),
(9, 'test', 'hallo', 2, '2018-02-01 14:52:20'),
(10, 'test', 'Dit artikel gaat over Fons.', 6, '2018-02-01 15:18:28'),
(11, 'test', 'gaat overHenk', 5, '2018-02-01 15:29:33'),
(12, 'doemaarwat', 'Kijken of hij het doet.', 6, '2018-02-01 22:45:17');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categorieen`
--

CREATE TABLE `categorieen` (
  `catid` int(11) NOT NULL,
  `catnaam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `categorieen`
--

INSERT INTO `categorieen` (`catid`, `catnaam`) VALUES
(4, 'Edwin Zuiderweg'),
(6, 'Fons van Hamond'),
(5, 'Henk van Putten'),
(3, 'Michiel Meeuwsen'),
(2, 'Paul Zilverberg'),
(0, 'Peter Bodewes'),
(9, 'Pietje Precies'),
(1, 'Wim Krijnen');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Artikelen`
--
ALTER TABLE `Artikelen`
  ADD PRIMARY KEY (`Artnr`);

--
-- Indexen voor tabel `categorieen`
--
ALTER TABLE `categorieen`
  ADD PRIMARY KEY (`catid`),
  ADD UNIQUE KEY `catnaam` (`catnaam`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `Artikelen`
--
ALTER TABLE `Artikelen`
  MODIFY `Artnr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
