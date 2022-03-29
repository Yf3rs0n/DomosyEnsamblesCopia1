delimiter //
create trigger log_visita after insert on visita
for each row begin
	insert into trigger_visita (registro) value ("Se agendo una visita");
end//
delimiter ;