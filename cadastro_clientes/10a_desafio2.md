### 🛒 Desafio 2 (Alternativo): Cadastro de Produtos com Validação 🛡️

Crie um script PHP para cadastrar produtos. Ele deve ter uma validação para garantir que apenas dados válidos sejam inseridos no banco.

1.  **📦 Tabela:** No banco de dados `exercicio`, crie uma nova tabela chamada `produtos` com a seguinte estrutura:
    ```sql
    CREATE TABLE produtos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        preco DECIMAL(10, 2) NOT NULL
    );
    ```

2.  **📝 Formulário:** Crie um formulário HTML сom os campos "Nome do Produto" (texto) e "Preço" (número).

3.  **✅ Validação:** Antes de inserir, verifique em PHP se:
    * O nome do produto não está vazio.
    * O preço é um número e é **maior que zero**.

4.  **💾 Inserção:**
    * Se os dados forem válidos, insira o produto na tabela `produtos` e mostre a mensagem: "Produto cadastrado com sucesso!".
    * Se os dados forem inválidos, mostre uma mensagem de erro específica, como: "Erro: O preço deve ser um número positivo.".