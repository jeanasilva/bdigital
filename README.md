# Projeto Bdigital_Chat / Form via CEP API

- Descrição das Features e Stacks

  - Laravel 6x (Chat em Real Time, cadastro de usuários e senha)
  - Laravel 7x (CRUD usando o formulário de cadastramento com o endereço completo usando a API VIACEP)
  - Vuejs + Axios
  - Bootstrap +  HTML
  - SqLite
  - Bibliotecas Laravel (Chatify, Pusher, Echo, Vuejs Validator e Auth Laravel)
  - PHP 7.2 >
  - Laragon

## Descrição do Projeto/Desajio

  - O primeiro projeto/desafio a qual necessita da integração com a api VIACEP foi realizada em Laravel 7x usando a parte de Back-End para consumir a API gravando os dados do Front com Vuejs + Axios no banco de dados Sqlite, no mesmo formulário existe a validação do e-mail e telefone, sendo necessário o preenchimento correto dos campos principais, por utilizar Vuejs, ao digitar o CEP referente a localidade desejada, os dados posteriores serão preenchidos automaticamente, sem a necessidade de preenchimento manual dos campos.
  - O segundo projeto/desafio/extra, foi a criação de um chat em real time, a qual após o cadastramento do usuário, com seu nome, e-mail e uma senha, ele poderá possuir um dashboard para acessar o chat em tempo real, a qual poderá ser utilizado para suporte, conversa entre vendedores, clientes e funcionários. As tecnologias usadas foram Laravel 6x, Pusher para recebimento das mensagens em tempo real, Sqlite para banco de dados e a biblioteca Chatify + BootStrap.

### Explicação das pastas para Teste:

  - Os Projetos estão separados em 3 pastas:
  - Front (Projeto do Formulário com a integração via CEP)
  - Back (Integração back-end para salvar os dados do front no banco de dados, usando axios e vuejs para validar e integrar os dados do front para o back e salvar no sqlite)
  - ChatbDigital (Projeto Secundário que envolve o chat em tempo real)

#### Instalação e Configuração
    > Acessar repositorio https://github.com/jeanasilva/bdigital.git
    > Pasta Front não é necessário instalação ou configuração de biblioteca, apenas realizar o download de toda a pasta Front
    > Pasta Back aonde consta o projeto Laravel que integra com a pasta Front, quanto a integração do Formulário + Apis + Vuejs + Axios + Sqlite
    > Pasta Chatbdigital aonde consta em Laravel e biblioteca chatify
    > Em todos estou incluindo um arquivo zipado e todos constam com o arquivo .env e os arquivos database (Não é uma boa prática), portanto para facilitar a instalação
    > Comandos Necessários:
    
    Em alguns casos é necessário criar o arquivo com o nome e extensão database.sqlite no caminho do projeto /database/database.sqlite;
    
    Em alguns casos o arquivo .env não estará na pasta, sendo necessário executar o comando abaixo 
    
    ` cp .env.example .env ´
    ` php artisan key:generate ´
    ` php artisan migrate `
    
    Após a criação do arquivo .env, acessar a pasta do projeto e substituir os campos:
    
    DB_CONNECTION=sqlite
    # DB_HOST=127.0.0.1
    # DB_PORT=3306
    # DB_DATABASE=laravel
    # DB_USERNAME=root
    # DB_PASSWORD=
    
    PUSHER_APP_ID=1009922
    PUSHER_APP_KEY=35d6a77d98dbaf7b5f97
    PUSHER_APP_SECRET=5f0085f013d792c70a39
    PUSHER_APP_CLUSTER=us2
    
    Continuação
    
    ` composer install ´
    ` composer update ´
    ` php artisan key:generate ´
    ` php artisan cache:clear ´
    ` php artisan route:clear ´
    ` php artisan config:clear ´
    ` php artisan view:clear ´
    
###### Utilização

    - Projeto FRONT => Acessar o arquivo index.html (Pasta Front) /Front/index.html
    
    - Projeto Back => Executar o comando php artisan serve via terminal Unix/Linux/Bash na pasta /back, a qual startará o serviço em http://127.0.0.1:8000, a qual poderá acessar via navegador para ter acesso a rota api de usuários cadastrados http://127.0.0.1:8000/api/usuarios. Lembre-se é necessário que ambos projetos estejam conectados, caso contrário ocorrerá erro no preenchimento dos dados no form
    
    - Projeto Chatbdigital => Executar o comando php artisan serve via terminal Unix/Linux/Bash na pasta /Bdigital, após a execucação irá aparecer http://127.0.0.1:8000, acesse via navegador http://127.0.0.1:8000/login, caso ainda não tenha o registro criado, clique em registrar no menu acima, após registrar, você será direcionado automaticamente para o dashboard a qual mostrará o acesso ao chat, então clique no botão CHAT, a qual irá direcionar ao CHAT. É necessário ir em pesquisar para procurar as pessoas que efetuaram o cadastro em registrar, em proximas features será adicionado pessoas em tempo real sendo adicionadas.

##### Jean Abreu da Silva / 992517862