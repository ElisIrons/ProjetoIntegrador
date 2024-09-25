
# Projeto Integrador - Loja de Calçados HermeShoes

Este projeto foi desenvolvido como atividade finaldo curso Técnico em Informática EAD do IFSul de Minas - campus Muzambinho, com foco no desenvolvimento de um website para a loja de calçados HermeShoes.

## O que foi solicitado:

- **Levantamento de Requisitos**: Identificação das necessidades do cliente/usuário, definição do objetivo do site e escopo do projeto. **(2,0 pontos)**
- **Prototipagem**: Criação de um wireframe da página de baixa fidelidade utilizando o Figma. **(2,0 pontos)**
- **Diagrama de Caso de Uso**: Utilização do Visual Paradigm Online para demonstrar as diferentes maneiras que o usuário pode interagir com o sistema. **(3,0 pontos)**
- **Desenvolvimento do Website**: Implementação do site utilizando HTML, CSS e PHP através da IDE Visual Studio Code. **(3,0 pontos)**

## Funcionalidades

- Navegue pelas diferentes páginas para ver os produtos disponíveis na loja.
- Preencha o formulário de cadastro.
- Calcule o frete para suas compras.

## Estrutura do Projeto

- `index.php`: Página inicial, onde o usuário pode acessar as principais seções do site.
- `botas.php`: Página com informações sobre botas disponíveis.
- `cadastro.php`: Formulário HTML para coleta de informações dos usuários.
- `frete.php`: Formulário para inserir o frete.
- `calcula_frete.php`: Script para calcular o frete.
- `dados_recebidos.php`: Página que recebe os dados enviados pelo formulário e armazena em um arquivo JSON.
- `infantil.php`: Página dedicada a calçados infantis.
- `lançamentos.php`: Página com as novidades da loja.
- `ofertas.php`: Página com ofertas especiais.
- `tenis.php`: Página com informações sobre tênis disponíveis.
- `topo.php`: Arquivo PHP incluído em todas as páginas, fornecendo o cabeçalho do site.
- `tudo.php`: Página que agrega todas as opções de produtos.
- `script.js`: Arquivo JavaScript para funcionalidades adicionais.
- `estilohermes.css`: Arquivo de estilos para o layout das páginas.
- `imagens/`: Pasta com imagens utilizadas nas páginas.
- `testes/`: Pasta contendo os testes automatizados usando Selenium WebDriver:
  - `botasTest.php`: Teste de acesso à página de botas.
  - `cadastroTest.php`: Teste de envio do formulário de cadastro.
  - `freteTest.php`: Teste de cálculo do frete.
  - `indexTest.php`: Teste de acesso às principais seções do site.
- `vendor/`: Pasta gerenciada pelo Composer.

## Requisitos

- **PHP** (versão 8.3.11 ou superior)
- **Composer** para gerenciamento de dependências PHP
- **XAMPP** ou outro servidor local de desenvolvimento com Apache e MySQL
- **Google Chrome** (versão 129 ou superior)
- **ChromeDriver** (compatível com a versão do Chrome instalada, no meu caso foi a versão 129)
- **Selenium WebDriver** (configurado como um servidor standalone)

## Instruções para Execução do Projeto

1. **Clone o Repositório**:
   ```bash
   git clone https://github.com/seu-repositorio/HermeShoes.git
   cd HermeShoes
   ```

2. **Instale as Dependências PHP**:
   Execute o Composer para instalar as dependências do Selenium WebDriver:
   ```bash
   composer install
   ```

3. **Configuração do Selenium**:
   Baixe e configure o ChromeDriver de acordo com a versão do Google Chrome instalada. Em seguida, inicie o servidor Selenium:
   ```bash
   java -jar selenium-server-4.24.0.jar standalone
   ```

4. **Execute o Servidor Local**:
   No XAMPP ou em outro servidor local, inicie o Apache:
   ```bash
   xampp-control
   ```

5. **Acesse o Site**:
   Abra o navegador e acesse o site:
   ```bash
   http://localhost/HermeShoes/index.php
   ```

6. **Executar Testes Automatizados**:
   Para rodar os testes do Selenium, execute os seguintes comandos na pasta de testes:
   ```bash
   php testes/indexTest.php
   php testes/botasTest.php
   php testes/cadastroTest.php
   php testes/freteTest.php
   ```




https://github.com/user-attachments/assets/333cab14-cdfe-454d-89a7-282fffd184f4



