-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 03:43 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unv_exam_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `country_class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `name`, `region`, `country_class`) VALUES
(1, 'Kiribati\r\n', 'Asia - Pacific\r\n', 'Small Island developing State\r\n'),
(2, 'Angola\r\n', 'Africa\r\n', 'Developing country\r\n'),
(3, 'Kenya', 'Africa', 'Developing country\r\n'),
(4, 'Benin', 'Africa', 'Least developed country\r\n'),
(5, 'Tanzania', 'Africa', 'Least developed country\r\n'),
(6, 'Eswatini', 'Africa', 'Developing country'),
(7, 'Ethiopia', 'Africa', 'Least Developed Country\r\n'),
(8, 'The Gambia', 'Africa', 'Least Developed Country\r\n'),
(9, 'Ghana', 'Africa', 'Developing country'),
(10, 'Nigeria', 'Africa', 'Developing country'),
(11, 'South Africa', 'Africa', 'Developing country'),
(12, 'Tunisia', 'Africa', 'Developing country'),
(13, 'Uganda', 'Africa', 'Least Developed Country\r\n'),
(14, 'Afghanistan', 'Asia-Pacific', 'Least Developed Country\r\n'),
(15, 'Cambodia', 'Asia-Pacific', 'Least Developed Country\r\n'),
(16, 'China', 'Asia-Pacific', 'Developing Country'),
(17, 'India', 'Asia-Pacific', 'Developing country'),
(18, 'Iran', 'Asia-Pacific', 'Developing country'),
(19, 'South Sudan', 'Africa', 'Developing country'),
(20, 'Iraq', 'Asia-Pacific', 'Developing country');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `objectives` varchar(1000) NOT NULL,
  `party_to` varchar(255) NOT NULL,
  `special_trust_fund` int(11) NOT NULL,
  `co_financing` int(11) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `story` varchar(1000) NOT NULL,
  `s_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `title`, `objectives`, `party_to`, `special_trust_fund`, `co_financing`, `duration`, `status`, `story`, `s_id`, `country_id`, `created_at`) VALUES
(4, 'Strengthening Angolaâ€™s National Chemicals and Waste Management Programme by establishing sustainable, integrated, and coherent national structure with emphasis on Private Sector participation', '\"The project will undertake the following measures to strengthen the legal and institutional frameworks for Sound Management of Chemicals:\r\n\r\nEstablishing a National Chemicals and Waste Management Unit;\r\nstrengthening the inter-sectoral coordination and building national capacity for implementation of the MEAs and SAICM;\r\nEstablishing Pilot Private Sector Partnerships and Promote Circular Economy initiatives to strengthen resource mobilization for the implementation of the chemicals and waste management agenda; and\r\nundertaking an awareness raising and education campaign to increase the knowledge and skills of a wide range of stakeholders to increase their participation in sound chemicals and wastes management in Angola.\"\r\n', 'Basel, Stockholm', 500000, 150000, '36', 'Completed', '', 4, 3, '2019-06-23 05:45:35'),
(5, 'Legal and Institutional Strengthening for the Sound Management of Chemicals', '\"The project will undertake the following measures to strengthen the legal and institutional frameworks for Sound Management of Chemicals:\r\n\r\nAnalyse the current situation on chemicals in Benin\r\nImprove national legislative and regulatory frameworks for chemicals and chemical wastes management\r\nDevelop tools for the management of chemicals and wastes (general stockpile, new stockpiles and wastes)\r\nStrengthening the effectiveness of actors\' capacity for sustainable management of chemicals and plan of communication\r\nThe insertion of a subroutine in the National Program for Environmental Management of the Ministry of Environment to support the institutional framework;\r\nEvaluation of project activities are monitored and evaluated.\"\r\n', 'Basel, Rotterdam, Stockholm', 250000, 62000, '36', 'Under Implementation', 'https://www.unenvironment.org/news-and-stories/story/tracking-chemicals-and-reducing-risks-benin\"', 6, 4, '2019-06-23 05:51:59'),
(6, 'Enhancing Ethiopiaâ€™s Institutional Capacity for Sound Management of Hazardous Wastes and POPs Chemicals and Improving reporting Obligation under Basel and Stockholm Conventions', '\"The project will undertake the following measures to strengthen the legal and institutional frameworks for Sound Management of Chemicals:\r\n\r\nEstablish a project management unit to facilitate the sound of management of hazardous waste and POPs\r\nDevelopment and update, as applicable, of policies, strategies, regulatory frameworks and enforcement mechanisms for the implementation and sound management of hazardous waste and POPs.\r\nMainstreaming the sound management of hazardous waste and POPs into relevant sector policies and development planning.\r\nOrganization of capacity building activities including, the development of training modules, awareness raising and training of trainers\r\nFurthermore, a national coordination mechanism of multi sectoral and multi stakeholder cooperation for sound management of hazardous waste will be established to further support the enforcement of the relevant legislations.\"\r\n', ' Basel, Rotterdam, Stockholm', 250000, 550000, '36', 'Under Implementation', '', 1, 7, '2019-06-23 06:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `sdgs`
--

CREATE TABLE `sdgs` (
  `s_id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdgs`
--

INSERT INTO `sdgs` (`s_id`, `name`) VALUES
(1, 'Affordable and Clean Energy\r\n'),
(2, 'No Povert'),
(3, ' Clean Water and Sanitation'),
(4, 'Quality Education'),
(5, 'Good Health and Well-being'),
(6, 'Life on Land'),
(7, 'Reduced Inequality'),
(8, 'Gender Equality');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `FOREIGN_KEY` (`country_id`) USING BTREE,
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `sdgs`
--
ALTER TABLE `sdgs`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sdgs`
--
ALTER TABLE `sdgs`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `sdgs` (`s_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
