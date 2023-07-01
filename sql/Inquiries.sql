DROP TABLE IF EXISTS `inquiry`;
CREATE TABLE `inquiry` (
  `inquiry_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `time_stamp` timestamp NOT NULL 
  DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`inquiry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `inquiry` (`name`, `contact`, `email`, `message`, `time_stamp`) VALUES
('Mike Oxmaul', '123456', 'mike@gmail.com', 'Is there free parking?', '2021-12-18 13:24:37'),
('Chelsea Manning', '123456', 'chelsea@outlook.com', 'Can I bring my pet dog?', '2021-12-18 13:22:52'),
('Peter King', '123456', 'peter@outlook.com', 'Can I bring my 100k red wine?', '2021-12-18 13:24:29'),
('Jackie Welles', '123456', 'jackie@gmail.com', 'Does the pizza contain gluten?', '2021-12-18 13:28:50');
