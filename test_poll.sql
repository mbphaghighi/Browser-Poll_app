-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 25, 2020 at 01:00 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_poll`
--

CREATE TABLE `tbl_poll` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `browser` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `time_submitted` varchar(255) NOT NULL,
  `date_submitted` varchar(255) NOT NULL,
  `used_browser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_poll`
--

INSERT INTO `tbl_poll` (`id`, `username`, `email`, `browser`, `description`, `time_submitted`, `date_submitted`, `used_browser`) VALUES
(1, 'mehdish', 'jjhj@gmail.com', 'Konqueror', 'good design', '1586566604', 'April 11, 2020, 2:56 am', 'Mozilla-Firefox'),
(2, 'jhgggr', 'info@clicksite.ir', 'Opera', 'good capabilities', '1586567326', 'April 11, 2020, 3:08 am', 'Mozilla-Firefox'),
(3, 'mkkjhgg', 'ii@clicksite.ir', 'FireFox', 'simple', '1586567296', 'April 11, 2020, 3:08 am', 'Mozilla-Firefox'),
(4, 'mehdiggg', 'mehdi@gmail.com', 'Internet Explorer', 'I like it', '1586567479', 'April 11, 2020, 3:11 am', 'Internet-Explorer'),
(5, 'kfkfjkk', 'nfjfj@gmail.com', 'Chrome', 'interested', '1586567435', 'April 11, 2020, 3:10 am', 'Google-Chrome'),
(6, 'jhgggl', 'info2@clicksite.ir', 'Opera', 'good', '1586567540', 'April 11, 2020, 3:12 am', 'Mozilla-Firefox'),
(7, 'mehdiba', 'mbph471@gmail.com', 'FireFox', 'Because It is very user friendly and I like it!', '1593003304', 'June 24, 2020, 2:55 pm', 'Mozilla-Firefox'),
(8, 'mehffjff', 'hamid@gmail.com', 'Opera', 'Because it is so secure!', '1592960425', 'June 24, 2020, 3:00 am', 'Mozilla-Firefox'),
(9, 'Mehdibb', 'mehdi2@gmail.com', 'Chrome', 'As it is more convenient', '1592961206', 'June 24, 2020, 3:13 am', 'Mozilla-Firefox'),
(10, 'mehdihg', 'mehdi3@gmail.com', 'Safari', 'Very functional', '1592964615', 'June 24, 2020, 4:10 am', 'Mozilla-Firefox'),
(11, 'mehdibh', 'mehdibh@gmail.com', 'FireFox', 'I like it!', '1592973869', 'June 24, 2020, 6:44 am', 'Mozilla-Firefox'),
(12, 'mehdiph', 'mehdiph@gmail.com', 'Chrome', 'I like it!', '1592974609', 'June 24, 2020, 6:56 am', 'Mozilla-Firefox'),
(13, 'mehdiphh', 'mehdiphh@gmail.com', 'Opera', 'I like it!', '1592989068', 'June 24, 2020, 10:57 am', 'Mozilla-Firefox'),
(14, 'mehdiphi', 'mehdiphi@gmail.com', 'Safari', 'I like it!', '1592989407', 'June 24, 2020, 11:03 am', 'Mozilla-Firefox');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_poll2`
--

CREATE TABLE `tbl_poll2` (
  `id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `browser` varchar(20) NOT NULL,
  `descripton` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_poll`
--
ALTER TABLE `tbl_poll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_poll2`
--
ALTER TABLE `tbl_poll2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_poll`
--
ALTER TABLE `tbl_poll`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_poll2`
--
ALTER TABLE `tbl_poll2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
