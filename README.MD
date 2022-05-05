<h2 align="center">
  Desafio Economapas
</h2>

## 🚀 Objetivo

A prefeitura de uma cidade no interior do país está com dificuldades para controlar suas escolas públicas. Já existe um controle feito em Excel para controle das escolas e suas turmas, porém, o cadastro está sempre obsoleto por não existir um sistema centralizado de controle destes alunos. A prefeitura então nos contratou para desenvolver um sistema online onde serão cadastradas as escolas públicas e suas respectivas turmas.

Foi especificado que o sistema será composto por 2 ferramentas: uma para listagem/cadastro das escolas, e outra para o cadastro/listagem das turmas de cada escola.

Foi implementado um sistema de login e senha para o acesso ao sistema onde podem ser inseridos novos usuarios e também novos níveis de usuarios. E além do especificado, foi implementado as funções de edição e exclusão de dados cadastrados.

Usuário já cadastrado:

- Email: admin@smerj.com.br
- Senha: 12345;

Ao entrar, o usuário vê a tela de criação/exbição das escolas:

- Criar uma nova escola;
- Visualizar escolas criadas;
- Editar uma escola existente;
- Excluir uma escola criada;

Pela barra de menu o usuário pode ir para as paginas de criação/exbição das escolas, turmas, usuários e niveis podendo fazer todos os processos de inclusão, edição, listagem e exlusão.

## Pré-requisitos necessários para a utilização da Aplicação

- Instale um servidor php e mysql em seu computador.
- Clone os aquivos do repositório.

```sh
git clone https://github.com/gspgaby/Gerenciamento-Escolas.git
```

- Após entrar na pasta clonada, tendo um servidor php e mysql ligados na sua maquina , utilize o comando:

```sh
php -S localhost:8080
```

- Crie um banco de dados e importe o aquivo da pasta bd para o seu aplicativo administrador de banco de dados mysql e agora é só logar com algum usuario cadastrado. Um modelo da configuração do para o banco de dados foi fornecido.

- Acesse http://localhost:8080 no seu navagador;

# Autora

- [Gabriella dos Santos Pereira](https://github.com/gspgaby)
