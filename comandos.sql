
-- Retornar se o filtro for atendido
select u.* from usuario as u
inner join pessoa_fisica as pf 
ON u.id = pf.usuario_alteracao;

-- Retornar tudo(usuario + Pessoa_fisica) se encontrar
-- senao retorna os dados de usuario
select u.* from usuario as u
left join pessoa_fisica as pf 
ON u.id = pf.usuario_alteracao;


-- Retornar tudo(Pessoa_fisica + usuario) se encontrar
-- senao retorna os dados da Pessoa_fisica
select u.* from usuario as u
right join pessoa_fisica as pf 
ON u.id = pf.usuario_alteracao;


-- C Create (criar 1 usuario)
INSERT INTO usuario (nome, email, status, cadastro_preenchido)
VALUES ("Fulano de tal", "fulano@ciclano.com.br", false, false);

-- C Create (criar mais 1 de usuario)
INSERT INTO usuario (nome, email, status, cadastro_preenchido)
VALUES
('Fulano de tal', 'fulano@ciclano.com.br', 0, 0),
('Beltrano de tal', 'beltrano@ciclano.com.br', 0, 0);

-- R read (todos usuarios)
select * from usuario;

-- R read Only (1 usuario)
select * from usuario WHERE id = 3;

-- U Update Only (1 usuario)
Update usuario SET email="ariel@infoserv.com" WHERE id = 1;

-- U Update (mais de 1 usuario)
Update usuario SET status=true, cadastro_preenchido=true
WHERE id IN (1, 2);

-- D Delete (Excluir 1 usuario)
delete from usuario WHERE id = 3;

-- D Delete (Excluir mais usuario)
delete from usuario WHERE id IN (3, 7);


-- ALTER TABLE
ALTER TABLE usuario ADD column cadastro_preenchido bool default false;

ALTER TABLE usuario MODIFY column cadastro_preenchido bool NOT NULL default false;

ALTER TABLE usuario DROP column cadastro_preenchido;


-- DATAS AUTOMATICAS

ALTER TABLE usuario DROP COLUMN criado_em;

ALTER TABLE usuario ADD COLUMN criado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP;


ALTER TABLE usuario DROP COLUMN atualizado_em;

ALTER TABLE usuario ADD COLUMN atualizado_em DATETIME DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP;
