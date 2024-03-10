-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 09:33 PM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `username`, `userpassword`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `Id` int(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `complainer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`Id`, `topic`, `description`, `complainer`) VALUES
(4, 'r', 'r', 'nouman1@gmail.com'),
(5, 'low quality products', 'very low quality products you should improve your products and service', 'nouman1@gmail.com'),
(6, 'serive', 'your service is quite good', 'nouman1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_id` int(100) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Phone_No` bigint(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pay_Mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_id`, `Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES
(1, 'raheel', 0, '98uiui', 'COD'),
(2, 'raheel', 2723, 'h1333', 'COD'),
(3, 'raheel', 0, 'chakwal', 'COD'),
(4, 'raheel', 0, 'u', 'COD'),
(5, 's', 2723, 'r', 'COD'),
(6, 'r', 0, 'r', 'COD'),
(7, 'q', 1, 'w', 'COD'),
(8, 'n', 0, 'n', 'COD'),
(9, 'nouman', 2, 'g', 'COD'),
(10, 'nouman', 222, 'riphah', 'COD'),
(11, 'q', 0, 'q', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `PId` int(11) NOT NULL,
  `PName` varchar(100) NOT NULL,
  `PPrice` varchar(100) NOT NULL,
  `PImage` varchar(100) NOT NULL,
  `PCategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`PId`, `PName`, `PPrice`, `PImage`, `PCategory`) VALUES
(11, 'Toyota Corolla Altis', '2000000', 'data/car1.jpg', 'Mobile'),
(12, 'Dell Core I-5', '40000', 'data/laptop.jpg', 'Laptop'),
(13, 'Nike Bag', '600', 'data/bag 2.jpg', 'Bag'),
(14, 'Honda Civic X', '500000', 'data/car5.jpg', 'Mobile'),
(15, 'Hp 5th Generation', '80000', 'data/laptop1.jpg', 'Laptop'),
(16, 'Sports Bag', '400', 'data/bag1.jpg', 'Bag'),
(19, 'Huvawei 6th Generation', '50000', 'data/laptop3.jpg', 'Laptop'),
(20, 'Women Bag', '800', 'data/bag 3.jpg', 'Bag'),
(22, 'Diahastu Mira', '20000', 'data/car8.jpg', 'Mobile'),
(23, 'Men Black Jacket', '300', 'data/jacket2.jpg', 'Home'),
(24, 'Leather Jacket', '1000', 'data/jacket1.jpg', 'Home'),
(25, 'Toyota LandCrusier', '200000', 'data/car17.jpg', 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Number` int(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `UserName`, `Email`, `Number`, `Password`, `status`) VALUES
(1, 'admin', 'admin@sdms.com', 2242, '', 'S'),
(8, 'nouman', 'nouman111@gmail.com', 32, 'admin', 'S'),
(10, 'nouman1@gmail.com', 'nouman1@gmail.com', 3, 'admin', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_id` int(11) NOT NULL,
  `Item_Name` varchar(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES
(2, '0', 1000, 1),
(2, '0', 200000, 1),
(3, '0', 1000, 1),
(4, '0', 1000, 1),
(5, '0', 300, 1),
(6, '0', 1000, 1),
(7, '0', 200000, 1),
(8, '0', 200000, 1),
(9, 'Toyota Land', 200000, 1),
(10, 'Men Black J', 300, 5),
(10, 'Leather Jac', 1000, 3),
(11, 'Leather Jac', 1000, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`PId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `PId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
