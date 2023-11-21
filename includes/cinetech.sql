-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 05:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinetech`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie_feedback`
--

CREATE TABLE `movie_feedback` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL,
  `movie_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_feedback`
--

INSERT INTO `movie_feedback` (`user_id`, `first_name`, `rating`, `comment`, `movie_id`, `created_at`, `id`) VALUES
(1, 'Reshma', 5, 'mass', 2, '2023-11-12 13:52:44', 18),
(18, 'Harini', 3, 'good', 2, '2023-11-12 13:55:20', 19),
(1, 'Reshma', 1, 'poor', 2, '2023-11-12 13:56:08', 20),
(1, 'Reshma', 4, 'ok', 2, '2023-11-12 13:57:10', 21),
(1, 'Reshma', 2, 'fair', 2, '2023-11-12 14:19:53', 22),
(1, 'Reshma', 3, 'good ', 1, '2023-11-12 15:52:42', 23),
(1, 'Reshma', 5, 'excellent\r\n\r\n', 1, '2023-11-12 16:09:53', 24),
(18, 'Harini', 3, 'good', 2, '2023-11-13 04:47:14', 25),
(18, 'Harini', 5, 'mass', 4, '2023-11-13 04:47:44', 26),
(18, 'Harini', 4, 'very good', 7, '2023-11-13 04:50:55', 27);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password1` varchar(255) NOT NULL,
  `remember_token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password1`, `remember_token`) VALUES
(1, 'Reshma', 'A', 'reshma22112003@gmail.com', '$2y$10$1DMQSF395QSSASnrT4cOyuQfKOHWQwa0JId8HXdMp1oR6hwnkbG4K', ''),
(18, 'Harini', 'A', 'harini@gmail.com', '$2y$10$bifA/exKedQ6OA6c/Z7H7..M9ihwn4Zrdh3gRWlv5bk31NFk96zzC', '');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `video_path` varchar(255) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `movie_description` varchar(500) NOT NULL,
  `watched` varchar(20) NOT NULL,
  `hours` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `year_of_release` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `video_path`, `image_path`, `movie_description`, `watched`, `hours`, `genre`, `year_of_release`) VALUES
(1, 'AVENGERS', 'videos/avengers.mp4', 'images/db/avengers.jpg', '\"Avengers\" is a popular superhero film released in 2012, directed by Joss Whedon. It features a team of iconic Marvel superheroes, including Iron Man, Captain America, Thor, Hulk, Black Widow, and Hawkeye, who come together to save the world from an impending alien invasion led by the villainous Loki.', ' $1.5 billion', '2hrs 13mins\r\n', 'Action', 2022),
(2, 'INSICIDIOUS', 'videos/insicidious.mp4\r\n', 'images/db/insidious.jpg', '\"Insidious\" is a 2010 horror film directed by James Wan. It follows the story of a family who moves into a new home and soon realizes that it\'s haunted by malevolent spirits. When their son inexplicably falls into a coma, they seek the help of paranormal investigators and a psychic medium to rescue him from the sinister realm known as \"The Further.\"', '$12 billion', '1hr and 43mins', 'horror', 2020),
(3, 'BARBIE', 'videos/barbie.mp4', 'images/db/barbie1.jpg', '\"Barbie\" is not a specific movie title but rather a brand associated with a wide range of animated and live-action films featuring the popular Barbie dolls. Each Barbie movie has its own unique storyline and characters. As of my last knowledge update in January 2022, there have been numerous Barbie movies released over the years.', ' $0.5 billion', '90 minutes\r\n', 'Fantasy', 2023),
(4, 'BATMAN', 'videos/batman.mp4', 'images/db/batman1.jpg', '\"The Dark Knight\" is a superhero film directed by Christopher Nolan. It is the second installment of Nolan\'s Batman trilogy and features Christian Bale as Batman/Bruce Wayne.  The Joker\'s anarchic reign of terror forces Batman into a moral dilemma and tests the limits of his code as a crime-fighter.', ' $3 billion', '1hr 30mins\r\n', 'Action', 2019),
(5, 'AVATAR', 'videos/avatar.mp4', 'images/db/avatar.jpg', '\"Avatar\" is a 2009 science fiction film directed by James Cameron. Set in the mid-22nd century, the story revolves around a paraplegic former Marine named Jake Sully, who is selected to participate in the Avatar Program on the distant moon of Pandora. ', ' $4 billion', ' 2hrs and 42mins\r\n', 'science fiction', 2023),
(6, 'TITANIC', 'videos/titanic.mp4', 'images/db/titanic.jpg', '\"Titanic\" is a 1997 epic romance and disaster film directed by James Cameron. It tells the story of the ill-fated maiden voyage of the RMS Titanic, a luxurious passenger liner that struck an iceberg and sank in the North Atlantic Ocean in 1912. The film is framed by a modern-day story of an elderly woman named Rose DeWitt Bukater, who recounts her experiences aboard the Titanic to a treasure hunter named Brock Lovett.', ' $10 billion', ' 3hrs and 15mins\r\n', 'Romance', 2019),
(7, 'AFTER', 'videos/after.mp4', 'images/db/after.jpg', 'After is a 2019 American romantic drama film directed by Jenny Gage, who co-wrote the screenplay with Susan McMartin, Tamara Chestna, and Tom Betterton, based on the 2014 novel of the same name by Anna Todd. It is the first installment in the After film series.', ' $3 billion', '2 hrs', 'romance', 2019),
(8, 'DA VINCI CODE', 'videos/da_vinci_code.mp4', 'images/db/da_vinci_code.jpg', 'The Da Vinci Code follows symbologist Robert Langdon and cryptologist Sophie Neveu after a murder in the Louvre Museum in Paris causes them to become involved in a battle between the Priory of Sion and Opus Dei over the possibility of Jesus Christ and Mary Magdalene having had a child together.', ' $4 billion', ' 2hrs and 15mins\r\n', 'Thriller', 2018),
(9, 'TANGLED', 'videos/tangled.mp4', 'images/db/tangled.jpg', 'Tangled is an animated adventure comedy for children, based on a fairytale classic. The new Rapunzel isn\'t the classic damsel-in-distress, but her beauty is still important in the storyline. The movie is at times very sentimental, but is likely to appeal to school-age children.', ' $5 billion', ' 2hrs and 45mins\r\n', 'fantasy', 2018),
(10, 'VERONICA', 'videos/veronica.mp4', 'images/db/veronica.jpg', 'During a solar eclipse, a teenage girl and her friends want to summon the spirit of the girl\'s father using an Ouija board. However, during the session she loses consciousness and soon it becomes clear that evil demons have arrived.', ' $9 billion', ' 1hrs and 45mins\r\n', 'horror', 2023),
(11, 'FIVE FEET APART', 'videos/five feet apart.mp4', 'images/db/five feet apart.jpg', 'Teenagers Stella Grant and Will Newman have cystic fibrosis (CF), a progressive genetic disorder that damages organs and makes patients vulnerable to infections. Because of their compromised immune systems, patients with CF should not get closer to each other than six feet.', ' $4 billion', ' 1hrs and 15mins\r\n', 'Romance', 2018);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie_feedback`
--
ALTER TABLE `movie_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie_feedback`
--
ALTER TABLE `movie_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
