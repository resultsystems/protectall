# Protect all

Guarde suas senhas de cartão de crédito,
textos etc criptografados.

## Instalação
```
git clone https://github.com/resultsystems/protectall
cd protectall
composer install
npm install
cp .env.example .env
```
Edite o arquivo `.env` e adicione seus dados de banco de dados
```
php artisan key:generate
php artisan migrate
```

## Testar
```
php artisan serve
```
Abre o navegador pelo endereço http://localhost:8080

Ou pode entrar no site http://protectall.emtudo.com/

## Agradecimento
Ao Fábio Vedovelli pelas aulas de Vue, sem estas aulas não seria possível concluir este projeto.

