<?php
// Obter os dados do usuário da URL
$nome = isset($_GET['nome']) ? $_GET['nome'] : 'Antonio Marcos de Alcantara';
$email = isset($_GET['email']) ? $_GET['email'] : 'antonio@example.com';
$datanasc = isset($_GET['datanasc']) ? $_GET['datanasc'] : '01/01/1990';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Perfil Trabalhador</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
    }

    .MeuPerfilTrabalhador {
      width: 100%;
      height: 100vh;
      position: relative;
      background: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .Head, .MenuTopo {
      width: 100%;
      height: 80px;
      position: absolute;
      background: rgba(23, 71, 139, 0.90);
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .Jobsflex {
      color: rgba(217, 217, 217, 0.90);
      font-size: 32px;
      font-weight: 600;
      margin-left: 20px;
    }

    .MenuTopo {
      top: 80px;
      background: #17478B;
      display: flex;
      align-items: center;
      justify-content: space-around;
    }

    .MenuItem {
      color: white;
      font-size: 18px;
      font-weight: 600;
      cursor: pointer;
      padding: 10px;
      border-bottom: 2px solid transparent;
      transition: border-bottom 0.3s ease;
    }

    .MenuItem:hover {
      border-bottom: 2px solid white;
    }

    .Rectangle {
      width: 700px;
      height: 500px;
      margin-top: 120px;
      background: #D9D9D9;
      border-radius: 20px;
    }

    .ClienteInfo {
      margin-top: 20px;
      color: #333;
      font-size: 16px;
      font-weight: 500;
    }

    .ClienteEndereco {
      color: #555;
      font-size: 14px;
      font-weight: 400;
    }

    .Conversar, .Contato {
      width: 150px;
      height: 40px;
      margin-top: 20px;
      background: #17478B;
      border-radius: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .Conversar:hover, .Contato:hover {
      background: #0E3066;
    }

    .ProfileInfo {
      margin-top: 20px;
      color: #333;
      font-size: 18px;
      font-weight: 600;
    }

    .ProfileName {
      color: #000;
      font-size: 24px;
      font-weight: 700;
      margin-top: 10px;
    }

    .Rectangle34, .Rectangle36 {
      border-radius: 10px;
      margin-top: 20px;
    }

    .Rectangle34 {
      width: 100%;
      height: 300px;
      object-fit: cover;
    }

    .Rectangle36 {
      width: 180px;
      height: 180px;
      border: 2px #0E3066 solid;
    }
  </style>
</head>
<body>
  <div class="MeuPerfilTrabalhador">
    <div class="Head">
      <div class="Jobsflex">JobsFlex</div>
      <div class="MenuTopo">
        <div class="MenuItem">Meu Perfil</div>
        <div class="MenuItem">Serviços</div>
        <div class="MenuItem">Mensagens</div>
        <div class="MenuItem">Opções</div>
      </div>
    </div>

    <div class="Rectangle">
      <div class="ClienteInfo">Gostaria de que ajustassem a mesa da minha sala...</div>
      <div class="ClienteEndereco">
       <p>
        Cliente: <?php echo $nome; ?><br/>
        Local: Rua x, bairro y<br/>
        Número: 755-B<br/>
        Referência: próximo ao bar do Ziraldo
       </p>
      </div>

      <div class="Conversar">Conversar</div>
      <div class="Contato">Contato</div>

      <div class="ProfileInfo">Marceneiro - Ajuste de mesa</div>
      <div class="ProfileName"><?php echo $nome; ?></div>

      <img class="Rectangle34" src="./assets/Perfil_Profissional/pessoa.avif" alt="Imagem do cliente">
      
      <div style="display: flex; justify-content: space-between; margin-top: 20px;">
        <img class="Rectangle36" src="./assets/Perfil_Profissional/mesa1.avif" alt="Imagem do perfil 1">
        <img class="Rectangle36" src="./assets/Perfil_Profissional/mesa2.avif" alt="Imagem do perfil 2">
        <img class="Rectangle36" src="./assets/Perfil_Profissional/mesa3.avif" alt="Imagem do perfil 3">
      </div>
    </div>
  </div>
</body>
</html>

