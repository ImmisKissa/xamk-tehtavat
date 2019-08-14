DROP DATABASE IF EXISTS rekisTiedot;
CREATE DATABASE tiedot DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE tiedot;
DROP TABLE IF EXISTS rekisterointiTunnus;
CREATE TABLE rekisterointiTunnus (
  id int(10) auto_increment,
  tunnus text NOT NULL, 
  salasana text NOT NULL,
  salasanaUudelleen text NOT NULL,
  PRIMARY KEY  (id)
);

INSERT INTO rekisterointiTunnus (tunnus, salasana, salasanaUudelleen)