<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizenso - Faça sua reserva!</title>
    <link href="css/reservarCSS.css" rel="stylesheet">
    <link href="css/bgvideo.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <!-- Ionicons -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Ícone -->
    <link rel="icon" type="imagem/png" href="img\favicon.ico" />


  </head>

  <body style="background-color: #357547">

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark" style="padding: 16px" id="Navbar">
      <div class="container-fluid">
        <a href="#" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
          aria-controls="offcanvasScrolling">
          <img src="img\LogoVizenso.png" alt="logo" width="60" height="60" />
        </a>

        <div class="d-flex justify-content-center" id="fonteGentium">
          <font color="white"> VIZENSO </font>
        </div>

        <a href="loginCliente.php" id="minhaConta">
          <ion-icon class="text-white" name="person"></ion-icon>
        </a>
      </div>

      <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1"
        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header bg-dark" id="offcanvas-header">
          <div class="offcanvas-title" id="faixaSidebar">
            <img id="logoSidebar" src="img/LogoVizensoAberta.png" alt="logo" width="60" height="60" />&nbsp; <span
              id="spanMenu">Menu</span>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
            id="closeSidebar"></button>
        </div>
        <div class="offcanvas-body" id="menuOptions" style="background-color: whitesmoke; padding-top: 10px">
          <ul>
            <li>
              <a class="text btn border-0" type="text" href="index.html" style="
                  height: 50px;
                  text-align: left;
                  color: rgba(33, 37, 41, 255);
                ">
                <ion-icon name="home"></ion-icon> &nbsp; <span>Home</span>
              </a>
            </li>
            <li>
              <a class="btn border-0" type="text" href="cardapio.html" style="
                  height: 50px;
                  text-align: left;
                  color: rgba(33, 37, 41, 255);
                ">
                <ion-icon name="book"></ion-icon>&nbsp;&nbsp;
                <span>Cardápio</span>
              </a>
            </li>
            <li>
              <a class="btn border-0" id="sla" type="text" href="Reservar.php" style="height: 50px; text-align: left">
                <ion-icon name="calendar"></ion-icon>&nbsp;&nbsp;
                <span>Reservas</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->


    <!-- coluna 1 -->

    <div class="container-fluid" id="containerPrincipal">

      <div class="" style="background-color: #FFFFFF" id="ReservaColunaEsquerda">

        <br>

        <center>
          <h1 id="fontePompiere">
            <font color="red" style="font-size: 50px; font-weight: bold;"> Reservas </font>
          </h1>
          <p id="fontePompiere">
            <font style="font-size: 30px;">Escolha uma mesa ou uma sala privativa e venha nos visitar.</font>
          </p>
          <br>
        </center>

        <div class="linhaReserva">

          <div class="colunaReserva">
            <img src="img/eventoCasam2.jpg" id="imagemSiteReserva">
          </div>
          <div class="colunaReserva">
            <span id="fontePompiere">Reserva de Mesa</span><br>
            <span id="fontePompiere"> Coma em uma mesa em nosso espaço comum enquanto escuta uma boa música! </span>
          </div>

        </div>

        <div class="linhaReserva" style="background-color: #D13338;">
          <div class="colunaReserva">
            <span class="textoBranco" id="fontePompiere"> Reserva Privativa (Corporativa)</span>
            <span class="textoBranco" id="fontePompiere"> Encontre-se com seus colegas de trabalho em um local grande e
              privado. </span>
          </div>
          <div class="colunaReserva Direita">
            <img src="img/restaurant4.jpg" id="imagemSiteReserva">
          </div>
        </div>


        <div class="linhaReserva">
          <div class="colunaReserva">
            <img src="img/resturant3.jpg" id="imagemSiteReserva">
          </div>
          <div class="colunaReserva">
            <span id="fontePompiere"> Reserva Privativa (Eventos) </span>
            <span id="fontePompiere"> Comemore seu evento em um local privado, perfeito para aquela festa especial!
            </span>
          </div>
        </div>


        <div class="linhaReserva" style="background-color: #D13338;">
          <div class="colunaReserva">
            <span class="textoBranco" id="fontePompiere"> Reserva Privativa (Casal)</span>
            <span class="textoBranco" id="fontePompiere"> Jante em um ambiente requintado feito para se estar com a
              pessoa amada. </span>
          </div>
          <div class="colunaReserva Direita">
            <img src="img/jantarRomantico4.png" id="imagemSiteReserva">
          </div>
        </div>


      </div>

      <!--Entre em sua conta (Login)-->

      <div class="entrar">

        <div id="divReservar" class="text-white">

          <br>
          <span id="fontePompiere">
            <font color="white" style="font-size: 50px"> <b> Entre na sua conta </b> </font>
          </span>

          <br><br>

          <a href="loginCliente.php" type="button" class="button btn btn-light btn-outline-danger" id="botaoEntrar">
            Entrar </a> <br>

          <br>

          <span id="fontePompiere">
            <font color="white" style="font-size: 40px"> ou </font>
          </span><br><span id="fontePompiere">
            <font color="white" style="font-size: 50px"> <b> Crie Uma </b> </font>
          </span>

          <br><br>

          <a href="cadastrarCliente.php" type="button" class="button btn btn-light btn-outline-danger"
            id="botaoCadastrar"> Criar conta </a>
          <br>
        </div>



      </div>

    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color:#9c1e22;" id="footer">

      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"></section>
      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">

            <!-- coluna I -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4"><ion-icon name="restaurant-outline"></ion-icon>&nbsp;
                Vizenso Restaurante
              </h6>
              <p>
                Um restaurante de comida italiana <br>
                granfina criado por Vizenso F. Bianchi
                com colaboração de Gisele Martins.
              </p>
            </div>
            <!-- coluna I -->

            <!-- coluna II -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Desenvolvedores
              </h6>
              <p>
                <a id="Desenvolvedores" href="https://github.com/AnaLuisaAugusto" class="text-reset">Ana Luisa
                  Augusto</a>
              </p>
              <p>
                <a id="Desenvolvedores" href="https://github.com/AndreiLuiz" class="text-reset">Andrei Matias</a>
              </p>
              <p>
                <a id="Desenvolvedores" href="https://github.com/EGGzin0402" class="text-reset">Eliel Godoy</a>
              </p>
              <p>
                <a id="Desenvolvedores" href="https://github.com/ECErick" class="text-reset">Erick Bastos</a>
              </p>
              <p>
                <a id="Desenvolvedores" href="https://github.com/gios11" class="text-reset">Giovana Franca</a>
              </p>
            </div>
            <!-- coluna II -->

            <!-- coluna III -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4"><ion-icon name="location-outline"></ion-icon>
                Endereços
              </h6>
              <p>
                Rua Avenida Porcino dos Santos, 44 - Vila Paranaguá/SP <br> <br>
                ........................................
                <br><br>
                Rua Antônio Chaves, 78 - São João Clímaco/SP
              </p>
            </div>
            <!-- coluna III -->

            <!-- coluna IV -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4"><ion-icon name="calendar-outline"></ion-icon>&nbsp;
                Horários
              </h6>
              <p>
                Segunda à sexta: 10h00 às 23h45 <br>
                Sábado, domingo e feriado: 10h00 às 19h30<br><br>
              </p>
            </div>
            <!-- coluna IV -->

            <!-- coluna V -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase fw-bold mb-4"><ion-icon name="people-outline"></ion-icon>
                Contato</h6>
              <p><ion-icon name="call-outline"></ion-icon><i class="fas fa-print me-3"></i> (11) 2756-2463</p>
              <p><ion-icon name="logo-whatsapp"></ion-icon><i class="fas fa-phone me-3"></i> +55 11 7004-7285 </p>
              <p><ion-icon name="logo-instagram"></ion-icon><i class="fas fa-home me-3"></i> @VizensoRstrnt</p>
              <p><ion-icon name="logo-twitter"></ion-icon><i class="fas fa-home me-3"></i> @VizensoRstrnt</p>
            </div>
            <!-- coluna V -->

          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: #4e1b22;">
        © 2021 Copyright:
        Vizenso Co.
      </div>
      <!-- Copyright -->
    </footer>

  </body>

</html>