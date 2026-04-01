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

-- tabela produto
create table produtos(
id int auto_increment primary key,
nome_produto varchar(150),
url_imagem varchar(255),
valor decimal(10,2),
desconto decimal(10,2) default 0,
data_cadastro datetime default CURRENT_TIMESTAMP
);