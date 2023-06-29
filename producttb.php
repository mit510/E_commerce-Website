-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 12:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `sub_category` varchar(255) DEFAULT NULL,
  `description` text
) ;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`, `category`, `sub_category`,
`description`) VALUES
(1, 'Nike 100', 5000, 'img\\Shoes_men\\Nike_100.jpg', 'Shoes_men', 'shoes','Mens Nike 100 Manchester United Running Shoes'),
(2, 'Nike 101', 7000, 'img\\Shoes_men\\Nike_101.jpg', 'Shoes_men', 'shoes','Mens Nike 101 Top Speed Extream Running Shoes'),
(3, 'Adidas 100', 4000, 'img\\Shoes_men\\Adidas_100.jpg', 'Shoes_men', 'shoes','Mens Adidas 100 Protonium Light  Running Shoes'),
(4, 'Adidas 101', 8000, 'img\\Shoes_men\\Adidas_101.jpg', 'Shoes_men', 'shoes','Mens Adidas 101 Tread Lite Energic Shoes'),
(5, 'Campus 100', 1000, 'img\\Shoes_men\\Campus_100.jpg', 'Shoes_men', 'shoes','Mens Campus 100 Energy Streak Shoes'),
(6, 'Campus 101', 4000, 'img\\Shoes_men\\Campus_101.jpg', 'Shoes_men', 'shoes','Mens 101 Future Stride Run Shoes'),
(7, 'Puma 100', 3000, 'img\\Shoes_men\\Puma_100.jpg', 'Shoes_men', 'shoes','Mens Puma 100 Speed Walker Shoes'),
(8, 'Puma 101', 6000, 'img\\Shoes_men\\Puma_101.jpg', 'Shoes_men', 'shoes','Mens Puma 101 Wonder Sprint Running Shoes'),
(9, 'Nike 200', 1000, 'img\\Slides_sandals_men\\Nike_200.jpg\r\n', 'Slides_sandals_men', 'Sandals','Mens Nike 200 Unique Sandals'),
(10, 'Nike 201', 2000, 'img\\Slides_sandals_men\\Nike_201.jpg\r\n', 'Slides_sandals_men', 'Sandals','Mens Nike 201 Centrino Sandals'),
(11, 'Adidas 200', 1500, 'img\\Slides_sandals_men\\Adidas_200.jpg\r\n', 'Slides_sandals_men', 'Sandals','Mens Adidas 200 Freshness Sandals'),
(12, 'Adidas 201', 2500, 'img\\Slides_sandals_men\\Adidas_201.jpg\r\n', 'Slides_sandals_men', 'Sandals','Mens Adidas 201 Fisherman Sandals'),
(13, 'Campus 200', 1000, 'img\\Slides_sandals_men\\Campus_200.jpg\r\n', 'Slides_sandals_men', 'Sandals','Mens Campus 200 Sparxy Sandals'),
(14, 'Campus 201', 1200, 'img\\Slides_sandals_men\\Campus_201.jpg\r\n', 'Slides_sandals_men', 'Sandals','Mens Campus 201 Biege Outdoor Sandals'),
(15, 'Puma 200', 3000, 'img\\Slides_sandals_men\\Puma_200.jpg\r\n', 'Slides_sandals_men', 'Sandals','Mens Puma 200 Athletic Track Sandals'),
(16, 'Puma 201', 1200, 'img\\Slides_sandals_men\\Puma_201.jpg\r\n', 'Slides_sandals_men', 'Sandals','Mens Puma 201 Flip Thar Sandals'),
(17, 'Nike-1', 500, 'img\\Clothing_men\\NIke_1.jpg\r\n', 'Clothing_men', 'Clothing','Mens Nike-1 Flip Green T-Shirt Semi-Cotton Flexi Fit n Fine with all Size'),
(18, 'Nike-2', 1000, 'img\\Clothing_men\\NIke_2.jpg\r\n', 'Clothing_men', 'Clothing','Mens Nike-2 Black Hoodie Cotton Flexibe Size with Proteive Cap for ears'),
(19, 'Adidas-1', 699, 'img\\Clothing_men\\Adidas_1.jpg\r\n', 'Clothing_men', 'Clothing','Mens Adidas-1 Flip Black T-Shirt with White Lining Finishement'),
(20, 'Adidas-2', 899, 'img\\Clothing_men\\Adidas_2.jpg\r\n', 'Clothing_men', 'Clothing','Mens Adidas-2 Flip Brown Shades T-Shirt with all Size'),
(21, 'Nike-3', 1999, 'img\\Clothing_men\\NIke_3.jpg\r\n', 'Clothing_men', 'Clothing','Mens Nike-3 Flip Grey Hoodie Semi-Cotton Flexible with all Size'),
(22, 'Nike-4', 2000, 'img\\Clothing_men\\Nike_4.jpg\r\n', 'Clothing_men', 'Clothing','Mens Nike-4 Blue T-Shirt Cotton Flexi Fit with Protective 3 layers'),
(23, 'Puma-1', 400, 'img\\Clothing_men\\Puma_1.jpg\r\n', 'Clothing_men', 'Clothing','Mens Puma-1 Light Blue T-Shirt Mix-Cotton'),
(24, 'Puma-2', 700, 'img\\Clothing_men\\Puma_2.jpg\r\n', 'Clothing_men', 'Clothing','Mens Puma-2 Navy Blue T-Shirt Semi-Cotton Flexible with all Size'),
(25, 'Nike-10', 5000, 'img\\Shoes_women\\Nike_10.jpg', 'Shoes_women', 'shoes','Womens Nike 10 Manchester United Running Shoes'),
(26, 'Nike-11', 7000, 'img\\Shoes_women\\Nike_11.jpg', 'Shoes_women', 'shoes','Womens Nike 11 Top Speed Extream Running Shoes'),
(27, 'Adidas-10', 4000, 'img\\Shoes_women\\Adidas_10.jpg', 'Shoes_women', 'shoes','Womens Adidas 10 Protonium Light Running Shoes'),
(28, 'Adidas-11', 8000, 'img\\Shoes_women\\Adidas_11.jpg', 'Shoes_women', 'shoes','Womens Adidas 11 Tread Lite Energic Shoes'),
(29, 'Campus-10', 1000, 'img\\Shoes_women\\Campus_10.jpg', 'Shoes_women', 'shoes','Womens Campus 10 Energy Streak Shoes'),
(30, 'Campus-11', 4000, 'img\\Shoes_women\\Campus_11.jpg', 'Shoes_women', 'shoes','Womens Campus 11 Future Stride Run Shoes'),
(31, 'Puma-10', 3000, 'img\\Shoes_women\\Puma_10.jpg', 'Shoes_women', 'shoes','Womens Puma 10 Speed Walker Shoes'),
(32, 'Puma-11', 6000, 'img\\Shoes_women\\Puma_11.jpg', 'Shoes_women', 'shoes','Womens Puma 11 Wonder Sprint Running Shoes'),
(33, 'Nike-111', 1000, 'img\\Slides_women\\Nike_111.jpg\r\n', 'Slides_women', 'Sandals','Womens Nike 111 Unique Sandals'),
(34, 'Nike-211', 2000, 'img\\Slides_women\\Nike_211.jpg\r\n', 'Slides_women', 'Sandals','Womens Nike 211 Centrino Sandals'),
(35, 'Adidas-111', 1500, 'img\\Slides_women\\Adidas_111.jpg\r\n', 'Slides_women', 'Sandals','Womens Adidas 111 Freshness Sandals'),
(36, 'Adidas-211', 2500, 'img\\Slides_women\\Adidas_211.jpg\r\n', 'Slides_women', 'Sandals','Womens Adidas 211 Fisherman Sandals'),
(37, 'Campus-111', 1000, 'img\\Slides_women\\Adidas_211.jpg', 'Slides_women', 'Sandal','Womens Campus 111 Sparxy Sandals'),
(38, 'Campus-211', 1200, 'img\\Slides_women\\Campus_211.jpg', 'Slides_women', 'Sandals','Womens Campus 211 Biege Outdoor Sandals'),
(39, 'Puma-111', 3000, 'img\\Slides_women\\Puma_111.jpg', 'Slides_women', 'Sandals','Womens Puma 111 Athletic Track Sandals'),
(40, 'Puma-211', 1200, 'img\\Slides_women\\Puma_211.jpg', 'Slides_women', 'Sandals','Womens Puma 211 Flip Thar Sandals'),
(41, 'Nike-12', 500, 'img\\Clothing_women\\Nike_12.jpg\r\n', 'Clothing_women', 'Clothing','Womens Nike-12 Flip Black T-Shirt n Trouser Pair Cotton Flexi Fit n Fine with all Size'),
(42, 'Nike-22', 1000, 'img\\Clothing_women\\Nike_22.jpg\r\n', 'Clothing_women', 'Clothing','Womens Nike-22 Black Hoodie Cotton Flexibe Size with Proteive Cap for ears'),
(43, 'Adidas-12', 699, 'img\\Clothing_women\\Adidas_12.jpg\r\n', 'Clothing_women', 'Clothing','Womens Adidas-12 Flip Black Hoodie with White Lining Finishement'),
(44, 'Adidas-22', 899, 'img\\Clothing_women\\Adidas_22.jpg\r\n', 'Clothing_women', 'Clothing','Womens Adidas-22 Flip White Shades T-Shirt with all Size'),
(45, 'Nike-17', 1999, 'img\\Clothing_women\\Nike_17.jpg\r\n', 'Clothing_women', 'Clothing','Womens Nike-17 Flip Grey Hoodie Semi-Cotton Flexible with all Size'),
(46, 'Nike-18', 2000, 'img\\Clothing_women\\Nike_18.jpg\r\n', 'Clothing_women', 'Clothing','Womens Nike-18 Blue Pink Cotton Hoodie Flexi Fit with Protective 3 layers'),
(47, 'Puma-12', 400, 'img\\Clothing_women\\Puma_12.jpg\r\n', 'Clothing_women', 'Clothing','Womens Puma-12 Black T-Shirt Mix-Cotton'),
(48, 'Puma-22', 700, 'img\\Clothing_women\\Puma_22.jpg\r\n', 'Clothing_women', 'Clothing','Womens Puma-22 Gaze Blue T-Shirt Semi-Cotton Flexible with all Size'),
(49, 'Nike-13', 1200, 'img\\shoes_kids\\Nike_13.jpg', 'shoes_kids', 'shoes','Kids Nike 13 Manchester United Running Shoes'),
(50, 'Nike-23', 1500, 'img\\shoes_kids\\Nike_23.jpg', 'shoes_kids', 'shoes','Kids Nike 23 Top Speed Extream Running Shoes'),
(51, 'Adidas-13', 2000, 'img\\shoes_kids\\Adidas_13.jpg', 'shoes_kids', 'shoes','Kids Adidas 13 Protonium Light Running Shoes'),
(52, 'Adidas-23', 2500, 'img\\shoes_kids\\Adidas_23.jpg', 'shoes_kids', 'shoes','Kids Adidas 23 Tread Lite Energic Shoes'),
(53, 'Campus-13', 1000, 'img\\shoes_kids\\Campus_13.jpg', 'shoes_kids', 'shoes','Kids Campus 13 Energy Streak Shoes'),
(54, 'Campus-23', 2300, 'img\\shoes_kids\\Campus_23.jpg', 'shoes_kids', 'shoes','Kids Campus 23 Future Stride Run Shoes'),
(55, 'Puma-13', 2400, 'img\\shoes_kids\\Puma_13.jpg', 'shoes_kids', 'shoes','Kids Puma 13 Speed Walker Shoes'),
(56, 'Puma-23', 1200, 'img\\shoes_kids\\Puma_23.jpg', 'shoes_kids', 'Clothing','Kids Puma 23 Wonder Sprint Running Shoes'),
(57, 'Nike-14', 300, 'img\\Clothing_kids\\Nike_14.jpg\r\n', 'Clothing_kids', 'Clothing','Kids Nike-14 Flip Purple T-Shirt Semi-Cotton Flexi Fit n Fine with all Size'),
(58, 'Nike-24', 250, 'img\\Clothing_kids\\Nike_24.jpg\r\n', 'Clothing_kids', 'Clothing','Kids Nike-24 Black Shorts Cotton Flexibe Size with Proteive Cap for ears'),
(59, 'Adidas-14', 300, 'img\\Clothing_kids\\Adidas_14.jpg\r\n', 'Clothing_kids', 'Clothing','Kids Adidas-14 Flip Blue Pair Hoodie with Trouser with White Lining Finishement'),
(60, 'Adidas-24', 400, 'img\\Clothing_kids\\Adidas_24.jpg\r\n', 'Clothing_kids', 'Clothing','Kids Adidas-24 Flip Black Shades T-Shirt with all Size'),
(61, 'Adidas-15', 265, 'img\\Clothing_kids\\Adidas_15.jpg\r\n', 'Clothing_kids', 'Clothing','Kids Adidas-15 Blue T-Shirt and Shorts Pair Cotton Flexi Fit'),
(62, 'Adidas-34', 450, 'img\\Clothing_kids\\Adidas_34.jpg\r\n', 'Clothing_kids', 'Clothing','Kids Adidas-34 Grey Pair Hoodie and Trouser Cotton with 3 layer Protection'),
(63, 'Puma-14', 330, 'img\\Clothing_kids\\Puma_14.jpg\r\n', 'Clothing_kids', 'Clothing','Kids Puma-14 Black Pair Hoodie and Trouser Cotton with 3 layer Protection'),
(64, 'Puma-24', 345, 'img\\Clothing_kids\\Puma_24.jpg\r\n', 'Clothing_kids', 'Clothing','Kids Puma-24 Red T-Shirt and Shorts Pair Cotton Flexi Fit'),
(65, 'Nike-a', 3000, 'img\\sports\\Nike-a.jpg', 'sport', 'sport','Nike a type Yellow Football Lightweigth with 6 months Warranty'),
(66, 'Nike-b', 2500, 'img\\sports\\Nike-b.jpg', 'sport', 'sport','Nike b type Red Basketball with 12 months Warranty'),
(67, 'Nike-c', 3000, 'img\\sports\\Nike-c.jpg', 'sport', 'sport','Nike c type Black Playing ball for Kids with 12 months Warranty'),
(68, 'Nike-d', 4000, 'img\\sports\\Nike-d.jpg', 'sport', 'sport','Nike d type Black Knee pads with 12 months Warranty'),
(69, 'Nike-e', 2650, 'img\\sports\\Nike-e.jpg', 'sport', 'sport','Nike e type Hand Glows with 8 months Warranty'),
(70, 'Nike-f', 4500, 'img\\sports\\Nike-f.jpg', 'sport', 'sport','Nike f type All field Han Ball with 12 months Warranty'),
(71, 'Nike-g', 3300, 'img\\sports\\Nike-g.jpg', 'sport', 'sport','Nike g type Black-Yellow CR7 Football with 18 months Warranty'),
(72, 'Nike-h', 3450, 'img\\sports\\Nike-h.jpg', 'sport', 'sport','Nike h type Black Baseball Bat with 12 months Warranty'),
(73, 'Nike-i', 5000, 'img\\sports\\Nike-i.jpg', 'sport', 'sport','Nike i type Black Jumping Rod Wire with 6 months Warranty'),
(74, 'Nike-j', 3000, 'img\\sports\\Nike-j.jpg', 'sport', 'sport','Nike j type Green Football with 14 months Warranty'),
(75, 'Nike-k', 2500, 'img\\sports\\Nike-k.jpg', 'sport', 'sport','Nike k type Grey Football with 12 months Warranty'),
(76, 'Nike-l', 3000, 'img\\sports\\Nike-l.jpg', 'sport', 'sport','Nike l type White Wrist Caps with 18 months Warranty'),
(77, 'Ae_1', 3000, 'img\\ATHLEISURE_ESSENTILS\\ae_1.jpg\r\n', 'ATHLEISURE_ESSENTILS', 'shoes','Mens AE 1 White Manchester United Running Shoes'),
(78, 'Ae_2', 2500, 'img\\ATHLEISURE_ESSENTILS\\ae_2.jpg', 'ATHLEISURE_ESSENTILS', 'shoes','Mens AE 2 Black Top Speed Extream Running Shoes'),
(79, 'Ae_3', 3000, 'img\\ATHLEISURE_ESSENTILS\\ae_3.jpg', 'ATHLEISURE_ESSENTILS', 'shoes','Mens AE 3 White Protonium Light  Running Shoes'),
(80, 'Ae_4', 4000, 'img\\ATHLEISURE_ESSENTILS\\ae_4.jpg', 'ATHLEISURE_ESSENTILS', 'shoes','Mens AE 4 Bule Tread Lite Energic Shoes'),
(81, 'Ae_5', 2650, 'img\\ATHLEISURE_ESSENTILS\\ae_5.jpg', 'ATHLEISURE_ESSENTILS', 'shoes','Mens AE 5 Green Energy Streak Shoes'),
(82, 'Ae_6', 4500, 'img\\ATHLEISURE_ESSENTILS\\ae_6.jpg', 'ATHLEISURE_ESSENTILS', 'shoes','Mens AE 6 White Future Stride Run Shoes'),
(83, 'Ae_7', 3300, 'img\\ATHLEISURE_ESSENTILS\\ae_7.jpg', 'ATHLEISURE_ESSENTILS', 'shoes','Mens AE 7 White Speed Walker Shoes'),
(84, 'Ae_8', 3450, 'img\\ATHLEISURE_ESSENTILS\\ae_8.jpg', 'ATHLEISURE_ESSENTILS', 'shoes','Mens AE 8 Dark Blue Wonder Sprint Running Shoes'),
(85, 'Mh_1', 3000, 'img\\MONEY_HEIST\\mh_1.jpg', 'MONEY_HEIST', 'shoes','Mens Reebok MH 1 Grey Series Manchester United Running Shoes'),
(86, 'Mh_2', 2500, 'img\\MONEY_HEIST\\mh_2.jpg', 'MONEY_HEIST', 'shoes','Mens Reebok MH 2 Red Series Top Speed Extream Running Shoes'),
(87, 'Mh_3', 3000, 'img\\MONEY_HEIST\\mh_3.jpg', 'MONEY_HEIST', 'shoes','Mens Reebok MH 3 Black-Red Series Protonium Light  Running Shoes'),
(88, 'Mh_4', 4000, 'img\\MONEY_HEIST\\mh_4.jpg', 'MONEY_HEIST', 'shoes','Mens Reebok MH 4 Liht Red Tread Lite Energic Shoes'),
(89, 'Mh_5', 2650, 'img\\MONEY_HEIST\\mh_5.jpg', 'MONEY_HEIST', 'shoes','Mens Reebok MH 5 Off White Energy Streak Shoes'),
(90, 'Mh_6', 4500, 'img\\MONEY_HEIST\\mh_6.jpg', 'MONEY_HEIST', 'shoes','Mens Reebok MH 6 Off White Future Stride Run Shoes'),
(91, 'Mh_7', 3300, 'img\\MONEY_HEIST\\mh_7.jpg', 'MONEY_HEIST', 'shoes','Mens Reebok MH 7 Bright Red Series Speed Walker Shoes'),
(92, 'Mh_8', 3450, 'img\\MONEY_HEIST\\mh_8.jpg', 'MONEY_HEIST', 'shoes','Mens Reebok MH 8 Lavish Grey Wonder Sprint Running Shoes'),
(93, 'Rg_1', 3000, 'img\\RUNNING_GEAR\\rg_1.jpg', 'RUNNING_GEAR', 'shoes','Mens RG 1 Grey Manchester United Running Shoes'),
(94, 'Rg_2', 2500, 'img\\RUNNING_GEAR\\rg_2.jpg', 'RUNNING_GEAR', 'shoes','Mens RG 2 Black-Grey Top Speed Extream Running Shoes'),
(95, 'Rg_3', 3000, 'img\\RUNNING_GEAR\\rg_3.jpg', 'RUNNING_GEAR', 'Clothing','Mens RG 3 Black Trouser Semi-Cotton Flexi Fit n Fine'),
(96, 'Rg_4', 4000, 'img\\RUNNING_GEAR\\rg_4.jpg', 'RUNNING_GEAR', 'Clothing','Mens RG 4 Flip White T-Shirt with White Lining Finishement'),
(97, 'Rg_5', 2650, 'img\\RUNNING_GEAR\\rg_5.jpg', 'RUNNING_GEAR', 'shoes','Mens RG 5 Army Patch Manchester United Running Shoes'),
(98, 'Rg_6', 4500, 'img\\RUNNING_GEAR\\rg_6.jpg', 'RUNNING_GEAR', 'shoes','Mens RG 6 Lightess Blue Top Speed Extream Running Shoes'),
(99, 'Rg_7', 3300, 'img\\RUNNING_GEAR\\rg_7.jpg', 'RUNNING_GEAR', 'shoes','Mens RG 7 Grey Blue Protonium Light  Running Shoes'),
(100, 'Rg_8', 3450, 'img\\RUNNING_GEAR\\rg_8.jpg', 'RUNNING_GEAR', 'shoes','Mens RG 8 Grey Tread Lite Energic Shoes'),
(101, 'Rebok_a', 3000, 'img\\TRAINING_ESSENTILS\\rebok_a.jpg', 'TRAINING_ESSENTILS', 'Clothing','Mens Rebok a type Flip Blue T-Shirt Semi-Cotton Flexi Fit n Fine with all Size'),
(102, 'Rebok_b', 2500, 'img\\TRAINING_ESSENTILS\\rebok_b.jpg', 'TRAINING_ESSENTILS', 'Clothing','Mens Rebok b typeFlip White T-Shirt with White Lining Finishement'),
(103, 'Rebok_c', 3000, 'img\\TRAINING_ESSENTILS\\rebok_c.jpg', 'TRAINING_ESSENTILS', 'Clothing','Mens Rebok c type Flip White Shades T-Shirt with all Size'),
(104, 'Rebok_d', 4000, 'img\\TRAINING_ESSENTILS\\rebok_d.jpg', 'TRAINING_ESSENTILS', 'Clothing','Mens Rebok d type Black Trouser Mix-Cotton'),
(105, 'Rebok_e', 2650, 'img\\TRAINING_ESSENTILS\\rebok_e.jpg', 'TRAINING_ESSENTILS', 'Clothing','Mens Rebok e type Grey Trouser Semi-Cotton Flexible with all Size'),
(106, 'Rebok_f', 4500, 'img\\TRAINING_ESSENTILS\\rebok_f.jpg', 'TRAINING_ESSENTILS', 'Clothing','Mens Rebok f type Flip Blue Trouser Semi-Cotton Flexible with all Size'),
(107, 'Rebok_g', 3300, 'img\\TRAINING_ESSENTILS\\rebok_g.jpg', 'TRAINING_ESSENTILS', 'sport','Rebok g type Blue Gym Bag with 8 Kg Pay Load'),
(108, 'Rebok_h', 3450, 'img\\TRAINING_ESSENTILS\\rebok_h.jpg', 'TRAINING_ESSENTILS', 'sport','Rebok h type Black Gym Bag with 8 Kg Pay Load');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
