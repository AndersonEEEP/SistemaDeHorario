-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Abr-2020 às 23:11
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_de_horario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `quarta_feira`
--

CREATE TABLE `quarta_feira` (
  `id_da_tabela` int(5) NOT NULL,
  `id_da_turma` int(3) DEFAULT NULL,
  `primeira_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `segunda_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `terceira_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `quarta_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `quinta_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `sexta_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `setima_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `oitava_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `nona_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `quarta_feira`
--

INSERT INTO `quarta_feira` (`id_da_tabela`, `id_da_turma`, `primeira_aula`, `segunda_aula`, `terceira_aula`, `quarta_aula`, `quinta_aula`, `sexta_aula`, `setima_aula`, `oitava_aula`, `nona_aula`) VALUES
(44, 13, 'PortuguÃªs', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined'),
(46, 15, 'Geografia', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined'),
(47, 16, 'HistÃ³ria', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quinta_feira`
--

CREATE TABLE `quinta_feira` (
  `id_da_tabela` int(5) NOT NULL,
  `id_da_turma` int(3) DEFAULT NULL,
  `primeira_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `segunda_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `terceira_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `quarta_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `quinta_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `sexta_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `setima_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `oitava_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `nona_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `quinta_feira`
--

INSERT INTO `quinta_feira` (`id_da_tabela`, `id_da_turma`, `primeira_aula`, `segunda_aula`, `terceira_aula`, `quarta_aula`, `quinta_aula`, `sexta_aula`, `setima_aula`, `oitava_aula`, `nona_aula`) VALUES
(44, 13, 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined'),
(46, 15, 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined'),
(47, 16, 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined');

-- --------------------------------------------------------

--
-- Estrutura da tabela `segunda_feira`
--

CREATE TABLE `segunda_feira` (
  `id_da_tabela` int(5) NOT NULL,
  `id_da_turma` int(3) DEFAULT NULL,
  `primeira_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `segunda_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `terceira_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `quarta_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `quinta_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `sexta_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `setima_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `oitava_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `nona_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `segunda_feira`
--

INSERT INTO `segunda_feira` (`id_da_tabela`, `id_da_turma`, `primeira_aula`, `segunda_aula`, `terceira_aula`, `quarta_aula`, `quinta_aula`, `sexta_aula`, `setima_aula`, `oitava_aula`, `nona_aula`) VALUES
(44, 13, 'Arte e EducaÃ§Ã£o', 'Geografia', 'Arte e EducaÃ§Ã£o', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined'),
(46, 15, 'Geografia', 'Arte e EducaÃ§Ã£o', 'Geografia', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined'),
(47, 16, 'QuÃ­mica', 'a', 'QuÃ­mica', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sexta_feira`
--

CREATE TABLE `sexta_feira` (
  `id_da_tabela` int(5) NOT NULL,
  `id_da_turma` int(3) DEFAULT NULL,
  `primeira_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `segunda_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `terceira_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `quarta_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `quinta_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `sexta_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `setima_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `oitava_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `nona_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `sexta_feira`
--

INSERT INTO `sexta_feira` (`id_da_tabela`, `id_da_turma`, `primeira_aula`, `segunda_aula`, `terceira_aula`, `quarta_aula`, `quinta_aula`, `sexta_aula`, `setima_aula`, `oitava_aula`, `nona_aula`) VALUES
(44, 13, 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'HistÃ³ria'),
(46, 15, 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'QuÃ­mica'),
(47, 16, 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'FÃ­sica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_coordenadores`
--

CREATE TABLE `tb_coordenadores` (
  `idtb_coordenadores` int(3) UNSIGNED NOT NULL,
  `cor_nome` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  `cor_login` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `cor_senha` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tb_coordenadores`
--

INSERT INTO `tb_coordenadores` (`idtb_coordenadores`, `cor_nome`, `cor_login`, `cor_senha`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_disciplinas`
--

CREATE TABLE `tb_disciplinas` (
  `iddisciplinas` int(3) UNSIGNED NOT NULL,
  `dis_nome` varchar(80) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tb_disciplinas`
--

INSERT INTO `tb_disciplinas` (`iddisciplinas`, `dis_nome`) VALUES
(12, 'MatemÃ¡tica'),
(13, 'InglÃªs'),
(14, 'PortuguÃªs'),
(15, 'Geografia'),
(17, 'Arte e EducaÃ§Ã£o'),
(18, 'HistÃ³ria'),
(19, 'QuÃ­mica'),
(20, 'Biologia'),
(21, 'FÃ­sica'),
(22, 'Espanhol'),
(23, 'a'),
(24, 'b'),
(25, 'c');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_disciplinas_has_tb_professores`
--

CREATE TABLE `tb_disciplinas_has_tb_professores` (
  `tb_disciplinas_iddisciplinas` int(3) UNSIGNED NOT NULL,
  `tb_professores_idtb_professores` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tb_disciplinas_has_tb_professores`
--

INSERT INTO `tb_disciplinas_has_tb_professores` (`tb_disciplinas_iddisciplinas`, `tb_professores_idtb_professores`) VALUES
(12, 11),
(12, 14),
(13, 11),
(13, 12),
(13, 13),
(13, 14),
(14, 12),
(15, 12),
(15, 13),
(16, 12),
(16, 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_disciplinas_has_tb_turmas`
--

CREATE TABLE `tb_disciplinas_has_tb_turmas` (
  `tb_disciplinas_iddisciplinas` int(3) UNSIGNED NOT NULL,
  `tb_turmas_idtb_turmas` int(3) UNSIGNED NOT NULL,
  `qntd` int(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tb_disciplinas_has_tb_turmas`
--

INSERT INTO `tb_disciplinas_has_tb_turmas` (`tb_disciplinas_iddisciplinas`, `tb_turmas_idtb_turmas`, `qntd`) VALUES
(12, 1, 12),
(12, 2, 200),
(12, 3, 2),
(12, 4, 20),
(12, 5, 2),
(12, 6, 2),
(12, 8, 2),
(12, 9, 2),
(12, 10, 2),
(12, 11, 0),
(12, 12, 0),
(12, 13, 2),
(12, 15, 2),
(12, 16, 2),
(13, 1, 13),
(13, 3, 34),
(13, 5, 2),
(13, 6, 2),
(13, 8, 2),
(13, 9, 2),
(13, 10, 2),
(13, 11, 0),
(13, 12, 0),
(13, 13, 2),
(13, 15, 2),
(13, 16, 2),
(14, 2, 300),
(14, 3, 4),
(14, 4, 30),
(14, 5, 2),
(14, 6, 2),
(14, 8, 2),
(14, 9, 2),
(14, 10, 2),
(14, 11, 0),
(14, 13, 2),
(14, 15, 2),
(14, 16, 2),
(15, 5, 2),
(15, 6, 2),
(15, 8, 2),
(15, 9, 2),
(15, 10, 2),
(15, 11, 0),
(15, 13, 2),
(15, 15, 2),
(15, 16, 2),
(16, 5, 1),
(17, 13, 2),
(17, 15, 2),
(17, 16, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_professores`
--

CREATE TABLE `tb_professores` (
  `idtb_professores` int(3) UNSIGNED NOT NULL,
  `prof_nome` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `prof_ch` int(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tb_professores`
--

INSERT INTO `tb_professores` (`idtb_professores`, `prof_nome`, `prof_ch`) VALUES
(11, 'CristovÃ£o', 8),
(12, 'Fagner', 40),
(13, 'Professor Teste', 40),
(14, 'Anderson', 100);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turmas`
--

CREATE TABLE `tb_turmas` (
  `idtb_turmas` int(3) UNSIGNED NOT NULL,
  `tur_nome` varchar(30) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tb_turmas`
--

INSERT INTO `tb_turmas` (`idtb_turmas`, `tur_nome`) VALUES
(13, '1Â°  AdministraÃ§Ã£o '),
(15, '2Â° InformÃ¡tica'),
(16, '3Â° Rede de computadores');

-- --------------------------------------------------------

--
-- Estrutura da tabela `terca_feira`
--

CREATE TABLE `terca_feira` (
  `id_da_tabela` int(5) NOT NULL,
  `id_da_turma` int(3) DEFAULT NULL,
  `primeira_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `segunda_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `terceira_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `quarta_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `quinta_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `sexta_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `setima_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `oitava_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `nona_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `decima_aula` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `terca_feira`
--

INSERT INTO `terca_feira` (`id_da_tabela`, `id_da_turma`, `primeira_aula`, `segunda_aula`, `terceira_aula`, `quarta_aula`, `quinta_aula`, `sexta_aula`, `setima_aula`, `oitava_aula`, `nona_aula`, `decima_aula`) VALUES
(44, 13, 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', NULL),
(46, 15, 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', NULL),
(47, 16, 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `quarta_feira`
--
ALTER TABLE `quarta_feira`
  ADD PRIMARY KEY (`id_da_tabela`);

--
-- Índices para tabela `quinta_feira`
--
ALTER TABLE `quinta_feira`
  ADD PRIMARY KEY (`id_da_tabela`);

--
-- Índices para tabela `segunda_feira`
--
ALTER TABLE `segunda_feira`
  ADD PRIMARY KEY (`id_da_tabela`);

--
-- Índices para tabela `sexta_feira`
--
ALTER TABLE `sexta_feira`
  ADD PRIMARY KEY (`id_da_tabela`);

--
-- Índices para tabela `tb_coordenadores`
--
ALTER TABLE `tb_coordenadores`
  ADD PRIMARY KEY (`idtb_coordenadores`);

--
-- Índices para tabela `tb_disciplinas`
--
ALTER TABLE `tb_disciplinas`
  ADD PRIMARY KEY (`iddisciplinas`);

--
-- Índices para tabela `tb_disciplinas_has_tb_professores`
--
ALTER TABLE `tb_disciplinas_has_tb_professores`
  ADD PRIMARY KEY (`tb_disciplinas_iddisciplinas`,`tb_professores_idtb_professores`),
  ADD KEY `tb_disciplinas_has_tb_professores_FKIndex1` (`tb_disciplinas_iddisciplinas`),
  ADD KEY `tb_disciplinas_has_tb_professores_FKIndex2` (`tb_professores_idtb_professores`);

--
-- Índices para tabela `tb_disciplinas_has_tb_turmas`
--
ALTER TABLE `tb_disciplinas_has_tb_turmas`
  ADD PRIMARY KEY (`tb_disciplinas_iddisciplinas`,`tb_turmas_idtb_turmas`),
  ADD KEY `tb_disciplinas_has_tb_turmas_FKIndex1` (`tb_disciplinas_iddisciplinas`),
  ADD KEY `tb_disciplinas_has_tb_turmas_FKIndex2` (`tb_turmas_idtb_turmas`);

--
-- Índices para tabela `tb_professores`
--
ALTER TABLE `tb_professores`
  ADD PRIMARY KEY (`idtb_professores`);

--
-- Índices para tabela `tb_turmas`
--
ALTER TABLE `tb_turmas`
  ADD PRIMARY KEY (`idtb_turmas`);

--
-- Índices para tabela `terca_feira`
--
ALTER TABLE `terca_feira`
  ADD PRIMARY KEY (`id_da_tabela`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `quarta_feira`
--
ALTER TABLE `quarta_feira`
  MODIFY `id_da_tabela` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de tabela `quinta_feira`
--
ALTER TABLE `quinta_feira`
  MODIFY `id_da_tabela` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de tabela `segunda_feira`
--
ALTER TABLE `segunda_feira`
  MODIFY `id_da_tabela` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de tabela `sexta_feira`
--
ALTER TABLE `sexta_feira`
  MODIFY `id_da_tabela` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de tabela `tb_coordenadores`
--
ALTER TABLE `tb_coordenadores`
  MODIFY `idtb_coordenadores` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_disciplinas`
--
ALTER TABLE `tb_disciplinas`
  MODIFY `iddisciplinas` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `tb_professores`
--
ALTER TABLE `tb_professores`
  MODIFY `idtb_professores` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tb_turmas`
--
ALTER TABLE `tb_turmas`
  MODIFY `idtb_turmas` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `terca_feira`
--
ALTER TABLE `terca_feira`
  MODIFY `id_da_tabela` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
