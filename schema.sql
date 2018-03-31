-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: mysql7002.site4now.net:3306
-- Generation Time: Mar 30, 2018 at 10:42 PM
-- Server version: 5.6.26-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lzml8dgk_firesafety`
--

-- --------------------------------------------------------

--
-- Table structure for table `inspectors`
--

CREATE TABLE `inspectors` (
  `ID` int(128) NOT NULL,
  `User_Id` varchar(512) NOT NULL,
  `Rating` int(8) NOT NULL DEFAULT '0',
  `No_Inspections` int(16) NOT NULL DEFAULT '0',
  `Zone` enum('South','North','South West','Central','East') NOT NULL,
  `Rank` varchar(128) NOT NULL,
  `Created_At` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Deleted_At` datetime DEFAULT NULL,
  `Updated_At` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `installation_checklist`
--

CREATE TABLE `installation_checklist` (
  `id` int(3) NOT NULL,
  `name` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_At` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ref_checklist`
--

CREATE TABLE `ref_checklist` (
  `id` int(10) NOT NULL,
  `ref_id` int(10) NOT NULL,
  `checklist_id` int(3) NOT NULL,
  `ans` enum('yes','no') DEFAULT NULL,
  `image` varchar(512) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ref_no`
--

CREATE TABLE `ref_no` (
  `id` int(10) NOT NULL,
  `ref_no` varchar(256) NOT NULL,
  `user_id` varchar(512) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ref_no_msl`
--

CREATE TABLE `ref_no_msl` (
  `id` int(10) NOT NULL,
  `ref_no` varchar(256) NOT NULL,
  `owner_name` varchar(256) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `building_map` varchar(256) DEFAULT NULL,
  `checklist` varchar(256) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `request_details`
--

CREATE TABLE `request_details` (
  `ID` int(128) NOT NULL,
  `ref_id` int(10) NOT NULL,
  `Visits` int(32) NOT NULL,
  `Status` enum('Submitted','In Process','Accepted','Rejected','Shortcomings','Completed') CHARACTER SET latin1 NOT NULL,
  `building_address` varchar(512) CHARACTER SET latin1 NOT NULL,
  `inspector_allocated` varchar(512) CHARACTER SET latin1 DEFAULT NULL,
  `DOI` date DEFAULT NULL,
  `Created_At` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Deleted_At` datetime DEFAULT NULL,
  `Updated_At` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `request_questionnare`
--

CREATE TABLE `request_questionnare` (
  `ID` int(128) NOT NULL,
  `Question` text NOT NULL,
  `Answer_Type` varchar(128) NOT NULL,
  `Created_At` datetime NOT NULL,
  `Deleted_At` datetime DEFAULT NULL,
  `Updated_At` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shortcomings`
--

CREATE TABLE `shortcomings` (
  `id` int(10) NOT NULL,
  `shortcomings` text NOT NULL,
  `days_extended` int(10) NOT NULL,
  `remarks` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UID` varchar(512) NOT NULL,
  `Name` blob,
  `Email` blob,
  `PhoneNo` decimal(30,0) NOT NULL,
  `DOB` date NOT NULL,
  `AadharNo` decimal(30,0) NOT NULL,
  `Password_Hash` blob,
  `Mobile_Verified` tinyint(1) NOT NULL,
  `Email_Verified` tinyint(1) NOT NULL,
  `Image` blob,
  `user_type` blob,
  `Created_At` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Deleted_At` datetime DEFAULT NULL,
  `Updated_At` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE `user_answers` (
  `ID` int(128) NOT NULL,
  `Question_Id` int(128) NOT NULL,
  `Answer` text NOT NULL,
  `Reference_Id` int(10) NOT NULL,
  `Created_At` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Deleted_At` datetime DEFAULT NULL,
  `Updated_At` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inspectors`
--
ALTER TABLE `inspectors`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Indexes for table `installation_checklist`
--
ALTER TABLE `installation_checklist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_checklist`
--
ALTER TABLE `ref_checklist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ref_id` (`ref_id`),
  ADD KEY `checklist_id` (`checklist_id`);

--
-- Indexes for table `ref_no`
--
ALTER TABLE `ref_no`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ref_no_msl`
--
ALTER TABLE `ref_no_msl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_details`
--
ALTER TABLE `request_details`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `inspector_allocated` (`inspector_allocated`),
  ADD KEY `ref_id` (`ref_id`);

--
-- Indexes for table `request_questionnare`
--
ALTER TABLE `request_questionnare`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shortcomings`
--
ALTER TABLE `shortcomings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Question_Id` (`Question_Id`),
  ADD KEY `Reference_Id` (`Reference_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inspectors`
--
ALTER TABLE `inspectors`
  MODIFY `ID` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `installation_checklist`
--
ALTER TABLE `installation_checklist`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ref_checklist`
--
ALTER TABLE `ref_checklist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `ref_no`
--
ALTER TABLE `ref_no`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ref_no_msl`
--
ALTER TABLE `ref_no_msl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `request_details`
--
ALTER TABLE `request_details`
  MODIFY `ID` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `request_questionnare`
--
ALTER TABLE `request_questionnare`
  MODIFY `ID` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `shortcomings`
--
ALTER TABLE `shortcomings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_answers`
--
ALTER TABLE `user_answers`
  MODIFY `ID` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inspectors`
--
ALTER TABLE `inspectors`
  ADD CONSTRAINT `inspectors_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `user` (`UID`);

--
-- Constraints for table `ref_checklist`
--
ALTER TABLE `ref_checklist`
  ADD CONSTRAINT `ref_checklist_ibfk_1` FOREIGN KEY (`ref_id`) REFERENCES `ref_no` (`id`),
  ADD CONSTRAINT `ref_checklist_ibfk_2` FOREIGN KEY (`checklist_id`) REFERENCES `installation_checklist` (`id`);

--
-- Constraints for table `ref_no`
--
ALTER TABLE `ref_no`
  ADD CONSTRAINT `ref_no_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`UID`);

--
-- Constraints for table `request_details`
--
ALTER TABLE `request_details`
  ADD CONSTRAINT `request_details_ibfk_2` FOREIGN KEY (`inspector_allocated`) REFERENCES `user` (`UID`),
  ADD CONSTRAINT `request_details_ibfk_3` FOREIGN KEY (`ref_id`) REFERENCES `ref_no` (`id`);

--
-- Constraints for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD CONSTRAINT `user_answers_ibfk_1` FOREIGN KEY (`Question_Id`) REFERENCES `request_questionnare` (`ID`),
  ADD CONSTRAINT `user_answers_ibfk_2` FOREIGN KEY (`Reference_Id`) REFERENCES `ref_no` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
