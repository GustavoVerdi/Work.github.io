<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>TESTE WORK</title>
   <link rel="stylesheet" type="text/css" href="rifa.css">
   <script>
     function calcularValorTotal(idQuantidade, idValorUnitario) {
          var inputQuantidade = document.getElementById(idQuantidade);
          var quantidade = parseInt(inputQuantidade.value);

          var spanValorUnitario = document.getElementById(idValorUnitario);
          var valorUnitario = parseFloat(spanValorUnitario.innerText);

          var valorTotal = quantidade * valorUnitario;

          var divValorTotal = document.getElementById("valorTotal");
          divValorTotal.innerText = valorTotal.toFixed(2);
        }
        var quantidade = 1; // Inicializa a quantidade com 1 (pode ajustar conforme desejar)

      // Função para aumentar a quantidade
      function aumentarQuantidade(aumentarquantidade) {
          var inputQuantity = document.getElementById("quantidade");
          quantidade = parseInt(inputQuantity.value);
          if (quantidade < 100) { // Limite máximo de 100 (pode ajustar conforme desejar)
              inputQuantity.value = quantidade + 1;
          }
      }
        // Função para diminuir a quantidade
        function diminuirQuantidade() {
            var inputQuantity = document.getElementById("quantidade");
            quantidade = parseInt(inputQuantity.value);
            if (quantidade > 1) { // Impede que a quantidade fique menor que 1
                inputQuantity.value = quantidade - 1;
            }
      }
     
      // Função para abrir a subtela
       function abrirSubtela() {
        var subtela = document.getElementById("subtela");
          subtela.style.display = "block";
      }
    
    // Função para fechar a subtela
    function fecharSubtela() {
        var subtela = document.getElementById("subtela");
        subtela.style.display = "none";
    } 

    // Função para abrir a subtela ao consultar números
    function AbrirSubtelaConsulta() {
        var subtelaconsulta = document.getElementById("subtelaconsulta");
        subtelaconsulta.style.display = "block";
    }
    
    // Função para fechar a subtela ao consultar números
    function fecharSubtelaconsulta() {
        var subtelaconsulta = document.getElementById("subtelaconsulta");
        subtelaconsulta.style.display = "none";   
    }

    // Function Galeria fotos
    var currentImageIndex = 0;
        var images = ['imagem1.jpg', 'imagem2.jpg', 'imagem3.jpg']; // Substitua com os URLs ou caminhos das suas imagens

        function showNextImage() {
            currentImageIndex = (currentImageIndex + 1) % images.length;
            document.getElementById('mainImage').src = images[currentImageIndex];
        }

        function showPrevImage() {
            currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
            document.getElementById('mainImage').src = images[currentImageIndex];
        }
        // Função validar telefone
        var telefoneInput = document.getElementById("telefone");
        // Se o valor não atender à expressão regular definida no atributo "pattern"
        // Mostra uma mensagem de erro
        if (!isValid) {
        telefoneInput.setCustomValidity("Formato de telefone inválido");
          } else {
            telefoneInput.setCustomValidity("");
       }

      
</script>
<style>
body {
  align-items: center;
  margin: 0px;
  width: 100vw;
  height: 100vh;
  border: 20px;
  text-align: center;
  background-image: linear-gradient(to right, rgb(0, 0, 230), rgb(248, 248, 248));
}

#container {
  display: inline-block;
  color: #f6f6f6;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  border: 2px solid #000000;
  padding: 30px;
  background-color: #1a2a39;
}

.cabecalho,.cabecalho_menu {
  background-color: rgb(0, 0, 139);
  height: 50px;
  display: flex;
  justify-content: center;
  border: 2px solid #fefefe;
  writing-mode: horizontal-tb;
}

.ulcabecalho {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  color: #a39292;
}

.cabecalho_menu_item {
  margin: 0 10px;
  border: #e4e6e8;
}

a,
li {
  display: block;
  color: #ffffff;
  text-decoration: none;
  padding: 10px;
}

a:hover {
  background-color: #2f2e2e;
}

#barra-acoes {
  display: inline-block;
  justify-content: space-between;
  width: 100%;
  margin-bottom: 10px;
}

#botao-pagamento , #botao-consulta {
  background-color: #1d9d34;
  color: rgb(248, 244, 244);
  border: none;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}

label {
  font-weight: bold;
  margin-right: 10px;
}

input[type="number"] {
  width: 50px;
}

#numerosGerados, #numerosocultar{
display: none
}

#valorTotal {
  font-weight: bold;
}

.subtela, .subtelaconsulta {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(40, 29, 29, 0.5);
  z-index: 999;
}

.subtela-conteudo,
.inputuser,.subtela-conteudoconsulta {
  position: absolute;
  color: #1a2a39;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #d6d6d6;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(239, 237, 237, 0.5);
  max-width: 80%;
  max-height: 80%;
  overflow: auto;
  background-color: none;
  border: none;
  border-bottom: 1px solid white;
  outline: none;
  font-size: 15px;
  letter-spacing: 2px;
}
#galleryContainer {
    display: flex;
    align-items: center;
    max-width: 100%;
    position: relative; 
}

.arrow {
    font-size: 50px;
    cursor: pointer;
    padding: 10px;
    color: white;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.arrow-left {
    left: 10px;
}

.arrow-right {
    right: 10px;
}

/* Estilo CSS para a imagem principal */
.main-image {
    width: 45vw; /* Largura fixa da imagem */
    height: 30vw; /* Altura ajustada para preservar a proporção */
    max-width: 100%;
}
* {
    font-family: 'Arimo', sans-serif;
}
  @import url('https://fonts.googleapis.com/css2?family=Arimo&display=swap');

</style>

</head>
<body>
    <header>          
    </header>
    <nav class="cabecalho_menu">
            <ul class="ulcabecalho">
                <li><a class="cabecalho_menu_item" href="#wnBackup.php">Início</a></li>
                <li><a class="cabecalho_menu_item" href="#">Sorteios</a></li>
                <li><a class="cabecalho_menu_item" href="#">Contato</a></li>
              </ul>
        </nav>
        </div>
        <br>
        <div id="container">
        <div id="barra-acoes">
            <span>New Test !@#$%%¨ </span>
            <div id="galleryContainer">
                <div class="arrow arrow-left" onclick="showPrevImage()">&#8249;</div>
                <img src="imagem1.jpg" alt="Imagem 1" class="main-image" id="mainImage" onclick="openModal('imagem1.jpg')">
                <div class="arrow arrow-right" onclick="showNextImage()">&#8250;</div>        
            </div>
        <br>
        <div id="quantityContainer">
        <label for="quantidade" id="quantityLabel">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" value="1" oninput="calcularValorTotal('quantidade', 'valorUnitario')">
        <button oninput="aumentarQuantidade('aumentarquantidade')"id="aumentarquantidade">+</button>
        <button id="diminuirQuantidade">-</button>
        </div>
        <br><br>
        <div id="valorUnitarioContainer">
        <label for="valorUnitario" id="valorUnitarioLabel">Valor da Cota:</label>
        <span id="valorUnitario">0.49</span>
    <br>
        <div>
            <!-- Elemento HTML para exibir a mensagem de erro -->
            <p id="mensagemErro" style="color: red; font-weight: bold;"></p>
        </div>
        <div id="numerosocultar">
            <div id="numerosGerados"></div>
        </div>
        <div>
            <label>Valor Total:</label>
            <div id="valorTotal"></div>
        </div>
        <div>  
             <button id="botao-pagamento" onclick="abrirSubtela()">Efetuar</button>
        </div>	
        <div>
            <button id="botao-consulta" onclick="AbrirSubtelaConsulta()">Consultar Números</button>
        </div>
      <div class="subtela" id="subtela">
		<div class="subtela-conteudo">
			<form action="rifa.php" method="POST">
                <fieldset>
                <br>   
                <div >
                <label for="nome_completo">Nome Completo:</label>
                <br> 
                <input type="text" id="nome_completo" name="nome_completo" class="inputUser" required>
                    </div>
                <br><br>
                <div>
                <label for="telefone">Telefone:</label>
                  <br> 
                <input type="text" id="telefone" name="telefone" required placeholder="(99)99999-9999" maxlength="15" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
        <span class="validity"></span>
                </div>
                <br><br>
                <div>
                    <label for="email">E-mail:</label>
                    <br> 
                    <input type="email" id="email" name="email" class="inputUser" required >
                </div>    
                <br><br>
            <input type="submit" name="submit" id="subtmit" value="Efetuar Comprar">
			<button onclick="fecharSubtela()">Fechar</button>
		</div>
    </div>
    <div class="subtelaconsulta" id="subtelaconsulta">
		<div class="subtela-conteudoconsulta">
			<form action="consulta.php" method="POST">
                <fieldset>
                <br>   
                <div >
                    <label for="telefoneConsulta">Número de Telefone:</label>
                    <br>
                    <input type="tel" id="telefoneConsulta" name="telefoneConsulta" class="inputUser" required>
                </div>    
                <br><br>
            <input type="submit" name="submit" id="subtmitConsulta" value="Consultar Números">
            <button id="botao-fechar-consulta" onclick="fecharSubtelaconsulta()">Fechar</button>
        </div>
    </div>
</body>
</html>
