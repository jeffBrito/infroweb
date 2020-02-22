<?php
    require_once('config.php');
    require_once('../index.php');
    $msg='';
    try {
        $login= $_POST['txtLogin'];
        $senha= $_POST['txtSenha'];
        $stmt = $conn->prepare("SELECT * FROM USUARIO WHERE LOGIN = :login  AND SENHA = :senha");
        $stmt->bindParam(":login",$login);
        $stmt->bindParam(":senha",$senha);
        $stmt->execute();
        if ($stmt->rowCount()>0){
            while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
               $_SESSION['LOGIN']=$login;
               header('Location: ../configuracao/central.php');
               exit;
            }
        }else{
            $msg= "<div id='alert'>
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Usuario ou Senha Inválido</strong> Favor informar Login ou Senha válido.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                 </div>";
            header('Location: ../index.php');
            exit;
        }
    } catch (Throwable $th) {
        echo "Error: ".$th->getMessage();
    }
    