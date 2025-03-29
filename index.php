<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1 class="texto">Conversor de (USD) para (BRL)</h1>

        <form action="" method="post">
            <label for="valor"><h2 class="subtitulo">Informe o valor em Dólar (USD):</h2></label>
            <input type="number" name="valor" step="0.01" required>
            <button type="submit">Converter</button>
        </form>
<?php
//Chave da APi
$apiKey = "Chave_API";

//Moedas utilizadas na conversão
$moedaBase = "USD";
$moedaDestino = "BRL";

//Taxa de Cêmbio
$url = "https://v6.exchangerate-api.com/v6/$apiKey/latest/USD";

//Requisição 
$buscaurl = file_get_contents($url);
$data = json_decode($buscaurl, true);

//Faz a verificação da requisição
if ($data && isset($data['conversion_rates'][$moedaDestino])) {
    $taxaCambio = $data['conversion_rates'][$moedaDestino];

// Obtendo o valor do usuário
if (isset($_POST['valor']) && is_numeric($_POST['valor'])) {
    $valor = floatval($_POST['valor']);

//Conversão
$resultado = $valor * $taxaCambio;

echo "<h4>RESULTADO DA CONVERSÃO:</h4>";
echo "<h2>$valor $moedaBase = R$ " . number_format($resultado, 2, ',', '.') . " $moedaDestino 💰</h2>";
    }
}
?>
</div>
</body>
</html>
