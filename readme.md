# Protect all

Proteja suas senhas de usuários, cartões de créditos ou qualquer outro texto de forma criptografada em um único lugar (com você).

## Instalação

[Vídeo demonstrativo de como instalar](https://www.youtube.com/watch?v=rxkt13L9Whg)

```
composer create-project --prefer-dist resultsystems/protectall protectall
```

Edite o arquivo `.env` e adicione seus dados de banco de dados, após configurar o arquivo `.env` e ter criado seu banco de dados, execute:

```
php artisan migrate
```

## Testar

Execute o comando abaixo para testar

```
php artisan serve
```

Abre o navegador pelo endereço http://localhost:8000

## Configurar um servidor

- [Como configurar um servidor](https://www.youtube.com/watch?v=0EM-vRh1n10)
- Servidor que eu recomendo [Digital Ocean](https://goo.gl/DMgK38)

## Autenticação em duas etapas (Two Factor Authentication)

Se você quer ativar a autenticação em duas etapas, edite o arquivo `.env`, e altere o valor das chaves:

```
AUTHY_KEY=(sua chave)
AUTHY_URL=http://sandbox-api.authy.com
AUTHY_ACTIVED=false
```

Ative informando `AUTHY_ACTIVED=true`, coloque sua chave secreta e a URL do authy, ou deixa a mesma para testes em sandbox.

Mais informações acesse: [Authy](http://www.authy.com)
