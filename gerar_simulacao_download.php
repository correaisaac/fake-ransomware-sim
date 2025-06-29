<?php
// Desabilita a exibição de erros para um ambiente de produção
ini_set('display_errors', 0);
error_reporting(0);

// Função para gerar uma chave aleatória
function gerarChave($tamanho = 32) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $tamanhoCaracteres = strlen($caracteres);
    $chave = '';
    for ($i = 0; $i < $tamanho; $i++) {
        $indice = rand(0, $tamanhoCaracteres - 1);
        $chave .= $caracteres[$indice];
    }
    return $chave;
}

// Gerar a chave de descriptografia para esta simulação
$chaveDescriptografia = gerarChave();

// Conteúdo do arquivo de resgate .txt
$mensagemResgate = "ATENÇÃO! SEUS ARQUIVOS FORAM 'CRIPTOGRAFADOS' (SIMULAÇÃO).\n\nVocê deve pagar o resgate para receber a chave de descriptografia!\n\nCHAVE DE DESCRIPTOGRAFIA (para esta simulação): " . $chaveDescriptografia . "\n\nESTE É UM EXERCÍCIO EDUCACIONAL. NENHUM DADO REAL FOI SEQUESTRADO.";

// Conteúdo do arquivo de exemplo "criptografado" (simulado)
// O NOME DO ARQUIVO É DEFINIDO AQUI, COM A INDICAÇÃO DE 'CRIPTOGRAFADO'
$conteudoArquivoExemploSimulado = "Este é um arquivo de exemplo que seria 'criptografado' na simulação. Seu conteúdo real foi 'sequestrado'.\n\nCHAVE DE DESCRIPTOGRAFIA (para esta simulação): " . $chaveDescriptografia;
$nomeArquivoExemploSimulado = 'documento_importante_CRIPTOGRAFADO.txt';

// Conteúdo do novo arquivo "Cuidado.txt"
$mensagemCuidado = "cuidado com o que você baixa na net kkkkkkkk PS: Tudo com fins didaticos";
$nomeArquivoCuidado = 'Cuidado.txt';

// Compactar e enviar ambos os arquivos em um ZIP
$zipFileName = 'arquivos_sequestrados_simulacao.zip';
$zip = new ZipArchive();

if ($zip->open($zipFileName, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
    // Adiciona o arquivo de resgate
    $zip->addFromString('LEIA_ME_RESGATE.txt', $mensagemResgate);
    
    // Adiciona o arquivo de exemplo "criptografado" com o nome simulado
    $zip->addFromString($nomeArquivoExemploSimulado, $conteudoArquivoExemploSimulado);
    
    // *** ADICIONA O NOVO ARQUIVO "Cuidado.txt" ***
    $zip->addFromString($nomeArquivoCuidado, $mensagemCuidado);
    
    $zip->close();

    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="' . $zipFileName . '"');
    header('Content-Length: ' . filesize($zipFileName));
    readfile($zipFileName);
    
    // Opcional: Remover o arquivo ZIP após o download
    unlink($zipFileName);
    exit;

} else {
    // Se a criação do ZIP falhar, fallback para download apenas do TXT de resgate
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="ERRO_LEIA_ME_RESGATE.txt"');
    echo "Houve um erro ao gerar os arquivos simulados. Por favor, tente novamente.\n\n";
    echo $mensagemResgate;
    exit;
}