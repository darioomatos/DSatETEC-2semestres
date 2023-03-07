
-- Criando a tabela Filial
CREATE TABLE Filial (
  codigo INT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  logradouro VARCHAR(100) NOT NULL,
  numero INT NOT NULL,
  bairro VARCHAR(100) NOT NULL,
  cidade VARCHAR(100) NOT NULL,
  uf VARCHAR(2) NOT NULL,
  cep VARCHAR(8) NOT NULL,
  telefone1 VARCHAR(20) NOT NULL,
  telefone2 VARCHAR(20)
);

-- Criando a tabela Fabricante
CREATE TABLE Fabricante (
  codigo INT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL
);

-- Criando a tabela Veículo
CREATE TABLE Veiculo (
  placa VARCHAR(7) PRIMARY KEY,
  ano INT NOT NULL,
  modelo VARCHAR(100) NOT NULL,
  tipo_combustivel VARCHAR(20) NOT NULL,
  chassis VARCHAR(17) NOT NULL,
  cor VARCHAR(20) NOT NULL,
  fabricante_codigo INT NOT NULL,
  FOREIGN KEY (fabricante_codigo) REFERENCES Fabricante(codigo)
);
