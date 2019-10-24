--
-- Database: `cms`
--
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `userlogins` (
  `id` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `reset_password_token` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=2019;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_firstname`, `name`, `created`, `reset_password_token`) VALUES
(2020, 'milky@way.com', '$P$BduBeREPM9RBTcw6PyGaVzdQCgZWQ1', 'Milky', '', 'simba@masaijungal.org', 'Milky Way', 'Admin', '2019-10-09 13:14:53', NULL);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;