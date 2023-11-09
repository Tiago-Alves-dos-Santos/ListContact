<a name="readme-top"></a>

<!-- PROJETO LOGO -->
<br />
<div align="center">
  <a href="https://github.com/Tiago-Alves-dos-Santos/Covid19">
    <img src="public/img/mongodb.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">Lista de contatos</h3>

  <p align="center">
    Sistema para gerenciar seus contatos
  </p>

  [![portfolio][portfolio-shield]][portfolio-url]
  [![linkedin][linkedin-shield]][linkedin-url]
</div>




<!-- MENU -->
<details>
  <summary>MENU</summary>
  <ol>
    <li>
      <a href="#sobre">Sobre</a>
    </li>
    <li><a href="#funcionalidades">Funcionalidades</a></li>
    <li><a href="#tecnologias-utilizadas">Tecnologias Utilizadas</a></li>
    <li><a href="#instalação">Instalação</a></li>
    <li><a href="#modo-de-uso">Modo de uso</a></li>
    <li><a href="#versão-atual">Versão atual</a></li>
    <li><a href="#licença">Licença</a></li>
    <li><a href="#contato">Contato</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## Sobre
Sistema de controle de contatos, o principal objetivo do projeto foi testar a nova versão do livewire, a versão 3, junstamente com o alpine

<p align="right">(<a href="#readme-top">Voltar ao topo</a>)</p>

<!-- FUNCIONALIDADES -->
## Funcionalidades

- [x] Criar contatos avulsos
- [x] Vincular contato de outro usuário do sistema
    
<p align="right">(<a href="#readme-top">Voltar ao topo</a>)</p>

## Tecnologias Utilizadas
1. FRONT-END
    * HTML 5
    * CSS 3
    * TAILWIND 3.3.5
    * BLADE
    * LIVEWIRE 3
    * NODE 20.9.0 (LTS)
    * NPM 10.1.0
2. BACK-END
    * PHP 8.2.7
    * LARAVEL 10
3. DATABASE
    * MongoDB - NoSQL



<p align="right">(<a href="#readme-top">Voltar ao topo</a>)</p>

<!-- GETTING STARTED -->
## Instalação

1. Instale e configure a 'php_mongodb.dll'. Siga o <a href="[http://](https://github.com/mongodb/laravel-mongodb)" target="_blank">passo a passo</a>
2. Certifique-se de ter instalado na sua máquina o php e node(npm) correto, se usa docker verficar a imagem
3. Faça o 
    ~~~git
         git clone --branch <tag_name || branc_name> <repo_url>
    ~~~
4. Duplique o arquivo `.env.example` e retire o `.example`
5. Configure as variaveis de conexao com o banco de dados
6. Execute 
    ~~~php
        composer install 
    ~~~
7. Caso queira ativar o vite
    ~~~js
        npm install && npm run dev
    ~~~ 
8. Gerando chave local
   ~~~php
        php artisan key:generate 
   ~~~
9. Migrations e seeds 
    ~~~php
        php artisan migrate --seed
    ~~~
10. Executando o servidor 
    ~~~php
        php artisan serve
    ~~~


<p align="right">(<a href="#readme-top">Voltar ao topo</a>)</p>



<!-- USAGE EXAMPLES -->
## Modo de uso
Video no youtube, mostrando um pouco do uso em si. <a href="https://www.youtube.com/watch?v=zZdT9-bcIKI">clique aqui!</a>

<p align="right">(<a href="#readme-top">Voltar ao topo</a>)</p>


## Versão atual
:heavy_check_mark:  v1.0.0


<!-- LICENÇA -->
## Licença
Distribuído sob a licença MIT

<p align="right">(<a href="#readme-top">Voltar ao topo</a>)</p>



<!-- CONTACT -->
## Contato
Tiago Alves dos Santos

Formas de contato: 
<br>

[![Whatsapp][whatsapp-shield]][whatsapp-url]
[![Telegram][telegram-shield]][telegram-url]

<p align="right">(<a href="#readme-top">Voltar ao topo</a>)</p>


<!-- MARKDOWN -->
[whatsapp-shield]: https://img.shields.io/badge/WhatsApp-25D366?style=for-the-badge&logo=whatsapp&logoColor=white
[whatsapp-url]: https://wa.link/h5vlzo
[telegram-shield]: https://img.shields.io/badge/Telegram-2CA5E0?style=for-the-badge&logo=telegram&logoColor=white
[telegram-url]: https://t.me/TiagoAlves2001
[linkedin-shield]: https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white
[linkedin-url]: https://www.linkedin.com/in/tiago-alves-dos-santos-de-oliveira-96699a189/
[portfolio-shield]: https://img.shields.io/badge/PORTFOLIO-%20CLIQUE%20AQUI%20-%20BLACK
[portfolio-url]: https://tiago-alves-dos-santos.github.io/portfolio/#about

