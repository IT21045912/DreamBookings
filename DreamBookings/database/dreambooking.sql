-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 12:31 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreambooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(6) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `email`, `password`, `confirm_password`, `phone`) VALUES
(1, 'admin', 'sankalpa@admin.com', 'admin', 'admin', '0761849764');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `user_id` int(6) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `adults` int(10) NOT NULL,
  `children` int(10) NOT NULL,
  `request` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`user_id`, `fname`, `lname`, `email`, `contact`, `adults`, `children`, `request`) VALUES
(1, 'lname', 'dasdas', 'poornima.madubashini@yahoo.com', '0761849764', 2, 3, 'sdcasd'),
(2, 'lname', 'dasdas', 'poornima.madubashini@yahoo.com', '0761849764', 2, 1, ''),
(3, '', '', '', '', 0, 0, ''),
(4, '', '', '', '', 0, 0, ''),
(5, 'Deshan', 'Pasindu', 'pasindu1@gmail.com', '08291919', 1, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `carddetails`
--

CREATE TABLE `carddetails` (
  `user_id` int(6) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `card_num` int(15) NOT NULL,
  `card_exp_mon` int(10) NOT NULL,
  `card_exp_year` int(10) NOT NULL,
  `card_cvv` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carddetails`
--

INSERT INTO `carddetails` (`user_id`, `card_name`, `card_num`, `card_exp_mon`, `card_exp_year`, `card_cvv`) VALUES
(1, 'ksfaffas', 2147483647, 0, 2021, 789),
(2, 'ksfaffas', 2147483647, 0, 1234, 334),
(3, '', 0, 0, 0, 0),
(4, '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confirm_password` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`, `username`, `email`, `password`, `confirm_password`, `phone`) VALUES
(6, 'admin', 'admin@gmail.com', 'admin', 'admin', '092192932'),
(8, 'Hiruni', 'hiruni@gmail.com', 'Hiruni123@', 'Hiruni123@', '0723311223'),
(9, 'Deshan', 'Deshan@gmail.com', 'Deshan123@', 'Deshan123@', '0723311213'),
(10, 'Priyanwada', 'priyanwada@gmail.com', 'Priya123@', 'Priya123@', '0723311293'),
(11, 'chandula', 'chandula@gmail.com', 'Chandula123@', 'Chandula123@', '0723312293');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotel_id` int(6) NOT NULL,
  `owner_id` int(6) NOT NULL,
  `hotel_name` varchar(200) NOT NULL,
  `hotel_contact` varchar(14) NOT NULL,
  `hotel_address` varchar(1000) NOT NULL,
  `hotel_website` varchar(1000) NOT NULL,
  `hotel_desc` varchar(5000) NOT NULL,
  `hotel_price` int(100) NOT NULL,
  `hotel_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `owner_id`, `hotel_name`, `hotel_contact`, `hotel_address`, `hotel_website`, `hotel_desc`, `hotel_price`, `hotel_type`) VALUES
(7, 1, 'Cinnamon Grand Colombo', '0112437437', ' 77 Galle Rd, Colombo.', 'https://www.cinnamonhotels.com/cinnamongrandcolombo', 'Set 1 km from both the Slave Island Railway Station and Galle Face Green, a seaside urban park, this grand resort hotel is also 2 km from Gangaramaya Buddhist Temple.', 25000, 'Hotel'),
(8, 2, 'Galadari Hotel', '0112544544', '64 Lotus Rd, Colombo 00100', 'http://www.galadarihotel.lk', 'Overlooking the Laccadive Sea, this upscale hotel is a 15-minute walk from Galle Face Green park, 3 km from Gangaramaya Buddhist Temple and 11 km from the National Zoological Gardens of Sri Lanka. ', 30000, 'Hotel'),
(9, 5, 'Jetwing St. Andrews', '0112711711', '100 Hotel Rd, Dehiwala-Mount Lavinia', 'https://www.jetwinghotels.com/jetwingstandrews', 'Standing out amidst the inspiring scenic beauty of mist shrouded mountains and lush greenery, Jetwing St. Andrew’s enjoys a captivating locale in Sri Lanka’s hill capital Nuwara Eliya. ', 30000, 'Villa'),
(10, 6, 'Panorama Hotel', '0342236697', '47/20A, Kospanawatta Road, Wadduwa', 'https://www.panoramahotelkalutara.com', 'We are tourist board approved Hotel which offers standard accommodation for families, travel groups, honeymoon couples and anyone who expect superb service, elegant style, clean and fully facilitated rooms.', 10000, 'Restaurant'),
(11, 8, 'Queens Hotel', '0812233026', 'DS Senanayake Veediya, Kandy', 'http://www.queenshotel.lk/', 'One of Sri Lanka’s iconic historic hotels, Queen’s Hotel, situated in the heart of Kandy, faces the beautiful splendid surroundings alongside.', 50000, 'Hotel');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `offer_id` int(6) NOT NULL,
  `offer_name` varchar(500) NOT NULL,
  `offer_price` int(200) NOT NULL,
  `offer_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offer_id`, `offer_name`, `offer_price`, `offer_date`) VALUES
(2, 'Beach Side Hotel Offers', 50, '2021-10-05'),
(4, 'Yala Safari Offer', 25, '2021-10-30'),
(5, 'Offer For Every Hotel (Children)', 25, '2021-10-29'),
(6, 'Offer For Local Travelers', 15, '2021-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(6) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `username`, `email`, `password`, `confirm_password`, `phone`) VALUES
(7, 'seller', 'Seller@gmail.com', 'seller', 'seller', '0988289012');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `tour_id` int(6) DEFAULT NULL,
  `owner_id` int(6) NOT NULL,
  `tour_name` varchar(500) NOT NULL,
  `tour_contact` varchar(15) NOT NULL,
  `tour_address` varchar(1000) NOT NULL,
  `tour_website` varchar(1000) NOT NULL,
  `tour_desc` varchar(5000) NOT NULL,
  `tour_price` int(100) NOT NULL,
  `tour_type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`tour_id`, `owner_id`, `tour_name`, `tour_contact`, `tour_address`, `tour_website`, `tour_desc`, `tour_price`, `tour_type`) VALUES
(NULL, 1, 'Yala Safari', '0112239192', 'No.09,Yala , Katharagama', 'www.yalasafari.lk', 'Yala National Park is the most visited and second largest national park in Sri Lanka, bordering the Indian Ocean.', 25000, 'Safari'),
(NULL, 3, 'Trincomalee Boat Ride', '0241214515', 'No.09,Trincomalee ', 'www.trincomalee.com', 'Trincomalee also known as Gokanna/Gokarna, is the administrative headquarters of the Trincomalee District and major resort port city of Eastern Province, Sri Lanka. ', 15000, 'Safari'),
(NULL, 5, 'Kithulgala Water Rafting', '03422112283', 'No.213 , Kithulgala , Rathnapura', 'www.kithulgala.lk', 'Kitulgala is a small town in the west of Sri Lanka. The Academy Award-winning The Bridge on the River Kwai was filmed on the Kelani River near Kitulgala, although nothing remains ', 45000, 'Boat'),
(NULL, 8, 'Beruwala Paramotering', '0345230199', 'No.08,Moragalla,Beruwala', 'avantleisure.lk/', 'Avant Leisure Adventure Sports provide the best quality equipment with the most experienced pilots in field of paramotoring in Sri Lanka to ensure safety of our customers.', 35000, 'Paramotering'),
(NULL, 9, 'Udawalawa Safari', '0112239199', 'No.08,Udawalawa ', 'udawalawesafari.com', 'Yala National Park is the most visited and second largest national park in Sri Lanka', 25000, 'Safari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `carddetails`
--
ALTER TABLE `carddetails`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`owner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `carddetails`
--
ALTER TABLE `carddetails`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotel_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `offer_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
