-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2023 at 11:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dento_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `aid` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `email`, `password`) VALUES
(1, 'dento@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `aid` int(10) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `anumber` decimal(50,0) NOT NULL,
  `aemail` varchar(200) NOT NULL,
  `aaddress` varchar(200) NOT NULL,
  `ascheldule` varchar(200) NOT NULL,
  `aproblam` varchar(200) NOT NULL,
  `amessage` varchar(200) NOT NULL,
  `adate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`aid`, `aname`, `anumber`, `aemail`, `aaddress`, `ascheldule`, `aproblam`, `amessage`, `adate`) VALUES
(1, 'UDAY PRATAP SINGH TOMAR', '9876543210', 'uday@gmail.com', 'Lucknow', '9 AM to 10 AM', 'Teeth Whitening', 'Lightening the colour of the teeth.', '2023-01-02 00:00:00'),
(2, 'AKASH PANDEY', '8765432109', 'akash@gmail.com', 'Hardoi', '11 AM to 12 PM', 'Missing Teeth', 'Lacking a tooth.', '2023-01-02 00:00:00'),
(3, 'PRADUMN CHAUDHARY', '7654321098', 'khaspagar@gmail.com', 'Basti', '2 PM to 4 PM', 'Teeth Pain', 'Experiencing a toothache.', '2023-01-02 00:00:00'),
(4, 'SATYAM TRIPATHI', '6543210987', 'satyam@gmail.com', 'Varanasi', '8 PM to 10 PM', 'Cosmetic Dentistry', 'Misalignment of teeth.', '2023-01-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `cid` int(10) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cemail` varchar(100) NOT NULL,
  `cmessage` varchar(200) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`cid`, `cname`, `cemail`, `cmessage`, `cdate`) VALUES
(1, 'UDAY PRATAP SINGH TOMAR', 'uday@gmail.com', 'Lightening the colour of the teeth.', '2019-08-11 11:03:42'),
(2, 'AKASH PANDEY', 'akash@gmail.com', 'Lacking a tooth.', '2019-08-11 13:08:18'),
(3, 'PRADUMN CHAUDHARY', 'khaspagar@gmail.com', 'Experiencing a toothache.', '2019-08-11 13:09:53'),
(4, 'SATYAM TRIPATHI', 'satyam@gmail.com', 'Misalignment of teeth.', '2023-01-02 22:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `fid` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `femail` varchar(100) NOT NULL,
  `fmessage` varchar(200) NOT NULL,
  `fdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`fid`, `fname`, `femail`, `fmessage`, `fdate`) VALUES
(1, 'UDAY PRATAP SINGH TOMAR', 'uday@gmail.com', 'Temporary tooth sensitivity.', '2019-08-11 13:05:30'),
(2, 'AKASH PANDEY', 'akash@gmail.com', 'A gap is filled.', '2019-08-11 13:09:19'),
(3, 'PRADUMN CHAUDHARY', 'khaspagar@gmail.com', 'Relieve from toothache.', '2019-08-11 16:18:21'),
(4, 'SATYAM TRIPATHI', 'satyam@gmail.com', 'Successfully aligned.', '2023-01-02 22:56:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`fid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `aid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
