-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 01:33 PM
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
-- Database: `jetsmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image_url`, `created_at`) VALUES
(15, 'The Evolution of Technology in the Modern Workplace', 'Technology has rapidly transformed the landscape of the modern workplace, catalyzing a paradigm shift in how we approach work. From the digital revolution to the rise of remote collaboration tools, this post delves into the multifaceted evolution of technology in the workplace. We explore the profound impact of mobile technology, cloud computing, artificial intelligence, and automation on productivity, communication, and workflow optimization. Additionally, we investigate the challenges and opportunities presented by the integration of these technologies, emphasizing their pivotal role in reshaping organizational structures, fostering flexibility, and driving innovation.', 'uploads/1704196986_1794e819355a753f.jpg', '2024-01-02 12:03:06'),
(16, 'Sustainability Initiatives: Building a Greener Future', 'In an era where environmental concerns are paramount, organizations are taking proactive steps towards sustainability. This post illuminates the burgeoning realm of sustainability initiatives, highlighting innovative practices adopted by businesses to minimize their carbon footprint. We delve into renewable energy adoption, circular economy models, waste reduction strategies, and eco-friendly product development. By examining the impact of these initiatives on the environment, society, and the bottom line, we showcase how companies can lead by example in creating a more sustainable and environmentally conscious future.', 'uploads/1704197402_5b5b7cf87b4ac703.jpg', '2024-01-02 12:10:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
