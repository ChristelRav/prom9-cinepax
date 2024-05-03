-- - Billet
--      - montant 
-- - seance || projection  
-- - Produit
-- - salle
-- - film
-- tranche horaire (jerena hoe mila existence propre ve aloha ?)
-- - places

--diminuer le nombre d'appel || xhr
--site pour mobile ou ordi



CREATE USER cinepaxU WITH PASSWORD 'prom9';
CREATE DATABASE cinepax;
GRANT ALL PRIVILEGES ON DATABASE cinepax TO cinepaxU;

psql -U cinepaxu -d cinepax


    CREATE TABLE type (
        idType SERIAL PRIMARY KEY,
        categorie VARCHAR(100)
    );

    CREATE TABLE film (
        idFilm SERIAL PRIMARY KEY,
        idType INT REFERENCES type(idType),
        nom VARCHAR(255),
        duree TIME DEFAULT '00:45:00',
        synopsis TEXT DEFAULT 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
    );

    CREATE TABLE salle (
        idSalle SERIAL PRIMARY KEY,
        salle VARCHAR(155),
        maxPlace INT
    );

    CREATE TABLE produit (
        idProduit SERIAL PRIMARY KEY,
        produit VARCHAR(255),
        prix DOUBLE PRECISION
    );

    CREATE TABLE tarifTicket (
        idTarifTicket SERIAL PRIMARY KEY,
        age INT,
        tarif DOUBLE PRECISION,
        heureD TIME,
        dateTarif DATE
    );

    CREATE TABLE projectionFilm (
        idProjectionFilm SERIAL PRIMARY KEY,
        idFilm INT REFERENCES film(idFilm),
        idSalle INT REFERENCES salle(idSalle),
        dateHeureProjection TIMESTAMP
    );

    CREATE TABLE facturation (
        idFacturation SERIAL PRIMARY KEY,
        idProjectionFilm INT REFERENCES projectionFilm(idProjectionFilm),
        nbrA INT,
        nbrE INT,
        dateFacturation DATE
    );

    CREATE TABLE ticket (
        idTicket SERIAL PRIMARY KEY,
        idFacturation INT REFERENCES facturation(idFacturation),
        idTarifTicket INT REFERENCES tarifTicket(idTarifTicket),
        idProjectionFilm INT REFERENCES projectionFilm(idProjectionFilm),
        rangee VARCHAR(2),
        numPlace INT  CHECK (numPlace <= 10),
        prix DOUBLE PRECISION,
        dateHeureTicket DATE
    );

    CREATE TABLE achatProduit (
        idAchatProduit SERIAL PRIMARY KEY,
        idTicket INT REFERENCES ticket(idTicket),
        idProduit INT REFERENCES produit(idProduit),
        quantite INT,
        dateAchat DATE
    );