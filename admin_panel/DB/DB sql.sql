-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 01:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthmarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_email`, `admin_password`) VALUES
('admins1', 'admins1');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(16, 1, '::1', 6, 1),
(17, 2, '::1', 6, 1),
(31, 8, '::1', 8, 1),
(42, 3, '::1', 12, 1),
(122, 3, '::1', 18, 1),
(132, 3, '::1', 11, 1),
(147, 1, '::1', 20, 10),
(167, 1, '::1', 23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`) VALUES
(83, 11, 2, 1, 'CODTID111669558079', 'COD'),
(84, 11, 3, 1, 'CODTID111669558079', 'COD'),
(85, 11, 4, 1, 'CODTID111669558079', 'COD'),
(86, 11, 7, 1, 'CODTID111669558079', 'COD'),
(87, 11, 4, 1, 'CODTID111669560583', 'COD'),
(88, 11, 9, 5, 'CODTID111669560674', 'COD'),
(89, 11, 2, 10, 'CODTID111669560734', 'COD'),
(90, 18, 3, 12, 'CODTID181669560901', 'COD'),
(91, 18, 2, 111, 'CODTID181669563185', 'COD'),
(92, 18, 2, 1, 'CODTID181669572172', 'COD'),
(93, 18, 4, 1, 'CODTID181669572172', 'COD'),
(94, 18, 4, 1000, 'CODTID181669573060', 'COD'),
(95, 18, 3, 1, 'CODTID181669573060', 'COD'),
(96, 18, 2, 1, 'CODTID181669573060', 'COD'),
(97, 11, 3, 1, 'CODTID111669751149', 'COD'),
(98, 11, 4, 1, 'CODTID111669909148', 'COD'),
(99, 11, 1, 1, 'CODTID111669909148', 'COD'),
(100, 11, 2, 1, 'CODTID111669909148', 'COD'),
(101, 11, 3, 1, 'CODTID111669910325', 'COD'),
(102, 11, 1, 1, 'CODTID111669910707', 'COD'),
(103, 11, 2, 1, 'CODTID111669910707', 'COD'),
(104, 19, 1, 1, 'CODTID191670440082', 'COD'),
(105, 19, 2, 1, 'CODTID191670440082', 'COD'),
(106, 19, 8, 100, 'CODTID191670895198', 'COD'),
(107, 19, 9, 1, 'CODTID191670895198', 'COD'),
(108, 19, 6, 1, 'CODTID191670895198', 'COD'),
(109, 20, 3, 1, 'CODTID201671086393', 'COD'),
(110, 20, 2, 1, 'CODTID201671089805', 'COD'),
(111, 19, 2, 1, 'CODTID191672341172', 'COD'),
(112, 19, 3, 1, 'CODTID191672341172', 'COD'),
(113, 21, 5, 10, 'CODTID211677105611', 'COD'),
(114, 21, 2, 1, 'CODTID211677105611', 'COD'),
(115, 22, 2, 1, 'CODTID221679403722', 'COD'),
(116, 22, 2, 10, 'CODTID221679405866', 'COD'),
(117, 22, 4, 1, 'CODTID221679405866', 'COD'),
(118, 22, 6, 1, 'CODTID221679405866', 'COD'),
(119, 22, 2, 1, 'CODTID221681840414', 'COD'),
(120, 22, 2, 1, 'CODTID221682969008', 'COD'),
(121, 22, 2, 1, 'CODTID221682969147', 'COD'),
(122, 23, 1, 1, 'CODTID231684421036', 'COD'),
(123, 22, 20, 1, 'CODTID221684851271', 'COD'),
(124, 22, 7, 1, 'CODTID221684851271', 'COD'),
(125, 22, 20, 1, 'CODTID221684851309', 'COD'),
(126, 22, 7, 2, 'CODTID221684851309', 'COD'),
(127, 22, 3, 1, 'CODTID221684943735', 'COD'),
(128, 22, 3, 10, 'CODTID221685188800', 'COD'),
(129, 22, 2, 5, 'CODTID221685188906', 'COD'),
(130, 22, 5, 1, 'CODTID221685188906', 'COD'),
(131, 22, 2, 1, 'CODTID221685591151', 'COD'),
(132, 22, 1, 1, 'CODTID221685591151', 'COD'),
(133, 22, 2, 1, 'CODTID221686558303', 'COD'),
(134, 22, 20, 1, 'CODTID221686558303', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `category` varchar(25) DEFAULT NULL,
  `product_title` varchar(50) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category`, `product_title`, `product_price`, `product_image`) VALUES
(1, 'Back', 'Back Posture Corrector', 15, '1.png'),
(2, 'Back', 'Adjustable Back Corrector', 25, '(2).png'),
(3, 'Back', 'Neck Stretcher', 20, '3.png'),
(4, 'Back', 'Back Support Belt', 30, '(4).png'),
(5, 'Back', 'Posture Corrector', 10, '(5).png'),
(6, 'Back', 'Orthopedic Back Supporter', 35, '(6).png'),
(7, 'Wrist', 'Wrist Support Pad', 10, '(7).png'),
(8, 'Wrist', 'Sweat-absorbent Mouse Pad', 15, '8.png'),
(9, 'Wrist', 'Keyboard Rest Pad', 25, '9.png'),
(10, 'Wrist', 'Silicone Wrist Pad', 12, '10.png'),
(11, 'Wrist', 'Ergonomic Mouse Pad', 15, '11.png'),
(12, 'Wrist', 'Jelly Bean Wrist Pad', 7, '12.png'),
(13, 'Massager', 'Electric Massage Gun', 80, '13.png'),
(14, 'Massager', 'Foot Massager', 20, '14.png'),
(15, 'Massager', 'Mini Massage Gun', 30, '15.png'),
(16, 'Massager', 'Self-heating Back Massager', 25, '16.png'),
(17, 'Massager', 'Neck Massager', 10, '17.png'),
(18, 'Massager', 'Electric Body Massager', 25, '18.png'),
(19, 'Chair', 'Gils Gaming Chair', 450, '19.png'),
(20, 'Chair', 'Ergonomic Gaming Chair', 400, '20.png'),
(21, 'Chair', 'King Gaming Chair', 600, '21.png'),
(22, 'Chair', 'Pink Girl Computer Chair', 320, '22.png'),
(23, 'Chair', 'Office Chair', 150, '23.png'),
(24, 'Chair', 'Adjustable Gaming Chair', 350, '24.png'),
(25, 'Desk', 'Laptop Desk', 35, '25.png'),
(26, 'Desk', 'Waterproof Laptop Desk', 75, '26.png'),
(27, 'Desk', 'Gaming Computer Desk', 115, '27.png'),
(28, 'Desk', 'Adjustable Laptop Desk', 100, '28.png'),
(29, 'Desk', 'Multifunctional Laptop Desk', 40, '29.png'),
(30, 'Desk', 'Notebook Desk', 99, '30.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_nr` int(8) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `surname`, `email`, `password`, `phone_nr`, `address`) VALUES
(16, 'karlis', 'ozols', 'karilis9@gmail.', 'e10adc3949ba59abbe56e057f20f883e', 25678876, 'Riga, Upes iela - 15'),
(22, 'arturs', 'jefers', 'artursj7777@gmail.com', 'c11dc158ba36e60225cbb4c7e995333d', 12345678, 'Jaunciema 2.l. 211'),
(23, 'arcijs', 'jegers', 'artursj1@gmail.com', '895c6d6cd96308e0480334620716a63a', 27800001, 'jauncss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
