-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 07:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `pass`) VALUES
('1001', '1234'),
('1002', '1234'),
('1003', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `habitat` varchar(50) NOT NULL,
  `diet` varchar(50) NOT NULL,
  `range` varchar(50) NOT NULL,
  `desc` varchar(500) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`id`, `name`, `weight`, `height`, `habitat`, `diet`, `range`, `desc`, `img`) VALUES
(1, 'African Elephant', 'Up to 6,000 kg', 'Up to 3.5 meters', 'Savannahs and forests of Africa', 'Herbivore', 'Various African countries', 'The African elephant is the largest land animal on Earth and is known for its long trunk and large ears.', '3.jpg'),
(2, 'Giant Panda', '70 to 160 kg', 'Up to 1.2 meters', 'Bamboo forests in China', 'Herbivore (primarily bamboo)', 'China', 'The giant panda is an iconic symbol of conservation efforts and is known for its distinctive black and white fur.', 'panda.jpg'),
(3, 'Lion', '120 to 190 kg', 'About 1.2 meters', 'Grasslands and savannahs of Africa', 'Carnivore', 'Sub-Saharan Africa', 'Lions are known as the \"King of the Jungle\" and are famous for their social behavior in prides.', '1.jpg'),
(4, 'Great White Shark', 'Up to 2,200 kg', 'Up to 6 meters', 'Oceans worldwide', 'Carnivore', 'Global', 'Great white sharks are powerful predators known for their large size and fearsome reputation.', 'shark.jpg'),
(5, 'Giraffe', '800 to 1,400 kg', 'Up to 5.5 meters', 'Savannahs and woodlands of Africa', 'Herbivore', 'Sub-Saharan Africa', 'Giraffes are recognized for their long necks and unique spotted patterns.', 'giraffe.jpg'),
(6, 'Polar Bear', '350 to 700 kg', 'About 1.6 meters', 'Arctic region, sea ice, and coastlines', 'Carnivore ', 'Arctic Circle', 'Polar bears are well-adapted to cold climates and are excellent swimmers.', '4.jpg'),
(7, 'Koala', '4 to 15 kg', 'Up to 70 cm', 'Eucalyptus forests in Australia', 'Herbivore', 'Eastern and southern Australia', 'Koalas are marsupials known for their cuddly appearance and love for eucalyptus leaves.', 'koala.jpg'),
(9, 'Bald Eagle', '3 to 6.3 kg', 'Up to 2.3 meters', 'North America', 'Carnivore', 'North America', 'The bald eagle is the national bird and symbol of the United States.', '5.jpg'),
(10, 'Orangutan', '30 to 100 kg', 'Up to 1.5 meters', 'Rainforests of Borneo and Sumatra', 'Omnivore', 'Borneo and Sumatra', 'Orangutans are known for their red fur and are one of the closest relatives to humans.', 'orangutan.jpg'),
(11, 'Red Panda', '3 to 6 kg', 'Up to 60 cm', 'Himalayan forests', 'Omnivore', 'Himalayas and surrounding regions', 'Red pandas are adorable creatures with bushy tails and a taste for bamboo, resembling a cross between a bear and a raccoon.', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `expiry` varchar(50) NOT NULL,
  `cvc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`email`, `number`, `name`, `expiry`, `cvc`) VALUES
('valamahesh2003@gmail.com', '1121 2121 2121 2121', 'mahesh vala', '12 / 12', '123'),
('aarav.sharma@example.com', '1212 1212 1212 1212', 'Aarav Sharma', '12 / 23', '121'),
('isha.patel@example.com', '1234 5678 9012 3456', 'Isha Patel', '11 / 24', '234'),
('rajesh.singh@example.com', '9876 5432 1098 7654', 'Rajesh Singh', '03 / 25', '345'),
('divya.gupta@example.com', '4321 8765 2109 8765', 'Divya Gupta', '09 / 26', '456'),
('sachin.verma@example.com', '5678 1234 9876 5432', 'Sachin Verma', '06 / 27', '567'),
('ananya.kumar@example.com', '7890 4321 8765 2109', 'Ananya Kumar', '02 / 28', '678'),
('nikhil.sharma@example.com', '3456 7890 1234 5678', 'Nikhil Sharma', '07 / 29', '789'),
('riya.yadav@example.com', '2109 8765 4321 9876', 'Riya Yadav', '10 / 30', '890'),
('manish.pandey@example.com', '6543 2109 8765 4321', 'Manish Pandey', '05 / 31', '901'),
('aditi.mishra@example.com', '9012 3456 7890 1234', 'Aditi Mishra', '01 / 32', '012'),
('akshay.kumar@example.com', '6789 0123 4567 8901', 'Akshay Kumar', '08 / 33', '123'),
('pooja.reddy@example.com', '2345 6789 0123 4567', 'Pooja Reddy', '04 / 34', '234'),
('kiran.gupta@example.com', '1098 7654 3210 9876', 'Kiran Gupta', '11 / 35', '345'),
('harsh.shah@example.com', '5432 1098 7654 3210', 'Harsh Shah', '12 / 36', '456'),
('chirag.mehta@example.com', '7890 1234 5678 9012', 'Chirag Mehta', '09 / 37', '567'),
('sanjay.verma@example.com', '4567 8901 2345 6789', 'Sanjay Verma', '07 / 38', '678'),
('rani.yadav@example.com', '4321 9876 5432 1098', 'Rani Yadav', '03 / 39', '789'),
('amit.singh@example.com', '1234 5678 9012 3456', 'Amit Singh', '02 / 40', '890'),
('bhavya.rajput@example.com', '9876 5432 1098 7654', 'Bhavya Rajput', '05 / 41', '901'),
('deepak.kumar@example.com', '6543 2109 8765 4321', 'Deepak Kumar', '10 / 42', '012'),
('shilpa.joshi@example.com', '2345 6789 0123 4567', 'Shilpa Joshi', '06 / 43', '123'),
('rahul.sharma@example.com', '9012 3456 7890 1234', 'Rahul Sharma', '01 / 44', '234'),
('aarav.mehta@example.com', '6789 0123 4567 8901', 'Aarav Mehta', '04 / 45', '345'),
('aditi.reddy@example.com', '5432 1098 7654 3210', 'Aditi Reddy', '08 / 46', '456'),
('harsh.verma@example.com', '7890 1234 5678 9012', 'Harsh Verma', '12 / 47', '567'),
('manish.kumar@example.com', '6543 2109 8765 4321', 'Manish Kumar', '05 / 48', '678'),
('isha.patel@example.com', '1234 5678 9012 3456', 'Isha Patel', '11 / 49', '789'),
('divya.gupta@example.com', '4321 8765 2109 8765', 'Divya Gupta', '03 / 50', '890'),
('sachin.verma@example.com', '5678 1234 9876 5432', 'Sachin Verma', '07 / 51', '901'),
('rajesh.singh@example.com', '9876 5432 1098 7654', 'Rajesh Singh', '01 / 52', '012'),
('riya.yadav@example.com', '2109 8765 4321 9876', 'Riya Yadav', '08 / 53', '123'),
('ananya.kumar@example.com', '7890 4321 8765 2109', 'Ananya Kumar', '06 / 54', '234'),
('nikhil.sharma@example.com', '3456 7890 1234 5678', 'Nikhil Sharma', '12 / 55', '345'),
('riya.chauhan@example.com', '5678 1234 9876 5432', 'Riya Chauhan', '03 / 56', '456'),
('amit.yadav@example.com', '1234 5678 9012 3456', 'Amit Yadav', '09 / 57', '567'),
('ananya.sharma@example.com', '2345 6789 0123 4567', 'Ananya Sharma', '05 / 58', '678'),
('pooja.gupta@example.com', '4321 8765 2109 8765', 'Pooja Gupta', '01 / 59', '789'),
('manish.patel@example.com', '6789 0123 4567 8901', 'Manish Patel', '06 / 60', '890'),
('rani.verma@example.com', '3456 7890 1234 5678', 'Rani Verma', '11 / 61', '901'),
('sanjay.kumar@example.com', '5432 1098 7654 3210', 'Sanjay Kumar', '07 / 62', '012'),
('deepak.joshi@example.com', '7890 1234 5678 9012', 'Deepak Joshi', '12 / 63', '123'),
('kiran.yadav@example.com', '2109 8765 4321 9876', 'Kiran Yadav', '09 / 64', '234'),
('bhavya.rajput@example.com', '9876 5432 1098 7654', 'Bhavya Rajput', '04 / 65', '345'),
('sanjay.sharma@example.com', '5678 1234 9876 5432', 'Sanjay Sharma', '02 / 66', '456'),
('isha.verma@example.com', '1234 5678 9012 3456', 'Isha Verma', '10 / 67', '567'),
('aditi.rajput@example.com', '2345 6789 0123 4567', 'Aditi Rajput', '08 / 68', '678'),
('kiran.mehta@example.com', '4321 8765 2109 8765', 'Kiran Mehta', '05 / 69', '789'),
('rani.mehta@example.com', '7890 1234 5678 9012', 'Rani Mehta', '01 / 70', '890'),
('divya.verma@example.com', '3456 7890 1234 5678', 'Divya Verma', '07 / 71', '901'),
('harsh.patel@example.com', '5432 1098 7654 3210', 'Harsh Patel', '12 / 72', '012'),
('manish.kumar@example.com', '6789 0123 4567 8901', 'Manish Kumar', '06 / 73', '123'),
('sanjay.sharma@example.com', '7890 1234 5678 9012', 'Sanjay Sharma', '03 / 74', '234'),
('nikhil.sharma@example.com', '5678 1234 9876 5432', 'Nikhil Sharma', '09 / 75', '345'),
('pooja.yadav@example.com', '2345 6789 0123 4567', 'Pooja Yadav', '01 / 76', '456'),
('rajesh.kumar@example.com', '1234 5678 9012 3456', 'Rajesh Kumar', '11 / 77', '567'),
('aditi.gupta@example.com', '4321 8765 2109 8765', 'Aditi Gupta', '08 / 78', '678'),
('deepak.patel@example.com', '9876 5432 1098 7654', 'Deepak Patel', '04 / 79', '789'),
('shilpa.sharma@example.com', '2109 8765 4321 9876', 'Shilpa Sharma', '07 / 80', '890'),
('bhavya.joshi@example.com', '1234 5678 9012 3456', 'Bhavya Joshi', '02 / 81', '901'),
('ananya.yadav@example.com', '5678 1234 9876 5432', 'Ananya Yadav', '12 / 82', '012'),
('kiran.kumar@example.com', '7890 4321 8765 2109', 'Kiran Kumar', '06 / 83', '123'),
('rani.kumar@example.com', '3456 7890 1234 5678', 'Rani Kumar', '03 / 84', '234'),
('sachin.patel@example.com', '4321 8765 2109 8765', 'Sachin Patel', '09 / 85', '345'),
('manish.yadav@example.com', '7890 1234 5678 9012', 'Manish Yadav', '01 / 86', '456'),
('harsh.kumar@example.com', '5432 1098 7654 3210', 'Harsh Kumar', '11 / 87', '567'),
('riya.sharma@example.com', '9876 5432 1098 7654', 'Riya Sharma', '08 / 88', '678'),
('pooja.kumar@example.com', '1234 5678 9012 3456', 'Pooja Kumar', '04 / 89', '789'),
('deepak.yadav@example.com', '2109 8765 4321 9876', 'Deepak Yadav', '07 / 90', '890'),
('aditi.sharma@example.com', '5678 1234 9876 5432', 'Aditi Sharma', '02 / 91', '901'),
('nikhil.kumar@example.com', '1234 5678 9012 3456', 'Nikhil Kumar', '12 / 92', '012'),
('kiran.patel@example.com', '4321 8765 2109 8765', 'Kiran Patel', '06 / 93', '123'),
('bhavya.verma@example.com', '7890 1234 5678 9012', 'Bhavya Verma', '03 / 94', '234'),
('sachin.sharma@example.com', '3456 7890 1234 5678', 'Sachin Sharma', '09 / 95', '345');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(50) NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `gender`, `age`, `city`) VALUES
(120001, 'Aarav Sharma', 'aarav.sharma@example.com', '1234567890', 'Male', 28, 'Delhi'),
(120002, 'Isha Patel', 'isha.patel@example.com', '1234567890', 'Female', 35, 'Mumbai'),
(120003, 'Rajesh Singh', 'rajesh.singh@example.com', '1234567890', 'Male', 45, 'Bangalore'),
(120004, 'Divya Gupta', 'divya.gupta@example.com', '1234567890', 'Female', 22, 'Chennai'),
(120005, 'Sachin Verma', 'sachin.verma@example.com', '1234567890', 'Male', 29, 'Kolkata'),
(120006, 'Ananya Kumar', 'ananya.kumar@example.com', '1234567890', 'Female', 26, 'Hyderabad'),
(120007, 'Nikhil Sharma', 'nikhil.sharma@example.com', '1234567890', 'Male', 32, 'Pune'),
(120008, 'Riya Yadav', 'riya.yadav@example.com', '1234567890', 'Female', 24, 'Jaipur'),
(120009, 'Manish Pandey', 'manish.pandey@example.com', '1234567890', 'Male', 40, 'Lucknow'),
(120010, 'Aditi Mishra', 'aditi.mishra@example.com', '1234567890', 'Female', 29, 'Patna'),
(120011, 'Akshay Kumar', 'akshay.kumar@example.com', '1234567890', 'Male', 33, 'Chandigarh'),
(120012, 'Pooja Reddy', 'pooja.reddy@example.com', '1234567890', 'Female', 28, 'Indore'),
(120013, 'Kiran Gupta', 'kiran.gupta@example.com', '1234567890', 'Male', 26, 'Ludhiana'),
(120014, 'Harsh Shah', 'harsh.shah@example.com', '1234567890', 'Male', 30, 'Coimbatore'),
(120015, 'Chirag Mehta', 'chirag.mehta@example.com', '1234567890', 'Male', 27, 'Kanpur'),
(120016, 'Sanjay Verma', 'sanjay.verma@example.com', '1234567890', 'Male', 42, 'Visakhapatnam'),
(120017, 'Rani Yadav', 'rani.yadav@example.com', '1234567890', 'Female', 28, 'Kochi'),
(120018, 'Amit Singh', 'amit.singh@example.com', '1234567890', 'Male', 31, 'Ahmedabad'),
(120019, 'Bhavya Rajput', 'bhavya.rajput@example.com', '1234567890', 'Female', 25, 'Nagpur'),
(120020, 'Deepak Kumar', 'deepak.kumar@example.com', '1234567890', 'Male', 36, 'Lucknow'),
(120021, 'Shilpa Joshi', 'shilpa.joshi@example.com', '1234567890', 'Female', 34, 'Pune'),
(120022, 'Rahul Sharma', 'rahul.sharma@example.com', '1234567890', 'Male', 37, 'Mysore'),
(120023, 'Ravi Gupta', 'ravi.gupta@example.com', '1234567890', 'Male', 43, 'Surat'),
(120024, 'Neha Patel', 'neha.patel@example.com', '1234567890', 'Female', 30, 'Jaipur'),
(120025, 'Aarushi Jain', 'aarushi.jain@example.com', '1234567890', 'Female', 28, 'Chennai'),
(120026, 'Sanjay Mehta', 'sanjay.mehta@example.com', '1234567890', 'Male', 46, 'Kolkata'),
(120027, 'Riya Chauhan', 'riya.chauhan@example.com', '1234567890', 'Female', 29, 'Bhopal'),
(120028, 'Amit Yadav', 'amit.yadav@example.com', '1234567890', 'Male', 39, 'Raipur'),
(120029, 'Ananya Sharma', 'ananya.sharma@example.com', '1234567890', 'Female', 27, 'Kanpur'),
(120030, 'Pooja Gupta', 'pooja.gupta@example.com', '1234567890', 'Female', 25, 'Indore'),
(120031, 'Manish Patel', 'manish.patel@example.com', '1234567890', 'Male', 41, 'Ludhiana'),
(120032, 'Rani Verma', 'rani.verma@example.com', '1234567890', 'Female', 28, 'Coimbatore'),
(120033, 'Akshay Reddy', 'akshay.reddy@example.com', '1234567890', 'Male', 34, 'Chandigarh'),
(120034, 'Sachin Kumar', 'sachin.kumar@example.com', '1234567890', 'Male', 38, 'Visakhapatnam'),
(120035, 'Isha Pandey', 'isha.pandey@example.com', '1234567890', 'Female', 23, 'Kochi'),
(120036, 'Kiran Yadav', 'kiran.yadav@example.com', '1234567890', 'Female', 26, 'Nagpur'),
(120037, 'Divya Verma', 'divya.verma@example.com', '1234567890', 'Female', 25, 'Mysore'),
(120038, 'Nikhil Shah', 'nikhil.shah@example.com', '1234567890', 'Male', 29, 'Surat'),
(120039, 'Harsh Kumar', 'harsh.kumar@example.com', '1234567890', 'Male', 32, 'Jaipur'),
(120040, 'Aarav Mehta', 'aarav.mehta@example.com', '1234567890', 'Male', 27, 'Chennai'),
(120041, 'Chirag Joshi', 'chirag.joshi@example.com', '1234567890', 'Male', 33, 'Kolkata'),
(120042, 'Aditi Rajput', 'aditi.rajput@example.com', '1234567890', 'Female', 22, 'Delhi'),
(120043, 'Deepak Verma', 'deepak.verma@example.com', '1234567890', 'Male', 36, 'Pune'),
(120044, 'Rahul Sharma', 'rahul.sharma@example.com', '1234567890', 'Male', 40, 'Jaipur'),
(120045, 'Manish Kumar', 'manish.kumar@example.com', '1234567890', 'Male', 44, 'Lucknow'),
(120046, 'Kiran Patel', 'kiran.patel@example.com', '1234567890', 'Female', 28, 'Bangalore'),
(120047, 'Sachin Sharma', 'sachin.sharma@example.com', '1234567890', 'Male', 39, 'Chennai'),
(120048, 'Bhavya Mehta', 'bhavya.mehta@example.com', '1234567890', 'Female', 29, 'Mumbai'),
(120049, 'Amit Kumar', 'amit.kumar@example.com', '1234567890', 'Male', 31, 'Kolkata'),
(120050, 'Pooja Gupta', 'pooja.gupta@example.com', '1234567890', 'Female', 26, 'Lucknow'),
(120051, 'Divya Verma', 'divya.verma@example.com', '1234567890', 'Female', 28, 'Delhi'),
(120052, 'Rani Singh', 'rani.singh@example.com', '1234567890', 'Female', 22, 'Chandigarh'),
(120053, 'Akshay Sharma', 'akshay.sharma@example.com', '1234567890', 'Male', 33, 'Pune'),
(120054, 'Aditi Reddy', 'aditi.reddy@example.com', '1234567890', 'Female', 29, 'Bangalore'),
(120055, 'Harsh Verma', 'harsh.verma@example.com', '1234567890', 'Male', 35, 'Mumbai'),
(120056, 'Nikhil Kumar', 'nikhil.kumar@example.com', '1234567890', 'Male', 30, 'Chennai'),
(120057, 'Isha Mehta', 'isha.mehta@example.com', '1234567890', 'Female', 27, 'Kolkata'),
(120058, 'Deepak Yadav', 'deepak.yadav@example.com', '1234567890', 'Male', 42, 'Delhi'),
(120059, 'Kiran Shah', 'kiran.shah@example.com', '1234567890', 'Female', 28, 'Mumbai'),
(120060, 'Sachin Singh', 'sachin.singh@example.com', '1234567890', 'Male', 29, 'Pune'),
(120061, 'Pooja Patel', 'pooja.patel@example.com', '1234567890', 'Female', 25, 'Chennai'),
(120062, 'Aarav Yadav', 'aarav.yadav@example.com', '1234567890', 'Male', 34, 'Hyderabad'),
(120063, 'Divya Joshi', 'divya.joshi@example.com', '1234567890', 'Female', 26, 'Jaipur'),
(120064, 'Riya Kumar', 'riya.kumar@example.com', '1234567890', 'Female', 23, 'Bangalore'),
(120065, 'Manish Verma', 'manish.verma@example.com', '1234567890', 'Male', 28, 'Chandigarh'),
(120066, 'Rahul Shah', 'rahul.shah@example.com', '1234567890', 'Male', 32, 'Pune'),
(120067, 'Amit Kumar', 'amit.kumar@example.com', '1234567890', 'Male', 39, 'Lucknow'),
(120068, 'Bhavya Singh', 'bhavya.singh@example.com', '1234567890', 'Female', 27, 'Delhi'),
(120069, 'Chirag Sharma', 'chirag.sharma@example.com', '1234567890', 'Male', 38, 'Chennai'),
(120070, 'Isha Verma', 'isha.verma@example.com', '1234567890', 'Female', 25, 'Mumbai'),
(120071, 'Ravi Kumar', 'ravi.kumar@example.com', '1234567890', 'Male', 44, 'Kolkata'),
(120072, 'Rani Mehta', 'rani.mehta@example.com', '1234567890', 'Female', 23, 'Hyderabad'),
(120073, 'Sanjay Joshi', 'sanjay.joshi@example.com', '1234567890', 'Male', 47, 'Delhi'),
(120074, 'Kiran Mehta', 'kiran.mehta@example.com', '1234567890', 'Female', 28, 'Bangalore'),
(120075, 'Manish Kumar', 'manish.kumar@example.com', '1234567890', 'Male', 36, 'Chandigarh'),
(120076, 'Aditi Yadav', 'aditi.yadav@example.com', '1234567890', 'Female', 24, 'Pune'),
(120077, 'Harsh Patel', 'harsh.patel@example.com', '1234567890', 'Male', 31, 'Jaipur'),
(120078, 'Sachin Joshi', 'sachin.joshi@example.com', '1234567890', 'Male', 29, 'Chennai'),
(120079, 'Deepak Verma', 'deepak.verma@example.com', '1234567890', 'Male', 35, 'Lucknow'),
(120080, 'Rahul Shah', 'rahul.shah@example.com', '1234567890', 'Male', 33, 'Indore'),
(120081, 'Pooja Sharma', 'pooja.sharma@example.com', '1234567890', 'Female', 28, 'Kolkata'),
(120082, 'Aarav Gupta', 'aarav.gupta@example.com', '1234567890', 'Male', 40, 'Surat'),
(120083, 'Nikhil Patel', 'nikhil.patel@example.com', '1234567890', 'Male', 30, 'Hyderabad'),
(120084, 'Riya Verma', 'riya.verma@example.com', '1234567890', 'Female', 27, 'Jaipur'),
(120085, 'Divya Sharma', 'divya.sharma@example.com', '1234567890', 'Female', 29, 'Mumbai'),
(120086, 'Kiran Mehta', 'kiran.mehta@example.com', '1234567890', 'Female', 28, 'Pune'),
(120087, 'Manish Kumar', 'manish.kumar@example.com', '1234567890', 'Male', 37, 'Lucknow'),
(120088, 'Amit Sharma', 'amit.sharma@example.com', '1234567890', 'Male', 36, 'Chennai'),
(120089, 'Chirag Mehta', 'chirag.mehta@example.com', '1234567890', 'Male', 41, 'Indore'),
(120090, 'Bhavya Yadav', 'bhavya.yadav@example.com', '1234567890', 'Female', 25, 'Delhi'),
(120091, 'Ravi Kumar', 'ravi.kumar@example.com', '1234567890', 'Male', 43, 'Kolkata'),
(120092, 'Akshay Patel', 'akshay.patel@example.com', '1234567890', 'Male', 38, 'Jaipur'),
(120093, 'Deepak Mehta', 'deepak.mehta@example.com', '1234567890', 'Male', 45, 'Mumbai'),
(120094, 'Aditi Sharma', 'aditi.sharma@example.com', '1234567890', 'Female', 23, 'Pune'),
(120095, 'Sanjay Gupta', 'sanjay.gupta@example.com', '1234567890', 'Male', 42, 'Bangalore'),
(120100, 'Mahesh Vala', 'valamahesh2003@gmail.com', '1234567890', 'male', 55, 'Surat');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `child` varchar(50) NOT NULL,
  `adult` varchar(50) NOT NULL,
  `senior` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`name`, `email`, `child`, `adult`, `senior`, `date`, `total`) VALUES
('Aarav Sharma', 'aarav.sharma@example.com', '1', '2', '3', '2023-09-15', '1250'),
('Isha Patel', 'isha.patel@example.com', '2', '1', '4', '2023-09-16', '1350'),
('Rajesh Singh', 'rajesh.singh@example.com', '3', '3', '2', '2023-09-17', '1600'),
('Divya Gupta', 'divya.gupta@example.com', '0', '4', '1', '2023-09-18', '1200'),
('Sachin Verma', 'sachin.verma@example.com', '2', '3', '0', '2023-09-19', '1050'),
('Ananya Kumar', 'ananya.kumar@example.com', '1', '2', '2', '2023-09-20', '1050'),
('Nikhil Sharma', 'nikhil.sharma@example.com', '3', '1', '1', '2023-09-21', '900'),
('Riya Yadav', 'riya.yadav@example.com', '0', '2', '2', '2023-09-22', '900'),
('Manish Pandey', 'manish.pandey@example.com', '1', '4', '0', '2023-09-23', '1150'),
('Aditi Mishra', 'aditi.mishra@example.com', '2', '1', '2', '2023-09-24', '950'),
('Akshay Kumar', 'akshay.kumar@example.com', '1', '3', '2', '2023-09-25', '1300'),
('Pooja Reddy', 'pooja.reddy@example.com', '0', '4', '1', '2023-09-26', '1200'),
('Kiran Gupta', 'kiran.gupta@example.com', '2', '2', '1', '2023-09-27', '1000'),
('Harsh Shah', 'harsh.shah@example.com', '3', '1', '1', '2023-09-28', '900'),
('Chirag Mehta', 'chirag.mehta@example.com', '0', '4', '1', '2023-09-29', '1200'),
('Sanjay Verma', 'sanjay.verma@example.com', '2', '2', '1', '2023-09-30', '1000'),
('Rani Yadav', 'rani.yadav@example.com', '1', '3', '1', '2023-10-01', '1100'),
('Amit Singh', 'amit.singh@example.com', '2', '1', '3', '2023-10-02', '1150'),
('Bhavya Rajput', 'bhavya.rajput@example.com', '0', '3', '2', '2023-10-03', '1150'),
('Deepak Kumar', 'deepak.kumar@example.com', '1', '2', '2', '2023-10-04', '1050'),
('Shilpa Joshi', 'shilpa.joshi@example.com', '3', '0', '2', '2023-10-05', '850'),
('Rahul Sharma', 'rahul.sharma@example.com', '0', '1', '3', '2023-10-06', '850'),
('Kiran Gupta', 'kiran.gupta@example.com', '2', '2', '1', '2023-10-07', '1000'),
('Aarav Mehta', 'aarav.mehta@example.com', '1', '3', '1', '2023-10-08', '1100'),
('Pooja Reddy', 'pooja.reddy@example.com', '0', '2', '2', '2023-10-09', '900'),
('Manish Pandey', 'manish.pandey@example.com', '2', '1', '3', '2023-10-10', '1150'),
('Isha Patel', 'isha.patel@example.com', '1', '4', '0', '2023-10-11', '1150'),
('Divya Gupta', 'divya.gupta@example.com', '2', '2', '1', '2023-10-12', '1000'),
('Sachin Verma', 'sachin.verma@example.com', '3', '0', '2', '2023-10-13', '850'),
('Rajesh Singh', 'rajesh.singh@example.com', '0', '1', '3', '2023-10-14', '850'),
('Riya Yadav', 'riya.yadav@example.com', '1', '3', '1', '2023-10-15', '1100'),
('Ananya Kumar', 'ananya.kumar@example.com', '2', '2', '1', '2023-10-16', '1000'),
('Nikhil Sharma', 'nikhil.sharma@example.com', '0', '4', '1', '2023-10-17', '1200'),
('Amit Singh', 'amit.singh@example.com', '1', '2', '2', '2023-10-18', '1050'),
('Akshay Kumar', 'akshay.kumar@example.com', '3', '1', '1', '2023-10-19', '900'),
('Pooja Gupta', 'pooja.gupta@example.com', '0', '3', '2', '2023-10-20', '1150'),
('Bhavya Rajput', 'bhavya.rajput@example.com', '2', '2', '1', '2023-10-21', '1000'),
('Manish Pandey', 'manish.pandey@example.com', '1', '3', '1', '2023-10-22', '1100'),
('Aditi Mishra', 'aditi.mishra@example.com', '0', '4', '1', '2023-10-23', '1200'),
('Kiran Gupta', 'kiran.gupta@example.com', '1', '2', '2', '2023-10-24', '1050'),
('Harsh Shah', 'harsh.shah@example.com', '2', '1', '3', '2023-10-25', '1150'),
('Chirag Mehta', 'chirag.mehta@example.com', '1', '4', '0', '2023-10-26', '1150'),
('Sanjay Verma', 'sanjay.verma@example.com', '0', '2', '2', '2023-10-27', '900'),
('Rani Yadav', 'rani.yadav@example.com', '3', '1', '1', '2023-10-28', '900'),
('Rahul Sharma', 'rahul.sharma@example.com', '0', '3', '2', '2023-10-29', '1150'),
('Deepak Kumar', 'deepak.kumar@example.com', '2', '2', '1', '2023-10-30', '1000'),
('Shilpa Joshi', 'shilpa.joshi@example.com', '1', '3', '1', '2023-10-31', '1100'),
('Aarav Mehta', 'aarav.mehta@example.com', '0', '4', '1', '2023-11-01', '1200'),
('Isha Patel', 'isha.patel@example.com', '1', '2', '2', '2023-11-02', '1050'),
('Divya Gupta', 'divya.gupta@example.com', '2', '1', '3', '2023-11-03', '1150'),
('Sachin Verma', 'sachin.verma@example.com', '1', '4', '0', '2023-11-04', '1150'),
('Rajesh Singh', 'rajesh.singh@example.com', '0', '3', '2', '2023-11-05', '1150'),
('Riya Yadav', 'riya.yadav@example.com', '3', '1', '1', '2023-11-06', '900'),
('Ananya Kumar', 'ananya.kumar@example.com', '0', '2', '2', '2023-11-07', '900'),
('Nikhil Sharma', 'nikhil.sharma@example.com', '2', '2', '1', '2023-11-08', '1000'),
('Amit Singh', 'amit.singh@example.com', '1', '3', '1', '2023-11-09', '1100'),
('Akshay Kumar', 'akshay.kumar@example.com', '0', '4', '1', '2023-11-10', '1200'),
('Pooja Gupta', 'pooja.gupta@example.com', '3', '0', '2', '2023-11-11', '850'),
('Bhavya Rajput', 'bhavya.rajput@example.com', '0', '1', '3', '2023-11-12', '850'),
('Manish Pandey', 'manish.pandey@example.com', '1', '3', '1', '2023-11-13', '1100'),
('Aditi Mishra', 'aditi.mishra@example.com', '2', '2', '1', '2023-11-14', '1000'),
('Kiran Gupta', 'kiran.gupta@example.com', '0', '4', '1', '2023-11-15', '1200'),
('Harsh Shah', 'harsh.shah@example.com', '1', '2', '2', '2023-11-16', '1050'),
('Chirag Mehta', 'chirag.mehta@example.com', '3', '1', '1', '2023-11-17', '900'),
('Sanjay Verma', 'sanjay.verma@example.com', '0', '3', '2', '2023-11-18', '1150'),
('Rani Yadav', 'rani.yadav@example.com', '2', '2', '1', '2023-11-19', '1000'),
('Rahul Sharma', 'rahul.sharma@example.com', '1', '3', '1', '2023-11-20', '1100'),
('Mahesh Vala', 'valamahesh2003@gmail.com', '1', '2', '3', '2023-09-15', '1250');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
