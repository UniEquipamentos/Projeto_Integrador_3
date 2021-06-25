-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25-Jun-2021 às 22:01
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
-- Banco de dados: `uniequipamentos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `id_funcionario` int(11) NOT NULL,
  `id_administrador` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_administrador`),
  KEY `administrador_fk0` (`id_funcionario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=ucs2;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id_funcionario`, `id_administrador`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_conta` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_cliente`),
  KEY `cliente_fk0` (`id_conta`)
) ENGINE=MyISAM DEFAULT CHARSET=ucs2;

-- --------------------------------------------------------

--
-- Estrutura da tabela `conta`
--

DROP TABLE IF EXISTS `conta`;
CREATE TABLE IF NOT EXISTS `conta` (
  `nome_completo` varchar(255) NOT NULL,
  `matricula` varchar(255) NOT NULL,
  `data_nascimento` date NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_registro` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` float NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cep` float NOT NULL,
  `id_conta` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_conta`),
  UNIQUE KEY `nome_completo` (`nome_completo`),
  UNIQUE KEY `matricula` (`matricula`),
  UNIQUE KEY `data_nascimento` (`data_nascimento`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `data_registro` (`data_registro`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `cep` (`cep`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=ucs2;

--
-- Extraindo dados da tabela `conta`
--

INSERT INTO `conta` (`nome_completo`, `matricula`, `data_nascimento`, `cpf`, `usuario`, `senha`, `data_registro`, `email`, `telefone`, `endereco`, `cep`, `id_conta`) VALUES
('Rodrigo Sousa', '6920100300', '2000-06-09', '13466452702', '6920100300', 'rodrigo1234', '2021-06-17', 'rodrigovix252@gmail.com', 27997000000, 'Rua João Soares', 29027400, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

DROP TABLE IF EXISTS `emprestimo`;
CREATE TABLE IF NOT EXISTS `emprestimo` (
  `id_equipamentos` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_emprestimo` int(11) NOT NULL AUTO_INCREMENT,
  `data_hora` date NOT NULL,
  `valor` float NOT NULL,
  `prazo_devolução` date NOT NULL,
  `quantidade` varchar(255) NOT NULL,
  PRIMARY KEY (`id_emprestimo`),
  KEY `emprestimo_fk0` (`id_equipamentos`),
  KEY `emprestimo_fk1` (`id_pedido`)
) ENGINE=MyISAM DEFAULT CHARSET=ucs2;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos`
--

DROP TABLE IF EXISTS `equipamentos`;
CREATE TABLE IF NOT EXISTS `equipamentos` (
  `id_equipamentos` int(11) NOT NULL AUTO_INCREMENT,
  `numero_patrimonio` varchar(255) NOT NULL,
  `nome_equipamento` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `cor` varchar(255) DEFAULT NULL,
  `valor` float NOT NULL,
  `data_registro` date NOT NULL,
  PRIMARY KEY (`id_equipamentos`)
) ENGINE=MyISAM DEFAULT CHARSET=ucs2;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `id_conta` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_funcionario`),
  KEY `funcionario_fk0` (`id_conta`)
) ENGINE=MyISAM DEFAULT CHARSET=ucs2;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

DROP TABLE IF EXISTS `imagem`;
CREATE TABLE IF NOT EXISTS `imagem` (
  `nome` varchar(225) NOT NULL,
  `tamanho` binary(1) NOT NULL,
  `formato` binary(1) NOT NULL,
  `id_conta` int(11) NOT NULL,
  KEY `imagem_fk0` (`id_conta`)
) ENGINE=MyISAM DEFAULT CHARSET=ucs2;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id_conta` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` varchar(10) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id_conta`),
  UNIQUE KEY `matricula` (`matricula`),
  KEY `id_conta` (`id_conta`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=ucs2;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id_conta`, `matricula`, `senha`) VALUES
(1, '6920100300', 'e6809e94a005b14425e16d47b60b6d41'),
(2, '6920100301', 'ea92390e2593e3c5b103b3b8422fff09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota_fiscal`
--

DROP TABLE IF EXISTS `nota_fiscal`;
CREATE TABLE IF NOT EXISTS `nota_fiscal` (
  `id_pedido` int(11) NOT NULL,
  `nome_completo` varchar(255) NOT NULL,
  `data_hora` date NOT NULL,
  `valor` float NOT NULL,
  `quantidade` int(11) NOT NULL,
  `id_equipamentos` int(11) NOT NULL,
  `nome_equipamento` varchar(255) NOT NULL,
  `id_nota_fiscal` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_nota_fiscal`),
  KEY `nota_fiscal_fk0` (`id_pedido`),
  KEY `nota_fiscal_fk1` (`id_equipamentos`)
) ENGINE=MyISAM DEFAULT CHARSET=ucs2;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id_conta` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `data_hora` date NOT NULL,
  `tipo_pagamento` varchar(30) CHARACTER SET ucs2 NOT NULL,
  `status_pagamento` tinyint(1) NOT NULL,
  `quantidade` varchar(255) CHARACTER SET ucs2 NOT NULL,
  `valor` float NOT NULL,
  `id_emprestimo` int(11) NOT NULL,
  `id_equipamentos` int(11) NOT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `pedidos_fk0` (`id_conta`),
  KEY `pedidos_fk1` (`id_emprestimo`),
  KEY `pedidos_fk2` (`id_equipamentos`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id_conta`, `id_pedido`, `data_hora`, `tipo_pagamento`, `status_pagamento`, `quantidade`, `valor`, `id_emprestimo`, `id_equipamentos`) VALUES
(1, 1, '2021-06-18', 'À vista', 1, '300', 45, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prazo_devolucao`
--

DROP TABLE IF EXISTS `prazo_devolucao`;
CREATE TABLE IF NOT EXISTS `prazo_devolucao` (
  `id_pedido` int(11) NOT NULL,
  `id_emprestimo` int(11) NOT NULL,
  `data_hora` date NOT NULL,
  `valor` float NOT NULL,
  KEY `prazo_devolucao_fk0` (`id_pedido`),
  KEY `prazo_devolucao_fk1` (`id_emprestimo`)
) ENGINE=MyISAM DEFAULT CHARSET=ucs2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
