
--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_manage`
--

CREATE TABLE `attendance_manage` (
  `id` int(11) NOT NULL,
  `student_id` varchar(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  `remarks` varchar(250) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_manage`
--

INSERT INTO `attendance_manage` (`id`, `student_id`, `status`, `remarks`, `date`, `created_at`) VALUES
(2, '3', 'Present', 'demo example', '2019-08-24', '2019-08-16 07:37:01'),
(3, '3', 'Apsent', 'fddgdfg', '2019-08-24', '2019-08-17 11:28:05'),
(4, '3', 'Present', 'fg', '2019-08-23', '2019-08-20 08:05:14'),
(5, '4', 'Apsent', 'dd', '2019-12-31', '2019-08-20 08:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`) VALUES
(2, 'Middle1', 1),
(5, 'tets', 0);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `cat` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `cat`, `status`) VALUES
(1, '2nd', 'Middle1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `duration` varchar(250) DEFAULT NULL,
  `fees` varchar(250) DEFAULT NULL,
  `stared` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `duration`, `fees`, `stared`, `status`) VALUES
(1, 'Demo', '5 Month', '5000', '10/07/2019', 0),
(2, 'test', 'ed', 'dwd', 'sd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `start_date` varchar(250) DEFAULT NULL,
  `category` varchar(250) DEFAULT NULL,
  `class` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `title`, `start_date`, `category`, `class`, `status`, `created_at`) VALUES
(1, 'Demo Exam 1', '2019-12-31', 'Middle1', '2nd', 1, '2019-08-20 08:50:13'),
(2, 'test', '2019-12-31', 'Middle1', '2nd', 1, '2019-08-27 10:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `exam_time_table`
--

CREATE TABLE `exam_time_table` (
  `id` int(11) NOT NULL,
  `exam_id` varchar(250) DEFAULT NULL,
  `time_table_file` varchar(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_time_table`
--

INSERT INTO `exam_time_table` (`id`, `exam_id`, `time_table_file`, `status`, `created_at`) VALUES
(1, 'Demo Exam 1', 'e6375cabef7d2f20933cdee2b006b77d.png', '1', '2019-08-24 14:36:14');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `student_id` varchar(250) DEFAULT NULL,
  `exam_name` varchar(250) DEFAULT NULL,
  `result` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `student_id`, `exam_name`, `result`, `created_at`) VALUES
(3, '3', 'Demo Exam 1', 'A++', '2019-09-14 11:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `fname` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile_no` varchar(250) DEFAULT NULL,
  `dob` varchar(250) DEFAULT NULL,
  `join_date` varchar(250) DEFAULT NULL,
  `exp` varchar(250) DEFAULT NULL,
  `payment` varchar(250) DEFAULT NULL,
  `staff_other_information` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `fname` varchar(250) DEFAULT NULL,
  `category` varchar(250) DEFAULT NULL,
  `class` varchar(250) DEFAULT NULL,
  `dob` varchar(250) DEFAULT NULL,
  `join_date` int(11) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 2,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `fname`, `category`, `class`, `dob`, `join_date`, `password`, `type`, `status`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e', 1, 1, '2019-09-10 16:05:54'),
(3, 'Deependra122', 'deependrabaghel455@gmail.com', 'a', 'Middle1', '2nd', '2019-12-31', 2019, 'e10adc3949ba59abbe56e057f20f883e', 2, 0, '2019-07-20 04:51:36'),
(4, 'ds test', 'ds@gmail.com', 'ds', 'Middle1', '2nd', '2019-12-31', 2019, 'e10adc3949ba59abbe56e057f20f883e', 2, 1, '2019-08-20 08:13:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_manage`
--
ALTER TABLE `attendance_manage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_time_table`
--
ALTER TABLE `exam_time_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_manage`
--
ALTER TABLE `attendance_manage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exam_time_table`
--
ALTER TABLE `exam_time_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
