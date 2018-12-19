-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2015 at 08:23 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flyhigh_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_class`
--

CREATE TABLE IF NOT EXISTS `business_class` (
  `Bclass_id` int(11) NOT NULL,
  `Total_seat` int(11) NOT NULL,
  `Available_seat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_class`
--

INSERT INTO `business_class` (`Bclass_id`, `Total_seat`, `Available_seat`) VALUES
(1, 50, 50),
(2, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `echonomy_class`
--

CREATE TABLE IF NOT EXISTS `echonomy_class` (
  `Eclass_id` int(11) NOT NULL,
  `Total_seat` int(11) NOT NULL,
  `Available_seat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `echonomy_class`
--

INSERT INTO `echonomy_class` (`Eclass_id`, `Total_seat`, `Available_seat`) VALUES
(1, 100, 100),
(2, 200, 200);

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE IF NOT EXISTS `flights` (
  `Flight_id` int(11) NOT NULL,
  `Flight_name` varchar(30) NOT NULL,
  `Route_id` int(30) NOT NULL,
  `Departure_time` time NOT NULL,
  `Departure_day` varchar(10) NOT NULL,
  `Business_class_fare` int(20) NOT NULL,
  `Echonomy_class_fare` int(20) NOT NULL,
  `Bclass_id` int(11) NOT NULL,
  `Eclass_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8782 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`Flight_id`, `Flight_name`, `Route_id`, `Departure_time`, `Departure_day`, `Business_class_fare`, `Echonomy_class_fare`, `Bclass_id`, `Eclass_id`) VALUES
(1, 'Bangladesh Biman', 101, '06:00:00', 'Sunday', 250, 100, 1, 1),
(2, 'Emirates Airways', 112, '03:00:00', 'Monday', 1000, 650, 2, 2),
(3, 'Bangladesh Biman', 102, '04:00:00', 'Saturday', 250, 100, 1, 1),
(4, 'Saudia Airways', 112, '09:00:00', 'Sunday', 900, 500, 2, 2),
(5, 'Malaysian Airways', 114, '13:00:00', 'Firday', 680, 400, 2, 2),
(6, 'Dragon Airlines', 115, '05:00:00', 'Thursday', 750, 550, 2, 2),
(7, 'British Airways', 107, '12:15:00', 'Tuesday', 1500, 915, 2, 2),
(8, 'GMG Airlines', 101, '03:00:00', 'Friday', 250, 140, 1, 1),
(9, 'Best Air Airways', 102, '10:00:00', 'Sunday', 200, 100, 1, 1),
(10, 'US Bangla Airlines', 104, '19:00:00', 'Monday', 220, 120, 1, 1),
(11, 'Emirates Airways', 108, '12:00:00', 'Friday', 1800, 1000, 2, 2),
(12, 'Emirates Airways', 107, '09:00:00', 'Thursday', 1800, 1000, 2, 2),
(13, 'Emirates Airways', 110, '22:00:00', 'Friday', 1600, 850, 2, 2),
(14, 'Emirates Airways', 113, '03:00:00', 'Tuesday', 1550, 900, 2, 2),
(15, 'British Airways', 111, '04:00:00', 'Friday', 1650, 900, 2, 2),
(16, 'British Airways', 110, '13:00:00', 'Sunday', 1650, 900, 2, 2),
(17, 'British Airways', 115, '06:40:00', 'Wednesday', 850, 550, 2, 2),
(18, 'British Airways', 109, '20:00:00', 'Monday', 1500, 980, 2, 2),
(19, 'Malaysian Airlines', 112, '05:36:00', 'Thursday', 850, 500, 2, 2),
(20, 'Malaysian Airlines', 113, '11:00:00', 'Tuesday', 1400, 850, 2, 2),
(21, 'Malaysian Airlines', 115, '04:00:00', 'Friday', 720, 500, 2, 2),
(22, 'Bangladesh Biman', 101, '06:00:00', 'Tuesday', 255, 100, 1, 1),
(23, 'Bangladesh Biman', 101, '06:00:00', 'Thursday', 250, 100, 1, 1),
(24, 'Emirates Airways', 112, '03:00:00', 'Saturday', 1100, 750, 2, 2),
(25, 'Emirates Airways', 112, '03:00:00', 'Wednesday', 1000, 650, 2, 2),
(26, 'Bangladesh Biman', 101, '06:00:00', 'Saturday', 250, 100, 1, 1),
(27, 'Bangladesh Biman', 102, '09:00:00', 'Wednesday', 250, 100, 1, 1),
(28, 'US Bangla Airlines', 101, '15:00:00', 'Friday', 220, 120, 1, 1),
(29, 'US Bangla Airlines', 101, '15:00:00', 'Saturday', 220, 120, 1, 1),
(30, 'US Bangla Airlines', 101, '15:00:00', 'Wednesday', 220, 120, 1, 1),
(31, 'US Bangla Airlines', 101, '15:00:00', 'Monday', 220, 120, 1, 1),
(32, 'US Bangla Airlines', 101, '15:00:00', 'Thursday', 220, 120, 1, 1),
(33, 'Bangladesh Biman', 101, '06:00:00', 'Wednesday', 250, 100, 1, 1),
(34, 'Bangladesh Biman', 102, '04:00:00', 'Friday', 250, 100, 1, 1),
(35, 'GMG Airlines', 101, '03:00:00', 'Saturday', 250, 140, 1, 1),
(36, 'GMG Airlines', 101, '03:00:00', 'Sunday', 250, 140, 1, 1),
(37, 'GMG Airlines', 101, '03:00:00', 'Monday', 250, 140, 1, 1),
(38, 'GMG Airlines', 101, '03:00:00', 'Tuesday', 250, 140, 1, 1),
(39, 'GMG Airlines', 101, '03:00:00', 'Wednesday', 250, 140, 1, 1),
(40, 'Best Air Airways', 101, '17:00:00', 'Sunday', 200, 100, 1, 1),
(41, 'Best Air Airways', 101, '17:00:00', 'Monday', 200, 100, 1, 1),
(42, 'Best Air Airways', 101, '17:00:00', 'Tuesday', 200, 100, 1, 1),
(43, 'Best Air Airways', 101, '17:00:00', 'Wednesday', 200, 100, 1, 1),
(44, 'Best Air Airways', 101, '17:00:00', 'Friday', 200, 100, 1, 1),
(45, 'Best Air Airways', 102, '10:00:00', 'Monday', 200, 100, 1, 1),
(46, 'Best Air Airways', 102, '10:00:00', 'Tuesday', 200, 100, 1, 1),
(47, 'Best Air Airways', 102, '10:00:00', 'Thursday', 200, 100, 1, 1),
(48, 'Best Air Airways', 102, '10:00:00', 'Saturday', 200, 100, 1, 1),
(49, 'Bangladesh Biman', 102, '09:00:00', 'Saturday', 250, 100, 1, 1),
(50, 'Bangladesh Biman', 102, '04:00:00', 'Monday', 250, 100, 1, 1),
(52, 'Bangladesh Biman', 103, '07:00:00', 'Friday', 200, 100, 1, 1),
(64, 'Bangladesh Biman', 103, '07:00:00', 'Saturday', 200, 100, 1, 1),
(65, 'Best Air Airways', 102, '10:00:00', 'Saturday', 200, 100, 1, 1),
(66, 'Bangladesh Biman', 103, '07:00:00', 'Sunday', 200, 100, 1, 1),
(67, 'Bangladesh Biman', 103, '07:00:00', 'Monday', 200, 100, 1, 1),
(68, 'Bangladesh Biman', 103, '07:00:00', 'Tuesday', 200, 100, 1, 1),
(69, 'Bangladesh Biman', 103, '07:00:00', 'Thursday', 200, 100, 1, 1),
(70, 'Emirates Airways', 107, '09:00:00', 'Sunday', 1800, 1000, 2, 2),
(71, 'Emirates Airways', 107, '09:00:00', 'Tuesday', 1800, 1000, 2, 2),
(72, 'Emirates Airways', 107, '09:00:00', 'Monday', 1800, 1000, 2, 2),
(73, 'Emirates Airways', 107, '09:00:00', 'Wednesday', 1800, 1000, 2, 2),
(74, 'British Airways', 107, '12:15:00', 'Thursday', 1500, 915, 2, 2),
(75, 'British Airways', 107, '12:15:00', 'Sunday', 1500, 915, 2, 2),
(76, 'British Airways', 107, '12:15:00', 'Friday', 1500, 915, 2, 2),
(77, 'Malaysian Airlines', 107, '04:00:00', 'Friday', 1450, 900, 2, 2),
(78, 'Malaysian Airlines', 107, '04:00:00', 'Tuesday', 1450, 900, 2, 2),
(79, 'Malaysian Airlines', 107, '04:00:00', 'Wrdnesday', 1450, 900, 2, 2),
(80, 'Air Canada', 107, '07:45:00', 'Tuesday', 1600, 980, 2, 2),
(81, 'Air Canada', 107, '07:45:00', 'Friday', 1600, 980, 2, 2),
(82, 'Air Canada', 107, '07:45:00', 'Monday', 1600, 900, 2, 2),
(8757, 'Bangladesh Biman', 102, '09:00:00', 'Tuesday', 250, 100, 1, 1),
(8758, 'Malaysian Airlines', 115, '04:00:00', 'Sunday', 720, 500, 2, 2),
(8759, 'Malaysian Airlines', 115, '04:00:00', 'Monday', 720, 500, 2, 2),
(8760, 'Malaysian Airlines', 115, '04:00:00', 'Wednesday', 720, 500, 2, 2),
(8761, 'Malaysian Airlines', 115, '04:00:00', 'Thursday', 720, 500, 2, 2),
(8762, 'Dragon Airlines', 115, '05:00:00', 'Tuesday', 750, 550, 2, 2),
(8763, 'Dragon Airlines', 115, '05:00:00', 'Friday', 750, 550, 2, 2),
(8764, 'Dragon Airlines', 115, '05:00:00', 'Monday', 750, 550, 2, 2),
(8765, 'British Airways', 115, '06:40:00', 'Friday', 850, 550, 2, 2),
(8766, 'British Airways', 115, '06:40:00', 'Sunday', 850, 550, 2, 2),
(8767, 'British Airways', 115, '06:40:00', 'Monday', 850, 550, 2, 2),
(8768, 'Emirates Airways', 114, '13:00:00', 'Firday', 790, 500, 2, 2),
(8769, 'Air India', 114, '13:00:00', 'Firday', 600, 400, 2, 2),
(8770, 'Air Asia', 114, '13:00:00', 'Firday', 600, 380, 2, 2),
(8771, 'Air Asia', 114, '13:00:00', 'Saturday', 600, 380, 2, 2),
(8772, 'Air Asia', 114, '13:00:00', 'Monday', 600, 380, 2, 2),
(8773, 'Air Asia', 114, '13:00:00', 'Tuesday', 600, 380, 2, 2),
(8774, 'Air Asia', 114, '13:00:00', 'Thursday', 600, 380, 2, 2),
(8775, 'Air India', 114, '13:00:00', 'Sunday', 600, 400, 2, 2),
(8776, 'Air India', 114, '13:00:00', 'Tuesday', 600, 400, 2, 2),
(8777, 'Air India', 114, '13:00:00', 'Wednesday', 600, 400, 2, 2),
(8778, 'Malaysian Airways', 114, '13:00:00', 'Sunday', 680, 400, 2, 2),
(8779, 'Malaysian Airways', 114, '13:00:00', 'Monday', 680, 400, 2, 2),
(8780, 'Malaysian Airways', 114, '13:00:00', 'Wednesday', 680, 400, 2, 2),
(8781, 'Malaysian Airways', 114, '13:00:00', 'Thursday', 680, 400, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `route_id` int(20) NOT NULL,
  `source` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`route_id`, `source`, `destination`) VALUES
(101, 'Dhaka', 'Chittagong'),
(102, 'Chittagong', 'Dhaka'),
(103, 'Dhaka', 'Sylhet'),
(104, 'Sylhet', 'Dhaka'),
(105, 'Sylhet', 'Chittagong'),
(106, 'Chittagong ', 'Sylhet'),
(107, 'Dhaka', 'London'),
(108, 'Chittagong', 'London'),
(109, 'Sylhet ', 'London'),
(110, 'Dhaka', 'Paris'),
(111, 'Chittagong', 'Paris'),
(112, 'Dhaka', 'Jeddah'),
(113, 'Dhaka', 'Madrid'),
(114, 'Dhaka', 'Kulalalampur'),
(115, 'Dhaka', 'Singapore');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `ticket_id` int(11) NOT NULL,
  `flight_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `journey_date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_fare` int(11) NOT NULL,
  `purchase_date` varchar(50) NOT NULL,
  `Class` varchar(20) NOT NULL,
  `Payment_method` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7039601 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `flight_id`, `user_id`, `journey_date`, `quantity`, `total_fare`, `purchase_date`, `Class`, `Payment_method`) VALUES
(7039587, 43, 13, '2015-08-19', 5, 1000, '00:00:00', 'Business Class', 'Master_card'),
(7039588, 32, 13, '2015-08-20', 5, 1100, '00:00:00', 'Business Class', 'American express'),
(7039589, 6, 19, '2015-09-03', 5, 3750, '00:00:00', 'Business Class', 'Visa'),
(7039590, 43, 19, '2015-09-02', 3, 600, '00:00:00', 'Business Class', 'Master card'),
(7039591, 13, 12, '2015-07-31', 1, 1600, '00:00:00', 'Business Class', 'American express'),
(7039592, 43, 12, '2015-09-02', 3, 600, '00:00:00', 'Business Class', 'Master card'),
(7039593, 22, 12, '2015-08-25', 1, 255, '00:00:00', 'Business Class', 'Master card'),
(7039594, 42, 12, '2015-08-18', 3, 600, 'August 28, 2015, 6:3', 'Business Class', 'Master card'),
(7039595, 43, 12, '2015-08-26', 1, 200, 'August 28, 2015, 6:37 pm', 'Business Class', 'Master card'),
(7039596, 23, 12, '2015-09-03', 3, 750, 'August 28, 2015, 6:39 pm', 'Business Class', 'American express'),
(7039597, 25, 13, '2015-08-12', 1, 1000, 'August 28, 2015, 7:06 pm', 'Business Class', 'Visa'),
(7039598, 14, 13, '2015-08-18', 2, 3100, 'August 28, 2015, 7:13 pm', 'Business Class', 'Visa'),
(7039599, 8776, 13, '2015-08-18', 2, 800, 'August 28, 2015, 7:19 pm', 'Echonomy Class', 'Master card'),
(7039600, 8767, 13, '2015-08-31', 2, 1700, 'August 29, 2015, 8:22 am', 'Business Class', 'American express');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(20) NOT NULL,
  `name` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `Date of Birth` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `FirstName`, `LastName`, `address`, `Date of Birth`) VALUES
(12, 'mimbo', '90829885912514471eaacd5a50f68d7c', 'mimbo@gmail.com', 'Mahinul', 'Islam', 'Mohammadpur, Dhaka', '2015-08-11'),
(13, 'zubaer', 'c89a447c6a7a767980105dd40f04585d', 'mail2zubaer@gmail.com', 'Zubaer', 'Ahmad', 'Mirpur, Dhaka', '1992-07-20'),
(14, 'anik', '236d5e43c519bb259c968117b03d5aaa', 'anik@gmail.com', 'Riad', 'Mahmud', 'Mirpur, Dhaka', '2015-08-10'),
(15, 'jahidb007', '6a204bd89f3c8348afd5c77c717a097a', 'jahidb007@gmail.com', 'Jahid ', 'Bhuiyan', 'Narshingdi', '1995-06-10'),
(16, 'tuli', 'e99cf122dc374c87e51ef838ad4a5f25', 'iamimashita@gmail.com', 'Imashita', 'Tasnim', 'Feni', '1994-12-11'),
(17, 'nayeem', '3f127de338878d134b2d4e7e1108279b', 'delta@gmail.com', 'Mohammad', 'Nayeem', 'Bhairab', '2015-08-26'),
(18, 'robin', '8dd1635ff2b8c931952663d4922956e7', 'robin@gmail.com', 'Robin', 'Hasan', 'Mirpur, Dhaka', '2015-08-19'),
(19, 'ridwan', '32250170a0dca92d53ec9624f336ca24', 'farahim_94@yahoo.com', 'Ridwanur', 'Rahim', 'khulna', '1994-01-13'),
(20, 'apon', 'ace8588f7a6fd7da827bb03871cf52ad', 'apon@gmail.com', 'Apon', 'Shaha', 'Mirpur, Dhaka', '2015-08-26'),
(21, 'rakib', '81dc9bdb52d04dc20036dbd8313ed055', 'rakib@gmail.com', 'Rakib', 'Hasan', 'Gazipur', '1993-06-17'),
(22, 'sharif103', '81dc9bdb52d04dc20036dbd8313ed055', 'sharif@gmail.com', 'Shariful', 'Alam', 'comilla', '1992-09-04'),
(23, 'salman', '97502267ac1b12468f69c14dd70196e9', 'salman@gmail.com', 'Salman', 'Hashem', 'Lalmatia', '2015-08-19'),
(24, 'nazrul', '81dc9bdb52d04dc20036dbd8313ed055', 'asmnazrul1363@gmail.com', 'Nazrul', 'Islam', 'Jatrabari', '1994-12-20'),
(25, 'saiful', '81dc9bdb52d04dc20036dbd8313ed055', 'saifulislamdrmc@gmail.com', 'Saiful', 'Alam', 'Hobijanj', '1994-10-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_class`
--
ALTER TABLE `business_class`
  ADD PRIMARY KEY (`Bclass_id`);

--
-- Indexes for table `echonomy_class`
--
ALTER TABLE `echonomy_class`
  ADD PRIMARY KEY (`Eclass_id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`Flight_id`), ADD KEY `Route_id` (`Route_id`), ADD KEY `Bclass_id` (`Bclass_id`), ADD KEY `Eclass_id` (`Eclass_id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`route_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`), ADD KEY `flight_id` (`flight_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_class`
--
ALTER TABLE `business_class`
  MODIFY `Bclass_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `echonomy_class`
--
ALTER TABLE `echonomy_class`
  MODIFY `Eclass_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `Flight_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8782;
--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `route_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7039601;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `flights`
--
ALTER TABLE `flights`
ADD CONSTRAINT `flights_ibfk_1` FOREIGN KEY (`Route_id`) REFERENCES `route` (`route_id`),
ADD CONSTRAINT `flights_ibfk_2` FOREIGN KEY (`Bclass_id`) REFERENCES `business_class` (`Bclass_id`),
ADD CONSTRAINT `flights_ibfk_3` FOREIGN KEY (`Eclass_id`) REFERENCES `echonomy_class` (`Eclass_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
