# Board

create database board default character set utf8;
use board;

CREATE TABLE `list` (
  `No` int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Name` varchar(20) NOT NULL,
  `Message` varchar(1000) DEFAULT NULL,
  `Picture` varchar(100) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `list` (`No`, `Name`, `Message`, `Picture`, `Time`) VALUES
(1, 'amy', 'amy', './upload/amy_jones.jpg', '2020-08-21 01:28:15'),
(2, 'gary', 'gary', './upload/gary_donovan.jpg', '2020-08-24 01:38:34'),
(3, '波波', '波波', './upload/波波.png', '2020-08-24 01:44:07'),
(4, '歐歐', '歐歐', './upload/歐歐.png', '2020-08-24 01:44:40');