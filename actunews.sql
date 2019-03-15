-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 14 Mars 2019 à 09:58
-- Version du serveur :  5.7.14
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `actunews`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `auteur_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `auteur_id`, `categorie_id`, `titre`, `contenu`, `image`, `date_creation`) VALUES
(5, 1, 1, 'Grand débat national : 70% des Français pensent qu\'il ne résoudra pas la crise', '<p>Les Français ne semblent pas convaincus par les efforts déployés par l\'exécutif dans le cadre du <a href="/politique/grand-debat-national/" target="_blank">grand débat national</a>. Sept Français sur dix pensent que le grand débat ne permettra pas de sortir de la crise que traverse le pays, selon un sondage Elabe réalisé auprès de 1&nbsp;005 personnes et diffusé mercredi 13 mars.</p><p>Le scepticisme sur l\'efficacité de la consultation gagne à deux jours de la fin de la consultation, avec 63% (+4) des personnes interrogées pour lesquelles Emmanuel Macron et son gouvernement ne tiendront pas compte des contributions des Français. Pour près d\'une sur deux toutefois (45%), le débat <em>"permettra d\'améliorer la participation des citoyens aux décisions"</em>, selon cette enquête pour BFMTV.</p><h2 class="subheader">L\'approbation du mouvement des "gilets jaunes" reste majoritaire&nbsp;</h2><p>Pour ce qui est de l\'image d\'Emmanuel Macron, elle s\'est <em>"améliorée"</em> pour seulement 18% des Français interrogés suite au grand débat, elle s\'est <em>"dégradée"</em> pour 27% et n\'a pas changé pour une majorité d\'entre eux (55%).</p><p>Par ailleurs, l\'approbation de la mobilisation des "gilets jaunes" reste majoritaire avec 61% des Français qui expriment leur soutien ou leur sympathie pour le mouvement, contre 28% qui y sont opposés et 11% indifférents.</p>', '17192871.jpg', '2019-03-14 09:39:08'),
(6, 1, 1, 'Saint-Denis : un mineur présenté à un juge pour enfants, après une intrusion dans un lycée', '<p>L\'un des deux mineurs interpellés mardi 12 mars dans l\'enceinte du lycée Paul-Éluard de Saint-Denis, âgé de 15&nbsp;ans, sera présenté jeudi à un juge pour enfants pour violences volontaires et intrusion dans un établissement scolaire, a appris franceinfo de source judiciaire. L\'autre jeune a été libéré en l\'absence d\'élément établissant sa participation, a ajouté cette même source.</p><p>Mardi matin, vers 9h30,&nbsp;une bande d\'une quinzaine de jeunes armés de marteaux et de battes de baseball se sont introduits dans ce lycée pour s\'en prendre à un élève. Au total, trois élèves de l\'établissement ont été légèrement blessés.</p><h2 class="subheader">Une "expédition punitive"</h2><p>Les intrus sont entrés dans le lycée dans le cadre d\'une "expédition punitive" sur fond de tensions entre plusieurs cités de la ville, a indiqué à franceinfo une source proche de l\'enquête. Ils voulaient se venger d\'un élève en particulier et ont réussi à lui porter quelques coups. Deux élèves qui se sont interposés ont également été légèrement blessés, selon le rectorat de Créteil.</p><p>L\'intervention de la police et des équipes mobiles de sécurité a permis d\'interrompre rapidement cette scène d\'une grande violence. Deux jeunes ont été interpellés. Selon les premiers éléments de l\'enquête, une histoire de vol de portable et de vengeance aurait motivé cette intrusion.</p><h2 class="subheader">Des mesures de sécurité accrues</h2><p>Le recteur de Créteil s\'est rendu sur place dès mardi après-midi pour soutenir les élèves et les personnels de l\'établissement. Une cellule d\'écoute a été mise en place. Plusieurs mesures pour renforcer la sécurité des établissements scolaires du secteur ont été prises, a indiqué le rectorat de Créteil. Parmi elles, des rondes de police plus fréquentes et une surveillance accrue autour du lycée Paul-Éluard. Un diagnostic de sûreté va également être mené par les services de la préfecture de Seine-Saint-Denis. De plus, un conseil local de sécurité et de prévention de la délinquance spécifiquement consacré aux établissements scolaires du secteur aura lieu dans les prochains jours.</p><p>Quant aux cours, ils ont repris normalement mercredi. Les enseignants avaient fait valoir leur droit de retrait&nbsp;quelques heures après l\'intrusion.</p>', '17189975.jpg', '2019-03-14 09:46:08'),
(7, 2, 1, '"Le parti d\'Emmanuel Macron au Parlement européen" a-t-il été financé par des multinationales ?', '<p>Marine Le Pen dénonce le poids des lobbys à Bruxelles. "Vous savez ce qu\'ils font ?" a interrogé la présidente du Rassemblement national, jeudi 7 mars, sur RTL. "Ils financent les partis politiques européens et ils financent l\'ALDE, le parti d\'Emmanuel Macron au Parlement européen." "Le parti politique européen ALDE que monsieur Macron rejoint au sein du Parlement européen est financé par Bayer-Monsanto", le fabricant du très contesté glyphosate, a-t-elle insisté un peu plus tard dans l\'interview, mettant en avant de possibles conflits d\'intérêts.</p>\r\n\r\n<p>Cette affirmation a suscité de nombreux commentaires sur les réseaux sociaux, mais aussi dans le live de franceinfo. "Certains partis de l\'UE seraient financés par Monsanto ?", nous a ainsi interrogé l\'un de nos lecteurs. Effectivement, plusieurs multinationales ont subventionné – en toute légalité – l\'Alliance des démocrates et des libéraux pour l\'Europe (ALDE), un parti avec lequel La République en marche a un temps envisagé une "coalition" en vue des élections européennes. Mais il ne s\'agit pas du seul mouvement politique concerné. On vous explique toute l\'affaire.</p>\r\n\r\n<p>Qui a financé l\'ALDE et à quelle hauteur ?\r\nDans les déclarations de Marine Le Pen, il faut bien différencier l\'ALDE, un parti politique auparavant nommé Parti européen des démocrates, libéraux et réformateurs (ELDR), et le groupe du même nom que le mouvement forme, au Parlement européen, avec le Parti démocrate européen (PDE), depuis 2004. "Le parti ALDE, et non pas notre groupe au Parlement européen ou un homme politique en particulier, a des accords d’entreprise avec plusieurs acteurs industriels européens, et ce depuis plusieurs années", a confirmé l\'un de ses porte-paroles à Libération.</p>\r\n\r\n<p>Depuis 2014, les financements des partis politiques européens sont publiés chaque année par l\'Autorité pour les partis politiques européens et les fondations politiques européennes. Comme l\'a constaté Le Monde en épluchant ce fichier, l\'ALDE a bien reçu 122 000 euros de la part de huit multinationales et lobbys. Sept dons, qualifiés de "parrainage", dépassent les 12 000 euros : 15 000 euros versés par Google, 13 000 euros par le cabinet de conseil et d\'audit Deloitte, 15 000 euros d\'Uber, 18 000 euros de la société suisse spécialisée dans la chimie et l\'agroalimentaire Syngenta, 18 000 euros de la plateforme Yelp, 18 000 euros du géant de la chimie et de la pharmaceutique Bayer et 18 000 euros du lobby de l\'industrie agroalimentaire Food drink.</p>', '17181975.jpg', '2019-03-14 09:49:09'),
(8, 2, 2, '109 féminicides en 2017 : les violences conjugales toujours aussi nombreuses en France', '<p>Les violences conjugales n\'ont pas diminué en 2017 par rapport à 2016, selon l\'étude sur les violences au sein du couple que l\'observatoire national de la délinquance et des réponses pénales (ONDRP) dévoile jeudi 14 mars. En 2017, l\'ONDRP a recensé 109 féminicides. Un chiffre identique à celui de 2016 et à peine inférieur à celui de 2015, où 115 femmes avaient été tuées.</p>\r\n\r\n<p>Le nombre de féminicides dans le couple est donc en train de stagner, alors qu\'il avait pourtant considérablement chuté entre 2007 et 2014 en passant de 166 à 118. L\'immense majorité de ces chiffres sur les violences conjugales concernent des femmes victimes de leur conjoint.</p>\r\n\r\n<h3>Violences à domicile</h3>\r\n\r\n<p>L\'étude de l\'ONDRP donne également des détails sur ces meurtres ou assassinats. Dans plus de huit affaires sur dix, le crime se déroule dans un domicile (celui du couple, de la victime ou bien de l\'auteur). Les mobiles sont majoritairement une dispute (32%) ou une séparation (26%). À noter également que dans la moitié des affaires, les victimes avaient déjà subi des violences de la part de leur conjoint.</p>\r\n\r\n<p>Les chiffres des violences faites aux femmes qui n\'entraînent pas la mort sont également stables, avec 98 500 faits recensés en 2017 (+1,5%). Il s\'agit majoritairement de violences physiques (des viols dans 2% des cas) mais aussi des menaces de mort (11%) et du harcèlement. La dernière partie de l\'étude de l\'ONDRP relève une meilleure prise en charge des victimes. L\'observatoire a recensé une baisse du nombre de mains courantes déposées pour "différends entre époux et concubins" (-20% entre 2013 et 2017).</p>', '17191815.jpg', '2019-03-14 09:52:14'),
(9, 2, 4, 'Les Français et la lecture en 2019 : cinq choses à retenir', '<p>Le livre papier est-il mort ? Les écrans ont-ils eu la peau de la lecture ? L\'étude CNL IPSOS, réalisée du 11 au 22 janvier auprès de 1000 personnes de 15 ans et plus et dévoilée ce mercredi 12 mars par le Centre National du Livre (CNL) nous dit bien autre chose. On vous livre un petit résumé.</p>\r\n\r\n<p>"Même s’ils ont le sentiment de lire de moins en moins et de manquer de temps pour la lecture, les Français sont toujours largement lecteurs. Ils sont même plus nombreux à se déclarer spontanément lecteurs", précise l\'étude. A noter que plus on est mis en présence des livres dans l\'enfance, plus on a de chances de devenir ce que l\'on appelle un "grand lecteur", c\'est à dire quelqu\'un qui lit plus de 20 livres par an. "Il faut continuer à lutter contre les disparités dans l\'accès aux livres", souligne Vincent Monadé.</p>\r\n\r\n<p>Les Français déclarent qu\'ils liraient encore plus s\'ils avaient plus de temps. S\'ils disposaient d\'une journée de plus dans la semaine à consacrer à leurs loisirs, la lecture est en effet une des trois activités qu\'ils choisiraient avec les sorties entre amis ou une sortie culturelle. "C\'est tout l\'enjeu du livre dans les années à venir", souligne Vincent Monadé "en lançant des grandes campagnes pour mettre en avant la lecture plaisir". </p>\r\n\r\n<p>88 % des Français se déclarent lecteurs, mais ceux qui lisent beaucoup sont toujours les femmes, et 32% et les plus de 65 ans. Plus de neuf Français sur dix (92%) ont lu au moins un livre, quel que soit son genre littéraire, au cours des 12 derniers mois. Les Français lisent en moyenne 17 livres par an et la moitié d\'entre eux déclarent tous les jours.</p>', 'francaislecture.jpg', '2019-03-14 09:56:22'),
(10, 2, 4, 'Joseph Ponthus remporte le grand prix RTL/Lire', '<p>Joseph Ponthus remporte le 14 mars le grand prix RTL/Lire pour son premier roman "A la ligne" (La Table Ronde), récit à la première personne d\'une vie à l\'usine en intérim. Les cadences, le corps en souffrance, l\'odeur, l\'épuisement, mais aussi "la paradoxale beauté" de l\'usine. Le jeune romancier déploie son texte comme un long ruban, comme une ligne de chaîne qui ne s\'arrête jamais. Une claque.</p>\r\n\r\n<p>Le prix sera remis à Joseph Ponthus le 14 mars dans la soirée à l\'occasion de l\'inauguration du Salon Livre Paris qui ouvre ses portes au public vendredi 15 mars.</p>\r\n\r\n<p>L\'histoire : faute de trouver du travail, le narrateur s\'est inscrit dans une agence d\'intérim. Il est venu s\'installer en Bretagne avec son épouse, et elle "en a marre de le voir traîner dans le canapé en attente d\'une embauche dans son secteur". On lui propose une première mission dans l\'agroalimentaire, "l\'agro comme ils disent". Il commence par une usine bretonne de production, de transformation et de cuisson de poissons et crevettes. Embauche à 6 heures. Le narrateur très vite, se met à écrire.</p>', 'josephponthus.jpg', '2019-03-14 09:57:46');

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id` int(11) NOT NULL,
  `prenom` varchar(80) NOT NULL,
  `nom` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `auteur`
--

INSERT INTO `auteur` (`id`, `prenom`, `nom`, `email`, `password`) VALUES
(1, 'Florence', 'BOURDILLAT', 'f.bourdillat@wf3.fr', 'test'),
(2, 'Hugo', 'LIEGEARD', 'hugo@wf3.fr', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'Politique'),
(2, 'Economie'),
(3, 'Sports'),
(4, 'Culture'),
(5, 'Sciences');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auteur_id` (`auteur_id`),
  ADD KEY `categorie_id` (`categorie_id`);

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_auteur` FOREIGN KEY (`auteur_id`) REFERENCES `auteur` (`id`),
  ADD CONSTRAINT `fk_article_categorie` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
