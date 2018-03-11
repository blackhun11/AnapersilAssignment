-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2018 at 03:44 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anapersil`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expensesID` int(11) NOT NULL,
  `expensesName` varchar(100) NOT NULL,
  `expensesDate` datetime NOT NULL,
  `expensesLoss` int(11) NOT NULL,
  `Description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`expensesID`, `expensesName`, `expensesDate`, `expensesLoss`, `Description`) VALUES
(4, 'Ziplock + design', '2017-10-23 14:07:31', 540000, '3600 / pcs, beli 150 pcs							'),
(5, 'Poster & Banner', '2017-10-23 14:07:31', 90000, '		');

-- --------------------------------------------------------

--
-- Table structure for table `msproduct`
--

CREATE TABLE `msproduct` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `ProductPrice` int(11) NOT NULL,
  `ProductImage` varchar(500) DEFAULT NULL,
  `ProductDesc` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msproduct`
--

INSERT INTO `msproduct` (`ProductID`, `ProductName`, `ProductPrice`, `ProductImage`, `ProductDesc`) VALUES
(1, 'Cassava Chips', 20000, 'http://localhost/anap/assets/NewCassava2.jpg', 'Delicious and Crispy Cassava Chips that you can eat while shopping other\'s stall. Come with original salted egg and chilly flavor'),
(2, 'Chicken Skin ', 22000, 'http://localhost/anap/assets/NewSkin.jpg', 'Delicious and Crispy Chicken Sin that you can eat while shopping other\'s stall. Come with original salted egg and chilly flavor');

-- --------------------------------------------------------

--
-- Table structure for table `msstaff`
--

CREATE TABLE `msstaff` (
  `StaffID` int(11) NOT NULL,
  `StaffUsername` varchar(100) NOT NULL,
  `StaffPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msstaff`
--

INSERT INTO `msstaff` (`StaffID`, `StaffUsername`, `StaffPassword`) VALUES
(1, 'admin', 'admin'),
(2, 'anap', 'anap');

-- --------------------------------------------------------

--
-- Table structure for table `msvarian`
--

CREATE TABLE `msvarian` (
  `VarianID` int(11) NOT NULL,
  `VarianName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msvarian`
--

INSERT INTO `msvarian` (`VarianID`, `VarianName`) VALUES
(1, 'Original'),
(3, 'Hot & Spicy');

-- --------------------------------------------------------

--
-- Table structure for table `trpurchase`
--

CREATE TABLE `trpurchase` (
  `PurchaseID` int(11) NOT NULL,
  `itemName` varchar(100) NOT NULL,
  `itemPrice` decimal(10,0) NOT NULL,
  `PurchaseDate` datetime NOT NULL,
  `Description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trpurchase`
--

INSERT INTO `trpurchase` (`PurchaseID`, `itemName`, `itemPrice`, `PurchaseDate`, `Description`) VALUES
(6, 'Keripik Singkong', '200000', '2017-10-23 14:00:12', '10 kg, per kg 20k												'),
(7, 'Kulit Ayam', '150000', '2017-10-23 14:00:47', '5kg, 30k per kg												'),
(8, 'Bon Cabe', '60000', '2017-10-23 14:01:29', '	2 pcs. per pcs 30k							'),
(9, 'Daun Kari', '125000', '2017-10-23 14:02:02', '25 pcs, 5k/pcs						'),
(10, 'Telur Asin', '50000', '2017-10-23 14:02:36', '20 pcs, per pcs 2500													'),
(11, 'Merica', '15000', '2017-10-23 14:03:00', '1 pcs		'),
(12, 'Garam', '15000', '2017-10-23 14:04:02', '	15k/kg										'),
(13, 'Gula', '15000', '2017-10-23 14:04:20', '15k / kg														'),
(14, 'Mentega', '22000', '2017-10-23 14:04:48', '		11k/250gr												'),
(15, 'Bawang', '30000', '2017-10-23 14:05:10', '30k/kg														'),
(17, 'Jahe', '15000', '2017-10-23 14:06:11', '15k/kg												'),
(18, 'Blackpepper Powder', '60000', '2017-10-23 14:06:38', '30k/kg														');

-- --------------------------------------------------------

--
-- Table structure for table `trsales`
--

CREATE TABLE `trsales` (
  `SalesID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `VarianID` int(11) NOT NULL,
  `SalesDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `BuyerName` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `TakePO` datetime DEFAULT NULL,
  `isPaidoff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trsales`
--

INSERT INTO `trsales` (`SalesID`, `ProductID`, `VarianID`, `SalesDate`, `BuyerName`, `Quantity`, `TakePO`, `isPaidoff`) VALUES
(176, 1, 1, '2017-12-12 08:44:11', 'Jasheline', 1, NULL, 1),
(177, 1, 1, '2017-12-12 09:41:44', 'Anton', 1, NULL, 1),
(178, 1, 1, '2017-12-12 10:17:25', 'Siany', 1, NULL, 1),
(179, 1, 1, '2017-12-12 10:18:34', 'Icha', 1, NULL, 1),
(180, 1, 1, '2017-12-12 10:18:51', 'Daphne', 1, NULL, 1),
(181, 1, 1, '2017-12-12 11:00:56', 'Ibu Ratna', 1, NULL, 1),
(182, 2, 1, '2017-12-12 11:02:28', 'Karin ', 1, NULL, 1),
(183, 1, 1, '2017-12-12 11:36:29', 'Bobby', 1, NULL, 1),
(184, 1, 1, '2017-12-12 11:37:37', 'Widya', 1, NULL, 1),
(185, 1, 1, '2017-12-12 11:42:30', 'Hariadi', 1, NULL, 1),
(186, 1, 1, '2017-12-12 11:49:07', 'Owen', 1, NULL, 1),
(187, 1, 1, '2017-12-12 11:59:41', 'Diana Sari', 1, NULL, 1),
(188, 1, 1, '2017-12-12 12:05:35', 'Angelia', 2, NULL, 1),
(189, 1, 1, '2017-12-12 12:14:03', 'Sri', 2, NULL, 1),
(190, 1, 1, '2017-12-12 12:56:04', 'Ibu Mutia', 1, NULL, 1),
(191, 2, 1, '2017-12-12 13:08:09', 'Moni', 1, NULL, 1),
(192, 1, 1, '2017-12-12 13:13:20', 'Eve', 1, NULL, 1),
(193, 1, 1, '2017-12-12 13:13:31', 'Terre', 1, NULL, 1),
(194, 1, 1, '2017-12-12 13:13:40', 'Andrea', 1, NULL, 1),
(195, 1, 1, '2017-12-12 13:14:04', 'Ije', 1, NULL, 1),
(196, 1, 1, '2017-12-12 13:14:26', 'Audre', 1, NULL, 1),
(197, 2, 1, '2017-12-12 13:15:25', 'Johan', 1, NULL, 1),
(198, 1, 1, '2017-12-12 13:19:47', 'Almitra', 1, NULL, 0),
(199, 1, 1, '2017-12-12 13:20:50', 'Silvia', 1, NULL, 1),
(200, 2, 1, '2017-12-12 13:33:50', 'Riyandi', 1, NULL, 1),
(201, 1, 1, '2017-12-12 13:34:04', 'Hesky', 1, NULL, 0),
(202, 1, 1, '2017-12-12 13:34:48', 'Cornelia', 1, NULL, 1),
(203, 1, 3, '2017-12-12 13:38:10', 'Arvira', 1, NULL, 1),
(204, 1, 1, '2017-12-12 14:12:23', 'Jose', 1, NULL, 1),
(205, 1, 3, '2017-12-12 14:17:44', 'Akbar', 1, NULL, 1),
(206, 2, 1, '2017-12-12 14:19:02', 'Silva', 1, NULL, 1),
(207, 1, 3, '2017-12-12 14:55:01', 'Audrey', 1, NULL, 1),
(208, 1, 1, '2017-12-12 14:55:22', 'Valen', 1, NULL, 1),
(209, 1, 1, '2017-12-12 14:55:31', 'Patricia', 1, NULL, 1),
(210, 2, 1, '2017-12-12 15:06:39', 'Tio', 1, NULL, 1),
(211, 2, 1, '2017-12-12 15:19:29', 'Ije (20k)', 1, NULL, 1),
(212, 2, 1, '2017-12-12 15:19:39', 'Diky (20k)', 1, NULL, 1),
(214, 1, 1, '2017-12-12 16:09:04', 'yohanes (10K)', 1, NULL, 1),
(215, 1, 1, '2017-12-12 16:14:41', 'aristo (5K)', 1, NULL, 1),
(216, 1, 1, '2017-12-12 16:21:13', 'karin(5k)', 1, NULL, 1),
(217, 1, 1, '2017-12-12 16:23:22', 'stella (5k)', 10, NULL, 1),
(218, 1, 1, '2017-12-12 16:23:40', 'anton (5k)', 1, NULL, 1),
(219, 1, 1, '2017-12-12 16:26:37', 'cendana (5k)', 1, NULL, 1),
(220, 1, 1, '2017-12-12 16:29:29', 'yohanes(5k)', 1, NULL, 0),
(221, 1, 1, '2018-01-19 14:50:51', 'testing`', 1, '2018-01-19 14:50:45', 0),
(222, 1, 1, '2018-01-19 14:51:26', 'testaasd', 1, '2018-01-19 14:51:20', 0),
(223, 1, 1, '2018-01-19 14:52:34', 'teas', 2, '2018-01-19 14:52:29', 0),
(224, 1, 1, '2018-01-19 14:53:08', 'sda', 10, '2018-01-19 14:53:03', 0),
(225, 1, 1, '2018-01-19 14:53:27', 'test', 1, '2018-01-19 12:53:21', 0),
(226, 1, 1, '2018-01-19 14:53:48', 'sd', 2, NULL, 1),
(227, 2, 1, '2018-01-19 14:54:53', 'asd', 11, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expensesID`);

--
-- Indexes for table `msproduct`
--
ALTER TABLE `msproduct`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `msstaff`
--
ALTER TABLE `msstaff`
  ADD PRIMARY KEY (`StaffID`);

--
-- Indexes for table `msvarian`
--
ALTER TABLE `msvarian`
  ADD PRIMARY KEY (`VarianID`);

--
-- Indexes for table `trpurchase`
--
ALTER TABLE `trpurchase`
  ADD PRIMARY KEY (`PurchaseID`);

--
-- Indexes for table `trsales`
--
ALTER TABLE `trsales`
  ADD PRIMARY KEY (`SalesID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expensesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `msproduct`
--
ALTER TABLE `msproduct`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `msstaff`
--
ALTER TABLE `msstaff`
  MODIFY `StaffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trpurchase`
--
ALTER TABLE `trpurchase`
  MODIFY `PurchaseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `trsales`
--
ALTER TABLE `trsales`
  MODIFY `SalesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
