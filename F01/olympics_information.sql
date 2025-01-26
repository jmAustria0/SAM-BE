-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2025 at 03:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olympics`
--

-- --------------------------------------------------------

--
-- Table structure for table `olympics_information`
--

CREATE TABLE `olympics_information` (
  `id` int(100) NOT NULL,
  `name` varchar(300) NOT NULL,
  `details` varchar(300) NOT NULL,
  `image_path` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `achievements` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `olympics_information`
--

INSERT INTO `olympics_information` (`id`, `name`, `details`, `image_path`, `achievements`) VALUES
(1, 'Michael Phelps', 'Michael Phelps is widely regarded as one of the greatest Olympic athletes in history, with a record 23 gold medals, 3 silver, and 2 bronze, totaling 28 Olympic medals. He made his Olympic debut at just 15 years old at the 2000 Sydney Olympics and rose to prominence at the 2004 Athens Games, winning ', 'michael.jpg', 'Overcoming challenges to become the most decorated Olympian.'),
(2, 'Jesse Owens', 'Jesse Owens is remembered as one of the most iconic athletes in Olympic history, known for his groundbreaking achievements at the 1936 Berlin Olympics. At those Games, Owens defied Nazi propaganda by winning 4 gold medals in track and field—triumphing in the 100-meter, 200-meter, long jump, and 4x10', 'Jesse Owens.jpg', 'Breaking records and racial barriers in the 1936 Berlin Olympics.'),
(3, 'Simone Biles', 'Simone Biles is widely regarded as one of the greatest gymnasts of all time, known for her unparalleled skill, strength, and groundbreaking performances. She has won 7 Olympic medals, including 4 golds, 1 silver, and 2 bronzes, making her the most decorated American gymnast in Olympic history. Biles', 'simone.jpg', 'Inspiring a new generation of gymnasts with her incredible talent.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `olympics_information`
--
ALTER TABLE `olympics_information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `olympics_information`
--
ALTER TABLE `olympics_information`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
