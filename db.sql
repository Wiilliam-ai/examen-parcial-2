CREATE DATABASE examen_parcial;
use examen_parcial;


CREATE TABLE Ciudad
(
    id_ciudad INT AUTO_INCREMENT PRIMARY KEY,
    nombre_ciudad VARCHAR(30)
);

CREATE TABLE Museo(
    id_museo INT AUTO_INCREMENT PRIMARY KEY,
    nombre_museo VARCHAR(50) NOT NULL,
    direccion VARCHAR(50) NOT NULL,
    id_ciudad INT,
    fecha_fundacion DATE NOT NULL,
    descripcion VARCHAR(200) NOT NULL,
    estrellas INT(2) NOT NULL,
    FOREIGN KEY (id_ciudad) REFERENCES Ciudad(id_ciudad)
);



