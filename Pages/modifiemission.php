<?php
// Ouvrir la session
session_start();

// include 'session.php';

include 'connection.php';
?>

<?php
// District Nom_projet	Region	Departement	Sous_prefecture	Localite	Statut_expertise_agricole	Statut_rapport_final	Statut_des_indemnisations	Equipe	Date_enregistrement	Heure_enregistrement id_utilisateur

$id= $_GET["id"]; 
if (isset($_POST['Modifier_rapport'])) {
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
    $sql = "UPDATE serviceenvironnemental SET Nom_projet='$nom_projet',District='$district',Region='$region',Departement='$departement',Sous_prefecture='$sous_prefecture',Localite='$localite',Statut_expertise_agricole='$statut_expertise_agricole',Statut_rapport_final='$statut_rapport_final',Statut_des_indemnisations='$statut_des_indemnisations',Equipe='$equipe,Date_enregistrement='$date_inscription',Heure_enregistrement='$heure_inscription'  WHERE id='$id ";
         if (mysqli_query($conn, $sql)) {
      echo("
      <div class='alert alert-success'>
  <strong>Félicitations!</strong> Rapport modifié avec succes.
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
        <td>Nom du projet</td><td><input type="text" name="nomprojet" id="" placeholder="Entrer le nom du projet"></td>
    </tr>
   
   
    <tr>
        <td>District</td>
        <td>
            <select name="district" id="">
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
        <td>Région</td>
        <td>
            <select name="region" id="">
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
        <td>Département</td>
        <td>
            <select name="departement" id="">
                <option selected>Sélectionner un département</option>
                <option value="Abengourou">Abengourou</option>
                <option value="Abidjan">Abidjan</option>
                <option value="Aboisso">Aboisso</option>
                <option value="Adiake">Adiaké</option>
                <option value="Adzope">Adzopé</option>
                <option value="Agboville">Agboville</option>
                <option value="Agnibilekrou">Agnibilékrou</option>
                <option value="Akoupe">Akoupé</option>
                <option value="Alepe">Alépé</option>
                <option value="Arrah">Arrah</option>
                <option value="Attiegouakro">Attiégouakro</option>
                <option value="Bangolo">Bangolo</option>
                <option value="Beoumi">Béoumi</option>
                <option value="Bettie">Bettié</option>
                <option value="Biankouma">Biankouma</option>
                <option value="Blolequin">Bloléquin</option>
                <option value="Bocanda">Bocanda</option>
                <option value="Bondoukou">Bondoukou</option>
                <option value="Bongouanou">Bongouanou</option>
                <option value="Bonon">Bonon</option>
                <option value="Botro">Botro</option>
                <option value="Bouafle">Bouaflé</option>
                <option value="Bouake">Bouaké</option>
                <option value="Bouna">Bouna</option>
                <option value="Boundiali">Boundiali</option>
                <option value="Buyo">Buyo</option>
                <option value="Dabakala">Dabakala</option>
                <option value="Dabou">Dabou</option>
                <option value="Daloa">Daloa</option>
                <option value="Danane">Danané</option>
                <option value="Daoukro">Daoukro</option>
                <option value="Dianra">Dianra</option>
                <option value="Didievi">Didiévi</option>
                <option value="Dikodougou">Dikodougou</option>
                <option value="Dimbokro">Dimbokro</option>
                <option value="Divo">Divo</option>
                <option value="Djekanou">Djékanou</option>
                <option value="Doropo">Doropo</option>
                <option value="Duekoue">Duékoué</option>
                <option value="Facobly">Facobly</option>
                <option value="Ferkessedougou">Ferkessédougou</option>
                <option value="Fresco">Fresco</option>
                <option value="Gagnoa">Gagnoa</option>
                <option value="Gbeleban">Gbéléban</option>
                <option value="Gohitafla">Gohitafla</option>
                <option value="Grand-Bassam">Grand-Bassam</option>
                <option value="Grand-Lahou">Grand-Lahou</option>
                <option value="Gueyo">Guéyo</option>
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
                <option value="MBahiakro">M’Bahiakro</option>
                <option value="MBatto">M’Batto</option>
                <option value="MBengue">M’Bengué</option>
                <option value="Madinani">Madinani</option>
                <option value="Man">Man</option>
                <option value="Mankono">Mankono</option>
                <option value="Meagui">Méagui</option>
                <option value="Minignan">Minignan</option>
                <option value="Nassian">Nassian</option>
                <option value="Niakaramadougou">Niakaramadougou</option>
                <option value="Odienne">Odienné</option>
                <option value="Ouangolodougou">Ouangolodougou</option>
                <option value="Ouaninou">Ouaninou</option>
                <option value="Ouelle">Ouellé</option>
                <option value="Oume">Oumé</option>
                <option value="Prikro">Prikro</option>
                <option value="Sakassou">Sakassou</option>
                <option value="Samatiguila">Samatiguila</option>
                <option value="Sandegue">Sandégué</option>
                <option value="San-Pedro">San-Pédro</option>
                <option value="Sassandra">Sassandra</option>
                <option value="Seguela">Séguéla</option>
                <option value="Seguelon">Séguélon</option>
                <option value="Sikensi">Sikensi</option>
                <option value="Sinematiali">Sinématiali</option>
                <option value="Sinfra">Sinfra</option>
                <option value="Sipilou">Sipilou</option>
                <option value="Soubre">Soubré</option>
                <option value="Taabo">Taabo</option>
                <option value="Tabou">Tabou</option>
                <option value="Taï">Taï</option>
                <option value="Tanda">Tanda</option>
                <option value="Tehini">Téhini</option>
                <option value="Tengrela">Tengréla</option>
                <option value="Tiapoum">Tiapoum</option>
                <option value="Tiassale">Tiassalé</option>
                <option value="Tiebissou">Tiébissou</option>
                <option value="Touba">Touba</option>
                <option value="Toulepleu">Toulepleu</option>
                <option value="Toumodi">Toumodi</option>
                <option value="Transua">Transua</option>
                <option value="Vavoua">Vavoua</option>
                <option value="Yakasse-Attobrou">Yakassé-Attobrou</option>
                <option value="Yamoussoukro">Yamoussoukro</option>
                <option value="Zouan-Hounien">Zouan-Hounien</option>
                <option value="Zoukougbeu">Zoukougbeu</option>
                <option value="Zuenoula">Zuénoula</option>
                
            </select>
        </td>
    </tr>

    <tr>
        <td>Sous-préfecture</td><td><input type="text" name="sous-prefecture" id="" placeholder="Entrer la Sous-préfecture"></td>
    </tr>

    <tr>
        <td>Localité</td><td><input type="text" name="localite" id="" placeholder="Entrer la localité"></td>
    </tr>

    <tr>
        <td>Statut expertise agricole</td>
        <td> 
            <select name="statutexpertiseagricole" id="">
            <option selected>Sélectionner le statut de l'expertise</option>
            <option value="Realise">Réalisé</option>
            <option value="En cours">En cours</option>
            <option value="Non Realise">Non Realisé</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Statut rapport final</td>
        <td>
            <select name="statutrapportfinal" id="">
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
                <option  value="En attente">En attente du fichier excel</option>
                <option value="En elaboration">chêque en élaboration</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Equipe</td><td><input type="text" name="equipe" id="" placeholder="Entrer le nom de l'agent"></td>
    </tr>
    <tr>
        <td><input type="reset" value="Annuler" /></td><td><input type="submit" value="modifier le rapport" name="Modifier_rapport" /></td>
        
    </tr>
    </table>
   
</form>
</center>
</body>

<footer></footer>
</html>
