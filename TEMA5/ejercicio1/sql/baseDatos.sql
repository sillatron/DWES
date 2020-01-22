create database if not exists usuarios_notas_bd;
use usuarios_notas_bd;

drop table if exists usuarios;
CREATE TABLE usuarios(
id int(255) auto_increment not null,
nombre varchar(100) not null,
apellidos varchar(100) not null,
email varchar(255) not null,
password varchar(255) not null,
fecha date not null,
constraint pk_usuarios primary key(id),
constraint un_email unique(email)
)Engine=InnoDB;

drop table if exists notas;
create table notas(
id int(255) auto_increment not null,
id_usuario int(255) not null,
titulo varchar(255) not null,
descripcion mediumtext,
fecha date not null,
constraint pk_notas primary key(id),
constraint fk_entrada_usuario foreign key(id_usuario) references usuarios(id) on delete cascade
)Engine=InnoDB;