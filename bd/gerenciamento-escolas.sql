use heroku_93153fe78153306;
CREATE TABLE escolas (
  id int(100) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  escola varchar(255) NOT NULL,
  endereco varchar(255) NOT NULL,
  telefone int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO escolas (id, escola, endereco, telefone) VALUES
(1, Escola Municipal Nun Álvares Pereira, Rua Beira Alta, S/N Q. 4 Iapc - Irajá, Rio de Janeiro - RJ 21230-550, 2133725257),
(2, Escola Municipal Mário Paulo de Brito, R. São Leonardo 51 - Irajá, Rio de Janeiro - RJ 21231-070, 2133725447),
(3, Escola Municipal Maria Baptistina Duffles Teixeira Lott, R. Ponta Porã 479 - Vista Alegre, Rio de Janeiro - RJ 21230-690, 2134596092),
(4, Escola Municipal São João Batista, Praça Laguna, 40 - Cordovil, Rio de Janeiro - RJ 21250-310, 2123339860),
(5, Escola Municipal Odilon Braga, Praça Laguna, S/N - Cordovil, Rio de Janeiro - RJ, 21250-450, 2124824609),
(6, Escola Municipal Ary Barroso, R. Mendoza 323 - Cordovil, Rio de Janeiro - RJ 21211-180, 2124823681),
(7, Escola Municipal J. Carlos, R. Ribatejo 245 - Irajá, Rio de Janeiro - RJ 21230-560, 2133720037),
(8, Espaço de Desenvolvimento Infantil Professor Emmanuel Pereira Filho, Praça Laguna 102 - Cordovil, Rio de Janeiro - RJ 21250-310, 2124827202),
(9, Escola Municipal Grécia, Av. Braz de Pina 1614 - Vila da Penha Rio de Janeiro - RJ 21235-600, 2134571153),
(10, Escola Municipal José do Patrocínio, R. Gustavo de Andrade 270 - Irajá Rio de Janeiro - RJ 21235-500, 2134558524),
(11, Escola Municipal Adlai Stevenson, Rua Beira Alta - Iapc 95 - Irajá Rio de Janeiro - RJ 21230-550, 2133731582),

use heroku_93153fe78153306;
CREATE TABLE niveis (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nivel varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO niveis (id, nivel) VALUES
(1, Administrador);

use heroku_93153fe78153306;
CREATE TABLE turmas (
  id int(100) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  escola varchar(255) NOT NULL,
  turma varchar(255) NOT NULL,
  turno varchar(32) NOT NULL,
  capacidade int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO turmas (id, escola, turma, turno, capacidade) VALUES
(1, Escola Municipal Nun Álvares Pereira, 801, manhã, 30);

use heroku_93153fe78153306;
CREATE TABLE usuarios (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome varchar(60) NOT NULL,
  email varchar(60) NOT NULL,
  senha varchar(32) NOT NULL,
  nivel varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO usuarios (id, nome, email, senha, nivel) VALUES
(1, Adm, admin@smerj.com.br, 12345, Administrador);