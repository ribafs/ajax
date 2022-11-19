CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `image`) VALUES
(1, 'Joseph', 'Harman', '1.jpg'),
(2, 'John', 'Moss', '4.jpg'),
(3, 'Lillie', 'Ferrarium', '3.jpg'),
(4, 'Yolanda', 'Green', '5.jpg'),
(5, 'Cara', 'Gariepy', '7.jpg'),
(6, 'Christine', 'Johnson', '11.jpg'),
(7, 'Alana', 'Decruze', '12.jpg'),
(8, 'Krista', 'Correa', '13.jpg'),
(9, 'Charles', 'Martin', '14.jpg'),
(10, 'Cindy', 'Canady', '18211.jpg'),
(11, 'Daphne', 'Frost', '8288.jpg'),
(12, 'Frank', 'Lemons', '22610.jpg'),
(13, 'Margaret', 'Ault', '14365.jpg'),
(14, 'Christina', 'Wilke', '9248.jpg'),
(15, 'Roy', 'Newton', '27282.jpg');
