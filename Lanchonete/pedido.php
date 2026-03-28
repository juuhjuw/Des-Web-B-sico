<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <form method="post" class="card p-4 shadow">
        
        <div class="mb-3">
            <label>Seu nome:</label>
            <input type="text" name="nomeCliente" class="form-control" required>
        </div>
        

         <div class="mb-3">
            <label>Escolha um produto:</label>
            <select name="produto" class="form-select" required>
                <option value="">Selecione</option>
                <option value="Pastel de Carne">Pastel de Carne</option>
                <option value="Pastel de Frango e Queijo">Pastel de Frango e Queijo</option>
                <option value="Pastel de Queijo">Pastel de Queijo</option>
            </select>
        </div>


           <div class="mb-3">
            <label>Tamanho:</label><br>
            <input type="radio" name="tamanho" value="Pequeno" required> Pequeno
            <input type="radio" name="tamanho" value="Médio"> Médio
            <input type="radio" name="tamanho" value="Grande"> Grande
        </div>


       <div class="mb-3">
            <label>Adicionais:</label><br>
            <input type="checkbox" name="adicionais1" value="Queijo"> Queijo
            <input type="checkbox" name="adicionais2" value="Bacon"> Bacon
            <input type="checkbox" name="adicionais3" value="Molho Especial"> Molho Especial
        </div>

        <div class="mb-3">
            <label>Quantidade:</label>
            <input type="number" name="quantidade" class="form-control" min="1" required>
        </div>

    <button type="submit">Enviar pedido</button>

</form>

<?php

if (isset($_POST[""], $_POST[""], $_POST[""])) {

}

?>



</body>
</html>