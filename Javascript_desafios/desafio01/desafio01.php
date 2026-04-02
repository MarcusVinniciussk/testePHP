<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aumento de salario em JS!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <label for="valor">Digíte o valor do salario</label>
        <input type="number" name="valor" id="valor" min="0" required>
        <label for="porcentagem">Porcentagem para aumento!</label>
        <input type="range" name="porcentagem" id="porcentagem" min="0" max="100">
        <span id="mostrar"></span>
        
    </main>
    <script>
        // código do javascript 
        const recebeValor = document.getElementById('valor');
        const recebePorcentagem = document.getElementById('porcentagem');
        const mostrar = document.getElementById('mostrar');

        recebeValor.addEventListener('input',atualizar);
        recebePorcentagem.addEventListener('input',atualizar);

        function atualizar(){

            let valor = Number(recebeValor.value);

            let porcentagem = Number(recebePorcentagem.value);

            let aumento =  valor * (porcentagem / 100);

            let valorTotal = valor + aumento; 
            
            mostrar.textContent = `porcentagem: ${porcentagem}% | Aumento: R$${aumento} | Total: R$${valorTotal}`
        }
    </script>
    
</body>
</html>