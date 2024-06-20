CREATE SCHEMA pruebita;
USE SCHEMA pruebita;
CREATE TABLE Usuarios(
Documento varchar(10) not null primary key,
Contrasena varchar(20) not null,
Nombre varchar(20) not null,
Fec_nac datetime not null,
Foto varchar(200) null

);
use pruebita;

select * from Usuarios;


