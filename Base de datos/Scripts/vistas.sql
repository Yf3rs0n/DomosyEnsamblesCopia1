use domosyensambles;

create view usuarios_registrados
as
select usuario.id_usuario,correo, persona.id_cedula,nombre,apellido from persona inner join usuario on persona.id_cedula = usuario.persona_usu;

/*A la vista de contratos se le deben de añadir los datos del responsable del contrato, combinar campos con detalles del contrato luego de tener ese registro*/
create view contratos_a_realizar
as
select contrato.id_contrato,servicio_instalacion,detalles_agregados, usuario.correo, persona.id_cedula,nombre,apellido  from contrato inner join usuario join persona on contrato.usuario_contrato = usuario.id_usuario and usuario.persona_usu = persona.id_cedula;

create view visitas_agendadas
as
select visita.id_visita,disp_fecha, disp_hora, departamento, ciudad, usuario.correo, persona.id_cedula,nombre, apellido  from visita inner join usuario join persona on visita.visita_usuario = usuario.id_usuario and usuario.persona_usu = persona.id_cedula;