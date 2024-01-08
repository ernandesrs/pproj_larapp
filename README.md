# LARA APP
<b>LARA APP</b> é uma aplicação em Laravel 10 criada para fins de estudo de criação de aplicação com as tecnologias Tailwind CSS, Alpine JS, Laravel e Livewire. (_LARA APP is a Laravel 10 application created for the purpose of studying application development using the Laravel, Livewire, and Alpine JS technologies._)

# PRINTS
### PAINEL ADMIN: Home
(_ADMIN PANEL: Home_)

![admin_print_0](https://github.com/ernandesrs/pproj_larapp/assets/70029077/d42a4ca9-f7ec-4df7-9826-03b64e618d3b)

### PAINEL ADMIN: Tela de lista de usuários
(_ADMIN PANEL: User list screen_)

![admin_print_1](https://github.com/ernandesrs/pproj_larapp/assets/70029077/70b598ca-bd9f-465d-8922-5d6863f0bda4)

### PAINEL ADMIN: Tela de edição de usuários
(_ADMIN PANEL: User editing screen_)

![admin_print_3](https://github.com/ernandesrs/pproj_larapp/assets/70029077/16075d94-6937-494a-b74b-31833fcf77a3)

### PAINEL ADMIN: Tela de edição de funções
(_ADMIN PANEL: Role editing screen_)

![admin_print_1](https://github.com/ernandesrs/pproj_larapp/assets/70029077/f95af777-fc5c-4ce9-a66c-914f1b05429e)

# REQUISITOS
Os requisitos necessários são(_The necessary requirements are_):

    - PHP 8.1 ou superior(_PHP 8.1 or higher_);
    - Composer 2.4.1 ou super(_Composer 2.4.1 or higher_);
    - Node v18.8.0 ou superior(_Node v18.8.0 or higher_).

# INSTALAÇÃO
1. Obtenha o código fonte(_Get the source code_)
> git clone https://github.com/ernandesrs/pproj_larapp.git

2. Acesse o projeto(_Access the project_):
> cd pproj_larapp

3. Copie, cole e renomeie o arquivo '.env.example' para '.env'(_Copy, paste, and rename the file '.env.example' to '.env'_).

   Abra-o e configure o banco de dados, isso é obrigatório(_Open it and configure the database; this is mandatory_).

4. Instale as dependências PHP(_Install the PHP dependencies._):
> composer install

5. Execute os comandos abaixo para criar uma key para a aplicação, gerar link simbólico para a pasta de arquivos e gerar o banco de dados e tabelas(_Execute the commands below to create a key for the application, generate a symbolic link to the files directory and generate data base and tables._):
> php artisan generate:key

> php artisan storage:link

> php artisan migrate

6. Instale as dependências JS(_Install the JS dependencies_):
> npm install

7. Gere os assets da aplicação(_Generate the application's assets._):
> npm run build

# DADOS BASE
Execute o comando abaixo para gerar os dados básicos da aplicação, como as funções básicas, super administrador, gerar usuários, etc(_Execute the command below to generate the basic data of the application, such as basic roles, super administrator, generate users, etc_).
> php artisan app --super

Se não informar a flag _--super_, um super usuário com o email _super@mail.com_ e senha _password_ será gerado automaticamente(_If you do not inform the _--super_ _flag, a super user with the email_ _super@mail.com_ _and_ password _password_ _will be automatically generated._).

Caso queira, pode executar o comando abaixo para limpar a base dados e depois realizar as ações citadas acima(_If you want, you can execute the command below to clear the database and then perform the actions mentioned above_).
> php artisan app --fresh --super

# RODANDO A APLICAÇÃO
Por fim, execute o comando abaixo para rodar o servidor(_Finally, execute the command below to run the server_):
> php artisan serve