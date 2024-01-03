# LARA APP
<b>LARA APP</b> é uma aplicação em Laravel 10 criada para fins de estudo de criação de aplicação com as tecnologias Laravel, Livewire e Alpine JS.

`<b>LARA APP</b> is a Laravel 10 application created for the purpose of studying application development using the Laravel, Livewire, and Alpine JS technologies.`

# REQUISITOS
Os requisitos necessários são:

    - PHP 8.1 ou superior;
    - Composer 2.4.1 ou super
    - Node v18.8.0 ou superior.

`The necessary requirements are:`
`
    - PHP 8.1 or higher;
    - Composer 2.4.1 or higher;
    - Node v18.8.0 or higher.
`

# INSTALAÇÃO
1. Obtenha o código fonte:
> git clone https://github.com/ernandesrs/pproj_larapp.git

2. Acesse o projeto:
> cd pproj_larapp

3. Copie, cole e renomeie o arquivo '.env.example' para '.env'.
   Abra-o e configure o banco de dados, isso é obrigatório.

4. Instale as dependências PHP:
> composer install

5. Execute os comandos abaixo para criar uma key para a aplicação e gerar link simbólico para a pasta de arquivos:
> php artisan generate:key
> php artisan storage:link

6. Instale as dependências JS:
> npm install

7. Gere os assets da aplicação:
> npm run build

# DADOS BASE
Execute o comando abaixo para gerar os dados básicos da aplicação, como as funções básicas, super administrador, gerar usuários, etc.
> php artisan app

Caso queira, pode executar o comando abaixo para limpar a base dados e depois realizar as ações citadas acima.
> php artisan app --fresh

# RODANDO A APLICAÇÃO
Por fim, execute o comando abaixo para rodar o servidor:
> php artisan serve