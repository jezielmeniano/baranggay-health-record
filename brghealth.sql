-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 02:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brghealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `patient_id` int(15) NOT NULL,
  `patient_lname` varchar(300) NOT NULL,
  `patient_fname` varchar(300) NOT NULL,
  `patient_mname` varchar(300) NOT NULL,
  `patient_num` int(11) NOT NULL,
  `patient_address` varchar(300) NOT NULL,
  `patient_age` int(11) NOT NULL,
  `patient_bday` date NOT NULL,
  `patient_bplace` varchar(300) NOT NULL,
  `patient_cstatus` varchar(300) NOT NULL,
  `patient_gender` varchar(300) NOT NULL,
  `patient_religion` varchar(300) NOT NULL,
  `patient_occupation` varchar(300) NOT NULL,
  `patient_date` date NOT NULL,
  `complaint` varchar(300) NOT NULL,
  `exam` text NOT NULL,
  `history` text NOT NULL,
  `treatment` text NOT NULL,
  `allergies` text NOT NULL,
  `blood_pressure` int(11) NOT NULL,
  `respiratory` int(11) NOT NULL,
  `refill` int(11) NOT NULL,
  `temperature` int(11) NOT NULL,
  `weight1` int(11) NOT NULL,
  `pulse` int(11) NOT NULL,
  `physician` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`patient_id`, `patient_lname`, `patient_fname`, `patient_mname`, `patient_num`, `patient_address`, `patient_age`, `patient_bday`, `patient_bplace`, `patient_cstatus`, `patient_gender`, `patient_religion`, `patient_occupation`, `patient_date`, `complaint`, `exam`, `history`, `treatment`, `allergies`, `blood_pressure`, `respiratory`, `refill`, `temperature`, `weight1`, `pulse`, `physician`) VALUES
(145, 'Dash', 'Johann', 'Hhahaha', 8192731, 'Hawaii CIty', 22, '2001-06-11', 'Hawai', 'Single', 'Male', 'Catholic', 'None', '2024-03-30', 'Coughing for about 2 weeks', 'Weak frail body', 'Cough', 'Biogesic', 'None', 43, 123, 43, 54, 0, 55, 'Mr.Javob'),
(148, 'Hidalgo', 'Hake', 'Egos', 898123992, 'Los Angeles', 22, '2001-02-14', 'Hawaii', 'Single', 'Male', 'Mormon', 'None', '2024-03-31', 'Swelling in the foot', 'Athletic', 'Swelling in the foot', 'Icepack Treatment', 'None', 170, 1234, 234, 55, 0, 100, 'Mr.Jacob');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_info`
--
ALTER TABLE `patient_info`
  MODIFY `patient_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
