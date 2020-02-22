<?php
    require_once('classes/config.php');

    if (isset($_GET['login'])=='logar'){
        /*try {
            $login= $_POST['txtLogin'];
            $senha= $_POST['txtSenha'];
            $stmt = $conn->prepare("SELECT * FROM USUARIO WHERE LOGIN = :login  AND SENHA = :senha");
            $stmt->bindParam(":login",$login);
            $stmt->bindParam(":senha",$senha);
            $stmt->execute();
            while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo $msg= "
                <div id='alert'>
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Seja Bem Vindo </strong>".$linha['NOME']." .
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                </div>";
            }
        } catch (Throwable $th) {
            echo "Error: ".$th->getMessage();
        }*/
        header('Location: configuracao/central.php');
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Tva Net Telecom</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/login.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawe,01some.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releasePs/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <?php
        //echo $msg;
    ?>
    <div class="login-page">
        <div id="logoTva">
            <img id="tva" src="imagens/logo3.png" alt="Logo Tva Net" width="180" height="55">
        </div>
        <div class="form">
            <form action="index.php?login=logar" class="login-form" method="post" name="login">
                <input id="txtLogin" name="txtLogin" type="text" placeholder="Login" />
                <input id="txtSenha" name="txtSenha" type="password" placeholder="Senha" />
                <button type="submit">Logar</button>
                <p class="message"><a href="#">Esqueçeu a senha ?</a></p>
            </form>
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
</body>

</html>