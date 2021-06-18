CREATE TABLE `employees` (
    `id` int not null AUTO_INCREMENT,
    `firstName` varchar(25) not null,
    `lastName` varchar(25) not null,
    `email` varchar(30) not null,
    `phone` varchar(15),
    `gender` char(1),
    `country` varchar(25) not null,
    `city` varchar(25) not null,
    `position` varchar(20) not null,
    PRIMARY KEY (`id`)
)

insert into employees (firstName, lastName, email, phone, gender, country, city, position) values ('Ilysa', 'Cheng', 'icheng0@sourceforge.net', '551-299-6042', 'F', 'Indonesia', 'Pakel', 'Electrician');
insert into employees (firstName, lastName, email, phone, gender, country, city, position) values ('Lancelot', 'Lewins', 'llewins1@geocities.com', '441-210-3786', 'M', 'Indonesia', 'Manganitu', 'Construction Manager');
insert into employees (firstName, lastName, email, phone, gender, country, city, position) values ('Logan', 'Godrich', 'lgodrich2@quantcast.com', '595-960-5327', 'M', 'China', 'Gaoping', 'Construction Worker');
insert into employees (firstName, lastName, email, phone, gender, country, city, position) values ('Joseito', 'Chittem', 'jchittem3@nydailynews.com', '631-696-5591', 'M', 'Brazil', 'Surubim', 'Subcontractor');
insert into employees (firstName, lastName, email, phone, gender, country, city, position) values ('Donavon', 'Puttrell', 'dputtrell4@slashdot.org', '953-683-3522', 'M', 'Indonesia', 'Cimanggu', 'Supervisor');
insert into employees (firstName, lastName, email, phone, gender, country, city, position) values ('Scotty', 'Le Marchant', 'slemarchant5@epa.gov', '432-530-6245', 'M', 'Philippines', 'Santa Cruz', 'Construction Manager');
insert into employees (firstName, lastName, email, phone, gender, country, city, position) values ('Nanci', 'Batchley', 'nbatchley6@list-manage.com', '137-763-5897', 'F', 'Portugal', 'Bairro', 'Engineer');
insert into employees (firstName, lastName, email, phone, gender, country, city, position) values ('Kasey', 'Abramov', 'kabramov7@accuweather.com', '462-927-3632', 'F', 'Russia', 'Neftegorsk', 'Construction Foreman');
insert into employees (firstName, lastName, email, phone, gender, country, city, position) values ('Ella', 'Boyles', 'eboyles8@hhs.gov', '617-464-0597', 'F', 'Czech Republic', 'Drásov', 'Construction Foreman');
insert into employees (firstName, lastName, email, phone, gender, country, city, position) values ('Dionne', 'MacBey', 'dmacbey9@com.com', '472-194-1432', 'F', 'Indonesia', 'Awayan', 'Construction Worker');
