# Conversor de Moeda (USD → BRL)  
Projeto do Curso e Estudo Pessoal com Foco em Desenvolvimento Web com PHP

## Descrição  
Projeto desenvolvido com o objetivo de praticar conceitos básicos de PHP, integração com APIs externas e criação de um sistema funcional de conversão de moedas.  
Utiliza a ExchangeRate-API para obter a taxa de câmbio em tempo real do Dólar Americano para o Real Brasileiro.

---

## Instalação  
Passos para executar o projeto localmente:

1. Faça o clone do repositório:
   ```bash
   git clone https://github.com/seu-usuario/conversor-moeda-php.git
   ```

2. Acesse a pasta do projeto:
   ```bash
   cd conversor-moeda-php
   ```

3. Substitua a string `"Chave_API"` no arquivo pelo token da sua conta ExchangeRate-API:
   ```php
   $apiKey = "SUA_CHAVE_API_AQUI";
   ```

4. Execute o projeto em um servidor local com suporte a PHP, como XAMPP, WAMP, Laragon ou similar.

5. Acesse o navegador:
   ```
   http://localhost/conversor-moeda-php/
   ```

---

### 💻 Tecnologias Utilizadas

- HTML5    
- PHP  
- ExchangeRate-API

---

## 🧠 Boas Práticas

1. **Organização dos Arquivos**
    - Todo o código (HTML + PHP) foi feito no mesmo arquivo para fins de simplicidade e aprendizado.
    - A lógica PHP está embutida diretamente no arquivo .php, mas o projeto pode ser evoluído futuramente para seguir uma estrutura MVC (Model-View-Controller) para melhor organização e manutenção do código.

2. **Segurança com APIs**
    - Nunca versionar arquivos com chaves de API reais.
    - Utilizar variáveis de ambiente ou arquivos `.env` (para projetos maiores).

---

## 📘 Conceitos Aprendidos e Aplicados

- Consumo de API externa com `file_get_contents`
- Manipulação e tratamento de dados com `json_decode`
- Verificação de entrada do usuário com `isset()` e `is_numeric()`
- Exibição de resultado com `echo` e `number_format()`
- Organização básica de um projeto PHP com HTML

---

## 📌 Observações

- O projeto depende de uma **conexão com a internet** para realizar a conversão, pois utiliza uma API externa.
- API gratuita disponível em: [https://www.exchangerate-api.com]

---

## ✍️ Autor

Desenvolvido por **Davi Vieira de Souza**  
📧 [https://www.linkedin.com/in/davivieiraa]

---