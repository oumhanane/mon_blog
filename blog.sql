-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 23 déc. 2022 à 10:21
-- Version du serveur : 5.7.31
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date_updated` date NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comment_post` (`id_post`),
  KEY `fk_comment_user` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `title`, `author`, `content`, `date_updated`, `id_post`, `id_user`) VALUES
(1, 'Commentaire1', 'Saliha', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis  est laborum.', '2022-12-20', 1, 1),
(2, 'Commentaire2', 'Saliha', 'Lorem ipsum dolor sit amet, consectetur aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2022-12-20', 2, 1),
(3, 'Commentaire3', 'Saliha', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis culpa qui officia deserunt mollit anim id est laborum.', '2022-12-20', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `chapo` text NOT NULL,
  `content` text NOT NULL,
  `date_updated` date NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_post_user` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `title`, `author`, `chapo`, `content`, `date_updated`, `id_user`) VALUES
(1, 'Titre1', 'Saliha Ichou', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum facilis ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dictum varius duis at consectetur lorem donec massa. Vitae tortor condimentum lacinia quis. Quis ipsum suspendisse ultrices gravida dictum fusce ut placerat orci. Suscipit tellus mauris a diam maecenas sed enim. Duis ultricies lacus sed turpis tincidunt id aliquet risus. Tempus egestas sed sed risus pretium quam vulputate dignissim suspendisse. Tincidunt vitae semper quis lectus nulla at volutpat. Ornare suspendisse sed nisi lacus sed viverra tellus. Turpis nunc eget lorem dolor sed viverra ipsum nunc. Felis donec et odio pellentesque diam volutpat. Ac auctor augue mauris augue neque gravida in fermentum. Commodo nulla facilisi nullam vehicula ipsum. Sagittis orci a scelerisque purus semper eget. Proin sagittis nisl rhoncus mattis rhoncus urna neque. Curabitur vitae nunc sed velit dignissim sodales. Urna nec tincidunt praesent semper feugiat.\r\n\r\nEnim facilisis gravida neque convallis a cras. Luctus venenatis lectus magna fringilla urna. Ut ornare lectus sit amet est placerat in egestas. Ut pharetra sit amet aliquam id diam maecenas ultricies. Ornare arcu dui vivamus arcu felis. Nullam vehicula ipsum a arcu cursus vitae congue. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Nisi vitae suscipit tellus mauris a. Netus et malesuada fames ac turpis. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Adipiscing elit ut aliquam purus sit amet luctus venenatis. Suspendisse faucibus interdum posuere lorem ipsum dolor. Dignissim sodales ut eu sem.\r\n', '2022-11-23', 1),
(2, 'Titre2', 'Saliha Ichou', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea similique natus ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dictum varius duis at consectetur lorem donec massa. Vitae tortor condimentum lacinia quis. Quis ipsum suspendisse ultrices gravida dictum fusce ut placerat orci. Suscipit tellus mauris a diam maecenas sed enim. Duis ultricies lacus sed turpis tincidunt id aliquet risus. Tempus egestas sed sed risus pretium quam vulputate dignissim suspendisse. Tincidunt vitae semper quis lectus nulla at volutpat. Ornare suspendisse sed nisi lacus sed viverra tellus. Turpis nunc eget lorem dolor sed viverra ipsum nunc. Felis donec et odio pellentesque diam volutpat. Ac auctor augue mauris augue neque gravida in fermentum. Commodo nulla facilisi nullam vehicula ipsum. Sagittis orci a scelerisque purus semper eget. Proin sagittis nisl rhoncus mattis rhoncus urna neque. Curabitur vitae nunc sed velit dignissim sodales. Urna nec tincidunt praesent semper feugiat.\r\n\r\nEnim facilisis gravida neque convallis a cras. Luctus venenatis lectus magna fringilla urna. Ut ornare lectus sit amet est placerat in egestas. Ut pharetra sit amet aliquam id diam maecenas ultricies. Ornare arcu dui vivamus arcu felis. Nullam vehicula ipsum a arcu cursus vitae congue. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Nisi vitae suscipit tellus mauris a. Netus et malesuada fames ac turpis. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Adipiscing elit ut aliquam purus sit amet luctus venenatis. Suspendisse faucibus interdum posuere lorem ipsum dolor. Dignissim sodales ut eu sem.', '2022-11-23', 1),
(3, 'Titre3', 'Saliha Ichou', 'Lorem ipsum dolor sit amet, consectetur a repellat nesciunt in et nulla perspiciatis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dictum varius duis at consectetur lorem donec massa. Vitae tortor condimentum lacinia quis. Quis ipsum suspendisse ultrices gravida dictum fusce ut placerat orci. Suscipit tellus mauris a diam maecenas sed enim. Duis ultricies lacus sed turpis tincidunt id aliquet risus. Tempus egestas sed sed risus pretium quam vulputate dignissim suspendisse. Tincidunt vitae semper quis lectus nulla at volutpat. Ornare suspendisse sed nisi lacus sed viverra tellus. Turpis nunc eget lorem dolor sed viverra ipsum nunc. Felis donec et odio pellentesque diam volutpat. Ac auctor augue mauris augue neque gravida in fermentum. Commodo nulla facilisi nullam vehicula ipsum. Sagittis orci a scelerisque purus semper eget. Proin sagittis nisl rhoncus mattis rhoncus urna neque. Curabitur vitae nunc sed velit dignissim sodales. Urna nec tincidunt praesent semper feugiat.\r\n\r\nEnim facilisis gravida neque convallis a cras. Luctus venenatis lectus magna fringilla urna. Ut ornare lectus sit amet est placerat in egestas. Ut pharetra sit amet aliquam id diam maecenas ultricies. Ornare arcu dui vivamus arcu felis. Nullam vehicula ipsum a arcu cursus vitae congue. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Nisi vitae suscipit tellus mauris a. Netus et malesuada fames ac turpis. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Adipiscing elit ut aliquam purus sit amet luctus venenatis. Suspendisse faucibus interdum posuere lorem ipsum dolor. Dignissim sodales ut eu sem.', '2022-11-23', 1),
(4, 'Titre4', 'Saliha Ichou', 'Lorem repellat nesciunt in et nulla perspiciatis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dictum varius duis at consectetur lorem donec massa. Vitae tortor condimentum lacinia quis. Quis ipsum suspendisse ultrices gravida dictum fusce ut placerat orci. Suscipit tellus mauris a diam maecenas sed enim. Duis ultricies lacus sed turpis tincidunt id aliquet risus. Tempus egestas sed sed risus pretium quam vulputate dignissim suspendisse. Tincidunt vitae semper quis lectus nulla at volutpat. Ornare suspendisse sed nisi lacus sed viverra tellus. Turpis nunc eget lorem dolor sed viverra ipsum nunc. Felis donec et odio pellentesque diam volutpat. Ac auctor augue mauris augue neque gravida in fermentum. Commodo nulla facilisi nullam vehicula ipsum. Sagittis orci a scelerisque purus semper eget. Proin sagittis nisl rhoncus mattis rhoncus urna neque. Curabitur vitae nunc sed velit dignissim sodales. Urna nec tincidunt praesent semper feugiat.\r\n\r\nEnim facilisis gravida neque convallis a cras. Luctus venenatis lectus magna fringilla urna. Ut ornare lectus sit amet est placerat in egestas. Ut pharetra sit amet aliquam id diam maecenas ultricies. Ornare arcu dui vivamus arcu felis. Nullam vehicula ipsum a arcu cursus vitae congue. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Nisi vitae suscipit tellus mauris a. Netus et malesuada fames ac turpis. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Adipiscing elit ut aliquam purus sit amet luctus venenatis. Suspendisse faucibus interdum posuere lorem ipsum dolor. Dignissim sodales ut eu sem.', '2022-11-23', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `message` text,
  `validated_user` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `first_name`, `name`, `email`, `role`, `message`, `validated_user`) VALUES
(1, 'Saliha', 'Ichou', 'abc.ichou@gmail.com', 'administrateur', NULL, 'ok'),
(2, 'Sophie', 'Condor', 'sophiecondor@yahoo.fr', 'utilisatrice', NULL, 'ok'),
(3, 'Youssef', 'Babelkheir', 'youssefbadelkheir@gmail.com', 'utilisateur', NULL, 'ok'),
(4, 'Aminata', 'Youssoufou', 'aminyoussoufou@sfr.fr', 'utilisateur', NULL, 'ok');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
