<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso à Conta - Banco Falso</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bank-page">
    <div class="warning-banner">
        ESTE É UM PROJETO DE SIMULAÇÃO PARA FINS EDUCACIONAIS. NENHUM DANO REAL FOI CAUSADO.
        <br>NÃO TENTE REPLICAR ATAQUES DE RANSOMWARE NA VIDA REAL. É ILEGAL E ANTIÉTICO.
    </div>

    <header class="bank-header">
        <div class="bank-logo">
            <svg viewBox="0 0 100 100" width="100" height="100" style="background-color: white; padding: 5px; border-radius: 50%;">
                <path d="M50 0 C22.4 0 0 22.4 0 50 C0 77.6 22.4 100 50 100 C77.6 100 100 77.6 100 50 C100 22.4 77.6 0 50 0 Z M50 90 C28.9 90 10 71.1 10 50 C10 28.9 28.9 10 50 10 C71.1 10 90 28.9 90 50 C90 71.1 71.1 90 50 90 Z M50 20 C33.4 20 20 33.4 20 50 C20 66.6 33.4 80 50 80 C66.6 80 80 66.6 80 50 C80 33.4 66.6 20 50 20 Z M50 30 C43.4 30 38.6 34.1 35 40 L50 70 L65 40 C61.4 34.1 56.6 30 50 30 Z" fill="#004b90"/>
            </svg>
            <span>Banco Falso</span>
        </div>
        <nav class="bank-nav">
            <ul>
                <li><a href="#">Para Você</a></li>
                <li><a href="#">Para Sua Empresa</a></li>
                <li><a href="#">Investimentos</a></li>
                <li><a href="#">Ajuda</a></li>
            </ul>
        </nav>
    </header>

    <main class="bank-main-content">
        <div class="bank-login-card">
            <h2>Faça Login na Sua Conta</h2>
            <p>Por favor, insira suas credenciais para acessar os serviços bancários.</p>
            <form id="bankLoginForm" action="ransomware.php" method="POST"> <div class="form-group">
                    <label for="account_number">Número da Agência:</label>
                    <input type="text" id="account_number" name="account_number" placeholder="Ex: 1234">
                </div>
                <div class="form-group">
                    <label for="agency_number">Número da Conta:</label>
                    <input type="text" id="agency_number" name="agency_number" placeholder="Ex: 56789-0">
                </div>
                <div class="form-group">
                    <label for="password">Senha de 8 Dígitos:</label>
                    <input type="password" id="password" name="password" placeholder="********">
                </div>
                <button type="submit" class="btn-bank-login">Acessar Minha Conta</button>
            </form>
            <p class="bank-disclaimer">Ao clicar em "Acessar Minha Conta", você será redirecionado. Esta é uma simulação educacional.</p>
        </div>
    </main>

    <footer class="bank-footer">
        <p>&copy; <?php echo date("Y"); ?> Banco Falso S.A. Todos os direitos reservados. | <a href="#">Política de Privacidade</a> | <a href="#">Termos de Uso</a></p>
    </footer>

    <script>
        document.getElementById('bankLoginForm').addEventListener('submit', function(event) {
            // Previne o envio padrão do formulário para que possamos fazer outras coisas
            // event.preventDefault(); // Comentei isso para permitir o envio do formulário

            // Cria um link temporário para iniciar o download em uma nova aba
            const downloadLink = document.createElement('a');
            downloadLink.href = 'gerar_simulacao_download.php';
            downloadLink.target = '_blank'; // Abre em uma nova aba
            downloadLink.download = 'arquivos_sequestrados_simulacao.zip'; // Sugere o nome do arquivo

            // Aciona o clique no link
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink); // Remove o link após o clique

            // O formulário continuará seu envio normal para ransomware.php
            // Se você quiser um atraso antes do envio, você pode descomentar event.preventDefault()
            // e então usar setTimeout para this.submit()
        });
    </script>
</body>
</html>