insert into type (categorie)
values
('comedie'),
('action'),
('anime'),
('romance');


insert into film (idType,nom,duree,synopsis )
values 
(1,'Raymond 2','00:45:00','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2,'Fast and Furious 10','00:45:00','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3,'kung fu panda 4','01:15:00','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(1,'Space Jam','01:00:00','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(4,'Love sweet','00:55:00','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');


insert into salle (salle,maxPlace)
values
('salle 1',100),
('salle 5',25),
('Amphi C',50);


insert into produit (produit,prix)
values 
('popcorn',4500),
('barbe a papa',3000),
('lunette 3D',3500),
('prospectus',2000),
('bubble tea',6000);

--adulte 2 & enfant 1
insert into tarifTicket (age,tarif,heureD,dateTarif )
values 
(1,15000,'11:59:00','2024-01-01'),
(1,15000,'12:00:00','2024-01-01'),
(2,15000,'11:59:00','2024-01-01'),
(2,30000,'12:00:00','2024-01-01');


insert into projectionFilm  (idFilm,idSalle,dateHeureProjection)
values 
(1,1,'2024-06-01 08:00:00'),
(4,2,'2024-06-01 09:30:00'),
(1,2,'2024-06-01 14:00:00'),
(5,2,'2024-06-01 16:30:00'),
(4,1,'2024-06-01 15:30:00'),
(2,1,'2024-06-01 10:30:00'),
(4,2,'2024-06-01 12:00:00'),
(3,1,'2024-06-01 14:00:00');

insert into facturation (idProjectionFilm, nbrA, nbrE, dateFacturation) 
values 
(1, 2, 1, '2024-01-01'),
(2, 1, 0, '2024-01-01'),
(3, 2, 1, '2024-01-01');



insert into ticket (idFacturation, idTarifTicket, idProjectionFilm, rangee, numPlace, prix, dateHeureTicket) 
values 
(1, 1, 1, 'A', 5, 15000, '2024-01-01 07:45:00'),
(1, 2, 1, 'A', 6, 15000, '2024-01-01 07:45:00'),
(1, 3, 1, 'B', 7, 30000, '2024-01-01 07:45:00'),
(2, 1, 2, 'C', 3, 15000, '2024-01-01 09:15:00'),
(3, 2, 3, 'A', 2, 15000, '2024-01-01 13:45:00'),
(3, 1, 3, 'A', 3, 15000, '2024-01-01 13:45:00');



insert into achatProduit (idTicket, idProduit, quantite, dateAchat) 
values 
(1, 1, 1, '2024-01-01'),
(2, 2, 1, '2024-01-01'),
(3, 3, 2, '2024-01-01'),
(4, 4, 1, '2024-01-01'),
(5, 5, 2, '2024-01-01'),
(6, 1, 1, '2024-01-01');



