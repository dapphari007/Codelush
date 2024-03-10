-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2024 at 10:33 PM
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
-- Database: `task_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `overview` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task_name`, `overview`) VALUES
(1, 'Landing Page Redesign', 'Rejuvenate the visuals and content of an existing landing page for a farm project, focusing on improving clarity, user engagement, and lead generation. Updating the layout and color scheme for a modern, user-friendly experience. Crafting concise and capti'),
(2, 'Responsive Social Media Graphics', 'Design engaging social media graphics (e.g., banners, posts) that effectively promote farm-related content across various platforms. Ensure eye-catching visuals aligned with the brand identity and target audience. Responsive design for optimal display on '),
(3, 'Interactive Data Visualization for Crop Performance', 'Develop an interactive data visualization tool that showcases crop performance data for stakeholders. Integrating data from sensors or databases on factors like yield, weather, and resource usage. Creating user-friendly interfaces for filtering, comparing'),
(4, 'E-commerce Website for Farm Products', 'Design an e-commerce website for a farm to sell produce directly to consumers. Ensure user-friendly product navigation and search functionality. Secure payment gateway integration and relevant shipping options. Engaging product descriptions and high-quali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
