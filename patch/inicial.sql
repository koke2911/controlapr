CREATE TABLE usuarios (
  id INT(10) NOT NULL AUTO_INCREMENT,
  rut VARCHAR(255) NOT NULL,
  clave VARCHAR(255) DEFAULT NULL,
  nombre VARCHAR(255) NOT NULL,
  apellidos VARCHAR(255) NOT NULL,
  fecha_nacimiento DATE NOT NULL,
  contacto VARCHAR(255) DEFAULT NULL,
  email VARCHAR(255) NOT NULL,
  tipo VARCHAR(255) DEFAULT NULL,
  estado INT(10) DEFAULT 0,
  fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP() NOT NULL,  
  PRIMARY KEY (id)
);

INSERT INTO usuarios (rut, clave, nombre, apellidos, fecha_nacimiento, contacto, email, tipo, estado, fecha_creacion)
VALUES ('17525457-9', 'c0e21b77a35c69aaf01cb8bb7a3f3194', 'Victor', 'Martinez Zamora', '1991-11-29', '975143052', 'koke1592@gmail.com', 'U', 1, '1991-11-21 00:00:00');


update usuarios set clave='c0e21b77a35c69aaf01cb8bb7a3f3194' where rut='17525457-9';



CREATE TABLE SSR (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ssr VARCHAR(255) NOT NULL,
    rut VARCHAR(255),
    region VARCHAR(255),
    comuna VARCHAR(255),
    email VARCHAR(255),
    direccion VARCHAR(255),
    presidente VARCHAR(255),
    tesorero VARCHAR(255),
    secretario VARCHAR(255),
    nombre VARCHAR(255),
    contacto VARCHAR(255),
    nombre2 VARCHAR(255),
    contacto2 VARCHAR(255),
    arranques int,
    foto_portada VARCHAR(255),
    medidores int,
    estado int,
    fecha_ingreso date,
    usu_ingreso varchar(255)
);





create table comunas (id int,nombre varchar(255),id_provincia int,created_at date,updated_at date,deleted_at date);

Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (1,'Iquique',3,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (2,'Alto Hospicio',3,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (3,'Pozo Almonte',4,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (4,'Camiña',4,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (5,'Colchane',4,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (6,'Huara',4,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (7,'Pica',4,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (8,'Antofagasta',5,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (9,'Mejillones',5,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (10,'Sierra Gorda',5,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (11,'Tal-tal',5,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (12,'Calama',6,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (13,'Ollagüe',6,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (14,'San Pedro de Atacama',6,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (15,'Tocopilla',7,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (16,'María Elena',7,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (17,'Copiapó',8,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (18,'Caldera',8,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (19,'Tierra Amarilla',8,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (20,'Chañaral',9,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (21,'Diego de Almagro',9,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (22,'Vallenar',10,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (23,'Alto del Carmen',10,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (24,'Freirina',10,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (25,'Huasco',10,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (26,'La Serena',11,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (27,'Coquimbo',11,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (28,'Andacollo',11,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (29,'La Higuera',11,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (30,'Paihuano',11,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (31,'Vicuña',11,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (32,'Illapel',12,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (33,'Canela',12,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (34,'Los Vilos',12,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (35,'Salamanca',12,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (36,'Ovalle',13,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (37,'Combarbalá',13,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (38,'Monte Patria',13,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (39,'Punitaqui',13,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (40,'Río Hurtado',13,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (41,'Valparaíso',14,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (42,'Casablanca',14,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (43,'Concón',14,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (44,'Juan Fernández',14,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (45,'Puchuncaví',14,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (46,'Quintero',14,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (47,'Viña del Mar',14,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (48,'Isla de Pascua',15,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (49,'Los Andes',16,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (50,'Calle Larga',16,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (51,'Rinconada',16,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (52,'San Esteban',16,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (53,'La Ligua',17,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (54,'Cabildo',17,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (55,'Papudo',17,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (56,'Petorca',17,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (57,'Zapallar',17,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (58,'Quillota',18,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (59,'La Calera',18,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (60,'Hijuelas',18,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (61,'La Cruz',18,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (62,'Nogales',18,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (63,'San Antonio',19,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (64,'Algarrobo',19,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (65,'Cartagena',19,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (66,'El Quisco',19,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (67,'El Tabo',19,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (68,'Santo Domingo',19,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (69,'San Felipe',20,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (70,'Catemu',20,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (71,'Llay Llay',20,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (72,'Panquehue',20,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (73,'Putaendo',20,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (74,'Santa María',20,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (75,'Quilpué',21,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (76,'Limache',21,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (77,'Olmué',21,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (78,'Villa Alemana',21,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (79,'Rancagua',22,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (80,'Codegua',22,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (81,'Coinco',22,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (82,'Coltauco',22,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (83,'Doñihue',22,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (84,'Graneros',22,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (85,'Las Cabras',22,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (86,'Machalí',22,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (87,'Malloa',22,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (88,'Mostazal',22,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (89,'Olivar',22,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (90,'Peumo',22,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (91,'Pichidegua',22,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (92,'Quinta de Tilcoco',22,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (93,'Rengo',22,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (94,'Requínoa',22,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (95,'San Vicente',22,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (96,'Pichilemu',23,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (97,'La Estrella',23,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (98,'Litueche',23,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (99,'Marchihue',23,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (100,'Navidad',23,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (101,'Paredones',23,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (102,'San Fernando',24,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (103,'Chépica',24,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (104,'Chimbarongo',24,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (105,'Lolol',24,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (106,'Nancagua',24,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (107,'Palmilla',24,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (108,'Peralillo',24,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (109,'Placilla',24,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (110,'Pumanque',24,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (111,'Santa Cruz',24,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (112,'Talca',25,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (113,'Constitución',25,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (114,'Curepto',25,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (115,'Empedrado',25,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (116,'Maule',25,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (117,'Pelarco',25,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (118,'Pencahue',25,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (119,'Río Claro',25,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (120,'San Clemente',25,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (121,'San Rafael',25,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (122,'Cauquenes',26,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (123,'Chanco',26,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (124,'Pelluhue',26,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (125,'Curicó',27,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (126,'Hualañé',27,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (127,'Licantén',27,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (128,'Molina',27,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (129,'Rauco',27,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (130,'Romeral',27,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (131,'Sagrada Familia',27,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (132,'Teno',27,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (133,'Vichuquén',27,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (134,'Linares',28,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (135,'Colbún',28,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (136,'Longaví',28,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (137,'Parral',28,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (138,'Retiro',28,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (139,'San Javier',28,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (140,'Villa Alegre',28,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (141,'Yerbas Buenas',28,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (142,'Concepción',29,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (143,'Coronel',29,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (144,'Chiguayante',29,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (145,'Florida',29,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (146,'Hualqui',29,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (147,'Lota',29,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (148,'Penco',29,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (149,'San Pedro de la Paz',29,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (150,'Santa Juana',29,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (151,'Talcahuano',29,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (152,'Tomé',29,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (153,'Hualpén',29,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (154,'Lebu',30,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (155,'Arauco',30,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (156,'Cañete',30,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (157,'Contulmo',30,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (158,'Curanilahue',30,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (159,'Los Álamos',30,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (160,'Tirúa',30,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (161,'Los Ángeles',31,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (162,'Antuco',31,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (163,'Cabrero',31,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (164,'Laja',31,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (165,'Mulchén',31,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (166,'Nacimiento',31,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (167,'Negrete',31,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (168,'Quilaco',31,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (169,'Quilleco',31,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (170,'San Rosendo',31,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (171,'Santa Bárbara',31,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (172,'Tucapel',31,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (173,'Yumbel',31,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (174,'Alto Biobío',31,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (175,'Chillán',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (176,'Bulnes',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (177,'Cobquecura',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (178,'Coelemu',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (179,'Coihueco',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (180,'Chillán Viejo',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (181,'El Carmen',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (182,'Ninhue',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (183,'Ñiquén',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (184,'Pemuco',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (185,'Pinto',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (186,'Portezuelo',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (187,'Quillón',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (188,'Quirihue',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (189,'Ránquil',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (190,'San Carlos',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (191,'San Fabián',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (192,'San Ignacio',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (193,'San Nicolás',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (194,'Treguaco',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (195,'Yungay',32,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (196,'Temuco',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (197,'Carahue',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (198,'Cunco',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (199,'Curarrehue',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (200,'Freire',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (201,'Galvarino',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (202,'Gorbea',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (203,'Lautaro',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (204,'Loncoche',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (205,'Melipeuco',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (206,'Nueva Imperial',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (207,'Padre las Casas',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (208,'Perquenco',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (209,'Pitrufquén',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (210,'Pucón',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (211,'Saavedra',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (212,'Teodoro Schmidt',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (213,'Toltén',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (214,'Vilcún',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (215,'Villarrica',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (216,'Cholchol',33,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (217,'Angol',34,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (218,'Collipulli',34,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (219,'Curacautín',34,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (220,'Ercilla',34,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (221,'Lonquimay',34,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (222,'Los Sauces',34,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (223,'Lumaco',34,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (224,'Purén',34,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (225,'Renaico',34,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (226,'Traiguén',34,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (227,'Victoria',34,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (228,'Puerto Montt',37,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (229,'Calbuco',37,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (230,'Cochamó',37,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (231,'Fresia',37,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (232,'Frutillar',37,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (233,'Los Muermos',37,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (234,'Llanquihue',37,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (235,'Maullín',37,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (236,'Puerto Varas',37,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (237,'Castro',38,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (238,'Ancud',38,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (239,'Chonchi',38,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (240,'Curaco de Vélez',38,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (241,'Dalcahue',38,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (242,'Puqueldón',38,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (243,'Queilén',38,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (244,'Quellón',38,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (245,'Quemchi',38,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (246,'Quinchao',38,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (247,'Osorno',39,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (248,'Puerto Octay',39,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (249,'Purranque',39,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (250,'Puyehue',39,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (251,'Río Negro',39,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (252,'San Juan de la Costa',39,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (253,'San Pablo',39,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (254,'Chaitén',40,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (255,'Futaleufú',40,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (256,'Hualaihué',40,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (257,'Palena',40,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (258,'Coyhaique',41,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (259,'Lago Verde',41,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (260,'Aysén',42,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (261,'Cisnes',42,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (262,'Guaitecas',42,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (263,'Cochrane',43,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (264,'O''Higgins',43,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (265,'Tortel',43,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (266,'Chile Chico',44,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (267,'Río Ibáñez',44,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (268,'Punta Arenas',45,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (269,'Laguna Blanca',45,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (270,'Río Verde',45,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (271,'San Gregorio',45,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (272,'Cabo de Hornos',46,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (273,'Antártica',46,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (274,'Porvenir',47,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (275,'Primavera',47,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (276,'Timaukel',47,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (277,'Natales',48,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (278,'Torres del Paine',48,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (279,'Santiago',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (280,'Cerrillos',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (281,'Cerro Navia',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (282,'Conchalí',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (283,'El Bosque',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (284,'Estación Central',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (285,'Huechuraba',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (286,'Independencia',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (287,'La Cisterna',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (288,'La Florida',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (289,'La Granja',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (290,'La Pintana',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (291,'La Reina',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (292,'Las Condes',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (293,'Lo Barnechea',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (294,'Lo Espejo',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (295,'Lo Prado',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (296,'Macul',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (297,'Maipú',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (298,'Ñuñoa',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (299,'Pedro Aguirre Cerda',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (300,'Peñalolén',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (301,'Providencia',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (302,'Pudahuel',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (303,'Quilicura',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (304,'Quinta Normal',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (305,'Recoleta',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (306,'Renca',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (307,'San Joaquín',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (308,'San Miguel',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (309,'San Ramón',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (310,'Vitacura',49,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (311,'Puente Alto',50,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (312,'Pirque',50,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (313,'San José de Maipo',50,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (314,'Colina',51,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (315,'Lampa',51,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (316,'Tiltil',51,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (317,'San Bernardo',52,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (318,'Buin',52,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (319,'Calera de Tango',52,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (320,'Paine',52,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (321,'Melipilla',53,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (322,'Alhué',53,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (323,'Curacaví',53,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (324,'María Pinto',53,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (325,'San Pedro',53,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (326,'Talagante',54,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (327,'El Monte',54,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (328,'Isla de Maipo',54,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (329,'Padre Hurtado',54,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (330,'Peñaflor',54,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (331,'Valdivia',35,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (332,'Corral',35,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (333,'Lanco',35,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (334,'Los Lagos',35,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (335,'Máfil',35,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (336,'Mariquina',35,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (337,'Paillaco',35,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (338,'Panguipulli',35,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (339,'La Unión',36,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (340,'Futrono',36,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (341,'Lago Ranco',36,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (342,'Río Bueno',36,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (343,'Arica',1,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (344,'Camarones',1,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (345,'Putre',2,null,null,null);
Insert into comunas (id,nombre,id_provincia,created_at,updated_at,deleted_at) values (346,'General Lagos',2,null,null,null);




create table seguimiento(
     id INT AUTO_INCREMENT PRIMARY KEY,
     fecha date,
     ssr int,
     nombre_contacto varchar(150),
     cargo varchar(150),
     contacto varchar(150),
     problema varchar(2000),
     solucion varchar(2000),
     estado_seg varchar(150),
     estado int,
     fecha_ingreso date,
     usu_ingreso varchar(255));