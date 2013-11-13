create table Morador(
id_m int(10) primary key not null,
nome varchar(70) not null,
cpf varchar(14) unique not null,
telefone varchar(14) not null,
num_casa int not null,
num_moradores int not null,
email varchar(50) unique not null)
ENGINE=InnoDB default charset=utf8 auto_increment=0;

create table Endereco(
id_end int(10) primary key not null,
rua varchar(50)not null,
num int not null,
bairro varchar (30) not null,
complemento varchar (20),
cidade varchar (30) not null,
estado char (2) not null)
ENGINE=InnoDB default charset=utf8 auto_increment=0;



create table Funcionario(
id_f int(10) primary key not null,
nome varchar(70) not null,
cpf varchar(14) unique not null,
id_end int,
telefone varchar(14) not null,
funcao varchar(20) not null,
data_admissao date,
data_desligamento date,
hora_ini time not null,
hora_fin time not null,
foreign key(id_end) references Endereco(id_end))
ENGINE=InnoDB default charset=utf8 auto_increment=0;

create table Folhapagamento(
id_fp int(10) primary key not null,
id_f int not null,
salario decimal (10,2),
adiant_sala decimal (10,2),
decimo_terc decimal (10,2),
inss decimal(10,2),
fgts decimal(10,2),
pis decimal (10,2),
honorarios decimal (10,2),
cesta_basica decimal (10,2),
ferias decimal (10,2),
rescisao decimal (10,2),
vale_trasp decimal (10,2),
vale_alim decimal (10,2),
constraint id_f foreign key (id_f) references Funcionario(id_f)
)ENGINE=InnoDB default charset=utf8 auto_increment=0;


create table AgenciaCont(
id_ac int(10) primary key not null,
id_end int,
razao_social varchar(50) not null,
cnpj varchar(14) unique not null,
telefone varchar (14) not null,
email varchar(50) unique not null,
foreign key(id_end) references Endereco(id_end)) 
ENGINE=InnoDB default charset=utf8 auto_increment=0;


create table Usuario(
id_usuario int(10) primary key not null,
id_m int,
id_ac int,
nome_usuario varchar(30) unique not null,
senha_hash varchar(30) not null,
tipo int(1) not null default '0',
ativo boolean,
key superuser (tipo),
key fk_usuario_morador (id_m),
key fk_usuario_agenciacont (id_ac),
constraint fk_usuario_morador foreign key
(id_m) references Morador (id_m) on delete cascade,
constraint fk_usuario_agenciacont foreign key
(id_ac) references AgenciaCont (id_ac) on delete cascade)
ENGINE=InnoDB default charset=utf8 auto_increment=0;


create table Mural(
id_mu int(10) primary key not null,
id_m int not null,
titulo varchar(100)not null,
texto text not null,
criado_em int ,
atualizado_em int,
foreign key (id_m) references Morador(id_m) on delete cascade)
ENGINE=InnoDB default charset=utf8 auto_increment=0;


create table Comentario(
id_come int(10) primary key not null,
id_m int,
id_mu int,
criado_em int , 
comentario text not null,
foreign key (id_m) references Morador(id_m)on delete cascade,
foreign key (id_mu) references Mural(id_mu)on delete cascade)
ENGINE=InnoDB default charset=utf8 auto_increment=0;

create table arquivoDigital(
id_ad int(10) primary key not null,
nome_img varchar(20) not null,
imagem blob,
tipo varchar(10))
ENGINE=InnoDB default charset=utf8 auto_increment=0;

create table auth_item (
 name varchar(64) primary key not null,
 type int NOT NULL,
 description text,
 bizrule text,
 data text)
ENGINE=InnoDB default charset=utf8 auto_increment=0;
 
create table auth_item_child (
 parent varchar(64),
 child varchar(64),
 primary key(parent, child),
 foreign key (parent) references auth_item (name) 
 on delete cascade on update cascade,
 foreign key (child) references auth_item (name) 
 on delete cascade on update cascade
)ENGINE=InnoDB default charset=utf8 auto_increment=0;

create table auth_assignment (
 itemname varchar(64) NOT NULL,
 -- NOTE - userid is the format the yii libraries expect
 userid int(10) unsigned,
 bizrule text,
 data text,
 primary key (itemname, userid),
 foreign key (itemname) references auth_item 
 (name) on update cascade on delete cascade
)ENGINE=InnoDB default charset=utf8 auto_increment=0;



create table AlugarArea(
id_alugar int(10) primary key not null,
id_m int,
data_aluguel date not null,
hora_ini time not null,
hora_fin time not null,
motivo text not null,
status int not null,
solicitado_em int,
foreign key (id_m) references Morador(id_m))
ENGINE=InnoDB default charset=utf8 auto_increment=0;

create table Evento(
id_evento int(10) primary key not null,
id_m int,
id_alugar int,
data_evento date not null,
hora_ini time not null,
hora_fin time not null,
titulo varchar(100),
descricao text not null,
foreign key (id_m) references Morador(id_m),
foreign key (id_alugar) references AlugarArea(id_alugar))
ENGINE=InnoDB default charset=utf8 auto_increment=0;


create table Agenda ( 
id_agenda int(10) primary key not null,
id_alugar int,
id_evento int,
dia varchar ( 2 ) not null ,
mes varchar ( 2 ) not null ,
ano varchar( 4 ) not null ,
link varchar( 255 ) not null ,
descricao text not null,
foreign key (id_alugar) references AlugarArea(id_alugar),
foreign key (id_evento) references Evento(id_evento))
ENGINE=InnoDB default charset=utf8 auto_increment=0;


create table DadosCondominio(
id_cond int(10) primary key not null,
id_end int,
nome_fantasia varchar(70) not null,
razao_social varchar (70) not null,
cnpj varchar(18)not null,
num_unidades int not null,
email varchar(50)not null,
foreign key (id_end) references Endereco (id_end) on delete cascade)
ENGINE=InnoDB default charset=utf8 auto_increment=0;


create table Mes (
id_mes int(10) primary key not null,
mes varchar(9) not null,
mes_abrev char(3)not null)
ENGINE=InnoDB default charset=utf8 auto_increment=0;

create table FinanceiroInicial(
id_finan_ini int(10) primary key not null,
id_mes int,
id_cond int,
ano char(4) not null,
saldo_ini decimal(10,2),
fundo_caixa_ini decimal (10,2),
fundo_reserva_ini decimal (10,2),
foreign key (id_mes) references Mes (id_mes),
foreign key (id_cond) references DadosCondominio (id_cond))
ENGINE=InnoDB default charset=utf8 auto_increment=0;


insert into Mes values ('1','Janeiro','Jan');
insert into Mes values ('2','Fevereiro','Fev');
insert into Mes values ('3','Março','Mar');
insert into Mes values ('4','Abril','Abr');
insert into Mes values ('5','Maio','Mai');
insert into Mes values ('6','Junho','Jun');
insert into Mes values ('7','Julho','Jul');
insert into Mes values ('8','Agosto','Ago');
insert into Mes values ('9','Setembro','Set');
insert into Mes values ('10','Outubro','Out');
insert into Mes values ('11','Novembro','Nov');
insert into Mes values ('12','Dezembro','Dez');