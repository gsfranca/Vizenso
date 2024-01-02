<!DOCTYPE html>
<html lang="en">

  <head>

    <link href="css\CadastrarReserva.css" rel="stylesheet" type="text/css">
    <link href="css\bgvideo.css" rel="stylesheet" type="text/css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizenso - Reserve agora</title>

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

  <body>

    <nav class="navbar fixed-top navbar-dark bg-dark">
      <div class="container-fluid">

        <a href="#" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
          aria-controls="offcanvasScrolling">
          <img src="img\LogoVizenso.png" alt="logo" width="60" height="60">
        </a>

        <div class="d-flex justify-content-center" id="fonteGentium">
          <font color="white"> VIZENSO </font>
        </div>

        <a href="loginCliente.php" id="minhaConta">
          <ion-icon class="text-white" name="person"></ion-icon>
        </a>

      </div>
      
      <div
        class="offcanvas offcanvas-start"
        data-bs-scroll="true"
        data-bs-backdrop="true"
        tabindex="-1"
        id="offcanvasScrolling"
        aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header bg-dark" id="offcanvas-header">
          <div class="offcanvas-title" id="faixaSidebar">
            <img
              id="logoSidebar"
              src="img/LogoVizensoAberta.png"
              alt="logo"
              width="60"
              height="60" />&nbsp; <span id="spanMenu">Menu</span>
          </div>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
            id="closeSidebar"></button>
        </div>
        <div
          class="offcanvas-body"
          id="menuOptions"
          style="background-color: whitesmoke; padding-top: 10px">
          <ul>
            <li>
              <a
                class="text btn border-0"
                type="text"
                href="index.html"
                style="
                  height: 50px;
                  text-align: left;
                  color: rgba(33, 37, 41, 255);
                ">
                <ion-icon name="home"></ion-icon> &nbsp; <span>Home</span>
              </a>
            </li>
            <li>
              <a
                class="btn border-0"
                type="text"
                href="cardapio.html"
                style="
                  height: 50px;
                  text-align: left;
                  color: rgba(33, 37, 41, 255);
                ">
                <ion-icon name="book"></ion-icon>&nbsp;&nbsp;
                <span>Menu</span>
              </a>
            </li>
            <li>
              <a
                class="btn border-0"
                id="sla"
                type="text"
                href="Reservar.php"
                style="height: 50px; text-align: left">
                <ion-icon name="calendar"></ion-icon>&nbsp;&nbsp;
                <span>Reservas</span>
              </a>
            </li>
          </ul>
        </div>
      </div>

    </nav>

    

    <div class="container-fluid" id="fundoEscuro">

      <br>
      <br>

      <!--Vídeo de fundo (Background)-->

      <video autoplay muted loop class="bg_video">
        <source src="img\bg\background.mp4" type="video/mp4">
      </video>

      <!--Container de Reserva-->

      <div class="formcontainer">

        <div class="multiform-box">

          <div class="formprogress">

            <div class="logo"><span>Reserva</span></div>

            <div class="formselect">
              <select id="Reserva">
                <option value="1" selected>Mesa</option>
                <option value="2">Espaço</option>
              </select>
            </div>

            <ul class="formprogress-steps active">
              <li class="step active" id="steps1">
                <span>1</span>
                <p>Restaurante</p>
              </li>
              <li class="step" id="steps1">
                <span>2</span>
                <p>Mesa</p>
              </li>
              <li class="step" id="steps1">
                <span>3</span>
                <p>Data e Hora</p>
              </li>
            </ul>

            <ul class="formprogress-steps steps2">
              <li class="step active" id="steps2">
                <span>1</span>
                <p>Restaurante</p>
              </li>
              <li class="step" id="steps2">
                <span>2</span>
                <p>Data e Hora</p>
              </li>
              <li class="step" id="steps2">
                <span>3</span>
                <p>Música</p>
              </li>
              <li class="step" id="steps2">
                <span>4</span>
                <p>Tema</p>
              </li>
              <li class="step" id="steps2">
                <span>5</span>
                <p>Convidados</p>
              </li>
            </ul>

          </div>

          <form class="form form-Mesa active" method="POST">

            <div class="form-one form-step active" id="form-step1">

              <div class="bg-svg"></div>
              <h2>Restaurante</h2>
              <p>Escolha um restaurante</p>
              <div>
                <label>ID Restaurante: </label>
                <select name="escolhaRestMesa" id="escolhaRestaurante">

                  <option value="Restaurante X"> Restaurante X </option>
                  <option value="Restaurante Y"> Restaurante Y </option>

                </select>

              </div>
              <div>
                <label>Quantas pessoas irão? </label>
                <input type="text" name="QtdPessoas" id="QtdPessoas">

              </div>


            </div>

            <div class="form-two form-step" id="form-step1">

              <div class="bg-svg"></div>
              <h2>Mesa</h2>
              <p> Aviso </p>
              <div>
                <label> Como funciona? </label>

                A mesa é escolhida no restaurante. Clicando em "próximo" você concorda com isso.

              </div>

            </div>

            <div class="form-last form-step" id="form-step1">

              <div class="bg-svg"></div>
              <h2>Data e Hora</h2>
              <p>Escolha a data e a hora</p>
              <div>
                <label>Data</label>
                <input type="date" name="escolhaDataMesa" id="selecaoData">
              </div>
              <div>
                <label>Hora</label>
                <input type="time" name="escolhaHorarioMesa" id="selecaoHorario">
              </div>

            </div>

            <div class="button-group">
              <button type="button" class="button button-prev" id="button-prev" disabled>Anterior</button>
              <button type="button" class="button button-next" id="button-next">Póximo</button>
              <button type="submit" name="btEnviarResMesa" class="button button-submit">Finalizar Reserva</button>
            </div>

          </form>


          <form class="form form-Espaco" method="POST">

            <div class="form-one form-step active" id="form-step2">

              <div class="bg-svg"></div>
              <h2>Restaurante</h2>
              <p>Escolha o restaurante e o tipo de espaço</p>
              <div>
                <label>Restaurante</label>
                <select name="EscolhaRestEspaco" id="escolhaRestaurante">

                  <option value="Restaurante X" selected> Restaurante X </option>
                  <option value="Restaurante Y"> Restaurante Y </option>

                </select>
              </div>
              <div>
                <label>Tipo de Espaço</label>
                <select name="Espaco" id="caixaDeSelecaoTipoEsp">

                  <option value="2" selected> Espaço 2 - Reserva Privativa (Corporativa) </option>
                  <option value="3"> Espaço 3 - Reserva Privativa (Evento) </option>
                  <option value="4"> Espaço 4 - Reserva Privativa (Casal) </option>

                </select>
              </div>
              <div>
                <label>Deseja que tenha buffet? (Fornecido por Vizenso)</label>
                <select name="EsclhBuffet" id="caixaDeSelecaoBfft">

                  <option value="Espaco1"> Sim </option>
                  <option value="Espaco2"> Não </option>

                </select>
              </div>

            </div>

            <div class="form-two form-step" id="form-step2">

              <div class="bg-svg"></div>
              <h2>Data e Hora</h2>
              <p>Escolha a data e a hora</p>
              <div>
                <label>Data</label>
                <input type="date" name="DataEspaco" id="selecaoData">
              </div>
              <div>
                <label>Hora</label>
                <input type="time" name="HorarioEspaco" id="selecaoHorario">
              </div>

            </div>

            <div class="form-three form-step" id="form-step2">

              <div class="bg-svg"></div>
              <h2>Adições - Música</h2>
              <p>Conteúdos Adicionais</p>

              <div>
              
                <label>Você deseja que tenha música em seu espaço?</label>
                <select name="EscolhaMusica" id="caixaDeSelecaoMusica">

                  <option value="Espaco1"> Sim </option>
                  <option value="Espaco2"> Não </option>

                </select>
              </div>

              <div>
                <label>Se você quiser um cantor ou banda em específico, coloque aqui:</label>
                <input type="text">
                <label>Entraremos em contato o mais rápido possível.</label>
              </div>

            </div>



            <div class="form-four form-step" id="form-step2">

              <div class="bg-svg"></div>
              <h2>Adições - Tema</h2>
              <p>Conteúdos Adicionais</p>
              <div>
                <label>Se você quiser um tema para a sua festa, nos diga qual é o tema desejado</label>
                <input type="text" name="escolhaTema">
              </div>
            </div>

            <div class="form-last form-step" id="form-step2">

              <div class="bg-svg"></div>
              <h2>Adições - Convidados</h2>
              <p>Conteúdos Adicionais</p>

              <div>
                <label>Deseja ter convidados no seu espaço?</label>
                <select name="EscolhaConvidado" id="caixaDeSelecaoConvidado">

                  <option value="Espaco1"> Sim </option>
                  <option value="Espaco2"> Não </option>

                </select>
              </div>

              <div>
                <p><label>Número de convidados até o momento: </label><input style="border: 0; outline-color: transparent;"
                    id="NumConv" type="text" name="numConv" value="1" readonly></p>
              </div>

              <div class="box" id="box">
                <label>Digite o nome do convidado aqui:</label>
                <input type="text" name="txtnome1">
                <br>
              </div>

              <div>
                <button type="button" class="button" id="button-add"><ion-icon
                    name="add-outline"></ion-icon><span>Adicionar Convidado</span></button>
              </div>

            </div>

            <div class="button-group">
              <button type="button" class="button button-prev" id="button-prev2" disabled>Anterior</button>
              <button type="button" class="button button-next" id="button-next2">Próximo</button>
              <button name="btEnviarResEspaco" type="submit" class="button button-submit">Finalizar Reserva</button>
            </div>

          </form>

        </div>

        <div class="row">

          <?php

            extract($_POST, EXTR_OVERWRITE);
          if (isset($btEnviarResMesa)) {
              include_once '..\Models\ReservaMesa.php';
              $rm = new ReservaMesa();
              $rm->setRestMesa($escolhaRestMesa);
              $rm->setDataMesa($escolhaDataMesa);
              $rm->setQtdPessoas($QtdPessoas);
              $rm->setHoraMesa($escolhaHorarioMesa);
              $rm->setCodCli($_COOKIE['codCli']);
              echo "<h3><br><br>".$rm->CadastrarReservaMesa()."</h3>";
          }

          extract($_POST, EXTR_OVERWRITE);
          if (isset($btEnviarResEspaco)) {
              include_once '..\Models\ReservaEspaco.php';
              $rm = new ReservaEspaco();
              $rm->setIdEspaco($Espaco);
              $rm->setRestEspaco($EscolhaRestEspaco);
              $rm->setDataEspaco($DataEspaco);
              $rm->setHoraEspaco($HorarioEspaco);
              $rm->setTema($escolhaTema);
              $rm->setCodCliente($_COOKIE['codCli']);
              echo "<h3><br><br>".$rm->CadastrarResEsp()."</h3>";

              $re = $rm->ConsultarResEspCodHora();

              for ($i = $numConv;$i>0;$i--) {
                  include_once '..\Models\convidados.php';
                  $conv = new Convidado();
                  $conv->setNomeCvdd($_POST['txtnome'.$i]);
                  echo "<h3><br><br>".$conv->CadastrarConvidado()."</h3>";

                  $convidado = $conv->ConsultarNomeConvidados();

                  foreach ($re as $res) {
                      foreach ($convidado as $c) {
                          include_once '..\Models\convite.php';
                          $convite = new Convite();
                          $convite->setIdConvidado($c[0]);
                          $convite->setIdReservaEspaco($res[0]);
                          $convite->setCodCliente($_COOKIE['codCli']);
                          echo "<h3><br><br>".$convite->CadastrarConvite()."</h3>";
                      }
                  }
              }
          }

          ?>

        </div>

      </div>


      <br>
      <br>
      <br>

    </div>

    </div>

    <!-- Javascript -->

    <script src="js\CadastrarReserva.js"></script>

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