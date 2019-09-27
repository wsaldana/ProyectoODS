DROP DATABASE IF EXISTS db_ODS;
CREATE DATABASE db_ODS;
USE db_ODS;

DROP TABLE IF EXISTS usuario;
CREATE TABLE usuario(
	idUser	CHAR(5)		NOT NULL  PRIMARY KEY,
	usernm 	VARCHAR(50)	NOT NULL,
	correo	VARCHAR(50)	NOT NULL,
	passwrd	VARCHAR(50)	NOT NULL
);

DROP TABLE IF EXISTS propuesta;
CREATE TABLE propuesta(
	idPropuesta CHAR(5) NOT NULL PRIMARY KEY,
	nombre		VARCHAR(50) NOT NULL,
	ods			VARCHAR(50) NOT NULL,
	detalles	VARCHAR(50) NOT NULL,
	progreso	CHAR(5) NOT NULL
);

INSERT INTO propuesta VALUES('p04','Mejorar escuelas','Educacion','Donativos para las escuelas y que puedan mejorar','5%');

INSERT INTO propuesta VALUES('p01','Erradicar Pobreza','Pobreza','Crear campañas para recaudar fondos y ayudar a las personas con bajos recurso','2.5%');

INSERT INTO propuesta VALUES('p02','Donar Comida','Hambre','Realizar kermeses, donde el dinero que se obtenga sirva para surtir listas y darselas a las personas deambulantes, pobres, entre otros.','0%');

INSERT INTO propuesta VALUES('p03','Saludables','Salud','Realizar encuestas para saber las medicinas que más se necesitan en los hospitales y realizar donativos','5%');

INSERT INTO propuesta VALUES('p05','Todos por igual','Igualdad','Realizar charlas donde asistan todo tipo de personas y relizar actividades, para romper la barrera que existe entre las personas','5%');

INSERT INTO propuesta VALUES('p06','Sana el agua a todo costo','Saneamiento','Realizar actividades de limpieza en los lagos, rios y mares alrededor de Guatemala, también implemento de filtros dentro de ellos','5%');

INSERT INTO propuesta VALUES('p07','Energía para todos','Energía','Lograr que la mayoria de personas reciba energía renovable y así cuidar el ambiente.','5%');

INSERT INTO propuesta VALUES('p08','Mejora tu economia','Crecimiento','Realizar charlas donde se platique sobre como lograr un crecimiento en las finanzas y economia, para mejorar la calidad de vida','10%');

INSERT INTO propuesta VALUES('p09','Infraestructura segura','Infraestructura','Lograr que las infraestructura tengan inovación para mejorar el ambiente hacia los clientes.','10%');

INSERT INTO propuesta VALUES('p010','No existen desiguales','Desigualdad','Organizar actividades y charlas donde se ponga en practica, la convivencia entre personas de diferentes estilos de vida','5%');

INSERT INTO propuesta VALUES('p011','Asentamientos para todos','Asentamientos','Aumentar la seguridad en los asentamientos publicos','5%');

INSERT INTO propuesta VALUES('p012','Produccion responsable','Produccion','Lograr que agarren conciencia sobre los recursos del pais, los cuales son limitados','3.5%');

INSERT INTO propuesta VALUES('p013','Mejoramiento del Clima','Clima','Donativos para mejorar los investigadores del clima, para encontrar soluciones y lograr implementarlas','2.5%');

INSERT INTO propuesta VALUES('p014','Conservar es lo mejor','Conservacion','Lograr preservar los ambientes maritimos, asignando cierta seguridad a las areas.','8.5%');

INSERT INTO propuesta VALUES('p015','Proteger es lo mas importante','Proteger','Asignar seguridad a la fauna, recurso, entre otros hacia las zonas de bosque y explanada','3.5%');

INSERT INTO propuesta VALUES('p016','Promover es el futuro','Promover','Realizare charlas sobre la paz, injusticias, y solidaridad hacia los jovenes en areas rurales y urbanas.','2.5%');

INSERT INTO propuesta VALUES('p017','Fortaleciendo el Pais','Fortalecer','Lograr consensos y poder hacer alinzas con paises vecinos','2.5%');

SELECT * FROM propuesta;

SELECT * FROM usuario;