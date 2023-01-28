-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 07:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `admin_id` varchar(20) NOT NULL,
  `pro_pic` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `gender`, `password`, `email`, `admin_id`, `pro_pic`) VALUES
('lesha', 'female', 'lesha123', 'keerthi1@gmail.com', 'A001', 'a.jpg'),
('win', 'female', '123', 'win123@gmail.com', 'A002', 'a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `boys_hostel`
--

CREATE TABLE `boys_hostel` (
  `room_no` int(50) NOT NULL,
  `floor` int(4) DEFAULT NULL,
  `student_id` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boys_hostel`
--

INSERT INTO `boys_hostel` (`room_no`, `floor`, `student_id`) VALUES
(105, 1, 'TG567'),
(101, 1, 'TG402'),
(101, 1, 'TG003'),
(101, 1, 'TG386'),
(101, 1, 'TG410'),
(203, 2, 'TG399');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` varchar(5) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `question`, `answer`) VALUES
('1', 'hi', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chat_id` int(11) NOT NULL,
  `sender_id` varchar(50) DEFAULT NULL,
  `receiver_id` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `chat` varchar(1024) DEFAULT NULL,
  `Status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`chat_id`, `sender_id`, `receiver_id`, `date`, `time`, `chat`, `Status`) VALUES
(1, 'D001', 'dean', '2022-08-22', '02:06:57', 'Hi', 0),
(2, 'D001', 'dean', '2022-08-22', '02:06:57', 'Hi', 0),
(3, 'D001', 'dean', '2022-08-22', '02:06:57', 'Hi', 0),
(4, 'D001', 'dean', '2022-08-22', '02:06:57', 'Hi', 0),
(5, 'wB001', 'D001', '2022-08-22', '02:47:57', 'Hi', 0),
(6, 'wB001', 'TG386', '2022-08-22', '02:51:28', 'Hi', 0),
(7, 'warden', 'wB001', '2022-08-22', '02:54:52', 'Hi', 0),
(8, 'wB001', 'warden', '2022-08-22', '02:55:08', 'Hello ', 0),
(9, 'TG003', 'dean', '2022-08-22', '04:49:49', 'hi', 0),
(10, 'Security', 'dean', '2022-08-22', '13:06:20', 'Hi', 0),
(11, 'wB001', 'warden', '2022-08-22', '13:10:49', 'How Are You', 0),
(12, 'wB001', 'warden', '2022-08-22', '21:19:23', 'Hi Sir I need a help', 0),
(13, 'warden', 'wB001', '2022-08-22', '21:19:50', 'Hello, How can i help you?', 0),
(14, 'wB001', 'D001', '2022-08-22', '21:20:22', 'Hi Sir', 0),
(15, 'dean', 'warden', '2022-08-23', '05:40:51', 'hi', 0),
(16, 'wB001', 'D001', '2022-08-23', '05:42:04', 'hello sir', 0),
(17, 'dean', 'warden', '2022-08-23', '05:44:45', 'hey there', 0),
(18, 'wB001', 'D001', '2022-08-23', '07:10:24', 'hello mr are you here', 0),
(19, 'wB001', 'warden', '2022-08-23', '07:10:48', 'hey its me', 0),
(20, 'warden', 'wB001', '2022-08-23', '07:11:30', 'yah tell me', 0),
(21, 'wB001', 'warden', '2022-08-23', '07:12:00', 'ok fine thankyou', 0);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `comp_id` int(50) NOT NULL,
  `receiver` varchar(100) DEFAULT NULL,
  `sender` varchar(100) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `complaint` varchar(1024) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`comp_id`, `receiver`, `sender`, `date`, `time`, `subject`, `complaint`) VALUES
(3, 'dean', 'wB001', '2022-04-13', '17:06:50', 'Test Two', 'Hello\n'),
(4, 'warden', 'wB001', '2022-04-15', '15:31:12', 'Hi warden', 'This is comp'),
(5, 'Dean', 'Warden', '2022-04-28', '04:37:20', 'Complaint 1', 'test complaint'),
(6, 'Dean', 'Warden', '2022-05-23', '04:33:44', 'eefr', 'ds'),
(11, 'subwarden', '', '2022-08-23', '08:49:29', 'hey', 'problem'),
(8, 'Dean', 'wG001', '2022-08-17', '02:16:34', 'New Complaint', 'New'),
(9, 'warden', '', '2022-08-22', '05:21:55', 'Text', 'ads'),
(10, 'Dean', 'Warden', '2022-08-23', '07:14:32', 'spreading fever', 'Be aware about fever'),
(12, 'dean', '', '2022-08-23', '08:50:18', 'hello sir', 'it\'s me'),
(13, 'subwarden', '', '2022-08-23', '11:19:49', 'Test', 'Test Comp');

-- --------------------------------------------------------

--
-- Table structure for table `dean`
--

CREATE TABLE `dean` (
  `user_id` varchar(50) NOT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `contact_no` int(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Date_Joined` date NOT NULL,
  `Qualification` varchar(200) DEFAULT NULL,
  `pro_pic` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dean`
--

INSERT INTO `dean` (`user_id`, `first_name`, `last_name`, `gender`, `address`, `contact_no`, `email`, `DOB`, `Date_Joined`, `Qualification`, `pro_pic`) VALUES
('D001', 'Dr.K.G.S', 'Harshadewa Gunawardana', 'male', 'Matara', 7878564, 'sanga@mail.com', '1978-03-15', '2012-02-09', 'PHD', 'dean.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `entry_leave`
--

CREATE TABLE `entry_leave` (
  `student_ID` varchar(50) DEFAULT NULL,
  `enter_date` date NOT NULL,
  `enter_time` time NOT NULL,
  `exit_date` date NOT NULL,
  `exit_time` time NOT NULL,
  `no` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry_leave`
--

INSERT INTO `entry_leave` (`student_ID`, `enter_date`, `enter_time`, `exit_date`, `exit_time`, `no`) VALUES
('TG002', '2022-08-08', '11:13:45', '2022-08-08', '11:13:50', 98),
('TG001', '2022-08-08', '11:11:44', '2022-08-08', '11:13:00', 97),
('TG002', '2022-08-08', '11:13:55', '2022-08-13', '11:57:41', 99),
('TG001', '2022-08-09', '11:55:23', '0000-00-00', '00:00:00', 100),
('TG386', '2022-08-23', '07:48:16', '2022-08-23', '17:01:01', 101),
('TG003', '2022-08-23', '17:02:47', '2022-08-23', '17:02:50', 102),
('TG003', '2022-08-23', '17:02:53', '0000-00-00', '00:00:00', 103),
('TG386', '2022-08-23', '17:03:07', '2022-08-23', '17:03:16', 104),
('TG396', '2022-08-23', '17:03:48', '2022-08-23', '17:03:52', 105),
('TG396', '2022-08-23', '17:04:29', '2022-08-23', '17:06:18', 106),
('TG388', '2022-08-23', '17:04:45', '0000-00-00', '00:00:00', 107),
('TG377', '2022-08-23', '17:04:58', '0000-00-00', '00:00:00', 108),
('TG410', '2022-08-23', '17:05:15', '0000-00-00', '00:00:00', 109);

-- --------------------------------------------------------

--
-- Table structure for table `expences`
--

CREATE TABLE `expences` (
  `exp_id` int(11) NOT NULL,
  `type` varchar(500) NOT NULL,
  `Date` date NOT NULL,
  `Amount` float(15,2) NOT NULL,
  `receipt` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expences`
--

INSERT INTO `expences` (`exp_id`, `type`, `Date`, `Amount`, `receipt`) VALUES
(1, 'Electricity Bill', '2022-08-23', 123.00, 'asdV32ss');

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `room_id` varchar(50) NOT NULL,
  `furniture_name` varchar(500) DEFAULT NULL,
  `count` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `Image_id` int(50) NOT NULL,
  `Image_name` varchar(500) NOT NULL,
  `image_path` varchar(1000) NOT NULL,
  `Date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Image_id`, `Image_name`, `image_path`, `Date`, `time`) VALUES
(1, 'first.jpg', '1.jpg', '2022-04-27', '12:17:20'),
(2, '2.jpg', '2.jpg', '2022-08-18', '12:17:20'),
(3, '3.jpg', '3.jpg', '2022-08-16', '12:17:20'),
(4, '4.jpg', '4.jpg', '2022-08-16', '12:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `girls_hostel`
--

CREATE TABLE `girls_hostel` (
  `room_no` int(50) NOT NULL,
  `floor` int(4) DEFAULT NULL,
  `student_id` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `girls_hostel`
--

INSERT INTO `girls_hostel` (`room_no`, `floor`, `student_id`) VALUES
(102, 1, 'Tg377');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_reg_temp`
--

CREATE TABLE `hostel_reg_temp` (
  `student_id` varchar(50) NOT NULL,
  `department` varchar(50) DEFAULT NULL,
  `batch` varchar(50) DEFAULT NULL,
  `nic_number` int(20) DEFAULT NULL,
  `first_name` varchar(500) DEFAULT NULL,
  `last_name` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical_request`
--

CREATE TABLE `medical_request` (
  `reg_no` varchar(5) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `medical_issue` varchar(100) NOT NULL,
  `leave_date` date NOT NULL,
  `leave_time` time NOT NULL,
  `takecareperson_name` varchar(50) NOT NULL,
  `takecareperson_tgno` varchar(5) NOT NULL,
  `takecareperson_contactno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_request`
--

INSERT INTO `medical_request` (`reg_no`, `contact_no`, `medical_issue`, `leave_date`, `leave_time`, `takecareperson_name`, `takecareperson_tgno`, `takecareperson_contactno`) VALUES
('TG001', 762043010, '', '2022-08-18', '11:43:14', 'jkjllk', '6789', 78900),
('TG001', 762043010, '', '2022-08-18', '11:52:30', 'hjkmb', '24632', 5366),
('TG001', 762043010, 'sharanya', '2022-08-18', '11:54:46', 'visha', 'tg357', 975488123),
('TG003', 778899456, 'cxnh', '2022-08-21', '08:37:18', 'dgfy', 'tg568', 58909),
('TG377', 762043010, 'fever', '2022-08-23', '08:42:28', 'unknown ', 'tg367', 772683947),
('TG377', 762043010, 'gjhhjkjk', '2022-08-23', '08:44:23', 'gvjghhj', 'tg451', 86556262);

-- --------------------------------------------------------

--
-- Table structure for table `modal_stu_reg_limit`
--

CREATE TABLE `modal_stu_reg_limit` (
  `level` int(11) NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modal_stu_reg_limit`
--

INSERT INTO `modal_stu_reg_limit` (`level`, `end_date`) VALUES
(1, '2022-08-23'),
(2, '2022-08-23'),
(3, '2022-08-19'),
(4, '2022-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(255) NOT NULL,
  `owner` varchar(500) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `title` varchar(500) NOT NULL,
  `notice` varchar(1024) DEFAULT NULL,
  `file` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `owner`, `date`, `time`, `title`, `notice`, `file`) VALUES
(36, 'wB001', '2022-04-26', '10:58:32', 'Warden', 'Notice', ''),
(37, 'wB001', '2022-04-26', '11:02:06', 'SubWarden', 'Warden Notice', ''),
(53, 'Warden', '2022-05-01', '14:33:51', 'fdg', 'dfgs', ''),
(54, 'Warden', '2022-05-01', '14:34:31', 'fgh', 'fdgh', ''),
(52, 'Warden', '2022-05-01', '14:32:57', 'sadsa', 'fdgfdg', ''),
(66, 'D001', '2022-05-01', '14:55:25', 'fgdh', 'fgdhfgh', ''),
(67, 'wG001', '2022-08-18', '22:47:58', 'Text GWarden', 'Hello', ''),
(68, 'wG001', '2022-08-18', '22:48:00', 'Text GWarden', 'Hello', ''),
(69, 'wB001', '2022-08-22', '21:37:58', 'Notice 3', 'Hello all', ''),
(70, 'D001', '2022-08-23', '05:57:13', 'fever', 'aware from viral fever', ''),
(71, 'Warden', '2022-08-23', '07:17:53', 'hey ', 'there is a message', ''),
(72, 'wB001', '2022-08-23', '07:19:21', 'hey ', 'hello here', 'assets/images/Notice/Warden/LAB SHEET TG386.pdf'),
(73, 'wB001', '2022-08-23', '07:25:19', 'hey', 'here to speak', ''),
(74, 'wB001', '2022-08-23', '07:33:26', 'asdsa', 'asad', ''),
(75, 'D001', '2022-08-23', '07:35:38', 'how is it', 'hello', '');

-- --------------------------------------------------------

--
-- Table structure for table `out_request`
--

CREATE TABLE `out_request` (
  `req_id` int(11) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `leave_date` date NOT NULL,
  `leave_time` time NOT NULL,
  `reason` varchar(100) NOT NULL,
  `Status` int(11) NOT NULL,
  `sent_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `out_request`
--

INSERT INTO `out_request` (`req_id`, `reg_no`, `name`, `leave_date`, `leave_time`, `reason`, `Status`, `sent_date`) VALUES
(2, 'TG003', 'kk', '2022-08-18', '02:10:00', 'sick', -1, '2022-08-22'),
(3, 'TG003', '', '2022-08-24', '10:10:00', 'death', 0, '2022-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `parcel_notice`
--

CREATE TABLE `parcel_notice` (
  `notice_id` int(11) NOT NULL,
  `student_id` varchar(50) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `Student_ID` int(50) NOT NULL,
  `Request_Category` varchar(500) NOT NULL,
  `Request` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `email` varchar(100) NOT NULL,
  `otp` varchar(6) DEFAULT NULL,
  `used` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reset_password`
--

INSERT INTO `reset_password` (`email`, `otp`, `used`) VALUES
('pptn02@gmail.com', '5688', 1);

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `user_id` varchar(50) NOT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `contact_no` int(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Date_Joined` date DEFAULT NULL,
  `pro_pic` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`user_id`, `first_name`, `last_name`, `gender`, `address`, `contact_no`, `email`, `DOB`, `Date_Joined`, `pro_pic`) VALUES
('sb001', 'Elil', 'Vannan', 'male', 'Sasthiriyar road kaluthavalai, batticallo', 756877873, 'elilvannanelill@gmail.com', '1998-10-09', '2022-03-09', '1661253618_1e163805e8fd26fac2e4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` varchar(50) NOT NULL,
  `department` varchar(50) DEFAULT NULL,
  `batch` varchar(50) DEFAULT NULL,
  `nic_number` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_fee`
--

CREATE TABLE `student_fee` (
  `student_id` varchar(50) NOT NULL,
  `paid_amount` double(10,2) NOT NULL,
  `paid_date` date NOT NULL,
  `branch` varchar(15) NOT NULL,
  `receipt` varchar(1000) NOT NULL,
  `academic_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_fee`
--

INSERT INTO `student_fee` (`student_id`, `paid_amount`, `paid_date`, `branch`, `receipt`, `academic_year`) VALUES
('TG001', 500.00, '2022-03-08', 'kandy', 'receipt.pdf', 1),
('TG003', 3242.00, '2022-08-05', 'rew', 'Test', 3),
('TG377', 500.00, '2022-08-22', 'jaffna', 'Test', 2),
('TG386', 213.00, '2022-08-18', 're', 'Test', 2),
('TG399', 1500.00, '2022-08-22', 'Matara', 'Test', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_fine`
--

CREATE TABLE `student_fine` (
  `student_Id` varchar(20) NOT NULL,
  `defect` varchar(25) NOT NULL,
  `fine_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_fine`
--

INSERT INTO `student_fine` (`student_Id`, `defect`, `fine_amount`) VALUES
('TG387', 'sad', 123);

-- --------------------------------------------------------

--
-- Table structure for table `student_furniture_request`
--

CREATE TABLE `student_furniture_request` (
  `student_id` varchar(5) NOT NULL,
  `room_no` int(11) NOT NULL,
  `furniture_type` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_furniture_request`
--

INSERT INTO `student_furniture_request` (`student_id`, `room_no`, `furniture_type`, `date`) VALUES
('TG001', 101, 'fan', '2022-08-18'),
('TG003', 101, 'metress', '2022-08-21'),
('TG377', 0, 'cupboard', '2022-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `student_member`
--

CREATE TABLE `student_member` (
  `student_id` varchar(50) NOT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `contact_no` text NOT NULL,
  `email` varchar(500) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `nic_number` varchar(20) DEFAULT NULL,
  `pro_pic` varchar(1000) NOT NULL,
  `level` varchar(500) NOT NULL,
  `RegEndDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_member`
--

INSERT INTO `student_member` (`student_id`, `first_name`, `last_name`, `gender`, `address`, `DOB`, `contact_no`, `email`, `department`, `nic_number`, `pro_pic`, `level`, `RegEndDate`) VALUES
('TG377', 'RechalVishalini', 'Jeevabala nesan', 'female', 'No 75, St.mary\'s street, Negambo', '1998-12-16', '0762043010', 'derishrechal@gmail.com', 'ICT', '988511889v', '1661262642_29ddb91543f133abed45.jpg', '3', '2022-08-21'),
('TG396', 'Sharanya', 'Pathmanathan', 'female', 'Karainagar, Jaffna', '1998-05-02', '0774689023', 'psharanya2@gmail.com', 'BST', '9857562734v', '1661153304_f2d65db77fc9d7261622.jpg', '3', '2022-08-21'),
('TG003', 'Jathukulan', 'Saanthakumar', 'male', '55/B, Jaffna Road, Jaffna', '1998-05-14', '0754092934', 'jathu@gmail.com', 'ICT', '981545322V', '1661161715_8413545781742c20851c.jpeg', '3', '2022-08-21'),
('TG388', 'A.M.F', 'Farwin', 'female', 'No 163,\r\nThikka road,\r\nEravur1B,\r\nBatticalo.', '1998-03-26', '0766728089', 'farthimafarwin588@gmail.com', 'BST', '985861196v', '1660986147_3467a8a2bcb8d5b6a79b.jpg', '3', '2022-08-21'),
('TG386', 'M.R', 'Muhannadh', 'male', 'No 76,Dehianga,Murutalawa,Kandy', '1998-06-15', '0754092934', 'mrmuhannadh@gmail.com', 'ICT', '981671643v', '1661135490_32fe6bc8ec56ac9d4588.jpg', '3', '2022-08-21'),
('TG410', 'Elilvannan', 'Meganaathan', 'male', '70/A, Settiplayam, Batticalo', '1998-08-13', '0754466998', 'elil@mail.com', 'ICT', '986545781V', '1661219155_f8a1309db8f07179c5a4.jpg', '3', '1998-08-13'),
('TG399', 'Prunthan', 'Yoganathan', 'male', 'Ubayakathirkamam,\r\nPolloy,\r\nManthikai,\r\nJaffna.', '1998-09-30', '0765414701', 'pptn02@gmail.com', 'ET', '9845273823v', '1661151388_71476bbc0ad673b7b75c.jfif', '3', '2022-08-21'),
('TG402', 'Lukshan', 'Jayaruwan', 'male', '45, Moneragala town', '1998-08-24', '0754092934', 'lukshan@mail.com', 'ICT', '985645782V', 'sample', '3', '1998-08-24'),
('TG567', 'Janopy', 'Kumar', 'male', 'jaffna', '1998-06-23', '0773245167', 'jano@gmail.com', 'ICT', '896539787V', 'sample', '2', '1998-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `student_register`
--

CREATE TABLE `student_register` (
  `student_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `room_no` int(11) NOT NULL,
  `defect/remark` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `in_date` date NOT NULL,
  `out_date` date NOT NULL,
  `department` varchar(1000) NOT NULL,
  `payment_dues` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_register`
--

INSERT INTO `student_register` (`student_id`, `name`, `room_no`, `defect/remark`, `gender`, `in_date`, `out_date`, `department`, `payment_dues`) VALUES
('TG001', '', 101, 'sda', 'male', '2022-05-17', '2022-05-18', 'ICT', '5'),
('Tg123', 'Bala', 456, 'no', 'male', '2022-04-05', '2022-04-19', 'ET', 'no'),
('Tg145', 'rechal', 367, 'fghjk', 'male', '2022-04-06', '2022-04-26', 'BST', '89'),
('Tg415', 'Valu', 567, 'no', 'male', '2022-03-30', '2022-04-06', 'BST', 'no'),
('tg456', 'hjk', 122, 'hjk', 'male', '0000-00-00', '0000-00-00', '', '123'),
('Tg524', 'rechal', 356, 'no', 'male', '2022-03-29', '2022-04-27', 'BST', 'no'),
('Tg569', 'Rechal', 122, 'no', 'female', '2022-04-05', '2022-04-13', 'ICT', 'no'),
('tg6789', 'hjkl', 45, 'fghjk', 'female', '2022-04-13', '2022-04-16', '', '123'),
('tg789', 'bala', 78, 'no', 'male', '2022-03-29', '2022-03-31', 'BST', '89'),
('Tg904', 'Nesan', 367, 'no', 'male', '2022-04-12', '2022-04-12', 'ET', 'no'),
('tg908', 'vudh', 56, 'vbn', 'female', '2022-04-03', '2022-04-13', 'ET', '123');

-- --------------------------------------------------------

--
-- Table structure for table `student_room_change`
--

CREATE TABLE `student_room_change` (
  `student_id` varchar(50) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `room_no` int(5) NOT NULL,
  `floor_no` int(50) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_room_change`
--

INSERT INTO `student_room_change` (`student_id`, `gender`, `room_no`, `floor_no`, `reason`, `date`, `time`) VALUES
('TG377', 'female', 102, 1, 'friend\'s problem', '2022-08-23', '08:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `stu_medical`
--

CREATE TABLE `stu_medical` (
  `medical_request_id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `room_no` int(10) NOT NULL,
  `medical_issue` varchar(50) NOT NULL,
  `blood_grp` varchar(10) NOT NULL,
  `emergency_num` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu_medical`
--

INSERT INTO `stu_medical` (`medical_request_id`, `student_id`, `gender`, `room_no`, `medical_issue`, `blood_grp`, `emergency_num`, `date`, `time`) VALUES
(1, 'TG001', 'male', 101, 'Fever', 'B+', 77222, '2022-04-26', '12:16:20'),
(2, 'TG501', 'male', 202, 'Fever', 'A-', 77222, '2022-04-08', '01:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `sub_warden`
--

CREATE TABLE `sub_warden` (
  `user_id` varchar(50) NOT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `contact_no` int(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Date_Joined` date DEFAULT NULL,
  `Qualification` varchar(500) NOT NULL,
  `pro_pic` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_warden`
--

INSERT INTO `sub_warden` (`user_id`, `first_name`, `last_name`, `gender`, `address`, `contact_no`, `email`, `DOB`, `Date_Joined`, `Qualification`, `pro_pic`) VALUES
('wB001', 'Kumar', 'Silva', 'male', 'Batticalo', 775030200, 'KumarSiva@gmail.com', '1998-05-14', '2020-09-12', 'MSC', '1660719891_a803fd0ff205073e3d97.jpg'),
('wG001', 'Subashini', 'Kunrathna', 'female', 'Colombo', 781245628, 'Subashi@mail.com', '1999-01-15', '2021-04-12', 'BICT', '1659247371_af625e812642f9dcecb5.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(50) NOT NULL,
  `user_name` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `post` varchar(100) DEFAULT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `post`, `email`) VALUES
('Warden', 'Warden', '202cb962ac59075b964b07152d234b70', 'warden', ''),
('sb001', 'Lala', '675b2c5bb55f0f3df4f1a705e6ba2887', 'security', ''),
('wB001', 'Boys Subwarden', '202cb962ac59075b964b07152d234b70', 'subwarden', ''),
('wG001', 'Girls Sub warden', '202cb962ac59075b964b07152d234b70', 'subwarden', ''),
('D001', 'kumar', '0aa86b5a56ae8ae4e3fc2cb8d6958f9b', 'dean', ''),
('A001', 'admin', '202cb962ac59075b964b07152d234b70', 'admin', ''),
('TG402', 'Lukshan', '202cb962ac59075b964b07152d234b70', 'student', ''),
('TG003', 'Jathu', '9e4243662891c147a71e3073ac57be47', 'student', ''),
('TG377', 'Rechal Vishalini', 'a2f244331b1c7563f7a318349fbeceae', 'student', ''),
('TG388', 'Farwin', '202cb962ac59075b964b07152d234b70', 'student', ''),
('TG396', 'Sharanya', '202cb962ac59075b964b07152d234b70', 'student', ''),
('TG410', 'Elilvannan', '202cb962ac59075b964b07152d234b70', 'student', ''),
('TG386', 'Muhannadh', '202cb962ac59075b964b07152d234b70', 'student', ''),
('TG399', 'Prunthan', '250cf8b51c773f3f8dc8b4be867a9a02', 'student', 'pptn02@gmail.com'),
('TG567', 'Janopy', '202cb962ac59075b964b07152d234b70', 'student', '');

-- --------------------------------------------------------

--
-- Table structure for table `warden`
--

CREATE TABLE `warden` (
  `user_id` varchar(50) NOT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `contact_no` int(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Date_Joined` date DEFAULT NULL,
  `Qualification` varchar(200) DEFAULT NULL,
  `pro_pic` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warden`
--

INSERT INTO `warden` (`user_id`, `first_name`, `last_name`, `gender`, `address`, `contact_no`, `email`, `DOB`, `Date_Joined`, `Qualification`, `pro_pic`) VALUES
('Warden', 'Kusal', 'Mendis', 'male', 'No 45, St.peter road, colombo', 765645267, 'kusal@gmail.com', '1998-03-15', '2020-04-12', 'MBBS', '1661271779_5e74613ab6c4ad3ed882.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `boys_hostel`
--
ALTER TABLE `boys_hostel`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `entry_leave`
--
ALTER TABLE `entry_leave`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `expences`
--
ALTER TABLE `expences`
  ADD PRIMARY KEY (`exp_id`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Image_id`);

--
-- Indexes for table `girls_hostel`
--
ALTER TABLE `girls_hostel`
  ADD PRIMARY KEY (`room_no`,`student_id`);

--
-- Indexes for table `hostel_reg_temp`
--
ALTER TABLE `hostel_reg_temp`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `modal_stu_reg_limit`
--
ALTER TABLE `modal_stu_reg_limit`
  ADD PRIMARY KEY (`level`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `out_request`
--
ALTER TABLE `out_request`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `parcel_notice`
--
ALTER TABLE `parcel_notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_fee`
--
ALTER TABLE `student_fee`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_furniture_request`
--
ALTER TABLE `student_furniture_request`
  ADD PRIMARY KEY (`student_id`,`date`);

--
-- Indexes for table `student_member`
--
ALTER TABLE `student_member`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_register`
--
ALTER TABLE `student_register`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_room_change`
--
ALTER TABLE `student_room_change`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `stu_medical`
--
ALTER TABLE `stu_medical`
  ADD PRIMARY KEY (`medical_request_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `comp_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `entry_leave`
--
ALTER TABLE `entry_leave`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `expences`
--
ALTER TABLE `expences`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `Image_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `out_request`
--
ALTER TABLE `out_request`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
