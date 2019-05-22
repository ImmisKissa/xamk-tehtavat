--
-- Create schema demokanta
--
DROP DATABASE IF EXISTS demokanta;
CREATE DATABASE demokanta DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE demokanta;
DROP TABLE IF EXISTS ihmiset;
CREATE TABLE ihmiset (
  id int(10) auto_increment,
  etunimi text NOT NULL, 
  sukunimi text NOT NULL,
  kotikunta text NOT NULL,
  puhelin text NOT NULL,
  syntymavuosi int(10) unsigned NOT NULL, 
  PRIMARY KEY  (id)
);
--
-- Dumping data for table `ihmiset`
--
INSERT INTO ihmiset (etunimi,sukunimi,kotikunta,puhelin,syntymavuosi) 
VALUES  ('Aku','Ankka','Ankkalinna','313-31333',1934),
('Mikki','Hiiri','Ankkalinna','040-412222',1928),
('Karhu','Kopla','Linna','176178',1950),
('Mummo','Ankka','Hanhivaara','1122',1855),
('Hannu','Hanhi','Hanhivaara','131313',1948),
('Iines','Ankka','Ankkalinna','0055-555444',1940);

 