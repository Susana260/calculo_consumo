<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cálculo de consumo de Combustível</title>
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Instruções</h2>
            <div class="conteudo-painel">
                <p>Esta aplicação tem como finalidade demonstrar os valores que
                    serão gastos com combustível durante uma viagem, com base no
                consumo do seu veículo, e com a distância determinada por você</p>
            </div>
        </div>
        
        <div class="painel">
            <h2>Cálculo do valor (R$) do consumo</h2>
            <div class="conteudo-painel">
                <form action="{{url('/gasto')}}" method="get">
                    <label for="combustivel">Combustível</label>
                    <select name="combustivel">
                        <option value="Gasolina">Gasolina</option>
                        <option value="Etanol">Etanol</option>
                        <option value="Diesel">Diesel</option>
                    </select>
                    <br>
                    <label for="valorcombustivel">Valor</label>
                    <input type="number" name="valorcombustivel" step="0.1" required/>
                    <br>
                    <label for="distancia">Distancia em Km a ser percorrida</label>
                    <input type="number" class="campoTexto" name="distancia" required />
                    <br>
                    <label for="autonomia">Consumo de combustível do veículo (Km/L)</label>
                    <input type="number" class="campoTexto" name="autonomia" step="0.01" required/>
                    <br>
                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
