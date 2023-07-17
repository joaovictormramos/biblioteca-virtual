SELECT * FROM Autor;

CREATE TABLE Autor(
    codigo SERIAL NOT NULL PRIMARY KEY,
    nome VARCHAR(80) NOT NULL,
    pais VARCHAR(20) NOT NULL
);

SELECT * FROM Genero;

CREATE TABLE Genero(
    codigo SERIAL NOT NULL PRIMARY KEY,
    nome VARCHAR(80) NOT NULL
);

SELECT * FROM Editora;

CREATE TABLE Editora(
    codigo SERIAL NOT NULL PRIMARY KEY,
    nome VARCHAR(80) NOT NULL
);

SELECT * FROM Livro;

CREATE TABLE Livro(
    codigo SERIAL NOT NULL PRIMARY KEY,
    nome VARCHAR(80) NOT NULL,
    data_lancamento DATE,
    resumo VARCHAR(200) NOT NULL
);

SELECT * FROM Genero_Livro;

CREATE TABLE Genero_Livro(
    codigo_Genero INT,
    codigo_Livro INT,
    PRIMARY KEY (codigo_Genero, codigo_Livro),
    FOREIGN KEY (codigo_Genero) REFERENCES Genero(codigo),
    FOREIGN KEY (codigo_Livro) REFERENCES Livro(codigo)
);

SELECT * FROM Unidade_Livro;

CREATE TABLE Unidade_Livro(
    codigo SERIAL NOT NULL PRIMARY KEY,
    codigo_Livro INT,
    edicao VARCHAR(10),
    FOREIGN KEY (codigo_Livro) REFERENCES Livro(codigo)
);

SELECT * FROM Cliente;

CREATE TABLE Cliente(
    codigo SERIAL NOT NULL PRIMARY KEY,
    nome VARCHAR(80) NOT NULL,
    cpf varchar(14) NOT NULL UNIQUE,
    data_nasc DATE,
    data_cadastro DATE CURRENT_DATE,
	usuario VARCHAR(20) NOT NULL UNIQUE,
	telefone VARCHAR(11) NOT NULL,
	senha varchar(50) NOT NULL
);

SELECT * FROM Funcionario;

CREATE TABLE Funcionario(
    codigo SERIAL NOT NULL PRIMARY KEY,
    nome VARCHAR(80) NOT NULL,
    data_nasc DATE,
    endereco VARCHAR(80),
    cep VARCHAR(8),
);

SELECT * FROM Emprestimo

CREATE TABLE Emprestimo(
    codigo SERIAL NOT NULL PRIMARY KEY,
    codigo_Cliente INT,
    codigo_Funcionario INT,
    codigo_Unidade_Livro INT,
    FOREIGN KEY (codigo_Cliente) REFERENCES Cliente(codigo),
    FOREIGN KEY (codigo_Funcionario) REFERENCES Funcionario(codigo),
    FOREIGN KEY (codigo_Unidade_Livro) REFERENCES Unidade_Livro(codigo)
);

create table exemplo(
	nome varchar(30),
	cpf varchar(14),
	usuario varchar(40)
);
