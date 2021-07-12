-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 04:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Rollno` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Heading` varchar(50) NOT NULL,
  `Description` mediumtext NOT NULL,
  `Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Rollno`, `Name`, `Heading`, `Description`, `Time`) VALUES
('1', 'subba reddy', 'hello', 'good morning all', '2021-07-12 16:23:08'),
('1', 'subba reddy', 'salcsd', ';fldskf', '2021-07-12 17:28:09'),
('1', 'subba reddy', 'dlmvmsk', 'dsmvdmslk', '2021-07-12 17:28:15'),
('1', 'subba reddy', 's;ldfa', 'dlskmvkamdk\r\n\r\n', '2021-07-12 17:28:30'),
('1', 'subba reddy', 'ls;dmaf', 'msd;kfmsak\r\n', '2021-07-12 17:28:38'),
('1', 'subba reddy', 'lkdsmcfklsad', ' md.fvnmd;navmck', '2021-07-12 17:28:44'),
('1', 'subba reddy', 's.d,mam', 'sdm, c.am', '2021-07-12 17:28:55'),
('1', 'subba reddy', 'lkdsmakl', 'kmdkcm\r\n', '2021-07-12 17:29:02'),
('1', 'subba reddy', 'd;slvkmlkd', 'kldvmkmskc', '2021-07-12 17:29:08'),
('1', 'subba reddy', 'exam', 'exam date is 4 aug by principal\r\n', '2021-07-12 17:46:48'),
('1', 'subba reddy', 'li', 'Various educators teach rules governing the length of paragraphs. They may say that a paragraph should be 100 to 200 words long, or be no more than five or six sentences. But a good paragraph should not be measured in characters, words, or sentences. The true measure of your paragraphs should be ideas.\r\n\r\nHow many sentences are in a paragraph?\r\nYour childhood teacher did not wrong you when they taught you that there should be three, or four, or five sentences in a paragraph. It is important to understand, however, that the aim in teaching this was not to impart a hard-and-fast rule of grammar, drawn from an authoritative-but-dusty book. The true aim of this strategy was to teach you that your ideas must be well supported to be persuasive and effective.\r\n\r\nHere’s a tip: Want to make sure your writing always looks great? Grammarly can save you from misspellings, grammatical and punctuation mistakes, and other writing issues on all your favorite websites.\r\nArticle icon\r\nYour writing, at its best\r\nBe the best writer in the office.\r\nThe model regarding paragraph length that your teacher undoubtedly taught you involves a topic sentence, a number of facts that support that core idea, and a concluding sentence. The proviso about the number of sentences between the topic sentence and the conclusion was not given to you because it was the magic formula for creating paragraphs of the perfect length; rather, your educator was attempting to give you a good reason to do adequate research on your topic. Academic writing yields the best examples of the topic-support-conclusion paragraph structure.\r\n\r\nRecent research has provided a wealth of insight about how dogs came to be domesticated by humans and the roles they played in Native American culture. DNA studies on archaeological finds suggest that dogs may have been domesticated by humans as long as 40,000 years ago. When the first humans came to North America from Eurasia, at least 12,000 years ago, domesticated dogs came with them. They appear to have been highly prized by early North American hunter-gatherers and were their only animal companions for centuries, since there were no horses on the continent until the 16th century.\r\nYou can see from this example how a topic is introduced, supported, and then brought to its natural conclusion. Yet, not all writing is academic, and once you have learned the concept behind good paragraph construction—which is really the art of focused writing in disguise—you should know that there are times when paragraph “rules” can, and should, be broken.\r\n\r\nREAD: Splitting Paragraphs for Easier Reading\r\n\r\nHow to write paragraphs people want to read\r\nThe fact of the matter is that although you may have numerous valid facts or descriptions related to your paragraph’s core idea, you may lose a reader’s attention if your paragraphs are too long. What’s more, if all of your paragraphs are long, you may lose opportunities to draw your reader in. Journalists, for example, know that their readers respond better to short paragraphs. News readers generally lose interest with long descriptions and even one-sentence paragraphs are considered both acceptable and impactful.\r\n\r\nFirefighters rushed to First Avenue today to extinguish a blaze on the 1500 block. Anguished onlookers hoped that the flames would be subdued in time to rescue the building’s most prized inhabitants.\r\nThey weren’t.\r\n\r\nThe cat hospital was gone.\r\n\r\nWhen it comes to maintaining a reader’s attention, a good rule of thumb might be to avoid writing more than five or six sentences in a paragraph before finding a logical place to break. That said, remember that the idea behind a paragraph might be short and sweet, or it might merit deeper explanation. There are no strict rules about how many words or lines your paragraphs should be, and there’s no need to lock your doors if you occasionally write long or short ones. The grammar police aren’t coming for you. \r\n\r\n', '2021-07-12 17:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Roll_number` varchar(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `College` varchar(5) NOT NULL,
  `Branch` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Roll_number`, `Name`, `Email`, `Password`, `Gender`, `College`, `Branch`) VALUES
('1', 'subba reddy', 'subbareddy934@gmail.com', '1', 'Male', 'ACOE', 'CSE'),
('2', ' rani ', 'rani@gmail.com', '1', 'Female', 'AEC', 'CSE'),
('20p31a0533', 'veera raghavareddy kovvuri', 'raghavakovvuri999@gmail.com', '1', 'Male', 'ACET', 'CSE'),
('3', 'saranya', 'saranya@gmail.com', '1', 'Female', 'ACET', 'CSE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Roll_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
