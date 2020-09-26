-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 05:17 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`type`, `status`) VALUES
('parent', 'allow'),
('schooladmin', 'allow'),
('student', 'allow'),
('superadmin', 'allow'),
('teacher', 'allow');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignment_id` int(11) NOT NULL,
  `filename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directory` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duedate` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `filename`, `directory`, `date`, `duedate`, `class_id`, `section_id`, `subject_id`) VALUES
(8001, 'Bangla Assignment', 'class8_syllabus.pdf', '2020-07-09', '2020-08-12', 8, 1, 81),
(8002, 'English Assignment', 'Lab_EXam (1).pdf', '2020-08-12', '2020-08-12', 8, 1, 82),
(8003, 'app.js', 'upload/assignment', '2020-09-06', '2021-01-01', 1, 1, 1),
(8004, 'credentials.txt', 'upload/assignment', '2020-09-06', '2020-09-08', 1, 2, 1),
(8005, 'Procfile', 'upload/assignment', '2020-09-07', '2020-09-08', 2, 2, 2),
(8006, 'messages.sql', 'upload/assignment', '2020-09-22', '2020-09-23', 2, 1, 1),
(8006, 'Procfile', 'upload/assignment', '2020-09-25', '2020-09-27', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `boooks`
--

CREATE TABLE `boooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `user_id`, `text`) VALUES
(1, '20-8102-03', 'hi'),
(2, '20-8101-03', 'Hello'),
(3, '20-8101-03', 'how ar u?'),
(4, '20-8102-03', 'I\'m fine, u?'),
(5, '20-8101-03', 'also fine'),
(6, '20-8102-03', 'did u complete ur BSc.?'),
(7, '20-8101-03', 'nope'),
(8, '20-8102-03', 'how many sem left?'),
(9, '20-8101-03', 'one'),
(10, '20-8101-03', 'hi !!'),
(11, '20-8102-03', 'hello!'),
(12, '20-8101-03', 'How r u?'),
(13, '20-8102-03', 'fine and u?'),
(14, '20-8559-03', 'fine too!'),
(15, '20-8102-03', 'grp number?'),
(16, '20-8559-03', '5'),
(17, '20-8744-03', 'hi'),
(18, '20-8744-03', 'hello'),
(19, '20-8102-03', 'hi there');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `classname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `classname`) VALUES
(8, 'Eight');

-- --------------------------------------------------------

--
-- Table structure for table `consult`
--

CREATE TABLE `consult` (
  `consult_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `consultday` date NOT NULL,
  `consultstarting` time NOT NULL,
  `consultending` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c_routine`
--

CREATE TABLE `c_routine` (
  `class_id` int(30) NOT NULL,
  `class` varchar(20) NOT NULL,
  `sec_name` varchar(20) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `start_time` varchar(20) NOT NULL,
  `finish_time` varchar(20) NOT NULL,
  `day` varchar(20) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `t_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_routine`
--

INSERT INTO `c_routine` (`class_id`, `class`, `sec_name`, `course_name`, `start_time`, `finish_time`, `day`, `t_name`, `t_id`) VALUES
(1101, '10', 'Naptun', 'HCI', '11:00', '2:00', 'Sun', 'Profess. Alex', 'T-108'),
(2202, '8', 'ds', 'ICT', '10:30', '12:30', 'Thurs Day', 'John', '22011');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starting` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ending` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `starting`, `ending`) VALUES
(1, 'Christmas', '25 December', '25 December'),
(2, 'Craft Day', '06 January', '06 January'),
(3, 'School Picnic', '20 January', '30 January'),
(4, 'Multicultural Fair', '25 February', '29 February');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade_id` int(11) NOT NULL,
  `student_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `finalgrade` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_id`, `student_id`, `subject_id`, `class_id`, `finalgrade`, `section_id`) VALUES
(8801, '20-8101-04', 83, 8, 'A+', 1),
(8802, '20-8101-04', 89, 8, 'A', 1),
(2582, '20-8826-04', 83, 8, 'A', 1),
(8562, '20-8101-04', 96, 9, 'o', 1),
(2582, '20-8101-04', 85, 8, 'A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `libraries`
--

CREATE TABLE `libraries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `libraries`
--

INSERT INTO `libraries` (`id`, `bid`, `bname`, `author`, `created_at`, `updated_at`) VALUES
(1, 'd', 'd', 'd', NULL, NULL),
(2, 'd', 'd', 'd', NULL, NULL),
(3, 'd', 'd', 'd', NULL, NULL),
(4, 'd', 'd', 'dd', NULL, NULL),
(5, 'sd', 's', 'd', NULL, NULL),
(6, 'dfg', 'd', 'df', NULL, NULL),
(7, 'sdhdfhd', 'f', 'f', NULL, NULL),
(8, 'fd', 's', 'ds', NULL, NULL),
(9, 'sd', 's', 's', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userpassword` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_id`, `userpassword`, `usertype`) VALUES
(1, '20-8101-04', 'Student-902', 'student'),
(3, '20-0000-01', 'Raiyan123@#', 'superadmin'),
(5, '20-8101-03', 'Teacher-902', 'teacher'),
(6, '20-8102-03', 'Teacher-902', 'teacher'),
(7, '20-8103-03', 'Teacher-902', 'teacher'),
(8, '20-8104-03', 'Teacher-902', 'teacher'),
(9, '20-8105-03', 'Teacher-902', 'teacher'),
(10, '20-8106-03', 'Teacher-902', 'teacher'),
(11, '20-8107-03', 'Teacher-902', 'teacher'),
(12, '20-8108-03', 'Teacher-902', 'teacher'),
(13, '20-8109-03', 'Teacher-902', 'teacher'),
(14, '20-8110-03', 'Teacher-902', 'teacher'),
(16, '20-0002-04', '5nb-q35', 'student'),
(17, '20-0001-02', 'Schooladmin-902', 'schooladmin'),
(19, '20-0002-02', 'Schooladmin-902', 'schooladmin'),
(20, '20-0003-02', 'Schooladmin-92', 'schooladmin'),
(21, '20-0004-02', 'Raiyan123@#', 'schooladmin'),
(22, '20-8101-05', 'Parent-902', 'parent'),
(23, '<%= userid %>', 'matah', 'student'),
(24, '1', 'PeRVFxV2Sz', 'student'),
(25, '0', 'BY6PBDWj0U', 'student'),
(26, 'S-3-2020', 'aCcI020PEr', 'student'),
(27, 'T-101-2020', 'cB6odMMy', 'teacher'),
(28, 'S-5640-2020', 'ftVtQLm1S5', 'student'),
(29, 'S-2578-2020', 'zcMpgN1Jki', 'student'),
(30, 'S-1167-2020', '6PgX8sxL98', 'student'),
(31, 'S-4344-2020', 'OscqkoBNYS', 'student'),
(32, '20-8355-03', '20-8355-03', 'teacher'),
(33, '20-8060-03', '20-8060-03', 'teacher'),
(34, '20-8728-03', 'teacher$8728', 'teacher'),
(35, '20-8063-03', 'teacher#8063', 'teacher'),
(36, '20-8502-03', 'teacher#8502', 'teacher'),
(37, '20-8221-03', 'teacher#8221', 'teacher'),
(38, '20-8902-03', 'teacher#8902', 'teacher'),
(39, '20-8906-03', 'teacher#8906', 'teacher'),
(40, '20-8888-03', 'teacher#8888', 'teacher'),
(41, '20-8416-03', 'teacher#8416', 'teacher'),
(42, '20-8004-03', 'teacher#8004', 'teacher'),
(43, '20-8585-03', 'teacher#8585', 'teacher'),
(44, '20-8559-03', 'teacher#8559', 'teacher'),
(45, '20-8334-03', 'teacher#8334', 'teacher'),
(47, '20-8744-03', 'teacher#8744', 'teacher'),
(64, '20-8524-03', 'teacher#8524', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `lostfound`
--

CREATE TABLE `lostfound` (
  `lostfound_id` int(11) NOT NULL,
  `lostname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lostdescription` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lostday` date NOT NULL,
  `found` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `received` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lostfound`
--

INSERT INTO `lostfound` (`lostfound_id`, `lostname`, `lostdescription`, `lostday`, `found`, `received`) VALUES
(1, 'Water Bottle', 'White color bottle', '2020-09-01', 'yes', 'not'),
(2, 'Pencil Box', 'Blue color box with two pencils', '2020-07-02', 'not', 'not'),
(3, 'Water Bottle', 'Blue color water bottle', '2020-06-11', 'yes', 'not'),
(4, 'Umbrella', 'White color umbrella', '2020-07-11', 'yes', 'not'),
(5, 'TiffinBox', 'Red small tiffin box', '2020-05-11', 'yes', 'not'),
(6, 'Notebook', 'English Notebook _class four', '2020-06-11', 'yes', 'not'),
(7, 'Watch', 'black color watch', '2020-06-11', 'yes', 'not'),
(10, 'Water Bottle', 'White color bottle', '2020-09-01', 'yes', 'not'),
(11, 'pencil bag', 'White color pencilbag', '2020-09-01', 'yes', 'not'),
(12, 'Sweater', 'White color ', '2020-09-01', 'yes', 'not'),
(13, 'calculator', '991-ES Scientific calculator', '2020-09-01', 'yes', 'not');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `recipient` varchar(64) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `title`, `recipient`, `message`, `date`) VALUES
(1, 'class absence', 'father@gmail.com', 'your son was absent in the class\r\nRegards,\r\nTeacher', '2020-09-05'),
(2, 'absence in class', 'mother@gmail.com', 'your son was absent in the class\r\nRegards,\r\nTeacher', '2020-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_09_25_080712_create_access_table', 1),
(2, '2020_09_25_080712_create_assignment_table', 1),
(3, '2020_09_25_080712_create_class_table', 1),
(4, '2020_09_25_080712_create_consult_table', 1),
(5, '2020_09_25_080712_create_event_table', 1),
(6, '2020_09_25_080712_create_grade_table', 1),
(7, '2020_09_25_080712_create_login_table', 1),
(8, '2020_09_25_080712_create_lostfound_table', 1),
(9, '2020_09_25_080712_create_note_table', 1),
(10, '2020_09_25_080712_create_notice_table', 1),
(11, '2020_09_25_080712_create_noticeboard_table', 1),
(12, '2020_09_25_080712_create_parent_table', 1),
(13, '2020_09_25_080712_create_parentupload_table', 1),
(14, '2020_09_25_080712_create_result_table', 1),
(15, '2020_09_25_080712_create_routine_table', 1),
(16, '2020_09_25_080712_create_schooladmin_table', 1),
(17, '2020_09_25_080712_create_section_table', 1),
(18, '2020_09_25_080712_create_staff_table', 1),
(19, '2020_09_25_080712_create_student_table', 1),
(20, '2020_09_25_080712_create_studentt_table', 1),
(21, '2020_09_25_080712_create_subject_table', 1),
(22, '2020_09_25_080712_create_subjectt_table', 1),
(23, '2020_09_25_080712_create_superadmin_table', 1),
(24, '2020_09_25_080712_create_syllabus_table', 1),
(25, '2020_09_25_080712_create_teacher_table', 1),
(26, '2020_09_25_080712_create_teacherr_table', 1),
(27, '2020_09_25_080712_create_upload_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `note_id` int(11) NOT NULL,
  `filename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directory` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `subject_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`note_id`, `filename`, `directory`, `date`, `subject_id`, `section_id`, `class_id`) VALUES
(801, 'Bangla', 'class8_syllabus.pdf', '2020-05-13', 81, 1, 8),
(802, 'English', '2dfe9cc400d3d74b6ca254230b9d71af.png', '2020-07-09', 82, 1, 8),
(803, 'app.js', 'upload/note', '2020-09-06', 1, 1, 1),
(804, 'sms.sql', 'upload/note', '2020-09-06', 1, 1, 1),
(805, 'credentials.txt', 'upload/note', '2020-09-07', 1, 1, 2),
(806, 'Procfile', 'upload/note', '2020-09-07', 2, 2, 2),
(807, 'sms(V3.0).sql', 'upload/note', '2020-09-22', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `noticedate` datetime NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `description` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `noticedate`, `class_id`, `subject_id`, `section_id`, `description`) VALUES
(10, '2020-08-10 00:00:00', 8, 81, 1, 'Today\'s class cancel.'),
(10, '2020-08-11 00:00:00', 8, 86, 1, 'Class test in 20th August'),
(10, '2020-08-05 00:00:00', 8, 85, 1, 'Submit your assignment before 15th august'),
(11, '2020-09-05 00:00:00', 2, 2, 2, 'Assignment has been uploaded'),
(12, '2020-09-14 00:00:00', 2, 1, 1, 'assesment on sunday'),
(13, '2020-09-14 00:00:00', 8, 2, 2, 'assesment on tuesday');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE `noticeboard` (
  `id` int(11) NOT NULL,
  `nTitle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nDetails` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pBy` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`id`, `nTitle`, `nDetails`, `pBy`, `Date`) VALUES
(12, 'Summer Vacation', 'School Will Remain Close Due to summer Holiday. From 11 January to 12 July.', 'Admin', '20/08/2020'),
(13, 'try', '', '20-0002-02', ''),
(14, 'test1', 'dfjfgjgfjxgjg', 'Admin', '10/09/2020'),
(15, 'Final', 'al', 'School Admin', '08/09/2020'),
(16, 'dfzg', 'zgf', 'School Admin', '25-09-2020');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `parent_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentemail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentphone` bigint(20) NOT NULL,
  `parentrelation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `parent_id`, `student_id`, `parentname`, `parentemail`, `parentphone`, `parentrelation`) VALUES
(1, '20-8101-05', '20-8101-04', 'Mr. Rahman', 'MrRahman@gmail.com', 1414412345, 'Father');

-- --------------------------------------------------------

--
-- Table structure for table `parentupload`
--

CREATE TABLE `parentupload` (
  `parentupload_id` int(11) NOT NULL,
  `teacher_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploadfiledirectory` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentuploaddate` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parentupload`
--

INSERT INTO `parentupload` (`parentupload_id`, `teacher_id`, `uploadfiledirectory`, `parentuploaddate`, `student_id`) VALUES
(1, '20-8101-03', 'Laravel-DBORM.txt', '2020-09-20', '20-8101-04'),
(2, '20-8101-03', 'Laravel-DBRunning-Raw-SQL-Queries.txt', '2020-09-20', '20-8101-04'),
(3, '20-8102-03', 'Abominable (2019) 1080p BluRay _ Circle Network.mp4_snapshot_00.00.45.462.jpg', '2020-09-20', '20-8101-04'),
(4, '20-8105-03', 'Abominable (2019) 1080p BluRay _ Circle Network.mp4_snapshot_00.34.02.428.jpg', '2020-09-20', '20-8101-04');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `attendance` int(11) NOT NULL,
  `midmarks` int(11) NOT NULL,
  `finalmarks` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `student_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `class_id`, `section_id`, `attendance`, `midmarks`, `finalmarks`, `total`, `subject_id`, `student_id`) VALUES
(8801, 8, 1, 30, 80, 80, 190, 83, '20-8101-04'),
(8802, 8, 1, 30, 60, 60, 150, 89, '20-8101-04'),
(8003, 8, 1, 20, 50, 80, 150, 81, '20-8101-04'),
(8004, 8, 1, 30, 55, 90, 175, 82, '20-8101-04'),
(8005, 8, 1, 30, 58, 85, 173, 86, '20-8101-04'),
(8006, 8, 1, 20, 35, 50, 105, 84, '20-8101-04'),
(8803, 8, 2, 60, 50, 6, 110, 90, '20-8102-04');

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `routine_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `teacher_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startingtime` time NOT NULL,
  `endingtime` time NOT NULL,
  `day` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teachername` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sectionname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjectname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`routine_id`, `class_id`, `section_id`, `teacher_id`, `startingtime`, `endingtime`, `day`, `subject_id`, `teachername`, `sectionname`, `subjectname`) VALUES
(801, 8, 1, '20-8101-03', '09:00:00', '10:00:00', 'Sunday', 81, 'Mr. Teacher Bangla', 'A', 'Bangla'),
(802, 8, 1, '20-8102-03', '10:00:00', '11:00:00', 'Sunday', 82, 'Mr. Teacher English', 'A', 'English'),
(803, 8, 1, '20-8103-03', '11:00:00', '12:00:00', 'Sunday', 83, 'Mr. Teacher Math', 'A', 'Math'),
(804, 8, 1, '20-8104-03', '13:00:00', '14:00:00', 'Sunday', 84, 'Mr. Teacher Science', 'A', 'Science'),
(805, 8, 1, '20-8105-03', '09:00:00', '10:00:00', 'Saturday', 85, 'Mr. Teacher Sociology', 'A', 'Sociology'),
(806, 8, 1, '20-8106-03', '10:00:00', '11:00:00', 'Saturday', 86, 'Mr. Teacher Religion', 'A', 'Religion'),
(807, 8, 1, '20-8107-03', '11:00:00', '12:00:00', 'Saturday', 87, 'Mr. Teacher ICT', 'A', 'ICT'),
(808, 8, 1, '20-8108-03', '13:00:00', '14:00:00', 'Saturday', 88, 'Mr. Teacher World Knowledge', 'A', 'World Knowledge'),
(809, 8, 1, '20-8109-03', '09:00:00', '10:00:00', 'Monday', 89, 'Mr. Teacher Home Economics', 'A', 'Home Economics'),
(800, 8, 1, '20-8100-03', '10:00:00', '11:00:00', 'Monday', 80, 'Mr. Teacher Agriculture', 'A', 'Agriculture'),
(801, 8, 1, '20-8101-03', '11:00:00', '12:00:00', 'Monday', 81, 'Mr. Teacher Bangla', 'A', 'Bangla'),
(802, 8, 1, '20-8102-03', '13:00:00', '14:00:00', 'Monday', 82, 'Mr. Teacher English', 'A', 'English'),
(803, 8, 1, '20-8103-03', '09:00:00', '10:00:00', 'Tuesday', 83, 'Mr. Teacher Math', 'A', 'Math'),
(804, 8, 1, '20-8104-03', '10:00:00', '11:00:00', 'Tuesday', 84, 'Mr. Teacher Science', 'A', 'Science'),
(805, 8, 1, '20-8105-03', '11:00:00', '12:00:00', 'Tuesday', 85, 'Mr. Teacher Sociology', 'A', 'Sociology'),
(806, 8, 1, '20-8106-03', '13:00:00', '14:00:00', 'Tuesday', 86, 'Mr. Teacher Religion', 'A', 'Religion'),
(807, 8, 1, '20-8107-03', '09:00:00', '10:00:00', 'Wednessday', 87, 'Mr. Teacher ICT', 'A', 'ICT'),
(808, 8, 1, '20-8108-03', '10:00:00', '11:00:00', 'Wednessday', 88, 'Mr. Teacher World Knowledge', 'A', 'World Knowledge'),
(809, 8, 1, '20-8109-03', '11:00:00', '12:00:00', 'Wednessday', 89, 'Mr. Teacher Home Economics', 'A', 'Home Economics'),
(800, 8, 1, '20-8100-03', '13:00:00', '14:00:00', 'Wednessday', 80, 'Mr. Teacher Agriculture', 'A', 'Agriculture'),
(801, 8, 1, '20-8101-03', '09:00:00', '10:00:00', 'Thursday', 81, 'Mr. Teacher Bangla', 'A', 'Bangla'),
(802, 8, 1, '20-8102-03', '10:00:00', '11:00:00', 'Thursday', 82, 'Mr. Teacher English', 'A', 'English'),
(803, 8, 1, '20-8103-03', '11:00:00', '12:00:00', 'Thursday', 83, 'Mr. Teacher Math', 'A', 'Math'),
(804, 8, 1, '20-8104-03', '13:00:00', '14:00:00', 'Thursday', 84, 'Mr. Teacher Science', 'A', 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `schooladmin`
--

CREATE TABLE `schooladmin` (
  `id` int(11) NOT NULL,
  `schooladmin_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schooladminname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schooladminemail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schooladmin`
--

INSERT INTO `schooladmin` (`id`, `schooladmin_id`, `schooladminname`, `schooladminemail`) VALUES
(1, '20-0000-02', 'raiyanislammmm', 'raiyan@gmail.com'),
(2, '20-0001-02', 'Shihab Shahib', '123456@gmail.com'),
(4, '20-0002-02', 'yhvghbjn', 'jnfkjncjc@gmail.com'),
(5, '20-0003-02', 'uxdcfgvbhjn', 'student@example.com'),
(6, '20-0004-02', 'ofyghjm', 'student001@student.ac.bd');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `sectionname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classteacher` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `class_id`, `sectionname`, `classteacher`, `subject_id`) VALUES
(801, 8, 'A', 'Mr. Teacher Bangla', 1),
(802, 8, 'B', 'Mr. Teacher English', 2);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staffname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staffphone` int(11) NOT NULL,
  `stafffathername` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staffmothername` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staffaddress` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staffdob` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staffphoto` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staffgender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staffreligion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staffjoiningdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `studentname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentemail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentaddress` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentimage` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentbloodgroup` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentfathername` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentmothername` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardiannumber` bigint(20) NOT NULL,
  `admissionclass` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentdob` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentgender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentreligion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admissiondate` date NOT NULL,
  `disorder` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allergic` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heartproblem` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otherdisease` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_id`, `class_id`, `section_id`, `studentname`, `studentemail`, `studentaddress`, `studentimage`, `studentbloodgroup`, `studentfathername`, `studentmothername`, `guardiannumber`, `admissionclass`, `studentdob`, `studentgender`, `studentreligion`, `admissiondate`, `disorder`, `allergic`, `heartproblem`, `otherdisease`) VALUES
(1, '20-8101-04', 8, 1, 'Student', 'studen8101@gmail.com', '58/2 A, Mirpur,Dhaka', 'student.jpg', 'B+', 'Mr. Rahman', 'Mrs. Rahman', 1456328975, 'One', '5/08/2004', 'Male', 'Muslim', '2012-01-01', 'No', 'No', 'No', 'No'),
(2, '20-8102-04', 8, 2, 'student', 'student002@student.ac.bd', '58/2 A, Savar,Dhaka', 'student2.jpg', 'AB+', 'Abdul', 'Begum', 1632466063, 'one', '27-09-1999', 'female', 'Islam', '2003-09-01', 'nil', 'nil', 'nil', 'nil');

-- --------------------------------------------------------

--
-- Table structure for table `studentt`
--

CREATE TABLE `studentt` (
  `id` int(11) NOT NULL,
  `sName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sid` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admissionDate` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bGroup` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eMail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admissionClass` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gPN` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `myImage` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentt`
--

INSERT INTO `studentt` (`id`, `sName`, `sid`, `fName`, `mName`, `gender`, `dob`, `admissionDate`, `bGroup`, `religion`, `eMail`, `admissionClass`, `section`, `gPN`, `address`, `myImage`) VALUES
(7, 'MD. ASiF B. ABEDIN', '20-0001-04', 'MD. JAINAL ABEDIN', 'KHODEZA BEGUM', 'Male', '22/10/1995', '14/08/2020', 'A+', 'Islam', 'WWW.ABA333@YMAIL.COM', '3', 'Neptune', '01964614266', 'BASHUNDHARA R/A, DHAKA-1200.', ''),
(45, 'Student 02', '20-0002-04', 'Mr khan', 'Mrs khan', 'Male', '13/11/2005', '18/08/2020', 'A+', 'Islam', 'student@gmail.com', '9', 'Jupiter', '78945612352', 'gjcvhbkxfcgv', 'teacher.png'),
(49, 'zdffd', '1', 'sd', 'as', 'Male', '16/09/2020', '30/09/2020', 'A-', 'Islam', 'dsdfs@dd.com', 'Nursery', 'Venus', '35347548458', 'asasasaas', 'F3.jpg'),
(51, 'DS', 'S-3-2020', 'sd', 'MOM', 'Male', '16/09/2020', '08/09/2020', 'A-', 'Islam', 'dsdfs@dd.com', 'Nursery', 'Venus', '35347548458', 'sdfsdf', 'F4.jpg'),
(55, 'ghf', 'S-5640-2020', 'dhd', 'dhdh', 'Male', '15/09/2020', '30/09/2020', 'A+', 'Islam', 'dsdfs@dd.com', 'Play', 'Mercury', '3', 'syseswra', 'F1.jpg'),
(56, 'FinalK', 'S-2578-2020', 'sd', 'zxx', 'Male', '1995-10-22', '22/09/2020', 'A+', 'Islam', 'dsdfs@dd.comff', 'Nursery', 'Mars', '35347548458', 'fdgsdgagasfa', 'kaneshiro_banyan.jpg'),
(57, 'Rain', 'S-1167-2020', 'S.Rain', 'Mom Rain', 'Male', '23/09/2020', '30/09/2020', '0+', 'Islam', 'dsdfs@dd.com', 'Nursery', 'Pluto', '01711044', 'MY Home', 'bonsai tree.gif');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subjectname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subjectname`, `class_id`) VALUES
(81, 'Bangla', 8),
(82, 'English', 8),
(83, 'Math', 8),
(84, 'Science', 8),
(85, 'Sociology', 8),
(86, 'Religion', 8),
(87, 'ICT', 8),
(88, 'World Knowledge', 8),
(89, 'Home Economics', 8),
(80, 'Agriculture', 8),
(91, 'Art', 9),
(92, 'PT', 9),
(93, 'Sociology', 9);

-- --------------------------------------------------------

--
-- Table structure for table `subjectt`
--

CREATE TABLE `subjectt` (
  `id` int(11) NOT NULL,
  `sName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sCode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sType` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sClass` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjectt`
--

INSERT INTO `subjectt` (`id`, `sName`, `sCode`, `sType`, `sClass`) VALUES
(1, 'fgsdg', 'sgsdgs', 'Theory', 'Play'),
(3, 'fgsdgf', '4336h', 'Theory', 'Play'),
(4, 'wertyui', '3456', 'Lab', 'Nursery'),
(5, 't', '4336h', 'Theory', '1'),
(8, 'jklko;lk', 'dfhdfhd', 'Lab', '1'),
(9, 'eeee', 'eeeee', 'Lab', '1'),
(11, 'try', '', '', '0'),
(12, 'physics', '98765', 'Theory', '5');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `superadmin_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `superadminname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `superadminemail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `superadmin_id`, `superadminname`, `superadminemail`) VALUES
(1, '20-0000-01', 'raiyanislam', 'raiyan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `syllabus_id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directory` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`syllabus_id`, `title`, `directory`, `subject_id`, `section_id`, `class_id`) VALUES
(801, 'Bangla Syllabus', 'class8_syllabus.pdf', 81, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `teacher_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachername` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacheremail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacherdesignation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacherdepartment` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacheraddress` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacherdob` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachergender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacherreligion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacherjoiningdate` date NOT NULL,
  `teacherfathername` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachermothername` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `teacher_id`, `teachername`, `teacheremail`, `teacherdesignation`, `teacherdepartment`, `teacheraddress`, `teacherdob`, `teachergender`, `teacherreligion`, `teacherjoiningdate`, `teacherfathername`, `teachermothername`, `subject_id`) VALUES
(1, '20-8101-03', 'Mr. Teacher Bangla', 'teacherB@gmail.com', 'Lecturer', 'Bangla', '98/2,Dhanmondi. 32 Dhaka-1209', '5/2/1986', 'Male', 'Muslim', '2010-01-01', 'Mr. Khan', 'Mrs. Khan', 81),
(2, '20-8102-03', 'Teacher English', 'teacherE@gmail.com', 'Lecturer', 'English', '98/2,Dhanmondi. 32 Dhaka-1209', '5/2/1986', 'Female', 'Muslim', '2010-01-01', 'Mr. Rahman', 'Mrs. Rahman', 82),
(3, '20-8103-03', 'Mr. Teacher Math', 'teacherM@gmail.com', 'Lecturer', 'Math', '98/2,Dhanmondi. 32 Dhaka-1209', '5/2/1986', 'Male', 'Muslim', '2010-01-01', 'Mr. Alam', 'Mrs. Alam', 83),
(4, '20-8104-03', 'Mr. Teacher Science', 'teacherS@gmail.com', 'Lecturer', 'Science', '98/2,Dhanmondi. 32 Dhaka-1209', '5/2/1986', 'Male', 'Muslim', '2010-01-01', 'Mr. Chowdhury', 'Mrs. Chowdhury', 84),
(5, '20-8105-03', 'Teacher Sociology', 'teacherSS@gmail.com', 'Lecturer', 'Sociology', '98/2,Dhanmondi. 32 Dhaka-1209', '5/2/1986', 'Female', 'Muslim', '2010-01-01', 'Mr. Haque', 'Mrs. Haque', 85),
(6, '20-8106-03', 'Mr. Teacher Religion', 'teacherR@gmail.com', 'Lecturer', 'Religion', '98/2,Dhanmondi. 32 Dhaka-1209', '5/2/1986', 'Male', 'Muslim', '2010-01-01', 'Mr. Kabir', 'Mrs. Kabir', 86),
(7, '20-8107-03', 'Mr. Teacher ICT', 'teacherICT@gmail.com', 'Lecturer', 'ICT', '98/2,Dhanmondi. 32 Dhaka-1209', '5/2/1986', 'Male', 'Muslim', '2010-01-01', 'Mr. Islam', 'Mrs. Islam', 87),
(8, '20-8108-03', 'Mr. Teacher World Knowledge', 'teacherWK@gmail.com', 'Lecturer', 'World Knowledge', '98/2,Dhanmondi. 32 Dhaka-1209', '5/2/1986', 'Male', 'Muslim', '2010-01-01', 'Mr. Khan', 'Mrs. Khan', 88),
(9, '20-8109-03', 'Teacher Home Economics', 'teacherHE@gmail.com', 'Lecturer', 'Home Economics', '98/2,Dhanmondi. 32 Dhaka-1209', '5/2/1986', 'Female', 'Muslim', '2010-01-01', 'Mr. Rahman', 'Mrs. Rahman', 89),
(10, '20-8100-03', 'Mr. Teacher Agriculture', 'teacherA@gmail.com', 'Lecturer', 'Agriculture', '98/2,Dhanmondi. 32 Dhaka-1209', '5/2/1986', 'Male', 'Muslim', '2010-01-01', 'Mr. Alam', 'Mrs. Alam', 80),
(11, '20-8395-03', 'Md. Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-24', 'nil', 'nil', 0),
(12, '20-8963-03', 'Md. Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-24', 'nil', 'nil', 0),
(13, '20-8657-03', 'Md. Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-24', 'nil', 'nil', 0),
(14, '20-8882-03', 'Md. Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-24', 'nil', 'nil', 0),
(15, '20-8195-03', 'Md. Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-24', 'nil', 'nil', 0),
(16, '20-8406-03', 'Md. Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-24', 'nil', 'nil', 0),
(17, '20-8926-03', 'Md. Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-24', 'nil', 'nil', 0),
(18, '20-8236-03', 'Md. Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-25', 'nil', 'nil', 0),
(19, '20-8355-03', 'Md. Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-25', 'nil', 'nil', 0),
(20, '20-8060-03', 'Md. Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-25', 'nil', 'nil', 0),
(21, '20-8728-03', 'Md. Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-25', 'nil', 'nil', 0),
(22, '20-8063-03', 'Md. Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-25', 'nil', 'nil', 0),
(23, '20-8502-03', 'Md. Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-25', 'nil', 'nil', 0),
(24, '20-8221-03', 'Md. Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-25', 'nil', 'nil', 0),
(25, '20-8902-03', 'Md. Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-25', 'nil', 'nil', 0),
(26, '20-8906-03', 'Md. Shariful Islam', 'hossainsharif058@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-25', 'nil', 'nil', 0),
(27, '20-8481-03', 'Md. Shariful Islam', 'hossainsharif058@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-25', 'nil', 'nil', 0),
(28, '20-8888-03', 'Md. Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-25', 'nil', 'nil', 0),
(29, '20-8416-03', 'Md. Shariful Islam', 'hossainsharif058@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-25', 'nil', 'nil', 0),
(30, '20-8004-03', 'Md.Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-25', 'nil', 'nil', 0),
(31, '20-8585-03', 'Md. Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-25', 'nil', 'nil', 0),
(32, '20-8559-03', 'Md. Shariful Islam', 'hossainsharif058@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-26', 'nil', 'nil', 0),
(33, '20-8334-03', 'Md. Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-26', 'nil', 'nil', 0),
(34, '20-8524-03', 'Md. Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-26', 'nil', 'nil', 0),
(35, '20-8744-03', 'Md.Shariful Islam', 'imdshariful171@gmail.com', 'teacher', 'nil', 'nil', 'nil', 'nil', 'nil', '2020-09-26', 'nil', 'nil', 0),
(36, '20-9001-5', 'Mahbub Reza', 'reza@gmail.com', 'senior lecturer', 'Art', 'kodomtola,Dhaka', '1985-01-01', 'Male', 'Islam', '2019-02-07', 'Mr. Jahangir', 'Ms. Amena', 91),
(37, '20-9002-03', 'Mahbub redowan', 'redowan@gmail.com', 'junior lecturer', 'PT', 'kodomtola,Dhaka', '1985-01-01', 'Male', 'Islam', '2019-02-07', 'Mr. Alamgir', 'Ms. Fatema', 92),
(38, '20-9003-03', 'Redowan', 'red@gmail.com', 'junior lecturer', 'Sociology', 'kodomtola,Dhaka', '1985-01-01', 'Male', 'Islam', '2019-02-07', 'Mr. Alamin', 'Ms. khaleda', 93);

-- --------------------------------------------------------

--
-- Table structure for table `teacherr`
--

CREATE TABLE `teacherr` (
  `id` int(11) NOT NULL,
  `tid` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacherr`
--

INSERT INTO `teacherr` (`id`, `tid`, `tName`, `gender`, `dob`, `department`, `email`, `phone`, `address`) VALUES
(3, '20-0004-03', 'ASIF', 'Male', '22/10/1995', 'CSE', 'www.aba333@ymail.com', '+893472592352', 'sdfgskdllnbldsmlsdgsgds'),
(8, '20-0005-03', 'Teacher A', 'Female', '13/11/1990', 'Math', 'teacherrrr@gmail.com', '98756412369', 'jdnedjkfnhsdrgjvnlsndvfgbh'),
(9, 'T-101-2020', 'Ami', 'Male', '16/09/2020', 'CSE', 'asif@a3.com', '12345678909', 'sfgdfjfgkf');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `upload_id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `uploadfilename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploaddate` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`upload_id`, `assignment_id`, `uploadfilename`, `uploaddate`, `student_id`) VALUES
(1, 8002, '2dfe9cc400d3d74b6ca254230b9d71af.png', '2020-08-18 20:48:45', '20-8101-04'),
(2, 8001, '1783da03d8e21ca6ebc26b42a7450f4c.jpg', '2020-08-19 02:02:09', '20-8101-04'),
(20, 8001, 'Laravel-DBRunning-Raw-SQL-Queries.txt', '2020-09-16', '20-8101-04'),
(22, 8002, 'critical literaturereview vs literature review.txt', '2020-09-25 07:35:25', '20-8101-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parentupload`
--
ALTER TABLE `parentupload`
  ADD PRIMARY KEY (`parentupload_id`);

--
-- Indexes for table `schooladmin`
--
ALTER TABLE `schooladmin`
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
-- Indexes for table `studentt`
--
ALTER TABLE `studentt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectt`
--
ALTER TABLE `subjectt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherr`
--
ALTER TABLE `teacherr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`upload_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parentupload`
--
ALTER TABLE `parentupload`
  MODIFY `parentupload_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schooladmin`
--
ALTER TABLE `schooladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentt`
--
ALTER TABLE `studentt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `subjectt`
--
ALTER TABLE `subjectt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `teacherr`
--
ALTER TABLE `teacherr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
