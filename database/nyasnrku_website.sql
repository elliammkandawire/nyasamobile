-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 29, 2022 at 02:31 AM
-- Server version: 10.3.35-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nyasnrku_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `slug` varchar(500) NOT NULL,
  `position` text NOT NULL,
  `location` varchar(500) NOT NULL,
  `category` varchar(300) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`slug`, `position`, `location`, `category`, `content`, `date`, `status`) VALUES
('Frontdesk', 'Front Desk Manager', 'Blantyre', 'Front Desk', 'There are many variations of passages of Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing\r\n\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words', '2022-08-02 12:41:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `slug` varchar(200) NOT NULL,
  `shortname` varchar(200) NOT NULL,
  `fullname` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `location` text NOT NULL,
  `logo` varchar(200) NOT NULL,
  `mission` text NOT NULL,
  `motto` text NOT NULL,
  `vision` text NOT NULL,
  `background` text NOT NULL,
  `twitter` text NOT NULL,
  `facebook` text NOT NULL,
  `postal_address` text NOT NULL,
  `phone` text NOT NULL,
  `about_picture` text NOT NULL,
  `map_src` text NOT NULL,
  `instagram` text NOT NULL,
  `youtube` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`slug`, `shortname`, `fullname`, `email`, `location`, `logo`, `mission`, `motto`, `vision`, `background`, `twitter`, `facebook`, `postal_address`, `phone`, `about_picture`, `map_src`, `instagram`, `youtube`) VALUES
('nyasamobile', 'Nyasa Mobile', 'Nyasa Mobile', 'info@nyasamobile.com', 'Nyasa Mobile3rd floor, Abdul Majid Motor City Chipembere Highway, Ginnery Corner Blantyre', 'logo-3.png', '', 'The people’s Network', '', '<p>“The people’s network”- Believing in the power of technology to transform people’s lives. <br>A disruptive third mobile network operator in Malawi committed to delivering financial inclusion, social economic growth, and driving internet penetration to deliver a backbone for economic growth. Delivered by Malawi\'s leading FMCG and distribution group, powered by strategic partners both locally and internationally.</p><p>Nyasa Mobile’s group of companies have significant local knowledge and market presence and includes some of the leading companies delivering local products in the FMCG environment that have successfully gained market share and brand loyalty over the last 30 years. Leveraging this local experience Nyasa Mobile ́s management believes this will provide a substantial and stable platform to allow Nyasa Mobile to deliver its strategy within the telecommunications industry.</p><p>Spearheading the digital revolution in Malawi by providing a world-class service to Malawi. A team with no limits, that thinks big to provide unlimited possibilities to our customers, communities, and shareholders.<br><br />\r\n</p>', '#', '#', 'P.O Box 1363, Blantyre 3', '(265)099 848 415 2', 'about_us.jpeg', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15356.291822678764!2d35.0208541!3d-15.8001067!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe32bdaeff32b16de!2sAbdul%20Majid%20Motor%20City!5e0!3m2!1sen!2smw!4v1660247510719!5m2!1sen!2smw', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `slug` varchar(500) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `picture` text NOT NULL,
  `author` text NOT NULL,
  `title` varchar(400) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`slug`, `datetime`, `content`, `status`, `picture`, `author`, `title`, `date`) VALUES
('about-nyasa-mobile', '2022-08-11 22:00:59', '“The people’s network”- Believing in the power of technology to transform people’s lives.\r\n\r\nA disruptive third mobile network operator in Malawi committed to delivering financial inclusion, social economic growth, and driving internet penetration to deliver a backbone for economic growth. Delivered by Malawi\'s leading FMCG and distribution group, powered by strategic partners both locally and internationally.\r\n\r\nNyasa Mobile’s group of companies have significant local knowledge and market presence and includes some of the leading companies delivering local products in the FMCG environment that have successfully gained market share and brand loyalty over the last 30 years. Leveraging this local experience Nyasa Mobile ́s management believes this will provide a substantial and stable platform to allow Nyasa Mobile to deliver its strategy within the telecommunications industry.\r\n\r\nSpearheading the digital revolution in Malawi by providing a world-class service to Malawi. A team with no limits, that thinks big to provide unlimited possibilities to our customers, communities, and shareholders.', 1, 'news.jpg', 'Nyasa Mobile', 'Malawi\'s third operator bags early win', '2022-08-27 20:46:00'),
('nyasa-mobile', '2022-08-27 20:46:23', '<p>Malawi’s third mobile phone operator Nyasa Mobile Limited is hoping a newly established strategic partnership with the Vodafone Group will pay off and assist with efforts to roll out its network by the end of the year.</p><p>Details are sketchy, but according to Nyasa Mobile, representatives from both companies have met with government officials to assess the business environment and evaluate data from marketing surveys.</p>', 1, 'konrad-buckle-1024x768.jpeg', '', 'Malawi New Mobile Operator', '2022-08-27 20:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `parteners`
--

CREATE TABLE `parteners` (
  `slug` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `logo` text NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `category` varchar(200) NOT NULL,
  `website` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parteners`
--

INSERT INTO `parteners` (`slug`, `name`, `logo`, `content`, `status`, `datetime`, `date`, `category`, `website`) VALUES
('Bowler-Beverages ', 'Bowler Beverages ', 'beverages.png', '', 1, '2022-08-27 20:46:39', '2022-08-27 20:46:39', 'the-nyasa-group', 'https://www.bowlerbeverage.com/'),
('Chibuku-Products-Limited ', 'Chibuku Products Limited ', 'chibuku_2.png', '', 1, '2022-08-02 10:36:55', '2022-08-02 10:36:55', 'the-nyasa-group', 'https://chibukumw.com'),
('helios-towers', 'Helios Towers', 'helios.png', '#', 1, '2022-08-02 10:28:59', '2022-08-02 10:28:59', 'technical-partners', 'https://www.heliostowers.com/'),
('MAIIC', 'MAIIC', 'maiic.png', '', 1, '2022-08-02 10:38:07', '2022-08-02 10:38:07', 'local-partners', 'https://maiic.mw/'),
('nbs-bank', 'NBS Bank', 'nbs_bank.png', '', 1, '2022-08-02 10:38:07', '2022-08-02 10:38:07', 'local-partners', 'https://nbs.mw/'),
('NICE', 'NICE', 'nice.jpg', '', 1, '2022-08-02 10:38:46', '2022-08-02 10:38:46', 'local-partners', 'https://www.nice.org.uk/'),
('nokia', 'Nokia', 'nokia.png', '', 1, '2022-08-02 10:30:26', '2022-08-02 10:30:26', 'technical-partners', 'https://www.nokia.com/'),
('nyasa-big-bullets', 'Nyasa Big Bullets ', 'nyasa_mobile.png', '#', 1, '2022-08-02 10:35:29', '2022-08-02 10:35:29', 'the-nyasa-group', 'https://nyasabigbullets.com/'),
('Nyasa-Distribution-Company ', 'Nyasa Distribution Company ', 'nyasa_distribution.png', '', 1, '2022-08-02 10:35:29', '2022-08-02 10:35:29', 'the-nyasa-group', 'https://nyasabigbullets.com/'),
('ocl', 'Open Connect Limited ', 'digital_highway.png', '', 1, '2022-08-02 10:30:26', '2022-08-02 10:30:26', 'technical-partners', 'https://www.ocl.mw/'),
('vodafone', 'Vodafone', 'vodafone.png', '#', 1, '2022-08-02 10:28:59', '2022-08-02 10:28:59', 'technical-partners', 'https://www.vodafone.com/');

-- --------------------------------------------------------

--
-- Table structure for table `partners_category`
--

CREATE TABLE `partners_category` (
  `slug` varchar(500) NOT NULL,
  `name` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners_category`
--

INSERT INTO `partners_category` (`slug`, `name`, `date`, `status`) VALUES
('local-partners', 'LOCAL PARTNERS', '2022-08-02 07:43:23', 1),
('technical-partners', 'TECHNICAL PARTNERS', '2022-08-02 07:42:51', 1),
('the-nyasa-group', 'The Nyasa Group', '2022-08-02 07:42:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slug` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `picture` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slug`, `title`, `content`, `picture`, `status`, `date`, `position`) VALUES
('slider_1', 'Welcome to Nyasa Mobile', 'The people’s Network', 'Picture2.jpg', 1, '2022-08-27 20:45:14', 0),
('slider_2', 'Welcome to Nyasa Mobile', 'The People\'s Network', 'slider-5-min.png', 1, '2022-08-27 20:45:19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `slug` varchar(200) NOT NULL,
  `fullname` text NOT NULL,
  `position` text NOT NULL,
  `email` varchar(500) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `picture` text NOT NULL,
  `display_position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`slug`, `fullname`, `position`, `email`, `facebook`, `twitter`, `status`, `date`, `picture`, `display_position`) VALUES
('ceo', 'Jason Bowler', 'CEO', 'ceo@nyasamobile.com', '#', '#', 1, '2022-08-02 09:21:55', 'chairman.jpeg', 1),
('director', 'Konrad Buckle', 'Chairman', '', '#', '#', 1, '2022-08-27 20:46:32', 'ceo.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `fname` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `fname`, `status`, `role`) VALUES
('info@nyasamobile.com', '56c321f513a6f9c8af56cac131bce06b50b40da0', 'Nyasa Mobile', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `parteners`
--
ALTER TABLE `parteners`
  ADD PRIMARY KEY (`slug`),
  ADD KEY `parteners_ibfk_1` (`category`);

--
-- Indexes for table `partners_category`
--
ALTER TABLE `partners_category`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parteners`
--
ALTER TABLE `parteners`
  ADD CONSTRAINT `parteners_ibfk_1` FOREIGN KEY (`category`) REFERENCES `partners_category` (`slug`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
