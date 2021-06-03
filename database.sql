CREATE TABLE `employees` (
    `id` int not null AUTO_INCREMENT,
    `firstName` varchar(25) not null,
    `lastName` varchar(25) not null,
    `email` varchar(30) not null,
    `phone` varchar(15),
    `gender` char(8),
    `country` varchar(25) not null,
    `city` varchar(25) not null,
    `position` varchar(20) not null,
    PRIMARY KEY (`id`)
)
