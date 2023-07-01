DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `date_of_birth` DATE NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  CONSTRAINT accountPK
  PRIMARY KEY (`account_id`),
  UNIQUE(`username`, `customer_id`),
  CONSTRAINT customerFK
  FOREIGN KEY (`customer_id`)
  REFERENCES `customer` (`customer_id`) 
  ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Customers

INSERT INTO `customer` (`first_name`, `last_name`, `date_of_birth`, `contact`, `email`) 
VALUES ('Scarlett', 'Johansson', '1984-11-22', '(123) 1234 - 0001', 'scarlet.johansson@email.com');

INSERT INTO `customer` (`first_name`, `last_name`, `date_of_birth`, `contact`, `email`) 
VALUES ('Chris', 'Hemsworth', '1983-08-11', '(123) 1234 - 0002', 'chris.hemsworth@email.com');

INSERT INTO `customer` (`first_name`, `last_name`, `date_of_birth`, `contact`, `email`) 
VALUES ('Chris', 'Evans', '1981-06-13', '(123) 1234 - 0003', 'chris.evans@email.com');

INSERT INTO `customer` (`first_name`, `last_name`, `date_of_birth`, `contact`, `email`) 
VALUES ('Robert', 'Downey Jr.', '1965-04-04', '(123) 1234 - 0004', 'robert.downeyjr@email.com');

INSERT INTO `customer` (`first_name`, `last_name`, `date_of_birth`, `contact`, `email`) 
VALUES ('Jeremy', 'Renner', '1971-01-07', '(123) 1234 - 0005', 'jeremy.renner@email.com');

INSERT INTO `customer` (`first_name`, `last_name`, `date_of_birth`, `contact`, `email`) 
VALUES ('Mark', 'Ruffalo', '1967-11-22', '(123) 1234 - 0006', 'mark.ruffalo@email.com');

INSERT INTO `customer` (`first_name`, `last_name`, `date_of_birth`, `contact`, `email`) 
VALUES ('Paul', 'Rudd', '1969-04-06', '(123) 1234 - 0007', 'paul.rudd@email.com');

INSERT INTO `customer` (`first_name`, `last_name`, `date_of_birth`, `contact`, `email`) 
VALUES ('Brie', 'Larson', '1989-10-01', '(123) 1234 - 0008', 'brie.larson@email.com');

INSERT INTO `customer` (`first_name`, `last_name`, `date_of_birth`, `contact`, `email`) 
VALUES ('Tom', 'Holland', '1996-06-01', '(123) 1234 - 0009', 'tom.holland@email.com');

INSERT INTO `customer` (`first_name`, `last_name`, `date_of_birth`, `contact`, `email`) 
VALUES ('Josh', 'Brolin', '1968-02-12', '(123) 1234 - 0010', 'josh.brolin@email.com');


-- Accounts

INSERT INTO `account` (`username`, `password`, `customer_id`) 
VALUES ('Scarlet123', '6d9c3b37dec52a4800e776fe81920e1a', 1);

INSERT INTO `account` (`username`, `password`, `customer_id`) 
VALUES ('Hemsworth123', '69b446f136f2038694f49300b206914b', 2);

INSERT INTO `account` (`username`, `password`, `customer_id`) 
VALUES ('Evans123', 'af3e6da324f119779a461b5755ce003a', 3);

INSERT INTO `account` (`username`, `password`, `customer_id`) 
VALUES ('IronMan123', 'e7912418fc564c27db327abc47fc9349', 4);

INSERT INTO `account` (`username`, `password`, `customer_id`) 
VALUES ('Jeremy123', '347cc23e2de6c1aa515ef2cd0f17dc58', 5);

INSERT INTO `account` (`username`, `password`, `customer_id`) 
VALUES ('Mark123', '2969d9d77778c63a24a3ca171734aa2b', 6);

INSERT INTO `account` (`username`, `password`, `customer_id`) 
VALUES ('Paul123', 'ca813a7d9dae92526c40b43042b49267', 7);

INSERT INTO `account` (`username`, `password`, `customer_id`) 
VALUES ('Brie123', 'f7ab7c2ef5b5b8d1edc2c6c222382e5c', 8);

INSERT INTO `account` (`username`, `password`, `customer_id`) 
VALUES ('Tom123', '53e12d6bcde242410af5bc7b634b774a', 9);

INSERT INTO `account` (`username`, `password`, `customer_id`) 
VALUES ('Josh123', '15cc9adbd6f9f5cb71a746556bd37aaf', 10);
