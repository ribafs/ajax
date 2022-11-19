CREATE TABLE `tb_links` (
  `id` int(10) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `category` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `create_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_links`
--

INSERT INTO `tb_links` (`id`, `title`, `description`, `url`, `category`, `create_at`) VALUES
(2, 'PHP Login with OTP Authentication', 'In this method, a one-time password is generated dynamically and sent to the user who attempts login. OTP can be sent to the userâ€™s email or his mobile phone. When the user enters the OTP code then the application will authenticate the user via this cod', 'https://phppot.com/php/php-login-with-otp-authentication/', 'php', '2018-04-10 05:19:48.813000'),
(10, 'Top 10 Skills to be a Successful Freelancer', 'he world of PHP freelancing is getting crunched day by day. I have been a PHP freelancer for long. Offlate I am seeing a strong emergence and influx of PHP freelancers. Getting ourselves on top of the game will be a stiff challenge.\n\nWith an empire on han', 'https://phppot.com/php/top-10-skills-to-be-a-successful-freelancer/', 'Freelance ', '2018-03-31 12:29:59.073785'),
(11, 'Multi-language Support to Website using PHP', 'reating a Multi-language (multilingual) web page is easy to implement. Multi-language websites are used to increase the volume of users supported for a website. Multi-language support can be done in various ways.\n\nWe can have duplicate pages with the same', 'https://phppot.com/php/multi-language-support-to-website-using-php/', 'Freelance', '2018-03-31 14:12:32.460915'),
(12, 'REST API Search Implementation in PHP', 'n this tutorial, we are going to implement search using PHP REST API. I have created a RESTful web service in PHP to do the search on the database table data based on the keyword passed in the Querystring.  In a previous tutorial, we have seen how to crea', 'https://phppot.com/php/rest-api-search-implementation-in-php/', 'Freelance', '2018-03-31 11:23:30.219946'),
(13, 'Multiple File Upload using Fine Uploader', 'n this tutorial, we are going to see how to upload multiple files using PHP. I am using â€œFine Uploaderâ€ a JavaScript, open source and free library. Also, fine-uploader has no dependencies. It is simple and easy to understand. It shows a progress bar d', 'https://phppot.com/php/multiple-file-upload-using-fine-uploader/', 'Freelance', '2018-03-31 11:24:37.533586'),
(14, 'jQuery AJAX Image Upload', 'hen you use AJAx in the right sense, it will improve the user experience largely. In this article, let use see how to do image upload using jQuery via AJAX and add great experience. Showing preview without page refresh, showing the progress bar, adding pr', 'https://phppot.com/jquery/jquery-ajax-image-upload/', 'Jquery', '2018-03-31 14:20:29.550056'),
(28, 'PHP Login Script with Session', 'Most of the website will have login script to provide user authentication. I will present you an example PHP code to implement authentication using a login script.  There are different ways to implement authentication and the most popular way is to using ', 'https://phppot.com/php/php-login-script-with-session/', 'Login', '2018-04-10 05:26:12.132200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_links`
--
ALTER TABLE `tb_links`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_links`
--
ALTER TABLE `tb_links`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
