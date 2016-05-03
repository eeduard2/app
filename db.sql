-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Aug 31, 2015 at 02:23 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `phonegap_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
`id` int(1) NOT NULL,
  `title` varchar(25) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`id`, `title`, `duration`, `price`) VALUES
(1, 'Phonegap Training', 'Basic to advanced phonegap trainin', '100 USD'),
(2, 'PHP Training', 'Learn Php from basics', '99 USD'),
(3, 'test', '123', '123'),
(4, 'Phonegap', '40', '18000'),
(5, 'test', '123', '1231234'),
(6, 'From mobile', '40', '13568'),
(7, 'Stinky', 'Conni', 'Dunno'),
(8, 'ef', 'asfd', 'adsf'),
(9, 'adfer', '21e', '123'),
(10, 'test1', '15days', '4000'),
(11, 'test1', '15days', '4000'),
(12, 'tesy', 'sdf', 'HGD'),
(13, 'kj', 'h', 'h'),
(14, 'asdfasf', 'asdf', '234'),
(15, 'kjb', 'tgfeqq', 'ggj'),
(16, 'exampl', '2', '123'),
(17, 'abcd', '34', '2341'),
(18, 'From mobilr', '637', '637'),
(19, 'Gebdhhd', '638849', '2527');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;