-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 07:52 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inote`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `sno` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `des` varchar(500) NOT NULL,
  `dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`sno`, `title`, `des`, `dt`) VALUES
(9, 'C++ ', 'C++ is a very popular language for performance-critical applications that rely on speed and efficient memory management. It’s used in a wide range of industries including software and game development, VR, robotics, and scientific computing.', '2021-05-10 11:15:59'),
(11, 'PHP', 'PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or as a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code – which may be any type of data, such as generated HTML or binary image data – would form the whole or part of an HTTP response. Various web template systems, web content management systems, and web frameworks exist which can be employed to orchestrate or facilitate the generati', '2021-05-10 11:17:56'),
(12, 'Article on Save Water', 'Article on Save Water: Water is the single most important resource on the planet that we live on, and that is why it is essential that we conserve it. Water is the basic necessity for all living beings, and it is incredibly important to conserve it. It is not only important for living and breathing things, but also for many inanimate objects that humans create. For example, to build a house, we need concrete, and to make concrete, we need to mix cement powder with water. Water constitutes more t', '2021-05-10 11:21:09'),
(13, 'Article on Save Water', 'Article on Save Water: Water is the single most important resource on the planet that we live on, and that is why it is essential that we conserve it. Water is the basic necessity for all living beings, and it is incredibly important to conserve it. It is not only important for living and breathing things, but also for many inanimate objects that humans create. For example, to build a house, we need concrete, and to make concrete, we need to mix cement powder with water. Water constitutes more t', '2021-05-10 11:22:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
