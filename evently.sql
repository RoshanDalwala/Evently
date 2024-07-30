-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2023 at 08:50 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evently`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `AdminID` int NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `EmailID` varchar(50) NOT NULL,
  `ContactNumber` int NOT NULL,
  `ProfilePic` varchar(200) NOT NULL,
  PRIMARY KEY (`AdminID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`AdminID`, `UserName`, `Password`, `EmailID`, `ContactNumber`, `ProfilePic`) VALUES
(1, 'roshan', 'roshan123', 'roshan@gmail.com', 1234567890, 'Bappa Image.jpeg'),
(2, 'admin', 'admin123', 'admin@gmail.com', 1234567890, 'logo.jpg'),
(3, 'purva', 'purva123', 'purva@gmail.com', 1234567890, '123456789.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblbid`
--

DROP TABLE IF EXISTS `tblbid`;
CREATE TABLE IF NOT EXISTS `tblbid` (
  `BidID` int NOT NULL AUTO_INCREMENT,
  `ProjectID` int NOT NULL,
  `Price` int NOT NULL,
  `EventManagerID` int NOT NULL,
  `CreatedDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`BidID`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblbid`
--

INSERT INTO `tblbid` (`BidID`, `ProjectID`, `Price`, `EventManagerID`, `CreatedDateTime`, `Description`) VALUES
(31, 5, 12345, 1, '2023-04-14 08:03:37', 'eeeee'),
(1, 1, 100000, 1, '2023-04-04 05:24:51', 'Wedding Events'),
(32, 2, 678, 1, '2023-04-17 09:28:32', 'kjgbkjb'),
(26, 4, 9000, 2, '2023-04-05 15:12:22', 'roshan'),
(33, 3531, 35143, 2, '2023-04-21 09:03:54', 'sdfghjk'),
(34, 3532, 650000, 20, '2023-04-21 13:33:37', 'HaPpY BaIsAkHi.......'),
(35, 12, 550000, 3, '2023-04-21 13:40:18', 'hari har'),
(36, 2, 45000, 3, '2023-04-21 13:43:46', 'asdfghj,.'),
(37, 3532, 500000, 3, '2023-04-21 13:45:44', 'asdfghjkk'),
(38, 11, 544655, 3, '2023-04-24 08:45:49', 'swdfghjkl'),
(39, 9, 9848654, 21, '2023-04-24 11:36:50', 'asdfghjk'),
(40, 9, 15000, 4, '2023-04-24 11:37:40', 'sdfghnm'),
(41, 3533, 1050000, 22, '2023-04-25 08:12:05', 'It\'s all are included...'),
(42, 3533, 1500000, 20, '2023-04-25 08:13:15', 'it\'s all are included.....'),
(43, 3533, 1100000, 21, '2023-04-25 08:14:59', 'it\'s all are included.....');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

DROP TABLE IF EXISTS `tblcategory`;
CREATE TABLE IF NOT EXISTS `tblcategory` (
  `CategoryID` int NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(50) NOT NULL,
  PRIMARY KEY (`CategoryID`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`CategoryID`, `CategoryName`) VALUES
(1, 'Wedding'),
(2, 'Birthday'),
(3, 'Baby Shower'),
(4, 'Anniversary'),
(5, 'Diwali'),
(6, 'Holi'),
(7, 'Navratri'),
(8, 'Durga Puja'),
(9, 'Dussehra'),
(10, 'Janmashtami'),
(11, 'Ganesh Chaturthi'),
(12, 'Eid-ul-Fitr'),
(13, 'Christmas'),
(14, 'Maha Shivratri'),
(15, 'Onam'),
(16, 'Baisakhi'),
(17, 'Makar Sankranti'),
(18, 'Ram Navami'),
(19, 'Dj Party / Concert'),
(20, 'Any Festivals Or Any Events'),
(29, 'Ring Ceremony');

-- --------------------------------------------------------

--
-- Table structure for table `tblcity`
--

DROP TABLE IF EXISTS `tblcity`;
CREATE TABLE IF NOT EXISTS `tblcity` (
  `CityID` int NOT NULL AUTO_INCREMENT,
  `CityName` varchar(50) NOT NULL,
  `StateID` int NOT NULL,
  PRIMARY KEY (`CityID`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblcity`
--

INSERT INTO `tblcity` (`CityID`, `CityName`, `StateID`) VALUES
(1, 'Surat', 1),
(2, 'Ahmedabad', 1),
(3, 'Ujjain', 2),
(4, 'Kanpur', 8),
(6, 'Lacknow', 8),
(5, 'Ludhiana', 4),
(8, 'mumbai', 1),
(9, 'chennai', 2),
(7, 'Jaipur', 7),
(10, 'Jodhpur', 7),
(14, 'Kolkata', 9),
(11, 'Puri', 5),
(12, 'Chennai', 10),
(13, 'Ayodhya', 8),
(15, 'Amritsar', 4),
(19, 'Jaisalmer', 7),
(20, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblevent_manager`
--

DROP TABLE IF EXISTS `tblevent_manager`;
CREATE TABLE IF NOT EXISTS `tblevent_manager` (
  `EventManagerID` int NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `EmailID` varchar(50) NOT NULL,
  `ContactNumber` int NOT NULL,
  `ProfilePic` varchar(200) NOT NULL,
  `Website` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `CityID` int NOT NULL,
  `Verification` int NOT NULL DEFAULT '0',
  `Status` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`EventManagerID`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblevent_manager`
--

INSERT INTO `tblevent_manager` (`EventManagerID`, `UserName`, `Password`, `EmailID`, `ContactNumber`, `ProfilePic`, `Website`, `CityID`, `Verification`, `Status`) VALUES
(1, 'dhruv', 'dhruv', 'roshan@gmail.com', 35156416, 'Dagaduseth Ganpati Bappa.jpg', 'www.roshanevents.com.in', 1, 0, 1),
(2, 'harsh', 'harsh', 'harsh@gmail.com', 2147483647, 'jay shree ram.png', 'www.harshevent.com', 5, 0, 1),
(3, 'amaan', 'amaan', 'amaan@yahoo.com', 87645312, '1.jpg', 'www.amaaneventstar.com', 8, 0, 0),
(4, 'parvesh', 'parvesh', 'parvesh@yahoo.com', 2147483647, '30.jpg', 'www.eventswithparvesh.com', 15, 0, 0),
(20, 'karan', 'karan', 'karan@yahoo.com', 2147483647, 'Snapchat-768191630.jpg', 'www.eventswithkaran.com', 11, 0, 0),
(21, '123456', '123456', 'zxcvb@sdf.com', 89566159, 'bappa.jpg', 'www.abcevent.com', 19, 0, 0),
(22, 'pratham', 'pratham', 'pratham@yahoo.com', 2147483647, 'IMG_9228.jpeg', 'www.eventspratham.com', 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblproject`
--

DROP TABLE IF EXISTS `tblproject`;
CREATE TABLE IF NOT EXISTS `tblproject` (
  `ProjectID` int NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `UserID` int NOT NULL,
  `Description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Budget` int NOT NULL,
  `AuctionDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `AuctionEndDateTime` varchar(100) NOT NULL,
  `CityID` int NOT NULL,
  `Image` varchar(200) NOT NULL,
  `CategoryID` int NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `AssignedManagerID` int NOT NULL,
  `AssignedPrice` int NOT NULL,
  PRIMARY KEY (`ProjectID`)
) ENGINE=MyISAM AUTO_INCREMENT=3534 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblproject`
--

INSERT INTO `tblproject` (`ProjectID`, `Title`, `UserID`, `Description`, `Budget`, `AuctionDateTime`, `AuctionEndDateTime`, `CityID`, `Image`, `CategoryID`, `status`, `AssignedManagerID`, `AssignedPrice`) VALUES
(1, 'Purva\'s Wedding', 1, 'A wedding is a ceremony where two people are united in marriage. Wedding traditions and customs vary greatly between cultures, ethnic groups, religions, countries, and social classes. Most wedding ceremonies involve an exchange of marriage vows by a couple, presentation of a gift (offering, rings, symbolic item, flowers, money, dress), and a public proclamation of marriage by an authority figure or celebrant. Special wedding garments are often worn, and the ceremony is sometimes followed by a wedding reception. Music, poetry, prayers, or readings from religious texts or literature are also commonly incorporated into the ceremony, as well as superstitious customs.', 100000, '0000-00-00 00:00:00', '', 8, 'saadi.jpg', 1, 1, 1, 100000),
(2, 'Niyati Baby Shower', 3, 'A baby shower is a celebratory gathering of the friends and family of expectant parents to help them prepare for the birth of their baby. ‘Showering’ the parents to be with gifts, love and well wishes and reassure them they have everything they need before their baby is born. \nAlthough all baby showers are different, they typically involve playing a few games and enjoying light refreshments. It is unusual for the parents to plan their own baby shower, but not unheard of. Most baby showers are organised by a close friend, colleague or neighbour to allow for a few lovely surprises to be included at the party. Traditionally, baby showers were held to celebrate the arrival of a parents first child. But did you know, if parents are welcoming their second child, it is known as a Baby Sprinkle? The focus of a baby sprinkle is less on preparing the parents with equipment they may already have, but rather on friendship, fun and gifting essentials such as nappies, lotions and post-pregnancy trea', 50000, '0000-00-00 00:00:00', '', 2, 'baby.jpg', 3, 0, 0, 0),
(3, 'Subh Dipawali', 2, 'Diwali, also known as Deepawali or the Festival of Lights, is one of the most important festivals in Indian religions. It symbolises the spiritual \"victory of light over darkness, good over evil, and knowledge over ignorance\". The festival is widely associated with conflagrations between good and evil entities. Diwali is a post-harvest festival celebrating the bounty following the arrival of the monsoon in the subcontinent. It is celebrated during the Hindu lunisolar months of Ashvin (according to the amanta tradition) and Kartika (between mid-October and mid-November). In Hinduism it generally lasts five or six days. Diwali is connected to various religious mythical events or personalities. The day Rama returned to his kingdom in Ayodhya with his wife Sita and his brother Lakshmana after defeating the demon Ravana. Birth of Lakshmi (goddess of prosperity). Ganesha (god of wisdom and the remover of obstacles). Other regional traditions connects the holiday to Sita and Rama, Vishnu, Kri', 20000, '0000-00-00 00:00:00', '', 13, 'diwali.jpg', 5, 1, 1, 12000),
(4, 'Rang Barse', 3, 'Biggest Holi Events', 150000, '0000-00-00 00:00:00', '', 3, 'holi.jpg', 6, 1, 2, 9000),
(5, 'Dahi - Handi Festival', 5, 'Dahi Handi (also known as Gopal Kala or Utlotsavam) is an entertainment and competitive event associated with Krishna Janmashtami, the Hindu festival celebrating the birth of Krishna. During the event, which takes place during August or September on the day after Krishna Janmashtami. It involves communities hanging a clay pot filled with yogurt (dahi), butter, or another milk-based food at a convenient or tall height. Young men and boys form teams, make a human pyramid, and attempt to reach or break the pot. As they do so, people surround them, sing, play music, and cheer them on. It is a public spectacle, and an old tradition. More recently, Dahi Handi was lavished with media coverage, prize money and commercial sponsorships. The event is based on the legend of the god Krishna along with his friends mischievously stealing butter and other curd from neighbouring homes in Gokul as a child. He is also called Makhan chor or butter thief. The neighbours would try to avert his mischief by h', 111111, '0000-00-00 00:00:00', '', 8, 'dahihandi.jpg', 10, 0, 0, 0),
(6, 'Happy New Year', 5, 'Let\'s Go for Party .........', 50000, '0000-00-00 00:00:00', '', 10, 'dj.jpg', 19, 0, 0, 0),
(7, 'Shree Ram Navmi', 1, 'Jay Shree Ram........!!!!!!', 300000, '0000-00-00 00:00:00', '', 13, 'ramnavmi.jpg', 18, 1, 19, 300001),
(8, 'Happy Maha Shivratri', 4, 'Har Har Mahadev ....', 300000, '0000-00-00 00:00:00', '', 3, 'shivratri.jpg', 14, 0, 0, 0),
(9, 'Kai Po j Chhe...', 4, 'Happy Makar Sankranti.', 10000, '0000-00-00 00:00:00', '', 1, 'kite.jpg', 17, 0, 0, 0),
(10, 'Ganapati Bappa Morya', 2, 'Ganesh Chaturthi, also known as Vinayak Chaturthi, or Ganeshotsav is a Hindu festival commemorating the birth of the Hindu god Ganesha. The festival is marked with the installation of Ganesha\'s clay idols privately in homes and publicly on elaborate pandals (temporary stages). Observances include chanting of Vedic hymns and Hindu texts, such as prayers and vrata (fasting). Offerings and prasada from the daily prayers, that are distributed from the pandal to the community, include sweets such as modaka as it is believed to be a favourite of Ganesha. The festival ends on the tenth day after start, when the idol is carried in a public procession with music and group chanting, then immersed in a nearby body of water such as a river or sea, called visarjan on the day of Anant Chaturdashi. In Mumbai alone, around 150,000 statues are immersed annually. Thereafter the clay idol dissolves and Ganesha is believed to return to his celestial abode.', 1000000, '0000-00-00 00:00:00', '', 1, 'bappa.jpg', 11, 0, 0, 0),
(12, 'om namh shivay', 3, 'shiv', 544565, '2023-04-07 09:35:50', '', 6, 'shivratri.jpg', 14, 0, 0, 0),
(11, 'Happy Anniversary', 1, 'Marrige Anniversary...', 900000, '2023-04-03 17:13:19', '', 7, 'weddinganniversary.jpg', 4, 0, 0, 0),
(13, 'bappa', 5, 'Ganesh Chaturthi, also known as Vinayak Chaturthi, or Ganeshotsav is a Hindu festival commemorating the birth of the Hindu god Ganesha. The festival is marked with the installation of Ganesha\'s clay idols privately in homes and publicly on elaborate pandals (temporary stages). Observances include chanting of Vedic hymns and Hindu texts, such as prayers and vrata (fasting). Offerings and prasada from the daily prayers, that are distributed from the pandal to the community, include sweets such as modaka as it is believed to be a favourite of Ganesha. The festival ends on the tenth day after start, when the idol is carried in a public procession with music and group chanting, then immersed in a nearby body of water such as a river or sea, called visarjan on the day of Anant Chaturdashi. In Mumbai alone, around 150,000 statues are immersed annually. Thereafter the clay idol dissolves and Ganesha is believed to return to his celestial abode.', 654656, '2023-04-07 09:37:44', '', 14, 'bappa.jpg', 11, 0, 0, 0),
(3531, 'Jay Matadi', 2, 'Navaratri is an annual Hindu festival observed in the honour of the goddess Durga also referred to as Adi Parashakti. It spans over nine nights (and ten days), first in the month of Chaitra (March/April of the Gregorian calendar), and again in the month of Ashwin. It is observed for different reasons and celebrated differently in various parts of the Hindu Indian cultural sphere. Theoretically, there are four seasonal Navaratri. However, in practice, it is the post-monsoon autumn festival called Sharada Navaratri. The festival is celebrated in the bright half of the Hindu calendar month Ashvin, which typically falls in the Gregorian months of September and October.', 1000000, '2023-04-14 09:08:30', '', 2, 'navratri.jpg', 7, 0, 0, 0),
(3532, 'Happy Baisakhi', 19, 'Vaisakhi, also pronounced Baisakhi as well as Basoa (among Dogras), marks the first day of the month of Vaisakh and is traditionally celebrated annually on 13 April and sometimes 14 April. It is seen as a celebration of spring harvest primarily in Northern India. Further, other Indian cultures and diaspora celebrate this festival too. Whilst it is culturally significant as a festival of harvest, in many parts of India, Vaisakhi is also the date for the Indian Solar New Year. Some 5298 years ago, on this day Raja Shaktikaran Dogra, also known as Raja Shastri, commenced the Shastra Samvat alias Dogra-Pahari Calendar, so this day predates special historical significance with Dogras of Himalayas.', 600000, '2023-04-21 13:30:04', '', 15, 'baisakhi.jpg', 16, 0, 0, 0),
(3533, 'Dj in INFINITY', 20, 'Let\'s go for club party ....', 1000000, '2023-04-25 08:07:23', '', 1, 'DJ.jpg', 19, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblreported_event_manager`
--

DROP TABLE IF EXISTS `tblreported_event_manager`;
CREATE TABLE IF NOT EXISTS `tblreported_event_manager` (
  `ReportedEventManagerID` int NOT NULL AUTO_INCREMENT,
  `EventManagerID` int NOT NULL,
  `UserID` int NOT NULL,
  `Reason` varchar(100) NOT NULL,
  `Status` int NOT NULL DEFAULT '0',
  `CreatedDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ReportedEventManagerID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblreported_event_manager`
--

INSERT INTO `tblreported_event_manager` (`ReportedEventManagerID`, `EventManagerID`, `UserID`, `Reason`, `Status`, `CreatedDateTime`) VALUES
(1, 1, 1, 'nai saro', 1, '2023-04-19 09:34:15'),
(4, 2, 2, 'fghjkl', 1, '2023-04-21 09:05:24'),
(5, 3, 3, 'not comfortable..... : (', 0, '2023-04-21 13:42:36'),
(6, 3, 1, 'not available', 0, '2023-04-21 13:46:43'),
(7, 21, 4, 'it\'s a spam', 0, '2023-04-24 11:39:25');

-- --------------------------------------------------------

--
-- Table structure for table `tblreview`
--

DROP TABLE IF EXISTS `tblreview`;
CREATE TABLE IF NOT EXISTS `tblreview` (
  `ReviewID` int NOT NULL AUTO_INCREMENT,
  `UserID` int NOT NULL,
  `EventManagerID` int NOT NULL,
  `Review` varchar(100) NOT NULL,
  `Rating` int NOT NULL,
  `CreatedDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ReviewID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblreview`
--

INSERT INTO `tblreview` (`ReviewID`, `UserID`, `EventManagerID`, `Review`, `Rating`, `CreatedDateTime`) VALUES
(3, 1, 1, 'not nice', 1, '2023-04-19 09:00:42'),
(4, 1, 2, 'boo fine', 4, '2023-04-19 10:10:51'),
(5, 2, 2, 'cvbnm,', 4, '2023-04-21 09:04:45'),
(6, 3, 3, 'sdfghjkl', 2, '2023-04-21 13:42:12'),
(7, 1, 3, 'sdfghjnm', 1, '2023-04-21 13:46:25'),
(8, 4, 21, 'asdfghj', 5, '2023-04-24 11:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `tblstate`
--

DROP TABLE IF EXISTS `tblstate`;
CREATE TABLE IF NOT EXISTS `tblstate` (
  `StateID` int NOT NULL AUTO_INCREMENT,
  `StateName` varchar(50) NOT NULL,
  PRIMARY KEY (`StateID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblstate`
--

INSERT INTO `tblstate` (`StateID`, `StateName`) VALUES
(1, 'Gujarat'),
(2, 'Madhya Pradesh'),
(3, 'Maharashtra'),
(4, 'Punjab'),
(7, 'Rajasthan'),
(8, 'Uttar Pradesh'),
(9, 'West Bengal'),
(6, 'Tripura'),
(5, 'Odisha'),
(10, 'Tamil Nadu');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE IF NOT EXISTS `tbluser` (
  `UserID` int NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `EmailID` varchar(50) NOT NULL,
  `ContactNumber` int NOT NULL,
  `ProfilePic` varchar(200) NOT NULL,
  `Description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `CityID` int NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`UserID`, `UserName`, `Password`, `EmailID`, `ContactNumber`, `ProfilePic`, `Description`, `CityID`) VALUES
(1, 'roshan', 'roshan', 'roshan@gmail.com', 123456, 'Dagaduseth Ganpati Bappa.jpg', 'It\'s Roshan Here.', 1),
(2, 'purva', 'purva', 'purva@gmail.com', 1322255665, '46.jpg', 'It\'s Purva.', 6),
(3, 'rupam', 'rupam', 'rupam@gmail.com', 2147483647, 'logo.jpg', 'Rupam Here.', 10),
(4, 'mayur', 'mayur', 'mayur@yahoo.com', 554351342, '2.jpg', 'Hello Event\'s.', 3),
(5, 'nirmal', 'nirmal', 'nirmal@yahoo.com', 6854614, '46.jpg', 'It\'s Nirmal', 13),
(21, 'pratik', 'pratik', 'pratik@yahoo.com', 2147483647, '43.jpg', 'wertyuiodfghj', 8),
(20, 'tahir', 'tahir', 'tahir@gmail.com', 2147483647, '1646245289774.jpg', 'hello world....', 12),
(19, 'tejash', 'tejash', 'tejash@gmail.com', 2147483647, '30.jpg', 'Hello Evently...... : )', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
