-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 07:51 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_event`
--

CREATE TABLE `company_event` (
  `Event_ID` int(11) NOT NULL,
  `Event_Name` varchar(45) NOT NULL,
  `Event_Date_Start` datetime NOT NULL,
  `Event_Date_End` datetime NOT NULL,
  `Event_Detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_event`
--

INSERT INTO `company_event` (`Event_ID`, `Event_Name`, `Event_Date_Start`, `Event_Date_End`, `Event_Detail`) VALUES
(1, 'Holiday1', '2021-11-16 00:00:00', '2021-11-17 00:00:00', 'all'),
(2, 'test2', '2021-11-17 00:00:00', '2021-11-18 00:00:00', ''),
(5, 'new', '2021-11-18 00:00:00', '2021-11-20 00:00:00', ''),
(6, 'yes', '2021-11-20 00:00:00', '2021-11-20 15:00:00', ''),
(7, 'john yeet day', '2021-11-21 00:00:00', '2021-11-22 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `leaving_form`
--

CREATE TABLE `leaving_form` (
  `Form_ID` int(8) NOT NULL,
  `Form_Title` varchar(45) NOT NULL,
  `Form_detail` text NOT NULL,
  `Form_status` varchar(16) DEFAULT NULL,
  `Form_DateStart` date NOT NULL,
  `Form_DateEnd` date NOT NULL,
  `User_ID` int(8) NOT NULL,
  `Form_EL` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaving_form`
--

INSERT INTO `leaving_form` (`Form_ID`, `Form_Title`, `Form_detail`, `Form_status`, `Form_DateStart`, `Form_DateEnd`, `User_ID`, `Form_EL`) VALUES
(20, 'test123', 'test123', 'Approved', '2021-11-19', '2021-11-25', 2, 1),
(21, 'Dying', 'too much work', 'Denied', '2021-11-18', '2021-12-12', 2, 1),
(22, 'die', 'die', 'Denied', '2021-11-18', '2021-11-30', 7, 1),
(23, 'reg', 'erga', 'Denied', '2021-11-24', '2021-11-30', 2, 0),
(24, 'test56', 'test56', NULL, '2021-11-21', '2021-11-22', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(8) NOT NULL,
  `User_FNAME` varchar(45) NOT NULL,
  `User_LName` varchar(45) NOT NULL,
  `User_Gender` varchar(6) NOT NULL,
  `User_DOB` date NOT NULL,
  `User_Department` varchar(25) NOT NULL,
  `User_Position` varchar(25) NOT NULL,
  `User_Email` varchar(25) NOT NULL,
  `User_Tel` varchar(25) NOT NULL,
  `User_Address` text NOT NULL,
  `User_Username` varchar(25) NOT NULL,
  `User_Password` varchar(25) NOT NULL,
  `User_Quota` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `User_FNAME`, `User_LName`, `User_Gender`, `User_DOB`, `User_Department`, `User_Position`, `User_Email`, `User_Tel`, `User_Address`, `User_Username`, `User_Password`, `User_Quota`) VALUES
(1, 'admin', 'adminlast', 'Male', '1990-11-21', 'admin', 'admin', 'adminadmin@mail.com', '0433456634565', 'adminland adminworld', 'admin', 'admin', 250),
(2, 'hrname', 'hrlast', 'Male', '2021-11-03', 'hr', 'hr', 'hr', 'hr', 'hr', 'hr', 'hrhr', 25),
(3, 'username', 'userlast', 'Male', '2021-11-01', 'Sell', 'staff', 'staff', 'staff', 'staffland', 'staff', 'staff', 25),
(4, 'john', 'john', 'Female', '2021-11-25', 'hr2', 'hr', 'hr2', 'hr2', 'hr2', 'hr2', 'hr2', 25),
(5, 'admin3', 'admin3', 'Other', '2021-11-18', 'admin3', 'admin', 'admin3', 'admin3', 'admin3', 'admin3', 'admin3', 25),
(6, 'test5', 'test5', 'Male', '2021-11-19', 'test5', 'hr', 'test5', 'test5', 'test5', 'test5', 'test5', 25),
(7, 'test6', 'test6', 'Female', '2021-11-20', 'test6', 'hr', 'test6', 'test6', 'test6', 'test6', 'test6', 25),
(8, 'test7', 'test7', 'Female', '2021-11-26', 'test7', 'admin', 'test7', 'test7', 'test7', 'test7', 'test7', 25),
(9, 'staff', 'staff', 'Male', '2021-11-26', 'staff', 'staff', 'staff', 'staff', 'staff', 'staff', 'staff', 25),
(10, 'jim', 'jim', 'Male', '2021-11-18', 'jim', 'admin', 'jim', '3546345634', 'jimjimland', 'jim', 'jim', 25);

-- --------------------------------------------------------

--
-- Table structure for table `user_has_company_event`
--

CREATE TABLE `user_has_company_event` (
  `User_ID` int(8) NOT NULL,
  `Event_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_has_company_event`
--

INSERT INTO `user_has_company_event` (`User_ID`, `Event_ID`) VALUES
(4, 7),
(4, 7),
(1, 7),
(10, 7),
(9, 7),
(3, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_event`
--
ALTER TABLE `company_event`
  ADD PRIMARY KEY (`Event_ID`);

--
-- Indexes for table `leaving_form`
--
ALTER TABLE `leaving_form`
  ADD PRIMARY KEY (`Form_ID`),
  ADD KEY `User_ID` (`User_ID`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `user_has_company_event`
--
ALTER TABLE `user_has_company_event`
  ADD KEY `Company Event_Event_ID` (`Event_ID`),
  ADD KEY `User_User_ID` (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_event`
--
ALTER TABLE `company_event`
  MODIFY `Event_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `leaving_form`
--
ALTER TABLE `leaving_form`
  MODIFY `Form_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `leaving_form`
--
ALTER TABLE `leaving_form`
  ADD CONSTRAINT `leaving_form_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`);

--
-- Constraints for table `user_has_company_event`
--
ALTER TABLE `user_has_company_event`
  ADD CONSTRAINT `user_has_company_event_ibfk_1` FOREIGN KEY (`Event_ID`) REFERENCES `company_event` (`Event_ID`),
  ADD CONSTRAINT `user_has_company_event_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
