-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 08:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `profilePic` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`username`, `email`, `password`, `role`, `fullname`, `address`, `contact`, `age`, `sex`, `profilePic`) VALUES
('admin', 'admin@gmail.com', 'admin', 'admin', '', '', '', '', '', ''),
('user', 'user@gmail.com', 'user', 'user', 'user', 'user', '123', '123', 'user', 0x757365725f50726f66696c652d506963747572652e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `dateTime` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `username`, `name`, `position`, `service`, `dateTime`, `date`, `state`) VALUES
('tu9', 'user', 'Mang Alberto Juan', '(bottom left third molar)', 'Orthodontics ', 'Tuesday 9AM-10AM', 'Jun-05-2023', 'Denied'),
('fr12', 'user', 'Lexi Dee Ee-Ep-G', '(top left canine)', 'Pediatric ', 'Friday 12PM-1PM', 'Jun-05-2023', 'Denied'),
('fr9', 'user', 'Lucy Han Reyes', '(top left first premolar)', 'Oral ', 'Friday 9AM-10AM', 'Jun-05-2023', 'Accepted'),
('fr2', 'user', 'Albert Gonzales San Juan', '(top right second premolar)', 'Orthodontics ', 'Friday 2PM-3PM', 'Jun-05-2023', 'Denied'),
('sa2', 'user', 'Jacob Edward Swan', '(bottom left second molar)', 'Periodontics ', 'Saturday 2PM-3PM', 'Jun-05-2023', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `dateCreated` varchar(255) NOT NULL,
  `dateEnd` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`name`, `position`, `service`, `dateCreated`, `dateEnd`, `state`) VALUES
('Juan Pollen Luna', 'upper left canine', 'General', 'Jun-05-2023', 'Jun-05-2023', 'Success'),
('John Chris Topher', '(top right second premolar)', 'Pediatric ', 'Jun-05-2023', 'Jun-06-2023', 'Success'),
('Juan Lapo Henhen', '(bottom left second premolar)', 'Pediatric ', 'Jun-05-2023', 'Jun-05-2023', 'Failed');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
