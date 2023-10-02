-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 02, 2023 at 04:43 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb2023b_213040046`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `pengarang` varchar(255) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `tahun_terbit` int DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `harga`, `gambar`) VALUES
(1, 'Harry Potter and the Sorcerer\'s Stone', 'J.K. Rowling', 'Scholastic', 1997, 15.99, 'harry_potter.jpg'),
(2, 'To Kill a Mockingbird', 'Harper Lee', 'HarperCollins', 1960, 12.99, 'mockingbird.jpg'),
(3, 'The Great Gatsby', 'F. Scott Fitzgerald', 'Scribner', 1925, 10.99, 'https://usercontent2.hubstatic.com/6921909_f520.jpg'),
(4, '1984', 'George Orwell', 'Penguin', 1949, 9.99, 'https://i.pinimg.com/originals/0d/2c/09/0d2c0915b3c86c8ac0680f3f6c88731d.jpg'),
(5, 'The Hobbit', 'J.R.R. Tolkien', 'Houghton Mifflin', 1937, 14.99, 'https://9to5toys.com/wp-content/uploads/sites/5/2015/03/the-hobbit-book-cover.jpg?w=670'),
(6, 'Pride and Prejudice', 'Jane Austen', 'Penguin', 1813, 8.99, '2586782_1.jpg'),
(7, 'The Catcher in the Rye', 'J.D. Salinger', 'Little, Brown', 1951, 11.99, 'https://cdn2.penguin.com.au/covers/original/9780241988794.jpg'),
(8, 'The Da Vinci Code', 'Dan Brown', 'Doubleday', 2003, 13.99, 'https://cdn2.penguin.com.au/covers/original/9780552159715.jpg'),
(9, 'The Alchemist', 'Paulo Coelho', 'HarperOne', 1988, 9.49, 'https://th.bing.com/th/id/OIP.rKY-WsdQ7_EwqBCci-oz8QHaLL?pid=ImgDet&rs=1'),
(10, 'The Lord of the Rings', 'J.R.R. Tolkien', 'Houghton Mifflin', 1954, 19.99, 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781608873821/the-lord-of-the-rings-9781608873821_hr.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
