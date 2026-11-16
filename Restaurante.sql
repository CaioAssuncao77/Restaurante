CREATE TABLE pratos(
idPrato INT AUTO_INCREMENT PRIMARY KEY,
nomePrato VARCHAR(100) NOT NULL UNIQUE, 
descricao VARCHAR(255),
preco Decimal(6,2) NOT NULL
);


SELECT * FROM pratos

INSERT INTO pratos
(nomePrato, descricao, preco)
VALUES
('Strogonoff de Frango','Frango em pedaçoes com molho de strogonoff  acompanhados por deliciosos champignons, arroz e batata frita', 34.99),
('Lasanha à Bolonhesa','Deliciosa folhas de massa produzida na casa com queijo, presunto e molho de tomate com carne moida', 46.99),
('Frango à Milanesa','Delicioso peito de frango à milanesa. Acompanha arroz, feijão e batatas fritas', 37.99),
('Filé Mignon ao Molho Madeira','Filá Mignon ao molho madeira. Acompanha arroz e batata rústica', 57.99),
('Costela ao Molho Barbecue','Costela ao molho barbecue. Acompanha arroz e cebola à milanesa', 59.99);


/*
API Trazer dados para Cardápio
=================================
Pratos
 idPrato
 nomePrato
 descricao
 preco
 
Bebidas*
 idBebida
 nomeBebida
 volume  
 alcoolico
 preco
 
Sobremesa*
 idSobremesa
 nomeSobremesa
 descricao
 preco
*/
CREATE TABLE bebidas(
idBebida INT AUTO_INCREMENT PRIMARY KEY,
nomeBebida VARCHAR (30) NOT NULL UNIQUE,
volumeML DECIMAL(6,2) NOT NULL,
alcoolico BOOL NOT NULL DEFAULT FALSE,
preco Decimal(6,2) NOT NULL
);

INSERT INTO bebidas(nomeBebida, volumeML, alcoolico, preco)
VALUES 
('Guaraná Antartica',500, FALSE, 5.75),
('Água Mineral', 350, FALSE, 4.50),
('Caipirinha', 250, TRUE, 15.00),
('Coca-Cola', 1000, FALSE, 24.00)


SELECT * FROM bebidas

CREATE TABLE sobremesas(
idSobremesa INT AUTO_INCREMENT PRIMARY KEY,
nomeSobremesa VARCHAR (30) NOT NULL UNIQUE,
descricao VARCHAR(200),
preco DECIMAL(6,2) NOT null
);

INSERT INTO sobremesas(nomeSobremesa, descricao, preco)
VALUES
('Pudim de Leite Condensado', 'Pudim tradicional com calda de caramelo', 12.00),
('Brigadeiro', 'Doce de chocolate feito com leite condensado', 4.50),
('Brownie', 'Bolo de chocolate com casquinha crocante', 10.00),
('Cheesecake', 'Torta cremosa de queijo com cobertura de morango', 15.00),
('Mousse de Maracujá', 'Sobremesa cremosa com sabor de maracujá', 9.00);

