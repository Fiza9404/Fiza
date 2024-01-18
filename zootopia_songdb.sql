-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 03:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zootopia_songdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `songID` int(10) NOT NULL,
  `songTitle` varchar(100) NOT NULL,
  `artistBandName` varchar(45) NOT NULL,
  `audioVideoLink` varchar(100) NOT NULL,
  `genre` varchar(45) NOT NULL,
  `language` varchar(15) NOT NULL,
  `releaseDate` date NOT NULL,
  `status` varchar(8) NOT NULL,
  `uploader` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`songID`, `songTitle`, `artistBandName`, `audioVideoLink`, `genre`, `language`, `releaseDate`, `status`, `uploader`) VALUES
(1, 'Bohemian Rhapsody', 'Queen', 'https://youtu.be/fJ9rUzIMcZQ?si=TIGcy3DCIF2wQB-9\r\n', 'Rock', 'English', '1975-09-16', 'approved', 'Raffiah'),
(2, 'Shape of You', 'Ed Sheeran', 'https://youtu.be/JGwWNGJdvx8?si=1LNkvBOCEJ59Thd5', 'Pop', 'English', '2017-03-15', 'approved', 'Raffiah'),
(3, 'Vaseegara', 'Bombay Jayashri', 'https://youtu.be/ew1fKCWb_M4?si=PGREQPEQfOlEvdgo', 'OST Tamil', 'Tamil', '2001-04-03', 'rejected', 'Athirah'),
(4, 'Despacito', 'Luis Fonsi ft. Daddy Yankee', 'https://youtu.be/kJQP7kiw5Fk?si=2X6mV8by-AtHlHPD', 'Pop', 'English', '2017-06-17', 'approved', 'Raffiah'),
(5, 'Yesterday', 'The Beatles', 'https://youtu.be/NrgmdOz227I?si=tiDhYen_TNJqQx8G', 'Pop', 'English', '1965-11-18', 'approved', 'Raffiah'),
(6, 'Munbe Vaa', 'Shreya Ghoshal, Naresh Iyer', 'https://youtu.be/juHpoMK3AuQ?si=o1T_cQY6C8JIRccb', 'OST Tamil', 'Tamil', '2006-10-16', 'approved', 'Athirah'),
(7, 'Someone Like You', 'Adele', 'https://youtu.be/hLQl3WQQoQ0?si=wxIaQR2H8hXG4QXi', 'Pop', 'English', '2011-12-02', 'approved', 'Athirah'),
(8, 'Kannalane', 'K. S. Chithra, K. J. Yesudas', 'https://youtu.be/tGXnuFu2LHU?si=AHbc7I5fHeD3tzDb', 'OST Tamil', 'Tamil', '1997-01-26', 'approved', 'Raffiah'),
(9, 'Counting Stars', 'OneRepublic', 'https://youtu.be/hT_nvWreIhg?si=9Fkq4QFedRUmdlGe', 'pop', 'english', '2013-04-20', 'approved', 'Raffiah'),
(10, 'Putham Pudhu Kaalai', 'G. V. Prakash Kumar, Ala B Bala', 'https://youtu.be/mRWj5knSvC0?si=sfjC1TSyUP-m4UbR', 'OST Tamil', 'Tamil', '0202-11-18', 'approved', 'Raffiah'),
(11, 'Belaian Jiwa', 'Ziana Zain', 'https://youtu.be/BxsCNcjGGBI?si=ZuN-9KckeKIPtyeM', 'pop', 'malay', '1989-08-19', 'approved', 'Raffiah'),
(37, 'Leo', 'Anirudh', 'https://youtu.be/3wDiqlTNlfQ?si=PWXuu48SDg9PuVCb', 'Ost Tamil', 'tamil', '2024-01-04', 'approved', 'Athirah'),
(38, '', 'k clique', 'https://youtu.be/3wDiqlTNlfQ?si=PWXuu48SDg9PuVCb', 'Ost Tamil', 'korean', '2024-01-03', 'waiting', 'Athirah'),
(39, 'the', 'k clique', 'https://youtu.be/3wDiqlTNlfQ?si=PWXuu48SDg9PuVCb', 'pop', 'korean', '2024-01-03', 'waiting', 'Athirah'),
(40, '', 'k clique', 'https://youtu.be/3wDiqlTNlfQ?si=PWXuu48SDg9PuVCb', 'Ost Tamil', 'korean', '2024-01-03', 'waiting', 'Athirah'),
(41, 'pulang', 'k clique', 'https://youtu.be/3wDiqlTNlfQ?si=PWXuu48SDg9PuVCb', 'Ost Tamil', 'korean', '2024-01-03', 'rejected', 'Athirah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userName` varchar(30) NOT NULL,
  `userPassword` varchar(18) NOT NULL,
  `userType` varchar(6) NOT NULL,
  `status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userName`, `userPassword`, `userType`, `status`) VALUES
('Athirah', '567', 'user', 'active'),
('Maryam', '234', 'admin', 'active'),
('Raffiah', '789', 'user', 'block'),
('Shah', '432', 'Admin', 'block');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`songID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `songID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
