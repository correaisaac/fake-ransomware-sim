# ⚠️ Fake Ransomware Sim (PROJETO MERAMENTE ILUSTRATIVO!) ⚠️

Este é um projeto de simulação de phishing e ransomware criado para **fins estritamente educacionais e de demonstração**. Ele foi desenvolvido para ilustrar, de forma segura e controlada, como um ataque de engenharia social (phishing) e um ataque de ransomware poderiam se manifestar, sem causar qualquer dano real ou coletar informações sensíveis.

**É CRÍTICO ENTENDER QUE ESTE PROJETO É UMA SIMULAÇÃO.**
**NÃO TENTE REPLICAR ATAQUES DE RANSOMWARE OU PHISHING NA VIDA REAL. TAIS ATIVIDADES SÃO ILEGAIS, ANTIÉTICAS E PODEM TER GRAVES CONSEQUÊNCIAS LEGAIS E FINANCEIRAS.**

---
**⚠️EXISTE UM CÓDIGO QUE FARA COM QUE SEU PC DESLIGUE LOGO APÓS VOCÊ PASSAR DE TELA EM QUE SE PREENCHE OS DADOS DO BANCO⚠️**
---

## 📗 Documento de auxilio no estudo

PDF aqui

---

## 🎯 Objetivo do Projeto

O principal objetivo deste projeto é:

* **Educar:** Demonstrar a mecânica básica de um ataque de phishing (captura de credenciais) e de ransomware (página de demanda de resgate).
* **Conscientizar:** Aumentar a conscientização sobre os perigos da engenharia social e da importância da segurança cibernética.
* **Simular:** Oferecer um ambiente seguro para observar como essas ameaças digitais podem aparecer para um usuário leigo.

---

## 🚀 Como Rodar o Projeto Localmente

Para executar este projeto em sua máquina, você precisará de um ambiente de servidor web com PHP. O **XAMPP** é a ferramenta recomendada para usuários de Windows, Linux e macOS.

### Pré-requisitos

* **XAMPP** (ou qualquer outro servidor web que suporte PHP, como WAMP, Laragon, Apache com PHP).

### Configuração e Execução

1.  **Baixe ou Clone o Repositório:**
    ```bash
    https://github.com/correaisaac/fake-ransomware-sim.git
    ```

2.  **Mova para o Diretório do Servidor Web:**
    * Localize a pasta `htdocs` dentro da instalação do seu XAMPP (ex: `C:\xampp\htdocs`).
    * Mova a pasta `fake-ransomware-sim` (que você baixou/clonou) para dentro de `htdocs`.
        A estrutura final deve ser algo como: `C:\xampp\htdocs\fake-ransomware-sim\`.

3.  **Inicie o Apache no XAMPP:**
    * Abra o **XAMPP Control Panel**.
    * Clique no botão **"Start"** ao lado de "Apache".
    * Certifique-se de que o status do Apache mude para "Running" (geralmente verde).

4.  **Acesse o Projeto no Navegador:**
    * Abra seu navegador de internet (Chrome, Firefox, Edge, etc.).
    * Digite a seguinte URL na barra de endereços e pressione Enter:
        ```
        http://localhost/fake-ransomware-sim/
        ```

### Fluxo da Simulação

1.  **Página Inicial (Simulação de Banco):** Você será direcionado para uma página que simula um portal bancário (desenhada para parecer um banco real).
2.  **Preenchimento de Dados:** Preencha os campos de "Agência", "Conta" e "Senha". (Lembre-se, é uma simulação, nenhum dado é armazenado ou enviado!).
3.  **Redirecionamento para o Ransomware:** Após clicar em "Acessar Minha Conta", você será levado para a página de simulação de ransomware.
4.  **Dados "Capturados":** Na página de ransomware, logo abaixo do aviso principal, você verá os dados que você digitou no formulário do banco, demonstrando como credenciais podem ser comprometidas em um ataque de phishing.
5.  **Mensagem de Resgate:** O restante da página simula uma mensagem de resgate de ransomware, incluindo um ID de vítima falso, um prazo e um endereço de Bitcoin fictício.
6.  **Arquivo baixados:** Alguns arquivos .txt e um Script de desligamento são baixados e depois apagados, se não quiser que eles não sejam apagados, va no código "gerar_simulacao_download.php" e comente as linhas do código de desligamento.
7.  **Desligamento da máquina:** Sua máquina ira desligar após ser redirecionado para a proxima pagina.

---

## 📂 Estrutura do Projeto

    fake-ransomware-sim/
    ├── index.php         # Página inicial (simulação de banco)
    ├── ransomware.php    # Página da simulação de ransomware
    ├── gerar_simulacao_download.php # Script PHP para fazer download de arquivos e desligar
    ├── css/
    │   └── style.css     # Estilos CSS para ambas as páginas (incluindo responsividade e banner fixo)
    ├── js/
    │   └── script.js     # JavaScript para o cronômetro na página de ransomware
    └── docs/
        └── Análise de Ransomware.pdf # Documento de análise de ransomware
    
---

## 🎨 Design e Estilização

* **HTML, CSS e PHP:** O projeto é construído com HTML para estrutura, CSS para estilização e PHP para lógica dinâmica (geração de IDs, datas e reexibição de dados do formulário).
* **Banner de Aviso Fixo:** Um banner de aviso educacional permanece fixo no topo da tela em todas as páginas para reforçar a natureza simulada do projeto.
* **Reexibição de Dados:** Os dados digitados no formulário do "banco" são reexibidos na página de ransomware, simulando a captura de credenciais sem realmente armazená-las ou transmiti-las.

---

## ⚠️ Isenção de Responsabilidade ⚠️

Este projeto é exclusivamente para **fins educacionais e de conscientização**. Os desenvolvedores não se responsabilizam por qualquer uso indevido ou malicioso deste código. O conhecimento adquirido a partir desta simulação deve ser utilizado de forma ética e legal.
