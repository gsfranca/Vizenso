<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizenso - Cadastrar</title>
    <link href="css/config.css" rel="stylesheet">
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
    <link rel="icon" type="imagem/png" href="favicon.ico" />

  </head>

  <body>

    <nav class="navbar fixed-top navbar-dark bg-dark">
      <div class="container-fluid">

        <a href="#" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
          aria-controls="offcanvasScrolling">
          <img src="img/LogoVizenso.png" alt="logo" width="60" height="60">
        </a>

        <div class="d-flex justify-content-center" id="titulo">
          <font color="white"> VIZENSO </font>
        </div>

        <a href="minhaConta.php">
          <img src="img/claudete.jpg" class="fotoCliente" alt="logo" width="60" height="60">
        </a>

      </div>

    </nav>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1"
      id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
      <div class="offcanvas-header bg-dark">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">
          <font color="white"> <img src="img/LogoVizensoAberta.png" alt="logo" width="60" height="60"> Menu </font>
        </h5>
        <button type="button" class="btn-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <p> • <a type="button" href="index.html"> Home </a> </p>
        <p>• Cardápio</p>
        <p>• Reservas</p>
        <p>• Contato</p>
      </div>
    </div>

    <video autoplay muted loop class="bg_video">
      <source src="bg/background.mp4" type="video/mp4">
    </video>

    <br>
    <br>
    <br>

    <div id="BemVindo">

      <div class="container text-white">

        <br>
        <br>


        <form name="CadastrarCliente" action="" method="POST">

          <fieldset id="a">

            <legend>
              <center>
                <h1> Cadastre-se </h1>
              </center>
            </legend>

            <div class="mb-1">
              <b> &nbsp; Nome completo: </b> <input name="txtNomeClie" placeholder="Seu nome" type="text"
                class="form-control" style="width: 100%;" id="InputNomeCompleto1" required>

              <br>
              <div class="row">
                <div class="col-6">

                  <b> &nbsp; CPF: </b> <input name="txtCPFClie" placeholder="000.000.000-00" type="text"
                    class="form-control" style="width: 100%;" id="InputCPFClie1" required> <br>
                  <b> &nbsp; RG: </b> <input name="txtRGClie" placeholder="00.000.000-0" type="text"
                    class="form-control" style="width: 100%;" id="InputRGClie1" required>

                </div>
                <div class="col-6">

                  <b> &nbsp; Email: </b> <input name="txtEmailCli" placeholder="XXXXXX@XXXX.XXX" type="email"
                    class="form-control" style="width: 100%;" id="InputEmailCli1" required> <br>
                  <b> &nbsp; Senha: </b> <input name="txtSenhaCli" placeholder="*********" type="password"
                    class="form-control" style="width: 100%;" id="InputSenhaCli1" required>

                </div>
              </div>


              <br>




            </div>

            <br>

            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
              <label class="form-check-label" for="exampleCheck1"> &nbsp; Concordo com todos os termos de
                serviços</label>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1"> &nbsp; Concordo em receber mensagens promocionais
                (Opcional)</label>
            </div>



          </fieldset>
          <br>

          <center>

            <fieldset id="b">

              <button type="submit" class="btn button btn-light" style="height: 7%" name="btnSalvar"> Finalizar Cadastro
              </button>

              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <button type="reset" class="btn button btn-light" style="height: 7%" href="Reservar.php"
                onclick="location.href='Reservar.php'"> Finalizar Cadastro e fazer uma Reserva </button>


            </fieldset>

          </center>

        </form>

        <?php


        extract($_POST, EXTR_OVERWRITE);
        if (isset($btnSalvar)) {
            include_once "RegistroCliente.php";
            $c = new RegistroCliente();
            $c->setNomeClie($txtNomeClie);
            $c->setCPFClie($txtCPFClie);
            $c->setRGClie($txtRGClie);
            $c->setEmailCli($txtEmailCli);
            $c->setSenhaCli($txtSenhaCli);
            echo "<h1> <br> " . $c->CadastrarConta() . "</h1>";
        }

        ?>

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
                <a href="#!" class="text-reset">Ana Luisa Augusto</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Andrei Matias</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Eliel Godoy</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Erick Bastos</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Giovana Franca</a>
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
              <p><ion-icon name="call-outline"></ion-icon><i class="fas fa-print me-3"></i>(11) 2756-2463</p>
              <p><ion-icon name="logo-whatsapp"></ion-icon><i class="fas fa-phone me-3"></i> +55 11 7004-7285 </p>
              <p><ion-icon name="logo-instagram"></ion-icon> &nbsp; @VizensoRstrnt</p>
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
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">COVizenso.com</a>
      </div>
      <!-- Copyright -->
    </footer>

  </body>

</html>