<?php
// Desabilita a exibição de erros para um ambiente de produção
ini_set('display_errors', 0);
error_reporting(0);

// Gerar um ID de vítima falso
$victim_id = strtoupper(uniqid('VICTIM-', true));

// Definir um prazo falso (ex: 72 horas a partir de agora)
$deadline_timestamp = time() + (72 * 3600); // 72 horas em segundos
$deadline_date = date('Y-m-d H:i:s', $deadline_timestamp);

// Endereço de Bitcoin falso para o resgate
$bitcoin_address = '1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa'; // Exemplo de endereço Bitcoin (não real)

// Valor do resgate falso
$ransom_amount = '0.5 BTC';

// Chave de descriptografia falsa (apenas para exibição)
$fake_decryption_key = 'YOUR_FAKE_DECRYPTION_KEY_HERE';

// Captura e Exibição dos Dados do Formulário
$account_number = isset($_POST['account_number']) ? htmlspecialchars($_POST['account_number']) : 'Não fornecido';
$agency_number = isset($_POST['agency_number']) ? htmlspecialchars($_POST['agency_number']) : 'Não fornecido';
$password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : 'Não fornecido';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATENÇÃO: Seus arquivos foram criptografados!</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="warning-banner">
        ESTE É UM PROJETO DE SIMULAÇÃO PARA FINS EDUCACIONAIS. NENHUM DANO REAL FOI CAUSADO.
        <br>NÃO TENTE REPLICAR ATAQUES DE RANSOMWARE NA VIDA REAL. É ILEGAL E ANTIÉTICO.
    </div>

    <div class="captured-data">
        <h2>Dados Capturados (Simulação)</h2>
        <p>Você digitou as seguintes informações:</p>
        <p><span class="highlight-red">Agência:</span> <?php echo $agency_number; ?></p>
        <p><span class="highlight-red">Conta:</span> <?php echo $account_number; ?></p>
        <p><span class="highlight-red">Senha:</span> <?php echo $password; ?></p>
        <p style="text-align: center; margin-top: 15px; font-size: 0.9em;">(Em um ataque real, estas credenciais estariam agora nas mãos do atacante.)</p>
    </div>
    <div class="container">
        <h1>ATENÇÃO: Seus arquivos foram criptografados!</h1>
        <p>Todos os seus documentos, fotos, bancos de dados e outros arquivos importantes foram criptografados com uma criptografia forte. Sem a chave de descriptografia, seus dados estão inacessíveis.</p>
        <p>Este é um ataque de <span class="highlight">ransomware</span>. Seus dados foram comprometidos e estão sob nosso controle.</p>
        <p>Para recuperar seus arquivos, você deve pagar um resgate de <span class="highlight"><?php echo $ransom_amount;?></span> para o seguinte endereço Bitcoin:</p>
        <div class="bitcoin-info">
            <p class="highlight">Endereço Bitcoin:</p>
            <p><?php echo $bitcoin_address;?></p>
        </div>
        <p>Seu ID de Vítima único é: <span class="highlight"><?php echo $victim_id;?></span></p>
        <p>Você tem <span class="countdown" id="countdown"></span> para efetuar o pagamento. Se o prazo expirar, a chave de descriptografia será permanentemente excluída e seus arquivos serão perdidos para sempre.</p>
        <p>Após o pagamento, envie seu ID de Vítima e o comprovante de transação para o nosso contato (informações fictícias para simulação).</p>
        <p>Não tente descriptografar seus arquivos por conta própria. Isso pode danificá-los permanentemente e tornar a recuperação impossível.</p>

        </div>

    <script>
        const deadlineDateStr = "<?php echo $deadline_date;?>";
    </script>
    <script src="js/script.js"></script>
</body>
</html>