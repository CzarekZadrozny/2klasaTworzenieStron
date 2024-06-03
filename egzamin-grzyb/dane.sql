-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Mar 2023, 15:07
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `grzybobranie`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grzyby`
--

CREATE TABLE `grzyby` (
  `id` int(10) UNSIGNED NOT NULL,
  `rodzina_id` int(10) UNSIGNED NOT NULL,
  `potrawy_id` int(10) UNSIGNED NOT NULL,
  `nazwa` text DEFAULT NULL,
  `potoczna` text DEFAULT NULL,
  `jadalny` tinyint(1) DEFAULT NULL,
  `miesiac_zbierania` int(11) DEFAULT NULL,
  `nazwa_pliku` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Zrzut danych tabeli `grzyby`
--

INSERT INTO `grzyby` (`id`, `rodzina_id`, `potrawy_id`, `nazwa`, `potoczna`, `jadalny`, `miesiac_zbierania`, `nazwa_pliku`) VALUES
(1, 1, 2, 'pieczarka dwuzarodnikowa', 'pieczarka', 1, 0, 'pieczarka.jpg'),
(2, 1, 2, 'czubajka kania', 'kania', 1, 9, 'kania.jpg'),
(3, 2, 4, 'borowik szlachetny', 'prawdziwek', 1, 10, 'borowik.jpg'),
(4, 2, 4, 'xerocomus', 'podgrzybek', 1, 10, 'podgrzybek.jpg'),
(5, 2, 5, 'goryczak zolciowy', 'szatan', 0, -1, 'szatan.jpg'),
(6, 3, 1, 'pieprznik jadalny', 'kurka', 1, 9, 'kurka.jpg'),
(7, 5, 1, 'pleurotus', 'boczniak', 1, 0, 'boczniak.jpg'),
(8, 4, 3, 'trufla letnia', 'trufla', 1, 8, 'trufla.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `potrawy`
--

CREATE TABLE `potrawy` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Zrzut danych tabeli `potrawy`
--

INSERT INTO `potrawy` (`id`, `nazwa`) VALUES
(1, 'sos'),
(2, 'duszone'),
(3, 'spagetti'),
(4, 'zupa'),
(5, 'niejadalne');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rodzina`
--

CREATE TABLE `rodzina` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Zrzut danych tabeli `rodzina`
--

INSERT INTO `rodzina` (`id`, `nazwa`) VALUES
(1, 'pieczarkowate'),
(2, 'borowikowate'),
(3, 'pieprznikowate'),
(4, 'truflowate'),
(5, 'boczniakowate');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `grzyby`
--
ALTER TABLE `grzyby`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `potrawy`
--
ALTER TABLE `potrawy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `rodzina`
--
ALTER TABLE `rodzina`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `grzyby`
--
ALTER TABLE `grzyby`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `potrawy`
--
ALTER TABLE `potrawy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `rodzina`
--
ALTER TABLE `rodzina`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
