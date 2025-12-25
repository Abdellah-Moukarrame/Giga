create table
  joueur (
    idJ int primary key auto_increment,
    pseudoname varchar(80),
    role_tactique varchar(80),
    salaire_contractuel float,
    id_Equipe int,
    foreign key (id_Equipe) references equipe (idE)
  )
create table
  club (
    idC int primary key auto_increment,
    nomC varchar(80),
    ville_residence varchar(80),
    date_creation datetime default current_timestamp
  )
create table
  equipe (
    idE int primary key auto_increment,
    categorie varchar(80),
    nbr_joueres int,
    id_club int,
    foreign key (id_club) references club (idC)
  )
create table
  tournoi (
    idT int primary key auto_increment,
    titre varchar(80),
    montant_global float,
    format varchar(80),
    date_tournoi datetime default current_timestamp
  )
create table
  sponsor (
    idS int primary key auto_increment,
    nom_s varchar(80),
    montant_sponsor float
  )
create table
  matches (
    idM int primary key auto_increment,
    score_A int,
    score_b int,
    GagnantID int,
    foreign key (GagnantID) references equipe (idE)
  )
-- alter table
--   matches
-- add
--   equipe_A int,
--   equipe_B int,
-- add
--   constraint fk_equipe_A foreign key (equipe_A) references equipe (idE) on delete cascade,
-- add
--   constraint fk_equipe_B foreign key (equipe_B) references equipe (idE) on delete cascade
alter table
  matches
add
  equipe_A int,
add
  equipe_B int,
add
  constraint fk_equipe_A foreign key (equipe_A) references equipe (idE) on delete  cascade,
add
  constraint fk_equipe_B foreign key (equipe_B) references equipe (idE) on delete  cascade;


alter table 
matches 
add 
tournoi_id int ,
add 
constraint fk_tournoi_id foreign key (tournoi_id) references tournoi (idT) on delete cascade ;


