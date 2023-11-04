-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 05:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `serialno` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Massage` varchar(100) NOT NULL,
  `Userrole` varchar(50) NOT NULL,
  `addedon` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`serialno`, `Name`, `Email`, `Subject`, `Massage`, `Userrole`, `addedon`) VALUES
(1, 'barna', 'ba@gmail.com', 'aaaaa', 'vvvvvvv', 'user', '2022-08-18 11:28:22');

-- --------------------------------------------------------

--
-- Table structure for table `rentinfo`
--

CREATE TABLE `rentinfo` (
  `SerialNo` int(11) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `PhoneNo` varchar(11) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `NID` varchar(17) NOT NULL,
  `DOB` date NOT NULL,
  `Address` text NOT NULL,
  `VehicleID` varchar(20) NOT NULL,
  `PickUp` varchar(50) NOT NULL,
  `PickUpDate` date NOT NULL,
  `PickUpTime` time NOT NULL,
  `DropOff` varchar(50) NOT NULL,
  `DropOffDate` date NOT NULL,
  `DropOffTime` time NOT NULL,
  `TourTime` varchar(20) NOT NULL,
  `TourFare` double NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rentinfo`
--

INSERT INTO `rentinfo` (`SerialNo`, `FName`, `LName`, `PhoneNo`, `Email`, `NID`, `DOB`, `Address`, `VehicleID`, `PickUp`, `PickUpDate`, `PickUpTime`, `DropOff`, `DropOffDate`, `DropOffTime`, `TourTime`, `TourFare`, `Status`) VALUES
(1, 'barna', 'khan', '01643255355', 'a@a.a', '2852583927', '1995-08-15', 'Nilphaari', '1', 'mirpur', '2022-08-18', '09:41:00', 'mirpur', '2022-08-18', '09:41:00', '7', 5000, 'Pending'),
(2, 'boron', 'khan', '01643255355', 'me@gmail.com', '2852583927', '1995-08-15', 'Dhaka', '1', 'mirpur', '2022-08-18', '09:41:00', 'mirpur', '2022-08-18', '09:41:00', '7', 5000, 'Completed'),
(3, 'mariam', 'barna', '01643255355', 'mei@gmail.com', '2852583927', '0000-00-00', 'asfsf', '1', 'Mohammadpur', '2022-08-19', '10:48:00', 'mirpur', '2022-08-20', '10:48:00', '1', 5000, 'Completed'),
(4, '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', 0, 'Cancelled'),
(5, 'barna', 'mariam', '01888111111', 'mariam@gmail.com', '210912012', '2022-09-04', 'Md Pur', '1', 'mirpur', '2022-09-02', '14:48:00', 'mirpur', '2022-09-05', '14:48:00', '0', 3000, 'Pending'),
(7, 'barna', 'hh', '01921108577', 'baew@gmail.com', '092134678', '1990-02-03', 'mirpur', '25', 'mirpur', '2022-09-06', '19:20:00', 'barishal', '2022-09-07', '19:20:00', '12', 4800, 'Completed'),
(8, 'barna', 'mariam', '01616544449', 'antu@gmail.com', '092102101143', '1987-09-07', 'dhaka', '25', 'mohammadpur', '2022-09-08', '07:00:00', 'bandorbon', '2022-09-08', '07:00:00', '0', 0, 'Completed'),
(9, 'barna', 'b', '0121323232', 'so@gmail.com', '0921021011433', '1956-09-04', 'dhAk', '26', 'mirpur', '2022-09-07', '14:51:00', 'bandorbon', '2022-09-09', '14:51:00', '', 38333.333333333, 'Completed'),
(10, 'nipa', 'akter', '0116565655', 'somiio@gmail.com', '09210210114544', '1970-09-19', 'dfg', '1', 'mirpur', '2022-09-08', '02:03:00', 'bandorbon', '2022-09-09', '02:03:00', '', 6666.6666666667, 'Completed'),
(11, 'barna', 'an', '01909090', 'an@gmail.com', '091000009', '1987-09-12', 'sdsd', '25', 'lalmati', '2022-09-07', '15:17:00', 'bandorbon', '2022-09-10', '15:17:00', '', 14000, 'Completed'),
(12, 'nowshin', 'akter', '0192154324', 'smmo@gmail.com', '09210210114330', '1999-08-28', 'dhaka', '25', 'kollanpur', '2022-09-07', '15:36:00', 'kuakata', '2022-09-09', '15:36:00', '', 10000, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `serialno` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DateofBirth` date NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `NIDNO` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Vehiclesbrand` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `RegistrationNo` varchar(50) NOT NULL,
  `RegistrationDate` varchar(50) NOT NULL,
  `Color` varchar(50) NOT NULL,
  `NumberofSeat` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `emal` varchar(50) NOT NULL,
  `PNumber` varchar(50) NOT NULL,
  `Ncard` varchar(50) NOT NULL,
  `Datebirth` date NOT NULL,
  `Addres` varchar(50) NOT NULL,
  `Gen` varchar(50) NOT NULL,
  `Image` text NOT NULL,
  `userrole` varchar(50) NOT NULL,
  `addedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Status` varchar(40) NOT NULL DEFAULT 'Pending',
  `Fare` double DEFAULT 0,
  `Availability` varchar(30) NOT NULL DEFAULT 'Avaliable'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`serialno`, `firstName`, `LastName`, `Email`, `DateofBirth`, `PhoneNumber`, `NIDNO`, `Address`, `Gender`, `Password`, `Vehiclesbrand`, `Model`, `RegistrationNo`, `RegistrationDate`, `Color`, `NumberofSeat`, `fname`, `lname`, `emal`, `PNumber`, `Ncard`, `Datebirth`, `Addres`, `Gen`, `Image`, `userrole`, `addedon`, `Status`, `Fare`, `Availability`) VALUES
(1, 'Alom', 'khan', 'khan@gmail.com', '0178-08-01', '01910129871', '091111111121', 'dhaka', 'Male', '12', 'Tata Nexon', 'Tata', '12211', '2022-08-01', 'black', '5', 'alom', 'khan', 'khan@gmail.com', '0121', '2222', '0187-12-02', 'dhaka', 'Male', 'image/vab@gmail.com.png', 'Owner', '2022-09-05 11:43:07', 'Approved', 5000, 'Available'),
(4, 'nana', 'a', 'nan@gmail.com', '2022-07-05', '55', '777777', 'fdsa', 'Female', '123', 'Toyota', 'Toyota Noah', '3', '2211-04-04', 'black', '4', 'nana', 'a', 'nan@gmail.com', '55', '545', '2022-08-02', 'fdsa', 'Female', 'image/vab@gmail.com.png', 'Owner', '2022-09-04 16:46:19', 'Pending', 0, 'Avaliable'),
(5, 'sorin', 's', 'so@gmail.com', '2022-08-05', '98', '30', 'mairpew', 'Male', '12', 'Mitsubishi Pajero', 'Mitsubishi Pajero', '66', '2022-08-04', 'black', '4', 'sorin', 's', 'so@gmail.com', '98', '09', '2100-02-02', 'mairpew', 'Male', '0', 'Owner', '2022-09-03 16:23:05', 'Pending', 0, 'Unvailable'),
(7, 'aki', 'k', 'ak@gmail.com', '2000-02-02', '33333', '0199', 'azxc', 'Male', '12', 'Toyota', 'Toyota Hiace', '222222', '2022-08-05', 'blue', '9', 'aki', 'k', 'ak@gmail.com', '33333', '3333333', '2022-08-14', 'azxc', 'Male', '0', 'Owner', '2022-08-17 18:58:45', 'Pending', 0, 'Avaliable'),
(8, 'vaki', 'v', 'vki@gmail.com', '2011-04-04', '0172', '1', 'zxcvb', 'Female', '12', 'Toyota ', 'Toyota Noah Hybrid', '212122', '2022-08-29', 'Purple', '9', 'vki', 'v', 'vki@gmail.com', '0172', '01722', '1980-02-02', 'zxcvb', 'Female', '0', 'Owner', '2022-08-17 18:58:45', 'Pending', 0, 'Avaliable'),
(9, 'bani', 'l', 'baa@gmail.com', '2022-08-01', '789', '654', 'sdfg', 'Male', '12', 'Toyota', 'Toyota Axio Fielder', '2wsw', '2022-08-04', 'brown', '10', 'balam', 'l', 'baa@gmail.com', '789', '87665', '2022-08-07', 'sdfg', 'Male', '0', 'Owner', '2022-08-17 18:58:45', 'Pending', 0, 'Avaliable'),
(11, 'kakaa', 'a', 'ad@gmail.com', '1909-02-02', '8721', '1090', 'zxc', 'Male', '12', 'Mitsubishi', 'Mitsubishi Pajero', '65', '1212-04-04', 'black', '10', 'asfg', 'a', 'ad@gmail.com', '8721', '9823', '9012-05-31', 'zxc', 'Male', '0', 'Owner', '2022-08-17 18:58:45', 'Pending', 0, 'Avaliable'),
(12, 'laka', 'la', 'zac@gmail.com', '1987-02-03', '091276', '0954', 'miou', 'Male', '12', 'Toyota', 'Toyota Hiace Grand Cabin 2017', '1q', '1111-02-22', 'red', '15', 'zak', 'la', 'zac@gmail.com', '091276', '097890', '1908-02-02', 'miou', 'Male', '0', 'Owner', '2022-08-17 18:58:45', 'Pending', 0, 'Avaliable'),
(13, 'mari', 'm', 'mati@gmail.com', '2022-08-05', '432', '453', 'hgfdss', 'Male', '12', 'Toyota', 'Toyota Hiace Super GL 2016 Whit', '2016', '2016-03-04', 'white', '16', 'mari', 'm', 'mati@gmail.com', '432', '34567', '2012-07-07', 'hgfdss', 'Male', '0', 'Owner', '2022-08-17 18:58:45', 'Pending', 0, 'Avaliable'),
(14, 'siab', 'b', 'si@g.s', '2121-02-04', '123321', '034567', 'samhl', 'Male', '12', 'Toyota ', 'Toyota Hiace DX 2017', 'tq23', '3213-02-02', 'white', '15', 'sia', 'b', 'si@g.s', '123321', '223654321', '9801-02-21', 'samhl', 'Male', '0', 'Owner', '2022-08-17 18:58:45', 'Pending', 0, 'Avaliable'),
(16, 'Mariam', 'barna', 'mariam@gmail.com', '2022-08-01', '01921101577', '01923221', 'mirpur', 'Female', '123', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '0', 'admin', '2022-09-05 11:39:41', 'Approved', 0, 'Avaliable'),
(25, 'Ninan', 'asd', 'sil@gmail.com', '1993-09-05', '0198767888888', '091923495', 'xigatola', 'Male', '12', 'toyta', 'nexa', '04', '2022-08-28', 'white', '6', 'sil', 'asd', 'sil@gmail.cpm', '0198767888888', '09878888111', '2022-09-07', 'xigatola', 'Male', 'image/sil@gmail.cpm.jpg', 'Owner', '2022-09-05 11:46:02', 'Approved', 4800, 'Available'),
(26, 'boron', 'kim', 'kim@gmail.com', '1987-08-12', '012300', '01219876', 'sajek', 'Male', '12', 'toyta', 'nexa', 'r4443', '2022-08-28', 'white', '9', 'awvqa', 'kim', 'kim@b.c', '012300', '09889098', '2000-08-03', 'sajek', 'Male', 'image/kim@b.c.jpg', 'Owner', '2022-09-04 21:35:15', 'Approved', 20000, 'Available'),
(27, 'baron', 'ahmed', 'pom@gmail.com', '1983-12-02', '013232912', '0154000009', 'asdf', 'Male', '12', 'silver', 'hybrid', '1w2', '2022-08-29', 'silver', '15', 'a', 'a', 'pom@g.g', '013232912', '0765531', '1996-03-03', 'asdf', 'Male', 'image/pom@g.g.jpg', 'Owner', '2022-09-05 14:39:09', 'Approved', 50000, 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`serialno`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `rentinfo`
--
ALTER TABLE `rentinfo`
  ADD PRIMARY KEY (`SerialNo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`serialno`),
  ADD UNIQUE KEY `Email` (`Email`) USING BTREE,
  ADD UNIQUE KEY `NIDNO` (`NIDNO`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `serialno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rentinfo`
--
ALTER TABLE `rentinfo`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `serialno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
