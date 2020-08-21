# Board

create database board default character set utf8;
use board;

CREATE TABLE `list` (
  `Name` varchar(20) NOT NULL PRIMARY KEY,
  `Message` varchar(1000) DEFAULT NULL,
  `Picture` varchar(100) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `list` (`Name`, `Message`, `Picture`, `Time`) VALUES
('amy', 'amy', './upload/amy_jones.jpg', '2020-08-21 09:28:15');