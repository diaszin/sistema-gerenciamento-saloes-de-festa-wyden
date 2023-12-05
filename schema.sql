CREATE DATABASE IF NOT EXISTS gerenciamento_salao;
USE gerenciamento_salao;

CREATE TABLE decoracoes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(200) UNIQUE NOT NULL
);

CREATE TABLE localizacao (
    id INT PRIMARY KEY AUTO_INCREMENT,
    bairro VARCHAR(100),
    condominio_casa VARCHAR(100),
    numero_rua INT,
    nome_rua VARCHAR(100)
);

ALTER TABLE localizacao
ADD COLUMN nome VARCHAR(200) NOT NULL;

CREATE TABLE salaoDeFestas (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100),
    numero INT,
    localizacao_id INT,
    esta_em_manutencao boolean,
    esta_sendo_alugado boolean,
    PRIMARY KEY(id),
    FOREIGN KEY (localizacao_id) REFERENCES localizacao(id)
);

CREATE TABLE ocupacao(
	id INT NOT NULL AUTO_INCREMENT,
	id_salao INT NOT NULL,
	id_decoracao INT NOT NULL,
	PRIMARY KEY(id, id_salao),
	FOREIGN KEY (id_salao) REFERENCES salaoDeFestas(id),
	FOREIGN KEY (id_decoracao) REFERENCES decoracoes(id)
);

CREATE TABLE account (
	id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	email varchar(255) NOT NULL,
	senha varchar(32)
);

-- Insere as decorações
INSERT INTO decoracoes (nome) VALUES ("decoração"), ("buffet"), ("garçom"), ("cerimonial"), ("mesa e cadeira");