DROP DATABASE IF EXISTS tiedot;
CREATE DATABASE tiedot DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE tiedot;
DROP TABLE IF EXISTS kirjautumisTunnus;
CREATE TABLE kirjautumisTunnus (
  id int(10) auto_increment,
  tunnus text NOT NULL, 
  salasana text NOT NULL,
  PRIMARY KEY  (id)
);

INSERT INTO sarjataulukko (joukkue,ottelut,voitot,tasapelit,tappiot,pisteet) 
VALUES  ('HJK', 'ottelut', '23', '7', '3', 'pisteet'),
('KuPS', 'ottelut', '16','8','9', 'pisteet'),
('Ilves', 'ottelut', '15','11','7', 'pisteet'),
('FC Lahti', 'ottelut', '12','13','8', 'pisteet');