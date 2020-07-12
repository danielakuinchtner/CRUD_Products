
CREATE TABLE public.usuario
(
  cd_usuario integer NOT NULL,
  ds_senha text NOT NULL,
  ds_email text NOT NULL,
  dt_cadastro timestamp without time zone,
  nm_usuario text NOT NULL,
  CONSTRAINT pk_usuario PRIMARY KEY (cd_usuario)
)
