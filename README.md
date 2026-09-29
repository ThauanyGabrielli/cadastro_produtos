# cadastro_produtos
# 🛒 Cadastro de Produtos com Validação em PHP

Projeto simples de cadastro de produtos integrado ao banco de dados MySQL, com validações no servidor (backend).

---

## 🗄️ Estrutura do Banco de Dados

Execute o script SQL abaixo no **MySQL Workbench**:

```sql
CREATE DATABASE IF NOT EXISTS exercicio;
USE exercicio;

CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);
```

---

## 🚀 Como Executar

1. Abra o terminal na pasta do projeto (`cadastro_clientes`).
2. Inicie o servidor embutido do PHP:
   ```bash
   php -S localhost:8000
   ```
3. Abra o navegador e acesse:
   ```text
   http://localhost:8000/10a_desafio2.php
   ```

---

## ✅ Funcionalidades

- **Validação de Nome:** Não permite o envio do formulário com o nome em branco.
- **Validação de Preço:** Garante que o valor informado seja um número e maior que zero.
- **Inserção no Banco:** Grava as informações na tabela `produtos` caso os dados sejam válidos.
- **Mensagens de Feedback:** Exibe mensagens dinâmicas de erro (vermelho) ou sucesso (verde).
