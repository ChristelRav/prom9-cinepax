---SELECT * FROM  TABLE

SELECT * FROM  ticket;
SELECT * FROM  facturation;
SELECT * FROM  projectionFilm;
SELECT * FROM  tarifTicket;
SELECT * FROM  film;
SELECT * FROM  salle;
SELECT * FROM  type;

SELECT * FROM  achatProduit;
SELECT * FROM  produit;



---DELETE FROM 

DELETE FROM  ticket;
DELETE FROM  facturation;
DELETE FROM  projectionFilm;
DELETE FROM  tarifTicket;
DELETE FROM  film;
DELETE FROM  salle;
DELETE FROM  type;

DELETE FROM  achatProduit;
DELETE FROM  produit;



---DROP TABLE


DROP TABLE achatProduit;
DROP TABLE produit;


DROP TABLE ticket;
DROP TABLE facturation;
DROP TABLE projectionFilm;
DROP TABLE tarifTicket;
DROP TABLE film;
DROP TABLE salle;
DROP TABLE type;

---REQUEST

SELECT f.idfilm,f.synopsis,f.duree,f.nom, pf.dateheureprojection
FROM projectionFilm pf
JOIN film f ON pf.idFilm = f.idFilm
WHERE pf.dateHeureProjection > CURRENT_TIMESTAMP
ORDER BY pf.dateheureprojection DESC;


SELECT *
FROM projectionFilm pf
WHERE idfilm = 4 AND dateheureprojection = '2024-06-01 09:30:00';


SELECT pf.idfilm,f.idtype,pf.idprojectionfilm,pf.idsalle,f.nom,f.duree,t.categorie,s.salle,pf.dateheureprojection
FROM projectionFilm pf
JOIN film f ON pf.idfilm = f.idfilm
JOIN salle s ON s.idsalle = pf.idsalle
JOIN type t ON f.idtype = t.idtype
WHERE pf.idfilm = 4 AND pf.dateheureprojection='2024-06-01 12:00:00';