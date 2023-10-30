create table sessiones (
    id int not null auto_increment primary key,
    alumno int not null references alumnos(id_alu),
    ingreso datetime not null,
    salida datetime null,
    id_dispositivo varchar(255) not null,
    navegador varchar(255) not null,
    ip varchar(255) not null,
    estado int not null default 1
) engine=InnoDB;