CREATE DATABASE livros_BD;
USE livros_BD;

CREATE TABLE usuario (
  idusuario INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NULL,
  email VARCHAR(45) NULL,
  senha VARCHAR(45) NULL,
  cpf VARCHAR(45) NULL,
  cod_registro VARCHAR(45) NULL
);


CREATE TABLE livro (
  idlivro INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  titulo VARCHAR(45) NULL,
  autor VARCHAR(45) NULL,
  edicao VARCHAR(45) NULL,
  genero VARCHAR(45) NULL,
  localizacao VARCHAR(45) NULL,
  idusuario INT NOT NULL,
  FOREIGN KEY (idusuario) references usuario (idusuario)
  );