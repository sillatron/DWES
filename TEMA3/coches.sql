DROP DATABASE IF EXISTS Concesionario;
CREATE DATABASE Concesionario;
USE Concesionario;

CREATE TABLE Coches (
    id INT(4) AUTO_INCREMENT,
    modelo VARCHAR(15),
    marca  VARCHAR(20),
    precio FLOAT(9,2),
    stock INT(2),
    CONSTRAINT pk_Coches PRIMARY KEY(id)
)ENGINE=InnoDB;

INSERT INTO Coches(null, "AX1", "BMW", 20000, 11);

CREATE TABLE Grupos (
    id VARCHAR(9) PRIMARY KEY,
    nombre VARCHAR(15),
    ciudad  VARCHAR(20)
)ENGINE=InnoDB;

CREATE TABLE Vendedores (
    id VARCHAR(9) PRIMARY KEY,
    grupo_id VARCHAR(9),
    nombre VARCHAR(15),
    apellidos  VARCHAR(20),
    cargo VARCHAR(50),
    fecha DATE,
    sueldo DECIMAL(7,2),
    comision DECIMAL(7,2),
    jefe INT(10),
    CONSTRAINT fk_vendedor_grupo FOREIGN KEY (grupo_id) REFERENCES Grupos(id)
)ENGINE=InnoDB;

CREATE TABLE Clientes (
    id VARCHAR(9) PRIMARY KEY,
    vendedor_id VARCHAR(9),
    nombre VARCHAR(15),
    ciudad VARCHAR(30),
    gastado DECIMAL(11,2),
    CONSTRAINT fk_cliente_vendedor FOREIGN KEY (vendedor_id) REFERENCES Vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE Encargos (
    id VARCHAR(9),
    coche_id INT(4),
    cliente_id VARCHAR(9),
    fecha DATE,
    PRIMARY KEY(id, coche_id, cliente_id),
    CONSTRAINT fk_encargo_coche FOREIGN KEY (coche_id) REFERENCES Coches (id),
    CONSTRAINT fk_encargo_cliente FOREIGN KEY (cliente_id) REFERENCES Clientes (id)
)ENGINE=InnoDB;