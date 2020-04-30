-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2020 at 04:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myIntroProjects`
--

-- --------------------------------------------------------

--
-- Table structure for table `projectList`
--

CREATE TABLE `projectList` (
  `labid` int(4) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(100) NOT NULL,
  `url` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projectList`
--

INSERT INTO `projectList` (`labid`, `name`, `description`, `url`) VALUES
(1, 'Lab 2', 'resume', '../lab2/zhanr-RuoyiZhan-resume.html'),
(2, 'Lab 3', 'homepage', '../lab3/index.html'),
(3, 'Lab 4', 'RSS.xml', '../lab4/Intro ITWS - Lab 4 - RSS.xml'),
(4, 'Lab 4', 'Atom.xml', '../lab4/Intro ITWS - Lab 4 - Atom.xml'),
(5, 'Lab 5', 'JavaScript', '../lab5/lab5.html'),
(6, 'Lab 6', 'JQuery', '../lab6/lab6.html'),
(7, 'Lab 8', 'XAMPP', '../lab8'),
(8, 'Lab 9', 'JSON', '../lab9/project.html'),
(9, 'Lab 10', 'PHP', '../lab10'),
(10, 'Final', 'repurpose the website', 'index.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projectList`
--
ALTER TABLE `projectList`
  ADD PRIMARY KEY (`labid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projectList`
--
ALTER TABLE `projectList`
  MODIFY `labid` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
