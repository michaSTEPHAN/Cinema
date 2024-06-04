<?php
    ob_start();
?>

<div class="liste_acteurs">
    <?php foreach ($requete->fetchAll() as $acteur) { ?>
        <figure>
            <img class="img_acteur" src="<?= $acteur['photo_individu'] ?>">
            <figcaption class="nom_acteur"><?= $acteur["prenom_individu"] ?> <?= $acteur["nom_individu"] ?></figcaption>
        </figure> 
    <?php } ?>    
</div>

<?php  
    $titre = "Liste des acteurs";
    $titre_secondaire = "Liste des acteurs";
    $contenu = ob_get_clean();
    require "view/template.php";
?>