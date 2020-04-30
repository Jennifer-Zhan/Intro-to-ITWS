-- create the tables for our movies

CREATE TABLE `movies` (
 `movieid` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `title` varchar(100) NOT NULL,
 `year` char(4) DEFAULT NULL,
 PRIMARY KEY (`movieid`)
);


-- insert data into the tables

INSERT INTO movies VALUES
  (1, "Elizabeth", "1998"),
  (2, "Elling", "2001"),
  (3, "Oh Brother Where Art Thou?", "2000"),
  (4, "The Lord of the Rings: The Fellowship of the Ring", "2001"),
  (5, "Up in the Air", "2009"),
  (6, "Kingsman: The Secret Service", "2015"),
  (7, "Tomb Raider", 2018);

-- create the tables for our actors

CREATE TABLE `actors` (
 `actorid` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `first_names` varchar(30) NOT NULL,
 `last_name` varchar(30) NOT NULL,
 `dob` char(10) DEFAULT NULL,
 PRIMARY KEY (`actorid`)
);

-- insert data into the tables

INSERT INTO actors VALUES
  (1, "Alicia", "Vikander", "1988-10-03"),
  (2, "Taron", "Egerton", "1989-11-10"),
  (3, "Vera", "Farmiga", "1973-08-06"),
  (4, "Per", "Ellefsen", "1954-02-14"),
  (5, "Viggo", "Mortensen", "1958-10-20"),
  (6, "Colin", "Firth", "1960-09-10");


CREATE TABLE `movie_actors` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `movieid` int(10) unsigned NOT NULL,
 `actorid` int(10) unsigned NOT NULL,
 PRIMARY KEY (`id`)
);

INSERT INTO movie_actors VALUES
  (1, 6, 2),
  (2, 2, 4),
  (3, 4, 5),
  (4, 5, 3),
  (5, 7, 1),
  (6, 6, 6);

