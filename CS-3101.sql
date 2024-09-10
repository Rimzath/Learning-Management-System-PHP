

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



--
-- Database: `Learning-management-system-UOC`
--

-- --------------------------------------------------------

--
-- Table structure for table `allotment`
--

CREATE TABLE `allotment` (
  `teacherid` int(11) NOT NULL,
  `yearid` int(11) NOT NULL,
  `departmentid` int(11) NOT NULL,
  `sectionid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allotment`
--

INSERT INTO `allotment` (`teacherid`, `yearid`, `departmentid`, `sectionid`, `subjectid`) VALUES
(1000001, 3, 2, 1, 201),
(1000002, 2, 1, 2, 101),
(1000003, 4, 2, 1, 202),
(2000001, 2, 1, 2, 103),
(2000002, 2, 1, 2, 102),
(3000001, 1, 3, 2, 302),
(3000002, 1, 3, 2, 301);

-- --------------------------------------------------------



--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(1, 'Computer Engineering'),
(2, 'Data Science'),
(3, 'Information Technology');



-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `genderid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`genderid`, `name`) VALUES
(202, 'Female'),
(201, 'Male'),
(203, 'Other');

-- --------------------------------------------------------



--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `name`) VALUES
(1, 'Section A'),
(2, 'Section B');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `departmentid` int(11) NOT NULL,
  `yearid` int(11) NOT NULL,
  `sectionid` int(11) NOT NULL,
  `rollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `departmentid`, `yearid`, `sectionid`, `rollno`) VALUES
(1020201, 1, 2, 2, 1),
(1020202, 1, 2, 2, 2),
(1020203, 1, 2, 2, 3),
(1020204, 1, 2, 2, 4),
(2030101, 2, 3, 1, 1),
(2040101, 2, 4, 1, 1),
(3010201, 3, 1, 2, 1),
(3010202, 3, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `departmentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `departmentid`) VALUES
(101, 'Database management system', 1),
(102, 'Data Communication', 1),
(103, 'Object Oriented Programing', 1),
(201, 'Computer Networking', 2),
(202, 'Neural Networking', 2),
(301, 'Information Technology', 3),
(302, 'Software Engineering', 3);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `departmentid` int(11) NOT NULL,
  `qualification` text DEFAULT NULL,
  `experience` text DEFAULT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `departmentid`, `qualification`, `experience`, `salary`) VALUES
(1000001, 1, 'NULL', 'NULL', 30000),
(1000002, 1, 'NULL', 'NULL', 131231),
(1000003, 1, 'NULL', 'NULL', 200000),
(2000001, 2, 'NULL', 'NULL', 40000),
(2000002, 2, 'NULL', 'NULL', 20000),
(3000001, 3, 'NULL', 'NULL', 40000),
(3000002, 3, 'NULL', 'NULL', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `phone` int(10) NOT NULL,
  `genderid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_type`, `firstname`, `lastname`, `email`, `password`, `address`, `city`, `country`, `phone`, `genderid`) VALUES
(1000001, 'teacher', 'Aarav', 'Patel', 'Aarav@teacher.com', '123', 'NULL', 'NULL', 'NULL', 12, 201),
(1000002, 'teacher', 'Riya', 'Sharma', 'riya@teacher.com', '123', 'NULL', 'NULL', 'NULL', 1231231231, 202),
(1000003, 'teacher', 'kabir', 'desai', 'kabir@teacher.com', '123', 'NULL', 'NULL', 'NULL', 1231231231, 201),
(1020201, 'student', 'Sarvesh', 'Pidurkar', 'sarvesh@admin.com', '123', 'wardha', 'Nagpur', 'Maharashtra', 1231231231, 201),
(1020202, 'student', 'tejas', 'thawkar', 'tejas@student.com', '123', 'NULL', 'NULL', 'NULL', 1231231231, 201),
(1020203, 'student', 'Mohit', 'Raut', 'mohit@student.com', '123', 'NULL', 'NULL', 'NULL', 123123123, 201),
(1020204, 'student', 'Anika', 'Reddy', 'anika@student.com', '123', 'NULL', 'NULL', 'NULL', 123123123, 202),
(2000001, 'teacher', 'ishita ', 'Gupta', 'ishita@gmail.com', '123', 'NULL', 'NULL', 'NULL', 1231231, 202),
(2000002, 'teacher', 'Arjun', 'singh', 'arjun@teacher.com', '123', 'NULL', 'NULL', 'NULL', 12312312, 201),
(2030101, 'student', 'Dev', 'Sharma', 'dev@student.com', '123', 'NULL', 'NULL', 'NULL', 12323232, 201),
(2040101, 'student', 'Krish', 'Kapoor', 'Krish@student.com', '1231', 'NULL', 'NULL', 'NULL', 232, 201),
(3000001, 'teacher', 'Aanya', 'Joshi', 'Aanya@teacher.com', '123', 'NULL', 'NULL', 'NULL', 1231232, 202),
(3000002, 'teacher', 'Advait', 'Shah', 'Advait@teacher.com', '123', 'NULL', 'NULL', 'NULL', 123123, 201),
(3010201, 'student', 'Esha ', 'Joshi', 'Joshi@student.com', '123', 'NULL', 'NULL', 'NULL', 12312333, 202),
(3010202, 'student', 'Mohan', 'Rana', 'Mohan@student.com', '123', 'NULL', 'NULL', 'NULL', 1232323, 201),
(41470001, 'admin', 'saharsh', 'wadekar', 'admin@admin.com', '123', NULL, NULL, NULL, 892545345, 201),
(41470002, 'admin', 'Sahil', 'Tiwaskar', 'sahil@admin.com', '123', 'NULL', 'NULL', 'NULL', 1234567890, 201);

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` int(11) NOT NULL,
  `year` text NOT NULL,
  `sem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `year`, `sem`) VALUES
(1, '1st year', 'SEMESTER - 1'),
(2, '2nd year', 'SEMESTER - 2'),
(3, '3rd year', 'SEMESTER - 3'),
(4, '4th year', 'SEMESTER - 4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allotment`
--
ALTER TABLE `allotment`
  ADD UNIQUE KEY `teacherid` (`teacherid`,`yearid`,`departmentid`,`sectionid`,`subjectid`);



--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);


--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`genderid`),
  ADD UNIQUE KEY `name` (`name`);



--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `years` (`year`) USING HASH;

