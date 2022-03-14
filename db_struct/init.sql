CREATE TABLE produto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    descricao VARCHAR(255),
    preco DECIMAL
);

CREATE TABLE tipoUtilizador(
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(255)
);

CREATE TABLE utilizador(
    username VARCHAR(255) PRIMARY KEY,
    password VARCHAR(255),
    id_tipoUtilizador INT,

    FOREIGN KEY (id_tipoUtilizador) REFERENCES tipoUtilizador(id)
);

INSERT INTO tipoUtilizador VALUES (1,'admin');
INSERT INTO tipoUtilizador VALUES (2,'registado');

INSERT INTO utilizador VALUES ('admin','admin',1);
INSERT INTO utilizador VALUES ('user','user',2);