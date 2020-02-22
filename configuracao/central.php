<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Tva Net Telecom - Central</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releasePs/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img id="logoTva" src="../imagens/logo3.png" alt="logo tvanet">
            </div>

            <ul class="list-unstyled components">
                <a href="central.php">
                    <p>Menu Principal</p>
                </a>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Operacional</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Assinantes</a>
                        </li>
                        <li>
                            <a href="#">Atendimentos</a>
                        </li>
                        <li>
                            <a href="#">Ordem de Serviços</a>
                        </li>
                        <li>
                            <a href="#">CEP</a>
                        </li>
                        <li>
                            <a href="#">Roteiro</a>
                        </li>
                        <li>
                            <a href="#">Agenda</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageRede" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Redes</a>
                    <ul class="collapse list-unstyled" id="pageRede">
                        <li>
                            <a href="#">Node</a>
                        </li>
                        <li>
                            <a href="#">Rede</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Financeiro</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Faturas</a>
                        </li>
                        <li>
                            <a href="#">Movimento de Carteira</a>
                        </li>
                        <li>
                            <a href="#">Contas</a>
                        </li>
                        <li>
                            <a href="#">Processamento de Arquivos</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageRh" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">RH</a>
                    <ul class="collapse list-unstyled" id="pageRh">
                        <li>
                            <a href="#">Funcionário</a>
                        </li>
                        <li>
                            <a href="#">Folha de Ponto</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageRelatorios" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Relatórios</a>
                    <ul class="collapse list-unstyled" id="pageRelatorios">
                        <li>
                            <a href="#">Assinantes</a>
                        </li>
                        <li>
                            <a href="#">Funcionários</a>
                        </li>
                        <li>
                            <a href="#">Cobranças</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageConfig" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Configuração</a>
                    <ul class="collapse list-unstyled" id="pageConfig">
                        <li>
                            <a href="usuarios.html">Usuarios</a>
                        </li>
                        <li>
                            <a href="#">Empresa</a>
                        </li>
                        <li>
                            <a href="cep.html">CEP</a>
                        </li>
                        <li>
                            <a href="lacre.html">Lacre</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageConta" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Minha Conta</a>
                    <ul class="collapse list-unstyled" id="pageConta">
                        <li>
                            <a href="../minhaconta/meusdados.html">Meus Dados</a>
                        </li>
                        <li>
                            <a href="../minhaconta/dadosAcessos.html">Dados de Acessos</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <hr id="linhaMenu">
            <button id="btnSair" class="btn btn-danger">Sair</button>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span><img id="logoMenu" src="../imagens/menu.png" alt=""></span>
                    </button>

                    <strong class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active ">
                            <p id="nomeUsuario">Seja Bem vindo <strong>Jeff<strong></p>
                        </li>
                        <li class="nav-item active ">
                            <select class="form-control" style="width: 350px; margin-right: 25px;">
                                <option value="9"><strong>FILIAL - </strong>TVANET TELECOM - SERRINHA</option>
                    <option value="4"><strong>FILIAL - </strong>TVANET TELECOM - ANDARAÍ</option>
                    </select>
                    </li>
                    </ul>
                </div>
            </nav>
            <div class="container ">
            </div>
        </div>
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

        <script type="text/javascript ">
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                // convert selects already on the page at dom load
                $('select.form-control').combobox();

                $('#it').click(function(e) {
                    $('ul.dropdown-menu').toggle();
                });

                //  $('input').focus(function(e){
                //    $('ul.dropdown-menu').toggle();
                //  });

            });
        </script>
</body>

</html>