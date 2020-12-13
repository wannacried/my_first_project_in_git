<?php
    if(isset($_POST['login']) AND isset($_POST['mdp'])){
        $login = strip_tags($_POST['login']);
        $mdp = strip_tags($_POST['mdp']);
        if($login == 'admin' AND $mdp == 'root'){
            header('location:../pages/accueil.php');
        }
        else{
            header('location:../pages/index.php');
        }
    }
?>