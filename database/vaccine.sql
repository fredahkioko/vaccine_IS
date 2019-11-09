-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 07:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccine`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_child`
--
-- Creation: Nov 06, 2019 at 01:43 PM
--

CREATE TABLE `tbl_child` (
  `child_id` int(255) NOT NULL,
  `child_name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `blood-group` varchar(255) DEFAULT NULL,
  `role_id` int(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `tbl_child`:
--   `role_id`
--       `tbl_roles` -> `role_id`
--   `user_id`
--       `tbl_users` -> `user_id`
--   `role_id`
--       `tbl_roles` -> `role_id`
--   `user_id`
--       `tbl_users` -> `user_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosage`
--
-- Creation: Nov 06, 2019 at 01:20 PM
--

CREATE TABLE `tbl_dosage` (
  `dose_id` int(255) NOT NULL,
  `dose_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `tbl_dosage`:
--

--
-- Dumping data for table `tbl_dosage`
--

INSERT INTO `tbl_dosage` (`dose_id`, `dose_name`) VALUES
(1, 'birth'),
(2, '1st dose'),
(3, '2nd dose'),
(4, '3rd dose');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fatherbiodata`
--
-- Creation: Nov 06, 2019 at 02:33 PM
--

CREATE TABLE `tbl_fatherbiodata` (
  `father_id` int(255) NOT NULL,
  `bloodgroup` varchar(255) DEFAULT NULL,
  `role_id` int(255) DEFAULT NULL,
  `child_id` int(255) DEFAULT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `tbl_fatherbiodata`:
--   `child_id`
--       `tbl_child` -> `child_id`
--   `role_id`
--       `tbl_roles` -> `role_id`
--   `user_id`
--       `tbl_users` -> `user_id`
--   `user_id`
--       `tbl_users` -> `user_id`
--   `role_id`
--       `tbl_roles` -> `role_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guardianbiodata`
--
-- Creation: Nov 06, 2019 at 01:55 PM
--

CREATE TABLE `tbl_guardianbiodata` (
  `guardian_id` int(255) NOT NULL,
  `bloodgroup` varchar(255) DEFAULT NULL,
  `role_id` int(255) DEFAULT NULL,
  `child_id` int(255) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `tbl_guardianbiodata`:
--   `child_id`
--       `tbl_child` -> `child_id`
--   `role_id`
--       `tbl_roles` -> `role_id`
--   `user_id`
--       `tbl_users` -> `user_id`
--   `user_id`
--       `tbl_users` -> `user_id`
--   `role_id`
--       `tbl_roles` -> `role_id`
--   `child_id`
--       `tbl_child` -> `child_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_immunize`
--
-- Creation: Nov 06, 2019 at 02:21 PM
--

CREATE TABLE `tbl_immunize` (
  `dose_id` int(11) NOT NULL,
  `vaccine_id` int(11) NOT NULL,
  `period_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `administered` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `tbl_immunize`:
--   `period_id`
--       `tbl_period` -> `period_id`
--   `dose_id`
--       `tbl_dosage` -> `dose_id`
--   `vaccine_id`
--       `tbl_vaccine` -> `vaccine_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_motherbiodata`
--
-- Creation: Nov 06, 2019 at 01:56 PM
--

CREATE TABLE `tbl_motherbiodata` (
  `mother_id` int(255) NOT NULL,
  `bloodgroup` varchar(255) DEFAULT NULL,
  `role_id` int(255) DEFAULT NULL,
  `child_id` int(255) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `tbl_motherbiodata`:
--   `child_id`
--       `tbl_child` -> `child_id`
--   `role_id`
--       `tbl_roles` -> `role_id`
--   `user_id`
--       `tbl_users` -> `user_id`
--   `role_id`
--       `tbl_roles` -> `role_id`
--   `user_id`
--       `tbl_users` -> `user_id`
--   `child_id`
--       `tbl_child` -> `child_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_period`
--
-- Creation: Nov 06, 2019 at 01:05 PM
--

CREATE TABLE `tbl_period` (
  `period_id` int(255) NOT NULL,
  `period_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `tbl_period`:
--

--
-- Dumping data for table `tbl_period`
--

INSERT INTO `tbl_period` (`period_id`, `period_name`) VALUES
(1, 'birth'),
(2, '6 weeks'),
(3, '10 weeks'),
(4, '14 weeks'),
(5, '24 weeks'),
(6, '36 weeks');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--
-- Creation: Nov 06, 2019 at 01:40 PM
--

CREATE TABLE `tbl_roles` (
  `role_id` int(255) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `tbl_roles`:
--   `user_id`
--       `tbl_users` -> `user_id`
--

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`role_id`, `role_name`, `user_id`) VALUES
(1, 'father', 0),
(2, 'mother', 0),
(3, 'guardian', 0),
(4, 'nurse', 0),
(5, 'Supernurse', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--
-- Creation: Nov 07, 2019 at 05:55 AM
--

CREATE TABLE `tbl_users` (
  `user_id` int(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `bloodgroup` varchar(255) DEFAULT NULL,
  `role_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `tbl_users`:
--   `role_id`
--       `tbl_roles` -> `role_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vaccine`
--
-- Creation: Nov 06, 2019 at 01:27 PM
--

CREATE TABLE `tbl_vaccine` (
  `vaccine_id` int(255) NOT NULL,
  `vaccine_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `tbl_vaccine`:
--

--
-- Dumping data for table `tbl_vaccine`
--

INSERT INTO `tbl_vaccine` (`vaccine_id`, `vaccine_name`) VALUES
(1, 'BCG'),
(2, 'OPV'),
(3, 'DPT'),
(4, 'POLIO'),
(5, 'HeB'),
(6, 'Hib'),
(7, 'Measles'),
(8, 'Yellow Fever');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_child`
--
ALTER TABLE `tbl_child`
  ADD PRIMARY KEY (`child_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_dosage`
--
ALTER TABLE `tbl_dosage`
  ADD PRIMARY KEY (`dose_id`);

--
-- Indexes for table `tbl_fatherbiodata`
--
ALTER TABLE `tbl_fatherbiodata`
  ADD PRIMARY KEY (`father_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `tbl_guardianbiodata`
--
ALTER TABLE `tbl_guardianbiodata`
  ADD PRIMARY KEY (`guardian_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `child_id` (`child_id`);

--
-- Indexes for table `tbl_immunize`
--
ALTER TABLE `tbl_immunize`
  ADD KEY `period_id` (`period_id`),
  ADD KEY `dose_id` (`dose_id`),
  ADD KEY `vaccine_id` (`vaccine_id`);

--
-- Indexes for table `tbl_motherbiodata`
--
ALTER TABLE `tbl_motherbiodata`
  ADD PRIMARY KEY (`mother_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `child_id` (`child_id`);

--
-- Indexes for table `tbl_period`
--
ALTER TABLE `tbl_period`
  ADD PRIMARY KEY (`period_id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_vaccine`
--
ALTER TABLE `tbl_vaccine`
  ADD PRIMARY KEY (`vaccine_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_child`
--
ALTER TABLE `tbl_child`
  MODIFY `child_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_dosage`
--
ALTER TABLE `tbl_dosage`
  MODIFY `dose_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_fatherbiodata`
--
ALTER TABLE `tbl_fatherbiodata`
  MODIFY `father_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_guardianbiodata`
--
ALTER TABLE `tbl_guardianbiodata`
  MODIFY `guardian_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_motherbiodata`
--
ALTER TABLE `tbl_motherbiodata`
  MODIFY `mother_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_period`
--
ALTER TABLE `tbl_period`
  MODIFY `period_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `role_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_vaccine`
--
ALTER TABLE `tbl_vaccine`
  MODIFY `vaccine_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_child`
--
ALTER TABLE `tbl_child`
  ADD CONSTRAINT `tbl_child_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tbl_roles` (`role_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `tbl_child_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`);

--
-- Constraints for table `tbl_fatherbiodata`
--
ALTER TABLE `tbl_fatherbiodata`
  ADD CONSTRAINT `tbl_fatherbiodata_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`),
  ADD CONSTRAINT `tbl_fatherbiodata_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `tbl_roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_guardianbiodata`
--
ALTER TABLE `tbl_guardianbiodata`
  ADD CONSTRAINT `tbl_guardianbiodata_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `tbl_guardianbiodata_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `tbl_roles` (`role_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `tbl_guardianbiodata_ibfk_3` FOREIGN KEY (`child_id`) REFERENCES `tbl_child` (`child_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `tbl_immunize`
--
ALTER TABLE `tbl_immunize`
  ADD CONSTRAINT `tbl_immunize_ibfk_1` FOREIGN KEY (`period_id`) REFERENCES `tbl_period` (`period_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_immunize_ibfk_2` FOREIGN KEY (`dose_id`) REFERENCES `tbl_dosage` (`dose_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_immunize_ibfk_3` FOREIGN KEY (`vaccine_id`) REFERENCES `tbl_vaccine` (`vaccine_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_motherbiodata`
--
ALTER TABLE `tbl_motherbiodata`
  ADD CONSTRAINT `tbl_motherbiodata_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tbl_roles` (`role_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `tbl_motherbiodata_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `tbl_motherbiodata_ibfk_3` FOREIGN KEY (`child_id`) REFERENCES `tbl_child` (`child_id`) ON DELETE SET NULL ON UPDATE SET NULL;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
