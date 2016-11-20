CREATE TABLE user (
     id int(10) NOT NULL AUTO_INCREMENT,
     username varchar(50) NOT NULL UNIQUE,
     password varchar(50) NOT NULL,
     authKey varchar(50) NOT NULL,
     accessToken varchar(50) NOT NULL,
     PRIMARY KEY (id)
);
ALTER TABLE user CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;