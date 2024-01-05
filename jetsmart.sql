-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 06:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `jobTitle` varchar(100) NOT NULL,
  `jobDescription` text NOT NULL,
  `jobRequirements` text NOT NULL,
  `jobQualification` varchar(100) DEFAULT NULL,
  `companyName` varchar(100) DEFAULT 'Jetsmart IT Services',
  `salary` decimal(10,2) DEFAULT NULL,
  `jobStatus` enum('active','closed') DEFAULT 'active',
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `jobTitle`, `jobDescription`, `jobRequirements`, `jobQualification`, `companyName`, `salary`, `jobStatus`, `createdAt`) VALUES
(1, 'Web Developer', 'aaa aaa  aaa', 'aaaaa\r\nbbbb\r\nccccc\r\n', 'Any Graduate', 'Jetsmart IT Services', 1.00, 'active', '2024-01-04 17:47:23'),
(2, 'Senior Java Developer', 'As a Senior Java Developer at [Company Name], you will play a pivotal role in the design, development, and implementation of high-performance, scalable, and reliable Java-based applications. You will be an integral part of our talented team, contributing your expertise to drive the evolution of our products and ensure their seamless functionality.', 'Bachelor’s/Master’s degree in Computer Science, Engineering, or a related field.\r\nProven experience (X years) as a Java Developer, with expertise in Java 8+.\r\nStrong knowledge of Spring Framework, Hibernate, and other related frameworks.\r\nExperience with RESTful web services and API design/development.\r\nProficiency in database design and SQL.\r\nFamiliarity with agile methodologies and DevOps practices.\r\nExcellent problem-solving skills and ability to thrive in a fast-paced environment.', 'Any Graduate', 'Jetsmart IT Services', 3000000.00, 'active', '2024-01-04 17:58:09');

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
(16, 'Sustainability Initiatives: Building a Greener Future', 'In an era where environmental concerns are paramount, organizations are taking proactive steps towards sustainability. This post illuminates the burgeoning realm of sustainability initiatives, highlighting innovative practices adopted by businesses to minimize their carbon footprint. We delve into renewable energy adoption, circular economy models, waste reduction strategies, and eco-friendly product development. By examining the impact of these initiatives on the environment, society, and the bottom line, we showcase how companies can lead by example in creating a more sustainable and environmentally conscious future.', 'uploads/1704197402_5b5b7cf87b4ac703.jpg', '2024-01-02 12:10:02'),
(18, 'Enhancing Business Efficiency: The Power of Tailored IT Solutions', 'At JetSmart IT Services, we\'re committed to ushering your business into the future by leveraging the immense potential of technology. Today, in the fast-paced digital landscape, optimizing business processes is not just an advantage—it\'s a necessity.\r\n\r\nWe understand the unique challenges companies face in staying competitive while adapting to rapidly evolving technological advancements. That\'s why our team at JetSmart is dedicated to crafting bespoke IT solutions that align perfectly with your business goals.\r\n\r\nHere are some key insights into how tailored IT solutions can revolutionize your business:\r\n\r\nCustomized Solutions: One-size-fits-all approaches rarely yield optimal results. Our tailored IT solutions are designed after comprehensive consultations with our clients, ensuring that the technology we implement is perfectly attuned to your specific needs.\r\n\r\nEnhanced Efficiency: Streamlining processes and optimizing workflows are at the core of what we do. Our solutions aim to boost your operational efficiency, saving valuable time and resources.\r\n\r\nScalability and Flexibility: As your business evolves, so should your IT infrastructure. Our solutions are scalable and flexible, capable of adapting to your company\'s changing requirements seamlessly.\r\n\r\nCybersecurity and Data Protection: Protecting your digital assets is paramount. Our solutions prioritize robust cybersecurity measures to safeguard your sensitive data against potential threats.\r\n\r\nExpert Support and Maintenance: Our commitment doesn’t end with implementation. We provide continuous support and maintenance to ensure your systems run smoothly, allowing you to focus on your core business functions.\r\n\r\nIn today\'s competitive landscape, having the right technology partner is crucial for sustainable growth. At JetSmart IT Services, we are not just providers; we are collaborators in your success story. Let us empower your business to reach new heights through innovative and tailored IT solutions.\r\n\r\nGet in touch with us today to explore how our expertise can propel your business forward.\r\n\r\nStay ahead, stay innovative, with JetSmart IT Services.', 'uploads/1704427024_45f8942fd08c3857.jfif', '2024-01-05 03:57:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
