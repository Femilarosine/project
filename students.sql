-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2023 at 11:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `femila`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `birthday`, `gender`, `email`, `phone`, `subject`, `image`, `pdf`) VALUES
(4, 'Femi', 'Rosine', '2003-06-11', 'Female', 'femi@gmail.com', '9895343333', 'MCA', '', NULL),
(5, 'Jeni', 'fer', '2023-08-02', 'Female', 'jeni@gmail.com', '123456756', 'BCOM', '', ''),
(13, 'Femila', 'Rosine', '2023-08-02', 'Female', 'femilarosine@gmail.com', '53534534', 'MCA', 'image', 'pdf'),
(14, 'Rubi', 'm m', '2023-08-02', 'Female', 'rubi@gmail.com', '8765678567', 'MCA', 'image', 'pdf'),
(15, 'Delphine', 'susmitha', '2023-08-02', 'Female', 'del@gmail.com', '7676876767', 'BCA', 'image', 'pdf'),
(16, 'Del', 'phine', '2023-07-31', 'Female', 'del@gmail.com', '9895345345', 'BSC', 'd.jpg', 'pdf'),
(18, 'Femila', 'Rosine', '2023-08-17', 'Female', 'femi@gmail.com', '6754326754', 'BBA', 'bul1.png', ''),
(19, 'dsdds', 'fsd', '2023-08-09', 'Male', 'dsaaaaaaaaa@fs', '8976882323', 'BBA', 'download.png', 'GE8161_PYTHON_LAB_MANUAL.pdf'),
(20, 'Femila', 'Rosine', '2003-10-21', 'Female', 'femi@gmail.com', '8976882323', 'BCOM', 'download.png', 'Login.docx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
