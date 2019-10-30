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

INSERT INTO Coches VALUES (null, "AX1", "BMW", 20000, 11);
INSERT INTO Coches VALUES (null, "Kangoo", "Renault", 18000, 8);
INSERT INTO Coches VALUES (null, "2008", "Peugeot", 21000, 30);
INSERT INTO Coches VALUES (null, "Golf", "Volkswagen", 35000, 15);

CREATE TABLE Grupos (
    id VARCHAR(9) PRIMARY KEY,
    nombre VARCHAR(15),
    ciudad  VARCHAR(20)
)ENGINE=InnoDB;

INSERT INTO Grupos VALUES ("19JJ","Preferentes","Cádiz");
INSERT INTO Grupos VALUES ("RF34","VIP","Madrid");
INSERT INTO Grupos VALUES ("4R3T","Autónomos","Barcelona");
INSERT INTO Grupos VALUES ("23DD","Colectivos","Benalup de Sidonia");

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

INSERT INTO Vendedores VALUES ("99FR","RF34","Felipe","Gonzalez","Jefe de ventas","2016-09-13",2000,10,1);
INSERT INTO Vendedores VALUES ("33GG","RF34","Alfonso","Guerra","Director","2018-11-23",3000,21,2);
INSERT INTO Vendedores VALUES ("HH53","23DD","Paco","Gonzalez","Vendedor","2017-05-25",1500,10,3);
INSERT INTO Vendedores VALUES ("PF62","4R3T","Pedro","Sanchez","Vendedor","2018-09-04",1500,10,3);

CREATE TABLE Clientes (
    id VARCHAR(9) PRIMARY KEY,
    vendedor_id VARCHAR(9),
    nombre VARCHAR(15),
    ciudad VARCHAR(30),
    gastado DECIMAL(11,2),
    CONSTRAINT fk_cliente_vendedor FOREIGN KEY (vendedor_id) REFERENCES Vendedores(id)
)ENGINE=InnoDB;

INSERT INTO Clientes VALUES ("3F4R","33GG","Alejandro","Cádiz",70000);
INSERT INTO Clientes VALUES ("5Z4R","33GG","José","San Fernando",20000);
INSERT INTO Clientes VALUES ("88T4","99FR","Elena","Algeciras",35000);
INSERT INTO Clientes VALUES ("96SW","HH53","Pilar","Zaragoza",47000);


CREATE TABLE Encargos (
    id VARCHAR(9),
    coche_id INT(4) AUTO_INCREMENT,
    cliente_id VARCHAR(9) AUTO_INCREMENT,
    fecha DATE,
    PRIMARY KEY(id, coche_id, cliente_id),
    CONSTRAINT fk_encargo_coche FOREIGN KEY (coche_id) REFERENCES Coches (id),
    CONSTRAINT fk_encargo_cliente FOREIGN KEY (cliente_id) REFERENCES Clientes (id)
)ENGINE=InnoDB;

INSERT INTO Encargos VALUES ("95KK",null,"3F4R","2017-04-16");
INSERT INTO Encargos VALUES ("PF65",null,"5Z4R","2016-07-05");
INSERT INTO Encargos VALUES ("8U76",null,"88T4","2018-11-18");
INSERT INTO Encargos VALUES ("PPT3",null,"96SW","2018-09-16");