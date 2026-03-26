-- Criar o banco de dados
CREATE DATABASE estoque;

-- Usar o banco criado
USE estoque;

-- Criar a tabela
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    senha VARCHAR(255) NOT NULL
);