# Fullstack Test - Cypress + MySQL + GitHub Actions

Este projeto é um exemplo de teste **fullstack** utilizando **Cypress**, **MySQL** e **GitHub Actions**. A ideia é fornecer uma aplicação simples em PHP com **frontend em Bootstrap**, que interage com um banco de dados MySQL, e que será testada usando **Cypress** para garantir que as funcionalidades estão funcionando corretamente.

## Objetivo

O objetivo deste projeto é demonstrar como realizar testes **automatizados** de uma aplicação que envolve:

- **Frontend em HTML e Bootstrap** para interface do usuário.
- **Backend em PHP** para manipulação de dados.
- **Banco de dados MySQL** para armazenar dados de usuários, postagens e comentários.
- **Cypress** para realizar testes end-to-end na aplicação.
- **GitHub Actions** para automação de testes durante o ciclo de CI/CD.

## Funcionalidades da Aplicação

- Adicionar **Usuários** com nome e e-mail.
- Exibir **Usuários** de forma simples.

## Tecnologias Utilizadas

- **Frontend**: HTML, CSS (Bootstrap).
- **Backend**: PHP.
- **Banco de Dados**: MySQL.
- **Testes**: Cypress.
- **CI/CD**: GitHub Actions.

## Como Usar

### 1. Clonar o Repositório na pasta `htdocs` do `xampp`

```bash
git clone https://github.com/GbrlSouza/WebSiteCypressTest.git
cd fullstack-test
```
Agora, você pode acessar a aplicação em `http://localhost/WebSiteCypressTest/index.php`.

### 2. Configurar o Banco de Dados

1. Crie um banco de dados no seu servidor MySQL e importe o script de criação do banco.
2. Altere as credenciais no arquivo `includes/db.php` com as informações do seu banco de dados:

```php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
```


### 3. Rodar os Testes com Cypress

1. Instale o Cypress como dependência do projeto:

```bash
npm install cypress --save-dev
```

2. Para rodar os testes, utilize o comando:

```bash
npx cypress open
```

Isso abrirá a interface do Cypress, onde você pode rodar os testes.

### 4. GitHub Actions

Este projeto está configurado com **GitHub Actions** para automação dos testes. Sempre que uma alteração for feita no repositório, os testes serão executados automaticamente.

Verifique o status dos testes no GitHub Actions através da aba **Actions** no repositório.

## Estrutura do Projeto

```
/WebSiteCypressTest
    /includes
        db.php
        functions.php
    index.php
    add_user.php
```

## Contribuindo

Sinta-se à vontade para contribuir com este projeto. Para relatar problemas ou sugerir melhorias, por favor, abra um **issue** ou envie um **pull request**.
