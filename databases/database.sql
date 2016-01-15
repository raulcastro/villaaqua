CREATE DATABASE villaaquadb;

CREATE USER 'villaaquadb'@'localhost' IDENTIFIED BY 'barbiE787!';

GRANT ALL PRIVILEGES ON 'villaaquadb'.* TO 'villaaquadb'@'localhost' WITH GRANT OPTION;


ALTER TABLE reviews ADD COLUMN `index` int(1) DEFAULT 0;
ALTER TABLE reviews ADD COLUMN `section` int(1) DEFAULT 0; 