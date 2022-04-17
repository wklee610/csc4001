USE Groupin;

DROP TABLE if EXISTS user;

CREATE TABLE `user` (
	userID CHAR(9) NOT NULL PRIMARY KEY,
	username VARCHAR(20) NOT NULL,
	`PASSWORD` VARCHAR(20) NOT NULL,
	`credit` INT NOT NULL,
	wechat_num VARCHAR(30) NOT NULL,
	phone_num INT NOT NULL,
	school_email VARCHAR(26) NOT NULL,
	second_email VARCHAR(30),
	reg_dt DATETIME NOT NULL
);



DROP TABLE if EXISTS `group`;

CREATE TABLE `group` (
	groupID INT NOT NULL PRIMARY KEY,
	username VARCHAR(20) NOT NULL,
	classID VARCHAR(10),
	leaderID CHAR(9) NOT NULL,
	reserved_quota INT NOT NULL,
	description TEXT
);                                                                          


DROP TABLE if EXISTS `content`;

CREATE TABLE `content` (
	leaderID CHAR(9) NOT NULL PRIMARY KEY,
	description TEXT,
	groupID INT NOT NULL,
	classID VARCHAR(10),
	log_text TEXT
);
	
	
DROP TABLE if EXISTS `credit`;

CREATE TABLE `credit` (
	userID CHAR(9) NOT NULL PRIMARY KEY,
	username VARCHAR(20) NOT NULL,
	`credit` INT NOT NULL,
	groupID INT NOT NULL
);

