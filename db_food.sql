create database db_food;
use db_food;

create table users(
	id int not null auto_increment,
	name varchar(200),
	username varchar(200),
	email varchar(200),
	password varchar(200),
	primary key (id)
);