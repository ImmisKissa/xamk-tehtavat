DROP DATABASE IF EXISTS tiedot;
CREATE DATABASE tiedot DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE tiedot;
DROP TABLE IF EXISTS tiedot;
CREATE TABLE tiedot (
  id int(10) auto_increment,
  tunnus text NOT NULL, 
  salasana text NOT NULL,
  salasana_uudelleen text NOT NULL,
  PRIMARY KEY  (id)
);

INSERT INTO tiedot (tunnus,salasana,salasana_uudelleen)
VALUES  ('tunnus', 'salasana', 'salasana_uudelleen');