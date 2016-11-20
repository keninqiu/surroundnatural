CREATE TABLE product (
     id int(10) NOT NULL AUTO_INCREMENT,
     name varchar(100) NOT NULL UNIQUE,
     name_zh varchar(100) NOT NULL default "",
     description varchar(1000) NOT NULL default "",
     description_zh varchar(1000) NOT NULL default "",
     keyword varchar(1000) NOT NULL default "",
     price int(10) NOT NULL default 0,
     price_zh int(10) NOT NULL default 0,
     stock int(10) NOT NULL default 0,
     image1 varchar(100) NULL,
     image2 varchar(100) NULL,
     image3 varchar(100) NULL,
     image4 varchar(100) NULL,
     image5 varchar(100) NULL,
     PRIMARY KEY (id)
);
ALTER TABLE product CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;