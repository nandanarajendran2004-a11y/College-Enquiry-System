-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2025 at 11:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enquiry`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admenq`
--

CREATE TABLE `tbl_admenq` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `enquiry` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admenq`
--

INSERT INTO `tbl_admenq` (`id`, `name`, `place`, `phone`, `enquiry`, `answer`) VALUES
(1, 'Yahu Rajesh', 'Malappuram', 2147483647, 'What are the basic eligibility criteria for admission?', 'You need to pass 12th standard and need to have above 50% mark'),
(2, 'Aswin Menon', 'Kottayam', 2147483647, 'What are the documents needed for the admission process?', 'YOUR 10TH AND 12TH CERTIFICATES');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `userid` varchar(50) NOT NULL,
  `pwd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`userid`, `pwd`) VALUES
('MeeraNair', 'Meera@24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bca`
--

CREATE TABLE `tbl_bca` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adm_no` varchar(10) NOT NULL,
  `enquiry` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_bca`
--

INSERT INTO `tbl_bca` (`id`, `name`, `adm_no`, `enquiry`, `answer`) VALUES
(1, 'Rynu Reji', 'A-3139', 'How does the internal marking system works?', 'The mark is out of 20.5 mark for internal exam,5 for model exam.5for assignment and 5 for attendance'),
(2, 'Nandana R', 'A-3132', 'How many assignments should I submit to get 5 marks as internal mark?', ''),
(7, 'Rynu Reji', 'A-3139', 'what are the core subjects of fifth sem', 'Computer Network,IT,Java,Miniproject');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bcom`
--

CREATE TABLE `tbl_bcom` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adm_no` varchar(10) NOT NULL,
  `enquiry` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_bcom`
--

INSERT INTO `tbl_bcom` (`id`, `name`, `adm_no`, `enquiry`, `answer`) VALUES
(1, 'Gokul B', 'A-4353', 'What are the career path after BCOM?', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bsw`
--

CREATE TABLE `tbl_bsw` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adm_no` varchar(10) NOT NULL,
  `enquiry` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_bsw`
--

INSERT INTO `tbl_bsw` (`id`, `name`, `adm_no`, `enquiry`, `answer`) VALUES
(1, 'Anju Manoj', 'A-4398', 'What are the career path after completing BSW?', 'there are many paths you can follow.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(10) NOT NULL,
  `response` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `response`) VALUES
(1, 'yes'),
(2, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_general`
--

CREATE TABLE `tbl_general` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `enquiry` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_general`
--

INSERT INTO `tbl_general` (`id`, `name`, `place`, `phone`, `enquiry`, `answer`) VALUES
(1, 'Maria Thomas', 'Kottayam', 2147483647, 'What academic programs or courses the college provide?', 'College provide courses like BCA,BOCM,BSW etc....for more details please visit college website'),
(2, 'Aadhi Sudhi', 'Pala', 2147483647, 'What facilities and resources are available on campus?', ''),
(3, 'Nandana', 'Pala', 2147483647, 'what are the services provided in college campus?', ''),
(4, 'meera', 'Pala', 2147483647, 'ctyftyfytf', 'jfhf4i');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hodid`
--

CREATE TABLE `tbl_hodid` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `log_id` int(50) NOT NULL,
  `dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_hodid`
--

INSERT INTO `tbl_hodid` (`id`, `name`, `log_id`, `dept`) VALUES
(1, 'Binu M B', 137561, 'Computer Science'),
(2, 'Elsa Mary Scaria', 457623, 'Commerce'),
(3, 'Remya Raghavan', 567894, 'Mathematics'),
(4, 'Deepa Babu', 987432, 'Social Work');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hodprofile`
--

CREATE TABLE `tbl_hodprofile` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `tr_id` int(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `ph` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_hodprofile`
--

INSERT INTO `tbl_hodprofile` (`id`, `name`, `dept`, `tr_id`, `mail`, `ph`) VALUES
(1, 'Binu M B', 'Computer Science', 345261, 'binumb245@gmail.com', '8234561298'),
(2, 'Elsa Mary Scaria', 'Commerce', 345277, 'elsamary@gmail.com', '9987564312'),
(3, 'Deepa Babu', 'Social Work', 345287, 'deepababu@gmail.com', '8947483646'),
(4, 'Remya Raghavan', 'Department of Mathematics', 345297, 'remyaraghavan@gmail.com', '9867345211');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_math`
--

CREATE TABLE `tbl_math` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adm_no` varchar(10) NOT NULL,
  `enquiry` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_math`
--

INSERT INTO `tbl_math` (`id`, `name`, `adm_no`, `enquiry`, `answer`) VALUES
(1, 'Aadav Raj', 'A-1234', 'When will the semester break will start?', 'On march 30'),
(2, 'Aadav Raj', 'A-1234', 'starting date of semester 2', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(10) NOT NULL,
  `news` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `news`, `time`) VALUES
(1, 'Future World Summit  0n 13-12-24', '2024-12-28 07:31:14'),
(2, 'Green club exhibition', '2024-12-28 07:31:14'),
(4, 'Arts day on 2-1-25', '2024-12-28 07:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pg`
--

CREATE TABLE `tbl_pg` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `hod` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ph` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pg`
--

INSERT INTO `tbl_pg` (`id`, `title`, `hod`, `email`, `ph`) VALUES
(1, 'MSW', 'Mrs. Deepa Babu', 'deepababu@gmail.com', '2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(10) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adm_no` varchar(10) NOT NULL,
  `dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `userid`, `pwd`, `name`, `adm_no`, `dept`) VALUES
(1, 'aadav@gmail.com', 'aadav@32', 'Aadav Raj', 'A-1234', 'Mathematics'),
(2, 'anju@gmail.com', 'anju@54', 'Anju Manoj', 'A-4398', 'Social Work'),
(3, 'ann@gmail.com', 'ann@987', 'Ann Joby', 'A-4123', 'Commerce'),
(4, 'devan23@gmail.com', 'devab@007', 'Devan B', 'A-3234', 'Social Work'),
(5, 'gokul@gamil.com', 'gokulb32@2', 'Gokul B', 'A-4353', 'Commerce'),
(6, 'jeena@gamil.com', 'jeena@44', 'Jenna J', 'A-3103', 'Computer Science'),
(7, 'jithin@gamil.com', 'jithin@08', 'Jithin James', 'A-3108', 'Computer Science'),
(8, 'joe22@gamil.com', 'thomas@38', 'Joe Thomas', 'A-3133', 'Social Work'),
(9, 'joyal@gmail.com', 'joyal@24', 'Joyal Jhon', 'A-1314', 'Mathematics'),
(10, 'justin@gamil.com', 'justin@05', 'Justin John', 'A-4247', 'Commerce'),
(11, 'lino@gmail.com', 'don@432', 'Lino Don', 'A-4354', 'Commerce'),
(12, 'megha34@gmail.com', 'megha@4002', 'Megha Mary', 'A-4532', 'Commerce'),
(13, 'miya21@gmail.com', 'miya@2003', 'Miya George', 'A-1256', 'Mathematics'),
(14, 'nandana@gamil.com', 'nandana@04', 'Nandana R', 'A-3132', 'Computer Science'),
(15, 'navi99@gmail.com', 'navi@23', 'Navi S', 'A-3255', 'Social Work'),
(16, 'neha56@gmail.com', 'baluneha@15', 'Neha Balu', 'A-1367', 'Mathematics'),
(17, 'rynu@gmail.com', 'rynu@39', 'Rynu Reji', 'A-3139', 'Computer Science'),
(18, 'swetha@gmail.com', 'swetha@33', 'Swetha Biju', 'A-3151', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ug`
--

CREATE TABLE `tbl_ug` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `hod` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ph` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_ug`
--

INSERT INTO `tbl_ug` (`id`, `title`, `hod`, `email`, `ph`) VALUES
(1, 'BCA Honours (AICTE Approved)', 'Mr. Binu M B', 'binumb245@gmail.com', '8234561298'),
(3, 'BCom Honours', 'Mrs. Elsa Mary Scaria', 'elsamary@gmail.com', '9987564312'),
(4, 'BSW Honours', 'Mrs. Deepa Babu', 'deepababu@gmail.com', '8947483646'),
(5, 'Bsc Mathematics', 'Remya Raghavan', 'remyaraghavan@gmail.com', '9867345211');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admenq`
--
ALTER TABLE `tbl_admenq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`pwd`);

--
-- Indexes for table `tbl_bca`
--
ALTER TABLE `tbl_bca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bcom`
--
ALTER TABLE `tbl_bcom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bsw`
--
ALTER TABLE `tbl_bsw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_general`
--
ALTER TABLE `tbl_general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hodid`
--
ALTER TABLE `tbl_hodid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hodprofile`
--
ALTER TABLE `tbl_hodprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_math`
--
ALTER TABLE `tbl_math`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pg`
--
ALTER TABLE `tbl_pg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ug`
--
ALTER TABLE `tbl_ug`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admenq`
--
ALTER TABLE `tbl_admenq`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_bca`
--
ALTER TABLE `tbl_bca`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_bcom`
--
ALTER TABLE `tbl_bcom`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_bsw`
--
ALTER TABLE `tbl_bsw`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_general`
--
ALTER TABLE `tbl_general`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_hodid`
--
ALTER TABLE `tbl_hodid`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_hodprofile`
--
ALTER TABLE `tbl_hodprofile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_math`
--
ALTER TABLE `tbl_math`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pg`
--
ALTER TABLE `tbl_pg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_ug`
--
ALTER TABLE `tbl_ug`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
