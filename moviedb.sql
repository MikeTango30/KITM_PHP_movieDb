-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2020 m. Sau 23 d. 10:11
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedb`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `genre_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `genres`
--

INSERT INTO `genres` (`id`, `genre_name`) VALUES
(1, 'Trileris'),
(2, 'Komedija'),
(3, 'Siaubo');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `director` varchar(100) DEFAULT NULL,
  `year` varchar(45) DEFAULT NULL,
  `imdb` decimal(2,1) DEFAULT NULL,
  `genre_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `director`, `year`, `imdb`, `genre_id`) VALUES
(1, 'Pulp Fiction', 'Kultinis filmas', 'Quentin Tarantino', '1994', '8.8', 1),
(2, 'Shaun of the dead', 'Komedija apie zombius', 'Edgar Wright', '2004', '7.9', 2),
(15, 'Varna', 'filmas apie varna', 'varnėnas', '2024', '1.1', 2),
(16, '12 Monkeys', 'Briusas Willisas distopijoje.', 'some guy', '1995', '8.5', 1),
(17, 'filmas', 'puikus aprasymas', 'asta', '1921', '6.5', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
