-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 08:06 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `guests` varchar(255) NOT NULL,
  `f_time` varchar(255) NOT NULL,
  `hall_id` int(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `randId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`id`, `name`, `cnic`, `contact`, `city`, `address`, `type`, `email`, `guests`, `f_time`, `hall_id`, `start_date`, `end_date`, `randId`) VALUES
(39, 'asda', '3242423', '03034333338', '', '', '', 'admin@gmail.com', '', '', 78, '2022-01-06', '2022-01-28', '61e0893d13'),
(41, 'ali', '36104', '03030000000', '', '', '', 'admin@gmail.com', '', '', 78, '2022-01-17', '2022-01-22', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `number` int(13) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `number`, `message`) VALUES
(5, 'muhammad salman shah', 'admin@gmail.com', 'sfsf', 34242, 'qqwdf  feassef as faf '),
(8, 'muhammad salman shah', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `id` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `pic1` varchar(255) NOT NULL,
  `pic2` varchar(255) NOT NULL,
  `pic3` varchar(255) NOT NULL,
  `pic4` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `capacity` int(5) NOT NULL,
  `services` varchar(500) NOT NULL,
  `level` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `duration` varchar(500) NOT NULL,
  `address` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `randId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`id`, `question`, `answer`, `pic1`, `pic2`, `pic3`, `pic4`, `price`, `capacity`, `services`, `level`, `email`, `duration`, `address`, `start_date`, `end_date`, `status`, `title`, `description`, `contact`, `city`, `randId`) VALUES
(78, '', '', '5520421.jpg', '8020022.jpg', '8466123.jpg', '3501013.jpg', '900', 400, 'WIFI<br> Music System<br>Decoration<br> Lights<br>Catering', 'Standard', 'luxe@gmail.com', 'Day', '51-E-2 Ex Park View-Phase 8 DHA', '2022-01-15', '2022-01-16', '', 'LUXE MARQUEE', 'Searching for a grand marquee to go with those grand wedding plans? Then look no further than Luxe Marquee. Situated in the calm surrounding of DHA Phase 8, Luxe Marquee affords luxury at an affordable price. Luxe Marquee’s vast parking space of over 200 cars is the perfect prelude for your guests to an enjoyable and easy-going wedding function. As far as location is concerned, Luxe Marquee ticks all the right boxes, too – DHA, Ring Road and the Lahore Airport. All of this comes at an easy on the pocket per head rate starting from Rs. 1200 per head.', '03111227007', 'Lahore', '61e0893d13'),
(79, '', '', '7964612.jpg', '1355712.jpg', '5532212.jpg', '5173812.jpg', '5000', 500, 'Decoration<br> Lights<br>Dj<br>AirCondition<br> Projector', 'Basic', 'admin@gmail.com', 'daily', 'New multan bypass ....', '', '', 'available', 'ali', 'Since 2000', '03034333338', 'Darya Khan', '61e3f10161');

-- --------------------------------------------------------

--
-- Table structure for table `sigunup_provider`
--

CREATE TABLE `sigunup_provider` (
  `randId` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` int(13) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sigunup_provider`
--

INSERT INTO `sigunup_provider` (`randId`, `name`, `email`, `phone_number`, `adress`, `password`) VALUES
('61e0893d13', 'Admin', 'admin@gmail.com', 308724018, 'New multan bypass ....', '123123'),
('61e3f447d6', 'ali', 'ali@gmail.com', 2147483647, 'sds', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sigunup_provider`
--
ALTER TABLE `sigunup_provider`
  ADD PRIMARY KEY (`randId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
