CREATE TABLE catalog_product (
     id int(10) NOT NULL AUTO_INCREMENT,
     catalog_id int(10) NOT NULL default 0,
     product_id int(10) NOT NULL default 0,
     PRIMARY KEY (id)
);