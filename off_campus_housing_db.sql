-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2020 at 06:21 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `off_campus_housing_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartments_info`
--

CREATE TABLE `apartments_info` (
  `Apartment_ID` int(10) UNSIGNED NOT NULL,
  `Landlord_ID` int(10) UNSIGNED NOT NULL,
  `Apartment_Addr_1` varchar(60) NOT NULL,
  `Apartment_Addr_2` varchar(60) NOT NULL,
  `Apartment_Parish` varchar(20) NOT NULL,
  `Apartment_Distance` int(10) UNSIGNED NOT NULL,
  `Apartment_Latitude` double(10,6) NOT NULL,
  `Apartment_Longitude` double(10,6) NOT NULL,
  `Rent` int(10) UNSIGNED NOT NULL,
  `Rooms_Available` int(10) UNSIGNED NOT NULL,
  `Rooms_Occupied` int(10) UNSIGNED NOT NULL,
  `Apartment_Reg_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `apartment_attr`
--

CREATE TABLE `apartment_attr` (
  `Apartment_Attr_ID` int(10) UNSIGNED NOT NULL,
  `Apartment_ID` int(10) UNSIGNED NOT NULL,
  `Available` tinyint(1) NOT NULL,
  `All_Inclusive` tinyint(1) NOT NULL,
  `Internet` tinyint(1) NOT NULL,
  `Water` tinyint(1) NOT NULL,
  `Washing_Machine` tinyint(1) NOT NULL,
  `Gas` tinyint(1) NOT NULL,
  `BurglarBars` tinyint(1) NOT NULL,
  `Air_Condition` tinyint(1) NOT NULL,
  `Shared` tinyint(1) NOT NULL,
  `Studio` tinyint(1) NOT NULL,
  `Flat` tinyint(1) NOT NULL,
  `Apartment` tinyint(1) NOT NULL,
  `Fenced` tinyint(1) NOT NULL,
  `Furnished` tinyint(1) NOT NULL,
  `Unfurnished` tinyint(1) NOT NULL,
  `Water_Heater` tinyint(1) NOT NULL,
  `LiveIn` tinyint(1) NOT NULL,
  `Apartment_Attr_Reg_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_ID` int(10) UNSIGNED NOT NULL,
  `Apartment_ID` int(10) UNSIGNED NOT NULL,
  `Tenant_name` varchar(60) NOT NULL,
  `Feedback_Title` varchar(200) NOT NULL,
  `Feedback_Message` varchar(1000) NOT NULL,
  `Feedback_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `landlords_info`
--

CREATE TABLE `landlords_info` (
  `Landlord_ID` int(10) UNSIGNED NOT NULL,
  `Landlord_FName` varchar(60) NOT NULL,
  `Landlord_LName` varchar(60) NOT NULL,
  `Landlord_Gender` enum('Male','Female','Other','Human') NOT NULL,
  `Landlord_Email` varchar(60) NOT NULL,
  `Landlord_Tel` varchar(20) NOT NULL,
  `Landlord_Passwd` varchar(30) NOT NULL,
  `Landlord_Reg_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `landlords_info`
--

INSERT INTO `landlords_info` (`Landlord_ID`, `Landlord_FName`, `Landlord_LName`, `Landlord_Gender`, `Landlord_Email`, `Landlord_Tel`, `Landlord_Passwd`, `Landlord_Reg_Time`) VALUES
(1, 'Jimmy', 'DaLou', 'Other', 'Abovesky.bpc@gmail.com', '17673454992', '$2y$10$ewBCGcVePzyUsCHH4/lQ3ui', '2020-07-29 01:57:10'),
(2, 'Lee', 'Daniel', 'Male', 'leeddaniel@live.com', '17673454992', '$2y$10$Vue.bgFy8MGFpJ7ESnaFc.K', '2020-07-29 02:04:01'),
(3, 'Rishona', 'Goring', 'Female', 'rishonagoring@yahoo.com', '17673454992', '$2y$10$.IaHEgUbl8IFmX85/WPLOuZ', '2020-07-29 02:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `Picture_ID` int(10) UNSIGNED NOT NULL,
  `Apartment_ID` int(10) UNSIGNED NOT NULL,
  `Pictures_Path` varchar(60) NOT NULL,
  `Date_Uploaded` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartments_info`
--
ALTER TABLE `apartments_info`
  ADD PRIMARY KEY (`Apartment_ID`),
  ADD KEY `Landlord-N-Apartment_Relationsip` (`Landlord_ID`);

--
-- Indexes for table `apartment_attr`
--
ALTER TABLE `apartment_attr`
  ADD PRIMARY KEY (`Apartment_Attr_ID`),
  ADD KEY `Apartment-Attr-N-Apartment-Info` (`Apartment_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_ID`),
  ADD KEY `Feedback-N-Apartment_Relationship` (`Apartment_ID`);

--
-- Indexes for table `landlords_info`
--
ALTER TABLE `landlords_info`
  ADD PRIMARY KEY (`Landlord_ID`),
  ADD UNIQUE KEY `Landlord_Email` (`Landlord_Email`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`Picture_ID`),
  ADD KEY `Apartment-N-Picture_Relationship` (`Apartment_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartments_info`
--
ALTER TABLE `apartments_info`
  MODIFY `Apartment_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apartment_attr`
--
ALTER TABLE `apartment_attr`
  MODIFY `Apartment_Attr_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feedback_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landlords_info`
--
ALTER TABLE `landlords_info`
  MODIFY `Landlord_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `Picture_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apartments_info`
--
ALTER TABLE `apartments_info`
  ADD CONSTRAINT `Landlord-N-Apartment_Relationsip` FOREIGN KEY (`Landlord_ID`) REFERENCES `landlords_info` (`Landlord_ID`);

--
-- Constraints for table `apartment_attr`
--
ALTER TABLE `apartment_attr`
  ADD CONSTRAINT `Apartment-Attr-N-Apartment-Info` FOREIGN KEY (`Apartment_ID`) REFERENCES `apartments_info` (`Apartment_ID`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `Feedback-N-Apartment_Relationship` FOREIGN KEY (`Apartment_ID`) REFERENCES `apartments_info` (`Apartment_ID`);

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `Apartment-N-Picture_Relationship` FOREIGN KEY (`Apartment_ID`) REFERENCES `apartments_info` (`Apartment_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
