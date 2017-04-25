CREATE TABLE fiche__action
(
  id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  id_auteur INT(11) NOT NULL,
  id_editeur INT(11),
  date DATE NOT NULL,
  contenu TEXT NOT NULL,
  id_pj INT(11),
  type VARCHAR(255) NOT NULL
);
CREATE TABLE fiche__entreprise
(
  id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nom VARCHAR(535) NOT NULL,
  mail VARCHAR(535),
  adresse TEXT,
  telephone VARCHAR(255)
);
CREATE UNIQUE INDEX nom ON fiche__entreprise (nom);
CREATE TABLE fiche__piecejointe
(
  id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  lien_pj TEXT NOT NULL
);
CREATE TABLE users
(
  id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  password TEXT NOT NULL,
  id_entreprise INT(11),
  statut INT(11)
);
CREATE UNIQUE INDEX username ON users (username);

INSERT INTO nora.users (username, password, id_entreprise, statut) VALUES ('Test', '098f6bcd4621d373cade4e832627b4f6', null, 0);