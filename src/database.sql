CREATE DATABASE akiraGames;
USE akiraGames;

CREATE TABLE usuarios(
    username VARCHAR(30) PRIMARY KEY NOT NULL,
    senha VARCHAR(128) NOT NULL,
    nome VARCHAR(100) NOT NULL,
    tipo CHAR(1) NOT NULL,
    status CHAR(1) NOT NULL
);