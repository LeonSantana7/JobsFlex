<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Jobsflex</title>
</head>
<body>

    <header>
        <div class="container" id="navbar">
            <div class="logo" width="156" height="40">
                <h1>JobsFlex</h1>
            </div>
            <div class="navbar">
                <a href="#" class="btn-header" width="156" height="52">Entrar</a>
                <a href="#" class="btn-header1" width="156" height="52">Serviços</a>
            </div>
        </div>
    </header>
    
    <!-- Login -->
    <div class="e13_19">
        <div class="e13_18"></div>
        <div class="e16_11"></div>
        <div class="e16_2">
            <img src="./assets/Logo 1.png" alt="" width="120">
        </div>
        <!-- Corrigido o atributo action do formulário -->
        <form action="LoginAction.php" method="post">
            <div class="e16_7">
                <div class="e16_6"></div>
                <div class="e16_5">
                    <label class="e16_5">Inserir Login:</label>
                    <input type="email" id="e16_5" name="email">
                </div>
            </div>
            <div class="e16_8">
                <div class="e16_9"></div> 
                <div class="e16_10">
                    <span class="e16_10">Inserir senha:</span>
                    <input type="password" id="e16_10" name="senha">
                </div>
            </div>
            <div class="e16_17">
                <div class="e16_18"></div>
                <!-- Botão de entrada -->
                <button type="submit" class="e16_19">Entrar</button>
            </div>
        </form>
        <div class="e16_23">
            <div class="e16_24"></div>
            <span class="e16_25">Cadastro</span>
        </div>
        <span class="e16_26">Recuperar senha</span>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
