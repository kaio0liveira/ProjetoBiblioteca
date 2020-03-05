-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Mar-2020 às 20:38
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `dataNascimento` varchar(20) NOT NULL,
  `cpf` char(11) NOT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `obs_complementares` varchar(100) DEFAULT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `dataNascimento`, `cpf`, `endereco`, `email`, `telefone`, `obs_complementares`, `usuario`, `senha`) VALUES
(1, 'kaio', '07-03-2020', '1234567891011', 'casa 10', 'kaio@gmail.com', '24552452345', 'teste', 'kaio', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emp_clientes`
--

CREATE TABLE `emp_clientes` (
  `id_emp` int(11) NOT NULL,
  `cliente` varchar(10) NOT NULL,
  `dt_emprestimo` varchar(50) NOT NULL,
  `titulo_obra` varchar(50) NOT NULL,
  `dias_solic` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `emp_clientes`
--

INSERT INTO `emp_clientes` (`id_emp`, `cliente`, `dt_emprestimo`, `titulo_obra`, `dias_solic`) VALUES
(7, 'Kaio', '06-03-2020', 'livro', '2020-03-07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `editora` varchar(50) NOT NULL,
  `titulo_da_obra` varchar(50) NOT NULL,
  `data_cadastro` date NOT NULL,
  `preco` varchar(20) NOT NULL,
  `obs_complementares` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `autor`, `editora`, `titulo_da_obra`, `data_cadastro`, `preco`, `obs_complementares`) VALUES
(1, 'kaio', 'kaio', 'kaio', '2020-03-02', '10', 'seja bem vindo'),
(2, 'bob', 'bobb', 'bob', '2020-03-02', '50', 'hoje e seu dia!'),


--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `emp_clientes`
--
ALTER TABLE `emp_clientes`
  ADD PRIMARY KEY (`id_emp`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `emp_clientes`
--
ALTER TABLE `emp_clientes`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
