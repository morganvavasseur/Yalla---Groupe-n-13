-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 29 juin 2017 à 10:10
-- Version du serveur :  10.1.22-MariaDB
-- Version de PHP :  7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test_yala2`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `titre_article` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_article` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_article` datetime NOT NULL,
  `fichier_article` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_article` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraphe_article` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `version_article` int(11) NOT NULL,
  `id_redacteur` int(11) DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `id_langue` int(11) DEFAULT NULL,
  `id_publication` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titre_article`, `slug_article`, `date_article`, `fichier_article`, `image_article`, `paragraphe_article`, `version_article`, `id_redacteur`, `id_categorie`, `id_langue`, `id_publication`) VALUES
(1, 'Fest-noz solidaire le 29 octobre à Poullaouen', 'fest-noz-solidaire-le-29-octobre-a-poullaouen', '2017-06-13 00:00:00', '', 'image/cp-fest-noz-1.jpg', '<p>Yalla! Pour les Enfants vous convie le samedi 29 octobre à un fest-noz de levée de fonds dont les entiers bénéfices reviendront à son école d’Aley, située au Liban, à quelques kilomètres de Beyrouth.</p><br><br><p>Vous pourrez y apprécier les talents des musiciens et chanteurs, Marie-Hélène Baron, Laurent Bigot, Yann Boulanger, Jean-Daniel Bourdonnay, Pierre Crépillon, Annie Ebrel, Ifig Flatrès, Marie-Laurence Fustec, Riwal Fustec, Yann Goasdoué, Maurice Guillou, Jean-Paul Guyomarc’h, Jean Herrou, Brigitte Le Corre, Yann Le Corre, Bruno Le Manach, Marie-Noëlle Le Mapihan, Pierre-Yves Le Panse, François Perennes, Iffig Poho, Christian Rivoalen, qui s’engagent bénévolement pour soutenir Yalla! Pour les Enfants.</p><br><br><p>Cette fête traditionnelle bretonne où règnent la bonne humeur, la convivialité, la gaieté fait écho au dialogue interculturel mené par Yalla ! Pour les Enfants qui entend réunir au travers de projets culturels communs la communauté d’accueil libanaise et la communauté syrienne en exil pour construire une paix durable. Avec la participation active de : Maryam Samaan, Cyrille Flejou, AFPS Centre Bretagne, la mairie de Poullaouen, Le Télégramme, Ouest-France, Radio Montagne Noire, Radio Kreiz Breizh, Radio Bleu Breizh Izel</p>', 1, 1, 1, 1, 1),
(2, 'Pétition « Ban Ki-moon : STOPPONS LA GUERRE EN SYRIE »', 'petition-ban-ki-moon-stoppons-la-guerre-en-syrie', '2017-06-14 15:30:00', '', 'image/guerre-1.jpg', '<p>Nous relayons l’appel citoyen adressé au Secrétaire Général des Nations Unies Ban Ki-moon. <a href="#">Pour vous aussi signer cette pétition, cliquez ici.</a></p><br><br><p>« Nous citoyens du monde, demandons aujourd’hui, l’arrêt immédiat des bombardements en Syrie et la protection des zones civiles, ainsi que l’aide d’urgence aux populations durement touchées par cette guerre génocidaire.</p><br><p>Parce qu’il n’est plus humainement possible pour nous, d’assister en spectateurs impuissants au massacre de cette population. Nous nous unissons ce jour pour hurler notre désaccord et notre volonté de voir cesser de telles atrocités.</p><br><p>Nous demandons à Monsieur Ban Ki-moon, Secrétaire Général de l’ONU, de porter notre message auprès des représentants des nations du monde, afin de faire stopper immédiatement les bombardement en Syrie. »</p>', 1, 2, 2, 2, 2),
(3, 'Les prochains évènements de Souria Houria', 'les-prochains-evenements-de-la-souria-houria', '2017-06-15 15:30:00', '', 'image/souria-houria.png', '<p><a href="#">Découvrez ici</a>les nombreuses rencontres proposées par l’association Souria Houria dans les semaines qui viennent.</p>', 1, 2, 1, 2, 2),
(4, 'Yalla ! Pour les Enfants au marché des céramistes de Quimper les 5 et 6 septembre', 'yalla-pour-les-enfants-au-marche-des-ceramistes-de-quimper-les-5-et-6-septembre', '2017-06-15 15:30:00', '', 'image/marche.jpg', '<p>Des oeuvres de plusieurs céramistes ont été vendues au profit de Yalla ! Pour les Enfants à Quimper, les 5 et 6 septembre derniers. Un grand merci à notre adhérent Jérôme Carrière qui nous a proposé cette activité, ainsi qu’aux artistes participants.</p><br><br><p>Nota Bene pour nos amis bretons : Yalla ! sera présent au Fest-noz de Poullaouen le 29 octobre prochain !</p>', 1, 2, 1, 2, 2),
(5, 'Fest-noz solidaire le 29 octobre à Poullaouen', 'fest-noz-solidaire-le-29-octobre-a-poullaouen', '2017-06-13 00:00:00', '', 'image/cp-fest-noz-1.jpg', '<p>Yalla! Pour les Enfants vous convie le samedi 29 octobre à un fest-noz de levée de fonds dont les entiers bénéfices reviendront à son école d’Aley, située au Liban, à quelques kilomètres de Beyrouth.</p><br><br><p>Vous pourrez y apprécier les talents des musiciens et chanteurs, Marie-Hélène Baron, Laurent Bigot, Yann Boulanger, Jean-Daniel Bourdonnay, Pierre Crépillon, Annie Ebrel, Ifig Flatrès, Marie-Laurence Fustec, Riwal Fustec, Yann Goasdoué, Maurice Guillou, Jean-Paul Guyomarc’h, Jean Herrou, Brigitte Le Corre, Yann Le Corre, Bruno Le Manach, Marie-Noëlle Le Mapihan, Pierre-Yves Le Panse, François Perennes, Iffig Poho, Christian Rivoalen, qui s’engagent bénévolement pour soutenir Yalla! Pour les Enfants.</p><br><br><p>Cette fête traditionnelle bretonne où règnent la bonne humeur, la convivialité, la gaieté fait écho au dialogue interculturel mené par Yalla ! Pour les Enfants qui entend réunir au travers de projets culturels communs la communauté d’accueil libanaise et la communauté syrienne en exil pour construire une paix durable. Avec la participation active de : Maryam Samaan, Cyrille Flejou, AFPS Centre Bretagne, la mairie de Poullaouen, Le Télégramme, Ouest-France, Radio Montagne Noire, Radio Kreiz Breizh, Radio Bleu Breizh Izel</p>', 1, 1, 1, 1, 1),
(6, 'Pétition « Ban Ki-moon : STOPPONS LA GUERRE EN SYRIE »', 'petition-ban-ki-moon-stoppons-la-guerre-en-syrie', '2017-06-14 15:30:00', '', 'image/guerre-1.jpg', '<p>Nous relayons l’appel citoyen adressé au Secrétaire Général des Nations Unies Ban Ki-moon. <a href="#">Pour vous aussi signer cette pétition, cliquez ici.</a></p><br><br><p>« Nous citoyens du monde, demandons aujourd’hui, l’arrêt immédiat des bombardements en Syrie et la protection des zones civiles, ainsi que l’aide d’urgence aux populations durement touchées par cette guerre génocidaire.</p><br><p>Parce qu’il n’est plus humainement possible pour nous, d’assister en spectateurs impuissants au massacre de cette population. Nous nous unissons ce jour pour hurler notre désaccord et notre volonté de voir cesser de telles atrocités.</p><br><p>Nous demandons à Monsieur Ban Ki-moon, Secrétaire Général de l’ONU, de porter notre message auprès des représentants des nations du monde, afin de faire stopper immédiatement les bombardement en Syrie. »</p>', 1, 2, 2, 2, 2),
(7, 'Les prochains évènements de Souria Houria', 'les-prochains-evenements-de-la-souria-houria', '2017-06-15 15:30:00', '', 'image/souria-houria.png', '<p><a href="#">Découvrez ici</a>les nombreuses rencontres proposées par l’association Souria Houria dans les semaines qui viennent.</p>', 1, 2, 1, 2, 2),
(8, 'Yalla ! Pour les Enfants au marché des céramistes de Quimper les 5 et 6 septembre', 'yalla-pour-les-enfants-au-marche-des-ceramistes-de-quimper-les-5-et-6-septembre', '2017-06-15 15:30:00', '', 'image/marche.jpg', '<p>Des oeuvres de plusieurs céramistes ont été vendues au profit de Yalla ! Pour les Enfants à Quimper, les 5 et 6 septembre derniers. Un grand merci à notre adhérent Jérôme Carrière qui nous a proposé cette activité, ainsi qu’aux artistes participants.</p><br><br><p>Nota Bene pour nos amis bretons : Yalla ! sera présent au Fest-noz de Poullaouen le 29 octobre prochain !</p>', 1, 2, 1, 2, 2);
-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`) VALUES
(1, 'Évenements'),
(2, 'Infos');



-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `id_fonction` int(11) NOT NULL,
  `nom_fonction` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fonction`
--

INSERT INTO `fonction` (`id_fonction`, `nom_fonction`) VALUES
(1, 'Président'),
(2, 'Vice-président'),
(3, 'Secrétaire'),
(4, 'Trésorier');


-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'jihjhi', 'jihjhi', 'f@f.f', 'f@f.f', 1, NULL, '$2y$13$/n5oXraw4Yq.RVBwIiC8cuP5NKLj7FwZHWJxpluQ0IQBmhTp4mUT.', '2017-06-28 22:44:03', NULL, NULL, 'a:0:{}');

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

CREATE TABLE `langue` (
  `id_langue` int(11) NOT NULL,
  `nom_langue` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `langue`
--

INSERT INTO `langue` (`id_langue`, `nom_langue`) VALUES
(1, 'français'),
(2, 'anglais'),
(3, 'arabe');

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `id_publication` int(11) NOT NULL,
  `nom_publication` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id_publication`, `nom_publication`) VALUES
(1, 'Publier'),
(2, 'Ne pas publier');

-- --------------------------------------------------------

--
-- Structure de la table `redacteur`
--

CREATE TABLE `redacteur` (
  `id_redacteur` int(11) NOT NULL,
  `login_redacteur` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_redacteur` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_redacteur` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_redacteur` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_redacteur` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_redacteur` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_fonction` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `redacteur`
--

INSERT INTO `redacteur` (`id_redacteur`, `login_redacteur`, `password_redacteur`, `photo_redacteur`, `nom_redacteur`, `prenom_redacteur`, `email_redacteur`, `id_fonction`) VALUES
(1, 'MLMellionec', '00D111EBD401A2D71C3F50272FBB5602', 'img/equipe/MLMellionec.jpg', 'Lemeland-mellionec', 'Mary', 'mary.lemeland-mellionec@y', 1),
(2, 'SFanucchi', 'A8B54D183B1A290171D46363BEF48C9E', 'img/equipe/SFanucchi.jpg', 'Fanucchi', 'Sophie', 'sophie.fanucchi@yala-enfa', 2),
(3, 'MPele', 'F8EC31672BC0292D05BC70B105BCAB8E', 'img/equipe/MPele.jpg', 'Pele', 'Mélina', 'melina.pele@yala-enfants.', 3),
(4, 'PLemeland', 'F4EB4C51E1F97AB7EC5B3DDB8445A28B', 'img/equipe/PLemeland.jpg', 'Lemeland', 'Pierre', 'pierre.lemeland@yala-enfa', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `FK_Article_id_redacteur` (`id_redacteur`),
  ADD KEY `FK_Article_id_categorie` (`id_categorie`),
  ADD KEY `FK_Article_id_langue` (`id_langue`),
  ADD KEY `FK_Article_id_publication` (`id_publication`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`id_fonction`);

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- Index pour la table `langue`
--
ALTER TABLE `langue`
  ADD PRIMARY KEY (`id_langue`);

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id_publication`);

--
-- Index pour la table `redacteur`
--
ALTER TABLE `redacteur`
  ADD PRIMARY KEY (`id_redacteur`),
  ADD KEY `FK_Redacteur_id_fonction` (`id_fonction`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id_fonction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `langue`
--
ALTER TABLE `langue`
  MODIFY `id_langue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
  MODIFY `id_publication` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `redacteur`
--
ALTER TABLE `redacteur`
  MODIFY `id_redacteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_Article_id_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`),
  ADD CONSTRAINT `FK_Article_id_langue` FOREIGN KEY (`id_langue`) REFERENCES `langue` (`id_langue`),
  ADD CONSTRAINT `FK_Article_id_publication` FOREIGN KEY (`id_publication`) REFERENCES `publication` (`id_publication`),
  ADD CONSTRAINT `FK_Article_id_redacteur` FOREIGN KEY (`id_redacteur`) REFERENCES `redacteur` (`id_redacteur`);

--
-- Contraintes pour la table `redacteur`
--
ALTER TABLE `redacteur`
  ADD CONSTRAINT `FK_Redacteur_id_fonction` FOREIGN KEY (`id_fonction`) REFERENCES `fonction` (`id_fonction`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
