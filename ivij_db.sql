CREATE DATABASE ivij;

USE ivij;

CREATE TABLE persons(
	id_person INT NOT NULL AUTO_INCREMENT,
    type_dni ENUM('DNI', 'Pasaporte', 'Partida de Nacimiento') DEFAULT 'DNI',
    dni INT NOT NULL UNIQUE,
    name_person VARCHAR(45) NOT NULL,
    surname VARCHAR(100) NOT NULL, 
    sex BOOLEAN NOT NULL,
    birthdate DATE NOT NULL,
    nationality ENUM('Argentina', 'Brasil', 'Uruguay', 'Paraguay', 'Chile', 'Bolivia', 'Peru', 'Colombia', 'Venezuela'),
    adress_house VARCHAR(100)
);

CREATE TABLE responsibles(
	id_responsible INT NOT NULL AUTO_INCREMENT,
    civil_estatus ENUM('Soltero', 'Casado', 'Conviviendo', 'Pareja', 'Divorciado', 'Separado', 'Viudo') DEFAULT 'Soltero',
    phone INT, 
    help_responsible JSON,
    questions_responsible JSON,
    municipal_procedures BOOLEAN, -- tramites con la muni
    procedures_type LONGTEXT
);

CREATE TABLE kids(
	id_kid INT NOT NULL AUTO_INCREMENT,
    nickname VARCHAR(60), -- apodo
    
    relation_boss ENUM('Jefe/a', 'Conyuge', 'Hijo/a', 'Yerno/Nuera', 'Nieto/a', 'Hermano/a', 'Familiar', 'No Familiar', 'Suegro', 'Hijastro/a') DEFAULT NULL, -- (0-18) relacion con el jefe del hogar
    physical_activity BOOLEAN, -- (0-18) realiza actividad fisica
    hours_physical INT, -- (0-18) horas que dedica a hacer actividad fisica
    community BOOLEAN NOT NULL, -- (0-18) pertenece a alguna comunidad
    community_type ENUM('Deportivo', 'Cultural', 'Ayuda Social', 'Religioso', 'Comunitario', 'Otro') DEFAULT NULL, -- ((0-18) Tipos de comunidades
    friends BOOLEAN NOT NULL, -- (0-18) tiene amigos
    children BOOLEAN NOT NULL, -- (0-18) tiene hijos
    pregnat BOOLEAN NOT NULL-- (0-18) embarazada
);

CREATE TABLE schools(
	id_school INT NOT NULL AUTO_INCREMENT,
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
    qualification_school INT -- calificacion en la escuela
);

CREATE TABLE healths(
	id_health INT NOT NULL AUTO_INCREMENT,
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
    antitetanic BOOLEAN NOT NULL DEFAULT FALSE -- antitetanica en los ultimos 5 años
);

CREATE TABLE houses(
	id_house INT NOT NULL AUTO_INCREMENT,
    house_type VARCHAR(30) NOT NULL, -- Tipo de Casa (casa, depto, pieza...)
    structure_type VARCHAR(30) NOT NULL, -- de que esta construida (ladrillos, madera)
    property_type VARCHAR(30), -- estatus de la vivienda
    situation_owner VARCHAR(60), -- en que situacion esta la vivienda (es propia, sucesion)
    rooms INT NOT NULL DEFAULT 1, -- cantidad de piezas
    beds INT NOT NULL DEFAULT 1, -- cantidad de camas
    floor VARCHAR(30), -- tipo de piso (ceramica, contrapiso, tierra, etc)
    home_in_house INT NOT NULL DEFAULT 1, -- hogares dentro de la misma vivienda
    about_home JSON NOT NULL -- acerca de la vivienda
);

CREATE TABLE homes(
	id_home INT NOT NULL AUTO_INCREMENT,
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
    help_home JSON -- ayuda al hogar
);

CREATE TABLE incomes(
	id_income INT NOT NULL AUTO_INCREMENT,
    works BOOLEAN NOT NULL DEFAULT FALSE, -- trabaja el adulto
    occupation VARCHAR(50), -- ocupacion del adulto
    hiring_type ENUM('Relación de Dependencia', 'Monotributista', 'Contratado', 'Informal (Mensual)', 'Informal (Semanal)', 'Jornal', 'Changarin'),
    receive_plan BOOLEAN NOT NULL, -- recibe plan social
    plan_name VARCHAR(60), -- nombre del plan
    live_plan BOOLEAN NOT NULL, -- vive del plan
    another_plan BOOLEAN NOT NULL, -- alguien mas cobra plan en el hogar
    total_contributors INT NOT NULL DEFAULT 1, -- total de contribuyentes 
    
    

);