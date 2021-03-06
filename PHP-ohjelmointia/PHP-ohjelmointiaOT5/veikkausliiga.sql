DROP DATABASE IF EXISTS veikkausliiga;
CREATE DATABASE veikkausliiga DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE veikkausliiga;
DROP TABLE IF EXISTS sarjataulukko;
CREATE TABLE sarjataulukko (
  id int(10) auto_increment,
  joukkue text NOT NULL, 
  ottelut text NOT NULL,
  voitot text NOT NULL,
  tasapelit text NOT NULL,
  tappiot text NOT NULL,
  pisteet text NOT NULL
  PRIMARY KEY  (id)
);

INSERT INTO sarjataulukko (joukkue,ottelut,voitot,tasapelit,tappiot,pisteet) 
VALUES  ('HJK', 'ottelut', '23', '7', '3', 'pisteet'),
('KuPS', 'ottelut', '16','8','9', 'pisteet'),
('Ilves', 'ottelut', '15','11','7', 'pisteet'),
('FC Lahti', 'ottelut', '12','13','8', 'pisteet');