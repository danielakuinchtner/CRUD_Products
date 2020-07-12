CREATE TABLE public.usuario
(
  cd_usuario integer NOT NULL,
  ds_senha text NOT NULL,
  ds_email text NOT NULL,
  dt_cadastro timestamp without time zone,
  nm_usuario text NOT NULL,
  CONSTRAINT pk_usuario PRIMARY KEY (cd_usuario)
);

CREATE TABLE produto (
	id serial NOT NULL PRIMARY KEY ,
	nome varchar(50) NOT NULL,
	descr text NOT NULL,
	valor float(5) NOT NULL
);

--select * from usuario;
--insert into produto values (1, 'vassoura', 'limpeza', 50.00);
--insert into produto values (2, 'furadeira', 'material de construcao', 90.00);
--insert into produto values (3, 'fita adesiva', 'material escolar', 4.50);
--insert into produto values (4, 'computador', 'escritorio', 1000.00);