<!DOCTYPE html>
<html>
   <head>
      <title>Menu de Opções</title>
      <style>
         /* Estilos para o menu pop-up */
         .popup {
            position: absolute;
            display: none;
            background-color: #f1f1f1;
            border: 1px solid #ddd;
            padding: 10px;
         }
      </style>
   </head>
   <body>
      <h1>Minha Página</h1>
      <button onclick="mostrarPopup()">Opções</button>
      <div id="popup" class="popup">
         <a href="#">Os meus dados</a>
         <br>
         <a href="#">Terminar sessão</a>
         <br>
         <a href="#">Eliminar Conta</a>
      </div>
      <script>
         // Lógica para exibir o menu pop-up
         function mostrarPopup() {
            var popup = document.getElementById("popup");
            if (popup.style.display === "none") {
               popup.style.display = "block";
            } else {
               popup.style.display = "none";
            }
         }
      </script>
   </body>
</html>
