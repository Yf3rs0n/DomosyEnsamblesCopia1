 use domosyensambles;
 
 /*Procedimientos almacenados de la tabla persona, registro de persona y usuario unificado*/
DELIMITER $$
Create Procedure Ingresar_personas_usuarios(
C_id_cedula int,
C_nombre varchar(20),
C_apellido varchar(20),
C_num_telefono varchar(20),
C_num_celular varchar(25),
C_direccion varchar(50),
C_correo varchar(50),
C_contraseña varchar(50),
C_hora_inicio_sesion time,
C_hora_desconexion time,
C_rol_usu int,
C_persona_usu int)
Begin
	Insert Into persona (id_cedula, nombre, apellido, num_telefono, num_celular, direccion) Values (C_id_cedula, C_nombre, C_apellido, C_num_telefono, C_num_celular, C_direccion);
	Insert Into usuario (correo, contraseña, hora_inicio_sesion, hora_desconexion, rol_usu, persona_usu) Values (C_correo, C_contraseña, C_hora_inicio_sesion,C_hora_desconexion, C_rol_usu, C_persona_usu);
End $$

DELIMITER $$
CREATE PROCEDURE Leer_personas ()
BEGIN
select * from persona;
END$$

DELIMITER $$
Create Procedure Actualizar_personas(
up_id_cedula int,
up_nombre varchar(20),
up_apellido varchar(20),
up_num_telefono varchar(20),
up_num_celular varchar(25),
up_direccion varchar(50))
Begin
	update persona set nombre=up_nombre, apellido=up_apellido, num_telefono=up_num_telefono, num_celular=up_num_celular, direccion=up_direccion where id_cedula=up_id_cedula;
End $$

DELIMITER $$
Create procedure Borrar_personas(
del_id_cedula int)
BEGIN
delete from persona where id_cedula = del_id_cedula;
END$$

 /*Procedimientos almacenados de la tabla usuario*/
DELIMITER $$
CREATE PROCEDURE Leer_usuarios ()
BEGIN
select * from usuario;
END$$

DELIMITER $$
Create Procedure Actualizar_usuario(
up_id_usuario int,
up_correo varchar(50),
up_contraseña varchar(50),
up_hora_inicio_sesion time,
up_hora_desconexion time,
up_rol_usu int,
up_persona_usu int)
Begin
	update usuario set correo=up_correo, contraseña=up_contraseña, hora_inicio_sesion=up_hora_desconexion, hora_desconexion=up_hora_desconexion, rol_usu=up_rol_usu, persona_usu=up_persona_usu where id_usuario=up_id_usuario;
End $$

DELIMITER $$
Create procedure Borrar_usuario(
del_id_usuario int)
BEGIN
delete from usuario where id_usuario = del_id_usuario;
END$$

/*Procedimientos almacenados de la tabla postulacion_empleo*/
DELIMITER $$
Create Procedure Ingresar_empleo(
C_especializacion varchar(50),
C_usuario_empleo int)
Begin
	Insert Into postulacion_empleo (especializacion, usuario_empleo) Values (C_especializacion, C_usuario_empleo);
End $$

DELIMITER $$
CREATE PROCEDURE Leer_empleo ()
BEGIN
select * from postulacion_empleo;
END$$

DELIMITER $$
Create Procedure Actualizar_empleo(
up_id_empleo int,
up_especializacion varchar(50),
up_usuario_empleo int)
Begin
	update postulacion_empleo set especializacion=up_especializacion, usuario_empleo=up_usuario_empleo where id_empleo=up_id_empleo;
End $$

DELIMITER $$
Create procedure Borrar_empleo(
del_id_empleo int)
BEGIN
delete from postulacion_empleo where id_empleo = del_id_empleo;
END$$

/*Procedimientos almacenados de la tabla visita*/
DELIMITER $$
Create Procedure Ingresar_visita(
C_disp_fecha date,
C_disp_hora time,
C_departamento varchar(25),
C_ciudad varchar(25),
C_visita_usuario int)
Begin
	Insert Into visita (disp_fecha, disp_hora, departamento, ciudad, visita_usuario) Values (C_disp_fecha, C_disp_hora, C_departamento, C_ciudad, C_visita_usuario);
End$$

DELIMITER $$
Create Procedure Actualizar_visita(
up_id_visita int,
up_disp_fecha date,
up_disp_hora time,
up_departamento varchar(25),
up_ciudad varchar(25),
up_visita_usuario int)
Begin
	update visita set disp_fecha=up_disp_fecha, disp_hora=up_disp_hora, departamento=up_departamento, ciudad=up_ciudad, visita_usuario=up_visita_usuario where id_visita=up_id_visita;
End$$
 
DELIMITER $$
create procedure Leer_visita()
begin 
select * from visita;
end$$

DELIMITER $$
Create procedure Borrar_visita(
del_id_visita int)
BEGIN
delete from agenda where id_visita = del_id_visita;
END$$

/*Procedimientos almacenados de la tabla rol_usuario*/
DELIMITER $$
Create Procedure Ingresar_rol_usuario(
C_tipo_rol varchar(15))
Begin
	Insert Into rol_usuario (tipo_rol) Values (C_tipo_rol);
End$$

DELIMITER $$
create procedure Leer_rol_usuario()
begin 
select * from rol_usuario;
end$$

DELIMITER $$
Create Procedure Actualizar_rol_usuario(
up_id_rol int,
up_t_usuario varchar(15))
Begin
	update rol_usuario set t_usuario=up_t_usuario where id_rol=up_id_rol;
End$$

DELIMITER $$
Create procedure Borrar_rol_usuario(
del_id_rol int)
BEGIN
delete from rol_usuario where id_rol = del_id_rol;
END$$

/*Procedimientos almacenados de la tabla contrato, separarlos*/
DELIMITER $$
Create Procedure Ingresar_contrato(
C_servicio_instalacion varchar(50),
C_tipo_pago varchar(50),
C_detalles_agregados varchar(50),
C_usuario_contrato int)
Begin
	Insert Into contrato (servicio_instalacion, tipo_pago, detalles_agregados, usuario_contrato) Values (C_servicio_instalacion, C_tipo_pago, C_detalles_agregados, C_usuario_contrato);
End$$

DELIMITER $$
create procedure Leer_contrato()
begin 
select * from contrato;
end$$

DELIMITER $$
Create Procedure Actualizar_contrato(
up_id_contrato int,
up_servicio_instalacion varchar(50),
up_pago varchar(50),
up_detalles_agregados varchar(50),
up_usuario_contrato int)
Begin
	update contrato set servicio_instalacion=up_servicio_instalacion, pago=up_pago, detalles_agregados=up_detalles_agregados, usuario_contrato=up_usuario_contrato where id_contrato=up_id_contrato;
End$$

DELIMITER $$
Create procedure Borrar_contrato(
del_id_contrato int)
BEGIN
delete from contrato where id_contrato = del_id_contrato;
END$$

/*Procedimientos almacenados de la tabla detalles*/
DELIMITER $$
Create Procedure Ingresar_detalles(
C_materiales varchar (50),
C_datos_encargado varchar (50),
C_fecha_inicio date,
C_fecha_entrega date,
C_contrato_detalles int)
Begin
    Insert Into detalles (materiales, datos_encargado, fecha_inicio, fecha_entrega, contrato_detalles) values (C_materiales, C_datos_encargado, C_fecha_inicio, C_fecha_entrega, C_contrato_detalles);
End$$

DELIMITER $$
create procedure Leer_detalles()
begin 
select * from detalles;
end$$

DELIMITER $$
Create Procedure Actualizar_detalles(
up_id_detalles_cont int,
up_materiales varchar(50),
up_datos_encargado varchar(50),
up_fecha_inicio date,
up_fecha_entrega date,
up_contrato_detalles int)
Begin
	update detalles set id_detalles_cont=up_id_detalles_cont, materiales=up_materiales, datos_encargado=up_datos_encargado, fecha_inicio=up_fecha_inicio, fecha_entrega=up_fecha_entrega where id_detalles_cont=up_id_detalles_cont;
End$$

DELIMITER $$
Create procedure Borrar_detalles(
del_id_detalles_cont int)
BEGIN
delete from detalles where id_detalles_cont = del_id_detalles_cont;
END$$