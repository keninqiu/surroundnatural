CREATE TABLE product_image (
     id int(10) NOT NULL AUTO_INCREMENT,
     product_id int(10) NOT NULL default 0,
     image varchar(300) NOT NULL default "",
     type varchar(10) NOT NULL default "",
     PRIMARY KEY (id)
);