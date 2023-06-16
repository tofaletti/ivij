CREATE DATABASE ivij;
USE ivij;


CREATE TABLE programs(
	id_program INT NOT NULL AUTO_INCREMENT,
    program_name VARCHAR(60), -- nombre del programa
    site VARCHAR(100), -- direccion o entidad fisica donde se realizan las actividades
    PRIMARY KEY (id_program)
);

CREATE TABLE persons(
	id_person INT NOT NULL AUTO_INCREMENT,
    type_dni ENUM('DNI', 'Pasaporte', 'Partida de Nacimiento') DEFAULT 'DNI',
    dni INT NOT NULL UNIQUE,
    name_person VARCHAR(45) NOT NULL,
    surname VARCHAR(100) NOT NULL, 
    sex BOOLEAN NOT NULL,
    birthdate DATE NOT NULL,
    nationality ENUM('Argentina', 'Brasil', 'Uruguay', 'Paraguay', 'Chile', 'Bolivia', 'Peru', 'Colombia', 'Venezuela'),
    adress_house VARCHAR(100),
	hood ENUM('Barrufaldi','Belgrano','Bella Vista Norte','Bella Vista Oeste','Bello Horizonte','Campo de Mayo','Colegio Máximo','Colibri','Constantini',
	'Cuartel Segundo','Don Alfonso','El Faro','El Tato','Ferroviario','La Estrella','La Gloria','La Guarida','La Manuelita','Mariló','Los Paraisos','Los Plátanos',
	'Macabi','María Rosa Mística','Mitre','Muñiz Norte','Muñiz Oeste','Obligado','Parque La Luz','Parque Mataldi','Parque San Ignacio','Parque San Miguel',
	'Parque Viela','San Ambrosio','San Antonio','San Ignacio','San Jorge','San Miguel Norte','San Miguel Oeste','Santa Anita','Santa Brígida','Santa Clara',
	'Santa María','Sarmiento','Trujui','Plazoleta','El polo', 'Madre Esperanza','Rosa Mistica','Otro'),
    PRIMARY KEY (id_person)
);

CREATE TABLE responsibles(
	id_responsible INT NOT NULL AUTO_INCREMENT,
    id_person INT,
    civil_estatus ENUM('Soltero', 'Casado', 'Conviviendo', 'Pareja', 'Divorciado', 'Separado', 'Viudo') DEFAULT 'Soltero',
    phone INT, 
    help_responsible JSON,
    questions_responsible JSON,
    municipal_procedures BOOLEAN, -- tramites con la muni
    procedures_type LONGTEXT,
    PRIMARY KEY (id_responsible),
    FOREIGN KEY (id_person) REFERENCES persons (id_person)
);

CREATE TABLE kids(
	id_kid INT NOT NULL AUTO_INCREMENT,
    id_person INT,
    id_responsible INT,
    id_program INT,
    nickname VARCHAR(60), -- apodo
    -- investigar la construccion
    help_kid JSON NOT NULL,
    ambit_kid JSON NOT NULL,
    child_labor JSON NOT NULL, -- trabajo infantil
    breeding JSON NOT NULL,
    -- /investigar la contruccion
    relation_boss ENUM('Jefe/a', 'Conyuge', 'Hijo/a', 'Yerno/Nuera', 'Nieto/a', 'Hermano/a', 'Familiar', 'No Familiar', 'Suegro', 'Hijastro/a') DEFAULT NULL, -- (0-18) relacion con el jefe del hogar
    physical_activity BOOLEAN, -- (0-18) realiza actividad fisica
    hours_physical INT, -- (0-18) horas que dedica a hacer actividad fisica
    community BOOLEAN NOT NULL, -- (0-18) pertenece a alguna comunidad
    community_type ENUM('Deportivo', 'Cultural', 'Ayuda Social', 'Religioso', 'Comunitario', 'Otro') DEFAULT NULL, -- ((0-18) Tipos de comunidades
    friends BOOLEAN NOT NULL, -- (0-18) tiene amigos
    children BOOLEAN NOT NULL, -- (0-18) tiene hijos
    pregnat BOOLEAN NOT NULL, -- (0-18) embarazada
    PRIMARY KEY (id_kid),
    FOREIGN KEY (id_person) REFERENCES persons (id_person),
    FOREIGN KEY (id_responsible) REFERENCES responsibles (id_responsible),
    FOREIGN KEY (id_program) REFERENCES programs (id_program)
);



CREATE TABLE schools(
	id_school INT NOT NULL AUTO_INCREMENT,
    id_kid INT,
    assistence BOOLEAN NOT NULL, -- (0-18) asiste a la escuela 
    reason LONGTEXT, -- (0-18) razon por la cual no asiste
    management VARCHAR(10), -- (0-18) gestion publica o privada
    name_school VARCHAR(100),
    cycle_type ENUM('Jardin', 'Primario', 'Secundario') DEFAULT NULL,
    grade_cycle ENUM('Primero', 'Segundo', 'Tercero', 'Cuarto', 'Quinto', 'Sexto', 'Septimo') DEFAULT NULL,
    turn ENUM('Mañana', 'Tarde', 'Noche') DEFAULT NULL,
	absentia INT, -- cantidad de faltas a la escuela
    bullying BOOLEAN NOT NULL, -- (0-18) recibe bullying
    bullying_quantity INT, -- (0-18) cantidad de bullying
    consideration_student INT DEFAULT 1, -- (0-18) como se considera como estudiante
    consideration_school INT DEFAULT 1,  -- (0-18) como considera a la escuela
    time_study ENUM('Menos de una hora por semana', 'Entre 1 y 3', 'Entre 3 y 6', 'Entre 6 y 9', 'Más de 9 horas a la semana', 'No dedica') DEFAULT 'No dedica', -- (0-18) tipo que dedica a estudiar
    location_study BOOLEAN NOT NULL DEFAULT FALSE, -- (0-18) tiene lugar para estudiar
    qualification_school INT, -- calificacion en la escuela
    PRIMARY KEY (id_school),
    FOREIGN KEY (id_kid) REFERENCES kids (id_kid) 
);

CREATE TABLE healths(
	id_health INT NOT NULL AUTO_INCREMENT,
    id_kid INT,
    coverage_type ENUM('Obra Social', 'Prepaga', 'Mutual', 'Sistema de Emergencias Pago', 'Niguna'), -- Tipo de cobertura en salud
    coverage_name VARCHAR(100), -- nombre de la cobertura
    pediatric_control ENUM('Cada un año o menos', 'Cada uno o dos años', 'Cada tres años o más'), -- cada cuanto realiza controles pediatricos
    controls JSON NOT NULL, -- realiza controles
    disability BOOLEAN NOT NULL DEFAULT FALSE, -- es discapacitado
    disability_certificate BOOLEAN NOT NULL DEFAULT TRUE, -- tiene certificado de discapacidad
    disability_type VARCHAR(100), -- tipo de discapacidad
    clinic_name VARCHAR(100), -- caps o clinica donde se hace atender
    difficulties JSON NOT NULL, -- dificultades en cuestiones de  salud
    vaccine BOOLEAN NOT NULL DEFAULT TRUE, -- vacunas al dia
    antitetanic BOOLEAN NOT NULL DEFAULT FALSE, -- antitetanica en los ultimos 5 años
    PRIMARY KEY (id_health),
    FOREIGN KEY (id_kid) REFERENCES kids (id_kid)
);

CREATE TABLE houses(
	id_house INT NOT NULL AUTO_INCREMENT,
    id_person INT,
    house_type VARCHAR(30) NOT NULL, -- Tipo de Casa (casa, depto, pieza...)
    structure_type VARCHAR(30) NOT NULL, -- de que esta construida (ladrillos, madera)
    property_type VARCHAR(30), -- estatus de la vivienda
    situation_owner VARCHAR(60), -- en que situacion esta la vivienda (es propia, sucesion)
    rooms INT NOT NULL DEFAULT 1, -- cantidad de piezas
    beds INT NOT NULL DEFAULT 1, -- cantidad de camas
    floor VARCHAR(30), -- tipo de piso (ceramica, contrapiso, tierra, etc)
    home_in_house INT NOT NULL DEFAULT 1, -- hogares dentro de la misma vivienda
    about_home JSON NOT NULL, -- acerca de la vivienda
    PRIMARY KEY (id_house),
    FOREIGN KEY (id_person) REFERENCES persons (id_person)
);

CREATE TABLE homes(
	id_home INT NOT NULL AUTO_INCREMENT,
    id_house INT,
    inhabitants INT NOT NULL DEFAULT 1,
    inhabitants_miniors INT,
	foods INT, -- cantidad de comidas por día
    busted BOOLEAN NOT NULL DEFAULT FALSE, -- algun habitante esta privado de su libertad
    contagious_disease BOOLEAN NOT NULL DEFAULT FALSE, -- convive alguien con una enfermedad contagiosa
    sustances_use BOOLEAN NOT NULL DEFAULT FALSE, -- consume sustancias
    health_mental BOOLEAN NOT NULL DEFAULT FALSE, -- tiene problemas de salud mental
    disability BOOLEAN NOT NULL DEFAULT FALSE, -- hay discapacitados en el hogar
    mourning BOOLEAN NOT NULL DEFAULT FALSE, -- atraviesa un luto
    domestic_violence BOOLEAN NOT NULL DEFAULT FALSE, -- hay violencia facimiar
    help_home JSON, -- ayuda al hogar
    PRIMARY KEY(id_home),
    FOREIGN KEY (id_house) REFERENCES houses (id_house)
);

CREATE TABLE incomes(
	id_income INT NOT NULL AUTO_INCREMENT,
    id_responsible INT,
    works BOOLEAN NOT NULL DEFAULT FALSE, -- trabaja el adulto
    occupation VARCHAR(50), -- ocupacion del adulto
    hiring_type ENUM('Relación de Dependencia', 'Monotributista', 'Contratado', 'Informal (Mensual)', 'Informal (Semanal)', 'Jornal', 'Changarin'),
    receive_plan BOOLEAN NOT NULL, -- recibe plan social
    plan_name VARCHAR(60), -- nombre del plan
    live_plan BOOLEAN NOT NULL, -- vive del plan
    another_plan BOOLEAN NOT NULL, -- alguien mas cobra plan en el hogar
    total_contributors INT NOT NULL DEFAULT 1, -- total de contribuyentes 
	food_box BOOLEAN NOT NULL DEFAULT FALSE, -- recibe caja de comida
    qualification_income ENUM('Arriba de CBT', 'Debajo de CBT', 'Debajo CBA'), -- calificacion de los ingresos (cantidad de guita)
    PRIMARY KEY(id_income),
    FOREIGN KEY (id_responsible) REFERENCES responsibles (id_responsible)
);


CREATE TABLE interviewer(
	id_interviewer INT NOT NULL AUTO_INCREMENT,
    id_person INT,
    name_interviewer VARCHAR(60),
    suspicion JSON,
    observations LONGTEXT,
    PRIMARY KEY (id_interviewer),
    FOREIGN KEY (id_person) REFERENCES persons (id_person)
);