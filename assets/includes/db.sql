-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2017 at 08:18 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `davfund`
--

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `id` int(11) unsigned NOT NULL,
  `pname` varchar(250) NOT NULL,
  `pdept` varchar(250) NOT NULL,
  `pamount` int(11) NOT NULL,
  `prequest` varchar(30) NOT NULL,
  `pdescription` text NOT NULL,
  `pmeasure` text NOT NULL,
  `pdocument` text NOT NULL,
  `pfeedback` text NOT NULL,
  `pcomments` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`id`, `pname`, `pdept`, `pamount`, `prequest`, `pdescription`, `pmeasure`, `pdocument`, `pfeedback`, `pcomments`, `image`) VALUES
(8, 'Yet More Puppies', 'Man seeking best friend', 134, 'Other', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', '', '', 'uploaded_images/impossibly-cute-puppy-15.jpg'),
(12, 'Graduation', 'Academic', 134, 'Professional Development', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n', ';lkj', ';laskjdf', 'Comments', 'uploaded_images/graduation.jpg'),
(13, 'Profile', 'Web Development', 97, 'Other', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n', 'asd;fljk', ';lasdf', 'as;dlfkj', 'uploaded_images/avatar.jpg'),
(15, 'New Sound System', 'Dental Department', 2500, 'Professional Development', 'They''ll add a level of professionalism and privacy, because currently you can hear things through walls and down halls.', 'Whether or not I can hear conversations next door.', 'bose.com/soundsystem', 'Nope.', 'Looks good. Really Good.', 'uploaded_images/Munny-Speakers.jpg'),
(16, 'More Puppies', 'Davenport as a Whole', 2352, 'Professional Development', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n', 'asd;lfkj', 'lkasjdf;l', 'a;ljkasdf', 'uploaded_images/puppy.jpg'),
(17, 'Puppies', 'Love', 400, 'Professional Development', 'Everyone love''s puppies', 'Look at them...', '', '', '', 'uploaded_images/impossibly-cute-puppy-2.jpg'),
(18, 'New Lights', 'Physical ', 5000, 'Equipment', 'We need walkways to be better lit for late night students.', 'Student surveys about safe campus is and how easy it is to navigate with the new lights in place.', '', '', '', 'uploaded_images/1-davenport.jpg'),
(20, 'Railings on Stairways', 'Marketing Dept', 200, 'Equipment', 'We have some quality people on our team who need help getting up the stairs on this old building which isn''t barrier free. They can get by with a rail though.', 'Everyday they climb the stairs, it''ll be worth it.', '', '', '', 'uploaded_images/College_Student_thumb.jpg'),
(21, 'Speaker Series', 'Creative', 1000, 'Professional Development', 'We want to not only stay on top of our game, but also get other people in our community involved. A speaker series would help us grow as a community.', 'Measure attendance and invite people to take a survey about their experience.', '', '', '', 'uploaded_images/DavenportTrip5.jpg'),
(22, 'Standing Desk', 'Tech Dept', 1000, 'Equipment', 'We work in front of our screens all day. Sitting is the new smoking. Standing would keep our posture better, keep us more active and energetic.', 'How long we can work without having carpal tunnel injuries around the office.', '', '', '', 'uploaded_images/DavenportTrip6.jpg'),
(23, 'New Suit', 'Mascot Dept', 400, 'Equipment', 'It gets hot in there...Really hot. People have been sweating in this suit for years. I need a new one, lest I pass out in our next game.', 'How many fewer water and air breaks I have to take.', '', '', '', 'uploaded_images/mascot.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
