<!DOCTYPE html>
<html>
    <head>
        <title>Chat de WhatsApp</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
            /* Estilos para la ventana flotante */
            #whatsapp-button {
              position: fixed;
              bottom: 15px;
              right: 20px;
              z-index: 9999;
              background-color: #25d366;
              color: #fff;
              padding: 2px;
              border: none;
              border-radius: 50%;
              font-size: 24px;
              cursor: pointer;
              box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
              display: flex;
              justify-content: center;
              align-items: center;          
              animation: pulse 10s infinite;
            }

            #whatsapp-button i {
              font-size: inherit;
            }

            #whatsapp-chat {
              position: fixed;
              bottom: 75px;
              right: 20px;
              z-index: 9999;
              display: none;
              width: 300px;
              height: 320px;
              border-radius: 15px;
              box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
              overflow: hidden;
              background-color: #fff;
            }

            #whatsapp-chat .header {
              background-color: #095e54;
              color: #fff;
              padding: 10px;
              display: flex;
              justify-content: space-between;
              align-items: center;
            }

            #whatsapp-chat .header h2 {
              margin: 0;
              font-size: 14px;
            }

            #whatsapp-chat .header h3 {
              margin: 0;
              font-size: 11px;
            }        

            #whatsapp-chat .header button {
              border: none;
              background-color: transparent;
              font-size: 24px;
              color: #fff;
              cursor: pointer;
            }

            #whatsapp-chat .body {
              padding: 1px;
              height: 400px;
            }

            #whatsapp-chat .footer {
              /*background-color: #095e54;*/
              color: #fff;
              height: 90px;
              padding: 20px;
              display: flex;
              /*justify-content: space-between;*/
              align-items: center;
              align-content: center;
              align-self: center;
            }

            /*#whatsapp-chat .footer button[type="submit"] {*/
            #whatsapp-chat .footer .btn-chat {
              background-color: #14c656;
              color: #fff;
              width: 100%;
              padding: 5px;
              border: none;
              border-radius: 20px;
              font-size: 16px;
              cursor: pointer;
            }

            @keyframes pulse {
              0% {
                box-shadow: 0 0 0 0 rgba(255, 255, 200, 0.9);
              }
              20% {
                box-shadow: 0 0 0 12px rgba(255, 255, 200, 0);
              }
              40% {
                box-shadow: 0 0 0 12px rgba(255, 255, 200, 0);
              }                    
              60% {
                box-shadow: 0 0 0 12px rgba(255, 255, 200, 0);
              }
              80% {
                box-shadow: 0 0 0 12px rgba(255, 255, 200, 0);
              }          
              100% {
                box-shadow: 0 0 0 0 rgba(255, 255, 200, 0);
              }

            }

            .container1 {
              position: relative;
              width: 100%;
              height: 180px;
            }

            .image-text {
              position: absolute;
              top: 32%;
              left: 29%;
              transform: translate(-50%, -50%);
              text-align: left;
              color: #000;
              z-index: 1;
            }

            .image-text h1 {
              font-size: 10px;
            }

            .image-text h2 {
              font-size: 10px;
              padding: 0px;
            }

            .image-text2 {
              position: absolute;
              top: 42%;
              left: 50%;
              transform: translate(-50%, -50%);
              text-align: left;

              color: #000;
              z-index: 1;
            }

            .image-text2 h3 {
              font-size: 8px;
              text-align: right;
            }

            .container1 img {
              width: 100%;
              height: 190px;
              display: block;
            }        
        </style>
    </head>

    <body>
        <button id="whatsapp-button">
          <img src="assets/images/whatsapp_chat.png" alt="WhatsApp">
        </button>

        <div id="whatsapp-chat">
          <div class="header">
            <img src="assets/images/logo_reduc.png">
            <h2>Sucorte C.A.&nbsp;&nbsp;</h2>
            <button id="close-button">&times;</button>
          </div>
          <div class="body">
            <div class="container1">
                <div class="image-text">
                    <h1>Hola!</h1>
                    <h2>¿En qué podemos ayudarte?</h2>
                </div>
                <div class="image-text2">
                    <h3><div id="hora-actual"></div></h3>
                </div>
                <img src="assets/images/fondo.jpeg">
            </div>
            <div class="footer btn-chat" style="text-align: center;">
              <a href="https://wa.link/z2cofv" target="_blank" class="btn-chat">
                <img src="assets/images/whatsapp.png" alt="WhatsApp">Iniciar Chat
              </a>
            </div>            
            <!--form method="post" action="send-message.php">
              <div class="footer">
              <button type="submit"><img src="assets/images/whatsapp.png" alt="WhatsApp"> Iniciar Chat</button>
              </div>
            </form-->
          </div>
        </div>

        <script>
          const whatsappButton = document.getElementById("whatsapp-button");
          const whatsappChat = document.getElementById("whatsapp-chat");
          const closeButton = document.getElementById("close-button");

          whatsappButton.addEventListener("click", () => {
            if(whatsappChat.style.display == "block"){
                whatsappButton.style.animation = "pulse 10s infinite";
                whatsappChat.style.display = "none";
            }else{
                whatsappButton.style.animation = "none";
                whatsappChat.style.display = "block";
            }
          });

          closeButton.addEventListener("click", () => {
            whatsappButton.style.animation = "pulse 10s infinite";
            whatsappChat.style.display = "none";
          });

          window.addEventListener("click", (event) => {
            if (event.target == whatsappChat) {
              whatsappChat.style.display = "none";
            }
          });

          function mostrarHoraActual() {
              var fecha = new Date();
              var hora = fecha.getHours();
              var minutos = fecha.getMinutes();
              var ampm = hora >= 12 ? 'p.m.' : 'a.m.';
              hora = hora % 12;
              hora = hora ? hora : 12;
              minutos = minutos < 10 ? '0' + minutos : minutos;
              var horaActual = hora + ':' + minutos + ' ' + ampm;
              document.getElementById('hora-actual').innerHTML = horaActual;
          }

          // Mostrar la hora actual al abrir la ventana flotante
          window.onload = mostrarHoraActual;
        </script>
    </body>
</html>