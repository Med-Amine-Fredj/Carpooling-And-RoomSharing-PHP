-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 20 mai 2020 à 00:35
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `idchat` int(30) NOT NULL,
  `libellechat` varchar(255) NOT NULL,
  `idUser` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`idchat`, `libellechat`, `idUser`) VALUES
(18, 'test', 14),
(20, 'azrzgazegfze', 14),
(21, 'azrzegfazez', 14),
(22, 'vggg', 14),
(23, 'test1', 14),
(24, 'tesd', 14),
(25, 'fff', 14),
(27, 'cv', 14),
(30, 'gdf', 14),
(31, 'ff', 14),
(32, 'v', 14),
(33, 'try', 14),
(34, 'kl', 14),
(35, 'm', 14),
(36, 'zze', 14),
(37, 'hj', 14),
(38, 'df', 14),
(39, 'ez', 14),
(40, 'ez', 14),
(41, 'e', 14),
(42, 'fzgf', 14),
(43, 'fzgf', 14),
(44, 'fzgf', 14),
(45, 'g', 14),
(46, 'g', 14),
(47, 't', 14),
(48, 'g', 14),
(49, 'dddddddd', 14),
(50, 'gg', 14),
(51, 'ttttttttttttttttttttttttttttttt', 14),
(52, 'uuuuuuuuuuuuuuuuuuuuuuuuuuuu', 14),
(53, 'ddddddddd', 14),
(54, 'wwwwwwwwwwwwwww', 14),
(55, 'hayya nahkiw', 3),
(56, 'test', 3);

-- --------------------------------------------------------

--
-- Structure de la table `chatuser`
--

CREATE TABLE `chatuser` (
  `idchat` int(30) NOT NULL,
  `iduser` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chatuser`
--

INSERT INTO `chatuser` (`idchat`, `iduser`) VALUES
(16, 1),
(16, 2),
(16, 3),
(16, 4),
(17, 3),
(17, 4),
(17, 5),
(17, 6),
(18, 13),
(18, 14),
(19, 3),
(19, 4),
(19, 5),
(19, 7),
(21, 4),
(21, 6),
(21, 11),
(22, 13),
(22, 14),
(23, 11),
(23, 12),
(23, 13),
(23, 14),
(24, 13),
(24, 14),
(25, 12),
(25, 13),
(25, 14),
(26, 3),
(26, 4),
(26, 13),
(26, 14),
(27, 12),
(27, 13),
(27, 14),
(28, 3),
(28, 13),
(28, 14),
(29, 3),
(29, 13),
(29, 14),
(30, 11),
(30, 13),
(30, 14),
(31, 3),
(31, 11),
(31, 14),
(32, 12),
(32, 13),
(32, 14),
(33, 3),
(33, 4),
(33, 12),
(33, 13),
(33, 14),
(34, 12),
(34, 14),
(35, 12),
(35, 13),
(35, 14),
(36, 10),
(36, 11),
(36, 12),
(37, 4),
(37, 5),
(38, 6),
(38, 9),
(38, 10),
(38, 11),
(39, 6),
(39, 8),
(39, 10),
(39, 14),
(40, 6),
(40, 8),
(40, 10),
(40, 14),
(41, 12),
(41, 14),
(42, 12),
(42, 13),
(42, 14),
(43, 12),
(43, 13),
(43, 14),
(44, 12),
(44, 13),
(44, 14),
(45, 6),
(45, 8),
(46, 6),
(46, 8),
(47, 10),
(47, 11),
(47, 12),
(47, 13),
(47, 14),
(48, 11),
(48, 12),
(48, 13),
(48, 14),
(49, 9),
(49, 11),
(49, 13),
(49, 14),
(50, 9),
(50, 10),
(50, 12),
(50, 13),
(50, 14),
(51, 5),
(51, 7),
(51, 9),
(51, 11),
(51, 12),
(51, 13),
(52, 10),
(52, 11),
(52, 12),
(52, 13),
(52, 14),
(53, 3),
(53, 5),
(53, 6),
(53, 9),
(53, 11),
(53, 12),
(53, 13),
(53, 14),
(54, 3),
(54, 4),
(54, 5),
(54, 6),
(54, 7),
(54, 8),
(54, 9),
(54, 10),
(54, 11),
(54, 12),
(54, 13),
(54, 14),
(55, 3),
(55, 4),
(55, 10),
(55, 11),
(55, 12),
(55, 13),
(55, 14),
(56, 3),
(56, 4),
(56, 7),
(56, 9),
(56, 10),
(56, 12),
(56, 13),
(56, 14);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `idcom` int(11) NOT NULL,
  `idpost` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `cmt` varchar(255) NOT NULL,
  `datecmt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`idcom`, `idpost`, `id`, `cmt`, `datecmt`) VALUES
(52, 68, 14, 'test 68 ', '2020-05-17'),
(53, 68, 14, '00', '2020-05-18'),
(54, 69, 14, '55', '2020-05-18'),
(55, 70, 14, 'yes', '2020-05-18'),
(56, 70, 14, 'fff', '2020-05-18'),
(57, 70, 14, 'fff', '2020-05-18'),
(59, 70, 14, 'fsgshdf fsdgsgjnq fzg  fzgftbhjdsdhkl bfslzgh zfaze hjgsdfk zfzehf zrkzf zefiyaegf aizfj aehf yazbcvagzuif haeifra', '2020-05-18'),
(61, 70, 3, 'dqsdqs', '2020-05-18'),
(62, 70, 3, 'fsdffa', '2020-05-18'),
(63, 65, 3, '56', '2020-05-18'),
(64, 70, 14, 'houssem', '2020-05-18'),
(65, 67, 5, 'ggsdgsdgs', '2020-05-18'),
(66, 87, 3, 'merci ', '2020-05-19'),
(67, 91, 3, 'wow 2pac', '2020-05-19'),
(68, 84, 3, 'test', '2020-05-19');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `idimage` int(11) NOT NULL,
  `idpost` int(11) NOT NULL,
  `chemin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`idimage`, `idpost`, `chemin`) VALUES
(74, 89, 'assembly_by_artofjokinen_dbvthzi-pre.jpg'),
(75, 90, '541264.jpg'),
(76, 91, '2pac-fond-d-ecran-2732x768-30049_73.jpg'),
(77, 92, '541264.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `like1`
--

CREATE TABLE `like1` (
  `idlike` int(11) NOT NULL,
  `idpost` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `like1`
--

INSERT INTO `like1` (`idlike`, `idpost`, `id`) VALUES
(1, 68, 14),
(2, 70, 14),
(3, 70, 14),
(4, 70, 14),
(5, 70, 14),
(6, 68, 14),
(7, 70, 14),
(8, 70, 14),
(9, 70, 5),
(10, 68, 5),
(11, 65, 5),
(12, 70, 5),
(13, 70, 5),
(14, 67, 5),
(15, 65, 14),
(16, 68, 14),
(17, 85, 3),
(18, 89, 3),
(19, 91, 3),
(20, 84, 3),
(21, 84, 3),
(22, 92, 3);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `idmessage` int(20) NOT NULL,
  `iduser` int(30) NOT NULL,
  `idchat` int(30) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`idmessage`, `iduser`, `idchat`, `text`, `date`) VALUES
(7, 1, 16, ' dsdqsd', '2020-04-06'),
(8, 14, 18, ' fsdgfsdgsdg', '2020-05-18'),
(9, 14, 18, ' gehdfhdf', '2020-05-18'),
(10, 14, 18, ' dsgsgsdfgsdg', '2020-05-18'),
(11, 14, 18, ' sgfsdghjdhd\r\n', '2020-05-18'),
(12, 14, 18, ' 15\r\n', '2020-05-18'),
(13, 14, 18, ' 15\r\n', '2020-05-18'),
(14, 14, 18, ' ededfdf', '2020-05-19'),
(15, 14, 22, ' bbbbbbbbbbbbb', '2020-05-19'),
(16, 14, 18, ' gfbvsgsd', '2020-05-19'),
(17, 14, 18, ' gfbvsgsd', '2020-05-19'),
(18, 14, 18, ' sdvgsdvfqd', '2020-05-19'),
(19, 14, 18, ' gqdfgsqFS', '2020-05-19'),
(20, 14, 18, ' ffffffffffffffff', '2020-05-19'),
(21, 14, 18, ' sqsdfqsfsqfqsfqsfqsfqsfqsfqs', '2020-05-19'),
(22, 14, 18, ' fffggggggggggggggggggggg', '2020-05-19'),
(23, 14, 18, ' gggggggggggggggggggg', '2020-05-19'),
(24, 14, 18, ' gggggggggggg', '2020-05-19'),
(25, 14, 18, ' gggggggggggggggggggggggggggggggggggggsddddddddddddddd', '2020-05-19'),
(26, 14, 18, ' test', '2020-05-19'),
(27, 14, 18, ' test', '2020-05-19'),
(28, 14, 18, ' fqsdfqsf', '2020-05-19'),
(29, 14, 18, ' fffqsfqsfqsfqsdqsd', '2020-05-19'),
(30, 14, 18, '1', '2020-05-19'),
(31, 14, 18, ' 2', '2020-05-19'),
(32, 14, 18, ' 3', '2020-05-19'),
(33, 14, 18, ' 3', '2020-05-19'),
(34, 14, 18, ' 3', '2020-05-19'),
(35, 14, 18, ' 3', '2020-05-19'),
(36, 14, 18, ' dfdfdf', '2020-05-19'),
(37, 14, 18, ' dfdfdf', '2020-05-19'),
(38, 14, 18, ' ggff', '2020-05-19'),
(39, 14, 18, ' fgsdg', '2020-05-19'),
(40, 14, 18, ' 23', '2020-05-19'),
(41, 14, 18, ' 33', '2020-05-19'),
(42, 14, 18, ' 33', '2020-05-19'),
(43, 14, 18, ' 23', '2020-05-19'),
(44, 14, 18, ' 23', '2020-05-19'),
(45, 14, 18, ' 23', '2020-05-19'),
(46, 14, 18, ' 22', '2020-05-19'),
(47, 14, 18, ' 22', '2020-05-19'),
(48, 14, 18, ' 14', '2020-05-19'),
(49, 14, 18, ' 21', '2020-05-19'),
(50, 14, 18, ' rfzef', '2020-05-19'),
(51, 14, 18, ' 17', '2020-05-19'),
(52, 14, 18, ' 17', '2020-05-19'),
(53, 14, 18, ' 18', '2020-05-19'),
(54, 14, 18, ' 19', '2020-05-19'),
(55, 14, 18, ' 19', '2020-05-19'),
(56, 14, 18, ' fsdf', '2020-05-19'),
(57, 14, 18, ' 14', '2020-05-19'),
(58, 14, 18, ' 14', '2020-05-19'),
(59, 14, 18, ' 16', '2020-05-19'),
(60, 14, 18, ' 16', '2020-05-19'),
(61, 14, 18, ' 16', '2020-05-19'),
(62, 14, 18, ' 16', '2020-05-19'),
(63, 14, 18, ' 16', '2020-05-19'),
(64, 14, 18, ' 16', '2020-05-19'),
(65, 14, 18, ' 16', '2020-05-19'),
(66, 14, 18, ' azearfzger gzgjvgnzguo zbg zebf npe gzbf bnazegi briazef zyiçge uog^nzf ^ghz azte ', '2020-05-19'),
(67, 14, 18, ' azearfzger gzgjvgnzguo zbg zebf npe gzbf bnazegi briazef zyiçge uog^nzf ^ghz azte ', '2020-05-19'),
(68, 14, 18, ' azearfzger gzgjvgnzguo zbg zebf npe gzbf bnazegi briazef zyiçge uog^nzf ^ghz azte ', '2020-05-19'),
(69, 14, 30, ' ytrtr', '2020-05-19'),
(70, 14, 30, ' ererer', '2020-05-19'),
(71, 3, 54, ' dff', '2020-05-19'),
(72, 3, 54, ' dd', '2020-05-19'),
(73, 3, 54, ' dd', '2020-05-19'),
(74, 3, 16, ' reghdfgh', '2020-05-19'),
(75, 3, 16, ' gdfgdf', '2020-05-19'),
(76, 3, 31, ' salem ', '2020-05-19'),
(77, 3, 31, ' salem ', '2020-05-19'),
(78, 3, 55, 'slm', '2020-05-19'),
(79, 3, 55, ' cv ?\r\n', '2020-05-19'),
(80, 3, 55, ' ', '2020-05-19'),
(81, 3, 55, ' ', '2020-05-19'),
(82, 3, 56, ' slm ', '2020-05-19'),
(83, 3, 56, ' cv ?\r\n', '2020-05-19'),
(84, 3, 56, ' cv ?\r\n', '2020-05-19');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `idpost` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `descr` text NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`idpost`, `id`, `descr`, `date`, `type`) VALUES
(84, 3, 'hey', '2020-05-19', 'Covoiturage'),
(85, 3, 'test image', '2020-05-19', 'Covoiturage'),
(86, 3, '', '2020-05-19', 'Covoiturage'),
(87, 3, '', '2020-05-19', 'Covoiturage'),
(88, 3, '00', '2020-05-19', 'Covoiturage'),
(89, 3, 'try', '2020-05-19', 'Covoiturage'),
(90, 3, 'yes', '2020-05-19', 'Colocation'),
(91, 3, 'yep', '2020-05-19', 'Covoiturage'),
(92, 3, 'test 2', '2020-05-19', 'Covoiturage');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first name` varchar(255) NOT NULL,
  `last name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `first name`, `last name`, `age`, `matricule`, `email`, `login`, `mdp`) VALUES
(3, 'med', 'fredj', 23, '19ifj088', 'yeh@poly.com', 'med', '00'),
(4, 'medf', 'frefdj', 234, '19ifj088', 'yeh@poly.comdf', 'medmmm', '11'),
(5, 'fr', 'fre', 22, '19ifj088', 'yeh@poly.com', 'dd', '0000'),
(6, 'fr', 'fre', 22, '19ifj088', 'yeh@poly.com', 'dd22', '22'),
(7, 'fr', 'fre', 22, '19ifj088', 'yeh@poly.com', 'dd222', '2222222'),
(8, 'g', 'gg', 22, '19ifj088', 'yeh@poly.com', 'gg', 'gg'),
(9, 'g', 'gg', 22, '19ifj088', 'yeh@poly.com', 'gg', '00'),
(10, 'g', 'gg', 22, '19ifj088', 'yeh@poly.com', 'gg', '00'),
(11, 'hh', 'hh', 22, '19ifj088', 'yeh@poly.com', 'hh', 'hh'),
(12, 'hh', 'hh', 22, '19ifj088', 'yeh@poly.com', 'hh', '44'),
(13, 'qq', 'qq', 99, 'sdfsdf', 'yeh@poly.comdf', 'yy', '66'),
(14, 'med amine', 'fredj', 66, '19IFJ088', 'projet@gmail.com', 'fredj00', '00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`idchat`);

--
-- Index pour la table `chatuser`
--
ALTER TABLE `chatuser`
  ADD PRIMARY KEY (`idchat`,`iduser`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcom`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`idimage`);

--
-- Index pour la table `like1`
--
ALTER TABLE `like1`
  ADD PRIMARY KEY (`idlike`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`idmessage`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idpost`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `idchat` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `idcom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `idimage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT pour la table `like1`
--
ALTER TABLE `like1`
  MODIFY `idlike` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `idmessage` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
