CREATE DATABASE IF NOT EXISTS codigo_bd;

USE codigo_bd;

CREATE TABLE IF NOT EXISTS usuario(
 id int not null auto_increment primary key,
nome TEXT NOT NULL,
usuario VARCHAR(20),
senha char(40) NOT NULL
);


CREATE TABLE IF NOT EXISTS aviso(
titulo varchar(50) PRIMARY KEY,
imagem TEXT NOT NULL,
descricao TEXT NOT NULL,
link TEXT NOT NULL,
anexos TEXT NOT NULL,
responsavel TEXT NOT NULL,
telefone VARCHAR(11),
email TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS setor(
id int not null auto_increment primary key,
nome TEXT NOT NULL,
coodernador TEXT NOT NULL
);
