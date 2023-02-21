-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 03:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_authn`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `db_name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `db_user` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `db_email` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `db_phone` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `db_pass` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `db_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `db_name`, `db_user`, `db_email`, `db_phone`, `db_pass`, `db_date`) VALUES
(1, 'yashwant koli', 'yashwant123', 'yashwantkoli20@gmail.com', '7666-25-2704', '1234', '0000-00-00'),
(2, 'sakshi shendurkar ', 'sakshi123', 'sakshi@gmail.com', '5555-65-5858', '123', '0000-00-00'),
(3, 'sanket mane', 'sanket123', 'sanket1@gmail.com', '5656-58-6969', '4444', '0000-00-00'),
(4, 'omkar nivangune', 'omkar7', 'omkar@gmail.com', '4565-85-6969', 'aaaa', '0000-00-00'),
(5, 'jaywant koli', 'jaywant123', 'jaywntkoli@gmail.cpom', '9090-87-9090', 'jjjj', '0000-00-00'),
(6, 'preeti Guruv', 'priti123', 'preeti@gmail.com', '4565-85-6969', '1111', '0000-00-00'),
(7, 'kunal pisolkar', 'kunal123', 'kunal1@gmail.com', '5555-65-5858', '0101', '2002-02-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
