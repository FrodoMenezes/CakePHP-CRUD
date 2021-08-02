-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01-Ago-2021 às 21:51
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cdv`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

DROP TABLE IF EXISTS `pessoas`;
CREATE TABLE IF NOT EXISTS `pessoas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `etapa` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `name`, `cpf`, `etapa`, `user_id`, `created`, `modified`) VALUES
(1, 'Eduardo Menezes', '86288814091', 'Aguardando assinatura de documentos', 1, '2021-08-01 04:07:04', '2021-08-01 04:07:04'),
(2, 'Pessoa 01', '25687499032', 'Aguardando assinatura de documentos', 1, '2021-08-01 19:51:14', '2021-08-01 22:39:41'),
(3, 'Pessoa 02', '08839124063', 'Aguardando assinatura de documentos', NULL, '2021-08-01 19:51:34', '2021-08-01 19:51:34'),
(4, 'Pessoa 03', '98664768048', 'Aguardando assinatura de documentos', NULL, '2021-08-01 19:51:49', '2021-08-01 19:51:49'),
(5, 'Pessoa 04', '52094621022', 'Gestão de patrimônio ativa', NULL, '2021-08-01 19:52:03', '2021-08-01 20:03:29'),
(6, 'Pessoa 05', '91642080012', 'Gestão de patrimônio ativa', NULL, '2021-08-01 19:52:21', '2021-08-01 20:03:23'),
(7, 'Pessoa 06', '25218464066', 'Aguardando transferência de recursos', NULL, '2021-08-01 19:53:04', '2021-08-01 20:02:38'),
(8, 'Pessoa 07', '11987825012', 'Aguardando transferência de recursos', NULL, '2021-08-01 20:02:23', '2021-08-01 20:02:23'),
(9, 'Pessoa 08', '20306270030', 'Aguardando assinatura de documentos', NULL, '2021-08-01 21:58:15', '2021-08-01 21:58:52'),
(11, 'Pessoa 09', '02593379006', 'Aguardando assinatura de documentos', NULL, '2021-08-01 23:30:38', '2021-08-01 23:30:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `created`, `modified`) VALUES
(1, 'Eduardo Menezes', 'silveira@cover.com', 'silveira@cover.com', '$2y$10$xXlLu2bYO/3D9b/OqZPCo.g0LYMqnf48898qTw.D30YTSbjP/n7zO', '2021-08-01 03:55:14', '2021-08-01 04:21:39'),
(2, 'User 01', 'user01@cover.com', 'user01@cover.com', '$2y$10$COaFWMzDEQo/UE94A6f4Dub023NFfxyR/M0LaqqgdNeF59ZtPJYc2', '2021-08-01 19:55:46', '2021-08-01 19:55:46'),
(3, 'User 02', 'user02@cdv.com', 'user02@cdv.com', '$2y$10$A9DpgQEE191FB4J78ugfyev3ondCPlJN3Sfs6NpRflyt//ScjLeu2', '2021-08-01 21:26:36', '2021-08-01 21:26:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
