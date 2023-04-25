-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 04 Kwi 2023, 13:46
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
-- Baza danych: `szkola`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dzieci`
--

CREATE TABLE `dzieci` (
  `Imie` text NOT NULL,
  `Nazwisko` text NOT NULL,
  `Miejscowosc` text NOT NULL,
  `PESEL` varchar(11) NOT NULL,
  `DaneRodzica` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Zrzut danych tabeli `dzieci`
--

INSERT INTO `dzieci` (`Imie`, `Nazwisko`, `Miejscowosc`, `PESEL`, `DaneRodzica`) VALUES
('Wy', 'dada', 'wro', '31552362623', 'W'),
('losowe', 'imie', 'miej', '23131231312', 'Wypy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rodzice`
--

CREATE TABLE `rodzice` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `Adres` varchar(100) NOT NULL,
  `Haslo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Zrzut danych tabeli `rodzice`
--

INSERT INTO `rodzice` (`id`, `email`, `imie`, `nazwisko`, `Adres`, `Haslo`) VALUES
(2, 'Jaca', 'Jac', 'Kowal', 'Jacek', 'J'),
(30, 'WWWWW', 'W', 'W', 'W', 'W'),
(32, 'WWWWWW', 'W', 'W', 'W', 'W'),
(33, 'Wypy', 'WW', 'WW', 'WW', 'WW'),
(48, 'Wypychowski', 'W', 'W', 'W', 'w');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `rodzice`
--
ALTER TABLE `rodzice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `rodzice`
--
ALTER TABLE `rodzice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
