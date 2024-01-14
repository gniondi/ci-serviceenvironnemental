<?php
// Ouvrir la session
session_start();
include 'connection.php';
// include 'session.php';

?>


<?php
//Connection

if (isset($_POST['Connection'])) {
    $matricule = addslashes($_POST['matricule']);
    $mot_de_passe = md5(addslashes($_POST['mot_de_passe']));

    //check user
    $check = "SELECT * FROM utilisateurs WHERE matricule ='$matricule' AND mot_de_passe = '$mot_de_passe' ";
    $result = mysqli_query($conn, $check);
    $nombre = mysqli_num_rows($result);
    //a = 2
    //si a = 0 display 5 sinon display 4

    if ($nombre == 1) {
      //aller à la page 
      $row = mysqli_fetch_assoc($result);
      $id = $row['id_utilisateur']; 
      

     //Création de la session
    $_SESSION["id_utilisateur"] = $id;
      header('Location: index.php');
  } else {
      //afficher message d'erreure
      echo "mot de passe eronné";
    }
  }

  //fin login
  mysqli_close($conn);
  
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <title>ci-serviceenvironnemental</title>
  <style type="text/css">
    form{
        padding: 10px;
        background-color: rgb(245,245,245);
        padding: 10px;
        border-radius: 7px 7px 0px 0px;
        display: inline-block;
        box-shadow: 0px 2px 6px rgba(32,32,32,0.5); 
 }
 form table td {
    padding: 5px 10px;
}

input[type="text"],input[type="email"],input[type="password"],input[type="tel"],input[type="date"],select{
    width: 300px;
    height: 30px;
    border-radius: 7px;
    border: none;
    padding-left: 5px;
}
input[type="reset"],input[type="submit"]{
    background-color: rgb(0,0,150);
    color: white;
    border: none;
    border-radius: 7px;
    padding: 5px 10px;
    transition: all 0.5s;
}
input[type="reset"]{
    background-color: red;
}
input[type="reset"]:hover,input[type="submit"]:hover{
    background-color: rgb(255,128,0);
    padding: 5px 25px;
    border-radius: 10px;
    cursor: pointer;
}
  </style>
  <!-- <link rel="shortcut icon" type="/image/jpg" href="../image/fav-Lepoint.jpg"> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap-4.4.1-dist/css/bootstrap.min.css">
  <script src="../bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<body>

<h1 style="text-decoration: underline;"><center>Connecte</center></h1>
<center>
<form method="post" action="" enctype="multipart/form-data">
<table>

    <tr>
        <!-- <td>Nom d'utilisateur</td><td><input type="text" name="nom_utilisateur" id=""></td> -->
        <td>Matricule</td><td><input type="text" name="matricule" id="" require></td>
    </tr>
    <tr>
        <td>Mot de passe</td><td><input type="password" name="mot_de_passe" id="" require></td>
    </tr>

    <tr>
        <td><input type="reset" value="Annuler" /></td><td><input type="submit" value="Se connecter" name="Connection" /></td>
        
    </tr>
    </table>
   
</form>
</center>
</body>

</html>
