# Sistema de Cadastro de Colaboradores

Aplicação web desenvolvida para a coleta e o processamento de dados de novos colaboradores, integrando a interface de entrada ao backend em PHP.

## Funcionalidades

* Capture e validação de dados de formulário via método HTTP POST.
* Proteção contra acesso direto via método GET ao script de processamento.
* Exibição formatada dos dados recebidos.
* Layout responsivo adaptável a diferentes resoluções.

## Tecnologias Utilizadas

* HTML5
* CSS3
* PHP 7.4+

## Estrutura do Projeto

* cadastro.html: Formulário de captação de dados.
* processaCadastro.php: Script de recebimento e validação backend.
* styles.css: Estilização do sistema.

## Execução

1. Clone o repositório em um ambiente de servidor local (ex.: XAMPP, WAMP ou extensão PHP Server).
2. Certifique-se de que o servidor Apache esteja ativo.
3. Acesse `http://localhost/cadastro-php/cadastro.html` pelo navegador.

## Aqui o fluxo de como funciona basicamente:

cadastro.html
      ↓
form method="POST"
      ↓
usuário preenche
      ↓
processaCadastro.php
      ↓
$_POST['nome1']
      ↓
$nome
      ↓
PHP exibe na página

