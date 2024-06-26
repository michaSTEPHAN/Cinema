<?php
    ob_start();
    $nomRealisateur = $realisateurAModifier->fetch();    
?>

<form action="index.php?action=updRealisateur&id=<?= $_GET["id"] ?>" method="POST" enctype="multipart/form-data">
    <p class="labnomGenre">
        <p class="lab1">
            <label>
                Prénom :
                <input type="text" name="prenomRea" value="<?php echo $nomRealisateur['prenom_individu'] ?>">
            </label>
        </p>
        <p class="lab2">
            <label>
                Nom :
                <input type="text" name="nomRea" value="<?php echo $nomRealisateur['nom_individu'] ?>">
            </label>
        </p>
        <p class="lab3">
            <label>
                Sexe :
                <input type="text" name="sexeRea" value="<?php echo $nomRealisateur['sexe_individu'] ?>">
            </label>
        </p>
        <p class="lab4">
            <label>
                Date de naissance :
                <input type="date" name="dateNaissRea" value="<?php echo $nomRealisateur['date_naissance_individu'] ?>">
            </label> 
        </p>        
    </p>
    <p class= "UpdRealisateur">
        <input class= "submitUpdRealisateur" type="submit" name="submit" value="Modifier le réalisateur">
    </p>
</form>

<?php
    $titre = "Modifier le réalisateur ".$nomRealisateur['prenom_individu']." ".$nomRealisateur['nom_individu'];
    $titre_secondaire = "Modifier le réalisateur ".$nomRealisateur['prenom_individu']." ".$nomRealisateur['nom_individu'];
    $contenu = ob_get_clean();
    require "view/template.php";
?>