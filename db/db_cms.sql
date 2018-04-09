-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 08, 2018 at 10:38 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_genre`
--

CREATE TABLE `tbl_genre` (
  `genre_id` tinyint(3) UNSIGNED NOT NULL,
  `genre_name` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_genre`
--

INSERT INTO `tbl_genre` (`genre_id`, `genre_name`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Comedy'),
(4, 'Crime'),
(5, 'Drama'),
(6, 'Historical'),
(7, 'Horror'),
(8, 'Musical'),
(9, 'Science Fiction'),
(10, 'War'),
(11, 'Western'),
(12, 'Animation'),
(13, 'Family'),
(14, 'Fantasy'),
(15, 'Romance'),
(16, 'Sport');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movies`
--

CREATE TABLE `tbl_movies` (
  `movies_id` mediumint(8) UNSIGNED NOT NULL,
  `movies_cover` varchar(75) NOT NULL DEFAULT 'cover_default.jpg',
  `movies_title` varchar(125) NOT NULL,
  `movies_year` varchar(5) NOT NULL,
  `movies_runtime` varchar(25) NOT NULL,
  `movies_storyline` text NOT NULL,
  `movies_trailer` varchar(75) NOT NULL DEFAULT 'trailer_default.jpg',
  `movies_release` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_movies`
--

INSERT INTO `tbl_movies` (`movies_id`, `movies_cover`, `movies_title`, `movies_year`, `movies_runtime`, `movies_storyline`, `movies_trailer`, `movies_release`) VALUES
(45, 'readyplayer.jpg', 'Ready Player One', '2018', '2h 20min', 'When the creator of a virtual reality world called the OASIS dies, he releases a video in which he challenges all OASIS users to find his Easter Egg, which will give the finder his fortune.', 'ready_player_1.mp4', '29 March 2018'),
(46, 'panther.jpg', 'Black Panther', '2018', '2h 14min', 'T&#039;Challa, the King of Wakanda, rises to the throne in the isolated, technologically advanced African nation, but his claim is challenged by a vengeful outsider who was a childhood victim of T&#039;Challa&#039;s father&#039;s mistake.', 'panther.mp4', '16 February 2018'),
(47, 'final_1.jpg', 'Final Destination', '2000', '1h 38min', 'After a teenager has a terrifying vision of him and his friends dying in a plane crash, he prevents the accident only to have Death hunt them down, one by one.', 'final_1.mp4', '17 March 2000'),
(48, 'final_2.jpg', 'Final Destination 2', '2003', '1h 30min', 'When Kimberly has a violent premonition of a highway pileup she blocks the freeway, keeping a few others meant to die, safe...Or are they? The survivors mysteriously start dying and it&#039;s up to Kimberly to stop it before she&#039;s next.', 'final_2.mp4', '31 January 2003'),
(49, 'final_3.jpg', 'Final Destination 3', '2006', '1h 33min', 'A student&#039;s premonition of a deadly rollercoaster ride saves her life and a lucky few, but not from Death itself, which seeks out those who escaped their fate.', 'final_3.mp4', '10 February 2006'),
(50, 'final_4.jpg', 'The Final Destination', '2009', '1h 22min', 'After a young man&#039;s premonition of a deadly race-car crash helps saves the lives of his peers, Death sets out to collect those who evaded their end.', 'final_4.mp4', '28 August 2009'),
(51, 'final_5.jpg', 'Final Destination 5', '2011', '1h 32min', 'Survivors of a suspension-bridge collapse learn there&#039;s no way you can cheat Death.', 'final_5.mp4', '12 August 2011'),
(52, 'flash.jpg', 'Justice League: The Flashpoint Paradox', '2013', '1h 15min', 'The Flash finds himself in a war torn alternate timeline and teams up with alternate versions of his fellow heroes to return home and restore the timeline.', 'flash.mp4', '30 July 2013'),
(53, 'avengers_war.jpg', 'Avengers: Infinity War', '2018', '2h 36min', 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.', 'avengers_war.mp4', '27 April 2018'),
(54, 'harry_1.jpg', 'Harry Potter and the Sorcerer&#039;s Stone', '2001', '2h 32min', 'Rescued from the outrageous neglect of his aunt and uncle, a young boy with a great destiny proves his worth while attending Hogwarts School of Witchcraft and Wizardry.', 'harry_1.mp4', '16 November 2001'),
(55, 'harry_2.jpg', 'Harry Potter and the Chamber of Secrets', '2002', '2h 41min', 'Harry ignores warnings not to return to Hogwarts, only to find the school plagued by a series of mysterious attacks and a strange voice haunting him.', 'harry_2.mp4', '15 November 2002'),
(56, 'harry_3.jpg', 'Harry Potter and the Prisoner of Azkaban', '2004', '2h 22min', 'It&#039;s Harry&#039;s third year at Hogwarts; not only does he have a new &quot;Defense Against the Dark Arts&quot; teacher, but there is also trouble brewing. Convicted murderer Sirius Black has escaped the Wizards&#039; Prison and is coming after Harry.', 'harry_3.mp4', '4 June 2004'),
(58, 'harry_4.jpg', 'Harry Potter and the Goblet of Fire', '2005', '2h 37min', 'A young wizard finds himself competing in a hazardous tournament between rival schools of magic, but he is distracted by recurring nightmares.', 'harry_4.mp4', ' 18 November 2005'),
(59, 'harry_5.jpg', 'Harry Potter and the Order of the Phoenix', '2007', '2h 18min', 'With their warning about Lord Voldemort&#039;s return scoffed at, Harry and Dumbledore are targeted by the Wizard authorities as an authoritarian bureaucrat slowly seizes power at Hogwarts.', 'harry_5.mp4', '11 July 2007'),
(60, 'harry_6.jpg', 'Harry Potter and the Half-Blood Prince', '2009', '2h 33min', 'As Harry Potter begins his sixth year at Hogwarts, he discovers an old book marked as &quot;the property of the Half-Blood Prince&quot; and begins to learn more about Lord Voldemort&#039;s dark past.', 'harry_6.mp4', '15 July 2009'),
(61, 'harry_7.jpg', 'Harry Potter and the Deathly Hallows: Part 1', '2010', '2h 26min', 'As Harry races against time and evil to destroy the Horcruxes, he uncovers the existence of three most powerful objects in the wizarding world: the Deathly Hallows.', 'harry_7.mp4', '19 November 2010'),
(62, 'harry_8.jpg', 'Harry Potter and the Deathly Hallows: Part 2', '2011', '2h 10min', 'Harry ignores warnings not to return to Hogwarts, only to find the school plagued by a series of mysterious attacks and a strange voice haunting him.', 'harry_8.mp4', '15 July 2011'),
(63, 'it.jpg', 'It', '2017', '2h 15min', 'In the summer of 1989, a group of bullied kids band together to destroy a shapeshifting monster, which disguises itself as a clown and preys on the children of Derry, their small Maine town.', 'it.mp4', '8 September 2017'),
(64, 'stars.jpg', 'The Fault in Our Stars', '2014', '2h 6min', 'Two teenage cancer patients begin a life-affirming journey to visit a reclusive author in Amsterdam.', 'fault.mp4', '6 June 2014'),
(65, 'hunger.jpg', 'The Hunger Games', '2012', '2h 22min', 'Katniss Everdeen voluntarily takes her younger sister&#039;s place in the Hunger Games: a televised competition in which two teenagers from each of the twelve Districts of Panem are chosen at random to fight to the death.', 'hunger_1.mp4', '23 March 2012'),
(66, 'hunger_2.jpg', 'The Hunger Games: Catching Fire', '2013', '2h 26min', 'Katniss Everdeen and Peeta Mellark become targets of the Capitol after their victory in the 74th Hunger Games sparks a rebellion in the Districts of Panem.', 'hunger_2.mp4', '22 November 2013'),
(67, 'hunger_3.jpg', 'The Hunger Games: Mockingjay Part 1', '2014', '2h 3min', 'Katniss Everdeen is in District 13 after she shatters the games forever. Under the leadership of President Coin and the advice of her trusted friends, Katniss spreads her wings as she fights to save Peeta and a nation moved by her courage.', 'hunger_3.mp4', '21 November 2014'),
(69, 'hunger_4.jpg', 'The Hunger Games: Mockingjay - Part 2', '2015', '2h 17min', 'As the war of Panem escalates to the destruction of other districts, Katniss Everdeen, the reluctant leader of the rebellion, must bring together an army against President Snow, while all she holds dear hangs in the balance.', 'hunger_4.mp4', '20 November 2015'),
(70, 'holmes.jpg', 'Sherlock Holmes ', '2009', '2h 8min', 'Detective Sherlock Holmes and his stalwart partner Watson engage in a battle of wits and brawn with a nemesis whose plot is a threat to all of England.', 'sherlock.mp4', '25 December 2009'),
(71, 'ride_1.jpg', 'Ride Along', '2014', '1h 39min', 'Security guard Ben must prove himself to his girlfriend&#039;s brother, top police officer James. He rides along James on a 24-hour patrol of Atlanta.', 'ride_1.mp4', '17 January 2014'),
(72, 'ride_2.jpg', 'Ride Along 2', '2016', '1h 42min', 'As his wedding day approaches, Ben heads to Miami with his soon-to-be brother-in-law James to bring down a drug dealer who&#039;s supplying the dealers of Atlanta with product.', 'ride_2.mp4', '15 January 2016'),
(73, 'shrek.jpg', 'Shrek', '2001', '1h 30min', 'After his swamp is filled with magical creatures, Shrek agrees to rescue Princess Fiona for a villainous lord in order to get his land back.', 'shrek.mp4', '18 May 2001'),
(74, 'arrival.jpg', 'Arrival', '2016', '1h 56min', 'A linguist is recruited by the military to communicate with alien lifeforms after twelve mysterious spacecrafts land around the world.', 'arrival.mp4', '11 November 2016');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mov_genre`
--

CREATE TABLE `tbl_mov_genre` (
  `mov_genre_id` int(10) UNSIGNED NOT NULL,
  `movies_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_mov_genre`
--

INSERT INTO `tbl_mov_genre` (`mov_genre_id`, `movies_id`, `genre_id`) VALUES
(1, 1, 5),
(2, 1, 9),
(4, 3, 1),
(5, 4, 7),
(6, 5, 1),
(7, 6, 1),
(8, 7, 2),
(9, 8, 1),
(10, 9, 1),
(11, 10, 1),
(12, 11, 1),
(13, 12, 1),
(14, 13, 7),
(15, 14, 1),
(16, 15, 2),
(17, 16, 1),
(18, 17, 6),
(19, 18, 1),
(20, 19, 1),
(21, 20, 1),
(22, 21, 7),
(23, 22, 7),
(24, 23, 7),
(25, 24, 7),
(26, 25, 7),
(27, 26, 2),
(28, 27, 2),
(29, 28, 2),
(30, 29, 2),
(31, 30, 2),
(32, 31, 2),
(33, 32, 2),
(34, 33, 2),
(35, 34, 12),
(36, 35, 1),
(37, 36, 1),
(38, 37, 1),
(39, 38, 1),
(40, 39, 15),
(41, 40, 3),
(42, 41, 3),
(43, 42, 4),
(44, 43, 13),
(45, 44, 1),
(46, 45, 1),
(47, 46, 1),
(48, 47, 7),
(49, 48, 7),
(50, 49, 7),
(51, 50, 7),
(52, 51, 7),
(53, 52, 12),
(54, 53, 1),
(55, 54, 2),
(56, 55, 2),
(57, 56, 2),
(58, 57, 2),
(59, 58, 2),
(60, 59, 2),
(61, 60, 2),
(62, 61, 2),
(63, 62, 2),
(64, 63, 7),
(65, 64, 15),
(66, 65, 1),
(67, 66, 1),
(68, 67, 1),
(69, 70, 4),
(70, 71, 3),
(71, 72, 3),
(72, 73, 13),
(73, 74, 9),
(74, 75, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ip` varchar(50) NOT NULL DEFAULT 'no',
  `user_last` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_fail` tinyint(4) NOT NULL,
  `user_level` varchar(15) NOT NULL,
  `user_new` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_ip`, `user_last`, `user_fail`, `user_level`, `user_new`) VALUES
(35, 'Jacob', 'jaker145', '$2y$10$RPrRkr3/ybteOHkIx0jUGuv/o2QGAsC.pkxKrse9BwSenw6V9.ROy', 'jakerutl@gmail.com', '2018-02-23 06:37:08', '::1', '2018-04-09 02:24:28', 0, '2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_genre`
--
ALTER TABLE `tbl_genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  ADD PRIMARY KEY (`movies_id`);

--
-- Indexes for table `tbl_mov_genre`
--
ALTER TABLE `tbl_mov_genre`
  ADD PRIMARY KEY (`mov_genre_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_genre`
--
ALTER TABLE `tbl_genre`
  MODIFY `genre_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  MODIFY `movies_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `tbl_mov_genre`
--
ALTER TABLE `tbl_mov_genre`
  MODIFY `mov_genre_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
