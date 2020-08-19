# Board

create database board default character set utf8;
use board;

CREATE TABLE `list` (
  `Name` varchar(20) NOT NULL PRIMARY KEY,
  `Message` varchar(1000) DEFAULT NULL,
  `Picture` longblob NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
