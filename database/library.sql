-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 11:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(25) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `publishing_date` year(4) NOT NULL,
  `sub_id` int(25) NOT NULL,
  `cat_id` int(25) NOT NULL,
  `ratings` int(5) NOT NULL,
  `isbn` int(13) NOT NULL,
  `total_pages` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `cat_id` int(25) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(25) NOT NULL,
  `user_id` int(25) NOT NULL,
  `book_id` int(25) NOT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comments` text NOT NULL,
  `feedback_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `name`, `email`, `comments`, `feedback_type`) VALUES
(8, 'Sinjita Ghosh', 'sinjita11ghosh.sg@gmail.com', 'some pages are missing in the ebook', 'complaint'),
(9, 'Kriti Thakur', 'thakurkriti514@gmail.com', 'page is not loading', 'problem'),
(10, 'Kriti Thakur', 'thakurkriti514@gmail.com', 'page is not loading', 'problem'),
(11, 'Kriti Thakur', 'thakurkriti514@gmail.com', 'page is not loading', 'problem'),
(12, 'Kriti Thakur', 'thakurkriti514@gmail.com', 'page is not loading', 'problem'),
(13, 'Kriti Thakur', 'thakurkriti514@gmail.com', 'page is not loading', 'problem'),
(21, 'Tasneem Khan', 'khan.tasneem017@gmail.com', 'This is a test feedback.', 'suggestion'),
(22, 'tasneem', 'khan.tasneem@gmail.com', 'hii there', 'praise'),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, 'Kriti Thakur', 'thakurkriti514@gmail.com', 'jhsgajfhgdkfgsdj', 'suggestion');

-- --------------------------------------------------------

--
-- Table structure for table `sub_catagory`
--

CREATE TABLE `sub_catagory` (
  `sub_id` int(25) NOT NULL,
  `sub_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `signup_date` datetime NOT NULL DEFAULT current_timestamp(),
  `email_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`, `first_name`, `last_name`, `phone`, `signup_date`, `email_id`) VALUES
(23, 'askjdhflkshdf', 'tasneem', 'khan', '9038681824', '2022-03-28 15:18:53', 'khan.tasneem017@gmail.com'),
(24, 'asmdfjkshg', 'tasneem', 'khan', '9038681824', '2022-03-28 15:19:11', 'khan.tasneem017@gmail.com'),
(25, 'Tkhan', 'tasneem', 'khan', '9038681824', '2022-03-28 15:19:30', 'khan.tasneem017@gmail.com'),
(26, 'ahgshj', 'tasneem', 'khan', '9038681824', '2022-03-28 15:19:58', 'khan.tasneem017@gmail.com'),
(27, 'tkhan', 'tasneem', 'khan', '9038681824', '2022-03-28 15:20:46', 'khan.tasneem017@gmail.com'),
(28, '', '', '', '', '2022-04-14 13:05:46', ''),
(29, '', '', '', '', '2022-04-14 13:12:57', ''),
(30, '', '', '', '', '2022-04-14 13:15:02', ''),
(31, 'abcd', 'tasneem', 'khan', '9038681824', '2022-04-14 13:17:31', 'khan.tasneem017@gmail.com'),
(32, 'xyz', 'tasneem', 'khan', '9038681824', '2022-04-14 13:18:54', 'khan.tasneem017@gmail.com'),
(33, 'asdf', 'Kriti', 'Thakur', '5242424245', '2022-04-14 13:22:02', 'thakurkriti514@gmail.com'),
(34, '12345', 'tasneem', 'khan', '9038681824', '2022-04-14 13:22:30', 'khan.tasneem017@gmail.com'),
(35, 'asdf', 'Kriti', 'Thakur', '5242424245', '2022-04-14 13:23:58', 'thakurkriti514@gmail.com'),
(36, '1234', 'Sinjita', 'Ghosh', '1231413414', '2022-04-14 13:24:17', 'sinjita11ghosh.sg@gmail.com'),
(37, '', '', '', '', '2022-04-16 20:47:51', ''),
(38, '', '', '', '', '2022-04-18 14:18:12', ''),
(39, '1234', 'Kriti', 'Thakur', '5242424245', '2022-04-18 14:19:50', 'thakurkriti514@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_favourites`
--

CREATE TABLE `user_favourites` (
  `user_id` int(25) NOT NULL,
  `book_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD UNIQUE KEY `isbn` (`isbn`),
  ADD KEY `sub_id` (`sub_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `sub_catagory`
--
ALTER TABLE `sub_catagory`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_favourites`
--
ALTER TABLE `user_favourites`
  ADD KEY `BOOK_ID_FK` (`book_id`),
  ADD KEY `USER_ID_FK` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `cat_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `cat_id` FOREIGN KEY (`cat_id`) REFERENCES `catagories` (`cat_id`),
  ADD CONSTRAINT `sub_id` FOREIGN KEY (`sub_id`) REFERENCES `sub_catagory` (`sub_id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `book_id` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user_favourites`
--
ALTER TABLE `user_favourites`
  ADD CONSTRAINT `BOOK_ID_FK` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`),
  ADD CONSTRAINT `USER_ID_FK` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
