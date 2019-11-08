-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2019 at 02:47 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmi`
--

CREATE TABLE `bmi` (
  `DOB` date NOT NULL,
  `height` float NOT NULL,
  `mass` float NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bmicounter`
--

CREATE TABLE `bmicounter` (
  `user_id` int(28) NOT NULL,
  `username` varchar(255) NOT NULL,
  `age` int(23) NOT NULL,
  `height` int(23) NOT NULL,
  `mass` int(23) NOT NULL,
  `bmi_status` varchar(255) NOT NULL,
  `recommended_package` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `breakfast_carbs`
--

CREATE TABLE `breakfast_carbs` (
  `food_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `calories` varchar(20) NOT NULL,
  `meal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breakfast_carbs`
--

INSERT INTO `breakfast_carbs` (`food_id`, `name`, `quantity`, `calories`, `meal`) VALUES
(1, 'Chapati', '3', '260', 'breakfast'),
(2, 'oats', '50g-serving', '270', 'breakfast'),
(3, 'sweet-potatoes', '1-large', '240', 'breakfast'),
(4, 'yams', '2-medium', '239', 'breakfast'),
(5, 'white-bread', '6-slices', '220', 'breakfast'),
(6, 'brown-bread', '3-slices', '219', 'breakfast');

-- --------------------------------------------------------

--
-- Table structure for table `breakfast_protein`
--

CREATE TABLE `breakfast_protein` (
  `food_id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `calories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breakfast_protein`
--

INSERT INTO `breakfast_protein` (`food_id`, `name`, `quantity`, `calories`) VALUES
(1, 'soya-milk', '400ml', '248'),
(2, 'plain-yogurt', '300ml', '240'),
(3, 'fried-Sausages', '3', '250'),
(4, 'Sausage-roll', '1', '260'),
(5, 'fried-eggs', '3', '260'),
(6, 'boiled-eggs', '4', '240'),
(7, 'whole-milk', '350ml', '256');

-- --------------------------------------------------------

--
-- Table structure for table `carbs`
--

CREATE TABLE `carbs` (
  `food_id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `calories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carbs`
--

INSERT INTO `carbs` (`food_id`, `name`, `quantity`, `calories`) VALUES
(1, 'ugali', '250g-serving', '490'),
(2, 'white-rice', '300g-serving', '450'),
(3, 'brown-rice', '300g-serving', '400'),
(4, 'roast-potatoes', '300g-serving', '350'),
(5, 'pasta', '300g-serving', '405'),
(6, 'mashed-potatoes', '300g-serving', '320');

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `user_no` int(25) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`user_no`, `fullname`, `email`, `username`, `password`, `usertype`, `phone`) VALUES
(1, 'al ', 'al@gmail.com', 'al', '12345', 'client', '92938733'),
(2, 'Alvin', 'alvin.ik70@gmail.com', 'kangatta', 'd41d8cd98f00b204e9800998ecf8427e', '', '706022451'),
(3, 'Alvin', 'alvin.ik70@gmail.com', 'al', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', '707112345'),
(4, 'el', 'alvin.njenga@strathmore.edu', 'el', '81dc9bdb52d04dc20036dbd8313ed055', 'client', '707112345'),
(5, 'el', 'alvin.njenga@strathmore.edu', 'el', 'd41d8cd98f00b204e9800998ecf8427e', 'client', '707112345'),
(6, 'Alvin', 'alvin.njenga@strathmore.edu', 'vin', 'e10adc3949ba59abbe56e057f20f883e', 'client', '706022451'),
(7, 'mich', 'laetitialovena.pitchamootoo@aiesec.net', 'mich', 'mich', 'client', '707112345'),
(8, 'allan', 'alvin.njenga@strathmore.edu', 'allan1', '12345', 'client', '706022451'),
(9, '', '', '', '', 'admin', '0'),
(10, '', '', '', '', 'admin', '0'),
(11, 'Alvin', 'alvin.ik70@gmail.com', 'al', '123456789', 'client', '706022451'),
(12, 'Alvin', 'alvin.ik70@gmail.com', 'kangatta', '12345678980', 'client', '706022451'),
(13, '', '', '', '', '', '0'),
(16, 'Michelle Kinda', 'alvin.ik70@gmail.com', 'kinda', '123456789', 'client', '+254706066626'),
(17, '', '', '', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodID` int(16) NOT NULL,
  `typeID` int(16) NOT NULL,
  `food` varchar(255) NOT NULL,
  `amount` varchar(16) NOT NULL,
  `calories` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodID`, `typeID`, `food`, `amount`, `calories`) VALUES
(1, 1, 'chapati', '1', 81),
(2, 1, 'white rice', '100g', 151),
(3, 1, 'brown rice', '100g', 111),
(4, 1, 'ugali', '100g', 360),
(5, 1, 'oats', '100g', 389),
(6, 1, 'potatoes', '100g', 77),
(7, 1, 'mashed potatoes', '100g', 88),
(8, 1, 'roast potatoes', '100g', 93),
(9, 1, 'sweet potatoes', '100g', 86),
(10, 1, 'pasta', '100g', 131),
(11, 1, 'yams', '100g', 118),
(12, 1, 'white bread', '1 slice', 32),
(13, 1, 'brown bread', '1 slice', 73),
(14, 2, 'beef', '100g', 250),
(16, 2, 'roast beef', '100g', 500),
(17, 2, 'chicken', '100g', 220),
(18, 2, 'liver', '100g', 150),
(19, 2, 'sausage', '1', 80),
(20, 2, 'sausage roll', '100g', 149),
(21, 2, 'lamb', '100g', 180),
(22, 2, 'tuna', '100g', 160),
(23, 2, 'turkey', '100g', 180),
(24, 2, 'sardines', '100g', 180),
(25, 2, 'fried egg', '1', 92),
(26, 2, 'boiled egg', '1', 77),
(27, 2, 'whole milk', '250ml', 156),
(29, 2, 'soya milk', '250ml', 135),
(30, 2, 'yoghurt', '250ml', 180),
(31, 2, 'lentils', '100g', 118),
(32, 2, 'chickpeas', '100g', 164),
(33, 2, 'kidney beans', '100g', 83),
(34, 2, 'soybeans', '100g', 173),
(35, 4, 'strawberries', '100g', 49),
(36, 4, 'sweet melon', '100g', 36),
(37, 4, 'apple', '100g', 52),
(38, 4, 'avocado', '1', 89),
(39, 4, 'banana', '100g', 89),
(40, 3, 'cabbage', '100g', 25),
(41, 3, 'managu', '100g', 38),
(42, 4, 'lettuce', '100g', 15),
(43, 3, 'tomatoes', '100g', 18),
(44, 3, 'cucumbers', '100g', 16),
(45, 3, 'kales and spinach', '100g', 49),
(46, 3, 'peas', '100g', 81),
(47, 5, 'tea', '250ml', 3),
(48, 5, 'coffee', '250ml', 0);

-- --------------------------------------------------------

--
-- Table structure for table `foodtype`
--

CREATE TABLE `foodtype` (
  `typeID` int(16) NOT NULL,
  `foodType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodtype`
--

INSERT INTO `foodtype` (`typeID`, `foodType`) VALUES
(1, 'Carbohydrates'),
(2, 'Proteins'),
(3, 'Vegetable'),
(4, 'Fruit'),
(5, 'Drinks');

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `food_id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `calories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`food_id`, `name`, `quantity`, `calories`) VALUES
(1, 'strawberries', '100g', '50'),
(2, 'sweet-melon', '150g/1-medium-slice', '47'),
(3, 'apples', '100g-/1-medium', '52'),
(4, 'bananas', '1-large', '44');

-- --------------------------------------------------------

--
-- Table structure for table `mealplan`
--

CREATE TABLE `mealplan` (
  `food_id` int(20) NOT NULL,
  `meal` varchar(255) NOT NULL,
  `protein` varchar(255) NOT NULL,
  `carbs` varchar(255) NOT NULL,
  `vitamins` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mealplan`
--

INSERT INTO `mealplan` (`food_id`, `meal`, `protein`, `carbs`, `vitamins`) VALUES
(1, 'break', 'plain-yogurt', 'oats', 'strawberries'),
(2, 'lunch', 'chicken-stew', 'ugali', 'lettuce'),
(3, 'supper', 'fried-turkey', 'brown-rice', 'managu'),
(4, 'break', 'soya-milk', 'Chapati', 'strawberries'),
(5, 'lunch', 'beef-stew', 'ugali', 'avocado'),
(6, 'supper', 'beef-stew', 'ugali', 'avocado'),
(7, 'break', 'Sausage-roll', 'Chapati', 'strawberries'),
(8, 'lunch', 'roast-beef', 'white-rice', 'avocado'),
(9, 'supper', 'beef-stew', 'ugali', 'avocado'),
(10, 'break', 'Sausage-roll', 'Chapati', 'strawberries'),
(11, 'lunch', 'roast-beef', 'white-rice', 'avocado'),
(12, 'supper', 'beef-stew', 'ugali', 'avocado'),
(22, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(23, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(24, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(73, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(74, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(75, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(76, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(77, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(78, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(79, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(80, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(81, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(82, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(83, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(84, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(85, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(86, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(87, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(88, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(89, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(90, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(91, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(92, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(93, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(94, 'break', '350ml whole-milk', '3 Chapati', '100g strawberries'),
(95, 'lunch', '250g-serving fried-sardines', '250g-serving ugali', '1-medium avocado'),
(96, 'supper', '200g-serving chicken-stew', '250g-serving ugali', '1-medium avocado'),
(97, 'break', '350ml whole-milk', '3 Chapati', '100g strawberries'),
(98, 'lunch', '250g-serving fried-sardines', '250g-serving ugali', '1-medium avocado'),
(99, 'supper', '200g-serving chicken-stew', '250g-serving ugali', '1-medium avocado'),
(100, 'break', '350ml whole-milk', '3 Chapati', '100g strawberries'),
(101, 'lunch', '250g-serving fried-sardines', '250g-serving ugali', '1-medium avocado'),
(102, 'supper', '200g-serving chicken-stew', '250g-serving ugali', '1-medium avocado'),
(103, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(104, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(105, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(106, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(107, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(108, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(109, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(110, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(111, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(112, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(113, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(114, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `PersonID` int(16) NOT NULL,
  `PersonType` varchar(255) NOT NULL DEFAULT '"Trainer", "Client"',
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `NationalID` int(16) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `WorkoutDays` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `protein`
--

CREATE TABLE `protein` (
  `food_id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `calories` varchar(255) NOT NULL,
  `meal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `protein`
--

INSERT INTO `protein` (`food_id`, `name`, `quantity`, `calories`, `meal`) VALUES
(1, 'beef-stew', '200g-serving', '500', 'other'),
(2, 'roast-beef', '200g-serving', '500', 'other'),
(3, 'chicken-stew', '200g-serving', '440', 'other'),
(4, 'roast-chicken', '200g-serving', '562', 'other'),
(5, 'fried-liver', '250g-serving', '470', 'other'),
(6, 'cooked-mutton', '250g-serving', '440', 'other'),
(7, 'tuna', '300g-serving', '480', 'other'),
(8, ' fried-turkey', '250g-serving', '440', 'other'),
(9, 'fried-sardines', '250g-serving', '440', 'other'),
(10, 'lentils', '300g-serving', '380', 'other'),
(11, 'peas', '300g-serving', '400', 'other'),
(12, 'lentils', '300g-serving', '380', 'other'),
(13, 'chickpeas', '200g-serving', '510', 'other'),
(14, 'kidney-beans', '350g-serving', '400', 'other'),
(15, 'soya-beans', '300g-serving', '380', 'other');

-- --------------------------------------------------------

--
-- Table structure for table `slim_mealplan`
--

CREATE TABLE `slim_mealplan` (
  `food_id` int(20) NOT NULL,
  `meal` varchar(255) NOT NULL,
  `protein` varchar(255) NOT NULL,
  `carbs` varchar(255) NOT NULL,
  `vitamins` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slim_mealplan`
--

INSERT INTO `slim_mealplan` (`food_id`, `meal`, `protein`, `carbs`, `vitamins`) VALUES
(1, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(2, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(3, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(4, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(5, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(6, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(7, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(8, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(9, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(10, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(11, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(12, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(13, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(14, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(15, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(16, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(17, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(18, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(19, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(20, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(21, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(22, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(23, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(24, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(25, 'break', '400ml soya-milk', '3 Chapati', '100g strawberries'),
(26, 'lunch', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado'),
(27, 'supper', '200g-serving beef-stew', '250g-serving ugali', '1-medium avocado');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `gender`, `email`, `password`) VALUES
(1, 'al', 'al', 'Male', 'alvin.ik70@gmail.com', 'e10adc3949ba59abbe56'),
(2, 'vin', 'al', 'Male', 'alvin.ik70@gmail.com', '827ccb0eea8a706c4c34');

-- --------------------------------------------------------

--
-- Table structure for table `vitamins`
--

CREATE TABLE `vitamins` (
  `food_id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `calories` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vitamins`
--

INSERT INTO `vitamins` (`food_id`, `name`, `quantity`, `calories`) VALUES
(4, 'avocado', '1-medium', '60'),
(6, 'cabbage', '200g-serving', '50'),
(7, 'managu', '150g-serving', '55'),
(8, 'lettuce', '300g-serving', '45'),
(9, 'kales/spinach', '100g-serving', '49');

-- --------------------------------------------------------

--
-- Table structure for table `weight-breakfast`
--

CREATE TABLE `weight-breakfast` (
  `food_id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `calories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weight-breakfast`
--

INSERT INTO `weight-breakfast` (`food_id`, `name`, `quantity`, `calories`) VALUES
(1, 'soya-milk', '', ''),
(2, 'plain-yogurt', '', ''),
(3, 'fried-Sausages', '', ''),
(4, 'Sausage-roll', '', ''),
(5, 'fried-eggs', '', ''),
(6, 'boiled-eggs', '', ''),
(7, 'whole-milk', '', ''),
(8, 'soya-milk', '', ''),
(9, 'plain-yogurt', '', ''),
(10, 'fried-Sausages', '', ''),
(11, 'Sausage-roll', '', ''),
(12, 'fried-eggs', '', ''),
(13, 'boiled-eggs', '', ''),
(14, 'whole-milk', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `weight_breakcarbs`
--

CREATE TABLE `weight_breakcarbs` (
  `food_id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `calories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weight_breakcarbs`
--

INSERT INTO `weight_breakcarbs` (`food_id`, `name`, `quantity`, `calories`) VALUES
(1, 'Chapati', '', ''),
(2, 'oats', '', ''),
(3, 'sweet-potatoes', '', ''),
(4, 'yams', '', ''),
(5, 'white-bread', '', ''),
(6, 'brown-bread', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `weight_breakprotein`
--

CREATE TABLE `weight_breakprotein` (
  `food_id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `calories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weight_breakprotein`
--

INSERT INTO `weight_breakprotein` (`food_id`, `name`, `quantity`, `calories`) VALUES
(1, 'soya-milk', '', ''),
(2, 'plain-yogurt', '', ''),
(3, 'fried-sausages', '', ''),
(4, 'sausage-roll', '', ''),
(5, 'fried-eggs', '', ''),
(6, 'boiled-eggs', '', ''),
(7, 'whole-milk', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `weight_carbs`
--

CREATE TABLE `weight_carbs` (
  `food_id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `calories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weight_carbs`
--

INSERT INTO `weight_carbs` (`food_id`, `name`, `quantity`, `calories`) VALUES
(1, 'ugali', '250g-serving', '490'),
(2, 'white-rice', '300g-serving', '450'),
(3, 'brown-rice', '300g-serving', '400'),
(4, 'roast-potatoes', '300g-serving', '350'),
(5, 'pasta', '300g-serving', '405'),
(6, 'mashed-potatoes', '300g-serving', '320');

-- --------------------------------------------------------

--
-- Table structure for table `weight_protein`
--

CREATE TABLE `weight_protein` (
  `food_id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `calories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weight_protein`
--

INSERT INTO `weight_protein` (`food_id`, `name`, `quantity`, `calories`) VALUES
(1, 'beef-stew', '', ''),
(2, 'roast-beef', '', ''),
(3, 'chicken-stew', '', ''),
(4, 'roast-chicken', '', ''),
(5, 'fried-liver', '', ''),
(6, 'fried-mutton', '', ''),
(7, 'fried-tuna', '', ''),
(8, 'fried-sardines(omena)', '', ''),
(9, 'lentils', '', ''),
(10, 'peas', '', ''),
(11, 'chick-peas', '', ''),
(12, 'kidney-beans', '', ''),
(13, 'soya-beans', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `workout_days`
--

CREATE TABLE `workout_days` (
  `user_id` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `id_number` int(20) NOT NULL,
  `workoutdays` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmicounter`
--
ALTER TABLE `bmicounter`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `breakfast_carbs`
--
ALTER TABLE `breakfast_carbs`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `breakfast_protein`
--
ALTER TABLE `breakfast_protein`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `carbs`
--
ALTER TABLE `carbs`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`user_no`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodID`);

--
-- Indexes for table `foodtype`
--
ALTER TABLE `foodtype`
  ADD PRIMARY KEY (`typeID`);

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `mealplan`
--
ALTER TABLE `mealplan`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`PersonID`);

--
-- Indexes for table `protein`
--
ALTER TABLE `protein`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `slim_mealplan`
--
ALTER TABLE `slim_mealplan`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vitamins`
--
ALTER TABLE `vitamins`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `weight-breakfast`
--
ALTER TABLE `weight-breakfast`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `weight_breakcarbs`
--
ALTER TABLE `weight_breakcarbs`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `weight_breakprotein`
--
ALTER TABLE `weight_breakprotein`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `weight_carbs`
--
ALTER TABLE `weight_carbs`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `weight_protein`
--
ALTER TABLE `weight_protein`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `workout_days`
--
ALTER TABLE `workout_days`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bmicounter`
--
ALTER TABLE `bmicounter`
  MODIFY `user_id` int(28) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `breakfast_carbs`
--
ALTER TABLE `breakfast_carbs`
  MODIFY `food_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `breakfast_protein`
--
ALTER TABLE `breakfast_protein`
  MODIFY `food_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `carbs`
--
ALTER TABLE `carbs`
  MODIFY `food_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `user_no` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `foodID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `food_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mealplan`
--
ALTER TABLE `mealplan`
  MODIFY `food_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `PersonID` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `protein`
--
ALTER TABLE `protein`
  MODIFY `food_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `slim_mealplan`
--
ALTER TABLE `slim_mealplan`
  MODIFY `food_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vitamins`
--
ALTER TABLE `vitamins`
  MODIFY `food_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `weight-breakfast`
--
ALTER TABLE `weight-breakfast`
  MODIFY `food_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `weight_breakcarbs`
--
ALTER TABLE `weight_breakcarbs`
  MODIFY `food_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `weight_breakprotein`
--
ALTER TABLE `weight_breakprotein`
  MODIFY `food_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `weight_carbs`
--
ALTER TABLE `weight_carbs`
  MODIFY `food_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `weight_protein`
--
ALTER TABLE `weight_protein`
  MODIFY `food_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `workout_days`
--
ALTER TABLE `workout_days`
  MODIFY `user_id` int(25) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
