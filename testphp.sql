-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2017 at 04:20 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `author`) VALUES
(1, 'Ivan Franko'),
(2, 'Charlotte Anley');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `author_id` int(11) UNSIGNED NOT NULL,
  `genre_id` int(11) UNSIGNED NOT NULL,
  `language` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `publication_date` date DEFAULT NULL,
  `isbn_number` char(14) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `image_path` varchar(2048) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author_id`, `genre_id`, `language`, `publication_date`, `isbn_number`, `image_path`) VALUES
(2, 'Ivan do the 4242', 1, 1, 'Ukranian', '2017-09-05', '99921-58-10-7', 'webroot/images/download.png'),
(3, 'Man and seal', 2, 10, 'English', '2017-09-06', '4214124141412', NULL),
(4, 'Babababa', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(392, 'Bagrdbababa', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(393, 'Babafsebaba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(394, 'Bababrweaba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(395, 'Babafwefsebaba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(396, 'Bababsefewaba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(397, 'Babafweba3ba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(398, 'Babafffseesfwebaba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(399, 'Babafwebaba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(400, 'Babafwegsebaba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(401, 'Bababab3a11', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(402, 'Babaffsewebaba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(403, 'Bababraba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(404, 'Babagdbaba11', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(405, 'Babab232aba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(406, 'Babab33aba3232', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(407, 'Bababab3a', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(408, 'Baba54baba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(409, 'Baba532baba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(410, 'Bababab352a', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(411, 'Ba4343bab2ba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(412, 'Bababa32323ba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(413, 'Baba523baba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(414, 'Bab324242ababa', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(415, 'Babab1aba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(416, 'Babaewbaba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(417, 'Babagd3232baba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(418, 'Bababab321314a', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(419, 'Bababafre2ba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(420, 'Baba555baba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(421, 'Baba54654baba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(422, 'Bababa645646ba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(423, 'Babgdwa45rdababa', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(424, 'Babagdb5454aba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(425, 'Babhtababa', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(426, 'Bfffsdabagrbaba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(427, 'Babagdrbaba3', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(428, 'Babagdrbaba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(429, 'Bababgdraba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(430, 'Babaggggrbaba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(431, 'Babagrdbaba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(432, 'Babafawbaba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(433, 'Bababgtaba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(434, 'Bababdaaba', 2, 9, 'Ukraninan', '2017-09-13', 'ewa4324242', NULL),
(438, '1111', 1, 2, '111', '0000-00-00', '111', NULL),
(439, '2313', 1, 1, '12313', '0000-00-00', '3131', NULL),
(442, '2313', 1, 1, '12313', '0000-00-00', '3131', NULL),
(443, '2313', 1, 1, '12313', '0000-00-00', '3131', NULL),
(444, '2313', 1, 1, '12313', '0000-00-00', '3131', NULL),
(445, '1', 1, 2, '1', '0000-00-00', '1', NULL),
(447, '1', 1, 2, '1', '0000-00-00', '1', NULL),
(448, '1', 1, 2, '1', '0000-00-00', '1', NULL),
(449, '1', 2, 1, '1', '0000-00-00', '1', NULL),
(450, '1', 2, 1, '1', '0000-00-00', '1', NULL),
(451, '1', 2, 1, '1', '0000-00-00', '1', NULL),
(455, '1', 2, 1, '1', '0000-00-00', '1', NULL),
(456, '1', 2, 3, '1', '0000-00-00', '1', NULL),
(457, '1', 1, 2, '1', '0000-00-00', '1', NULL),
(458, '1', 1, 2, '1', '0000-00-00', '1', NULL),
(459, '1', 1, 2, '1', '0000-00-00', '1', NULL),
(460, '12424', 1, 2, '1', '0000-00-00', '1', NULL),
(461, '1', 1, 2, '1', '0000-00-00', '1', NULL),
(462, '1', 1, 2, '1', '0000-00-00', '1', NULL),
(463, '1', 1, 2, '1', '0000-00-00', '1', NULL),
(464, '1', 1, 2, '1', '0000-00-00', '1', NULL),
(465, '1', 1, 2, '1', '0000-00-00', '1', NULL),
(466, '1', 1, 2, '1', '0000-00-00', '1', NULL),
(467, '1', 1, 2, '1', '0000-00-00', '1', NULL),
(468, '1', 1, 2, '1', '0000-00-00', '1', NULL),
(469, '34213', 2, 2, 'ukr', '0000-00-00', '294i1924i91', NULL),
(470, 'Ivan do the php', 1, 1, 'Ukranian', '2017-09-05', '99921-58-10-7', NULL),
(472, 'Ivan do the php', 1, 1, 'Ukranian', '2017-09-05', '99921-58-10-7', NULL),
(474, '1', 1, 2, '1', '0000-00-00', '1', NULL),
(475, 'Ivan do the php', 1, 1, 'Ukranian', '2017-09-05', '99921-58-10-7', NULL),
(476, 'Ivan do the php', 1, 1, 'Ukranian', '2017-09-05', '99921-58-10-7', NULL),
(477, 'Ivan do the php', 1, 1, 'Ukranian', '2017-09-05', '99921-58-10-7', NULL),
(478, 'Ivan do the php', 1, 1, 'Ukranian', '2017-09-05', '99921-58-10-7', NULL),
(479, 'Ivan do the php', 1, 1, 'Ukranian', '2017-09-05', '99921-58-10-7', NULL),
(480, 'Ivan do the php', 1, 1, 'Ukranian', '2017-09-05', '99921-58-10-7', NULL),
(481, 'Ivan do the php', 1, 1, 'Ukranian', '2017-09-05', '99921-58-10-7', NULL),
(482, 'Ivan do the php', 1, 1, 'Ukranian', '2017-09-05', '99921-58-10-7', NULL),
(483, '1', 1, 2, '1', '0000-00-00', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) UNSIGNED NOT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genre`) VALUES
(1, 'Comedy'),
(2, 'Drama'),
(3, 'Horror'),
(4, 'Realistic'),
(5, 'Romantic'),
(6, 'Satire'),
(7, 'Tragedy'),
(8, 'Tragicomedy'),
(9, 'Fantasy'),
(10, 'Mythology');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre_id` (`genre_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=484;
--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `author_id` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `genre_id` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
