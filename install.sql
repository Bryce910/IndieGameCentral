CREATE TABLE user
(
	id int,
	firstName varchar(255),
	lastName varchar(255),
	address varchar(255),
	email varchar(255),
	password varchar(255),
	role varchar(15),
	banned  enum('Y', 'N')
	
);