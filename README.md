# Site em PHP com Login e registro de usuário com servidor MySQL
### O site possui uma página home (index.php) que necessita de autenticação para ser acessado, dessa forma o login é necessário e para isso o registro é diponibilizado.

### Este possui o design e requisitos mostrados abaixo:

## Tela de Login
![alt-text](https://raw.githubusercontent.com/skatesham/PHP-LOGIN-REGISTRATION/master/img/login.png)

## Requisitos Funcionais
![alt-text](https://raw.githubusercontent.com/skatesham/PHP-LOGIN-REGISTRATION/master/img/PHP%20SERVER.png)

## Requisitos Não Funcionais
 - Login com função Hash
 - Banco de Dados MySQL
 - Prevenção de SQL Injection
 - Orientação objeto de templates
 
 ### Tree
 '''
.
├── database.sql
├── img
│   ├── login.png
│   └── PHP SERVER.png
├── LICENSE
├── manager.sh
├── public_html
│   ├── autenticate.php
│   ├── index.php
│   ├── login.php
│   ├── logoff.php
│   ├── registro.php
│   ├── static
│   │   ├── css
│   │   │   ├── estilo.css
│   │   │   └── signin.css
│   │   ├── img
│   │   │   ├── 6320.jpg
│   │   │   ├── background.jpeg
│   │   │   └── localhost
│   │   ├── js
│   │   │   └── global_functions.js
│   │   └── lib
│   │       └── ti.php
│   ├── template
│   │   ├── base.php
│   │   └── template.php
│   └── teste_service.php
├── README.md
└── service
    ├── mysql.php
    ├── repository_user.php
    └── service_user.php
'''
By Sham Vinicius Fiorin. 2018.
