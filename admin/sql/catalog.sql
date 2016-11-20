SET collation_connection = 'utf8_general_ci';
ALTER DATABASE surroundnatural CHARACTER SET utf8 COLLATE utf8_general_ci;
CREATE TABLE catalog (
     id int(10) NOT NULL AUTO_INCREMENT,
     parent_id int(10) NOT NULL default 0,
     name varchar(50) NOT NULL UNIQUE,
     name_zh varchar(50) NOT NULL UNIQUE,
     sequence int(10) NOT NULL default 0,
     PRIMARY KEY (id)
);
ALTER TABLE catalog CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;