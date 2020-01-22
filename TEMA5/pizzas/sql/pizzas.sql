drop database if exists pizzas;
create database pizzas;
use pizzas;

create table if not exists oferta(
id int(11) not null auto_increment,
titulo varchar(200) not null,
imagen varchar(100) not null,
descripcion varchar(255) not null,
primary key (id)
)Engine=InnoDB;
