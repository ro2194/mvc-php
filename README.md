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
   php -S localhost:8080 

   
### Explicações:

- **Rodar a Aplicação com o Servidor Embutido do PHP**: Essa seção foi adicionada para instruir os usuários sobre como rodar a aplicação sem precisar de um servidor como o XAMPP, utilizando o servidor embutido do PHP.
- **`-t public`**: Isso especifica que o servidor deve servir arquivos a partir do diretório `public`.

Essas instruções cobrem tanto a execução com XAMPP quanto com o servidor embutido do PHP, dando flexibilidade para diferentes ambientes de desenvolvimento.

## Vulnerabilidade Relacionada ao Uso Inseguro de `md5($key)`

A vulnerabilidade relacionada ao uso inseguro de `md5($key)` se enquadra na **[CWE-916: Uso Inadequado de Função Criptográfica](https://cwe.mitre.org/data/definitions/916.html)**. O principal problema ocorre quando funções criptográficas desatualizadas ou inadequadas, como o **MD5**, são usadas para proteger dados sensíveis, como senhas, chaves ou outras informações confidenciais.

### Detalhes da Vulnerabilidade

- **Criptografia Fraca**: O algoritmo **MD5** foi considerado inadequado para garantir a segurança há muitos anos. Ele é suscetível a **ataques de colisão**, onde dois inputs diferentes podem gerar o mesmo hash. Isso permite que um atacante crie um valor diferente que tenha o mesmo hash, comprometendo a integridade dos dados.

- **Previsibilidade de Hashes**: Como o **MD5** não é resistente a colisões, ele também pode ser explorado em **ataques de dicionário** ou **ataques de força bruta** para encontrar a chave original, especialmente se for utilizado sem um *salt*.

A **CWE-916** especifica que o uso de criptografia insegura pode resultar em:

- Exposição de senhas.
- Quebra da confidencialidade ou integridade dos dados.
- Vulnerabilidade a ataques de força bruta.

### Mitigação

Para mitigar esse problema, recomendamos:

- Substituir o **MD5** por um algoritmo de hash mais seguro, como **SHA-256** ou superior.
- Utilizar técnicas como **salting** (incluir um valor aleatório ao input antes de hasheá-lo) e **key stretching** (usando funções como **PBKDF2**, **bcrypt**, ou **Argon2**) para aumentar a segurança.


Essa abordagem é recomendada para evitar ataques que exploram a fragilidade do **MD5** em sistemas modernos.


