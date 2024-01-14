

<?php
if(isset($_SESSION["Id"])){
    $id_session_sauv = $_SESSION["Id"];
    //Information utilisateurs
    $check = "SELECT * FROM serviceenvironnemental WHERE Id ='$id_session_sauv'";
    $result = mysqli_query($conn, $check);// execution requet check
    $nombre =  mysqli_num_rows($result);// nombre de resultat
    $row = mysqli_fetch_assoc($result);// sauv information des champs de la table dans row
    $id = $row['Id'];
    $nom_projet = addslashes($_POST['nomprojet']);
    $district = addslashes($_POST['district']);
    $region = addslashes($_POST['region']);
    $departement = addslashes($_POST['departement']);
    $sous_prefecture = addslashes($_POST['sous-prefecture']);
    $localite = addslashes($_POST['localite']);
    $statut_expertise_agricole = addslashes($_POST['statutexpertiseagricole']);
    $statut_rapport_final = addslashes($_POST['statutrapportfinal']);
    $statut_des_indemnisations = addslashes($_POST['statutindemnisation']);
    $equipe = addslashes($_POST['equipe']);

    // echo 'WELCOME!!! '.$nom.'<br>';

}else{
    header('Location: connecte.php');
}

?>