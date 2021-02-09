create database crud;

use crud;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);