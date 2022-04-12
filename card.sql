-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2021 at 10:28 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creditcard`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `#` int(11) NOT NULL,
  `ccnum` varchar(100) NOT NULL,
  `expdate` date NOT NULL,
  `seccode` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`#`, `ccnum`, `expdate`, `seccode`) VALUES
(1, 'a5sfethw6x98d6sk4jv0lms65h7cjshn', '2021-02-28', '389'),
(2, 'd41d8cd98f00b204e9800998ecf8427e', '2023-02-28', '344'),
(3, '95879fe27f3b93f99097bcf9c636034c', '2025-03-31', '344'),
(4, 'e000f3ffd38a9c03b05a66ac256adaa6', '2024-02-29', '309'),
(5, 'e000f3ffd38a9c03b05a66ac256adaa6', '2024-02-29', '309'),
(6, 'e000f3ffd38a9c03b05a66ac256adaa6', '2024-02-29', '309'),
(7, 'e000f3ffd38a9c03b05a66ac256adaa6', '2024-02-29', '309'),
(8, 'e000f3ffd38a9c03b05a66ac256adaa6', '2024-02-29', '309'),
(9, 'e000f3ffd38a9c03b05a66ac256adaa6', '2024-02-29', '309'),
(10, 'e000f3ffd38a9c03b05a66ac256adaa6', '2024-02-29', '309'),
(11, 'e000f3ffd38a9c03b05a66ac256adaa6', '2024-02-29', '309'),
(12, 'e000f3ffd38a9c03b05a66ac256adaa6', '2024-02-29', '309'),
(13, 'e000f3ffd38a9c03b05a66ac256adaa6', '2024-02-29', '309'),
(14, 'e000f3ffd38a9c03b05a66ac256adaa6', '2024-02-29', '309'),
(15, 'e000f3ffd38a9c03b05a66ac256adaa6', '2024-02-29', '309'),
(16, 'f92a34808e541b80f0be4bad6689be4a', '2024-09-30', '309');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`#`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `#` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
