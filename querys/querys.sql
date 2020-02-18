use database baseYii;

Create table Usuario (
    id int AUTO_INCREMENT PRIMARY KEY,
    nombre varchar (255) not null,
    apellidos varchar(255),
    edad int (2) not null,
    telefono varchar (255) not null,
    correo varchar(255),
    fechaAlta date not null
);


CREATE TABLE 'country' (
'id' int AUTO_INCREMENT PRIMARY KEY,
'code' CHAR(2) NOT NULL ,
'name' CHAR(52) NOT NULL,
'population' INT(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO country VALUES ('AU','Australia',24016400);
INSERT INTO country VALUES ('BR','Brazil',205722000);
INSERT INTO country VALUES ('CA','Canada',35985751);
INSERT INTO country VALUES ('CN','China',1375210000);
INSERT INTO country VALUES ('DE','Germany',81459000);
INSERT INTO country VALUES ('FR','France',64513242);
INSERT INTO country VALUES ('GB','United Kingdom',65097000);
INSERT INTO country VALUES ('IN','India',1285400000);
INSERT INTO country VALUES ('RU','Russia',146519759);
INSERT INTO country VALUES ('US','United States',322976000);