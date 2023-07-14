CREATE TABLE `employee`(
emp_id int(10) NOT NULL AUTO_INCREMENT,
name varchar(50),
dob date,
salary int(20),
mobile text,
email varchar(50),
dep_id int(10),
PRIMARY KEY(emp_id));

CREATE TABLE `department`(
dep_id int(15) NOT NULL REFERENCES employee(dep_id ),
dept varchar(50) NOT NULL,
position varchar(50)
);

CREATE TABLE `user` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
  	`email` varchar(50) NOT NULL,
  	`password` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

