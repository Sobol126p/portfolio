-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Kwi 2022, 12:00
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `game`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `magazyn`
--

CREATE TABLE `magazyn` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `wykalaczki` int(11) NOT NULL,
  `dlugopisy` int(11) NOT NULL,
  `kubki` int(11) NOT NULL,
  `telefony` int(11) NOT NULL,
  `rowery` int(11) NOT NULL,
  `samochody` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `magazyn`
--

INSERT INTO `magazyn` (`id`, `id_user`, `wykalaczki`, `dlugopisy`, `kubki`, `telefony`, `rowery`, `samochody`) VALUES
(1, 7, 0, 0, 0, 0, 0, 0),
(12, 8, 0, 0, 0, 0, 0, 0),
(13, 9, 0, 0, 0, 0, 0, 0),
(14, 10, 0, 0, 0, 0, 0, 0),
(15, 11, 0, 0, 0, 0, 0, 0),
(16, 12, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `login_` varchar(26) CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `password_` varchar(21) CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `id_user`, `login_`, `password_`) VALUES
(12, 7, 'kamilian', 'koks123'),
(26, 8, 'ciasny', 'ciasny123'),
(27, 9, 'mati34', 'hydra1'),
(28, 10, 'trebusz', 'dzikizyd'),
(29, 11, 'callmetyrat', 'amarena'),
(30, 12, 'kamilsq', 'masakrator');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zasoby`
--

CREATE TABLE `zasoby` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nazwa_firmy` varchar(100) NOT NULL,
  `monety` int(20) NOT NULL,
  `pracownicy` int(10) NOT NULL,
  `towar` int(20) NOT NULL,
  `lvl_fabryka` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zasoby`
--

INSERT INTO `zasoby` (`id`, `id_user`, `nazwa_firmy`, `monety`, `pracownicy`, `towar`, `lvl_fabryka`) VALUES
(1, 7, 'Hyper', 252505, 1, 243, 24),
(16, 8, 'ciasnyCompany', 37100, 3, 1000, 3),
(17, 9, 'loxer', 20000, 1, 10000, 1),
(18, 10, 'trebusz', 20000, 1, 10000, 1),
(19, 11, 'grustr', 20000, 1, 10000, 1),
(20, 12, 'glutex', 8054, 1, 200, 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `magazyn`
--
ALTER TABLE `magazyn`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zasoby`
--
ALTER TABLE `zasoby`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `magazyn`
--
ALTER TABLE `magazyn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT dla tabeli `zasoby`
--
ALTER TABLE `zasoby`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
