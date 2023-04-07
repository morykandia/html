<?php
$serveur = "localhost";
$dbname = "groupe21";
$user = "groupe21";
$pass = "12345";

$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$email = $_POST["email"];
$mot_de_passe = $_POST["psw"];
$mot_de_passe = $_POST["psw-repeat"];

try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo $prenom, $nom;
           //On insère les données reçues
        $sth = $dbco->prepare("
           INSERT INTO utilisateur (prenom, nom, email,  mot_de_passe)
            VALUES(:prenom, :nom, :email, :mot_de_passe)");
        $sth->bindParam(':prenom',$prenom);
        $sth->bindParam(':nom',$nom);
        $sth->bindParam(':email',$email);
        $sth->bindParam(':mot_de_passe',$mot_de_passe);
        $sth->execute();
        //On renvoie l'utilisateur vers la page de remerciement
       // header("Location:form-merci.html");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
