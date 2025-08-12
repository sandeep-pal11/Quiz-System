-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2025 at 05:32 PM
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
-- Database: `quiz_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(80) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` varchar(30) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(2, 'monapal11@gmail.com', 'mona123', 'create', '2025-07-23', '2025-07-23'),
(3, 'atul@gmail.com', 'atul123', 'create', '2025-08-02', '2025-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `creator` varchar(30) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `creator`, `created_at`, `updated_at`) VALUES
(6, 'coding', 'monapal11@gmail.com', '2025-07-27', '2025-07-27'),
(7, 'mathematics', 'monapal11@gmail.com', '2025-07-28', '2025-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `mcqs`
--

CREATE TABLE `mcqs` (
  `id` int(30) NOT NULL,
  `question` varchar(500) NOT NULL,
  `a` varchar(300) NOT NULL,
  `b` varchar(300) NOT NULL,
  `c` varchar(300) NOT NULL,
  `d` varchar(300) NOT NULL,
  `correct_ans` varchar(20) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `quiz_id` int(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL,
  `right_answer` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mcqs`
--

INSERT INTO `mcqs` (`id`, `question`, `a`, `b`, `c`, `d`, `correct_ans`, `admin_id`, `quiz_id`, `category_id`, `updated_at`, `created_at`, `right_answer`) VALUES
(1, 'dx', 'sx', 'sxs', 'sxa', 'axa', 'a', 2, 3, 6, '2025-08-01', '2025-08-01', NULL),
(2, 'fdccccc', 'c', 'cc', 'ssss', 'sxsx', 'a', 2, 4, 6, '2025-08-01', '2025-08-01', NULL),
(3, 'sxa', 'sxw', 'axss', 'ssssssssss', 'dddddd', 'd', 2, 4, 6, '2025-08-01', '2025-08-01', NULL),
(4, 'dss', 's', 'sddd', 'ddd', 'aqaqaqaq', 'd', 2, 4, 6, '2025-08-01', '2025-08-01', NULL),
(5, 'cs', 's', 'cc', 'c', 'w', 'a', 2, 5, 6, '2025-08-01', '2025-08-01', NULL),
(6, 'gfg', 'fgb', 'fb', 'f', 'b', 'b', 2, 5, 6, '2025-08-01', '2025-08-01', NULL),
(7, 'sandeepppppp', 'pal', 'aaa', 'bb', 'cc', 'c', 2, 6, 6, '2025-08-01', '2025-08-01', NULL),
(8, 'swd', 'dw', 'w', 'd', 'd', 'c', 2, 7, 6, '2025-08-01', '2025-08-01', NULL),
(9, 'lovee', 'ka', 'ba', 'az', 'x', 'd', 2, 7, 6, '2025-08-01', '2025-08-01', NULL),
(10, 'mona', 'apal', 'sandepp', 'e', 'ef', 'b', 2, 7, 6, '2025-08-01', '2025-08-01', NULL),
(11, 'munna hai re tu munna', 'ha hu', 'nhi hu', 'tu h', 'h me hu', 'a', 3, 8, 6, '2025-08-01', '2025-08-01', NULL),
(12, 'munni h tu', 'salman khan vali', 'nhi', 'haa', 'a and b', 'a', 3, 8, 6, '2025-08-01', '2025-08-01', NULL),
(13, 'what is python', 'programing', 'gaming', 'ai', 'nothing', 'a', 3, 9, 6, '2025-08-01', '2025-08-01', NULL),
(14, 'wsw', 'ee', 'e3t5', '4', 'rt', 'c', 3, 9, 6, '2025-08-01', '2025-08-01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` int(11) NOT NULL,
  `name` varchar(400) NOT NULL,
  `category_id` int(30) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `name`, `category_id`, `updated_at`, `created_at`) VALUES
(2, 'laravel 10 MCQs', 6, '2025-07-30', '2025-07-30'),
(3, 'php 10 questions ?', 6, '2025-08-01', '2025-08-01'),
(4, 'laravel 10 MCQs', 6, '2025-08-01', '2025-08-01'),
(5, 'laravel 10 MCQs', 6, '2025-08-01', '2025-08-01'),
(6, 'laravel 10 MCQs', 6, '2025-08-01', '2025-08-01'),
(7, 'sandeeepppp', 6, '2025-08-01', '2025-08-01'),
(8, 'munna bhai 2 mcqs', 6, '2025-08-01', '2025-08-01'),
(9, 'python', 6, '2025-08-01', '2025-08-01'),
(10, 'fevrfr bfeefcvf', 6, '2025-08-02', '2025-08-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcqs`
--
ALTER TABLE `mcqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mcqs`
--
ALTER TABLE `mcqs`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
