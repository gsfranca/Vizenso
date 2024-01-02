<?php

  include_once "..\Models\RegistroCliente.php";
  $c = new RegistroCliente();
  $c->setCPFClie($_COOKIE['CPF']);
  $c_bd= $c->ConsultarCliente();

  foreach ($c_bd as $c_mostrar) {
      setcookie('codCli', $c_mostrar[0], time() + 3600);
  }

  ?>

<html>

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizenso - Minha Conta</title>

    <!-- CSS -->
    <link href="css\minhaContaCSS.css" rel="stylesheet">
    <link href="css\bgvideo.css" rel="stylesheet">

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

  <body style="background-color: #77171a;">

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

    <?php


  include_once "..\Models\RegistroCliente.php";
  $c = new RegistroCliente();
  $c->setCPFClie($_COOKIE['CPF']);
  $c_bd= $c->ConsultarCliente();


  ?>


    <!-- Divisão Meio -->
    <div class="container-fluid">

      <?php

      foreach ($c_bd as $c_mostrar) {
          ?>

      <div class="col text-white">

        <div class="card" id="cardEsquerdoMC">
          <div class="card-body">


            <?php echo "<h1 id='fontePompiere'> <center>" . $c_mostrar[1] . "</center> </h1>"?>
            <?php echo "<center> <b> Email: </b>" . $c_mostrar[4] . "</center>"?>

            <br><br><br><br>

            <div class="row" style="background-color: #77171a;">
              <div class="col text-white">


                <button class="btn text-white" type="button" data-bs-toggle="collapse" data-bs-target="#MeusDados"
                  aria-expanded="false" aria-controls="MeusDados">• Meus Dados</button>


              </div>
            </div>
            <div class="row" style="background-color: #9c1e22;">
              <div class="col text-white">


                <button class="btn text-white" type="button" data-bs-toggle="collapse" data-bs-target="#MinhasReservas"
                  aria-expanded="false" aria-controls="MeusDados">• Minhas Reservas</button>


              </div>
            </div>

          </div>
        </div>

        <?php

            extract($_POST, EXTR_OVERWRITE);
          if (isset($btnAlterar)) {
              include_once "..\Models\RegistroCliente.php";
              $c = new RegistroCliente();
              $c->setNomeClie($txtNomeClie);
              $c->setCPFClie($txtCPFClie);
              $c->setRGClie($txtRGClie);
              $c->setEmailCli($txtEmailCli);
              $c->setSenhaCli($txtSenhaCli);
              $c->setCodCliente($CodCliente);
              echo "<br> <br> <h5 style=\"padding-left:2.5%;\">" . $c->AlterarCliente2() . "</h5>";
          }

          ?>

      </div>

      <div class="container-fluid" style="background-color: rgb(255, 255, 255);" id="cardDireitoMC">

        <div class="collapse show" id="MeusDados">

          <div class="card border-0">

            <div class="card-body">

              <form name="cliente" method="POST" action="">

                <center>
                  <h1 id="fontePompiere">
                    <font color="red"> Dados Pessoais </font>
                  </h1>
                </center>

                <div class="mb-1">
                  <b> &nbsp; Código de Cliente: </b> <input type="text" name="CodCliente"
                    value="<?php echo $c_mostrar[0] ?>"
                    class="form-control" style="width: 11%;" id="InputIdCliente1" readonly>
                </div>

                <br>

                <div class="mb-1">
                  <b> &nbsp; Nome completo: </b>
                  <?php echo $c_mostrar[1] ?>
                </div>

                <br>

                <div class="mb-1">
                  <b> &nbsp; CPF: </b> <?php echo $c_mostrar[2] ?>
                  <br>                
                </div>

                <br>

                <div class="mb-1">
                  <b> &nbsp; RG: </b> <?php echo $c_mostrar[3] ?>
                  <br>                  
                </div>

                <br>

                <center> <button name="btnEnviar" type="button" class="button btn btn-outline-danger"
                    data-bs-toggle="collapse" data-bs-target="#Alterar" aria-expanded="false"
                    aria-controls="Alterar">Alterar
                    Dados</button>


              </form>

            </div>

          </div>

          <div class="collapse" id="Alterar">

            <div class="card border-0">

              <div class="card-body">
                <br>

                <?php

          $CodCliente = $c_mostrar[0];
          include_once '..\Models\RegistroCliente.php';
          $c = new RegistroCliente();
          $c->setCodCliente($CodCliente);
          $c_bd=$c->AlterarCliente();

          ?>

                <p align="right">

                <form name="cliente2" method="POST" action="">

                  <center>
                    <h1 id="fontePompiere">
                      <font color="red"> Dados Pessoais (Alterar) </font>
                    </h1>
                  </center>

                  <?php

            foreach ($c_bd as $c_mostrar) {
                ?>

                  <div class="mb-1">
                    <b> &nbsp; Código de Cliente: </b> <input type="text" name="CodCliente" placeholder="0" type="text"
                      class="form-control" style="width: 75%;" id="InputIdCliente1"
                      value="<?php echo $c_mostrar[0]?>" readonly>
                    <div class="form-text"> &nbsp;&nbsp; Código gerado automaticamente...</div>
                  </div>

                  <br>

                  <div class="mb-1">
                    <b> &nbsp; Nome completo: </b> <input name="txtNomeClie"
                      placeholder="<?php echo $c_mostrar[1] ?>"
                      type="text" class="form-control" style="width: 75%;" id="InputNomeCompleto1"
                      value="<?php echo $c_mostrar[1] ?>">
                  </div>

                  <br>

                  <div class="mb-1">
                    <b> &nbsp; CPF: </b> <input name="txtCPFClie"
                      placeholder="<?php echo $c_mostrar[2] ?>"
                      type="text" class="form-control" style="width: 14rem;" id="InputCPF1"
                      value="<?php echo $c_mostrar[2] ?>">
                  </div>

                  <br>

                  <div class="mb-1">
                    <b> &nbsp; RG: </b> <input name="txtRGClie"
                      placeholder="<?php echo $c_mostrar[3] ?>"
                      type="text" class="form-control" style="width: 14rem;" id="InputRG1"
                      value="<?php echo $c_mostrar[3] ?>">
                  </div>

                  <br>

                  <div class="mb-1">
                    <b> &nbsp; Email: </b> <input name="txtEmailCli"
                      placeholder="<?php echo $c_mostrar[4] ?>"
                      type="email" class="form-control" style="width: 75%;" id="InputEmail1"
                      value="<?php echo $c_mostrar[4] ?>" readonly>
                    <div class="form-text"> &nbsp;&nbsp; Não é possível alterar email...</div>
                  </div>

                  <br>

                  <div class="mb-1">
                    <b> &nbsp; Senha: </b> <input name="txtSenhaCli"
                      placeholder="<?php echo $c_mostrar[5] ?>"
                      type="password" class="form-control" style="width: 75%;" id="InputSenha1"
                      value="<?php echo $c_mostrar[5] ?>" readonly>
                    <div class="form-text"> &nbsp;&nbsp; Não é possível alterar senha...</div>
                  </div>

                  <?php

            }

          ?>

                  <br>


                  <center><button name="btnAlterar" type="submit" class="button btn btn-outline-danger" role="button"
                      onclick="location.href='minhaConta.php'">Alterar Dados</button>
                    &nbsp; <button class="button btn btn-outline-danger" href="minhaConta.php"
                      onclick="location.href='minhaConta.php'"> Voltar </button>


                </form>

                </p>


                <br>


              </div>

            </div>

          </div>

        </div>

        <div class="collapse" id="MinhasReservas">

          <div class="card border-0">

            <div class="card-body">

              <center>
                <h1 id="fontePompiere">
                  <font color="red"> Histórico de Reservas </font>
                </h1>

                <br>

                <a type="button" class="button btn btn-outline-danger" href="CadastrarReserva.php">Nova Reserva</a>

                <br>
                <br>

                <br>

                <h3 id="fontePompiere">
                  <font color="red"> Reservas de Mesa </font>
                </h3>

                <?php

                $AtualCodCli = $c->getCodCliente();

          include_once "..\Models\ReservaMesa.php";
          $rm = new ReservaMesa();
          $rm->setCodCli($AtualCodCli);
          $rm_bd= $rm->ConsultarReservaMesa();

          foreach ($rm_bd as $rm_mostrar) {
              ?>

                <button type="button" style="width: 95%;" class="button-reserva btn btn-success"
                  data-bs-toggle="collapse"
                  data-bs-target="<?php echo '#Reserva'.$rm_mostrar[0]?>"
                  aria-expanded="false"
                  aria-controls="<?php echo 'Reserva'.$rm_mostrar[0]?>">
                  Reserva <?php echo $rm_mostrar[0]?></button>

                <div class="collapse"
                  id="<?php echo 'Reserva'.$rm_mostrar[0]?>">

                  <div class="card border-0">

                    <div class="card-body">

                      <br>

                      <h3> <?php echo $rm_mostrar[2]?> </h3>



                       <br>
                      Dia e Horário: <?php echo $rm_mostrar[3]?> às
                      <?php echo $rm_mostrar[4]?>

                    </div>

                  </div>

                </div>
                <br><br>

                <?php

          }

          ?>

                <h3 id="fontePompiere">
                  <font color="red"> Reservas de Espaço </font>
                </h3>

                <?php

                $AtualCodCli = $c->getCodCliente();

          include_once "..\Models\ReservaEspaco.php";
          $rm = new ReservaEspaco();
          $rm->setCodCliente($AtualCodCli);
          $rm_bd= $rm->ConsultarResEspCodCli();

          foreach ($rm_bd as $rm_mostrar) {
              ?>

                <button type="button" style="width: 95%;" class="button-reserva btn btn-success"
                  data-bs-toggle="collapse"
                  data-bs-target="<?php echo '#ReservaEsp'.$rm_mostrar[0]?>"
                  aria-expanded="false"
                  aria-controls="<?php echo 'ReservaEsp'.$rm_mostrar[0]?>">
                  Reserva <?php echo $rm_mostrar[0]?></button>

                <div class="collapse"
                  id="<?php echo 'ReservaEsp'.$rm_mostrar[0]?>">

                  <div class="card border-0">

                    <div class="card-body">

                      <br>

                      <h3> <?php echo $rm_mostrar[3]?> </h3>

                      <?php

                        $IdEspaco = $rm_mostrar[2];

              include_once "..\Models\\espaco.php";
              $e = new Espaco();
              $e->setIdEspaco($IdEspaco);
              $espaco= $e->ConsultarEspaco();

              foreach ($espaco as $esp) {
                  ?>
                      Tipo de Reserva: <?php echo $esp[1];
              }?> <br>
                      Dia e Horário: <?php echo $rm_mostrar[4]?> às
                      <?php echo $rm_mostrar[5]?>

                      <br>
                      <br>

                      Tema: <?php echo $rm_mostrar[6]?>

                      <br>
                      <br>
                      <br>

                      <div class="container-fluid text-white">
                        <div class="listaConvidados" id="ListaDeConvidados">

                          <h5><b> Lista de Convidados </b></h5> <br>

                          <?php

                      $Res = $rm_mostrar[0];

              include_once "..\Models\convite.php";
              $conv = new Convite();
              $conv->setIdReservaEspaco($Res);
              $convite= $conv->ConsultarConvite();

              foreach ($convite as $convi) {
                  include_once "..\Models\convidados.php";
                  $IdCvvd = $convi[0];
                  $cvdd = new Convidado();
                  $cvdd->setIdConvidado($IdCvvd);
                  $convidados= $cvdd->ConsultarConvidados();

                  foreach ($convidados as $convidado) {
                      ?>

                          <p> • <?php echo $convidado[1]?> </p>

                          <?php

                  }
              }
              ?>

                          <br>
                        </div>
                      </div>

                    </div>

                  </div>

                </div>
                <br><br>

                <?php

          }

          ?>

              </center>

            </div>

          </div>

        </div>

      </div>


      <?php

      }

  ?>

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