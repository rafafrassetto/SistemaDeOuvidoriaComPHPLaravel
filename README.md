# Sistema_DeOuvidoria_Com_PHP


# ⚠️⚠️ PROJETO EM DESENVOLVIMENTO ⚠️⚠️

## Descrição

Sistema de Ouvidoria Online desenvolvido em PHP, projetado para permitir que os cidadãos registrem reclamações, sugestões ou denúncias, facilitando a comunicação direta entre a população e a administração municipal. A plataforma visa melhorar a eficiência na resolução de problemas e aumentar a transparência e participação cidadã na gestão pública.

## Funcionalidades

### 1. Página Inicial
- Informações gerais sobre como usar a ouvidoria.
- Opção para login/cadastro.

### 2. Cadastro e Login
- Formulário de cadastro com validação:
  - Campos: nome completo, data de nascimento, e-mail, telefone, WhatsApp, senha e confirmação da senha, cidade e estado.
  - Todos os campos são obrigatórios.
  - A pessoa deve ter mais de 18 anos.
  - Verificação de e-mail válido.
  - Máscaras para números de telefone e WhatsApp.
  - O estado seleciona as cidades disponíveis via carregamento dinâmico.
  - Salvar dados no banco de dados com proteção contra SQL Injection.
- Envio de código de validação para o e-mail cadastrado.
- Login com criação de sessão em PHP.

### 3. Abertura de Ouvidoria
- Somente após login.
- Formulário para registro de nova ouvidoria:
  - Campos: descrição do caso, tipo de serviço afetado, anexos (1 ou mais).
  - Todos os campos são obrigatórios.
  - Anexos salvos em base64 no banco de dados.
- Validação do formulário com jQuery antes da submissão.

### 4. Listagem de Ouvidorias
- Visualização de ouvidorias abertas pelo usuário logado.

### 5. Segurança
- Proteção contra principais vulnerabilidades web (SQL Injection, XSS, etc.).
- Senhas armazenadas de forma segura.

### 6. Documentação e Código
- Código fonte bem organizado e comentado.
- Documentação clara do projeto.

## Tecnologias Utilizadas

- **Frontend:** Bootstrap, jQuery
- **Backend:** PHP puro
- **Database:** MySQL
- **Controle de Versão:** GIT

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para enviar pull requests ou abrir issues para reportar bugs e sugerir melhorias.

## Licença

Este projeto está licenciado sob a MIT License.

## Contato

- Email: rafafrass@gmail.com
- GitHub: [rafafrassetto](https://github.com/rafafrassetto)
- LinkedIn: [Rafael Frassetto Pereira](https://www.linkedin.com/in/rafaelfrassettopereira/)
