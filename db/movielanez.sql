-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 08:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movielanez`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE `actions` (
  `action_id` int(255) UNSIGNED NOT NULL,
  `action_name` varchar(255) NOT NULL,
  `action_year` int(4) NOT NULL,
  `action_genre` varchar(100) NOT NULL,
  `action_bio` varchar(255) NOT NULL,
  `action_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`action_id`, `action_name`, `action_year`, `action_genre`, `action_bio`, `action_img`) VALUES
(1, 'Mission: Impossible', 1996, 'Action, Adventure, Thriller', 'An American agent, under false suspicion of disloyalty, must discover and expose the real spy without the help of his organization.', 'assets/img/mi_1996.png');

-- --------------------------------------------------------

--
-- Table structure for table `action_reviews`
--

CREATE TABLE `action_reviews` (
  `review_id` int(11) UNSIGNED NOT NULL,
  `review_action_id` int(11) UNSIGNED NOT NULL,
  `review_user_id` int(11) UNSIGNED NOT NULL,
  `review_rating` int(11) NOT NULL,
  `review_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `adventure`
--

CREATE TABLE `adventure` (
  `adventure_id` int(255) UNSIGNED NOT NULL,
  `adventure_name` varchar(255) NOT NULL,
  `adventure_year` int(4) NOT NULL,
  `adventure_genre` varchar(100) NOT NULL,
  `adventure_bio` varchar(255) NOT NULL,
  `adventure_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adventure`
--

INSERT INTO `adventure` (`adventure_id`, `adventure_name`, `adventure_year`, `adventure_genre`, `adventure_bio`, `adventure_img`) VALUES
(1, 'Avengers: Infinity War', 2018, 'Action, Adventure', 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.', 'assets/img/infinity_war.png');

-- --------------------------------------------------------

--
-- Table structure for table `adventure_reviews`
--

CREATE TABLE `adventure_reviews` (
  `review_id` int(11) UNSIGNED NOT NULL,
  `review_adventure_id` int(11) UNSIGNED NOT NULL,
  `review_user_id` int(11) UNSIGNED NOT NULL,
  `review_rating` int(11) NOT NULL,
  `review_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comedy`
--

CREATE TABLE `comedy` (
  `comedy_id` int(255) UNSIGNED NOT NULL,
  `comedy_name` varchar(255) NOT NULL,
  `comedy_year` int(4) NOT NULL,
  `comedy_genre` varchar(100) NOT NULL,
  `comedy_bio` varchar(255) NOT NULL,
  `comedy_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comedy`
--

INSERT INTO `comedy` (`comedy_id`, `comedy_name`, `comedy_year`, `comedy_genre`, `comedy_bio`, `comedy_img`) VALUES
(1, 'Free Guy', 2021, 'Comedy, Action, Adventure', 'When Guy, a bank teller, learns that he is a non-player character in a bloodthirsty, open-world video game, he goes on to become the hero of the story and takes the responsibility of saving the world.', 'assets/img/free_guy.png');

-- --------------------------------------------------------

--
-- Table structure for table `comedy_reviews`
--

CREATE TABLE `comedy_reviews` (
  `review_id` int(11) UNSIGNED NOT NULL,
  `review_comedy_id` int(11) UNSIGNED NOT NULL,
  `review_user_id` int(11) UNSIGNED NOT NULL,
  `review_rating` int(11) NOT NULL,
  `review_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `horror`
--

CREATE TABLE `horror` (
  `horror_id` int(255) UNSIGNED NOT NULL,
  `horror_name` varchar(255) NOT NULL,
  `horror_year` int(4) NOT NULL,
  `horror_genre` varchar(100) NOT NULL,
  `horror_bio` varchar(255) NOT NULL,
  `horror_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `horror`
--

INSERT INTO `horror` (`horror_id`, `horror_name`, `horror_year`, `horror_genre`, `horror_bio`, `horror_img`) VALUES
(1, 'The Nun', 2018, 'Horror, Mystery, Thriller', 'A priest with a haunted past and a novice on the threshold of her final vows are sent by the Vatican to investigate the death of a young nun in Romania and confront a malevolent force in the form of a demonic nun.', 'assets/img/the_nun.png');

-- --------------------------------------------------------

--
-- Table structure for table `horror_reviews`
--

CREATE TABLE `horror_reviews` (
  `review_id` int(11) UNSIGNED NOT NULL,
  `review_horror_id` int(11) UNSIGNED NOT NULL,
  `review_user_id` int(11) UNSIGNED NOT NULL,
  `review_rating` int(11) NOT NULL,
  `review_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) UNSIGNED NOT NULL,
  `movie_name` varchar(255) NOT NULL DEFAULT '',
  `movie_year` int(4) NOT NULL,
  `movie_genre` varchar(100) NOT NULL DEFAULT '',
  `movie_bio` varchar(255) DEFAULT NULL,
  `movie_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_year`, `movie_genre`, `movie_bio`, `movie_img`) VALUES
(1, 'Fast X', 2023, 'Action, Adventure, Crime', 'Dom Toretto and his family are targeted by the vengeful son of drug kingpin Hernan Reyes.', 'assets/img/fastx.png'),
(2, 'John Wick: Chapter 4', 2023, 'Action, Crime, Thriller', 'John Wick uncovers a path to defeating The High Table. But before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across the globe and forces that turn old friends into foes.', 'assets/img/johnwick.png'),
(3, 'Oppenheimer', 2023, 'Biography, Drama, History', 'The story of American scientist J. Robert Oppenheimer and his role in the development of the atomic bomb.', 'assets/img/oppenheimer.png'),
(4, 'Pathaan', 2023, 'Action, Adventure, Thriller', 'An Indian agent races against a doomsday clock as a ruthless mercenary, with a bitter vendetta, mounts an apocalyptic attack against the country.', 'assets/img/pathaan.png');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) UNSIGNED NOT NULL,
  `review_movie_id` int(11) UNSIGNED NOT NULL,
  `review_user_id` int(11) UNSIGNED NOT NULL,
  `review_rating` int(11) NOT NULL,
  `review_content` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `review_movie_id`, `review_user_id`, `review_rating`, `review_content`) VALUES
(6, 1, 39, 4, 'This is one of my favorite movies of all time!'),
(7, 1, 39, 1, 'Highly overrated movie.');

-- --------------------------------------------------------

--
-- Table structure for table `sci_fi_fantasy`
--

CREATE TABLE `sci_fi_fantasy` (
  `sci_fi_fantasy_id` int(255) UNSIGNED NOT NULL,
  `sci_fi_fantasy_name` varchar(255) NOT NULL,
  `sci_fi_fantasy_year` int(4) NOT NULL,
  `sci_fi_fantasy_genre` varchar(100) NOT NULL,
  `sci_fi_fantasy_bio` varchar(255) NOT NULL,
  `sci_fi_fantasy_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sci_fi_fantasy`
--

INSERT INTO `sci_fi_fantasy` (`sci_fi_fantasy_id`, `sci_fi_fantasy_name`, `sci_fi_fantasy_year`, `sci_fi_fantasy_genre`, `sci_fi_fantasy_bio`, `sci_fi_fantasy_img`) VALUES
(1, 'Avatar', 2009, 'Action, Adventure, Fantasy', 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.', 'assets/img/avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `sci_fi_fantasy_reviews`
--

CREATE TABLE `sci_fi_fantasy_reviews` (
  `review_id` int(11) UNSIGNED NOT NULL,
  `review_sci_fi_fantasy_id` int(11) UNSIGNED NOT NULL,
  `review_user_id` int(11) UNSIGNED NOT NULL,
  `review_rating` int(11) NOT NULL,
  `review_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_name` varchar(50) NOT NULL DEFAULT '',
  `user_full_name` varchar(150) NOT NULL DEFAULT '',
  `user_email` varchar(255) NOT NULL DEFAULT '',
  `user_password` varchar(255) NOT NULL DEFAULT '',
  `user_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_full_name`, `user_email`, `user_password`, `user_role`) VALUES
(38, 'admin', 'Admin 1', 'admin@admin.com', 'admin', 1),
(41, '001', 'Haidar', 'a@gmail.com', '001', 2),
(42, '1', '1', '1@gmail.com', '1', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`action_id`);

--
-- Indexes for table `adventure`
--
ALTER TABLE `adventure`
  ADD PRIMARY KEY (`adventure_id`);

--
-- Indexes for table `adventure_reviews`
--
ALTER TABLE `adventure_reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `comedy`
--
ALTER TABLE `comedy`
  ADD PRIMARY KEY (`comedy_id`);

--
-- Indexes for table `comedy_reviews`
--
ALTER TABLE `comedy_reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `horror`
--
ALTER TABLE `horror`
  ADD PRIMARY KEY (`horror_id`);

--
-- Indexes for table `horror_reviews`
--
ALTER TABLE `horror_reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `users_foreign_key` (`review_user_id`),
  ADD KEY `movies_foreign_key` (`review_movie_id`);

--
-- Indexes for table `sci_fi_fantasy`
--
ALTER TABLE `sci_fi_fantasy`
  ADD PRIMARY KEY (`sci_fi_fantasy_id`);

--
-- Indexes for table `sci_fi_fantasy_reviews`
--
ALTER TABLE `sci_fi_fantasy_reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actions`
--
ALTER TABLE `actions`
  MODIFY `action_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adventure`
--
ALTER TABLE `adventure`
  MODIFY `adventure_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adventure_reviews`
--
ALTER TABLE `adventure_reviews`
  MODIFY `review_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comedy`
--
ALTER TABLE `comedy`
  MODIFY `comedy_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comedy_reviews`
--
ALTER TABLE `comedy_reviews`
  MODIFY `review_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horror`
--
ALTER TABLE `horror`
  MODIFY `horror_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `horror_reviews`
--
ALTER TABLE `horror_reviews`
  MODIFY `review_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sci_fi_fantasy`
--
ALTER TABLE `sci_fi_fantasy`
  MODIFY `sci_fi_fantasy_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
