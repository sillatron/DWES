DROP DATABASE IF EXISTS Concesionario;
CREATE DATABASE Concesionario;
USE Concesionario;

CREATE TABLE Coches (
    id INT(10) AUTO_INCREMENT NOT NULL,
    modelo VARCHAR(100),
    marca  VARCHAR(50),
    precio INT (20),
    stock INT(20),
    PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE Clientes (
    id INT(10) AUTO_INCREMENT,
    nombre VARCHAR(100),
    ciudad VARCHAR(100),
    gastado FLOAT(50,2),
    PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE Encargos (
    id INT(10) AUTO_INCREMENT,
    coche_id INT(10),
    cliente_id INT(10),
    cantidad INT(20),
    fecha DATE,
    PRIMARY KEY(id, coche_id, cliente_id),
    CONSTRAINT fk_encargo_coche FOREIGN KEY (coche_id) REFERENCES Coches (id),
    CONSTRAINT fk_encargo_cliente FOREIGN KEY (cliente_id) REFERENCES Clientes (id)
)ENGINE=InnoDB;

INSERT INTO Coches VALUES(null, "A1", "Audi", 60000, 200);
INSERT INTO Coches VALUES(null, "Viano", "Mercedes", 40000, 100);
INSERT INTO Coches VALUES(null, "Avensis", "Toyota", 45000, 50);
INSERT INTO Coches VALUES(null, "Clio", "Renault", 20000, 75);