-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 02:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_non_compliance_status`
--

CREATE TABLE `area_non_compliance_status` (
  `ID` int(255) NOT NULL,
  `Region_names` varchar(20) NOT NULL,
  `Outlets` int(255) NOT NULL,
  `present_date` date NOT NULL,
  `present_date_user` date NOT NULL,
  `Starting_Date` date NOT NULL,
  `Ending_Date` date NOT NULL,
  `Brand_names` text NOT NULL,
  `t1r1c1` int(100) NOT NULL,
  `t1r1c2` int(100) NOT NULL,
  `t1r1c3` int(100) NOT NULL,
  `t1r1c4` int(100) NOT NULL,
  `t1r1c5` int(100) NOT NULL,
  `t1r1c6` int(100) NOT NULL,
  `t1r1c7` int(100) NOT NULL,
  `t1r2c1` int(100) NOT NULL,
  `t1r2c2` int(100) NOT NULL,
  `t1r2c3` int(100) NOT NULL,
  `t1r2c4` int(100) NOT NULL,
  `t1r2c5` int(100) NOT NULL,
  `t1r2c6` int(100) NOT NULL,
  `t1r2c7` int(100) NOT NULL,
  `t1r3c1` int(100) NOT NULL,
  `t1r3c2` int(100) NOT NULL,
  `t1r3c3` int(100) NOT NULL,
  `t1r3c4` int(100) NOT NULL,
  `t1r3c5` int(100) NOT NULL,
  `t1r3c6` int(100) NOT NULL,
  `t1r3c7` int(100) NOT NULL,
  `t1r4c1` int(100) NOT NULL,
  `t1r4c2` int(100) NOT NULL,
  `t1r4c3` int(100) NOT NULL,
  `t1r4c4` int(100) NOT NULL,
  `t1r4c5` int(100) NOT NULL,
  `t1r4c6` int(100) NOT NULL,
  `t1r4c7` int(100) NOT NULL,
  `t1r5c1` int(100) NOT NULL,
  `t1r5c2` int(100) NOT NULL,
  `t1r5c3` int(100) NOT NULL,
  `t1r5c4` int(100) NOT NULL,
  `t1r5c5` int(100) NOT NULL,
  `t1r5c6` int(100) NOT NULL,
  `t1r5c7` int(100) NOT NULL,
  `t1r6c1` int(100) NOT NULL,
  `t1r6c2` int(100) NOT NULL,
  `t1r6c3` int(100) NOT NULL,
  `t1r6c4` int(100) NOT NULL,
  `t1r6c5` int(100) NOT NULL,
  `t1r6c6` int(100) NOT NULL,
  `t1r6c7` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `area_non_compliance_status`
--

INSERT INTO `area_non_compliance_status` (`ID`, `Region_names`, `Outlets`, `present_date`, `present_date_user`, `Starting_Date`, `Ending_Date`, `Brand_names`, `t1r1c1`, `t1r1c2`, `t1r1c3`, `t1r1c4`, `t1r1c5`, `t1r1c6`, `t1r1c7`, `t1r2c1`, `t1r2c2`, `t1r2c3`, `t1r2c4`, `t1r2c5`, `t1r2c6`, `t1r2c7`, `t1r3c1`, `t1r3c2`, `t1r3c3`, `t1r3c4`, `t1r3c5`, `t1r3c6`, `t1r3c7`, `t1r4c1`, `t1r4c2`, `t1r4c3`, `t1r4c4`, `t1r4c5`, `t1r4c6`, `t1r4c7`, `t1r5c1`, `t1r5c2`, `t1r5c3`, `t1r5c4`, `t1r5c5`, `t1r5c6`, `t1r5c7`, `t1r6c1`, `t1r6c2`, `t1r6c3`, `t1r6c4`, `t1r6c5`, `t1r6c6`, `t1r6c7`) VALUES
(26, '', 3745, '2020-05-18', '0000-00-00', '2020-05-19', '2020-05-21', '', 30, 40, 38, 74, 19, 16, 19, 56, 44, 58, 72, 46, 35, 31, 32, 35, 27, 37, 16, 15, 21, 38, 39, 37, 59, 52, 28, 32, 34, 38, 45, 75, 15, 16, 17, 37, 39, 40, 64, 25, 21, 25);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(25) CHARACTER SET utf8 NOT NULL,
  `password` varchar(25) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`) VALUES
(1, 'tashrif', 'tashrif'),
(2, 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_non_compliance_status`
--
ALTER TABLE `area_non_compliance_status`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_non_compliance_status`
--
ALTER TABLE `area_non_compliance_status`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
