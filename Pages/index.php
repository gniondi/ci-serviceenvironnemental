<?php
// Ouvrir la session
session_start();

// include 'session.php';

include 'connection.php';
?>

<?php
// District Nom_projet	Region	Departement	Sous_prefecture	Localite	Statut_expertise_agricole	Statut_rapport_final	Statut_des_indemnisations	Equipe	Date_enregistrement	Heure_enregistrement id_utilisateur

if (isset($_POST['Enregistrer_rapport'])) {
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
    
   


    $check = "SELECT * FROM serviceenvironnemental WHERE Nom_projet ='$nom_projet'";
    $result = mysqli_query($conn, $check);
    $nombre = mysqli_num_rows($result);



if ($nombre == 0) {
    //insertion
    $sql = "INSERT INTO serviceenvironnemental (Nom_projet,District,Region,Departement,Sous_prefecture,Localite,Statut_expertise_agricole,Statut_rapport_final,Statut_des_indemnisations,Equipe,Date_enregistrement,Heure_enregistrement)
            VALUES ('$nom_projet','$district','$region','$departement','$sous_prefecture','$localite','$statut_expertise_agricole','$statut_rapport_final','$statut_des_indemnisations','$equipe','$date_inscription','$heure_inscription')";

    if (mysqli_query($conn, $sql)) {
      echo("
      <div class='alert alert-success'>
  <strong>Félicitations!</strong> Rapport enregistré avec succes.
</div>
      ") ;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  } else {
    echo 'Ce rapport existe déjà ';
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>ci-serviceenvironnemental</title>
  <style type="text/css">
    form{
        padding: 10px;
        background-color: rgb(245,245,245);
        
        border-radius: 7px 7px 0px 0px;
        display: inline-block;
        box-shadow: 0px 2px 6px rgba(32,32,32,0.5); 
 }
 form table td {
    padding: 5px 10px;
}

input[type="text"],input[type="email"],input[type="password"],input[type="tel"],input[type="date"],select{
    width: 350px;
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

<link rel="stylesheet" href="../bootstrap-5.2.3/bootstrap-5.2.3-dist/css/bootstrap.min.css">
<script src="../bootstrap-5.2.3/bootstrap-5.2.3-dist/js/bootstrap.bundle.js"></script>
<link rel="stylesheet" href="../fonts/css/all.css">

 
  
</head>
<body>


<?php
include 'navbar.php';

?>



<h1 style="
text-decoration: underline; paddin: top 24px; margin-top: 20px;"><center>Formulaire d'enregistrement des rapports</center></h1>
<center>
<form method="post" action="" style="margin-top: 20px;">


<table>
    <tr>
        <td>Intitulé du projet</td><td><input type="text" name="nomprojet" id="" placeholder="Entrer le nom du projet" require></td>
    </tr>
   
   
    <tr>
        <td>Districts</td>
        <td>
            <select name="district" id="" require>
            <option selected>Sélectionner un district</option>
            <option value="Abidjan">Abidjan</option>
            <option value="Bas-Sassandra">Bas-Sassandra</option>
            <option value="Comoe">Comoe</option>
            <option value="Denguelé">Denguelé</option>
            <option value="Gôh-Djiboua">Gôh-Djiboua</option>
            <option value="Haut-Sassandra-Marahoué">Haut-Sassandra-Marahoué</option>
            <option value="Lacs">Lacs</option>
            <option value="Lagunes">Lagunes</option>
            <option value="Montagnes">Montagnes</option>
            <option value="Savanes">Savanes</option>
            <option value="Vallée-Bandama">Vallée-Bandama</option>
            <option value="Yamoussoukro">Yamoussoukro</option>
            <option value="Woroba">Woroba</option>
            <option value="Zanzan">Zanzan</option>
            </select>
        </td>
    </tr>

    <tr>
        <td>Régions</td>
        <td>
            <select name="region" id="" require>
            <option selected>Sélectionner une région</option>
            <option value="Agneby_Tiassa">Agneby Tiassa</option>
            <option value="Bafing">Bafing</option>
            <option value="Bagoue">Bagoue</option>
            <option value="Belier">Bélier</option>
            <option value="Bere">Bere</option>
            <option value="Bounkani">Bounkani</option>
            <option value="Cavally">Cavally</option>
            <option value="Folon">Folon</option> 
            <option value="Grand-Ponts">Grand-Ponts</option>
            <option value="Gbêke">Gbêke</option>
            <option value="Gbokle">Gbokle</option>
            <option value="Goh">Goh</option>
            <option value="Gontougo">Gontougo</option> 
            <option value="Guemon">Guemon</option>
            <option value="Hambol">Hambol</option> 
            <option value="Haut Sassandra">Haut Sassandra</option>
            <option value="Indénié-Djuablin">Indénié-Djuablin</option>  
            <option value="Iffou">Iffou</option>    
            <option value="Kabadougou">Kabadougou</option>
            <option value="Lame">LA ME</option>
            <option value="Loh-Djiboua">Loh-Djiboua</option> 
            <option value="Marahoue">Marahoue</option>
            <option value="Morono">Moronou</option>  
            <option value="Nzi">N’zi</option>
            <option value="Nawa">Nawa</option> 
            <option value="Poro">Poro</option>
            <option value="Sud-Comoe">Sud-Comoe</option>
            <option value="San-Pedro">San-Pedro</option>
            <option value="Tchologo">Tchologo</option>
            <option value="Tonkpi">Tonkpi</option>
            <option value="Worodougou">Worodougou</option>
            </select>
        </td>
    </tr>
    
    <tr>
        <td>Départements</td>
        <td>
            <select name="departement" id="" require>
                <option selected>Sélectionner un département</option>
                <option value="Abengourou">Abengourou</option>
                <option value="Abidjan">Abidjan</option>
                <option value="Aboisso">Aboisso</option>
                <option value="Adiaké">Adiaké</option>
                <option value="Adzopé">Adzopé</option>
                <option value="Agboville">Agboville</option>
                <option value="Agnibilekrou">Agnibilékrou</option>
                <option value="Akoupé">Akoupé</option>
                <option value="Alépé">Alépé</option>
                <option value="Arrah">Arrah</option>
                <option value="Attiégouakro">Attiégouakro</option>
                <option value="Bangolo">Bangolo</option>
                <option value="Béoumi">Béoumi</option>
                <option value="Bettié">Bettié</option>
                <option value="Biankouma">Biankouma</option>
                <option value="Bloléquin">Bloléquin</option>
                <option value="Bocanda">Bocanda</option>
                <option value="Bondoukou">Bondoukou</option>
                <option value="Bongouanou">Bongouanou</option>
                <option value="Bonon">Bonon</option>
                <option value="Botro">Botro</option>
                <option value="Bouaflé">Bouaflé</option>
                <option value="Bouaké">Bouaké</option>
                <option value="Bouna">Bouna</option>
                <option value="Boundiali">Boundiali</option>
                <option value="Buyo">Buyo</option>
                <option value="Dabakala">Dabakala</option>
                <option value="Dabou">Dabou</option>
                <option value="Daloa">Daloa</option>
                <option value="Danané">Danané</option>
                <option value="Daoukro">Daoukro</option>
                <option value="Dianra">Dianra</option>
                <option value="Didiévi">Didiévi</option>
                <option value="Dikodougou">Dikodougou</option>
                <option value="Dimbokro">Dimbokro</option>
                <option value="Divo">Divo</option>
                <option value="Djékanou">Djékanou</option>
                <option value="Doropo">Doropo</option>
                <option value="Duékoué">Duékoué</option>
                <option value="Facobly">Facobly</option>
                <option value="Ferkessédougou">Ferkessédougou</option>
                <option value="Fresco">Fresco</option>
                <option value="Gagnoa">Gagnoa</option>
                <option value="Gbéléban">Gbéléban</option>
                <option value="Gohitafla">Gohitafla</option>
                <option value="Grand-Bassam">Grand-Bassam</option>
                <option value="Grand-Lahou">Grand-Lahou</option>
                <option value="Guéyo">Guéyo</option>
                <option value="Guiglo">Guiglo</option>
                <option value="Guitry">Guitry</option>
                <option value="Issia">Issia</option>
                <option value="Jacqueville">Jacqueville</option>
                <option value="Kani">Kani</option>
                <option value="Kaniasso">Kaniasso</option>
                <option value="Katiola">Katiola</option>
                <option value="Kong">Kong</option>
                <option value="Korhogo">Korhogo</option>
                <option value="Koro">Koro</option>
                <option value="Kouassi-Kouassikro">Kouassi-Kouassikro</option>
                <option value="Kouibly">Kouibly</option>
                <option value="Kounahiri">Kounahiri</option>
                <option value="Koun-Fao">Koun-Fao</option>
                <option value="Kouto">Kouto</option>
                <option value="Lakota">Lakota</option>
                <option value="M'Bahiakro">M’Bahiakro</option>
                <option value="M'Batto">M’Batto</option>
                <option value="M'Bengué">M’Bengué</option>
                <option value="Madinani">Madinani</option>
                <option value="Man">Man</option>
                <option value="Mankono">Mankono</option>
                <option value="Méagui">Méagui</option>
                <option value="Minignan">Minignan</option>
                <option value="Nassian">Nassian</option>
                <option value="Niakaramadougou">Niakaramadougou</option>
                <option value="Odienné">Odienné</option>
                <option value="Ouangolodougou">Ouangolodougou</option>
                <option value="Ouaninou">Ouaninou</option>
                <option value="Ouellé">Ouellé</option>
                <option value="Oumé">Oumé</option>
                <option value="Prikro">Prikro</option>
                <option value="Sakassou">Sakassou</option>
                <option value="Samatiguila">Samatiguila</option>
                <option value="Sandégué">Sandégué</option>
                <option value="San-Pédro">San-Pédro</option>
                <option value="Sassandra">Sassandra</option>
                <option value="Séguéla">Séguéla</option>
                <option value="Séguélon">Séguélon</option>
                <option value="Sikensi">Sikensi</option>
                <option value="Sinématiali">Sinématiali</option>
                <option value="Sinfra">Sinfra</option>
                <option value="Sipilou">Sipilou</option>
                <option value="Soubré">Soubré</option>
                <option value="Taabo">Taabo</option>
                <option value="Tabou">Tabou</option>
                <option value="Taï">Taï</option>
                <option value="Tanda">Tanda</option>
                <option value="Téhini">Téhini</option>
                <option value="Tengréla">Tengréla</option>
                <option value="Tiapoum">Tiapoum</option>
                <option value="Tiassalé">Tiassalé</option>
                <option value="Tiébissou">Tiébissou</option>
                <option value="Touba">Touba</option>
                <option value="Toulepleu">Toulepleu</option>
                <option value="Toumodi">Toumodi</option>
                <option value="Transua">Transua</option>
                <option value="Vavoua">Vavoua</option>
                <option value="Yakassé-Attobrou">Yakassé-Attobrou</option>
                <option value="Yamoussoukro">Yamoussoukro</option>
                <option value="Zouan-Hounien">Zouan-Hounien</option>
                <option value="Zoukougbeu">Zoukougbeu</option>
                <option value="Zuénoula">Zuénoula</option>
                
            </select>
        </td>
    </tr>

    <tr>
        <td>Sous-préfectures</td><td><input type="text" name="sous-prefecture" id="" placeholder="Entrer la Sous-préfecture" require></td>
    </tr>

    <tr>
        <td>Localités</td><td><input type="text" name="localite" id="" placeholder="Entrer la localité" require></td>
    </tr>

    <tr>
        <td>Statut expertises agricoles</td>
        <td> 
            <select name="statutexpertiseagricole" id="" require>
            <option selected>Sélectionner le statut de l'expertise</option>
            <option value="Realisées">Réalisées</option>
            <option value="En cours">En cours</option>
            <option value="Non Réalisées">Non Réalisées</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Statut rapport final</td>
        <td>
            <select name="statutrapportfinal" id="" require>
            <option selected>Sélectionner le statut du rapport final</option>
            <option value="Disponible">Disponible</option>
            <option value="Non Disponible">Non Disponible</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Statut des indemnisations</td>
        <td> 
            <select name="statutindemnisation" id="">
                <option selected>Sélectionner le statut des indemnisations</option>
                <option value="Paye">Payé</option>
                <option  value="En attente du fichier excel">En attente du fichier excel</option>
                <option  value="En attente du mémo">En attente du mémo</option>
                <option value="Chèques en élaboration">Chèques en élaboration</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Equipes</td><td><input type="text" name="equipe" id="" placeholder="Entrer le nom de l'agent" require></td>
    </tr>
    <tr>
        <td><input type="reset" value="Annuler" /></td><td><input type="submit" value="Enregistrer le rapport" name="Enregistrer_rapport" /></td>
        
    </tr>
    </table>
   
</form>

</center>

</body>

<footer></footer>
</html>
