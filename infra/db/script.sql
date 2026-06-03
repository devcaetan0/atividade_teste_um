-- Criação do banco de dados com o nome de sistema_simples
CREATE DATABASE sistema_simples;

-- Comando para utilizar o banco criado
USE sistema_simples;

-- Criação da tabela de usuário, contendo id, nome do usuário e senha, deixando o id
-- como INT e AUTO_INCREMENT para ser inteiro e aumentar automaticante no banco
CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

-- Comando para inserir na tabela de usuários nas colunas de nome de usuário e senha
-- os valores: admin e 123 na ordem das colunas declaradas
INSERT INTO usuario (usuario, senha) VALUE ('admin','123');