-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 03:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hspl`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appo_id` int(11) NOT NULL,
  `doct_id` int(11) NOT NULL,
  `pat_id` int(11) NOT NULL,
  `appo_date` varchar(100) NOT NULL,
  `app_take_date` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `token` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appo_id`, `doct_id`, `pat_id`, `appo_date`, `app_take_date`, `status`, `purpose`, `token`) VALUES
(1, 2, 2, '2021-01-21', ' 2021-01-10', 'rejected', '', 0),
(2, 4, 2, '2021-01-21', ' 2021-01-10', 'approved', '', 3),
(3, 1, 2, '2021-01-22', ' 2021-01-10', 'approved', '', 2),
(4, 1, 1, '2021-01-22', ' 2021-01-10', 'approved', '', 1),
(5, 2, 1, '2021-01-21', ' 2021-01-10', 'approved', '', 1),
(6, 1, 1, '2021-01-21', ' 2021-01-10', 'approved', '', 2),
(7, 4, 1, '2021-01-22', ' 2021-01-10', 'approved', '', 4),
(8, 2, 1, '2021-01-22', ' 2021-01-10', 'rejected', '', 0),
(9, 1, 2, '2021-01-19', ' 2021-01-11', 'approved', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doct`
--

CREATE TABLE `doct` (
  `doct_id` int(11) NOT NULL,
  `logi_id` int(11) NOT NULL,
  `doct_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `doct_add` varchar(100) NOT NULL,
  `doct_phn` varchar(500) NOT NULL,
  `doct_email` varchar(100) NOT NULL,
  `doct_dob` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `spelz_id` int(11) NOT NULL,
  `doct_img` varchar(500) NOT NULL,
  `con_fee` varchar(500) NOT NULL,
  `wtime` varchar(50) NOT NULL,
  `ds` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doct`
--

INSERT INTO `doct` (`doct_id`, `logi_id`, `doct_name`, `last_name`, `doct_add`, `doct_phn`, `doct_email`, `doct_dob`, `gender`, `spelz_id`, `doct_img`, `con_fee`, `wtime`, `ds`) VALUES
(1, 2, 'Jibin', 'Jose', 'Pulkayithu(H),\r\nAluva', '8767876434', 'jibin@gmail.com', '1986-11-25', 'male', 9, '../pic/5fe3650905e14', '1000', '12.30 PM - 4.30 PM', 'active'),
(2, 3, 'Soorya', 'Sivan', 'Koviakam(H),\r\nKottayam', '7890890677', 'soorya@gmail.com', '1991-09-27', 'female', 2, '../pic/5fe36604c821f', '1000', '8.30 AM - 12.30 PM', 'active'),
(3, 4, 'Varsha', 'Vivek', 'Krishnavillasam(H)\r\nKottarakkara,\r\nkollam', '84321632109', 'varsha@gmail.com', '1983-07-22', 'female', 4, '../pic/5fe366fed10f8', '500', '', ''),
(4, 7, 'Nandhu', 'Krishna', 'kollam\r\n', '9876545678', 'nadhu@gmail.com', '1993-09-28', 'male', 1, '../pic/5feebca944399', '1000', '8.30 AM - 12.30 PM', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `logi_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`logi_id`, `type`, `uname`, `password`) VALUES
(1, 'admin', 'admin', 'pass'),
(2, 'doctor', 'jibin', 'jibin@123'),
(3, 'doctor', 'soorya', 'soorya@123'),
(4, 'doctor', 'varsha', 'varsha@123'),
(5, 'user', 'praveena', 'praveena@123'),
(6, 'user', 'anju', 'anju@123'),
(7, 'doctor', 'nadhu', 'nadhu');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pat_id` int(11) NOT NULL,
  `logi_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phn` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `blood` varchar(50) NOT NULL,
  `gen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pat_id`, `logi_id`, `first_name`, `lname`, `address`, `phn`, `email`, `dob`, `blood`, `gen`) VALUES
(1, 5, 'Praveena', 'Raju', 'Thulasiparabil(H),\r\nThumbolli,\r\nAlappuzha', '9090786756', 'praveena@gmail.com', '2000-02-07', 'O+', 'female'),
(2, 6, 'Anju', 'Sukumaran', 'Valancheri(H),\r\nMalappuram', '9074321244', 'anju@gmail.com', '2001-08-03', 'A+', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `specilization`
--

CREATE TABLE `specilization` (
  `spelz_id` int(11) NOT NULL,
  `spelz_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specilization`
--

INSERT INTO `specilization` (`spelz_id`, `spelz_name`) VALUES
(1, 'Pediatrician'),
(2, 'Surgeon'),
(3, 'Cardiologist'),
(4, 'Family Physician'),
(7, 'Radiologist'),
(8, 'Gastroenterologist'),
(9, 'Infectious Disease Specialists');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appo_id`);

--
-- Indexes for table `doct`
--
ALTER TABLE `doct`
  ADD PRIMARY KEY (`doct_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`logi_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pat_id`);

--
-- Indexes for table `specilization`
--
ALTER TABLE `specilization`
  ADD PRIMARY KEY (`spelz_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doct`
--
ALTER TABLE `doct`
  MODIFY `doct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `logi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `specilization`
--
ALTER TABLE `specilization`
  MODIFY `spelz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
