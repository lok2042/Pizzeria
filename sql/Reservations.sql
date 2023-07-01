CREATE TABLE `reservation` ( 
    `reservation_id` INT NOT NULL AUTO_INCREMENT , 
    `date` DATE NOT NULL , 
    `time` TIME NOT NULL , 
    `pax` INT NOT NULL , 
    `message` TEXT NOT NULL , 
    `timestamp` TIMESTAMP NOT NULL ,
    `customer_id` INT DEFAULT NULL , 
    CONSTRAINT reservationPK
    PRIMARY KEY (`reservation_id`) ,
    CONSTRAINT resCustomerFK
    FOREIGN KEY (`customer_id`) 
    REFERENCES `customer`(`customer_id`) 
    ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `reservation` (`date`, `time`, `pax`, `message`, `customer_id`) VALUES
('2022-01-01', '20:00:00', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.', 4),
('2022-01-01', '20:00:00', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.', 5),
('2022-01-02', '20:30:00', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.', 4),
('2022-01-02', '20:30:00', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.', 5),
('2022-01-03', '10:30:00', 4, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.', 4),
('2022-01-03', '10:30:00', 4, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.', 5),
('2022-01-04', '19:30:00', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.', 4),
('2022-01-04', '19:30:00', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.', 5),
('2022-01-05', '19:30:00', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.', 4),
('2022-01-05', '19:30:00', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.', 5);