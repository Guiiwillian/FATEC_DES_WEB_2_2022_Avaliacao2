CREATE DATABASE musica;

CREATE TABLE `login` (
  `loginID` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

INSERT INTO `login` (`loginID`, `usuario`, `senha`) VALUES
(1, 'fatec', 'araras');

CREATE TABLE `cadastro_musica` (
  `musicaID` int(11) NOT NULL,
  `nome_musica` varchar(255) NOT NULL,
  `nome_banda` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;
