-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2016 at 08:47 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('add', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catID` int(100) NOT NULL,
  `catName` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catID`, `catName`) VALUES
(1, 'Long-Sleeves'),
(2, 'Pants'),
(3, 'T-Shirts'),
(6, 'Watches'),
(7, 'Dresses'),
(11, 'Office Wear');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custID` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactNo` bigint(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custID`, `address`, `contactNo`, `password`, `username`) VALUES
(1, 'Cainta', 09369702690, 'victor', 'victor'),
(2, 'Taytay', 09369702690, 'kimber', 'kane');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `productID` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `timeframe` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `catID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `price`, `gender`, `image`, `catID`) VALUES
(16, 'Black Jean', 900, 'Men', 'Black Jean-900.jpg', NULL),
(17, 'Breda Casual Watch', 4000, 'Men', 'Breda Casual Watch - 4000.jpg', NULL),
(18, 'Captain America', 500, 'Men', 'Captain America-500.jpg', NULL),
(19, 'Checkered Long Sleeve', 750, 'Men', 'Checquered Long Sleeve-750.jpg', NULL),
(20, 'Fitted Jeans', 800, 'Men', 'Fitted Jeans-800.jpg', NULL),
(21, 'Fossil Silver Watch', 5800, 'Men', 'Fossil Silver Watch -5800.jpg', NULL),
(22, 'Gold Watch', 4500, 'Men', 'Gold Watch-4500.jpg', NULL),
(23, 'Gray Bear', 350, 'Men', 'Gray Bear-350.jpg', NULL),
(24, 'Gray Long Sleeve', 650, 'Men', 'Gray-Long-Sleeve-650.jpg', NULL),
(25, 'Laurels Formal Watch', 3000, 'Men', 'Laurels Formal Watch-3000.jpg', NULL),
(26, 'Mens Pants 1', 500, 'Men', 'mens-pants1.jpg', NULL),
(27, 'Mens Pants 2', 500, 'Men', 'mens-pants2.jpg', NULL),
(28, 'Mens Pants 3', 500, 'Men', 'mens-pants3.jpg', NULL),
(29, 'Mens Pants 4', 500, 'Men', 'mens-pants4.jpg', NULL),
(30, 'Shirt 1', 300, 'Men', 'mens-shirt1.jpg', NULL),
(31, 'Shirt 2', 300, 'Men', 'mens-shirt2.jpg', NULL),
(32, 'Shirt 3', 300, 'Men', 'mens-shirt3.jpg', NULL),
(33, 'Shirt 4', 300, 'Men', 'mens-shirt4.jpg', NULL),
(34, 'Watch 1', 1000, 'Men', 'mens-watch1.jpg', NULL),
(35, 'Watch 2', 1000, 'Men', 'mens-watch2.jpg', NULL),
(36, 'Watch 3', 1000, 'Men', 'mens-watch3.jpg', NULL),
(37, 'Watch 4', 1000, 'Men', 'mens-watch4.jpg', NULL),
(38, 'Rubiks Cube', 500, 'Men', 'Rubiks Cube-500.jpg', NULL),
(39, 'Stoned Jean', 700, 'Men', 'Stoned Jean-700.jpg', NULL),
(40, 'Super Dry', 400, 'Men', 'Super Dry-400.jpg', NULL),
(41, 'Washed Jean', 850, 'Men', 'White Washed Jeans-850.jpg', NULL),
(42, 'White Long Sleeve', 450, 'Men', 'White-long-sleeve-450.jpg', NULL),
(43, 'Black Sexy Dress', 800, 'Women', 'Black Sexy Dress-800.jpg', NULL),
(44, 'Casual Blouse', 600, 'Women', 'Casual Blouse-600.jpg', NULL),
(45, 'Cupcake Shirt', 300, 'Women', 'Cupcake Shirt-300.jpg', NULL),
(46, 'Cute Shirt', 350, 'Women', 'Cute Shirt-350.jpg', NULL),
(47, 'Floral Dress', 600, 'Women', 'Floral Dress-600.jpg', NULL),
(48, 'Gold Casual', 3500, 'Women', 'Gold Casual-3500.jpg', NULL),
(49, 'Pink Blouse', 700, 'Women', 'Hot Pink Office Blouse-700.jpg', NULL),
(50, 'Ladies Watch 1', 1000, 'Women', 'ladies-watch1.jpg', NULL),
(51, 'Ladies Watch 2', 1000, 'Women', 'ladies-watch2.jpg', NULL),
(52, 'Ladies Watch 3', 1000, 'Women', 'ladies-watch3.jpg', NULL),
(53, 'Ladies Watch 4', 1000, 'Women', 'ladies-watch4.jpg', NULL),
(54, 'Maroon Leather Watch', 3000, 'Women', 'Maroon Leather Strap-3000.jpg', NULL),
(55, 'Penguin Shirt', 300, 'Women', 'Penguins Shirt-300.jpg', NULL),
(56, 'Office Blouse', 600, 'Women', 'Pink Office Blouse-600.jpg', NULL),
(57, 'Fitted Shirt', 300, 'Women', 'Plain Fitted Shirt -300.jpg', NULL),
(58, 'Peach Dress', 850, 'Women', 'Pretty in Peach Dress-850.jpg', NULL),
(59, 'Red Riding Hood', 900, 'Women', 'Red Riding Hood Dress-900.jpg', NULL),
(60, 'Silver Watch ', 2500, 'Women', 'Silver Watch-2500.jpg', NULL),
(61, 'White Gold Watch', 4000, 'Women', 'White Gold Watch-4000.jpg', NULL),
(62, 'Winter Blouse', 800, 'Women', 'Winter Blouse-800.jpg', NULL),
(63, 'Blouse 1', 500, 'Women', 'womens-blouse1.jpg', NULL),
(64, 'Blouse 2', 500, 'Women', 'womens-blouse2.jpg', NULL),
(65, 'Blouse 3', 500, 'Women', 'womens-blouse3.jpg', NULL),
(66, 'Blouse 4', 500, 'Women', 'womens-blouse4.jpg', NULL),
(67, 'Dress 1', 1000, 'Women', 'womens-dress1.jpg', NULL),
(68, 'Dress 2', 1000, 'Women', 'womens-dress2.jpg', NULL),
(69, 'Dress 3', 1000, 'Women', 'womens-dress3.jpg', NULL),
(70, 'Dress 4', 1000, 'Women', 'womens-dress4.jpg', NULL),
(71, 'Shirt 1', 300, 'Women', 'womens-shirt1.jpg', NULL),
(72, 'Shirt 2', 300, 'Women', 'womens-shirt2.jpg', NULL),
(73, 'Shirt 3', 300, 'Women', 'womens-shirt3.jpg', NULL),
(74, 'Shirt 4', 300, 'Women', 'womens-shirt4.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `fk_orders` (`productID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `catID` (`catID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `custID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
