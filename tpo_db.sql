-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 12:40 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `email`, `password`) VALUES
(1, 'vr@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `ID` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `Company_Name` varchar(100) NOT NULL,
  `MD_Name` varchar(70) NOT NULL,
  `Established_In` date NOT NULL,
  `Address` varchar(400) NOT NULL,
  `Work_Information` varchar(600) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`ID`, `image`, `Company_Name`, `MD_Name`, `Established_In`, `Address`, `Work_Information`, `Email`, `Contact`, `uname`, `pass`) VALUES
(12, 'uploadimg/1_company.png', 'Google', 'Sundar pichai', '1989-12-09', 'USA', 'Product based', 'google@gmail.com', 9875642345, 'Google@gmail.com', '123'),
(13, 'uploadimg/13_company.png', 'Microsoft', 'Satya nadela', '1990-10-09', 'USA', 'Product based', 'microsoft@gmail.com', 345678954, 'microsoft@gmail.com', '456'),
(14, 'uploadimg/14_company.png', 'Mahindra', 'dgfhgjh', '7724-06-08', 'fghj', 'dfghj', 'hdgfjsg@gmail.com', 9876543456, 'a@gmail.com', '890'),
(15, 'uploadimg/15_company.png', 'Bharat Forge', 'Jay Patil', '1989-06-06', 'Hyderabad', 'Machinery, instruments', 'bharat@gmail.com', 8374658374, 'bharat@gmail.com', '999');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `ID` int(11) NOT NULL,
  `Dept_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`ID`, `Dept_name`) VALUES
(1, 'CO'),
(2, 'Mechanical Engg'),
(3, 'Civil Engg'),
(7, 'Information And Technology Eng'),
(8, 'cse'),
(9, 'Chemical Engg'),
(10, 'Electronics Engg'),
(11, 'Electrical Engg');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `ID` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `DEP_ID` int(5) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Address` varchar(400) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`ID`, `image`, `Name`, `Mobile`, `DEP_ID`, `Email`, `Address`, `Username`, `Password`) VALUES
(7, 'uploadimg/7_hod.png', 'Prof. Sakhare', 76546789, 1, 'chate@gmail.com', 'jj', 'Shree', '87236762'),
(9, 'uploadimg/8_hod.png', 'Prof. Chate S.M', 8888888, 3, 'chate@gmail.com', 'h', 'Shree', '87236762');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `ID` int(11) NOT NULL,
  `department` int(5) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `COM_ID` int(11) NOT NULL,
  `POST1` varchar(100) NOT NULL,
  `START_DATE` date NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`ID`, `department`, `Description`, `COM_ID`, `POST1`, `START_DATE`, `salary`) VALUES
(1, 2, 'To enhance the employability of our students in the leading domestic and global organizations and provide them the best career opportunity to become successful corporate leaders and entrepreneurs in the society', 14, 'Clerk', '0000-00-00', '10000 per month'),
(2, 3, 'To enhance the employability of our students in the leading domestic and global organizations and provide them the best career opportunity to become successful corporate leaders and entrepreneurs in the society', 14, 'Manager', '2023-12-13', '5 lack annual'),
(3, 8, 'To enhance the employability of our students in the leading domestic and global organizations and provide them the best career opportunity to become successful corporate leaders and entrepreneurs in the society', 12, 'Programmer', '0000-00-00', '5 lack annual'),
(4, 1, 'To enhance the employability of our students in the leading domestic and global organizations and provide them the best career opportunity to become successful corporate leaders and entrepreneurs in the society', 12, 'Deasigner', '0000-00-00', '5 lack annual'),
(5, 3, 'To enhance the employability of our students in the leading domestic and global organizations and provide them the best career opportunity to become successful corporate leaders and entrepreneurs in the society', 12, 'Rec', '0000-00-00', '5 lack annual'),
(6, 1, 'To enhance the employability of our students in the leading domestic and global organizations and provide them the best career opportunity to become successful corporate leaders and entrepreneurs in the society', 12, 'PROGRAMMER', '2023-12-05', '5 lack annual'),
(7, 3, 'To enhance the employability of our students in the leading domestic and global organizations and provide them the best career opportunity to become successful corporate leaders and entrepreneurs in the society', 12, 'CIVIL MANAGEr', '2023-12-15', '5 lack annual'),
(8, 1, 'gg satga asfat gg satga asfatgg satga asfatgg satga asfatgg satga asfatgg satga asfatgg satga asfatgg satga asfatgg satga asfatgg satga asfat', 12, 'Tester', '2023-02-01', '5000 per month'),
(9, 8, 'gg satga asfat gg satga asfatgg satga asfatgg satga asfatgg satga asfatgg satga asfatgg satga asfatgg satga asfatgg satga asfatgg satga asfat', 12, 'Tester', '2023-01-01', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `ID` int(11) NOT NULL,
  `DATE` varchar(100) NOT NULL,
  `STU_ID` int(11) NOT NULL,
  `JOB_ID` int(11) NOT NULL,
  `STATUS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`ID`, `DATE`, `STU_ID`, `JOB_ID`, `STATUS`) VALUES
(1, '2023-12-02 16:25:11', 3, 7, '0'),
(2, '2023-12-02 16:26:35', 10, 5, '0'),
(3, '2023-12-02 16:26:42', 10, 7, '0'),
(4, '2023-12-02 16:32:17', 7, 3, '0'),
(5, '2023-12-02 17:03:07', 4, 8, '0');

-- --------------------------------------------------------

--
-- Table structure for table `job_steps`
--

CREATE TABLE `job_steps` (
  `ID` int(11) NOT NULL,
  `steps` varchar(700) NOT NULL,
  `COM_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_steps`
--

INSERT INTO `job_steps` (`ID`, `steps`, `COM_ID`) VALUES
(3, 'ksxjkcdkvfgbknh', 14),
(5, 'rrr', 12),
(6, 'eddfgh', 12),
(7, 'mahindra s2', 14),
(8, 'mahindra s3', 14);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `image` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `PRN` bigint(20) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `DEP_ID` int(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `image`, `Name`, `PRN`, `Mobile`, `Address`, `Email`, `DEP_ID`, `Gender`, `Dob`) VALUES
(3, 'uploadimg/3_stu.png', 'Ranbir malhotra', 34567897654, 89746345, 'pune', 'ranbir@gmail.com', 3, 'male', '1991-02-03'),
(4, 'uploadimg/4_stu.png', 'Sonali Panchal', 676767776546, 55666776, 'pune', 'sona@gmail.com', 1, 'female', '2023-12-19'),
(5, 'uploadimg/5_stu.png', 'Priya Swami', 846573645474, 8765456789, 'Mumbai', 'priya@gmail.com', 7, 'female', '2002-06-04'),
(6, 'uploadimg/6_stu.png', 'Ram Yadav', 7465836476445, 8574657364, 'Latur', 'ram@gmail.com', 7, 'male', '2002-01-29'),
(7, 'uploadimg/7_stu.png', 'Riva Arora', 93746584474, 83263426362, 'Udagir', 'riva@gmail.com', 8, 'female', '1999-06-16'),
(8, 'uploadimg/8_stu.png', 'Jiya shankar', 363573654726, 863245656, 'Kolhapur', 'jiya@gmail.com', 1, 'female', '2002-10-02'),
(9, 'uploadimg/9_stu.png', 'jay raje', 9735863754352, 9367362765, 'Udagir', 'jay@gmail.com', 11, 'male', '2001-02-02'),
(10, 'uploadimg/10_stu.png', 'mahi patil', 87643572356, 6357834665, 'Pune', 'mahi@gmail.com', 3, 'female', '2002-02-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `job_steps`
--
ALTER TABLE `job_steps`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `job_steps`
--
ALTER TABLE `job_steps`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
