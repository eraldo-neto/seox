# Ambiente

Servidor Linux
Nginx (recomendado) ou Apache
PHP 8.0 ou superior
MySQL 5.7 ou superior
256MB de memória para o PHP
Módulo mod_rewrite do Apache ativo.

Criar banco de dados:
```mysql
Crie ou atualize um usuario do banco.
Crie uma database com o nome de sua escolha.
```

## Executando o projeto

Antes de começar 
- Instalar XAMPP ou servidor php da sua escolha

Para executar o projeto é necessário baixar o ambiente wordpress no wordpress.org.

Clonar o projeto na pasta de temas.

Instalar as dependências:
```shell
npm install
```

Rodar compilador de scss:
```shell
npm run watch
```

A aplicação estará sendo servida na url configurada em seu ambiente PHP