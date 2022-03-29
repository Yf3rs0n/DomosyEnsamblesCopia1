create database domosyensambles;
use domosyensambles;

create table persona
(id_cedula int primary key, /*Se quito el auto-increment*/
nombre varchar(20) not null,
apellido varchar(20) not null,
num_telefono varchar(20) not null,
num_celular varchar(25) not null,
direccion varchar(50) not null);

create table rol_usuario
(id_rol int auto_increment primary key,
tipo_rol varchar(15) not null);

create table usuario
(id_usuario int auto_increment primary key,
correo varchar(50) not null,
contraseña varchar(50) not null,
hora_inicio_sesion time,
hora_desconexion time,
persona_usu int,
rol_usu int,
foreign key (rol_usu) references rol_usuario(id_rol),
foreign key (persona_usu) references persona(id_cedula));

create table visita
(id_visita int auto_increment primary key,
disp_fecha date not null,
disp_hora time not null,
departamento varchar(25) not null,
ciudad varchar(25) not null,
visita_usuario int,
foreign key (visita_usuario) references usuario(id_usuario));

create table postulacion_empleo
(id_empleo int auto_increment primary key,
hoja_vida longblob, /*Se cambio a permitir nulos*/
especializacion varchar(50) not null,
usuario_empleo int,
foreign key (usuario_empleo) references usuario(id_usuario));

create table contrato
(id_contrato int auto_increment primary key,
servicio_instalacion varchar(50) not null,
tipo_pago varchar(50) not null,
detalles_agregados varchar(50),
usuario_contrato int,
foreign key (usuario_contrato) references usuario(id_usuario));

create table detalles /*Los campos permiten nulos ya que este documento lo registra el administrador*/
(id_detalles_cont int auto_increment primary key,
materiales varchar(50),
datos_encargado varchar(50),
fecha_inicio date,
fecha_entrega date,
contrato_detalles int,
foreign key (contrato_detalles) references contrato(id_contrato));

call Ingresar_rol_usuario("Usuario");/*El rol 1 es usuario*/
call Ingresar_rol_usuario("Administrador");/*El rol 2 es administrador*/

call Ingresar_personas_usuarios('1000787374', "Yeferson", "Agudelo", "2234566", "315667865", "Calle 70 # 56 77", "Yfagudelo@gmail.com", "yf7766", '11:00', '12:00', 2, 1000787374);
Call Ingresar_personas_usuarios('1000432244' ,"Luis", "Hernandez", "22346565", "321254213", "Calle 43 # 54 23", "LuisH@gmail.com", "Luis23", '12:00', '13:00', 1, 1000432244);
Call Ingresar_personas_usuarios('1000555446' ,"Andres", "Perez", "243454766", "32128451", "Carrera 29 # 81 39", "Andresp008", "Andresp09", '13:00', '14:00', 1, 1000555446);
Call Ingresar_personas_usuarios('1000876755' ,"Juan Jose", "Gomez", "23765484", "3212377457", "Calle 59 # 75 79", "JJgomecito@gmail.com", "Jjanjose", '14:00', '15:00', 1, 1000876755);
Call Ingresar_personas_usuarios('1000788643' ,"Cristian", "Zapata", "2433466", "3256748958", "Calle 45 # 85 29", "Cristianzap@gmail.com", "Crszpt65", '16:00', '17:00', 1, 1000788643);
Call Ingresar_personas_usuarios('1024334556' ,"Carlos", "Roman", "24234769", "325665438", "Calle 21 # 25 19", "Croman@gmail.com", "rrmn12", '18:00', '19:00', 1, 1024334556);

call Ingresar_visita('2022-03-17', '14:00', "Antioquia", "Medellín", 2);
call Ingresar_visita('2022-01-11', '15:00', "Valle del cauca", "Cali", 3);
call Ingresar_visita('2022-02-27', '16:00', "Antioquia", "Medellín", 4);
call Ingresar_visita('2022-07-05', '17:00', "Antioquia", "Medellín", 5);
call Ingresar_visita('2022-10-15', '20:00', "Antioquia", "Medellín", 6);

call Ingresar_empleo("Cerrajero", 2);
call Ingresar_empleo("Pintor", 3);
call Ingresar_empleo("Ingeniero de estructuras", 4);

call Ingresar_contrato("Domo en acrilico", "Efectivo", "Domo con estructura circular", 3);
call Ingresar_contrato("Estructura en acero inoxidable", "Tarjeta de credito", "Ninguno", 5);
call Ingresar_contrato("Puerta en acero", "Efectivo", "Puerta de color marrón", 6);

call Ingresar_detalles('Barras en acero', 'Danilo Becerra', '2022-03-25', '2022-03-31', 1);

/*Vistas*/
select * from  usuarios_registrados;
select * from  contratos_a_realizar;
select * from visitas_agendadas;
select * from trigger_visita;

/*Triggers*/
create table trigger_visita
(id_trigger int auto_increment primary key,
registro varchar(50),
fecha_registro datetime default current_timestamp);

/*Registro de ejemplo para visualizar el trigger creado*/
call Ingresar_visita('2022-06-21', '11:00', "Antioquia", "Medellín", 6);