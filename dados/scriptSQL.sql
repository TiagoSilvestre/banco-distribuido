CREATE DATABASE exercicio20;
USE exercicio20;

CREATE TABLE logradouros(
idLogradouro INT PRIMARY KEY AUTO_INCREMENT,
nomeLogradouro VARCHAR(30)
);

CREATE TABLE bairros(
idBairro INT PRIMARY KEY AUTO_INCREMENT,
nomeBairro VARCHAR(30)
);

CREATE TABLE cidades(
idCidade INT PRIMARY KEY AUTO_INCREMENT,
nomeCidade VARCHAR(30)
);

CREATE TABLE estados(
idEstado INT PRIMARY KEY AUTO_INCREMENT,
nomeEstado VARCHAR(30)
);

CREATE TABLE paises(
idPais INT PRIMARY KEY AUTO_INCREMENT,
nomePais VARCHAR(30)
);


CREATE TABLE pessoas(
idPessoa INT PRIMARY KEY AUTO_INCREMENT,
nomePessoa VARCHAR(50),
Logradouros_idLogradouro INT NOT NULL,
Bairros_idBairro INT NOT NULL,
Cidades_idCidade INT NOT NULL,
Estados_idEstado INT NOT NULL,
Paises_idPais INT NOT NULL,
FOREIGN KEY(Logradouros_idLogradouro) REFERENCES logradouros(idLogradouro),
FOREIGN KEY(Bairros_idBairro) REFERENCES bairros(idBairro),
FOREIGN KEY(Cidades_idCidade) REFERENCES cidades(idCidade),
FOREIGN KEY(Estados_idEstado) REFERENCES estados(idEstado),
FOREIGN KEY(Paises_idPais) REFERENCES paises(idPais)
);

DESCRIBE pessoas;

INSERT INTO pessoas(nomePessoa, Logradouros_idLogradouro, Bairros_idBairro, Cidades_idCidade, Estados_idEstado, Paises_idPais)
VALUES ('Tiago Silvestre', 1, 1, 1, 1, 1);
