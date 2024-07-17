-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql309.infinityfree.com
-- Generation Time: Jul 17, 2024 at 04:18 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_35491861_membermgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` int(11) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `activity_description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `user`, `activity_description`, `created_at`) VALUES
(1, 'jheryk', 'Member Phillip A Fenner added successfully!', '2023-12-04 14:02:02'),
(2, 'jheryk', 'Member Curtis K Moore added successfully!', '2023-12-04 14:02:40'),
(3, 'jheryk', 'Member Helen D Pearce added successfully!', '2023-12-04 14:03:08'),
(4, 'jheryk', 'Member James C Hicks added successfully!', '2023-12-04 14:05:06'),
(5, 'jheryk', 'Member Chris W Roach added successfully!', '2023-12-04 14:06:49'),
(6, 'jheryk', 'Member Ouida T Woodson added successfully!', '2023-12-04 14:07:25'),
(7, 'jheryk', 'Member Joseph K Contreras added successfully!', '2023-12-04 14:09:38'),
(8, 'jheryk', 'Member Daniel L Mejia added successfully!', '2023-12-04 14:13:02'),
(9, 'jheryk', 'Member Angie C Hoyt added successfully!', '2023-12-04 14:13:41'),
(10, 'jheryk', 'Member Brian A Nicholson added successfully!', '2023-12-04 14:14:19'),
(11, 'jheryk', 'Member Louis K Bodine added successfully!', '2023-12-04 14:15:20'),
(12, 'emman', 'Logged-in', '2023-12-04 14:16:02'),
(13, 'jheryk', 'Member Nancy T Poss added successfully!', '2023-12-04 14:16:31'),
(14, 'jheryk', 'Member Debra L Cabral added successfully!', '2023-12-04 14:17:49'),
(15, 'jheryk', 'Member Henry E Reid added successfully!', '2023-12-04 14:18:27'),
(16, 'jheryk', 'Member Jodi G Walters added successfully!', '2023-12-04 14:19:02'),
(17, 'jheryk', 'Member Bradley J Witherington added successfully!', '2023-12-04 14:19:36'),
(18, 'jheryk', 'Member Patrick K Boerger added successfully!', '2023-12-04 14:20:09'),
(19, 'jheryk', 'Member Charlie L Covington added successfully!', '2023-12-04 14:20:47'),
(20, 'emman', 'Member List Report Generated', '2023-12-04 14:20:52'),
(21, 'jheryk', 'Member Paul A Brooks added successfully!', '2023-12-04 14:21:22'),
(22, 'jheryk', 'Member Gwendolyn R Alejandre added successfully!', '2023-12-04 14:21:52'),
(23, 'jheryk', 'Member Celeste J Taylor added successfully!', '2023-12-04 14:22:33'),
(24, 'jheryk', 'Member Brian M Anderson added successfully!', '2023-12-04 14:23:22'),
(25, 'jheryk', 'Member Dorthy J Osborne added successfully!', '2023-12-04 14:24:28'),
(26, 'jheryk', 'Member Laura R Benton added successfully!', '2023-12-04 14:25:05'),
(27, 'jheryk', 'Member Tina K Wilson added successfully!', '2023-12-04 14:25:33'),
(28, 'jheryk', 'Member James A Burnside added successfully!', '2023-12-04 14:26:02'),
(29, 'jheryk', 'Member Bessie A Moss added successfully!', '2023-12-04 14:27:19'),
(30, 'jheryk', 'Member Karla P Nevers added successfully!', '2023-12-04 14:35:35'),
(31, 'jheryk', 'Member Dale R Williams added successfully!', '2023-12-04 14:36:05'),
(32, 'emman', 'Logged-out', '2023-12-04 14:42:04'),
(33, 'emman', 'Logged-in', '2023-12-04 14:43:13'),
(34, 'emman', 'Logged-out', '2023-12-04 14:46:39'),
(35, 'emman', 'Member List Report Generated', '2023-12-04 14:51:03'),
(36, 'emman', 'Audit Trail Report Generated', '2023-12-04 14:51:07'),
(37, 'emman', 'Audit Trail Report Generated', '2023-12-04 14:51:15'),
(38, 'emman', 'Audit Trail Report Generated', '2023-12-04 14:51:24'),
(39, 'emman', 'List of Church Orgs. Report Generated', '2023-12-04 14:59:13'),
(40, 'jheryk', 'Member Bertha T Schwandt added successfully!', '2023-12-04 15:06:50'),
(41, 'jheryk', 'Member Fred J Blair added successfully!', '2023-12-04 15:07:17'),
(42, 'jheryk', 'Member Paul G Gregg added successfully!', '2023-12-04 15:08:02'),
(43, 'jheryk', 'Member Glenda J Ogle added successfully!', '2023-12-04 15:08:22'),
(44, 'jheryk', 'Member Jose P Williams added successfully!', '2023-12-04 15:08:43'),
(45, 'jheryk', 'Member Gaston P Troupe added successfully!', '2023-12-04 15:09:18'),
(46, 'jheryk', 'Member Pierre P McClean added successfully!', '2023-12-04 15:09:46'),
(47, 'jheryk', 'Member Barbara R Muldoon added successfully!', '2023-12-04 15:10:19'),
(48, 'jheryk', 'Member Agnes M Mundy added successfully!', '2023-12-04 15:10:58'),
(49, 'jheryk', 'Member Kevin L Wood added successfully!', '2023-12-04 15:11:28'),
(50, 'jheryk', 'Member Brian S Tibbs added successfully!', '2023-12-04 15:12:01'),
(51, 'jheryk', 'Member Jeffery Y Bowers added successfully!', '2023-12-04 15:12:40'),
(52, 'jheryk', 'Member Greg G Harrold added successfully!', '2023-12-04 15:13:10'),
(53, 'jheryk', 'Member Dolores K Stmartin added successfully!', '2023-12-04 15:13:38'),
(54, 'jheryk', 'Member Elmer S Andrews added successfully!', '2023-12-04 15:14:03'),
(55, 'jheryk', 'Member Emily J Burnette added successfully!', '2023-12-04 15:14:32'),
(56, 'jheryk', 'Member Alan M Bartels added successfully!', '2023-12-04 15:14:53'),
(57, 'jheryk', 'Member Cassie C Winger added successfully!', '2023-12-04 15:15:15'),
(58, 'jheryk', 'Member Mary W Owen added successfully!', '2023-12-04 15:15:39'),
(59, 'jheryk', 'Member Victor S Haynes added successfully!', '2023-12-04 15:16:05'),
(60, 'jheryk', 'Member Coy D Vaughn added successfully!', '2023-12-04 15:16:42'),
(61, 'jheryk', 'Member Brenda C Scipio added successfully!', '2023-12-04 15:17:13'),
(62, 'emman', 'Member List Report Generated', '2023-12-04 15:27:41'),
(63, 'emman', 'Audit Trail Report Generated', '2023-12-04 15:35:05'),
(64, 'emman', 'Audit Trail Report Generated', '2023-12-04 15:36:37'),
(65, 'emman', 'Audit Trail Report Generated', '2023-12-04 15:45:23'),
(66, 'emman', 'Audit Trail Report Generated', '2023-12-04 15:45:42'),
(67, 'emman', 'Audit Trail Report Generated', '2023-12-04 15:51:19'),
(68, 'emman', 'Audit Trail Report Generated', '2023-12-04 15:52:20'),
(69, 'emman', 'Audit Trail Report Generated', '2023-12-04 15:52:31'),
(70, 'emman', 'List of Admin Accounts Report Generated', '2023-12-04 15:52:58'),
(71, 'emman', 'Audit Trail Report Generated', '2023-12-04 15:53:01'),
(72, 'emman', 'Audit Trail Report Generated', '2023-12-04 16:22:07'),
(73, 'emman', 'Member List Report Generated', '2023-12-04 16:26:16'),
(74, 'emman', 'Member List Report Generated', '2023-12-04 16:30:56'),
(75, 'emman', 'List of Church Orgs. Report Generated', '2023-12-04 16:31:13'),
(76, 'emman', 'List of Admin Accounts Report Generated', '2023-12-04 16:31:20'),
(77, 'emman', 'Logged-in', '2023-12-04 16:41:07'),
(78, 'emman', 'Member List Report Generated', '2023-12-04 16:44:29'),
(79, 'emman', 'Member Emmans added successfully!', '2023-12-04 17:32:36'),
(80, 'emman', 'Member Data of Emmanuels updated!', '2023-12-04 17:32:52'),
(81, 'emman', 'Member Data #52 deleted successfully!', '2023-12-04 17:33:19'),
(82, 'emman', 'Logged-out', '2023-12-04 17:36:40'),
(83, 'emman', 'Logged-in', '2023-12-04 17:38:16'),
(84, 'emman', 'Logged-out', '2023-12-04 17:38:28'),
(85, 'emman', 'Logged-in', '2023-12-05 02:46:54'),
(86, 'emman', 'Logged-out', '2023-12-05 02:50:10'),
(87, 'emman', 'Logged-out', '2023-12-05 02:51:38'),
(88, 'emman', 'Logged-out', '2023-12-05 02:52:19'),
(89, 'emman', 'Logged-in', '2023-12-05 02:52:41'),
(90, 'emman', 'Logged-out', '2023-12-05 02:54:06'),
(91, 'emman', 'Logged-in', '2023-12-05 03:18:45'),
(92, 'emman', 'Member List Report Generated', '2023-12-05 03:24:13'),
(93, 'emman', 'Member Data of Phillip A Fenner updated!', '2023-12-05 03:25:25'),
(94, 'emman', 'Member rachel daluyon added successfully!', '2023-12-05 03:41:58'),
(95, 'emman', 'Audit Trail Report Generated', '2023-12-05 03:44:36'),
(96, 'emman', 'Audit Trail Report Generated', '2023-12-05 03:46:01'),
(97, 'emman', 'List of Church Orgs. Report Generated', '2023-12-05 03:59:38'),
(98, 'emman', 'List of Church Orgs. Report Generated', '2023-12-05 03:59:41'),
(99, 'emman', 'List of Church Orgs. Report Generated', '2023-12-05 03:59:41'),
(100, 'emman', 'Member List Report Generated', '2023-12-05 04:14:52'),
(101, 'emman', 'Logged-out', '2023-12-05 06:35:18'),
(102, 'emman', 'Logged-out', '2023-12-05 06:35:36'),
(103, 'emman', 'Logged-in', '2023-12-05 06:37:25'),
(104, 'emman', 'Logged-out', '2023-12-05 06:38:15'),
(105, 'jayson', 'Logged-out', '2023-12-05 07:27:40'),
(106, NULL, 'Logged-out', '2023-12-05 07:27:44'),
(107, 'jayson', 'Logged-out', '2023-12-05 07:44:56'),
(108, 'emman', 'Logged-out', '2023-12-05 07:46:38'),
(109, 'emman', 'Logged-in', '2023-12-05 07:47:00'),
(110, 'emman', 'Member rachel quiogue added successfully!', '2023-12-05 07:48:46'),
(111, 'emman', 'Organization Testing added successfully!', '2023-12-05 07:50:58'),
(112, 'emman', 'Organization #14 updated!', '2023-12-05 07:51:12'),
(113, 'emman', 'Organization #14 deleted successfully!', '2023-12-05 07:51:23'),
(114, 'emman', 'Audit Trail Report Generated', '2023-12-05 07:51:47'),
(115, 'emman', 'Audit Trail Report Generated', '2023-12-05 07:52:11'),
(116, 'emman', 'Audit Trail Report Generated', '2023-12-05 10:37:08'),
(117, 'emman', 'Logged-in', '2023-12-05 16:34:13'),
(118, 'emman', 'Logged-out', '2023-12-05 16:36:30'),
(119, 'emman', 'Logged-out', '2023-12-05 16:37:21'),
(120, 'emman', 'Logged-out', '2023-12-05 16:38:57'),
(121, 'emman', 'Logged-out', '2023-12-05 16:39:08'),
(122, 'emman', 'Logged-out', '2023-12-05 16:39:44'),
(123, 'emman', 'Logged-in', '2023-12-05 16:41:31'),
(124, 'emman', 'Logged-out', '2023-12-05 16:43:58'),
(125, 'emman', 'Logged-out', '2023-12-05 16:44:11'),
(126, 'emman', 'Logged-out', '2023-12-05 16:51:30'),
(127, 'emman', 'Logged-in', '2023-12-05 16:52:07'),
(128, 'emman', 'Logged-in', '2023-12-10 15:12:49'),
(129, 'emman', 'Logged-out', '2023-12-10 15:13:08'),
(130, 'erickson', 'Logged-in', '2023-12-12 10:00:08'),
(131, 'emman', 'Logged-in', '2023-12-13 05:24:50'),
(132, 'emman', 'Member Data of Phillip A Fennerr updated!', '2023-12-13 05:25:07'),
(133, 'emman', 'Member Data of Phillip A Fennerrr updated!', '2023-12-13 05:25:17'),
(134, 'emman', 'Member Data of Phillip A Fennerrrr updated!', '2023-12-13 05:25:29'),
(135, 'emman', 'Logged-in', '2024-02-05 04:46:44'),
(136, 'emman', 'Audit Trail Report Generated', '2024-02-05 04:46:52'),
(137, 'emman', 'Audit Trail Report Generated', '2024-02-05 04:46:54'),
(138, 'emman', 'Audit Trail Report Generated', '2024-02-05 04:46:54'),
(139, 'emman', 'Logged-in', '2024-03-03 20:08:16'),
(140, 'emman', 'Member List Report Generated', '2024-03-03 20:08:23'),
(141, 'emman', 'Member List Report Generated', '2024-03-03 20:10:49'),
(142, 'emman', 'Logged-in', '2024-03-07 03:41:29'),
(143, 'emman', 'Logged-in', '2024-04-11 18:04:06'),
(144, 'emman', 'Logged-in', '2024-05-15 05:46:24'),
(145, 'emman', 'List of Admin Accounts Report Generated', '2024-05-15 05:46:43'),
(146, 'emman', 'Audit Trail Report Generated', '2024-05-15 05:47:18'),
(147, 'emman', 'Audit Trail Report Generated', '2024-05-15 05:47:23'),
(148, 'emman', 'Logged-out', '2024-05-15 05:49:54'),
(149, 'emman', 'Logged-in', '2024-07-17 08:37:31'),
(150, 'emman', 'List of Admin Accounts Report Generated', '2024-07-17 08:37:48'),
(151, 'emman', 'Audit Trail Report Generated', '2024-07-17 08:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `member_list`
--

CREATE TABLE `member_list` (
  `Id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `Organization` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_list`
--

INSERT INTO `member_list` (`Id`, `img`, `Name`, `Email`, `Phone`, `Age`, `Organization`) VALUES
(1, 'image_2023-12-04_220110127.png', 'Phillip A Fennerrrr', 'ollie.graha6@yahoo.com', '09123111523', '28', 'Young Adults'),
(2, 'image_2023-12-04_220214466.png', 'Curtis K Moore', 'pearl_larso2@hotmail.com', '09222131431', '31', 'Adults'),
(3, 'image_2023-12-04_220250212.png', 'Helen D Pearce', 'bradley.kilba@gmail.com', '09114345127', '44', 'Adults'),
(4, 'image_2023-12-04_220433309.png', 'James C Hicks', 'tania_col9@yahoo.com', '09992247860', '25', 'Young Adults'),
(5, 'image_2023-12-04_220621044.png', 'Chris W Roach', 'orval.ric9@yahoo.com', '09912930240', '37', 'Adults'),
(6, 'image_2023-12-04_220705613.png', 'Ouida T Woodson', 'guadalupe19@hotmail.com', '09882910230', '41', 'Adults'),
(7, 'image_2023-12-04_220924034.png', 'Joseph K Contreras', 'tracy_luettg@gmail.com', '09821823912', '44', 'Adults'),
(8, 'image_2023-12-04_221150588.png', 'Daniel L Mejia', 'theron2001@hotmail.com', '09372455113', '39', 'Adults'),
(9, 'image_2023-12-04_221318717.png', 'Angie C Hoyt', 'lupe2009@gmail.com', '09812568490', '42', 'Adults'),
(10, 'image_2023-12-04_221357556.png', 'Brian A Nicholson', 'aimee1974@yahoo.com', '09858342477', '50', 'Adults'),
(11, 'image_2023-12-04_221433548.png', 'Louis K Bodine', 'bonnie_colli@gmail.com', '09328943802', '38', 'Adults'),
(12, 'image_2023-12-04_221550629.png', 'Nancy T Poss', 'melody_hagen@gmail.com', '09231892991', '20', 'Young Adults'),
(13, 'image_2023-12-04_221727042.png', 'Debra L Cabral', 'savannah_wiso@hotmail.com', '09882831839', '16', 'Youth'),
(14, 'image_2023-12-04_221802527.png', 'Henry E Reid', 'mustafa1974@gmail.com', '09963792831', '56', 'Adults'),
(15, 'image_2023-12-04_221837282.png', 'Jodi G Walters', 'gerald_gerla@hotmail.com', '09221859230', '18', 'Young Adults'),
(16, 'image_2023-12-04_221919643.png', 'Bradley J Witherington', 'sarina_lync3@yahoo.com', '09178238492', '31', 'Adults'),
(17, 'image_2023-12-04_221946716.png', 'Patrick K Boerger', 'kaleigh_dietri@yahoo.com', '09044685345', '30', 'Adults'),
(18, 'image_2023-12-04_222024929.png', 'Charlie L Covington', 'lambert_christians@yahoo.com', '09872919232', '27', 'Adults'),
(19, 'image_2023-12-04_222102640.png', 'Paul A Brooks', 'gregorio.fra@gmail.com', '09222189220', '32', 'Adults'),
(20, 'image_2023-12-04_222134653.png', 'Gwendolyn R Alejandre', 'kolby.rempe3@gmail.com', '09122893021', '12', 'Childrens'),
(21, 'image_2023-12-04_222209308.png', 'Celeste J Taylor', 'cheyanne_heidenrei@hotmail.com', '09289942831', '61', 'Adults'),
(22, 'image_2023-12-04_222252653.png', 'Brian M Anderson', 'tiana.town0@gmail.com', '09123892941', '24', 'Young Adults'),
(23, 'image_2023-12-04_222409914.png', 'Dorthy J Osborne', 'nat1994@gmail.com', '09875023091', '26', 'Adults'),
(24, 'image_2023-12-04_222453174.png', 'Laura R Benton', 'johnathan2011@yahoo.com', '09822913023', '28', 'Adults'),
(25, 'image_2023-12-04_222519349.png', 'Tina K Wilson', 'trevion_ort@yahoo.com', '09823921023', '31', 'Adults'),
(26, 'image_2023-12-04_222543109.png', 'James A Burnside', 'marge_powlows@gmail.com', '09123773109', '44', 'Adults'),
(27, 'image_2023-12-04_222655698.png', 'Bessie A Moss', 'burnice.strac@yahoo.com', '09429301942', '19', 'Young Adults'),
(28, 'image_2023-12-04_223512324.png', 'Karla P Nevers', 'haie_carte1@hotmail.com', '09923091892', '37', 'Adults'),
(29, 'image_2023-12-04_223549175.png', 'Dale R Williams', 'lloyd1988@hotmail.com', '09128983123', '33', 'Adults'),
(30, 'image_2023-12-04_230630892.png', 'Bertha T Schwandt', 'dorcas2000@hotmail.com', '09137783981', '29', 'Adults'),
(31, 'image_2023-12-04_230702446.png', 'Fred J Blair', 'victoria.runolfsdott@yahoo.com', '09781923012', '29', 'Adults'),
(32, 'image_2023-12-04_230740519.png', 'Paul G Gregg', 'lue1988@hotmail.com', '09122981992', '17', 'Youth'),
(33, 'image_2023-12-04_230810814.png', 'Glenda J Ogle', 'adrain1975@yahoo.com', '09128231292', '47', 'Adults'),
(34, 'image_2023-12-04_230829450.png', 'Jose P Williams', 'rosalinda1996@gmail.com', '09118231902', '25', 'Adults'),
(35, 'image_2023-12-04_230905340.png', 'Gaston P Troupe', 'augustus_reing@hotmail.com', '09123123413', '35', 'Adults'),
(36, 'image_2023-12-04_230928709.png', 'Pierre P McClean', 'jaylon1970@yahoo.com', '09901290121', '29', 'Adults'),
(37, 'image_2023-12-04_230958526.png', 'Barbara R Muldoon', 'kelly2013@yahoo.com', '09128312901', '30', 'Adults'),
(38, 'image_2023-12-04_231028591.png', 'Agnes M Mundy', 'mariela.lem@hotmail.com', '09102131023', '23', 'Young Adults'),
(39, 'image_2023-12-04_231106994.png', 'Kevin L Wood', 'edgardo_kautz@hotmail.com', '09192931201', '33', 'Adults'),
(40, 'image_2023-12-04_231145233.png', 'Brian S Tibbs', 'louie_harri8@yahoo.com', '09120230115', '29', 'Adults'),
(41, 'image_2023-12-04_231219116.png', 'Jeffery Y Bowers', 'lonie_kaulk1@hotmail.com', '09986720321', '18', 'Youth'),
(42, 'image_2023-12-04_231253708.png', 'Greg G Harrold', 'anthony_dickins@gmail.com', '09110230123', '34', 'Adults'),
(43, 'image_2023-12-04_231319943.png', 'Dolores K Stmartin', 'billie2007@hotmail.com', '09122331901', '14', 'Youth'),
(44, 'image_2023-12-04_231345376.png', 'Elmer S Andrews', 'drew.baumba@yahoo.com', '09182901031', '22', 'Young Adults'),
(45, 'image_2023-12-04_231414168.png', 'Emily J Burnette', 'arjun_kertzma@gmail.com', '09122101231', '21', 'Young Adults'),
(46, 'image_2023-12-04_231439268.png', 'Alan M Bartels', 'eulalia1973@hotmail.com', '09992010310', '31', 'Adults'),
(47, 'image_2023-12-04_231500583.png', 'Cassie C Winger', 'sven_doyl8@gmail.com', '09002330212', '31', 'Adults'),
(48, 'image_2023-12-04_231525022.png', 'Mary W Owen', 'audreanne1979@gmail.com', '09992391203', '17', 'Youth'),
(49, 'image_2023-12-04_231549764.png', 'Victor S Haynes', 'jazmyn2000@yahoo.com', '09123012391', '18', 'Young Adults'),
(50, 'image_2023-12-04_231617214.png', 'Coy D Vaughn', 'favian.jas7@hotmail.com', '09182391021', '45', 'Adults'),
(51, 'image_2023-12-04_231655178.png', 'Brenda C Scipio', 'caitlyn.hamm@yahoo.com', '09102301352', '61', 'Adults'),
(54, 'download.jfif', 'rachel quiogue', 'rache@gmail.com', '09294162224', '23', 'Youth'),
(53, 'download.webp', 'rachel daluyon', 'rachel_69@gmail.com', '09823912988', '23', 'Young Adults');

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`Id`, `Name`) VALUES
(1, 'Youth'),
(6, 'Adults'),
(5, 'Young Adults'),
(7, 'Childrens');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `otp` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Password`, `otp`) VALUES
(1, 'emman', 'emmanuelbarrameda1@gmail.com', 'password', '410799'),
(2, 'erickson', 'ericksonmartinez08@gmail.com', 'password', '722801'),
(5, 'jheryk', 'jherykalboleras02@gmail.com', 'jheryk', '462862'),
(6, 'jayson', 'jayson.daluyon@urs.edu.ph', 'password', '883954');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_list`
--
ALTER TABLE `member_list`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `unique_name` (`Name`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `unique_name` (`Name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `unique_name` (`Username`),
  ADD UNIQUE KEY `unique_email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `member_list`
--
ALTER TABLE `member_list`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
