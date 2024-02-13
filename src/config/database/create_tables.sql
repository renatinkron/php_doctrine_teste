use testes;

create table if not exists usuarios (
	id int not null primary key auto_increment,
	nome varchar(255) not null,
	email varchar(100) default null
);