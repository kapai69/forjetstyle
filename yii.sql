-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2015 at 07:03 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yii`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `photo`, `birthday`) VALUES
(1, 'Егоров Иван Леонидович', 'images/egorov.jpg', '1955-10-05'),
(2, 'Пахомов Степан Степанович', 'images/pahomov.jpg', '1966-08-06'),
(3, 'Игорев Сергей Игоревич', 'images/igorev.jpg', '1985-04-22'),
(4, 'Сазонов Иван Борисович', 'images/sazonov.jpg', '1977-02-21'),
(5, 'Большаков Глеб Васильевич', 'images/bolshakov.jpg', '1978-12-03'),
(6, 'Кузьмин Егор Иванович', 'images/kuzmin.jpg', '1958-01-02'),
(7, 'Антонов Иван Львович', 'images/antonov.jpg', '1955-05-15'),
(8, 'Шестаков Валентин Иванович', 'images/shestakov.jpg', '1958-05-18'),
(9, 'Ильин Геннадий Святославович', 'images/ilin.jpg', '1997-12-06'),
(10, 'Абрамов Анатолий Яковлевич', 'images/abramov.jpg', '1979-01-08'),
(11, 'Самойлов Святослав Иванович', 'images/samoilov.jpg', '1966-02-07'),
(12, 'Некрасов Эдуард Юрьевич', 'images/necrasov.jpg', '1958-08-08'),
(13, 'Гурьев Егор Кириллович', 'images/gurev.jpg', '1978-08-15'),
(14, 'Брагин Алексей Иванович', 'images/bragin.jpg', '1988-07-15'),
(15, 'Хохлов Даниил Фёдорович', 'images/hohlov.jpg', '1979-09-16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
