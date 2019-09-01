
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Hoszt: localhost
-- Létrehozás ideje: 2017. jún. 27. 08:21
-- Szerver verzió: 10.1.24-MariaDB
-- PHP verzió: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `u462798691_dev`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet: `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cim` text COLLATE utf8_hungarian_ci NOT NULL,
  `tartalom` text COLLATE utf8_hungarian_ci NOT NULL,
  `szerzo` text COLLATE utf8_hungarian_ci NOT NULL,
  `datum` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=47 ;

--
-- A tábla adatainak kiíratása `post`
--

INSERT INTO `post` (`id`, `cim`, `tartalom`, `szerzo`, `datum`) VALUES
(21, 'Ez egy post...', 'Ez a poszt már nem a saját környezetemben hanem, a migrált, új helyén, a hostinger szerverein fut. ', '', '2017-04-15'),
(22, 'Semmi', 'Valami', '', '2017-04-15'),
(23, 'LOL', 'Há ez fasza', '', '2017-04-15'),
(44, 'HIBAJAVÍTÁS ÉS BŐVÍTÉS', 'Az oldal képes a felhasználóneveket kezelni, létrehozni, használni. A jelszavas védelem még folyamatban.', 'zuckl', '2017-04-27'),
(25, 'iPad-ról írva', 'Ezt iPadrol irtam. Lassuk milyen. Szerintem jo.\r\n-----------------\r\nLassuk!', '', '2017-04-15'),
(27, 'Fejlődés', 'Az oldal fejlődik! Az oldal tárolja a poszt létrehozás idejét, és követeli a felhasználó nevet is. Meglátjuk hogyan tovább.', 'zuckl', '2017-04-15'),
(29, 'Felhasználó nevek tesztelése part01', 'A users táblában még semmi nincs. Tehát hibát kell generálnom.', 'zuckl', '2017-04-15'),
(40, 'sfdfds', 'sdfsdf', 'ghdgfd', '2017-04-19'),
(41, 'asd', 'asd', 'asd', '2017-04-20'),
(42, 'asda', 'ads', 'asd', '2017-04-20'),
(43, 'asd', 'asd', 'asd', '2017-04-20'),
(45, 'sdasd', 'dasdasd', 'zuckl', '2017-04-28'),
(46, 'asd', 'adsd', 'test', '2017-06-13');

-- --------------------------------------------------------

--
-- Tábla szerkezet: `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`user_name`, `last_name`, `first_name`, `reg_date`) VALUES
('zuckl', 'Zuck', 'Levente', '2017-04-15'),
('zucker', 'Zuck', 'Levente', '2017-04-16'),
('asd0asd0', 'asd0asd', 'ads', '2017-05-17'),
('test', 'Béla', 'Béla', '2017-06-13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
