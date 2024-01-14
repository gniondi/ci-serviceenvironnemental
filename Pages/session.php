

<?php
if(isset($_SESSION["id_utilisateur"])){
    $id_session_sauv = $_SESSION["id_utilisateur"];
    //Information utilisateurs
    $check = "SELECT * FROM utilisateurs WHERE id_utilisateur ='$id_session_sauv'";
    $result = mysqli_query($conn, $check);// execution requet check
    $nombre =  mysqli_num_rows($result);// nombre de resultat
    $row = mysqli_fetch_assoc($result);// sauv information des champs de la table dans row
    $id = $row['id_utilisateur'];
    $matricule = $row['matricule'];
    $nom = $row['nom'];
    $prenom = $row['prenom'];
    $nom_utilisateur = $row['nom_utilisateur'];
    $date_inscription = $row['date_inscription'];
    $heure_inscription = $row['heure_inscription'];

    // echo 'WELCOME!!! '.$nom.'<br>';

}else{
    header('Location: connecte.php');
}

?>