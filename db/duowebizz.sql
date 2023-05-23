-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 02:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duowebizz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` text NOT NULL,
  `ID` int(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `ID`, `Password`) VALUES
('DuoWebizz AdminX', 6393, 'Duowebizzadminx');

-- --------------------------------------------------------

--
-- Table structure for table `devrequests`
--

CREATE TABLE `devrequests` (
  `ID` int(11) NOT NULL,
  `First Name` text NOT NULL,
  `Middle Name` text NOT NULL,
  `Last Name` text NOT NULL,
  `Gender` text NOT NULL,
  `DOB` date NOT NULL,
  `Work State` text NOT NULL,
  `Field` text NOT NULL,
  `Educationl Quelification` text NOT NULL,
  `Exeperiance` text NOT NULL,
  `E Mail` varchar(100) NOT NULL,
  `Mobile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `devrequests`
--

INSERT INTO `devrequests` (`ID`, `First Name`, `Middle Name`, `Last Name`, `Gender`, `DOB`, `Work State`, `Field`, `Educationl Quelification`, `Exeperiance`, `E Mail`, `Mobile`) VALUES
(1, 'Dev', 'Kaakadiya', 'Umeshbhai', 'on', '2002-10-18', 'GJ', 'Wev dev F', 'MCA', 'Morethen 2 year', 'devkaakadiya63932@gmail.com', '2147483647'),
(2, 'Dev', 'Kaakadiya', 'Umeshbhai', 'on', '2002-10-18', 'GJ', 'Wev dev F', 'MCA', 'Morethen 2 year', 'devkaakadiya63932@gmail.com', '8469745837'),
(3, '', '', '', 'Male', '0000-00-00', 'AN', 'Wev dev F', 'MCA', 'Lessthen 2 year', '', ''),
(4, 'Dev', 'Kaakadiya', 'Umeshbhai', 'Male', '0000-00-00', 'GJ', 'Web Dev Frontend', 'MCA', 'Lessthen 2 year', 'devkaakadiya63932@gmail.com', '8469745837'),
(5, 'Dev', 'Kaakadiya', 'Umeshbhai', 'Male', '0000-00-00', 'GJ', 'Web Dev Frontend', 'MCA', 'Lessthen 2 year', 'devkaakadiya63932@gmail.com', ''),
(6, 'Dev', 'Kaakadiya', 'Umeshbhai', 'Male', '0000-00-00', 'GJ', 'Web Dev Frontend', 'MCA', 'Lessthen 2 year', 'devkaakadiya63932@gmail.com', ''),
(7, 'Janki', 'Kakadiya', 'Umeshbhai', 'Female', '2022-11-09', 'GJ', 'Web Dev Backend', 'MCA', 'Morethen 2 year', 'janki63@gmail.com', '9978720973'),
(8, 'Dev', 'Kaakadiya', 'Umeshbhai', 'Male', '0000-00-00', 'GJ', 'Web Dev Frontend', 'MCA', 'Lessthen 2 year', 'devkaakadiya63932@gmail.com', ''),
(9, 'Priyankkumar', '', 'Rathod', 'Male', '0000-00-00', 'GJ', 'Web Dev Frontend', 'MCA', 'Lessthen 2 year', '', ''),
(10, 'Dev', 'Kaakadiya', 'Umeshbhai', 'Male', '0000-00-00', 'GJ', 'Web Dev Frontend', 'MCA', 'Lessthen 2 year', 'devkaakadiya63932@gmail.com', ''),
(11, 'Dev', 'Kaakadiya', 'Umeshbhai', 'Male', '0000-00-00', 'GJ', 'Web Dev Frontend', 'MCA', 'Lessthen 2 year', 'devkaakadiya63932@gmail.com', '8469745837'),
(12, 'Dev', 'Kaakadiya', 'Umeshbhai', 'Male', '0000-00-00', 'GJ', 'Web Dev Frontend', 'MCA', 'Lessthen 2 year', 'devkaakadiya63932@gmail.com', '8469745837'),
(13, 'Dev', 'Kaakadiya', 'Umeshbhai', 'Male', '0000-00-00', 'GJ', 'Web Dev Frontend', 'MCA', 'Lessthen 2 year', 'devkaakadiya63932@gmail.com', '8469745837'),
(14, 'Dev', 'Kaakadiya', 'Umeshbhai', 'Male', '0000-00-00', 'GJ', 'Web Dev Frontend', 'MCA', 'Lessthen 2 year', 'devkaakadiya63932@gmail.com', '9978720973'),
(15, 'Janki', 'Kakadiya', 'Umeshbhai', 'Male', '0000-00-00', 'GJ', 'Web Dev Frontend', 'MCA', 'Lessthen 2 year', 'janki63@gmail.com', '9978720973'),
(16, 'Janki', 'Kakadiya', 'Umeshbhai', 'Male', '0000-00-00', 'GJ', 'Web Dev Frontend', 'MCA', 'Lessthen 2 year', 'janki63@gmail.com', '9978720973'),
(17, 'DEV', 'UMESHBHAI', 'KAKADIYA', 'Male', '0000-00-00', 'AN', 'Web Dev Frontend', 'MCA', 'Lessthen 2 year', 'devkaakadiya63932@gmail.com', '8469745837'),
(18, 'Janki', 'Kakadiya', 'Umeshbhai', 'Male', '0000-00-00', 'GJ', 'Web Dev Frontend', 'MCA', 'Lessthen 2 year', 'janki63@gmail.com', '9978720973'),
(19, 'Dev', 'Kaakadiya', 'Umeshbhai', 'Male', '2022-11-09', 'GJ', 'Web Dev Frontend', 'MCA', 'Morethen 2 year', 'devkaakadiya63932@gmail.com', '8469745837'),
(20, 'Janki', 'Kakadiya', 'Umeshbhai', 'Male', '2022-11-03', 'GJ', 'Web Dev Frontend', 'MCA', 'Morethen 2 year', 'janki63@gmail.com', '9978720973'),
(21, 'Janki', 'Kakadiya', 'Umeshbhai', 'Male', '2022-11-03', 'GJ', 'Web Dev Frontend', 'MCA', 'Morethen 2 year', 'janki63@gmail.com', '9978720973'),
(22, 'Janki', 'Kakadiya', 'Umeshbhai', 'Male', '2022-11-15', 'GJ', 'Web Dev Frontend', 'MCA', 'Morethen 2 year', 'janki63@gmail.com', '9978720973'),
(23, 'Janki', 'Kakadiya', 'Umeshbhai', 'Male', '2022-11-15', 'GJ', 'Web Dev Frontend', 'MCA', 'Morethen 2 year', 'janki63@gmail.com', '9978720973'),
(24, 'Dev', 'Kaakadiya', 'Umeshbhai', 'Male', '2022-11-09', 'GJ', 'Web Dev Frontend', 'MCA', 'Lessthen 2 year', 'devkaakadiya63932@gmail.com', '8469745837'),
(25, 'Dev', 'Kaakadiya', 'Umeshbhai', 'Male', '2022-11-02', 'GJ', 'Web Dev Frontend', 'MCA', 'Morethen 2 year', 'devkaakadiya63932@gmail.com', '8469745837'),
(26, 'Dev', 'Kaakadiya', 'Umeshbhai', 'Male', '2022-11-01', 'GJ', 'Web Dev Frontend', 'MCA', 'Lessthen 2 year', 'devkaakadiya63932@gmail.com', '8469745837'),
(27, 'Janki', 'Kakadiya', 'Umeshbhai', 'Male', '2004-06-06', 'GJ', 'Web Dev Frontend', 'MCA', 'Morethen 2 year', 'janki63@gmail.com', '9978720973'),
(28, 'Janki', 'Kakadiya', 'Umeshbhai', 'Male', '2022-11-02', 'GJ', 'Web Dev Frontend', 'MCA', 'Lessthen 2 year', 'janki63@gmail.com', '9978720973'),
(29, 'DEV', 'UMESHBHAI', 'KAKADIYA', 'Male', '2022-11-10', 'AN', 'Web Dev Frontend', 'BCA', 'Morethen 2 year', 'devkaakadiya63932@gmail.com', '8469745837'),
(30, 'Janki', 'Kakadiya', 'Umeshbhai', 'Male', '2022-11-08', 'GJ', 'Web Dev Frontend', 'MCA', 'Lessthen 2 year', 'janki63@gmail.com', '9978720973'),
(31, 'Janki', 'Kakadiya', 'Umeshbhai', 'Female', '2004-11-06', 'GJ', 'Web Dev Frontend', 'Other Programing Cource', 'Fresher', 'janki63@gmail.com', '9978720973'),
(32, 'Dev', 'Kakadiya', 'Umeshbhai', 'Male', '2002-10-18', 'GJ', 'Web Dev Backend', 'BCA', 'Fresher', 'jaank63@gmail.com', '8469745837'),
(33, 'Dev', 'Kakadiya', 'Umeshbhai', 'Male', '2022-11-24', 'DN', 'Web Dev Frontend', 'MCA', 'Fresher', 'devkaakadiyaprivate633@gmail.com', '656545'),
(34, 'Dev', 'Kakadiya', 'Umeshbhai', 'Male', '2022-11-10', 'BR', 'Web Dev Frontend', 'MCA', 'Fresher', 'devkaakadiyaprivate633@gmail.com', '6655554654654'),
(35, 'Dev', 'Kakadiya', 'Umeshbhai', 'Male', '2022-12-15', 'GJ', 'Web Dev Frontend', 'MCA', 'Fresher', 'devkaakadiyaprivate633@gmail.com', '8469745837');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Name of pet` varchar(100) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `Name`, `Name of pet`, `Mail`, `Password`) VALUES
(10, 'Dev Kakadiya', 'Golu', 'devkaakadiyaprivate633@gmail.com', 'dev'),
(14, 'Jaanki Kakadiya Umeshbhai', 'golu', 'jaanki63@gmail.com', 'jjj');

-- --------------------------------------------------------

--
-- Table structure for table `securityupdate`
--

CREATE TABLE `securityupdate` (
  `Name` text NOT NULL,
  `Mail` varchar(200) NOT NULL,
  `Type of buisness` text NOT NULL,
  `Frontendlang` text NOT NULL,
  `Backendlang` text NOT NULL,
  `templates` text NOT NULL,
  `Website details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `securityupdate`
--

INSERT INTO `securityupdate` (`Name`, `Mail`, `Type of buisness`, `Frontendlang`, `Backendlang`, `templates`, `Website details`) VALUES
('Dev Kakadiya', 'devkaakadiyaprivate633@gmail.com', 'For buisness', 'dfsf', 'sfsf', 'Yes', 'fsfs'),
('Dev Kakadiya', 'devkaakadiyaprivate633@gmail.com', 'For buisness', 'dsf', 'fdg', 'Yes', 'dgd'),
('Jaanki Kakadiya Umeshbhai', 'jaanki63@gmail.com', 'For buisness', 'klj', 'jljl', 'Yes', 'jkll');

-- --------------------------------------------------------

--
-- Table structure for table `webdevdetails`
--

CREATE TABLE `webdevdetails` (
  `Name` text NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Website Type` text NOT NULL,
  `Web Style` text NOT NULL,
  `Buisness info` text NOT NULL,
  `Web Fetures` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webdevdetails`
--

INSERT INTO `webdevdetails` (`Name`, `Mail`, `Website Type`, `Web Style`, `Buisness info`, `Web Fetures`) VALUES
('Dev Kakadiya', 'devkaakadiyaprivate633@gmail.com', 'For buisness', 'Stylish with Unique heavy designs', 'gfhf', 'gfhhfh'),
('Dev Kakadiya', 'devkaakadiyaprivate633@gmail.com', 'For buisness', 'Stylish with Unique heavy designs', 'gfhf', 'gfhhfh'),
('Dev Kakadiya', 'devkaakadiyaprivate633@gmail.com', 'For buisness', 'Stylish with Unique heavy designs', 'ds', 'ds'),
('Dev Kakadiya', 'devkaakadiyaprivate633@gmail.com', 'For buisness', 'Stylish with Unique heavy designs', 'dfdf', 'fdf'),
('Dev Kakadiya', 'devkaakadiyaprivate633@gmail.com', 'For buisness', 'Stylish with Unique heavy designs', 'sds', 'ds'),
('Dev Kakadiya', 'devkaakadiyaprivate633@gmail.com', 'For buisness', 'Stylish with Unique heavy designs', 'hjj', 'gj'),
('Dev Kakadiya', 'devkaakadiyaprivate633@gmail.com', 'For buisness', 'Stylish with Unique heavy designs', 'rer', 'ere'),
('Dev Kakadiya', 'devkaakadiyaprivate633@gmail.com', 'For buisness', 'Stylish with Unique heavy designs', 'ghj', 'hjg'),
('Dev Kakadiya', 'devkaakadiyaprivate633@gmail.com', 'For buisness', 'Stylish with Unique heavy designs', 'dsfdff', 'dsfsf'),
('Jaanki Kakadiya Umeshbhai', 'jaanki63@gmail.com', 'For buisness', 'Stylish with Unique heavy designs', 'gfhf', 'hfhfh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devrequests`
--
ALTER TABLE `devrequests`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devrequests`
--
ALTER TABLE `devrequests`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
