-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2018 at 11:33 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `etykieta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `etykieta`) VALUES
(11, 'sample', 'category');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `temat` varchar(50) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `wiadomosc` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `headings`
--

CREATE TABLE `headings` (
  `id` int(11) NOT NULL,
  `header` varchar(200) NOT NULL,
  `header_small` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `headings`
--

INSERT INTO `headings` (`id`, `header`, `header_small`) VALUES
(1, 'Work', 'Lorem ipsum'),
(2, 'Schools', 'Donec a diam sed lacus laoreet auctor. '),
(3, 'FORMULARZ KONTAKTOWY', 'pisz śmiało'),
(4, 'Portfolio', 'Sed consectetur elementum nulla ac fringilla.');

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `source` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`source`) VALUES
(' ');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_gallery`
--

CREATE TABLE `portfolio_gallery` (
  `id` int(11) NOT NULL,
  `sizes` varchar(20) NOT NULL,
  `img_src` varchar(250) NOT NULL,
  `category` varchar(40) NOT NULL,
  `img_alt` varchar(50) NOT NULL,
  `img_button` varchar(25) NOT NULL,
  `modal_header` varchar(100) NOT NULL,
  `modal_img` varchar(150) NOT NULL,
  `modal_p` varchar(500) NOT NULL,
  `modal_href` varchar(200) NOT NULL,
  `modal_src` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio_gallery`
--

INSERT INTO `portfolio_gallery` (`id`, `sizes`, `img_src`, `category`, `img_alt`, `img_button`, `modal_header`, `modal_img`, `modal_p`, `modal_href`, `modal_src`) VALUES
(35, 'width2', 'http://www.basicwebdesigning.com/wp-content/uploads/2018/04/Web-Design-1.jpg', 'sample', 'img1', 'More...', 'Lorem ipsum', 'http://www.basicwebdesigning.com/wp-content/uploads/2018/04/Web-Design-1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris diam tortor, tristique et rutrum in, dignissim vel purus. Pellentesque ac luctus turpis. Nulla vel purus vitae tellus rutrum bibendum. Aliquam sit amet vestibulum leo, in convallis risus. Donec rutrum at urna a ultrices. In hac habitasse platea dictumst. Donec at egestas odio. Sed et nunc et massa gravida consequat. Phasellus ipsum nu', '#', 'l'),
(36, 'height2', 'http://inextitnetworks.com/pizzagate/wp-content/uploads/2017/08/12.jpg', 'a', 'img2', 'More...', 'Lorem ipsum', 'http://inextitnetworks.com/pizzagate/wp-content/uploads/2017/08/12.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris diam tortor, tristique et rutrum in, dignissim vel purus. Pellentesque ac luctus turpis. Nulla vel purus vitae tellus rutrum bibendum. Aliquam sit amet vestibulum leo, in convallis risus. Donec rutrum at urna a ultrices. In hac habitasse platea dictumst. Donec at egestas odio. Sed et nunc et massa gravida consequat. Phasellus ipsum nu', '#', 'o'),
(38, 'width2', 'https://vignette.wikia.nocookie.net/witcher/images/3/3f/Witcher3-preview-e3-13.jpg/revision/latest?cb=20150107230113', 'sample', 'img3', 'More...', 'Lorem ipsum', 'https://vignette.wikia.nocookie.net/witcher/images/3/3f/Witcher3-preview-e3-13.jpg/revision/latest?cb=20150107230113', '', '', 'o'),
(39, 'height2', 'https://media.giphy.com/media/13gvXfEVlxQjDO/giphy.gif', 'sample', 'gif', 'More...', 'Lorem ipsum', 'https://media.giphy.com/media/13gvXfEVlxQjDO/giphy.gif', '', '', 's'),
(42, 'width2', 'https://cc.i.lithium.com/t5/image/serverpage/image-id/19646i9FB359A349FEBDDF?v=1.0', 'sample', 's', 'More...', 'Lorem ipsum', 'https://cc.i.lithium.com/t5/image/serverpage/image-id/19646i9FB359A349FEBDDF?v=1.0', '', '', 'r');

-- --------------------------------------------------------

--
-- Table structure for table `progress_bars`
--

CREATE TABLE `progress_bars` (
  `color` varchar(50) NOT NULL,
  `skill` varchar(10) NOT NULL,
  `tekst` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `progress_bars`
--

INSERT INTO `progress_bars` (`color`, `skill`, `tekst`) VALUES
('bg-success', '50', 'Lorem'),
('bg-info', '25', 'Ipsum'),
('bg-warning', '100', 'Dolor'),
('s4', '25', 'Amet');

-- --------------------------------------------------------

--
-- Table structure for table `section_about`
--

CREATE TABLE `section_about` (
  `header` varchar(100) NOT NULL,
  `header_small` varchar(100) NOT NULL,
  `names` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `p_one` varchar(700) NOT NULL,
  `p_two` varchar(500) NOT NULL,
  `button_text` varchar(50) NOT NULL,
  `button_href` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_about`
--

INSERT INTO `section_about` (`header`, `header_small`, `names`, `title`, `p_one`, `p_two`, `button_text`, `button_href`) VALUES
('About', 'Lorem ipsum dolor sit amet', 'Lorem ipsum', 'Lorem ipsum dolor', 'Donec a diam sed lacus laoreet auctor. Sed consectetur elementum nulla ac fringilla. Suspendisse odio nibh, gravida sit amet erat ac, posuere dapibus arcu. Maecenas ut dictum mauris. Etiam bibendum neque eget mi luctus efficitur vel nec turpis. Nunc vestibulum, sem sed elementum aliquam, sem risus ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris diam tortor, tristique et rutrum in, dignissim vel purus. Pellentesque ac luctus turpis. Nulla vel purus vitae tellus rutrum bibendum.', 'Lorem ipsum', 'http://github.com/dkrakowczyk');

-- --------------------------------------------------------

--
-- Table structure for table `section_schools`
--

CREATE TABLE `section_schools` (
  `id` int(11) NOT NULL,
  `dates` varchar(50) NOT NULL,
  `names` varchar(100) NOT NULL,
  `roles` varchar(100) NOT NULL,
  `p_one` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_schools`
--

INSERT INTO `section_schools` (`id`, `dates`, `names`, `roles`, `p_one`) VALUES
(2, 'Now <br> 2015', 'LOREM IPSUM DOLOR SIT AMET', 'Lorem', 'Donec a diam sed lacus laoreet auctor. Sed consectetur elementum nulla ac fringilla. Suspendisse odio nibh, gravida sit amet erat ac, posuere dapibus arcu. Maecenas ut dictum mauris. Etiam bibendum neque eget mi luctus efficitur vel nec turpis.');

-- --------------------------------------------------------

--
-- Table structure for table `section_skills`
--

CREATE TABLE `section_skills` (
  `header` varchar(100) NOT NULL,
  `header_small` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `p_one` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_skills`
--

INSERT INTO `section_skills` (`header`, `header_small`, `title`, `p_one`) VALUES
('Experience', 'LOREM IPSUM DOLOR SIT AMET', 'Lorem ipsum', 'Donec a diam sed lacus laoreet auctor. Sed consectetur elementum nulla ac fringilla. Suspendisse odio nibh, gravida sit amet erat ac, posuere dapibus arcu. Maecenas ut dictum mauris. Etiam bibendum ne');

-- --------------------------------------------------------

--
-- Table structure for table `section_work`
--

CREATE TABLE `section_work` (
  `id` int(11) NOT NULL,
  `dates` varchar(100) NOT NULL,
  `names` varchar(100) NOT NULL,
  `roles` varchar(100) NOT NULL,
  `p_one` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_work`
--

INSERT INTO `section_work` (`id`, `dates`, `names`, `roles`, `p_one`) VALUES
(10, 'Now <br> 2015', 'Lorem ipsum', 'Lorem ipsum dolor', 'Donec a diam sed lacus laoreet auctor. Sed consectetur elementum nulla ac fringilla. Suspendisse odio nibh, gravida sit amet erat ac, posuere dapibus arcu. Maecenas ut dictum mauris. Etiam bibendum neque eget mi luctus efficitur vel nec turpis. Nunc '),
(11, '2015 <br> 2011', 'Lorem ipsum', 'Lorem ipsum dolor', 'Donec a diam sed lacus laoreet auctor. Sed consectetur elementum nulla ac fringilla. Suspendisse odio nibh, gravida sit amet erat ac, posuere dapibus arcu. Maecenas ut dictum mauris. Etiam bibendum neque eget mi luctus efficitur vel nec turpis.');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(11) NOT NULL,
  `class` varchar(40) NOT NULL,
  `href` varchar(200) NOT NULL,
  `fa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `class`, `href`, `fa`) VALUES
(7, 'fb', 'aaaa', 'fab fa-facebook-square'),
(8, 'gt', 'aasaa', 'fab fa-github');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headings`
--
ALTER TABLE `headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_gallery`
--
ALTER TABLE `portfolio_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_schools`
--
ALTER TABLE `section_schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_work`
--
ALTER TABLE `section_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `headings`
--
ALTER TABLE `headings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portfolio_gallery`
--
ALTER TABLE `portfolio_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `section_schools`
--
ALTER TABLE `section_schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section_work`
--
ALTER TABLE `section_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
