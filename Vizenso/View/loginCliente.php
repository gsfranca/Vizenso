<!-- Ícone -->
<link rel="icon" type="imagem/png" href="img\favicon.ico" />
<div id="cookie">

    <?php
 setcookie('CPF', $_POST['txtCPFClie'], time() + 3600);
    ?>

</div>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vizenso - Login</title>


        <link href="css/loginCliente.css" rel="stylesheet">
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

        <script src="js\loginCliente.js"></script>

    </head>

    <body>

        <!-- Navbar -->
        <nav class="navbar navbar-dark bg-dark fixed-top" style="padding: 16px" id="Navbar">
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
                        <img id="logoSidebar" src="img/LogoVizensoAberta.png" alt="logo" width="60" height="60" />&nbsp;
                        <span id="spanMenu">Menu</span>
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
                            <a class="btn border-0" id="sla" type="text" href="Reservar.php"
                                style="height: 50px; text-align: left">
                                <ion-icon name="calendar"></ion-icon>&nbsp;&nbsp;
                                <span>Reservas</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <video autoplay muted loop class="bg_video">
            <source src="img/bg/background.mp4" type="video/mp4">
        </video>



        <div class="container-fluid">

            <div class="container text-white" id="conteudoLogin">


                <form name="LoginCliente" action="" method="POST">

                    <fieldset id="a">

                        <legend>
                            <center>
                                <h1> Entre em sua conta: </h1>
                            </center>
                        </legend>

                        <div class="mb-1 d-flex align-items-center flex-column mb-3">

                            <div class="p-2">

                                <b> &nbsp; CPF: </b> <input name="txtCPFClie" placeholder="000.000.000-00" type="text"
                                    class="form-control" style="width: 100%;" id="InputCPFClie1" maxlength="14"
                                    onkeypress="return MascaraCPF(window.event.keyCode)" required>

                            </div>

                            <div class="p-2">

                                <b> &nbsp; Senha: </b> <input name="txtSenhaCli" placeholder="*********" type="password"
                                    class="form-control" style="width: 100%;" id="InputSenhaCli1" required>

                            </div>

                            <br>

                        </div>


                    </fieldset>
                    <br>

                    <center>

                        <fieldset id="b">

                            <button type="submit" class="btn button btn-light" style="height: 7%" name="btnLogar">
                                Logar
                            </button>

                        </fieldset>

                    </center>

                </form>

                <br><br>



                <?php

              extract($_POST, EXTR_OVERWRITE);
    if (isset($btnLogar)) {
        include_once '..\Models\RegistroCliente.php';
        $u = new RegistroCliente();
        $u->setCPFClie($txtCPFClie);
        $u->setSenhaCli($txtSenhaCli);
        $pro_bd=$u->Logar();

        $existe = false;
        foreach ($pro_bd as $pro_mostrar) {
            $existe = true;

            ?>
                <center>
                    <br><b>
                        <?php echo "<h1 id='fontePompiere'>Boas vindas " . $pro_mostrar[1]."!</h1>"; ?>
                    </b> <br><br>

                    <form name="LoginCliente2" action="minhaConta.php" method="POST">

                        <input name="txtCPFClie2" type="hidden"
                            value=<?php echo  $pro_mostrar[2]; ?>>

                        <button type="submit" class="btn button btn-light" style="height: 7%" name="btnEntrar"> Entrar
                        </button>

                    </form>
                </center>

                <?php
        }

        if ($existe==false) {
            return "CPF ou senha incorretos!";
        }
    }

    ?>

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
                            <h6 class="text-uppercase fw-bold mb-4"><ion-icon
                                    name="restaurant-outline"></ion-icon>&nbsp;
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
                                <a id="Desenvolvedores" href="https://github.com/AnaLuisaAugusto" class="text-reset">Ana
                                    Luisa Augusto</a>
                            </p>
                            <p>
                                <a id="Desenvolvedores" href="https://github.com/AndreiLuiz" class="text-reset">Andrei
                                    Matias</a>
                            </p>
                            <p>
                                <a id="Desenvolvedores" href="https://github.com/EGGzin0402" class="text-reset">Eliel
                                    Godoy</a>
                            </p>
                            <p>
                                <a id="Desenvolvedores" href="https://github.com/ECErick" class="text-reset">Erick
                                    Bastos</a>
                            </p>
                            <p>
                                <a id="Desenvolvedores" href="https://github.com/gios11" class="text-reset">Giovana
                                    Franca</a>
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
                            <p><ion-icon name="call-outline"></ion-icon><i class="fas fa-print me-3"></i> (11) 2756-2463
                            </p>
                            <p><ion-icon name="logo-whatsapp"></ion-icon><i class="fas fa-phone me-3"></i> +55 11
                                7004-7285 </p>
                            <p><ion-icon name="logo-instagram"></ion-icon><i class="fas fa-home me-3"></i>
                                @VizensoRstrnt</p>
                            <p><ion-icon name="logo-twitter"></ion-icon><i class="fas fa-home me-3"></i> @VizensoRstrnt
                            </p>
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