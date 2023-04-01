-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 06:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `config`
--

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bg` varchar(10) NOT NULL,
  `no` bigint(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `req` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`id`, `name`, `bg`, `no`, `email`, `city`, `details`, `req`) VALUES
(1, 'Santosh', 'A+', 7428731210, 'a@gmail.com', 'Jodhpur', 'ok can be taken now', 'AVAILABLE'),
(2, 'Thaman', 'B-', 7428723570, 'b@gmail.com', 'Varanasi', '', 'AVAILABLE'),
(3, 'Harsh', 'AB-', 6391876378, 'c@gmail.com', 'Rajkot', '', 'AVAILABLE'),
(4, 'Samhit', 'O+', 6390376385, 'd@gmail.com', 'Kolkata', '', 'NOT AVAILABLE'),
(5, 'Manu', 'A+', 9648476325, 'e@gmail.com', 'Ludhiana', ' testing123', 'NOT AVAILABLE'),
(6, 'Gurdeep', 'B+', 8527834283, 'f@gmail.com', 'Kochi', '', 'AVAILABLE'),
(7, 'Ravi', 'AB-', 6390376385, 'g@gmail.com', 'Bhopal', '', 'NOT AVAILABLE'),
(8, 'Alisha', 'A-', 7428723462, 'h@gmail.com', 'Dehradun', '', 'NOT AVAILABLE'),
(9, 'Sunder', 'AB+', 8160651749, 'i@gmail.com', 'Bhubaneswar', '', 'AVAILABLE'),
(10, 'Bhatia', 'B-', 7428730894, 'j@gmail.com', 'Madurai', '', 'AVAILABLE'),
(11, 'Bhavsar', 'AB-', 6391876378, 'k@gmail.com', 'Hyderabad', '', 'AVAILABLE'),
(12, 'Kapur', 'O+', 6390376385, 'l@gmail.com', 'Ujjain', '', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `reg_hos`
--

CREATE TABLE `reg_hos` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `no` bigint(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_hos`
--

INSERT INTO `reg_hos` (`id`, `name`, `city`, `no`, `email`, `pass`) VALUES
(1, 'baba`', 'afds', 9123456789, 'mlhl@gma.com', 'asdfdsfsd'),
(2, 'abc', 'xyz', 9123456789, 'q@q', '12341234');

-- --------------------------------------------------------

--
-- Table structure for table `reg_rec`
--

CREATE TABLE `reg_rec` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `bg` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `no` bigint(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_rec`
--

INSERT INTO `reg_rec` (`id`, `user`, `bg`, `city`, `no`, `email`, `pass`) VALUES
(1, 'hi', 'A+', 'fag', 92345678911, 'adsfaf@gmail.com', 'adsfdsf'),
(2, 'hi', 'A+', 'fag', 92345678911, 'adsfaf@gmail.com', 'adsfdsf'),
(3, 'hi', 'A+', 'fag', 92345678911, 'sdfs@adfa.com', 'asdfas'),
(4, 'hi', 'A+', 'fag', 92345678911, 'sdfs@adfa.com', 'asdfas'),
(5, 'hello', 'B+', 'll', 9123456789, 'hi@gmail.com', '12341234'),
(6, 'haha', 'B-', 'fas', 9123456789, 'q@qq', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donar`
--
ALTER TABLE `donar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_hos`
--
ALTER TABLE `reg_hos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_rec`
--
ALTER TABLE `reg_rec`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donar`
--
ALTER TABLE `donar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reg_hos`
--
ALTER TABLE `reg_hos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reg_rec`
--
ALTER TABLE `reg_rec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
