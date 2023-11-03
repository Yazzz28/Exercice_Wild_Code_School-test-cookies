<?php
// Definition des constantes et variables
define('LOGIN', 'yazzz');
$errorMessage = '';

// Test de l'envoi du formulaire
if (!empty($_POST))
{
    // Les identifiants sont transmis ?
    if (!empty($_POST['loginname'])) 
    {
        // Sont-ils les mêmes que les constantes ?
        if ($_POST['loginname'] !== LOGIN) 
        {
            $errorMessage = 'Mauvais loginname !';
        } else 
        {
            // On ouvre la session
            session_start();
            // On enregistre le login en session
            $_SESSION['loginname'] = LOGIN;
            // On redirige vers le fichier admin.php
            header('Location: index.php');
            exit();
        }
    } else 
    {
        $errorMessage = 'Veuillez inscrire vos identifiants svp !';
    }
}

require 'inc/head.php'; ?>
<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong> Sign in to continue</strong>
                    <?php
                    // Rencontre-t-on une erreur ?
                    if (!empty($errorMessage)) {
                        echo '<p>', htmlspecialchars($errorMessage), '</p>';
                    }
                    ?>
                </div>
                <div class="panel-body">
                    <form role="form" action="" method="POST">
                        <fieldset>
                            <div class="row">
                                <div class="center-block">
                                    <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </span>
                                            <input class="form-control" placeholder="Username" name="loginname" type="text" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="panel-footer ">
                    Don't have an account ? <a href="#" onClick="">Too bad !</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'inc/foot.php'; ?>