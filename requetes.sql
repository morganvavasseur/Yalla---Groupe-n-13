#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Redacteur
#------------------------------------------------------------

CREATE TABLE Redacteur(
        id_redacteur       int (11) Auto_increment  NOT NULL ,
        login_redacteur    Varchar (25) NOT NULL ,
        password_redacteur Varchar (50) NOT NULL ,
        photo_redacteur    Varchar (50) ,
        nom_redacteur      Varchar (25) NOT NULL ,
        prenom_redacteur   Varchar (25) NOT NULL ,
        email_redacteur    Varchar (25) NOT NULL ,
        id_fonction        Int NOT NULL ,
        PRIMARY KEY (id_redacteur )
)ENGINE=InnoDB;

INSERT INTO `Redacteur` (`id_redacteur`, `login_redacteur`, `password_redacteur`, `photo_redacteur`, `nom_redacteur`, `prenom_redacteur`, `email_redacteur`, `id_fonction`) VALUES
(1, 'MLMellionec', '00D111EBD401A2D71C3F50272FBB5602', 'img/equipe/MLMellionec.jpg', 'Lemeland-mellionec', 'Mary', 'mary.lemeland-mellionec@yala-enfants.com', 1),
(2, 'SFanucchi', 'A8B54D183B1A290171D46363BEF48C9E', 'img/equipe/SFanucchi.jpg', 'Fanucchi', 'Sophie', 'sophie.fanucchi@yala-enfants.com', 2),
(3, 'MPele', 'F8EC31672BC0292D05BC70B105BCAB8E', 'img/equipe/MPele.jpg', 'Pele', 'Mélina', 'melina.pele@yala-enfants.com', 3),
(4, 'PLemeland', 'F4EB4C51E1F97AB7EC5B3DDB8445A28B', 'img/equipe/PLemeland.jpg', 'Lemeland', 'Pierre', 'pierre.lemeland@yala-enfants.com', 1);

#------------------------------------------------------------
# Table: Article
#------------------------------------------------------------

CREATE TABLE Article(
        id_article         Int NOT NULL ,
        titre_article      Varchar (100) NOT NULL ,
        slug_article       Varchar (100) NOT NULL ,
        date_article       Datetime NOT NULL ,
        fichier_article    Varchar (255) ,
        image_article      Varchar (255) ,
        paragraphe_article Text NOT NULL ,
        version_article    Int NOT NULL ,
        id_redacteur       Int NOT NULL ,
        id_categorie       Int NOT NULL ,
        id_langue          Int NOT NULL ,
        id_publication     Int NOT NULL ,
        PRIMARY KEY (id_article )
)ENGINE=InnoDB;

INSERT INTO `Article` (`id_article`, `titre_article`,`slug_article`, `date_article`, `fichier_article`, `image_article`, `paragraphe_article`, `version_article`, `id_redacteur`, `id_categorie`, `id_langue`, `id_publication` ) VALUES
(1, "Titre d'un article", 'titre-d-un-article', '2017-06-15 00:00:00', '', '', 'Ceci est un paragraphe', 1, 1, 1, 1, 1),
(2, "Titre d'un article 2", 'titre-d-un-article-2', '2017-06-15 15:30:00', '', '', 'Ceci est un paragraphe 1', 1, 2, 2, 2, 2);

#------------------------------------------------------------
# Table: Categorie
#------------------------------------------------------------

CREATE TABLE Categorie(
        id_categorie  Int NOT NULL ,
        nom_categorie Varchar (50) NOT NULL ,
        PRIMARY KEY (id_categorie )
)ENGINE=InnoDB;

INSERT INTO `Categorie` (`id_categorie`, `nom_categorie`) VALUES
(1, 'News'),
(2, 'Actions');

#------------------------------------------------------------
# Table: Langue
#------------------------------------------------------------

CREATE TABLE Langue(
        id_langue  Int NOT NULL ,
        nom_langue Varchar (50) NOT NULL ,
        PRIMARY KEY (id_langue )
)ENGINE=InnoDB;

INSERT INTO `Langue` (`id_langue`, `nom_langue`) VALUES
(1, 'français'),
(2, 'anglais'),
(3, 'arabe');

#------------------------------------------------------------
# Table: Publication
#------------------------------------------------------------

CREATE TABLE Publication(
        id_publication  Int NOT NULL ,
        nom_publication Varchar (50) NOT NULL ,
        PRIMARY KEY (id_publication )
)ENGINE=InnoDB;


INSERT INTO `Publication` (`id_publication`, `nom_publication`) VALUES
(1, 'Publier'),
(2, 'Ne pas publier');

#------------------------------------------------------------
# Table: Fonction
#------------------------------------------------------------

CREATE TABLE Fonction(
        id_fonction  Int NOT NULL ,
        nom_fonction Varchar (50) NOT NULL ,
        PRIMARY KEY (id_fonction )
)ENGINE=InnoDB;

INSERT INTO `Fonction` (`id_fonction`, `nom_fonction`) VALUES
(1, 'président'),
(2, 'trésorier'),
(3, 'community manager');

ALTER TABLE Redacteur ADD CONSTRAINT FK_Redacteur_id_fonction FOREIGN KEY (id_fonction) REFERENCES Fonction(id_fonction);
ALTER TABLE Article ADD CONSTRAINT FK_Article_id_redacteur FOREIGN KEY (id_redacteur) REFERENCES Redacteur(id_redacteur);
ALTER TABLE Article ADD CONSTRAINT FK_Article_id_categorie FOREIGN KEY (id_categorie) REFERENCES Categorie(id_categorie);
ALTER TABLE Article ADD CONSTRAINT FK_Article_id_langue FOREIGN KEY (id_langue) REFERENCES Langue(id_langue);
ALTER TABLE Article ADD CONSTRAINT FK_Article_id_publication FOREIGN KEY (id_publication) REFERENCES Publication(id_publication);




-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'remy', 'remy', 'remy@remy.remy', 'remy@remy.remy', 1, 'rn2u50evilck8kwc04kwok8ckcowwwg', '$2y$13$rn2u50evilck8kwc04kwoetz9KvwZpLLdR8yIKlLwGwaTXZ0be70i', '2017-06-27 09:34:41', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`);

--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
