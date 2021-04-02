-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 02 apr 2021 om 21:06
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `usersRole` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `usersRole`) VALUES
(1, 'Frank de Heus', 'Zaphi3r@hotmail.com', 'Frank', '$2y$10$8TJfPSHhrodRc2v8TeAcK.ID5w.glbZ8liWqnWeIGzlPkEtYZZH8G', 'Medewerker'),
(2, 'frank', 'Zaph13r@hotmail.com', 'Henk', '$2y$10$DAaQT.JodN92YQREvIUReeHv171hdC9ULEUsK79EvBw6oO6Tf8UYy', ''),
(3, 'abc', 'abc@abc.nl', 'abc', '$2y$10$zS0p.3.B6pCsE0ybMEp4h.jeRLo6hzTBnOs.PMhyXeaVvyyg3PXXK', ''),
(4, 'admin', 'admin@admin.com', 'admin', '$2y$10$2435M4o7wtDK2E3e/yC9Huej3sND.z9ZnFdo4tNVLC9HoQArvmIZq', 'Admin'),
(5, 'test', 'test@test.nl', 'test', '$2y$10$cHnAkJta8PjkX7Fhzt0QteZPv56P0wdVRR1FndETgbqerjjkh5WWS', 'Student');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
