-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2022 at 01:26 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meal_monkey_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `total_price` int(255) NOT NULL,
  `food_name` text NOT NULL,
  `food_img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`id`, `user_id`, `quantity`, `total_price`, `food_name`, `food_img`, `date`) VALUES
(2, 3, 1, 99, 'Supreme Burger', 'Supreme Burger.png', '2022-02-22 17:32:34'),
(3, 3, 1, 199, 'Margerita Pizza', 'Margerita Pizza.png', '2022-02-22 17:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `time`, `status`) VALUES
(1, 'Akshay Kher', 'akshay@gmail.com', 'akshay', '2022-02-20 10:12:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `name`, `img`, `date`, `status`) VALUES
(1, 'Panjabi', 'panjabi.png', '2022-02-20 14:33:52', 1),
(2, 'Pau-Bhaji', 'img.png', '2022-02-20 14:34:22', 1),
(3, 'South', 'bangali.png', '2022-02-20 14:34:42', 1),
(4, 'Dosa', 'dhosa.png', '2022-02-20 14:34:58', 1),
(5, 'Gujarati', 'gujarati.png', '2022-02-20 14:35:28', 1),
(6, 'Rice', 'rice.png', '2022-02-20 14:35:45', 1),
(7, 'Chana', 'recipe.png', '2022-02-20 14:36:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `itemmenu`
--

CREATE TABLE `itemmenu` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `description` text NOT NULL,
  `price` int(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `delivery` text NOT NULL,
  `type` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itemmenu`
--

INSERT INTO `itemmenu` (`id`, `name`, `img`, `description`, `price`, `rating`, `delivery`, `type`, `date`, `status`) VALUES
(1, 'Pasta', 'pasta-1.png', 'Makki di Roti and Sarson da Saag make for the staple food in North India especially in the state of Punjab. This traditional Indian dish may not look very enticing at first, but it has an authentic flavour to it, and it is rich in nutritive value. Accompany it with a glass of lassi and one has the perfect combination for a healthy and fulfilling lunch.', 199, '4.9', 'Paid Delivery', 'Regular', '2022-02-20 16:00:26', 1),
(2, 'Gujarati Dish', 'gujarati.png', 'remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 99, '4.3', 'Paid Delivery', 'Special', '2022-02-20 16:01:57', 1),
(3, 'Palisa', 'palisa-1.png', 'remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including ', 140, '4.8', 'Free Delivery', 'Regular', '2022-02-20 16:02:40', 1),
(4, 'Chaat', 'Chaat.png', 'remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 199, '4.5', 'Paid Delivery', 'Special', '2022-02-20 16:03:20', 1),
(5, 'Biryani', 'Biryani.png', 'remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 49, '3.9', 'Free Delivery', 'Special', '2022-02-20 16:03:54', 1),
(6, 'paneer', 'paneer.png', 'remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 149, '4.3', 'Paid Delivery', 'Special', '2022-02-20 16:04:31', 1),
(7, 'Live Dhokla', 'Live-Dhokla.png', 'remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 120, '3.7', 'Paid Delivery', 'Regular', '2022-02-20 16:05:28', 1),
(8, 'Bhajiya', 'Bhajiya.png', 'remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 99, '4.8', 'Paid Delivery', 'Special', '2022-02-20 16:05:59', 1),
(9, 'Vanela Gathiya', 'Vanela-Gathiya.png', 'remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 149, '4.4', 'Free Delivery', 'Special', '2022-02-20 16:06:41', 1),
(10, 'Kachori', 'Kachori.png', 'remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 49, '4.8', 'Free Delivery', 'Special', '2022-02-20 16:07:27', 1),
(11, 'Sweet', 'Sweet.png', 'remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 299, '4.8', 'Paid Delivery', 'Special', '2022-02-20 16:08:09', 1),
(12, 'Pizza', 'Pizza.png', 'E:Android Clones AssetsFood For ResumeNew folder', 99, '4.9', 'Free Delivery', 'Special', '2022-02-20 16:10:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `name`, `email`, `phone`, `address`, `date`, `status`) VALUES
(1, 'akshaykher', 'akshaykherhere@gmail.com', '1234567890', 'dhasa', '2022-02-22 22:19:24', 1),
(2, 'akshaykher', 'akshaykherhere@gmail.com', '1234567890', 'dhasa', '2022-02-22 22:19:41', 1),
(3, 'akshay kher', 'kherakshay007@gmail.com', '+916356645049', 'rajkotdndnnd', '2022-02-22 23:00:24', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemmenu`
--
ALTER TABLE `itemmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `itemmenu`
--
ALTER TABLE `itemmenu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
