-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 01, 2013 at 07:43 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `name` varchar(32) NOT NULL,
  `branch` varchar(32) NOT NULL,
  `desc` text NOT NULL,
  `problem` text NOT NULL,
  `rules` text NOT NULL,
  `judging` text NOT NULL,
  `register` text NOT NULL,
  PRIMARY KEY (`name`,`branch`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`name`, `branch`, `desc`, `problem`, `rules`, `judging`, `register`) VALUES
('AppFest', 'computers', 'appfest desc', 'appfest problem', 'appfest rules', 'appfest judging', ''),
('Boxed In', 'maths', 'Like challenges with numbers and puzzles like Sudoku, kakuro etc?\r\nThen here is a wonderful opportunity. Head off to BOXED-IN to tickle your grey matter and get an adrenaline rush playing with numbers.  \r\n', '', 'Individual event\r\nEvent will be held in 2 rounds.\r\n', '', ''),
('Cannon Wars', 'chemical', 'Ever thought of being in a battle field with a cannon, that too made by you! If you have ever dreamed of this then get your dreams real at ATMOS.', 'Participants are supposed to make miniature cannon with a barrel, powered by reaction of some very common chemicals like Baking Soda and Kitchen Acids (eg. Acetic Acid and Citric Acid). A projectile small, single and compact (i.e. no ropes, nets, loose cloth, etc.) will be placed inside the barrel of the cannon to check the functionality of the cannon.', '1.	The participants in each team should not exceed more than three.<br/>\r\n2.	Participants are supposed to come with their miniature canons and the projectile that they intend to fire.<br/>\r\n3.	There are no particular specifications regarding the size and weight of the canon. In the usage of chemicals, strong acids and highly exothermic reactions are not allowed.<br/>\r\n4.	There will be two rounds; First : Elimination, Second : Finals<br/>\r\n5.	The decisions of the judges are final and binding.\r\n', 'Round 1:<br/>\r\nThis round involves the testing of the canon and the participants will be shortlisted for the next round on the basis of their range.\r\n<br/><br/>\r\nRound 2:<br/>\r\nThe participant will be given 3 chances to land the projectile in the announced range. If none of the participants are able to land the projectile in the range, then the participant with the least sum of deviations from the range will be considered the winner of the event.\r\n', ''),
('Circuit  Art', 'Electronics', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis mi pulvinar est tempor egestas. Phasellus condimentum lacus erat, vitae semper eros interdum in. Donec consequat nisl ac sollicitudin pulvinar. In sit amet euismod eros. Morbi eget ullamcorper turpis. Phasellus at orci justo. Nulla facilisis aliquet felis id feugiat. ', 'Mauris rutrum orci at sem pharetra, et pulvinar leo tincidunt. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque viverra laoreet neque, ut egestas ante dignissim et. Aliquam pharetra nisl sit amet purus rutrum sagittis. Suspendisse lacinia nibh nunc, id iaculis ligula tempus sit amet. Cras at odio sit amet mi tempus dignissim. Phasellus elementum iaculis nisi, ut cursus justo dignissim in. Duis luctus luctus augue ut ultricies. Nunc tincidunt elit at mattis malesuada. ', 'Donec tempor nulla eros, a sodales eros egestas at. Morbi justo dolor, pretium vel purus convallis, convallis fermentum enim. Nulla facilisi. Ut sit amet nulla mi. Nullam non cursus quam, nec faucibus turpis. Aenean ut neque eu est facilisis scelerisque. Nullam facilisis tristique malesuada. Morbi laoreet risus tempor elit auctor sagittis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut vel euismod mauris. Praesent sit amet dolor dui. Nam rhoncus blandit risus id molestie. Praesent ac luctus ligula. Vestibulum ac tellus felis. Donec sagittis ullamcorper ipsum, eget fringilla leo fermentum vel. Praesent gravida ligula quis placerat pellentesque. ', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi aliquet fermentum leo ut sollicitudin. Quisque at orci eu arcu dapibus porta in non nisi. Donec a libero tempus felis pulvinar suscipit et et dolor. Nullam placerat pretium adipiscing. Curabitur vel nisi sit amet risus convallis iaculis. Fusce et leo fermentum eros tristique tristique quis eu magna. Aenean hendrerit nibh non orci aliquam molestie. Suspendisse enim arcu, feugiat at laoreet non, blandit quis lorem. Phasellus imperdiet enim dolor, non molestie quam auctor non. In in ullamcorper nisl, at tincidunt mauris', ''),
('Code Jam', 'computers', '&quot;<em><i>First solve the problem. Then write the code</i></em>&quot;<br/>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;						-John Johnson\r\n<br><br>\r\n BITS Pilani Hyderabad Campus brings in its annual Technical Festival, ATMOS, a chance for you to show the same. Your code may be 10 lines or 40, what we are looking for is if you are solving the problem efficiently. Be it C, C++, JAVA, C# or Python, what we demand is the solution.\r\nIt is an opportunity for all the enthusiasts out there to show their problem solving skills in the form of a working code to bag the top spot.\r\n&quot;', '', '<ul>\r\n<li>There will be 2 rounds.</li>\r\n<li>	Participants can participate in teams of max 2.</li>\r\n<li>	Programming languages allowed: C, C++, JAVA, C# and Python.</li>\r\n<li>Participants are supposed to report to the assigned room on time otherwise it may lead to disqualification.  </li>  \r\n<li>No Printing material or soft copy is allowed for consultation. Internet will not be provided.</li>\r\n<li>Decision of the judges is final.</li>\r\n</ul>', 'Participants will be judged on following factors:\r\n•	Output\r\n•	Efficiency of the algorithm \r\n', ''),
('Codewars', 'computers', 'CodeWars is a competitive programming competition by ACM, BITS Pilani - Hyderabad Campus Chapter. It is organised in association with CodeChef as the programming partner. It will be accessible from 6.00 pm Indian Standard Time (GMT+0530), October 11, 2013 to 6.00 pm IST, October 13, 2013. The link to the competition page will be put up in due time.', '', '1. All problems will be posted on 6.00 pm Indian Standard Time, October 11, 2013 and the competition closes on 6.00 pm IST, October 13, 2013.<br/>\r\n2. It will be open for all STUDENTS. No professionals will be allowed.<br/>\r\n3. The contest is for individuals. No teams are allowed.<br/>\r\n4. All the languages supported by CodeChef are allowed.<br/>\r\n5. Please contact codewars2k13@gmail.com for any queries during the contest.\r\n', '1. You will receive THREE points for solving a problem (passing all test cases - no partial credit), regardless of the level of difficulty of that problem.<br/>\r\n2. Users are ranked according to the most problems solved. Ties will be broken by the total time for each user in ascending order of time.<br/>\r\n3. The decision of the organizers in declaring the results will be final. No queries in this regard will be entertained.<br/>\r\n4. Any participant found to be indulging in any form of malpractice will be immediately disqualified.\r\n5. The total time is the sum of the time consumed for each problem solved. The time consumed for a solved problem is the time elapsed from the beginning of the contest to the submission of the first accepted run plus 20 penalty minutes for every previously rejected run for that problem. There is no time consumed for a problem that is not solved.\r\n', ''),
('Enigma', 'headliner', 'enigma desc', 'enigma problme', 'enigma rules', 'enigma judging', 'enigma register'),
('Filter It Out', 'chemical', '', 'Filtration is a basic chemical engineering operation. Participants will be given a sample of dirty oil and they have to apply various techniques to filter it out. Participants are allowed to use any material, any technique that they think will be suitable.', '1.Maximum number of participants in a team will be two.<br/>\r\n2.	Each team will be given 1/2 liter dirty oil.<br/>\r\n3.	Participants have to bring their own materials, equipment etc. that they think is suitable for filtration. All the basic equipment will be provided on the spot.<br/>\r\n4.	Each team will be given a time limit of 30 minutes to filter the given sample.<br/>\r\n5.	Decision of judges will be final and binding.\r\n', 'Filtration will be judged on the following criteria:-<br/><br/>\r\n1)    Transparency of the filtered sample.<br/>\r\n2)    Conductivity of the filtered sample.<br/>\r\n Conductometer and hydrometer will be used to judge the filtered sample.\r\n', ''),
('Googled', 'computers', 'Your tasks will be interesting and mindboggling. Using the very famous search engine, Google - you will have to surf through the vast universe of the World Wide Web and deduce the answer with the clues given. Speed is of utmost importance! \r\n\r\nObservation skills and speed will get you ahead in the game!\r\n', '', '1.Internet access will be provided.<br/>\r\n2.Teams of 2 or 3 are allowed.<br/>\r\n3.The event consists of 2 rounds.<br/>\r\n4.You should have a GMail id.<br/>\r\n', '', ''),
('Hack the Box', 'computers', 'One OS to rule them all,\r\nOne OS to find them.\r\nOne OS to call them all,\r\nAnd in salvation bind them.\r\nIn the bright land of Linux,\r\nWhere the hackers play.\r\n', 'You are a hacker for the Russian Government. The latest KGB intelligence shows that the United States of America is planning something big and sinister. An undercover agent has gathered some more information but was killed before being able to relay it back to the HQ. You now have the remains of her laptop and must salvage the required information out of it to prevent the United States of America from carrying out its plans.\r\n<br/>\r\nHints at each stage will guide you through the thought process to recover the data and foil the USA&#39;s plans.\r\n', '1.	You&#39;re allowed to bring in your .bashrc, .zshrc, your editor&#39;s configuration (e.g. your .vimrc)<br/><br/>\r\n2.	You will be given a computer with a working, bare linux system on it along with internet access<br/><br/>\r\n3.	There is no GUI, so we encourage you to get familiar with elinks, links or any terminal browser\r\n\r\n', 'It&#39;s a race. Whoever reaches the furthest at the end of allotted time wins!\r\n', ''),
('Ideathon', 'headliner', 'Are you the one with crazy ideas and skills enough to convert them into reality? Does your brain keep troubling you with ideas regarding how can you do something existing and exciting? If yes, then BrainStorm is your calling. This event gives you a chance to show the work you have done or been doing on a project. Audience would also be benefited by your presentation which must involve an exhaustive description.', 'Round 1 <br/> Submit your entries online. Your project can be designed and conceived in the following technologies : C , C++, C, Java, Python, Android, etc . Top fifteen entries will be selected for second round. Entries must include your project description, snapshots of your project if it is a GUI application. People can also send their executable file of the project if feasible however it&#39;s totally optional.\r\nRound 2 <br/> Give your best shot while presenting your project and answering queries from the audience and the panel of judges.\r\n<br/>Sources : <br>\r\n<br/>\r\nYou can take ideas from this site for building your project.\r\n\r\n', 'Rules\r\n1.	People can participate in a maximum group of 3 and minimum 1. \r\n2.	Idea should not be a copied one. It should be original and innovative. Pasting it directly from web will result in cancellation of your project.\r\n', 'Your innovation and presentation will decide your score. ', ''),
('Mathefia', 'maths', 'If you like exercising your brain,\r\nFiguring things &#39;round and round&#39; till you explode,\r\nThen this event is for you! <br/>It is based on Basic Mathematical Ability, Logic, I.Q and Approachability towards Question. They can be solved by deduction without deep math knowledge and a little lateral thinking.\r\n', 'Event will be held in three rounds.\r\nA team of 2 is allowed to participate.\r\n', '', '', ''),
('MiniGP', 'mechanical', 'I bet most of us have dreamt of racing our cars at top speeds through spick, black race courses. Come October and BITS, Pilani Hyderabad Campus will be all set to fulfill your dream, well, in a way. On the line of the ecstatic Moto GP competition, we are conducting The Mini GP competition. The competition will have its participants (or racers) drive self-designed remote controlled cars through deliciously twisty race tracks to win the final cup! Seems simple? Well, brace yourselves for some rock solid competition. Forget not, the more innovative and inventive your design is, the closer you are to the Mini GP cup. Fasten your seatbelts and let the adrenaline pump up!', 'The participants are expected to race their remote control based IC engine cars through tracks whose complexity is bound to increase level after level. The teams completing the laps in the best possible time will qualify for a grand final race. The design skills and application of real-world driving skills to the miniature cars are put to test.', '1.The track will have check points at regular intervals.<br/>\r\n2.	In case a machine tumbles, or halts, or goes off the arena at any point on the track, only one of the participants is allowed to lift it up and place it at the nearest checkpoint behind that point. (Previous two rules are for non-racing rounds. The rules for racing round will be told on the spot)<br/>\r\n3.	Until and unless there is a need to touch the vehicle as stated above, they have to be fully remote controlled throughout the rave.<br/>\r\n4.	Every time the machine requires lifting by the team member, a time-penalty will be imposed.<br/>\r\n5.	Any vehicle is not allowed to leave any disintegrated part on the race track amidst of the race. In case this happens, the team will be disqualified.<br/>\r\n6.	The teams are also not allowed to damage the opponent\\&#39;s vehicle deliberately. If found guilty, the accused team will be disqualified.\r\n7.	Teams may consist of maximum 5 members.<br/>\r\n<br/><br/>\r\nGeneral Rules:<br/>\r\n8.	Depending on the number of teams participating and other time constraints, the arena will be given to the participants for practicing.<br/>\r\n9.	The time slots will be given on the basis of first come first serve basis, but little duration for practicing is assured to everyone.<br/>\r\n10.	Each team must come up with its own, unique team name.<br/>\r\n11.	Organizers reserve the right to change any of the above rules.<br/>\r\n12.	Participants can address their queries indirectly via e-mail or forums and directly by calling up the organizers.<br/>\r\n13.	For help and reference, some material will be uploaded soon.<br/>\r\n14.Organizers and judges&#39; decision shall be considered as final and binding on all.\r\n', '1.	Participants are expected to design their own racing car. However, in case the participants use readymade cars, they will only be evaluated for 3/4th of the total marks. That is a penalty if 1/4th of the total marks will be levied on them. If their car is part self-designed and part readymade, then the marks will be given accordingly as per the judge&#39;s discretion.<br/><br/>\r\n2.	Driving ability and application skills of the participant will also be put to test.<br/><br/>\r\n3.	Lap time will be another criterion to decide the winner.\r\n', ''),
('n-crypton', 'computers', 'Have codes and ciphers always intrigued you? Feeling like Nicholas Cage already? Here&#39;s your chance to know where you stand. Participate in this event based on logic and your knowledge of cipher texts and code breaking.', 'Round 1:<br/>\r\nParticipants will be given a set of questions based on logical ability and basic mathematics.<br/><br/>\r\nRound 2:<br/>\r\nParticipants will be given a set of questions based on popular cipher texts.\r\nHints may be provided for selected questions in both rounds.\r\n', 'Team of 2.\r\n', '', ''),
('Paper Presentations', 'chemical', '', '', '•	Maximum number of participants in a team can be three.\r\n•	Participants are supposed to submit their abstracts to aceatbphc@gmail.com. After which participants will be shortlisted and a confirmation mail will be sent.\r\n•	Selected participants will have to present their papers in front of the judging panel.\r\n•	Selected participants need to submit a hard copy of their paper to the judging panel on the day of presentation,\r\n•	Maximum allowed time for the presentation is 7 minutes.\r\n', 'Participants will be judged on the following basis:-\r\n•	Originality of the paper\r\n•	Depth of knowledge regarding the paper\r\n•	Way of presentation and format of the paper.\r\n', ''),
('Paper Presentations', 'maths', 'Topics:<br/>\r\nFinancial Mathematics<br/>\r\nPure Mathematics<br/>\r\nComputational Mathematics<br/>\r\nApplied Mathematics<br/>\r\nCryptography<br/>\r\nDifferential Equations<br/>\r\nMathematical modelling<br/>\r\n', 'The event will be held in two Rounds. A maximum of 2 students per team is allowed.<br/><br/>\r\nRound 1: Paper Submission<br/>\r\nThe papers selected in this round will be shortlisted for the next round.<br/>\r\n1.The participants are expected to submit.<br/>\r\n- An abstract in at most 100 words as the content of the e-mail.<br/>\r\n- The paper in .pdf format to mathassoc.bphc@gmail.com on/before deadline.<br/>\r\n2.Subject of the mail to be sent should follow the format: [Paper Presentation – Topic]<br/>\r\n3.An Email will be sent confirming the selection of the paper.<br/>\r\n4.The decision of the judges shall be treated as final and binding on all.<br/><br/>\r\n\r\nRound 2: Presentation<br/>\r\n1.The short listed participants who are eligible to present their paper in Round-2 will be intimated through e-mail and this list of finalists will also be put up on this website by deadline. They would have to send replies confirming their participation by deadline.<br/>\r\n\r\n2.Presentations should be in power point presentation. Microsoft Office 2003 / 2007<br/>\r\n\r\n3.Each team will be allotted 10 minutes for presentation and 5 minutes for question/answer.<br/><br/>\r\n\r\nAny extension in the allotted time may result in the loss of points.\r\nThe participants should bring their presentation on CD/USB drive along with 2 hard copies for the judges.\r\n', '1. The papers should be original. Plagiarism will lead to disqualification.<br/>\r\n2. If any of the rules given above are breached by any participant, the judging panel reserves the rights to disqualify the participant team.<br/>\r\n3. The organizers reserve the right to change the rules of the event at any time and will do their best to update the contestants of the same. However it is the responsibility of the participants to keep themselves updated.\r\n', '', ''),
('PHYgure IT', 'physics', 'Demonstrations involving a single or multiple principles of physics will be shown. There will be a quiz based on the experiments displayed. ', '', 'The quiz is a written type event.\r\nThe quiz will take place within the demonstration area.\r\nThe duration of the quiz is 90 minutes.\r\nThere will be subjective and objective type questions. There is no negative marking.\r\nEach question carries weightage depending on the difficulty level.\r\nSome questions will be * marked indicating that they are tie breaker questions\r\nPartial marking will be decided by the organizing team.In case of any conflict, the decision of the organizing team will be final.\r\n', '', ''),
('The Tux Quiz', 'computers', 'Think you are good at Ubuntu ? Worked with fedora for a bit and you think you know about linux ? Is most of your time spent at the root shell ? We bring you a quiz for linux lovers. Come, show your mettle. Fight with fellow hackers and reach the top level of the linux hierarchy. The Tux Quiz-by the tuxers, for the tuxers.', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
