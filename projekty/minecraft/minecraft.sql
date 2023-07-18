-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Lip 2023, 17:18
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
-- Baza danych: `minecraft`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `strona`
--

CREATE TABLE `strona` (
  `id` int(7) NOT NULL,
  `typ` varchar(25) NOT NULL,
  `name_img` varchar(100) NOT NULL,
  `name_` varchar(100) NOT NULL,
  `opis_` varchar(300) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `publikacja` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `strona`
--

INSERT INTO `strona` (`id`, `typ`, `name_img`, `name_`, `opis_`, `name_user`, `publikacja`) VALUES
(1, 'img_info', 'noc2(1).png', '', '', 'SOBOLsky', 0),
(3, 'img_info', 'info1(1).png', '', '', 'SOBOLsky', 1),
(4, 'tryb_gry', 'minecraft1(5).png', 'ZXCZXCZCZC', 'Tu wpisz tekst który pojawi się domyślnie', 'SOBOLsky', 1),
(5, 'avatar_admin', 'vw_logo.png', '', '', 'SOBOLsky', 1),
(6, 'avatar_admin', 'drewno_mc.png', '', '', 'kamil1', 1),
(8, 'tryb_gry', 'minecraft1(6)(1).png', 'Atak na gildie', 'hhh', 'kamil1', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(7) NOT NULL,
  `id_user` int(7) NOT NULL,
  `login_` varchar(100) NOT NULL,
  `password_` varchar(41) NOT NULL,
  `email_` varchar(100) NOT NULL,
  `admin_` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `id_user`, `login_`, `password_`, `email_`, `admin_`) VALUES
(1, 1, 'SOBOLsky', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', '', 3),
(6, 6, 'kamil1', 'a60dd3b3a59a9f401f7601977f5bcd7c977ed6f6', 'xyz@op.omg', 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `strona`
--
ALTER TABLE `strona`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `strona`
--
ALTER TABLE `strona`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
