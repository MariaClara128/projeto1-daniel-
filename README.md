### STREAMC

--- 

##  Explicação do Código

O meu projeto, chamado **StreamMC**, é um site inspirado na **Netflix**, desenvolvido em **PHP** com o objetivo de praticar o uso de páginas dinâmicas, organização de layouts com includes e integração com banco de dados MySQL.  
Além do design principal, implementei dois módulos de CRUD: um para **clientes** (feito em sala de aula) e outro para **produtos**, representando o **catálogo de filmes e séries**.

---

###  Estrutura do Site

O **StreamMC** foi desenvolvido para ter a aparência de uma plataforma de streaming.  
Na **página inicial (`index.php`)**, há uma mensagem de boas-vindas —  
**“Bem-vindos ao StreamMC – catálogo personalizado por Clarinha”** — com um botão de **cadastro**.

O site é dividido em seções acessadas pelo menu superior:
- **Início** – Exibe o catálogo de filmes e séries;  
- **Quem Somos** – Apresenta informações sobre o projeto;  
- **Fale Conosco** – Página de contato;  
- **Usuários** – Direciona para a área administrativa.

Para manter o código mais limpo e organizado, utilizei arquivos PHP separados para o **topo (`topo.php`)**, **menu (`menu.php`)** e **rodapé (`rodape.php`)**, que são incluídos nas páginas através de `include_once`.  
Assim, qualquer alteração de layout é feita em um único lugar e se reflete em todo o site.

---

###  Parte Administrativa e CRUD

O sistema também conta com uma área administrativa, usada para gerenciar dados através do banco de dados.  
Foram criados dois módulos principais:

####  CRUD de Clientes
Essa parte foi feita em sala de aula.  
Ela permite cadastrar, listar, alterar e excluir **clientes**, salvando os dados no banco.  
Esses arquivos estão dentro da pasta `admin/` e utilizam `mysqli` para comunicação com o banco de dados.

####  CRUD de Produtos (Novo Módulo)
Depois, adicionei um **novo CRUD**, localizado na pasta `crud_produtos/`, responsável por gerenciar os **filmes e séries do catálogo**.  
Esse módulo inclui as quatro operações principais do CRUD:

| Ação | Descrição | Arquivo |
|------|------------|---------|
| **C - Create** | Cadastrar novos produtos (filmes/séries) | `cadastrar-produto.php` |
| **R - Read** | Listar e visualizar os produtos cadastrados | `listar-produtos.php` |
| **U - Update** | Alterar informações de um produto existente | `editar-produto.php` |
| **D - Delete** | Excluir produtos do sistema | `excluir-produto.php` |

O arquivo `conexao.php` é responsável por conectar o sistema ao banco de dados MySQL.

---

###  Banco de Dados

O projeto utiliza o banco **MySQL**, criado a partir do script `sistema.sql`.  
Ele contém duas tabelas principais:

- **clientes** – armazena nome, cidade e estado dos usuários;  
- **produtos** – armazena informações sobre os filmes e séries (nome, categoria, preço, quantidade e descrição).

Cada tabela possui uma **chave primária (`id`)** que é **auto incrementada**.

---

### Tecnologias Utilizadas

- **PHP** → linguagem principal do projeto  
- **HTML5 / CSS3** → estrutura e estilo das páginas  
- **MySQL** → armazenamento dos dados  
- **XAMPP** → ambiente local de desenvolvimento (Apache + MySQL)  
- **Includes em PHP** → organização e reaproveitamento de layout

---

###  Objetivo do Projeto

O principal objetivo do projeto foi **aprender a construir um CRUD completo** integrado a um site real.  
Com isso, consegui unir o **design visual (front-end)** com as **operações de banco de dados (back-end)**, criando uma aplicação funcional e parecida com um sistema profissional de streaming.

---

### Resultado Final

O resultado é o site **StreamMC**, uma plataforma com aparência moderna e totalmente funcional.  
O usuário vê o catálogo de filmes e séries na página inicial, enquanto o administrador pode **cadastrar, editar e excluir títulos** através do sistema de CRUD.

Esse projeto representou uma junção entre **criatividade, design e lógica de programação**, mostrando o funcionamento real de um sistema completo com PHP e MySQL.

---
