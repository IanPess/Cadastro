drop database if exists ifsp;

create database ifsp;
use ifsp;

CREATE TABLE Cidade (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    estado CHAR(2)
);

CREATE TABLE Cliente (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    senha VARCHAR(100),
    ativo bool,
    cidade_id INT,
    FOREIGN KEY (cidade_id) REFERENCES Cidade(id)
);

INSERT INTO Cidade (nome, estado) VALUES
('São Paulo', 'SP'),
('Campinas', 'SP'),
('São José dos Campos', 'SP'),
('Ribeirão Preto', 'SP'),
('Santos', 'SP');

SELECT * FROM Cidade WHERE estado = 'SP';

INSERT INTO Cliente (nome, cidade_id, senha) VALUES
('Ana Maria', 1, '123'),     
('Cleiton Souza', 2 ,'263'),    
('Valdemir Silva', 3, '371'),
('Jacinto Pereira', 1, '284'),    
('Octávio Santos', 5, '128');   

SELECT * FROM Cliente WHERE cidade_id = 1;

UPDATE Cidade SET nome = 'Bauru' WHERE id = 1;

UPDATE Cliente SET nome = 'Cássio Sters' WHERE id = 1;

DELETE FROM Cidade WHERE id = 4;

DELETE FROM Cliente WHERE id = 1;