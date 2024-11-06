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
- Adicionar **Postagens** associadas a usuários.
- Adicionar **Comentários** nas postagens.
- Exibir **Usuários**, **Postagens** e **Comentários** de forma simples.

## Tecnologias Utilizadas

- **Frontend**: HTML, CSS (Bootstrap).
- **Backend**: PHP.
- **Banco de Dados**: MySQL.
- **Testes**: Cypress.
- **CI/CD**: GitHub Actions.

## Como Usar

### 1. Clonar o Repositório

```bash
git clone https://github.com/GbrlSouza/WebSiteCypressTest.git
cd fullstack-test
```

### 2. Configurar o Banco de Dados

1. Crie um banco de dados no seu servidor MySQL e importe o script de criação do banco.
2. Altere as credenciais no arquivo `includes/db.php` com as informações do seu banco de dados:

```php
$servername = "sql308.infinityfree.com";
$username = "if0_37666554";
$password = "h9e8s3w2";
$dbname = "if0_37666554_XXX";
```

### 3. Rodar o Servidor Local (Opcional)

Para testar a aplicação localmente, você pode rodar um servidor PHP embutido:

```bash
php -S localhost:8000
```

Agora, você pode acessar a aplicação em `http://localhost:8000`.

### 4. Rodar os Testes com Cypress

1. Instale o Cypress como dependência do projeto:

```bash
npm install cypress --save-dev
```

2. Para rodar os testes, utilize o comando:

```bash
npx cypress open
```

Isso abrirá a interface do Cypress, onde você pode rodar os testes.

### 5. GitHub Actions

Este projeto está configurado com **GitHub Actions** para automação dos testes. Sempre que uma alteração for feita no repositório, os testes serão executados automaticamente.

Verifique o status dos testes no GitHub Actions através da aba **Actions** no repositório.

## Estrutura do Projeto

```
/project-folder
    /assets
        /css
            bootstrap.min.css
    /images
    /includes
        db.php
        functions.php
    index.php
    add_user.php
    add_post.php
    add_comment.php
```

## Contribuindo

Sinta-se à vontade para contribuir com este projeto. Para relatar problemas ou sugerir melhorias, por favor, abra um **issue** ou envie um **pull request**.
