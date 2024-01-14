<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../bootstrap-5.2.3/bootstrap-5.2.3-dist/css/bootstrap.min.css">
  <script src="../bootstrap-5.2.3/bootstrap-5.2.3-dist/js/bootstrap.bundle.js"></script>
  <link rel="stylesheet" href="../fonts/css/all.css">
  <title>ci-serviceenvironnemental</title>
</head>





<body>


<?php
include 'navbar.php';

?>



<h1 style="text-decoration: underline; margin-top: 8px;"><center>liste des rapports de mission </center></h1>
<div class="container mt-4">

<?php

if(isset($_GET['msg'])){
  $msg = $_GET['msg'];
echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
 '.$msg.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>        <div class="col-md-12">
                    
                    <?php
                    include 'connection.php';
                    $sql= "SELECT * FROM serviceenvironnemental";
                    $result = mysqli_query($conn,$sql);
                    ?>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                      <table class='table table-bordered'>
                      
                      <tr>
                        <td>N°</td>
                        <td>Intitulé du projet</td>
                        <td>Districts</td>
                        <td>Régions</td>
                        <td>Départements</td>
                        <td>Sous-préfectures</td>
                        <td>Localités</td>
                        <td>Statut expertises agricoles</td>
                        <td>Statut rapport final</td>
                        <td>Statut indemnisations</td>
                        <td>Equipes</td>
                        <td>Actions</td>
                      </tr>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["Id"]; ?></td>
                        <td><?php echo $row["Nom_projet"]; ?></td>
                        <td><?php echo $row["District"]; ?></td>
                        <td><?php echo $row["Region"]; ?></td>
                        <td><?php echo $row["Departement"]; ?></td>
                        <td><?php echo $row["Sous_prefecture"]; ?></td>
                        <td><?php echo $row["Localite"]; ?></td>
                        <td><?php echo $row["Statut_expertise_agricole"]; ?></td>
                        <td><?php echo $row["Statut_rapport_final"]; ?></td>
                        <td><?php echo $row["Statut_des_indemnisations"]; ?></td>
                        <td><?php echo $row["Equipe"]; ?></td>
                        <td>
                        <a href="modifiemission.php?id=<?php echo $row["Id"]; ?>"> <i class="fa-solid fa-pen-to-square fs-5"></i></a>
                        <a href="supprimemission.php?id=<?php echo $row["Id"]; ?>"> <i class="fa-solid fa-trash "></i></a>
                      </td>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    else{
                        echo "Aucun résultat trouvé";
                    }
                    ?>
                </div>

</body>
</html>


