-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2015 at 05:08 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pmsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `bra_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(56) NOT NULL,
  `brand_code` varchar(45) NOT NULL,
  `country` varchar(95) NOT NULL,
  PRIMARY KEY (`bra_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`bra_id`, `brand_name`, `brand_code`, `country`) VALUES
(1, 'Apple', 'A101', 'Calefornia'),
(2, 'Samsung', 'S101', 'Korea'),
(3, 'Motorola', 'M101', 'London'),
(4, 'NOKIA', 'N101', 'calefornia');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(56) NOT NULL,
  `category_code` varchar(56) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category_name`, `category_code`) VALUES
(1, 'Electronics AND Gadgets', 'E101'),
(2, 'Clothing', 'C101'),
(3, 'Fashion & Accessories', 'F101'),
(4, 'Leather fashion', 'L101'),
(5, 'Gift & Handicraft', 'G101'),
(6, 'Health And Beauty ', 'H101'),
(7, 'Home & kitchen ', 'hk101'),
(8, 'Sports & Outdoors ', 'S101'),
(9, 'Other categories ', 'O101'),
(10, 'sample', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `confirm-sell`
--

CREATE TABLE IF NOT EXISTS `confirm-sell` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Pro_code` varchar(255) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `selling_price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `messg` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `confirm-sell`
--

INSERT INTO `confirm-sell` (`id`, `Pro_code`, `pro_name`, `selling_price`, `quantity`, `total_amount`, `messg`, `user`) VALUES
(1, '', '', '', '5', '', 'good', 'hasan'),
(2, '', '', '', '5', '', 'good', 'hasan'),
(3, '', '', '', '5', '', 'good', 'hasan'),
(4, '', '', '', '5', '', 'good', 'hasan'),
(5, '', '', '', '5', '', 'good', 'hasan'),
(6, 'Apple 2222', 'Apple  Computer ', '55000 ', '3', '', 'well', 'hasan'),
(7, 'M22211', 'samsungs galaxy s5', '22000 ', '7', '', 'smart', 'hasan'),
(8, 'M22211', 'samsungs galaxy s5', '22000 ', '2', '44000', 'good', 'hasan'),
(9, 'Apple 2222', 'Apple  Computer ', '55000 ', '3', '165000', 'good', 'hasan'),
(10, 'M22211', 'samsungs galaxy s5', '22000 ', '2', '44000', 'good', 'saiful'),
(11, 'Apple 2222', 'Apple  Computer ', '55000 ', '2', '110000', 'well', 'saiful'),
(12, 'jewlry 1000', 'jewelry Box  ', '600 ', '1', '600', 'right', 'saiful');

-- --------------------------------------------------------

--
-- Table structure for table `pms_user`
--

CREATE TABLE IF NOT EXISTS `pms_user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(42) NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(56) NOT NULL,
  `country` varchar(45) NOT NULL,
  `city` varchar(35) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `u_name` varchar(56) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `co_pass` varchar(45) NOT NULL,
  `user_role` varchar(25) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `pms_user`
--

INSERT INTO `pms_user` (`u_id`, `full_name`, `date_of_birth`, `phone`, `email`, `country`, `city`, `gender`, `u_name`, `pass`, `co_pass`, `user_role`) VALUES
(1, '', '0000-00-00', '', '', 'select item', '', 'black', '', '', '', 'black'),
(2, 'atik', '2015-07-24', '01735623513', 'mdatik_feni@yahoo.com', 'Bangladesh', 'dhaka', 'blue', 'atik', '623513', '623513', 'admin'),
(3, 'atik2', '2015-07-13', '01735623513', 'atikhashmee@outlook.com', 'Bangladesh', 'dhaka', 'blue', 'atikwww', '35742fde873c3ea713902235fdc15130', '35742fde873c3ea713902235fdc15130', 'admin'),
(4, 'siyam', '2016-03-18', '01913185300', 'anayetsamim10@gmail.com', 'Bangladesh', 'dhaka', 'blue', 'siyam', 'f3bd7502521e16dbd6ceaac1e2375ed4', 'f3bd7502521e16dbd6ceaac1e2375ed4', 'blue'),
(5, '', '0000-00-00', '', '', 'select item', '', 'male', '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', 'User'),
(6, '', '0000-00-00', '', '', 'select item', '', 'select sex', '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', 'admin'),
(7, '', '0000-00-00', '', '', 'select item', '', 'select sex', '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', 'admin'),
(8, '', '0000-00-00', '', '', 'select item', '', 'select sex', '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', 'role'),
(9, 'siyam', '2015-07-16', '01913185300', 'anayetrony10@gmail.com', 'Bangladesh', 'dhaka', 'male', 'siyams', '61b4a64be663682e8cb037d9719ad8cd', '61b4a64be663682e8cb037d9719ad8cd', 'user'),
(10, 'refat', '2015-07-09', '0171747717', 'atikhashmee@outlook.com', 'Pakistan', '', 'female', 'refats', '61b4a64be663682e8cb037d9719ad8cd', '61b4a64be663682e8cb037d9719ad8cd', 'admin'),
(11, '', '0000-00-00', '', '', 'select item', '', 'select sex', 'atikbinhashmee', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(12, '', '0000-00-00', '', '', 'select item', '', 'select sex', 'hasans', '71b3b26aaa319e0cdf6fdb8429c112b0', '71b3b26aaa319e0cdf6fdb8429c112b0', 'manager'),
(13, 'hasan', '2015-07-09', '01913185300', 'mdatik_feni@yahoo.com', 'Bangladesh', 'dhaka', 'male', 'hasan', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(14, 'siyam', '2015-07-02', '01735623513', 'atikhashmee@outlook.com', 'Bangladesh', 'dhaka', 'male', 'siyam', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(15, '', '0000-00-00', '', '', '', '', '', 'siyam', '123456', '123456', 'admin'),
(17, 'saiful', '2015-09-10', '01735623513', 'saiful@gmail.com', 'Bangladesh', 'dhaka', 'male', 'saiful', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_code` varchar(25) NOT NULL,
  `pro_name` varchar(45) NOT NULL,
  `category` varchar(56) NOT NULL,
  `sub_category` varchar(45) NOT NULL,
  `size` varchar(25) NOT NULL,
  `shipment` varchar(45) NOT NULL,
  `total_cost` varchar(56) NOT NULL,
  `selling_price` varchar(45) NOT NULL,
  `profit_amount` varchar(56) NOT NULL,
  `product_quantity` varchar(25) NOT NULL,
  `supplier` varchar(40) NOT NULL,
  `product_image` varchar(40) NOT NULL,
  `product_details` varchar(150) NOT NULL,
  `m_brand` varchar(45) NOT NULL,
  `date` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_code`, `pro_name`, `category`, `sub_category`, `size`, `shipment`, `total_cost`, `selling_price`, `profit_amount`, `product_quantity`, `supplier`, `product_image`, `product_details`, `m_brand`, `date`, `keywords`) VALUES
(1, 'M22211', 'samsungs galaxy s5', '1 ', '1', '50/60', 'delecious', '20000', '22000', '2000', ' 50 ', 'kamrul sir', 'Samsung-Galaxy-S5-2.jpg', 'This product is very good . it has been brought from Korea', 'Samsung', '2015-08-01', 'Mobile , tablate, samsung '),
(2, 'Apple 2222', 'Apple  Computer ', '1 ', '3', '22/40', 'delecious', '50000', '55000', '5000', ' 10 ', 'kamrul sir', 'Free-Vector-Apple-LCD-Monitor-Screen-jpe', 'apple is just an awesome  product for all', 'Apple', '2015-08-01', 'computer , pc , laptop '),
(3, 'jewlry 1000', 'jewelry Box  ', '3 ', '19', '30/10', 'cooking', '500', '600', '100', ' 40 ', 'kamrul sir', '8857-wooden-jewelry-boxes-uk.jpg', 'this is very good product', 'Apple', '2015-08-01', 'jewelry,box, '),
(4, 'wallet 555', 'wallet', '4 ', '12', '30/10', 'delecious', '800', '1250', '450', ' 50 ', 'kamrul sir', 'wallet.jpeg', 'wallet is most favorite things  ', 'Apple', '2015-08-01', 'wallet, gents, stylish'),
(5, 'ball 3333', 'football ', '8 ', '30', '30 square ', 'delecious', '500', '600', '100', ' 30 ', 'kamrul sir', 'football.jpg', 'playing football is good for health ', 'Apple', '2015-08-01', 'football , ball, skp'),
(6, 'ball444', 'cricket ball', '8 ', '29', '30/10 square ', 'delecious', '600', '700', '100', ' 60 ', 'kamrul sir', '81aPR6knKSL._SL1500_.jpg', 'playing cricket also good for health ', 'Apple', '2015-08-01', 'ball, cricket ball , play '),
(7, 's2222', 'sample p', '1 ', '2', '22', 'delecious', '300', '350', '50', ' 40 ', 'siyam', 'IMG_2261.JPG', 'sdgbsfdhfndghndgh', 'Apple', '2015-09-15', 'ssss sss');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE IF NOT EXISTS `shipment` (
  `ship_id` int(11) NOT NULL AUTO_INCREMENT,
  `shipment_no` varchar(56) NOT NULL,
  `ship_name` varchar(56) NOT NULL,
  `origine` varchar(45) NOT NULL,
  PRIMARY KEY (`ship_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`ship_id`, `shipment_no`, `ship_name`, `origine`) VALUES
(1, 'S101', 'delecious', 'london'),
(2, 'S102', 'cooking', 'America'),
(4, 's10001', 'london', 'air frighrt'),
(5, '132324', 'fffdsgs', 'ggggg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `s_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_cat` varchar(56) NOT NULL,
  `sub_cat_name` varchar(65) NOT NULL,
  `sub_cat_code` varchar(25) NOT NULL,
  PRIMARY KEY (`s_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`s_cat_id`, `main_cat`, `sub_cat_name`, `sub_cat_code`) VALUES
(1, '1', 'Mobile Accessories ', 'M101'),
(2, '1', 'Tablets ', 'T101'),
(3, '1', 'Computer Accessories ', 'C101'),
(4, '1', 'Desktop Pcs ', 'D101'),
(5, '1', 'Laptop ', 'L101'),
(6, '1', 'Modem', 'Modem101'),
(7, '1', 'Mouse', 'Mouse101'),
(8, '1', 'Printer & scanner', 'Printer '),
(9, '2', 'T-shirt', 'T-shirt 101'),
(10, '2', 'Exclusive Tie ', 'Tie101'),
(11, '2', 'Gents Pants ', 'Gents 101'),
(12, '4', 'stylish wallet ', 'wallet 101'),
(13, '4', 'Ladies bag ', 'lbag'),
(14, '4', 'Exclusive Belt ', 'belt101'),
(15, '4', 'Card holder ', 'card 101'),
(16, '3', 'male shoes ', 'shoes '),
(17, '3', 'female shoes ', 'fm shoes '),
(18, '3', 'Earring & ear top', 'top 101'),
(19, '3', 'Gents jewelry  ', 'j101'),
(20, '5', 'Gift Box ', 'box 1100'),
(21, '5', 'Gift Item', 'Item1010'),
(22, '6', 'Body Spray & perfume ', 'Spray 1010 '),
(23, '6', 'Hair care ', 'hair 1010'),
(24, '6', 'Health Products ', 'Health '),
(25, '6', 'skin ', 'skin 101'),
(26, '7', 'Bad Sheets', 'Sheets 1010'),
(27, '7', 'Home Item ', 'home item 101'),
(28, '7', 'kitchen item ', 'kitchen 101 '),
(29, '8', 'Cricket ball', 'ball 101'),
(30, '8', 'Football', 'football'),
(31, '8', 'Sports Equipment ', 'sports 22020'),
(32, '8', 'Sports show', 'sports show 1111'),
(33, '9', 'Multi tool  ', 'tool '),
(34, '9', 'Travel Package ', 'travel 555'),
(35, '9', 'Umbrella ', 'umbrella'),
(36, '10', 'sample', '2222');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
