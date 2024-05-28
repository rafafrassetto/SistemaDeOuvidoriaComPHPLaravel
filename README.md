# Sistema E-Commerce com PHP

## Descrição

Este é um projeto de exemplo de um sistema de e-commerce simples desenvolvido utilizando apenas PHP e MySQL. A aplicação permite aos usuários visualizar produtos, adicionar produtos ao carrinho, realizar compras e aos administradores gerenciar os produtos e visa explorar a ferramenta PHP.

## Funcionalidades

- Visualização de produtos
- Adição de produtos ao carrinho de compras
- Finalização de compras
- Registro e login de usuários
- Administração de produtos (adicionar, editar, remover)

## Requisitos

- Servidor Web (Apache ou Nginx)
- PHP 7.4 ou superior
- MySQL 5.7 ou superior
- Composer (opcional para autoloading de dependências)

## Instalação

### Passo 1: Clone o Repositório

```bash
git clone https://github.com/rafafrassetto/Sistema_ECommerce_Com_PHP.git
cd Sistema_ECommerce_Com_PHP
```
## Passo 2: Configure o Banco de Dados

1. Crie um banco de dados no MySQL:

    ```bash
    CREATE DATABASE loja_virtual;
    USE loja_virtual;

    CREATE TABLE produtos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        descricao TEXT NOT NULL,
        preco DECIMAL(10, 2) NOT NULL,
        imagem VARCHAR(255) NOT NULL
    );

    CREATE TABLE usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        senha VARCHAR(255) NOT NULL
    );

    CREATE TABLE pedidos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        usuario_id INT NOT NULL,
        total DECIMAL(10, 2) NOT NULL,
        data DATETIME DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
    );

    CREATE TABLE pedido_itens (
        id INT AUTO_INCREMENT PRIMARY KEY,
        pedido_id INT NOT NULL,
        produto_id INT NOT NULL,
        quantidade INT NOT NULL,
        preco DECIMAL(10, 2) NOT NULL,
        FOREIGN KEY (pedido_id) REFERENCES pedidos(id),
        FOREIGN KEY (produto_id) REFERENCES produtos(id)
    );
    ```

2. Atualize as configurações do banco de dados no arquivo `includes/db.php`:

    ```php
    <?php
    $host = 'localhost';
    $db = 'loja_virtual';
    $user = 'seu_usuario';
    $pass = 'sua_senha';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erro de conexão: " . $e->getMessage());
    }
    ?>
    ```

## Passo 3: Configuração do Servidor

Certifique-se de que seu servidor web esteja configurado para servir arquivos PHP.

Coloque os arquivos do projeto no diretório raiz do servidor (por exemplo, `/var/www/html` para Apache).

## Passo 4: Iniciar o Projeto

Abra seu navegador e acesse `http://localhost/Sistema_ECommerce_Com_PHP` para ver a loja virtual em funcionamento.

## Uso

### Página Inicial

Acesse a página inicial para visualizar os produtos disponíveis.

### Produto

Clique em um produto para ver mais detalhes e adicioná-lo ao carrinho.

### Carrinho de Compras

Veja os produtos adicionados ao carrinho, altere a quantidade ou remova produtos.

### Finalizar Compra

Finalize a compra e veja a confirmação do pedido.

### Área de Administração

Acesse a área de administração para adicionar, editar ou remover produtos (implementar uma página de login para acessar essa área).


**Estrutura de diretórios do  projeto:**

![image](https://github.com/rafafrassetto/Sistema_ECommerce_Com_PHP/assets/88680818/0ac98247-41b3-40aa-b55e-a711904fbe81)

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para enviar pull requests ou abrir issues para reportar bugs e sugerir melhorias.

## Licença

Este projeto está licenciado sob a MIT License.

## Contato

- Email: rafafrass@gmail.com
- GitHub: [rafafrassetto](https://github.com/rafafrassetto)
- LinkedIn: [Rafael Frassetto Pereira](https://www.linkedin.com/in/rafaelfrassettopereira/)


