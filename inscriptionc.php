<?php


if ( !empty($_POST["nom"]) AND !empty($_POST["prenom"]) AND !empty($_POST["mail"]) AND !empty($_POST["prest"])  AND !empty ($_POST["mdp1"])  AND !empty($_POST["mdp2"]) ){
   
        require "connexion.php";
        $mysqli = connexion();

        $nom = $_POST['nom'];
        $prenom =$_POST['prenom'];
        $novoie = $_POST['novoie'];
        $namevoie = $_POST['namevoie'];
        $cp = $_POST['CP'];
        $ville = $_POST['ville'];
        $tel = $_POST['tel'];
        $bio = $_POST['bio'];
        $prest = $_POST['prest'];
        $lieu = $_POST['lieu'];
        $mail = $_POST['mail'];
        $mdp1 = $_POST['mdp1'];

        $sql = "INSERT INTO coach (nom, prenom, tel, mail, mdp) VALUES ( '$nom', '$prenom',  '$tel', '$mail', '$mdp1')";
        $res = $mysqli->query($sql);
        if (!$res){
            echo "<p> erreur </p>";

        }
        else{
            echo "<p> insertion reussi </p>";
        }
    

    $mysqli->close();
}
?>
