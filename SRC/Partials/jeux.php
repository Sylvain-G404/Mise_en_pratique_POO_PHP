<?php

// Instanciation de la classe
$usine = new Usine(
    $id,
    $nomProd,
    $numProd,
    $tempProd,
    $coutProd,
    $prixUnite,
    $materiauRequi_id,
    $materiauRequiQuantite,
    $inventaire,
    $active
);

// Affichage des données
echo "ID: " . $usine->getId() . "<br>";
echo "Nom du produit: " . $usine->getNomProd() . "<br>";
echo "Numéro de produit: " . $usine->getNumProd() . "<br>";
echo "Temps de production: " . $usine->getTempProd() . "<br>";
echo "Coût de production: " . $usine->getCoutProd() . "<br>";
echo "Prix par unité: " . $usine->getPrixUnite() . "<br>";
echo "ID Matériau requis: " . $usine->getMateriauRequi_id() . "<br>";
echo "Quantité de matériau requis: " . $usine->getMateriauRequiQuantite() . "<br>";
echo "Inventaire: " . $usine->getInventaire() . "<br>";
echo "Active: " . ($usine->getActive() ? "Oui" : "Non") . "<br>";
?>
<table>
    <tbody>

        <?php foreach ($usines as $usine) { ?>
            <tr>
                <td><span id="nomProd"><?= $usine["nomProd"]; ?></span></td>
                <td><span id="numProd"><?= $usine["numProd"]; ?></span></td>
                <td><span id="rebour"><?= $usine['tempProd']; ?></span></td>
                <td><span id="cout"><?= $usine['coutProd']; ?></span></td>
                <td><span id="prix"><?= $usine['prixUnite']; ?></span></td>
                <td><span id="quantiteRequi"><?= $usine['materiauRequiQuantite']; ?></span></td>
                <td><span id="stock"><?= $usine['inventaire']; ?></span></td>
            </tr>
        <?php } ?>
    </tbody>
</table>