
/* CRIAÇÃO DAS TABELAS DE ACESSO

CREATE DATABASE db_araguaia;

CREATE TABLE tb_perfil(
  co_perfil int (1) primary key AUTO_INCREMENT,
  ds_perfil varchar (10)
);

CREATE TABLE tb_usuario (
  co_usuario int primary key AUTO_INCREMENT,
  nu_cpf       varchar (11),
  ds_email     varchar(60),
  no_usuario   varchar(60),
  ds_senha     varchar (50),
  dt_cadastro  datetime, 
  co_perfil    int  references tb_perfil
);


INSERT INTO tb_perfil (ds_perfil) 
VALUES ('comum'), ('supervisor'),('master');


INSERT INTO tb_usuario
(nu_cpf, ds_email, no_usuario, ds_senha, dt_cadastro, co_perfil)
VALUES('04078072178', 'marcos.everton10@gmail.com', 'MARCOS EVERTON ALMEIDA DA CONCEIÇÃO', '1234', now(), 3);



SELECT co_perfil, ds_perfil
FROM tb_perfil;

select * from tb_usuario tu 

drop table tb_usuario;*/
