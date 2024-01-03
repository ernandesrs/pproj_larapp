# LARA APP
<b>LARA APP</b> é uma aplicação em Laravel 10 criada para fins de estudo de criação de aplicação com as tecnologias Laravel, Livewire e Alpine JS. (_LARA APP is a Laravel 10 application created for the purpose of studying application development using the Laravel, Livewire, and Alpine JS technologies._)

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

5. Execute os comandos abaixo para criar uma key para a aplicação e gerar link simbólico para a pasta de arquivos(_Execute the commands below to create a key for the application and generate a symbolic link to the files directory._):
> php artisan generate:key

> php artisan storage:link

6. Instale as dependências JS(_Install the JS dependencies_):
> npm install

7. Gere os assets da aplicação(_Generate the application's assets._):
> npm run build

# DADOS BASE
Execute o comando abaixo para gerar os dados básicos da aplicação, como as funções básicas, super administrador, gerar usuários, etc(_Execute the command below to generate the basic data of the application, such as basic roles, super administrator, generate users, etc_).
> php artisan app

Caso queira, pode executar o comando abaixo para limpar a base dados e depois realizar as ações citadas acima(_If you want, you can execute the command below to clear the database and then perform the actions mentioned above_).
> php artisan app --fresh

# RODANDO A APLICAÇÃO
Por fim, execute o comando abaixo para rodar o servidor(_Finally, execute the command below to run the server_):
> php artisan serve