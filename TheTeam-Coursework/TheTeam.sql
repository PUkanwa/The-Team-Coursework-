-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2020 at 12:56 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TheTeam`
--

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE `Events` (
  `eventID` int(11) NOT NULL,
  `eventName` varchar(40) NOT NULL,
  `eventDate` date NOT NULL,
  `eventDescription` varchar(500) NOT NULL,
  `eventTime` varchar(20) NOT NULL,
  `eventLocation` varchar(40) NOT NULL,
  `eventType` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`eventID`, `eventName`, `eventDate`, `eventDescription`, `eventTime`, `eventLocation`, `eventType`) VALUES
(1, 'Among Us Halloween Party', '2020-10-31', 'Join us to celebrate spooky season. We are holding an among us halloween party. Come dresssed in your spooky costumes. Best costume wins a prize!!', '18:00 - 20:00', 'Zoom', 'Online'),
(2, 'Thanksgiving Dinner', '2020-11-26', 'It\'s time to eat turkey and yams and cranberries too just like the Pilgrims used to do! Be our guests on Thanksgiving Day annd join us for dinner.', '19:30 - 21:00', 'Noose and Monkey', 'Resturant'),
(3, 'Bonfire\'s Outdoor Cinema', '2020-11-05', 'Come and celebrate bonfire\'s night as we sit around a fire in the cairngorms outdoor cinema and watch Inception. Everyone is welcome but make sure you bring your marshmellows! ', '17:35 - 20:00', 'Cairngorms Outdoor Cinema', 'Cinema'),
(4, 'Vue Cinema', '2020-12-23', 'You are invited to attend a special production of \'Hollywood Nights\' to honor the premier independent filmmakers of our times. Join us and walk among the stars.', '15:00 - 18:00', 'Vue Cinema', 'Cinema'),
(5, 'Movie Director Workshop', '2021-01-20', 'We have been fortunate enough to have a local movie director offer to come along and undertake a workshop on the basics of directing. Members / non-members are welcome. It should be really interesting so save the date.', '13:00 - 14:40', 'Microsoft Teams', 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `Review`
--

CREATE TABLE `Review` (
  `reviewID` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `title` varchar(25) NOT NULL,
  `review` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Review`
--

INSERT INTO `Review` (`reviewID`, `rating`, `firstname`, `title`, `review`) VALUES
(1, 5, 'Sophie', 'Amazing!', 'Great Society. Incredibly friendly and warm and really happy with the club! Always fun activities.'),
(2, 4, 'Kevin', 'Super fun', 'Wasn\'t really sure at the start whether to join but I don\'t regret it. It\'s well good. Also fun and games.'),
(3, 5, 'Rauder', 'Best Club!', 'Always banter. Leaders are very well organised and the activities run smoothly. Very impressed as I\'ve been to a lot of failed film clubs in the past.');

-- --------------------------------------------------------

--
-- Table structure for table `Upcoming Movies`
--

CREATE TABLE `Upcoming Movies` (
  `upMovieID` int(11) NOT NULL,
  `upTitle` varchar(40) NOT NULL,
  `upGenre` varchar(30) NOT NULL,
  `upDescription` varchar(1000) NOT NULL,
  `upDate` date NOT NULL,
  `upImage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Upcoming Movies`
--

INSERT INTO `Upcoming Movies` (`upMovieID`, `upTitle`, `upGenre`, `upDescription`, `upDate`, `upImage`) VALUES
(1, 'Minions: The Rise Of Gru', 'Kids, Animation', 'Set just after the 2015 film, this time in the heart of the 1970s, a twelve year old Felonius Gru is growing up in the suburbs. A fanboy of a supervillain group known as the Vicious 6, Gru hatches a plan to become evil enough to join them. When the Vicious 6 fire their leader, legendary fighter Wild Knuckles, Gru interviews to become their newest member. It does not go well, and things only get worse after Gru steals from them with the help of Kevin, Stuart, Bob, Otto, and the other Minions and suddenly finds himself the mortal enemy of the apex of evil. On the run, Gru and the Minions will turn to an unlikely source for guidance, Wild Knuckles himself, and discover that even bad guys need a little help from their friends', '2021-01-02', 'minions.jpg'),
(2, 'A Quiet Place Part II', 'Horror', 'Following the deadly events at home, the Abbott family must now face the terrors of the outside world as they continue their fight for survival in silence. Forced to venture into the unknown, they quickly realize that the creatures that hunt by sound are not the only threats that lurk beyond the sand path.', '2021-04-23', 'QPII.jpg'),
(3, 'Everybody\'s Talking About Jamie', 'Musical, Drama', 'Jamie New is a 16-year-old and doesn’t quite fit in. Instead of pursuing a \"real\" career he dreams of becoming a drag queen. Uncertain about his future, Jamie knows one thing for sure: he is going to be a sensation. Supported by his loving mom and his amazing friends, Jamie overcomes prejudice, beats the bullies and steps out of the darkness into the spotlight.', '2021-02-26', 'ETAJ.png'),
(4, 'Antlers', 'Horror', 'Julia Meadows (Keri Russell), a school teacher in a small town in Oregon, and her brother, Paul (Jesse Plemons), the local sheriff, become concerned about one of her students, a young boy named Lucas Weaver (Jeremy T. Thomas) who is secretly keeping a supernatural creature in his house.', '2021-02-19', 'Antlers.jpg'),
(5, 'Chaos Walking', 'Sci-Fi, Action', 'Based on the sci-fi trilogy Chaos Walking In the not too distant future, Todd Hewitt (Tom Holland) discovers Viola (Daisy Ridley), a mysterious girl who crash lands on his planet, where all the women have disappeared and the men are afflicted by \'The Noise\' – a force that puts all their thoughts on display. In this dangerous landscape, Viola\'s life is threatened – and as Todd vows to protect her, he will have to discover his own inner power and unlock the planet\'s dark secrets.', '2021-03-25', 'CW.png'),
(6, 'No Time To Die', 'Spy, Action', 'The twenty-fifth instalment in the James Bond film series.Five years after the capture of Ernst Stavro Blofeld, James Bond has left active service. He is approached by Felix Leiter, his friend and a CIA officer, who enlists his help in the search for Valdo Obruchev, a missing scientist. When it becomes apparent that Obruchev has been abducted, Bond must confront a villain whose schemes could see the deaths of millions.', '2021-03-05', 'NTD.jpg'),
(7, 'Tom & Jerry', 'Kids, Animation', 'Tom gets disowned by his owners and kicked out of their house after failing of doing his job as a house cat and destroying their home for the final time with his longtime rival, frenemy, best friend and arch-rival Jerry, a mischievous mouse, who has now been left without a source of food. Now homeless, the cat and mouse duo were left wandered in the streets then came at a crossroads, they decided call a truce to their rivalry and go their separate ways to have a fresh start in their lives.', '2021-07-12', 'Antlers.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Review`
--
ALTER TABLE `Review`
  ADD PRIMARY KEY (`reviewID`);

--
-- Indexes for table `Upcoming Movies`
--
ALTER TABLE `Upcoming Movies`
  ADD PRIMARY KEY (`upMovieID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Review`
--
ALTER TABLE `Review`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `Upcoming Movies`
--
ALTER TABLE `Upcoming Movies`
  MODIFY `upMovieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
