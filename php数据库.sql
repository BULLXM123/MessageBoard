create database my1;
use my1;
SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS tbl_ms;
create table tbl_ms(
username varchar(25) not null,
password varchar(25) not null,
primary key (username)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS tbl_ms1;
create table tbl_ms1(
id int(11) not null AUTO_INCREMENT,
user varchar(25) not null,
person varchar(25) DEFAULT NULL,
title varchar(225) DEFAULT NULL,
author varchar(25) DEFAULT NULL,
liuyan varchar(225) DEFAULT NULL,
time time DEFAULT NULL,
primary key (id),
KEY user (user),
CONSTRAINT tbl_ms1_ibfk_1 FOREIGN KEY (user) REFERENCES tbl_ms (username) on delete cascade on update cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
