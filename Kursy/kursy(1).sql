-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 03, 2024 at 06:23 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kursy`
--

CREATE TABLE `kursy` (
  `id` int(11) NOT NULL,
  `Nazwa` varchar(25) NOT NULL,
  `Opis` varchar(500) NOT NULL,
  `Poziom_Trudnosci` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kursy`
--

INSERT INTO `kursy` (`id`, `Nazwa`, `Opis`, `Poziom_Trudnosci`) VALUES
(1, 'a', 'aa', 'aa'),
(2, 'a', 'aa', 'aa'),
(3, 'Podstawy programowania', 'Kurs wprowadzający do programowania.', 'Łatwy'),
(4, 'Zaawansowane techniki pro', 'Kurs dla zaawansowanych programistów.', 'Trudny'),
(5, 'Bazy danych', 'Wprowadzenie do baz danych i SQL.', 'Średni'),
(6, 'Algorytmy i struktury dan', 'Kurs dotyczący algorytmów i struktur danych.', 'Trudny');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posiadane`
--

CREATE TABLE `posiadane` (
  `id_uzytkownika` int(11) NOT NULL,
  `id_kursu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posiadane`
--

INSERT INTO `posiadane` (`id_uzytkownika`, `id_kursu`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 2),
(3, 3),
(3, 4),
(4, 1),
(4, 4),
(9, 1),
(9, 3),
(15, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `Imie` varchar(30) NOT NULL,
  `Nazwisko` varchar(11) NOT NULL,
  `tworca` int(11) NOT NULL,
  `login` varchar(25) DEFAULT NULL,
  `haslo` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `Imie`, `Nazwisko`, `tworca`, `login`, `haslo`) VALUES
(1, 'a', 'a', 0, 'a', 'a'),
(2, 'a', 'a', 0, 'a', 'a'),
(3, 'Jan', 'Kowalski', 0, 'a', 'a'),
(4, 'Anna', 'Nowak', 0, 'a', 'a'),
(5, 'Piotr', 'Wiśniewski', 0, 'a', 'a'),
(6, 'Katarzyna', 'Wójcik', 0, 'a', 'a'),
(7, '', '', 0, '', ''),
(8, '', '', 0, '', ''),
(9, 'Czarek', 'A', 0, 'login', 'haslo'),
(10, '', '', 0, '', ''),
(11, '', '', 0, '', ''),
(12, 'a', 'Aa', 0, 'aa', 'aa'),
(13, 'a', 'Aa', 0, 'aa', 'aa'),
(14, 'a', 'a', 0, 'a', 'a'),
(15, 'asd', 'asd', 0, 'x', 'x');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kursy`
--
ALTER TABLE `kursy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `posiadane`
--
ALTER TABLE `posiadane`
  ADD PRIMARY KEY (`id_uzytkownika`,`id_kursu`),
  ADD KEY `id_kursu` (`id_kursu`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kursy`
--
ALTER TABLE `kursy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posiadane`
--
ALTER TABLE `posiadane`
  ADD CONSTRAINT `posiadane_ibfk_1` FOREIGN KEY (`id_uzytkownika`) REFERENCES `uzytkownicy` (`id`),
  ADD CONSTRAINT `posiadane_ibfk_2` FOREIGN KEY (`id_kursu`) REFERENCES `kursy` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
