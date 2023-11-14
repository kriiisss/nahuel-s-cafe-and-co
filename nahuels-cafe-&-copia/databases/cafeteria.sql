create database nahuesCafeAndCo;
use nahuesCafeAndCo;

create table users(
    id int not null AUTO_INCREMENT,
    name varchar(50),
    surname varchar(50),
    dni int(11),
    date_of_birth date,
    phone_number int (20),
    email varchar(100),
    username varchar(100),
    password varchar(50), 
    first_failed_login timestamp,
    failed_login_count int (11),
    primary key (id)
);

create table admins(
    id int not null AUTO_INCREMENT,
    name varchar(50),
    surname varchar(50),
    dni int(11),
    date_of_birth date,
    phone_number int (20),
    email varchar(100),
    username varchar(100),
    password varchar(50), 
    first_failed_login timestamp,
    failed_login_count int (11),
    primary key (id)
);

create table products(
    id int not null AUTO_INCREMENT,
    name varchar(100),
    description varchar(200),
    price float (11),
    primary key (id)
);

insert into users (name, surname, dni, date_of_birth, phone_number, email, username, password) values ("Christian", "Forte", 46290790, 2004-12-30, 1131782406, "christianforte453@gmail.com", "christianforte", "1234");
insert into admins (name, surname, dni, date_of_birth, phone_number, email, username, password) values ("Christian", "Forte", 46290790, 2004-12-30, 1131782406, "christianforte453@gmail.com", "adminkri", "1234");