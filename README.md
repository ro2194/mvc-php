# MVC PHP

Este projeto é uma aplicação PHP utilizando o padrão MVC (Model-View-Controller). Foi desenvolvido para ser executado em um servidor local, como o XAMPP, e é compatível com PHP 8.

## Pré-requisitos

- [XAMPP](https://www.apachefriends.org/index.html) instalado em sua máquina.
- PHP 8 ou superior.
- [Composer](https://getcomposer.org/) para gerenciamento de dependências (se aplicável).

## Configuração

1. **Clonar o Repositório:**

   Se você estiver usando Git, clone este repositório para o diretório `htdocs` do XAMPP:

   ```bash
   cd C:\xampp\htdocs
   git clone https://github.com/seu-usuario/meu_projeto.git

 
2. **Instalar as Dependências com Composer:**
   ```bash
   cd meu_projeto
   composer install

   ```bash
 3. **Rodar a Aplicação com o Servidor Embutido do PHP (Alternativa ao XAMPP)**
   php -S localhost:8080 -t public

   
### Explicações:

- **Rodar a Aplicação com o Servidor Embutido do PHP**: Essa seção foi adicionada para instruir os usuários sobre como rodar a aplicação sem precisar de um servidor como o XAMPP, utilizando o servidor embutido do PHP.
- **`-t public`**: Isso especifica que o servidor deve servir arquivos a partir do diretório `public`.

Essas instruções cobrem tanto a execução com XAMPP quanto com o servidor embutido do PHP, dando flexibilidade para diferentes ambientes de desenvolvimento.

