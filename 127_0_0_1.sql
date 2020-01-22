-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2020 m. Sau 22 d. 16:26
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darbuotojai`
--
CREATE DATABASE IF NOT EXISTS `darbuotojai` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `darbuotojai`;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `darbuotojai`
--

CREATE TABLE `darbuotojai` (
  `id` int(11) NOT NULL,
  `asmens_kodas` varchar(30) NOT NULL,
  `vardas` varchar(25) NOT NULL,
  `pavarde` varchar(25) NOT NULL,
  `pareigos` varchar(20) NOT NULL,
  `el_pastas` varchar(30) NOT NULL,
  `darbu_uzmokestis` decimal(10,0) NOT NULL,
  `atostogos` varchar(15) NOT NULL,
  `ugis` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `darbuotojai`
--

INSERT INTO `darbuotojai` (`id`, `asmens_kodas`, `vardas`, `pavarde`, `pareigos`, `el_pastas`, `darbu_uzmokestis`, `atostogos`, `ugis`) VALUES
(1, '69696969', 'Agurkas', 'Agurkinis', 'darbuotojas', 'sdhdkjh@gmail.com', '450', 'ne', '2'),
(2, '11116969', 'Bananas', 'Nuluptasis', 'darbuotojas', 'dirbanskj@gmail.com', '780', 'ne', '2'),
(3, '66699900', 'Alio', 'Valio', 'darbuotojas', 'wuiwouiww@gmail.com', '489', 'taip', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `darbuotojai`
--
ALTER TABLE `darbuotojai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `darbuotojai`
--
ALTER TABLE `darbuotojai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Database: `db`
--
CREATE DATABASE IF NOT EXISTS `db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db`;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(128) NOT NULL,
  `school` varchar(128) NOT NULL,
  `group2` varchar(128) NOT NULL,
  `average2` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `students`
--

INSERT INTO `students` (`id`, `data`, `name`, `school`, `group2`, `average2`) VALUES
(1, '2019-10-01 09:45:35', 'Antanelis11', 'KTU', 'IT 18/1 T', 2.5),
(2, '2019-10-01 09:46:05', 'Antanelis11', 'KTU', 'IT 18/1 T', 2.5),
(3, '2019-10-01 09:46:50', 'Antanelis11', 'KTU', 'IT 18/1 T', 2.5),
(4, '2019-10-01 09:51:10', 'Antanelis11', 'KTU', 'IT 18/1 T', 2.5),
(5, '2019-10-01 09:52:10', 'Antanelis11', 'KTU', 'IT 18/1 T', 2.5),
(6, '2019-10-01 09:52:28', 'Antanelis11', 'KTU', 'IT 18/1 T', 2.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Database: `filmai`
--
CREATE DATABASE IF NOT EXISTS `filmai` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `filmai`;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `filmai`
--

CREATE TABLE `filmai` (
  `id` int(11) NOT NULL,
  `pavadinimas` text NOT NULL,
  `rezisierius` text NOT NULL,
  `metai` year(4) NOT NULL,
  `reitingas` double NOT NULL,
  `aprasymas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `filmai`
--

INSERT INTO `filmai` (`id`, `pavadinimas`, `rezisierius`, `metai`, `reitingas`, `aprasymas`) VALUES
(1, 'Titanikas', 'Cameron', 2001, 7.5, 'Filmas apie laivo nelaime'),
(2, 'Vagiu irstva', 'Nezinomas', 2019, 10, 'Filmas apie banko plesima.'),
(3, 'iÅ¡traukti peiliai', 'rian johnson', 2019, 8.1, 'veiksmo komedija');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `zanrai`
--

CREATE TABLE `zanrai` (
  `id` int(11) NOT NULL,
  `zanras` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `zanrai`
--

INSERT INTO `zanrai` (`id`, `zanras`) VALUES
(0, 'siaubo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filmai`
--
ALTER TABLE `filmai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filmai`
--
ALTER TABLE `filmai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Database: `filmux`
--
CREATE DATABASE IF NOT EXISTS `filmux` DEFAULT CHARACTER SET utf32 COLLATE utf32_lithuanian_ci;
USE `filmux`;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `filmai`
--

CREATE TABLE `filmai` (
  `id` int(11) NOT NULL,
  `pavadinimas` text COLLATE utf32_lithuanian_ci NOT NULL,
  `rezisierius` text COLLATE utf32_lithuanian_ci NOT NULL,
  `metai` int(11) NOT NULL,
  `reitingas` float NOT NULL,
  `aprasymas` text COLLATE utf32_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_lithuanian_ci;

--
-- Sukurta duomenų kopija lentelei `filmai`
--

INSERT INTO `filmai` (`id`, `pavadinimas`, `rezisierius`, `metai`, `reitingas`, `aprasymas`) VALUES
(1, 'Garis Floperis', 'Chris Columbus', 2001, 8, 'Po śmierci rodziców Harry’ego Pottera dyrektor Szkoły Magii i Czarodziejstwa w Hogwarcie, Albus Dumbledore i nauczycielka transmutacji, Minerwa McGonagall postanawiają oddać chłopca pod opiekę nieposiadającej magicznych zdolności rodziny Dursleyów,'),
(2, 'MAtilda', '', 2000, 7, 'Maža mergaitė turi paslaptingų galių'),
(3, 'Toy Story', 'Jon Laseter', 2002, 8, 'Žaislai gali būt gyvi kai nori');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `zanrai`
--

CREATE TABLE `zanrai` (
  `id` int(11) NOT NULL,
  `zanras` text COLLATE utf32_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_lithuanian_ci;

--
-- Sukurta duomenų kopija lentelei `zanrai`
--

INSERT INTO `zanrai` (`id`, `zanras`) VALUES
(1, 'Siaubo'),
(2, 'Dokumentika'),
(3, 'Komedija');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filmai`
--
ALTER TABLE `filmai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zanrai`
--
ALTER TABLE `zanrai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filmai`
--
ALTER TABLE `filmai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zanrai`
--
ALTER TABLE `zanrai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Database: `flights`
--
CREATE DATABASE IF NOT EXISTS `flights` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `flights`;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `category`
--

CREATE TABLE `category` (
  `id` int(20) NOT NULL,
  `name` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Sukurta duomenų kopija lentelei `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'North cold'),
(2, 'Summer warm'),
(3, 'Amazing view');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `flight`
--

CREATE TABLE `flight` (
  `id` int(20) NOT NULL,
  `name` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `flight_from` varchar(20) COLLATE utf8_lithuanian_ci NOT NULL,
  `flight_to` varchar(20) COLLATE utf8_lithuanian_ci NOT NULL,
  `price` float NOT NULL,
  `flight_category` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Sukurta duomenų kopija lentelei `flight`
--

INSERT INTO `flight` (`id`, `name`, `description`, `flight_from`, `flight_to`, `price`, `flight_category`) VALUES
(1, 'Kopenhaga trip', 'Have a nice vacation in Kopenhaga!', 'Kaunas', 'Kopenhaga', 300, 1),
(3, 'Sofija Trip', 'Fun trip to Sofija!', 'Kaunas', 'Sofija', 150.45, 2),
(4, 'Australia', 'Have a nice vacation in Australia!', 'Kaunas', 'Sidney', 845.26, 3),
(5, 'Lisboa Trip', 'Cultural trip', 'Kaunas', 'Lisboa', 84.56, 2),
(6, 'Lisboa Trip', 'Cultural trip', 'Kaunas', 'Lisboa', 84.56, 2),
(7, 'Lisboa Trip', 'Cultural trip', 'Kaunas', 'Lisboa', 84.56, 2),
(8, 'Lisboa Trip', 'Cultural trip', 'Kaunas', 'Lisboa', 84.56, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Database: `forum_cinemas`
--
CREATE DATABASE IF NOT EXISTS `forum_cinemas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `forum_cinemas`;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `filmai2`
--

CREATE TABLE `filmai2` (
  `ID` int(6) NOT NULL,
  `zanro_ID` int(6) NOT NULL,
  `pavadinimas` varchar(20) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `aprasymas` varchar(200) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `premjeros_data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `filmai2`
--

INSERT INTO `filmai2` (`ID`, `zanro_ID`, `pavadinimas`, `aprasymas`, `premjeros_data`) VALUES
(101, 2, 'Karibų piratai', 'Daug piratų', '2019-03-22'),
(102, 1, 'Labas', 'Mano vardas krabas', '2019-06-14'),
(105, 2, 'ihu44', 'huiouio22', '2019-03-21'),
(106, 3, 'Karibų piratai 3', 'huiouio', '2019-03-30'),
(108, 3, 'ihu', 'huiouio22', '2019-03-15'),
(110, 1, '274474', 'gjgj', '2019-03-15'),
(111, 4, 'Titanikas 2', 'Labai liūdnas filmas', '2019-07-19'),
(112, 2, 'Indiana Jones', 'gjgj', '2019-03-31'),
(113, 4, 'Miau', 'huiouio', '2019-03-15');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `zanrai`
--

CREATE TABLE `zanrai` (
  `ID` int(6) NOT NULL,
  `zanras` varchar(20) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `zanrai`
--

INSERT INTO `zanrai` (`ID`, `zanras`) VALUES
(1, 'siaubo'),
(2, 'nuotykių'),
(3, 'dokumentika'),
(4, 'romantinis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filmai2`
--
ALTER TABLE `filmai2`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `zanro_ID` (`zanro_ID`);

--
-- Indexes for table `zanrai`
--
ALTER TABLE `zanrai`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filmai2`
--
ALTER TABLE `filmai2`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `zanrai`
--
ALTER TABLE `zanrai`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Apribojimai eksportuotom lentelėm
--

--
-- Apribojimai lentelei `filmai2`
--
ALTER TABLE `filmai2`
  ADD CONSTRAINT `filmai2_ibfk_1` FOREIGN KEY (`zanro_ID`) REFERENCES `zanrai` (`ID`);
--
-- Database: `mokiniai`
--
CREATE DATABASE IF NOT EXISTS `mokiniai` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mokiniai`;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `ivertinimai`
--

CREATE TABLE `ivertinimai` (
  `id` int(11) NOT NULL,
  `dalykas` varchar(255) NOT NULL,
  `ivertinimas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `klasės`
--

CREATE TABLE `klasės` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(255) NOT NULL,
  `vadovas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `moksleiviai`
--

CREATE TABLE `moksleiviai` (
  `id` int(11) NOT NULL,
  `vardas` varchar(255) NOT NULL,
  `pavarde` varchar(255) NOT NULL,
  `el_pastas` varchar(255) NOT NULL,
  `telefon_nr` int(11) NOT NULL,
  `klases_id` int(11) NOT NULL,
  `ivertinimai_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `moksleiviai`
--

INSERT INTO `moksleiviai` (`id`, `vardas`, `pavarde`, `el_pastas`, `telefon_nr`, `klases_id`, `ivertinimai_id`) VALUES
(2, 'hello', 'AZddddÄ…Ä@gmail.com', 'as@gmail.com', 4564875, 5, 0),
(3, 'hello', 'AZd@gmail.com', 'as@gmail.com', 4564875, 4, 0),
(4, 'Tumas', 'BartaÅ¡ius', 'as@gmail.com', 4564875, 1, 0),
(5, 'hello', 'asdasd', 'as@gmail.com', 5465478, 7, 0),
(6, 'Vardas', 'pavardÄ—', 'ttt@gmail.com', 860010258, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ivertinimai`
--
ALTER TABLE `ivertinimai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klasės`
--
ALTER TABLE `klasės`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moksleiviai`
--
ALTER TABLE `moksleiviai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ivertinimai`
--
ALTER TABLE `ivertinimai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `moksleiviai`
--
ALTER TABLE `moksleiviai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Database: `moviedb`
--
CREATE DATABASE IF NOT EXISTS `moviedb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `moviedb`;

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
(1, 'thriller'),
(2, 'comedy');

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
(3, 'memento', 'mindfuck', 'nolan', '1', '8.1', NULL),
(4, 'memento', 'mindfuck', 'nolan', '1', '8.2', NULL),
(5, 'memento', 'mindfuck', 'nolan', '6', '9.1', 1),
(6, '', '', '', NULL, '0.0', NULL),
(7, 'ergaerg', 'ergaerg', 'erg', '6', '8.5', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Sukurta duomenų kopija lentelei `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'table', 'Ä¯Ä¯Å¡Ä¯Å¡Å¡', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"allrows\":\"1\",\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@TABLE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"LentelÄ—s @TABLE@ struktÅ«ra\",\"latex_structure_continued_caption\":\"LentelÄ—s @TABLE@ struktÅ«ra (tÄ™sinys)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"LentelÄ—s @TABLE@ turinys\",\"latex_data_continued_caption\":\"LentelÄ—s @TABLE@ turinys (tÄ™sinys)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}'),
(2, 'root', 'server', 'moviebackup', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"darbuotojai\",\"db\",\"filmai\",\"filmux\",\"flights\",\"forum_cinemas\",\"mokiniai\",\"moviedb\",\"phpmyadmin\",\"test\",\"todo\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"LentelÄ—s @TABLE@ struktÅ«ra\",\"latex_structure_continued_caption\":\"LentelÄ—s @TABLE@ struktÅ«ra (tÄ™sinys)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"LentelÄ—s @TABLE@ turinys\",\"latex_data_continued_caption\":\"LentelÄ—s @TABLE@ turinys (tÄ™sinys)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Sukurta duomenų kopija lentelei `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"moviedb\",\"table\":\"movies\"},{\"db\":\"moviedb\",\"table\":\"genres\"},{\"db\":\"filmux\",\"table\":\"filmai\"},{\"db\":\"filmux\",\"table\":\"zanrai\"},{\"db\":\"filmai\",\"table\":\"filmai\"},{\"db\":\"mokiniai\",\"table\":\"moksleiviai\"},{\"db\":\"mokiniai\",\"table\":\"klas\\u0117s\"},{\"db\":\"mokiniai\",\"table\":\"ivertinimai\"},{\"db\":\"darbuotojai\",\"table\":\"darbuotojai\"},{\"db\":\"filmai\",\"table\":\"zanrai\"}]');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

--
-- Sukurta duomenų kopija lentelei `pma__table_info`
--

INSERT INTO `pma__table_info` (`db_name`, `table_name`, `display_field`) VALUES
('forum_cinemas', 'filmai2', 'pavadinimas');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Sukurta duomenų kopija lentelei `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'filmux', 'filmai', '{\"sorted_col\":\"`filmai`.`aprasymas` ASC\"}', '2020-01-22 09:32:07');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Sukurta duomenų kopija lentelei `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2020-01-22 14:08:58', '{\"lang\":\"lt\",\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `todo`
--
CREATE DATABASE IF NOT EXISTS `todo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `todo`;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `vardas` varchar(50) NOT NULL,
  `pavarde` varchar(50) NOT NULL,
  `statusas` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
