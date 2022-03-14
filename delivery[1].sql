-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2004 at 07:20 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`username`, `password`, `email`, `contact`) VALUES
('admin', 'test123', 'admin@gmail.com', '9844709890');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `nam` varchar(40) DEFAULT NULL,
  `surname` varchar(40) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `ward` int(40) DEFAULT NULL,
  `street` varchar(40) DEFAULT NULL,
  `telephone` varchar(40) DEFAULT NULL,
  `item_name` varchar(40) DEFAULT NULL,
  `item_type` varchar(40) DEFAULT NULL,
  `quantity` varchar(40) DEFAULT NULL,
  `bill_amount` varchar(40) DEFAULT NULL,
  `payment` varchar(40) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`nam`, `surname`, `city`, `ward`, `street`, `telephone`, `item_name`, `item_type`, `quantity`, `bill_amount`, `payment`, `userid`, `status`) VALUES
('test', 'case', 'Lalitpur', 11, 'jsdghjdgsjd', '9867122647', 'waterjar', 'waterjar', '6', ' 350', 'esewa', 3, 'delivered'),
('test', 'case', 'Lalitpur', 11, 'jsdghjdgsjd', '9867122647', 'lpgas', 'baba', '8', ' 11650', 'esewa', 3, 'delivered'),
('test', 'case', 'Lalitpur', 11, 'jsdghjdgsjd', '9867122647', 'lpgas', 'baba', '15', ' 21800', 'cash', 3, 'delivered'),
('test', 'case', 'Lalitpur', 11, 'jsdghjdgsjd', '9867122647', 'waterjar', 'waterjar', '10', ' 550', 'cash', 3, 'delivered'),
('test', 'case', 'Lalitpur', 11, 'jsdghjdgsjd', '9867122647', 'lpgas', 'everest', '5', ' 7300', 'cash', 3, 'delivered'),
('test', 'case', 'Lalitpur', 11, 'jsdghjdgsjd', '9867122647', 'waterjar', 'waterjar', '4', ' 250', 'cash', 3, 'delivered'),
('test', 'case', 'Lalitpur', 11, 'jsdghjdgsjd', '9867122647', 'lpgas', 'trishul', '3', ' 4400', 'cash', 3, 'delivered'),
('test', 'case', 'Lalitpur', 11, 'jsdghjdgsjd', '9867122647', 'waterjar', 'waterjar', '6', ' 350', 'cash', 3, 'delivered'),
('test', 'case', 'Lalitpur', 11, 'jsdghjdgsjd', '9867122647', 'lpgas', 'everest', '5', ' 7300', 'esewa', 3, 'delivered'),
('test', 'case', 'Lalitpur', 11, 'jsdghjdgsjd', '9867122647', 'lpgas', 'everest', '4', ' 5850', 'esewa', 3, 'delivered'),
('test', 'case', 'Lalitpur', 11, 'jsdghjdgsjd', '9867122647', 'lpgas', 'nepalgas', '6', ' 8750', 'cash', 3, 'delivered'),
('test', 'case', 'Lalitpur', 11, 'jsdghjdgsjd', '9867122647', 'waterjar', 'waterjar', '6', ' 350', 'esewa', 3, 'delivered'),
('test', 'case', 'Lalitpur', 11, 'jsdghjdgsjd', '9867122647', 'lpgas', 'everest', '5', ' 7300', 'cash', 3, 'delivered'),
('test', 'case', 'Lalitpur', 11, 'jsdghjdgsjd', '9867122647', 'lpgas', 'everest', '5', ' 7300', 'esewa', 3, NULL),
('test', 'case', 'Lalitpur', 11, 'jsdghjdgsjd', '9867122647', 'waterjar', 'waterjar', '2', ' 150', 'cash', 3, NULL),
('test', 'case', 'Lalitpur', 11, 'jsdghjdgsjd', '9867122647', 'lpgas', 'everest', '8', ' 11650', 'esewa', 3, NULL),
('test', 'case', 'Lalitpur', 11, 'jsdghjdgsjd', '9867122647', 'lpgas', 'everest', '4', ' 5850', 'esewa', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `signups`
--

CREATE TABLE `signups` (
  `email` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userorder`
--

CREATE TABLE `userorder` (
  `userid` int(11) NOT NULL,
  `nam` varchar(40) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `ward` varchar(40) DEFAULT NULL,
  `street` varchar(80) DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `item_name` varchar(40) DEFAULT NULL,
  `item_type` varchar(40) DEFAULT NULL,
  `quantity` varchar(40) DEFAULT NULL,
  `bill_amount` varchar(50) DEFAULT NULL,
  `payment` varchar(40) DEFAULT NULL,
  `order_clear` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `Firstname` varchar(100) DEFAULT NULL,
  `Lastname` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `Ward_no` int(50) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `contact_no` varchar(15) DEFAULT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`Firstname`, `Lastname`, `city`, `Ward_no`, `street`, `contact_no`, `Username`, `Password`, `user_id`) VALUES
('test', 'case', 'Lalitpur', 11, 'jsdghjdgsjd', '9867122647', 'testcases', 'testcase@12', 3),
('new', 'user', 'Lalitpur', 2, 'greezlepath', '9841134081', 'newuser3', 'newuser@12', 8),
('Shushil ', 'rana', 'Lalitpur', 12, 'shanti marga', '9867122647', 'shushil12', 'shushil@12', 9),
('Shushil ', 'rana', 'Lalitpur', 12, 'shanti marga', '9867122647', 'shushil1', 'shushil@12', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userorder`
--
ALTER TABLE `userorder`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
