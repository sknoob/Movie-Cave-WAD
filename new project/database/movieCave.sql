-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 6:52 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieCave`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'soban@ucp', '123'),
(2, 'uzair@ucp', '123'),
(3, 'bashair@ucp', '123');

-- --------------------------------------------------------



--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Comedy'),
(4, 'Crime'),
(5, 'Horror');

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `movies` (
  `mov_id` int(10) NOT NULL,
  `mov_cat` int(10) NOT NULL,
  `mov_title` varchar(200) NOT NULL,
  `mov_desc` varchar(3000) NOT NULL,
  `mov_image` varchar(300) NOT NULL,
  `mov_keywords` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `movies` (`mov_id`, `mov_cat`, `mov_title`, `mov_desc`, `mov_image`, `mov_keywords`) VALUES
(1, 1, 'John Wick: Chapter 3 – Parabellum', 'After gunning down a member of the High Table -- the shadowy international assassin''s guild -- legendary hit man John Wick finds himself stripped of the organization''s protective services. Now stuck with a $14 million bounty on his head, Wick must fight his way through the streets of New York as he becomes the target of the world''s most ruthless killers.', 'img_john_wick.jpg', 'john, j, wick'),
(2, 1, 'Black Panther', 'After the death of his father, T''Challa returns home to the African nation of Wakanda to take his rightful place as king. When a powerful enemy suddenly reappears, T''Challa''s mettle as king -- and as Black Panther -- gets tested when he''s drawn into a conflict that puts the fate of Wakanda and the entire world at risk. Faced with treachery and danger, the young king must rally his allies and release the full power of Black Panther to defeat his foes and secure the safety of his people.', 'img_black_panther.jpg', 'b, black, pan, panther'),
(3, 2, 'Inception', 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.', 'img_inception.jpg', 'i, incep, inception'),
(4, 2, 'Sherlock Holmes', 'Detective Sherlock Holmes and his stalwart partner Watson engage in a battle of wits and brawn with a nemesis whose plot is a threat to all of England.', 'img_sherlock.jpg', 'she, s, sherl, sherlock'),
(5, 3, 'Home Alone', 'An eight-year-old troublemaker must protect his house from a pair of burglars when he is accidentally left home alone by his family during Christmas vacation.', 'img_halone.jpg', 'h, hom, home, alone'),
(6, 3, 'The Hangover', 'Three buddies wake up from a bachelor party in Las Vegas, with no memory of the previous night and the bachelor missing. They make their way around the city in order to find their friend before his wedding', 'img_hang.jpg', 'han, hang, ov, over'),
(7, 4, 'The Godfather ', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.', 'img_gdf.jpg', 'g, god, fath, f, father'),
(8, 4, 'The Dark Knight', 'When the menace known as The Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham. The Dark Knight must accept one of the greatest psychological and physical tests of his ability to fight injustice.', 'img_dark.jpg', 'dar, dark, kni, knight'),
(9, 5, 'Saw II', 'A detective and his team must rescue 8 people trapped in a factory by the twisted serial killer known as Jigsaw.', 'img_saw.jpg', 'sa, saw, two'),
(10, 5, 'Insidious', 'A family looks to prevent evil spirits from trapping their comatose child in a realm called The Further.', 'img_insd.jpg', 'ins, insidious, dious');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);


--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);


--
-- Indexes for table `products`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mov_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;



--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;



--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `movies`
  MODIFY `mov_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
