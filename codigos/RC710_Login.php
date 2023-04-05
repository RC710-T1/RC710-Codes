<!DOCTYPE html>
<html lang="pt">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
<?php
include 'RC710.php';
?>
body {font-family: Georgia, 'Times New Roman', Times, serif;}

/* Campos de entrada de largura total */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Define um estilo para todos os botões */
button {
  background-color: #04aaa7;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Estilos extras para o botão cancelar */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #aa0404;
}

/* Centraliza a imagem e posiciona o botão fechar */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  border-radius: 30%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* O Modal (fundo) */
.modal {
  display: none; /* Oculto por padrão */
  position: fixed; /* Fique no lugar */
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); /* Cor alternativa */
  background-color: rgba(0,0,0,0.4); /* Preto c/ opacidade */
  padding-top: 60px;
}

/* Conteúdo Modal/Caixa */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% de cima, 15% de baixo e centralizado */
  border: 1px solid #888;
  width: 80%; 
}

/* Botão Sair(x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Adicionar zomm animação */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Mudar estilos para span e botão cancelar em telas extra pequenas */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>



<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Conecte-se</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Nome</b></label>
      <input type="text" placeholder="Insira o nome" name="uname" required>

      <label for="psw"><b>Palavra passe</b></label>
      <input type="password" placeholder="Insira a palavra passe" name="psw" required>
        
      <button type="submit">Conectar</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Memorizar os meus dados
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
    </div>
  </form>
</div>
</body>
</html>