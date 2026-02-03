-- Criar o banco de dados
CREATE DATABASE aluaraVideos;

-- Usar o banco criado
USE aluaraVideos;

-- Criar a tabela
CREATE TABLE videos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    url VARCHAR(150) NOT NULL,
    title VARCHAR(150) NOT NULL
);
