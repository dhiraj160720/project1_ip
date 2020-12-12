-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 08:17 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(2) NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'anish', 'anish123'),
(3, 'jayesh', 'jayesh123'),
(4, 'dhiraj', 'dhiraj123');

-- --------------------------------------------------------

--
-- Table structure for table `aptitude`
--

CREATE TABLE `aptitude` (
  `que_id` int(5) NOT NULL,
  `question_title` varchar(225) NOT NULL,
  `option1` varchar(225) NOT NULL,
  `option2` varchar(225) NOT NULL,
  `option3` varchar(225) NOT NULL,
  `option4` varchar(225) NOT NULL,
  `right_ans` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aptitude`
--

INSERT INTO `aptitude` (`que_id`, `question_title`, `option1`, `option2`, `option3`, `option4`, `right_ans`) VALUES
(1, 'The average weight of 8 women increases by 2.5 kg when a new woman replaces one of them weighing 65 kg. Find the weight of the new woman.', '20', '85', '67', '80', '85'),
(2, 'The captain of a cricket team of 11 members is 26 years old, and the wicket-keeper is three years older than the captain. If the ages of captain and wicketkeeper are excluded, the average age of the remaining players is', '19', '49', '17', '23', '23'),
(3, 'The average monthly income of Rakesh and Suresh is Rs. 5050. The average monthly income of Suresh and Ramesh is Rs. 6250 and the average monthly income of Rakesh and Ramesh is Rs. 5200. What is the monthly income of Rakesh?\r\n', '3000', '6000', '4000', '2500', '4000'),
(4, 'In a class average age of 15 boys is 11. If 5 boys each of age 9 years are added, what would be the new average?', '20 years', '10 years', '10.5 years', '23 years', '10.5 years'),
(5, ' The average age of a group of 6 boys is 19. If the new average age after a boy joins the group is 21.28, find the age of new boy.\r\n\r\n\r\n', 'Approx 23', 'Approx 32', 'Approx 35', 'Approx 45', 'Approx 35'),
(6, 'The average weight of a group of 5 boys is 26. If we replace a boy of weight 25 in the group with another boy so that new average increases by 3, find the weight of the new body.\r\n\r\n\r\n\r\n\r\n', '56', '34', '40', '33', '40'),
(7, 'Find the average of the square of first 5 consecutive odd numbers starting from 1 to 9, where the last odd number is 9.\r\n\r\n\r\n\r\n', '22', '11', '16', ' 33', ' 33'),
(8, '	\r\nFrom a group of 7 men and 6 women, five persons are to be selected to form a committee so that at least 3 men are there on the committee. In how many ways can it be done?\r\n', '564', '645', '735', '756', '756'),
(9, '	\r\nOut of 7 consonants and 4 vowels, how many words of 3 consonants and 2 vowels can be formed?\r\n', '210', '1050', '25200', '21400', '25200'),
(10, 'In how many ways can a group of 5 men and 2 women be made out of a total of 7 men and 3 women?', '63', '90', '126', '45', '63');

-- --------------------------------------------------------

--
-- Table structure for table `aptitude_answer`
--

CREATE TABLE `aptitude_answer` (
  `answer_id` int(5) NOT NULL,
  `answer` int(225) NOT NULL,
  `question_id` int(5) NOT NULL,
  `correct` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aptitude_answer`
--

INSERT INTO `aptitude_answer` (`answer_id`, `answer`, `question_id`, `correct`) VALUES
(1, 20, 1, 0),
(2, 85, 1, 1),
(3, 67, 1, 0),
(4, 80, 1, 0),
(5, 19, 2, 0),
(6, 49, 2, 0),
(7, 17, 2, 0),
(8, 23, 2, 1),
(9, 3000, 3, 0),
(10, 6000, 3, 0),
(11, 4000, 3, 1),
(12, 2500, 3, 0),
(13, 20, 4, 0),
(14, 10, 4, 0),
(15, 11, 4, 1),
(16, 23, 4, 0),
(13, 0, 5, 0),
(14, 0, 5, 0),
(15, 0, 5, 1),
(16, 0, 5, 0),
(17, 56, 6, 0),
(18, 34, 6, 0),
(19, 40, 6, 1),
(20, 33, 6, 0),
(21, 22, 7, 0),
(22, 11, 7, 0),
(23, 16, 7, 0),
(24, 33, 7, 1),
(29, 564, 8, 0),
(30, 645, 8, 0),
(31, 735, 8, 0),
(32, 756, 8, 1),
(33, 210, 9, 0),
(34, 1050, 9, 0),
(35, 25200, 9, 1),
(36, 21400, 9, 0),
(37, 63, 10, 1),
(38, 90, 10, 0),
(39, 156, 10, 0),
(40, 45, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `aptitude_question`
--

CREATE TABLE `aptitude_question` (
  `Question_id` int(5) NOT NULL,
  `Question` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aptitude_question`
--

INSERT INTO `aptitude_question` (`Question_id`, `Question`) VALUES
(1, 'The average weight of 8 women increases by 2.5 kg when a new woman replaces one of them weighing 65 kg. Find the weight of the new woman.'),
(2, 'The captain of a cricket team of 11 members is 26 years old, and the wicket-keeper is three years older than the captain. If the ages of captain and wicketkeeper are excluded, the average age of the remaining players is'),
(3, 'The average monthly income of Rakesh and Suresh is Rs. 5050. The average monthly income of Suresh and Ramesh is Rs. 6250 and the average monthly income of Rakesh and Ramesh is Rs. 5200. What is the monthly income of Rakesh?'),
(4, 'In a class average age of 15 boys is 11. If 5 boys each of age 9 years are added, what would be the new average?'),
(5, ' The average age of a group of 6 boys is 19. If the new average age after a boy joins the group is 21.28, find the age of new boy.'),
(6, 'The average weight of a group of 5 boys is 26. If we replace a boy of weight 25 in the group with another boy so that new average increases by 3, find the weight of the new body.'),
(7, 'Find the average of the square of first 5 consecutive odd numbers starting from 1 to 9, where the last odd number is 9.'),
(8, 'From a group of 7 men and 6 women, five persons are to be selected to form a committee so that at least 3 men are there on the committee. In how many ways can it be done?'),
(9, 'Out of 7 consonants and 4 vowels, how many words of 3 consonants and 2 vowels can be formed?'),
(10, 'In how many ways can a group of 5 men and 2 women be made out of a total of 7 men and 3 women?');

-- --------------------------------------------------------

--
-- Table structure for table `dbms`
--

CREATE TABLE `dbms` (
  `que_id` int(5) NOT NULL,
  `question_title` varchar(225) NOT NULL,
  `option1` varchar(225) NOT NULL,
  `option2` varchar(225) NOT NULL,
  `option3` varchar(225) NOT NULL,
  `option4` varchar(225) NOT NULL,
  `right_ans` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbms`
--

INSERT INTO `dbms` (`que_id`, `question_title`, `option1`, `option2`, `option3`, `option4`, `right_ans`) VALUES
(1, 'Which one of the following is used to define the structure of the relation, deleting relations and relating schemas?', 'DML(Data Manipulation Langauge)', 'DDL(Data Definition Langauge)', 'Query', 'Relational Schema', 'DDL(Data Definition Langauge)'),
(2, 'CREATE TABLE employee (name VARCHAR, id INTEGER)\r\nWhat type of statement is this?', 'DML', 'DDL', 'View', 'Integrity constraint', 'DDL'),
(3, 'The basic data type char(n) is a _____ length character string and varchar(n) is _____ length character.', 'Fixed, equal', 'Equal, variable', 'Fixed, variable', 'Variable, equal', 'Fixed, variable'),
(4, 'An attribute A of datatype varchar(20) has the value “Avi”. The attribute B of datatype char(20) has value ”Reed”. Here attribute A has ____ spaces and attribute B has ____ spaces.', '3, 20', '20, 4', '20, 20', '3, 4', '3, 20'),
(5, 'To remove a relation from an SQL database, we use the ______ command.', 'Delete', 'Purge', 'Remove', ' Drop table', ' Drop table'),
(6, ' In SQL the spaces at the end of the string are removed by _______ function.', 'Upper', 'String', 'Trim', 'Lower', 'Trim'),
(7, 'The intersection operator is used to get the _____ tuples.', 'Different', 'Common', 'All', 'Repeating', 'Common'),
(8, 'If we want to retain all duplicates, we must write ________ in place of union.', 'Union all', 'Union some', 'Intersect all', 'Intersect some', 'Union all'),
(9, ' _________ joins are SQL server default', 'Outer', 'Inner', 'Equi', 'None of the mentioned', 'Inner'),
(10, ' Entity is a _________', 'Object of relation', 'Present working model', 'Thing in real world', 'Model of relation', 'Thing in real world');

-- --------------------------------------------------------

--
-- Table structure for table `dbms_answer`
--

CREATE TABLE `dbms_answer` (
  `answer_id` int(5) NOT NULL,
  `answer` varchar(225) NOT NULL,
  `question_id` int(5) NOT NULL,
  `correct` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbms_answer`
--

INSERT INTO `dbms_answer` (`answer_id`, `answer`, `question_id`, `correct`) VALUES
(1, 'DML(Data Manipulation Langauge)', 1, 0),
(2, 'DDL(Data Definition Langauge)', 1, 1),
(3, 'Query', 1, 0),
(4, 'Relational Schema', 1, 0),
(5, 'DML', 2, 0),
(6, 'DDL', 2, 1),
(7, 'View', 2, 0),
(8, 'Integrity constraint', 2, 0),
(9, 'Fixed, equal', 3, 0),
(10, 'Equal, variable', 3, 0),
(11, 'Fixed, variable', 3, 1),
(12, 'Variable, equal', 3, 0),
(13, '3, 20', 4, 1),
(14, '20, 4', 4, 0),
(15, '20, 20', 4, 0),
(16, '3, 4', 4, 0),
(17, 'Delete', 5, 0),
(18, 'Purge', 5, 0),
(19, 'Remove', 5, 0),
(20, 'Drop Table', 5, 1),
(21, 'Upper', 6, 0),
(22, 'String', 6, 0),
(23, 'Trim', 6, 1),
(24, 'Lower', 6, 0),
(25, 'Different', 7, 0),
(26, 'Common', 7, 1),
(27, 'All', 7, 0),
(28, 'Repeating', 7, 0),
(29, 'Union all', 8, 1),
(30, 'Union some', 8, 0),
(31, 'intersect all', 8, 0),
(32, 'intersect some', 8, 0),
(33, 'Outer', 9, 0),
(34, 'Inner', 9, 1),
(35, 'Equi', 9, 0),
(36, 'None', 9, 0),
(37, 'Object of relation', 10, 0),
(38, 'Present working model', 10, 0),
(39, 'Thing in real world', 10, 1),
(40, 'Model of relation', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dbms_question`
--

CREATE TABLE `dbms_question` (
  `Question_id` int(5) NOT NULL,
  `Question` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbms_question`
--

INSERT INTO `dbms_question` (`Question_id`, `Question`) VALUES
(1, 'Which one of the following is used to define the structure of the relation, deleting relations and relating schemas?'),
(2, 'CREATE TABLE employee (name VARCHAR, id INTEGER) What type of statement is this?'),
(3, 'The basic data type char(n) is a _____ length character string and varchar(n) is _____ length character.'),
(4, 'An attribute A of datatype varchar(20) has the value “Avi”. The attribute B of datatype char(20) has value ”Reed”. Here attribute A has ____ spaces and attribute B has ____ spaces.'),
(5, 'To remove a relation from an SQL database, we use the ______ command.'),
(6, ' In SQL the spaces at the end of the string are removed by _______ function.'),
(7, 'The intersection operator is used to get the _____ tuples.'),
(8, 'If we want to retain all duplicates, we must write ________ in place of union.'),
(9, ' _________ joins are SQL server default'),
(10, ' Entity is a _________');

-- --------------------------------------------------------

--
-- Table structure for table `ds`
--

CREATE TABLE `ds` (
  `que_id` int(5) NOT NULL,
  `question_title` varchar(225) NOT NULL,
  `option1` varchar(225) NOT NULL,
  `option2` varchar(225) NOT NULL,
  `option3` varchar(225) NOT NULL,
  `option4` varchar(225) NOT NULL,
  `right_ans` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ds`
--

INSERT INTO `ds` (`que_id`, `question_title`, `option1`, `option2`, `option3`, `option4`, `right_ans`) VALUES
(1, 'A data structure in which linear sequence is maintained by pointers is known as\r\n\r\n', 'Array', 'Stack', 'Linked list', 'Pointer-based data structure', 'Linked list'),
(2, 'A  ____ is a linear collection of self-referential structures, called nodes, connected by pointer links.\r\n\r\n', 'Queue', 'Linked list', 'Tree', 'Stack', 'Linked list'),
(3, 'A queue where all elements have equal priority is a', 'ILFO data structure', 'LILO data structure', 'FIFO data structure', 'LIFO data structure', 'FIFO data structure'),
(4, 'A non-circular doubly linked list can best and most generally be defined as a ___\r\n\r\n', 'Set of elements, each with two pointers', 'Set of elements chained together with pointers', 'Linear sequence of elements in sequential memory locations', 'Linear sequence of elements chained together with pointers', 'Linear sequence of elements chained together with pointers'),
(5, 'Each attribute of an entity has a defined set of values. This set of values is called a', 'Mapping', 'Entity set', 'Domain', 'Range', 'Domain'),
(6, 'A graph is a tree if and only if graph is\r\n', 'Directed graph', 'Contains no cycles', 'Planar', 'Completely connected', 'Contains no cycles'),
(7, 'The number of edges in a complete graph of n vertices is\r\n\r\n\r\n\r\n\r\n', 'n(n+1)/2', 'n(n-1)/2', 'n2/2', 'n', 'n(n-1)/2'),
(8, 'The average case complexity of quick sort for sorting n numbers is\r\n\r\n\r\n\r\n\r\n', 'O(n2)', 'O(nlog2n)', 'O(n)', 'O(log2n)', 'O(nlog2n)'),
(9, 'A dequeue operation removes an element', 'From the front of the queue', 'From any place in the queue', 'From the rear of the queue', 'None of above', 'From the front of the queue'),
(10, 'What is the number of nodes in a full binary tree with depth 3?', '5', '6', '7', '8', '7');

-- --------------------------------------------------------

--
-- Table structure for table `ds_answer`
--

CREATE TABLE `ds_answer` (
  `answer_id` int(5) NOT NULL,
  `answer` varchar(225) NOT NULL,
  `question_id` int(5) NOT NULL,
  `correct` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ds_answer`
--

INSERT INTO `ds_answer` (`answer_id`, `answer`, `question_id`, `correct`) VALUES
(1, 'Array', 1, 0),
(2, 'Stack', 1, 0),
(3, 'Linked List', 1, 1),
(4, 'Pointer', 1, 0),
(5, 'Queue', 2, 0),
(6, 'Tree', 2, 0),
(7, 'Linked List', 2, 1),
(8, 'Stack', 2, 0),
(9, 'ILFO data structure', 3, 0),
(10, 'LILO data structure', 3, 0),
(11, 'FIFO data structure', 3, 1),
(12, 'LIFO data structure', 3, 0),
(13, 'Set of elements, each with two pointers', 4, 0),
(14, 'Set of elements chained together with pointers', 4, 0),
(15, 'Linear sequence of elements in sequential memory locations', 4, 0),
(16, 'Linear sequence of elements chained together with pointers', 4, 1),
(17, 'Mapping', 5, 0),
(18, 'Entity Set', 5, 0),
(19, 'Domain', 5, 1),
(20, 'Range', 5, 0),
(21, 'Directed graph', 6, 0),
(22, 'Contains No Cycle', 6, 1),
(23, 'Planar', 6, 0),
(24, 'Completely Connected', 6, 0),
(25, 'n(n+1)/2', 7, 0),
(26, 'n(n-1)/2', 7, 1),
(27, 'n2/2', 7, 0),
(28, 'n', 7, 0),
(29, 'O(n2)', 8, 0),
(30, 'O(nlog2n)', 8, 1),
(31, 'O(n)', 8, 0),
(32, 'O(log2n)', 8, 0),
(33, 'From the front of the queue', 9, 1),
(34, 'From any place in the queue', 9, 0),
(35, 'From the rear of the queue', 9, 0),
(36, 'None of above', 9, 0),
(37, '5', 10, 0),
(38, '6', 10, 0),
(39, '7', 10, 1),
(40, '8', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ds_question`
--

CREATE TABLE `ds_question` (
  `Question_id` int(5) NOT NULL,
  `Question` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ds_question`
--

INSERT INTO `ds_question` (`Question_id`, `Question`) VALUES
(1, 'A data structure in which linear sequence is maintained by pointers is known as'),
(2, 'A  ____ is a linear collection of self-referential structures, called nodes, connected by pointer links.\r\n'),
(3, 'A queue where all elements have equal priority is a'),
(4, 'A non-circular doubly linked list can best and most generally be defined as a ___\r\n'),
(5, 'Each attribute of an entity has a defined set of values. This set of values is called a'),
(6, 'A graph is a tree if and only if graph is'),
(7, 'The number of edges in a complete graph of n vertices is\r\n'),
(8, 'The average case complexity of quick sort for sort...'),
(9, 'A dequeue operation removes an element'),
(10, 'What is the number of nodes in a full binary tree with depth 3?');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_form`
--

CREATE TABLE `feedback_form` (
  `name` varchar(225) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `feedback` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_form`
--

INSERT INTO `feedback_form` (`name`, `subject`, `email`, `feedback`) VALUES
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('Anish', 'DBMS', 'anishverliani@gmail.com', 'It was a nice experience!'),
('Anish', 'DBMS', 'anishverliani@gmail.com', 'It was a nice experience!'),
('navin', 'DBMS', 'navin@gamil.com', 'nice quiz!');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `username` varchar(20) NOT NULL,
  `sub_name` varchar(20) NOT NULL,
  `marks` int(5) NOT NULL,
  `percentage` decimal(10,2) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`username`, `sub_name`, `marks`, `percentage`, `date_time`) VALUES
('rishika', 'Aptitude', 3, '30.00', '2020-12-10 18:24:03'),
('rishika', 'Python', 3, '30.00', '2020-12-10 18:27:14'),
('vinay', 'Java', 3, '30.00', '2020-12-10 18:47:34'),
('navin', 'Data Structure', 5, '50.00', '2020-12-10 19:01:36'),
('vinay', 'DBMS', 3, '30.00', '2020-12-11 14:52:33'),
('disha', 'Data Structure', 1, '10.00', '2020-12-11 16:28:04');

-- --------------------------------------------------------

--
-- Table structure for table `java`
--

CREATE TABLE `java` (
  `que_id` int(5) NOT NULL,
  `question_title` varchar(225) NOT NULL,
  `option1` varchar(225) NOT NULL,
  `option2` varchar(225) NOT NULL,
  `option3` varchar(225) NOT NULL,
  `option4` varchar(225) NOT NULL,
  `right_ans` varchar(225) NOT NULL,
  `user_ans` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `java`
--

INSERT INTO `java` (`que_id`, `question_title`, `option1`, `option2`, `option3`, `option4`, `right_ans`, `user_ans`) VALUES
(1, 'Which of the following option leads to the portability and security of Java?', 'Bytecode is executed by JVM', 'The applet makes the Java code secure and portable', 'Use of exception handling', 'Dynamic binding between objects', 'Bytecode is executed by the JVM.', ''),
(2, 'Which of the following is not a Java features?', 'Dynamic', 'Architecture Neutral', 'Use of pointers', 'Object-oriented', 'Use of pointers', ''),
(3, 'The u0021 article referred to as a', 'Unicode escape sequence', 'Octal escape', 'Hexadecimal', 'Line feed', 'Unicode escape sequence', ''),
(4, ' _____ is used to find and fix bugs in the Java programs.', 'JVM', 'JRE', 'JDK', 'JDB', 'JDB', ''),
(5, 'What is the return type of the hashCode() method in the Object class?', 'Object', 'int', 'long', 'void', 'int', ''),
(6, 'Which of the following is a valid long literal?', 'ABH8097', 'L990023', '904423', '0xnf029L', '0xnf029L', ''),
(7, 'What does the expression float a = 35 / 0 return?', '0', 'Not a Number', 'Infinity', 'Run time exception', 'Infinity', ''),
(8, 'Evaluate the following Java expression, if x=3, y=5, and z=10: ++z + y - y + z + x++', '24', '23', '20', '25', '24', ''),
(9, 'Which of the following tool is used to generate API documentation in HTML format from doc comments in source code?', 'javap tool', 'javaw command', 'Javadoc tool', 'javah command', 'Javadoc tool', ''),
(10, 'Which method of the Class.class is used to determine the name of a class represented by the class object as a String?', 'getClass()', 'intern()', 'getName()', 'toString()', 'getName()', ''),
(12, 'abcd', 'aa', 'bb', 'cc', 'dd', 'dd', '');

-- --------------------------------------------------------

--
-- Table structure for table `j_answer`
--

CREATE TABLE `j_answer` (
  `answer_id` int(5) NOT NULL,
  `answer` varchar(225) NOT NULL,
  `question_id` int(5) NOT NULL,
  `correct` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `j_answer`
--

INSERT INTO `j_answer` (`answer_id`, `answer`, `question_id`, `correct`) VALUES
(1, 'Bytecode is executed by JVM', 1, 1),
(2, 'The applet makes the Java code secure and portable', 1, 0),
(3, 'Use of exception handling', 1, 0),
(4, 'Dynamic binding between objects', 1, 0),
(5, 'Dynamic', 2, 0),
(6, 'Architecture Neutral', 2, 0),
(7, 'Use of pointers', 2, 1),
(8, 'Object-oriented', 2, 0),
(9, 'Unicode escape sequence', 3, 1),
(10, 'Octal escape', 3, 0),
(11, 'Hexadecimal', 3, 0),
(12, 'Line feed', 3, 0),
(13, 'JVM', 4, 0),
(14, 'JRE', 4, 0),
(15, 'JDK', 4, 0),
(16, 'JDB', 4, 1),
(17, 'Object', 5, 0),
(18, 'int', 5, 1),
(19, 'long', 5, 0),
(20, 'void', 5, 0),
(21, 'ABH8097', 6, 0),
(21, 'ABH8097', 6, 0),
(22, 'L990023', 6, 0),
(23, '904423', 6, 0),
(24, '0xnf029L', 6, 1),
(25, '0', 7, 0),
(26, 'Not a Number', 7, 0),
(27, 'Infinity', 7, 1),
(28, 'Run time exception', 7, 0),
(29, '24', 8, 1),
(30, '23', 8, 0),
(31, '20', 8, 0),
(32, '25', 8, 0),
(33, 'javap tool', 9, 0),
(34, 'javaw command', 9, 0),
(35, 'javadoc tool', 9, 1),
(36, 'javah command', 9, 0),
(37, 'getClass()', 10, 0),
(38, 'intern()', 10, 0),
(39, 'getName()', 10, 1),
(40, 'toString()', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `j_question`
--

CREATE TABLE `j_question` (
  `Question_id` int(5) NOT NULL,
  `Question` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `j_question`
--

INSERT INTO `j_question` (`Question_id`, `Question`) VALUES
(1, 'Which of the following option leads to the portability and security of Java?'),
(2, 'Which of the following is not a Java features?'),
(3, 'The u0021 article referred to as a'),
(4, ' _____ is used to find and fix bugs in the Java programs.'),
(5, 'What is the return type of the hashCode() method in the Object class?'),
(6, 'Which of the following is a valid long literal?'),
(7, 'What does the expression float a = 35 / 0 return?'),
(8, 'Evaluate the following Java expression, if x=3, y=5, and z=10: ++z + y - y + z + x++'),
(9, 'Which of the following tool is used to generate API documentation in HTML format from doc comments in source code?'),
(10, 'Which method of the Class is used to determine the name of a class represented by the class object as a String?');

-- --------------------------------------------------------

--
-- Table structure for table `python`
--

CREATE TABLE `python` (
  `que_id` int(5) NOT NULL,
  `question_title` varchar(225) NOT NULL,
  `option1` varchar(225) NOT NULL,
  `option2` varchar(225) NOT NULL,
  `option3` varchar(225) NOT NULL,
  `option4` varchar(225) NOT NULL,
  `right_ans` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `python`
--

INSERT INTO `python` (`que_id`, `question_title`, `option1`, `option2`, `option3`, `option4`, `right_ans`) VALUES
(1, 'Who developed the Python language?', 'Zim Den', 'Guido van Rossum', 'Niene Stom', 'Wick van Rossum', 'Guido van Rossum'),
(2, 'In which year was the Python language developed?', '1995', '1972', '1981', '1989', '1989'),
(3, 'What is the maximum possible length of an identifier?', '16', '32', '64', 'None of the Above', 'None of the Above'),
(4, ' Which character is used in Python to make a single line comment?', '/', '//', '#', '!', '#'),
(5, 'Which of the following statements is correct regarding the object-oriented programming concept in Python?', 'Classes are real-world entities while objects are not real', 'Objects are real-world entities while classes are not real', 'Both objects and classes are real-world entities', 'All of the above', 'Objects are real-world entities while classes are not real'),
(6, 'Why does the name of local variables start with an underscore discouraged?', 'To identify the variable', 'It confuses the interpreter', 'It indicates a private variable of a class', 'None of these', 'It indicates a private variable of a class'),
(7, 'Which of the following is not a keyword in Python language?', 'val', 'raise', 'try', 'with', 'val'),
(8, 'Which one of the following has the same precedence level?', 'Division, Power, Multiplication, Addition and Subtraction', 'Division and Multiplication', 'Subtraction and Division', 'Power and Division', 'Division and Multiplication'),
(9, 'Which one of the following has the highest precedence in the expression?', 'Division', 'Subtraction', 'Power', 'Parentheses', 'Parentheses'),
(10, 'Which of the following option is not a core data type in the python language?', 'Dictionary', 'Lists', 'Class', 'All of the above', 'Class');

-- --------------------------------------------------------

--
-- Table structure for table `p_answer`
--

CREATE TABLE `p_answer` (
  `answer_id` int(5) NOT NULL,
  `answer` varchar(225) NOT NULL,
  `question_id` int(5) NOT NULL,
  `correct` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_answer`
--

INSERT INTO `p_answer` (`answer_id`, `answer`, `question_id`, `correct`) VALUES
(1, 'Zim Den', 1, 0),
(2, 'Guido van Rossum', 1, 1),
(3, 'Niene Stom', 1, 0),
(4, 'Wick van Rossum', 1, 0),
(5, '1995', 2, 0),
(6, '1972', 2, 0),
(7, '1981', 2, 0),
(8, '1989', 2, 1),
(9, '16', 3, 0),
(10, '32', 3, 0),
(11, '64', 3, 0),
(12, 'None Of the Above', 3, 1),
(13, '/', 4, 0),
(14, '//', 4, 0),
(15, '#', 4, 1),
(16, '!', 4, 0),
(17, 'Classes are real-world entities while objects are not real', 5, 0),
(18, 'Objects are real-world entities while classes are not real', 5, 1),
(19, 'Both objects and classes are real-world entities', 5, 0),
(20, 'All of the above', 5, 0),
(21, 'To identify the variable', 6, 0),
(22, 'It confuses the interpreter', 6, 0),
(23, 'It indicates a private variable of a class', 6, 1),
(24, 'None of these', 6, 0),
(29, 'val', 7, 1),
(30, 'raise', 7, 0),
(31, 'try', 7, 0),
(32, 'with', 7, 0),
(25, 'Division, Power, Multiplication, Addition and Subtraction', 8, 0),
(26, 'Division and Multiplication', 8, 1),
(27, 'Subtraction and Division', 8, 0),
(28, 'Power and Division', 8, 0),
(33, 'Division', 9, 0),
(34, 'Subtraction', 9, 0),
(35, 'Power', 9, 0),
(36, 'Parentheses', 9, 1),
(37, 'Dictionary', 10, 0),
(38, 'Lists', 10, 0),
(39, 'Class', 10, 1),
(40, 'All of the above', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `p_question`
--

CREATE TABLE `p_question` (
  `Question_id` int(5) NOT NULL,
  `Question` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_question`
--

INSERT INTO `p_question` (`Question_id`, `Question`) VALUES
(1, 'Who developed the Python language?'),
(2, 'In which year was the Python language developed?'),
(3, 'What is the maximum possible length of an identifier?'),
(4, ' Which character is used in Python to make a single line comment?'),
(5, 'Which of the following statements is correct regarding the object-oriented programming concept in Python?'),
(6, 'Why does the name of local variables start with an underscore discouraged?'),
(7, 'Which of the following is not a keyword in Python language?'),
(8, 'Which one of the following has the same precedence level?'),
(9, 'Which one of the following has the highest precedence in the expression?'),
(10, 'Which of the following option is not a core data type in the python language?');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(5) NOT NULL,
  `question_title` varchar(225) NOT NULL,
  `sub_id` int(5) NOT NULL,
  `sub_name` varchar(20) NOT NULL,
  `option1` varchar(225) NOT NULL,
  `option2` varchar(225) NOT NULL,
  `option3` varchar(225) NOT NULL,
  `option4` varchar(225) NOT NULL,
  `right_ans` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question_title`, `sub_id`, `sub_name`, `option1`, `option2`, `option3`, `option4`, `right_ans`) VALUES
(1, 'The default value of a static integer variable of a class in Java is', 1, 'java', '0', 'Garbage', 'NULL', '-1', '0'),
(8, 'anish', 1, 'java', 'Final', 'Final', 'Const', 'Abstract', ''),
(9, 'Anish1', 1, 'java', 'Static', 'Final', 'Const', 'Abstract', ''),
(10, 'swadaef', 1, 'python', 'aa', 'b', 'c', 'd', 'aa'),
(11, 'abcd', 2, '', '1', '2', '3', '4', '4'),
(12, 'laveenaaa', 3, '', 'w', 'x', 'y', 'z', 'x'),
(13, 'abcd', 3, '', 'z', 'x', 'y', 'w', 'w');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` int(5) NOT NULL,
  `question_id` int(5) NOT NULL,
  `sub_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(5) NOT NULL,
  `sub_name` varchar(20) NOT NULL,
  `date_time` datetime(6) NOT NULL,
  `total_questions` int(20) NOT NULL,
  `right_answer_mark` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_name`, `date_time`, `total_questions`, `right_answer_mark`) VALUES
(1, 'java', '0000-00-00 00:00:00.000000', 10, 1),
(2, 'python', '2020-11-22 15:42:34.000000', 10, 1),
(3, 'dbms', '2020-11-22 17:11:56.000000', 10, 1),
(4, 'aptitude', '2020-11-25 11:11:48.000000', 10, 1),
(5, 'Data Structure', '2020-12-03 08:23:49.000000', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `password`, `gender`, `email`, `contact`) VALUES
(6, 'Lavi', 'lavi', 'Lavi123$', 'female', 'laveena02@gmail.com', '9090909080'),
(7, 'navin', 'navin', '123456', 'male', 'navin@gmail.com', '9090909022'),
(8, 'dev', 'dev', 'dev123$', 'male', 'dev@gmail.com', '9090909001'),
(9, 'vinay', 'vinay', 'Vinay123$', 'male', 'vinay2308@gmail.com', '9090909002'),
(10, 'rishika', 'rishika', 'rishika123$', 'female', 'rishi@gmail.com', '9090909003'),
(11, 'dharkan', 'dharkan', 'dharkan123$', 'female', 'lavi@gmail.com', '9090909080'),
(12, 'abc', 'abc', 'abc123456', 'female', 'lavi@gmail.com', '9090909080'),
(13, 'disha', 'disha', 'disha123$', 'female', 'disha@gmail.com', '9090909080'),
(14, 'vimal', 'vimal', 'vimal1234', 'female', 'lavi@gmail.com', '9090909080');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `aptitude`
--
ALTER TABLE `aptitude`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `dbms`
--
ALTER TABLE `dbms`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `ds`
--
ALTER TABLE `ds`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `java`
--
ALTER TABLE `java`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `python`
--
ALTER TABLE `python`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`),
  ADD KEY `quiz_ibfk_1` (`sub_id`),
  ADD KEY `quiz_ibfk_2` (`question_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aptitude`
--
ALTER TABLE `aptitude`
  MODIFY `que_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dbms`
--
ALTER TABLE `dbms`
  MODIFY `que_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ds`
--
ALTER TABLE `ds`
  MODIFY `que_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `java`
--
ALTER TABLE `java`
  MODIFY `que_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `python`
--
ALTER TABLE `python`
  MODIFY `que_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quiz_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `sub_id` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`);

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`),
  ADD CONSTRAINT `quiz_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
