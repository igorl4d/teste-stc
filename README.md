# Teste STC

Teste para desenvolvedor júnior no STC. 
<br>Para visualização a aplicação está em um deploy no link: https://teste-stc.herokuapp.com/ , recomendo utilizar modo anônimo para evitar problemas de segurança com alguns navagadores, como Crhome.

## Descriçao do Teste:

O teste era o desenvolvimento de uma API que teria como resposta um Json com informações de uma escola e uma Aplicação que mostra as informações de uma escola em uma View.

## Tecnologias Usadas:

- PHP
- Laravel
- Composer
- HTML
- CSS
- Mysql

## Usage:

Para usar a aplicação basta clonar o repositório na sua maquina e fazer as alterações no arquivo .env para conectar ao dump do banco de dados "escolas.sql". <br>Após isso, para inicializar a aplicação, digite no CMD:

```
php artisan serve
```

## Descrição do Código:

Ao inicializar a aplicação, essa deve levar o usuário a uma página de *HOME*, onde pode se selocionar as informações da escola que se quer vizualizar (Isso não foi pedido no teste, mas foi feito para ajudar na hora do desenvolvimento)

Ao clicar no botão o usuário é redirecionado a rota *"/acessar"*, a qual recebe como parámetro o código do cólegio para acessar as informações do banco de dado. A rota do colégio Liceu Maranhense é */acessar/88*, por exemplo.

Para se acessar a API, basta utilizar a rota *"api/acessar/{codigo}"*, onde codigo é também o codigo do colégio. A API responde com um JSON com todas as informações utilizadas na criação da view.

## Considerações Finais:

Fiz a conversão dos arquivos ".xls" mandados para um dump de uma database para trabalhar mais facilmente, o arquivo se encontra na root como "escola.sql", nesse banco de dados cada arquivo ocupou uma tabela, sendo o código de imovél do colégio usado como a chave principal para realização de querys, tendo em vista que ela se repete em todos os arquivos.

Algumas informações não foram disponibilizadas nos arquivos ".xls", como o telefone da escola, portanto esses campos ficaram em branco na aplicação. Também não tinha certeza de o que alguns campos signifcavam, pois havia uma divergência entre o modelo enviado e as informações nos arquivos, por exemplo, constava como Gestor Geral nos arquivos ".xls" e como Gestor Principal no modelo, para essas situações eu utilizei o bom senso. 

Por fim, agradeço pela oportunidade de participar do processo, devido ao tempo e pela falta de experiência com a linguagem o projeto não ficou da forma que eu gostaria, mas sigo grato pela experiência e pela oportunidade de aprender.


