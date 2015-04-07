
CREATE DATABASE votesystem;

use votesystem;

CREATE TABLE admin( 
	id int(5) not null unsigned auto_increment primary key ,
	name varchar(20) not null ,
	password varchar(20) not null
);

CREATE TABLE candidate( 
	id int(5) not null unsigned auto_increment primary key,
	name varchar(20) not null,
	info text not null,
	pic varchar(100) not null,
	date datetime not null,
	vote bigint(20) not null
);