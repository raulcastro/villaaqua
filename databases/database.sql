CREATE DATABASE villaaquadb;

CREATE USER 'villaaquadb'@'localhost' IDENTIFIED BY 'barbiE787!';

GRANT ALL PRIVILEGES ON 'villaaquadb'.* TO 'villaaquadb'@'localhost' WITH GRANT OPTION;


ALTER TABLE reviews ADD COLUMN `onIndex` int(1) DEFAULT 0;
ALTER TABLE reviews ADD COLUMN `onSection` int(1) DEFAULT 0; 

CREATE TABLE `app_info` (
  `title` varchar(512) DEFAULT NULL,
  `site_name` varchar(512) DEFAULT NULL,
  `url` varchar(512) DEFAULT NULL,
  `content` varchar(1024) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `keywords` varchar(512) DEFAULT NULL,
  `creator` varchar(512) DEFAULT NULL,
  `creator_url` varchar(512) DEFAULT NULL,
  `twitter` varchar(256) DEFAULT NULL,
  `facebook` varchar(256) DEFAULT NULL,
  `googleplus` varchar(256) DEFAULT NULL,
  `pinterest` varchar(256) DEFAULT NULL,
  `linkedin` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `lang` varchar(2) DEFAULT NULL,
  `youtube` varchar(256) DEFAULT NULL,
  `instagram` varchar(256) DEFAULT NULL,
  `location` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `gallery` (
  `picture_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_name` varchar(512) DEFAULT NULL,
  `picture` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`picture_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2976 DEFAULT CHARSET=latin1;