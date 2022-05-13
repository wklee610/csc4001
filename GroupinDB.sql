DROP DATABASE IF EXISTS  `Groupin`;				#delete database if has name of the Groupin
CREATE DATABASE IF NOT EXISTS  `Groupin`;			#create database of Groupin
USE `Groupin`;							#use database of Groupin 

DROP TABLE if EXISTS `user`;

CREATE TABLE `user` (
	`userID` VARCHAR(9) NOT NULL PRIMARY KEY,
	`username` VARCHAR(20) NOT NULL,
	`userpassword` VARCHAR(20) NOT NULL,
	`credit` INT NOT NULL,
	`wechat_num` VARCHAR(30) NOT NULL,
	`phone_num` INT NOT NULL,
	`school_email` VARCHAR(26) NOT NULL,
	`second_email` VARCHAR(30),
	`reg_dt` DATETIME NOT NULL
);



DROP TABLE if EXISTS `group`;

CREATE TABLE `group` (
	`groupID` VARCHAR(10) NOT NULL PRIMARY KEY,
	`groupname` VARCHAR(20) NOT NULL,
	`classID` VARCHAR(10),
	`leaderID` CHAR(9) NOT NULL,
	`reserved_quota` INT NOT NULL,
	`groupdescription` TEXT
);                                                                          


DROP TABLE if EXISTS `content`;

CREATE TABLE `content` (
	`leaderID` VARCHAR(9) NOT NULL PRIMARY KEY,
	`description` TEXT,
	`groupID` INT NOT NULL,
	`classID` VARCHAR(10),
	`log_text` TEXT
);
	
	
DROP TABLE if EXISTS `credit`;

CREATE TABLE `credit` (
	`userID` VARCHAR(9) NOT NULL PRIMARY KEY,
	`username` VARCHAR(20) NOT NULL,
	`credit` INT NOT NULL,
	`groupID` INT NOT NULL
);

DROP TABLE if EXISTS `tojoin`;

CREATE TABLE `tojoin`(
	`groupID` VARCHAR(10) NOT NULL,
	`userID` VARCHAR(9) NOT NULL
	
);
