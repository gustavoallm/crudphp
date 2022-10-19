create database agenda;

use agenda;

create table contato(
	id int primary key auto_increment,
    nome varchar(45),
    idade int
);

create table email(
	id int primary key auto_increment,
    email varchar(45),
    perfil varchar(15),
    contato_id int,
    foreign key (contato_id) references contato(id)
);

create table telefone(
	id int primary key auto_increment,
    telefone varchar(45),
    perfil varchar(15),
    contato_id int,
    foreign key (contato_id) references contato(id)
);

create table endereco(
	id int primary key auto_increment,
    estado varchar(45),
    cidade varchar(50),
    bairro varchar(25),
    rua varchar(50),
    numero varchar(15),
    complemento varchar(20),
    observacao varchar(15),
    contato_id int,
    foreign key (contato_id) references contato(id)
);

insert into contato (nome,idade) values ('Erick Fernando Pinheiro', 31);
insert into contato (nome,idade) values ('Joaquim Jose de Jesus', 64);
insert into contato (nome,idade) values ('Marcos Antônio', 25);
insert into contato (nome,idade) values ('Maria Aparecida', 17);
insert into contato (nome,idade) values ('Elsa Soares', 25);
insert into contato (nome,idade) values ('Ana Silva', 19);
insert into contato (nome,idade) values ('Jessica Gomes', 25);
insert into contato (nome,idade) values ('Mariana Lopes', 28);
insert into contato (nome,idade) values ('Joana Joaquina', 35);
insert into contato (nome,idade) values ('Gustavo', 20);

insert into email (email, perfil,contato_id)
values('erick@gmail.com','Pessoal',1);
insert into email (email, perfil,contato_id)
values('professor@gmail.com','Profissional',1);
insert into email (email, perfil,contato_id)
values('quim@gmail.com','Pessoal',2);
insert into email (email, perfil,contato_id)
values('marcao@gmail.com','Pessoal',3);
insert into email (email, perfil,contato_id)
values('aparecemaria@gmail.com','Pessoal',4);
insert into email (email, perfil,contato_id)
values('frozen@gmail.com','Pessoal',5);
insert into email (email, perfil,contato_id)
values('aninha@gmail.com','Pessoal',6);
insert into email (email, perfil,contato_id)
values('jehhsica@gmail.com','Profissional',7);
insert into email (email, perfil,contato_id)
values('marimari@gmail.com','Pessoal',8);
insert into email (email, perfil,contato_id)
values('jojo@gmail.com','Profissional',9);
insert into email (email, perfil,contato_id)
values('joanaprof@gmail.com','Pessoal',9);
insert into email (email, perfil,contato_id)
values('gustavoallm@gmail.com','Pessoal',10);

insert into telefone (telefone, perfil,contato_id)
values('(19) 9 9280 - 2008','Profissional',1);
insert into telefone (telefone, perfil,contato_id)
values('(17) 9 9625 - 2008','Pessoal',1);
insert into telefone (telefone, perfil,contato_id)
values('(15) 9 5555 - 7588','Pessoal',2);
insert into telefone (telefone, perfil,contato_id)
values('(19) 8 4565 - 7865','Pessoal',3);
insert into telefone (telefone, perfil,contato_id)
values('(19) 5 9555 - 2228','Pessoal',4);
insert into telefone (telefone, perfil,contato_id)
values('(18) 9 9685 - 2868','Pessoal',5);
insert into telefone (telefone, perfil,contato_id)
values('(19) 9 8585 - 5858','Profissional',6);
insert into telefone (telefone, perfil,contato_id)
values('(19) 9 3573 - 0424','Profissional',7);
insert into telefone (telefone, perfil,contato_id)
values('(19) 9 9280 - 2008','Profissional',8);
insert into telefone (telefone, perfil,contato_id)
values('(19) 9 5855 - 2008','Pessoal',9);
insert into telefone (telefone, perfil,contato_id)
values('(19) 9 5645 - 6665','Profissional',9);
insert into telefone (telefone, perfil,contato_id)
values('(19) 9 9280 - 2008','Profissional',10);
insert into telefone (telefone, perfil,contato_id)
values('(19) 9 8789 - 8888','Pessoal',10);

insert into endereco (estado, cidade, bairro, rua, numero, complemento, observacao, contato_id)
values('São Paulo','Sao Jose','Zanaga', 'Rua do Crime', '777','casa','Logo ali', 1);
insert into endereco (estado, cidade, bairro, rua, numero, complemento, observacao, contato_id)
values('Rio de Janeiro','Inhame','Legominosas', 'Rua da Saúde', '121','casa','Logo aqui', 2);
insert into endereco (estado, cidade, bairro, rua, numero, complemento, observacao, contato_id)
values('São Paulo','Limeira','Zanaga', 'Rua do Caos', '787','casa','Lá', 3);
insert into endereco (estado, cidade, bairro, rua, numero, complemento, observacao, contato_id)
values('São Paulo','Bertioga','Beira Mar', 'Rua da Praia', '000','Resort','304 Bloco 7', 4);
insert into endereco (estado, cidade, bairro, rua, numero, complemento, observacao, contato_id)
values('Recife','Marsol','Nemesis', 'Rua do horizonte', '777','casa','Per', 5);
insert into endereco (estado, cidade, bairro, rua, numero, complemento, observacao, contato_id)
values('Africa','Macapá','Nova Zelandia', 'Rua do tartaro', '256','casa','Longe dmeais', 6);
insert into endereco (estado, cidade, bairro, rua, numero, complemento, observacao, contato_id)
values('São Paulo','Sumaré','Marinalva', 'Rua do leste', '777','Apartamento','Huumm', 7);
insert into endereco (estado, cidade, bairro, rua, numero, complemento, observacao, contato_id)
values('Rio de Janeiro','Rio de Janeiro','Perigo', 'Rua do tiro', '157','casa','Usar colete', 8);
insert into endereco (estado, cidade, bairro, rua, numero, complemento, observacao, contato_id)
values('São Paulo','Limeira','São Domingos', 'Rua do açucar', '7897','casa','Logo ali', 9);
insert into endereco (estado, cidade, bairro, rua, numero, complemento, observacao, contato_id)
values('São Paulo','Americana','Zanaga', 'Rua do crime', '779','casa','Perto', 10);

