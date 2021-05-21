create database dbregistration;
use dbregistration;

create table users(
id integer auto_increment,
firstname varchar(30),
lastname varchar(30),
email varchar(40) not null,
Password varchar(40) not null,
repeatp varchar(40) not null,
primary key(id));

select * from users;