create database if not exists db_clients;
use db_clients;

create table if not exists tb_fornecedor(
id_fornecedor int not null auto_increment primary key,
fornecedor varchar(50) not null
);

create table if not exists tb_produtos(
id_produto int not null auto_increment primary key,
produto varchar(50) not null,
descricao varchar(2000) not null,
qtd int not null,
id_fornecedor int not null,
valor_total float not null,
imagem varchar(200) not null,
cor varchar(20) not null,
foreign key (id_fornecedor) references tb_fornecedor(id_fornecedor)  
);

create table if not exists tb_privilegio(
id_privilegio int not null auto_increment primary key,
privilegio varchar(50) not null
);

create table if not exists tb_cliente(
id_cliente int not null auto_increment primary key,
nome varchar(100) not null,
email varchar(100) not null,
senha varchar(32) not null,
id_privilegio int not null,
foreign key (id_privilegio) references tb_privilegio(id_privilegio)
);

create table if not exists tb_carrinho(
id_produto int not null,
dt_compra datetime,
qtd int not null default 0,
entrega boolean not null default false,
foreign key (id_produto) references tb_produtos(id_produto)
);

create table if not exists tb_cargo(
id_cargo int not null auto_increment primary key,
descricao varchar(50)
);

create table if not exists tb_vendedor(
id_vendedor int not null auto_increment primary key,
nome varchar(100) not null,
dt_cadastro date not null,
id_cargo int not null,
foreign key (id_cargo) references tb_cargo(id_cargo)
);

create table if not exists tb_historico(
id_compra int not null auto_increment primary key,
id_produto int not null,
dt_compra datetime,
qtd int not null default 1,
entrega boolean not null default false,
id_vendedor int not null,
foreign key (id_produto) references tb_produtos(id_produto),
foreign key (id_vendedor) references tb_vendedor(id_vendedor)
);